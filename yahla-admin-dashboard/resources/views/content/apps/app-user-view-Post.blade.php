@extends('layouts/layoutMaster')

@section('title', 'User View - Pages')

@section('page-style')
<link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-icons.css') }}" />

@endsection

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css')}}" />




<link rel="stylesheet" href="{{ asset('assets/vendor/libs/bs-stepper/bs-stepper.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/tagify/tagify.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/animate-css/animate.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/dropzone/dropzone.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/friendkit/css/app.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/friendkit/css/core.css') }}" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--hero-->
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"
/>
<link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-icons.css') }}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave-phone.js')}}"></script>
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js')}}"></script>











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
<!--hero-->
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/modal-edit-user.js')}}"></script>
<script src="{{asset('assets/js/modal-enable-otp.js')}}"></script>
<script src="{{asset('assets/js/app-user-view.js')}}"></script>
<script src="{{asset('assets/js/app-user-view-security.js')}}"></script>
@endsection

@section('content')
<style>
    .custom-option-icon .form-check-input {
        background-color: transparent !important;
        border: none !important;
    }

    .form-check-input:checked,
    .form-check-input[type=checkbox] {
        background-color: transparent !important;
        border: none !important;
        box-shadow: none !important;
        background-image: none !important;
    }

    .dropdown.is-right .dropdown-menu {
        left: 56px;
        right: auto;
        padding: 0;
        top: -22px;
    }

    .dropdown-item h6,
    .h6,
    h5,
    .h5,
    h4,
    .h4,
    h3,
    .h3,
    h2,
    .h2,
    h1,
    .h1 {
        margin-bottom: 0 !important;
    }

    .card.is-post .user-block img,
    .shop-wrapper .cart-container .cart-content .cart-summary .is-post.summary-card .user-block img {
        width: 42px;
        height: 42px;
        border-radius: 0% !important;
    }

    .card.is-post .content-wrap .post-image img,
    .shop-wrapper .cart-container .cart-content .cart-summary .is-post.summary-card .content-wrap .post-image img {
        display: block;
        border-radius: 5px;
    }
    .fancybox-caption{
            position: fixed;
    right: 0px !important;
        background: #fff!important;

        visibility: visible !important;
    opacity: 100% !important;

    }
    .fancybox-bg, .fancybox-inner, .fancybox-outer, .fancybox-stage {
    right: 350px !important;
}

    .card.is-post .content-wrap .card-footer .social-count .shares-count span,
    .shop-wrapper .cart-container .cart-content .cart-summary .is-post.summary-card .content-wrap .card-footer .social-count .shares-count span,
    .card.is-post .content-wrap .card-footer .social-count .comments-count span,
    .shop-wrapper .cart-container .cart-content .cart-summary .is-post.summary-card .content-wrap .card-footer .social-count .comments-count span,
    .card.is-post .content-wrap .card-footer .social-count .likes-count span,
    .shop-wrapper .cart-container .cart-content .cart-summary .is-post.summary-card .content-wrap .card-footer .social-count .likes-count span {
        display: block;
        font-size: 18px !important;
        color: #888da8;
        margin: 0 5px;
    }

    #tab2,
    #tab3 {
        display: none;
    }
    
    
    
    .cow{
    position: absolute !important;
    top: 0px !important;
    right: 0px !important;
    z-index: 12222222 !important;
    background: blue !important;
    width: 30% !important;
}
/*.fancybox-content{*/
/*    transform: translate(295px, 6px) scale(1, 1) !important;*/
/*    width: 800.597px !important;*/
/*    height: 534px !important;*/
/*}*/
.fancybox-container{
    width: 100% !important;
}
/*.fancybox-slide {*/
/*    left:-102px;*/
/*    top:200px;*/
/*}*/
/*meow*/
.fancybox-custom-layout .fancybox-stage {
    right: 394px !important;
}
.fancybox-stage{
    display: flex !important;
    justify-content: center !important;
    align-items: center !important;
    margin: auto !important; 
    width: 100% !important;
   
}
.fancybox-bg, .fancybox-inner, .fancybox-outer, .fancybox-stage{
        right: 394px !important;
}
.fancybox-caption {
    position: fixed;
    right: 46px !important;
    width: 348px !important;
    background: #fff!important;
    visibility: visible !important;
    opacity: 100% !important;
}
.alert-secondary {
    background-color: #ebeef0;
    border-color: #dadee3;
    color: #8592a3;
    /*border: 3px solid red !important;*/
}
.avatar {
    position: relative;
    width: 2.375rem;
    height: 2.375rem;
    cursor: pointer;
    border-radius:100% !important;
}
.card-body .col-sm-12{
    padding-top:0px !important;
}
.borderr{
    border:none !important;
}
</style>
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">User / View /</span> Security
</h4>
<div class="row">
  <!-- User Sidebar -->
 <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
    <!-- User Card -->
   <div class="card mb-4">
      <div class="card-body">
        <div class="user-avatar-section">
          <div class=" d-flex align-items-center flex-column">
            <img style="border-radius:100%" class="img-fluid my-4" src="https://yekbun.hellodev.site/public//assets/img/avatars/10.png" height="110" width="110" alt="User avatar">
            <div class="user-info text-center">
              <h4 class="mb-2"><img style="height:20px;" height="20px" src="https://yekbun.hellodev.site/public//assets/img/medal-ribbon.jpeg"> Alex Smith</h4>
               <p class="mb-2"><img style="height:20px;" height="20px" src="https://yekbun.hellodev.site/public//assets/img/germany-flag-png.png"> Rojava Qamishlo <img style="height:20px;" height="20px" src="https://yekbun.hellodev.site/public//assets/img/germany-flag-png.png"> Hannover</p>
                 <b><p class="mb-2 ">Standard User</p></b>
                  <span>User Id:123456778</span>
            </div>
          </div>
        </div>
      
        <h5 class="pb-2 border-bottom mb-4">Details</h5>
        <div class="info-container">
          <ul class="list-unstyled">
            <li class="mb-3">
              <span class="fw-bold me-2">Status:</span>
              <br>
              <span>Married</span>
            </li>
            <li class="mb-3">
              <span class="fw-bold me-2">Email:</span>
                  <br>
              <span>User Id:123456778</span>
            </li>
            <li class="mb-3">
              <span class="fw-bold me-2">Phone Number:</span>
                  <br>
                <span>User Id:123456778</span>
            </li>
            <li class="mb-3">
              <span class="fw-bold me-2">Member Since:</span>
                  <br>
              <span>12.10.2023</span>
            </li>
            <li class="mb-3">
              <span class="fw-bold me-2">Country</span>
                  <br>
              <span>Germany</span>
            </li>
            
           
           
          </ul>
          <!--<div class="d-flex justify-content-center pt-3">-->
          <!--  <a href="javascript:;" class="btn btn-primary me-3" data-bs-target="#editUser" data-bs-toggle="modal">Edit</a>-->
          <!--  <a href="javascript:;" class="btn btn-label-danger suspend-user">Suspended</a>-->
          <!--</div>-->
        </div>
      </div>
    </div>
    <!-- /User Card -->
    <!-- Plan Card -->
    <!--<div class="card mb-4">-->
    <!--  <div class="card-body">-->
    <!--    <div class="d-flex justify-content-between align-items-start">-->
    <!--      <span class="badge bg-label-primary">Standard</span>-->
    <!--      <div class="d-flex justify-content-center">-->
    <!--        <sup class="h5 pricing-currency mt-3 mb-0 me-1 text-primary">$</sup>-->
    <!--        <h1 class="display-5 mb-0 text-primary">99</h1>-->
    <!--        <sub class="fs-6 pricing-duration mt-auto mb-2">/month</sub>-->
    <!--      </div>-->
    <!--    </div>-->
    <!--    <ul class="ps-3 g-2 my-4">-->
    <!--      <li class="mb-2">10 Users</li>-->
    <!--      <li class="mb-2">Up to 10 GB storage</li>-->
    <!--      <li>Basic Support</li>-->
    <!--    </ul>-->
    <!--    <div class="d-flex justify-content-between align-items-center mb-1">-->
    <!--      <span>Days</span>-->
    <!--      <span>65% Completed</span>-->
    <!--    </div>-->
    <!--    <div class="progress mb-1" style="height: 8px;">-->
    <!--      <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>-->
    <!--    </div>-->
    <!--    <span>4 days remaining</span>-->
    <!--    <div class="d-grid w-100 mt-4 pt-2">-->
    <!--      <button class="btn btn-primary" data-bs-target="#upgradePlanModal" data-bs-toggle="modal">Upgrade Plan</button>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</div>-->
    <!-- /Plan Card -->
  </div>
  <!--/ User Sidebar -->


  <!-- User Content -->
  <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-1">
    <!-- User Pills -->
    <ul class="nav nav-pills flex-column flex-md-row mb-3">
      <li class="nav-item"><a class="nav-link " href="{{url('app/user/view/Follower')}}"><i class="bx bx-user me-1"></i>Follower</a></li>
      <li class="nav-item"><a class="nav-link active" href="{{url('app/user/view/Post')}}"><i class="bx bx-detail me-1"></i>Post</a></li>
      <li class="nav-item"><a class="nav-link" href="{{url('app/user/view/Videos')}}"><i class="bx bx-video me-1"></i>Videos</a></li>
      <li class="nav-item"><a class="nav-link" href="{{url('app/user/view/Activity')}}"><i class="bx bx-bell me-1"></i>Activity</a></li>
      <li class="nav-item"><a class="nav-link" href="{{url('app/user/view/Location')}}"><i class="bx bx-map-pin me-1"></i>Location</a></li>
    </ul>
    <!--/ User Pills -->

    <!-- Change Password -->
   <div id="feed-post-1" class="card is-post col-sm-8">
                                <!-- Main wrap -->
                                <div class="content-wrap">
                                    <!-- Post header -->
                                    <div class="card-heading">
                                        <!-- User meta -->
                                        <div class="user-block">
                                            <div class="image">
                                                <img src="https://yekbun.hellodev.site/public//assets/img/avatars/13.png" data-demo-src="https://yekbun.hellodev.site/public//assets/img/avatars/13.png" data-user-popover="1" alt="">
                                            </div>
                                            <div class="user-info">
                                                <span class="d-flex justify-content-center align-items-center"><a href="#">Karim Saif</a>&nbsp; <i class="	fa fa-circle" style="font-size: 4px;color: #c3c3c3;padding-left: 3px;"></i>&nbsp;
                                                    <i class="fa fa-clock-o"></i>&nbsp; <i class="	fa fa-circle" style="font-size: 4px;color: #c3c3c3;"></i></span>
                                                <span class="time d-flex ">&nbsp; <i class="	fa fa-circle pr-1" style="font-size: 4px;margin-top: 7px;color: #c3c3c3;"></i> Date
                                                    &amp; Time &nbsp; <i class="	fa fa-circle" style="font-size: 4px;margin-top: 7px;color: #c3c3c3;"></i></span>
                                            </div>
                                        </div>
                                        <!-- Right side dropdown -->
                                        <!-- /partials/pages/feed/dropdowns/feed-post-dropdown.html -->
                                        <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                            <div>
                                                <div class="button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                                                        <circle cx="12" cy="12" r="1"></circle>
                                                        <circle cx="12" cy="5" r="1"></circle>
                                                        <circle cx="12" cy="19" r="1"></circle>
                                                    </svg>
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
                                                                <h3>Remove Feed - Flag User</h3>
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
                                                                <h3>Remove Feed - Block User</h3>
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
                                                                <h3>Remove User Block Device</h3>
                                                                <select class="form-control mt-1">
                                                                    <option value="">Select the Reason</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Post header -->
<!--<div class="col-sm-12" style="margin-top: 16px; padding-left: 25px; padding-right: 25px;">-->
<!--        <div class="row" style="-->
<!--    border-radius: 10px;-->
<!--    padding: 10p;-->
<!--    background: #fae6e6;-->
<!--">-->
<!--        <div class="col-sm-3" style="padding: 15px;">-->
<!--            <div class="borderr" style="border-right: 3px solid red; padding: 3px;">-->
<!--          <p style="margin: 0px; font-size: 12px;">User Feeds ID</p> -->
<!--          <p style="margin: 0px; font-size: 12px;">12346668</p> -->
<!--        </div>-->
<!--        </div>-->
<!--        <div class="col-sm-5" style="padding: 0px; display: flex; align-items: center;">-->
<!--            <div class="borderr  d-flex justify-content-center align-items-center" style="display: flex;height: 44px;width: 100%;border-right: 3px solid red;">-->
    
           
<!--    <ul class="list-unstyled m-0 d-flex align-items-center avatar-group my-3" style="">-->
<!--          <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up" aria-label="Vinnie Mostowy" data-bs-original-title="Vinnie Mostowy" style="-->
<!--    height: 32px;-->
<!--    width: auto;-->
<!--" aria-describedby="tooltip433719">-->
<!--            <img class="rounded-circle" src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/5.png" alt="Avatar">-->
<!--          </li>-->
          
<!--          <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up" aria-label="Julee Rossignol" data-bs-original-title="Julee Rossignol" style="-->
<!--    height: 32px;-->
<!--    width: auto;-->
<!--" aria-describedby="tooltip709319">-->
<!--            <img class="rounded-circle" src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/6.png" alt="Avatar">-->
<!--          </li>-->
<!--          <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up" aria-label="Darcey Nooner" data-bs-original-title="Darcey Nooner" style="-->
<!--    height: 32px;-->
<!--    width: auto;-->
<!--" aria-describedby="tooltip41609">-->
<!--            <img class="rounded-circle" src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/10.png" alt="Avatar">-->
<!--          </li>-->
<!--        </ul>-->
        
<!--    <h6 style="margin: 0px; font-size: 12px;">30 +User</h6></div>-->
<!--        </div>-->
<!--        <div class="col-sm-4" style="padding: 0px; margin: 0px; display: flex; justify-content: space-around; align-items: center;">-->
     
<!--            <button class="btn btn-light" style="height: 30px; width: auto; padding: 8px; font-size: 13px;">Violence</button>-->
<!--            <button class="btn btn-light" style="height: 30px; width: auto; padding: 8px; font-size: 13px;">Racist</button>-->
<!--        </div>-->
      
<!--    </div>-->
<!--    </div>-->
                                    <!-- Post body -->
                                    <div style=" padding-top: 0px;" class="card-body col-sm-12">
                                        <!-- Post body text -->

                                        <!-- Featured image -->
                                        <div class="row">
                                            <div class="post-image col-sm-12 ">
                                                <a class="lightboxingclass" data-fancybox="post1" data-lightbox-type="comments" data-thumb="https://yekbun.hellodev.site/public//assets/img/PersianWomen.jpg" href="https://yekbun.hellodev.site/public//assets/img/PersianWomen.jpg" data-demo-href="https://yekbun.hellodev.site/public//assets/img/PersianWomen.jpg">
                                                    <img src="https://yekbun.hellodev.site/public//assets/img/PersianWomen.jpg" data-demo-src="https://yekbun.hellodev.site/public//assets/img/PersianWomen.jpg" alt="">
                                                </a>
                                             

                                            </div>
                                           
                                        </div>
                                        <div style="margin:0" class="alert alert-secondary m-0" role="alert">
                                            Some Text will be here when the User have
                                        </div>
                                    </div>
                                    <!-- /Post body -->

                                    <!-- Post footer -->
                                  <div class="card-footer" style="padding: 15px;">
                                        <div class="plmokn" <!--="" followers="" avatars="" --="" style="
   
    display: flex;
    width: 100%;
">
                                        <div class="likers-group">
                                        
                                            <img style="height:54px;width:auto;" src="https://yekbun.hellodev.site/public//assets/img/emojiall.png" data-demo-src="https://yekbun.hellodev.site/public//assets/img/emojiall.png" data-user-popover="5" alt="">

                                        </div>
                                        <!-- Followers text -->
                                        <div class="likers-text">

                                        </div>
                                        <!-- Post statistics -->
                                        <div class="social-count">
                                            <div class="shares-count" style="cursor: pointer">
                                                <img src="https://yekbun.hellodev.site/public//assets/svg/icons/Share.svg" width="20" alt="">
                                                <span>12k <i class="	fa fa-circle" style="font-size: 4px;margin-bottom: 10px;color: #c3c3c3;"></i></span>
                                            </div>
                                            <div class="likes-count" style="cursor: pointer">
                                                <img src="https://yekbun.hellodev.site/public//assets/svg/icons/views.svg" width="20" alt="">
                                                <span>1225 <i class="	fa fa-circle" style="font-size: 4px;margin-bottom: 10px;color: #c3c3c3;"></i></span>
                                            </div>
                                            <div class="comments-count is-comment-light" style="cursor: pointer">
                                                <img src="https://yekbun.hellodev.site/public//assets/svg/icons/Comments.svg" width="20" alt="">
                                                <span>123 <i class="	fa fa-circle" style="font-size: 4px;margin-bottom: 10px;color: #c3c3c3;"></i></span>
                                            </div>
                                            <div class="comments-count" style="cursor: pointer">
                                                <img src="https://yekbun.hellodev.site/public//assets/svg/icons/voice.svg" width="20" alt="">
                                                <span>1.1M</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    </div>
                                    <!-- /Post footer -->
                                </div>
                                <!-- /Main wrap -->

                                <!-- Post #1 Comments -->
                                <div class="comments-wrap is-hidden" style="top: 0rem;position: relative;">
                                    <div class="comments-header">
                                                                            </div>
                                    <!-- Comments body -->
                                    <!--  <div class="comments-body has-slimscroll">-->
                                    <!--    <img src="https://yekbun.hellodev.site/public//assets/svg/icons/Comment- area.svg" style="width: 100%" alt="">-->
                                    <!--</div>-->
                                    <!-- /Comments body -->
                                </div>
                                <!-- /Post #1 Comments -->
                            </div>
    <!--/ Recent Devices -->
  </div>
  <!--/ User Content -->
</div>

<!-- Modals -->
@include('_partials/_modals/modal-edit-user')
@include('_partials/_modals/modal-enable-otp')
@include('_partials/_modals/modal-upgrade-plan')
<!-- /Modals -->

@endsection

@section('page-script')
<script>
  $(document).ready(function(){
            $(document).on('click',function(){
                
const lightboxing=`
<div
            class="fancybox-container fancybox-custom-layout fancybox-show-toolbar fancybox-show-caption fancybox-is-open fancybox-is-zoomable fancybox-can-zoomIn"
            role="dialog" tabindex="-1" id="fancybox-container-1"
            style="transition-duration: 366ms;">
            <div class="fancybox-inner">

                <div
                    class="fancybox-caption">
                    <div
                        class="fancybox-caption__body">
                        <div class="header d-flex justify-content-between">
                            <div class="d-flex">
                                <img src="https://via.placeholder.com/300x300"
                                    data-demo-src="assets/img/avatars/dan.jpg"
                                    alt>
                                <div class="user-meta">
                                    <span>Dan Walker</span> <span><small>2 hours
                                            ago</small></span>
                                </div>
                            </div>
                            <div
                                class="dropdown is-spaced is-right dropdown-trigger toggle">

                                <div>

                                    <div class="button"> <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24"
                                            viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-more-vertical"><circle
                                                cx="12" cy="12"
                                                r="1"></circle><circle cx="12"
                                                cy="5" r="1"></circle><circle
                                                cx="12" cy="19"
                                                r="1"></circle></svg></div>

                                </div>

                                <div class="dropdown-menu" role="menu"
                                    style="left:-268px;">

                                    <div class="dropdown-content">

                                        <div
                                            class="dropdown-item is-title has-text-left">
                                            Who can see this ?</div>

                                        <a href="#" class="dropdown-item">

                                            <div class="media">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-globe"><circle
                                                        cx="12" cy="12"
                                                        r="10"></circle><line
                                                        x1="2" y1="12" x2="22"
                                                        y2="12"></line><path
                                                        d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                                                <div class="media-content">

                                                    <h3>Public</h3>
                                                    <small>Anyone can see this
                                                        publication.</small>
                                                </div>

                                            </div>

                                        </a>

                                        <a class="dropdown-item">

                                            <div class="media">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-users"><path
                                                        d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle
                                                        cx="9" cy="7"
                                                        r="4"></circle><path
                                                        d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path
                                                        d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                                <div class="media-content">

                                                    <h3>Friends</h3>
                                                    <small>only friends can see
                                                        this
                                                        publication.</small>
                                                </div>

                                            </div>

                                        </a>

                                        <a class="dropdown-item">

                                            <div class="media">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-user"><path
                                                        d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle
                                                        cx="12" cy="7"
                                                        r="4"></circle></svg>
                                                <div class="media-content">

                                                    <h3>Specific friends</h3>
                                                    <small>Don't show it to some
                                                        friends.</small>
                                                </div>

                                            </div>

                                        </a>

                                        <hr class="dropdown-divider">

                                        <a class="dropdown-item">

                                            <div class="media">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-lock"><rect
                                                        x="3" y="11" width="18"
                                                        height="11" rx="2"
                                                        ry="2"></rect><path
                                                        d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                                <div class="media-content">

                                                    <h3>Only me</h3>
                                                    <small>Only me can see this
                                                        publication.</small>
                                                </div>

                                            </div>

                                        </a>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="social-count ml-auto">

                        </div>

                        <div style="padding:10px;" class="actions">

                            <div class="action"> <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-thumbs-up"><path
                                        d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg>
                                <span>Like</span></div>

                            <div class="action"> <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-message-circle"><path
                                        d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                <span>Comment</span></div>

                        </div>

                        <div class="comments-list has-slimscroll">

                            <div class="media is-comment com_container">
                                <div class="comment-lineone"></div>
                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/dan.jpg"
                                            alt data-user-popover="1"></p>

                                </figure>

                                <div class="media-content pb-0">
                                    <div
                                        class="d-flex justify-content-between comment-actions mb-2"
                                        style="margin-top:-7px;">
                                        <div class="username">Dan Walker</div>
                                        <span>28m</span>
                                    </div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Proin ornare magna
                                        eros.</p>

                                </div>

                            </div>
                            <div class="text-end mx-0 px-3 w-100 my-2"
                                style="background-color:#f5f6f7; letter-spacing:-5px;">
                                <span
                                    style="background:white;padding:1px; border-radius:50%; ">😂</span>
                                <span
                                    style="background:white;padding:1px; border-radius:50%;">😣</span>
                                <span
                                    style="background:white;padding:1px; border-radius:50%;">😳</span>
                            </div>

                            <div
                                class="media is-comment is-nested com_container">
                                <div class="arrow-line"></div>
                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/david.jpg"
                                            alt data-user-popover="4"></p>

                                </figure>

                                <div class="media-content pb-0">

                                    <div
                                        class="d-flex justify-content-between comment-actions mb-2"
                                        style="margin-top:-7px;">
                                        <div class="username">David Kim</div>
                                        <span>26m</span>
                                    </div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing.</p>

                                </div>

                            </div>
                            <div class="text-end mx-0 px-3 w-100 my-2"
                                style="background-color:#f5f6f7; letter-spacing:-5px;">
                                <span
                                    style="background:white;padding:1px; border-radius:50%; ">😂</span>
                                <span
                                    style="background:white;padding:1px; border-radius:50%;">😣</span>
                                <span
                                    style="background:white;padding:1px; border-radius:50%;">😳</span>

                            </div>
                            <style>
    .com_container{
        position:relative;
    }
    .comment-line{
        position:absolute;
        height:362%;
        border-left:2px solid black;
        top:10%;
        left:5%;
        width:15%;
        border-radius:10px;
    }
    .comment-lineone{
        position:absolute;
        height:153%;
        border-left:2px solid black;
        top:10%;
        left:5%;
        width:15%;
        border-radius:10px;
    }
    .arrow-line{
         position: absolute;
    height: 40px;
    border-left: 2px solid black;
    top: -20%;
    left: 5%;
    width: 10%;
    border-bottom: 2px solid black;
    border-radius: 0px 0px 0px 10px;
    }
    .fancybox-custom-layout .fancybox-caption .comments-list .is-comment.is-nested{
        padding-left:40px !important;
        margin-left:0px !important;
    }
    </style>

                            <div class="media is-comment com_container">
                                <div class="comment-line"></div>
                                <figure class="media-left ">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/rolf.jpg"
                                            alt data-user-popover="17"></p>

                                </figure>

                                <div class="media-content pb-0">

                                    <div
                                        class="d-flex justify-content-between comment-actions mb-2"
                                        style="margin-top:-7px;">
                                        <div class="username">Rolf Krupp</div>
                                        <span>36m</span>
                                    </div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Proin ornare magna
                                        eros. Consectetur adipiscing elit. Proin
                                        ornare magna eros.</p>

                                </div>

                            </div>
                            <div class="text-end mx-0 px-3 w-100 my-2"
                                style="background-color:#f5f6f7; letter-spacing:-5px;">
                                <span
                                    style="background:white;padding:1px; border-radius:50%; ">😂</span>
                                <span
                                    style="background:white;padding:1px; border-radius:50%;">😣</span>
                                <span
                                    style="background:white;padding:1px; border-radius:50%;">😳</span>

                            </div>

                            <div
                                class="media is-comment is-nested com_container ">
                                <div class="arrow-line"></div>
                                <figure class="media-left ">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/elise.jpg"
                                            alt data-user-popover="6"></p>

                                </figure>

                                <div class="media-content pb-0">

                                    <div
                                        class="d-flex justify-content-between comment-actions mb-2"
                                        style="margin-top:-7px;">
                                        <div class="username">Elise Walker</div>
                                        <span>32m</span>
                                    </div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Proin ornare magna
                                        eros.</p>

                                </div>

                            </div>
                            <div class="text-end mx-0 px-3 w-100 my-2"
                                style="background-color:#f5f6f7; letter-spacing:-5px;">
                                <span
                                    style="background:white;padding:1px; border-radius:50%; ">😂</span>
                                <span
                                    style="background:white;padding:1px; border-radius:50%;">😣</span>
                                <span
                                    style="background:white;padding:1px; border-radius:50%;">😳</span>

                            </div>

                            <div
                                class="media is-comment is-nested com_container">
                                <div class="arrow-line"></div>
                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/rolf.jpg"
                                            alt data-user-popover="17"></p>

                                </figure>

                                <div class="media-content pb-0">

                                    <div
                                        class="d-flex justify-content-between comment-actions mb-2"
                                        style="margin-top:-7px;">
                                        <div class="username">Rolf Krupp</div>
                                        <span>24m</span>
                                    </div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Proin ornare magna
                                        eros.</p>

                                </div>

                            </div>
                            <div class="text-end mx-0 px-3 w-100 my-2"
                                style="background-color:#f5f6f7; letter-spacing:-5px;">
                                <span
                                    style="background:white;padding:1px; border-radius:50%; ">😂</span>
                                <span
                                    style="background:white;padding:1px; border-radius:50%;">😣</span>
                                <span
                                    style="background:white;padding:1px; border-radius:50%;">😳</span>

                            </div>

                            <div
                                class="media is-comment is-nested com_container">
                                <div class="arrow-line"></div>
                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/elise.jpg"
                                            alt data-user-popover="6"></p>

                                </figure>

                                <div class="media-content pb-0">

                                    <div
                                        class="d-flex justify-content-between comment-actions mb-2"
                                        style="margin-top:-7px;">
                                        <div class="username">Elise Walker</div>
                                        <span>40m</span>
                                    </div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Proin ornare magna
                                        eros.</p>

                                </div>

                            </div>
                            <div class="text-end mx-0 px-3 w-100 my-2"
                                style="background-color:#f5f6f7; letter-spacing:-5px;">
                                <span
                                    style="background:white;padding:1px; border-radius:50%; ">😂</span>
                                <span
                                    style="background:white;padding:1px; border-radius:50%;">😣</span>
                                <span
                                    style="background:white;padding:1px; border-radius:50%;">😳</span>

                            </div>

                            <div class="media is-comment">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/lana.jpeg"
                                            alt data-user-popover="14"></p>

                                </figure>

                                <div class="media-content pb-0">
                                    <div
                                        class="d-flex justify-content-between comment-actions mb-2"
                                        style="margin-top:-7px;">
                                        <div class="username">Lana
                                            Henrikssen</div>
                                        <span>28m</span>
                                    </div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Proin ornare magna
                                        eros. Consectetur adipiscing elit.</p>

                                </div>

                            </div>

                        </div>
                        <div class="text-end mx-0 px-3 w-100 my-2"
                            style="background-color:#f5f6f7; letter-spacing:-5px;">
                            <span
                                style="background:white;padding:1px; border-radius:50%; ">😂</span>
                            <span
                                style="background:white;padding:1px; border-radius:50%;">😣</span>
                            <span
                                style="background:white;padding:1px; border-radius:50%;">😳</span>

                        </div>

                        <div class="comment-controls has-lightbox-emojis">

                            <div class="controls-inner"
                                id="lightbox-post-comment-wrapper-1">
                                <img src="https://via.placeholder.com/300x300"
                                    data-demo-src="assets/img/avatars/jenna.png"
                                    alt>
                                <div class="control"> <textarea
                                        class="textarea is-rounded" rows="1"
                                        id="lightbox-post-comment-textarea-1"></textarea>
                                    <button class="emoji-button"
                                        id="lightbox-post-comment-button-1">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24"
                                            viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-smile"><circle
                                                cx="12" cy="12"
                                                r="10"></circle><path
                                                d="M8 14s1.5 2 4 2 4-2 4-2"></path><line
                                                x1="9" y1="9" x2="9.01"
                                                y2="9"></line><line x1="15"
                                                y1="9" x2="15.01"
                                                y2="9"></line></svg></button></div>

                            </div>

                        </div>

                        <div class="header">
                            <img src="https://via.placeholder.com/300x300"
                                data-demo-src="assets/img/avatars/elise.jpg"
                                alt>
                            <div class="user-meta">
                                <span>Elise Walker</span> <span><small>2 days
                                        ago</small></span>
                            </div>
                            <button type="button" class="button">Follow</button>
                            <div
                                class="dropdown is-spaced is-right dropdown-trigger">

                                <div>

                                    <div class="button"> <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24"
                                            viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-more-vertical"><circle
                                                cx="12" cy="12"
                                                r="1"></circle><circle cx="12"
                                                cy="5" r="1"></circle><circle
                                                cx="12" cy="19"
                                                r="1"></circle></svg></div>

                                </div>

                                <div class="dropdown-menu" role="menu">

                                    <div class="dropdown-content">

                                        <div
                                            class="dropdown-item is-title has-text-left">
                                            Who can see this ?</div>

                                        <a href="#" class="dropdown-item">

                                            <div class="media">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-globe"><circle
                                                        cx="12" cy="12"
                                                        r="10"></circle><line
                                                        x1="2" y1="12" x2="22"
                                                        y2="12"></line><path
                                                        d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                                                <div class="media-content">

                                                    <h3>Public</h3>
                                                    <small>Anyone can see this
                                                        publication.</small>
                                                </div>

                                            </div>

                                        </a>

                                        <a class="dropdown-item">

                                            <div class="media">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-users"><path
                                                        d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle
                                                        cx="9" cy="7"
                                                        r="4"></circle><path
                                                        d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path
                                                        d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                                <div class="media-content">

                                                    <h3>Friends</h3>
                                                    <small>only friends can see
                                                        this
                                                        publication.</small>
                                                </div>

                                            </div>

                                        </a>

                                        <a class="dropdown-item">

                                            <div class="media">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-user"><path
                                                        d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle
                                                        cx="12" cy="7"
                                                        r="4"></circle></svg>
                                                <div class="media-content">

                                                    <h3>Specific friends</h3>
                                                    <small>Don't show it to some
                                                        friends.</small>
                                                </div>

                                            </div>

                                        </a>

                                        <hr class="dropdown-divider">

                                        <a class="dropdown-item">

                                            <div class="media">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-lock"><rect
                                                        x="3" y="11" width="18"
                                                        height="11" rx="2"
                                                        ry="2"></rect><path
                                                        d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                                <div class="media-content">

                                                    <h3>Only me</h3>
                                                    <small>Only me can see this
                                                        publication.</small>
                                                </div>

                                            </div>

                                        </a>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="inner-content">

                            <div class="live-stats">

                                <div class="social-count">

                                    <div class="likes-count"> <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24"
                                            viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-heart"><path
                                                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                        <span>3</span></div>

                                    <div class="comments-count"> <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24"
                                            viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-message-circle"><path
                                                d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                        <span>5</span></div>

                                </div>

                                <div class="social-count ml-auto">

                                    <div class="views-count">
                                        <span>5</span> <span
                                            class="views"><small>comments</small></span>
                                    </div>

                                </div>

                            </div>

                            <div class="actions">

                                <div class="action"> <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24"
                                        viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-thumbs-up"><path
                                            d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg>
                                    <span>Like</span></div>

                                <div class="action"> <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24"
                                        viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-message-circle"><path
                                            d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                    <span>Comment</span></div>

                            </div>

                        </div>

                        <div class="comments-list has-slimscroll">

                            <div class="media is-comment">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/gaelle.jpeg"
                                            alt data-user-popover="11"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">Gaelle Morris</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Proin ornare magna
                                        eros.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>2d</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>1</span></div>

                                    </div>

                                </div>

                            </div>

                            <div class="media is-comment is-nested">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/elise.jpg"
                                            alt data-user-popover="6"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">Elise Walker</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>4h</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>1</span></div>

                                    </div>

                                </div>

                            </div>

                            <div class="media is-comment is-nested">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/rolf.jpg"
                                            alt data-user-popover="13"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">Rolf Krupp</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Proin ornare magna
                                        eros. Consectetur adipiscing elit.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>4h</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>1</span></div>

                                    </div>

                                </div>

                            </div>

                            <div class="media is-comment is-nested">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/elise.jpg"
                                            alt data-user-popover="6"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">Elise Walker</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>4h</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>1</span></div>

                                    </div>

                                </div>

                            </div>

                            <div class="media is-comment">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/nelly.png"
                                            alt data-user-popover="7"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">Nelly Schwartz</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>4h</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>1</span></div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="comment-controls has-lightbox-emojis">

                            <div class="controls-inner"
                                id="lightbox-post-comment-wrapper-2">
                                <img src="https://via.placeholder.com/300x300"
                                    data-demo-src="assets/img/avatars/jenna.png"
                                    alt>
                                <div class="control"> <textarea
                                        class="textarea comment-textarea is-rounded"
                                        rows="1"
                                        id="lightbox-post-comment-textarea-2"></textarea>
                                    <button class="emoji-button"
                                        id="lightbox-post-comment-button-2">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24"
                                            viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-smile"><circle
                                                cx="12" cy="12"
                                                r="10"></circle><path
                                                d="M8 14s1.5 2 4 2 4-2 4-2"></path><line
                                                x1="9" y1="9" x2="9.01"
                                                y2="9"></line><line x1="15"
                                                y1="9" x2="15.01"
                                                y2="9"></line></svg></button></div>

                            </div>

                        </div>
                        ",m='
                        <div class="header">
                            <img src="https://via.placeholder.com/300x300"
                                data-demo-src="assets/img/avatars/stella.jpg"
                                alt>
                            <div class="user-meta">
                                <span>Stella Bergmann</span>
                                <span><small>Yesterday</small></span>
                            </div>
                            <button type="button" class="button">Follow</button>
                            <div
                                class="dropdown is-spaced is-right dropdown-trigger">

                                <div>

                                    <div class="button"> <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24"
                                            viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-more-vertical"><circle
                                                cx="12" cy="12"
                                                r="1"></circle><circle cx="12"
                                                cy="5" r="1"></circle><circle
                                                cx="12" cy="19"
                                                r="1"></circle></svg></div>

                                </div>

                                <div class="dropdown-menu" role="menu">

                                    <div class="dropdown-content">

                                        <div
                                            class="dropdown-item is-title has-text-left">
                                            Who can see this ?</div>

                                        <a href="#" class="dropdown-item">

                                            <div class="media">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-globe"><circle
                                                        cx="12" cy="12"
                                                        r="10"></circle><line
                                                        x1="2" y1="12" x2="22"
                                                        y2="12"></line><path
                                                        d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                                                <div class="media-content">

                                                    <h3>Public</h3>
                                                    <small>Anyone can see this
                                                        publication.</small>
                                                </div>

                                            </div>

                                        </a>

                                        <a class="dropdown-item">

                                            <div class="media">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-users"><path
                                                        d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle
                                                        cx="9" cy="7"
                                                        r="4"></circle><path
                                                        d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path
                                                        d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                                <div class="media-content">

                                                    <h3>Friends</h3>
                                                    <small>only friends can see
                                                        this
                                                        publication.</small>
                                                </div>

                                            </div>

                                        </a>

                                        <a class="dropdown-item">

                                            <div class="media">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-user"><path
                                                        d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle
                                                        cx="12" cy="7"
                                                        r="4"></circle></svg>
                                                <div class="media-content">

                                                    <h3>Specific friends</h3>
                                                    <small>Don't show it to some
                                                        friends.</small>
                                                </div>

                                            </div>

                                        </a>

                                        <hr class="dropdown-divider">

                                        <a class="dropdown-item">

                                            <div class="media">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-lock"><rect
                                                        x="3" y="11" width="18"
                                                        height="11" rx="2"
                                                        ry="2"></rect><path
                                                        d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                                <div class="media-content">

                                                    <h3>Only me</h3>
                                                    <small>Only me can see this
                                                        publication.</small>
                                                </div>

                                            </div>

                                        </a>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="inner-content">

                            <div class="live-stats">

                                <div class="social-count">

                                    <div class="likes-count"> <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24"
                                            viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-heart"><path
                                                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                        <span>33</span></div>

                                    <div class="comments-count"> <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24"
                                            viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-message-circle"><path
                                                d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                        <span>9</span></div>

                                </div>

                                <div class="social-count ml-auto">

                                    <div class="views-count">
                                        <span>9</span> <span
                                            class="views"><small>comments</small></span>
                                    </div>

                                </div>

                            </div>

                            <div class="actions">

                                <div class="action"> <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24"
                                        viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-thumbs-up"><path
                                            d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg>
                                    <span>Like</span></div>

                                <div class="action"> <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24"
                                        viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-message-circle"><path
                                            d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                    <span>Comment</span></div>

                            </div>

                        </div>

                        <div class="comments-list has-slimscroll">

                            <div class="media is-comment">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/jenna.png"
                                            alt data-user-popover="0"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">Jenna Davis</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Proin ornare magna
                                        eros.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>30m</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>0</span></div>

                                    </div>

                                </div>

                            </div>

                            <div class="media is-comment is-nested">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/lana.jpeg"
                                            alt data-user-popover="10"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">Lana Henrikssen</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing. Proin ornare magna eros.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>15m</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>0</span></div>

                                    </div>

                                </div>

                            </div>

                            <div class="media is-comment is-nested">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/david.jpg"
                                            alt data-user-popover="4"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">David Kim</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>12m</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>5</span></div>

                                    </div>

                                </div>

                            </div>

                            <div class="media is-comment is-nested">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/mike.jpg"
                                            alt data-user-popover="16"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">Mike Lasalle</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>8m</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>5</span></div>

                                    </div>

                                </div>

                            </div>

                            <div class="media is-comment is-nested">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/stella.jpg"
                                            alt data-user-popover="2"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">Stella Bergmann</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing. Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>1m</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>5</span></div>

                                    </div>

                                </div>

                            </div>

                            <div class="media is-comment">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/daniel.jpg"
                                            alt data-user-popover="3"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">Daniel
                                        Wellington</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Proin ornare magna
                                        eros. Consectetur adipiscing elit. Proin
                                        ornare magna eros.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>5h</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>3</span></div>

                                    </div>

                                </div>

                            </div>

                            <div class="media is-comment">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/bobby.jpg"
                                            alt data-user-popover="8"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">Bobby Brown</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Proin ornare magna
                                        eros.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>7h</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>3</span></div>

                                    </div>

                                </div>

                            </div>

                            <div class="media is-comment is-nested">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/stella.jpg"
                                            alt data-user-popover="2"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">Stella Bergmann</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing. Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>7h</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>5</span></div>

                                    </div>

                                </div>

                            </div>

                            <div class="media is-comment is-nested">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/lana.jpeg"
                                            alt data-user-popover="10"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">Lana Henrikssen</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing. Proin ornare magna eros.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>15m</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>0</span></div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="comment-controls has-lightbox-emojis">

                            <div class="controls-inner"
                                id="lightbox-post-comment-wrapper-3">
                                <img src="https://via.placeholder.com/300x300"
                                    data-demo-src="assets/img/avatars/jenna.png"
                                    alt>
                                <div class="control"> <textarea
                                        class="textarea comment-textarea is-rounded"
                                        rows="1"
                                        id="lightbox-post-comment-textarea-3"></textarea>
                                    <button class="emoji-button"
                                        id="lightbox-post-comment-button-3">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24"
                                            viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-smile"><circle
                                                cx="12" cy="12"
                                                r="10"></circle><path
                                                d="M8 14s1.5 2 4 2 4-2 4-2"></path><line
                                                x1="9" y1="9" x2="9.01"
                                                y2="9"></line><line x1="15"
                                                y1="9" x2="15.01"
                                                y2="9"></line></svg></button></div>

                            </div>

                        </div>
                        ",r='
                        <div class="header">
                            <img src="https://via.placeholder.com/300x300"
                                data-demo-src="assets/img/avatars/jenna.png"
                                alt>
                            <div class="user-meta">
                                <span>Jenna Davis</span> <span><small>3 days
                                        ago</small></span>
                            </div>
                            <button type="button" class="button">Follow</button>
                            <div
                                class="dropdown is-spaced is-right dropdown-trigger">

                                <div>

                                    <div class="button"> <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24"
                                            viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-more-vertical"><circle
                                                cx="12" cy="12"
                                                r="1"></circle><circle cx="12"
                                                cy="5" r="1"></circle><circle
                                                cx="12" cy="19"
                                                r="1"></circle></svg></div>

                                </div>

                                <div class="dropdown-menu" role="menu">

                                    <div class="dropdown-content">

                                        <div
                                            class="dropdown-item is-title has-text-left">
                                            Who can see this ?</div>

                                        <a href="#" class="dropdown-item">

                                            <div class="media">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-globe"><circle
                                                        cx="12" cy="12"
                                                        r="10"></circle><line
                                                        x1="2" y1="12" x2="22"
                                                        y2="12"></line><path
                                                        d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                                                <div class="media-content">

                                                    <h3>Public</h3>
                                                    <small>Anyone can see this
                                                        publication.</small>
                                                </div>

                                            </div>

                                        </a>

                                        <a class="dropdown-item">

                                            <div class="media">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-users"><path
                                                        d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle
                                                        cx="9" cy="7"
                                                        r="4"></circle><path
                                                        d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path
                                                        d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                                <div class="media-content">

                                                    <h3>Friends</h3>
                                                    <small>only friends can see
                                                        this
                                                        publication.</small>
                                                </div>

                                            </div>

                                        </a>

                                        <a class="dropdown-item">

                                            <div class="media">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-user"><path
                                                        d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle
                                                        cx="12" cy="7"
                                                        r="4"></circle></svg>
                                                <div class="media-content">

                                                    <h3>Specific friends</h3>
                                                    <small>Don't show it to some
                                                        friends.</small>
                                                </div>

                                            </div>

                                        </a>

                                        <hr class="dropdown-divider">

                                        <a class="dropdown-item">

                                            <div class="media">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-lock"><rect
                                                        x="3" y="11" width="18"
                                                        height="11" rx="2"
                                                        ry="2"></rect><path
                                                        d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                                <div class="media-content">

                                                    <h3>Only me</h3>
                                                    <small>Only me can see this
                                                        publication.</small>
                                                </div>

                                            </div>

                                        </a>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="inner-content">

                            <div class="live-stats">

                                <div class="social-count">

                                    <div class="likes-count"> <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24"
                                            viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-heart"><path
                                                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                        <span>32</span></div>

                                    <div class="comments-count"> <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24"
                                            viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-message-circle"><path
                                                d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                        <span>5</span></div>

                                </div>

                                <div class="social-count ml-auto">

                                    <div class="views-count">
                                        <span>5</span> <span
                                            class="views"><small>comments</small></span>
                                    </div>

                                </div>

                            </div>

                            <div class="actions">

                                <div class="action"> <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24"
                                        viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-thumbs-up"><path
                                            d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg>
                                    <span>Like</span></div>

                                <div class="action"> <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24"
                                        viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-message-circle"><path
                                            d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                    <span>Comment</span></div>

                            </div>

                        </div>

                        <div class="comments-list has-slimscroll">

                            <div class="media is-comment">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/bobby.jpg"
                                            alt data-user-popover="8"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">Bobby Brown</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Proin ornare magna
                                        eros.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>1h</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>12</span></div>

                                    </div>

                                </div>

                            </div>

                            <div class="media is-comment">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/daniel.jpg"
                                            alt data-user-popover="3"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">Daniel
                                        Wellington</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>15m</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>2</span></div>

                                    </div>

                                </div>

                            </div>

                            <div class="media is-comment">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/mike.jpg"
                                            alt data-user-popover="12"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">Mike Lasalle</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Proin ornare magna
                                        eros. Consectetur adipiscing elit. Proin
                                        ornare magna eros.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>1d</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>3</span></div>

                                    </div>

                                </div>

                            </div>

                            <div class="media is-comment">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/lana.jpeg"
                                            alt data-user-popover="10"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">Lana Henrikssen</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Proin ornare magna
                                        eros. Consectetur adipiscing elit. Proin
                                        ornare magna eros.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>1d</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>3</span></div>

                                    </div>

                                </div>

                            </div>

                            <div class="media is-comment">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/nelly.png"
                                            alt data-user-popover="9"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">Nelly Schwartz</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>2d</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>0</span></div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="comment-controls">

                            <div class="controls-inner">
                                <img src="https://via.placeholder.com/300x300"
                                    data-demo-src="assets/img/avatars/jenna.png"
                                    alt>
                                <div class="control"> <textarea
                                        class="textarea comment-textarea is-rounded"
                                        rows="1"></textarea> <button
                                        class="emoji-button"> <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24"
                                            viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-smile"><circle
                                                cx="12" cy="12"
                                                r="10"></circle><path
                                                d="M8 14s1.5 2 4 2 4-2 4-2"></path><line
                                                x1="9" y1="9" x2="9.01"
                                                y2="9"></line><line x1="15"
                                                y1="9" x2="15.01"
                                                y2="9"></line></svg></button></div>

                            </div>

                        </div>
                        ",p='
                        <div class="header">
                            <img src="https://via.placeholder.com/300x300"
                                data-demo-src="assets/img/avatars/elise.jpg"
                                alt>
                            <div class="user-meta">
                                <span>Elise Walker</span> <span><small>3 months
                                        ago</small></span>
                            </div>
                            <button type="button" class="button">Follow</button>
                            <div
                                class="dropdown is-spaced is-right dropdown-trigger">

                                <div>

                                    <div class="button"> <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24"
                                            viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-more-vertical"><circle
                                                cx="12" cy="12"
                                                r="1"></circle><circle cx="12"
                                                cy="5" r="1"></circle><circle
                                                cx="12" cy="19"
                                                r="1"></circle></svg></div>

                                </div>

                                <div class="dropdown-menu" role="menu">

                                    <div class="dropdown-content">

                                        <div
                                            class="dropdown-item is-title has-text-left">
                                            Who can see this ?</div>

                                        <a href="#" class="dropdown-item">

                                            <div class="media">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-globe"><circle
                                                        cx="12" cy="12"
                                                        r="10"></circle><line
                                                        x1="2" y1="12" x2="22"
                                                        y2="12"></line><path
                                                        d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                                                <div class="media-content">

                                                    <h3>Public</h3>
                                                    <small>Anyone can see this
                                                        publication.</small>
                                                </div>

                                            </div>

                                        </a>

                                        <a class="dropdown-item">

                                            <div class="media">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-users"><path
                                                        d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle
                                                        cx="9" cy="7"
                                                        r="4"></circle><path
                                                        d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path
                                                        d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                                <div class="media-content">

                                                    <h3>Friends</h3>
                                                    <small>only friends can see
                                                        this
                                                        publication.</small>
                                                </div>

                                            </div>

                                        </a>

                                        <a class="dropdown-item">

                                            <div class="media">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-user"><path
                                                        d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle
                                                        cx="12" cy="7"
                                                        r="4"></circle></svg>
                                                <div class="media-content">

                                                    <h3>Specific friends</h3>
                                                    <small>Don't show it to some
                                                        friends.</small>
                                                </div>

                                            </div>

                                        </a>

                                        <hr class="dropdown-divider">

                                        <a class="dropdown-item">

                                            <div class="media">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-lock"><rect
                                                        x="3" y="11" width="18"
                                                        height="11" rx="2"
                                                        ry="2"></rect><path
                                                        d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                                <div class="media-content">

                                                    <h3>Only me</h3>
                                                    <small>Only me can see this
                                                        publication.</small>
                                                </div>

                                            </div>

                                        </a>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="inner-content">

                            <div class="live-stats">

                                <div class="social-count">

                                    <div class="likes-count"> <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24"
                                            viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-heart"><path
                                                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                        <span>3</span></div>

                                    <div class="comments-count"> <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24"
                                            viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-message-circle"><path
                                                d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                        <span>3</span></div>

                                </div>

                                <div class="social-count ml-auto">

                                    <div class="views-count">
                                        <span>3</span> <span
                                            class="views"><small>comments</small></span>
                                    </div>

                                </div>

                            </div>

                            <div class="actions">

                                <div class="action"> <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24"
                                        viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-thumbs-up"><path
                                            d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg>
                                    <span>Like</span></div>

                                <div class="action"> <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24"
                                        viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-message-circle"><path
                                            d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                    <span>Comment</span></div>

                            </div>

                        </div>

                        <div class="comments-list has-slimscroll">

                            <div class="media is-comment">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/stella.jpg"
                                            alt data-user-popover="2"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">Stella Bergmann</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Proin ornare magna
                                        eros.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>12h</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>2</span></div>

                                    </div>

                                </div>

                            </div>

                            <div class="media is-comment">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/nelly.png"
                                            alt data-user-popover="9"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">Nelly Schwartz</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>4h</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>0</span></div>

                                    </div>

                                </div>

                            </div>

                            <div class="media is-comment">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/bobby.jpg"
                                            alt data-user-popover="8"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">Bobby Brown</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Proin ornare magna
                                        eros. Consectetur adipiscing elit. Proin
                                        ornare magna eros.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>4h</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>3</span></div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="comment-controls has-lightbox-emojis">

                            <div class="controls-inner"
                                id="lightbox-post-comment-wrapper-4">
                                <img src="https://via.placeholder.com/300x300"
                                    data-demo-src="assets/img/avatars/jenna.png"
                                    alt>
                                <div class="control"> <textarea
                                        class="textarea comment-textarea is-rounded"
                                        rows="1"
                                        id="lightbox-post-comment-textarea-4"></textarea>
                                    <button class="emoji-button"
                                        id="lightbox-post-comment-button-4">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24"
                                            viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-smile"><circle
                                                cx="12" cy="12"
                                                r="10"></circle><path
                                                d="M8 14s1.5 2 4 2 4-2 4-2"></path><line
                                                x1="9" y1="9" x2="9.01"
                                                y2="9"></line><line x1="15"
                                                y1="9" x2="15.01"
                                                y2="9"></line></svg></button></div>

                            </div>

                        </div>
                        ",u='
                        <div class="header">
                            <img src="https://via.placeholder.com/300x300"
                                data-demo-src="assets/img/avatars/jenna.png"
                                alt>
                            <div class="user-meta">
                                <span>Jenna Davis</span> <span><small>oct 17
                                        2018</small></span>
                            </div>
                            <button type="button" class="button">Follow</button>
                            <div
                                class="dropdown is-spaced is-right dropdown-trigger">

                                <div>

                                    <div class="button"> <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24"
                                            viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-more-vertical"><circle
                                                cx="12" cy="12"
                                                r="1"></circle><circle cx="12"
                                                cy="5" r="1"></circle><circle
                                                cx="12" cy="19"
                                                r="1"></circle></svg></div>

                                </div>

                                <div class="dropdown-menu" role="menu">

                                    <div class="dropdown-content">

                                        <div
                                            class="dropdown-item is-title has-text-left">
                                            Who can see this ?</div>

                                        <a href="#" class="dropdown-item">

                                            <div class="media">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-globe"><circle
                                                        cx="12" cy="12"
                                                        r="10"></circle><line
                                                        x1="2" y1="12" x2="22"
                                                        y2="12"></line><path
                                                        d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                                                <div class="media-content">

                                                    <h3>Public</h3>
                                                    <small>Anyone can see this
                                                        publication.</small>
                                                </div>

                                            </div>

                                        </a>

                                        <a class="dropdown-item">

                                            <div class="media">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-users"><path
                                                        d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle
                                                        cx="9" cy="7"
                                                        r="4"></circle><path
                                                        d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path
                                                        d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                                <div class="media-content">

                                                    <h3>Friends</h3>
                                                    <small>only friends can see
                                                        this
                                                        publication.</small>
                                                </div>

                                            </div>

                                        </a>

                                        <a class="dropdown-item">

                                            <div class="media">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-user"><path
                                                        d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle
                                                        cx="12" cy="7"
                                                        r="4"></circle></svg>
                                                <div class="media-content">

                                                    <h3>Specific friends</h3>
                                                    <small>Don't show it to some
                                                        friends.</small>
                                                </div>

                                            </div>

                                        </a>

                                        <hr class="dropdown-divider">

                                        <a class="dropdown-item">

                                            <div class="media">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-lock"><rect
                                                        x="3" y="11" width="18"
                                                        height="11" rx="2"
                                                        ry="2"></rect><path
                                                        d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                                <div class="media-content">

                                                    <h3>Only me</h3>
                                                    <small>Only me can see this
                                                        publication.</small>
                                                </div>

                                            </div>

                                        </a>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="inner-content">

                            <div class="live-stats">

                                <div class="social-count">

                                    <div class="likes-count"> <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24"
                                            viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-heart"><path
                                                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                        <span>58</span></div>

                                    <div class="comments-count"> <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24"
                                            viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-message-circle"><path
                                                d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                        <span>9</span></div>

                                </div>

                                <div class="social-count ml-auto">

                                    <div class="views-count">
                                        <span>927</span> <span
                                            class="views"><small>comments</small></span>
                                    </div>

                                </div>

                            </div>

                            <div class="actions">

                                <div class="action"> <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24"
                                        viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-thumbs-up"><path
                                            d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg>
                                    <span>Like</span></div>

                                <div class="action"> <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24"
                                        viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-message-circle"><path
                                            d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                    <span>Comment</span></div>

                            </div>

                        </div>

                        <div class="comments-list has-slimscroll">

                            <div class="media is-comment">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/milly.jpg"
                                            alt data-user-popover="7"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">Milly Augustine</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Proin ornare magna
                                        eros.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>1h</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>1</span></div>

                                    </div>

                                </div>

                            </div>

                            <div class="media is-comment">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/edward.jpeg"
                                            alt data-user-popover="5"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">Edward Mayers</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit, sed do eiusmod tempo
                                        incididunt ut labore et dolore magna
                                        aliqua.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>30m</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>1</span></div>

                                    </div>

                                </div>

                            </div>

                            <div class="media is-comment">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/elise.jpg"
                                            alt data-user-popover="6"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">Elise Walker</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit, sed do eiusmod tempo
                                        incididunt ut labore et dolore magna
                                        aliqua.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>15m</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>0</span></div>

                                    </div>

                                </div>

                            </div>

                            <div class="media is-comment">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/stella.jpg"
                                            alt data-user-popover="2"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">Stella Bergmann</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit, sed do eiusmod
                                        tempo.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>1h</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>5</span></div>

                                    </div>

                                </div>

                            </div>

                            <div class="media is-comment">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/stella.jpg"
                                            alt data-user-popover="0"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">Stella Bergmann</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit, sed do eiusmod
                                        tempo.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>30m</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>5</span></div>

                                    </div>

                                </div>

                            </div>

                            <div class="media is-comment">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/edward.jpeg"
                                            alt data-user-popover="5"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">Edward Mayers</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit, sed do eiusmod tempo
                                        incididunt ut labore et dolore magna
                                        aliqua.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>1d</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>1</span></div>

                                    </div>

                                </div>

                            </div>

                            <div class="media is-comment">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/nelly.png"
                                            alt data-user-popover="9"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">Nelly Schwartz</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>2d</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>0</span></div>

                                    </div>

                                </div>

                            </div>

                            <div class="media is-comment">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/jenna.png"
                                            alt data-user-popover="0"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">Stella Bergmann</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit, sed do eiusmod
                                        tempo.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>2d</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>5</span></div>

                                    </div>

                                </div>

                            </div>

                            <div class="media is-comment">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/elise.jpg"
                                            alt data-user-popover="6"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">Elise Walker</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit, sed do eiusmod tempo
                                        incididunt ut labore et dolore magna
                                        aliqua.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>2d</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>0</span></div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="comment-controls has-lightbox-emojis">

                            <div class="controls-inner"
                                id="lightbox-post-comment-wrapper-5">
                                <img src="https://via.placeholder.com/300x300"
                                    data-demo-src="assets/img/avatars/jenna.png"
                                    alt>
                                <div class="control"> <textarea
                                        class="textarea comment-textarea is-rounded"
                                        rows="1"
                                        id="lightbox-post-comment-textarea-5"></textarea>
                                    <button class="emoji-button"
                                        id="lightbox-post-comment-button-5">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24"
                                            viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-smile"><circle
                                                cx="12" cy="12"
                                                r="10"></circle><path
                                                d="M8 14s1.5 2 4 2 4-2 4-2"></path><line
                                                x1="9" y1="9" x2="9.01"
                                                y2="9"></line><line x1="15"
                                                y1="9" x2="15.01"
                                                y2="9"></line></svg></button></div>

                            </div>

                        </div>
                        ",g='
                        <div class="header">
                            <img src="https://via.placeholder.com/300x300"
                                data-demo-src="assets/img/avatars/jenna.png"
                                alt>
                            <div class="user-meta">
                                <span>Jenna Davis</span> <span><small>oct 17
                                        2018</small></span>
                            </div>
                            <button type="button" class="button">Follow</button>
                            <div
                                class="dropdown is-spaced is-right dropdown-trigger">

                                <div>

                                    <div class="button"> <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24"
                                            viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-more-vertical"><circle
                                                cx="12" cy="12"
                                                r="1"></circle><circle cx="12"
                                                cy="5" r="1"></circle><circle
                                                cx="12" cy="19"
                                                r="1"></circle></svg></div>

                                </div>

                                <div class="dropdown-menu" role="menu">

                                    <div class="dropdown-content">

                                        <div
                                            class="dropdown-item is-title has-text-left">
                                            Who can see this ?</div>

                                        <a href="#" class="dropdown-item">

                                            <div class="media">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-globe"><circle
                                                        cx="12" cy="12"
                                                        r="10"></circle><line
                                                        x1="2" y1="12" x2="22"
                                                        y2="12"></line><path
                                                        d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                                                <div class="media-content">

                                                    <h3>Public</h3>
                                                    <small>Anyone can see this
                                                        publication.</small>
                                                </div>

                                            </div>

                                        </a>

                                        <a class="dropdown-item">

                                            <div class="media">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-users"><path
                                                        d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle
                                                        cx="9" cy="7"
                                                        r="4"></circle><path
                                                        d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path
                                                        d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                                <div class="media-content">

                                                    <h3>Friends</h3>
                                                    <small>only friends can see
                                                        this
                                                        publication.</small>
                                                </div>

                                            </div>

                                        </a>

                                        <a class="dropdown-item">

                                            <div class="media">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-user"><path
                                                        d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle
                                                        cx="12" cy="7"
                                                        r="4"></circle></svg>
                                                <div class="media-content">

                                                    <h3>Specific friends</h3>
                                                    <small>Don't show it to some
                                                        friends.</small>
                                                </div>

                                            </div>

                                        </a>

                                        <hr class="dropdown-divider">

                                        <a class="dropdown-item">

                                            <div class="media">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-lock"><rect
                                                        x="3" y="11" width="18"
                                                        height="11" rx="2"
                                                        ry="2"></rect><path
                                                        d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                                <div class="media-content">

                                                    <h3>Only me</h3>
                                                    <small>Only me can see this
                                                        publication.</small>
                                                </div>

                                            </div>

                                        </a>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="inner-content">

                            <div class="live-stats">

                                <div class="social-count">

                                    <div class="likes-count"> <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24"
                                            viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-heart"><path
                                                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                        <span>33</span></div>

                                    <div class="comments-count"> <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24"
                                            viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-message-circle"><path
                                                d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                        <span>8</span></div>

                                </div>

                                <div class="social-count ml-auto">

                                    <div class="views-count">
                                        <span>8</span> <span
                                            class="views"><small>comments</small></span>
                                    </div>

                                </div>

                            </div>

                            <div class="actions">

                                <div class="action"> <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24"
                                        viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-thumbs-up"><path
                                            d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg>
                                    <span>Like</span></div>

                                <div class="action"> <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24"
                                        viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-message-circle"><path
                                            d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                    <span>Comment</span></div>

                            </div>

                        </div>

                        <div class="comments-list has-slimscroll">

                            <div class="media is-comment">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/stella.jpg"
                                            alt data-user-popover="2"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">Stella Bergmann</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Proin ornare magna
                                        eros.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>17d</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>0</span></div>

                                    </div>

                                </div>

                            </div>

                            <div class="media is-comment">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/jenna.png"
                                            alt data-user-popover="0"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">Jenna Davis</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit, sed do eiusmod
                                        tempo.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>17d</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>4</span></div>

                                    </div>

                                </div>

                            </div>

                            <div class="media is-comment">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/david.jpg"
                                            alt data-user-popover="4"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">David Kim</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit, sed do eiusmod tempo
                                        incididunt ut labore.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>17d</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>0</span></div>

                                    </div>

                                </div>

                            </div>

                            <div class="media is-comment">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/milly.jpg"
                                            alt data-user-popover="7"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">Milly Augustine</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit, sed do eiusmod
                                        tempo.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>17d</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>5</span></div>

                                    </div>

                                </div>

                            </div>

                            <div class="media is-comment">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/daniel.jpg"
                                            alt data-user-popover="3"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">Daniel
                                        Wellington</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit, sed do eiusmod
                                        tempo.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>17d</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>1</span></div>

                                    </div>

                                </div>

                            </div>

                            <div class="media is-comment">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/david.jpg"
                                            alt data-user-popover="4"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">David Kim</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit, sed do eiusmod tempo
                                        incididunt ut labore, consectetur
                                        adipisicing elit, sed do eiusmod
                                        tempo.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>18d</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>0</span></div>

                                    </div>

                                </div>

                            </div>

                            <div class="media is-comment">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/jenna.png"
                                            alt data-user-popover="0"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">Stella Bergmann</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit, sed do eiusmod
                                        tempo.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>18d</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>8</span></div>

                                    </div>

                                </div>

                            </div>

                            <div class="media is-comment">

                                <figure class="media-left">

                                    <p class="image is-32x32"> <img
                                            src="https://via.placeholder.com/300x300"
                                            data-demo-src="assets/img/avatars/mike.jpg"
                                            alt data-user-popover="12"></p>

                                </figure>

                                <div class="media-content">

                                    <div class="username">Mike Lasalle</div>

                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit, sed do eiusmod tempo
                                        incididunt ut labore et dolore magna
                                        aliqua.</p>

                                    <div class="comment-actions">
                                        <a href="javascript:void(0);"
                                            class="is-inverted">Like</a>
                                        <span>18d</span>
                                        <div class="likes-count"> <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-heart"><path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <span>0</span></div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="comment-controls has-lightbox-emojis">

                        </div>
                    </div></div></div></div>
`;


             
                // alert('dsad');
                // $('.fancybox-progress').append(lightboxing); 
                
                $('.fancybox-caption__body').append(lightboxing);
              
              
              
            });
        });
</script>


@endsection
