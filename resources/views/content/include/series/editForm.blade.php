<style>
    .edit-form .dropzone {
        display: flex;
        flex-wrap: wrap;
    }

    .edit-form .dropzone .dz-message {
        width: 100%;
    }
</style>


<form id="editForm{{ $serie->id }}" method="POST" action="{{ route('series.series.update',$serie->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="hidden-inputs">
        @foreach($serie->series as $path)
            <input type="hidden" name="series[]" value="{{ $path }}" data-path="{{ $path }}">
        @endforeach
        <input type="hidden" name="thumbnail" value="{{ $serie->thumbnail }}" data-path="{{ $serie->thumbnail }}">
    </div>
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="row g-3">
                <!--<div class="col-md-12">-->
                <!--    <label class="form-label" for="fullname">Category</label>-->
                <!--    <select class="form-select" aria-label="Default select example" name="category_id">-->
                <!--        @foreach($series_category as $series)-->
                <!--        <option value="{{ $series->id }}" {{ $series->id == $serie->category_id ? 'selected' : '' }}>{{ $series->name ?? '' }}</option>-->
                <!--        @endforeach-->
                <!--    </select>-->
                <!--    @error('category_id')-->
                <!--    <span class="text-danger">{{ $message }}</span>-->
                <!--    @enderror-->
                <!--</div>-->

                <div class="col-md-12">
                    <label class="form-label" for="fullname">Items Name</label>
                    <input type="text" id="fullname" class="form-control" placeholder="Lorem" name="title" value="{{ $serie->title ?? '' }}">
                    @error('title')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-6">
                            <div class="card">
                                <h5 class="card-header">Thumbnail</h5>
                                <div class="card-body">
                                    <div class="dropzone needsclick" action="/" id="dropzone-thumbnail{{ $serie->id }}">
                                        <div class="dz-message needsclick">
                                            Drop files here or click to upload
                                        </div>
                                        <div class="fallback">
                                            <input  type="file" name="thumbnail"  />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <div class="col-6">
                            <div class="card">
                                <h5 class="card-header">Upload Movie</h5>
                                <div class="card-body">
                                    <div class="dropzone needsclick" action="/" id="dropzone-series{{ $serie->id }}">
                                        <div class="dz-message needsclick">
                                            Drop files here or click to upload
                                        </div>
                                        <div class="fallback">
                                            <input  type="file" name="series[]" accept="video/*" id="video{{ $serie->id }}" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    
                 <div class="col-md-12">
                    <label class="form-label" for="fullname">Item Description</label>
                    <textarea type="text" id="fullname" class="form-control" placeholder="" name="description"></textarea>
                    @error('title')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                

                <div class="col-md-12">
                    <label class="form-label" for="fullname">Status</label>
                    <select class="form-select" name="status">
                      <option value="0" {{ $serie->status == 0 ? 'selected' : '' }}>Unpublish</option>
                      <option value="1" {{ $serie->status == 1 ? 'selected' : '' }}>Publish</option>
                    </select>

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
        const dropzoneMulti = new Dropzone('#dropzone-series{{ $serie->id }}', {
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
                    `<input type="hidden" name="series[]" value="${response.path}" data-path="${response.path}">`;

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
                    url: '{{ route('series.delete-video', $serie->id) }}',
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

        @foreach ($serie->series as $audio)
            $("document").ready(() => {
                var path = "{{ asset('storage/' . $audio) }}";
                let name = "{{ basename($audio) }}";
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
                            file.previewElement.dataset.path = '{{ $audio }}';
                    });
                    file['upload'] = {
                        bytesSent: 0,
                        progress: 0,
                    };

                    // Update the preview template to include the music title

                    dropzoneMulti.emit("addedfile", file, path);
                    // dropzoneMulti1.emit("thumbnail", file , path);

                    dropzoneMulti.files.push(file);
                });

            });
        @endforeach



        // image
        const dropzoneMulti1 = new Dropzone('#dropzone-thumbnail{{ $serie->id }}', {
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
                    `<input type="hidden" name="thumbnail" value="${response.path}" data-path="${response.path}">`;

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
                    url: '{{ route('series.delete-thumbnail', $serie->id) }}',
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

        $("document").ready(() => {
            var path = "{{ asset('storage/' . $serie->thumbnail) }}";
            var rpath = "{{ $serie->thumbnail }}";
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
