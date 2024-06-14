<style>
    .ql-toolbar.ql-snow {
        overflow: hidden !important;
    }

    .ck-editor__editable[role="textbox"] {
        /* editing area */
        min-height: 200px;
    }
    .ck-content .image {
        /* block images */
        max-width: 80%;
        margin: 20px auto;
    }

</style>
<div class="nav-align-top mb-4">
    <ul class="nav nav-tabs" role="tablist">
        {{-- <li class="nav-item" role="presentation">
            <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-en{{ $vote->id }}" aria-controls="navs-top-home" aria-selected="true">En</button>
        </li> --}}
        {{-- <li class="nav-item" role="presentation">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-de{{ $vote->id }}" aria-controls="navs-top-profile" aria-selected="false" tabindex="-1">DE</button>
        </li>
        <li class="nav-item" role="presentation">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-kr{{ $vote->id }}" aria-controls="navs-top-messages" aria-selected="false" tabindex="-1">KR</button>
        </li>
        <li class="nav-item" role="presentation">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-tr{{ $vote->id }}" aria-controls="navs-top-messages" aria-selected="false" tabindex="-1">TR</button>
        </li>
        <li class="nav-item" role="presentation">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-ir{{ $vote->id }}" aria-controls="navs-top-messages" aria-selected="false" tabindex="-1">IR</button>
        </li> --}}
    </ul>
    <div class="tab-content">
        <div class="tab-pane fade active show" id="navs-en{{ $vote->id }}" role="tabpanel">
            <form id="editForm{{ $vote->id }}" method="POST" action="{{ route('vote.update',$vote->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="hidden-inputs">
                    <input type="hidden" name="image" value="{{ $vote->banner }}" data-path="{{ $vote->banner }}">
                </div>
                <div class="row">
                    <div class="col-lg-12 mx-auto">
                        <div class="row g-3">
                            <div class="col-md-12">
                                <label class="form-label" for="fullname">Title</label>
                                <input type="text" id="fullname" class="form-control" placeholder="title" name="name" value="{{ $vote->name ?? '' }}">
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="category">Select Category</label>
                               <select class="form-select" name="category_id">
                                @foreach ($vote_category as $category )
                                    <option value="{{ $category->id }}" {{ $vote->category_id == $category->id ? 'selected' : '' }}>{{ $category->name ?? '' }}</option>
                                @endforeach
                            </select>
                            </div>
                            <div class="col-12">
                                <div class="card">
                                    <h5 class="card-header">Banner</h5>
                                    <div class="card-body">
                                        <div class="dropzone needsclick" action="/" id="dropzone-img{{ $vote->id }}">
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
                                <label class="form-label" for="inputDescription{{ $vote->id }}">Description</label>
                                <textarea class="form-control" name="description" style="height:150px;" id="inputDescription{{ $vote->id }}" rows="5">{{ $vote->description?? '' }}</textarea>
                            </div>
                            <div class="col-md-12 mt-5">
                                <!-- Form Repeater -->
                                <div class="form-repeater">
                                    <div data-repeater-list="group-a">
                                    </div>
                                </div>
                                <!-- /Form Repeater -->
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
        <div class="tab-pane fade" id="navs-de{{ $vote->id }}" role="tabpanel">
            <form id="editForm" method="POST" action="{{ route('vote.update',$vote->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-lg-12 mx-auto">
                        <div class="row g-3">
                            <div class="col-md-12">
                                <label class="form-label" for="fullname">Title</label>
                                <input type="text" id="fullname" class="form-control" placeholder="title" name="name" value="{{ $vote->name ?? '' }}">
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="fullname">Banner upload</label>
                                <input type="file" id="fullname" class="form-control" name="image">
                                <!-- <img src="{{ asset('storage/'.$vote->banner) }}"> -->
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="fullname">Select Category</label>
                                <select name="category_id" class="form-select">
                                    <option selected>Choose a Category</option>
                                    @foreach($vote_category as $votes)
                                    <option value="{{ $votes->id }}" {{ $vote->category_id == $votes->id ? 'selected' : '' }}>{{ $votes->name ?? '' }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="inputDescription{{ $vote->id }}">Description</label>
                                <textarea class="form-control" name="description" style="height:150px;" id="inputDescription{{ $vote->id }}"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
        <div class="tab-pane fade" id="navs-kr{{ $vote->id }}" role="tabpanel">
            <form id="editForm" method="POST" action="{{ route('vote.update',$vote->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-lg-12 mx-auto">
                        <div class="row g-3">
                            <div class="col-md-12">
                                <label class="form-label" for="fullname">Title</label>
                                <input type="text" id="fullname" class="form-control" placeholder="title" name="name" value="{{ $vote->name ?? '' }}">
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="fullname">Banner upload</label>
                                <input type="file" id="fullname" class="form-control" name="image">
                                <!-- <img src="{{ asset('storage/'.$vote->banner) }}"> -->
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="fullname">Select Category</label>
                                <select name="category_id" class="form-select">
                                    <option selected>Choose a Category</option>
                                    @foreach($vote_category as $votes)
                                    <option value="{{ $votes->id }}" {{ $vote->category_id == $votes->id ? 'selected' : '' }}>{{ $votes->name ?? '' }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="inputDescription{{ $vote->id }}">Description</label>
                                <textarea class="form-control" name="description" style="height:150px;" id="inputDescription{{ $vote->id }}"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>

        <div class="tab-pane fade" id="navs-tr{{ $vote->id }}" role="tabpanel">
            <form id="editForm" method="POST" action="{{ route('vote.update',$vote->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-lg-12 mx-auto">
                        <div class="row g-3">
                            <div class="col-md-12">
                                <label class="form-label" for="fullname">Title</label>
                                <input type="text" id="fullname" class="form-control" placeholder="title" name="name" value="{{ $vote->name ?? '' }}">
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="fullname">Banner upload</label>
                                <input type="file" id="fullname" class="form-control" name="image">
                                <!-- <img src="{{ asset('storage/'.$vote->banner) }}"> -->
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="fullname">Select Category</label>
                                <select name="category_id" class="form-select">
                                    <option selected>Choose a Category</option>
                                    @foreach($vote_category as $votes)
                                    <option value="{{ $votes->id }}" {{ $vote->category_id == $votes->id ? 'selected' : '' }}>{{ $votes->name ?? '' }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="inputDescription{{ $vote->id }}">Description</label>
                                <textarea class="form-control" name="description" style="height:150px;" id="inputDescription{{ $vote->id }}"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>

        <div class="tab-pane fade" id="navs-ir{{ $vote->id }}" role="tabpanel">
            <form id="editForm" method="POST" action="{{ route('vote.update',$vote->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-lg-12 mx-auto">
                        <div class="row g-3">
                            <div class="col-md-12">
                                <label class="form-label" for="fullname">Title</label>
                                <input type="text" id="fullname" class="form-control" placeholder="title" name="name" value="{{ $vote->name ?? '' }}">
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="fullname">Banner upload</label>
                                <input type="file" id="fullname" class="form-control" name="image">
                                <!-- <img src="{{ asset('storage/'.$vote->banner) }}"> -->
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="fullname">Select Category</label>
                                <select name="category_id" class="form-select">
                                    <option selected>Choose a Category</option>
                                    @foreach($vote_category as $votes)
                                    <option value="{{ $votes->id }}" {{ $vote->category_id == $votes->id ? 'selected' : '' }}>{{ $votes->name ?? '' }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="inputDescription{{ $vote->id }}">Description</label>
                                <textarea class="form-control" name="description" style="height:150px;" id="inputDescription{{ $vote->id }}"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<script>
    
   window.addEventListener('load' , function(){
    (function() {
        // Full Toolbar
        // --------------------------------------------------------------------
        // const fullToolbar{{ $vote->id }} = [
        //     [{
        //             font: []
        //         }
        //         , {
        //             size: []
        //         }
        //     ]
        //     , ['bold', 'italic', 'underline', 'strike']
        //     , [{
        //             color: []
        //         }
        //         , {
        //             background: []
        //         }
        //     ]
        //     , [{
        //             script: 'super'
        //         }
        //         , {
        //             script: 'sub'
        //         }
        //     ]
        //     , [{
        //             header: '1'
        //         }
        //         , {
        //             header: '2'
        //         }
        //         , 'blockquote'
        //         , 'code-block'
        //     ]
        //     , [{
        //             list: 'ordered'
        //         }
        //         , {
        //             list: 'bullet'
        //         }
        //         , {
        //             indent: '-1'
        //         }
        //         , {
        //             indent: '+1'
        //         }
        //     ]
        //     , [{
        //         direction: 'rtl'
        //     }]
        //     , ['link', 'image', 'video', 'formula']
        //     , ['clean']
        // ];
        // const fullEditor{{ $vote->id }} = new Quill('#inputDescription{{$vote->id }}', {
        //     bounds: '#full-editor'
        //     , placeholder: 'Type Something...'
        //     , modules: {
        //         formula: true
        //         , toolbar: fullToolbar{{ $vote->id }}
        //     }
        //     , theme: 'snow'
        // });

        ClassicEditor
        .create( document.querySelector( '#inputDescription{{$vote->id }}' ) )
        .catch( error => {
            console.error( error );
        } );

    }());
   })

</script>

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
        const dropzoneMulti1 = new Dropzone('#dropzone-img{{ $vote->id }}', {
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
                    url: '{{ route('vote.delete-banner', $vote->id) }}',
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

        @if($vote->banner)
        window.addEventListener('load' , () => {
            var path = "{{ asset('storage/'.$vote->banner) }}";
            var rpath = "{{ $vote->banner }}";
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