@extends('layouts/layoutMaster')

@section('title', 'Boxicons - Icons')

@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-icons.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/bs-stepper/bs-stepper.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/bootstrap-select/bootstrap-select.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css')}}" />
<!-- <link rel="stylesheet" href="{{asset('assets/vendor/libs/quill/typography.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/quill/katex.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/quill/editor.css')}}" /> -->
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.0/classic/ckeditor.js"></script>
@endsection

@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-icons.css')}}" />
@endsection

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bs-stepper/bs-stepper.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/tagify/tagify.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/animate-css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/dropzone/dropzone.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/friendkit/css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/friendkit/css/core.css') }}" />
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/wizard-ex-property-listing.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/bs-stepper/bs-stepper.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/tagify/tagify.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>
    <!-- Concatenated js plugins and jQuery -->
    <script src="{{asset('assets/friendkit/js/app.js')}}"></script>

    <!-- Core js -->
    <script src="{{asset('assets/friendkit/js/global.js')}}"></script>

    <!-- Navigation options js -->
    <script src="{{asset('assets/friendkit/js/navbar-v1.js')}}"></script>
    <script src="{{asset('assets/friendkit/js/navbar-v2.js')}}"></script>
    <script src="{{asset('assets/friendkit/js/navbar-mobile.js')}}"></script>
    <script src="{{asset('assets/friendkit/js/navbar-options.js')}}"></script>
    <script src="{{asset('assets/friendkit/js/sidebar-v1.js')}}"></script>

    <!-- Core instance js -->
    <script src="{{asset('assets/friendkit/js/main.js')}}"></script>
    <script src="{{asset('assets/friendkit/js/chat.js')}}"></script>
    <script src="{{asset('assets/friendkit/js/touch.js')}}"></script>
    <script src="{{asset('assets/friendkit/js/tour.js')}}"></script>

    <!-- Components js -->
    <script src="{{asset('assets/friendkit/js/explorer.js')}}"></script>
    <script src="{{asset('assets/friendkit/js/widgets.js')}}"></script>
    <script src="{{asset('assets/friendkit/js/modal-uploader.js')}}"></script>
    <script src="{{asset('assets/friendkit/js/popovers-users.js')}}"></script>
    <script src="{{asset('assets/friendkit/js/popovers-pages.js')}}"></script>
    <script src="{{asset('assets/friendkit/js/lightbox.js')}}"></script>

    <!-- Landing page js -->

    <!-- Signup page js -->

    <!-- Feed pages js -->
    <script src="{{asset('assets/friendkit/js/feed.js')}}"></script>

    <script src="{{asset('assets/friendkit/js/webcam.js')}}"></script>
    <script src="{{asset('assets/friendkit/js/compose.js')}}"></script>
    <script src="{{asset('assets/friendkit/js/autocompletes.js')}}"></script>
@endsection

@section('content')
<script>
    const dropZoneInitFunctions = [];
  </script>
  
  <style>
  .modal-content {
    overflow: inherit;
}


  </style>
<div class="row g-4 mb-4">
    <div class="col-sm-6  col-xl-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-start justify-content-between">
                    <div class="content-left">
                        <span>Total Category</span>
                        <div class="d-flex align-items-end mt-2">
                            <h4 class="mb-0 me-2">21,459</h4>
                            <small class="text-success">(+29%)</small>
                        </div>
                        <small>Last week analytics</small>
                    </div>
                    <span class="badge bg-label-primary rounded p-2">
                        <i class="bx bx-user bx-sm"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-start justify-content-between">
                    <div class="content-left">
                        <span>Total Vote</span>
                        <div class="d-flex align-items-end mt-2">
                            <h4 class="mb-0 me-2">4,567</h4>
                            <small class="text-success">(+18%)</small>
                        </div>
                        <small>Last week analytics </small>
                    </div>
                    <span class="badge bg-label-danger rounded p-2">
                        <i class="bx bx-user-plus bx-sm"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Basic Bootstrap Table -->
 <div class="card">
    <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="m-0">Voting List</h5>
            </div>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Thumbnail</th>
            <th>Total </th>
            <th>Likes </th>
            <th>Dislikes </th>
            <th>Option</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
                <tr>
            <td>5</td>
            <td>Tu ji şorba nîskê hez dikî?</td>
            <td><video loop="" class="rounded" controls="" style="width:150px; height:100px;">
              <source src="/storage/music/64feb52fea13d___Untitled_video.mp4">
            </video></td>
            <td>
            </td>
            <td></td>
            <td></td>
            <td>
                <div class="dropdown d-inline-block">
                    <!-- Edit -->
                    <!--<div class="dropdown is-spaced is-right is-neutral dropdown-trigger">-->
                                              <div>
                                                  <div class="">
                        <!--                              <button class="btn btn-sm btn-icon" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Block" aria-describedby="tooltip557134">-->
                        <!--    <i class="bx bx-block"></i>-->
                        <!--</button>-->
                          <button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#New"><i class="bx bx-block"></i></button>





                                                  </div>
                                              </div>
                                              <div class="dropdown-menu" role="menu">
                                                  <div class="dropdown-content">
                                                      <a href="javascript:void(0)" class="dropdown-item">
                                                          <div class="media">
                                                              <div class="media-content">
                                                                  <h3>Remove the Feed</h3>
                                                                  <select class="form-control mt-1">
                                                                    <option value="">Select the Reason</option>
                                                                  </select>
                                                              </div>
                                                          </div>
                                                      </a>
                                                      <a href="javascript:void(0)" class="dropdown-item">
                                                        <div class="media">
                                                            <div class="media-content">
                                                                <h3>Remove Feed - Flag FanPage</h3>
                                                                <select class="form-control mt-1">
                                                                  <option value="">Select the Reason</option>
                                                                </select>
                                                                <select class="form-control mt-1">
                                                                  <option value="">Select the Flag</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                      <div class="media">
                                                          <div class="media-content">
                                                            <h3>Remove Feed - Block FanPage</h3>
                                                            <select class="form-control mt-1">
                                                              <option value="">Select the Reason</option>
                                                            </select>
                                                            <select class="form-control mt-1">
                                                              <option value="">Select Downgrade User</option>
                                                            </select>
                                                          </div>
                                                      </div>
                                                  </a>
                                                  <a href="javascript:void(0)" class="dropdown-item">
                                                    <div class="media">
                                                        <div class="media-content">
                                                          <h3>Remove FanPage</h3>
                                                          <select class="form-control mt-1">
                                                            <option value="">Select the Reason</option>
                                                          </select>
                                                        </div>
                                                    </div>
                                                </a>
                                                  </div>
                                              </div>
                                          </div>

                    <!-- Delete -->
                    <form action="#" onsubmit="confirmAction(event, () => event.target.submit())" method="post" class="d-inline">
                        <input type="hidden" name="_method" value="DELETE">                        <input type="hidden" name="_token" value="KasQTbx4apX827TUGJn1VmENcQyNPWwRFgGPh4Z6">                                                <button type="submit" class="btn btn-sm btn-icon" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Remove"><i class="bx bx-trash me-1"></i></button>
                                            </form>
                </div>
                
                <div class="modal fade modal-6593d01ba4f26" id="editvotingModal5" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class=" w-100">
                    <h4 class="modal-title" id="modalCenterTitle">Edit Vote</h4>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
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
        
        
    </ul>
    <div class="tab-content">
        <div class="tab-pane fade active show" id="navs-en5" role="tabpanel">
            <form id="editForm5" method="POST" action="#" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="KasQTbx4apX827TUGJn1VmENcQyNPWwRFgGPh4Z6">                <input type="hidden" name="_method" value="PUT">                <div class="hidden-inputs">
                    <input type="hidden" name="image" value="music/64fed773cd147___Screenshot_1.png" data-path="music/64fed773cd147___Screenshot_1.png">
                </div>
                <div class="row">
                    <div class="col-lg-12 mx-auto">
                        <div class="row g-3">
                            <div class="col-md-12">
                                <label class="form-label" for="fullname">Title</label>
                                <input type="text" id="fullname" class="form-control" placeholder="title" name="name" value="Tu ji şorba nîskê hez dikî?">
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="category">Select Category</label>
                               <select class="form-select" name="category_id">
                                                                    <option value="2" selected="">Xwarin kurdî</option>
                                                                    <option value="3">Adetên kurdî</option>
                                                                    <option value="4">Dewleta kurdî</option>
                                                            </select>
                            </div>
                            <div class="col-12">
                                <div class="card">
                                    <h5 class="card-header">Banner</h5>
                                    <div class="card-body">
                                        <div class="dropzone needsclick dz-clickable dz-started" action="/" id="dropzone-img5">
                                            <div class="dz-message needsclick">
                                                Drop files here or click to upload
                                            </div>
                                            
                                        <div class="row dz-image-preview" data-path="music/64fed773cd147___Screenshot_1.png">                                            <div class="col-md-12 col-12 d-flex justify-content-center">                                                <div class="dz-preview dz-file-preview w-100">                                                    <div class="dz-details">                                                        <div class="dz-thumbnail" style="width:95%">                                                            <img data-dz-thumbnail="" alt="Screenshot_1.png" src="https://dash.yekbun.net/storage/music/64fed773cd147___Screenshot_1.png">                                                            <span class="dz-nopreview">No preview</span>                                                            <div class="dz-success-mark"></div>                                                            <div class="dz-error-mark"></div>                                                            <div class="dz-error-message"><span data-dz-errormessage=""></span></div>                                                                                                                  </div>                                                        <div class="dz-filename" data-dz-name="">Screenshot_1.png</div>                                                            <div class="dz-size" data-dz-size=""><strong>0.4</strong> MB</div>                                                                                                        </div>                                                </div>                                            </div>                                        <a class="dz-remove" href="javascript:undefined;" data-dz-remove="">Remove file</a></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="inputDescription5">Description</label>
                                <textarea class="form-control" name="description" style="height:150px;" id="inputDescription5" rows="5">&lt;p&gt;Şorba nîskê xwarineke kevneşopî ya kurdî ye, gelek vîtamînên saxlem tê de hene û te têr dike, pir caran bi nan û pîvaz re tê xwarin û gelek caran jî ji bo taştê tê dayîn.&lt;/p&gt;</textarea>
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
        <div class="tab-pane fade" id="navs-de5" role="tabpanel">
            <form id="editForm" method="POST" action="#" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="KasQTbx4apX827TUGJn1VmENcQyNPWwRFgGPh4Z6">                <input type="hidden" name="_method" value="PUT">                <div class="row">
                    <div class="col-lg-12 mx-auto">
                        <div class="row g-3">
                            <div class="col-md-12">
                                <label class="form-label" for="fullname">Title</label>
                                <input type="text" id="fullname" class="form-control" placeholder="title" name="name" value="Tu ji şorba nîskê hez dikî?">
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="fullname">Banner upload</label>
                                <input type="file" id="fullname" class="form-control" name="image">
                                <!-- <img src="https://dash.yekbun.net/storage/music/64fed773cd147___Screenshot_1.png"> -->
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="fullname">Select Category</label>
                                <select name="category_id" class="form-select">
                                    <option selected="">Choose a Category</option>
                                                                        <option value="2" selected="">Xwarin kurdî</option>
                                                                        <option value="3">Adetên kurdî</option>
                                                                        <option value="4">Dewleta kurdî</option>
                                                                    </select>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="inputDescription5">Description</label>
                                <textarea class="form-control" name="description" style="height:150px;" id="inputDescription5"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
        <div class="tab-pane fade" id="navs-kr5" role="tabpanel">
            <form id="editForm" method="POST" action="#" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="KasQTbx4apX827TUGJn1VmENcQyNPWwRFgGPh4Z6">                <input type="hidden" name="_method" value="PUT">                <div class="row">
                    <div class="col-lg-12 mx-auto">
                        <div class="row g-3">
                            <div class="col-md-12">
                                <label class="form-label" for="fullname">Title</label>
                                <input type="text" id="fullname" class="form-control" placeholder="title" name="name" value="Tu ji şorba nîskê hez dikî?">
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="fullname">Banner upload</label>
                                <input type="file" id="fullname" class="form-control" name="image">
                                <!-- <img src="https://dash.yekbun.net/storage/music/64fed773cd147___Screenshot_1.png"> -->
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="fullname">Select Category</label>
                                <select name="category_id" class="form-select">
                                    <option selected="">Choose a Category</option>
                                                                        <option value="2" selected="">Xwarin kurdî</option>
                                                                        <option value="3">Adetên kurdî</option>
                                                                        <option value="4">Dewleta kurdî</option>
                                                                    </select>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="inputDescription5">Description</label>
                                <textarea class="form-control" name="description" style="height:150px;" id="inputDescription5"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>

        <div class="tab-pane fade" id="navs-tr5" role="tabpanel">
            <form id="editForm" method="POST" action="#" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="KasQTbx4apX827TUGJn1VmENcQyNPWwRFgGPh4Z6">                <input type="hidden" name="_method" value="PUT">                <div class="row">
                    <div class="col-lg-12 mx-auto">
                        <div class="row g-3">
                            <div class="col-md-12">
                                <label class="form-label" for="fullname">Title</label>
                                <input type="text" id="fullname" class="form-control" placeholder="title" name="name" value="Tu ji şorba nîskê hez dikî?">
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="fullname">Banner upload</label>
                                <input type="file" id="fullname" class="form-control" name="image">
                                <!-- <img src="https://dash.yekbun.net/storage/music/64fed773cd147___Screenshot_1.png"> -->
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="fullname">Select Category</label>
                                <select name="category_id" class="form-select">
                                    <option selected="">Choose a Category</option>
                                                                        <option value="2" selected="">Xwarin kurdî</option>
                                                                        <option value="3">Adetên kurdî</option>
                                                                        <option value="4">Dewleta kurdî</option>
                                                                    </select>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="inputDescription5">Description</label>
                                <textarea class="form-control" name="description" style="height:150px;" id="inputDescription5"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>

        <div class="tab-pane fade" id="navs-ir5" role="tabpanel">
            <form id="editForm" method="POST" action="#" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="KasQTbx4apX827TUGJn1VmENcQyNPWwRFgGPh4Z6">                <input type="hidden" name="_method" value="PUT">                <div class="row">
                    <div class="col-lg-12 mx-auto">
                        <div class="row g-3">
                            <div class="col-md-12">
                                <label class="form-label" for="fullname">Title</label>
                                <input type="text" id="fullname" class="form-control" placeholder="title" name="name" value="Tu ji şorba nîskê hez dikî?">
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="fullname">Banner upload</label>
                                <input type="file" id="fullname" class="form-control" name="image">
                                <!-- <img src="https://dash.yekbun.net/storage/music/64fed773cd147___Screenshot_1.png"> -->
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="fullname">Select Category</label>
                                <select name="category_id" class="form-select">
                                    <option selected="">Choose a Category</option>
                                                                        <option value="2" selected="">Xwarin kurdî</option>
                                                                        <option value="3">Adetên kurdî</option>
                                                                        <option value="4">Dewleta kurdî</option>
                                                                    </select>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="inputDescription5">Description</label>
                                <textarea class="form-control" name="description" style="height:150px;" id="inputDescription5"></textarea>
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
        // const fullToolbar5 = [
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
        // const fullEditor5 = new Quill('#inputDescription5', {
        //     bounds: '#full-editor'
        //     , placeholder: 'Type Something...'
        //     , modules: {
        //         formula: true
        //         , toolbar: fullToolbar5
        //     }
        //     , theme: 'snow'
        // });

        ClassicEditor
        .create( document.querySelector( '#inputDescription5' ) )
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
        const dropzoneMulti1 = new Dropzone('#dropzone-img5', {
            url: 'https://dash.yekbun.net/file/upload',
            previewTemplate: previewTemplate,
            parallelUploads: 1,
            maxFilesize: 100,
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': 'KasQTbx4apX827TUGJn1VmENcQyNPWwRFgGPh4Z6'
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
                    url: '#/banner',
                    method: 'delete',
                    headers: {
                        'X-CSRF-TOKEN': 'KasQTbx4apX827TUGJn1VmENcQyNPWwRFgGPh4Z6'
                    },
                    data: {
                        path: file.previewElement.dataset.path
                    },
                    success: function() {}
                });

                return this._updateMaxFilesReachedClass();
            }
        });

                window.addEventListener('load' , () => {
            var path = "https://dash.yekbun.net/storage/music/64fed773cd147___Screenshot_1.png";
            var rpath = "music/64fed773cd147___Screenshot_1.png";
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
        const file = new File([blob], fileName[1], { type: blob.type });

        return file;
    }
</script>
            </div>
                        <div class="modal-footer">
                                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" form="editForm5" class="btn btn-primary" onclick="">Update</button>
                                                </div>
                    </div>
    </div>
</div>

            </td>
        </tr>
                <tr>
            <td>6</td>
            <td>Tu ji dîlanên kurdî hez dikî?</td>
            <td><video loop="" class="rounded" controls="" style="width:150px; height:100px;">
              <source src="/storage/music/64feb52fea13d___Untitled_video.mp4">
            </video></td>
            <td>
            </td>
            <td></td>
            <td></td>
            <td>
                <div class="dropdown d-inline-block">
                    <!-- Edit -->
                   <!--<div class="dropdown is-spaced is-right is-neutral dropdown-trigger">-->
                                              <div>
                                                  <div class="">
                        <!--                              <button class="btn btn-sm btn-icon" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Block" aria-describedby="tooltip557134">-->
                        <!--    <i class="bx bx-block"></i>-->
                        <!--</button>-->
                         <button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#New"><i class="bx bx-block"></i></button>



                                                  </div>
                                              </div>
                                              <div class="dropdown-menu" role="menu">
                                                  <div class="dropdown-content">
                                                      <a href="javascript:void(0)" class="dropdown-item">
                                                          <div class="media">
                                                              <div class="media-content">
                                                                  <h3>Remove the Feed</h3>
                                                                  <select class="form-control mt-1">
                                                                    <option value="">Select the Reason</option>
                                                                  </select>
                                                              </div>
                                                          </div>
                                                      </a>
                                                      <a href="javascript:void(0)" class="dropdown-item">
                                                        <div class="media">
                                                            <div class="media-content">
                                                                <h3>Remove Feed - Flag FanPage</h3>
                                                                <select class="form-control mt-1">
                                                                  <option value="">Select the Reason</option>
                                                                </select>
                                                                <select class="form-control mt-1">
                                                                  <option value="">Select the Flag</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                      <div class="media">
                                                          <div class="media-content">
                                                            <h3>Remove Feed - Block FanPage</h3>
                                                            <select class="form-control mt-1">
                                                              <option value="">Select the Reason</option>
                                                            </select>
                                                            <select class="form-control mt-1">
                                                              <option value="">Select Downgrade User</option>
                                                            </select>
                                                          </div>
                                                      </div>
                                                  </a>
                                                  <a href="javascript:void(0)" class="dropdown-item">
                                                    <div class="media">
                                                        <div class="media-content">
                                                          <h3>Remove FanPage</h3>
                                                          <select class="form-control mt-1">
                                                            <option value="">Select the Reason</option>
                                                          </select>
                                                        </div>
                                                    </div>
                                                </a>
                                                  </div>
                                              </div>
                                          </div>

                    <!-- Delete -->
                    <form action="#" onsubmit="confirmAction(event, () => event.target.submit())" method="post" class="d-inline">
                        <input type="hidden" name="_method" value="DELETE">                        <input type="hidden" name="_token" value="KasQTbx4apX827TUGJn1VmENcQyNPWwRFgGPh4Z6">                                                <button type="submit" class="btn btn-sm btn-icon" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Remove"><i class="bx bx-trash me-1"></i></button>
                                            </form>
                </div>
                
                <div class="modal fade modal-6593d01ba55a1" id="editvotingModal6" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class=" w-100">
                    <h4 class="modal-title" id="modalCenterTitle">Edit Vote</h4>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
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
        
        
    </ul>
    <div class="tab-content">
        <div class="tab-pane fade active show" id="navs-en6" role="tabpanel">
            <form id="editForm6" method="POST" action="#" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="KasQTbx4apX827TUGJn1VmENcQyNPWwRFgGPh4Z6">                <input type="hidden" name="_method" value="PUT">                <div class="hidden-inputs">
                    <input type="hidden" name="image" value="music/64feda370816d___henna.jpeg" data-path="music/64feda370816d___henna.jpeg">
                </div>
                <div class="row">
                    <div class="col-lg-12 mx-auto">
                        <div class="row g-3">
                            <div class="col-md-12">
                                <label class="form-label" for="fullname">Title</label>
                                <input type="text" id="fullname" class="form-control" placeholder="title" name="name" value="Tu ji dîlanên kurdî hez dikî?">
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="category">Select Category</label>
                               <select class="form-select" name="category_id">
                                                                    <option value="2">Xwarin kurdî</option>
                                                                    <option value="3" selected="">Adetên kurdî</option>
                                                                    <option value="4">Dewleta kurdî</option>
                                                            </select>
                            </div>
                            <div class="col-12">
                                <div class="card">
                                    <h5 class="card-header">Banner</h5>
                                    <div class="card-body">
                                        <div class="dropzone needsclick dz-clickable dz-started" action="/" id="dropzone-img6">
                                            <div class="dz-message needsclick">
                                                Drop files here or click to upload
                                            </div>
                                            
                                        <div class="row dz-image-preview" data-path="music/64feda370816d___henna.jpeg">                                            <div class="col-md-12 col-12 d-flex justify-content-center">                                                <div class="dz-preview dz-file-preview w-100">                                                    <div class="dz-details">                                                        <div class="dz-thumbnail" style="width:95%">                                                            <img data-dz-thumbnail="" alt="henna.jpeg" src="https://dash.yekbun.net/storage/music/64feda370816d___henna.jpeg">                                                            <span class="dz-nopreview">No preview</span>                                                            <div class="dz-success-mark"></div>                                                            <div class="dz-error-mark"></div>                                                            <div class="dz-error-message"><span data-dz-errormessage=""></span></div>                                                                                                                  </div>                                                        <div class="dz-filename" data-dz-name="">henna.jpeg</div>                                                            <div class="dz-size" data-dz-size=""><strong>12.6</strong> KB</div>                                                                                                        </div>                                                </div>                                            </div>                                        <a class="dz-remove" href="javascript:undefined;" data-dz-remove="">Remove file</a></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="inputDescription6">Description</label>
                                <textarea class="form-control" name="description" style="height:150px;" id="inputDescription6" rows="5">&lt;p&gt;Gelek dîlanên kurdî hene, gelek caran jin û mêr ji hev cuda direqisin&lt;/p&gt;</textarea>
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
        <div class="tab-pane fade" id="navs-de6" role="tabpanel">
            <form id="editForm" method="POST" action="#" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="KasQTbx4apX827TUGJn1VmENcQyNPWwRFgGPh4Z6">                <input type="hidden" name="_method" value="PUT">                <div class="row">
                    <div class="col-lg-12 mx-auto">
                        <div class="row g-3">
                            <div class="col-md-12">
                                <label class="form-label" for="fullname">Title</label>
                                <input type="text" id="fullname" class="form-control" placeholder="title" name="name" value="Tu ji dîlanên kurdî hez dikî?">
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="fullname">Banner upload</label>
                                <input type="file" id="fullname" class="form-control" name="image">
                                <!-- <img src="https://dash.yekbun.net/storage/music/64feda370816d___henna.jpeg"> -->
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="fullname">Select Category</label>
                                <select name="category_id" class="form-select">
                                    <option selected="">Choose a Category</option>
                                                                        <option value="2">Xwarin kurdî</option>
                                                                        <option value="3" selected="">Adetên kurdî</option>
                                                                        <option value="4">Dewleta kurdî</option>
                                                                    </select>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="inputDescription6">Description</label>
                                <textarea class="form-control" name="description" style="height:150px;" id="inputDescription6"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
        <div class="tab-pane fade" id="navs-kr6" role="tabpanel">
            <form id="editForm" method="POST" action="#" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="KasQTbx4apX827TUGJn1VmENcQyNPWwRFgGPh4Z6">                <input type="hidden" name="_method" value="PUT">                <div class="row">
                    <div class="col-lg-12 mx-auto">
                        <div class="row g-3">
                            <div class="col-md-12">
                                <label class="form-label" for="fullname">Title</label>
                                <input type="text" id="fullname" class="form-control" placeholder="title" name="name" value="Tu ji dîlanên kurdî hez dikî?">
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="fullname">Banner upload</label>
                                <input type="file" id="fullname" class="form-control" name="image">
                                <!-- <img src="https://dash.yekbun.net/storage/music/64feda370816d___henna.jpeg"> -->
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="fullname">Select Category</label>
                                <select name="category_id" class="form-select">
                                    <option selected="">Choose a Category</option>
                                                                        <option value="2">Xwarin kurdî</option>
                                                                        <option value="3" selected="">Adetên kurdî</option>
                                                                        <option value="4">Dewleta kurdî</option>
                                                                    </select>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="inputDescription6">Description</label>
                                <textarea class="form-control" name="description" style="height:150px;" id="inputDescription6"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>

        <div class="tab-pane fade" id="navs-tr6" role="tabpanel">
            <form id="editForm" method="POST" action="#" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="KasQTbx4apX827TUGJn1VmENcQyNPWwRFgGPh4Z6">                <input type="hidden" name="_method" value="PUT">                <div class="row">
                    <div class="col-lg-12 mx-auto">
                        <div class="row g-3">
                            <div class="col-md-12">
                                <label class="form-label" for="fullname">Title</label>
                                <input type="text" id="fullname" class="form-control" placeholder="title" name="name" value="Tu ji dîlanên kurdî hez dikî?">
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="fullname">Banner upload</label>
                                <input type="file" id="fullname" class="form-control" name="image">
                                <!-- <img src="https://dash.yekbun.net/storage/music/64feda370816d___henna.jpeg"> -->
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="fullname">Select Category</label>
                                <select name="category_id" class="form-select">
                                    <option selected="">Choose a Category</option>
                                                                        <option value="2">Xwarin kurdî</option>
                                                                        <option value="3" selected="">Adetên kurdî</option>
                                                                        <option value="4">Dewleta kurdî</option>
                                                                    </select>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="inputDescription6">Description</label>
                                <textarea class="form-control" name="description" style="height:150px;" id="inputDescription6"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>

        <div class="tab-pane fade" id="navs-ir6" role="tabpanel">
            <form id="editForm" method="POST" action="#" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="KasQTbx4apX827TUGJn1VmENcQyNPWwRFgGPh4Z6">                <input type="hidden" name="_method" value="PUT">                <div class="row">
                    <div class="col-lg-12 mx-auto">
                        <div class="row g-3">
                            <div class="col-md-12">
                                <label class="form-label" for="fullname">Title</label>
                                <input type="text" id="fullname" class="form-control" placeholder="title" name="name" value="Tu ji dîlanên kurdî hez dikî?">
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="fullname">Banner upload</label>
                                <input type="file" id="fullname" class="form-control" name="image">
                                <!-- <img src="https://dash.yekbun.net/storage/music/64feda370816d___henna.jpeg"> -->
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="fullname">Select Category</label>
                                <select name="category_id" class="form-select">
                                    <option selected="">Choose a Category</option>
                                                                        <option value="2">Xwarin kurdî</option>
                                                                        <option value="3" selected="">Adetên kurdî</option>
                                                                        <option value="4">Dewleta kurdî</option>
                                                                    </select>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="inputDescription6">Description</label>
                                <textarea class="form-control" name="description" style="height:150px;" id="inputDescription6"></textarea>
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
        // const fullToolbar6 = [
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
        // const fullEditor6 = new Quill('#inputDescription6', {
        //     bounds: '#full-editor'
        //     , placeholder: 'Type Something...'
        //     , modules: {
        //         formula: true
        //         , toolbar: fullToolbar6
        //     }
        //     , theme: 'snow'
        // });

        ClassicEditor
        .create( document.querySelector( '#inputDescription6' ) )
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
        const dropzoneMulti1 = new Dropzone('#dropzone-img6', {
            url: 'https://dash.yekbun.net/file/upload',
            previewTemplate: previewTemplate,
            parallelUploads: 1,
            maxFilesize: 100,
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': 'KasQTbx4apX827TUGJn1VmENcQyNPWwRFgGPh4Z6'
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
                    url: '#/banner',
                    method: 'delete',
                    headers: {
                        'X-CSRF-TOKEN': 'KasQTbx4apX827TUGJn1VmENcQyNPWwRFgGPh4Z6'
                    },
                    data: {
                        path: file.previewElement.dataset.path
                    },
                    success: function() {}
                });

                return this._updateMaxFilesReachedClass();
            }
        });

                window.addEventListener('load' , () => {
            var path = "https://dash.yekbun.net/storage/music/64feda370816d___henna.jpeg";
            var rpath = "music/64feda370816d___henna.jpeg";
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
        const file = new File([blob], fileName[1], { type: blob.type });

        return file;
    }
</script>
            </div>
                        <div class="modal-footer">
                                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" form="editForm6" class="btn btn-primary" onclick="">Update</button>
                                                </div>
                    </div>
    </div>
</div>

            </td>
        </tr>
                <tr>
            <td>7</td>
            <td>Vekirina ofîsa welatiyan le Rojava</td>
            <td><video loop="" class="rounded" controls="" style="width:150px; height:100px;">
              <source src="/storage/music/64feb52fea13d___Untitled_video.mp4">
            </video></td>
            <td>
            </td>
            <td></td>
            <td></td>
            <td>
                <div class="dropdown d-inline-block">
                    <!-- Edit -->
                    <!--<div class="dropdown is-spaced is-right is-neutral dropdown-trigger">-->
                                              <div>
                                                  <div class="">
                        <!--                              <button class="btn btn-sm btn-icon" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Block" aria-describedby="tooltip557134">-->
                        <!--    <i class="bx bx-block"></i>-->
                        <!--</button>-->
                         <button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#New"><i class="bx bx-block"></i></button>



                                                  </div>
                                              </div>
                                              <div class="dropdown-menu" role="menu">
                                                  <div class="dropdown-content">
                                                      <a href="javascript:void(0)" class="dropdown-item">
                                                          <div class="media">
                                                              <div class="media-content">
                                                                  <h3>Remove the Feed</h3>
                                                                  <select class="form-control mt-1">
                                                                    <option value="">Select the Reason</option>
                                                                  </select>
                                                              </div>
                                                          </div>
                                                      </a>
                                                      <a href="javascript:void(0)" class="dropdown-item">
                                                        <div class="media">
                                                            <div class="media-content">
                                                                <h3>Remove Feed - Flag FanPage</h3>
                                                                <select class="form-control mt-1">
                                                                  <option value="">Select the Reason</option>
                                                                </select>
                                                                <select class="form-control mt-1">
                                                                  <option value="">Select the Flag</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                      <div class="media">
                                                          <div class="media-content">
                                                            <h3>Remove Feed - Block FanPage</h3>
                                                            <select class="form-control mt-1">
                                                              <option value="">Select the Reason</option>
                                                            </select>
                                                            <select class="form-control mt-1">
                                                              <option value="">Select Downgrade User</option>
                                                            </select>
                                                          </div>
                                                      </div>
                                                  </a>
                                                  <a href="javascript:void(0)" class="dropdown-item">
                                                    <div class="media">
                                                        <div class="media-content">
                                                          <h3>Remove FanPage</h3>
                                                          <select class="form-control mt-1">
                                                            <option value="">Select the Reason</option>
                                                          </select>
                                                        </div>
                                                    </div>
                                                </a>
                                                  </div>
                                              </div>
                                          </div>

                    <!-- Delete -->
                    <form action="#" onsubmit="confirmAction(event, () => event.target.submit())" method="post" class="d-inline">
                        <input type="hidden" name="_method" value="DELETE">                        <input type="hidden" name="_token" value="KasQTbx4apX827TUGJn1VmENcQyNPWwRFgGPh4Z6">                                                <button type="submit" class="btn btn-sm btn-icon" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Remove"><i class="bx bx-trash me-1"></i></button>
                                            </form>
                </div>
                
                <div class="modal fade modal-6593d01ba5bf5" id="editvotingModal7" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class=" w-100">
                    <h4 class="modal-title" id="modalCenterTitle">Edit Vote</h4>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
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
        
        
    </ul>
    <div class="tab-content">
        <div class="tab-pane fade active show" id="navs-en7" role="tabpanel">
            <form id="editForm7" method="POST" action="#" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="KasQTbx4apX827TUGJn1VmENcQyNPWwRFgGPh4Z6">                <input type="hidden" name="_method" value="PUT">                <div class="hidden-inputs">
                    <input type="hidden" name="image" value="music/64fedb7ce9a6a___office.jpeg" data-path="music/64fedb7ce9a6a___office.jpeg">
                </div>
                <div class="row">
                    <div class="col-lg-12 mx-auto">
                        <div class="row g-3">
                            <div class="col-md-12">
                                <label class="form-label" for="fullname">Title</label>
                                <input type="text" id="fullname" class="form-control" placeholder="title" name="name" value="Vekirina ofîsa welatiyan le Rojava">
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="category">Select Category</label>
                               <select class="form-select" name="category_id">
                                                                    <option value="2">Xwarin kurdî</option>
                                                                    <option value="3">Adetên kurdî</option>
                                                                    <option value="4" selected="">Dewleta kurdî</option>
                                                            </select>
                            </div>
                            <div class="col-12">
                                <div class="card">
                                    <h5 class="card-header">Banner</h5>
                                    <div class="card-body">
                                        <div class="dropzone needsclick dz-clickable dz-started" action="/" id="dropzone-img7">
                                            <div class="dz-message needsclick">
                                                Drop files here or click to upload
                                            </div>
                                            
                                        <div class="row dz-image-preview" data-path="music/64fedb7ce9a6a___office.jpeg">                                            <div class="col-md-12 col-12 d-flex justify-content-center">                                                <div class="dz-preview dz-file-preview w-100">                                                    <div class="dz-details">                                                        <div class="dz-thumbnail" style="width:95%">                                                            <img data-dz-thumbnail="" alt="office.jpeg" src="https://dash.yekbun.net/storage/music/64fedb7ce9a6a___office.jpeg">                                                            <span class="dz-nopreview">No preview</span>                                                            <div class="dz-success-mark"></div>                                                            <div class="dz-error-mark"></div>                                                            <div class="dz-error-message"><span data-dz-errormessage=""></span></div>                                                                                                                  </div>                                                        <div class="dz-filename" data-dz-name="">office.jpeg</div>                                                            <div class="dz-size" data-dz-size=""><strong>12.1</strong> KB</div>                                                                                                        </div>                                                </div>                                            </div>                                        <a class="dz-remove" href="javascript:undefined;" data-dz-remove="">Remove file</a></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="inputDescription7">Description</label>
                                <textarea class="form-control" name="description" style="height:150px;" id="inputDescription7" rows="5">&lt;p&gt;Parêzgeha Rojava dixwaze ofîsekê ji welatiyên xwe re veke û tê de welatî giliyên xwe pêşkêş bikin.&lt;/p&gt;</textarea>
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
        <div class="tab-pane fade" id="navs-de7" role="tabpanel">
            <form id="editForm" method="POST" action="#" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="KasQTbx4apX827TUGJn1VmENcQyNPWwRFgGPh4Z6">                <input type="hidden" name="_method" value="PUT">                <div class="row">
                    <div class="col-lg-12 mx-auto">
                        <div class="row g-3">
                            <div class="col-md-12">
                                <label class="form-label" for="fullname">Title</label>
                                <input type="text" id="fullname" class="form-control" placeholder="title" name="name" value="Vekirina ofîsa welatiyan le Rojava">
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="fullname">Banner upload</label>
                                <input type="file" id="fullname" class="form-control" name="image">
                                <!-- <img src="https://dash.yekbun.net/storage/music/64fedb7ce9a6a___office.jpeg"> -->
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="fullname">Select Category</label>
                                <select name="category_id" class="form-select">
                                    <option selected="">Choose a Category</option>
                                                                        <option value="2">Xwarin kurdî</option>
                                                                        <option value="3">Adetên kurdî</option>
                                                                        <option value="4" selected="">Dewleta kurdî</option>
                                                                    </select>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="inputDescription7">Description</label>
                                <textarea class="form-control" name="description" style="height:150px;" id="inputDescription7"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
        <div class="tab-pane fade" id="navs-kr7" role="tabpanel">
            <form id="editForm" method="POST" action="#" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="KasQTbx4apX827TUGJn1VmENcQyNPWwRFgGPh4Z6">                <input type="hidden" name="_method" value="PUT">                <div class="row">
                    <div class="col-lg-12 mx-auto">
                        <div class="row g-3">
                            <div class="col-md-12">
                                <label class="form-label" for="fullname">Title</label>
                                <input type="text" id="fullname" class="form-control" placeholder="title" name="name" value="Vekirina ofîsa welatiyan le Rojava">
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="fullname">Banner upload</label>
                                <input type="file" id="fullname" class="form-control" name="image">
                                <!-- <img src="https://dash.yekbun.net/storage/music/64fedb7ce9a6a___office.jpeg"> -->
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="fullname">Select Category</label>
                                <select name="category_id" class="form-select">
                                    <option selected="">Choose a Category</option>
                                                                        <option value="2">Xwarin kurdî</option>
                                                                        <option value="3">Adetên kurdî</option>
                                                                        <option value="4" selected="">Dewleta kurdî</option>
                                                                    </select>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="inputDescription7">Description</label>
                                <textarea class="form-control" name="description" style="height:150px;" id="inputDescription7"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>

        <div class="tab-pane fade" id="navs-tr7" role="tabpanel">
            <form id="editForm" method="POST" action="#" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="KasQTbx4apX827TUGJn1VmENcQyNPWwRFgGPh4Z6">                <input type="hidden" name="_method" value="PUT">                <div class="row">
                    <div class="col-lg-12 mx-auto">
                        <div class="row g-3">
                            <div class="col-md-12">
                                <label class="form-label" for="fullname">Title</label>
                                <input type="text" id="fullname" class="form-control" placeholder="title" name="name" value="Vekirina ofîsa welatiyan le Rojava">
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="fullname">Banner upload</label>
                                <input type="file" id="fullname" class="form-control" name="image">
                                <!-- <img src="https://dash.yekbun.net/storage/music/64fedb7ce9a6a___office.jpeg"> -->
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="fullname">Select Category</label>
                                <select name="category_id" class="form-select">
                                    <option selected="">Choose a Category</option>
                                                                        <option value="2">Xwarin kurdî</option>
                                                                        <option value="3">Adetên kurdî</option>
                                                                        <option value="4" selected="">Dewleta kurdî</option>
                                                                    </select>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="inputDescription7">Description</label>
                                <textarea class="form-control" name="description" style="height:150px;" id="inputDescription7"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>

        <div class="tab-pane fade" id="navs-ir7" role="tabpanel">
            <form id="editForm" method="POST" action="#" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="KasQTbx4apX827TUGJn1VmENcQyNPWwRFgGPh4Z6">                <input type="hidden" name="_method" value="PUT">                <div class="row">
                    <div class="col-lg-12 mx-auto">
                        <div class="row g-3">
                            <div class="col-md-12">
                                <label class="form-label" for="fullname">Title</label>
                                <input type="text" id="fullname" class="form-control" placeholder="title" name="name" value="Vekirina ofîsa welatiyan le Rojava">
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="fullname">Banner upload</label>
                                <input type="file" id="fullname" class="form-control" name="image">
                                <!-- <img src="https://dash.yekbun.net/storage/music/64fedb7ce9a6a___office.jpeg"> -->
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="fullname">Select Category</label>
                                <select name="category_id" class="form-select">
                                    <option selected="">Choose a Category</option>
                                                                        <option value="2">Xwarin kurdî</option>
                                                                        <option value="3">Adetên kurdî</option>
                                                                        <option value="4" selected="">Dewleta kurdî</option>
                                                                    </select>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="inputDescription7">Description</label>
                                <textarea class="form-control" name="description" style="height:150px;" id="inputDescription7"></textarea>
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
        // const fullToolbar7 = [
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
        // const fullEditor7 = new Quill('#inputDescription7', {
        //     bounds: '#full-editor'
        //     , placeholder: 'Type Something...'
        //     , modules: {
        //         formula: true
        //         , toolbar: fullToolbar7
        //     }
        //     , theme: 'snow'
        // });

        ClassicEditor
        .create( document.querySelector( '#inputDescription7' ) )
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
        const dropzoneMulti1 = new Dropzone('#dropzone-img7', {
            url: 'https://dash.yekbun.net/file/upload',
            previewTemplate: previewTemplate,
            parallelUploads: 1,
            maxFilesize: 100,
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': 'KasQTbx4apX827TUGJn1VmENcQyNPWwRFgGPh4Z6'
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
                    url: '#/banner',
                    method: 'delete',
                    headers: {
                        'X-CSRF-TOKEN': 'KasQTbx4apX827TUGJn1VmENcQyNPWwRFgGPh4Z6'
                    },
                    data: {
                        path: file.previewElement.dataset.path
                    },
                    success: function() {}
                });

                return this._updateMaxFilesReachedClass();
            }
        });

                window.addEventListener('load' , () => {
            var path = "https://dash.yekbun.net/storage/music/64fedb7ce9a6a___office.jpeg";
            var rpath = "music/64fedb7ce9a6a___office.jpeg";
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
        const file = new File([blob], fileName[1], { type: blob.type });

        return file;
    }
</script>
            </div>
                        <div class="modal-footer">
                                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" form="editForm7" class="btn btn-primary" onclick="">Update</button>
                                                </div>
                    </div>
    </div>
</div>

            </td>
        </tr>
                </tbody>
      </table>
    </div>
  </div>
  <!--/ Basic Bootstrap Table -->

<div class="modal fade deleted-modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="padding-right: 17px;" aria-modal="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Banner</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="mb-0">Are you Sure to delete this!</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <form action="" method="post" id="delete_form">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Yes</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    function delete_service(el) {
        let link = $(el).data('id');
        $('.deleted-modal').modal('show');
        $('#delete_form').attr('action', link);
    }

</script>

{{-- Create Vote model --}}
<x-modal
id="createvotingModal"
title="Create Vote"
saveBtnText="Create"
saveBtnType="submit"
saveBtnForm="createForm"
size="md">
</x-modal>


<x-modal
id="New"
title="Request Deined"
saveBtnText="Submit"
saveBtnType="button"
saveBtnForm="createForm"
size="md">
 @include('content.include.live_stream.block_modal')
</x-modal>

<x-modal
id="requestView"
title="Request Deined"
saveBtnText="Submit"
saveBtnType="button"
saveBtnForm="createForm"
size="md">
 @include('content.include.live_stream.view_request')
</x-modal>
<!-- <script src="{{asset('assets/vendor/libs/quill/katex.js')}}"></script>
<script src="{{asset('assets/vendor/libs/quill/quill.js')}}"></script> -->
<script>
    (function() {
        // Full Toolbar
        // --------------------------------------------------------------------
        // const fullToolbar = [
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
        // const fullEditor = new Quill('#inputDescription', {
        //     bounds: '#full-editor'
        //     , placeholder: 'Type Something...'
        //     , modules: {
        //         formula: true
        //         , toolbar: fullToolbar
        //     }
        //     , theme: 'snow'
        // });

        ClassicEditor
        .create( document.querySelector( '#inputDescription' ) )
        .catch( error => {
            console.error( error );
        } );

    }());

</script>

@endsection

@section('page-script')
<script>
  function confirmAction(event, callback) {
    event.preventDefault();
    Swal.fire({
      title: 'Are you sure?',
      text: "Are you sure you want to delete this?",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Yes, delete it!',
      customClass: {
        confirmButton: 'btn btn-danger me-3',
        cancelButton: 'btn btn-label-secondary'
      },
      buttonsStyling: false
    })
  }
</script>

<script>
// bootstrap-maxlength & repeater (jquery)
$(function () {
  //var maxlengthInput = $('.bootstrap-maxlength-example'),
    var formRepeater = $('.form-repeater');

  // Bootstrap Max Length
  // --------------------------------------------------------------------
//   if (maxlengthInput.length) {
//     maxlengthInput.each(function () {
//       $(this).maxlength({
//         warningClass: 'label label-success bg-success text-white',
//         limitReachedClass: 'label label-danger',
//         separator: ' out of ',
//         preText: 'You typed ',
//         postText: ' chars available.',
//         validate: true,
//         threshold: +this.getAttribute('maxlength')
//       });
//     });
//   }

  // Form Repeater
  // ! Using jQuery each loop to add dynamic id and class for inputs. You may need to improve it based on form fields.
  // -----------------------------------------------------------------------------------------------------------------

  if (formRepeater.length) {
    var row = 2;
    var col = 1;
    formRepeater.on('submit', function (e) {
      e.preventDefault();
    });
    formRepeater.repeater({
        // initEmpty: true,
      show: function () {
        var fromControl = $(this).find('.form-control, .form-select');
        var formLabel = $(this).find('.form-label');

        fromControl.each(function (i) {
          var id = 'form-repeater-' + row + '-' + col;
          $(fromControl[i]).attr('id', id);
          $(formLabel[i]).attr('for', id);
          col++;
        });

        row++;

        $(this).slideDown();
      },
      hide: function (e) {
        $(this).slideUp(e);
      }
    });
  }
});
</script>
<script>
    function drpzone_init() {
        dropZoneInitFunctions.forEach(callback => callback());
    }
  </script>
  <script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js" onload="drpzone_init()"></script>
@endsection
