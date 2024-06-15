
<style>
    .edit-form .dropzone {
        display: flex;
        flex-wrap: wrap;
    }

    .edit-form .dropzone .dz-message {
        width: 100%;
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

<div id="wizard-create-app{{ $new->id }}" class="bs-stepper wizard-vertical{{ $new->id }} shadow-none vertical mt-2">
    <div class="bs-stepper-header" style="min-width: auto;">
        <div class="step" data-target="#en{{ $new->id }}">
            <button type="button" class="step-trigger">
            <span class="bs-stepper-circle">EN</span>
            </button>
        </div>
        {{-- <div class="line"></div>
        <div class="step" data-target="#de{{ $new->id }}">
            <button type="button" class="step-trigger">
            <span class="bs-stepper-circle">DE</span>
            </button>
        </div>
        <div class="line"></div>
        <div class="step" data-target="#kr{{ $new->id }}">
            <button type="button" class="step-trigger">
            <span class="bs-stepper-circle">KR</span>
            </button>
        </div>
        <div class="line"></div>
        <div class="step" data-target="#tr{{ $new->id }}">
            <button type="button" class="step-trigger">
            <span class="bs-stepper-circle">TR</span>
            </button>
        </div>
        <div class="line"></div>
        <div class="step" data-target="#ir{{ $new->id }}">
            <button type="button" class="step-trigger">
            <span class="bs-stepper-circle">IR</span>
            </button>
        </div> --}}
    </div>
    <div class="bs-stepper-content">
        <form id="editForm{{ $new->id }}" method="POST" action="{{ route('news.update',$new->id) }}" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="hidden-inputs">
    
                @foreach($new->image as $path)
                    <input type="hidden" name="image[]" value="{{ $path }}" data-path="{{ $path }}">
                @endforeach
        
            </div>
            <!-- EN -->
            <div id="en{{ $new->id }}" class="content">
                <div class="row g-3">
                    <div class="col-md-12">
                        <label class="form-label" for="fullname">News Title</label>
                        <input type="text" id="fullname" class="form-control" placeholder="News Title" value="{{ $new->title ?? '' }}" name="title" >
                        @error('title')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
        
                    {{-- <div class="col-md-12">
                        <label class="form-label" for="fullname">Upload News Image/Video</label>
                        <input type="file" name="image[]" class="form-control" id"=image" multiple accept="image/*,video/*" value="{{ $new->image[0] ?? '' }}" />
                        @error('image')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div> --}}

                    
                <div class="col-12">
                    <div class="card">
                        <h5 class="card-header">Image</h5>
                        <div class="card-body">
                            <div class="dropzone needsclick" action="/" id="dropzone-img{{ $new->id }}">
                                <div class="dz-message needsclick">
                                    Drop files here or click to upload
                                </div>
                                <div class="fallback">
                                    <input  type="file" name="image[]"  />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <label class="form-label" for="inputDescription{{ $new->id }}">News Description</label>
                    <textarea class="form-control" id="inputDescription{{ $new->id }}" name="description" rows="6" placeholder="Type...">{{ $new->description ?? '' }}</textarea>
                    @error('description')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                    <div class="col-md-12">
                        <label class="form-label">Select Category</label>
                        <select class="form-select" aria-label="Default select example" name="category_id">
                            <option selected>Choose a Category</option>
                            @foreach($news_category as $news)
                            <option value="{{ $news->id }}" {{ $news->id == $new->category_id ? 'selected' : '' }}>{{ $news->name ?? '' }}</option>
                            @endforeach
                        </select>
                        @error('image')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-12">
                        <label class="form-label">Status</label>
                        <select class="form-select" aria-label="Default select example" name="status">
                            <option value="1" {{ (int) $new->status === 1 ? 'selected' : '' }}>Published</option>
                            <option value="0" {{ (int) $new->status === 0 ? 'selected' : '' }}>UnPublished</option>
                        </select>
                        @error('status')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-12 d-flex justify-content-center">
                        <button class="btn btn-label-primary" type="submit">Update</button>
                    </div>
                  
                </div>
            </div>

            {{-- <!-- DE -->
            <div id="de{{ $new->id }}" class="content">
                <div class="content-header mb-3">
                    <h6 class="mb-0">DE</h6>
                    <small>Enter news in DE.</small>
                </div>
                <div class="col-12 d-flex justify-content-between">
                    <button class="btn btn-primary btn-prev{{ $new->id }}">
                    <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                    </button>
                    <button class="btn btn-primary btn-next{{ $new->id }}">
                    <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                    <i class="bx bx-chevron-right bx-sm me-sm-n2"></i>
                    </button>
                </div>
            </div>

            <!-- KR -->
            <div id="kr{{ $new->id }}" class="content">
            <div class="content-header mb-3">
                    <h6 class="mb-0">KR</h6>
                    <small>Enter news in KR.</small>
                </div>
                <div class="col-12 d-flex justify-content-between">
                    <button class="btn btn-primary btn-prev{{ $new->id }}">
                    <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                    </button>
                    <button class="btn btn-primary btn-next{{ $new->id }}">
                    <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                    <i class="bx bx-chevron-right bx-sm me-sm-n2"></i>
                    </button>
                </div>
            </div>

            <!-- TR -->
            <div id="tr{{ $new->id }}" class="content">
                <div class="content-header mb-3">
                    <h6 class="mb-0">TR</h6>
                    <small>Enter news in TR.</small>
                </div>
                <div class="col-12 d-flex justify-content-between">
                    <button class="btn btn-primary btn-prev{{ $new->id }}">
                    <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                    </button>
                    <button class="btn btn-primary btn-next{{ $new->id }}">
                    <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                    <i class="bx bx-chevron-right bx-sm me-sm-n2"></i>
                    </button>
                </div>
            </div>

            <!-- IR -->
            <div id="ir{{ $new->id }}" class="content">
                <div class="content-header mb-3">
                    <h6 class="mb-0">IR</h6>
                    <small>Enter news in IR.</small>
                </div>
                <div class="col-12 d-flex justify-content-between">
                    <button class="btn btn-primary btn-prev{{ $new->id }}">
                    <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                    </button>
                    <button class="btn btn-success btn-submit{{ $new->id }}">Submit</button>
                </div>
            </div> --}}
        </form>
    </div>
</div>

<script>
    window.addEventListener('load', () => {
        // Wizard
        const wizardVertical{{ $new->id }} = document.querySelector('.wizard-vertical{{ $new->id }}'),
        wizardVerticalBtnNextList{{ $new->id }} = [].slice.call(wizardVertical{{ $new->id }}.querySelectorAll('.btn-next')),
        wizardVerticalBtnPrevList{{ $new->id }} = [].slice.call(wizardVertical{{ $new->id }}.querySelectorAll('.btn-prev')),
        wizardVerticalBtnSubmit{{ $new->id }} = wizardVertical{{ $new->id }}.querySelector('.btn-submit');

        if (typeof wizardVertical{{ $new->id }} !== undefined && wizardVertical{{ $new->id }} !== null) {
            const verticalStepper{{ $new->id }} = new Stepper(wizardVertical{{ $new->id }}, {
            linear: false
            });
            if (wizardVerticalBtnNextList{{ $new->id }}) {
            wizardVerticalBtnNextList{{ $new->id }}.forEach(wizardVerticalBtnNext => {
                wizardVerticalBtnNext.addEventListener('click', event => {
                verticalStepper{{ $new->id }}.next();
                });
            });
            }
            if (wizardVerticalBtnPrevList{{ $new->id }}) {
            wizardVerticalBtnPrevList{{ $new->id }}.forEach(wizardVerticalBtnPrev => {
                wizardVerticalBtnPrev.addEventListener('click', event => {
                verticalStepper{{ $new->id }}.previous();
                });
            });
            }

            if (wizardVerticalBtnSubmit{{ $new->id }}) {
            wizardVerticalBtnSubmit{{ $new->id }}.addEventListener('click', event => {
                wizardVerticalBtnSubmit{{ $new->id }}.closest('form').submit();
            });
            }
        }

        // Editor
        (function() {
        //     // Full Toolbar
        //     // --------------------------------------------------------------------
        //     const fullToolbar{{ $new->id }} = [
        //         [{
        //                 font: []
        //             }
        //             , {
        //                 size: []
        //             }
        //         ]
        //         , ['bold', 'italic', 'underline', 'strike']
        //         , [{
        //                 color: []
        //             }
        //             , {
        //                 background: []
        //             }
        //         ]
        //         , [{
        //                 script: 'super'
        //             }
        //             , {
        //                 script: 'sub'
        //             }
        //         ]
        //         , [{
        //                 header: '1'
        //             }
        //             , {
        //                 header: '2'
        //             }
        //             , 'blockquote'
        //             , 'code-block'
        //         ]
        //         , [{
        //                 list: 'ordered'
        //             }
        //             , {
        //                 list: 'bullet'
        //             }
        //             , {
        //                 indent: '-1'
        //             }
        //             , {
        //                 indent: '+1'
        //             }
        //         ]
        //         , [{
        //             direction: 'rtl'
        //         }]
        //         , ['link', 'image', 'video', 'formula']
        //         , ['clean']
        //     ];
        //     const fullEditor{{ $new->id }} = new Quill('#inputDescription{{ $new->id }}', {
        //         bounds: '#full-editor{{ $new->id }}'
        //         , placeholder: 'Type Something...'
        //         , modules: {
        //             formula: true
        //             , toolbar: fullToolbar{{ $new->id }}
        //         }
        //         , theme: 'snow'
        //     });

        ClassicEditor
        .create( document.querySelector( '#inputDescription{{ $new->id }}' ) )
        .catch( error => {
            console.error( error );
        } );

        }());
    })
</script>

{{-- @if (false)
<!-- Property Listing Wizard -->
<div id="wizard-create-app{{ $new->id }}" class="bs-stepper vertical mt-2 shadow-none border-0">
    <div class="bs-stepper-header border-0 p-1">
        <div class="step active" data-target="#en{{ $new->id }}">
            <button type="button" class="step-trigger" aria-selected="true">
                <span class="bs-stepper-circle"><i class="bx bx-file fs-5"></i></span>
                <span class="bs-stepper-label">
                    <span class="bs-stepper-title text-uppercase">EN</span>
                </span>
            </button>
        </div>
        <div class="line"></div>
        <div class="step" data-target="#ir{{ $new->id }}">
            <button type="button" class="step-trigger" aria-selected="false">
                <span class="bs-stepper-circle"><i class="bx bx-box fs-5"></i></span>
                <span class="bs-stepper-label">
                    <span class="bs-stepper-title text-uppercase">IR</span>
                </span>
            </button>
        </div>
        <div class="line"></div>
        <div class="step" data-target="#kr{{ $new->id }}">
            <button type="button" class="step-trigger" aria-selected="false">
                <span class="bs-stepper-circle"><i class="bx bx-box fs-5"></i></span>
                <span class="bs-stepper-label">
                    <span class="bs-stepper-title text-uppercase">KR</span>
                </span>
            </button>
        </div>
        <div class="line"></div>
        <div class="step" data-target="#tr{{ $new->id }}">
            <button type="button" class="step-trigger" aria-selected="false">
                <span class="bs-stepper-circle"><i class="bx bx-box fs-5"></i></span>
                <span class="bs-stepper-label">
                    <span class="bs-stepper-title text-uppercase">TR</span>
                </span>
            </button>
        </div>
        <div class="line"></div>
        <div class="step" data-target="#de{{ $new->id }}">
            <button type="button" class="step-trigger" aria-selected="false">
                <span class="bs-stepper-circle"><i class="bx bx-box fs-5"></i></span>
                <span class="bs-stepper-label">
                    <span class="bs-stepper-title text-uppercase">DE</span>
                </span>
            </button>
        </div>

        <div class="bs-stepper-content p-1">
            <!-- KR -->
            <div id="en{{ $new->id }}" class="content pt-3 pt-lg-0 active dstepper-block">

                <form id="editForm{{ $new->id }}" method="POST" action="{{ route('news.update',$new->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label" for="fullname">News Title</label>
                                    <input type="text" id="fullname" class="form-control" placeholder="Jang" name="title" value="{{ $new->title ?? '' }}">
                                    @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="fullname">Image</label>
                                    <input type="file" name="image" class="form-control" id="image" />
                                    <img src="{{ asset('storage/'.$new->image) }}" width="100" height="100" >
                                    @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <select class="form-select" aria-label="Default select example" name="category_id">
                                        <option selected>Select</option>
                                        @foreach($news_category as $news)
                                        <option value="{{ $news->id }}"{{ $news->id == $new->category_id ? 'selected' : '' }}>{{ $news->name ?? '' }}</option>
                                        @endforeach
                                    </select>
                                    @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <label class="form-label" for="address">Description</label>
                                    <textarea class="form-control" id="address" name="description" rows="2" placeholder="Lorem" style="height:200px">{{ $new->description ?? '' }}</textarea>
                                    @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                <div class="col-12 d-flex justify-content-between mt-4">
                    <button class="btn btn-label-secondary btn-prev" disabled=""> <i class="bx bx-left-arrow-alt bx-xs me-sm-1 me-0"></i>
                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                    </button>
                    <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-right-arrow-alt bx-xs"></i></button>
                </div>
            </div>
            <!-- IR -->
            <div id="ir{{ $new->id }}" class="content ">
                <form id="editForm{{ $new->id }}" method="POST" action="" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label" for="fullname">News Title</label>
                                    <input type="text" id="fullname" class="form-control" placeholder="Jang" name="title" value="{{ $new->title ?? '' }}">
                                    @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="fullname">Image</label>
                                    <input type="file" name="image" class="form-control" id="image" />
                                    @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <select class="form-select" aria-label="Default select example" name="category_id">
                                        <option selected>Select</option>
                                        @foreach($news_category as $news)
                                        <option value="{{ $news->id }}">{{ $news->name ?? '' }}</option>
                                        @endforeach
                                    </select>
                                    @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <label class="form-label" for="address">Description</label>
                                    <textarea class="form-control" id="address" name="description" rows="2" placeholder="Lorem" style="height:200px"></textarea>
                                    @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                <div class="col-12 d-flex justify-content-between mt-4">
                    <button class="btn btn-label-secondary btn-prev"> <i class="bx bx-left-arrow-alt bx-xs me-sm-1 me-0"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
                    <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-right-arrow-alt bx-xs"></i></button>
                </div>
            </div>
            <!-- KR -->
            <div id="kr{{ $new->id }}" class="content ">
                <form id="editForm{{ $new->id }}" method="POST" action="" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label" for="fullname">News Title</label>
                                    <input type="text" id="fullname" class="form-control" placeholder="Jang" name="title">
                                    @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="fullname">Image</label>
                                    <input type="file" name="image" class="form-control" id="image" />
                                    @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <select class="form-select" aria-label="Default select example" name="category_id">
                                        <option selected>Select</option>
                                        @foreach($news_category as $news)
                                        <option value="{{ $news->id }}">{{ $news->name ?? '' }}</option>
                                        @endforeach
                                    </select>
                                    @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <label class="form-label" for="address">Description</label>
                                    <textarea class="form-control" id="address" name="description" rows="2" placeholder="Lorem" style="height:200px"></textarea>
                                    @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                <div class="col-12 d-flex justify-content-between mt-4">
                    <button class="btn btn-label-secondary btn-prev"> <i class="bx bx-left-arrow-alt bx-xs me-sm-1 me-0"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
                    <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-right-arrow-alt bx-xs"></i></button>
                </div>
            </div>
            <!-- TR -->
            <div id="tr{{ $new->id }}" class="content ">
                <form id="editForm{{ $new->id }}" method="POST" action="" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label" for="fullname">News Title</label>
                                    <input type="text" id="fullname" class="form-control" placeholder="Jang" name="title">
                                    @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="fullname">Image</label>
                                    <input type="file" name="image" class="form-control" id="image" />
                                    @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <select class="form-select" aria-label="Default select example" name="category_id">
                                        <option selected>Select</option>
                                        @foreach($news_category as $news)
                                        <option value="{{ $news->id }}">{{ $news->name ?? '' }}</option>
                                        @endforeach
                                    </select>
                                    @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <label class="form-label" for="address">Description</label>
                                    <textarea class="form-control" id="address" name="description" rows="2" placeholder="Lorem" style="height:200px"></textarea>
                                    @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                <div class="col-12 d-flex justify-content-between mt-4">
                    <button class="btn btn-label-secondary btn-prev"> <i class="bx bx-left-arrow-alt bx-xs me-sm-1 me-0"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
                    <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-right-arrow-alt bx-xs"></i></button>
                </div>
            </div>
            <!-- DE -->
            <div id="de{{ $new->id }}" class="content ">
                <form id="editForm{{ $new->id }}" method="POST" action="" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label" for="fullname">News Title</label>
                                    <input type="text" id="fullname" class="form-control" placeholder="Jang" name="title">
                                    @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="fullname">Image</label>
                                    <input type="file" name="image" class="form-control" id="image" />
                                    @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <select class="form-select" aria-label="Default select example" name="category_id">
                                        <option selected>Select</option>
                                        @foreach($news_category as $news)
                                        <option value="{{ $news->id }}">{{ $news->name ?? '' }}</option>
                                        @endforeach
                                    </select>
                                    @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <label class="form-label" for="address">Description</label>
                                    <textarea class="form-control" id="address" name="description" rows="2" placeholder="Lorem" style="height:200px"></textarea>
                                    @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                <div class="col-12 d-flex justify-content-between mt-4">
                    <button class="btn btn-label-secondary btn-prev"> <i class="bx bx-left-arrow-alt bx-xs me-sm-1 me-0"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
                    <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-right-arrow-alt bx-xs"></i></button>
                </div>
            </div>

        </div>
    </div>
</div>
<!--/ Property Listing Wizard -->

<script>
    /**
     *  Modal Example Wizard
     */


    window.addEventListener('load', function() {

        $(function() {
            // Modal id
            const appModal = document.getElementById('createnewsModal');

            // Credit Card
            const creditCardMask1 = document.querySelector('.app-credit-card-mask')
                , expiryDateMask1 = document.querySelector('.app-expiry-date-mask')
                , cvvMask1 = document.querySelector('.app-cvv-code-mask');
            let cleave;

            // Cleave JS card Mask
            function initCleave() {
                if (creditCardMask1) {
                    cleave = new Cleave(creditCardMask1, {
                        creditCard: true
                        , onCreditCardTypeChanged: function(type) {
                            if (type != '' && type != 'unknown') {
                                document.querySelector('.app-card-type').innerHTML =
                                    '<img src="' + assetsPath + 'img/icons/payments/' + type + '-cc.png" class="cc-icon-image" height="28"/>';
                            } else {
                                document.querySelector('.app-card-type').innerHTML = '';
                            }
                        }
                    });
                }
            }

            // Expiry Date Mask
            if (expiryDateMask1) {
                new Cleave(expiryDateMask1, {
                    date: true
                    , delimiter: '/'
                    , datePattern: ['m', 'y']
                });
            }

            // CVV
            if (cvvMask1) {
                new Cleave(cvvMask1, {
                    numeral: true
                    , numeralPositiveOnly: true
                });
            }
            appModal.addEventListener('show.bs.modal', function(event) {
                const wizardCreateApp = document.querySelector('#wizard-create-app{{ $new->id }}');
                if (typeof wizardCreateApp !== undefined && wizardCreateApp !== null) {
                    // Wizard next prev button
                    const wizardCreateAppNextList = [].slice.call(wizardCreateApp.querySelectorAll('.btn-next'));
                    const wizardCreateAppPrevList = [].slice.call(wizardCreateApp.querySelectorAll('.btn-prev'));
                    const wizardCreateAppBtnSubmit = wizardCreateApp.querySelector('.btn-submit');

                    const createAppStepper = new Stepper(wizardCreateApp, {
                        linear: false
                    });

                    if (wizardCreateAppNextList) {
                        wizardCreateAppNextList.forEach(wizardCreateAppNext => {
                            wizardCreateAppNext.addEventListener('click', event => {
                                createAppStepper.next();
                                initCleave();
                            });
                        });
                    }
                    if (wizardCreateAppPrevList) {
                        wizardCreateAppPrevList.forEach(wizardCreateAppPrev => {
                            wizardCreateAppPrev.addEventListener('click', event => {
                                createAppStepper.previous();
                                initCleave();
                            });
                        });
                    }

                    if (wizardCreateAppBtnSubmit) {
                        wizardCreateAppBtnSubmit.addEventListener('click', event => {
                            alert('Submitted..!!');
                        });
                    }
                }
            });
        });

    })

</script>
@endif --}}



<script>
    'use strict';

    
    dropZoneInitFunctions.push(function () {
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
                let i = 1;

            // Multiple Dropzone
            const dropzoneMulti = new Dropzone('#dropzone-img{{ $new->id }}', {
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
                    hiddenInputsContainer.innerHTML += `<input type="hidden" name="image[]" value="${response.path}" data-path="${response.path}">`;

                },
                removedfile: function (file) {
                    const hiddenInputsContainer = file.previewElement.closest('form').querySelector('.hidden-inputs');
                    hiddenInputsContainer.querySelector(`input[data-path="${file.previewElement.dataset.path}"]`).remove();
    
                    if (file.previewElement != null && file.previewElement.parentNode != null) {
                        file.previewElement.parentNode.removeChild(file.previewElement);
                    }
    
                    $.ajax({
                        url: '{{ route("news.delete-asset", $new->id) }}',
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
    
            @foreach ($new->image as $audio)
                $("document").ready(()=>{
                    var path = "{{ asset('storage/'.$audio) }}";
                    let name = "{{ basename($audio) }}";
                    let extension = getFileExtension(name);
                    console.log(extension);
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
                                file.previewElement.dataset.path = '{{ $audio }}';
                        });
                        file['upload'] = {
                            bytesSent: 0 ,
                            progress: 0 ,
                        };
     
                    // Update the preview template to include the music title

                        dropzoneMulti.emit("addedfile", file , path);
                        if(extension === 'jpg' || extension === 'png' || extension === 'jpeg'){
                            dropzoneMulti.emit("thumbnail", file , path);
                        }                        
                        dropzoneMulti.files.push(file);
                    });
                });
            @endforeach
            function getFileExtension(filename) {
                return filename.split('.').pop().toLowerCase();
        }
   
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