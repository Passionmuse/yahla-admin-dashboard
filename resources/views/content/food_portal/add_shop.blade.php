@extends('layouts/layoutMaster')

@section('title', 'Property Listing - Wizard Examples')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/bs-stepper/bs-stepper.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/tagify/tagify.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/flatpickr/flatpickr.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/@form-validation/umd/styles/index.min.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/cleavejs/cleave.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave-phone.js')}}"></script>
<script src="{{asset('assets/vendor/libs/bs-stepper/bs-stepper.js')}}"></script>
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/tagify/tagify.js')}}"></script>
<script src="{{asset('assets/vendor/libs/flatpickr/flatpickr.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/umd/bundle/popular.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/umd/plugin-bootstrap5/index.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/umd/plugin-auto-focus/index.min.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/wizard-ex-property-listing.js')}}"></script>
@endsection

@section('content')
<h4 class="py-3 mb-4">
  <span class="text-muted fw-light">Wizard examples /</span> Property Listing
</h4>

<!-- Property Listing Wizard -->
<div id="wizard-property-listing" class="bs-stepper vertical mt-2">
  <div class="bs-stepper-header">
    <div class="step" data-target="#personal-details">
      <button type="button" class="step-trigger">
        <span class="bs-stepper-circle">
          <i class='fa fa-shopping-cart'></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">About Shops</span>
          <span class="bs-stepper-subtitle">ShopName-Logo</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <div class="step" data-target="#property-details">
      <button type="button" class="step-trigger">
        <span class="bs-stepper-circle">
          <i class='fa fa-address-book'></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Shop Address</span>
          <span class="bs-stepper-subtitle">City-Street</span>
        </span> 
      </button>
    </div>
    
    <!--add-->
     <div class="line"></div>
    <div class="step" data-target="#property-details1">
      <button type="button" class="step-trigger">
        <span class="bs-stepper-circle">
      <i class="fa fa-percent"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Pricing</span>
          <span class="bs-stepper-subtitle">Tax & Commission</span>
        </span> 
      </button>
    </div>
    
    
    
    
    <!--add-->
    <div class="line"></div>
    <div class="step" data-target="#property-features">
      <button type="button" class="step-trigger">
        <span class="bs-stepper-circle">
          <i class='fas fa-chalkboard-teacher'></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Owner</span>
          <span class="bs-stepper-subtitle">Name-Lastname</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <div class="step" data-target="#property-area">
      <button type="button" class="step-trigger">
        <span class="bs-stepper-circle">
          <i class='bx bx-rocket'></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Credientials</span>
          <span class="bs-stepper-subtitle">Shop Id Username Password</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <!--<div class="step" data-target="#price-details">-->
    <!--  <button type="button" class="step-trigger">-->
    <!--    <span class="bs-stepper-circle">-->
    <!--      <i class='bx bx-dollar'></i>-->
    <!--    </span>-->
    <!--    <span class="bs-stepper-label">-->
    <!--      <span class="bs-stepper-title">Price Details</span>-->
    <!--      <span class="bs-stepper-subtitle">Expected Price</span>-->
    <!--    </span>-->
    <!--  </button>-->
    <!--</div>-->
  </div>
  <div class="bs-stepper-content">
    <form id="wizard-property-listing-form" onSubmit="return false">

      <!-- Personal Details -->
      <div id="personal-details" class="content">
        <div class="row g-3">
            <div style="position:relative;" class="col-12">
            <img src="https://yekbun.hellodev.site/public//assets/img/profile-banner.png" class="img-fluid w-100 border rounded-2" alt="shopping girl" data-app-dark-img="illustrations/shopping-girl-dark.png" data-app-light-img="profile-banner.png">
            
            <a style="position:absolute;top:9px;right:18px;" href="javascript:void(0)" class="btn btn-primary text-nowrap">
             <i style="font-size:15px" class="fa"></i>
            </a>
            
          </div>



<div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4" style="
    margin-top: -43px;z-index:99999;
">
            
        <div style="position:relative;display:flex;align-items:end;" class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto">
          <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/1.png" alt="user image" class="d-block h-auto ms-0 ms-sm-4 rounded user-profile-img" style="
    height: 100px !important;
    width: auto;
    border: 4px solid white;
">
 <a style="position:absolute;top: 25px;
    padding: 3px;
    right: 6px;" href="javascript:void(0)" class="btn btn-primary text-nowrap">
             <i style="font-size:13px" class="fa"></i>
            </a>
        </div>
        <div class="flex-grow-1 mt-3 mt-sm-5">
          <div class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
            <div class="user-profile-info">
              <h4>John Doe</h4>
              <ul class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-2" style="
    font-size: 14px;
">
                <li class="list-inline-item fw-medium">
                  <i class="bx bx-pen"></i> UX Designer
                </li>
                <li class="list-inline-item fw-medium">
                  <i class="bx bx-map"></i> Vatican City
                </li>
                <li class="list-inline-item fw-medium">
                  <i class="bx bx-calendar-alt"></i> Joined April 2021
                </li>
              </ul>
            </div>
<!--            <a href="javascript:void(0)" class="btn btn-primary text-nowrap" style="-->
<!--    padding: 5px;-->
<!--    font-size: 12px;-->
<!--">-->
<!--              <i class="bx bx-user-check me-1"></i>Connected-->
<!--            </a>-->
          </div>
        </div>
      </div>
          <!--<div class="col-12">-->
          <!--  <div class="row">-->
          <!--    <div class="col-md mb-md-0 mb-2">-->
          <!--      <div class="form-check custom-option custom-option-icon">-->
          <!--        <label class="form-check-label custom-option-content" for="customRadioBuilder">-->
          <!--          <span class="custom-option-body">-->
          <!--            <i class="bx bx-building-house"></i>-->
          <!--            <span class="custom-option-title">I am the Builder</span>-->
          <!--            <small>List property as Builder, list your project and get highest reach.</small>-->
          <!--          </span>-->
          <!--          <input name="plUserType" class="form-check-input" type="radio" value="1" id="customRadioBuilder" checked />-->
          <!--        </label>-->
          <!--      </div>-->
          <!--    </div>-->
          <!--    <div class="col-md mb-md-0 mb-2">-->
          <!--      <div class="form-check custom-option custom-option-icon">-->
          <!--        <label class="form-check-label custom-option-content" for="customRadioOwner">-->
          <!--          <span class="custom-option-body">-->
          <!--            <i class="bx bx-crown"></i>-->
          <!--            <span class="custom-option-title"> I am the Owner </span>-->
          <!--            <small>Submit property as an Individual. Lease, Rent or Sell at the best price.</small>-->
          <!--          </span>-->
          <!--          <input name="plUserType" class="form-check-input" type="radio" value="2" id="customRadioOwner" />-->
          <!--        </label>-->
          <!--      </div>-->
          <!--    </div>-->
          <!--    <div class="col-md mb-md-0 mb-2">-->
          <!--      <div class="form-check custom-option custom-option-icon">-->
          <!--        <label class="form-check-label custom-option-content" for="customRadioBroker">-->
          <!--          <span class="custom-option-body">-->
          <!--            <i class="bx bx-briefcase-alt"></i>-->
          <!--            <span class="custom-option-title"> I am a Broker </span>-->
          <!--            <small>Earn highest commission by listing your clients properties at the best price.</small>-->
          <!--          </span>-->
          <!--          <input name="plUserType" class="form-check-input" type="radio" value="3" id="customRadioBroker" />-->
          <!--        </label>-->
          <!--      </div>-->
          <!--    </div>-->
          <!--  </div>-->
          <!--</div>-->
          <div class="col-sm-6">
            <label class="form-label" for="plFirstName">Title</label>
            <input type="text" id="plFirstName" name="plFirstName" class="form-control" placeholder="Title Shop Name" />
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plLastName">Description</label>
            <input type="text" id="plLastName" name="plLastName" class="form-control" placeholder="Title Shop Description" />
          </div>
          <!--<div class="col-sm-6">-->
          <!--  <label class="form-label" for="plUserName">Username</label>-->
          <!--  <input type="text" id="plUserName" name="plUserName" class="form-control" placeholder="john.doe" />-->
          <!--</div>-->
          <!--<div class="col-sm-6 form-password-toggle">-->
          <!--  <label class="form-label" for="plPassWord">Password</label>-->
          <!--  <div class="input-group input-group-merge">-->
          <!--    <input type="password" id="plPassWord" class="form-control" name="plPassWord" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="passwordToggler" />-->
          <!--    <span id="passwordToggler" class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>-->
          <!--  </div>-->
          <!--</div>-->
          <!--<div class="col-sm-6">-->
          <!--  <label class="form-label" for="plEmail">Email</label>-->
          <!--  <input type="text" id="plEmail" name="plEmail" class="form-control" placeholder="john.doe@example.com" />-->
          <!--</div>-->
          <!--<div class="col-sm-6">-->
          <!--  <label class="form-label" for="plContact">Contact</label>-->
          <!--  <div class="input-group input-group-merge">-->
          <!--    <span class="input-group-text">US (+1)</span>-->
          <!--    <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="202 555 0111" />-->
          <!--  </div>-->
          <!--</div>-->
          <div class="col-12 d-flex justify-content-end">
            <!--<button class="btn btn-label-secondary btn-prev" disabled> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>-->
              <!--<span class="align-middle d-sm-inline-block d-none">Previous</span>-->
            <!--</button>-->
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Property Details -->
      <div id="property-details" class="content">
      <div class="row g-3" data-select2-id="8">
          <div class="col-12">
            <div class="row">
             <div style="position:relative;" class="col-12">
            <img src="https://yekbun.hellodev.site/public//assets/img/profile-banner.png" class="img-fluid w-100 border rounded-2" alt="shopping girl" data-app-dark-img="illustrations/shopping-girl-dark.png" data-app-light-img="profile-banner.png">
            
            <a style="position:absolute;top:9px;right:18px;" href="javascript:void(0)" class="btn btn-primary text-nowrap">
             <i style="font-size:15px" class="fa"></i>
            </a>
            
          </div>



<div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4" style="
    margin-top: -43px;z-index:99999;
">
            
        <div style="position:relative;display:flex;align-items:end;" class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto">
          <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/1.png" alt="user image" class="d-block h-auto ms-0 ms-sm-4 rounded user-profile-img" style="
    height: 100px !important;
    width: auto;
    border: 4px solid white;
">
 <a style="position:absolute;top: 25px;
    padding: 3px;
    right: 6px;" href="javascript:void(0)" class="btn btn-primary text-nowrap">
             <i style="font-size:13px" class="fa"></i>
            </a>
        </div>
        <div class="flex-grow-1 mt-3 mt-sm-5">
          <div class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
            <div class="user-profile-info">
              <h4>John Doe</h4>
              <ul class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-2" style="
    font-size: 14px;
">
                <li class="list-inline-item fw-medium">
                  <i class="bx bx-pen"></i> UX Designer
                </li>
                <li class="list-inline-item fw-medium">
                  <i class="bx bx-map"></i> Vatican City
                </li>
                <li class="list-inline-item fw-medium">
                  <i class="bx bx-calendar-alt"></i> Joined April 2021
                </li>
              </ul>
            </div>
<!--            <a href="javascript:void(0)" class="btn btn-primary text-nowrap" style="-->
<!--    padding: 5px;-->
<!--    font-size: 12px;-->
<!--">-->
<!--              <i class="bx bx-user-check me-1"></i>Connected-->
<!--            </a>-->
          </div>
        </div>
      </div>
            </div>
          </div>
          <div class="col-12">
            <label class="form-label" for="modalAddressCountry">Country</label>
            <div class="position-relative"><div class="position-relative"><select id="modalAddressCountry" name="modalAddressCountry" class="select2 form-select select2-hidden-accessible" data-allow-clear="true" tabindex="-1" aria-hidden="true" data-select2-id="modalAddressCountry">
              <option value="" data-select2-id="33">Select</option>
              <option value="Australia">Australia</option>
              <option value="Bangladesh">Bangladesh</option>
              <option value="Belarus">Belarus</option>
              <option value="Brazil">Brazil</option>
              <option value="Canada">Canada</option>
              <option value="China">China</option>
              <option value="France">France</option>
              <option value="Germany">Germany</option>
              <option value="India">India</option>
              <option value="Indonesia">Indonesia</option>
              <option value="Israel">Israel</option>
              <option value="Italy">Italy</option>
              <option value="Japan">Japan</option>
              <option value="Korea">Korea, Republic of</option>
              <option value="Mexico">Mexico</option>
              <option value="Philippines">Philippines</option>
              <option value="Russia">Russian Federation</option>
              <option value="South Africa">South Africa</option>
              <option value="Thailand">Thailand</option>
              <option value="Turkey">Turkey</option>
              <option value="Ukraine">Ukraine</option>
              <option value="United Arab Emirates">United Arab Emirates</option>
              <option value="United Kingdom">United Kingdom</option>
              <option value="United States">United States</option>
            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="32" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-modalAddressCountry-container"><span class="select2-selection__rendered" id="select2-modalAddressCountry-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select value</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div></div>
          </div>
          <div class="col-12 ">
            <label class="form-label" for="modalAddressAddress1">Address Line 1</label>
            <input type="text" id="modalAddressAddress1" name="modalAddressAddress1" class="form-control" placeholder="12, Business Park">
          </div>
          <div class="col-12">
            <label class="form-label" for="modalAddressAddress2">Address Line 2</label>
            <input type="text" id="modalAddressAddress2" name="modalAddressAddress2" class="form-control" placeholder="Mall Road">
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalAddressLandmark">Landmark</label>
            <input type="text" id="modalAddressLandmark" name="modalAddressLandmark" class="form-control" placeholder="Nr. Hard Rock Cafe">
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalAddressCity">City</label>
            <input type="text" id="modalAddressCity" name="modalAddressCity" class="form-control" placeholder="Los Angeles">
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalAddressLandmark">State</label>
            <input type="text" id="modalAddressState" name="modalAddressState" class="form-control" placeholder="California">
          </div><div class="col-12 col-md-6">
            <label class="form-label" for="modalAddressZipCode">Zip Code</label>
            <input type="text" id="modalAddressZipCode" name="modalAddressZipCode" class="form-control" placeholder="99950">
          </div>
          <div class="col-12">
            <label class="switch">
              <input type="checkbox" class="switch-input">
              <span class="switch-toggle-slider">
                <span class="switch-on"></span>
                <span class="switch-off"></span>
              </span>
              <span class="switch-label">Use as a billing address?</span>
            </label>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>
      
      
      <!--sdad-->
      
      
      <div id="property-details1" class="content">
      <div class="row g-3" data-select2-id="8">
          <div class="col-12">
            <div class="row">
             <div style="position:relative;" class="col-12">
            <img src="https://yekbun.hellodev.site/public//assets/img/profile-banner.png" class="img-fluid w-100 border rounded-2" alt="shopping girl" data-app-dark-img="illustrations/shopping-girl-dark.png" data-app-light-img="profile-banner.png">
            
            <a style="position:absolute;top:9px;right:18px;" href="javascript:void(0)" class="btn btn-primary text-nowrap">
             <i style="font-size:15px" class="fa"></i>
            </a>
            
          </div>



<div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4" style="
    margin-top: -43px;z-index:99999;
">
            
        <div style="position:relative;display:flex;align-items:end;" class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto">
          <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/1.png" alt="user image" class="d-block h-auto ms-0 ms-sm-4 rounded user-profile-img" style="
    height: 100px !important;
    width: auto;
    border: 4px solid white;
">
 <a style="position:absolute;top: 25px;
    padding: 3px;
    right: 6px;" href="javascript:void(0)" class="btn btn-primary text-nowrap">
             <i style="font-size:13px" class="fa"></i>
            </a>
        </div>
        <div class="flex-grow-1 mt-3 mt-sm-5">
          <div class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
            <div class="user-profile-info">
              <h4>John Doe</h4>
              <ul class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-2" style="
    font-size: 14px;
">
                <li class="list-inline-item fw-medium">
                  <i class="bx bx-pen"></i> UX Designer
                </li>
                <li class="list-inline-item fw-medium">
                  <i class="bx bx-map"></i> Vatican City
                </li>
                <li class="list-inline-item fw-medium">
                  <i class="bx bx-calendar-alt"></i> Joined April 2021
                </li>
              </ul>
            </div>
<!--            <a href="javascript:void(0)" class="btn btn-primary text-nowrap" style="-->
<!--    padding: 5px;-->
<!--    font-size: 12px;-->
<!--">-->
<!--              <i class="bx bx-user-check me-1"></i>Connected-->
<!--            </a>-->
          </div>
        </div>
      </div>
            </div>
          </div>
        <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserStatus">Select Country</label>
            <select id="modalEditUserStatus" name="modalEditUserStatus" class="form-select" aria-label="Default select example">
              <option selected="">America</option>
              <option value="1">China</option>
              <option value="2">Portugal</option>
              <option value="3">Argentena</option>
            </select>
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserStatus">Select Commision</label>
            <select id="modalEditUserStatus" name="modalEditUserStatus" class="form-select" aria-label="Default select example">
              <option selected="">Status</option>
              <option value="1">Active</option>
              <option value="2">Inactive</option>
              <option value="3">Suspended</option>
            </select>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>
      <!--dasd-->
    <!--sec-->
<!--     <div id="property-details2" class="content">-->
<!--      <div class="row g-3" data-select2-id="8">-->
<!--          <div class="col-12">-->
<!--            <div class="row">-->
<!--             <div style="position:relative;" class="col-12">-->
<!--            <img src="https://yekbun.hellodev.site/public//assets/img/profile-banner.png" class="img-fluid w-100 border rounded-2" alt="shopping girl" data-app-dark-img="illustrations/shopping-girl-dark.png" data-app-light-img="profile-banner.png">-->
            
<!--            <a style="position:absolute;top:9px;right:18px;" href="javascript:void(0)" class="btn btn-primary text-nowrap">-->
<!--             <i style="font-size:15px" class="fa"></i>-->
<!--            </a>-->
            
<!--          </div>-->



<!--<div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4" style="-->
<!--    margin-top: -43px;z-index:99999;-->
<!--">-->
            
<!--        <div style="position:relative;display:flex;align-items:end;" class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto">-->
<!--          <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/1.png" alt="user image" class="d-block h-auto ms-0 ms-sm-4 rounded user-profile-img" style="-->
<!--    height: 100px !important;-->
<!--    width: auto;-->
<!--    border: 4px solid white;-->
<!--">-->
<!-- <a style="position:absolute;top: 25px;-->
<!--    padding: 3px;-->
<!--    right: 6px;" href="javascript:void(0)" class="btn btn-primary text-nowrap">-->
<!--             <i style="font-size:13px" class="fa"></i>-->
<!--            </a>-->
<!--        </div>-->
<!--        <div class="flex-grow-1 mt-3 mt-sm-5">-->
<!--          <div class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">-->
<!--            <div class="user-profile-info">-->
<!--              <h4>John Doe</h4>-->
<!--              <ul class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-2" style="-->
<!--    font-size: 14px;-->
<!--">-->
<!--                <li class="list-inline-item fw-medium">-->
<!--                  <i class="bx bx-pen"></i> UX Designer-->
<!--                </li>-->
<!--                <li class="list-inline-item fw-medium">-->
<!--                  <i class="bx bx-map"></i> Vatican City-->
<!--                </li>-->
<!--                <li class="list-inline-item fw-medium">-->
<!--                  <i class="bx bx-calendar-alt"></i> Joined April 2021-->
<!--                </li>-->
<!--              </ul>-->
<!--            </div>-->
<!--            <a href="javascript:void(0)" class="btn btn-primary text-nowrap" style="-->
<!--    padding: 5px;-->
<!--    font-size: 12px;-->
<!--">-->
<!--              <i class="bx bx-user-check me-1"></i>Connected-->
<!--            </a>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
<!--            </div>-->
<!--          </div>-->
<!--        <div class="col-12 col-md-6">-->
<!--            <label class="form-label" for="modalEditUserStatus">Select Country</label>-->
<!--            <select id="modalEditUserStatus" name="modalEditUserStatus" class="form-select" aria-label="Default select example">-->
<!--              <option selected="">America</option>-->
<!--              <option value="1">China</option>-->
<!--              <option value="2">Portugal</option>-->
<!--              <option value="3">Argentena</option>-->
<!--            </select>-->
<!--          </div>-->
<!--          <div class="col-12 col-md-6">-->
<!--            <label class="form-label" for="modalEditUserStatus">Select Commision</label>-->
<!--            <select id="modalEditUserStatus" name="modalEditUserStatus" class="form-select" aria-label="Default select example">-->
<!--              <option selected="">Status</option>-->
<!--              <option value="1">Active</option>-->
<!--              <option value="2">Inactive</option>-->
<!--              <option value="3">Suspended</option>-->
<!--            </select>-->
<!--          </div>-->
<!--          <div class="col-12 d-flex justify-content-between">-->
<!--            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>-->
<!--            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
    
    <!--sec-->
      <!-- Property Features -->
      <div id="property-features" class="content">
      <div class="row g-3">
          <div style="position:relative;" class="col-12">
            <img src="https://yekbun.hellodev.site/public//assets/img/profile-banner.png" class="img-fluid w-100 border rounded-2" alt="shopping girl" data-app-dark-img="illustrations/shopping-girl-dark.png" data-app-light-img="profile-banner.png">
            
            <a style="position:absolute;top:9px;right:18px;" href="javascript:void(0)" class="btn btn-primary text-nowrap">
             <i style="font-size:15px" class="fa"></i>
            </a>
            
          </div>



<div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4" style="
    margin-top: -43px;z-index:99999;
">
            
        <div style="position:relative;display:flex;align-items:end;" class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto">
          <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/1.png" alt="user image" class="d-block h-auto ms-0 ms-sm-4 rounded user-profile-img" style="
    height: 100px !important;
    width: auto;
    border: 4px solid white;
">
 <a style="position:absolute;top: 25px;
    padding: 3px;
    right: 6px;" href="javascript:void(0)" class="btn btn-primary text-nowrap">
             <i style="font-size:13px" class="fa"></i>
            </a>
        </div>
        <div class="flex-grow-1 mt-3 mt-sm-5">
          <div class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
            <div class="user-profile-info">
              <h4>John Doe</h4>
              <ul class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-2" style="
    font-size: 14px;
">
                <li class="list-inline-item fw-medium">
                  <i class="bx bx-pen"></i> UX Designer
                </li>
                <li class="list-inline-item fw-medium">
                  <i class="bx bx-map"></i> Vatican City
                </li>
                <li class="list-inline-item fw-medium">
                  <i class="bx bx-calendar-alt"></i> Joined April 2021
                </li>
              </ul>
            </div>
<!--            <a href="javascript:void(0)" class="btn btn-primary text-nowrap" style="-->
<!--    padding: 5px;-->
<!--    font-size: 12px;-->
<!--">-->
<!--              <i class="bx bx-user-check me-1"></i>Connected-->
<!--            </a>-->
          </div>
        </div>
      </div>
          <div class="col-12 col-md-6 fv-plugins-icon-container">
            <label class="form-label" for="modalEditUserFirstName">First Name</label>
            <input type="text" id="modalEditUserFirstName" name="modalEditUserFirstName" class="form-control" placeholder="John">
          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
          <div class="col-12 col-md-6 fv-plugins-icon-container">
            <label class="form-label" for="modalEditUserLastName">Last Name</label>
            <input type="text" id="modalEditUserLastName" name="modalEditUserLastName" class="form-control" placeholder="Doe">
          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
          <div class="col-12 fv-plugins-icon-container">
            <label class="form-label" for="modalEditUserName">Username</label>
            <input type="text" id="modalEditUserName" name="modalEditUserName" class="form-control" placeholder="john.doe.007">
          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserEmail">Email</label>
            <input type="text" id="modalEditUserEmail" name="modalEditUserEmail" class="form-control" placeholder="example@domain.com">
          </div><div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserStatus">Status</label>
            <select id="modalEditUserStatus" name="modalEditUserStatus" class="form-select" aria-label="Default select example">
              <option selected="">Status</option>
              <option value="1">Active</option>
              <option value="2">Inactive</option>
              <option value="3">Suspended</option>
            </select>
          </div><div class="col-12 col-md-6">
            <label class="form-label" for="modalEditTaxID">Tax ID</label>
            <input type="text" id="modalEditTaxID" name="modalEditTaxID" class="form-control modal-edit-tax-id" placeholder="123 456 7890">
          </div><div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserPhone">Phone Number</label>
            <div class="input-group input-group-merge">
              <span class="input-group-text">+1</span>
              <input type="text" id="modalEditUserPhone" name="modalEditUserPhone" class="form-control phone-number-mask" placeholder="202 555 0111">
            </div>
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserLanguage">Language</label>
            <div class="position-relative"><div class="position-relative"><select id="modalEditUserLanguage" name="modalEditUserLanguage" class="select2 form-select select2-hidden-accessible" multiple="" tabindex="-1" aria-hidden="true" data-select2-id="modalEditUserLanguage">
              <option value="">Select</option>
              <option value="english" selected="" data-select2-id="44">English</option>
              <option value="spanish">Spanish</option>
              <option value="french">French</option>
              <option value="german">German</option>
              <option value="dutch">Dutch</option>
              <option value="hebrew">Hebrew</option>
              <option value="sanskrit">Sanskrit</option>
              <option value="hindi">Hindi</option>
            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="43" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered"><li class="select2-selection__choice" title="English" data-select2-id="45"><span class="select2-selection__choice__remove" role="presentation">×</span>English</li><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div></div>
          </div><div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserCountry">Country</label>
            <div class="position-relative"><div class="position-relative"
            ><select id="modalEditUserCountry" name="modalEditUserCountry" class="select2 form-select select2-hidden-accessible" data-allow-clear="true" tabindex="-1" aria-hidden="true" data-select2-id="modalEditUserCountry">
              <option value="" data-select2-id="72">Select</option>
              <option value="Australia">Australia</option>
              <option value="Bangladesh">Bangladesh</option>
              <option value="Belarus">Belarus</option>
              <option value="Brazil">Brazil</option>
              <option value="Canada">Canada</option>
              <option value="China">China</option>
              <option value="France">France</option>
              <option value="Germany">Germany</option>
              <option value="India">India</option>
              <option value="Indonesia">Indonesia</option>
              <option value="Israel">Israel</option>
              <option value="Italy">Italy</option>
              <option value="Japan">Japan</option>
              <option value="Korea">Korea, Republic of</option>
              <option value="Mexico">Mexico</option>
              <option value="Philippines">Philippines</option>
              <option value="Russia">Russian Federation</option>
              <option value="South Africa">South Africa</option>
              <option value="Thailand">Thailand</option>
              <option value="Turkey">Turkey</option>
              <option value="Ukraine">Ukraine</option>
              <option value="United Arab Emirates">United Arab Emirates</option>
              <option value="United Kingdom">United Kingdom</option>
              <option value="United States">United States</option>
            </select>
            <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="71" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-modalEditUserCountry-container"><span class="select2-selection__rendered" id="select2-modalEditUserCountry-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select value</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div></div>
          </div>
          <div class="col-12">
            <label class="switch">
              <input type="checkbox" class="switch-input">
              <span class="switch-toggle-slider">
                <span class="switch-on"></span>
                <span class="switch-off"></span>
              </span>
              <span class="switch-label">Use as a billing address?</span>
            </label>
          </div>
          
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Property Area -->
      <div id="property-area" class="content">
        <div class="row g-3">
         <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserEmail">Email</label>
            <input type="text" id="modalEditUserEmail" name="modalEditUserEmail" class="form-control" placeholder="example@domain.com">
          </div>
         <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserEmail">Repeat Email</label>
            <input type="text" id="modalEditUserEmail" name="modalEditUserEmail" class="form-control" placeholder="example@domain.com">
          </div>
        <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserEmail">Password</label>
            <input type="text" id="modalEditUserEmail" name="modalEditUserEmail" class="form-control" placeholder="Password">
          </div>
        <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserEmail">Confirm Password</label>
            <input type="text" id="modalEditUserEmail" name="modalEditUserEmail" class="form-control" placeholder="Confirm Password">
          </div>
          
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Sent</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Price Details -->
      <div id="price-details" class="content">
        <div class="row g-3">
          <div class="col-sm-6">
            <label class="form-label d-block" for="plExpeactedPrice">Expected Price</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plExpeactedPrice" name="plExpeactedPrice" placeholder="25,000" aria-describedby="pl-expeacted-price">
              <span class="input-group-text" id="pl-expeacted-price">$</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plPriceSqft">Price per Sqft</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plPriceSqft" name="plPriceSqft" placeholder="500" aria-describedby="pl-price-sqft">
              <span class="input-group-text" id="pl-price-sqft">$</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plMaintenenceCharge">Maintenance Charge</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plMaintenenceCharge" name="plMaintenenceCharge" placeholder="50" aria-describedby="pl-mentenence-charge">
              <span class="input-group-text" id="pl-mentenence-charge">$</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plMaintenencePer">Maintenance</label>
            <select id="plMaintenencePer" name="plMaintenencePer" class="form-select">
              <option value="1" selected>Monthly</option>
              <option value="2">Quarterly</option>
              <option value="3">Yearly</option>
              <option value="3">One-time</option>
              <option value="3">Per sqft. Monthly</option>
            </select>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plBookingAmount">Booking/Token Amount</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plBookingAmount" name="plBookingAmount" placeholder="250" aria-describedby="pl-booking-amount">
              <span class="input-group-text" id="pl-booking-amount">$</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plOtherAmount">Other Amount</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plOtherAmount" name="plOtherAmount" placeholder="500" aria-describedby="pl-other-amount">
              <span class="input-group-text" id="pl-other-amount">$</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Show Price as</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plShowPriceRadio" id="plNagotiablePrice" checked>
              <label class="form-check-label" for="plNagotiablePrice">Negotiable</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plShowPriceRadio" id="plCallForPrice">
              <label class="form-check-label" for="plCallForPrice">Call for Price</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Price includes</label>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="plCarParking" id="plCarParking">
              <label class="form-check-label" for="plCarParking">Car Parking</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="plClubMembership" id="plClubMembership">
              <label class="form-check-label" for="plClubMembership">Club Membership</label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="plOtherCharges" id="plOtherCharges">
              <label class="form-check-label" for="plOtherCharges">Stamp Duty & Registration charges excluded.</label>
            </div>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
            <button class="btn btn-success btn-submit btn-next">Submit</button>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
<!--/ Property Listing Wizard -->
@endsection
