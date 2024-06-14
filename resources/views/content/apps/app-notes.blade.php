@extends('layouts/layoutMaster')

@section('title', 'Notes')

@section('page-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-icons.css') }}" />
    <style>
      .custom-option-icon .form-check-input{
        background-color: transparent !important;
        border:none !important;
      }
      #wizard-create-deal-form .form-check-input:checked,
        #wizard-create-deal-form .form-check-input[type=checkbox] {
            background-color: transparent !important;
            border:none !important;
            box-shadow: none !important;
            background-image: none !important;
        }
        .dropdown.is-right .dropdown-menu {
            left: 56px;
            right: auto;
            padding: 0;
            top:-22px;
        }
        .dropdown-item h6, .h6, h5, .h5, h4, .h4, h3, .h3, h2, .h2, h1, .h1{
          margin-bottom: 0 !important;
        }
        .modal-content, .modal-card{
          overflow-x: hidden !important;
        }
        .modal-header .btn-close{
          top: 10px;
          position: relative;
          right: 14px;
        }

        .modal-body .btn-close{
          top: -20px !important;
          right: -20px !important;
        }
    </style>
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

        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">

            <!-- Create Deal Wizard -->
            <div id="wizard-create-deal" class="bs-stepper vertical mt-2 linear"
                style="box-shadow:none;background-color:transparent">
                <div class="bs-stepper-content">
                    <form id="wizard-create-deal-form" onsubmit="return false">
                        <!-- Deal Type -->
                        <div id="deal-type"
                            class="content active dstepper-block fv-plugins-bootstrap5 fv-plugins-framework">
                            <div class="row g-3">
                                <div class="col-12">
                                    <div class="row">
                                      <div class="col-md mb-md-0 mb-2">
                                        <div class="form-check custom-option card custom-option-icon {{request('type') == 'all-news' ? 'checked' : ''}}">
                                            <a href="javascript:void(0)" class="form-check-label custom-option-content {{request('type') == 'all-news' ? 'active' : ''}}"
                                                for="customRadioPercentage" data-bs-toggle="modal" data-bs-target="#createnewsModal">
                                                <span class="custom-option-body">
                                                    <img src="{{ asset('assets/svg/icons/newspaper.svg') }}"
                                                        class="my-2" width="40" alt="">
                                                    <span class="custom-option-title">Create News</span>
                                                    <small>Share News with your Community</small>
                                                </span>
                                                <input name="customRadioIcon" class="form-check-input" type="radio"
                                                    value="" id="customRadioPercentage" {{request('type') == 'all-news' ? 'checked' : ''}}>
                                              </a>
                                        </div>
                                    </div>
                                    <div class="col-md mb-md-0 mb-2">
                                        <div class="form-check custom-option card custom-option-icon {{request('type') == 'admin-feeds' ? 'checked' : ''}}">
                                            <a href="javascript:void(0)" class="form-check-label custom-option-content {{request('type') == 'admin-feeds' ? 'active' : ''}}"
                                            data-bs-toggle="modal" data-bs-target="#createnewsModal"
                                            for="customRadioFlat">
                                                <span class="custom-option-body">
                                                    <img src="{{ asset('assets/svg/icons/network-connection.svg') }}"
                                                        class="my-2" width="40" alt="">
                                                    <span class="custom-option-title"> Add Feeds </span>
                                                    <small>Share a Feed with Community</small>
                                                </span>
                                                <input name="customRadioIcon" class="form-check-input" type="radio"
                                                    value="" id="customRadioFlat" {{request('type') == 'admin-feeds' ? 'checked' : ''}}>
                                              </a>
                                        </div>
                                    </div>
                                    <div class="col-md mb-md-0 mb-2">
                                        <div class="form-check custom-option card custom-option-icon">

                                          <a href="javascript:void(0)" class="form-check-label custom-option-content"
                                          data-bs-toggle="modal" data-bs-target="#addNewAddress" for="customRadioPrime">
                                                <span class="custom-option-body">
                                                    <img src="{{ asset('assets/svg/icons/on-air.svg') }}"
                                                        class="my-2" width="40" alt="">
                                                    <span class="custom-option-title"> Go Live </span>
                                                    <small>Go Live or Plan a date to Go Live</small>
                                                </span>
                                                <input name="customRadioIcon" class="form-check-input" type="radio"
                                                    value="" id="customRadioPrime">
                                              </a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Deal Details -->
                        <div id="deal-details" class="content fv-plugins-bootstrap5 fv-plugins-framework">
                            <div class="row g-3">
                                <div class="col-sm-6 fv-plugins-icon-container">
                                    <label class="form-label" for="dealTitle">Deal Title</label>
                                    <input type="text" id="dealTitle" name="dealTitle" class="form-control"
                                        placeholder="Black friday sale, 25% off">
                                    <div
                                        class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                    </div>
                                </div>
                                <div class="col-sm-6 fv-plugins-icon-container">
                                    <label class="form-label" for="dealCode">Deal Code</label>
                                    <input type="text" id="dealCode" name="dealCode" class="form-control"
                                        placeholder="25PEROFF">
                                    <div
                                        class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="dealDescription">Deal Description</label>
                                    <textarea id="dealDescription" name="dealDescription" class="form-control" rows="5"
                                        placeholder="To sell or distribute something as a business deal"></textarea>
                                </div>
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <label class="form-label" for="dealOfferedItem">Offered Items</label>
                                            <div class="position-relative"><select
                                                    class="select2 select2-hidden-accessible" id="dealOfferedItem"
                                                    name="dealOfferedItem" multiple=""
                                                    data-select2-id="dealOfferedItem" tabindex="-1" aria-hidden="true">
                                                    <option disabled="" value="">Select offered item</option>
                                                    <option value="65328">Apple iPhone 12 Pro Max (256GB)</option>
                                                    <option value="25612">Apple iPhone 12 Pro (512GB)</option>
                                                    <option value="65454">Apple iPhone 12 Mini (256GB)</option>
                                                    <option value="12365">Apple iPhone 11 Pro Max (256GB)</option>
                                                    <option value="85466">Apple iPhone 11 (64GB)</option>
                                                    <option value="98564">OnePlus Nord CE 5G (128GB)</option>
                                                </select><span class="select2 select2-container select2-container--default"
                                                    dir="ltr" data-select2-id="2" style="width: auto;"><span
                                                        class="selection"><span
                                                            class="select2-selection select2-selection--multiple"
                                                            role="combobox" aria-haspopup="true" aria-expanded="false"
                                                            tabindex="-1" aria-disabled="false">
                                                            <ul class="select2-selection__rendered">
                                                                <li class="select2-search select2-search--inline"><input
                                                                        class="select2-search__field" type="search"
                                                                        tabindex="0" autocomplete="off"
                                                                        autocorrect="off" autocapitalize="none"
                                                                        spellcheck="false" role="searchbox"
                                                                        aria-autocomplete="list"
                                                                        placeholder="Select an offered item"
                                                                        style="width: 0px;"></li>
                                                            </ul>
                                                        </span></span><span class="dropdown-wrapper"
                                                        aria-hidden="true"></span></span></div>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label" for="dealCartCondition">Cart condition</label>
                                            <select class="form-select" id="dealCartCondition" name="dealCartCondition">
                                                <option disabled="" value="">Select cart condition</option>
                                                <option value="all">Cart must contain all selected Downloads</option>
                                                <option value="any">Cart needs one or more of the selected Downloads
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label for="dealDuration" class="form-label">Deal Duration</label>
                                    <input type="text" id="dealDuration" name="dealDuration"
                                        class="form-control flatpickr-input" placeholder="YYYY-MM-DD to YYYY-MM-DD"
                                        readonly="readonly">
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label">Notify Users</label>
                                    <div class="row">
                                        <div class="col mt-2">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="dealNotifyEmail"
                                                    name="dealNotifyEmail" value="email">
                                                <label class="form-check-label" for="dealNotifyEmail">Email</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="dealNotifySMS"
                                                    name="dealNotifySMS" value="sms">
                                                <label class="form-check-label" for="dealNotifySMS">SMS</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="dealNotifyPush"
                                                    name="dealNotifyPush" value="push">
                                                <label class="form-check-label" for="dealNotifyPush">Push
                                                    Notification</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-between">
                                    <button class="btn btn-primary btn-prev">
                                        <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                    </button>
                                    <button class="btn btn-primary btn-next">
                                        <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                                        <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
                                </div>
                            </div>
                        </div>
                        <!-- Deal Usage -->
                        <div id="deal-usage" class="content fv-plugins-bootstrap5 fv-plugins-framework">
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <label class="form-label" for="dealUserType">User Type</label>
                                    <select id="dealUserType" name="dealUserType" class="form-select">
                                        <option selected="" disabled="" value="">Select user type</option>
                                        <option value="all">All</option>
                                        <option value="registered">Registered</option>
                                        <option value="unregistered">Unregistered</option>
                                        <option value="prime-members">Prime members</option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="dealMaxUsers">Max Users</label>
                                    <input type="number" id="dealMaxUsers" name="dealMaxUsers" class="form-control"
                                        placeholder="500">
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="dealMinimumCartAmount">Minimum Cart Amount</label>
                                    <input type="number" id="dealMinimumCartAmount" name="dealMinimumCartAmount"
                                        class="form-control" placeholder="$99">
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="dealPromotionalFee">Promotional Fee</label>
                                    <input type="number" id="dealPromotionalFee" name="dealPromotionalFee"
                                        class="form-control" placeholder="$9">
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="dealPaymentMethod">Payment Method</label>
                                    <select id="dealPaymentMethod" name="dealPaymentMethod" class="form-select">
                                        <option selected="" disabled="" value="">Select payment method
                                        </option>
                                        <option value="any">Any</option>
                                        <option value="credit-card">Credit Card</option>
                                        <option value="net-banking">Net Banking</option>
                                        <option value="wallet">Wallet</option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="dealStatus">Deal Status</label>
                                    <select id="dealStatus" name="dealStatus" class="form-select">
                                        <option selected="" disabled="" value="">Select status</option>
                                        <option value="active">Active</option>
                                        <option value="inactive">Inactive</option>
                                        <option value="suspend">Suspend</option>
                                        <option value="abandon">Abandone</option>
                                    </select>
                                </div>
                                <div class="col-lg-12">
                                    <label class="switch">
                                        <input type="checkbox" class="switch-input" id="dealLimitUser"
                                            name="dealLimitUser">
                                        <span class="switch-toggle-slider">
                                            <span class="switch-on"></span>
                                            <span class="switch-off"></span>
                                        </span>
                                        <span class="switch-label"> Limit this discount to a single-use per
                                            customer?</span>
                                    </label>
                                </div>
                                <div class="col-12 d-flex justify-content-between">
                                    <button class="btn btn-primary btn-prev"> <i
                                            class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                    </button>
                                    <button class="btn btn-primary btn-next"> <span
                                            class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i
                                            class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
                                </div>
                            </div>
                        </div>
                        <!-- Review & Complete -->
                        <div id="review-complete" class="content fv-plugins-bootstrap5 fv-plugins-framework">
                            <div class="row g-3">

                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-12 mb-0">
                                            <h3>Almost done! 🚀</h3>
                                            <p>Confirm your deal details information and submit to create it.</p>
                                        </div>
                                        <div class="col-12 mb-0">
                                            <table class="table table-borderless">
                                                <tbody>
                                                    <tr>
                                                        <td class="ps-0 align-top text-nowrap py-1"><span
                                                                class="fw-medium">Deal Type</span></td>
                                                        <td class="px-0 py-1">Percentage</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="ps-0 align-top text-nowrap py-1"><span
                                                                class="fw-medium">Amount</span></td>
                                                        <td class="px-0 py-1">25%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="ps-0 align-top text-nowrap py-1"><span
                                                                class="fw-medium">Deal Code</span></td>
                                                        <td class="px-0 py-1">
                                                            <div class="badge bg-label-warning">25PEROFF</div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="ps-0 align-top text-nowrap py-1"><span
                                                                class="fw-medium">Deal Title</span></td>
                                                        <td class="px-0 py-1">Black friday sale, 25% OFF</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="ps-0 align-top text-nowrap py-1"><span
                                                                class="fw-medium">Deal Duration</span></td>
                                                        <td class="px-0 py-1"><span class="fw-medium">2021-07-14</span> to
                                                            <span class="fw-medium">2021-07-30</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 d-flex align-items-center justify-content-center">
                                    <img class="img-fluid w-px-200"
                                        src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/illustrations/man-with-laptop-light.png"
                                        alt="deal image cap" data-app-light-img="illustrations/man-with-laptop-light.png"
                                        data-app-dark-img="illustrations/man-with-laptop-dark.png">
                                </div>
                                <div class="col-md-12">
                                    <label class="switch">
                                        <input type="checkbox" class="switch-input" id="dealConfirmed"
                                            name="dealConfirmed">
                                        <span class="switch-toggle-slider">
                                            <span class="switch-on"></span>
                                            <span class="switch-off"></span>
                                        </span>
                                        <span class="switch-label"> I have confirmed the deal details.</span>
                                    </label>
                                </div>
                                <div class="col-12 d-flex justify-content-between">
                                    <button class="btn btn-primary btn-prev"> <i
                                            class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                    </button>
                                    <button class="btn btn-success btn-submit btn-next">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /Create Deal Wizard -->

@include('content.include.goLive.addressForm')

            <div class="view-wrapper">
                <div id="main-feed" class="container">
                    <div id="activity-feed" class="view-wrap true-dom">

                        <div class="columns">
                          <div class="column is-3 is-hidden-mobile">
                            <div class="card">
                                <div class="card-body p-0 border-none">
                                    <div class="list-group nav nav-tab" role="tablist">
                                        <a class="list-group-item list-group-item-action {{request('type') == 'admin-feeds' ? 'active' : ''}}" href="{{url('app/user/notes?type=admin-feeds')}}">
                                            Admin Feeds<br>
                                            <small class="text-muted">Admin has Post</small>
                                        </a>
                                        <a class="list-group-item list-group-item-action {{request('type') == 'all-news' ? 'active' : ''}}" href="{{url('app/user/notes?type=all-news')}}">
                                            All News<br>
                                            <small class="text-muted">Admin has create</small>
                                        </a>
                                        <a class="list-group-item list-group-item-action {{request('type') == 'go-live' ? 'active' : ''}}" href="{{url('app/user/live?type=go-live')}}">
                                            Go Live Soon<br>
                                            <small class="text-muted">Planed Live Streams</small>
                                        </a>
                                        <a class="list-group-item list-group-item-action {{request('type') == 'admin-live' ? 'active' : ''}}" href="{{url('app/user/notes?type=admin-live')}}">
                                            Admin Live Streams<br>
                                            <small class="text-muted">Live Streams by Admin</small>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                            <div class="column column is-6">
                                <div id="feed-post-1" class="card is-post">
                                    <!-- Main wrap -->
                                    <div class="content-wrap">
                                        <!-- Post header -->
                                        <div class="card-heading">
                                            <!-- User meta -->
                                            <div class="user-block">
                                                <div class="image">
                                                    <img src="{{asset('assets/img/logo.png')}}"
                                                        data-demo-src="{{asset('assets/img/logo.png')}}"
                                                        data-user-popover="1" alt="">
                                                </div>
                                                <div class="user-info">
                                                    <span class="d-flex"><a href="#">Yekbun</a><i class="bx bx-world ml-2"></i></span>
                                                    <span class="time">. CEO .</span>
                                                </div>
                                            </div>
                                            <!-- Right side dropdown -->
                                            <!-- /partials/pages/feed/dropdowns/feed-post-dropdown.html -->
                                            <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                              <div>
                                                  <div class="button">
                                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                  </div>
                                              </div>
                                              <div class="dropdown-menu" role="menu">
                                                  <div class="dropdown-content">
                                                      <a href="javascript:void(0)" class="dropdown-item">
                                                          <div class="media">
                                                              <div class="media-content">
                                                                  <h3>Remove {{request('type') == 'all-news' ? 'News' : 'Feed'}}</h3>
                                                                  <small>{{request('type') == 'all-news' ? 'News' : 'Feed'}} Removed Only</small>
                                                              </div>
                                                          </div>
                                                      </a>
                                                      <a href="javascript:void(0)" class="dropdown-item">
                                                        <div class="media">
                                                            <div class="media-content">
                                                                <h3>Repost the Feed</h3>
                                                                <small>Post it again</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                  </div>
                                              </div>
                                          </div>
                                        </div>
                                        <!-- /Post header -->

                                        <!-- Post body -->
                                        <div class="card-body">
                                            <!-- Post body text -->
                                            <div class="post-text">
                                                <p>
                                                    Yesterday with <a href="#">@Karen Miller</a> and
                                                    <a href="#">@Marvin Stemperd</a> at the
                                                    <a href="#">#Rock'n'Rolla</a> concert in LA. Was totally
                                                    fantastic!
                                                    People were really excited about this one!
                                                </p>
                                            </div>
                                            <!-- Featured image -->
                                            <div class="post-image">
                                                <a data-fancybox="post1" data-lightbox-type="comments"
                                                    data-thumb="https://friendkit.cssninja.io/assets/img/demo/unsplash/1.jpg"
                                                    href="https://friendkit.cssninja.io/assets/img/demo/unsplash/1.jpg"
                                                    data-demo-href="https://friendkit.cssninja.io/assets/img/demo/unsplash/1.jpg">
                                                    <img src="https://friendkit.cssninja.io/assets/img/demo/unsplash/1.jpg"
                                                        data-demo-src="https://friendkit.cssninja.io/assets/img/demo/unsplash/1.jpg"
                                                        alt="">
                                                </a>
                                                <!-- Action buttons -->

                                            </div>
                                        </div>
                                        <!-- /Post body -->

                                        <!-- Post footer -->
                                        <div class="card-footer">
                                            <!-- Followers avatars -->
                                            <div class="likers-group">
                                                <img src="{{ asset('assets/svg/icons/haha-emoji.svg') }}"
                                                    data-demo-src="{{ asset('assets/svg/icons/haha-emoji.svg') }}"
                                                    data-user-popover="1" alt="">
                                                <img src="{{ asset('assets/svg/icons/love-emoji.svg') }}"
                                                    data-demo-src="{{ asset('assets/svg/icons/love-emoji.svg') }}"
                                                    data-user-popover="4" alt="">
                                                <img src="{{ asset('assets/svg/icons/sad-emoji.svg') }}"
                                                    data-demo-src="{{ asset('assets/svg/icons/sad-emoji.svg') }}"
                                                    data-user-popover="5" alt="">
                                            </div>
                                            <!-- Followers text -->
                                            <div class="likers-text">

                                            </div>
                                            <!-- Post statistics -->
                                            <div class="social-count">
                                                <div class="shares-count" style="cursor: pointer">
                                                    <img src="{{ asset('assets/svg/icons/Share.svg') }}" width="15"
                                                        alt="">
                                                    <span>9</span>
                                                </div>
                                                <div class="likes-count" style="cursor: pointer">
                                                    <img src="{{ asset('assets/svg/icons/views.svg') }}" width="15"
                                                        alt="">
                                                    <span>27</span>
                                                </div>
                                                <div class="comments-count is-comment-light" style="cursor: pointer">
                                                    <img src="{{ asset('assets/svg/icons/Comments.svg') }}"
                                                        width="15" alt="">
                                                    <span>3</span>
                                                </div>
                                                <div class="comments-count" style="cursor: pointer">
                                                    <img src="{{ asset('assets/svg/icons/voice.svg') }}" width="15"
                                                        alt="">
                                                    <span>3</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Post footer -->
                                    </div>
                                    <!-- /Main wrap -->

                                    <!-- Post #1 Comments -->
                                    <div class="comments-wrap is-hidden" style="top: 0rem;position: relative;">

                                        <!-- Comments body -->
                                        <div class="comments-body has-slimscroll">
                                            <img src="{{asset('assets/svg/icons/Comment- area.svg')}}" style="width: 100%" alt="">
                                        </div>
                                        <!-- /Comments body -->

                                    </div>
                                    <!-- /Post #1 Comments -->
                                </div>
                            </div>

                            <div class="column is-3"></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- / Content -->

    <x-modal id="createnewsModal"
    title="Create News"
    :titleCentered="true"
    titleTag="h3"
    saveBtnText="Create"
    saveBtnType="submit"
    saveBtnForm="createForm"
    size="lg"
    :showFooter="false"
  >
   @include('content.include.news.createForm')
  </x-modal>
    <script>
        function delete_service(el) {
            let link = $(el).data('id');
            $('.deleted-modal').modal('show');
            $('#delete_form').attr('action', link);
        }
    </script>

<div class="content-backdrop fade"></div>
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
            }).then(function(result) {
                if (result.value) {
                    callback();
                }
            });
        }
    </script>
    <script>
        function drpzone_init() {
            dropZoneInitFunctions.forEach(callback => callback());
        }
    </script>
    <script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js" onload="drpzone_init()"></script>
@endsection
@endsection
