<form id="editForm{{ $type->id }}" method="POST" action="{{ route('fan-page-type.update',$type->id) }}" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="hidden-inputs">
        <input type="hidden" name="icon" value="{{ $type->icon }}" data-path="{{ $type->icon }}">
    </div>
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="row g-3">
                <div class="col-md-12">
                    <label class="form-label" for="inputTitle">Title</label>
                    <input type="text" id="inputTitle" class="form-control" placeholder="Title" name="title" value="{{ $type->name ?? '' }}">
                    @error('title')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-12">
                    <div class="card">
                        <h5 class="card-header">Icon</h5>
                        <div class="card-body">
                            <div class="dropzone needsclick" action="/" id="dropzone-img{{ $type->id }}">
                                <div class="dz-message needsclick">
                                    Drop files here or click to upload
                                </div>
                                <div class="fallback">
                                    <input type="file" name="icon" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <label for="Services">Services</label>
                <div class="col-md-2">
                    <label class="col-md-1 col-form-label">Concerts</label>
                    <div class="col-md-11 d-flex align-items-center">
                        <div class="form-check form-switch">
                            <input class="form-check-input" onclick="confirmSettingUpdate(event)" type="checkbox" name="option[]" value="concerts" {{ str_contains($type->types, 'concerts') ? 'checked' : '' }}>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <label class="col-md-1 col-form-label">Demostration</label>
                    <div class="col-md-11 d-flex align-items-center">
                        <div class="form-check form-switch">
                            <input class="form-check-input" onclick="confirmSettingUpdate(event)" type="checkbox" name="option[]" value="demostration" {{ str_contains($type->types, 'demostration') ? 'checked' : '' }}>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <label class="col-md-1 col-form-label">Conference</label>
                    <div class="col-md-11 d-flex align-items-center">
                        <div class="form-check form-switch">
                            <input class="form-check-input" onclick="confirmSettingUpdate(event)" type="checkbox" name="option[]" value="conference" {{ str_contains($type->types, 'conference') ? 'checked' : '' }}>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <label class="col-md-12 col-form-label">Upload Video</label>
                    <div class="col-md-11 d-flex align-items-center">
                        <div class="form-check form-switch">
                            <input class="form-check-input" onclick="confirmSettingUpdate(event)" type="checkbox" name="option[]" value="upload_video" {{ str_contains($type->types , 'upload_video') ? 'checked' : '' }} >
                        </div>
                    </div>
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
        const dropzoneMulti1 = new Dropzone('#dropzone-img{{ $type->id }}', {
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
                    `<input type="hidden" name="icon" value="${response.path}" data-path="${response.path}">`;

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
                    url: '{{ route('fanpage.delete-icon', $type->id) }}',
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

        @if($type->icon)
        $("document").ready(() => {
            var path = "{{ asset('storage/'.$type->icon) }}";
            var rpath = "{{ $type->icon }}";
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
