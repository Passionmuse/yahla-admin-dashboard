
<style>
    .edit-form .dropzone {
        display: flex;
        flex-wrap: wrap;
    }

    .edit-form .dropzone .dz-message {
        width: 100%;
    }
</style>
<form id="editForm{{ $medias->id }}" method="POST" action="{{ route('media.update',$medias->id)}}" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="hidden-inputs">
        <input type="hidden" name="image" value="{{ $medias->images }}" data-path="{{ $medias->images  }}">
    </div>
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="row g-3">
                <div class="col-md-12">
                    <label class="form-label" for="fullname">Media Title</label>
                    <input type="text" id="fullname" class="form-control" name="title" value="{{  $medias->title ?? ''}}">
                    @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-12">
                    <div class="card">
                        <h5 class="card-header">Image</h5>
                        <div class="card-body">
                            <div class="dropzone needsclick" action="/" id="dropzone-img{{ $medias->id }}">
                                <div class="dz-message needsclick">
                                    Drop files here or click to upload
                                </div>
                                <div class="fallback">
                                    <input type="file" name="image"  id="image" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="col-md-12">
                    <label class="form-label" for="fullname">Select Category</label>
                    <select class="form-select" aria-label="Default select example" name="category_id">
                        <option selected value="">Select</option>
                        @foreach($media_category as $media)
                         <option value="{{ $media->id }}" {{ $medias->category_id == $media->id ? 'selected' : '' }}>{{ $media->name ?? '' }}</option>
                        @endforeach
                      </select>
                    @error('category_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label class="form-label" for="fullname">Status</label>
                    <select class="form-select" aria-label="Default select example" name="status">
                        <option selected value="">Select</option>
                        <option value="0" {{ $medias->sttus == '0' ? 'selected' : '' }}>UnPublish</option>
                        <option value="1" {{ $medias->sttus == '1' ? 'selected' : '' }}>Publish</option>
    
                    </select>
                    @error('status')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
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
        const dropzoneMulti1 = new Dropzone('#dropzone-img{{ $medias->id }}', {
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
                    url: '{{ route('media.delete-img', $medias->id) }}',
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

        @if($medias->images)
            window.addEventListener('load' , () =>  {
                    var path = "{{ asset('storage/'.$medias->images) }}";
                    var rpath = "{{ $medias->images }}";
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
