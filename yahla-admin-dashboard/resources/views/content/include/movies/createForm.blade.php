<form id="createForm" method="POST" action="{{ route('upload-movies.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="hidden-inputs"></div>
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="row g-3">
                <!--<div class="col-md-12">-->
                <!--    <label class="form-label" for="fullname">Category</label>-->
                <!--    <select class="form-select" aria-label="Default select example" name="category_id">-->
                <!--        <option value="">Select Category</option>-->
                <!--        @foreach($movie_category as $movie)-->
                <!--        <option value="{{ $movie->id }}">{{ $movie->category ?? '' }}</option>-->
                <!--        @endforeach-->
                <!--    </select>-->
                <!--    @error('category_id')-->
                <!--    <span class="text-danger">{{ $message }}</span>-->
                <!--    @enderror-->
                <!--</div>-->
                <div class="col-md-12">
                    <label class="form-label" for="fullname">Item Name</label>
                    <input type="text" id="fullname" class="form-control" placeholder="" name="title">
                    @error('title')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                {{-- <div class="col-md-12">
                    <label class="form-label" for="fullname">Thumbnail</label>
                    <input type="file" id="fullname" class="form-control"  name="thumbnail">
                    @error('thumbnail')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div> --}}
`               <div class="col-12">
                    <div class="row">
                        <div class="col-6">
                            <div class="card">
                                <h5 class="card-header">Thumbnail</h5>
                                <div class="card-body">
                                    <div class="dropzone needsclick" action="/" id="dropzone-thumbnail">
                                        <div class="dz-message needsclick">
                                            Drop files here or click to upload
                                        </div>
                                        <div class="fallback">
                                            <input type="file" name="thumbnail"  id="thumbnail" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
        
        
                        <!--<div class="col-md-12">-->
                        <!--    <label class="form-label" for="fullname">Uplaod Movie</label>-->
                        <!--    <input type="file" name="movie[]" class="form-control" id="image" accept="video/*" multiple />-->
                        <!--    @error('video')-->
                        <!--    <span class="text-danger">{{ $message }}</span>-->
                        <!--    @enderror-->
                        <!--</div>-->
        
                        <div class="col-6">
                            <div class="card">
                                <h5 class="card-header">Upload Movie</h5>
                                <div class="card-body">
                                    <div class="dropzone needsclick" action="/" id="dropzone-movie">
                                        <div class="dz-message needsclick">
                                            Drop files here or click to upload
                                        </div>
                                        <div class="fallback">
                                            <input type="file" name="movie[]"  accept="video/*" id="" />
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
                    <label class="form-label" for="status">Status</label>
                    <select class="form-select" name="status">
                        <option value="1" selected>Select Status</option>
                        <option value="0">Unpublish</option>
                        <option value="1">Publish</option>
                    </select>
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

            const dropzoneMulti = new Dropzone('#dropzone-movie', {
                url: '{{ route('file.upload') }}',
                previewTemplate: previewTemplate,
                parallelUploads: 1,
                maxFilesize: 100,
                addRemoveLinks: true,
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                sending: function (file, xhr, formData) {
                    formData.append('folder', 'music');
                },
                success: function (file, response) {
                    if (file.previewElement) {
                        file.previewElement.classList.add("dz-success");
                    }
                    file.previewElement.dataset.path = response.path;
                    const hiddenInputsContainer = file.previewElement.closest('form').querySelector('.hidden-inputs');
                    hiddenInputsContainer.innerHTML += `<input type="hidden" name="movie[]" value="${response.path}" data-path="${response.path}">`;

                
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
                    formData.append('folder', 'music');
                },
                success: function (file, response) {
                    if (file.previewElement) {
                        file.previewElement.classList.add("dz-success");
                    }
                    file.previewElement.dataset.path = response.path;
                    const hiddenInputsContainer = file.previewElement.closest('form').querySelector('.hidden-inputs');
                    hiddenInputsContainer.innerHTML += `<input type="hidden" name="thumbnail" value="${response.path}" data-path="${response.path}">`;


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