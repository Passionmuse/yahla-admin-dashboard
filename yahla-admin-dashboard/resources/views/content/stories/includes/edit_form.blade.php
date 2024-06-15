<form id="editForm{{ $story->id }}" action="{{ route('stories.update', $story->id) }}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="hidden-inputs">

        <input type="hidden" name="media_path" value="{{  $story->media_path }}" data-path="{{  $story->media_path }}">
        <input type="hidden" name="thumbnail_path" value="{{ $story->thumbnail_path }}" data-path="{{ $story->thumbnail_path }}">
    </div>
    <input type="hidden" name="showEditFormModal{{ $story->id }}" value="1">
    <input type="hidden" name="target" value="{{ $app?? 'main' }}">
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="row g-3">
                <div class="col-md-12">
                    <label class="form-label" for="inputTitle{{ $story->id }}">Title</label>
                    <input type="text" id="inputTitle{{ $story->id }}" name="title" class="form-control" value="{{ old('title')?? $story->title }}" placeholder="Story Title">
                    @error('title')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                {{--<div class="col-md-12">
                    <label class="form-label" for="inputMedia{{ $story->id }}">Thumbnail</label>
                    <input type="file" id="inputMedia{{ $story->id }}" name="thumbnail" class="form-control" value="{{ old('thumbnail') }}" accept="image/png, image/gif, image/jpeg">
                    @error('thumbnail')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>--}}
                <div class="col-12">
                    <div class="card">
                        <h5 class="card-header">Thumbnail</h5>
                        <div class="card-body">
                            <div class="dropzone needsclick" action="/" id="dropzone-img{{ $story->id }}">
                                <div class="dz-message needsclick">
                                    Drop files here or click to upload
                                </div>
                                <div class="fallback">
                                    <input type="file" name="thumbnail" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{--<div class="col-md-12">
                    <label class="form-label" for="inputMedia{{ $story->id }}">Media</label>
                    <input type="file" id="inputMedia{{ $story->id }}" name="media" class="form-control" value="{{ old('media') }}" accept="video/*">
                    @error('media')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>--}}

                <div class="col-12">
                    <div class="card">
                        <h5 class="card-header">Media</h5>
                        <div class="card-body">
                            <div class="dropzone needsclick" action="/" id="dropzone-media{{ $story->id }}">
                                <div class="dz-message needsclick">
                                    Drop files here or click to upload
                                </div>
                                <div class="fallback">
                                    <input type="file" name="media" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<script>
    'use strict';

    dropZoneInitFunctions.push(function() {
        // previewTemplate: Updated Dropzone default previewTemplate

        const previewTemplate = `<div class="row">
                                            <div class="col-md-12 col-12 d-flex justify-content-center">
                                                <div class="dz-preview dz-file-preview w-100">
                                                    <div class="dz-details">
                                                        <div class="dz-thumbnail" style="width:95%">
                                                            <img data-dz-thumbnail class="w-100" >
                                                            <span class="dz-nopreview">No preview</span>
                                                            <div class="dz-success-mark"></div>
                                                            <div class="dz-error-mark"></div>
                                                            <div class="dz-error-message"><span data-dz-errormessage></span></div>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" data-dz-uploadprogress></div>
                                                            </div>
                                                        </div>
                                                        <div class="dz-filename" data-dz-name></div>
                                                            <div class="dz-size" data-dz-size></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>`;

        // Multiple Dropzone
        const dropzoneMulti = new Dropzone('#dropzone-media{{ $story->id }}', {
            url: '{{ route('file.upload') }}',
            previewTemplate: previewTemplate,
            parallelUploads: 1,
            maxFilesize: 100,
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            sending: function(file, xhr, formData) {
                formData.append('folder', 'stories');
            },
            success: function(file, response) {
                if (file.previewElement) {
                    file.previewElement.classList.add("dz-success");
                }
                file.previewElement.dataset.path = response.path;
                const hiddenInputsContainer = file.previewElement.closest('form').querySelector(
                    '.hidden-inputs');
                hiddenInputsContainer.innerHTML +=
                    `<input type="hidden" name="media_path" value="${response.path}" data-path="${response.path}">`;
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
                    url: '{{ route('zarok-app.stories.delete-media', $story->id) }}',
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

        @if ($story->media_path)
            $("document").ready(() => {
                var path = "{{ asset('storage/' . $story->media_path) }}";
                let name = "{{ $story->media_path }}";
                const parts = name.split("___");
                
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
                    dropzoneMulti.on('addedfile', function(file) {
                        if (file.addPathToDataset)
                            file.previewElement.dataset.path = name;
                    });
                    file['upload'] = {
                        bytesSent: 0,
                        progress: 0,
                    };

                    // Update the preview template to include the music title

                    dropzoneMulti.emit("addedfile", file, path);

                    dropzoneMulti.files.push(file);
                });
            });
        @endif


        // image
        const dropzoneMulti1 = new Dropzone('#dropzone-img{{ $story->id }}', {
            url: '{{ route('file.upload') }}',
            previewTemplate: previewTemplate,
            parallelUploads: 1,
            maxFilesize: 100,
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            sending: function(file, xhr, formData) {
                formData.append('folder', 'stories');
            },
            success: function(file, response) {

                if (file.previewElement) {
                    file.previewElement.classList.add("dz-success");
                }
                file.previewElement.dataset.path = response.path;
                const hiddenInputsContainer = file.previewElement.closest('form').querySelector(
                    '.hidden-inputs');
                hiddenInputsContainer.innerHTML +=
                    `<input type="hidden" name="thumbnail_path" value="${response.path}" data-path="${response.path}">`;

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
                    url: '{{ route('zarok-app.stories.delete-thumbnail', $story->id) }}',
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

        @if ($story->thumbnail_path)
        window.addEventListener('load', () => {
            var path = "{{ asset('storage/' . $story->thumbnail_path) }}";
            var rpath = "{{ $story->thumbnail_path }}";
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
        const file = new File([blob], fileName[1], {
            type: blob.type
        });

        return file;
    }
</script>