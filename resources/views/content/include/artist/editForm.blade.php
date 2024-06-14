<style>
    .edit-form .dropzone {
        display: flex;
        flex-wrap: wrap;
    }

    .edit-form .dropzone .dz-message {
        width: 100%;
    }
</style>

<form id="editForm{{ $artists->id }}" class="edit-form" method="POST" action="{{ route('artist.update', $artists->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="hidden-inputs">
        <input type="hidden" name="image" value="{{ $artists->image }}" data-path="{{ $artists->image }}">
    </div>
    <div class="row">
        <div class="col-lg-12 mx-auto">

            <div class="row g-3">

                <div class="col-md-12">
                    <label class="form-label" for="fullname">Gender</label>
                    <select name="gender" class="form-select">
                        <option>Select Gender</option>
                        @if ($artists->gender == 'male')
                            <option value="male" selected>Male</option>
                            <option value="female">Female</option>
                        @else
                            <option value="female" selected>Female</option>
                            <option value="male">Male</option>
                        @endif
                    </select>
                </div>

                <div class="col-md-12">
                    <label class="form-label" for="fullname">First Name</label>
                    <input type="text" id="fullname" class="form-control" placeholder="lorem" name="first_name"
                        value="{{ $artists->first_name ?? '' }}">
                </div>
                <div class="col-md-12">
                    <label class="form-label" for="fullname">Last Name</label>
                    <input type="text" id="fullname" class="form-control" placeholder="lorem" name="last_name"
                        value="{{ $artists->last_name ?? '' }}">
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="fullname">Province</label>
                    <select name="province" class="form-control province_id" id="province_id" data-url={{ url('get/city') }} value="{{ old('province_id') }}" data-selected="{{ $artists->city_id }}">
                        <option value="">Select province</option>
                        @foreach($provinces as $province)
                        <option value="{{ $province->id }}" {{ $province->id == $artists->province_id? 'selected': '' }}>{{ $province->name ?? '' }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-8">
                    <label class="form-label" for="fullname">City</label>
                    <select name="city" class="form-control city_id" id="city_id">
                        <option value="">Select province</option>
                    </select>
                </div>
                {{-- <div class="col-md-12">
                    <label class="form-label" for="fullname">City</label>
                    <input type="text" id="fullname" class="form-control" placeholder="lorem" name="city" value="{{ $artists->city ?? '' }}">
                </div>
                --}}
                <div class="col-12">
                    <div class="card">
                        <h5 class="card-header">Image</h5>
                        <div class="card-body">
                            <div class="dropzone needsclick" action="/" id="dropzone-img{{ $artists->id }}">
                                <div class="dz-message needsclick">
                                    Drop files here or click to upload
                                </div>
                                <div class="fallback">
                                    <input type="file" name="image" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <label class="form-label" for="status">Status</label>
                    <select class="form-select" name="status">
                        <option selected value="">Select</option>
                        <option  value="1" {{ $artists->status == 1? 'selected': '' }}>Publish</option>
                        <option  value="0" {{ $artists->status == 0? 'selected': '' }}>UnPublish</option>
  
                    </select>

                </div>
            </div>
        </div>
    </div>
</form>


<script>
    'use strict';


    //  <div class="progress">
        // <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" data-dz-uploadprogress></div>
        //                                                     </div>

    dropZoneInitFunctions.push(function() {
        // previewTemplate: Updated Dropzone default previewTemplate

        const previewTemplate = `<div class="row">
                                            <div class="col-md-12 col-12 d-flex justify-content-center">
                                                <div class="dz-preview dz-file-preview w-100">
                                                    <div class="dz-details">
                                                        <div class="dz-thumbnail" style="width:95%">
                                                            <img data-dz-thumbnail >
                                                            <span class="dz-nopreview">No preview</span>
                                                            <div class="dz-success-mark"></div>
                                                            <div class="dz-error-mark"></div>
                                                            <div class="dz-error-message"><span data-dz-errormessage></span></div>
                                                          
                                                        </div>
                                                        <div class="dz-filename" data-dz-name></div>
                                                            <div class="dz-size" data-dz-size></div>
                                                    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>`;

        // image
        const dropzoneMulti1 = new Dropzone('#dropzone-img{{ $artists->id }}', {
            url: '{{ route('file.upload') }}',
            previewTemplate: previewTemplate,
            parallelUploads: 1,
            maxFilesize: 100,
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            sending: function(file, xhr, formData) {
                formData.append('folder', 'music');
            },
            success: function(file, response) {

                if (file.previewElement) {
                    file.previewElement.classList.add("dz-success");
                }
                file.previewElement.dataset.path = response.path;
                const hiddenInputsContainer = file.previewElement.closest('form').querySelector(
                    '.hidden-inputs');
                hiddenInputsContainer.innerHTML +=
                    `<input type="hidden" name="image" value="${response.path}" data-path="${response.path}">`;

            },
            removedfile: function(file) {
                const hiddenInputsContainer = file.previewElement.closest('form').querySelector(
                    '.hidden-inputs');
                hiddenInputsContainer.querySelector(
                    `input[data-path="${file.previewElement.dataset.path}"]`).remove();

                if (file.previewElement != null && file.previewElement.parentNode != null) {
                    file.previewElement.parentNode.removeChild(file.previewElement);
                }

                $.ajax({
                    url: '{{ route('artists.delete-img', $artists->id) }}',
                    method: 'delete',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    data: {
                        path: file.previewElement.dataset.path
                    },
                    success: function() {}
                });

                return this._updateMaxFilesReachedClass();
            }
        });

        @if($artists->image)
        $("document").ready(() => {
            var path = "{{ asset('storage/'.$artists->image) }}";
            var rpath = "{{ $artists->image }}";
            const parts = rpath.split("___");

            imageUrlToFile(path,parts).then((file) => {
                file['status'] = "success";
                file['previewElement'] = "div.dz-preview.dz-image-preview";
                file['previewTemplate'] = "div.dz-preview.dz-image-preview";
                file['_removeLink'] = "a.dz-remove";
                // file['webkitRelativePath'] = "";
                file['width'] = 500;
                file['height'] = 500;
                file['accepted'] = true;
                file['dataURL'] = path;
                file['processing'] = true;
                file['addPathToDataset'] = true;
                dropzoneMulti1.on('addedfile', function(file) {
                    if (file.addPathToDataset)
                        file.previewElement.dataset.path = rpath;
                });
                file['upload'] = {
                    bytesSent: 0,
                    progress: 0,
                };

                // Update the preview template to include the music title

                dropzoneMulti1.emit("addedfile", file, path);
                dropzoneMulti1.emit("thumbnail", file, path);
                // dropzoneMulti1.files.push(file);
            });
        });
        @endif
    })
</script>

<script>
    async function imageUrlToFile(imageUrl, fileName) {
        // Fetch the image
        const response = await fetch(imageUrl);
        const blob = await response.blob();

        // Create a File object
        const file = new File([blob], fileName[1], { type: blob.type });

        return file;
    }
</script>
