<style>
    .edit-form .dropzone {
        display: flex;
        flex-wrap: wrap;
    }

    .edit-form .dropzone .dz-message {
        width: 100%;
    }
    .ck{
        height: 150px;
    }
</style>
<form id="editForm{{ $historys->id }}" class="edit-form" method="POST" action="{{ route('history.update', $historys->id) }}" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="hidden-inputs">
        @foreach($historys->image as $path)
            <input type="hidden" name="image_paths[]" value="{{ $path }}" data-path="{{ $path }}">
        @endforeach

        @foreach($historys->video as $path)
            <input type="hidden" name="video_paths[]" value="{{ $path }}" data-path="{{ $path }}">
        @endforeach
    </div>
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="row g-3">
                <div class="col-md-12">
                    <label class="form-label" for="inputCategory{{ $historys->id }}">Select Category</label>
                    <select class="form-select" aria-label="Default select example" id="inputCategory{{ $historys->id }}" name="category_id">
                        <option selected value="">Choose Category</option>
                        @foreach($history_category as $history)
                        <option value="{{ $history?->id ?? '' }}" {{ (int)$history?->id === (int)$historys?->history_category?->id? 'selected': '' }}>{{ $history?->name ?? '' }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label class="form-label" for="inputTitle{{ $historys->id }}">Title</label>
                    <input type="text" id="inputTitle{{ $historys->id }}" class="form-control" placeholder="Title" name="title" value="{{ $historys->title }}">
                    @error('title')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
             
                <!-- <div class="col-md-12">
                    <label class="form-label" for="inputDescription">Images Upload</label>
                    <input type="file" class="form-control" name="image[]" accept="image/*" multiple>
                </div>
                <div class="col-md-12">
                    <label class="form-label" for="inputDescription">Video Upload</label>
                    <input type="file" class="form-control" name="video[]" accept="video/*" multiple>
                </div> -->
                <div class="col-md-12">
                    <div class="card">
                        <h5 class="card-header">Images Upload</h5>
                        <div class="card-body">
                            <div class="dropzone needsclick" action="/" id="dropzone-img{{ $historys->id }}">
                                <div class="dz-message needsclick">
                                    Drop files here or click to upload
                                </div>
                                <div class="fallback">
                                    <input  type="file" name="image[]" accept="image/*" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <h5 class="card-header">Video Upload</h5>
                        <div class="card-body">
                             <div class="dropzone needsclick" action="/" id="dropzone-video{{ $historys->id }}">
                                <div class="dz-message needsclick">
                                    Drop files here or click to upload
                                </div>
                                <div class="fallback">
                                    <input  type="file" name="video[]" accept="video/*" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <label class="form-label" for="inputDescription{{ $historys->id }}">Description</label>
                    <textarea class="form-control" name="description" rows="6" id="inputDescription{{ $historys->id }}" placeholder="Type...">{{ $historys->description }}</textarea>
                </div>
            </div>
        </div>
    </div>

</form>

<script>
    (function() {
        ClassicEditor
        .create( document.querySelector( '#inputDescription{{ $historys->id }}' ))
        .catch( error => {
            console.error( error );
        } );

    }());

</script>

<script>
    // $(document).on('ready', function () {
    //   $('.dz-dropzone').each(function () {
    //     // initialization of dropzone file attach module
    //     var dropzone = $.HSCore.components.HSDropzone.init('#' + $(this).attr('id'));
    //   });
    // });
  </script>

<script>
'use strict';

dropZoneInitFunctions.push(function () {
        // previewTemplate: Updated Dropzone default previewTemplate

        const previewTemplate =` <div class="row">
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

        const dropzoneMulti = new Dropzone('#dropzone-img{{ $historys->id }}', {
            url: '{{ route('file.upload') }}',
            previewTemplate: previewTemplate,
            parallelUploads: 1,
            maxFilesize: 100,
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            sending: function (file, xhr, formData) {
                formData.append('folder', 'history');
            },
            success: function (file, response) {
                if (file.previewElement) {
                    file.previewElement.classList.add("dz-success");
                }
                file.previewElement.dataset.path = response.path;
                const hiddenInputsContainer = file.previewElement.closest('form').querySelector('.hidden-inputs');
                hiddenInputsContainer.innerHTML += `<input type="hidden" name="image_paths[]" value="${response.path}" data-path="${response.path}">`;
            },
            removedfile: function (file) {
                const hiddenInputsContainer = file.previewElement.closest('form').querySelector('.hidden-inputs');
                hiddenInputsContainer.querySelector(`input[data-path="${file.previewElement.dataset.path}"]`).remove();

                if (file.previewElement != null && file.previewElement.parentNode != null) {
                    file.previewElement.parentNode.removeChild(file.previewElement);
                }

                $.ajax({
                    url: '{{ route("history.delete-image", $historys->id) }}',
                    method: 'delete',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    data: {path: file.previewElement.dataset.path},
                    success: function () {}
                });
                
                return this._updateMaxFilesReachedClass();
            }
        });

        @foreach ($historys->image as $img)
            $("document").ready(()=>{
                var path = "{{ asset('storage/'.$img) }}";
                let name = "{{ basename($img) }}";
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
                    dropzoneMulti.on('addedfile', function (file) {
                        if (file.addPathToDataset)
                            file.previewElement.dataset.path = '{{ $img }}';
                    });
                    file['upload'] = {
                        bytesSent: 0 ,
                        progress: 0 ,
                    };

                    dropzoneMulti.emit("addedfile", file , path);
                    dropzoneMulti.emit("thumbnail", file , path);
                    // myDropzone.emit("complete", itemInfo);
                    // myDropzone.options.maxFiles = myDropzone.options.maxFiles - 1;
                    dropzoneMulti.files.push(file);
                });
            });
        @endforeach

        const dropzoneMulti1 = new Dropzone('#dropzone-video{{ $historys->id }}', {
            url: '{{ route('file.upload') }}',
            previewTemplate: previewTemplate,
            parallelUploads: 1,
            maxFilesize: 1000,
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            sending: function (file, xhr, formData) {
                formData.append('folder', 'history');
            },
            success: function (file, response) {
                if (file.previewElement) {
                    file.previewElement.classList.add("dz-success");
                }
                file.previewElement.dataset.path = response.path;
                const hiddenInputsContainer = file.previewElement.closest('form').querySelector('.hidden-inputs');
                hiddenInputsContainer.innerHTML += `<input type="hidden" name="video_paths[]" value="${response.path}" data-path="${response.path}">`;
            },
            removedfile: function (file) {
                const hiddenInputsContainer = file.previewElement.closest('form').querySelector('.hidden-inputs');
                hiddenInputsContainer.querySelector(`input[data-path="${file.previewElement.dataset.path}"]`).remove();

                if (file.previewElement != null && file.previewElement.parentNode != null) {
                    file.previewElement.parentNode.removeChild(file.previewElement);
                }

                $.ajax({
                    url: '{{ route("history.delete-video", $historys->id) }}',
                    method: 'delete',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    data: {path: file.previewElement.dataset.path},
                    success: function () {}
                });
                
                return this._updateMaxFilesReachedClass();
            }
        });

        @foreach ($historys->video as $video)
            $("document").ready(()=>{
                var path = "{{ asset('storage/'.$video) }}";
                let name = "{{ basename($video) }}";
                const parts = name.split("___");

                imageUrlToFile(path,parts).then((file) => {
                    file['status'] = "success";
                    file['previewElement'] = "div.dz-preview.dz-image-preview";
                    file['previewTemplate'] = "div.dz-preview.dz-image-preview";
                    file['_removeLink'] = "a.dz-remove";
                    // file['webkitRelativePath'] = "";
                    file['width'] = 500;
                    file['height'] = 500;
                    // file['accepted'] = true;
                    file['dataURL'] = path;
                    file['addPathToDataset'] = true;
                    dropzoneMulti1.on('addedfile', function (file) {
                        if (file.addPathToDataset)
                            file.previewElement.dataset.path = '{{ $video }}';
                    });
                    file['upload'] = {
                        bytesSent: 0 ,
                        progress: 0 ,
                    };

                    dropzoneMulti1.emit("addedfile", file , path);
                    // dropzoneMulti1.emit("thumbnail", file , path);
                    // myDropzone.emit("complete", itemInfo);
                    // myDropzone.options.maxFiles = myDropzone.options.maxFiles - 1;
                    dropzoneMulti1.files.push(file);
                });
            });
        @endforeach
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