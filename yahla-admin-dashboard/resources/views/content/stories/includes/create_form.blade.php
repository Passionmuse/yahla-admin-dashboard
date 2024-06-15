<form id="createForm" action="{{ route('stories.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="hidden-inputs"></div>
    <input type="hidden" name="showCreateFormModal" value="1">
    <input type="hidden" name="app" value="{{ $app?? 'main' }}">
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="row g-3">
                <div class="col-md-12">
                    <label class="form-label" for="inputTitle">Title</label>
                    <input type="text" id="inputTitle" name="title" class="form-control" value="{{ old('title') }}" placeholder="Story Title">
                    @error('title')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                {{-- <div class="col-md-12">
                    <label class="form-label" for="inputMedia">Thumbnail</label>
                    <input type="file" id="inputMedia" name="thumbnail" class="form-control" value="{{ old('thumbnail') }}" accept="image/png, image/gif, image/jpeg">
                    @error('thumbnail')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div> --}}
                <div class="col-12">
                    <div class="card">
                        <h5 class="card-header">Thumbnail</h5>
                        <div class="card-body">
                            <div class="dropzone needsclick" action="/" id="dropzone-thumbnail">
                                <div class="dz-message needsclick">
                                    Drop files here or click to upload
                                </div>
                                <div class="fallback">
                                    <input type="file" name="thumbnail"  id="image" accept="image/png, image/gif, image/jpeg" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                {{--<div class="col-md-12">
                    <label class="form-label" for="inputMedia">Media</label>
                    <input type="file" id="inputMedia" name="media" class="form-control" value="{{ old('media') }}" accept="video/*">
                    @error('media')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>--}}
                <div class="col-12">
                    <div class="card">
                        <h5 class="card-header">Media</h5>
                        <div class="card-body">
                            <div class="dropzone needsclick" action="/" id="dropzone-media">
                                <div class="dz-message needsclick">
                                    Drop files here or click to upload
                                </div>
                                <div class="fallback">
                                    <input type="file" name="media"  accept="video/*" id="" />
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

    dropZoneInitFunctions.push(function (){
            // previewTemplate: Updated Dropzone default previewTemplate

            const previewTemplate = `<div class="row"><di class="col-md-12 d-flex justify-content-center"><div class="dz-preview dz-file-preview w-100">
                                    <div class="dz-details">
                                      <div class="dz-thumbnail" style="width:95%">
                                        <img data-dz-thumbnail class="w-100" style="max-height:184px; object-fit:revert;">
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
                                    </div></div></di>`;
  
            // Multiple Dropzone

            const dropzoneMulti = new Dropzone('#dropzone-media', {
                url: '{{ route('file.upload') }}',
                previewTemplate: previewTemplate,
                parallelUploads: 1,
                maxFilesize: 100,
                addRemoveLinks: true,
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                sending: function (file, xhr, formData) {
                    formData.append('folder', 'stories');
                },
                success: function (file, response) {
                    if (file.previewElement) {
                        file.previewElement.classList.add("dz-success");
                    }
                    file.previewElement.dataset.path = response.path;
                    const hiddenInputsContainer = file.previewElement.closest('form').querySelector('.hidden-inputs');
                    hiddenInputsContainer.innerHTML += `<input type="hidden" name="media_path" value="${response.path}" data-path="${response.path}">`;

                },
                removedfile: function (file) {
                    const hiddenInputsContainer = file.previewElement.closest('form').querySelector('.hidden-inputs');
                    hiddenInputsContainer.querySelector(`input[data-path="${file.previewElement.dataset.path}"]`).remove();

                    if (file.previewElement != null && file.previewElement.parentNode != null) {
                        file.previewElement.parentNode.removeChild(file.previewElement);
                    }

                    $.ajax({
                        url: '{{ route("file.delete") }}',
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

            // for image
            const dropzoneMulti1 = new Dropzone('#dropzone-thumbnail', {
                url: '{{ route('file.upload') }}',
                previewTemplate: previewTemplate,
                parallelUploads: 1,
                maxFilesize: 100,
                addRemoveLinks: true,
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                sending: function (file, xhr, formData) {
                    formData.append('folder', 'stories');
                },
                success: function (file, response) {
                    if (file.previewElement) {
                        file.previewElement.classList.add("dz-success");
                    }
                    file.previewElement.dataset.path = response.path;
                    const hiddenInputsContainer = file.previewElement.closest('form').querySelector('.hidden-inputs');
                    hiddenInputsContainer.innerHTML += `<input type="hidden" name="thumbnail_path" value="${response.path}" data-path="${response.path}">`;


                },
                removedfile: function (file) {
                    const hiddenInputsContainer = file.previewElement.closest('form').querySelector('.hidden-inputs');
                    hiddenInputsContainer.querySelector(`input[data-path="${file.previewElement.dataset.path}"]`).remove();

                    if (file.previewElement != null && file.previewElement.parentNode != null) {
                        file.previewElement.parentNode.removeChild(file.previewElement);
                    }

                    $.ajax({
                        url: '{{ route("file.delete") }}',
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
        });
</script>