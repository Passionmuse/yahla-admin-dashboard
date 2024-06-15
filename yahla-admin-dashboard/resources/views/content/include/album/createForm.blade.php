<form id="createForm" method="POST" action="{{ route('album.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="hidden-inputs"></div>
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="row g-3">
                <div class="col-md-12">
                    <label class="form-label" for="fullname">Album Title</label>
                    <input type="text" id="titelid" class="form-control create-title" placeholder="Title will add automatically" name="title">
                    @error('title')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label class="form-label" for="fullname">Artist</label>
                    <select class="form-select" aria-label="Default select example" name="artist_id">
                        <option selected value="">Select</option>
                        @foreach($artist as $artists)
                        <option value="{{ $artists->id }}">{{ $artists->first_name ?? '' }}</option>
                        @endforeach
                    </select>
                    @error('artist_id')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-12">
                    <div class="card">
                        <h5 class="card-header">Image</h5>
                        <div class="card-body">
                            <div class="dropzone needsclick" action="/" id="dropzone-img">
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

                 <div class="col-12">
                    <div class="card">
                        <h5 class="card-header">Album</h5>
                        <div class="card-body">
                            <div class="dropzone needsclick" action="/" id="dropzone-audio">
                                <div class="dz-message needsclick">
                                    Drop files here or click to upload
                                </div>
                                <div class="fallback">
                                    <input type="file" name="album[]"  accept="audio/*" id="audioFile" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                {{-- <div class="col-md-12">
                    <label class="form-label" for="fullname">Album</label>
                    <input type="file" name="album[]" class="form-control" id="audioFile" multiple />
                    @error('album')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>   --}}
                   <div class="col-md-12">
                    <label class="form-label" for="fullname">Status</label>
                    <select class="form-select" aria-label="Default select example" name="status">
                        <option selected value="1">Select</option>
                        <option value="1">Publish</option>
                        <option value="0">UnPublish</option>
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

            const dropzoneMulti = new Dropzone('#dropzone-audio', {
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
                    hiddenInputsContainer.innerHTML += `<input type="hidden" name="album[]" value="${response.path}" data-path="${response.path}">`;


                    // for title
                    let latestFile = this.files[this.files.length - 1];
                    let title = latestFile.name;
                    console.log(this);
                    document.querySelector('.create-title').value = title;

                },
                removedfile: function (file) {
                    const hiddenInputsContainer = file.previewElement.closest('form').querySelector('.hidden-inputs');
                    hiddenInputsContainer.querySelector(`input[data-path="${file.previewElement.dataset.path}"]`).remove();

                    if (file.previewElement != null && file.previewElement.parentNode != null) {
                        file.previewElement.parentNode.removeChild(file.previewElement);
                    }
                    // for title
                    let latestFile = this.files[this.files.length - 1];
                    let title = latestFile.name;
                    document.querySelector('input[name="title"]').value = title;

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
            const dropzoneMulti1 = new Dropzone('#dropzone-img', {
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
                    hiddenInputsContainer.innerHTML += `<input type="hidden" name="image" value="${response.path}" data-path="${response.path}">`;


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



{{--
<script>
document.getElementById("audioFile").addEventListener("change", function() {
    console.log(this.files.length);
    if(this.files.length == 1){
        let file = this.files[0];
        let title = file.name;
        this.closest('form').querySelector('input[name="title"]').value = title;
        //document.querySelector('input[name="title"]').value = title;
    }else{

        // document.querySelector('input[name="title"]').value = '';
        // document.querySelector('input[name="title"]').disabled = true;
        // var list = document.createElement("ul");
        // for (let i = 0; i < this.files.length; i++) {
        //     let file = this.files[i];
        //     let title = file.name;
        //     // create a new unordered list element
        //     let item1 = document.createElement("li");
        //     item1.classList.add('h6','mt-2','p-2');
        //     item1.textContent =title;
        //     list.appendChild(item1);
        // // add the list to the document

        // }

        // document.querySelector('input[name="title"]').parentElement.appendChild(list);

        let file = this.files[0];
        let title = file.name;
        document.querySelector('input[name="title"]').value = title;
    }

});
</script> --}}
