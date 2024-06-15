@extends('layouts/layoutMaster')

@section('title', 'User View - Pages')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave-phone.js')}}"></script>
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/modal-edit-user.js')}}"></script>
<script src="{{asset('assets/js/app-user-view.js')}}"></script>
@endsection

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">User / View /</span> Notifications
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
              <h4 class="mb-2"><img height="20px" src="https://yekbun.hellodev.site/public//assets/img/medal-ribbon.jpeg"> Alex Smith</h4>
               <p class="mb-2"><img height="20px" src="https://yekbun.hellodev.site/public//assets/img/germany-flag-png.png"> Rojava Qamishlo <img height="20px" src="https://yekbun.hellodev.site/public//assets/img/germany-flag-png.png"> Hannover</p>
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
      
     <li class="nav-item"><a class="nav-link" href="{{url('app/user/view/Follower')}}"><i class="bx bx-user me-1"></i>Follower</a></li>
      <li class="nav-item"><a class="nav-link" href="{{url('app/user/view/Post')}}"><i class="bx bx-detail me-1"></i>Post</a></li>
      <li class="nav-item"><a class="nav-link " href="{{url('app/user/view/Videos')}}"><i class="bx bx-video me-1"></i>Videos</a></li>
      <li class="nav-item"><a class="nav-link active" href="{{url('app/user/view/Activity')}}"><i class="bx bx-bell me-1"></i>Activity</a></li>
      <li class="nav-item"><a class="nav-link" href="{{url('app/user/view/Location')}}"><i class="bx bx-map-pin me-1"></i>Location</a></li>
    </ul>
    <!--/ User Pills -->


  <div class="col-xl-10">
    <div class="card">
      <h5 class="card-header">Advanced</h5>
      <div class="card-body">
        <ul class="timeline pt-3">
          <li class="timeline-item pb-4 timeline-item-primary border-left-dashed">
            <span class="timeline-indicator-advanced timeline-indicator-primary">
              <i class="bx bx-paper-plane"></i>
            </span>
            <div class="timeline-event">
              <div class="timeline-header border-bottom mb-3">
                <h6 class="mb-0">Get on the flight</h6>
                <span class="text-muted">3rd October</span>
              </div>
              <div class="d-flex justify-content-between flex-wrap mb-2">
                <div>
                  <span>Charles de Gaulle Airport, Paris</span>
                  <i class="bx bx-right-arrow-alt scaleX-n1-rtl mx-3"></i>
                  <span>Heathrow Airport, London</span>
                </div>
                <div>
                  <span>6:30 AM</span>
                </div>
              </div>
              <a href="javascript:void(0)">
                <i class="bx bx-link"></i>
                bookingCard.pdf
              </a>
            </div>
          </li>
          <li class="timeline-item pb-4 timeline-item-success border-left-dashed">
            <span class="timeline-indicator-advanced timeline-indicator-success">
              <i class="bx bx-paint"></i>
            </span>
            <div class="timeline-event">
              <div class="timeline-header mb-sm-0 mb-3">
                <h6 class="mb-0">Design Review</h6>
                <span class="text-muted">4th October</span>
              </div>
              <p>
                Weekly review of freshly prepared design for our new
                application.
              </p>
              <div class="d-flex justify-content-between">
                <h6>New Application</h6>
                <div class="d-flex">
                  <div class="avatar avatar-xs me-2">
                    <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/4.png" alt="Avatar" class="rounded-circle">
                  </div>
                  <div class="avatar avatar-xs">
                    <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/5.png" alt="Avatar" class="rounded-circle">
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="timeline-item pb-4 timeline-item-danger border-left-dashed">
            <span class="timeline-indicator-advanced timeline-indicator-danger">
              <i class="bx bx-shopping-bag"></i>
            </span>
            <div class="timeline-event">
              <div class="d-flex flex-sm-row flex-column">
                <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/elements/16.jpg" class="rounded me-3" alt="Shoe img" height="62" width="62">
                <div>
                  <div class="timeline-header flex-wrap mb-2 mt-3 mt-sm-0">
                    <h6 class="mb-0">Sold Puma POPX Blue Color</h6>
                    <span class="text-muted">5th October</span>
                  </div>
                  <p>
                    PUMA presents the latest shoes from its collection. Light &amp;
                    comfortable made with highly durable material.
                  </p>
                </div>
              </div>
              <div class="d-flex justify-content-between flex-wrap flex-sm-row flex-column text-center">
                <div class="mb-sm-0 mb-2">
                  <p class="mb-0">Customer</p>
                  <span class="text-muted">Micheal Scott</span>
                </div>
                <div class="mb-sm-0 mb-2">
                  <p class="mb-0">Price</p>
                  <span class="text-muted">$375.00</span>
                </div>
                <div>
                  <p class="mb-0">Quantity</p>
                  <span class="text-muted">1</span>
                </div>
              </div>
            </div>
          </li>
          <li class="timeline-item pb-4 timeline-item-info border-left-dashed">
            <span class="timeline-indicator-advanced timeline-indicator-info">
              <i class="bx bx-user-circle"></i>
            </span>
            <div class="timeline-event">
              <div class="timeline-header">
                <h6 class="mb-0">Interview Schedule</h6>
                <span class="text-muted">6th October</span>
              </div>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Possimus quos, voluptates voluptas rem veniam expedita.
              </p>
              <hr>
              <div class="d-flex justify-content-between flex-wrap gap-2">
                <div class="d-flex flex-wrap">
                  <div class="avatar me-3">
                    <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/6.png" alt="Avatar" class="rounded-circle">
                  </div>
                  <div>
                    <p class="mb-0">Rebecca Godman</p>
                    <span class="text-muted">Javascript Developer</span>
                  </div>
                </div>
                <div class="d-flex flex-wrap align-items-center cursor-pointer">
                  <i class="bx bx-message-rounded-dots me-2"></i>
                  <i class="bx bx-phone-call"></i>
                </div>
              </div>
            </div>
          </li>
          <li class="timeline-item pb-4 timeline-item-dark border-left-dashed">
            <span class="timeline-indicator-advanced timeline-indicator-dark">
              <i class="bx bx-bell"></i>
            </span>
            <div class="timeline-event">
              <div class="timeline-header">
                <h6 class="mb-0">2 Notifications</h6>
                <span class="text-muted">7th October</span>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap border-top-0 p-0">
                  <div class="d-flex flex-wrap align-items-center">
                    <ul class="list-unstyled users-list d-flex align-items-center avatar-group m-0 my-3 me-2">
                      <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" aria-label="Vinnie Mostowy" data-bs-original-title="Vinnie Mostowy">
                        <img class="rounded-circle" src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/5.png" alt="Avatar">
                      </li>
                      <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" aria-label="Allen Rieske" data-bs-original-title="Allen Rieske">
                        <img class="rounded-circle" src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/12.png" alt="Avatar">
                      </li>
                      <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" aria-label="Julee Rossignol" data-bs-original-title="Julee Rossignol">
                        <img class="rounded-circle" src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/6.png" alt="Avatar">
                      </li>
                    </ul>
                    <span>Commented on your post.</span>
                  </div>
                  <button class="btn btn-outline-primary btn-sm my-sm-0 my-3">
                    View
                  </button>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap pb-0 px-0">
                  <div class="d-flex flex-sm-row flex-column align-items-center">
                    <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/4.png" class="rounded-circle me-3" alt="avatar" height="24" width="24">
                    <div class="user-info">
                      <p class="my-0">Dwight repaid you</p>
                      <span class="text-muted">30 minutes ago</span>
                    </div>
                  </div>
                  <h5 class="mb-0">$20</h5>
                </li>
              </ul>
            </div>
          </li>
          <li class="timeline-end-indicator">
            <i class="bx bx-check-circle"></i>
          </li>
        </ul>
      </div>
    </div>
  </div>
  </div>
  <!--/ User Content -->
</div>

<!-- Modals -->
@include('_partials/_modals/modal-edit-user')
@include('_partials/_modals/modal-upgrade-plan')
<!-- /Modals -->

@endsection
