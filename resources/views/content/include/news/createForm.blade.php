<style>
  .dz-message {
    font-size: 20px !important;
}
.dropzone .dz-message {
    margin: 1em 0 !important;
}
.modal-content{
  overflow-y: scroll;
  scrollbar-width: thin;
    scrollbar-color: transparent transparent;
    /* For Firefox */
    scrollbar-width: thin;
    scrollbar-color: transparent transparent;
    /* For Webkit (Chrome, Safari, Edge) */
    &::-webkit-scrollbar {
        width: 0px;
    }
    &::-webkit-scrollbar-thumb {
        background-color: transparent;
    }
}
</style>
<div class="bs-stepper wizard-vertical shadow-none vertical mt-2">
    <div class="bs-stepper-header d-none" style="min-width: auto;">
        <div class="step d-none" data-target="#en">
            <button type="button" class="step-trigger">
            <span class="bs-stepper-circle">EN</span>
            </button>
        </div>
        {{-- <div class="line"></div>
        <div class="step" data-target="#de">
            <button type="button" class="step-trigger">
            <span class="bs-stepper-circle">DE</span>
            </button>
        </div>
        <div class="line"></div>
        <div class="step" data-target="#kr">
            <button type="button" class="step-trigger">
            <span class="bs-stepper-circle">KR</span>
            </button>
        </div>
        <div class="line"></div>
        <div class="step" data-target="#tr">
            <button type="button" class="step-trigger">
            <span class="bs-stepper-circle">TR</span>
            </button>
        </div>
        <div class="line"></div>
        <div class="step" data-target="#ir">
            <button type="button" class="step-trigger">
            <span class="bs-stepper-circle">IR</span>
            </button>
        </div> --}}
    </div>
    <div class="bs-stepper-content">
        <form id="createForm" method="POST" action="{{ route('news.store') }}" enctype="multipart/form-data">
            @csrf
    <div class="hidden-inputs"></div>

            <!-- EN -->
            <div id="en" class="content">
                <div class="row g-3">
                    <div class="col-md-12">
                        <label class="form-label" for="fullname">News Title</label>
                        <input type="text" id="fullname" class="form-control" placeholder="News Title" name="title">
                        @error('title')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- <div class="col-md-12">
                        <label class="form-label" for="fullname">Upload News Image/Video</label>
                        <input type="file" name="image[]" class="form-control" id="image" multiple accept="image/*,video/*" />
                        @error('image')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div> --}}


                    <div class="col-12">
                      <label class="form-label" for="fullname">Upload Image/Video</label>
                        <div class="card">

                            <div class="card-body">
                                <div class="dropzone needsclick" action="/" id="dropzone-img">
                                    <div class="dz-message needsclick">
                                        Drop files here or click to upload
                                    </div>
                                    <div class="fallback">
                                        <input type="file" name="image[]"  id="image"  accept="image/*,video/*"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <label class="form-label" for="inputDescription">News Description</label>
                        <textarea class="form-control"
                        {{-- id="inputDescription" --}}
                        name="description" rows="6" placeholder="Type..."></textarea>
                        @error('description')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- <div class="col-md-12">
                        <label class="form-label">Select Category</label>
                        <select class="form-select" aria-label="Default select example" name="category_id">
                            <option selected>Choose a Category</option>
                            @foreach($news_category as $news)
                            <option value="{{ $news->id }}">{{ $news->name ?? '' }}</option>
                            @endforeach
                        </select>
                        @error('image')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div> --}}
                    <div class="row mt-4">
                      <div class="col-md mb-md-0 mb-2">
                        <div class="form-check custom-option custom-option-basic">
                          <label class="form-check-label custom-option-content" for="customRadioTemp1">
                            <input name="customRadioTemp1" class="form-check-input" type="radio" value="" id="customRadioTemp1">
                            <span class="custom-option-header">
                              <span class="h6 mb-0">Comments</span>
                            </span>
                            <span class="custom-option-body">
                              <small>Get 1 project with 1 teams members.</small>
                            </span>
                          </label>
                        </div>
                      </div>
                      <div class="col-md">
                        <div class="form-check custom-option custom-option-basic">
                          <label class="form-check-label custom-option-content" for="customRadioTemp2">
                            <input name="customRadioTemp2" class="form-check-input" type="radio" value="" id="customRadioTemp2">
                            <span class="custom-option-header">
                              <span class="h6 mb-0">Voice Comments</span>
                            </span>
                            <span class="custom-option-body">
                              <small>Get 5 projects with 5 team members.</small>
                            </span>
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class="row mt-2">
                      <div class="col-md mb-md-0 mb-2">
                        <div class="form-check custom-option custom-option-basic">
                          <label class="form-check-label custom-option-content" for="customRadioTemp3">
                            <input name="customRadioTemp3" class="form-check-input" type="radio" value="" id="customRadioTemp3">
                            <span class="custom-option-header">
                              <span class="h6 mb-0">Share</span>
                            </span>
                            <span class="custom-option-body">
                              <small>Get 1 project with 1 teams members.</small>
                            </span>
                          </label>
                        </div>
                      </div>
                      <div class="col-md">
                        <div class="form-check custom-option custom-option-basic">
                          <label class="form-check-label custom-option-content" for="customRadioTemp4">
                            <input name="customRadioTemp4" class="form-check-input" type="radio" value="" id="customRadioTemp4">
                            <span class="custom-option-header">
                              <span class="h6 mb-0">Emotion</span>
                            </span>
                            <span class="custom-option-body">
                              <small>Get 5 projects with 5 team members.</small>
                            </span>
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="form-label">Start Date</label>
                        <input type="date" class="form-control" name="" id="">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="form-label">End Date</label>
                        <input type="date" class="form-control" name="" id="">
                      </div>
                    </div>

                    <div class="col-md-12">
                        <label class="form-label">Status</label>
                        <select class="form-select" aria-label="Default select example" name="status">
                            <option value="1" selected>Select status</option>
                            <option value="1">Published</option>
                            <option value="0">UnPublished</option>
                        </select>
                        @error('status')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-12 d-flex justify-content-center">
                        <button type="submit" class="btn btn-label-primary">
                            Submit
                         </button>
                    </div>
                    {{-- <div class="col-12 d-flex justify-content-between">
                        <button class="btn btn-label-secondary btn-prev" disabled>
                            <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                        </button>
                        <button class="btn btn-primary btn-next">
                            <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                            <i class="bx bx-chevron-right bx-sm me-sm-n2"></i>
                        </button>
                    </div> --}}
                </div>
            </div>
{{--
            <!-- DE -->
            <div id="de" class="content">
                <div class="content-header mb-3">
                    <h6 class="mb-0">DE</h6>
                    <small>Enter news in DE.</small>
                </div>
                <div class="col-12 d-flex justify-content-between">
                    <button class="btn btn-primary btn-prev">
                    <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                    </button>
                    <button class="btn btn-primary btn-next">
                    <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                    <i class="bx bx-chevron-right bx-sm me-sm-n2"></i>
                    </button>
                </div>
            </div> --}}

            <!-- KR -->
            {{-- <div id="kr" class="content">
            <div class="content-header mb-3">
                    <h6 class="mb-0">KR</h6>
                    <small>Enter news in KR.</small>
                </div>
                <div class="col-12 d-flex justify-content-between">
                    <button class="btn btn-primary btn-prev">
                    <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                    </button>
                    <button class="btn btn-primary btn-next">
                    <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                    <i class="bx bx-chevron-right bx-sm me-sm-n2"></i>
                    </button>
                </div>
            </div> --}}

            <!-- TR -->
            {{-- <div id="tr" class="content">
                <div class="content-header mb-3">
                    <h6 class="mb-0">TR</h6>
                    <small>Enter news in TR.</small>
                </div>
                <div class="col-12 d-flex justify-content-between">
                    <button class="btn btn-primary btn-prev">
                    <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                    </button>
                    <button class="btn btn-primary btn-next">
                    <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                    <i class="bx bx-chevron-right bx-sm me-sm-n2"></i>
                    </button>
                </div>
            </div> --}}

            <!-- IR -->
            {{-- <div id="ir" class="content">
                <div class="content-header mb-3">
                    <h6 class="mb-0">IR</h6>
                    <small>Enter news in IR.</small>
                </div>
                <div class="col-12 d-flex justify-content-between">
                    <button class="btn btn-primary btn-prev">
                    <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                    </button>
                    <button class="btn btn-success btn-submit">Submit</button>
                </div>
            </div> --}}
        </form>
    </div>
</div>

<script>
    window.addEventListener('load', () => {
        // Wizard
        const wizardVertical = document.querySelector('.wizard-vertical'),
        wizardVerticalBtnNextList = [].slice.call(wizardVertical.querySelectorAll('.btn-next')),
        wizardVerticalBtnPrevList = [].slice.call(wizardVertical.querySelectorAll('.btn-prev')),
        wizardVerticalBtnSubmit = wizardVertical.querySelector('.btn-submit');

        if (typeof wizardVertical !== undefined && wizardVertical !== null) {
            const verticalStepper = new Stepper(wizardVertical, {
            linear: false
            });
            if (wizardVerticalBtnNextList) {
            wizardVerticalBtnNextList.forEach(wizardVerticalBtnNext => {
                wizardVerticalBtnNext.addEventListener('click', event => {
                verticalStepper.next();
                });
            });
            }
            if (wizardVerticalBtnPrevList) {
            wizardVerticalBtnPrevList.forEach(wizardVerticalBtnPrev => {
                wizardVerticalBtnPrev.addEventListener('click', event => {
                verticalStepper.previous();
                });
            });
            }

            if (wizardVerticalBtnSubmit) {
            wizardVerticalBtnSubmit.addEventListener('click', event => {
                wizardVerticalBtnSubmit.closest('form').submit();
            });
            }
        }


    })
</script>

@if (false)
<!-- Property Listing Wizard -->
<div id="wizard-create-app" class="bs-stepper vertical mt-2 shadow-none border-0">
    <div class="bs-stepper-header border-0 p-1">
        <div class="row">
            <div class="col-md-2">
        <div class="step active" data-target="#en">
            <button type="button" class="step-trigger" aria-selected="true">
                <span class="bs-stepper-circle"><i class="bx bx-file fs-5"></i></span>
                <span class="bs-stepper-label">
                    <span class="bs-stepper-title text-uppercase">EN</span>
                </span>
            </button>
        </div>
        {{-- <div class="line"></div>
        <div class="step" data-target="#ir">
            <button type="button" class="step-trigger" aria-selected="false">
                <span class="bs-stepper-circle"><i class="bx bx-box fs-5"></i></span>
                <span class="bs-stepper-label">
                    <span class="bs-stepper-title text-uppercase">IR</span>
                </span>
            </button>
        </div> --}}
        {{-- <div class="line"></div>
        <div class="step" data-target="#kr">
            <button type="button" class="step-trigger" aria-selected="false">
                <span class="bs-stepper-circle"><i class="bx bx-box fs-5"></i></span>
                <span class="bs-stepper-label">
                    <span class="bs-stepper-title text-uppercase">KR</span>
                </span>
            </button>
        </div> --}}
        {{-- <div class="line"></div>
        <div class="step" data-target="#tr">
            <button type="button" class="step-trigger" aria-selected="false">
                <span class="bs-stepper-circle"><i class="bx bx-box fs-5"></i></span>
                <span class="bs-stepper-label">
                    <span class="bs-stepper-title text-uppercase">TR</span>
                </span>
            </button>
        </div> --}}
        {{-- <div class="line"></div>
        <div class="step" data-target="#de">
            <button type="button" class="step-trigger" aria-selected="false">
                <span class="bs-stepper-circle"><i class="bx bx-box fs-5"></i></span>
                <span class="bs-stepper-label">
                    <span class="bs-stepper-title text-uppercase">DE</span>
                </span>
            </button>
        </div> --}}
    </div>
    <div class="col-md-10">
        <div class="bs-stepper-content p-1">
            <!-- KR -->
            <div id="en" class="content pt-3 pt-lg-0 active dstepper-block">

                <form id="createForm" method="POST" action="{{ route('news.store') }}" enctype="multipart/form-data">
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
                                <button type="submit" class="btn btn-label-secondary"> <i class="bx bx-left-arrow-alt bx-xs me-sm-1 me-0"></i>
                                   Submit
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
{{--
                <div class="col-12 d-flex justify-content-between mt-4">
                    <button class="btn btn-label-secondary btn-prev" disabled=""> <i class="bx bx-left-arrow-alt bx-xs me-sm-1 me-0"></i>
                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                    </button>
                    <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-right-arrow-alt bx-xs"></i></button>
                </div> --}}
            </div>
            <!-- IR -->
            {{-- <div id="ir" class="content ">
                <form id="createForm" method="POST" action="" enctype="multipart/form-data">
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
            <!-- KR -->
            <div id="kr" class="content ">
                <form id="createForm" method="POST" action="" enctype="multipart/form-data">
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
            <div id="tr" class="content ">
                <form id="createForm" method="POST" action="" enctype="multipart/form-data">
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
            <div id="de" class="content ">
                <form id="createForm" method="POST" action="" enctype="multipart/form-data">
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
            </div> --}}

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
                const wizardCreateApp = document.querySelector('#wizard-create-app');
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
@endif

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
                    hiddenInputsContainer.innerHTML += `<input type="hidden" name="image[]" value="${response.path}" data-path="${response.path}">`;


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
