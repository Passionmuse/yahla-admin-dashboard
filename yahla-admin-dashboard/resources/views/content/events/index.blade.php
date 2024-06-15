 <style>
        .stepnew {
            display: none;
        }

        .stepnew.active {
            display: block;
        }
        
        
        .switch{
            width:45px;
            height:7px;
        }
        .slider:before {
    position: absolute;
    content: "";
    height: 15px;
    width: 15px;
    left: 4px;
    bottom: 4px;
    background-color: white;
    -webkit-transition: .4s;
    transition: .4s;
}
.form-check-input:checked, .form-check-input[type=checkbox]:indeterminate {
    background-color: #696cff !important;
    border-color:#696cff !important;
    box-shadow: 0 2px 4px 0 rgba(105, 108, 255, 0.4) !important;
}
        
        .form-check-input:focus{
            border-color: #2fc194 !important;
        }
/*        .form-switch .form-check-input:focus {*/
/*    background-image: url("{{asset('assets/img/NewProject.png')}}") !important;*/
/*    height:10px !important;*/
/*    width:30px !important;*/
/*}*/
        
   .light-style .bs-stepper:not(.wizard-modern) {
    box-shadow: none !important;
}     
   
    /* The switch - the box around the slider */
.switch {
  position: relative;
  display: inline-block;
   width:45px;
            height:7px;
}

/* Hide default HTML checkbox */
.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

    .slider:before {
    position: absolute;
    content: "";
    height: 15px;
    width: 15px;
    left: 4px;
    bottom: 4px;
    background-color: white;
    -webkit-transition: .4s;
    transition: .4s;
}

input:checked + .slider {
  background-color: #2fc194;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
.rounded-2{
    border:none !important;
}
  </style>
@extends('layouts/layoutMaster')

@section('title', 'Event - List')

@section('page-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-icons.css') }}" />
@endsection

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bs-stepper/bs-stepper.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/tagify/tagify.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/animate-css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/dropzone/dropzone.css') }}" />
    
    <link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">
    
    
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/wizard-ex-property-listing.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/bs-stepper/bs-stepper.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/tagify/tagify.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
      
      <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
@endsection

@section('content')


        
   <x-modal
id="requestpopup"
title="Detail of Air Jordan"
size="md">
 @include('content.include.live_stream.popuptwo')
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

  <x-modal
id="requestpopuptick"

size="md">
 @include('content.include.live_stream.requestpopuptick')
</x-modal>

    <div class="content-wrapper">

        <!-- Content -->
                  <div class="container-xxl flex-grow-1 container-p-y">
            
            
    <div class="content-wrapper">

        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">

            <h4 class="py-3 mb-4">
                <span class="text-muted fw-light">Events /</span> Add a new event
            </h4>

            <!-- Create Deal Wizard -->
            <div class="col-xl-12">
              <div class="card">
                <h5 class="card-header">Select events type</h5>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md mb-md-0 mb-2">
                      <div class="form-check custom-option custom-option-icon checked">
                        <label class="form-check-label custom-option-content" for="customRadioSvg1" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">
                        <!--<a class="form-check-label custom-option-content" for="customRadioSvg1" href="https://yekbun.hellodev.site/events/ex_property_listing">-->
                          
                          <span class="custom-option-body">
                            <img src="{{asset('assets/img/concerticon.png')}}" class="w-px-40 mb-2" alt="paypal">
                            <span class="custom-option-title"> Concert </span>
                            <small>Create New Concert</small>
                          </span>
                          <input name="customRadioSvg" class="form-check-input" type="radio" value="" id="customRadioSvg1" checked="">
                        </label>
                        <!--</a>-->
                      </div>
                    </div>
                    <div class="col-md mb-md-0 mb-2">
                      <div class="form-check custom-option custom-option-icon">
                        <label class="form-check-label custom-option-content" for="customRadioSvg2" data-bs-toggle="modal" data-bs-target="#exampleModalToggleone5161">
                              <!--<a class="form-check-label custom-option-content" for="customRadioSvg1" href="https://yekbun.hellodev.site/events/ex_property_listing">-->
                          
                          <span class="custom-option-body">
                            <img src="{{asset('assets/img/conferenceicon.png')}}" class="w-px-40 mb-2" alt="wallet">
                            <span class="custom-option-title"> Conference </span>
                            <small> Create New Conference</small>
                          </span>
                          <input name="customRadioSvg" class="form-check-input" type="radio" value="" id="customRadioSvg2">
                          <!--</a>-->
                        </label>
                      </div>
                    </div>
                    <div class="col-md">
                      <div class="form-check custom-option custom-option-icon">
                            <!--<a class="form-check-label custom-option-content" for="customRadioSvg1" href="https://yekbun.hellodev.site/events/ex_property_listing">-->
                          
                        <label class="form-check-label custom-option-content" for="customRadioSvg3" data-bs-toggle="modal" data-bs-target="#exampleModalToggletwo123321">
                          <span class="custom-option-body">
                            <img src="{{asset('assets/img/demonstrationicon.png')}}" class="w-px-40 mb-2" alt="cc-success">
                            <span class="custom-option-title"> Demonstration </span>
                            <small>Create New Demonstration</small>
                          </span>
                          <input name="customRadioSvg" class="form-check-input" type="radio" value="" id="customRadioSvg3">
                        </label>
                        <!--</a>-->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /Create Deal Wizard -->
            

        </div>
        <!-- / Content -->

        
        <div class="content-backdrop fade"></div>
        
    </div>
    
    
    <!--rizk-->
    <div style="padding-left: 22px;" class="row g-4 mb-4">
  <div class="col-sm-6 col-xl-4">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span>Event Requests</span>
            <div class="d-flex align-items-end mt-2">
              <h4 class="mb-0 me-2">21,459</h4>
              <small class="text-success">(+29%)</small>
            </div>
            <small>Event Requests</small>
          </div>
          <span class="badge bg-label-primary rounded p-2">
            <i class="bx bx-user bx-sm"></i>
          </span>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-xl-4">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span>Total Blocked</span>
            <div class="d-flex align-items-end mt-2">
              <h4 class="mb-0 me-2">19,860</h4>
              <small class="text-danger">(-14%)</small>
            </div>
            <small>Last week analytics</small>
          </div>
          <span class="badge bg-label-success rounded p-2">
            <i class="bx bx-group bx-sm"></i>
          </span>
        </div>
      </div>
    </div>
  </div>
  <!--<div class="col-sm-6 col-xl-4">-->
  <!--  <div class="card">-->
  <!--    <div class="card-body">-->
  <!--      <div class="d-flex align-items-start justify-content-between">-->
  <!--        <div class="content-left">-->
  <!--          <span>Total Past Events</span>-->
  <!--          <div class="d-flex align-items-end mt-2">-->
  <!--            <h4 class="mb-0 me-2">237</h4>-->
  <!--            <small class="text-success">(+42%)</small>-->
  <!--          </div>-->
  <!--          <small>Last week analytics</small>-->
  <!--        </div>-->
  <!--        <span class="badge bg-label-warning rounded p-2">-->
  <!--          <i class="bx bx-user-voice bx-sm"></i>-->
  <!--        </span>-->
  <!--      </div>-->
  <!--    </div>-->
  <!--  </div>-->
  <!--</div>-->
</div>
<!--table start-->
    <div style="margin-left: 20px;"  class="card">
  
      <ul class="nav nav-tabs nav-fill" role="tablist">
      <li class="nav-item" role="presentation">
        <a type="button" class="nav-link {{ $view === 'new_request'? 'active': '' }}" href="?view=new_request" aria-selected="true"><i class="tf-icons bx bxs-edit me-1"></i> Active Events</a>
        <div class="{{ $view === 'new_request'? 'tab--selected': '' }} tab__slider"></div>
      </li>
      <li class="nav-item" role="presentation">
        <a type="button" class="nav-link {{ $view === 'request_on_hold'? 'active': '' }}" href="?view=request_on_hold" aria-selected="false" tabindex="-1"><i class="tf-icons bx bxs-edit me-1"></i> Blocked Events</a>
        <div class="{{ $view === 'request_on_hold'? 'tab--selected': '' }} tab__slider"></div>
      </li>
     
    </ul>
        <div class="card-datatable table-responsive">
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                <div class="card-header d-flex flex-wrap py-3 justify-content-between">
                    <div class="me-5 ms-n2 mt-3">
                        <div id="DataTables_Table_0_filter" class="dataTables_filter"><label><input type="search" class="form-control" placeholder="Search Order" aria-controls="DataTables_Table_0"></label></div>
                    </div>
                    <div class="dt-action-buttons text-xl-end text-lg-start text-md-end text-start d-flex align-items-center justify-content-md-end gap-3 gap-sm-2 flex-wrap flex-sm-nowrap pt-0">
                        <div class="dataTables_length mt-0 mt-md-3 me-2" id="DataTables_Table_0_length"><label><select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-select">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select></label></div>
                    </div>
                </div>
                @if($view=='request_on_hold')
                 <table class="table border-top" id="data-table">
                    <thead>
                        <tr>
                            <th class="control sorting_disabled dtr-hidden" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-label=""></th>
                            <th class="sorting_disabled dt-checkboxes-cell dt-checkboxes-select-all" rowspan="1" colspan="1" style="width: 18px;" data-col="1" aria-label=""><input type="checkbox" class="form-check-input"></th>
                            <th class="text-nowrap sorting sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 132px;" aria-label="Customer Id: activate to sort column descending" aria-sort="ascending">
                                Admin Id</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 280px;" aria-label="Customer: activate to sort column ascending">Admin Name
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 225px;" aria-label="Country: activate to sort column ascending">Country
                            </th>
                            <th>Event Title</th>
                            <th>Event Type</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 225px;" aria-label="Country: activate to sort column ascending">Option
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd">
                            <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>
                            <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                            <td class="sorting_1"><span class="fw-medium text-heading">#100696</span></td>
                            <td class="">
                                <div class="d-flex justify-content-start align-items-center customer-name">
                                    <div class="avatar-wrapper">
                                        <div class="avatar me-2"><span class="avatar-initial rounded-circle bg-label-warning">RC</span></div>
                                    </div>
                                    <div class="d-flex flex-column"><a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/customer/details/overview"><span class="fw-medium">Rochell Cockill</span></a><small class="text-muted">rcockill1q@irs.gov</small></div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-start align-items-center customer-country">
                                    <div><i class="fis fi fi-id rounded-circle me-2 fs-3"></i></div>
                                    <div><span>Indonesia</span></div>
                                </div>
                            </td>
                              <td></td>
                              <td></td>
                            <td>
                                <!--<button type="button" class="btn p-1 accept"><i class="bx bx-check"></i></button>-->
                                <!--<button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestDenied"><i class="bx bx-x"></i></button>-->
                                 
                                
                                
                                
                               
                           
                                 <!--<input type="file" id="history_category_image" class="form-control history_category_image" placeholder="Category Name" name="history_category_image">-->
                               
                            <a href="#"><button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestpopup"><i class="bx bx-show"></i></button></a> 
                            
                              <button type="submit" class="btn btn-sm btn-icon removebtnn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title=""><i class="bx bx-trash me-1 "></i></button>
                              
                              </td>
                        </tr>
                        <tr class="even">
                            <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>
                            <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                            <td class="sorting_1"><span class="fw-medium text-heading">#123210</span></td>
                            <td class="">
                                <div class="d-flex justify-content-start align-items-center customer-name">
                                    <div class="avatar-wrapper">
                                        <div class="avatar me-2"><img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/16.png" alt="Avatar" class="rounded-circle"></div>
                                    </div>
                                    <div class="d-flex flex-column"><a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/customer/details/overview"><span class="fw-medium">Norri Dillinton</span></a><small class="text-muted">ndillinton1o@bbc.co.uk</small></div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-start align-items-center customer-country">
                                    <div><i class="fis fi fi-mk rounded-circle me-2 fs-3"></i></div>
                                    <div><span>Macedonia</span></div>
                                </div>
                            </td>
                              <td></td>
                              <td></td>
                            <td>
                                <!--<button type="button" class="btn p-1 accept"><i class="bx bx-check"></i></button>-->
                                <!--<button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestDenied"><i class="bx bx-x"></i></button>-->
                                 
                               
                            <a href="#"><button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestpopup"><i class="bx bx-show"></i></button></a> 
                              <button type="submit" class="btn btn-sm btn-icon removebtnn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title=""><i class="bx bx-trash me-1 "></i></button>
                              </td>
                        </tr>
                        <tr class="odd">
                            <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>
                            <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                            <td class="sorting_1"><span class="fw-medium text-heading">#137049</span></td>
                            <td class="">
                                <div class="d-flex justify-content-start align-items-center customer-name">
                                    <div class="avatar-wrapper">
                                        <div class="avatar me-2"><img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/7.png" alt="Avatar" class="rounded-circle"></div>
                                    </div>
                                    <div class="d-flex flex-column"><a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/customer/details/overview"><span class="fw-medium">Maddie Witherop</span></a><small class="text-muted">mwitherops@bing.com</small></div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-start align-items-center customer-country">
                                    <div><i class="fis fi fi-cn rounded-circle me-2 fs-3"></i></div>
                                    <div><span>China</span></div>
                                </div>
                            </td>
                              <td></td>
                              <td></td>
                            <td>
                                <!--<button type="button" class="btn p-1 accept"><i class="bx bx-check"></i></button>-->
                                <!--                                <button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestDenied"><i class="bx bx-x"></i></button>-->
                                 
                               
                            <a href="#"><button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestpopup"><i class="bx bx-show"></i></button></a> 
                              <button type="submit" class="btn btn-sm btn-icon removebtnn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title=""><i class="bx bx-trash me-1 "></i></button>
                              </td>
                        </tr>
                        <tr class="even">
                            <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>
                            <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                            <td class="sorting_1"><span class="fw-medium text-heading">#137230</span></td>
                            <td class="">
                                <div class="d-flex justify-content-start align-items-center customer-name">
                                    <div class="avatar-wrapper">
                                        <div class="avatar me-2"><span class="avatar-initial rounded-circle bg-label-primary">BT</span></div>
                                    </div>
                                    <div class="d-flex flex-column"><a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/customer/details/overview"><span class="fw-medium">Brooke Tegler</span></a><small class="text-muted">btegler2p@state.tx.us</small></div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-start align-items-center customer-country">
                                    <div><i class="fis fi fi-kp rounded-circle me-2 fs-3"></i></div>
                                    <div><span>North Korea</span></div>
                                </div>
                            </td>
                              <td></td>
                              <td></td>
                            <td>
                                <!--<button type="button" class="btn p-1 accept"><i class="bx bx-check"></i></button>-->
                                <!--                                <button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestDenied"><i class="bx bx-x"></i></button>-->
                                 
                               
                            <a href="#"><button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestpopup"><i class="bx bx-show"></i></button></a> 
                              <button type="submit" class="btn btn-sm btn-icon removebtnn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title=""><i class="bx bx-trash me-1 "></i></button>
                              </td>
                        </tr>
                        <tr class="odd">
                            <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>
                            <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                            <td class="sorting_1"><span class="fw-medium text-heading">#140146</span></td>
                            <td class="">
                                <div class="d-flex justify-content-start align-items-center customer-name">
                                    <div class="avatar-wrapper">
                                        <div class="avatar me-2"><img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/13.png" alt="Avatar" class="rounded-circle"></div>
                                    </div>
                                    <div class="d-flex flex-column"><a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/customer/details/overview"><span class="fw-medium">Lauritz Ramble</span></a><small class="text-muted">lramble2j@discuz.net</small></div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-start align-items-center customer-country">
                                    <div><i class="fis fi fi-ru rounded-circle me-2 fs-3"></i></div>
                                    <div><span>Russia</span></div>
                                </div>
                            </td>
                              <td></td>
                              <td></td>
                            <td>
                                <!--<button type="button" class="btn p-1 accept"><i class="bx bx-check"></i></button>-->
                                <!--                                <button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestDenied"><i class="bx bx-x"></i></button>-->
                                 
                              
                            <a href="#"><button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestpopup"><i class="bx bx-show"></i></button></a> 
                              <button type="submit" class="btn btn-sm btn-icon removebtnn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title=""><i class="bx bx-trash me-1 "></i></button>
                            
                        
                              </td>
                        </tr>
                        <tr class="even">
                            <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>
                            <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                            <td class="sorting_1"><span class="fw-medium text-heading">#152193</span></td>
                            <td class="">
                                <div class="d-flex justify-content-start align-items-center customer-name">
                                    <div class="avatar-wrapper">
                                        <div class="avatar me-2"><span class="avatar-initial rounded-circle bg-label-danger">ED</span></div>
                                    </div>
                                    <div class="d-flex flex-column"><a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/customer/details/overview"><span class="fw-medium">Elsinore Daltry</span></a><small class="text-muted">edaltry20@themeforest.net</small></div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-start align-items-center customer-country">
                                    <div><i class="fis fi fi-br rounded-circle me-2 fs-3"></i></div>
                                    <div><span>Brazil</span></div>
                                </div>
                            </td>
                              <td></td>
                              <td></td>
                            <td>
                                <!--<button type="button" class="btn p-1 accept"><i class="bx bx-check"></i></button>-->
                                <!--                                <button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestDenied"><i class="bx bx-x"></i></button>-->
                                 
                               
                            <a href="#"><button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestpopup"><i class="bx bx-show"></i></button></a> 
                              <button type="submit" class="btn btn-sm btn-icon removebtnn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title=""><i class="bx bx-trash me-1 "></i></button>
                              </td>
                        </tr>
                        <tr class="odd">
                            <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>
                            <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                            <td class="sorting_1"><span class="fw-medium text-heading">#155681</span></td>
                            <td class="">
                                <div class="d-flex justify-content-start align-items-center customer-name">
                                    <div class="avatar-wrapper">
                                        <div class="avatar me-2"><span class="avatar-initial rounded-circle bg-label-primary">PT</span></div>
                                    </div>
                                    <div class="d-flex flex-column"><a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/customer/details/overview"><span class="fw-medium">Price Tremathack</span></a><small class="text-muted">ptremathackd@amazon.com</small></div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-start align-items-center customer-country">
                                    <div><i class="fis fi fi-ru rounded-circle me-2 fs-3"></i></div>
                                    <div><span>Russia</span></div>
                                </div>
                            </td>
                              <td></td>
                              <td></td>
                            <td>
                                <!--<button type="button" class="btn p-1 accept"><i class="bx bx-check"></i></button>-->
                                <!--                                <button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestDenied"><i class="bx bx-x"></i></button>-->
                              
                               
                            <a href="#"><button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestpopup"><i class="bx bx-show"></i></button></a> 
                              <button type="submit" class="btn btn-sm btn-icon removebtnn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title=""><i class="bx bx-trash me-1 "></i></button>
                              </td>
                        </tr>
                        <tr class="even">
                            <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>
                            <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                            <td class="sorting_1"><span class="fw-medium text-heading">#158581</span></td>
                            <td class="">
                                <div class="d-flex justify-content-start align-items-center customer-name">
                                    <div class="avatar-wrapper">
                                        <div class="avatar me-2"><img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/11.png" alt="Avatar" class="rounded-circle"></div>
                                    </div>
                                    <div class="d-flex flex-column"><a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/customer/details/overview"><span class="fw-medium">Michale Britton</span></a><small class="text-muted">mbritton2c@cloudflare.com</small></div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-start align-items-center customer-country">
                                    <div><i class="fis fi fi-cn rounded-circle me-2 fs-3"></i></div>
                                    <div><span>China</span></div>
                                </div>
                            </td>
                              <td></td>
                              <td></td>
                            <td>
                                <!--<button type="button" class="btn p-1 accept"><i class="bx bx-check"></i></button>-->
                                <!--                                <button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestDenied"><i class="bx bx-x"></i></button>-->
                                 
                               
                            <a href="#"><button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestpopup"><i class="bx bx-show"></i></button></a>
                              <button type="submit" class="btn btn-sm btn-icon removebtnn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title=""><i class="bx bx-trash me-1 "></i></button>
                              </td>
                        </tr>
                        <tr class="odd">
                            <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>
                            <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                            <td class="sorting_1"><span class="fw-medium text-heading">#165827</span></td>
                            <td class="">
                                <div class="d-flex justify-content-start align-items-center customer-name">
                                    <div class="avatar-wrapper">
                                        <div class="avatar me-2"><span class="avatar-initial rounded-circle bg-label-primary">TB</span></div>
                                    </div>
                                    <div class="d-flex flex-column"><a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/customer/details/overview"><span class="fw-medium">Tobin Bassick</span></a><small class="text-muted">tbassick2e@quantcast.com</small></div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-start align-items-center customer-country">
                                    <div><i class="fis fi fi-jo rounded-circle me-2 fs-3"></i></div>
                                    <div><span>Jordan</span></div>
                                </div>
                            </td>
                              <td></td>
                              <td></td>
                            <td>
                                <!--<button type="button" class="btn p-1 accept"><i class="bx bx-check"></i></button>-->
                                <!--                                <button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestDenied"><i class="bx bx-x"></i></button>-->
                                
                       
                                
                                
                                 
                               
                            <a href="#"><button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestpopup"><i class="bx bx-show"></i></button></a> 
                              <button type="submit" class="btn btn-sm btn-icon removebtnn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title=""><i class="bx bx-trash me-1 "></i></button>
                              </td>
                        </tr>
                        <tr class="even">
                            <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>
                            <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                            <td class="sorting_1"><span class="fw-medium text-heading">#178408</span></td>
                            <td class="">
                                <div class="d-flex justify-content-start align-items-center customer-name">
                                    <div class="avatar-wrapper">
                                        <div class="avatar me-2"><span class="avatar-initial rounded-circle bg-label-dark">LD</span></div>
                                    </div>
                                    <div class="d-flex flex-column"><a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/customer/details/overview"><span class="fw-medium">Laurie Dax</span></a><small class="text-muted">ldax1@lycos.com</small></div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-start align-items-center customer-country">
                                    <div><i class="fis fi fi-ru rounded-circle me-2 fs-3"></i></div>
                                    <div><span>Russia</span></div>
                                </div>
                            </td>
                              <td></td>
                              <td></td>
                            <td>
                                <!--<button type="button" class="btn p-1 accept"><i class="bx bx-check"></i></button>-->
                                <!--<button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestDenied"><i class="bx bx-x"></i></button>-->
                                   
                               
                            <a href="#"><button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestpopup"><i class="bx bx-show"></i></button></a> 
                              <button type="submit" class="btn btn-sm btn-icon removebtnn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title=""><i class="bx bx-trash me-1 "></i></button>
                              
                              </td>
                        </tr>
                    </tbody>
                </table>
                @else
                   <table class="table border-top" id="data-table">
                    <thead>
                        <tr>
                            <th class="control sorting_disabled dtr-hidden" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-label=""></th>
                            <th class="sorting_disabled dt-checkboxes-cell dt-checkboxes-select-all" rowspan="1" colspan="1" style="width: 18px;" data-col="1" aria-label=""><input type="checkbox" class="form-check-input"></th>
                            <th class="text-nowrap sorting sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 132px;" aria-label="Customer Id: activate to sort column descending" aria-sort="ascending">
                                Admin Id</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 280px;" aria-label="Customer: activate to sort column ascending">Admin Name
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 225px;" aria-label="Country: activate to sort column ascending">Country
                            </th>
                            <th>Event Title</th>
                            <th>Event Type</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 225px;" aria-label="Country: activate to sort column ascending">Option
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd">
                            <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>
                            <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                            <td class="sorting_1"><span class="fw-medium text-heading">#100696</span></td>
                            <td class="">
                                <div class="d-flex justify-content-start align-items-center customer-name">
                                    <div class="avatar-wrapper">
                                        <div class="avatar me-2"><span class="avatar-initial rounded-circle bg-label-warning">RC</span></div>
                                    </div>
                                    <div class="d-flex flex-column"><a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/customer/details/overview"><span class="fw-medium">Rochell Cockill</span></a><small class="text-muted">rcockill1q@irs.gov</small></div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-start align-items-center customer-country">
                                    <div><i class="fis fi fi-id rounded-circle me-2 fs-3"></i></div>
                                    <div><span>Indonesia</span></div>
                                </div>
                            </td>
                              <td></td>
                              <td></td>
                           <td>
                                <!--<button type="button" class="btn p-1 accept"><i class="bx bx-check"></i></button>-->
                                <!--<button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestDenied"><i class="bx bx-x"></i></button>-->
                                <a href="#"><button type="button" class="btn p-1 history_category_image"><i class="bx bx-check"></i></button></a> 
                                 <!--<input type="file" id="history_category_image" class="form-control history_category_image" placeholder="Category Name" name="history_category_image">-->
                            <a href="#"><button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestpopup"><i class="bx bx-show"></i></button></a> 
                                <button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestView"><i class="bx bx-block"></i></button>
                              </td>
                        </tr>
                        <tr class="even">
                            <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>
                            <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                            <td class="sorting_1"><span class="fw-medium text-heading">#123210</span></td>
                            <td class="">
                                <div class="d-flex justify-content-start align-items-center customer-name">
                                    <div class="avatar-wrapper">
                                        <div class="avatar me-2"><img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/16.png" alt="Avatar" class="rounded-circle"></div>
                                    </div>
                                    <div class="d-flex flex-column"><a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/customer/details/overview"><span class="fw-medium">Norri Dillinton</span></a><small class="text-muted">ndillinton1o@bbc.co.uk</small></div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-start align-items-center customer-country">
                                    <div><i class="fis fi fi-mk rounded-circle me-2 fs-3"></i></div>
                                    <div><span>Macedonia</span></div>
                                </div>
                            </td>
                              <td></td>
                              <td></td>
                             <td>
                                <!--<button type="button" class="btn p-1 accept"><i class="bx bx-check"></i></button>-->
                                <!--<button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestDenied"><i class="bx bx-x"></i></button>-->
                                <a href="#"><button type="button" class="btn p-1 history_category_image"><i class="bx bx-check"></i></button></a> 
                                 <!--<input type="file" id="history_category_image" class="form-control history_category_image" placeholder="Category Name" name="history_category_image">-->
                            <a href="#"><button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestpopup"><i class="bx bx-show"></i></button></a> 
                                <button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestView"><i class="bx bx-block"></i></button>
                              </td>
                        </tr>
                        <tr class="odd">
                            <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>
                            <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                            <td class="sorting_1"><span class="fw-medium text-heading">#137049</span></td>
                            <td class="">
                                <div class="d-flex justify-content-start align-items-center customer-name">
                                    <div class="avatar-wrapper">
                                        <div class="avatar me-2"><img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/7.png" alt="Avatar" class="rounded-circle"></div>
                                    </div>
                                    <div class="d-flex flex-column"><a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/customer/details/overview"><span class="fw-medium">Maddie Witherop</span></a><small class="text-muted">mwitherops@bing.com</small></div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-start align-items-center customer-country">
                                    <div><i class="fis fi fi-cn rounded-circle me-2 fs-3"></i></div>
                                    <div><span>China</span></div>
                                </div>
                            </td>
                              <td></td>
                              <td></td>
                              <td>
                                <!--<button type="button" class="btn p-1 accept"><i class="bx bx-check"></i></button>-->
                                <!--<button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestDenied"><i class="bx bx-x"></i></button>-->
                                <a href="#"><button type="button" class="btn p-1 history_category_image"><i class="bx bx-check"></i></button></a> 
                                 <!--<input type="file" id="history_category_image" class="form-control history_category_image" placeholder="Category Name" name="history_category_image">-->
                            <a href="#"><button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestpopup"><i class="bx bx-show"></i></button></a> 
                                <button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestView"><i class="bx bx-block"></i></button>
                              </td>
                        </tr>
                        <tr class="even">
                            <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>
                            <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                            <td class="sorting_1"><span class="fw-medium text-heading">#137230</span></td>
                            <td class="">
                                <div class="d-flex justify-content-start align-items-center customer-name">
                                    <div class="avatar-wrapper">
                                        <div class="avatar me-2"><span class="avatar-initial rounded-circle bg-label-primary">BT</span></div>
                                    </div>
                                    <div class="d-flex flex-column"><a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/customer/details/overview"><span class="fw-medium">Brooke Tegler</span></a><small class="text-muted">btegler2p@state.tx.us</small></div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-start align-items-center customer-country">
                                    <div><i class="fis fi fi-kp rounded-circle me-2 fs-3"></i></div>
                                    <div><span>North Korea</span></div>
                                </div>
                            </td>
                              <td></td>
                              <td></td>
                            <td>
                                <!--<button type="button" class="btn p-1 accept"><i class="bx bx-check"></i></button>-->
                                <!--<button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestDenied"><i class="bx bx-x"></i></button>-->
                                <a href="#"><button type="button" class="btn p-1 history_category_image"><i class="bx bx-check"></i></button></a> 
                                 <!--<input type="file" id="history_category_image" class="form-control history_category_image" placeholder="Category Name" name="history_category_image">-->
                            <a href="#"><button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestpopup"><i class="bx bx-show"></i></button></a> 
                                <button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestView"><i class="bx bx-block"></i></button>
                              </td>
                        </tr>
                        <tr class="odd">
                            <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>
                            <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                            <td class="sorting_1"><span class="fw-medium text-heading">#140146</span></td>
                            <td class="">
                                <div class="d-flex justify-content-start align-items-center customer-name">
                                    <div class="avatar-wrapper">
                                        <div class="avatar me-2"><img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/13.png" alt="Avatar" class="rounded-circle"></div>
                                    </div>
                                    <div class="d-flex flex-column"><a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/customer/details/overview"><span class="fw-medium">Lauritz Ramble</span></a><small class="text-muted">lramble2j@discuz.net</small></div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-start align-items-center customer-country">
                                    <div><i class="fis fi fi-ru rounded-circle me-2 fs-3"></i></div>
                                    <div><span>Russia</span></div>
                                </div>
                            </td>
                              <td></td>
                              <td></td>
                             <td>
                                <!--<button type="button" class="btn p-1 accept"><i class="bx bx-check"></i></button>-->
                                <!--<button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestDenied"><i class="bx bx-x"></i></button>-->
                                <a href="#"><button type="button" class="btn p-1 history_category_image"><i class="bx bx-check"></i></button></a> 
                                 <!--<input type="file" id="history_category_image" class="form-control history_category_image" placeholder="Category Name" name="history_category_image">-->
                            <a href="#"><button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestpopup"><i class="bx bx-show"></i></button></a> 
                                <button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestView"><i class="bx bx-block"></i></button>
                              </td>
                        </tr>
                        <tr class="even">
                            <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>
                            <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                            <td class="sorting_1"><span class="fw-medium text-heading">#152193</span></td>
                            <td class="">
                                <div class="d-flex justify-content-start align-items-center customer-name">
                                    <div class="avatar-wrapper">
                                        <div class="avatar me-2"><span class="avatar-initial rounded-circle bg-label-danger">ED</span></div>
                                    </div>
                                    <div class="d-flex flex-column"><a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/customer/details/overview"><span class="fw-medium">Elsinore Daltry</span></a><small class="text-muted">edaltry20@themeforest.net</small></div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-start align-items-center customer-country">
                                    <div><i class="fis fi fi-br rounded-circle me-2 fs-3"></i></div>
                                    <div><span>Brazil</span></div>
                                </div>
                            </td>
                              <td></td>
                              <td></td>
                           <td>
                                <!--<button type="button" class="btn p-1 accept"><i class="bx bx-check"></i></button>-->
                                <!--<button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestDenied"><i class="bx bx-x"></i></button>-->
                                <a href="#"><button type="button" class="btn p-1 history_category_image"><i class="bx bx-check"></i></button></a> 
                                 <!--<input type="file" id="history_category_image" class="form-control history_category_image" placeholder="Category Name" name="history_category_image">-->
                            <a href="#"><button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestpopup"><i class="bx bx-show"></i></button></a> 
                                <button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestView"><i class="bx bx-block"></i></button>
                              </td>
                        </tr>
                        <tr class="odd">
                            <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>
                            <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                            <td class="sorting_1"><span class="fw-medium text-heading">#155681</span></td>
                            <td class="">
                                <div class="d-flex justify-content-start align-items-center customer-name">
                                    <div class="avatar-wrapper">
                                        <div class="avatar me-2"><span class="avatar-initial rounded-circle bg-label-primary">PT</span></div>
                                    </div>
                                    <div class="d-flex flex-column"><a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/customer/details/overview"><span class="fw-medium">Price Tremathack</span></a><small class="text-muted">ptremathackd@amazon.com</small></div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-start align-items-center customer-country">
                                    <div><i class="fis fi fi-ru rounded-circle me-2 fs-3"></i></div>
                                    <div><span>Russia</span></div>
                                </div>
                            </td>
                              <td></td>
                              <td></td>
                             <td>
                                <!--<button type="button" class="btn p-1 accept"><i class="bx bx-check"></i></button>-->
                                <!--<button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestDenied"><i class="bx bx-x"></i></button>-->
                                <a href="#"><button type="button" class="btn p-1 history_category_image"><i class="bx bx-check"></i></button></a> 
                                 <!--<input type="file" id="history_category_image" class="form-control history_category_image" placeholder="Category Name" name="history_category_image">-->
                            <a href="#"><button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestpopup"><i class="bx bx-show"></i></button></a> 
                                <button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestView"><i class="bx bx-block"></i></button>
                              </td>
                        </tr>
                        <tr class="even">
                            <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>
                            <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                            <td class="sorting_1"><span class="fw-medium text-heading">#158581</span></td>
                            <td class="">
                                <div class="d-flex justify-content-start align-items-center customer-name">
                                    <div class="avatar-wrapper">
                                        <div class="avatar me-2"><img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/11.png" alt="Avatar" class="rounded-circle"></div>
                                    </div>
                                    <div class="d-flex flex-column"><a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/customer/details/overview"><span class="fw-medium">Michale Britton</span></a><small class="text-muted">mbritton2c@cloudflare.com</small></div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-start align-items-center customer-country">
                                    <div><i class="fis fi fi-cn rounded-circle me-2 fs-3"></i></div>
                                    <div><span>China</span></div>
                                </div>
                            </td>
                              <td></td>
                              <td></td>
                             <td>
                                <!--<button type="button" class="btn p-1 accept"><i class="bx bx-check"></i></button>-->
                                <!--<button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestDenied"><i class="bx bx-x"></i></button>-->
                                <a href="#"><button type="button" class="btn p-1 history_category_image"><i class="bx bx-check"></i></button></a> 
                                 <!--<input type="file" id="history_category_image" class="form-control history_category_image" placeholder="Category Name" name="history_category_image">-->
                            <a href="#"><button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestpopup"><i class="bx bx-show"></i></button></a> 
                                <button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestView"><i class="bx bx-block"></i></button>
                              </td>
                        </tr>
                        <tr class="odd">
                            <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>
                            <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                            <td class="sorting_1"><span class="fw-medium text-heading">#165827</span></td>
                            <td class="">
                                <div class="d-flex justify-content-start align-items-center customer-name">
                                    <div class="avatar-wrapper">
                                        <div class="avatar me-2"><span class="avatar-initial rounded-circle bg-label-primary">TB</span></div>
                                    </div>
                                    <div class="d-flex flex-column"><a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/customer/details/overview"><span class="fw-medium">Tobin Bassick</span></a><small class="text-muted">tbassick2e@quantcast.com</small></div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-start align-items-center customer-country">
                                    <div><i class="fis fi fi-jo rounded-circle me-2 fs-3"></i></div>
                                    <div><span>Jordan</span></div>
                                </div>
                            </td>
                              <td></td>
                              <td></td>
                            <td>
                                <!--<button type="button" class="btn p-1 accept"><i class="bx bx-check"></i></button>-->
                                <!--<button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestDenied"><i class="bx bx-x"></i></button>-->
                                <a href="#"><button type="button" class="btn p-1 history_category_image"><i class="bx bx-check"></i></button></a> 
                                 <!--<input type="file" id="history_category_image" class="form-control history_category_image" placeholder="Category Name" name="history_category_image">-->
                            <a href="#"><button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestpopup"><i class="bx bx-show"></i></button></a> 
                                <button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestView"><i class="bx bx-block"></i></button>
                              </td>
                        </tr>
                        <tr class="even">
                            <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>
                            <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                            <td class="sorting_1"><span class="fw-medium text-heading">#178408</span></td>
                            <td class="">
                                <div class="d-flex justify-content-start align-items-center customer-name">
                                    <div class="avatar-wrapper">
                                        <div class="avatar me-2"><span class="avatar-initial rounded-circle bg-label-dark">LD</span></div>
                                    </div>
                                    <div class="d-flex flex-column"><a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/customer/details/overview"><span class="fw-medium">Laurie Dax</span></a><small class="text-muted">ldax1@lycos.com</small></div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-start align-items-center customer-country">
                                    <div><i class="fis fi fi-ru rounded-circle me-2 fs-3"></i></div>
                                    <div><span>Russia</span></div>
                                </div>
                            </td>
                              <td></td>
                              <td></td>
                            <td>
                                <!--<button type="button" class="btn p-1 accept"><i class="bx bx-check"></i></button>-->
                                <!--<button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestDenied"><i class="bx bx-x"></i></button>-->
                                <a href="#"><button type="button" class="btn p-1 history_category_image"><i class="bx bx-check"></i></button></a> 
                                 <!--<input type="file" id="history_category_image" class="form-control history_category_image" placeholder="Category Name" name="history_category_image">-->
                            <a href="#"><button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestpopup"><i class="bx bx-show"></i></button></a> 
                                <button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestView"><i class="bx bx-block"></i></button>
                              </td>
                        </tr>
                    </tbody>
                </table>
                @endif
             
            </div>
        </div>
        
        <!-- Offcanvas to add new customer -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEcommerceCustomerAdd" aria-labelledby="offcanvasEcommerceCustomerAddLabel">
            <div class="offcanvas-header">
                <h5 id="offcanvasEcommerceCustomerAddLabel" class="offcanvas-title">Add Customer</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body mx-0 flex-grow-0">
                <form class="ecommerce-customer-add pt-0 fv-plugins-bootstrap5 fv-plugins-framework" id="eCommerceCustomerAddForm" onsubmit="return false" novalidate="novalidate">
                    <div class="ecommerce-customer-add-basic mb-3">
                        <h6 class="mb-3">Basic Information</h6>
                        <div class="mb-3 fv-plugins-icon-container">
                            <label class="form-label" for="ecommerce-customer-add-name">Name*</label>
                            <input type="text" class="form-control" id="ecommerce-customer-add-name" placeholder="John Doe" name="customerName" aria-label="John Doe">
                            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                            </div>
                        </div>
                        <div class="mb-3 fv-plugins-icon-container">
                            <label class="form-label" for="ecommerce-customer-add-email">Email*</label>
                            <input type="text" id="ecommerce-customer-add-email" class="form-control" placeholder="john.doe@example.com" aria-label="john.doe@example.com" name="customerEmail">
                            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                            </div>
                        </div>
                        <div>
                            <label class="form-label" for="ecommerce-customer-add-contact">Mobile</label>
                            <input type="text" id="ecommerce-customer-add-contact" class="form-control phone-mask" placeholder="+(123) 456-7890" aria-label="+(123) 456-7890" name="customerContact">
                        </div>
                    </div>

                    <div class="ecommerce-customer-add-shiping mb-3 pt-3">
                        <h6 class="mb-3">Shipping Information</h6>
                        <div class="mb-3">
                            <label class="form-label" for="ecommerce-customer-add-address">Address Line 1</label>
                            <input type="text" id="ecommerce-customer-add-address" class="form-control" placeholder="45 Roker Terrace" aria-label="45 Roker Terrace" name="customerAddress1">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="ecommerce-customer-add-address-2">Address Line 2</label>
                            <input type="text" id="ecommerce-customer-add-address-2" class="form-control" aria-label="address2" name="customerAddress2">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="ecommerce-customer-add-town">Town</label>
                            <input type="text" id="ecommerce-customer-add-town" class="form-control" placeholder="New York" aria-label="New York" name="customerTown">
                        </div>
                        <div class="row mb-3">
                            <div class="col-12 col-sm-6">
                                <label class="form-label" for="ecommerce-customer-add-state">State / Province</label>
                                <input type="text" id="ecommerce-customer-add-state" class="form-control" placeholder="Southern tip" aria-label="Southern tip" name="customerState">
                            </div>
                            <div class="col-12 col-sm-6">
                                <label class="form-label" for="ecommerce-customer-add-post-code">Post Code</label>
                                <input type="text" id="ecommerce-customer-add-post-code" class="form-control" placeholder="734990" aria-label="734990" name="pin" pattern="[0-9]{8}" maxlength="8">
                            </div>
                        </div>
                        <div>
                            <label class="form-label" for="ecommerce-customer-add-country">Country</label>
                            <div class="position-relative"><select id="ecommerce-customer-add-country" class="select2 form-select select2-hidden-accessible" data-select2-id="ecommerce-customer-add-country" tabindex="-1" aria-hidden="true">
                                    <option value="" data-select2-id="2">Select</option>
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
                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: 335px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-ecommerce-customer-add-country-container"><span class="select2-selection__rendered" id="select2-ecommerce-customer-add-country-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">United
                                                    States </span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
                        </div>

                    </div>

                    <div class="d-sm-flex mb-3 pt-3">
                        <div class="me-auto mb-2 mb-md-0">
                            <h6 class="mb-0">Use as a billing address?</h6>
                            <small class="text-muted">If you need more info, please check budget.</small>
                        </div>
                        <label class="switch m-auto pe-2">
                            <input type="checkbox" class="switch-input">
                            <span class="switch-toggle-slider">
                                <span class="switch-on"></span>
                                <span class="switch-off"></span>
                            </span>
                        </label>
                    </div>
                    <div class="pt-3">
                        <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Add</button>
                        <button type="reset" class="btn bg-label-danger" data-bs-dismiss="offcanvas">Discard</button>
                    </div>
                    <input type="hidden">
                </form>
            </div>
        </div>
    </div>
    
    
    
    <!--rizk dubara-->
    
  <!--  <div style="margin-left:20px;" class="col-12 mt-3">-->
  <!--  <div class="card">-->
  <!--    <h5 class="card-header">Form Repeater</h5>-->
  <!--    <div class="card-body">-->
  <!--      <form class="form-repeater">-->
  <!--        <div data-repeater-list="group-a">-->
  <!--          <div data-repeater-item="">-->
  <!--            <div class="row">-->
  <!--              <div class="mb-3 col-lg-6 col-xl-3 col-12 mb-0">-->
  <!--                <label class="form-label" for="form-repeater-1-1">Notifications</label>-->
  <!--                <input type="text" id="form-repeater-1-1" class="form-control" placeholder="john.doe">-->
  <!--              </div>-->
                <!--<div class="mb-3 col-lg-6 col-xl-3 col-12 mb-0">-->
                <!--  <label class="form-label" for="form-repeater-1-2">Password</label>-->
                <!--  <input type="password" id="form-repeater-1-2" class="form-control" placeholder="············">-->
                <!--</div>-->
                <!--<div class="mb-3 col-lg-6 col-xl-2 col-12 mb-0">-->
                <!--  <label class="form-label" for="form-repeater-1-3">Gender</label>-->
                <!--  <select id="form-repeater-1-3" class="form-select">-->
                <!--    <option value="Male">Male</option>-->
                <!--    <option value="Female">Female</option>-->
                <!--  </select>-->
                <!--</div>-->
                <!--<div class="mb-3 col-lg-6 col-xl-2 col-12 mb-0">-->
                <!--  <label class="form-label" for="form-repeater-1-4">Profession</label>-->
                <!--  <select id="form-repeater-1-4" class="form-select">-->
                <!--    <option value="Designer">Designer</option>-->
                <!--    <option value="Developer">Developer</option>-->
                <!--    <option value="Tester">Tester</option>-->
                <!--    <option value="Manager">Manager</option>-->
                <!--  </select>-->
                <!--</div>-->
  <!--              <div class="mb-3 col-lg-12 col-xl-2 col-12 d-flex align-items-center mb-0">-->
  <!--                <button class="btn btn-label-danger mt-4" data-repeater-delete="">-->
  <!--                  <i class="bx bx-x me-1"></i>-->
  <!--                  <span class="align-middle">Delete</span>-->
  <!--                </button>-->
  <!--              </div>-->
  <!--            </div>-->
  <!--            <hr>-->
  <!--          </div>-->
  <!--        </div>-->
  <!--        <div class="mb-0">-->
  <!--          <button class="btn btn-primary" data-repeater-create="">-->
  <!--            <i class="bx bx-plus me-1"></i>-->
  <!--            <span class="align-middle">Add</span>-->
  <!--          </button>-->
  <!--        </div>-->
  <!--      </form>-->
  <!--    </div>-->
  <!--  </div>-->
  <!--</div>-->
    
    
    
    
    
    
    <!--rizk end-->
    <!--bootstrap modal 1-->
    
    <!--pher hera pheri new-->
    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
      <div  class="modal-header">
        
        <!--<h1 class="modal-title fs-5" id="exampleModalToggleLabel">Modal 1</h1>-->
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div style="padding:0;" class="modal-body">
           <form id="multiStepForm">
        <!-- Step 1 -->
        <div class="stepnew active" id="step1">
            <div id="wizard-property-listing" class="bs-stepper vertical mt-2 linear">
 <div class="bs-stepper-header">
            <!--<button type="button" class="btn btn-primary btn-next">Add new Concerts</button>-->
              <button type="button" class="btn btn-primary btn-next">Add new Concerts</button>
            <br>
    <div class="step active" data-target="#personal-details">
      <button type="button" class="step-trigger" aria-selected="true">
        <span class="bs-stepper-circle">
                   
          <i class="bx bx-user"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Events Details</span>
          <span class="bs-stepper-subtitle">Title Location</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <div class="step" data-target="#property-details">
      <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
        <span class="bs-stepper-circle">
          <i class="bx bx-home"></i>
        </span>
        <span class="bs-stepper-label">
            <span class="bs-stepper-title">Event Start</span>
          <span class="bs-stepper-subtitle">Date and Time</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <!--<div class="step" data-target="#property-features">-->
    <!--  <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">-->
    <!--    <span class="bs-stepper-circle">-->
    <!--      <i class="bx bx-star"></i>-->
    <!--    </span>-->
    <!--   <span class="bs-stepper-label">-->
    <!--      <span class="bs-stepper-title">Tickets</span>-->
    <!--      <span class="bs-stepper-subtitle">Sale Tickets</span>-->
    <!--    </span>-->
    <!--  </button>-->
    <!--</div>-->
    <div class="line"></div>
    <div class="step" data-target="#property-area">
      <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
        <span class="bs-stepper-circle">
          <i class="bx bx-map"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Notifications</span>
          <span class="bs-stepper-subtitle">Add Notifications</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <div class="step" data-target="#price-details">
      <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
        <span class="bs-stepper-circle">
          <i class="bx bx-dollar"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Contact</span>
          <span class="bs-stepper-subtitle">Contact Person</span>
        </span>
      </button>
    </div>
  </div>
  <div class="bs-stepper-content">
    <form id="wizard-property-listing-form" onsubmit="return false">

      <!-- Personal Details -->
      <div id="personal-details" class="content active dstepper-block fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-12">
            <div class="row">
              <!--<div class="col-md mb-md-0 mb-2">-->
              <!--  <div class="form-check custom-option custom-option-icon checked">-->
              <!--    <label class="form-check-label custom-option-content" for="customRadioBuilder">-->
              <!--      <span class="custom-option-body">-->
              <!--        <i class="bx bx-building-house"></i>-->
              <!--        <span class="custom-option-title">I am the Builder</span>-->
              <!--        <small>List property as Builder, list your project and get highest reach.</small>-->
              <!--      </span>-->
              <!--      <input name="plUserType" class="form-check-input" type="radio" value="1" id="customRadioBuilder" checked="">-->
              <!--    </label>-->
              <!--  </div>-->
              <!--</div>-->
              <!--<div class="col-md mb-md-0 mb-2">-->
              <!--  <div class="form-check custom-option custom-option-icon">-->
              <!--    <label class="form-check-label custom-option-content" for="customRadioOwner">-->
              <!--      <span class="custom-option-body">-->
              <!--        <i class="bx bx-crown"></i>-->
              <!--        <span class="custom-option-title"> I am the Owner </span>-->
              <!--        <small>Submit property as an Individual. Lease, Rent or Sell at the best price.</small>-->
              <!--      </span>-->
              <!--      <input name="plUserType" class="form-check-input" type="radio" value="2" id="customRadioOwner">-->
              <!--    </label>-->
              <!--  </div>-->
              <!--</div>-->
              
             <div class="container" style="width:364px;">


        <input name="file1" type="file" class="dropify" data-height="100" />
      </div>
      
   
              <!--<div class="col-md mb-md-0 mb-2">-->
              <!--  <div class="form-check custom-option custom-option-icon">-->
              <!--    <label class="form-check-label custom-option-content" for="customRadioBroker">-->
              <!--      <span class="custom-option-body">-->
              <!--        <i class="bx bx-briefcase-alt"></i>-->
              <!--        <span class="custom-option-title"> I am a Broker </span>-->
              <!--        <small>Earn highest commission by listing your clients properties at the best price.</small>-->
              <!--      </span>-->
              <!--      <input name="plUserType" class="form-check-input" type="radio" value="3" id="customRadioBroker">-->
              <!--    </label>-->
              <!--  </div>-->
              <!--</div>-->
            </div>
          </div>
        
              <div class="col-sm-6 fv-plugins-icon-container">
            <label class="form-label" for="plContact">Event Title</label>
            <div class="input-group input-group-merge">
             
              <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Event Title">
            </div>
          </div>
          
            <div class="col-sm-6">
            <label class="form-label" for="plContact">Describe</label>
            <div class="input-group input-group-merge">
             
              <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Input Text">
            </div>
          </div>
          
          
            <div class="col-sm-6">
            <label class="form-label" for="plContact">Location Name</label>
            <div class="input-group input-group-merge">
             
              <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Example Human Right Berlin">
            </div>
          </div>
          
         
          
          
          <div class="col-sm-6">
                 <label class="form-label" for="plContact">Select</label>
                                        <select id="sendNotification" class="form-select" name="sendNotification">
                                            <option selected="">Country</option>
                                            <option>America</option>
                                        </select>
                                    </div>
          
          
          
          
           <div class="col-sm-6">
            <label class="form-label" for="plContact">City and Zipcode</label>
            <div class="input-group input-group-merge">
             
              <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="City and ZipCode">
            </div>
          </div>
          
            <div class="col-sm-6">
            <label class="form-label" for="plContact">Address</label>
            <div class="input-group input-group-merge">
             
              <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Address">
            </div>
          </div>
          
          
        
          
          
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-label-secondary btn-prev" disabled=""> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
              <span class="align-middle d-sm-inline-block d-none">Previous</span>
            </button>
            <!--<button class="btn btn-primary btn-next"  onclick="nextStep('step1', 'step2')"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>-->
            
            <button type="button" class="btn btn-primary btn-next" onclick="nextStep('step1', 'step2')">Next</button>
          </div>
        </div>
      </div>

      <!-- Property Details -->
      <div id="property-details" class="content fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-12">
            <div class="row">
              <div class="col-xl mb-xl-0 mb-2">
                <div class="form-check custom-option custom-option-icon checked">
                  <label class="form-check-label custom-option-content" for="customRadioSell">
                    <span class="custom-option-body">
                      <i class="bx bx-home"></i>
                      <span class="custom-option-title">Sale the property</span>
                      <small>Post your property for sale.<br> Unlimited free listing.</small>
                    </span>
                    <input name="plPropertySaleRent" class="form-check-input" type="radio" value="1" id="customRadioSell" checked="">
                  </label>
                </div>
              </div>
              <div class="col-xl mb-xl-0 mb-2">
                <div class="form-check custom-option custom-option-icon">
                  <label class="form-check-label custom-option-content" for="customRadioRent">
                    <span class="custom-option-body">
                      <i class="bx bx-wallet"></i>
                      <span class="custom-option-title">Rent the property</span>
                      <small>Post your property for rent.<br> Unlimited free listing.</small>
                    </span>
                    <input name="plPropertySaleRent" class="form-check-input" type="radio" value="2" id="customRadioRent">
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 fv-plugins-icon-container">
            <label class="form-label" for="plPropertyType">Property Type</label>
            <div class="position-relative"><select id="plPropertyType" name="plPropertyType" class="select2 form-select select2-hidden-accessible" data-allow-clear="true" data-select2-id="plPropertyType" tabindex="-1" aria-hidden="true">
              <option value="" data-select2-id="4">Select Property Type</option>
              <option value="10002">Flat/ Apartment</option>
              <option value="10001">Residential House</option>
              <option value="10017">Villa</option>
              <option value="10003">Builder Floor Apartment</option>
              <option value="10000">Residential Land/ Plot</option>
              <option value="10021">Penthouse</option>
              <option value="10022">Studio Apartment</option>
            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="3" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-plPropertyType-container"><span class="select2-selection__rendered" id="select2-plPropertyType-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select property type</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
          <div class="col-sm-6 fv-plugins-icon-container">
            <label class="form-label" for="plZipCode">Zip Code</label>
            <input type="number" id="plZipCode" name="plZipCode" class="form-control" placeholder="99950">
          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
          <div class="col-sm-6">
            <label class="form-label" for="plCountry">Country</label>
            <div class="position-relative"><select id="plCountry" name="plCountry" class="select2 form-select select2-hidden-accessible" data-allow-clear="true" data-select2-id="plCountry" tabindex="-1" aria-hidden="true">
              <option value="" data-select2-id="2">Select</option>
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
            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-plCountry-container"><span class="select2-selection__rendered" id="select2-plCountry-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select country</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plState">State</label>
            <input type="text" id="plState" name="plState" class="form-control" placeholder="California">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plCity">City</label>
            <input type="text" id="plCity" name="plCity" class="form-control" placeholder="Los Angeles">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plLandmark">Landmark</label>
            <input type="text" id="plLandmark" name="plLandmark" class="form-control" placeholder="Nr. Hard Rock Cafe">
          </div>
          <div class="col-lg-12">
            <label class="form-label" for="plAddress">Address</label>
            <textarea id="plAddress" name="plAddress" class="form-control" rows="2" placeholder="12, Business Park"></textarea>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Property Features -->
      <div id="property-features" class="content fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-sm-6">
            <label class="form-label d-block" for="plBedrooms">Bedrooms</label>
            <input type="number" id="plBedrooms" name="plBedrooms" class="form-control" placeholder="3">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plFloorNo">Floor No</label>
            <input type="number" id="plFloorNo" name="plFloorNo" class="form-control" placeholder="12">
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plBathrooms">Bathrooms</label>
            <input type="number" id="plBathrooms" name="plBathrooms" class="form-control" placeholder="4">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plFurnishedStatus">Furnished Status</label>
            <select id="plFurnishedStatus" name="plFurnishedStatus" class="form-select">
              <option selected="" disabled="" value="">Select furnished status </option>
              <option value="1">Fully furnished</option>
              <option value="2">Furnished</option>
              <option value="3">Semi furnished</option>
              <option value="4">Unfurnished</option>
            </select>
          </div>
          <div class="col-lg-12">
            <label class="form-label" for="plFurnishingDetails">Furnishing Details</label>
            <tags class="tagify  form-control" tabindex="-1">
            <tag title="Fridge" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="Fridge"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">Fridge</span></div></tag><tag title="AC" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="AC"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">AC</span></div></tag><tag title="TV" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="TV"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">TV</span></div></tag><tag title="WiFi" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="WiFi"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">WiFi</span></div></tag><span contenteditable="" tabindex="0" data-placeholder="select options" aria-placeholder="select options" class="tagify__input" role="textbox" aria-autocomplete="both" aria-multiline="false"></span>
                ​
        </tags><input id="plFurnishingDetails" name="plFurnishingDetails" class="form-control" placeholder="select options" value="Fridge, AC, TV, WiFi" tabindex="-1">
          </div>
          <div class="col-sm-6">
            <label class="form-label">Is there any common area?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plCommonAreaRadio" id="plCommonAreaRadioYes" checked="">
              <label class="form-check-label" for="plCommonAreaRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plCommonAreaRadio" id="plCommonAreaRadioNo">
              <label class="form-check-label" for="plCommonAreaRadioNo">No</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Is there any attached balcony?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plAttachedBalconyRadio" id="plAttachedBalconyRadioYes" checked="">
              <label class="form-check-label" for="plAttachedBalconyRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plAttachedBalconyRadio" id="plAttachedBalconyRadioNo">
              <label class="form-check-label" for="plAttachedBalconyRadioNo">No</label>
            </div>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Property Area -->
      <div id="property-area" class="content fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-sm-6">
            <label class="form-label d-block" for="plTotalArea">Total Area</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plTotalArea" name="plTotalArea" placeholder="1000" aria-describedby="pl-total-area">
              <span class="input-group-text" id="pl-total-area">sq-ft</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plCarpetArea">Carpet Area</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plCarpetArea" name="plCarpetArea" placeholder="800" aria-describedby="pl-carpet-area">
              <span class="input-group-text" id="pl-carpet-area">sq-ft</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plPlotArea">Plot Area</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plPlotArea" name="plPlotArea" placeholder="800" aria-describedby="pl-plot-area">
              <span class="input-group-text" id="pl-plot-area">sq-yd</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plAvailableFrom">Available From</label>
            <input type="text" id="plAvailableFrom" name="plAvailableFrom" class="form-control flatpickr flatpickr-input" placeholder="YYYY-MM-DD" readonly="readonly">
          </div>
          <div class="col-sm-6">
            <label class="form-label">Possession Status</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plPossessionStatus" id="plUnderConstruction" checked="">
              <label class="form-check-label" for="plUnderConstruction">Under Construction</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plPossessionStatus" id="plReadyToMoveRadio">
              <label class="form-check-label" for="plReadyToMoveRadio">Ready to Move</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Transaction Type</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plTransectionType" id="plNewProperty" checked="">
              <label class="form-check-label" for="plNewProperty">New Property</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plTransectionType" id="plResaleProperty">
              <label class="form-check-label" for="plResaleProperty">Resale</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Is Property Facing Main Road?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plRoadFacingRadio" id="plRoadFacingRadioYes" checked="">
              <label class="form-check-label" for="plRoadFacingRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plRoadFacingRadio" id="plRoadFacingRadioNo">
              <label class="form-check-label" for="plRoadFacingRadioNo">No</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Gated Colony?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plGatedColonyRadio" id="plGatedColonyRadioYes" checked="">
              <label class="form-check-label" for="plGatedColonyRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plGatedColonyRadio" id="plGatedColonyRadioNo">
              <label class="form-check-label" for="plGatedColonyRadioNo">No</label>
            </div>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Price Details -->
      <div id="price-details" class="content fv-plugins-bootstrap5 fv-plugins-framework">
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
              <option value="1" selected="">Monthly</option>
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
              <input class="form-check-input" type="radio" name="plShowPriceRadio" id="plNagotiablePrice" checked="">
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
              <label class="form-check-label" for="plOtherCharges">Stamp Duty &amp; Registration charges excluded.</label>
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
            <br>
            <!--<button type="button" onclick="nextStep('step1', 'step2')">Next</button>-->
        </div>

        <!-- Step 2 -->
        <div class="stepnew" id="step2">
  
  <div id="wizard-property-listing" class="bs-stepper vertical mt-2 linear">
 <div class="bs-stepper-header">
      <button type="button" class="btn btn-primary btn-next">Add new Concerts</button>
            <br>
    <div class="step" data-target="#personal-details">
      <button type="button" class="step-trigger" aria-selected="false">
        <span class="bs-stepper-circle">
          <i class="bx bx-user"></i>
        </span>
        <span class="bs-stepper-label">
           <span class="bs-stepper-title">Events Details</span>
          <span class="bs-stepper-subtitle">Title Location</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <div class="step active" data-target="#property-details">
      <button type="button" class="step-trigger" aria-selected="true" >
        <span class="bs-stepper-circle">
          <i class="bx bx-home"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Event Start</span>
          <span class="bs-stepper-subtitle">Date and Time</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <!--<div class="step" data-target="#property-features">-->
    <!--  <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">-->
    <!--    <span class="bs-stepper-circle">-->
    <!--      <i class="bx bx-star"></i>-->
    <!--    </span>-->
    <!--    <span class="bs-stepper-label">-->
    <!--      <span class="bs-stepper-title">Tickets</span>-->
    <!--      <span class="bs-stepper-subtitle">Sale Tickets</span>-->
    <!--    </span>-->
    <!--  </button>-->
    <!--</div>-->
    <div class="line"></div>
    <div class="step" data-target="#property-area">
      <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
        <span class="bs-stepper-circle">
          <i class="bx bx-map"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Notifications</span>
          <span class="bs-stepper-subtitle">Add Notifications</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <div class="step" data-target="#price-details">
      <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
        <span class="bs-stepper-circle">
          <i class="bx bx-dollar"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Contact</span>
          <span class="bs-stepper-subtitle">Contact Person</span>
        </span>
      </button>
    </div>
  </div>
  <div class="bs-stepper-content">
    <form id="wizard-property-listing-form" onsubmit="return false">

      <!-- Personal Details -->
      <div style="position:relative;height:100%;" id="personal-details" class="content active dstepper-block fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-12">
            <div class="row">
                <div class="d-flex justify-content-center align-items-center">
              <img src="{{asset('assets/img/clock.png')}}" width="130px"> 
              </div>
            </div>
         
          </div>
      
              <div class="col-sm-6 fv-plugins-icon-container">
                  
         
            <label class="form-label" for="plContact">Start Date</label>
            <div class="input-group input-group-merge">
              <input type="date" id="dateInput" name="dateInput" class="form-control flatpickrdate" pattern="\d{2}/\d{2}/\d{2}" placeholder="Date Picker" required>
               
              <!--<input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Event Title">-->
            </div>
          </div>
             <div class="col-sm-6 fv-plugins-icon-container">
            <label class="form-label" for="plContact">End Date</label>
            <div class="input-group input-group-merge">
              <input type="date" id="dateInput" name="dateInput" class="form-control flatpickrdate" pattern="\d{2}/\d{2}/\d{2}" placeholder="Date Picker" required>
               
              <!--<input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Event Title">-->
            </div>
          </div>
          
            <div class="col-sm-6">
            <label class="form-label" for="plContact">Start Time</label>
            <div class="input-group input-group-merge">
                             <input type="time" id="timeInput" name="timeInput" class="form-control flatpickrtime" pattern="\d{2}:\d{2}" placeholder="Time Picker" required>

              <!--<input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Input Text">-->
            </div>
          </div>
          
          
            <div class="col-sm-6">
            <label class="form-label" for="plContact">End Time</label>
            <div class="input-group input-group-merge">
                     <input type="time" id="timeInput" name="timeInput" class="form-control flatpickrtime" pattern="\d{2}:\d{2}" placeholder="Time Picker" required>
              <!--<input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Example Human Right Berlin">-->
            </div>
          </div>
          
         
          
          
          
          
          
        
          
          
          <div  class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev" > <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
              <span class="align-middle d-sm-inline-block " onclick="prevStep('step2', 'step1')">Previous</span>
            </button>
            <!--<button class="btn btn-primary btn-next"  onclick="nextStep('step1', 'step2')"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>-->
            
            <button type="button" class="btn btn-primary btn-next" onclick="nextStep('step2', 'step4')">Next</button>
              <!--<button type="button" onclick="nextStep('step2', 'step3')">Next</button>-->
          </div>
        </div>
      </div>

      <!-- Property Details -->
      <div id="property-details" class="content fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-12">
            <div class="row">
              <div class="col-xl mb-xl-0 mb-2">
                <div class="form-check custom-option custom-option-icon checked">
                  <label class="form-check-label custom-option-content" for="customRadioSell">
                    <span class="custom-option-body">
                      <i class="bx bx-home"></i>
                      <span class="custom-option-title">Sale the property</span>
                      <small>Post your property for sale.<br> Unlimited free listing.</small>
                    </span>
                    <input name="plPropertySaleRent" class="form-check-input" type="radio" value="1" id="customRadioSell" checked="">
                  </label>
                </div>
              </div>
              <div class="col-xl mb-xl-0 mb-2">
                <div class="form-check custom-option custom-option-icon">
                  <label class="form-check-label custom-option-content" for="customRadioRent">
                    <span class="custom-option-body">
                      <i class="bx bx-wallet"></i>
                      <span class="custom-option-title">Rent the property</span>
                      <small>Post your property for rent.<br> Unlimited free listing.</small>
                    </span>
                    <input name="plPropertySaleRent" class="form-check-input" type="radio" value="2" id="customRadioRent">
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 fv-plugins-icon-container">
            <label class="form-label" for="plPropertyType">Property Type</label>
            <div class="position-relative"><select id="plPropertyType" name="plPropertyType" class="select2 form-select select2-hidden-accessible" data-allow-clear="true" data-select2-id="plPropertyType" tabindex="-1" aria-hidden="true">
              <option value="" data-select2-id="4">Select Property Type</option>
              <option value="10002">Flat/ Apartment</option>
              <option value="10001">Residential House</option>
              <option value="10017">Villa</option>
              <option value="10003">Builder Floor Apartment</option>
              <option value="10000">Residential Land/ Plot</option>
              <option value="10021">Penthouse</option>
              <option value="10022">Studio Apartment</option>
            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="3" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-plPropertyType-container"><span class="select2-selection__rendered" id="select2-plPropertyType-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select property type</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
          <div class="col-sm-6 fv-plugins-icon-container">
            <label class="form-label" for="plZipCode">Zip Code</label>
            <input type="number" id="plZipCode" name="plZipCode" class="form-control" placeholder="99950">
          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
          <div class="col-sm-6">
            <label class="form-label" for="plCountry">Country</label>
            <div class="position-relative"><select id="plCountry" name="plCountry" class="select2 form-select select2-hidden-accessible" data-allow-clear="true" data-select2-id="plCountry" tabindex="-1" aria-hidden="true">
              <option value="" data-select2-id="2">Select</option>
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
            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-plCountry-container"><span class="select2-selection__rendered" id="select2-plCountry-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select country</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plState">State</label>
            <input type="text" id="plState" name="plState" class="form-control" placeholder="California">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plCity">City</label>
            <input type="text" id="plCity" name="plCity" class="form-control" placeholder="Los Angeles">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plLandmark">Landmark</label>
            <input type="text" id="plLandmark" name="plLandmark" class="form-control" placeholder="Nr. Hard Rock Cafe">
          </div>
          <div class="col-lg-12">
            <label class="form-label" for="plAddress">Address</label>
            <textarea id="plAddress" name="plAddress" class="form-control" rows="2" placeholder="12, Business Park"></textarea>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Property Features -->
      <div id="property-features" class="content fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-sm-6">
            <label class="form-label d-block" for="plBedrooms">Bedrooms</label>
            <input type="number" id="plBedrooms" name="plBedrooms" class="form-control" placeholder="3">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plFloorNo">Floor No</label>
            <input type="number" id="plFloorNo" name="plFloorNo" class="form-control" placeholder="12">
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plBathrooms">Bathrooms</label>
            <input type="number" id="plBathrooms" name="plBathrooms" class="form-control" placeholder="4">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plFurnishedStatus">Furnished Status</label>
            <select id="plFurnishedStatus" name="plFurnishedStatus" class="form-select">
              <option selected="" disabled="" value="">Select furnished status </option>
              <option value="1">Fully furnished</option>
              <option value="2">Furnished</option>
              <option value="3">Semi furnished</option>
              <option value="4">Unfurnished</option>
            </select>
          </div>
          <div class="col-lg-12">
            <label class="form-label" for="plFurnishingDetails">Furnishing Details</label>
            <tags class="tagify  form-control" tabindex="-1">
            <tag title="Fridge" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="Fridge"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">Fridge</span></div></tag><tag title="AC" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="AC"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">AC</span></div></tag><tag title="TV" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="TV"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">TV</span></div></tag><tag title="WiFi" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="WiFi"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">WiFi</span></div></tag><span contenteditable="" tabindex="0" data-placeholder="select options" aria-placeholder="select options" class="tagify__input" role="textbox" aria-autocomplete="both" aria-multiline="false"></span>
                ​
        </tags><input id="plFurnishingDetails" name="plFurnishingDetails" class="form-control" placeholder="select options" value="Fridge, AC, TV, WiFi" tabindex="-1">
          </div>
          <div class="col-sm-6">
            <label class="form-label">Is there any common area?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plCommonAreaRadio" id="plCommonAreaRadioYes" checked="">
              <label class="form-check-label" for="plCommonAreaRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plCommonAreaRadio" id="plCommonAreaRadioNo">
              <label class="form-check-label" for="plCommonAreaRadioNo">No</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Is there any attached balcony?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plAttachedBalconyRadio" id="plAttachedBalconyRadioYes" checked="">
              <label class="form-check-label" for="plAttachedBalconyRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plAttachedBalconyRadio" id="plAttachedBalconyRadioNo">
              <label class="form-check-label" for="plAttachedBalconyRadioNo">No</label>
            </div>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Property Area -->
      <div id="property-area" class="content fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-sm-6">
            <label class="form-label d-block" for="plTotalArea">Total Area</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plTotalArea" name="plTotalArea" placeholder="1000" aria-describedby="pl-total-area">
              <span class="input-group-text" id="pl-total-area">sq-ft</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plCarpetArea">Carpet Area</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plCarpetArea" name="plCarpetArea" placeholder="800" aria-describedby="pl-carpet-area">
              <span class="input-group-text" id="pl-carpet-area">sq-ft</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plPlotArea">Plot Area</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plPlotArea" name="plPlotArea" placeholder="800" aria-describedby="pl-plot-area">
              <span class="input-group-text" id="pl-plot-area">sq-yd</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plAvailableFrom">Available From</label>
            <input type="text" id="plAvailableFrom" name="plAvailableFrom" class="form-control flatpickr flatpickr-input" placeholder="YYYY-MM-DD" readonly="readonly">
          </div>
          <div class="col-sm-6">
            <label class="form-label">Possession Status</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plPossessionStatus" id="plUnderConstruction" checked="">
              <label class="form-check-label" for="plUnderConstruction">Under Construction</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plPossessionStatus" id="plReadyToMoveRadio">
              <label class="form-check-label" for="plReadyToMoveRadio">Ready to Move</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Transaction Type</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plTransectionType" id="plNewProperty" checked="">
              <label class="form-check-label" for="plNewProperty">New Property</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plTransectionType" id="plResaleProperty">
              <label class="form-check-label" for="plResaleProperty">Resale</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Is Property Facing Main Road?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plRoadFacingRadio" id="plRoadFacingRadioYes" checked="">
              <label class="form-check-label" for="plRoadFacingRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plRoadFacingRadio" id="plRoadFacingRadioNo">
              <label class="form-check-label" for="plRoadFacingRadioNo">No</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Gated Colony?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plGatedColonyRadio" id="plGatedColonyRadioYes" checked="">
              <label class="form-check-label" for="plGatedColonyRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plGatedColonyRadio" id="plGatedColonyRadioNo">
              <label class="form-check-label" for="plGatedColonyRadioNo">No</label>
            </div>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Price Details -->
      <div id="price-details" class="content fv-plugins-bootstrap5 fv-plugins-framework">
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
              <option value="1" selected="">Monthly</option>
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
              <input class="form-check-input" type="radio" name="plShowPriceRadio" id="plNagotiablePrice" checked="">
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
              <label class="form-check-label" for="plOtherCharges">Stamp Duty &amp; Registration charges excluded.</label>
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
            <br>
            <!--<button type="button" onclick="prevStep('step2', 'step1')">Previous</button>-->
            <!--<button type="button" onclick="nextStep('step2', 'step3')">Next</button>-->
        </div>

        <!-- Step 3 -->
        <div class="stepnew" id="step3">
               <div id="wizard-property-listing" class="bs-stepper vertical mt-2 linear">
 <div class="bs-stepper-header">
            <button type="button" class="btn btn-primary btn-next">Add new Concerts</button>
            <br>
    <div class="step " data-target="#personal-details">
      <button type="button" class="step-trigger" aria-selected="false">
        <span class="bs-stepper-circle">
                   
          <i class="bx bx-user"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Events Details</span>
          <span class="bs-stepper-subtitle">Title Location</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <div class="step" data-target="#property-details">
      <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
        <span class="bs-stepper-circle">
          <i class="bx bx-home"></i>
        </span>
        <span class="bs-stepper-label">
            <span class="bs-stepper-title">Event Start</span>
          <span class="bs-stepper-subtitle">Date and Time</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <!--<div class="step active" data-target="#property-features">-->
    <!--  <button type="button" class="step-trigger" aria-selected="true">-->
    <!--    <span class="bs-stepper-circle">-->
    <!--      <i class="bx bx-star"></i>-->
    <!--    </span>-->
    <!--   <span class="bs-stepper-label">-->
    <!--      <span class="bs-stepper-title">Tickets</span>-->
    <!--      <span class="bs-stepper-subtitle">Sale Tickets</span>-->
    <!--    </span>-->
    <!--  </button>-->
    <!--</div>-->
    <div class="line"></div>
    <div class="step" data-target="#property-area">
      <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
        <span class="bs-stepper-circle">
          <i class="bx bx-map"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Notifications</span>
          <span class="bs-stepper-subtitle">Add Notifications</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <div class="step" data-target="#price-details">
      <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
        <span class="bs-stepper-circle">
          <i class="bx bx-dollar"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Contact</span>
          <span class="bs-stepper-subtitle">Contact Person</span>
        </span>
      </button>
    </div>
  </div>
  <div class="bs-stepper-content">
    <form id="wizard-property-listing-form" onsubmit="return false">

      <!-- Personal Details -->
      <div id="personal-details" class="content active dstepper-block fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-12">
            <div class="row">
            
              
      <!--       <div class="container" style="width:364px;">-->


      <!--  <input name="file1" type="file" class="dropify" data-height="100" />-->
      <!--</div>-->
      
   
             
            </div>
          </div>
        
        <!--babar azam-->
        <div class="col-sm-12">
            <div class="row">
              <div  style="width:47%;" class="col-sm-6">
              <div class="d-flex border-primary p-2 border rounded mb-4">
          <div class="avatar flex-shrink-0 me-3">
            <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/icons/unicons/briefcase.png" alt="User" class="rounded">
          </div>
          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
            <div class="me-2">
              <p class="mb-0">Activate Sale</p>
              <a href="javascript:void(0)" class="small" data-bs-target="#upgradePlanModal" data-bs-toggle="modal">Event Ticket Sale</a>
            </div>
            <div class="user-progress">
              <div class="">
                  <!--add-->
                  <div style="display: flex;justify-content: center; align-items: center" class="form-check form-switch mb-2">
          <input class="form-check-input closetogglebtn" type="checkbox" id="flexSwitchCheckChecked " checked="">
    
        </div>
                  
                  <!--add-->
                <!--<sup class="mt-3 mb-0 me-1">$</sup>-->
                <!--<h3 class="mb-0">2,124</h3>-->
                <!--<sub class="mt-auto mb-2"> /Year</sub>-->
              </div>
            </div>
          </div>
        </div>
        </div>
    
       <div class="col-sm-3 mt-2 closeradio" >
            <div style="border: 1px solid #696cff;border-radius:10px;">
          <div style="padding:4px;" class="d-flex justify-content-center align-items-center ">
              
              <div class="start d-flex">
                
              <div style="padding-bottom:4px" class="mt-2 d-flex">
                 <input name="customRadioSvg" class="form-check-input" type="radio" value="" id="customRadioSvg3">
                  &nbsp;  &nbsp;
             <!-- <div style="border-radius:100%;border:1px solid black;padding:0px 2px;" class="d-flex justify-content-center align-items-center">-->
             <!--<strong>.$. </strong> -->
             <!--</div>-->
             <label>.Dollar.</label>
             
           </div>
          </div>
          </div>
         
        <!--  <div style="display: flex;justify-content: center; align-items: center" class="form-check form-switch mb-2">-->
        <!--  <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">-->
    
        <!--</div>-->
          
          </div>
        </div>
        
           <div class="col-sm-3 mt-2 closeradio">
            <div style="border: 1px solid #696cff;border-radius:10px;">
          <div style="padding:4px" class="d-flex justify-content-center align-items-center ">
              
              <div class="start d-flex">
                  <div class="">
                    <!--<img src="https://yekbun.hellodev.site/public//assets/img/seat.png" alt="" width="40px">-->
              </div>
            <div style="padding-bottom:4px" class="mt-2 d-flex ">
                 <input name="customRadioSvg" class="form-check-input" type="radio" value="" id="customRadioSvg3">
                    &nbsp;  &nbsp;
             <!-- <div style="border-radius:100%;border:1px solid black;padding:0px 2px;" class="d-flex justify-content-center align-items-center">-->
             <!--<strong>.€. </strong> -->
             <!--</div>-->
             <label>.Euro.</label>
             
           
          </div>
          </div>
          
          <!--<div class="toggle-btn">-->
            
                <!--<button style="color: black;" class="btn btn-secondary bg-light ">Price Here</button>-->
          <!--     <button style="color: black;background:#f5f5f9;border:1px solid black"; class="btn ">Price Here</button>-->
          <!--</div>-->
        <!--  <div style="display: flex;justify-content: center; align-items: center" class="form-check form-switch mb-2">-->
        <!--  <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">-->
    
        <!--</div>-->
            <!-- <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Event Title"> -->
          </div>
        </div>
        </div>
        
        </div>
        </div>
      
        
        <!--babar azam end-->
        
      <!--        <div class="col-sm-12 fv-plugins-icon-container">-->
            <!--<label class="form-label" for="plContact">Ticket Sale</label>-->
            
      <!--      <div style="background:#f5f5f9" class="d-flex justify-content-center ">-->
      <!--        <div class="">-->
      <!-- <div class="input-group input-group-merge d-flex justify-content-between">-->
            
      <!--      <div class="start d-flex">-->
           
      <!--      <div class="d-flex ">-->
                
             
      <!--          <div>-->
      <!--     <strong>Activate Sale</strong> -->
      <!--     <p class="m-0">Event Ticket Sale</p>-->
                    
      <!--          </div>-->
      <!--             <div>-->
        <!--            <div style="" class="toggle-btn">-->
               
            
        <!--    <label class="switch">-->
        <!--        <input type="checkbox">-->
        <!--        <span class="slider round"></span>-->
        <!--      </label>-->
        <!--</div>-->
      <!--  <div style="display: flex;justify-content: center; align-items: center" class="form-check form-switch mb-2">-->
      <!--    <input class="form-check-input closetogglebtn" type="checkbox" id="flexSwitchCheckChecked " checked="" >-->
    
      <!--  </div>-->
      <!--          </div>-->
           
      <!--  </div>-->
      <!--  </div>-->
        
        
      
        <!--<div class="toggle-btn">-->
        <!--    <label class="switch">-->
        <!--        <input type="checkbox">-->
        <!--        <span class="slider round"></span>-->
        <!--      </label>-->
        <!--</div>-->
        
      <!--  </div>-->
        
      <!--</div>-->
      <!--      </div>-->
      <!--    </div>-->
          
          
        <!--    <div style="display:flex;justify-content-center align-items-center">-->
        <!--    <div class="">-->
        <!--        <div class="row">-->
        <!--            <div class="dollar ">-->
        <!--                <div style="border-radius:100%;border:1px solid whitesmoke;">-->
        <!--                .$.-->
        <!--                </div>-->
        <!--                Dollar-->
        <!--            </div>-->
        <!--              <div class="dollar ">-->
        <!--                   <div style="border-radius:100%;border:1px solid whitesmoke;">-->
        <!--                .€.-->
        <!--                </div>-->
        <!--                Euro-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
        
        
        
        <!--apna kam banta-->
        
        <!--<div class="d-flex justify-content-center align-items-center" id="closeradio">-->
        <!--<div style="padding:8px;" class="col-sm-6">-->
          
        <!--       <div class="row">-->
        <!--      <div  class="col-sm-6">-->
        <!-- <div style="border: 1px solid #696cff;border-radius:10px;">-->
        <!--  <div style="padding:4px;" class="d-flex justify-content-center align-items-center ">-->
              
        <!--      <div class="start d-flex">-->
                
        <!--      <div style="padding-bottom:4px" class="mt-2 d-flex">-->
        <!--         <input name="customRadioSvg" class="form-check-input" type="radio" value="" id="customRadioSvg3">-->
        <!--          &nbsp  &nbsp-->
        <!--      <div style="border-radius:100%;border:1px solid black;padding:0px 2px;"  class="d-flex justify-content-center align-items-center">-->
        <!--     <strong>.$. </strong> -->
        <!--     </div>-->
        <!--     <label>.Dollar.</label>-->
             
        <!--   </div>-->
        <!--  </div>-->
        <!--  </div>-->
         
        <!--  <div style="display: flex;justify-content: center; align-items: center" class="form-check form-switch mb-2">-->
        <!--  <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">-->
    
        <!--</div>-->
          
        <!--  </div>-->
        <!--</div>-->
        
        <!-- <div class="col-sm-6">-->
        <!--    <div style="border: 1px solid #696cff;border-radius:10px;">-->
        <!--  <div style="padding:4px" class="d-flex justify-content-center align-items-center ">-->
              
        <!--      <div class="start d-flex">-->
        <!--          <div class="">-->
                    <!--<img src="https://yekbun.hellodev.site/public//assets/img/seat.png" alt="" width="40px">-->
        <!--      </div>-->
        <!--    <div style="padding-bottom:4px" class="mt-2 d-flex ">-->
        <!--         <input name="customRadioSvg" class="form-check-input" type="radio" value="" id="customRadioSvg3">-->
        <!--            &nbsp  &nbsp-->
        <!--      <div style="border-radius:100%;border:1px solid black;padding:0px 2px;"  class="d-flex justify-content-center align-items-center">-->
        <!--     <strong>.€. </strong> -->
        <!--     </div>-->
        <!--     <label>.Euro.</label>-->
             
           
        <!--  </div>-->
        <!--  </div>-->
          
          <!--<div class="toggle-btn">-->
            
                <!--<button style="color: black;" class="btn btn-secondary bg-light ">Price Here</button>-->
          <!--     <button style="color: black;background:#f5f5f9;border:1px solid black"; class="btn ">Price Here</button>-->
          <!--</div>-->
        <!--  <div style="display: flex;justify-content: center; align-items: center" class="form-check form-switch mb-2">-->
        <!--  <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">-->
    
        <!--</div>-->
            <!-- <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Event Title"> -->
        <!--  </div>-->
        <!--</div>-->
        <!--</div>-->
        <!--  </div>-->
        <!--</div>-->
        <!--</div>-->
          
          
<!--              <div class="col-sm-6 fv-plugins-icon-container">-->
<!--            <label class="form-label" for="plContact">Select Currency</label>-->
<!--            <div class="">-->
<!--              <div class="">-->
<!--       <div class="input-group input-group-merge d-flex justify-content-between">-->
            
<!--            <div class="start d-flex">-->
             
<!--            <div class="">-->
           
<!--             <div class="toggle-btn">-->
<!--            <label class="switch">-->
<!--                <input type="checkbox">-->
<!--                <span class="slider round"></span>-->
<!--              </label>-->
<!--        </div>-->
<!--        </div>-->
<!--           <div class="">-->
                <!--<img src="{{asset('assets/img/dollar.webp')}}" alt="" width="40px" >-->
<!--                <span>Standard</span>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div style="-->
<!--    margin-right: -169px;-->
<!--" class="toggle-btn">-->
<!--            <label class="switch">-->
<!--                <input type="checkbox">-->
<!--                <span class="slider round"></span>-->
<!--              </label>-->
<!--        </div>-->
<!--        <div class="">-->
                <!--<img src="{{asset('assets/img/dollar.webp')}}" alt="" width="40px" >-->
<!--                <span>V.I.P</span>-->
<!--            </div>-->
          <!-- <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Event Title"> -->
<!--        </div>-->
        
<!--      </div>-->
<!--            </div>-->
<!--          </div>-->
          <!---->
        <!--  <div class="col-sm-12">-->
        <!--      <div class="row">-->
        
        <!--    <div style="width:48%;" class="col-sm-6 d-flex p-2">-->
        <!--        <div style="border:1px solid #696cff;width:100%;border-radius:10px;">-->
        <!--        <div style="width:100%">-->
            <!--<label class="form-label" for="plContact">Standard Ticket</label>-->
           
        <!--    <div style="display: flex;justify-content: center; align-items: center;height:50px;" class="">-->
        <!--    <h1 style=" display: contents;" class="form-label d-contents">Standard Ticket</h1>-->
        <!--          <div style="" class="toggle-btn ">-->
        <!--    <label class="switch">-->
        <!--        <input type="checkbox">-->
        <!--        <span class="slider round"></span>-->
        <!--      </label>-->
        <!--</div>-->
        <!--<input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">-->
        <!--<div style="display: flex;justify-content: center; align-items: center" class="form-check form-switch ">-->
        <!--  <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">-->
    
        <!--</div>-->
        <!--</div>-->
      
        <!--</div>-->
        <!--</div>-->
        <!--</div>-->
        <!--       <div  style="width:48%;"  class="col-sm-6 d-flex p-2">-->
        <!--           <div style="border:1px solid #696cff;width:100%;border-radius:10px;">-->
        <!--           <div  style="width:100%;">-->
            <!--<label class="form-label" for="plContact">Standard Ticket</label>-->
           
        <!--    <div style="display: flex;justify-content: center;align-items: center;height:50px;";>-->
        <!--    <h1 style=" display: contents;" class="form-label d-contents">VIP Ticket</h1>-->
                
        <!--<div style="" class="toggle-btn">-->
                 
            
        <!--    <label class="switch">-->
        <!--        <input type="checkbox">-->
        <!--        <span class="slider round"></span>-->
        <!--      </label>-->
        <!--</div>-->
        <!--<div style="display: flex;justify-content: center; align-items: center" class="form-check form-switch ">-->
        <!--  <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">-->
    
        <!--</div>-->
        <!--</div>-->
        <!--</div>-->
        <!--</div>-->
        <!--</div>-->
        <!--</div>-->
        
        <!--  </div>-->
            <!--<hr>-->
            <div class="row">
       
        
        <!--babu bhaiya-->
        <div class="col-sm-6 mb-4">
    <div class="card ">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2">Standard Ticket</h5>
        <!--<div class="dropdown">-->
        <!--  <button class="btn p-0" type="button" id="upgradePlanCard" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
        <!--    <i class="bx bx-dots-vertical-rounded"></i>-->
        <!--  </button>-->
        <!--  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="upgradePlanCard" style="">-->
        <!--    <a class="dropdown-item" href="javascript:void(0);">Select All</a>-->
        <!--    <a class="dropdown-item" href="javascript:void(0);">Refresh</a>-->
        <!--    <a class="dropdown-item" href="javascript:void(0);">Share</a>-->
        <!--  </div>-->
        <!--</div>-->
        <div style="display: flex;justify-content: center; align-items: center" class="form-check form-switch ">
          <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">
    
        </div>
      </div>
      <div class="card-body">
        <!--<p class="mb-4">Please make the payment to start enjoying all the features of our premium plan as soon as possible.</p>-->
        <!--<div class="d-flex border-primary p-2 border rounded mb-4">-->
        <!--  <div class="avatar flex-shrink-0 me-3">-->
        <!--    <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/icons/unicons/briefcase.png" alt="User" class="rounded">-->
        <!--  </div>-->
        <!--  <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">-->
            <!--<div class="me-2">-->
            <!--  <p class="mb-0">Business</p>-->
            <!--  <a href="javascript:void(0)" class="small" data-bs-target="#upgradePlanModal" data-bs-toggle="modal">Upgrade Plan</a>-->
            <!--</div>-->
            <!--<div class="user-progress">-->
            <!--  <div class="d-flex justify-content-center">-->
            <!--    <sup class="mt-3 mb-0 me-1">$</sup>-->
            <!--    <h3 class="mb-0">2,124</h3>-->
            <!--    <sub class="mt-auto mb-2"> /Year</sub>-->
            <!--  </div>-->
            <!--</div>-->
        <!--  </div>-->
        <!--</div>-->
        <form id="paymentDetailsForm" onsubmit="return false" class="pt-2">
          <h6 class="mb-4">Options</h6>
          <div class="d-flex mb-4">
            <div class="me-3">
              <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/icons/payments/visa-light.png" alt="Visa" class="img-fluid w-px-50 h-px-30" data-app-light-img="icons/payments/visa-light.png" data-app-dark-img="icons/payments/visa-dark.png">
            </div>
            <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
              <div class="d-flex flex-column">
                <h6 class="mb-0">Seat</h6>
                <small class="text-muted">8562 xxxx xxxx 4563</small>
              </div>
              <div class="w-px-75">
                <input type="text" class="form-control cvv-code-payment" maxlength="3" placeholder="CVV">
              </div>
            </div>
          </div>
          <div class="d-flex mb-4">
            <div class="me-3">
              <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/icons/payments/master-light.png" class="img-fluid w-px-50 h-px-30" alt="MasterCard" data-app-light-img="icons/payments/master-light.png" data-app-dark-img="icons/payments/master-dark.png">
            </div>
            <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
              <div class="d-flex flex-column">
                <h6 class="mb-0">Price Adult</h6>
                <small class="text-muted">18 Years</small>
              </div>
              <div class="w-px-75">
                <input type="text" class="form-control cvv-code-payment" maxlength="3" placeholder="CVV">
              </div>
            </div>
          </div>
          
           <div class="d-flex mb-4">
            <div class="me-3">
              <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/icons/payments/master-light.png" class="img-fluid w-px-50 h-px-30" alt="MasterCard" data-app-light-img="icons/payments/master-light.png" data-app-dark-img="icons/payments/master-dark.png">
            </div>
            <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
              <div class="d-flex flex-column">
                <h6 class="mb-0">Price Kids</h6>
                <small class="text-muted">15 Years</small>
              </div>
              <div class="w-px-75">
                <input type="text" class="form-control cvv-code-payment" maxlength="3" placeholder="CVV">
              </div>
            </div>
          </div>
           <div class="d-flex mb-4">
            <div class="me-3">
              <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/icons/payments/master-light.png" class="img-fluid w-px-50 h-px-30" alt="MasterCard" data-app-light-img="icons/payments/master-light.png" data-app-dark-img="icons/payments/master-dark.png">
            </div>
            <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
              <div class="d-flex flex-column">
                <h6 class="mb-0">Price Kids</h6>
                <small class="text-muted">15 Years</small>
              </div>
              <div class="w-px-75">
                <input type="text" class="form-control cvv-code-payment" maxlength="3" placeholder="CVV">
              </div>
            </div>
          </div>
          <!--<a href="javascript:;" class="fw-medium d-block my-2" data-bs-toggle="modal" data-bs-target="#addNewCCModal"> Add Payment Method </a>-->
          <!--<div class="col-12 mb-4">-->
          <!--  <input id="addEmail" name="addEmail" class="form-control" type="text" placeholder="Email Address">-->
          <!--</div>-->
          <!--<div class="col-12 text-center">-->
          <!--  <button type="submit" class="btn btn-primary w-100 d-grid">Process to payment</button>-->
          <!--</div>-->
        </form>
      </div>
    </div>
  </div>
        
        <!--babu bhaiya end-->
   
<!--babu bhaiya 2-->
       <div class="col-sm-6 mb-4">
    <div class="card">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2">VIP Ticket</h5>
        <!--<div class="dropdown">-->
        <!--  <button class="btn p-0" type="button" id="upgradePlanCard" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
        <!--    <i class="bx bx-dots-vertical-rounded"></i>-->
        <!--  </button>-->
        <!--  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="upgradePlanCard" style="">-->
        <!--    <a class="dropdown-item" href="javascript:void(0);">Select All</a>-->
        <!--    <a class="dropdown-item" href="javascript:void(0);">Refresh</a>-->
        <!--    <a class="dropdown-item" href="javascript:void(0);">Share</a>-->
        <!--  </div>-->
        <!--</div>-->
        <div style="display: flex;justify-content: center; align-items: center" class="form-check form-switch ">
          <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">
    
        </div>
      </div>
      <div class="card-body">
        <!--<p class="mb-4">Please make the payment to start enjoying all the features of our premium plan as soon as possible.</p>-->
        <!--<div class="d-flex border-primary p-2 border rounded mb-4">-->
        <!--  <div class="avatar flex-shrink-0 me-3">-->
        <!--    <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/icons/unicons/briefcase.png" alt="User" class="rounded">-->
        <!--  </div>-->
        <!--  <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">-->
            <!--<div class="me-2">-->
            <!--  <p class="mb-0">Business</p>-->
            <!--  <a href="javascript:void(0)" class="small" data-bs-target="#upgradePlanModal" data-bs-toggle="modal">Upgrade Plan</a>-->
            <!--</div>-->
            <!--<div class="user-progress">-->
            <!--  <div class="d-flex justify-content-center">-->
            <!--    <sup class="mt-3 mb-0 me-1">$</sup>-->
            <!--    <h3 class="mb-0">2,124</h3>-->
            <!--    <sub class="mt-auto mb-2"> /Year</sub>-->
            <!--  </div>-->
            <!--</div>-->
        <!--  </div>-->
        <!--</div>-->
        <form id="paymentDetailsForm" onsubmit="return false" class="">
          <h6 class="mb-4">Options</h6>
          <div class="d-flex mb-4">
            <div class="me-3">
              <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/icons/payments/visa-light.png" alt="Visa" class="img-fluid w-px-50 h-px-30" data-app-light-img="icons/payments/visa-light.png" data-app-dark-img="icons/payments/visa-dark.png">
            </div>
            <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
              <div class="d-flex flex-column">
                <h6 class="mb-0">Seat</h6>
                <small class="text-muted">8562 xxxx xxxx 4563</small>
              </div>
              <div class="w-px-75">
                <input type="text" class="form-control cvv-code-payment" maxlength="3" placeholder="CVV">
              </div>
            </div>
          </div>
          <div class="d-flex mb-4">
            <div class="me-3">
              <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/icons/payments/master-light.png" class="img-fluid w-px-50 h-px-30" alt="MasterCard" data-app-light-img="icons/payments/master-light.png" data-app-dark-img="icons/payments/master-dark.png">
            </div>
            <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
              <div class="d-flex flex-column">
                <h6 class="mb-0">Price Adult</h6>
                <small class="text-muted">18 Years</small>
              </div>
              <div class="w-px-75">
                <input type="text" class="form-control cvv-code-payment" maxlength="3" placeholder="CVV">
              </div>
            </div>
          </div>
          
           <div class="d-flex mb-4">
            <div class="me-3">
              <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/icons/payments/master-light.png" class="img-fluid w-px-50 h-px-30" alt="MasterCard" data-app-light-img="icons/payments/master-light.png" data-app-dark-img="icons/payments/master-dark.png">
            </div>
            <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
              <div class="d-flex flex-column">
                <h6 class="mb-0">Price Kids</h6>
                <small class="text-muted">15 Years</small>
              </div>
              <div class="w-px-75">
                <input type="text" class="form-control cvv-code-payment" maxlength="3" placeholder="CVV">
              </div>
            </div>
          </div>
           <div class="d-flex mb-4">
            <div class="me-3">
              <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/icons/payments/master-light.png" class="img-fluid w-px-50 h-px-30" alt="MasterCard" data-app-light-img="icons/payments/master-light.png" data-app-dark-img="icons/payments/master-dark.png">
            </div>
            <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
              <div class="d-flex flex-column">
                <h6 class="mb-0">Price Kids</h6>
                <small class="text-muted">15 Years</small>
              </div>
              <div class="w-px-75">
                <input type="text" class="form-control cvv-code-payment" maxlength="3" placeholder="CVV">
              </div>
            </div>
          </div>
          <!--<a href="javascript:;" class="fw-medium d-block my-2" data-bs-toggle="modal" data-bs-target="#addNewCCModal"> Add Payment Method </a>-->
          <!--<div class="col-12 mb-4">-->
          <!--  <input id="addEmail" name="addEmail" class="form-control" type="text" placeholder="Email Address">-->
          <!--</div>-->
          <!--<div class="col-12 text-center">-->
          <!--  <button type="submit" class="btn btn-primary w-100 d-grid">Process to payment</button>-->
          <!--</div>-->
        </form>
      </div>
    </div>
  </div>
<!--babu bhaiya 2 end-->
            </div>
          
          <br>
          <!--addd new cards-->
        <!--  <div style=background:white; class="col-sm-12">-->
        <!--  <div class="card-body">-->
        <!--    <div class="report-list">-->
        <!--      <div class="report-list-item rounded-2 mb-3">-->
        <!--        <div class="d-flex align-items-start">-->
        <!--          <div class="report-list-icon shadow-sm me-2">-->
        <!--            <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/svg/icons/paypal-icon.svg" width="22" height="22" alt="Paypal">-->
        <!--          </div>-->
        <!--          <div class="d-flex justify-content-between align-items-end w-100 flex-wrap gap-2">-->
                      
        <!--            <div class="d-flex flex-column">-->
        <!--              <span>Income</span>-->
        <!--              <h5 class="mb-0">$42,845</h5>-->
        <!--            </div>-->
                    
        <!--            <div style="padding-left: 550px;" class="toggle-btn">-->
        <!--          <span>Free</span>-->
            
        <!--    <label class="switch">-->
        <!--        <input type="checkbox">-->
        <!--        <span class="slider round"></span>-->
        <!--      </label>-->
        <!--</div>-->
        <!--<div style="display: flex;justify-content: center; align-items: center;padding-left: 610px;" class="form-check form-switch mb-2">-->
        <!--  <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">-->
   
        <!--</div>-->
        <!--            <small class="text-success">+2.34k</small>-->
        <!--          </div>-->
        <!--        </div>-->
        <!--      </div>-->
              <!--<div class="report-list-item rounded-2 mb-3">-->
              <!--  <div class="d-flex align-items-start">-->
              <!--    <div class="report-list-icon shadow-sm me-2">-->
              <!--      <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/svg/icons/shopping-bag-icon.svg" width="22" height="22" alt="Shopping Bag">-->
              <!--    </div>-->
              <!--    <div class="d-flex justify-content-between align-items-end w-100 flex-wrap gap-2">-->
              <!--      <div class="d-flex flex-column">-->
              <!--        <span>Expense</span>-->
              <!--        <h5 class="mb-0">$38,658</h5>-->
              <!--      </div>-->
              <!--      <small class="text-danger">-1.15k</small>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--</div>-->
        <!--      <div class="report-list-item rounded-2">-->
        <!--        <div class="d-flex align-items-start">-->
        <!--          <div class="report-list-icon shadow-sm me-2">-->
                    <!--<img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/svg/icons/wallet-icon.svg" width="22" height="22" alt="Wallet">-->
        <!--          </div>-->
                  <!--<div class="d-flex justify-content-between align-items-end w-100 flex-wrap gap-2">-->
                  <!--  <div class="d-flex flex-column">-->
                  <!--    <span>Profit</span>-->
                  <!--    <h5 class="mb-0">$18,220</h5>-->
                  <!--  </div>-->
                  <!--  <small class="text-success">+1.35k</small>-->
                  <!--</div>-->
        <!--        </div>-->
        <!--      </div>-->
        <!--    </div>-->
        <!--  </div>-->
        <!--  </div>-->
          <!--addd new cards-->
          
          
          
        
         
        
          <!--addd-->
          
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev" onclick="nextStep('step3', 'step2')"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
              <span class="align-middle d-sm-inline-block d-none">Previous</span>
            </button>
            <!--<button class="btn btn-primary btn-next"  onclick="nextStep('step1', 'step2')"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>-->
            
            <button type="button" class="btn btn-primary btn-next" onclick="nextStep('step3', 'step4')" >Next</button>
          </div>
        </div>
      </div>

      <!-- Property Details -->
      <div id="property-details" class="content fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-12">
            <div class="row">
              <div class="col-xl mb-xl-0 mb-2">
                <div class="form-check custom-option custom-option-icon checked">
                  <label class="form-check-label custom-option-content" for="customRadioSell">
                    <span class="custom-option-body">
                      <i class="bx bx-home"></i>
                      <span class="custom-option-title">Sale the property</span>
                      <small>Post your property for sale.<br> Unlimited free listing.</small>
                    </span>
                    <input name="plPropertySaleRent" class="form-check-input" type="radio" value="1" id="customRadioSell" checked="">
                  </label>
                </div>
              </div>
              <div class="col-xl mb-xl-0 mb-2">
                <div class="form-check custom-option custom-option-icon">
                  <label class="form-check-label custom-option-content" for="customRadioRent">
                    <span class="custom-option-body">
                      <i class="bx bx-wallet"></i>
                      <span class="custom-option-title">Rent the property</span>
                      <small>Post your property for rent.<br> Unlimited free listing.</small>
                    </span>
                    <input name="plPropertySaleRent" class="form-check-input" type="radio" value="2" id="customRadioRent">
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 fv-plugins-icon-container">
            <label class="form-label" for="plPropertyType">Property Type</label>
            <div class="position-relative"><select id="plPropertyType" name="plPropertyType" class="select2 form-select select2-hidden-accessible" data-allow-clear="true" data-select2-id="plPropertyType" tabindex="-1" aria-hidden="true">
              <option value="" data-select2-id="4">Select Property Type</option>
              <option value="10002">Flat/ Apartment</option>
              <option value="10001">Residential House</option>
              <option value="10017">Villa</option>
              <option value="10003">Builder Floor Apartment</option>
              <option value="10000">Residential Land/ Plot</option>
              <option value="10021">Penthouse</option>
              <option value="10022">Studio Apartment</option>
            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="3" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-plPropertyType-container"><span class="select2-selection__rendered" id="select2-plPropertyType-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select property type</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
          <div class="col-sm-6 fv-plugins-icon-container">
            <label class="form-label" for="plZipCode">Zip Code</label>
            <input type="number" id="plZipCode" name="plZipCode" class="form-control" placeholder="99950">
          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
          <div class="col-sm-6">
            <label class="form-label" for="plCountry">Country</label>
            <div class="position-relative"><select id="plCountry" name="plCountry" class="select2 form-select select2-hidden-accessible" data-allow-clear="true" data-select2-id="plCountry" tabindex="-1" aria-hidden="true">
              <option value="" data-select2-id="2">Select</option>
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
            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-plCountry-container"><span class="select2-selection__rendered" id="select2-plCountry-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select country</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plState">State</label>
            <input type="text" id="plState" name="plState" class="form-control" placeholder="California">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plCity">City</label>
            <input type="text" id="plCity" name="plCity" class="form-control" placeholder="Los Angeles">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plLandmark">Landmark</label>
            <input type="text" id="plLandmark" name="plLandmark" class="form-control" placeholder="Nr. Hard Rock Cafe">
          </div>
          <div class="col-lg-12">
            <label class="form-label" for="plAddress">Address</label>
            <textarea id="plAddress" name="plAddress" class="form-control" rows="2" placeholder="12, Business Park"></textarea>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Property Features -->
      <div id="property-features" class="content fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-sm-6">
            <label class="form-label d-block" for="plBedrooms">Bedrooms</label>
            <input type="number" id="plBedrooms" name="plBedrooms" class="form-control" placeholder="3">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plFloorNo">Floor No</label>
            <input type="number" id="plFloorNo" name="plFloorNo" class="form-control" placeholder="12">
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plBathrooms">Bathrooms</label>
            <input type="number" id="plBathrooms" name="plBathrooms" class="form-control" placeholder="4">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plFurnishedStatus">Furnished Status</label>
            <select id="plFurnishedStatus" name="plFurnishedStatus" class="form-select">
              <option selected="" disabled="" value="">Select furnished status </option>
              <option value="1">Fully furnished</option>
              <option value="2">Furnished</option>
              <option value="3">Semi furnished</option>
              <option value="4">Unfurnished</option>
            </select>
          </div>
          <div class="col-lg-12">
            <label class="form-label" for="plFurnishingDetails">Furnishing Details</label>
            <tags class="tagify  form-control" tabindex="-1">
            <tag title="Fridge" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="Fridge"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">Fridge</span></div></tag><tag title="AC" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="AC"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">AC</span></div></tag><tag title="TV" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="TV"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">TV</span></div></tag><tag title="WiFi" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="WiFi"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">WiFi</span></div></tag><span contenteditable="" tabindex="0" data-placeholder="select options" aria-placeholder="select options" class="tagify__input" role="textbox" aria-autocomplete="both" aria-multiline="false"></span>
                ​
        </tags><input id="plFurnishingDetails" name="plFurnishingDetails" class="form-control" placeholder="select options" value="Fridge, AC, TV, WiFi" tabindex="-1">
          </div>
          <div class="col-sm-6">
            <label class="form-label">Is there any common area?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plCommonAreaRadio" id="plCommonAreaRadioYes" checked="">
              <label class="form-check-label" for="plCommonAreaRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plCommonAreaRadio" id="plCommonAreaRadioNo">
              <label class="form-check-label" for="plCommonAreaRadioNo">No</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Is there any attached balcony?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plAttachedBalconyRadio" id="plAttachedBalconyRadioYes" checked="">
              <label class="form-check-label" for="plAttachedBalconyRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plAttachedBalconyRadio" id="plAttachedBalconyRadioNo">
              <label class="form-check-label" for="plAttachedBalconyRadioNo">No</label>
            </div>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Property Area -->
      <div id="property-area" class="content fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-sm-6">
            <label class="form-label d-block" for="plTotalArea">Total Area</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plTotalArea" name="plTotalArea" placeholder="1000" aria-describedby="pl-total-area">
              <span class="input-group-text" id="pl-total-area">sq-ft</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plCarpetArea">Carpet Area</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plCarpetArea" name="plCarpetArea" placeholder="800" aria-describedby="pl-carpet-area">
              <span class="input-group-text" id="pl-carpet-area">sq-ft</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plPlotArea">Plot Area</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plPlotArea" name="plPlotArea" placeholder="800" aria-describedby="pl-plot-area">
              <span class="input-group-text" id="pl-plot-area">sq-yd</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plAvailableFrom">Available From</label>
            <input type="text" id="plAvailableFrom" name="plAvailableFrom" class="form-control flatpickr flatpickr-input" placeholder="YYYY-MM-DD" readonly="readonly">
          </div>
          <div class="col-sm-6">
            <label class="form-label">Possession Status</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plPossessionStatus" id="plUnderConstruction" checked="">
              <label class="form-check-label" for="plUnderConstruction">Under Construction</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plPossessionStatus" id="plReadyToMoveRadio">
              <label class="form-check-label" for="plReadyToMoveRadio">Ready to Move</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Transaction Type</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plTransectionType" id="plNewProperty" checked="">
              <label class="form-check-label" for="plNewProperty">New Property</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plTransectionType" id="plResaleProperty">
              <label class="form-check-label" for="plResaleProperty">Resale</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Is Property Facing Main Road?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plRoadFacingRadio" id="plRoadFacingRadioYes" checked="">
              <label class="form-check-label" for="plRoadFacingRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plRoadFacingRadio" id="plRoadFacingRadioNo">
              <label class="form-check-label" for="plRoadFacingRadioNo">No</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Gated Colony?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plGatedColonyRadio" id="plGatedColonyRadioYes" checked="">
              <label class="form-check-label" for="plGatedColonyRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plGatedColonyRadio" id="plGatedColonyRadioNo">
              <label class="form-check-label" for="plGatedColonyRadioNo">No</label>
            </div>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="align-middle d-sm-inline-block " onclick="prevStep('step3', 'step2')">Previous</span></button>
            <!--<span class="align-middle d-sm-inline-block " onclick="prevStep('step2', 'step1')">Previous</span>-->
            <button type="button" class="btn btn-primary btn-next" onclick="nextStep('step3','step4')">Next</button>
            <!--<button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>-->
          </div>
        </div>
      </div>

      <!-- Price Details -->
      <div id="price-details" class="content fv-plugins-bootstrap5 fv-plugins-framework">
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
              <option value="1" selected="">Monthly</option>
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
              <input class="form-check-input" type="radio" name="plShowPriceRadio" id="plNagotiablePrice" checked="">
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
              <label class="form-check-label" for="plOtherCharges">Stamp Duty &amp; Registration charges excluded.</label>
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
            <br>
            <!--<button type="button" onclick="prevStep('step3', 'step2')">Previous</button>-->
            <!--<button type="submit">Submit</button>-->
        </div>
        
        
        
        
        
        
     
     
  
  
  
  
  
  




   <!--step 4-->
        <div class="stepnew" id="step4">
               <div id="wizard-property-listing" class="bs-stepper vertical mt-2 linear">
 <div class="bs-stepper-header">
            <button type="button" class="btn btn-primary btn-next">Add new Concerts</button>
            <br>
    <div class="step " data-target="#personal-details">
      <button type="button" class="step-trigger" aria-selected="false">
        <span class="bs-stepper-circle">
                   
          <i class="bx bx-user"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Events Details</span>
          <span class="bs-stepper-subtitle">Title Location</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <div class="step" data-target="#property-details">
      <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
        <span class="bs-stepper-circle">
          <i class="bx bx-home"></i>
        </span>
        <span class="bs-stepper-label">
            <span class="bs-stepper-title">Event Start</span>
          <span class="bs-stepper-subtitle">Date and Time</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <!--<div class="step " data-target="#property-features">-->
    <!--  <button type="button" class="step-trigger" aria-selected="true">-->
    <!--    <span class="bs-stepper-circle">-->
    <!--      <i class="bx bx-star"></i>-->
    <!--    </span>-->
    <!--   <span class="bs-stepper-label">-->
    <!--      <span class="bs-stepper-title">Tickets</span>-->
    <!--      <span class="bs-stepper-subtitle">Sale Tickets</span>-->
    <!--    </span>-->
    <!--  </button>-->
    <!--</div>-->
    <div class="line"></div>
    <div class="step active" data-target="#property-area">
      <button type="button" class="step-trigger" aria-selected="true" >
        <span class="bs-stepper-circle">
          <i class="bx bx-map"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Notifications</span>
          <span class="bs-stepper-subtitle">Add Notifications</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <div class="step" data-target="#price-details">
      <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
        <span class="bs-stepper-circle">
          <i class="bx bx-dollar"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Contact</span>
          <span class="bs-stepper-subtitle">Contact Person</span>
        </span>
      </button>
    </div>
  </div>
  <div class="bs-stepper-content">
    <form id="wizard-property-listing-form" onsubmit="return false">

      <!-- Personal Details -->
      <div id="personal-details" class="content active dstepper-block fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-12">
            <div class="row">
            <div class="d-flex justify-content-center align-items-center">
              <img src="{{asset('assets/img/servicehead.png')}}" width="230px" height="auto"> 
              </div>
              
      <!--       <div class="container" style="width:364px;">-->


      <!--  <input name="file1" type="file" class="dropify" data-height="100" />-->
      <!--</div>-->
      
   
             
            </div>
          </div>
        
              <div class="col-sm-12 fv-plugins-icon-container">
                  <div class="row">
                      <h4>Select Service</h4>
                       <div class="col-sm-6">
                       <div style="padding:10px;border:1px solid whitesmoke;border-radius: 0.375rem !important;border-color: #696cff !important;" class="">
                          
                         <div style="padding:10px" class="report-list-item rounded-2">
                <div class="d-flex align-items-start">
                  <div style="background-color: #fff;border-radius: 0.375rem;padding:10px;" class="report-list-icon shadow-sm me-2">
                    <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/svg/icons/paypal-icon.svg" width="22" height="22" alt="Paypal">
                  </div>
                  <div class="d-flex justify-content-between align-items-end w-100 flex-wrap gap-2">
                    <div class="d-flex flex-column">
                      <span>Income</span>
                      <h5 style="color:#696cff" class="mb-0">$42,845</h5>
                    </div>
                    <div class="user-progress">
              <div class="">
                  <!--add-->
                  <div style="display: flex;justify-content: center; align-items: center" class="form-check form-switch mb-2">
          <input class="form-check-input closetogglebtn" type="checkbox" id="flexSwitchCheckChecked " checked="">
    
        </div>
                  
                  <!--add-->
                <!--<sup class="mt-3 mb-0 me-1">$</sup>-->
                <!--<h3 class="mb-0">2,124</h3>-->
                <!--<sub class="mt-auto mb-2"> /Year</sub>-->
              </div>
            </div>
                    <!--<small class="text-success">+2.34k</small>-->
                  </div>
                </div>
              </div>
              
                       </div>
                       </div>
                         <div class="col-sm-6">
                          <div style="padding:10px;border:1px solid whitesmoke;border-radius: 0.375rem !important;border-color: #696cff !important;" class="">
                         <div style="padding:10px" class="report-list-item rounded-2 ">
                <div class="d-flex align-items-start">
                  <div style="background-color: #fff;border-radius: 0.375rem;padding:10px;" class="report-list-icon shadow-sm me-2">
                    <!--<img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/svg/icons/paypal-icon.svg" width="22ht" heig="22" alt="Paypal">-->
                    <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/svg/icons/shopping-bag-icon.svg" width="22" height="22" alt="Shopping Bag">
                  </div>
                  <div class="d-flex justify-content-between align-items-end w-100 flex-wrap gap-2">
                    <div class="d-flex flex-column">
                      <span>Expense</span>
                      <h5 style="color:#696cff" class="mb-0">$38,658</h5>
                    </div>
                    <div class="user-progress">
              <div class="">
                  <!--add-->
                  <div style="display: flex;justify-content: center; align-items: center" class="form-check form-switch mb-2">
          <input class="form-check-input closetogglebtn" type="checkbox" id="flexSwitchCheckChecked " checked="">
    
        </div>
                  
                  <!--add-->
                <!--<sup class="mt-3 mb-0 me-1">$</sup>-->
                <!--<h3 class="mb-0">2,124</h3>-->
                <!--<sub class="mt-auto mb-2"> /Year</sub>-->
              </div>
            </div>
                    <!--<small class="text-success">+2.34k</small>-->
                  </div>
                </div>
              </div>
                       </div>
                       </div>
                        <div class="col-sm-6 mt-2">
                          <div style="padding:10px;border:1px solid whitesmoke;border-radius: 0.375rem !important;border-color: #696cff !important;" class="">
                         <div style="padding:10px" class="report-list-item rounded-2 ">
                <div class="d-flex align-items-start">
                  <div style="background-color: #fff;border-radius: 0.375rem;padding:10px;" class="report-list-icon shadow-sm me-2">
                    <!--<img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/svg/icons/paypal-icon.svg" width="22" height="22" alt="Paypal">-->
                    <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/svg/icons/wallet-icon.svg" width="22" height="22" alt="Wallet">
                  </div>
                  <div class="d-flex justify-content-between align-items-end w-100 flex-wrap gap-2">
                    <div class="d-flex flex-column">
                      <span>Profit</span>
                      <h5 style="color:#696cff" class="mb-0">$18,220</h5>
                    </div>
                    <div class="user-progress">
              <div class="">
                  <!--add-->
                  <div style="display: flex;justify-content: center; align-items: center" class="form-check form-switch mb-2">
          <input class="form-check-input closetogglebtn" type="checkbox" id="flexSwitchCheckChecked " checked="">
    
        </div>
                  
                  <!--add-->
                <!--<sup class="mt-3 mb-0 me-1">$</sup>-->
                <!--<h3 class="mb-0">2,124</h3>-->
                <!--<sub class="mt-auto mb-2"> /Year</sub>-->
              </div>
            </div>
                    <!--<small class="text-success">+2.34k</small>-->
                  </div>
                </div>
              </div>
                       </div>
                       </div>
                       
      <!--                      <div  style="padding:10px;border:1px solid whitesmoke;" class="col-sm-6">-->
      <!--                     <div class="">-->
      <!-- <div class="input-group input-group-merge d-flex justify-content-between">-->
            
      <!--      <div class="start d-flex">-->
      <!--          <div class="">-->
      <!--          <img src="https://yekbun.hellodev.site/public//assets/img/soda.png" alt="" width="40px">-->
      <!--      </div>-->
      <!--      <div class="d-flex align-items-center">-->
      <!--     <strong class="">Free Drinks</strong> -->
           
      <!--  </div>-->
      <!--  </div>-->
        <!--<div class="toggle-btn mt-3 d-flex align-items-center">-->
        <!--    <label class="switch">-->
        <!--        <input type="checkbox">-->
        <!--        <span class="slider round"></span>-->
        <!--      </label>-->
        <!--</div>-->
      <!--  <div style="display: flex;justify-content: center; align-items: center" class="form-check form-switch mb-2">-->
      <!--    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">-->
    
      <!--  </div>-->
          <!-- <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Event Title"> -->
      <!--  </div>-->
        
      <!--</div>-->
      <!--                 </div>-->
                       
                       
                       
      <!--                      <div  style="padding:10px;border:1px solid whitesmoke;" class="col-sm-6">-->
      <!--                     <div class="">-->
      <!-- <div class="input-group input-group-merge d-flex justify-content-between">-->
            
      <!--      <div class="start d-flex">-->
      <!--          <div class="">-->
      <!--          <img src="https://yekbun.hellodev.site/public//assets/img/soda.png" alt="" width="40px">-->
      <!--      </div>-->
      <!--      <div class="d-flex align-items-center">-->
      <!--     <strong class="">Snack</strong> -->
           
      <!--  </div>-->
      <!--  </div>-->
        <!--<div class="toggle-btn mt-3 d-flex align-items-center">-->
        <!--    <label class="switch">-->
        <!--        <input type="checkbox">-->
        <!--        <span class="slider round"></span>-->
        <!--      </label>-->
        <!--</div>-->
      <!--  <div style="display: flex;justify-content: center; align-items: center" class="form-check form-switch mb-2">-->
      <!--    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">-->
    
      <!--  </div>-->
          <!-- <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Event Title"> -->
      <!--  </div>-->
        
      <!--</div>-->
      <!--                 </div>-->
                       
                       
                       
      <!--                      <div  style="padding:10px;border:1px solid whitesmoke;" class="col-sm-6">-->
      <!--                     <div class="">-->
      <!-- <div class="input-group input-group-merge d-flex justify-content-between">-->
            
      <!--      <div class="start d-flex">-->
      <!--          <div class="">-->
      <!--          <img src="https://yekbun.hellodev.site/public//assets/img/soda.png" alt="" width="40px">-->
      <!--      </div>-->
      <!--      <div class="d-flex align-items-center">-->
      <!--     <strong class="">Snack</strong> -->
           
      <!--  </div>-->
      <!--  </div>-->
        <!--<div class="toggle-btn mt-3 d-flex align-items-center">-->
        <!--    <label class="switch">-->
        <!--        <input type="checkbox">-->
        <!--        <span class="slider round"></span>-->
        <!--      </label>-->
        <!--</div>-->
      <!--  <div style="display: flex;justify-content: center; align-items: center" class="form-check form-switch mb-2">-->
      <!--    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">-->
    
      <!--  </div>-->
          <!-- <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Event Title"> -->
      <!--  </div>-->
        
      <!--</div>-->
      <!--                 </div>-->
                       
                       
                       
      <!--                      <div  style="padding:10px;border:1px solid whitesmoke;" class="col-sm-6">-->
      <!--                     <div class="">-->
      <!-- <div class="input-group input-group-merge d-flex justify-content-between">-->
            
      <!--      <div class="start d-flex">-->
      <!--          <div class="">-->
      <!--          <img src="https://yekbun.hellodev.site/public//assets/img/soda.png" alt="" width="40px">-->
      <!--      </div>-->
      <!--      <div class="d-flex align-items-center">-->
      <!--     <strong class="">Snack</strong> -->
           
      <!--  </div>-->
      <!--  </div>-->
        <!--<div class="toggle-btn mt-3 d-flex align-items-center">-->
        <!--    <label class="switch">-->
        <!--        <input type="checkbox">-->
        <!--        <span class="slider round"></span>-->
        <!--      </label>-->
        <!--</div>-->
      <!--  <div style="display: flex;justify-content: center; align-items: center" class="form-check form-switch mb-2">-->
      <!--    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">-->
    
      <!--  </div>-->
          <!-- <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Event Title"> -->
      <!--  </div>-->
        
      <!--</div>-->
      <!--                 </div>-->
      
      
  
      
      
                       
                  </div>
                 
        </div>
          
          <!--third start-->
          
        
        
        
  
          
         
          
          
          
          
          
           
         
          <div style="margin-top:200px" class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev" onclick="nextStep('step4', 'step2')"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
              <span class="align-middle d-sm-inline-block d-none">Previous</span>
            </button>
            <!--<button class="btn btn-primary btn-next"  onclick="nextStep('step1', 'step2')"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>-->
            
            <button type="button" class="btn btn-primary btn-next" onclick="nextStep('step4', 'step5')" >Next</button>
          </div>
       
      </div>

      <!-- Property Details -->
      <div id="property-details" class="content fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-12">
            <div class="row">
              <div class="col-xl mb-xl-0 mb-2">
                <div class="form-check custom-option custom-option-icon checked">
                  <label class="form-check-label custom-option-content" for="customRadioSell">
                    <span class="custom-option-body">
                      <i class="bx bx-home"></i>
                      <span class="custom-option-title">Sale the property</span>
                      <small>Post your property for sale.<br> Unlimited free listing.</small>
                    </span>
                    <input name="plPropertySaleRent" class="form-check-input" type="radio" value="1" id="customRadioSell" checked="">
                  </label>
                </div>
              </div>
              <div class="col-xl mb-xl-0 mb-2">
                <div class="form-check custom-option custom-option-icon">
                  <label class="form-check-label custom-option-content" for="customRadioRent">
                    <span class="custom-option-body">
                      <i class="bx bx-wallet"></i>
                      <span class="custom-option-title">Rent the property</span>
                      <small>Post your property for rent.<br> Unlimited free listing.</small>
                    </span>
                    <input name="plPropertySaleRent" class="form-check-input" type="radio" value="2" id="customRadioRent">
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 fv-plugins-icon-container">
            <label class="form-label" for="plPropertyType">Property Type</label>
            <div class="position-relative"><select id="plPropertyType" name="plPropertyType" class="select2 form-select select2-hidden-accessible" data-allow-clear="true" data-select2-id="plPropertyType" tabindex="-1" aria-hidden="true">
              <option value="" data-select2-id="4">Select Property Type</option>
              <option value="10002">Flat/ Apartment</option>
              <option value="10001">Residential House</option>
              <option value="10017">Villa</option>
              <option value="10003">Builder Floor Apartment</option>
              <option value="10000">Residential Land/ Plot</option>
              <option value="10021">Penthouse</option>
              <option value="10022">Studio Apartment</option>
            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="3" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-plPropertyType-container"><span class="select2-selection__rendered" id="select2-plPropertyType-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select property type</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
          <div class="col-sm-6 fv-plugins-icon-container">
            <label class="form-label" for="plZipCode">Zip Code</label>
            <input type="number" id="plZipCode" name="plZipCode" class="form-control" placeholder="99950">
          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
          <div class="col-sm-6">
            <label class="form-label" for="plCountry">Country</label>
            <div class="position-relative"><select id="plCountry" name="plCountry" class="select2 form-select select2-hidden-accessible" data-allow-clear="true" data-select2-id="plCountry" tabindex="-1" aria-hidden="true">
              <option value="" data-select2-id="2">Select</option>
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
            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-plCountry-container"><span class="select2-selection__rendered" id="select2-plCountry-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select country</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plState">State</label>
            <input type="text" id="plState" name="plState" class="form-control" placeholder="California">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plCity">City</label>
            <input type="text" id="plCity" name="plCity" class="form-control" placeholder="Los Angeles">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plLandmark">Landmark</label>
            <input type="text" id="plLandmark" name="plLandmark" class="form-control" placeholder="Nr. Hard Rock Cafe">
          </div>
          <div class="col-lg-12">
            <label class="form-label" for="plAddress">Address</label>
            <textarea id="plAddress" name="plAddress" class="form-control" rows="2" placeholder="12, Business Park"></textarea>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Property Features -->
      <div id="property-features" class="content fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-sm-6">
            <label class="form-label d-block" for="plBedrooms">Bedrooms</label>
            <input type="number" id="plBedrooms" name="plBedrooms" class="form-control" placeholder="3">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plFloorNo">Floor No</label>
            <input type="number" id="plFloorNo" name="plFloorNo" class="form-control" placeholder="12">
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plBathrooms">Bathrooms</label>
            <input type="number" id="plBathrooms" name="plBathrooms" class="form-control" placeholder="4">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plFurnishedStatus">Furnished Status</label>
            <select id="plFurnishedStatus" name="plFurnishedStatus" class="form-select">
              <option selected="" disabled="" value="">Select furnished status </option>
              <option value="1">Fully furnished</option>
              <option value="2">Furnished</option>
              <option value="3">Semi furnished</option>
              <option value="4">Unfurnished</option>
            </select>
          </div>
          <div class="col-lg-12">
            <label class="form-label" for="plFurnishingDetails">Furnishing Details</label>
            <tags class="tagify  form-control" tabindex="-1">
            <tag title="Fridge" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="Fridge"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">Fridge</span></div></tag><tag title="AC" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="AC"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">AC</span></div></tag><tag title="TV" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="TV"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">TV</span></div></tag><tag title="WiFi" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="WiFi"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">WiFi</span></div></tag><span contenteditable="" tabindex="0" data-placeholder="select options" aria-placeholder="select options" class="tagify__input" role="textbox" aria-autocomplete="both" aria-multiline="false"></span>
                ​
        </tags><input id="plFurnishingDetails" name="plFurnishingDetails" class="form-control" placeholder="select options" value="Fridge, AC, TV, WiFi" tabindex="-1">
          </div>
          <div class="col-sm-6">
            <label class="form-label">Is there any common area?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plCommonAreaRadio" id="plCommonAreaRadioYes" checked="">
              <label class="form-check-label" for="plCommonAreaRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plCommonAreaRadio" id="plCommonAreaRadioNo">
              <label class="form-check-label" for="plCommonAreaRadioNo">No</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Is there any attached balcony?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plAttachedBalconyRadio" id="plAttachedBalconyRadioYes" checked="">
              <label class="form-check-label" for="plAttachedBalconyRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plAttachedBalconyRadio" id="plAttachedBalconyRadioNo">
              <label class="form-check-label" for="plAttachedBalconyRadioNo">No</label>
            </div>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Property Area -->
      <div id="property-area" class="content fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-sm-6">
            <label class="form-label d-block" for="plTotalArea">Total Area</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plTotalArea" name="plTotalArea" placeholder="1000" aria-describedby="pl-total-area">
              <span class="input-group-text" id="pl-total-area">sq-ft</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plCarpetArea">Carpet Area</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plCarpetArea" name="plCarpetArea" placeholder="800" aria-describedby="pl-carpet-area">
              <span class="input-group-text" id="pl-carpet-area">sq-ft</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plPlotArea">Plot Area</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plPlotArea" name="plPlotArea" placeholder="800" aria-describedby="pl-plot-area">
              <span class="input-group-text" id="pl-plot-area">sq-yd</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plAvailableFrom">Available From</label>
            <input type="text" id="plAvailableFrom" name="plAvailableFrom" class="form-control flatpickr flatpickr-input" placeholder="YYYY-MM-DD" readonly="readonly">
          </div>
          <div class="col-sm-6">
            <label class="form-label">Possession Status</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plPossessionStatus" id="plUnderConstruction" checked="">
              <label class="form-check-label" for="plUnderConstruction">Under Construction</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plPossessionStatus" id="plReadyToMoveRadio">
              <label class="form-check-label" for="plReadyToMoveRadio">Ready to Move</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Transaction Type</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plTransectionType" id="plNewProperty" checked="">
              <label class="form-check-label" for="plNewProperty">New Property</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plTransectionType" id="plResaleProperty">
              <label class="form-check-label" for="plResaleProperty">Resale</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Is Property Facing Main Road?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plRoadFacingRadio" id="plRoadFacingRadioYes" checked="">
              <label class="form-check-label" for="plRoadFacingRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plRoadFacingRadio" id="plRoadFacingRadioNo">
              <label class="form-check-label" for="plRoadFacingRadioNo">No</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Gated Colony?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plGatedColonyRadio" id="plGatedColonyRadioYes" checked="">
              <label class="form-check-label" for="plGatedColonyRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plGatedColonyRadio" id="plGatedColonyRadioNo">
              <label class="form-check-label" for="plGatedColonyRadioNo">No</label>
            </div>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Price Details -->
      <div id="price-details" class="content fv-plugins-bootstrap5 fv-plugins-framework">
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
              <option value="1" selected="">Monthly</option>
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
              <input class="form-check-input" type="radio" name="plShowPriceRadio" id="plNagotiablePrice" checked="">
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
              <label class="form-check-label" for="plOtherCharges">Stamp Duty &amp; Registration charges excluded.</label>
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
            <br>
            <!--<button type="button" onclick="prevStep('step3', 'step2')">Previous</button>-->
            <!--<button type="submit">Submit</button>-->
        </div>
     <!--step 4 end-->
     
    
    </form>
    
      <div class="modal-footer">
        <!--<button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Open second modal</button>-->
      </div>
    </div>
  <!--step 4-->
  
  
  
  
  
  
  
   <!--step 5-->
     
     
      <div class="stepnew" id="step5">
            <div id="wizard-property-listing" class="bs-stepper vertical mt-2 linear">
 <div class="bs-stepper-header">
            <button type="button" class="btn btn-primary btn-next">Add new Concerts</button>
            <br>
    <div class="step " data-target="#personal-details">
      <button type="button" class="step-trigger" aria-selected="false" disabled="">
        <span class="bs-stepper-circle">
                   
          <i class="bx bx-user"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Events Details</span>
          <span class="bs-stepper-subtitle">Title Location</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <div class="step" data-target="#property-details">
      <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
        <span class="bs-stepper-circle">
          <i class="bx bx-home"></i>
        </span>
        <span class="bs-stepper-label">
            <span class="bs-stepper-title">Event Start</span>
          <span class="bs-stepper-subtitle">Date and Time</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <!--<div class="step" data-target="#property-features">-->
    <!--  <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">-->
    <!--    <span class="bs-stepper-circle">-->
    <!--      <i class="bx bx-star"></i>-->
    <!--    </span>-->
    <!--   <span class="bs-stepper-label">-->
    <!--      <span class="bs-stepper-title">Tickets</span>-->
    <!--      <span class="bs-stepper-subtitle">Sale Tickets</span>-->
    <!--    </span>-->
    <!--  </button>-->
    <!--</div>-->
    <div class="line"></div>
    <div class="step " data-target="#property-area">
      <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
        <span class="bs-stepper-circle">
          <i class="bx bx-map"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Notifications</span>
          <span class="bs-stepper-subtitle">Add Notifications</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <div class="step active" data-target="#price-details">
      <button type="button" class="step-trigger" aria-selected="true">
        <span class="bs-stepper-circle">
          <i class="bx bx-dollar"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Contact</span>
          <span class="bs-stepper-subtitle">Contact Person</span>
        </span>
      </button>
    </div>
  </div>
  <div class="bs-stepper-content">
    

      <!-- Personal Details -->
      <div  style="height:100%" id="personal-details" class="content active dstepper-block fv-plugins-bootstrap5 fv-plugins-framework">
        <div  style="height:100%" class="row g-3">
          <div class="col-12">
            <div class="row">
                 <div class="d-flex justify-content-center align-items-center">
              <img src="{{asset('assets/img/contacthead.png')}}" width="230px" height="auto"> 
              </div>
             
              
      <!--       <div class="container" style="width:364px;">-->


      <!--  <div class="dropify-wrapper" style="height: 114px;"><div class="dropify-message"><span class="file-icon"></span> <p>Drag and drop a file here or click</p><p class="dropify-error">Ooops, something wrong appended.</p></div><div class="dropify-loader"></div><div class="dropify-errors-container"><ul></ul></div><input name="file1" type="file" class="dropify" data-height="100"><button type="button" class="dropify-clear">Remove</button><div class="dropify-preview"><span class="dropify-render"></span><div class="dropify-infos"><div class="dropify-infos-inner"><p class="dropify-filename"><span class="file-icon"></span> <span class="dropify-filename-inner"></span></p><p class="dropify-infos-message">Drag and drop or click to replace</p></div></div></div></div>-->
      <!--</div>-->
      
   
          
            </div>
          </div>
        
              <div class="col-sm-12 fv-plugins-icon-container">
            <label class="form-label" for="plContact">First Name</label>
            <!--<div class="input-group input-group-merge">-->
             
            <!--  <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="First Name">-->
            <!--</div>-->
            <div class="input-group input-group-merge">
              <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
              <input type="text" class="form-control" id="basic-icon-default-fullname" placeholder="John Doe" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2">
            </div>
          </div>
          
            <div class="col-sm-12">
            <label class="form-label" for="plContact">Last Name</label>
            <!--<div class="input-group input-group-merge">-->
             
            <!--  <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Last Name">-->
            <!--</div>-->
            <div class="input-group input-group-merge">
              <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
              <input type="text" class="form-control" id="basic-icon-default-fullname" placeholder="Doe Watson" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2">
            </div>
          </div>
          
          
            <div class="col-sm-12">
            <label class="form-label" for="plContact">Mobile</label>
            <!--<div class="input-group input-group-merge">-->
             
            <!--  <input type="number" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Mobile Number">-->
            <!--</div>-->
            <!--<div class="input-group input-group-merge">-->
            <!--  <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-phone"></i></span>-->
            <!--  <input type="text" id="basic-icon-default-phone" class="form-control phone-mask" placeholder="658 799 8941" aria-label="658 799 8941" aria-describedby="basic-icon-default-phone2">-->
            <!--</div>-->
            <div class="input-group">
              <span class="input-group-text">US (+1)</span>
              <input type="text" id="phone-number-mask" class="form-control phone-number-mask" placeholder="202 555 0111">
            </div>
          </div>
          
         
          
          
          <!--<div class="col-sm-6">-->
          <!--       <label class="form-label" for="plContact">Select</label>-->
          <!--                              <select id="sendNotification" class="form-select" name="sendNotification">-->
          <!--                                  <option selected="">Country</option>-->
          <!--                                  <option>America</option>-->
          <!--                              </select>-->
          <!--                          </div>-->
          
          
          
          
          <!-- <div class="col-sm-6">-->
          <!--  <label class="form-label" for="plContact">Select</label>-->
          <!--  <div class="input-group input-group-merge">-->
             
          <!--    <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="City and ZipCode">-->
          <!--  </div>-->
          <!--</div>-->
          
          <!--  <div class="col-sm-6">-->
          <!--  <label class="form-label" for="plContact">Type</label>-->
          <!--  <div class="input-group input-group-merge">-->
             
          <!--    <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Address">-->
          <!--  </div>-->
          <!--</div>-->
          
          
        
          
          
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev" onclick="nextStep('step5', 'step4')" > <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
              <span class="align-middle d-sm-inline-block d-none">Previous</span>
            </button>
            <!--<button class="btn btn-primary btn-next"  onclick="nextStep('step1', 'step2')"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>-->
            
            <button type="button" class="btn btn-primary btn-next" onclick="nextStep('step4', 'step5')" >Submit</button>
          </div>
        </div>
      </div>

      <!-- Property Details -->
      <div id="property-details" class="content fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-12">
            <div class="row">
              <div class="col-xl mb-xl-0 mb-2">
                <div class="form-check custom-option custom-option-icon checked">
                  <label class="form-check-label custom-option-content" for="customRadioSell">
                    <span class="custom-option-body">
                      <i class="bx bx-home"></i>
                      <span class="custom-option-title">Sale the property</span>
                      <small>Post your property for sale.<br> Unlimited free listing.</small>
                    </span>
                    <input name="plPropertySaleRent" class="form-check-input" type="radio" value="1" id="customRadioSell" checked="">
                  </label>
                </div>
              </div>
              <div class="col-xl mb-xl-0 mb-2">
                <div class="form-check custom-option custom-option-icon">
                  <label class="form-check-label custom-option-content" for="customRadioRent">
                    <span class="custom-option-body">
                      <i class="bx bx-wallet"></i>
                      <span class="custom-option-title">Rent the property</span>
                      <small>Post your property for rent.<br> Unlimited free listing.</small>
                    </span>
                    <input name="plPropertySaleRent" class="form-check-input" type="radio" value="2" id="customRadioRent">
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 fv-plugins-icon-container">
            <label class="form-label" for="plPropertyType">Property Type</label>
            <div class="position-relative"><select id="plPropertyType" name="plPropertyType" class="select2 form-select select2-hidden-accessible" data-allow-clear="true" data-select2-id="plPropertyType" tabindex="-1" aria-hidden="true">
              <option value="" data-select2-id="4">Select Property Type</option>
              <option value="10002">Flat/ Apartment</option>
              <option value="10001">Residential House</option>
              <option value="10017">Villa</option>
              <option value="10003">Builder Floor Apartment</option>
              <option value="10000">Residential Land/ Plot</option>
              <option value="10021">Penthouse</option>
              <option value="10022">Studio Apartment</option>
            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="3" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-plPropertyType-container"><span class="select2-selection__rendered" id="select2-plPropertyType-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select property type</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
          <div class="col-sm-6 fv-plugins-icon-container">
            <label class="form-label" for="plZipCode">Zip Code</label>
            <input type="number" id="plZipCode" name="plZipCode" class="form-control" placeholder="99950">
          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
          <div class="col-sm-6">
            <label class="form-label" for="plCountry">Country</label>
            <div class="position-relative"><select id="plCountry" name="plCountry" class="select2 form-select select2-hidden-accessible" data-allow-clear="true" data-select2-id="plCountry" tabindex="-1" aria-hidden="true">
              <option value="" data-select2-id="2">Select</option>
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
            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-plCountry-container"><span class="select2-selection__rendered" id="select2-plCountry-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select country</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plState">State</label>
            <input type="text" id="plState" name="plState" class="form-control" placeholder="California">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plCity">City</label>
            <input type="text" id="plCity" name="plCity" class="form-control" placeholder="Los Angeles">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plLandmark">Landmark</label>
            <input type="text" id="plLandmark" name="plLandmark" class="form-control" placeholder="Nr. Hard Rock Cafe">
          </div>
          <div class="col-lg-12">
            <label class="form-label" for="plAddress">Address</label>
            <textarea id="plAddress" name="plAddress" class="form-control" rows="2" placeholder="12, Business Park"></textarea>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Property Features -->
      <div id="property-features" class="content fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-sm-6">
            <label class="form-label d-block" for="plBedrooms">Bedrooms</label>
            <input type="number" id="plBedrooms" name="plBedrooms" class="form-control" placeholder="3">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plFloorNo">Floor No</label>
            <input type="number" id="plFloorNo" name="plFloorNo" class="form-control" placeholder="12">
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plBathrooms">Bathrooms</label>
            <input type="number" id="plBathrooms" name="plBathrooms" class="form-control" placeholder="4">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plFurnishedStatus">Furnished Status</label>
            <select id="plFurnishedStatus" name="plFurnishedStatus" class="form-select">
              <option selected="" disabled="" value="">Select furnished status </option>
              <option value="1">Fully furnished</option>
              <option value="2">Furnished</option>
              <option value="3">Semi furnished</option>
              <option value="4">Unfurnished</option>
            </select>
          </div>
          <div class="col-lg-12">
            <label class="form-label" for="plFurnishingDetails">Furnishing Details</label>
            <tags class="tagify  form-control" tabindex="-1">
            <tag title="Fridge" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="Fridge"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">Fridge</span></div></tag><tag title="AC" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="AC"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">AC</span></div></tag><tag title="TV" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="TV"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">TV</span></div></tag><tag title="WiFi" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="WiFi"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">WiFi</span></div></tag><span contenteditable="" tabindex="0" data-placeholder="select options" aria-placeholder="select options" class="tagify__input" role="textbox" aria-autocomplete="both" aria-multiline="false"></span>
                &ZeroWidthSpace;
        </tags><input id="plFurnishingDetails" name="plFurnishingDetails" class="form-control" placeholder="select options" value="Fridge, AC, TV, WiFi" tabindex="-1">
          </div>
          <div class="col-sm-6">
            <label class="form-label">Is there any common area?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plCommonAreaRadio" id="plCommonAreaRadioYes" checked="">
              <label class="form-check-label" for="plCommonAreaRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plCommonAreaRadio" id="plCommonAreaRadioNo">
              <label class="form-check-label" for="plCommonAreaRadioNo">No</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Is there any attached balcony?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plAttachedBalconyRadio" id="plAttachedBalconyRadioYes" checked="">
              <label class="form-check-label" for="plAttachedBalconyRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plAttachedBalconyRadio" id="plAttachedBalconyRadioNo">
              <label class="form-check-label" for="plAttachedBalconyRadioNo">No</label>
            </div>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Property Area -->
      <div id="property-area" class="content fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-sm-6">
            <label class="form-label d-block" for="plTotalArea">Total Area</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plTotalArea" name="plTotalArea" placeholder="1000" aria-describedby="pl-total-area">
              <span class="input-group-text" id="pl-total-area">sq-ft</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plCarpetArea">Carpet Area</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plCarpetArea" name="plCarpetArea" placeholder="800" aria-describedby="pl-carpet-area">
              <span class="input-group-text" id="pl-carpet-area">sq-ft</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plPlotArea">Plot Area</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plPlotArea" name="plPlotArea" placeholder="800" aria-describedby="pl-plot-area">
              <span class="input-group-text" id="pl-plot-area">sq-yd</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plAvailableFrom">Available From</label>
            <input type="text" id="plAvailableFrom" name="plAvailableFrom" class="form-control flatpickr flatpickr-input" placeholder="YYYY-MM-DD" readonly="readonly">
          </div>
          <div class="col-sm-6">
            <label class="form-label">Possession Status</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plPossessionStatus" id="plUnderConstruction" checked="">
              <label class="form-check-label" for="plUnderConstruction">Under Construction</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plPossessionStatus" id="plReadyToMoveRadio">
              <label class="form-check-label" for="plReadyToMoveRadio">Ready to Move</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Transaction Type</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plTransectionType" id="plNewProperty" checked="">
              <label class="form-check-label" for="plNewProperty">New Property</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plTransectionType" id="plResaleProperty">
              <label class="form-check-label" for="plResaleProperty">Resale</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Is Property Facing Main Road?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plRoadFacingRadio" id="plRoadFacingRadioYes" checked="">
              <label class="form-check-label" for="plRoadFacingRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plRoadFacingRadio" id="plRoadFacingRadioNo">
              <label class="form-check-label" for="plRoadFacingRadioNo">No</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Gated Colony?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plGatedColonyRadio" id="plGatedColonyRadioYes" checked="">
              <label class="form-check-label" for="plGatedColonyRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plGatedColonyRadio" id="plGatedColonyRadioNo">
              <label class="form-check-label" for="plGatedColonyRadioNo">No</label>
            </div>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Price Details -->
      <div id="price-details" class="content fv-plugins-bootstrap5 fv-plugins-framework">
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
              <option value="1" selected="">Monthly</option>
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
              <input class="form-check-input" type="radio" name="plShowPriceRadio" id="plNagotiablePrice" checked="">
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
              <label class="form-check-label" for="plOtherCharges">Stamp Duty &amp; Registration charges excluded.</label>
            </div>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
            <button class="btn btn-success btn-submit btn-next">Submit</button>
          </div>
        </div>
      </div>
    
  </div>
</div>
            <br>
            <!--<button type="button" onclick="nextStep('step1', 'step2')">Next</button>-->
        </div>
     
     
     <!--step 5 end-->

<!--<button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Open first modal</button>-->
    
      <!--bootstrap modal1-->
      </div>
      
      <!--bottst 2-->

  
    <div class="modal fade" id="exampleModalToggleone" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
       <div style="" class="modal-header">
          <button type="button" class="btn btn-primary btn-next">Add new Concerts</button>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div style="margin:0;padding:0;" class="modal-body">
    <div id="wizard-property-listing" class="bs-stepper vertical mt-2 linear">
  <div class="bs-stepper-header">
    <div class="step active" data-target="#personal-details">
      <button type="button" class="step-trigger" aria-selected="true">
        <span class="bs-stepper-circle">
          <i class="bx bx-user"></i>
        </span>
        <span class="bs-stepper-label">
           <span class="bs-stepper-title">Events Details</span>
          <span class="bs-stepper-subtitle">Title/Location</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <div class="step" data-target="#property-details">
      <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
        <span class="bs-stepper-circle">
          <i class="bx bx-home"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Property Details</span>
          <span class="bs-stepper-subtitle">Property Type</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <div class="step" data-target="#property-features">
      <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
        <span class="bs-stepper-circle">
          <i class="bx bx-star"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Property Features</span>
          <span class="bs-stepper-subtitle">Bedrooms/Floor No</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <div class="step" data-target="#property-area">
      <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
        <span class="bs-stepper-circle">
          <i class="bx bx-map"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Property Area</span>
          <span class="bs-stepper-subtitle">Covered Area</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <div class="step" data-target="#price-details">
      <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
        <span class="bs-stepper-circle">
          <i class="bx bx-dollar"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Price Details</span>
          <span class="bs-stepper-subtitle">Expected Price</span>
        </span>
      </button>
    </div>
  </div>
  <div class="bs-stepper-content">
    <form id="wizard-property-listing-form" onsubmit="return false">

      <!-- Personal Details -->
      <div id="personal-details" class="content active dstepper-block fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-12">
            <div class="row">
              <!--<div class="col-md mb-md-0 mb-2">-->
              <!--  <div class="form-check custom-option custom-option-icon checked">-->
              <!--    <label class="form-check-label custom-option-content" for="customRadioBuilder">-->
              <!--      <span class="custom-option-body">-->
              <!--        <i class="bx bx-building-house"></i>-->
              <!--        <span class="custom-option-title">I am the Builder</span>-->
              <!--        <small>List property as Builder, list your project and get highest reach.</small>-->
              <!--      </span>-->
              <!--      <input name="plUserType" class="form-check-input" type="radio" value="1" id="customRadioBuilder" checked="">-->
              <!--    </label>-->
              <!--  </div>-->
              <!--</div>-->
              <!--<div class="col-md mb-md-0 mb-2">-->
              <!--  <div class="form-check custom-option custom-option-icon">-->
              <!--    <label class="form-check-label custom-option-content" for="customRadioOwner">-->
              <!--      <span class="custom-option-body">-->
              <!--        <i class="bx bx-crown"></i>-->
              <!--        <span class="custom-option-title"> I am the Owner </span>-->
              <!--        <small>Submit property as an Individual. Lease, Rent or Sell at the best price.</small>-->
              <!--      </span>-->
              <!--      <input name="plUserType" class="form-check-input" type="radio" value="2" id="customRadioOwner">-->
              <!--    </label>-->
              <!--  </div>-->
              <!--</div>-->
              
           <div class="container" style="width:364px;">


        <input name="file1" type="file" class="dropify" data-height="100" />
      </div>
   
              <!--<div class="col-md mb-md-0 mb-2">-->
              <!--  <div class="form-check custom-option custom-option-icon">-->
              <!--    <label class="form-check-label custom-option-content" for="customRadioBroker">-->
              <!--      <span class="custom-option-body">-->
              <!--        <i class="bx bx-briefcase-alt"></i>-->
              <!--        <span class="custom-option-title"> I am a Broker </span>-->
              <!--        <small>Earn highest commission by listing your clients properties at the best price.</small>-->
              <!--      </span>-->
              <!--      <input name="plUserType" class="form-check-input" type="radio" value="3" id="customRadioBroker">-->
              <!--    </label>-->
              <!--  </div>-->
              <!--</div>-->
            </div>
          </div>
          
            <div class="col-sm-6 fv-plugins-icon-container">
            <label class="form-label" for="plContact">Event Title</label>
            <div class="input-group input-group-merge">
             
              <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Event Title">
            </div>
          </div>
          
            <div class="col-sm-6">
            <label class="form-label" for="plContact">Describe</label>
            <div class="input-group input-group-merge">
             
              <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Input Text">
            </div>
          </div>
          
          
            <div class="col-sm-6">
            <label class="form-label" for="plContact">Location Name</label>
            <div class="input-group input-group-merge">
             
              <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Example Human Right Berlin">
            </div>
          </div>
          
         
          
          
          <div class="col-sm-6">
                 <label class="form-label" for="plContact">Select</label>
                                        <select id="sendNotification" class="form-select" name="sendNotification">
                                            <option selected="">Country</option>
                                            <option>America</option>
                                        </select>
                                    </div>
          
          
          
          
           <div class="col-sm-6">
            <label class="form-label" for="plContact">Select</label>
            <div class="input-group input-group-merge">
             
              <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="City and ZipCode">
            </div>
          </div>
          
            <div class="col-sm-6">
            <label class="form-label" for="plContact">Type</label>
            <div class="input-group input-group-merge">
             
              <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Address">
            </div>
          </div>
          
          
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-label-secondary btn-prev" disabled=""> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
              <span class="align-middle d-sm-inline-block d-none">Previous</span>
            </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Property Details -->
      <div id="property-details" class="content fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-12">
            <div class="row">
              <div class="col-xl mb-xl-0 mb-2">
                <div class="form-check custom-option custom-option-icon checked">
                  <label class="form-check-label custom-option-content" for="customRadioSell">
                    <span class="custom-option-body">
                      <i class="bx bx-home"></i>
                      <span class="custom-option-title">Sale the property</span>
                      <small>Post your property for sale.<br> Unlimited free listing.</small>
                    </span>
                    <input name="plPropertySaleRent" class="form-check-input" type="radio" value="1" id="customRadioSell" checked="">
                  </label>
                </div>
              </div>
              <div class="col-xl mb-xl-0 mb-2">
                <div class="form-check custom-option custom-option-icon">
                  <label class="form-check-label custom-option-content" for="customRadioRent">
                    <span class="custom-option-body">
                      <i class="bx bx-wallet"></i>
                      <span class="custom-option-title">Rent the property</span>
                      <small>Post your property for rent.<br> Unlimited free listing.</small>
                    </span>
                    <input name="plPropertySaleRent" class="form-check-input" type="radio" value="2" id="customRadioRent">
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 fv-plugins-icon-container">
            <label class="form-label" for="plPropertyType">Property Type</label>
            <div class="position-relative"><select id="plPropertyType" name="plPropertyType" class="select2 form-select select2-hidden-accessible" data-allow-clear="true" data-select2-id="plPropertyType" tabindex="-1" aria-hidden="true">
              <option value="" data-select2-id="4">Select Property Type</option>
              <option value="10002">Flat/ Apartment</option>
              <option value="10001">Residential House</option>
              <option value="10017">Villa</option>
              <option value="10003">Builder Floor Apartment</option>
              <option value="10000">Residential Land/ Plot</option>
              <option value="10021">Penthouse</option>
              <option value="10022">Studio Apartment</option>
            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="3" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-plPropertyType-container"><span class="select2-selection__rendered" id="select2-plPropertyType-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select property type</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
          <div class="col-sm-6 fv-plugins-icon-container">
            <label class="form-label" for="plZipCode">Zip Code</label>
            <input type="number" id="plZipCode" name="plZipCode" class="form-control" placeholder="99950">
          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
          <div class="col-sm-6">
            <label class="form-label" for="plCountry">Country</label>
            <div class="position-relative"><select id="plCountry" name="plCountry" class="select2 form-select select2-hidden-accessible" data-allow-clear="true" data-select2-id="plCountry" tabindex="-1" aria-hidden="true">
              <option value="" data-select2-id="2">Select</option>
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
            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-plCountry-container"><span class="select2-selection__rendered" id="select2-plCountry-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select country</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plState">State</label>
            <input type="text" id="plState" name="plState" class="form-control" placeholder="California">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plCity">City</label>
            <input type="text" id="plCity" name="plCity" class="form-control" placeholder="Los Angeles">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plLandmark">Landmark</label>
            <input type="text" id="plLandmark" name="plLandmark" class="form-control" placeholder="Nr. Hard Rock Cafe">
          </div>
          <div class="col-lg-12">
            <label class="form-label" for="plAddress">Address</label>
            <textarea id="plAddress" name="plAddress" class="form-control" rows="2" placeholder="12, Business Park"></textarea>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Property Features -->
      <div id="property-features" class="content fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-sm-6">
            <label class="form-label d-block" for="plBedrooms">Bedrooms</label>
            <input type="number" id="plBedrooms" name="plBedrooms" class="form-control" placeholder="3">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plFloorNo">Floor No</label>
            <input type="number" id="plFloorNo" name="plFloorNo" class="form-control" placeholder="12">
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plBathrooms">Bathrooms</label>
            <input type="number" id="plBathrooms" name="plBathrooms" class="form-control" placeholder="4">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plFurnishedStatus">Furnished Status</label>
            <select id="plFurnishedStatus" name="plFurnishedStatus" class="form-select">
              <option selected="" disabled="" value="">Select furnished status </option>
              <option value="1">Fully furnished</option>
              <option value="2">Furnished</option>
              <option value="3">Semi furnished</option>
              <option value="4">Unfurnished</option>
            </select>
          </div>
          <div class="col-lg-12">
            <label class="form-label" for="plFurnishingDetails">Furnishing Details</label>
            <tags class="tagify  form-control" tabindex="-1">
            <tag title="Fridge" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="Fridge"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">Fridge</span></div></tag><tag title="AC" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="AC"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">AC</span></div></tag><tag title="TV" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="TV"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">TV</span></div></tag><tag title="WiFi" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="WiFi"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">WiFi</span></div></tag><span contenteditable="" tabindex="0" data-placeholder="select options" aria-placeholder="select options" class="tagify__input" role="textbox" aria-autocomplete="both" aria-multiline="false"></span>
                ​
        </tags><input id="plFurnishingDetails" name="plFurnishingDetails" class="form-control" placeholder="select options" value="Fridge, AC, TV, WiFi" tabindex="-1">
          </div>
          <div class="col-sm-6">
            <label class="form-label">Is there any common area?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plCommonAreaRadio" id="plCommonAreaRadioYes" checked="">
              <label class="form-check-label" for="plCommonAreaRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plCommonAreaRadio" id="plCommonAreaRadioNo">
              <label class="form-check-label" for="plCommonAreaRadioNo">No</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Is there any attached balcony?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plAttachedBalconyRadio" id="plAttachedBalconyRadioYes" checked="">
              <label class="form-check-label" for="plAttachedBalconyRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plAttachedBalconyRadio" id="plAttachedBalconyRadioNo">
              <label class="form-check-label" for="plAttachedBalconyRadioNo">No</label>
            </div>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Property Area -->
      <div id="property-area" class="content fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-sm-6">
            <label class="form-label d-block" for="plTotalArea">Total Area</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plTotalArea" name="plTotalArea" placeholder="1000" aria-describedby="pl-total-area">
              <span class="input-group-text" id="pl-total-area">sq-ft</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plCarpetArea">Carpet Area</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plCarpetArea" name="plCarpetArea" placeholder="800" aria-describedby="pl-carpet-area">
              <span class="input-group-text" id="pl-carpet-area">sq-ft</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plPlotArea">Plot Area</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plPlotArea" name="plPlotArea" placeholder="800" aria-describedby="pl-plot-area">
              <span class="input-group-text" id="pl-plot-area">sq-yd</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plAvailableFrom">Available From</label>
            <input type="text" id="plAvailableFrom" name="plAvailableFrom" class="form-control flatpickr flatpickr-input" placeholder="YYYY-MM-DD" readonly="readonly">
          </div>
          <div class="col-sm-6">
            <label class="form-label">Possession Status</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plPossessionStatus" id="plUnderConstruction" checked="">
              <label class="form-check-label" for="plUnderConstruction">Under Construction</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plPossessionStatus" id="plReadyToMoveRadio">
              <label class="form-check-label" for="plReadyToMoveRadio">Ready to Move</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Transaction Type</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plTransectionType" id="plNewProperty" checked="">
              <label class="form-check-label" for="plNewProperty">New Property</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plTransectionType" id="plResaleProperty">
              <label class="form-check-label" for="plResaleProperty">Resale</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Is Property Facing Main Road?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plRoadFacingRadio" id="plRoadFacingRadioYes" checked="">
              <label class="form-check-label" for="plRoadFacingRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plRoadFacingRadio" id="plRoadFacingRadioNo">
              <label class="form-check-label" for="plRoadFacingRadioNo">No</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Gated Colony?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plGatedColonyRadio" id="plGatedColonyRadioYes" checked="">
              <label class="form-check-label" for="plGatedColonyRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plGatedColonyRadio" id="plGatedColonyRadioNo">
              <label class="form-check-label" for="plGatedColonyRadioNo">No</label>
            </div>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Price Details -->
      <div id="price-details" class="content fv-plugins-bootstrap5 fv-plugins-framework">
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
              <option value="1" selected="">Monthly</option>
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
              <input class="form-check-input" type="radio" name="plShowPriceRadio" id="plNagotiablePrice" checked="">
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
              <label class="form-check-label" for="plOtherCharges">Stamp Duty &amp; Registration charges excluded.</label>
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
      <div class="modal-footer">
        <!--<button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Open second modal</button>-->
      </div>
    </div>
  </div>
</div>
</div>

<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
     <div style="height:90px" class="modal-header">
          <button type="button" class="btn btn-primary btn-next">Add new Concerts</button>
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Modal 2</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Hide this modal and show the first with the button below.
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back to first</button>
      </div>
    </div>
  </div>
</div>
<!--<button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Open first modal</button>-->
    
<!--boot2-->










<!--boot3-->





 <div class="modal fade" id="exampleModalToggletwo" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
       <div style="height:90px" class="modal-header">
          <button type="button" class="btn btn-primary btn-next">Add new Concerts</button>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
    <div id="wizard-property-listing" class="bs-stepper vertical mt-2 linear">
  <div class="bs-stepper-header">
    <div class="step active" data-target="#personal-details">
      <button type="button" class="step-trigger" aria-selected="true">
        <span class="bs-stepper-circle">
          <i class="bx bx-user"></i>
        </span>
        <span class="bs-stepper-label">
           <span class="bs-stepper-title">Events Details</span>
          <span class="bs-stepper-subtitle">Title/Location</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <div class="step" data-target="#property-details">
      <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
        <span class="bs-stepper-circle">
          <i class="bx bx-home"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Property Details</span>
          <span class="bs-stepper-subtitle">Property Type</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <div class="step" data-target="#property-features">
      <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
        <span class="bs-stepper-circle">
          <i class="bx bx-star"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Property Features</span>
          <span class="bs-stepper-subtitle">Bedrooms/Floor No</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <div class="step" data-target="#property-area">
      <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
        <span class="bs-stepper-circle">
          <i class="bx bx-map"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Property Area</span>
          <span class="bs-stepper-subtitle">Covered Area</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <div class="step" data-target="#price-details">
      <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
        <span class="bs-stepper-circle">
          <i class="bx bx-dollar"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Price Details</span>
          <span class="bs-stepper-subtitle">Expected Price</span>
        </span>
      </button>
    </div>
  </div>
  <div class="bs-stepper-content">
    <form id="wizard-property-listing-form" onsubmit="return false">

      <!-- Personal Details -->
      <div id="personal-details" class="content active dstepper-block fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-12">
            <div class="row">
              <!--<div class="col-md mb-md-0 mb-2">-->
              <!--  <div class="form-check custom-option custom-option-icon checked">-->
              <!--    <label class="form-check-label custom-option-content" for="customRadioBuilder">-->
              <!--      <span class="custom-option-body">-->
              <!--        <i class="bx bx-building-house"></i>-->
              <!--        <span class="custom-option-title">I am the Builder</span>-->
              <!--        <small>List property as Builder, list your project and get highest reach.</small>-->
              <!--      </span>-->
              <!--      <input name="plUserType" class="form-check-input" type="radio" value="1" id="customRadioBuilder" checked="">-->
              <!--    </label>-->
              <!--  </div>-->
              <!--</div>-->
              <!--<div class="col-md mb-md-0 mb-2">-->
              <!--  <div class="form-check custom-option custom-option-icon">-->
              <!--    <label class="form-check-label custom-option-content" for="customRadioOwner">-->
              <!--      <span class="custom-option-body">-->
              <!--        <i class="bx bx-crown"></i>-->
              <!--        <span class="custom-option-title"> I am the Owner </span>-->
              <!--        <small>Submit property as an Individual. Lease, Rent or Sell at the best price.</small>-->
              <!--      </span>-->
              <!--      <input name="plUserType" class="form-check-input" type="radio" value="2" id="customRadioOwner">-->
              <!--    </label>-->
              <!--  </div>-->
              <!--</div>-->
              
        <div class="container" style="width:364px;">


        <input name="file1" type="file" class="dropify" data-height="100" />
      </div>
   
              <!--<div class="col-md mb-md-0 mb-2">-->
              <!--  <div class="form-check custom-option custom-option-icon">-->
              <!--    <label class="form-check-label custom-option-content" for="customRadioBroker">-->
              <!--      <span class="custom-option-body">-->
              <!--        <i class="bx bx-briefcase-alt"></i>-->
              <!--        <span class="custom-option-title"> I am a Broker </span>-->
              <!--        <small>Earn highest commission by listing your clients properties at the best price.</small>-->
              <!--      </span>-->
              <!--      <input name="plUserType" class="form-check-input" type="radio" value="3" id="customRadioBroker">-->
              <!--    </label>-->
              <!--  </div>-->
              <!--</div>-->
            </div>
          </div>
            <div class="col-sm-6 fv-plugins-icon-container">
            <label class="form-label" for="plContact">Event Title</label>
            <div class="input-group input-group-merge">
             
              <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Event Title">
            </div>
          </div>
          
            <div class="col-sm-6">
            <label class="form-label" for="plContact">Describe</label>
            <div class="input-group input-group-merge">
             
              <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Input Text">
            </div>
          </div>
          
          
            <div class="col-sm-6">
            <label class="form-label" for="plContact">Location Name</label>
            <div class="input-group input-group-merge">
             
              <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Example Human Right Berlin">
            </div>
          </div>
          
         
          
          
          <div class="col-sm-6">
                 <label class="form-label" for="plContact">Select</label>
                                        <select id="sendNotification" class="form-select" name="sendNotification">
                                            <option selected="">Country</option>
                                            <option>America</option>
                                        </select>
                                    </div>
          
          
          
          
           <div class="col-sm-6">
            <label class="form-label" for="plContact">Select</label>
            <div class="input-group input-group-merge">
             
              <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="City and ZipCode">
            </div>
          </div>
          
            <div class="col-sm-6">
            <label class="form-label" for="plContact">Type</label>
            <div class="input-group input-group-merge">
             
              <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Address">
            </div>
          </div>
          
          
          
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-label-secondary btn-prev" disabled=""> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
              <span class="align-middle d-sm-inline-block d-none">Previous</span>
            </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Property Details -->
      <div id="property-details" class="content fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-12">
            <div class="row">
              <div class="col-xl mb-xl-0 mb-2">
                <div class="form-check custom-option custom-option-icon checked">
                  <label class="form-check-label custom-option-content" for="customRadioSell">
                    <span class="custom-option-body">
                      <i class="bx bx-home"></i>
                      <span class="custom-option-title">Sale the property</span>
                      <small>Post your property for sale.<br> Unlimited free listing.</small>
                    </span>
                    <input name="plPropertySaleRent" class="form-check-input" type="radio" value="1" id="customRadioSell" checked="">
                  </label>
                </div>
              </div>
              <div class="col-xl mb-xl-0 mb-2">
                <div class="form-check custom-option custom-option-icon">
                  <label class="form-check-label custom-option-content" for="customRadioRent">
                    <span class="custom-option-body">
                      <i class="bx bx-wallet"></i>
                      <span class="custom-option-title">Rent the property</span>
                      <small>Post your property for rent.<br> Unlimited free listing.</small>
                    </span>
                    <input name="plPropertySaleRent" class="form-check-input" type="radio" value="2" id="customRadioRent">
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 fv-plugins-icon-container">
            <label class="form-label" for="plPropertyType">Property Type</label>
            <div class="position-relative"><select id="plPropertyType" name="plPropertyType" class="select2 form-select select2-hidden-accessible" data-allow-clear="true" data-select2-id="plPropertyType" tabindex="-1" aria-hidden="true">
              <option value="" data-select2-id="4">Select Property Type</option>
              <option value="10002">Flat/ Apartment</option>
              <option value="10001">Residential House</option>
              <option value="10017">Villa</option>
              <option value="10003">Builder Floor Apartment</option>
              <option value="10000">Residential Land/ Plot</option>
              <option value="10021">Penthouse</option>
              <option value="10022">Studio Apartment</option>
            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="3" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-plPropertyType-container"><span class="select2-selection__rendered" id="select2-plPropertyType-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select property type</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
          <div class="col-sm-6 fv-plugins-icon-container">
            <label class="form-label" for="plZipCode">Zip Code</label>
            <input type="number" id="plZipCode" name="plZipCode" class="form-control" placeholder="99950">
          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
          <div class="col-sm-6">
            <label class="form-label" for="plCountry">Country</label>
            <div class="position-relative"><select id="plCountry" name="plCountry" class="select2 form-select select2-hidden-accessible" data-allow-clear="true" data-select2-id="plCountry" tabindex="-1" aria-hidden="true">
              <option value="" data-select2-id="2">Select</option>
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
            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-plCountry-container"><span class="select2-selection__rendered" id="select2-plCountry-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select country</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plState">State</label>
            <input type="text" id="plState" name="plState" class="form-control" placeholder="California">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plCity">City</label>
            <input type="text" id="plCity" name="plCity" class="form-control" placeholder="Los Angeles">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plLandmark">Landmark</label>
            <input type="text" id="plLandmark" name="plLandmark" class="form-control" placeholder="Nr. Hard Rock Cafe">
          </div>
          <div class="col-lg-12">
            <label class="form-label" for="plAddress">Address</label>
            <textarea id="plAddress" name="plAddress" class="form-control" rows="2" placeholder="12, Business Park"></textarea>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Property Features -->
      <div id="property-features" class="content fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-sm-6">
            <label class="form-label d-block" for="plBedrooms">Bedrooms</label>
            <input type="number" id="plBedrooms" name="plBedrooms" class="form-control" placeholder="3">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plFloorNo">Floor No</label>
            <input type="number" id="plFloorNo" name="plFloorNo" class="form-control" placeholder="12">
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plBathrooms">Bathrooms</label>
            <input type="number" id="plBathrooms" name="plBathrooms" class="form-control" placeholder="4">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plFurnishedStatus">Furnished Status</label>
            <select id="plFurnishedStatus" name="plFurnishedStatus" class="form-select">
              <option selected="" disabled="" value="">Select furnished status </option>
              <option value="1">Fully furnished</option>
              <option value="2">Furnished</option>
              <option value="3">Semi furnished</option>
              <option value="4">Unfurnished</option>
            </select>
          </div>
          <div class="col-lg-12">
            <label class="form-label" for="plFurnishingDetails">Furnishing Details</label>
            <tags class="tagify  form-control" tabindex="-1">
            <tag title="Fridge" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="Fridge"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">Fridge</span></div></tag><tag title="AC" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="AC"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">AC</span></div></tag><tag title="TV" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="TV"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">TV</span></div></tag><tag title="WiFi" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="WiFi"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">WiFi</span></div></tag><span contenteditable="" tabindex="0" data-placeholder="select options" aria-placeholder="select options" class="tagify__input" role="textbox" aria-autocomplete="both" aria-multiline="false"></span>
                ​
        </tags><input id="plFurnishingDetails" name="plFurnishingDetails" class="form-control" placeholder="select options" value="Fridge, AC, TV, WiFi" tabindex="-1">
          </div>
          <div class="col-sm-6">
            <label class="form-label">Is there any common area?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plCommonAreaRadio" id="plCommonAreaRadioYes" checked="">
              <label class="form-check-label" for="plCommonAreaRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plCommonAreaRadio" id="plCommonAreaRadioNo">
              <label class="form-check-label" for="plCommonAreaRadioNo">No</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Is there any attached balcony?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plAttachedBalconyRadio" id="plAttachedBalconyRadioYes" checked="">
              <label class="form-check-label" for="plAttachedBalconyRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plAttachedBalconyRadio" id="plAttachedBalconyRadioNo">
              <label class="form-check-label" for="plAttachedBalconyRadioNo">No</label>
            </div>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Property Area -->
      <div id="property-area" class="content fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-sm-6">
            <label class="form-label d-block" for="plTotalArea">Total Area</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plTotalArea" name="plTotalArea" placeholder="1000" aria-describedby="pl-total-area">
              <span class="input-group-text" id="pl-total-area">sq-ft</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plCarpetArea">Carpet Area</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plCarpetArea" name="plCarpetArea" placeholder="800" aria-describedby="pl-carpet-area">
              <span class="input-group-text" id="pl-carpet-area">sq-ft</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plPlotArea">Plot Area</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plPlotArea" name="plPlotArea" placeholder="800" aria-describedby="pl-plot-area">
              <span class="input-group-text" id="pl-plot-area">sq-yd</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plAvailableFrom">Available From</label>
            <input type="text" id="plAvailableFrom" name="plAvailableFrom" class="form-control flatpickr flatpickr-input" placeholder="YYYY-MM-DD" readonly="readonly">
          </div>
          <div class="col-sm-6">
            <label class="form-label">Possession Status</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plPossessionStatus" id="plUnderConstruction" checked="">
              <label class="form-check-label" for="plUnderConstruction">Under Construction</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plPossessionStatus" id="plReadyToMoveRadio">
              <label class="form-check-label" for="plReadyToMoveRadio">Ready to Move</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Transaction Type</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plTransectionType" id="plNewProperty" checked="">
              <label class="form-check-label" for="plNewProperty">New Property</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plTransectionType" id="plResaleProperty">
              <label class="form-check-label" for="plResaleProperty">Resale</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Is Property Facing Main Road?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plRoadFacingRadio" id="plRoadFacingRadioYes" checked="">
              <label class="form-check-label" for="plRoadFacingRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plRoadFacingRadio" id="plRoadFacingRadioNo">
              <label class="form-check-label" for="plRoadFacingRadioNo">No</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Gated Colony?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plGatedColonyRadio" id="plGatedColonyRadioYes" checked="">
              <label class="form-check-label" for="plGatedColonyRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plGatedColonyRadio" id="plGatedColonyRadioNo">
              <label class="form-check-label" for="plGatedColonyRadioNo">No</label>
            </div>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Price Details -->
      <div id="price-details" class="content fv-plugins-bootstrap5 fv-plugins-framework">
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
              <option value="1" selected="">Monthly</option>
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
              <input class="form-check-input" type="radio" name="plShowPriceRadio" id="plNagotiablePrice" checked="">
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
              <label class="form-check-label" for="plOtherCharges">Stamp Duty &amp; Registration charges excluded.</label>
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
      <div class="modal-footer">
        <!--<button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Open second modal</button>-->
      </div>
    </div>
  </div>
</div>
</div>
<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
       <div style="height:90px" class="modal-header">
          <button type="button" class="btn btn-primary btn-next">Add new Concerts</button>
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Modal 2</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Hide this modal and show the first with the button below.
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back to first</button>
      </div>
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


            <!-- pricingModal -->
                        <!--/ pricingModal -->

          </div>
          <!-- / Content -->

        
          <div class="content-backdrop fade"></div>
        </div>
        
        
        
        
        <!--phir hera pheri-->
         <div class="modal fade" id="exampleModalToggleone5161" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
      <div  class="modal-header">
        
        <!--<h1 class="modal-title fs-5" id="exampleModalToggleLabel">Modal 1</h1>-->
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div style="padding:0;" class="modal-body">
           <form id="multiStepForm">
        <!-- Step 1 two-->
        <div class="stepnew active" id="step1two">
            <div id="wizard-property-listing" class="bs-stepper vertical mt-2 linear">
 <div class="bs-stepper-header">
            <!--<button type="button" class="btn btn-primary btn-next">Add new Concerts</button>-->
              <button type="button" class="btn btn-primary btn-next">Add new Conference</button>
            <br>
    <div class="step active" data-target="#personal-details">
      <button type="button" class="step-trigger" aria-selected="true">
        <span class="bs-stepper-circle">
                   
          <i class="bx bx-user"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Events Details</span>
          <span class="bs-stepper-subtitle">Title Location</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <div class="step" data-target="#property-details">
      <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
        <span class="bs-stepper-circle">
          <i class="bx bx-home"></i>
        </span>
        <span class="bs-stepper-label">
            <span class="bs-stepper-title">Event Start</span>
          <span class="bs-stepper-subtitle">Date and Time</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <!--<div class="step" data-target="#property-features">-->
    <!--  <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">-->
    <!--    <span class="bs-stepper-circle">-->
    <!--      <i class="bx bx-star"></i>-->
    <!--    </span>-->
    <!--   <span class="bs-stepper-label">-->
    <!--      <span class="bs-stepper-title">Tickets</span>-->
    <!--      <span class="bs-stepper-subtitle">Sale Tickets</span>-->
    <!--    </span>-->
    <!--  </button>-->
    <!--</div>-->
    <div class="line"></div>
    <div class="step" data-target="#property-area">
      <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
        <span class="bs-stepper-circle">
          <i class="bx bx-map"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Notifications</span>
          <span class="bs-stepper-subtitle">Add Notifications</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <div class="step" data-target="#price-details">
      <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
        <span class="bs-stepper-circle">
          <i class="bx bx-dollar"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Contact</span>
          <span class="bs-stepper-subtitle">Contact Person</span>
        </span>
      </button>
    </div>
  </div>
  <div class="bs-stepper-content">
    <form id="wizard-property-listing-form" onsubmit="return false">

      <!-- Personal Details -->
      <div id="personal-details" class="content active dstepper-block fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-12">
            <div class="row">
              <!--<div class="col-md mb-md-0 mb-2">-->
              <!--  <div class="form-check custom-option custom-option-icon checked">-->
              <!--    <label class="form-check-label custom-option-content" for="customRadioBuilder">-->
              <!--      <span class="custom-option-body">-->
              <!--        <i class="bx bx-building-house"></i>-->
              <!--        <span class="custom-option-title">I am the Builder</span>-->
              <!--        <small>List property as Builder, list your project and get highest reach.</small>-->
              <!--      </span>-->
              <!--      <input name="plUserType" class="form-check-input" type="radio" value="1" id="customRadioBuilder" checked="">-->
              <!--    </label>-->
              <!--  </div>-->
              <!--</div>-->
              <!--<div class="col-md mb-md-0 mb-2">-->
              <!--  <div class="form-check custom-option custom-option-icon">-->
              <!--    <label class="form-check-label custom-option-content" for="customRadioOwner">-->
              <!--      <span class="custom-option-body">-->
              <!--        <i class="bx bx-crown"></i>-->
              <!--        <span class="custom-option-title"> I am the Owner </span>-->
              <!--        <small>Submit property as an Individual. Lease, Rent or Sell at the best price.</small>-->
              <!--      </span>-->
              <!--      <input name="plUserType" class="form-check-input" type="radio" value="2" id="customRadioOwner">-->
              <!--    </label>-->
              <!--  </div>-->
              <!--</div>-->
              
             <div class="container" style="width:364px;">


        <input name="file1" type="file" class="dropify" data-height="100" />
      </div>
      
   
              <!--<div class="col-md mb-md-0 mb-2">-->
              <!--  <div class="form-check custom-option custom-option-icon">-->
              <!--    <label class="form-check-label custom-option-content" for="customRadioBroker">-->
              <!--      <span class="custom-option-body">-->
              <!--        <i class="bx bx-briefcase-alt"></i>-->
              <!--        <span class="custom-option-title"> I am a Broker </span>-->
              <!--        <small>Earn highest commission by listing your clients properties at the best price.</small>-->
              <!--      </span>-->
              <!--      <input name="plUserType" class="form-check-input" type="radio" value="3" id="customRadioBroker">-->
              <!--    </label>-->
              <!--  </div>-->
              <!--</div>-->
            </div>
          </div>
        
              <div class="col-sm-6 fv-plugins-icon-container">
            <label class="form-label" for="plContact">Event Title</label>
            <div class="input-group input-group-merge">
             
              <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Event Title">
            </div>
          </div>
          
            <div class="col-sm-6">
            <label class="form-label" for="plContact">Describe</label>
            <div class="input-group input-group-merge">
             
              <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Input Text">
            </div>
          </div>
          
          
            <div class="col-sm-6">
            <label class="form-label" for="plContact">Location Name</label>
            <div class="input-group input-group-merge">
             
              <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Example Human Right Berlin">
            </div>
          </div>
          
         
          
          
          <div class="col-sm-6">
                 <label class="form-label" for="plContact">Select</label>
                                        <select id="sendNotification" class="form-select" name="sendNotification">
                                            <option selected="">Country</option>
                                            <option>America</option>
                                        </select>
                                    </div>
          
          
          
          
           <div class="col-sm-6">
            <label class="form-label" for="plContact">City and Zipcode</label>
            <div class="input-group input-group-merge">
             
              <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="City and ZipCode">
            </div>
          </div>
          
            <div class="col-sm-6">
            <label class="form-label" for="plContact">Address</label>
            <div class="input-group input-group-merge">
             
              <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Address">
            </div>
          </div>
          
          
        
          
          
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-label-secondary btn-prev" disabled=""> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
              <span class="align-middle d-sm-inline-block d-none">Previous</span>
            </button>
            <!--<button class="btn btn-primary btn-next"  onclick="nextStep('step1', 'step2')"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>-->
            
            <button type="button" class="btn btn-primary btn-next" onclick="nextStep('step1two', 'step2two')">Next</button>
          </div>
        </div>
      </div>

      <!-- Property Details -->
      <div id="property-details" class="content fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-12">
            <div class="row">
              <div class="col-xl mb-xl-0 mb-2">
                <div class="form-check custom-option custom-option-icon checked">
                  <label class="form-check-label custom-option-content" for="customRadioSell">
                    <span class="custom-option-body">
                      <i class="bx bx-home"></i>
                      <span class="custom-option-title">Sale the property</span>
                      <small>Post your property for sale.<br> Unlimited free listing.</small>
                    </span>
                    <input name="plPropertySaleRent" class="form-check-input" type="radio" value="1" id="customRadioSell" checked="">
                  </label>
                </div>
              </div>
              <div class="col-xl mb-xl-0 mb-2">
                <div class="form-check custom-option custom-option-icon">
                  <label class="form-check-label custom-option-content" for="customRadioRent">
                    <span class="custom-option-body">
                      <i class="bx bx-wallet"></i>
                      <span class="custom-option-title">Rent the property</span>
                      <small>Post your property for rent.<br> Unlimited free listing.</small>
                    </span>
                    <input name="plPropertySaleRent" class="form-check-input" type="radio" value="2" id="customRadioRent">
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 fv-plugins-icon-container">
            <label class="form-label" for="plPropertyType">Property Type</label>
            <div class="position-relative"><select id="plPropertyType" name="plPropertyType" class="select2 form-select select2-hidden-accessible" data-allow-clear="true" data-select2-id="plPropertyType" tabindex="-1" aria-hidden="true">
              <option value="" data-select2-id="4">Select Property Type</option>
              <option value="10002">Flat/ Apartment</option>
              <option value="10001">Residential House</option>
              <option value="10017">Villa</option>
              <option value="10003">Builder Floor Apartment</option>
              <option value="10000">Residential Land/ Plot</option>
              <option value="10021">Penthouse</option>
              <option value="10022">Studio Apartment</option>
            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="3" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-plPropertyType-container"><span class="select2-selection__rendered" id="select2-plPropertyType-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select property type</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
          <div class="col-sm-6 fv-plugins-icon-container">
            <label class="form-label" for="plZipCode">Zip Code</label>
            <input type="number" id="plZipCode" name="plZipCode" class="form-control" placeholder="99950">
          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
          <div class="col-sm-6">
            <label class="form-label" for="plCountry">Country</label>
            <div class="position-relative"><select id="plCountry" name="plCountry" class="select2 form-select select2-hidden-accessible" data-allow-clear="true" data-select2-id="plCountry" tabindex="-1" aria-hidden="true">
              <option value="" data-select2-id="2">Select</option>
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
            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-plCountry-container"><span class="select2-selection__rendered" id="select2-plCountry-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select country</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plState">State</label>
            <input type="text" id="plState" name="plState" class="form-control" placeholder="California">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plCity">City</label>
            <input type="text" id="plCity" name="plCity" class="form-control" placeholder="Los Angeles">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plLandmark">Landmark</label>
            <input type="text" id="plLandmark" name="plLandmark" class="form-control" placeholder="Nr. Hard Rock Cafe">
          </div>
          <div class="col-lg-12">
            <label class="form-label" for="plAddress">Address</label>
            <textarea id="plAddress" name="plAddress" class="form-control" rows="2" placeholder="12, Business Park"></textarea>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Property Features -->
      <div id="property-features" class="content fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-sm-6">
            <label class="form-label d-block" for="plBedrooms">Bedrooms</label>
            <input type="number" id="plBedrooms" name="plBedrooms" class="form-control" placeholder="3">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plFloorNo">Floor No</label>
            <input type="number" id="plFloorNo" name="plFloorNo" class="form-control" placeholder="12">
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plBathrooms">Bathrooms</label>
            <input type="number" id="plBathrooms" name="plBathrooms" class="form-control" placeholder="4">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plFurnishedStatus">Furnished Status</label>
            <select id="plFurnishedStatus" name="plFurnishedStatus" class="form-select">
              <option selected="" disabled="" value="">Select furnished status </option>
              <option value="1">Fully furnished</option>
              <option value="2">Furnished</option>
              <option value="3">Semi furnished</option>
              <option value="4">Unfurnished</option>
            </select>
          </div>
          <div class="col-lg-12">
            <label class="form-label" for="plFurnishingDetails">Furnishing Details</label>
            <tags class="tagify  form-control" tabindex="-1">
            <tag title="Fridge" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="Fridge"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">Fridge</span></div></tag><tag title="AC" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="AC"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">AC</span></div></tag><tag title="TV" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="TV"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">TV</span></div></tag><tag title="WiFi" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="WiFi"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">WiFi</span></div></tag><span contenteditable="" tabindex="0" data-placeholder="select options" aria-placeholder="select options" class="tagify__input" role="textbox" aria-autocomplete="both" aria-multiline="false"></span>
                ​
        </tags><input id="plFurnishingDetails" name="plFurnishingDetails" class="form-control" placeholder="select options" value="Fridge, AC, TV, WiFi" tabindex="-1">
          </div>
          <div class="col-sm-6">
            <label class="form-label">Is there any common area?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plCommonAreaRadio" id="plCommonAreaRadioYes" checked="">
              <label class="form-check-label" for="plCommonAreaRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plCommonAreaRadio" id="plCommonAreaRadioNo">
              <label class="form-check-label" for="plCommonAreaRadioNo">No</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Is there any attached balcony?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plAttachedBalconyRadio" id="plAttachedBalconyRadioYes" checked="">
              <label class="form-check-label" for="plAttachedBalconyRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plAttachedBalconyRadio" id="plAttachedBalconyRadioNo">
              <label class="form-check-label" for="plAttachedBalconyRadioNo">No</label>
            </div>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Property Area -->
      <div id="property-area" class="content fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-sm-6">
            <label class="form-label d-block" for="plTotalArea">Total Area</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plTotalArea" name="plTotalArea" placeholder="1000" aria-describedby="pl-total-area">
              <span class="input-group-text" id="pl-total-area">sq-ft</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plCarpetArea">Carpet Area</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plCarpetArea" name="plCarpetArea" placeholder="800" aria-describedby="pl-carpet-area">
              <span class="input-group-text" id="pl-carpet-area">sq-ft</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plPlotArea">Plot Area</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plPlotArea" name="plPlotArea" placeholder="800" aria-describedby="pl-plot-area">
              <span class="input-group-text" id="pl-plot-area">sq-yd</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plAvailableFrom">Available From</label>
            <input type="text" id="plAvailableFrom" name="plAvailableFrom" class="form-control flatpickr flatpickr-input" placeholder="YYYY-MM-DD" readonly="readonly">
          </div>
          <div class="col-sm-6">
            <label class="form-label">Possession Status</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plPossessionStatus" id="plUnderConstruction" checked="">
              <label class="form-check-label" for="plUnderConstruction">Under Construction</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plPossessionStatus" id="plReadyToMoveRadio">
              <label class="form-check-label" for="plReadyToMoveRadio">Ready to Move</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Transaction Type</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plTransectionType" id="plNewProperty" checked="">
              <label class="form-check-label" for="plNewProperty">New Property</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plTransectionType" id="plResaleProperty">
              <label class="form-check-label" for="plResaleProperty">Resale</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Is Property Facing Main Road?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plRoadFacingRadio" id="plRoadFacingRadioYes" checked="">
              <label class="form-check-label" for="plRoadFacingRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plRoadFacingRadio" id="plRoadFacingRadioNo">
              <label class="form-check-label" for="plRoadFacingRadioNo">No</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Gated Colony?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plGatedColonyRadio" id="plGatedColonyRadioYes" checked="">
              <label class="form-check-label" for="plGatedColonyRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plGatedColonyRadio" id="plGatedColonyRadioNo">
              <label class="form-check-label" for="plGatedColonyRadioNo">No</label>
            </div>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Price Details -->
      <div id="price-details" class="content fv-plugins-bootstrap5 fv-plugins-framework">
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
              <option value="1" selected="">Monthly</option>
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
              <input class="form-check-input" type="radio" name="plShowPriceRadio" id="plNagotiablePrice" checked="">
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
              <label class="form-check-label" for="plOtherCharges">Stamp Duty &amp; Registration charges excluded.</label>
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
            <br>
            <!--<button type="button" onclick="nextStep('step1', 'step2')">Next</button>-->
        </div>

        <!-- Step 2 two -->
        <div class="stepnew" id="step2two">
  
  <div id="wizard-property-listing" class="bs-stepper vertical mt-2 linear">
 <div class="bs-stepper-header">
      <button type="button" class="btn btn-primary btn-next">Add new Conference</button>
            <br>
    <div class="step" data-target="#personal-details">
      <button type="button" class="step-trigger" aria-selected="false">
        <span class="bs-stepper-circle">
          <i class="bx bx-user"></i>
        </span>
        <span class="bs-stepper-label">
           <span class="bs-stepper-title">Events Details</span>
          <span class="bs-stepper-subtitle">Title Location</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <div class="step active" data-target="#property-details">
      <button type="button" class="step-trigger" aria-selected="true" >
        <span class="bs-stepper-circle">
          <i class="bx bx-home"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Event Start</span>
          <span class="bs-stepper-subtitle">Date and Time</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <!--<div class="step" data-target="#property-features">-->
    <!--  <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">-->
    <!--    <span class="bs-stepper-circle">-->
    <!--      <i class="bx bx-star"></i>-->
    <!--    </span>-->
    <!--    <span class="bs-stepper-label">-->
    <!--      <span class="bs-stepper-title">Tickets</span>-->
    <!--      <span class="bs-stepper-subtitle">Sale Tickets</span>-->
    <!--    </span>-->
    <!--  </button>-->
    <!--</div>-->
    <div class="line"></div>
    <div class="step" data-target="#property-area">
      <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
        <span class="bs-stepper-circle">
          <i class="bx bx-map"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Notifications</span>
          <span class="bs-stepper-subtitle">Add Notifications</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <div class="step" data-target="#price-details">
      <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
        <span class="bs-stepper-circle">
          <i class="bx bx-dollar"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Contact</span>
          <span class="bs-stepper-subtitle">Contact Person</span>
        </span>
      </button>
    </div>
  </div>
  <div class="bs-stepper-content">
    <form id="wizard-property-listing-form" onsubmit="return false">

      <!-- Personal Details -->
      <div style="position:relative;height:100%;" id="personal-details" class="content active dstepper-block fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-12">
            <div class="row">
                <div class="d-flex justify-content-center align-items-center">
              <img src="{{asset('assets/img/clock.png')}}" width="130px"> 
              </div>
            </div>
         
          </div>
      
              <div class="col-sm-6 fv-plugins-icon-container">
                  
         
            <label class="form-label" for="plContact">Start Date</label>
            <div class="input-group input-group-merge">
              <input type="date" id="dateInput" name="dateInput" class="form-control flatpickrdate" pattern="\d{2}/\d{2}/\d{2}" placeholder="Date Picker" required>
               
              <!--<input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Event Title">-->
            </div>
          </div>
             <div class="col-sm-6 fv-plugins-icon-container">
            <label class="form-label" for="plContact">End Date</label>
            <div class="input-group input-group-merge">
              <input type="date" id="dateInput" name="dateInput" class="form-control flatpickrdate" pattern="\d{2}/\d{2}/\d{2}" placeholder="Date Picker" required>
               
              <!--<input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Event Title">-->
            </div>
          </div>
          
            <div class="col-sm-6">
            <label class="form-label" for="plContact">Start Time</label>
            <div class="input-group input-group-merge">
                             <input type="time" id="timeInput" name="timeInput" class="form-control flatpickrtime" pattern="\d{2}:\d{2}" placeholder="Time Picker" required>

              <!--<input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Input Text">-->
            </div>
          </div>
          
          
            <div class="col-sm-6">
            <label class="form-label" for="plContact">End Time</label>
            <div class="input-group input-group-merge">
                     <input type="time" id="timeInput" name="timeInput" class="form-control flatpickrtime" pattern="\d{2}:\d{2}" placeholder="Time Picker" required>
              <!--<input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Example Human Right Berlin">-->
            </div>
          </div>
          
         
          
          
          
          
          
        
          
          
          <div  class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev" > <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
              <span class="align-middle d-sm-inline-block " onclick="prevStep('step2two', 'step1two')">Previous</span>
            </button>
            <!--<button class="btn btn-primary btn-next"  onclick="nextStep('step1', 'step2')"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>-->
            
            <button type="button" class="btn btn-primary btn-next" onclick="nextStep('step2two', 'step4two')">Next</button>
              <!--<button type="button" onclick="nextStep('step2', 'step3')">Next</button>-->
          </div>
        </div>
      </div>

      <!-- Property Details -->
      <div id="property-details" class="content fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-12">
            <div class="row">
              <div class="col-xl mb-xl-0 mb-2">
                <div class="form-check custom-option custom-option-icon checked">
                  <label class="form-check-label custom-option-content" for="customRadioSell">
                    <span class="custom-option-body">
                      <i class="bx bx-home"></i>
                      <span class="custom-option-title">Sale the property</span>
                      <small>Post your property for sale.<br> Unlimited free listing.</small>
                    </span>
                    <input name="plPropertySaleRent" class="form-check-input" type="radio" value="1" id="customRadioSell" checked="">
                  </label>
                </div>
              </div>
              <div class="col-xl mb-xl-0 mb-2">
                <div class="form-check custom-option custom-option-icon">
                  <label class="form-check-label custom-option-content" for="customRadioRent">
                    <span class="custom-option-body">
                      <i class="bx bx-wallet"></i>
                      <span class="custom-option-title">Rent the property</span>
                      <small>Post your property for rent.<br> Unlimited free listing.</small>
                    </span>
                    <input name="plPropertySaleRent" class="form-check-input" type="radio" value="2" id="customRadioRent">
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 fv-plugins-icon-container">
            <label class="form-label" for="plPropertyType">Property Type</label>
            <div class="position-relative"><select id="plPropertyType" name="plPropertyType" class="select2 form-select select2-hidden-accessible" data-allow-clear="true" data-select2-id="plPropertyType" tabindex="-1" aria-hidden="true">
              <option value="" data-select2-id="4">Select Property Type</option>
              <option value="10002">Flat/ Apartment</option>
              <option value="10001">Residential House</option>
              <option value="10017">Villa</option>
              <option value="10003">Builder Floor Apartment</option>
              <option value="10000">Residential Land/ Plot</option>
              <option value="10021">Penthouse</option>
              <option value="10022">Studio Apartment</option>
            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="3" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-plPropertyType-container"><span class="select2-selection__rendered" id="select2-plPropertyType-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select property type</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
          <div class="col-sm-6 fv-plugins-icon-container">
            <label class="form-label" for="plZipCode">Zip Code</label>
            <input type="number" id="plZipCode" name="plZipCode" class="form-control" placeholder="99950">
          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
          <div class="col-sm-6">
            <label class="form-label" for="plCountry">Country</label>
            <div class="position-relative"><select id="plCountry" name="plCountry" class="select2 form-select select2-hidden-accessible" data-allow-clear="true" data-select2-id="plCountry" tabindex="-1" aria-hidden="true">
              <option value="" data-select2-id="2">Select</option>
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
            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-plCountry-container"><span class="select2-selection__rendered" id="select2-plCountry-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select country</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plState">State</label>
            <input type="text" id="plState" name="plState" class="form-control" placeholder="California">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plCity">City</label>
            <input type="text" id="plCity" name="plCity" class="form-control" placeholder="Los Angeles">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plLandmark">Landmark</label>
            <input type="text" id="plLandmark" name="plLandmark" class="form-control" placeholder="Nr. Hard Rock Cafe">
          </div>
          <div class="col-lg-12">
            <label class="form-label" for="plAddress">Address</label>
            <textarea id="plAddress" name="plAddress" class="form-control" rows="2" placeholder="12, Business Park"></textarea>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Property Features -->
      <div id="property-features" class="content fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-sm-6">
            <label class="form-label d-block" for="plBedrooms">Bedrooms</label>
            <input type="number" id="plBedrooms" name="plBedrooms" class="form-control" placeholder="3">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plFloorNo">Floor No</label>
            <input type="number" id="plFloorNo" name="plFloorNo" class="form-control" placeholder="12">
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plBathrooms">Bathrooms</label>
            <input type="number" id="plBathrooms" name="plBathrooms" class="form-control" placeholder="4">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plFurnishedStatus">Furnished Status</label>
            <select id="plFurnishedStatus" name="plFurnishedStatus" class="form-select">
              <option selected="" disabled="" value="">Select furnished status </option>
              <option value="1">Fully furnished</option>
              <option value="2">Furnished</option>
              <option value="3">Semi furnished</option>
              <option value="4">Unfurnished</option>
            </select>
          </div>
          <div class="col-lg-12">
            <label class="form-label" for="plFurnishingDetails">Furnishing Details</label>
            <tags class="tagify  form-control" tabindex="-1">
            <tag title="Fridge" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="Fridge"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">Fridge</span></div></tag><tag title="AC" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="AC"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">AC</span></div></tag><tag title="TV" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="TV"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">TV</span></div></tag><tag title="WiFi" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="WiFi"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">WiFi</span></div></tag><span contenteditable="" tabindex="0" data-placeholder="select options" aria-placeholder="select options" class="tagify__input" role="textbox" aria-autocomplete="both" aria-multiline="false"></span>
                ​
        </tags><input id="plFurnishingDetails" name="plFurnishingDetails" class="form-control" placeholder="select options" value="Fridge, AC, TV, WiFi" tabindex="-1">
          </div>
          <div class="col-sm-6">
            <label class="form-label">Is there any common area?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plCommonAreaRadio" id="plCommonAreaRadioYes" checked="">
              <label class="form-check-label" for="plCommonAreaRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plCommonAreaRadio" id="plCommonAreaRadioNo">
              <label class="form-check-label" for="plCommonAreaRadioNo">No</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Is there any attached balcony?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plAttachedBalconyRadio" id="plAttachedBalconyRadioYes" checked="">
              <label class="form-check-label" for="plAttachedBalconyRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plAttachedBalconyRadio" id="plAttachedBalconyRadioNo">
              <label class="form-check-label" for="plAttachedBalconyRadioNo">No</label>
            </div>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Property Area -->
      <div id="property-area" class="content fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-sm-6">
            <label class="form-label d-block" for="plTotalArea">Total Area</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plTotalArea" name="plTotalArea" placeholder="1000" aria-describedby="pl-total-area">
              <span class="input-group-text" id="pl-total-area">sq-ft</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plCarpetArea">Carpet Area</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plCarpetArea" name="plCarpetArea" placeholder="800" aria-describedby="pl-carpet-area">
              <span class="input-group-text" id="pl-carpet-area">sq-ft</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plPlotArea">Plot Area</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plPlotArea" name="plPlotArea" placeholder="800" aria-describedby="pl-plot-area">
              <span class="input-group-text" id="pl-plot-area">sq-yd</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plAvailableFrom">Available From</label>
            <input type="text" id="plAvailableFrom" name="plAvailableFrom" class="form-control flatpickr flatpickr-input" placeholder="YYYY-MM-DD" readonly="readonly">
          </div>
          <div class="col-sm-6">
            <label class="form-label">Possession Status</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plPossessionStatus" id="plUnderConstruction" checked="">
              <label class="form-check-label" for="plUnderConstruction">Under Construction</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plPossessionStatus" id="plReadyToMoveRadio">
              <label class="form-check-label" for="plReadyToMoveRadio">Ready to Move</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Transaction Type</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plTransectionType" id="plNewProperty" checked="">
              <label class="form-check-label" for="plNewProperty">New Property</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plTransectionType" id="plResaleProperty">
              <label class="form-check-label" for="plResaleProperty">Resale</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Is Property Facing Main Road?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plRoadFacingRadio" id="plRoadFacingRadioYes" checked="">
              <label class="form-check-label" for="plRoadFacingRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plRoadFacingRadio" id="plRoadFacingRadioNo">
              <label class="form-check-label" for="plRoadFacingRadioNo">No</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Gated Colony?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plGatedColonyRadio" id="plGatedColonyRadioYes" checked="">
              <label class="form-check-label" for="plGatedColonyRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plGatedColonyRadio" id="plGatedColonyRadioNo">
              <label class="form-check-label" for="plGatedColonyRadioNo">No</label>
            </div>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Price Details -->
      <div id="price-details" class="content fv-plugins-bootstrap5 fv-plugins-framework">
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
              <option value="1" selected="">Monthly</option>
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
              <input class="form-check-input" type="radio" name="plShowPriceRadio" id="plNagotiablePrice" checked="">
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
              <label class="form-check-label" for="plOtherCharges">Stamp Duty &amp; Registration charges excluded.</label>
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
            <br>
            <!--<button type="button" onclick="prevStep('step2', 'step1')">Previous</button>-->
            <!--<button type="button" onclick="nextStep('step2', 'step3')">Next</button>-->
        </div>

        <!-- Step 3 two-->
        <div class="stepnew" id="step3two">
               <div id="wizard-property-listing" class="bs-stepper vertical mt-2 linear">
 <div class="bs-stepper-header">
            <button type="button" class="btn btn-primary btn-next">Add new Conference</button>
            <br>
    <div class="step " data-target="#personal-details">
      <button type="button" class="step-trigger" aria-selected="false">
        <span class="bs-stepper-circle">
                   
          <i class="bx bx-user"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Events Details</span>
          <span class="bs-stepper-subtitle">Title Location</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <div class="step" data-target="#property-details">
      <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
        <span class="bs-stepper-circle">
          <i class="bx bx-home"></i>
        </span>
        <span class="bs-stepper-label">
            <span class="bs-stepper-title">Event Start</span>
          <span class="bs-stepper-subtitle">Date and Time</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <!--<div class="step active" data-target="#property-features">-->
    <!--  <button type="button" class="step-trigger" aria-selected="true">-->
    <!--    <span class="bs-stepper-circle">-->
    <!--      <i class="bx bx-star"></i>-->
    <!--    </span>-->
    <!--   <span class="bs-stepper-label">-->
    <!--      <span class="bs-stepper-title">Tickets</span>-->
    <!--      <span class="bs-stepper-subtitle">Sale Tickets</span>-->
    <!--    </span>-->
    <!--  </button>-->
    <!--</div>-->
    <div class="line"></div>
    <div class="step" data-target="#property-area">
      <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
        <span class="bs-stepper-circle">
          <i class="bx bx-map"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Notifications</span>
          <span class="bs-stepper-subtitle">Add Notifications</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <div class="step" data-target="#price-details">
      <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
        <span class="bs-stepper-circle">
          <i class="bx bx-dollar"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Contact</span>
          <span class="bs-stepper-subtitle">Contact Person</span>
        </span>
      </button>
    </div>
  </div>
  <div class="bs-stepper-content">
    <form id="wizard-property-listing-form" onsubmit="return false">

      <!-- Personal Details -->
      <div id="personal-details" class="content active dstepper-block fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-12">
            <div class="row">
            
              
      <!--       <div class="container" style="width:364px;">-->


      <!--  <input name="file1" type="file" class="dropify" data-height="100" />-->
      <!--</div>-->
      
   
             
            </div>
          </div>
        
        <!--babar azam-->
        <div class="col-sm-12">
            <div class="row">
              <div  style="width:47%;" class="col-sm-6">
              <div class="d-flex border-primary p-2 border rounded mb-4">
          <div class="avatar flex-shrink-0 me-3">
            <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/icons/unicons/briefcase.png" alt="User" class="rounded">
          </div>
          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
            <div class="me-2">
              <p class="mb-0">Activate Sale</p>
              <a href="javascript:void(0)" class="small" data-bs-target="#upgradePlanModal" data-bs-toggle="modal">Event Ticket Sale</a>
            </div>
            <div class="user-progress">
              <div class="">
                  <!--add-->
                  <div style="display: flex;justify-content: center; align-items: center" class="form-check form-switch mb-2">
          <input class="form-check-input closetogglebtn" type="checkbox" id="flexSwitchCheckChecked " checked="">
    
        </div>
                  
                  <!--add-->
                <!--<sup class="mt-3 mb-0 me-1">$</sup>-->
                <!--<h3 class="mb-0">2,124</h3>-->
                <!--<sub class="mt-auto mb-2"> /Year</sub>-->
              </div>
            </div>
          </div>
        </div>
        </div>
    
       <div class="col-sm-3 mt-2 closeradio" >
            <div style="border: 1px solid #696cff;border-radius:10px;">
          <div style="padding:4px;" class="d-flex justify-content-center align-items-center ">
              
              <div class="start d-flex">
                
              <div style="padding-bottom:4px" class="mt-2 d-flex">
                 <input name="customRadioSvg" class="form-check-input" type="radio" value="" id="customRadioSvg3">
                  &nbsp;  &nbsp;
             <!-- <div style="border-radius:100%;border:1px solid black;padding:0px 2px;" class="d-flex justify-content-center align-items-center">-->
             <!--<strong>.$. </strong> -->
             <!--</div>-->
             <label>.Dollar.</label>
             
           </div>
          </div>
          </div>
         
        <!--  <div style="display: flex;justify-content: center; align-items: center" class="form-check form-switch mb-2">-->
        <!--  <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">-->
    
        <!--</div>-->
          
          </div>
        </div>
        
           <div class="col-sm-3 mt-2 closeradio">
            <div style="border: 1px solid #696cff;border-radius:10px;">
          <div style="padding:4px" class="d-flex justify-content-center align-items-center ">
              
              <div class="start d-flex">
                  <div class="">
                    <!--<img src="https://yekbun.hellodev.site/public//assets/img/seat.png" alt="" width="40px">-->
              </div>
            <div style="padding-bottom:4px" class="mt-2 d-flex ">
                 <input name="customRadioSvg" class="form-check-input" type="radio" value="" id="customRadioSvg3">
                    &nbsp;  &nbsp;
             <!-- <div style="border-radius:100%;border:1px solid black;padding:0px 2px;" class="d-flex justify-content-center align-items-center">-->
             <!--<strong>.€. </strong> -->
             <!--</div>-->
             <label>.Euro.</label>
             
           
          </div>
          </div>
          
          <!--<div class="toggle-btn">-->
            
                <!--<button style="color: black;" class="btn btn-secondary bg-light ">Price Here</button>-->
          <!--     <button style="color: black;background:#f5f5f9;border:1px solid black"; class="btn ">Price Here</button>-->
          <!--</div>-->
        <!--  <div style="display: flex;justify-content: center; align-items: center" class="form-check form-switch mb-2">-->
        <!--  <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">-->
    
        <!--</div>-->
            <!-- <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Event Title"> -->
          </div>
        </div>
        </div>
        
        </div>
        </div>
      
        
        <!--babar azam end-->
        
      <!--        <div class="col-sm-12 fv-plugins-icon-container">-->
            <!--<label class="form-label" for="plContact">Ticket Sale</label>-->
            
      <!--      <div style="background:#f5f5f9" class="d-flex justify-content-center ">-->
      <!--        <div class="">-->
      <!-- <div class="input-group input-group-merge d-flex justify-content-between">-->
            
      <!--      <div class="start d-flex">-->
           
      <!--      <div class="d-flex ">-->
                
             
      <!--          <div>-->
      <!--     <strong>Activate Sale</strong> -->
      <!--     <p class="m-0">Event Ticket Sale</p>-->
                    
      <!--          </div>-->
      <!--             <div>-->
        <!--            <div style="" class="toggle-btn">-->
               
            
        <!--    <label class="switch">-->
        <!--        <input type="checkbox">-->
        <!--        <span class="slider round"></span>-->
        <!--      </label>-->
        <!--</div>-->
      <!--  <div style="display: flex;justify-content: center; align-items: center" class="form-check form-switch mb-2">-->
      <!--    <input class="form-check-input closetogglebtn" type="checkbox" id="flexSwitchCheckChecked " checked="" >-->
    
      <!--  </div>-->
      <!--          </div>-->
           
      <!--  </div>-->
      <!--  </div>-->
        
        
      
        <!--<div class="toggle-btn">-->
        <!--    <label class="switch">-->
        <!--        <input type="checkbox">-->
        <!--        <span class="slider round"></span>-->
        <!--      </label>-->
        <!--</div>-->
        
      <!--  </div>-->
        
      <!--</div>-->
      <!--      </div>-->
      <!--    </div>-->
          
          
        <!--    <div style="display:flex;justify-content-center align-items-center">-->
        <!--    <div class="">-->
        <!--        <div class="row">-->
        <!--            <div class="dollar ">-->
        <!--                <div style="border-radius:100%;border:1px solid whitesmoke;">-->
        <!--                .$.-->
        <!--                </div>-->
        <!--                Dollar-->
        <!--            </div>-->
        <!--              <div class="dollar ">-->
        <!--                   <div style="border-radius:100%;border:1px solid whitesmoke;">-->
        <!--                .€.-->
        <!--                </div>-->
        <!--                Euro-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
        
        
        
        <!--apna kam banta-->
        
        <!--<div class="d-flex justify-content-center align-items-center" id="closeradio">-->
        <!--<div style="padding:8px;" class="col-sm-6">-->
          
        <!--       <div class="row">-->
        <!--      <div  class="col-sm-6">-->
        <!-- <div style="border: 1px solid #696cff;border-radius:10px;">-->
        <!--  <div style="padding:4px;" class="d-flex justify-content-center align-items-center ">-->
              
        <!--      <div class="start d-flex">-->
                
        <!--      <div style="padding-bottom:4px" class="mt-2 d-flex">-->
        <!--         <input name="customRadioSvg" class="form-check-input" type="radio" value="" id="customRadioSvg3">-->
        <!--          &nbsp  &nbsp-->
        <!--      <div style="border-radius:100%;border:1px solid black;padding:0px 2px;"  class="d-flex justify-content-center align-items-center">-->
        <!--     <strong>.$. </strong> -->
        <!--     </div>-->
        <!--     <label>.Dollar.</label>-->
             
        <!--   </div>-->
        <!--  </div>-->
        <!--  </div>-->
         
        <!--  <div style="display: flex;justify-content: center; align-items: center" class="form-check form-switch mb-2">-->
        <!--  <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">-->
    
        <!--</div>-->
          
        <!--  </div>-->
        <!--</div>-->
        
        <!-- <div class="col-sm-6">-->
        <!--    <div style="border: 1px solid #696cff;border-radius:10px;">-->
        <!--  <div style="padding:4px" class="d-flex justify-content-center align-items-center ">-->
              
        <!--      <div class="start d-flex">-->
        <!--          <div class="">-->
                    <!--<img src="https://yekbun.hellodev.site/public//assets/img/seat.png" alt="" width="40px">-->
        <!--      </div>-->
        <!--    <div style="padding-bottom:4px" class="mt-2 d-flex ">-->
        <!--         <input name="customRadioSvg" class="form-check-input" type="radio" value="" id="customRadioSvg3">-->
        <!--            &nbsp  &nbsp-->
        <!--      <div style="border-radius:100%;border:1px solid black;padding:0px 2px;"  class="d-flex justify-content-center align-items-center">-->
        <!--     <strong>.€. </strong> -->
        <!--     </div>-->
        <!--     <label>.Euro.</label>-->
             
           
        <!--  </div>-->
        <!--  </div>-->
          
          <!--<div class="toggle-btn">-->
            
                <!--<button style="color: black;" class="btn btn-secondary bg-light ">Price Here</button>-->
          <!--     <button style="color: black;background:#f5f5f9;border:1px solid black"; class="btn ">Price Here</button>-->
          <!--</div>-->
        <!--  <div style="display: flex;justify-content: center; align-items: center" class="form-check form-switch mb-2">-->
        <!--  <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">-->
    
        <!--</div>-->
            <!-- <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Event Title"> -->
        <!--  </div>-->
        <!--</div>-->
        <!--</div>-->
        <!--  </div>-->
        <!--</div>-->
        <!--</div>-->
          
          
<!--              <div class="col-sm-6 fv-plugins-icon-container">-->
<!--            <label class="form-label" for="plContact">Select Currency</label>-->
<!--            <div class="">-->
<!--              <div class="">-->
<!--       <div class="input-group input-group-merge d-flex justify-content-between">-->
            
<!--            <div class="start d-flex">-->
             
<!--            <div class="">-->
           
<!--             <div class="toggle-btn">-->
<!--            <label class="switch">-->
<!--                <input type="checkbox">-->
<!--                <span class="slider round"></span>-->
<!--              </label>-->
<!--        </div>-->
<!--        </div>-->
<!--           <div class="">-->
                <!--<img src="{{asset('assets/img/dollar.webp')}}" alt="" width="40px" >-->
<!--                <span>Standard</span>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div style="-->
<!--    margin-right: -169px;-->
<!--" class="toggle-btn">-->
<!--            <label class="switch">-->
<!--                <input type="checkbox">-->
<!--                <span class="slider round"></span>-->
<!--              </label>-->
<!--        </div>-->
<!--        <div class="">-->
                <!--<img src="{{asset('assets/img/dollar.webp')}}" alt="" width="40px" >-->
<!--                <span>V.I.P</span>-->
<!--            </div>-->
          <!-- <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Event Title"> -->
<!--        </div>-->
        
<!--      </div>-->
<!--            </div>-->
<!--          </div>-->
          <!---->
        <!--  <div class="col-sm-12">-->
        <!--      <div class="row">-->
        
        <!--    <div style="width:48%;" class="col-sm-6 d-flex p-2">-->
        <!--        <div style="border:1px solid #696cff;width:100%;border-radius:10px;">-->
        <!--        <div style="width:100%">-->
            <!--<label class="form-label" for="plContact">Standard Ticket</label>-->
           
        <!--    <div style="display: flex;justify-content: center; align-items: center;height:50px;" class="">-->
        <!--    <h1 style=" display: contents;" class="form-label d-contents">Standard Ticket</h1>-->
        <!--          <div style="" class="toggle-btn ">-->
        <!--    <label class="switch">-->
        <!--        <input type="checkbox">-->
        <!--        <span class="slider round"></span>-->
        <!--      </label>-->
        <!--</div>-->
        <!--<input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">-->
        <!--<div style="display: flex;justify-content: center; align-items: center" class="form-check form-switch ">-->
        <!--  <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">-->
    
        <!--</div>-->
        <!--</div>-->
      
        <!--</div>-->
        <!--</div>-->
        <!--</div>-->
        <!--       <div  style="width:48%;"  class="col-sm-6 d-flex p-2">-->
        <!--           <div style="border:1px solid #696cff;width:100%;border-radius:10px;">-->
        <!--           <div  style="width:100%;">-->
            <!--<label class="form-label" for="plContact">Standard Ticket</label>-->
           
        <!--    <div style="display: flex;justify-content: center;align-items: center;height:50px;";>-->
        <!--    <h1 style=" display: contents;" class="form-label d-contents">VIP Ticket</h1>-->
                
        <!--<div style="" class="toggle-btn">-->
                 
            
        <!--    <label class="switch">-->
        <!--        <input type="checkbox">-->
        <!--        <span class="slider round"></span>-->
        <!--      </label>-->
        <!--</div>-->
        <!--<div style="display: flex;justify-content: center; align-items: center" class="form-check form-switch ">-->
        <!--  <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">-->
    
        <!--</div>-->
        <!--</div>-->
        <!--</div>-->
        <!--</div>-->
        <!--</div>-->
        <!--</div>-->
        
        <!--  </div>-->
            <!--<hr>-->
            <div class="row">
       
        
        <!--babu bhaiya-->
        <div class="col-sm-6 mb-4">
    <div class="card ">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2">Standard Ticket</h5>
        <!--<div class="dropdown">-->
        <!--  <button class="btn p-0" type="button" id="upgradePlanCard" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
        <!--    <i class="bx bx-dots-vertical-rounded"></i>-->
        <!--  </button>-->
        <!--  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="upgradePlanCard" style="">-->
        <!--    <a class="dropdown-item" href="javascript:void(0);">Select All</a>-->
        <!--    <a class="dropdown-item" href="javascript:void(0);">Refresh</a>-->
        <!--    <a class="dropdown-item" href="javascript:void(0);">Share</a>-->
        <!--  </div>-->
        <!--</div>-->
        <div style="display: flex;justify-content: center; align-items: center" class="form-check form-switch ">
          <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">
    
        </div>
      </div>
      <div class="card-body">
        <!--<p class="mb-4">Please make the payment to start enjoying all the features of our premium plan as soon as possible.</p>-->
        <!--<div class="d-flex border-primary p-2 border rounded mb-4">-->
        <!--  <div class="avatar flex-shrink-0 me-3">-->
        <!--    <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/icons/unicons/briefcase.png" alt="User" class="rounded">-->
        <!--  </div>-->
        <!--  <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">-->
            <!--<div class="me-2">-->
            <!--  <p class="mb-0">Business</p>-->
            <!--  <a href="javascript:void(0)" class="small" data-bs-target="#upgradePlanModal" data-bs-toggle="modal">Upgrade Plan</a>-->
            <!--</div>-->
            <!--<div class="user-progress">-->
            <!--  <div class="d-flex justify-content-center">-->
            <!--    <sup class="mt-3 mb-0 me-1">$</sup>-->
            <!--    <h3 class="mb-0">2,124</h3>-->
            <!--    <sub class="mt-auto mb-2"> /Year</sub>-->
            <!--  </div>-->
            <!--</div>-->
        <!--  </div>-->
        <!--</div>-->
        <form id="paymentDetailsForm" onsubmit="return false" class="pt-2">
          <h6 class="mb-4">Options</h6>
          <div class="d-flex mb-4">
            <div class="me-3">
              <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/icons/payments/visa-light.png" alt="Visa" class="img-fluid w-px-50 h-px-30" data-app-light-img="icons/payments/visa-light.png" data-app-dark-img="icons/payments/visa-dark.png">
            </div>
            <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
              <div class="d-flex flex-column">
                <h6 class="mb-0">Seat</h6>
                <small class="text-muted">8562 xxxx xxxx 4563</small>
              </div>
              <div class="w-px-75">
                <input type="text" class="form-control cvv-code-payment" maxlength="3" placeholder="CVV">
              </div>
            </div>
          </div>
          <div class="d-flex mb-4">
            <div class="me-3">
              <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/icons/payments/master-light.png" class="img-fluid w-px-50 h-px-30" alt="MasterCard" data-app-light-img="icons/payments/master-light.png" data-app-dark-img="icons/payments/master-dark.png">
            </div>
            <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
              <div class="d-flex flex-column">
                <h6 class="mb-0">Price Adult</h6>
                <small class="text-muted">18 Years</small>
              </div>
              <div class="w-px-75">
                <input type="text" class="form-control cvv-code-payment" maxlength="3" placeholder="CVV">
              </div>
            </div>
          </div>
          
           <div class="d-flex mb-4">
            <div class="me-3">
              <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/icons/payments/master-light.png" class="img-fluid w-px-50 h-px-30" alt="MasterCard" data-app-light-img="icons/payments/master-light.png" data-app-dark-img="icons/payments/master-dark.png">
            </div>
            <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
              <div class="d-flex flex-column">
                <h6 class="mb-0">Price Kids</h6>
                <small class="text-muted">15 Years</small>
              </div>
              <div class="w-px-75">
                <input type="text" class="form-control cvv-code-payment" maxlength="3" placeholder="CVV">
              </div>
            </div>
          </div>
           <div class="d-flex mb-4">
            <div class="me-3">
              <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/icons/payments/master-light.png" class="img-fluid w-px-50 h-px-30" alt="MasterCard" data-app-light-img="icons/payments/master-light.png" data-app-dark-img="icons/payments/master-dark.png">
            </div>
            <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
              <div class="d-flex flex-column">
                <h6 class="mb-0">Price Kids</h6>
                <small class="text-muted">15 Years</small>
              </div>
              <div class="w-px-75">
                <input type="text" class="form-control cvv-code-payment" maxlength="3" placeholder="CVV">
              </div>
            </div>
          </div>
          <!--<a href="javascript:;" class="fw-medium d-block my-2" data-bs-toggle="modal" data-bs-target="#addNewCCModal"> Add Payment Method </a>-->
          <!--<div class="col-12 mb-4">-->
          <!--  <input id="addEmail" name="addEmail" class="form-control" type="text" placeholder="Email Address">-->
          <!--</div>-->
          <!--<div class="col-12 text-center">-->
          <!--  <button type="submit" class="btn btn-primary w-100 d-grid">Process to payment</button>-->
          <!--</div>-->
        </form>
      </div>
    </div>
  </div>
        
        <!--babu bhaiya end-->
   
<!--babu bhaiya 2-->
       <div class="col-sm-6 mb-4">
    <div class="card">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2">VIP Ticket</h5>
        <!--<div class="dropdown">-->
        <!--  <button class="btn p-0" type="button" id="upgradePlanCard" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
        <!--    <i class="bx bx-dots-vertical-rounded"></i>-->
        <!--  </button>-->
        <!--  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="upgradePlanCard" style="">-->
        <!--    <a class="dropdown-item" href="javascript:void(0);">Select All</a>-->
        <!--    <a class="dropdown-item" href="javascript:void(0);">Refresh</a>-->
        <!--    <a class="dropdown-item" href="javascript:void(0);">Share</a>-->
        <!--  </div>-->
        <!--</div>-->
        <div style="display: flex;justify-content: center; align-items: center" class="form-check form-switch ">
          <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">
    
        </div>
      </div>
      <div class="card-body">
        <!--<p class="mb-4">Please make the payment to start enjoying all the features of our premium plan as soon as possible.</p>-->
        <!--<div class="d-flex border-primary p-2 border rounded mb-4">-->
        <!--  <div class="avatar flex-shrink-0 me-3">-->
        <!--    <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/icons/unicons/briefcase.png" alt="User" class="rounded">-->
        <!--  </div>-->
        <!--  <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">-->
            <!--<div class="me-2">-->
            <!--  <p class="mb-0">Business</p>-->
            <!--  <a href="javascript:void(0)" class="small" data-bs-target="#upgradePlanModal" data-bs-toggle="modal">Upgrade Plan</a>-->
            <!--</div>-->
            <!--<div class="user-progress">-->
            <!--  <div class="d-flex justify-content-center">-->
            <!--    <sup class="mt-3 mb-0 me-1">$</sup>-->
            <!--    <h3 class="mb-0">2,124</h3>-->
            <!--    <sub class="mt-auto mb-2"> /Year</sub>-->
            <!--  </div>-->
            <!--</div>-->
        <!--  </div>-->
        <!--</div>-->
        <form id="paymentDetailsForm" onsubmit="return false" class="">
          <h6 class="mb-4">Options</h6>
          <div class="d-flex mb-4">
            <div class="me-3">
              <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/icons/payments/visa-light.png" alt="Visa" class="img-fluid w-px-50 h-px-30" data-app-light-img="icons/payments/visa-light.png" data-app-dark-img="icons/payments/visa-dark.png">
            </div>
            <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
              <div class="d-flex flex-column">
                <h6 class="mb-0">Seat</h6>
                <small class="text-muted">8562 xxxx xxxx 4563</small>
              </div>
              <div class="w-px-75">
                <input type="text" class="form-control cvv-code-payment" maxlength="3" placeholder="CVV">
              </div>
            </div>
          </div>
          <div class="d-flex mb-4">
            <div class="me-3">
              <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/icons/payments/master-light.png" class="img-fluid w-px-50 h-px-30" alt="MasterCard" data-app-light-img="icons/payments/master-light.png" data-app-dark-img="icons/payments/master-dark.png">
            </div>
            <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
              <div class="d-flex flex-column">
                <h6 class="mb-0">Price Adult</h6>
                <small class="text-muted">18 Years</small>
              </div>
              <div class="w-px-75">
                <input type="text" class="form-control cvv-code-payment" maxlength="3" placeholder="CVV">
              </div>
            </div>
          </div>
          
           <div class="d-flex mb-4">
            <div class="me-3">
              <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/icons/payments/master-light.png" class="img-fluid w-px-50 h-px-30" alt="MasterCard" data-app-light-img="icons/payments/master-light.png" data-app-dark-img="icons/payments/master-dark.png">
            </div>
            <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
              <div class="d-flex flex-column">
                <h6 class="mb-0">Price Kids</h6>
                <small class="text-muted">15 Years</small>
              </div>
              <div class="w-px-75">
                <input type="text" class="form-control cvv-code-payment" maxlength="3" placeholder="CVV">
              </div>
            </div>
          </div>
           <div class="d-flex mb-4">
            <div class="me-3">
              <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/icons/payments/master-light.png" class="img-fluid w-px-50 h-px-30" alt="MasterCard" data-app-light-img="icons/payments/master-light.png" data-app-dark-img="icons/payments/master-dark.png">
            </div>
            <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
              <div class="d-flex flex-column">
                <h6 class="mb-0">Price Kids</h6>
                <small class="text-muted">15 Years</small>
              </div>
              <div class="w-px-75">
                <input type="text" class="form-control cvv-code-payment" maxlength="3" placeholder="CVV">
              </div>
            </div>
          </div>
          <!--<a href="javascript:;" class="fw-medium d-block my-2" data-bs-toggle="modal" data-bs-target="#addNewCCModal"> Add Payment Method </a>-->
          <!--<div class="col-12 mb-4">-->
          <!--  <input id="addEmail" name="addEmail" class="form-control" type="text" placeholder="Email Address">-->
          <!--</div>-->
          <!--<div class="col-12 text-center">-->
          <!--  <button type="submit" class="btn btn-primary w-100 d-grid">Process to payment</button>-->
          <!--</div>-->
        </form>
      </div>
    </div>
  </div>
<!--babu bhaiya 2 end-->
            </div>
          
          <br>
          <!--addd new cards-->
        <!--  <div style=background:white; class="col-sm-12">-->
        <!--  <div class="card-body">-->
        <!--    <div class="report-list">-->
        <!--      <div class="report-list-item rounded-2 mb-3">-->
        <!--        <div class="d-flex align-items-start">-->
        <!--          <div class="report-list-icon shadow-sm me-2">-->
        <!--            <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/svg/icons/paypal-icon.svg" width="22" height="22" alt="Paypal">-->
        <!--          </div>-->
        <!--          <div class="d-flex justify-content-between align-items-end w-100 flex-wrap gap-2">-->
                      
        <!--            <div class="d-flex flex-column">-->
        <!--              <span>Income</span>-->
        <!--              <h5 class="mb-0">$42,845</h5>-->
        <!--            </div>-->
                    
        <!--            <div style="padding-left: 550px;" class="toggle-btn">-->
        <!--          <span>Free</span>-->
            
        <!--    <label class="switch">-->
        <!--        <input type="checkbox">-->
        <!--        <span class="slider round"></span>-->
        <!--      </label>-->
        <!--</div>-->
        <!--<div style="display: flex;justify-content: center; align-items: center;padding-left: 610px;" class="form-check form-switch mb-2">-->
        <!--  <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">-->
   
        <!--</div>-->
        <!--            <small class="text-success">+2.34k</small>-->
        <!--          </div>-->
        <!--        </div>-->
        <!--      </div>-->
              <!--<div class="report-list-item rounded-2 mb-3">-->
              <!--  <div class="d-flex align-items-start">-->
              <!--    <div class="report-list-icon shadow-sm me-2">-->
              <!--      <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/svg/icons/shopping-bag-icon.svg" width="22" height="22" alt="Shopping Bag">-->
              <!--    </div>-->
              <!--    <div class="d-flex justify-content-between align-items-end w-100 flex-wrap gap-2">-->
              <!--      <div class="d-flex flex-column">-->
              <!--        <span>Expense</span>-->
              <!--        <h5 class="mb-0">$38,658</h5>-->
              <!--      </div>-->
              <!--      <small class="text-danger">-1.15k</small>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--</div>-->
        <!--      <div class="report-list-item rounded-2">-->
        <!--        <div class="d-flex align-items-start">-->
        <!--          <div class="report-list-icon shadow-sm me-2">-->
                    <!--<img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/svg/icons/wallet-icon.svg" width="22" height="22" alt="Wallet">-->
        <!--          </div>-->
                  <!--<div class="d-flex justify-content-between align-items-end w-100 flex-wrap gap-2">-->
                  <!--  <div class="d-flex flex-column">-->
                  <!--    <span>Profit</span>-->
                  <!--    <h5 class="mb-0">$18,220</h5>-->
                  <!--  </div>-->
                  <!--  <small class="text-success">+1.35k</small>-->
                  <!--</div>-->
        <!--        </div>-->
        <!--      </div>-->
        <!--    </div>-->
        <!--  </div>-->
        <!--  </div>-->
          <!--addd new cards-->
          
          
          
        
         
        
          <!--addd-->
          
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev" onclick="nextStep('step3two', 'step2two')"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
              <span class="align-middle d-sm-inline-block d-none">Previous</span>
            </button>
            <!--<button class="btn btn-primary btn-next"  onclick="nextStep('step1', 'step2')"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>-->
            
            <button type="button" class="btn btn-primary btn-next" onclick="nextStep('step3two', 'step4two')" >Next</button>
          </div>
        </div>
      </div>

      <!-- Property Details -->
      <div id="property-details" class="content fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-12">
            <div class="row">
              <div class="col-xl mb-xl-0 mb-2">
                <div class="form-check custom-option custom-option-icon checked">
                  <label class="form-check-label custom-option-content" for="customRadioSell">
                    <span class="custom-option-body">
                      <i class="bx bx-home"></i>
                      <span class="custom-option-title">Sale the property</span>
                      <small>Post your property for sale.<br> Unlimited free listing.</small>
                    </span>
                    <input name="plPropertySaleRent" class="form-check-input" type="radio" value="1" id="customRadioSell" checked="">
                  </label>
                </div>
              </div>
              <div class="col-xl mb-xl-0 mb-2">
                <div class="form-check custom-option custom-option-icon">
                  <label class="form-check-label custom-option-content" for="customRadioRent">
                    <span class="custom-option-body">
                      <i class="bx bx-wallet"></i>
                      <span class="custom-option-title">Rent the property</span>
                      <small>Post your property for rent.<br> Unlimited free listing.</small>
                    </span>
                    <input name="plPropertySaleRent" class="form-check-input" type="radio" value="2" id="customRadioRent">
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 fv-plugins-icon-container">
            <label class="form-label" for="plPropertyType">Property Type</label>
            <div class="position-relative"><select id="plPropertyType" name="plPropertyType" class="select2 form-select select2-hidden-accessible" data-allow-clear="true" data-select2-id="plPropertyType" tabindex="-1" aria-hidden="true">
              <option value="" data-select2-id="4">Select Property Type</option>
              <option value="10002">Flat/ Apartment</option>
              <option value="10001">Residential House</option>
              <option value="10017">Villa</option>
              <option value="10003">Builder Floor Apartment</option>
              <option value="10000">Residential Land/ Plot</option>
              <option value="10021">Penthouse</option>
              <option value="10022">Studio Apartment</option>
            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="3" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-plPropertyType-container"><span class="select2-selection__rendered" id="select2-plPropertyType-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select property type</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
          <div class="col-sm-6 fv-plugins-icon-container">
            <label class="form-label" for="plZipCode">Zip Code</label>
            <input type="number" id="plZipCode" name="plZipCode" class="form-control" placeholder="99950">
          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
          <div class="col-sm-6">
            <label class="form-label" for="plCountry">Country</label>
            <div class="position-relative"><select id="plCountry" name="plCountry" class="select2 form-select select2-hidden-accessible" data-allow-clear="true" data-select2-id="plCountry" tabindex="-1" aria-hidden="true">
              <option value="" data-select2-id="2">Select</option>
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
            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-plCountry-container"><span class="select2-selection__rendered" id="select2-plCountry-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select country</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plState">State</label>
            <input type="text" id="plState" name="plState" class="form-control" placeholder="California">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plCity">City</label>
            <input type="text" id="plCity" name="plCity" class="form-control" placeholder="Los Angeles">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plLandmark">Landmark</label>
            <input type="text" id="plLandmark" name="plLandmark" class="form-control" placeholder="Nr. Hard Rock Cafe">
          </div>
          <div class="col-lg-12">
            <label class="form-label" for="plAddress">Address</label>
            <textarea id="plAddress" name="plAddress" class="form-control" rows="2" placeholder="12, Business Park"></textarea>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Property Features -->
      <div id="property-features" class="content fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-sm-6">
            <label class="form-label d-block" for="plBedrooms">Bedrooms</label>
            <input type="number" id="plBedrooms" name="plBedrooms" class="form-control" placeholder="3">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plFloorNo">Floor No</label>
            <input type="number" id="plFloorNo" name="plFloorNo" class="form-control" placeholder="12">
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plBathrooms">Bathrooms</label>
            <input type="number" id="plBathrooms" name="plBathrooms" class="form-control" placeholder="4">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plFurnishedStatus">Furnished Status</label>
            <select id="plFurnishedStatus" name="plFurnishedStatus" class="form-select">
              <option selected="" disabled="" value="">Select furnished status </option>
              <option value="1">Fully furnished</option>
              <option value="2">Furnished</option>
              <option value="3">Semi furnished</option>
              <option value="4">Unfurnished</option>
            </select>
          </div>
          <div class="col-lg-12">
            <label class="form-label" for="plFurnishingDetails">Furnishing Details</label>
            <tags class="tagify  form-control" tabindex="-1">
            <tag title="Fridge" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="Fridge"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">Fridge</span></div></tag><tag title="AC" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="AC"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">AC</span></div></tag><tag title="TV" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="TV"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">TV</span></div></tag><tag title="WiFi" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="WiFi"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">WiFi</span></div></tag><span contenteditable="" tabindex="0" data-placeholder="select options" aria-placeholder="select options" class="tagify__input" role="textbox" aria-autocomplete="both" aria-multiline="false"></span>
                ​
        </tags><input id="plFurnishingDetails" name="plFurnishingDetails" class="form-control" placeholder="select options" value="Fridge, AC, TV, WiFi" tabindex="-1">
          </div>
          <div class="col-sm-6">
            <label class="form-label">Is there any common area?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plCommonAreaRadio" id="plCommonAreaRadioYes" checked="">
              <label class="form-check-label" for="plCommonAreaRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plCommonAreaRadio" id="plCommonAreaRadioNo">
              <label class="form-check-label" for="plCommonAreaRadioNo">No</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Is there any attached balcony?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plAttachedBalconyRadio" id="plAttachedBalconyRadioYes" checked="">
              <label class="form-check-label" for="plAttachedBalconyRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plAttachedBalconyRadio" id="plAttachedBalconyRadioNo">
              <label class="form-check-label" for="plAttachedBalconyRadioNo">No</label>
            </div>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Property Area -->
      <div id="property-area" class="content fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-sm-6">
            <label class="form-label d-block" for="plTotalArea">Total Area</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plTotalArea" name="plTotalArea" placeholder="1000" aria-describedby="pl-total-area">
              <span class="input-group-text" id="pl-total-area">sq-ft</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plCarpetArea">Carpet Area</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plCarpetArea" name="plCarpetArea" placeholder="800" aria-describedby="pl-carpet-area">
              <span class="input-group-text" id="pl-carpet-area">sq-ft</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plPlotArea">Plot Area</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plPlotArea" name="plPlotArea" placeholder="800" aria-describedby="pl-plot-area">
              <span class="input-group-text" id="pl-plot-area">sq-yd</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plAvailableFrom">Available From</label>
            <input type="text" id="plAvailableFrom" name="plAvailableFrom" class="form-control flatpickr flatpickr-input" placeholder="YYYY-MM-DD" readonly="readonly">
          </div>
          <div class="col-sm-6">
            <label class="form-label">Possession Status</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plPossessionStatus" id="plUnderConstruction" checked="">
              <label class="form-check-label" for="plUnderConstruction">Under Construction</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plPossessionStatus" id="plReadyToMoveRadio">
              <label class="form-check-label" for="plReadyToMoveRadio">Ready to Move</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Transaction Type</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plTransectionType" id="plNewProperty" checked="">
              <label class="form-check-label" for="plNewProperty">New Property</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plTransectionType" id="plResaleProperty">
              <label class="form-check-label" for="plResaleProperty">Resale</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Is Property Facing Main Road?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plRoadFacingRadio" id="plRoadFacingRadioYes" checked="">
              <label class="form-check-label" for="plRoadFacingRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plRoadFacingRadio" id="plRoadFacingRadioNo">
              <label class="form-check-label" for="plRoadFacingRadioNo">No</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Gated Colony?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plGatedColonyRadio" id="plGatedColonyRadioYes" checked="">
              <label class="form-check-label" for="plGatedColonyRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plGatedColonyRadio" id="plGatedColonyRadioNo">
              <label class="form-check-label" for="plGatedColonyRadioNo">No</label>
            </div>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="align-middle d-sm-inline-block " onclick="prevStep('step3', 'step2')">Previous</span></button>
            <!--<span class="align-middle d-sm-inline-block " onclick="prevStep('step2', 'step1')">Previous</span>-->
            <button type="button" class="btn btn-primary btn-next" onclick="nextStep('step3','step4')">Next</button>
            <!--<button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>-->
          </div>
        </div>
      </div>

      <!-- Price Details -->
      <div id="price-details" class="content fv-plugins-bootstrap5 fv-plugins-framework">
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
              <option value="1" selected="">Monthly</option>
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
              <input class="form-check-input" type="radio" name="plShowPriceRadio" id="plNagotiablePrice" checked="">
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
              <label class="form-check-label" for="plOtherCharges">Stamp Duty &amp; Registration charges excluded.</label>
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
            <br>
            <!--<button type="button" onclick="prevStep('step3', 'step2')">Previous</button>-->
            <!--<button type="submit">Submit</button>-->
        </div>
        
        
        
        
        
        
     
     
  
  
  
  
  
  




   <!--step 4 two-->
        <div class="stepnew" id="step4two">
               <div id="wizard-property-listing" class="bs-stepper vertical mt-2 linear">
 <div class="bs-stepper-header">
            <button type="button" class="btn btn-primary btn-next">Add new Conference</button>
            <br>
    <div class="step " data-target="#personal-details">
      <button type="button" class="step-trigger" aria-selected="false">
        <span class="bs-stepper-circle">
                   
          <i class="bx bx-user"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Events Details</span>
          <span class="bs-stepper-subtitle">Title Location</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <div class="step" data-target="#property-details">
      <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
        <span class="bs-stepper-circle">
          <i class="bx bx-home"></i>
        </span>
        <span class="bs-stepper-label">
            <span class="bs-stepper-title">Event Start</span>
          <span class="bs-stepper-subtitle">Date and Time</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <!--<div class="step " data-target="#property-features">-->
    <!--  <button type="button" class="step-trigger" aria-selected="true">-->
    <!--    <span class="bs-stepper-circle">-->
    <!--      <i class="bx bx-star"></i>-->
    <!--    </span>-->
    <!--   <span class="bs-stepper-label">-->
    <!--      <span class="bs-stepper-title">Tickets</span>-->
    <!--      <span class="bs-stepper-subtitle">Sale Tickets</span>-->
    <!--    </span>-->
    <!--  </button>-->
    <!--</div>-->
    <div class="line"></div>
    <div class="step active" data-target="#property-area">
      <button type="button" class="step-trigger" aria-selected="true" >
        <span class="bs-stepper-circle">
          <i class="bx bx-map"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Notifications</span>
          <span class="bs-stepper-subtitle">Add Notifications</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <div class="step" data-target="#price-details">
      <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
        <span class="bs-stepper-circle">
          <i class="bx bx-dollar"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Contact</span>
          <span class="bs-stepper-subtitle">Contact Person</span>
        </span>
      </button>
    </div>
  </div>
  <div class="bs-stepper-content">
    <form id="wizard-property-listing-form" onsubmit="return false">

      <!-- Personal Details -->
      <div id="personal-details" class="content active dstepper-block fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-12">
            <div class="row">
            <div class="d-flex justify-content-center align-items-center">
              <img src="{{asset('assets/img/servicehead.png')}}" width="230px" height="auto"> 
              </div>
              
      <!--       <div class="container" style="width:364px;">-->


      <!--  <input name="file1" type="file" class="dropify" data-height="100" />-->
      <!--</div>-->
      
   
             
            </div>
          </div>
        
              <div class="col-sm-12 fv-plugins-icon-container">
                  <div class="row">
                      <h4>Select Service</h4>
                       <div class="col-sm-6">
                       <div style="padding:10px;border:1px solid whitesmoke;border-radius: 0.375rem !important;border-color: #696cff !important;" class="">
                          
                         <div style="padding:10px" class="report-list-item rounded-2">
                <div class="d-flex align-items-start">
                  <div style="background-color: #fff;border-radius: 0.375rem;padding:10px;" class="report-list-icon shadow-sm me-2">
                    <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/svg/icons/paypal-icon.svg" width="22" height="22" alt="Paypal">
                  </div>
                  <div class="d-flex justify-content-between align-items-end w-100 flex-wrap gap-2">
                    <div class="d-flex flex-column">
                      <span>Income</span>
                      <h5 style="color:#696cff" class="mb-0">$42,845</h5>
                    </div>
                    <div class="user-progress">
              <div class="">
                  <!--add-->
                  <div style="display: flex;justify-content: center; align-items: center" class="form-check form-switch mb-2">
          <input class="form-check-input closetogglebtn" type="checkbox" id="flexSwitchCheckChecked " checked="">
    
        </div>
                  
                  <!--add-->
                <!--<sup class="mt-3 mb-0 me-1">$</sup>-->
                <!--<h3 class="mb-0">2,124</h3>-->
                <!--<sub class="mt-auto mb-2"> /Year</sub>-->
              </div>
            </div>
                    <!--<small class="text-success">+2.34k</small>-->
                  </div>
                </div>
              </div>
              
                       </div>
                       </div>
                         <div class="col-sm-6">
                          <div style="padding:10px;border:1px solid whitesmoke;border-radius: 0.375rem !important;border-color: #696cff !important;" class="">
                         <div style="padding:10px" class="report-list-item rounded-2 ">
                <div class="d-flex align-items-start">
                  <div style="background-color: #fff;border-radius: 0.375rem;padding:10px;" class="report-list-icon shadow-sm me-2">
                    <!--<img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/svg/icons/paypal-icon.svg" width="22ht" heig="22" alt="Paypal">-->
                    <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/svg/icons/shopping-bag-icon.svg" width="22" height="22" alt="Shopping Bag">
                  </div>
                  <div class="d-flex justify-content-between align-items-end w-100 flex-wrap gap-2">
                    <div class="d-flex flex-column">
                      <span>Expense</span>
                      <h5 style="color:#696cff" class="mb-0">$38,658</h5>
                    </div>
                    <div class="user-progress">
              <div class="">
                  <!--add-->
                  <div style="display: flex;justify-content: center; align-items: center" class="form-check form-switch mb-2">
          <input class="form-check-input closetogglebtn" type="checkbox" id="flexSwitchCheckChecked " checked="">
    
        </div>
                  
                  <!--add-->
                <!--<sup class="mt-3 mb-0 me-1">$</sup>-->
                <!--<h3 class="mb-0">2,124</h3>-->
                <!--<sub class="mt-auto mb-2"> /Year</sub>-->
              </div>
            </div>
                    <!--<small class="text-success">+2.34k</small>-->
                  </div>
                </div>
              </div>
                       </div>
                       </div>
                        <div class="col-sm-6 mt-2">
                          <div style="padding:10px;border:1px solid whitesmoke;border-radius: 0.375rem !important;border-color: #696cff !important;" class="">
                         <div style="padding:10px" class="report-list-item rounded-2 ">
                <div class="d-flex align-items-start">
                  <div style="background-color: #fff;border-radius: 0.375rem;padding:10px;" class="report-list-icon shadow-sm me-2">
                    <!--<img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/svg/icons/paypal-icon.svg" width="22" height="22" alt="Paypal">-->
                    <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/svg/icons/wallet-icon.svg" width="22" height="22" alt="Wallet">
                  </div>
                  <div class="d-flex justify-content-between align-items-end w-100 flex-wrap gap-2">
                    <div class="d-flex flex-column">
                      <span>Profit</span>
                      <h5 style="color:#696cff" class="mb-0">$18,220</h5>
                    </div>
                    <div class="user-progress">
              <div class="">
                  <!--add-->
                  <div style="display: flex;justify-content: center; align-items: center" class="form-check form-switch mb-2">
          <input class="form-check-input closetogglebtn" type="checkbox" id="flexSwitchCheckChecked " checked="">
    
        </div>
                  
                  <!--add-->
                <!--<sup class="mt-3 mb-0 me-1">$</sup>-->
                <!--<h3 class="mb-0">2,124</h3>-->
                <!--<sub class="mt-auto mb-2"> /Year</sub>-->
              </div>
            </div>
                    <!--<small class="text-success">+2.34k</small>-->
                  </div>
                </div>
              </div>
                       </div>
                       </div>
                       
      <!--                      <div  style="padding:10px;border:1px solid whitesmoke;" class="col-sm-6">-->
      <!--                     <div class="">-->
      <!-- <div class="input-group input-group-merge d-flex justify-content-between">-->
            
      <!--      <div class="start d-flex">-->
      <!--          <div class="">-->
      <!--          <img src="https://yekbun.hellodev.site/public//assets/img/soda.png" alt="" width="40px">-->
      <!--      </div>-->
      <!--      <div class="d-flex align-items-center">-->
      <!--     <strong class="">Free Drinks</strong> -->
           
      <!--  </div>-->
      <!--  </div>-->
        <!--<div class="toggle-btn mt-3 d-flex align-items-center">-->
        <!--    <label class="switch">-->
        <!--        <input type="checkbox">-->
        <!--        <span class="slider round"></span>-->
        <!--      </label>-->
        <!--</div>-->
      <!--  <div style="display: flex;justify-content: center; align-items: center" class="form-check form-switch mb-2">-->
      <!--    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">-->
    
      <!--  </div>-->
          <!-- <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Event Title"> -->
      <!--  </div>-->
        
      <!--</div>-->
      <!--                 </div>-->
                       
                       
                       
      <!--                      <div  style="padding:10px;border:1px solid whitesmoke;" class="col-sm-6">-->
      <!--                     <div class="">-->
      <!-- <div class="input-group input-group-merge d-flex justify-content-between">-->
            
      <!--      <div class="start d-flex">-->
      <!--          <div class="">-->
      <!--          <img src="https://yekbun.hellodev.site/public//assets/img/soda.png" alt="" width="40px">-->
      <!--      </div>-->
      <!--      <div class="d-flex align-items-center">-->
      <!--     <strong class="">Snack</strong> -->
           
      <!--  </div>-->
      <!--  </div>-->
        <!--<div class="toggle-btn mt-3 d-flex align-items-center">-->
        <!--    <label class="switch">-->
        <!--        <input type="checkbox">-->
        <!--        <span class="slider round"></span>-->
        <!--      </label>-->
        <!--</div>-->
      <!--  <div style="display: flex;justify-content: center; align-items: center" class="form-check form-switch mb-2">-->
      <!--    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">-->
    
      <!--  </div>-->
          <!-- <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Event Title"> -->
      <!--  </div>-->
        
      <!--</div>-->
      <!--                 </div>-->
                       
                       
                       
      <!--                      <div  style="padding:10px;border:1px solid whitesmoke;" class="col-sm-6">-->
      <!--                     <div class="">-->
      <!-- <div class="input-group input-group-merge d-flex justify-content-between">-->
            
      <!--      <div class="start d-flex">-->
      <!--          <div class="">-->
      <!--          <img src="https://yekbun.hellodev.site/public//assets/img/soda.png" alt="" width="40px">-->
      <!--      </div>-->
      <!--      <div class="d-flex align-items-center">-->
      <!--     <strong class="">Snack</strong> -->
           
      <!--  </div>-->
      <!--  </div>-->
        <!--<div class="toggle-btn mt-3 d-flex align-items-center">-->
        <!--    <label class="switch">-->
        <!--        <input type="checkbox">-->
        <!--        <span class="slider round"></span>-->
        <!--      </label>-->
        <!--</div>-->
      <!--  <div style="display: flex;justify-content: center; align-items: center" class="form-check form-switch mb-2">-->
      <!--    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">-->
    
      <!--  </div>-->
          <!-- <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Event Title"> -->
      <!--  </div>-->
        
      <!--</div>-->
      <!--                 </div>-->
                       
                       
                       
      <!--                      <div  style="padding:10px;border:1px solid whitesmoke;" class="col-sm-6">-->
      <!--                     <div class="">-->
      <!-- <div class="input-group input-group-merge d-flex justify-content-between">-->
            
      <!--      <div class="start d-flex">-->
      <!--          <div class="">-->
      <!--          <img src="https://yekbun.hellodev.site/public//assets/img/soda.png" alt="" width="40px">-->
      <!--      </div>-->
      <!--      <div class="d-flex align-items-center">-->
      <!--     <strong class="">Snack</strong> -->
           
      <!--  </div>-->
      <!--  </div>-->
        <!--<div class="toggle-btn mt-3 d-flex align-items-center">-->
        <!--    <label class="switch">-->
        <!--        <input type="checkbox">-->
        <!--        <span class="slider round"></span>-->
        <!--      </label>-->
        <!--</div>-->
      <!--  <div style="display: flex;justify-content: center; align-items: center" class="form-check form-switch mb-2">-->
      <!--    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">-->
    
      <!--  </div>-->
          <!-- <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Event Title"> -->
      <!--  </div>-->
        
      <!--</div>-->
      <!--                 </div>-->
      
      
  
      
      
                       
                  </div>
                 
        </div>
          
          <!--third start-->
          
        
        
        
  
          
         
          
          
          
          
          
           
         
          <div style="margin-top:200px" class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev" onclick="nextStep('step4two', 'step2two')"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
              <span class="align-middle d-sm-inline-block d-none">Previous</span>
            </button>
            <!--<button class="btn btn-primary btn-next"  onclick="nextStep('step1', 'step2')"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>-->
            
            <button type="button" class="btn btn-primary btn-next" onclick="nextStep('step4two', 'step5two')" >Next</button>
          </div>
       
      </div>

      <!-- Property Details -->
      <div id="property-details" class="content fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-12">
            <div class="row">
              <div class="col-xl mb-xl-0 mb-2">
                <div class="form-check custom-option custom-option-icon checked">
                  <label class="form-check-label custom-option-content" for="customRadioSell">
                    <span class="custom-option-body">
                      <i class="bx bx-home"></i>
                      <span class="custom-option-title">Sale the property</span>
                      <small>Post your property for sale.<br> Unlimited free listing.</small>
                    </span>
                    <input name="plPropertySaleRent" class="form-check-input" type="radio" value="1" id="customRadioSell" checked="">
                  </label>
                </div>
              </div>
              <div class="col-xl mb-xl-0 mb-2">
                <div class="form-check custom-option custom-option-icon">
                  <label class="form-check-label custom-option-content" for="customRadioRent">
                    <span class="custom-option-body">
                      <i class="bx bx-wallet"></i>
                      <span class="custom-option-title">Rent the property</span>
                      <small>Post your property for rent.<br> Unlimited free listing.</small>
                    </span>
                    <input name="plPropertySaleRent" class="form-check-input" type="radio" value="2" id="customRadioRent">
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 fv-plugins-icon-container">
            <label class="form-label" for="plPropertyType">Property Type</label>
            <div class="position-relative"><select id="plPropertyType" name="plPropertyType" class="select2 form-select select2-hidden-accessible" data-allow-clear="true" data-select2-id="plPropertyType" tabindex="-1" aria-hidden="true">
              <option value="" data-select2-id="4">Select Property Type</option>
              <option value="10002">Flat/ Apartment</option>
              <option value="10001">Residential House</option>
              <option value="10017">Villa</option>
              <option value="10003">Builder Floor Apartment</option>
              <option value="10000">Residential Land/ Plot</option>
              <option value="10021">Penthouse</option>
              <option value="10022">Studio Apartment</option>
            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="3" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-plPropertyType-container"><span class="select2-selection__rendered" id="select2-plPropertyType-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select property type</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
          <div class="col-sm-6 fv-plugins-icon-container">
            <label class="form-label" for="plZipCode">Zip Code</label>
            <input type="number" id="plZipCode" name="plZipCode" class="form-control" placeholder="99950">
          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
          <div class="col-sm-6">
            <label class="form-label" for="plCountry">Country</label>
            <div class="position-relative"><select id="plCountry" name="plCountry" class="select2 form-select select2-hidden-accessible" data-allow-clear="true" data-select2-id="plCountry" tabindex="-1" aria-hidden="true">
              <option value="" data-select2-id="2">Select</option>
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
            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-plCountry-container"><span class="select2-selection__rendered" id="select2-plCountry-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select country</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plState">State</label>
            <input type="text" id="plState" name="plState" class="form-control" placeholder="California">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plCity">City</label>
            <input type="text" id="plCity" name="plCity" class="form-control" placeholder="Los Angeles">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plLandmark">Landmark</label>
            <input type="text" id="plLandmark" name="plLandmark" class="form-control" placeholder="Nr. Hard Rock Cafe">
          </div>
          <div class="col-lg-12">
            <label class="form-label" for="plAddress">Address</label>
            <textarea id="plAddress" name="plAddress" class="form-control" rows="2" placeholder="12, Business Park"></textarea>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Property Features -->
      <div id="property-features" class="content fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-sm-6">
            <label class="form-label d-block" for="plBedrooms">Bedrooms</label>
            <input type="number" id="plBedrooms" name="plBedrooms" class="form-control" placeholder="3">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plFloorNo">Floor No</label>
            <input type="number" id="plFloorNo" name="plFloorNo" class="form-control" placeholder="12">
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plBathrooms">Bathrooms</label>
            <input type="number" id="plBathrooms" name="plBathrooms" class="form-control" placeholder="4">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plFurnishedStatus">Furnished Status</label>
            <select id="plFurnishedStatus" name="plFurnishedStatus" class="form-select">
              <option selected="" disabled="" value="">Select furnished status </option>
              <option value="1">Fully furnished</option>
              <option value="2">Furnished</option>
              <option value="3">Semi furnished</option>
              <option value="4">Unfurnished</option>
            </select>
          </div>
          <div class="col-lg-12">
            <label class="form-label" for="plFurnishingDetails">Furnishing Details</label>
            <tags class="tagify  form-control" tabindex="-1">
            <tag title="Fridge" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="Fridge"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">Fridge</span></div></tag><tag title="AC" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="AC"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">AC</span></div></tag><tag title="TV" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="TV"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">TV</span></div></tag><tag title="WiFi" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="WiFi"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">WiFi</span></div></tag><span contenteditable="" tabindex="0" data-placeholder="select options" aria-placeholder="select options" class="tagify__input" role="textbox" aria-autocomplete="both" aria-multiline="false"></span>
                ​
        </tags><input id="plFurnishingDetails" name="plFurnishingDetails" class="form-control" placeholder="select options" value="Fridge, AC, TV, WiFi" tabindex="-1">
          </div>
          <div class="col-sm-6">
            <label class="form-label">Is there any common area?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plCommonAreaRadio" id="plCommonAreaRadioYes" checked="">
              <label class="form-check-label" for="plCommonAreaRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plCommonAreaRadio" id="plCommonAreaRadioNo">
              <label class="form-check-label" for="plCommonAreaRadioNo">No</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Is there any attached balcony?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plAttachedBalconyRadio" id="plAttachedBalconyRadioYes" checked="">
              <label class="form-check-label" for="plAttachedBalconyRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plAttachedBalconyRadio" id="plAttachedBalconyRadioNo">
              <label class="form-check-label" for="plAttachedBalconyRadioNo">No</label>
            </div>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Property Area -->
      <div id="property-area" class="content fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-sm-6">
            <label class="form-label d-block" for="plTotalArea">Total Area</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plTotalArea" name="plTotalArea" placeholder="1000" aria-describedby="pl-total-area">
              <span class="input-group-text" id="pl-total-area">sq-ft</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plCarpetArea">Carpet Area</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plCarpetArea" name="plCarpetArea" placeholder="800" aria-describedby="pl-carpet-area">
              <span class="input-group-text" id="pl-carpet-area">sq-ft</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plPlotArea">Plot Area</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plPlotArea" name="plPlotArea" placeholder="800" aria-describedby="pl-plot-area">
              <span class="input-group-text" id="pl-plot-area">sq-yd</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plAvailableFrom">Available From</label>
            <input type="text" id="plAvailableFrom" name="plAvailableFrom" class="form-control flatpickr flatpickr-input" placeholder="YYYY-MM-DD" readonly="readonly">
          </div>
          <div class="col-sm-6">
            <label class="form-label">Possession Status</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plPossessionStatus" id="plUnderConstruction" checked="">
              <label class="form-check-label" for="plUnderConstruction">Under Construction</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plPossessionStatus" id="plReadyToMoveRadio">
              <label class="form-check-label" for="plReadyToMoveRadio">Ready to Move</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Transaction Type</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plTransectionType" id="plNewProperty" checked="">
              <label class="form-check-label" for="plNewProperty">New Property</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plTransectionType" id="plResaleProperty">
              <label class="form-check-label" for="plResaleProperty">Resale</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Is Property Facing Main Road?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plRoadFacingRadio" id="plRoadFacingRadioYes" checked="">
              <label class="form-check-label" for="plRoadFacingRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plRoadFacingRadio" id="plRoadFacingRadioNo">
              <label class="form-check-label" for="plRoadFacingRadioNo">No</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Gated Colony?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plGatedColonyRadio" id="plGatedColonyRadioYes" checked="">
              <label class="form-check-label" for="plGatedColonyRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plGatedColonyRadio" id="plGatedColonyRadioNo">
              <label class="form-check-label" for="plGatedColonyRadioNo">No</label>
            </div>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Price Details -->
      <div id="price-details" class="content fv-plugins-bootstrap5 fv-plugins-framework">
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
              <option value="1" selected="">Monthly</option>
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
              <input class="form-check-input" type="radio" name="plShowPriceRadio" id="plNagotiablePrice" checked="">
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
              <label class="form-check-label" for="plOtherCharges">Stamp Duty &amp; Registration charges excluded.</label>
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
            <br>
            <!--<button type="button" onclick="prevStep('step3', 'step2')">Previous</button>-->
            <!--<button type="submit">Submit</button>-->
        </div>
     <!--step 4 end-->
     
    
    </form>
    
      <div class="modal-footer">
        <!--<button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Open second modal</button>-->
      </div>
    </div>
  <!--step 4-->
  
  
  
  
  
  
  
   <!--step 5 two-->
     
     
      <div class="stepnew" id="step5two">
            <div id="wizard-property-listing" class="bs-stepper vertical mt-2 linear">
 <div class="bs-stepper-header">
            <button type="button" class="btn btn-primary btn-next">Add new Conference</button>
            <br>
    <div class="step " data-target="#personal-details">
      <button type="button" class="step-trigger" aria-selected="false" disabled="">
        <span class="bs-stepper-circle">
                   
          <i class="bx bx-user"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Events Details</span>
          <span class="bs-stepper-subtitle">Title Location</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <div class="step" data-target="#property-details">
      <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
        <span class="bs-stepper-circle">
          <i class="bx bx-home"></i>
        </span>
        <span class="bs-stepper-label">
            <span class="bs-stepper-title">Event Start</span>
          <span class="bs-stepper-subtitle">Date and Time</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <!--<div class="step" data-target="#property-features">-->
    <!--  <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">-->
    <!--    <span class="bs-stepper-circle">-->
    <!--      <i class="bx bx-star"></i>-->
    <!--    </span>-->
    <!--   <span class="bs-stepper-label">-->
    <!--      <span class="bs-stepper-title">Tickets</span>-->
    <!--      <span class="bs-stepper-subtitle">Sale Tickets</span>-->
    <!--    </span>-->
    <!--  </button>-->
    <!--</div>-->
    <div class="line"></div>
    <div class="step " data-target="#property-area">
      <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
        <span class="bs-stepper-circle">
          <i class="bx bx-map"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Notifications</span>
          <span class="bs-stepper-subtitle">Add Notifications</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <div class="step active" data-target="#price-details">
      <button type="button" class="step-trigger" aria-selected="true">
        <span class="bs-stepper-circle">
          <i class="bx bx-dollar"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Contact</span>
          <span class="bs-stepper-subtitle">Contact Person</span>
        </span>
      </button>
    </div>
  </div>
  <div class="bs-stepper-content">
    

      <!-- Personal Details -->
      <div  style="height:100%" id="personal-details" class="content active dstepper-block fv-plugins-bootstrap5 fv-plugins-framework">
        <div  style="height:100%" class="row g-3">
          <div class="col-12">
            <div class="row">
                 <div class="d-flex justify-content-center align-items-center">
              <img src="{{asset('assets/img/contacthead.png')}}" width="230px" height="auto"> 
              </div>
             
              
      <!--       <div class="container" style="width:364px;">-->


      <!--  <div class="dropify-wrapper" style="height: 114px;"><div class="dropify-message"><span class="file-icon"></span> <p>Drag and drop a file here or click</p><p class="dropify-error">Ooops, something wrong appended.</p></div><div class="dropify-loader"></div><div class="dropify-errors-container"><ul></ul></div><input name="file1" type="file" class="dropify" data-height="100"><button type="button" class="dropify-clear">Remove</button><div class="dropify-preview"><span class="dropify-render"></span><div class="dropify-infos"><div class="dropify-infos-inner"><p class="dropify-filename"><span class="file-icon"></span> <span class="dropify-filename-inner"></span></p><p class="dropify-infos-message">Drag and drop or click to replace</p></div></div></div></div>-->
      <!--</div>-->
      
   
          
            </div>
          </div>
        
              <div class="col-sm-12 fv-plugins-icon-container">
            <label class="form-label" for="plContact">First Name</label>
            <!--<div class="input-group input-group-merge">-->
             
            <!--  <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="First Name">-->
            <!--</div>-->
            <div class="input-group input-group-merge">
              <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
              <input type="text" class="form-control" id="basic-icon-default-fullname" placeholder="John Doe" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2">
            </div>
          </div>
          
            <div class="col-sm-12">
            <label class="form-label" for="plContact">Last Name</label>
            <!--<div class="input-group input-group-merge">-->
             
            <!--  <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Last Name">-->
            <!--</div>-->
            <div class="input-group input-group-merge">
              <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
              <input type="text" class="form-control" id="basic-icon-default-fullname" placeholder="Doe Watson" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2">
            </div>
          </div>
          
          
            <div class="col-sm-12">
            <label class="form-label" for="plContact">Mobile</label>
            <!--<div class="input-group input-group-merge">-->
             
            <!--  <input type="number" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Mobile Number">-->
            <!--</div>-->
            <!--<div class="input-group input-group-merge">-->
            <!--  <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-phone"></i></span>-->
            <!--  <input type="text" id="basic-icon-default-phone" class="form-control phone-mask" placeholder="658 799 8941" aria-label="658 799 8941" aria-describedby="basic-icon-default-phone2">-->
            <!--</div>-->
            <div class="input-group">
              <span class="input-group-text">US (+1)</span>
              <input type="text" id="phone-number-mask" class="form-control phone-number-mask" placeholder="202 555 0111">
            </div>
          </div>
          
         
          
          
          <!--<div class="col-sm-6">-->
          <!--       <label class="form-label" for="plContact">Select</label>-->
          <!--                              <select id="sendNotification" class="form-select" name="sendNotification">-->
          <!--                                  <option selected="">Country</option>-->
          <!--                                  <option>America</option>-->
          <!--                              </select>-->
          <!--                          </div>-->
          
          
          
          
          <!-- <div class="col-sm-6">-->
          <!--  <label class="form-label" for="plContact">Select</label>-->
          <!--  <div class="input-group input-group-merge">-->
             
          <!--    <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="City and ZipCode">-->
          <!--  </div>-->
          <!--</div>-->
          
          <!--  <div class="col-sm-6">-->
          <!--  <label class="form-label" for="plContact">Type</label>-->
          <!--  <div class="input-group input-group-merge">-->
             
          <!--    <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Address">-->
          <!--  </div>-->
          <!--</div>-->
          
          
        
          
          
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev" onclick="nextStep('step5two', 'step4two')" > <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
              <span class="align-middle d-sm-inline-block d-none">Previous</span>
            </button>
            <!--<button class="btn btn-primary btn-next"  onclick="nextStep('step1', 'step2')"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>-->
            
            <button type="button" class="btn btn-primary btn-next" onclick="nextStep('step4two', 'step5two')" >Submit</button>
          </div>
        </div>
      </div>

      <!-- Property Details -->
      <div id="property-details" class="content fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-12">
            <div class="row">
              <div class="col-xl mb-xl-0 mb-2">
                <div class="form-check custom-option custom-option-icon checked">
                  <label class="form-check-label custom-option-content" for="customRadioSell">
                    <span class="custom-option-body">
                      <i class="bx bx-home"></i>
                      <span class="custom-option-title">Sale the property</span>
                      <small>Post your property for sale.<br> Unlimited free listing.</small>
                    </span>
                    <input name="plPropertySaleRent" class="form-check-input" type="radio" value="1" id="customRadioSell" checked="">
                  </label>
                </div>
              </div>
              <div class="col-xl mb-xl-0 mb-2">
                <div class="form-check custom-option custom-option-icon">
                  <label class="form-check-label custom-option-content" for="customRadioRent">
                    <span class="custom-option-body">
                      <i class="bx bx-wallet"></i>
                      <span class="custom-option-title">Rent the property</span>
                      <small>Post your property for rent.<br> Unlimited free listing.</small>
                    </span>
                    <input name="plPropertySaleRent" class="form-check-input" type="radio" value="2" id="customRadioRent">
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 fv-plugins-icon-container">
            <label class="form-label" for="plPropertyType">Property Type</label>
            <div class="position-relative"><select id="plPropertyType" name="plPropertyType" class="select2 form-select select2-hidden-accessible" data-allow-clear="true" data-select2-id="plPropertyType" tabindex="-1" aria-hidden="true">
              <option value="" data-select2-id="4">Select Property Type</option>
              <option value="10002">Flat/ Apartment</option>
              <option value="10001">Residential House</option>
              <option value="10017">Villa</option>
              <option value="10003">Builder Floor Apartment</option>
              <option value="10000">Residential Land/ Plot</option>
              <option value="10021">Penthouse</option>
              <option value="10022">Studio Apartment</option>
            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="3" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-plPropertyType-container"><span class="select2-selection__rendered" id="select2-plPropertyType-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select property type</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
          <div class="col-sm-6 fv-plugins-icon-container">
            <label class="form-label" for="plZipCode">Zip Code</label>
            <input type="number" id="plZipCode" name="plZipCode" class="form-control" placeholder="99950">
          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
          <div class="col-sm-6">
            <label class="form-label" for="plCountry">Country</label>
            <div class="position-relative"><select id="plCountry" name="plCountry" class="select2 form-select select2-hidden-accessible" data-allow-clear="true" data-select2-id="plCountry" tabindex="-1" aria-hidden="true">
              <option value="" data-select2-id="2">Select</option>
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
            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-plCountry-container"><span class="select2-selection__rendered" id="select2-plCountry-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select country</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plState">State</label>
            <input type="text" id="plState" name="plState" class="form-control" placeholder="California">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plCity">City</label>
            <input type="text" id="plCity" name="plCity" class="form-control" placeholder="Los Angeles">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plLandmark">Landmark</label>
            <input type="text" id="plLandmark" name="plLandmark" class="form-control" placeholder="Nr. Hard Rock Cafe">
          </div>
          <div class="col-lg-12">
            <label class="form-label" for="plAddress">Address</label>
            <textarea id="plAddress" name="plAddress" class="form-control" rows="2" placeholder="12, Business Park"></textarea>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Property Features -->
      <div id="property-features" class="content fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-sm-6">
            <label class="form-label d-block" for="plBedrooms">Bedrooms</label>
            <input type="number" id="plBedrooms" name="plBedrooms" class="form-control" placeholder="3">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plFloorNo">Floor No</label>
            <input type="number" id="plFloorNo" name="plFloorNo" class="form-control" placeholder="12">
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plBathrooms">Bathrooms</label>
            <input type="number" id="plBathrooms" name="plBathrooms" class="form-control" placeholder="4">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plFurnishedStatus">Furnished Status</label>
            <select id="plFurnishedStatus" name="plFurnishedStatus" class="form-select">
              <option selected="" disabled="" value="">Select furnished status </option>
              <option value="1">Fully furnished</option>
              <option value="2">Furnished</option>
              <option value="3">Semi furnished</option>
              <option value="4">Unfurnished</option>
            </select>
          </div>
          <div class="col-lg-12">
            <label class="form-label" for="plFurnishingDetails">Furnishing Details</label>
            <tags class="tagify  form-control" tabindex="-1">
            <tag title="Fridge" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="Fridge"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">Fridge</span></div></tag><tag title="AC" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="AC"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">AC</span></div></tag><tag title="TV" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="TV"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">TV</span></div></tag><tag title="WiFi" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="WiFi"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">WiFi</span></div></tag><span contenteditable="" tabindex="0" data-placeholder="select options" aria-placeholder="select options" class="tagify__input" role="textbox" aria-autocomplete="both" aria-multiline="false"></span>
                &ZeroWidthSpace;
        </tags><input id="plFurnishingDetails" name="plFurnishingDetails" class="form-control" placeholder="select options" value="Fridge, AC, TV, WiFi" tabindex="-1">
          </div>
          <div class="col-sm-6">
            <label class="form-label">Is there any common area?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plCommonAreaRadio" id="plCommonAreaRadioYes" checked="">
              <label class="form-check-label" for="plCommonAreaRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plCommonAreaRadio" id="plCommonAreaRadioNo">
              <label class="form-check-label" for="plCommonAreaRadioNo">No</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Is there any attached balcony?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plAttachedBalconyRadio" id="plAttachedBalconyRadioYes" checked="">
              <label class="form-check-label" for="plAttachedBalconyRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plAttachedBalconyRadio" id="plAttachedBalconyRadioNo">
              <label class="form-check-label" for="plAttachedBalconyRadioNo">No</label>
            </div>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Property Area -->
      <div id="property-area" class="content fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-sm-6">
            <label class="form-label d-block" for="plTotalArea">Total Area</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plTotalArea" name="plTotalArea" placeholder="1000" aria-describedby="pl-total-area">
              <span class="input-group-text" id="pl-total-area">sq-ft</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plCarpetArea">Carpet Area</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plCarpetArea" name="plCarpetArea" placeholder="800" aria-describedby="pl-carpet-area">
              <span class="input-group-text" id="pl-carpet-area">sq-ft</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plPlotArea">Plot Area</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plPlotArea" name="plPlotArea" placeholder="800" aria-describedby="pl-plot-area">
              <span class="input-group-text" id="pl-plot-area">sq-yd</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plAvailableFrom">Available From</label>
            <input type="text" id="plAvailableFrom" name="plAvailableFrom" class="form-control flatpickr flatpickr-input" placeholder="YYYY-MM-DD" readonly="readonly">
          </div>
          <div class="col-sm-6">
            <label class="form-label">Possession Status</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plPossessionStatus" id="plUnderConstruction" checked="">
              <label class="form-check-label" for="plUnderConstruction">Under Construction</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plPossessionStatus" id="plReadyToMoveRadio">
              <label class="form-check-label" for="plReadyToMoveRadio">Ready to Move</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Transaction Type</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plTransectionType" id="plNewProperty" checked="">
              <label class="form-check-label" for="plNewProperty">New Property</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plTransectionType" id="plResaleProperty">
              <label class="form-check-label" for="plResaleProperty">Resale</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Is Property Facing Main Road?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plRoadFacingRadio" id="plRoadFacingRadioYes" checked="">
              <label class="form-check-label" for="plRoadFacingRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plRoadFacingRadio" id="plRoadFacingRadioNo">
              <label class="form-check-label" for="plRoadFacingRadioNo">No</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Gated Colony?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plGatedColonyRadio" id="plGatedColonyRadioYes" checked="">
              <label class="form-check-label" for="plGatedColonyRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plGatedColonyRadio" id="plGatedColonyRadioNo">
              <label class="form-check-label" for="plGatedColonyRadioNo">No</label>
            </div>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Price Details -->
      <div id="price-details" class="content fv-plugins-bootstrap5 fv-plugins-framework">
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
              <option value="1" selected="">Monthly</option>
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
              <input class="form-check-input" type="radio" name="plShowPriceRadio" id="plNagotiablePrice" checked="">
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
              <label class="form-check-label" for="plOtherCharges">Stamp Duty &amp; Registration charges excluded.</label>
            </div>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
            <button class="btn btn-success btn-submit btn-next">Submit</button>
          </div>
        </div>
      </div>
    
  </div>
</div>
            <br>
            <!--<button type="button" onclick="nextStep('step1', 'step2')">Next</button>-->
        </div>
     
     
     <!--step 5 end-->

<!--<button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Open first modal</button>-->
    
      <!--bootstrap modal1-->
      </div>
      
      <!--bottst 2-->

  
    <div class="modal fade" id="exampleModalToggleone" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
       <div style="" class="modal-header">
          <button type="button" class="btn btn-primary btn-next">Add new Concerts</button>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div style="margin:0;padding:0;" class="modal-body">
    <div id="wizard-property-listing" class="bs-stepper vertical mt-2 linear">
  <div class="bs-stepper-header">
    <div class="step active" data-target="#personal-details">
      <button type="button" class="step-trigger" aria-selected="true">
        <span class="bs-stepper-circle">
          <i class="bx bx-user"></i>
        </span>
        <span class="bs-stepper-label">
           <span class="bs-stepper-title">Events Details</span>
          <span class="bs-stepper-subtitle">Title/Location</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <div class="step" data-target="#property-details">
      <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
        <span class="bs-stepper-circle">
          <i class="bx bx-home"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Property Details</span>
          <span class="bs-stepper-subtitle">Property Type</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <div class="step" data-target="#property-features">
      <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
        <span class="bs-stepper-circle">
          <i class="bx bx-star"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Property Features</span>
          <span class="bs-stepper-subtitle">Bedrooms/Floor No</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <div class="step" data-target="#property-area">
      <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
        <span class="bs-stepper-circle">
          <i class="bx bx-map"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Property Area</span>
          <span class="bs-stepper-subtitle">Covered Area</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <div class="step" data-target="#price-details">
      <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
        <span class="bs-stepper-circle">
          <i class="bx bx-dollar"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Price Details</span>
          <span class="bs-stepper-subtitle">Expected Price</span>
        </span>
      </button>
    </div>
  </div>
  <div class="bs-stepper-content">
    <form id="wizard-property-listing-form" onsubmit="return false">

      <!-- Personal Details -->
      <div id="personal-details" class="content active dstepper-block fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-12">
            <div class="row">
              <!--<div class="col-md mb-md-0 mb-2">-->
              <!--  <div class="form-check custom-option custom-option-icon checked">-->
              <!--    <label class="form-check-label custom-option-content" for="customRadioBuilder">-->
              <!--      <span class="custom-option-body">-->
              <!--        <i class="bx bx-building-house"></i>-->
              <!--        <span class="custom-option-title">I am the Builder</span>-->
              <!--        <small>List property as Builder, list your project and get highest reach.</small>-->
              <!--      </span>-->
              <!--      <input name="plUserType" class="form-check-input" type="radio" value="1" id="customRadioBuilder" checked="">-->
              <!--    </label>-->
              <!--  </div>-->
              <!--</div>-->
              <!--<div class="col-md mb-md-0 mb-2">-->
              <!--  <div class="form-check custom-option custom-option-icon">-->
              <!--    <label class="form-check-label custom-option-content" for="customRadioOwner">-->
              <!--      <span class="custom-option-body">-->
              <!--        <i class="bx bx-crown"></i>-->
              <!--        <span class="custom-option-title"> I am the Owner </span>-->
              <!--        <small>Submit property as an Individual. Lease, Rent or Sell at the best price.</small>-->
              <!--      </span>-->
              <!--      <input name="plUserType" class="form-check-input" type="radio" value="2" id="customRadioOwner">-->
              <!--    </label>-->
              <!--  </div>-->
              <!--</div>-->
              
           <div class="container" style="width:364px;">


        <input name="file1" type="file" class="dropify" data-height="100" />
      </div>
   
              <!--<div class="col-md mb-md-0 mb-2">-->
              <!--  <div class="form-check custom-option custom-option-icon">-->
              <!--    <label class="form-check-label custom-option-content" for="customRadioBroker">-->
              <!--      <span class="custom-option-body">-->
              <!--        <i class="bx bx-briefcase-alt"></i>-->
              <!--        <span class="custom-option-title"> I am a Broker </span>-->
              <!--        <small>Earn highest commission by listing your clients properties at the best price.</small>-->
              <!--      </span>-->
              <!--      <input name="plUserType" class="form-check-input" type="radio" value="3" id="customRadioBroker">-->
              <!--    </label>-->
              <!--  </div>-->
              <!--</div>-->
            </div>
          </div>
          
            <div class="col-sm-6 fv-plugins-icon-container">
            <label class="form-label" for="plContact">Event Title</label>
            <div class="input-group input-group-merge">
             
              <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Event Title">
            </div>
          </div>
          
            <div class="col-sm-6">
            <label class="form-label" for="plContact">Describe</label>
            <div class="input-group input-group-merge">
             
              <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Input Text">
            </div>
          </div>
          
          
            <div class="col-sm-6">
            <label class="form-label" for="plContact">Location Name</label>
            <div class="input-group input-group-merge">
             
              <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Example Human Right Berlin">
            </div>
          </div>
          
         
          
          
          <div class="col-sm-6">
                 <label class="form-label" for="plContact">Select</label>
                                        <select id="sendNotification" class="form-select" name="sendNotification">
                                            <option selected="">Country</option>
                                            <option>America</option>
                                        </select>
                                    </div>
          
          
          
          
           <div class="col-sm-6">
            <label class="form-label" for="plContact">Select</label>
            <div class="input-group input-group-merge">
             
              <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="City and ZipCode">
            </div>
          </div>
          
            <div class="col-sm-6">
            <label class="form-label" for="plContact">Type</label>
            <div class="input-group input-group-merge">
             
              <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Address">
            </div>
          </div>
          
          
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-label-secondary btn-prev" disabled=""> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
              <span class="align-middle d-sm-inline-block d-none">Previous</span>
            </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Property Details -->
      <div id="property-details" class="content fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-12">
            <div class="row">
              <div class="col-xl mb-xl-0 mb-2">
                <div class="form-check custom-option custom-option-icon checked">
                  <label class="form-check-label custom-option-content" for="customRadioSell">
                    <span class="custom-option-body">
                      <i class="bx bx-home"></i>
                      <span class="custom-option-title">Sale the property</span>
                      <small>Post your property for sale.<br> Unlimited free listing.</small>
                    </span>
                    <input name="plPropertySaleRent" class="form-check-input" type="radio" value="1" id="customRadioSell" checked="">
                  </label>
                </div>
              </div>
              <div class="col-xl mb-xl-0 mb-2">
                <div class="form-check custom-option custom-option-icon">
                  <label class="form-check-label custom-option-content" for="customRadioRent">
                    <span class="custom-option-body">
                      <i class="bx bx-wallet"></i>
                      <span class="custom-option-title">Rent the property</span>
                      <small>Post your property for rent.<br> Unlimited free listing.</small>
                    </span>
                    <input name="plPropertySaleRent" class="form-check-input" type="radio" value="2" id="customRadioRent">
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 fv-plugins-icon-container">
            <label class="form-label" for="plPropertyType">Property Type</label>
            <div class="position-relative"><select id="plPropertyType" name="plPropertyType" class="select2 form-select select2-hidden-accessible" data-allow-clear="true" data-select2-id="plPropertyType" tabindex="-1" aria-hidden="true">
              <option value="" data-select2-id="4">Select Property Type</option>
              <option value="10002">Flat/ Apartment</option>
              <option value="10001">Residential House</option>
              <option value="10017">Villa</option>
              <option value="10003">Builder Floor Apartment</option>
              <option value="10000">Residential Land/ Plot</option>
              <option value="10021">Penthouse</option>
              <option value="10022">Studio Apartment</option>
            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="3" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-plPropertyType-container"><span class="select2-selection__rendered" id="select2-plPropertyType-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select property type</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
          <div class="col-sm-6 fv-plugins-icon-container">
            <label class="form-label" for="plZipCode">Zip Code</label>
            <input type="number" id="plZipCode" name="plZipCode" class="form-control" placeholder="99950">
          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
          <div class="col-sm-6">
            <label class="form-label" for="plCountry">Country</label>
            <div class="position-relative"><select id="plCountry" name="plCountry" class="select2 form-select select2-hidden-accessible" data-allow-clear="true" data-select2-id="plCountry" tabindex="-1" aria-hidden="true">
              <option value="" data-select2-id="2">Select</option>
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
            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-plCountry-container"><span class="select2-selection__rendered" id="select2-plCountry-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select country</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plState">State</label>
            <input type="text" id="plState" name="plState" class="form-control" placeholder="California">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plCity">City</label>
            <input type="text" id="plCity" name="plCity" class="form-control" placeholder="Los Angeles">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plLandmark">Landmark</label>
            <input type="text" id="plLandmark" name="plLandmark" class="form-control" placeholder="Nr. Hard Rock Cafe">
          </div>
          <div class="col-lg-12">
            <label class="form-label" for="plAddress">Address</label>
            <textarea id="plAddress" name="plAddress" class="form-control" rows="2" placeholder="12, Business Park"></textarea>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Property Features -->
      <div id="property-features" class="content fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-sm-6">
            <label class="form-label d-block" for="plBedrooms">Bedrooms</label>
            <input type="number" id="plBedrooms" name="plBedrooms" class="form-control" placeholder="3">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plFloorNo">Floor No</label>
            <input type="number" id="plFloorNo" name="plFloorNo" class="form-control" placeholder="12">
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plBathrooms">Bathrooms</label>
            <input type="number" id="plBathrooms" name="plBathrooms" class="form-control" placeholder="4">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plFurnishedStatus">Furnished Status</label>
            <select id="plFurnishedStatus" name="plFurnishedStatus" class="form-select">
              <option selected="" disabled="" value="">Select furnished status </option>
              <option value="1">Fully furnished</option>
              <option value="2">Furnished</option>
              <option value="3">Semi furnished</option>
              <option value="4">Unfurnished</option>
            </select>
          </div>
          <div class="col-lg-12">
            <label class="form-label" for="plFurnishingDetails">Furnishing Details</label>
            <tags class="tagify  form-control" tabindex="-1">
            <tag title="Fridge" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="Fridge"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">Fridge</span></div></tag><tag title="AC" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="AC"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">AC</span></div></tag><tag title="TV" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="TV"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">TV</span></div></tag><tag title="WiFi" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="WiFi"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">WiFi</span></div></tag><span contenteditable="" tabindex="0" data-placeholder="select options" aria-placeholder="select options" class="tagify__input" role="textbox" aria-autocomplete="both" aria-multiline="false"></span>
                ​
        </tags><input id="plFurnishingDetails" name="plFurnishingDetails" class="form-control" placeholder="select options" value="Fridge, AC, TV, WiFi" tabindex="-1">
          </div>
          <div class="col-sm-6">
            <label class="form-label">Is there any common area?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plCommonAreaRadio" id="plCommonAreaRadioYes" checked="">
              <label class="form-check-label" for="plCommonAreaRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plCommonAreaRadio" id="plCommonAreaRadioNo">
              <label class="form-check-label" for="plCommonAreaRadioNo">No</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Is there any attached balcony?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plAttachedBalconyRadio" id="plAttachedBalconyRadioYes" checked="">
              <label class="form-check-label" for="plAttachedBalconyRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plAttachedBalconyRadio" id="plAttachedBalconyRadioNo">
              <label class="form-check-label" for="plAttachedBalconyRadioNo">No</label>
            </div>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Property Area -->
      <div id="property-area" class="content fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-sm-6">
            <label class="form-label d-block" for="plTotalArea">Total Area</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plTotalArea" name="plTotalArea" placeholder="1000" aria-describedby="pl-total-area">
              <span class="input-group-text" id="pl-total-area">sq-ft</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plCarpetArea">Carpet Area</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plCarpetArea" name="plCarpetArea" placeholder="800" aria-describedby="pl-carpet-area">
              <span class="input-group-text" id="pl-carpet-area">sq-ft</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plPlotArea">Plot Area</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plPlotArea" name="plPlotArea" placeholder="800" aria-describedby="pl-plot-area">
              <span class="input-group-text" id="pl-plot-area">sq-yd</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plAvailableFrom">Available From</label>
            <input type="text" id="plAvailableFrom" name="plAvailableFrom" class="form-control flatpickr flatpickr-input" placeholder="YYYY-MM-DD" readonly="readonly">
          </div>
          <div class="col-sm-6">
            <label class="form-label">Possession Status</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plPossessionStatus" id="plUnderConstruction" checked="">
              <label class="form-check-label" for="plUnderConstruction">Under Construction</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plPossessionStatus" id="plReadyToMoveRadio">
              <label class="form-check-label" for="plReadyToMoveRadio">Ready to Move</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Transaction Type</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plTransectionType" id="plNewProperty" checked="">
              <label class="form-check-label" for="plNewProperty">New Property</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plTransectionType" id="plResaleProperty">
              <label class="form-check-label" for="plResaleProperty">Resale</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Is Property Facing Main Road?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plRoadFacingRadio" id="plRoadFacingRadioYes" checked="">
              <label class="form-check-label" for="plRoadFacingRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plRoadFacingRadio" id="plRoadFacingRadioNo">
              <label class="form-check-label" for="plRoadFacingRadioNo">No</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Gated Colony?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plGatedColonyRadio" id="plGatedColonyRadioYes" checked="">
              <label class="form-check-label" for="plGatedColonyRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plGatedColonyRadio" id="plGatedColonyRadioNo">
              <label class="form-check-label" for="plGatedColonyRadioNo">No</label>
            </div>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Price Details -->
      <div id="price-details" class="content fv-plugins-bootstrap5 fv-plugins-framework">
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
              <option value="1" selected="">Monthly</option>
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
              <input class="form-check-input" type="radio" name="plShowPriceRadio" id="plNagotiablePrice" checked="">
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
              <label class="form-check-label" for="plOtherCharges">Stamp Duty &amp; Registration charges excluded.</label>
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
      <div class="modal-footer">
        <!--<button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Open second modal</button>-->
      </div>
    </div>
  </div>
</div>
</div>
<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
     <div style="height:90px" class="modal-header">
          <button type="button" class="btn btn-primary btn-next">Add new Concerts</button>
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Modal 2</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Hide this modal and show the first with the button below.
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back to first</button>
      </div>
    </div>
  </div>
</div>
<!--<button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Open first modal</button>-->
    
<!--boot2-->










<!--boot3-->





 <div class="modal fade" id="exampleModalToggletwo" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
       <div style="height:90px" class="modal-header">
          <button type="button" class="btn btn-primary btn-next">Add new Concerts</button>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
    <div id="wizard-property-listing" class="bs-stepper vertical mt-2 linear">
  <div class="bs-stepper-header">
    <div class="step active" data-target="#personal-details">
      <button type="button" class="step-trigger" aria-selected="true">
        <span class="bs-stepper-circle">
          <i class="bx bx-user"></i>
        </span>
        <span class="bs-stepper-label">
           <span class="bs-stepper-title">Events Details</span>
          <span class="bs-stepper-subtitle">Title/Location</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <div class="step" data-target="#property-details">
      <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
        <span class="bs-stepper-circle">
          <i class="bx bx-home"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Property Details</span>
          <span class="bs-stepper-subtitle">Property Type</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <div class="step" data-target="#property-features">
      <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
        <span class="bs-stepper-circle">
          <i class="bx bx-star"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Property Features</span>
          <span class="bs-stepper-subtitle">Bedrooms/Floor No</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <div class="step" data-target="#property-area">
      <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
        <span class="bs-stepper-circle">
          <i class="bx bx-map"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Property Area</span>
          <span class="bs-stepper-subtitle">Covered Area</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <div class="step" data-target="#price-details">
      <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
        <span class="bs-stepper-circle">
          <i class="bx bx-dollar"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Price Details</span>
          <span class="bs-stepper-subtitle">Expected Price</span>
        </span>
      </button>
    </div>
  </div>
  <div class="bs-stepper-content">
    <form id="wizard-property-listing-form" onsubmit="return false">

      <!-- Personal Details -->
      <div id="personal-details" class="content active dstepper-block fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-12">
            <div class="row">
              <!--<div class="col-md mb-md-0 mb-2">-->
              <!--  <div class="form-check custom-option custom-option-icon checked">-->
              <!--    <label class="form-check-label custom-option-content" for="customRadioBuilder">-->
              <!--      <span class="custom-option-body">-->
              <!--        <i class="bx bx-building-house"></i>-->
              <!--        <span class="custom-option-title">I am the Builder</span>-->
              <!--        <small>List property as Builder, list your project and get highest reach.</small>-->
              <!--      </span>-->
              <!--      <input name="plUserType" class="form-check-input" type="radio" value="1" id="customRadioBuilder" checked="">-->
              <!--    </label>-->
              <!--  </div>-->
              <!--</div>-->
              <!--<div class="col-md mb-md-0 mb-2">-->
              <!--  <div class="form-check custom-option custom-option-icon">-->
              <!--    <label class="form-check-label custom-option-content" for="customRadioOwner">-->
              <!--      <span class="custom-option-body">-->
              <!--        <i class="bx bx-crown"></i>-->
              <!--        <span class="custom-option-title"> I am the Owner </span>-->
              <!--        <small>Submit property as an Individual. Lease, Rent or Sell at the best price.</small>-->
              <!--      </span>-->
              <!--      <input name="plUserType" class="form-check-input" type="radio" value="2" id="customRadioOwner">-->
              <!--    </label>-->
              <!--  </div>-->
              <!--</div>-->
              
        <div class="container" style="width:364px;">


        <input name="file1" type="file" class="dropify" data-height="100" />
      </div>
   
              <!--<div class="col-md mb-md-0 mb-2">-->
              <!--  <div class="form-check custom-option custom-option-icon">-->
              <!--    <label class="form-check-label custom-option-content" for="customRadioBroker">-->
              <!--      <span class="custom-option-body">-->
              <!--        <i class="bx bx-briefcase-alt"></i>-->
              <!--        <span class="custom-option-title"> I am a Broker </span>-->
              <!--        <small>Earn highest commission by listing your clients properties at the best price.</small>-->
              <!--      </span>-->
              <!--      <input name="plUserType" class="form-check-input" type="radio" value="3" id="customRadioBroker">-->
              <!--    </label>-->
              <!--  </div>-->
              <!--</div>-->
            </div>
          </div>
            <div class="col-sm-6 fv-plugins-icon-container">
            <label class="form-label" for="plContact">Event Title</label>
            <div class="input-group input-group-merge">
             
              <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Event Title">
            </div>
          </div>
          
            <div class="col-sm-6">
            <label class="form-label" for="plContact">Describe</label>
            <div class="input-group input-group-merge">
             
              <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Input Text">
            </div>
          </div>
          
          
            <div class="col-sm-6">
            <label class="form-label" for="plContact">Location Name</label>
            <div class="input-group input-group-merge">
             
              <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Example Human Right Berlin">
            </div>
          </div>
          
         
          
          
          <div class="col-sm-6">
                 <label class="form-label" for="plContact">Select</label>
                                        <select id="sendNotification" class="form-select" name="sendNotification">
                                            <option selected="">Country</option>
                                            <option>America</option>
                                        </select>
                                    </div>
          
          
          
          
           <div class="col-sm-6">
            <label class="form-label" for="plContact">Select</label>
            <div class="input-group input-group-merge">
             
              <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="City and ZipCode">
            </div>
          </div>
          
            <div class="col-sm-6">
            <label class="form-label" for="plContact">Type</label>
            <div class="input-group input-group-merge">
             
              <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Address">
            </div>
          </div>
          
          
          
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-label-secondary btn-prev" disabled=""> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
              <span class="align-middle d-sm-inline-block d-none">Previous</span>
            </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Property Details -->
      <div id="property-details" class="content fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-12">
            <div class="row">
              <div class="col-xl mb-xl-0 mb-2">
                <div class="form-check custom-option custom-option-icon checked">
                  <label class="form-check-label custom-option-content" for="customRadioSell">
                    <span class="custom-option-body">
                      <i class="bx bx-home"></i>
                      <span class="custom-option-title">Sale the property</span>
                      <small>Post your property for sale.<br> Unlimited free listing.</small>
                    </span>
                    <input name="plPropertySaleRent" class="form-check-input" type="radio" value="1" id="customRadioSell" checked="">
                  </label>
                </div>
              </div>
              <div class="col-xl mb-xl-0 mb-2">
                <div class="form-check custom-option custom-option-icon">
                  <label class="form-check-label custom-option-content" for="customRadioRent">
                    <span class="custom-option-body">
                      <i class="bx bx-wallet"></i>
                      <span class="custom-option-title">Rent the property</span>
                      <small>Post your property for rent.<br> Unlimited free listing.</small>
                    </span>
                    <input name="plPropertySaleRent" class="form-check-input" type="radio" value="2" id="customRadioRent">
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 fv-plugins-icon-container">
            <label class="form-label" for="plPropertyType">Property Type</label>
            <div class="position-relative"><select id="plPropertyType" name="plPropertyType" class="select2 form-select select2-hidden-accessible" data-allow-clear="true" data-select2-id="plPropertyType" tabindex="-1" aria-hidden="true">
              <option value="" data-select2-id="4">Select Property Type</option>
              <option value="10002">Flat/ Apartment</option>
              <option value="10001">Residential House</option>
              <option value="10017">Villa</option>
              <option value="10003">Builder Floor Apartment</option>
              <option value="10000">Residential Land/ Plot</option>
              <option value="10021">Penthouse</option>
              <option value="10022">Studio Apartment</option>
            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="3" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-plPropertyType-container"><span class="select2-selection__rendered" id="select2-plPropertyType-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select property type</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
          <div class="col-sm-6 fv-plugins-icon-container">
            <label class="form-label" for="plZipCode">Zip Code</label>
            <input type="number" id="plZipCode" name="plZipCode" class="form-control" placeholder="99950">
          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
          <div class="col-sm-6">
            <label class="form-label" for="plCountry">Country</label>
            <div class="position-relative"><select id="plCountry" name="plCountry" class="select2 form-select select2-hidden-accessible" data-allow-clear="true" data-select2-id="plCountry" tabindex="-1" aria-hidden="true">
              <option value="" data-select2-id="2">Select</option>
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
            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-plCountry-container"><span class="select2-selection__rendered" id="select2-plCountry-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select country</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plState">State</label>
            <input type="text" id="plState" name="plState" class="form-control" placeholder="California">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plCity">City</label>
            <input type="text" id="plCity" name="plCity" class="form-control" placeholder="Los Angeles">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plLandmark">Landmark</label>
            <input type="text" id="plLandmark" name="plLandmark" class="form-control" placeholder="Nr. Hard Rock Cafe">
          </div>
          <div class="col-lg-12">
            <label class="form-label" for="plAddress">Address</label>
            <textarea id="plAddress" name="plAddress" class="form-control" rows="2" placeholder="12, Business Park"></textarea>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Property Features -->
      <div id="property-features" class="content fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-sm-6">
            <label class="form-label d-block" for="plBedrooms">Bedrooms</label>
            <input type="number" id="plBedrooms" name="plBedrooms" class="form-control" placeholder="3">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plFloorNo">Floor No</label>
            <input type="number" id="plFloorNo" name="plFloorNo" class="form-control" placeholder="12">
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plBathrooms">Bathrooms</label>
            <input type="number" id="plBathrooms" name="plBathrooms" class="form-control" placeholder="4">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plFurnishedStatus">Furnished Status</label>
            <select id="plFurnishedStatus" name="plFurnishedStatus" class="form-select">
              <option selected="" disabled="" value="">Select furnished status </option>
              <option value="1">Fully furnished</option>
              <option value="2">Furnished</option>
              <option value="3">Semi furnished</option>
              <option value="4">Unfurnished</option>
            </select>
          </div>
          <div class="col-lg-12">
            <label class="form-label" for="plFurnishingDetails">Furnishing Details</label>
            <tags class="tagify  form-control" tabindex="-1">
            <tag title="Fridge" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="Fridge"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">Fridge</span></div></tag><tag title="AC" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="AC"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">AC</span></div></tag><tag title="TV" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="TV"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">TV</span></div></tag><tag title="WiFi" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="WiFi"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">WiFi</span></div></tag><span contenteditable="" tabindex="0" data-placeholder="select options" aria-placeholder="select options" class="tagify__input" role="textbox" aria-autocomplete="both" aria-multiline="false"></span>
                ​
        </tags><input id="plFurnishingDetails" name="plFurnishingDetails" class="form-control" placeholder="select options" value="Fridge, AC, TV, WiFi" tabindex="-1">
          </div>
          <div class="col-sm-6">
            <label class="form-label">Is there any common area?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plCommonAreaRadio" id="plCommonAreaRadioYes" checked="">
              <label class="form-check-label" for="plCommonAreaRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plCommonAreaRadio" id="plCommonAreaRadioNo">
              <label class="form-check-label" for="plCommonAreaRadioNo">No</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Is there any attached balcony?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plAttachedBalconyRadio" id="plAttachedBalconyRadioYes" checked="">
              <label class="form-check-label" for="plAttachedBalconyRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plAttachedBalconyRadio" id="plAttachedBalconyRadioNo">
              <label class="form-check-label" for="plAttachedBalconyRadioNo">No</label>
            </div>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Property Area -->
      <div id="property-area" class="content fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-sm-6">
            <label class="form-label d-block" for="plTotalArea">Total Area</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plTotalArea" name="plTotalArea" placeholder="1000" aria-describedby="pl-total-area">
              <span class="input-group-text" id="pl-total-area">sq-ft</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plCarpetArea">Carpet Area</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plCarpetArea" name="plCarpetArea" placeholder="800" aria-describedby="pl-carpet-area">
              <span class="input-group-text" id="pl-carpet-area">sq-ft</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plPlotArea">Plot Area</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plPlotArea" name="plPlotArea" placeholder="800" aria-describedby="pl-plot-area">
              <span class="input-group-text" id="pl-plot-area">sq-yd</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plAvailableFrom">Available From</label>
            <input type="text" id="plAvailableFrom" name="plAvailableFrom" class="form-control flatpickr flatpickr-input" placeholder="YYYY-MM-DD" readonly="readonly">
          </div>
          <div class="col-sm-6">
            <label class="form-label">Possession Status</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plPossessionStatus" id="plUnderConstruction" checked="">
              <label class="form-check-label" for="plUnderConstruction">Under Construction</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plPossessionStatus" id="plReadyToMoveRadio">
              <label class="form-check-label" for="plReadyToMoveRadio">Ready to Move</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Transaction Type</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plTransectionType" id="plNewProperty" checked="">
              <label class="form-check-label" for="plNewProperty">New Property</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plTransectionType" id="plResaleProperty">
              <label class="form-check-label" for="plResaleProperty">Resale</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Is Property Facing Main Road?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plRoadFacingRadio" id="plRoadFacingRadioYes" checked="">
              <label class="form-check-label" for="plRoadFacingRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plRoadFacingRadio" id="plRoadFacingRadioNo">
              <label class="form-check-label" for="plRoadFacingRadioNo">No</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Gated Colony?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plGatedColonyRadio" id="plGatedColonyRadioYes" checked="">
              <label class="form-check-label" for="plGatedColonyRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plGatedColonyRadio" id="plGatedColonyRadioNo">
              <label class="form-check-label" for="plGatedColonyRadioNo">No</label>
            </div>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Price Details -->
      <div id="price-details" class="content fv-plugins-bootstrap5 fv-plugins-framework">
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
              <option value="1" selected="">Monthly</option>
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
              <input class="form-check-input" type="radio" name="plShowPriceRadio" id="plNagotiablePrice" checked="">
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
              <label class="form-check-label" for="plOtherCharges">Stamp Duty &amp; Registration charges excluded.</label>
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
      <div class="modal-footer">
        <!--<button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Open second modal</button>-->
      </div>
    </div>
  </div>
</div>
</div>
<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
       <div style="height:90px" class="modal-header">
          <button type="button" class="btn btn-primary btn-next">Add new Concerts</button>
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Modal 2</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Hide this modal and show the first with the button below.
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back to first</button>
      </div>
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


            <!-- pricingModal -->
                        <!--/ pricingModal -->

          </div>
          <!-- / Content -->

        
          <div class="content-backdrop fade"></div>
        </div>
        
        <!--phir hera pheri2-->
 <div class="modal fade" id="exampleModalToggletwo123321" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
      <div  class="modal-header">
        
        <!--<h1 class="modal-title fs-5" id="exampleModalToggleLabel">Modal 1</h1>-->
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div style="padding:0;" class="modal-body">
           <form id="multiStepForm">
        <!-- Step 1 -->
        <div class="stepnew active" id="step1thr">
            <div id="wizard-property-listing" class="bs-stepper vertical mt-2 linear">
 <div class="bs-stepper-header">
            <!--<button type="button" class="btn btn-primary btn-next">Add new Concerts</button>-->
              <button type="button" class="btn btn-primary btn-next">Add new Demonstration</button>
            <br>
    <div class="step active" data-target="#personal-details">
      <button type="button" class="step-trigger" aria-selected="true">
        <span class="bs-stepper-circle">
                   
          <i class="bx bx-user"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Events Details</span>
          <span class="bs-stepper-subtitle">Title Location</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <div class="step" data-target="#property-details">
      <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
        <span class="bs-stepper-circle">
          <i class="bx bx-home"></i>
        </span>
        <span class="bs-stepper-label">
            <span class="bs-stepper-title">Event Start</span>
          <span class="bs-stepper-subtitle">Date and Time</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <!--<div class="step" data-target="#property-features">-->
    <!--  <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">-->
    <!--    <span class="bs-stepper-circle">-->
    <!--      <i class="bx bx-star"></i>-->
    <!--    </span>-->
    <!--   <span class="bs-stepper-label">-->
    <!--      <span class="bs-stepper-title">Tickets</span>-->
    <!--      <span class="bs-stepper-subtitle">Sale Tickets</span>-->
    <!--    </span>-->
    <!--  </button>-->
    <!--</div>-->
    <div class="line"></div>
    <div class="step" data-target="#property-area">
      <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
        <span class="bs-stepper-circle">
          <i class="bx bx-map"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Notifications</span>
          <span class="bs-stepper-subtitle">Add Notifications</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <div class="step" data-target="#price-details">
      <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
        <span class="bs-stepper-circle">
          <i class="bx bx-dollar"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Contact</span>
          <span class="bs-stepper-subtitle">Contact Person</span>
        </span>
      </button>
    </div>
  </div>
  <div class="bs-stepper-content">
    <form id="wizard-property-listing-form" onsubmit="return false">

      <!-- Personal Details -->
      <div id="personal-details" class="content active dstepper-block fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-12">
            <div class="row">
              <!--<div class="col-md mb-md-0 mb-2">-->
              <!--  <div class="form-check custom-option custom-option-icon checked">-->
              <!--    <label class="form-check-label custom-option-content" for="customRadioBuilder">-->
              <!--      <span class="custom-option-body">-->
              <!--        <i class="bx bx-building-house"></i>-->
              <!--        <span class="custom-option-title">I am the Builder</span>-->
              <!--        <small>List property as Builder, list your project and get highest reach.</small>-->
              <!--      </span>-->
              <!--      <input name="plUserType" class="form-check-input" type="radio" value="1" id="customRadioBuilder" checked="">-->
              <!--    </label>-->
              <!--  </div>-->
              <!--</div>-->
              <!--<div class="col-md mb-md-0 mb-2">-->
              <!--  <div class="form-check custom-option custom-option-icon">-->
              <!--    <label class="form-check-label custom-option-content" for="customRadioOwner">-->
              <!--      <span class="custom-option-body">-->
              <!--        <i class="bx bx-crown"></i>-->
              <!--        <span class="custom-option-title"> I am the Owner </span>-->
              <!--        <small>Submit property as an Individual. Lease, Rent or Sell at the best price.</small>-->
              <!--      </span>-->
              <!--      <input name="plUserType" class="form-check-input" type="radio" value="2" id="customRadioOwner">-->
              <!--    </label>-->
              <!--  </div>-->
              <!--</div>-->
              
             <div class="container" style="width:364px;">


        <input name="file1" type="file" class="dropify" data-height="100" />
      </div>
      
   
              <!--<div class="col-md mb-md-0 mb-2">-->
              <!--  <div class="form-check custom-option custom-option-icon">-->
              <!--    <label class="form-check-label custom-option-content" for="customRadioBroker">-->
              <!--      <span class="custom-option-body">-->
              <!--        <i class="bx bx-briefcase-alt"></i>-->
              <!--        <span class="custom-option-title"> I am a Broker </span>-->
              <!--        <small>Earn highest commission by listing your clients properties at the best price.</small>-->
              <!--      </span>-->
              <!--      <input name="plUserType" class="form-check-input" type="radio" value="3" id="customRadioBroker">-->
              <!--    </label>-->
              <!--  </div>-->
              <!--</div>-->
            </div>
          </div>
        
              <div class="col-sm-6 fv-plugins-icon-container">
            <label class="form-label" for="plContact">Event Title</label>
            <div class="input-group input-group-merge">
             
              <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Event Title">
            </div>
          </div>
          
            <div class="col-sm-6">
            <label class="form-label" for="plContact">Describe</label>
            <div class="input-group input-group-merge">
             
              <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Input Text">
            </div>
          </div>
          
          
            <div class="col-sm-6">
            <label class="form-label" for="plContact">Location Name</label>
            <div class="input-group input-group-merge">
             
              <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Example Human Right Berlin">
            </div>
          </div>
          
         
          
          
          <div class="col-sm-6">
                 <label class="form-label" for="plContact">Select</label>
                                        <select id="sendNotification" class="form-select" name="sendNotification">
                                            <option selected="">Country</option>
                                            <option>America</option>
                                        </select>
                                    </div>
          
          
          
          
           <div class="col-sm-6">
            <label class="form-label" for="plContact">City and Zipcode</label>
            <div class="input-group input-group-merge">
             
              <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="City and ZipCode">
            </div>
          </div>
          
            <div class="col-sm-6">
            <label class="form-label" for="plContact">Address</label>
            <div class="input-group input-group-merge">
             
              <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Address">
            </div>
          </div>
          
          
        
          
          
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-label-secondary btn-prev" disabled=""> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
              <span class="align-middle d-sm-inline-block d-none">Previous</span>
            </button>
            <!--<button class="btn btn-primary btn-next"  onclick="nextStep('step1', 'step2')"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>-->
            
            <button type="button" class="btn btn-primary btn-next" onclick="nextStep('step1thr', 'step2thr')">Next</button>
          </div>
        </div>
      </div>

      <!-- Property Details -->
      <div id="property-details" class="content fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-12">
            <div class="row">
              <div class="col-xl mb-xl-0 mb-2">
                <div class="form-check custom-option custom-option-icon checked">
                  <label class="form-check-label custom-option-content" for="customRadioSell">
                    <span class="custom-option-body">
                      <i class="bx bx-home"></i>
                      <span class="custom-option-title">Sale the property</span>
                      <small>Post your property for sale.<br> Unlimited free listing.</small>
                    </span>
                    <input name="plPropertySaleRent" class="form-check-input" type="radio" value="1" id="customRadioSell" checked="">
                  </label>
                </div>
              </div>
              <div class="col-xl mb-xl-0 mb-2">
                <div class="form-check custom-option custom-option-icon">
                  <label class="form-check-label custom-option-content" for="customRadioRent">
                    <span class="custom-option-body">
                      <i class="bx bx-wallet"></i>
                      <span class="custom-option-title">Rent the property</span>
                      <small>Post your property for rent.<br> Unlimited free listing.</small>
                    </span>
                    <input name="plPropertySaleRent" class="form-check-input" type="radio" value="2" id="customRadioRent">
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 fv-plugins-icon-container">
            <label class="form-label" for="plPropertyType">Property Type</label>
            <div class="position-relative"><select id="plPropertyType" name="plPropertyType" class="select2 form-select select2-hidden-accessible" data-allow-clear="true" data-select2-id="plPropertyType" tabindex="-1" aria-hidden="true">
              <option value="" data-select2-id="4">Select Property Type</option>
              <option value="10002">Flat/ Apartment</option>
              <option value="10001">Residential House</option>
              <option value="10017">Villa</option>
              <option value="10003">Builder Floor Apartment</option>
              <option value="10000">Residential Land/ Plot</option>
              <option value="10021">Penthouse</option>
              <option value="10022">Studio Apartment</option>
            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="3" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-plPropertyType-container"><span class="select2-selection__rendered" id="select2-plPropertyType-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select property type</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
          <div class="col-sm-6 fv-plugins-icon-container">
            <label class="form-label" for="plZipCode">Zip Code</label>
            <input type="number" id="plZipCode" name="plZipCode" class="form-control" placeholder="99950">
          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
          <div class="col-sm-6">
            <label class="form-label" for="plCountry">Country</label>
            <div class="position-relative"><select id="plCountry" name="plCountry" class="select2 form-select select2-hidden-accessible" data-allow-clear="true" data-select2-id="plCountry" tabindex="-1" aria-hidden="true">
              <option value="" data-select2-id="2">Select</option>
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
            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-plCountry-container"><span class="select2-selection__rendered" id="select2-plCountry-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select country</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plState">State</label>
            <input type="text" id="plState" name="plState" class="form-control" placeholder="California">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plCity">City</label>
            <input type="text" id="plCity" name="plCity" class="form-control" placeholder="Los Angeles">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plLandmark">Landmark</label>
            <input type="text" id="plLandmark" name="plLandmark" class="form-control" placeholder="Nr. Hard Rock Cafe">
          </div>
          <div class="col-lg-12">
            <label class="form-label" for="plAddress">Address</label>
            <textarea id="plAddress" name="plAddress" class="form-control" rows="2" placeholder="12, Business Park"></textarea>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Property Features -->
      <div id="property-features" class="content fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-sm-6">
            <label class="form-label d-block" for="plBedrooms">Bedrooms</label>
            <input type="number" id="plBedrooms" name="plBedrooms" class="form-control" placeholder="3">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plFloorNo">Floor No</label>
            <input type="number" id="plFloorNo" name="plFloorNo" class="form-control" placeholder="12">
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plBathrooms">Bathrooms</label>
            <input type="number" id="plBathrooms" name="plBathrooms" class="form-control" placeholder="4">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plFurnishedStatus">Furnished Status</label>
            <select id="plFurnishedStatus" name="plFurnishedStatus" class="form-select">
              <option selected="" disabled="" value="">Select furnished status </option>
              <option value="1">Fully furnished</option>
              <option value="2">Furnished</option>
              <option value="3">Semi furnished</option>
              <option value="4">Unfurnished</option>
            </select>
          </div>
          <div class="col-lg-12">
            <label class="form-label" for="plFurnishingDetails">Furnishing Details</label>
            <tags class="tagify  form-control" tabindex="-1">
            <tag title="Fridge" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="Fridge"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">Fridge</span></div></tag><tag title="AC" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="AC"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">AC</span></div></tag><tag title="TV" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="TV"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">TV</span></div></tag><tag title="WiFi" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="WiFi"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">WiFi</span></div></tag><span contenteditable="" tabindex="0" data-placeholder="select options" aria-placeholder="select options" class="tagify__input" role="textbox" aria-autocomplete="both" aria-multiline="false"></span>
                ​
        </tags><input id="plFurnishingDetails" name="plFurnishingDetails" class="form-control" placeholder="select options" value="Fridge, AC, TV, WiFi" tabindex="-1">
          </div>
          <div class="col-sm-6">
            <label class="form-label">Is there any common area?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plCommonAreaRadio" id="plCommonAreaRadioYes" checked="">
              <label class="form-check-label" for="plCommonAreaRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plCommonAreaRadio" id="plCommonAreaRadioNo">
              <label class="form-check-label" for="plCommonAreaRadioNo">No</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Is there any attached balcony?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plAttachedBalconyRadio" id="plAttachedBalconyRadioYes" checked="">
              <label class="form-check-label" for="plAttachedBalconyRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plAttachedBalconyRadio" id="plAttachedBalconyRadioNo">
              <label class="form-check-label" for="plAttachedBalconyRadioNo">No</label>
            </div>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Property Area -->
      <div id="property-area" class="content fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-sm-6">
            <label class="form-label d-block" for="plTotalArea">Total Area</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plTotalArea" name="plTotalArea" placeholder="1000" aria-describedby="pl-total-area">
              <span class="input-group-text" id="pl-total-area">sq-ft</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plCarpetArea">Carpet Area</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plCarpetArea" name="plCarpetArea" placeholder="800" aria-describedby="pl-carpet-area">
              <span class="input-group-text" id="pl-carpet-area">sq-ft</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plPlotArea">Plot Area</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plPlotArea" name="plPlotArea" placeholder="800" aria-describedby="pl-plot-area">
              <span class="input-group-text" id="pl-plot-area">sq-yd</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plAvailableFrom">Available From</label>
            <input type="text" id="plAvailableFrom" name="plAvailableFrom" class="form-control flatpickr flatpickr-input" placeholder="YYYY-MM-DD" readonly="readonly">
          </div>
          <div class="col-sm-6">
            <label class="form-label">Possession Status</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plPossessionStatus" id="plUnderConstruction" checked="">
              <label class="form-check-label" for="plUnderConstruction">Under Construction</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plPossessionStatus" id="plReadyToMoveRadio">
              <label class="form-check-label" for="plReadyToMoveRadio">Ready to Move</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Transaction Type</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plTransectionType" id="plNewProperty" checked="">
              <label class="form-check-label" for="plNewProperty">New Property</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plTransectionType" id="plResaleProperty">
              <label class="form-check-label" for="plResaleProperty">Resale</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Is Property Facing Main Road?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plRoadFacingRadio" id="plRoadFacingRadioYes" checked="">
              <label class="form-check-label" for="plRoadFacingRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plRoadFacingRadio" id="plRoadFacingRadioNo">
              <label class="form-check-label" for="plRoadFacingRadioNo">No</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Gated Colony?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plGatedColonyRadio" id="plGatedColonyRadioYes" checked="">
              <label class="form-check-label" for="plGatedColonyRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plGatedColonyRadio" id="plGatedColonyRadioNo">
              <label class="form-check-label" for="plGatedColonyRadioNo">No</label>
            </div>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Price Details -->
      <div id="price-details" class="content fv-plugins-bootstrap5 fv-plugins-framework">
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
              <option value="1" selected="">Monthly</option>
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
              <input class="form-check-input" type="radio" name="plShowPriceRadio" id="plNagotiablePrice" checked="">
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
              <label class="form-check-label" for="plOtherCharges">Stamp Duty &amp; Registration charges excluded.</label>
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
            <br>
            <!--<button type="button" onclick="nextStep('step1', 'step2')">Next</button>-->
        </div>

        <!-- Step 2 -->
        <div class="stepnew" id="step2thr">
  
  <div id="wizard-property-listing" class="bs-stepper vertical mt-2 linear">
 <div class="bs-stepper-header">
      <button type="button" class="btn btn-primary btn-next">Add new Demonstration</button>
            <br>
    <div class="step" data-target="#personal-details">
      <button type="button" class="step-trigger" aria-selected="false">
        <span class="bs-stepper-circle">
          <i class="bx bx-user"></i>
        </span>
        <span class="bs-stepper-label">
           <span class="bs-stepper-title">Events Details</span>
          <span class="bs-stepper-subtitle">Title Location</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <div class="step active" data-target="#property-details">
      <button type="button" class="step-trigger" aria-selected="true" >
        <span class="bs-stepper-circle">
          <i class="bx bx-home"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Event Start</span>
          <span class="bs-stepper-subtitle">Date and Time</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <!--<div class="step" data-target="#property-features">-->
    <!--  <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">-->
    <!--    <span class="bs-stepper-circle">-->
    <!--      <i class="bx bx-star"></i>-->
    <!--    </span>-->
    <!--    <span class="bs-stepper-label">-->
    <!--      <span class="bs-stepper-title">Tickets</span>-->
    <!--      <span class="bs-stepper-subtitle">Sale Tickets</span>-->
    <!--    </span>-->
    <!--  </button>-->
    <!--</div>-->
    <div class="line"></div>
    <div class="step" data-target="#property-area">
      <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
        <span class="bs-stepper-circle">
          <i class="bx bx-map"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Notifications</span>
          <span class="bs-stepper-subtitle">Add Notifications</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <div class="step" data-target="#price-details">
      <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
        <span class="bs-stepper-circle">
          <i class="bx bx-dollar"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Contact</span>
          <span class="bs-stepper-subtitle">Contact Person</span>
        </span>
      </button>
    </div>
  </div>
  <div class="bs-stepper-content">
    <form id="wizard-property-listing-form" onsubmit="return false">

      <!-- Personal Details -->
      <div style="position:relative;height:100%;" id="personal-details" class="content active dstepper-block fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-12">
            <div class="row">
                <div class="d-flex justify-content-center align-items-center">
              <img src="{{asset('assets/img/clock.png')}}" width="130px"> 
              </div>
            </div>
         
          </div>
      
              <div class="col-sm-6 fv-plugins-icon-container">
                  
         
            <label class="form-label" for="plContact">Start Date</label>
            <div class="input-group input-group-merge">
              <input type="date" id="dateInput" name="dateInput" class="form-control flatpickrdate" pattern="\d{2}/\d{2}/\d{2}" placeholder="Date Picker" required>
               
              <!--<input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Event Title">-->
            </div>
          </div>
             <div class="col-sm-6 fv-plugins-icon-container">
            <label class="form-label" for="plContact">End Date</label>
            <div class="input-group input-group-merge">
              <input type="date" id="dateInput" name="dateInput" class="form-control flatpickrdate" pattern="\d{2}/\d{2}/\d{2}" placeholder="Date Picker" required>
               
              <!--<input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Event Title">-->
            </div>
          </div>
          
            <div class="col-sm-6">
            <label class="form-label" for="plContact">Start Time</label>
            <div class="input-group input-group-merge">
                             <input type="time" id="timeInput" name="timeInput" class="form-control flatpickrtime" pattern="\d{2}:\d{2}" placeholder="Time Picker" required>

              <!--<input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Input Text">-->
            </div>
          </div>
          
          
            <div class="col-sm-6">
            <label class="form-label" for="plContact">End Time</label>
            <div class="input-group input-group-merge">
                     <input type="time" id="timeInput" name="timeInput" class="form-control flatpickrtime" pattern="\d{2}:\d{2}" placeholder="Time Picker" required>
              <!--<input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Example Human Right Berlin">-->
            </div>
          </div>
          
         
          
          
          
          
          
        
          
          
          <div  class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev" > <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
              <span class="align-middle d-sm-inline-block " onclick="prevStep('step2thr', 'step1thr')">Previous</span>
            </button>
            <!--<button class="btn btn-primary btn-next"  onclick="nextStep('step1', 'step2')"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>-->
            
            <button type="button" class="btn btn-primary btn-next" onclick="nextStep('step2thr', 'step4thr')">Next</button>
              <!--<button type="button" onclick="nextStep('step2', 'step3')">Next</button>-->
          </div>
        </div>
      </div>

      <!-- Property Details -->
      <div id="property-details" class="content fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-12">
            <div class="row">
              <div class="col-xl mb-xl-0 mb-2">
                <div class="form-check custom-option custom-option-icon checked">
                  <label class="form-check-label custom-option-content" for="customRadioSell">
                    <span class="custom-option-body">
                      <i class="bx bx-home"></i>
                      <span class="custom-option-title">Sale the property</span>
                      <small>Post your property for sale.<br> Unlimited free listing.</small>
                    </span>
                    <input name="plPropertySaleRent" class="form-check-input" type="radio" value="1" id="customRadioSell" checked="">
                  </label>
                </div>
              </div>
              <div class="col-xl mb-xl-0 mb-2">
                <div class="form-check custom-option custom-option-icon">
                  <label class="form-check-label custom-option-content" for="customRadioRent">
                    <span class="custom-option-body">
                      <i class="bx bx-wallet"></i>
                      <span class="custom-option-title">Rent the property</span>
                      <small>Post your property for rent.<br> Unlimited free listing.</small>
                    </span>
                    <input name="plPropertySaleRent" class="form-check-input" type="radio" value="2" id="customRadioRent">
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 fv-plugins-icon-container">
            <label class="form-label" for="plPropertyType">Property Type</label>
            <div class="position-relative"><select id="plPropertyType" name="plPropertyType" class="select2 form-select select2-hidden-accessible" data-allow-clear="true" data-select2-id="plPropertyType" tabindex="-1" aria-hidden="true">
              <option value="" data-select2-id="4">Select Property Type</option>
              <option value="10002">Flat/ Apartment</option>
              <option value="10001">Residential House</option>
              <option value="10017">Villa</option>
              <option value="10003">Builder Floor Apartment</option>
              <option value="10000">Residential Land/ Plot</option>
              <option value="10021">Penthouse</option>
              <option value="10022">Studio Apartment</option>
            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="3" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-plPropertyType-container"><span class="select2-selection__rendered" id="select2-plPropertyType-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select property type</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
          <div class="col-sm-6 fv-plugins-icon-container">
            <label class="form-label" for="plZipCode">Zip Code</label>
            <input type="number" id="plZipCode" name="plZipCode" class="form-control" placeholder="99950">
          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
          <div class="col-sm-6">
            <label class="form-label" for="plCountry">Country</label>
            <div class="position-relative"><select id="plCountry" name="plCountry" class="select2 form-select select2-hidden-accessible" data-allow-clear="true" data-select2-id="plCountry" tabindex="-1" aria-hidden="true">
              <option value="" data-select2-id="2">Select</option>
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
            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-plCountry-container"><span class="select2-selection__rendered" id="select2-plCountry-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select country</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plState">State</label>
            <input type="text" id="plState" name="plState" class="form-control" placeholder="California">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plCity">City</label>
            <input type="text" id="plCity" name="plCity" class="form-control" placeholder="Los Angeles">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plLandmark">Landmark</label>
            <input type="text" id="plLandmark" name="plLandmark" class="form-control" placeholder="Nr. Hard Rock Cafe">
          </div>
          <div class="col-lg-12">
            <label class="form-label" for="plAddress">Address</label>
            <textarea id="plAddress" name="plAddress" class="form-control" rows="2" placeholder="12, Business Park"></textarea>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Property Features -->
      <div id="property-features" class="content fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-sm-6">
            <label class="form-label d-block" for="plBedrooms">Bedrooms</label>
            <input type="number" id="plBedrooms" name="plBedrooms" class="form-control" placeholder="3">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plFloorNo">Floor No</label>
            <input type="number" id="plFloorNo" name="plFloorNo" class="form-control" placeholder="12">
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plBathrooms">Bathrooms</label>
            <input type="number" id="plBathrooms" name="plBathrooms" class="form-control" placeholder="4">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plFurnishedStatus">Furnished Status</label>
            <select id="plFurnishedStatus" name="plFurnishedStatus" class="form-select">
              <option selected="" disabled="" value="">Select furnished status </option>
              <option value="1">Fully furnished</option>
              <option value="2">Furnished</option>
              <option value="3">Semi furnished</option>
              <option value="4">Unfurnished</option>
            </select>
          </div>
          <div class="col-lg-12">
            <label class="form-label" for="plFurnishingDetails">Furnishing Details</label>
            <tags class="tagify  form-control" tabindex="-1">
            <tag title="Fridge" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="Fridge"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">Fridge</span></div></tag><tag title="AC" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="AC"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">AC</span></div></tag><tag title="TV" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="TV"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">TV</span></div></tag><tag title="WiFi" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="WiFi"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">WiFi</span></div></tag><span contenteditable="" tabindex="0" data-placeholder="select options" aria-placeholder="select options" class="tagify__input" role="textbox" aria-autocomplete="both" aria-multiline="false"></span>
                ​
        </tags><input id="plFurnishingDetails" name="plFurnishingDetails" class="form-control" placeholder="select options" value="Fridge, AC, TV, WiFi" tabindex="-1">
          </div>
          <div class="col-sm-6">
            <label class="form-label">Is there any common area?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plCommonAreaRadio" id="plCommonAreaRadioYes" checked="">
              <label class="form-check-label" for="plCommonAreaRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plCommonAreaRadio" id="plCommonAreaRadioNo">
              <label class="form-check-label" for="plCommonAreaRadioNo">No</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Is there any attached balcony?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plAttachedBalconyRadio" id="plAttachedBalconyRadioYes" checked="">
              <label class="form-check-label" for="plAttachedBalconyRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plAttachedBalconyRadio" id="plAttachedBalconyRadioNo">
              <label class="form-check-label" for="plAttachedBalconyRadioNo">No</label>
            </div>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Property Area -->
      <div id="property-area" class="content fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-sm-6">
            <label class="form-label d-block" for="plTotalArea">Total Area</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plTotalArea" name="plTotalArea" placeholder="1000" aria-describedby="pl-total-area">
              <span class="input-group-text" id="pl-total-area">sq-ft</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plCarpetArea">Carpet Area</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plCarpetArea" name="plCarpetArea" placeholder="800" aria-describedby="pl-carpet-area">
              <span class="input-group-text" id="pl-carpet-area">sq-ft</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plPlotArea">Plot Area</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plPlotArea" name="plPlotArea" placeholder="800" aria-describedby="pl-plot-area">
              <span class="input-group-text" id="pl-plot-area">sq-yd</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plAvailableFrom">Available From</label>
            <input type="text" id="plAvailableFrom" name="plAvailableFrom" class="form-control flatpickr flatpickr-input" placeholder="YYYY-MM-DD" readonly="readonly">
          </div>
          <div class="col-sm-6">
            <label class="form-label">Possession Status</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plPossessionStatus" id="plUnderConstruction" checked="">
              <label class="form-check-label" for="plUnderConstruction">Under Construction</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plPossessionStatus" id="plReadyToMoveRadio">
              <label class="form-check-label" for="plReadyToMoveRadio">Ready to Move</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Transaction Type</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plTransectionType" id="plNewProperty" checked="">
              <label class="form-check-label" for="plNewProperty">New Property</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plTransectionType" id="plResaleProperty">
              <label class="form-check-label" for="plResaleProperty">Resale</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Is Property Facing Main Road?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plRoadFacingRadio" id="plRoadFacingRadioYes" checked="">
              <label class="form-check-label" for="plRoadFacingRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plRoadFacingRadio" id="plRoadFacingRadioNo">
              <label class="form-check-label" for="plRoadFacingRadioNo">No</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Gated Colony?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plGatedColonyRadio" id="plGatedColonyRadioYes" checked="">
              <label class="form-check-label" for="plGatedColonyRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plGatedColonyRadio" id="plGatedColonyRadioNo">
              <label class="form-check-label" for="plGatedColonyRadioNo">No</label>
            </div>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Price Details -->
      <div id="price-details" class="content fv-plugins-bootstrap5 fv-plugins-framework">
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
              <option value="1" selected="">Monthly</option>
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
              <input class="form-check-input" type="radio" name="plShowPriceRadio" id="plNagotiablePrice" checked="">
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
              <label class="form-check-label" for="plOtherCharges">Stamp Duty &amp; Registration charges excluded.</label>
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
            <br>
            <!--<button type="button" onclick="prevStep('step2', 'step1')">Previous</button>-->
            <!--<button type="button" onclick="nextStep('step2', 'step3')">Next</button>-->
        </div>

        <!-- Step 3 -->
        <div class="stepnew" id="step3thr">
               <div id="wizard-property-listing" class="bs-stepper vertical mt-2 linear">
 <div class="bs-stepper-header">
            <button type="button" class="btn btn-primary btn-next">Add new Demonstration</button>
            <br>
    <div class="step " data-target="#personal-details">
      <button type="button" class="step-trigger" aria-selected="false">
        <span class="bs-stepper-circle">
                   
          <i class="bx bx-user"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Events Details</span>
          <span class="bs-stepper-subtitle">Title Location</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <div class="step" data-target="#property-details">
      <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
        <span class="bs-stepper-circle">
          <i class="bx bx-home"></i>
        </span>
        <span class="bs-stepper-label">
            <span class="bs-stepper-title">Event Start</span>
          <span class="bs-stepper-subtitle">Date and Time</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <!--<div class="step active" data-target="#property-features">-->
    <!--  <button type="button" class="step-trigger" aria-selected="true">-->
    <!--    <span class="bs-stepper-circle">-->
    <!--      <i class="bx bx-star"></i>-->
    <!--    </span>-->
    <!--   <span class="bs-stepper-label">-->
    <!--      <span class="bs-stepper-title">Tickets</span>-->
    <!--      <span class="bs-stepper-subtitle">Sale Tickets</span>-->
    <!--    </span>-->
    <!--  </button>-->
    <!--</div>-->
    <div class="line"></div>
    <div class="step" data-target="#property-area">
      <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
        <span class="bs-stepper-circle">
          <i class="bx bx-map"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Notifications</span>
          <span class="bs-stepper-subtitle">Add Notifications</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <div class="step" data-target="#price-details">
      <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
        <span class="bs-stepper-circle">
          <i class="bx bx-dollar"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Contact</span>
          <span class="bs-stepper-subtitle">Contact Person</span>
        </span>
      </button>
    </div>
  </div>
  <div class="bs-stepper-content">
    <form id="wizard-property-listing-form" onsubmit="return false">

      <!-- Personal Details -->
      <div id="personal-details" class="content active dstepper-block fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-12">
            <div class="row">
            
              
      <!--       <div class="container" style="width:364px;">-->


      <!--  <input name="file1" type="file" class="dropify" data-height="100" />-->
      <!--</div>-->
      
   
             
            </div>
          </div>
        
        <!--babar azam-->
        <div class="col-sm-12">
            <div class="row">
              <div  style="width:47%;" class="col-sm-6">
              <div class="d-flex border-primary p-2 border rounded mb-4">
          <div class="avatar flex-shrink-0 me-3">
            <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/icons/unicons/briefcase.png" alt="User" class="rounded">
          </div>
          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
            <div class="me-2">
              <p class="mb-0">Activate Sale</p>
              <a href="javascript:void(0)" class="small" data-bs-target="#upgradePlanModal" data-bs-toggle="modal">Event Ticket Sale</a>
            </div>
            <div class="user-progress">
              <div class="">
                  <!--add-->
                  <div style="display: flex;justify-content: center; align-items: center" class="form-check form-switch mb-2">
          <input class="form-check-input closetogglebtn" type="checkbox" id="flexSwitchCheckChecked " checked="">
    
        </div>
                  
                  <!--add-->
                <!--<sup class="mt-3 mb-0 me-1">$</sup>-->
                <!--<h3 class="mb-0">2,124</h3>-->
                <!--<sub class="mt-auto mb-2"> /Year</sub>-->
              </div>
            </div>
          </div>
        </div>
        </div>
    
       <div class="col-sm-3 mt-2 closeradio" >
            <div style="border: 1px solid #696cff;border-radius:10px;">
          <div style="padding:4px;" class="d-flex justify-content-center align-items-center ">
              
              <div class="start d-flex">
                
              <div style="padding-bottom:4px" class="mt-2 d-flex">
                 <input name="customRadioSvg" class="form-check-input" type="radio" value="" id="customRadioSvg3">
                  &nbsp;  &nbsp;
             <!-- <div style="border-radius:100%;border:1px solid black;padding:0px 2px;" class="d-flex justify-content-center align-items-center">-->
             <!--<strong>.$. </strong> -->
             <!--</div>-->
             <label>.Dollar.</label>
             
           </div>
          </div>
          </div>
         
        <!--  <div style="display: flex;justify-content: center; align-items: center" class="form-check form-switch mb-2">-->
        <!--  <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">-->
    
        <!--</div>-->
          
          </div>
        </div>
        
           <div class="col-sm-3 mt-2 closeradio">
            <div style="border: 1px solid #696cff;border-radius:10px;">
          <div style="padding:4px" class="d-flex justify-content-center align-items-center ">
              
              <div class="start d-flex">
                  <div class="">
                    <!--<img src="https://yekbun.hellodev.site/public//assets/img/seat.png" alt="" width="40px">-->
              </div>
            <div style="padding-bottom:4px" class="mt-2 d-flex ">
                 <input name="customRadioSvg" class="form-check-input" type="radio" value="" id="customRadioSvg3">
                    &nbsp;  &nbsp;
             <!-- <div style="border-radius:100%;border:1px solid black;padding:0px 2px;" class="d-flex justify-content-center align-items-center">-->
             <!--<strong>.€. </strong> -->
             <!--</div>-->
             <label>.Euro.</label>
             
           
          </div>
          </div>
          
          <!--<div class="toggle-btn">-->
            
                <!--<button style="color: black;" class="btn btn-secondary bg-light ">Price Here</button>-->
          <!--     <button style="color: black;background:#f5f5f9;border:1px solid black"; class="btn ">Price Here</button>-->
          <!--</div>-->
        <!--  <div style="display: flex;justify-content: center; align-items: center" class="form-check form-switch mb-2">-->
        <!--  <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">-->
    
        <!--</div>-->
            <!-- <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Event Title"> -->
          </div>
        </div>
        </div>
        
        </div>
        </div>
      
        
        <!--babar azam end-->
        
      <!--        <div class="col-sm-12 fv-plugins-icon-container">-->
            <!--<label class="form-label" for="plContact">Ticket Sale</label>-->
            
      <!--      <div style="background:#f5f5f9" class="d-flex justify-content-center ">-->
      <!--        <div class="">-->
      <!-- <div class="input-group input-group-merge d-flex justify-content-between">-->
            
      <!--      <div class="start d-flex">-->
           
      <!--      <div class="d-flex ">-->
                
             
      <!--          <div>-->
      <!--     <strong>Activate Sale</strong> -->
      <!--     <p class="m-0">Event Ticket Sale</p>-->
                    
      <!--          </div>-->
      <!--             <div>-->
        <!--            <div style="" class="toggle-btn">-->
               
            
        <!--    <label class="switch">-->
        <!--        <input type="checkbox">-->
        <!--        <span class="slider round"></span>-->
        <!--      </label>-->
        <!--</div>-->
      <!--  <div style="display: flex;justify-content: center; align-items: center" class="form-check form-switch mb-2">-->
      <!--    <input class="form-check-input closetogglebtn" type="checkbox" id="flexSwitchCheckChecked " checked="" >-->
    
      <!--  </div>-->
      <!--          </div>-->
           
      <!--  </div>-->
      <!--  </div>-->
        
        
      
        <!--<div class="toggle-btn">-->
        <!--    <label class="switch">-->
        <!--        <input type="checkbox">-->
        <!--        <span class="slider round"></span>-->
        <!--      </label>-->
        <!--</div>-->
        
      <!--  </div>-->
        
      <!--</div>-->
      <!--      </div>-->
      <!--    </div>-->
          
          
        <!--    <div style="display:flex;justify-content-center align-items-center">-->
        <!--    <div class="">-->
        <!--        <div class="row">-->
        <!--            <div class="dollar ">-->
        <!--                <div style="border-radius:100%;border:1px solid whitesmoke;">-->
        <!--                .$.-->
        <!--                </div>-->
        <!--                Dollar-->
        <!--            </div>-->
        <!--              <div class="dollar ">-->
        <!--                   <div style="border-radius:100%;border:1px solid whitesmoke;">-->
        <!--                .€.-->
        <!--                </div>-->
        <!--                Euro-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
        
        
        
        <!--apna kam banta-->
        
        <!--<div class="d-flex justify-content-center align-items-center" id="closeradio">-->
        <!--<div style="padding:8px;" class="col-sm-6">-->
          
        <!--       <div class="row">-->
        <!--      <div  class="col-sm-6">-->
        <!-- <div style="border: 1px solid #696cff;border-radius:10px;">-->
        <!--  <div style="padding:4px;" class="d-flex justify-content-center align-items-center ">-->
              
        <!--      <div class="start d-flex">-->
                
        <!--      <div style="padding-bottom:4px" class="mt-2 d-flex">-->
        <!--         <input name="customRadioSvg" class="form-check-input" type="radio" value="" id="customRadioSvg3">-->
        <!--          &nbsp  &nbsp-->
        <!--      <div style="border-radius:100%;border:1px solid black;padding:0px 2px;"  class="d-flex justify-content-center align-items-center">-->
        <!--     <strong>.$. </strong> -->
        <!--     </div>-->
        <!--     <label>.Dollar.</label>-->
             
        <!--   </div>-->
        <!--  </div>-->
        <!--  </div>-->
         
        <!--  <div style="display: flex;justify-content: center; align-items: center" class="form-check form-switch mb-2">-->
        <!--  <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">-->
    
        <!--</div>-->
          
        <!--  </div>-->
        <!--</div>-->
        
        <!-- <div class="col-sm-6">-->
        <!--    <div style="border: 1px solid #696cff;border-radius:10px;">-->
        <!--  <div style="padding:4px" class="d-flex justify-content-center align-items-center ">-->
              
        <!--      <div class="start d-flex">-->
        <!--          <div class="">-->
                    <!--<img src="https://yekbun.hellodev.site/public//assets/img/seat.png" alt="" width="40px">-->
        <!--      </div>-->
        <!--    <div style="padding-bottom:4px" class="mt-2 d-flex ">-->
        <!--         <input name="customRadioSvg" class="form-check-input" type="radio" value="" id="customRadioSvg3">-->
        <!--            &nbsp  &nbsp-->
        <!--      <div style="border-radius:100%;border:1px solid black;padding:0px 2px;"  class="d-flex justify-content-center align-items-center">-->
        <!--     <strong>.€. </strong> -->
        <!--     </div>-->
        <!--     <label>.Euro.</label>-->
             
           
        <!--  </div>-->
        <!--  </div>-->
          
          <!--<div class="toggle-btn">-->
            
                <!--<button style="color: black;" class="btn btn-secondary bg-light ">Price Here</button>-->
          <!--     <button style="color: black;background:#f5f5f9;border:1px solid black"; class="btn ">Price Here</button>-->
          <!--</div>-->
        <!--  <div style="display: flex;justify-content: center; align-items: center" class="form-check form-switch mb-2">-->
        <!--  <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">-->
    
        <!--</div>-->
            <!-- <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Event Title"> -->
        <!--  </div>-->
        <!--</div>-->
        <!--</div>-->
        <!--  </div>-->
        <!--</div>-->
        <!--</div>-->
          
          
<!--              <div class="col-sm-6 fv-plugins-icon-container">-->
<!--            <label class="form-label" for="plContact">Select Currency</label>-->
<!--            <div class="">-->
<!--              <div class="">-->
<!--       <div class="input-group input-group-merge d-flex justify-content-between">-->
            
<!--            <div class="start d-flex">-->
             
<!--            <div class="">-->
           
<!--             <div class="toggle-btn">-->
<!--            <label class="switch">-->
<!--                <input type="checkbox">-->
<!--                <span class="slider round"></span>-->
<!--              </label>-->
<!--        </div>-->
<!--        </div>-->
<!--           <div class="">-->
                <!--<img src="{{asset('assets/img/dollar.webp')}}" alt="" width="40px" >-->
<!--                <span>Standard</span>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div style="-->
<!--    margin-right: -169px;-->
<!--" class="toggle-btn">-->
<!--            <label class="switch">-->
<!--                <input type="checkbox">-->
<!--                <span class="slider round"></span>-->
<!--              </label>-->
<!--        </div>-->
<!--        <div class="">-->
                <!--<img src="{{asset('assets/img/dollar.webp')}}" alt="" width="40px" >-->
<!--                <span>V.I.P</span>-->
<!--            </div>-->
          <!-- <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Event Title"> -->
<!--        </div>-->
        
<!--      </div>-->
<!--            </div>-->
<!--          </div>-->
          <!---->
        <!--  <div class="col-sm-12">-->
        <!--      <div class="row">-->
        
        <!--    <div style="width:48%;" class="col-sm-6 d-flex p-2">-->
        <!--        <div style="border:1px solid #696cff;width:100%;border-radius:10px;">-->
        <!--        <div style="width:100%">-->
            <!--<label class="form-label" for="plContact">Standard Ticket</label>-->
           
        <!--    <div style="display: flex;justify-content: center; align-items: center;height:50px;" class="">-->
        <!--    <h1 style=" display: contents;" class="form-label d-contents">Standard Ticket</h1>-->
        <!--          <div style="" class="toggle-btn ">-->
        <!--    <label class="switch">-->
        <!--        <input type="checkbox">-->
        <!--        <span class="slider round"></span>-->
        <!--      </label>-->
        <!--</div>-->
        <!--<input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">-->
        <!--<div style="display: flex;justify-content: center; align-items: center" class="form-check form-switch ">-->
        <!--  <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">-->
    
        <!--</div>-->
        <!--</div>-->
      
        <!--</div>-->
        <!--</div>-->
        <!--</div>-->
        <!--       <div  style="width:48%;"  class="col-sm-6 d-flex p-2">-->
        <!--           <div style="border:1px solid #696cff;width:100%;border-radius:10px;">-->
        <!--           <div  style="width:100%;">-->
            <!--<label class="form-label" for="plContact">Standard Ticket</label>-->
           
        <!--    <div style="display: flex;justify-content: center;align-items: center;height:50px;";>-->
        <!--    <h1 style=" display: contents;" class="form-label d-contents">VIP Ticket</h1>-->
                
        <!--<div style="" class="toggle-btn">-->
                 
            
        <!--    <label class="switch">-->
        <!--        <input type="checkbox">-->
        <!--        <span class="slider round"></span>-->
        <!--      </label>-->
        <!--</div>-->
        <!--<div style="display: flex;justify-content: center; align-items: center" class="form-check form-switch ">-->
        <!--  <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">-->
    
        <!--</div>-->
        <!--</div>-->
        <!--</div>-->
        <!--</div>-->
        <!--</div>-->
        <!--</div>-->
        
        <!--  </div>-->
            <!--<hr>-->
            <div class="row">
       
        
        <!--babu bhaiya-->
        <div class="col-sm-6 mb-4">
    <div class="card ">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2">Standard Ticket</h5>
        <!--<div class="dropdown">-->
        <!--  <button class="btn p-0" type="button" id="upgradePlanCard" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
        <!--    <i class="bx bx-dots-vertical-rounded"></i>-->
        <!--  </button>-->
        <!--  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="upgradePlanCard" style="">-->
        <!--    <a class="dropdown-item" href="javascript:void(0);">Select All</a>-->
        <!--    <a class="dropdown-item" href="javascript:void(0);">Refresh</a>-->
        <!--    <a class="dropdown-item" href="javascript:void(0);">Share</a>-->
        <!--  </div>-->
        <!--</div>-->
        <div style="display: flex;justify-content: center; align-items: center" class="form-check form-switch ">
          <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">
    
        </div>
      </div>
      <div class="card-body">
        <!--<p class="mb-4">Please make the payment to start enjoying all the features of our premium plan as soon as possible.</p>-->
        <!--<div class="d-flex border-primary p-2 border rounded mb-4">-->
        <!--  <div class="avatar flex-shrink-0 me-3">-->
        <!--    <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/icons/unicons/briefcase.png" alt="User" class="rounded">-->
        <!--  </div>-->
        <!--  <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">-->
            <!--<div class="me-2">-->
            <!--  <p class="mb-0">Business</p>-->
            <!--  <a href="javascript:void(0)" class="small" data-bs-target="#upgradePlanModal" data-bs-toggle="modal">Upgrade Plan</a>-->
            <!--</div>-->
            <!--<div class="user-progress">-->
            <!--  <div class="d-flex justify-content-center">-->
            <!--    <sup class="mt-3 mb-0 me-1">$</sup>-->
            <!--    <h3 class="mb-0">2,124</h3>-->
            <!--    <sub class="mt-auto mb-2"> /Year</sub>-->
            <!--  </div>-->
            <!--</div>-->
        <!--  </div>-->
        <!--</div>-->
        <form id="paymentDetailsForm" onsubmit="return false" class="pt-2">
          <h6 class="mb-4">Options</h6>
          <div class="d-flex mb-4">
            <div class="me-3">
              <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/icons/payments/visa-light.png" alt="Visa" class="img-fluid w-px-50 h-px-30" data-app-light-img="icons/payments/visa-light.png" data-app-dark-img="icons/payments/visa-dark.png">
            </div>
            <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
              <div class="d-flex flex-column">
                <h6 class="mb-0">Seat</h6>
                <small class="text-muted">8562 xxxx xxxx 4563</small>
              </div>
              <div class="w-px-75">
                <input type="text" class="form-control cvv-code-payment" maxlength="3" placeholder="CVV">
              </div>
            </div>
          </div>
          <div class="d-flex mb-4">
            <div class="me-3">
              <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/icons/payments/master-light.png" class="img-fluid w-px-50 h-px-30" alt="MasterCard" data-app-light-img="icons/payments/master-light.png" data-app-dark-img="icons/payments/master-dark.png">
            </div>
            <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
              <div class="d-flex flex-column">
                <h6 class="mb-0">Price Adult</h6>
                <small class="text-muted">18 Years</small>
              </div>
              <div class="w-px-75">
                <input type="text" class="form-control cvv-code-payment" maxlength="3" placeholder="CVV">
              </div>
            </div>
          </div>
          
           <div class="d-flex mb-4">
            <div class="me-3">
              <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/icons/payments/master-light.png" class="img-fluid w-px-50 h-px-30" alt="MasterCard" data-app-light-img="icons/payments/master-light.png" data-app-dark-img="icons/payments/master-dark.png">
            </div>
            <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
              <div class="d-flex flex-column">
                <h6 class="mb-0">Price Kids</h6>
                <small class="text-muted">15 Years</small>
              </div>
              <div class="w-px-75">
                <input type="text" class="form-control cvv-code-payment" maxlength="3" placeholder="CVV">
              </div>
            </div>
          </div>
           <div class="d-flex mb-4">
            <div class="me-3">
              <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/icons/payments/master-light.png" class="img-fluid w-px-50 h-px-30" alt="MasterCard" data-app-light-img="icons/payments/master-light.png" data-app-dark-img="icons/payments/master-dark.png">
            </div>
            <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
              <div class="d-flex flex-column">
                <h6 class="mb-0">Price Kids</h6>
                <small class="text-muted">15 Years</small>
              </div>
              <div class="w-px-75">
                <input type="text" class="form-control cvv-code-payment" maxlength="3" placeholder="CVV">
              </div>
            </div>
          </div>
          <!--<a href="javascript:;" class="fw-medium d-block my-2" data-bs-toggle="modal" data-bs-target="#addNewCCModal"> Add Payment Method </a>-->
          <!--<div class="col-12 mb-4">-->
          <!--  <input id="addEmail" name="addEmail" class="form-control" type="text" placeholder="Email Address">-->
          <!--</div>-->
          <!--<div class="col-12 text-center">-->
          <!--  <button type="submit" class="btn btn-primary w-100 d-grid">Process to payment</button>-->
          <!--</div>-->
        </form>
      </div>
    </div>
  </div>
        
        <!--babu bhaiya end-->
   
<!--babu bhaiya 2-->
       <div class="col-sm-6 mb-4">
    <div class="card">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2">VIP Ticket</h5>
        <!--<div class="dropdown">-->
        <!--  <button class="btn p-0" type="button" id="upgradePlanCard" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
        <!--    <i class="bx bx-dots-vertical-rounded"></i>-->
        <!--  </button>-->
        <!--  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="upgradePlanCard" style="">-->
        <!--    <a class="dropdown-item" href="javascript:void(0);">Select All</a>-->
        <!--    <a class="dropdown-item" href="javascript:void(0);">Refresh</a>-->
        <!--    <a class="dropdown-item" href="javascript:void(0);">Share</a>-->
        <!--  </div>-->
        <!--</div>-->
        <div style="display: flex;justify-content: center; align-items: center" class="form-check form-switch ">
          <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">
    
        </div>
      </div>
      <div class="card-body">
        <!--<p class="mb-4">Please make the payment to start enjoying all the features of our premium plan as soon as possible.</p>-->
        <!--<div class="d-flex border-primary p-2 border rounded mb-4">-->
        <!--  <div class="avatar flex-shrink-0 me-3">-->
        <!--    <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/icons/unicons/briefcase.png" alt="User" class="rounded">-->
        <!--  </div>-->
        <!--  <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">-->
            <!--<div class="me-2">-->
            <!--  <p class="mb-0">Business</p>-->
            <!--  <a href="javascript:void(0)" class="small" data-bs-target="#upgradePlanModal" data-bs-toggle="modal">Upgrade Plan</a>-->
            <!--</div>-->
            <!--<div class="user-progress">-->
            <!--  <div class="d-flex justify-content-center">-->
            <!--    <sup class="mt-3 mb-0 me-1">$</sup>-->
            <!--    <h3 class="mb-0">2,124</h3>-->
            <!--    <sub class="mt-auto mb-2"> /Year</sub>-->
            <!--  </div>-->
            <!--</div>-->
        <!--  </div>-->
        <!--</div>-->
        <form id="paymentDetailsForm" onsubmit="return false" class="">
          <h6 class="mb-4">Options</h6>
          <div class="d-flex mb-4">
            <div class="me-3">
              <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/icons/payments/visa-light.png" alt="Visa" class="img-fluid w-px-50 h-px-30" data-app-light-img="icons/payments/visa-light.png" data-app-dark-img="icons/payments/visa-dark.png">
            </div>
            <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
              <div class="d-flex flex-column">
                <h6 class="mb-0">Seat</h6>
                <small class="text-muted">8562 xxxx xxxx 4563</small>
              </div>
              <div class="w-px-75">
                <input type="text" class="form-control cvv-code-payment" maxlength="3" placeholder="CVV">
              </div>
            </div>
          </div>
          <div class="d-flex mb-4">
            <div class="me-3">
              <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/icons/payments/master-light.png" class="img-fluid w-px-50 h-px-30" alt="MasterCard" data-app-light-img="icons/payments/master-light.png" data-app-dark-img="icons/payments/master-dark.png">
            </div>
            <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
              <div class="d-flex flex-column">
                <h6 class="mb-0">Price Adult</h6>
                <small class="text-muted">18 Years</small>
              </div>
              <div class="w-px-75">
                <input type="text" class="form-control cvv-code-payment" maxlength="3" placeholder="CVV">
              </div>
            </div>
          </div>
          
           <div class="d-flex mb-4">
            <div class="me-3">
              <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/icons/payments/master-light.png" class="img-fluid w-px-50 h-px-30" alt="MasterCard" data-app-light-img="icons/payments/master-light.png" data-app-dark-img="icons/payments/master-dark.png">
            </div>
            <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
              <div class="d-flex flex-column">
                <h6 class="mb-0">Price Kids</h6>
                <small class="text-muted">15 Years</small>
              </div>
              <div class="w-px-75">
                <input type="text" class="form-control cvv-code-payment" maxlength="3" placeholder="CVV">
              </div>
            </div>
          </div>
           <div class="d-flex mb-4">
            <div class="me-3">
              <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/icons/payments/master-light.png" class="img-fluid w-px-50 h-px-30" alt="MasterCard" data-app-light-img="icons/payments/master-light.png" data-app-dark-img="icons/payments/master-dark.png">
            </div>
            <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
              <div class="d-flex flex-column">
                <h6 class="mb-0">Price Kids</h6>
                <small class="text-muted">15 Years</small>
              </div>
              <div class="w-px-75">
                <input type="text" class="form-control cvv-code-payment" maxlength="3" placeholder="CVV">
              </div>
            </div>
          </div>
          <!--<a href="javascript:;" class="fw-medium d-block my-2" data-bs-toggle="modal" data-bs-target="#addNewCCModal"> Add Payment Method </a>-->
          <!--<div class="col-12 mb-4">-->
          <!--  <input id="addEmail" name="addEmail" class="form-control" type="text" placeholder="Email Address">-->
          <!--</div>-->
          <!--<div class="col-12 text-center">-->
          <!--  <button type="submit" class="btn btn-primary w-100 d-grid">Process to payment</button>-->
          <!--</div>-->
        </form>
      </div>
    </div>
  </div>
<!--babu bhaiya 2 end-->
            </div>
          
          <br>
          <!--addd new cards-->
        <!--  <div style=background:white; class="col-sm-12">-->
        <!--  <div class="card-body">-->
        <!--    <div class="report-list">-->
        <!--      <div class="report-list-item rounded-2 mb-3">-->
        <!--        <div class="d-flex align-items-start">-->
        <!--          <div class="report-list-icon shadow-sm me-2">-->
        <!--            <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/svg/icons/paypal-icon.svg" width="22" height="22" alt="Paypal">-->
        <!--          </div>-->
        <!--          <div class="d-flex justify-content-between align-items-end w-100 flex-wrap gap-2">-->
                      
        <!--            <div class="d-flex flex-column">-->
        <!--              <span>Income</span>-->
        <!--              <h5 class="mb-0">$42,845</h5>-->
        <!--            </div>-->
                    
        <!--            <div style="padding-left: 550px;" class="toggle-btn">-->
        <!--          <span>Free</span>-->
            
        <!--    <label class="switch">-->
        <!--        <input type="checkbox">-->
        <!--        <span class="slider round"></span>-->
        <!--      </label>-->
        <!--</div>-->
        <!--<div style="display: flex;justify-content: center; align-items: center;padding-left: 610px;" class="form-check form-switch mb-2">-->
        <!--  <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">-->
   
        <!--</div>-->
        <!--            <small class="text-success">+2.34k</small>-->
        <!--          </div>-->
        <!--        </div>-->
        <!--      </div>-->
              <!--<div class="report-list-item rounded-2 mb-3">-->
              <!--  <div class="d-flex align-items-start">-->
              <!--    <div class="report-list-icon shadow-sm me-2">-->
              <!--      <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/svg/icons/shopping-bag-icon.svg" width="22" height="22" alt="Shopping Bag">-->
              <!--    </div>-->
              <!--    <div class="d-flex justify-content-between align-items-end w-100 flex-wrap gap-2">-->
              <!--      <div class="d-flex flex-column">-->
              <!--        <span>Expense</span>-->
              <!--        <h5 class="mb-0">$38,658</h5>-->
              <!--      </div>-->
              <!--      <small class="text-danger">-1.15k</small>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--</div>-->
        <!--      <div class="report-list-item rounded-2">-->
        <!--        <div class="d-flex align-items-start">-->
        <!--          <div class="report-list-icon shadow-sm me-2">-->
                    <!--<img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/svg/icons/wallet-icon.svg" width="22" height="22" alt="Wallet">-->
        <!--          </div>-->
                  <!--<div class="d-flex justify-content-between align-items-end w-100 flex-wrap gap-2">-->
                  <!--  <div class="d-flex flex-column">-->
                  <!--    <span>Profit</span>-->
                  <!--    <h5 class="mb-0">$18,220</h5>-->
                  <!--  </div>-->
                  <!--  <small class="text-success">+1.35k</small>-->
                  <!--</div>-->
        <!--        </div>-->
        <!--      </div>-->
        <!--    </div>-->
        <!--  </div>-->
        <!--  </div>-->
          <!--addd new cards-->
          
          
          
        
         
        
          <!--addd-->
          
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev" onclick="nextStep('step3thr', 'step2thr')"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
              <span class="align-middle d-sm-inline-block d-none">Previous</span>
            </button>
            <!--<button class="btn btn-primary btn-next"  onclick="nextStep('step1', 'step2')"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>-->
            
            <button type="button" class="btn btn-primary btn-next" onclick="nextStep('step3thr', 'step4thr')" >Next</button>
          </div>
        </div>
      </div>

      <!-- Property Details -->
      <div id="property-details" class="content fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-12">
            <div class="row">
              <div class="col-xl mb-xl-0 mb-2">
                <div class="form-check custom-option custom-option-icon checked">
                  <label class="form-check-label custom-option-content" for="customRadioSell">
                    <span class="custom-option-body">
                      <i class="bx bx-home"></i>
                      <span class="custom-option-title">Sale the property</span>
                      <small>Post your property for sale.<br> Unlimited free listing.</small>
                    </span>
                    <input name="plPropertySaleRent" class="form-check-input" type="radio" value="1" id="customRadioSell" checked="">
                  </label>
                </div>
              </div>
              <div class="col-xl mb-xl-0 mb-2">
                <div class="form-check custom-option custom-option-icon">
                  <label class="form-check-label custom-option-content" for="customRadioRent">
                    <span class="custom-option-body">
                      <i class="bx bx-wallet"></i>
                      <span class="custom-option-title">Rent the property</span>
                      <small>Post your property for rent.<br> Unlimited free listing.</small>
                    </span>
                    <input name="plPropertySaleRent" class="form-check-input" type="radio" value="2" id="customRadioRent">
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 fv-plugins-icon-container">
            <label class="form-label" for="plPropertyType">Property Type</label>
            <div class="position-relative"><select id="plPropertyType" name="plPropertyType" class="select2 form-select select2-hidden-accessible" data-allow-clear="true" data-select2-id="plPropertyType" tabindex="-1" aria-hidden="true">
              <option value="" data-select2-id="4">Select Property Type</option>
              <option value="10002">Flat/ Apartment</option>
              <option value="10001">Residential House</option>
              <option value="10017">Villa</option>
              <option value="10003">Builder Floor Apartment</option>
              <option value="10000">Residential Land/ Plot</option>
              <option value="10021">Penthouse</option>
              <option value="10022">Studio Apartment</option>
            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="3" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-plPropertyType-container"><span class="select2-selection__rendered" id="select2-plPropertyType-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select property type</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
          <div class="col-sm-6 fv-plugins-icon-container">
            <label class="form-label" for="plZipCode">Zip Code</label>
            <input type="number" id="plZipCode" name="plZipCode" class="form-control" placeholder="99950">
          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
          <div class="col-sm-6">
            <label class="form-label" for="plCountry">Country</label>
            <div class="position-relative"><select id="plCountry" name="plCountry" class="select2 form-select select2-hidden-accessible" data-allow-clear="true" data-select2-id="plCountry" tabindex="-1" aria-hidden="true">
              <option value="" data-select2-id="2">Select</option>
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
            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-plCountry-container"><span class="select2-selection__rendered" id="select2-plCountry-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select country</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plState">State</label>
            <input type="text" id="plState" name="plState" class="form-control" placeholder="California">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plCity">City</label>
            <input type="text" id="plCity" name="plCity" class="form-control" placeholder="Los Angeles">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plLandmark">Landmark</label>
            <input type="text" id="plLandmark" name="plLandmark" class="form-control" placeholder="Nr. Hard Rock Cafe">
          </div>
          <div class="col-lg-12">
            <label class="form-label" for="plAddress">Address</label>
            <textarea id="plAddress" name="plAddress" class="form-control" rows="2" placeholder="12, Business Park"></textarea>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Property Features -->
      <div id="property-features" class="content fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-sm-6">
            <label class="form-label d-block" for="plBedrooms">Bedrooms</label>
            <input type="number" id="plBedrooms" name="plBedrooms" class="form-control" placeholder="3">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plFloorNo">Floor No</label>
            <input type="number" id="plFloorNo" name="plFloorNo" class="form-control" placeholder="12">
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plBathrooms">Bathrooms</label>
            <input type="number" id="plBathrooms" name="plBathrooms" class="form-control" placeholder="4">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plFurnishedStatus">Furnished Status</label>
            <select id="plFurnishedStatus" name="plFurnishedStatus" class="form-select">
              <option selected="" disabled="" value="">Select furnished status </option>
              <option value="1">Fully furnished</option>
              <option value="2">Furnished</option>
              <option value="3">Semi furnished</option>
              <option value="4">Unfurnished</option>
            </select>
          </div>
          <div class="col-lg-12">
            <label class="form-label" for="plFurnishingDetails">Furnishing Details</label>
            <tags class="tagify  form-control" tabindex="-1">
            <tag title="Fridge" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="Fridge"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">Fridge</span></div></tag><tag title="AC" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="AC"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">AC</span></div></tag><tag title="TV" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="TV"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">TV</span></div></tag><tag title="WiFi" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="WiFi"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">WiFi</span></div></tag><span contenteditable="" tabindex="0" data-placeholder="select options" aria-placeholder="select options" class="tagify__input" role="textbox" aria-autocomplete="both" aria-multiline="false"></span>
                ​
        </tags><input id="plFurnishingDetails" name="plFurnishingDetails" class="form-control" placeholder="select options" value="Fridge, AC, TV, WiFi" tabindex="-1">
          </div>
          <div class="col-sm-6">
            <label class="form-label">Is there any common area?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plCommonAreaRadio" id="plCommonAreaRadioYes" checked="">
              <label class="form-check-label" for="plCommonAreaRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plCommonAreaRadio" id="plCommonAreaRadioNo">
              <label class="form-check-label" for="plCommonAreaRadioNo">No</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Is there any attached balcony?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plAttachedBalconyRadio" id="plAttachedBalconyRadioYes" checked="">
              <label class="form-check-label" for="plAttachedBalconyRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plAttachedBalconyRadio" id="plAttachedBalconyRadioNo">
              <label class="form-check-label" for="plAttachedBalconyRadioNo">No</label>
            </div>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Property Area -->
      <div id="property-area" class="content fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-sm-6">
            <label class="form-label d-block" for="plTotalArea">Total Area</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plTotalArea" name="plTotalArea" placeholder="1000" aria-describedby="pl-total-area">
              <span class="input-group-text" id="pl-total-area">sq-ft</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plCarpetArea">Carpet Area</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plCarpetArea" name="plCarpetArea" placeholder="800" aria-describedby="pl-carpet-area">
              <span class="input-group-text" id="pl-carpet-area">sq-ft</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plPlotArea">Plot Area</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plPlotArea" name="plPlotArea" placeholder="800" aria-describedby="pl-plot-area">
              <span class="input-group-text" id="pl-plot-area">sq-yd</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plAvailableFrom">Available From</label>
            <input type="text" id="plAvailableFrom" name="plAvailableFrom" class="form-control flatpickr flatpickr-input" placeholder="YYYY-MM-DD" readonly="readonly">
          </div>
          <div class="col-sm-6">
            <label class="form-label">Possession Status</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plPossessionStatus" id="plUnderConstruction" checked="">
              <label class="form-check-label" for="plUnderConstruction">Under Construction</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plPossessionStatus" id="plReadyToMoveRadio">
              <label class="form-check-label" for="plReadyToMoveRadio">Ready to Move</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Transaction Type</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plTransectionType" id="plNewProperty" checked="">
              <label class="form-check-label" for="plNewProperty">New Property</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plTransectionType" id="plResaleProperty">
              <label class="form-check-label" for="plResaleProperty">Resale</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Is Property Facing Main Road?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plRoadFacingRadio" id="plRoadFacingRadioYes" checked="">
              <label class="form-check-label" for="plRoadFacingRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plRoadFacingRadio" id="plRoadFacingRadioNo">
              <label class="form-check-label" for="plRoadFacingRadioNo">No</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Gated Colony?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plGatedColonyRadio" id="plGatedColonyRadioYes" checked="">
              <label class="form-check-label" for="plGatedColonyRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plGatedColonyRadio" id="plGatedColonyRadioNo">
              <label class="form-check-label" for="plGatedColonyRadioNo">No</label>
            </div>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="align-middle d-sm-inline-block " onclick="prevStep('step3', 'step2')">Previous</span></button>
            <!--<span class="align-middle d-sm-inline-block " onclick="prevStep('step2', 'step1')">Previous</span>-->
            <button type="button" class="btn btn-primary btn-next" onclick="nextStep('step3','step4')">Next</button>
            <!--<button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>-->
          </div>
        </div>
      </div>

      <!-- Price Details -->
      <div id="price-details" class="content fv-plugins-bootstrap5 fv-plugins-framework">
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
              <option value="1" selected="">Monthly</option>
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
              <input class="form-check-input" type="radio" name="plShowPriceRadio" id="plNagotiablePrice" checked="">
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
              <label class="form-check-label" for="plOtherCharges">Stamp Duty &amp; Registration charges excluded.</label>
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
            <br>
            <!--<button type="button" onclick="prevStep('step3', 'step2')">Previous</button>-->
            <!--<button type="submit">Submit</button>-->
        </div>
        
        
        
        
        
        
     
     
  
  
  
  
  
  




   <!--step 4-->
        <div class="stepnew" id="step4thr">
               <div id="wizard-property-listing" class="bs-stepper vertical mt-2 linear">
 <div class="bs-stepper-header">
            <button type="button" class="btn btn-primary btn-next">Add new Demonstration</button>
            <br>
    <div class="step " data-target="#personal-details">
      <button type="button" class="step-trigger" aria-selected="false">
        <span class="bs-stepper-circle">
                   
          <i class="bx bx-user"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Events Details</span>
          <span class="bs-stepper-subtitle">Title Location</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <div class="step" data-target="#property-details">
      <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
        <span class="bs-stepper-circle">
          <i class="bx bx-home"></i>
        </span>
        <span class="bs-stepper-label">
            <span class="bs-stepper-title">Event Start</span>
          <span class="bs-stepper-subtitle">Date and Time</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <!--<div class="step " data-target="#property-features">-->
    <!--  <button type="button" class="step-trigger" aria-selected="true">-->
    <!--    <span class="bs-stepper-circle">-->
    <!--      <i class="bx bx-star"></i>-->
    <!--    </span>-->
    <!--   <span class="bs-stepper-label">-->
    <!--      <span class="bs-stepper-title">Tickets</span>-->
    <!--      <span class="bs-stepper-subtitle">Sale Tickets</span>-->
    <!--    </span>-->
    <!--  </button>-->
    <!--</div>-->
    <div class="line"></div>
    <div class="step active" data-target="#property-area">
      <button type="button" class="step-trigger" aria-selected="true" >
        <span class="bs-stepper-circle">
          <i class="bx bx-map"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Notifications</span>
          <span class="bs-stepper-subtitle">Add Notifications</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <div class="step" data-target="#price-details">
      <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
        <span class="bs-stepper-circle">
          <i class="bx bx-dollar"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Contact</span>
          <span class="bs-stepper-subtitle">Contact Person</span>
        </span>
      </button>
    </div>
  </div>
  <div class="bs-stepper-content">
    <form id="wizard-property-listing-form" onsubmit="return false">

      <!-- Personal Details -->
      <div id="personal-details" class="content active dstepper-block fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-12">
            <div class="row">
            <div class="d-flex justify-content-center align-items-center">
              <img src="{{asset('assets/img/servicehead.png')}}" width="230px" height="auto"> 
              </div>
              
      <!--       <div class="container" style="width:364px;">-->


      <!--  <input name="file1" type="file" class="dropify" data-height="100" />-->
      <!--</div>-->
      
   
             
            </div>
          </div>
        
              <div class="col-sm-12 fv-plugins-icon-container">
                  <div class="row">
                      <h4>Select Service</h4>
                       <div class="col-sm-6">
                       <div style="padding:10px;border:1px solid whitesmoke;border-radius: 0.375rem !important;border-color: #696cff !important;" class="">
                          
                         <div style="padding:10px" class="report-list-item rounded-2">
                <div class="d-flex align-items-start">
                  <div style="background-color: #fff;border-radius: 0.375rem;padding:10px;" class="report-list-icon shadow-sm me-2">
                    <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/svg/icons/paypal-icon.svg" width="22" height="22" alt="Paypal">
                  </div>
                  <div class="d-flex justify-content-between align-items-end w-100 flex-wrap gap-2">
                    <div class="d-flex flex-column">
                      <span>Income</span>
                      <h5 style="color:#696cff" class="mb-0">$42,845</h5>
                    </div>
                    <div class="user-progress">
              <div class="">
                  <!--add-->
                  <div style="display: flex;justify-content: center; align-items: center" class="form-check form-switch mb-2">
          <input class="form-check-input closetogglebtn" type="checkbox" id="flexSwitchCheckChecked " checked="">
    
        </div>
                  
                  <!--add-->
                <!--<sup class="mt-3 mb-0 me-1">$</sup>-->
                <!--<h3 class="mb-0">2,124</h3>-->
                <!--<sub class="mt-auto mb-2"> /Year</sub>-->
              </div>
            </div>
                    <!--<small class="text-success">+2.34k</small>-->
                  </div>
                </div>
              </div>
              
                       </div>
                       </div>
                         <div class="col-sm-6">
                          <div style="padding:10px;border:1px solid whitesmoke;border-radius: 0.375rem !important;border-color: #696cff !important;" class="">
                         <div style="padding:10px" class="report-list-item rounded-2 ">
                <div class="d-flex align-items-start">
                  <div style="background-color: #fff;border-radius: 0.375rem;padding:10px;" class="report-list-icon shadow-sm me-2">
                    <!--<img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/svg/icons/paypal-icon.svg" width="22ht" heig="22" alt="Paypal">-->
                    <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/svg/icons/shopping-bag-icon.svg" width="22" height="22" alt="Shopping Bag">
                  </div>
                  <div class="d-flex justify-content-between align-items-end w-100 flex-wrap gap-2">
                    <div class="d-flex flex-column">
                      <span>Expense</span>
                      <h5 style="color:#696cff" class="mb-0">$38,658</h5>
                    </div>
                    <div class="user-progress">
              <div class="">
                  <!--add-->
                  <div style="display: flex;justify-content: center; align-items: center" class="form-check form-switch mb-2">
          <input class="form-check-input closetogglebtn" type="checkbox" id="flexSwitchCheckChecked " checked="">
    
        </div>
                  
                  <!--add-->
                <!--<sup class="mt-3 mb-0 me-1">$</sup>-->
                <!--<h3 class="mb-0">2,124</h3>-->
                <!--<sub class="mt-auto mb-2"> /Year</sub>-->
              </div>
            </div>
                    <!--<small class="text-success">+2.34k</small>-->
                  </div>
                </div>
              </div>
                       </div>
                       </div>
                        <div class="col-sm-6 mt-2">
                          <div style="padding:10px;border:1px solid whitesmoke;border-radius: 0.375rem !important;border-color: #696cff !important;" class="">
                         <div style="padding:10px" class="report-list-item rounded-2 ">
                <div class="d-flex align-items-start">
                  <div style="background-color: #fff;border-radius: 0.375rem;padding:10px;" class="report-list-icon shadow-sm me-2">
                    <!--<img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/svg/icons/paypal-icon.svg" width="22" height="22" alt="Paypal">-->
                    <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/svg/icons/wallet-icon.svg" width="22" height="22" alt="Wallet">
                  </div>
                  <div class="d-flex justify-content-between align-items-end w-100 flex-wrap gap-2">
                    <div class="d-flex flex-column">
                      <span>Profit</span>
                      <h5 style="color:#696cff" class="mb-0">$18,220</h5>
                    </div>
                    <div class="user-progress">
              <div class="">
                  <!--add-->
                  <div style="display: flex;justify-content: center; align-items: center" class="form-check form-switch mb-2">
          <input class="form-check-input closetogglebtn" type="checkbox" id="flexSwitchCheckChecked " checked="">
    
        </div>
                  
                  <!--add-->
                <!--<sup class="mt-3 mb-0 me-1">$</sup>-->
                <!--<h3 class="mb-0">2,124</h3>-->
                <!--<sub class="mt-auto mb-2"> /Year</sub>-->
              </div>
            </div>
                    <!--<small class="text-success">+2.34k</small>-->
                  </div>
                </div>
              </div>
                       </div>
                       </div>
                       
      <!--                      <div  style="padding:10px;border:1px solid whitesmoke;" class="col-sm-6">-->
      <!--                     <div class="">-->
      <!-- <div class="input-group input-group-merge d-flex justify-content-between">-->
            
      <!--      <div class="start d-flex">-->
      <!--          <div class="">-->
      <!--          <img src="https://yekbun.hellodev.site/public//assets/img/soda.png" alt="" width="40px">-->
      <!--      </div>-->
      <!--      <div class="d-flex align-items-center">-->
      <!--     <strong class="">Free Drinks</strong> -->
           
      <!--  </div>-->
      <!--  </div>-->
        <!--<div class="toggle-btn mt-3 d-flex align-items-center">-->
        <!--    <label class="switch">-->
        <!--        <input type="checkbox">-->
        <!--        <span class="slider round"></span>-->
        <!--      </label>-->
        <!--</div>-->
      <!--  <div style="display: flex;justify-content: center; align-items: center" class="form-check form-switch mb-2">-->
      <!--    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">-->
    
      <!--  </div>-->
          <!-- <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Event Title"> -->
      <!--  </div>-->
        
      <!--</div>-->
      <!--                 </div>-->
                       
                       
                       
      <!--                      <div  style="padding:10px;border:1px solid whitesmoke;" class="col-sm-6">-->
      <!--                     <div class="">-->
      <!-- <div class="input-group input-group-merge d-flex justify-content-between">-->
            
      <!--      <div class="start d-flex">-->
      <!--          <div class="">-->
      <!--          <img src="https://yekbun.hellodev.site/public//assets/img/soda.png" alt="" width="40px">-->
      <!--      </div>-->
      <!--      <div class="d-flex align-items-center">-->
      <!--     <strong class="">Snack</strong> -->
           
      <!--  </div>-->
      <!--  </div>-->
        <!--<div class="toggle-btn mt-3 d-flex align-items-center">-->
        <!--    <label class="switch">-->
        <!--        <input type="checkbox">-->
        <!--        <span class="slider round"></span>-->
        <!--      </label>-->
        <!--</div>-->
      <!--  <div style="display: flex;justify-content: center; align-items: center" class="form-check form-switch mb-2">-->
      <!--    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">-->
    
      <!--  </div>-->
          <!-- <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Event Title"> -->
      <!--  </div>-->
        
      <!--</div>-->
      <!--                 </div>-->
                       
                       
                       
      <!--                      <div  style="padding:10px;border:1px solid whitesmoke;" class="col-sm-6">-->
      <!--                     <div class="">-->
      <!-- <div class="input-group input-group-merge d-flex justify-content-between">-->
            
      <!--      <div class="start d-flex">-->
      <!--          <div class="">-->
      <!--          <img src="https://yekbun.hellodev.site/public//assets/img/soda.png" alt="" width="40px">-->
      <!--      </div>-->
      <!--      <div class="d-flex align-items-center">-->
      <!--     <strong class="">Snack</strong> -->
           
      <!--  </div>-->
      <!--  </div>-->
        <!--<div class="toggle-btn mt-3 d-flex align-items-center">-->
        <!--    <label class="switch">-->
        <!--        <input type="checkbox">-->
        <!--        <span class="slider round"></span>-->
        <!--      </label>-->
        <!--</div>-->
      <!--  <div style="display: flex;justify-content: center; align-items: center" class="form-check form-switch mb-2">-->
      <!--    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">-->
    
      <!--  </div>-->
          <!-- <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Event Title"> -->
      <!--  </div>-->
        
      <!--</div>-->
      <!--                 </div>-->
                       
                       
                       
      <!--                      <div  style="padding:10px;border:1px solid whitesmoke;" class="col-sm-6">-->
      <!--                     <div class="">-->
      <!-- <div class="input-group input-group-merge d-flex justify-content-between">-->
            
      <!--      <div class="start d-flex">-->
      <!--          <div class="">-->
      <!--          <img src="https://yekbun.hellodev.site/public//assets/img/soda.png" alt="" width="40px">-->
      <!--      </div>-->
      <!--      <div class="d-flex align-items-center">-->
      <!--     <strong class="">Snack</strong> -->
           
      <!--  </div>-->
      <!--  </div>-->
        <!--<div class="toggle-btn mt-3 d-flex align-items-center">-->
        <!--    <label class="switch">-->
        <!--        <input type="checkbox">-->
        <!--        <span class="slider round"></span>-->
        <!--      </label>-->
        <!--</div>-->
      <!--  <div style="display: flex;justify-content: center; align-items: center" class="form-check form-switch mb-2">-->
      <!--    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">-->
    
      <!--  </div>-->
          <!-- <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Event Title"> -->
      <!--  </div>-->
        
      <!--</div>-->
      <!--                 </div>-->
      
      
  
      
      
                       
                  </div>
                 
        </div>
          
          <!--third start-->
          
        
        
        
  
          
         
          
          
          
          
          
           
         
          <div style="margin-top:200px" class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev" onclick="nextStep('step4thr', 'step2thr')"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
              <span class="align-middle d-sm-inline-block d-none">Previous</span>
            </button>
            <!--<button class="btn btn-primary btn-next"  onclick="nextStep('step1', 'step2')"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>-->
            
            <button type="button" class="btn btn-primary btn-next" onclick="nextStep('step4thr', 'step5thr')" >Next</button>
          </div>
       
      </div>

      <!-- Property Details -->
      <div id="property-details" class="content fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-12">
            <div class="row">
              <div class="col-xl mb-xl-0 mb-2">
                <div class="form-check custom-option custom-option-icon checked">
                  <label class="form-check-label custom-option-content" for="customRadioSell">
                    <span class="custom-option-body">
                      <i class="bx bx-home"></i>
                      <span class="custom-option-title">Sale the property</span>
                      <small>Post your property for sale.<br> Unlimited free listing.</small>
                    </span>
                    <input name="plPropertySaleRent" class="form-check-input" type="radio" value="1" id="customRadioSell" checked="">
                  </label>
                </div>
              </div>
              <div class="col-xl mb-xl-0 mb-2">
                <div class="form-check custom-option custom-option-icon">
                  <label class="form-check-label custom-option-content" for="customRadioRent">
                    <span class="custom-option-body">
                      <i class="bx bx-wallet"></i>
                      <span class="custom-option-title">Rent the property</span>
                      <small>Post your property for rent.<br> Unlimited free listing.</small>
                    </span>
                    <input name="plPropertySaleRent" class="form-check-input" type="radio" value="2" id="customRadioRent">
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 fv-plugins-icon-container">
            <label class="form-label" for="plPropertyType">Property Type</label>
            <div class="position-relative"><select id="plPropertyType" name="plPropertyType" class="select2 form-select select2-hidden-accessible" data-allow-clear="true" data-select2-id="plPropertyType" tabindex="-1" aria-hidden="true">
              <option value="" data-select2-id="4">Select Property Type</option>
              <option value="10002">Flat/ Apartment</option>
              <option value="10001">Residential House</option>
              <option value="10017">Villa</option>
              <option value="10003">Builder Floor Apartment</option>
              <option value="10000">Residential Land/ Plot</option>
              <option value="10021">Penthouse</option>
              <option value="10022">Studio Apartment</option>
            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="3" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-plPropertyType-container"><span class="select2-selection__rendered" id="select2-plPropertyType-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select property type</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
          <div class="col-sm-6 fv-plugins-icon-container">
            <label class="form-label" for="plZipCode">Zip Code</label>
            <input type="number" id="plZipCode" name="plZipCode" class="form-control" placeholder="99950">
          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
          <div class="col-sm-6">
            <label class="form-label" for="plCountry">Country</label>
            <div class="position-relative"><select id="plCountry" name="plCountry" class="select2 form-select select2-hidden-accessible" data-allow-clear="true" data-select2-id="plCountry" tabindex="-1" aria-hidden="true">
              <option value="" data-select2-id="2">Select</option>
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
            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-plCountry-container"><span class="select2-selection__rendered" id="select2-plCountry-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select country</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plState">State</label>
            <input type="text" id="plState" name="plState" class="form-control" placeholder="California">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plCity">City</label>
            <input type="text" id="plCity" name="plCity" class="form-control" placeholder="Los Angeles">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plLandmark">Landmark</label>
            <input type="text" id="plLandmark" name="plLandmark" class="form-control" placeholder="Nr. Hard Rock Cafe">
          </div>
          <div class="col-lg-12">
            <label class="form-label" for="plAddress">Address</label>
            <textarea id="plAddress" name="plAddress" class="form-control" rows="2" placeholder="12, Business Park"></textarea>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Property Features -->
      <div id="property-features" class="content fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-sm-6">
            <label class="form-label d-block" for="plBedrooms">Bedrooms</label>
            <input type="number" id="plBedrooms" name="plBedrooms" class="form-control" placeholder="3">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plFloorNo">Floor No</label>
            <input type="number" id="plFloorNo" name="plFloorNo" class="form-control" placeholder="12">
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plBathrooms">Bathrooms</label>
            <input type="number" id="plBathrooms" name="plBathrooms" class="form-control" placeholder="4">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plFurnishedStatus">Furnished Status</label>
            <select id="plFurnishedStatus" name="plFurnishedStatus" class="form-select">
              <option selected="" disabled="" value="">Select furnished status </option>
              <option value="1">Fully furnished</option>
              <option value="2">Furnished</option>
              <option value="3">Semi furnished</option>
              <option value="4">Unfurnished</option>
            </select>
          </div>
          <div class="col-lg-12">
            <label class="form-label" for="plFurnishingDetails">Furnishing Details</label>
            <tags class="tagify  form-control" tabindex="-1">
            <tag title="Fridge" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="Fridge"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">Fridge</span></div></tag><tag title="AC" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="AC"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">AC</span></div></tag><tag title="TV" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="TV"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">TV</span></div></tag><tag title="WiFi" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="WiFi"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">WiFi</span></div></tag><span contenteditable="" tabindex="0" data-placeholder="select options" aria-placeholder="select options" class="tagify__input" role="textbox" aria-autocomplete="both" aria-multiline="false"></span>
                ​
        </tags><input id="plFurnishingDetails" name="plFurnishingDetails" class="form-control" placeholder="select options" value="Fridge, AC, TV, WiFi" tabindex="-1">
          </div>
          <div class="col-sm-6">
            <label class="form-label">Is there any common area?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plCommonAreaRadio" id="plCommonAreaRadioYes" checked="">
              <label class="form-check-label" for="plCommonAreaRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plCommonAreaRadio" id="plCommonAreaRadioNo">
              <label class="form-check-label" for="plCommonAreaRadioNo">No</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Is there any attached balcony?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plAttachedBalconyRadio" id="plAttachedBalconyRadioYes" checked="">
              <label class="form-check-label" for="plAttachedBalconyRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plAttachedBalconyRadio" id="plAttachedBalconyRadioNo">
              <label class="form-check-label" for="plAttachedBalconyRadioNo">No</label>
            </div>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Property Area -->
      <div id="property-area" class="content fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-sm-6">
            <label class="form-label d-block" for="plTotalArea">Total Area</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plTotalArea" name="plTotalArea" placeholder="1000" aria-describedby="pl-total-area">
              <span class="input-group-text" id="pl-total-area">sq-ft</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plCarpetArea">Carpet Area</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plCarpetArea" name="plCarpetArea" placeholder="800" aria-describedby="pl-carpet-area">
              <span class="input-group-text" id="pl-carpet-area">sq-ft</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plPlotArea">Plot Area</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plPlotArea" name="plPlotArea" placeholder="800" aria-describedby="pl-plot-area">
              <span class="input-group-text" id="pl-plot-area">sq-yd</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plAvailableFrom">Available From</label>
            <input type="text" id="plAvailableFrom" name="plAvailableFrom" class="form-control flatpickr flatpickr-input" placeholder="YYYY-MM-DD" readonly="readonly">
          </div>
          <div class="col-sm-6">
            <label class="form-label">Possession Status</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plPossessionStatus" id="plUnderConstruction" checked="">
              <label class="form-check-label" for="plUnderConstruction">Under Construction</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plPossessionStatus" id="plReadyToMoveRadio">
              <label class="form-check-label" for="plReadyToMoveRadio">Ready to Move</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Transaction Type</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plTransectionType" id="plNewProperty" checked="">
              <label class="form-check-label" for="plNewProperty">New Property</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plTransectionType" id="plResaleProperty">
              <label class="form-check-label" for="plResaleProperty">Resale</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Is Property Facing Main Road?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plRoadFacingRadio" id="plRoadFacingRadioYes" checked="">
              <label class="form-check-label" for="plRoadFacingRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plRoadFacingRadio" id="plRoadFacingRadioNo">
              <label class="form-check-label" for="plRoadFacingRadioNo">No</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Gated Colony?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plGatedColonyRadio" id="plGatedColonyRadioYes" checked="">
              <label class="form-check-label" for="plGatedColonyRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plGatedColonyRadio" id="plGatedColonyRadioNo">
              <label class="form-check-label" for="plGatedColonyRadioNo">No</label>
            </div>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Price Details -->
      <div id="price-details" class="content fv-plugins-bootstrap5 fv-plugins-framework">
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
              <option value="1" selected="">Monthly</option>
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
              <input class="form-check-input" type="radio" name="plShowPriceRadio" id="plNagotiablePrice" checked="">
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
              <label class="form-check-label" for="plOtherCharges">Stamp Duty &amp; Registration charges excluded.</label>
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
            <br>
            <!--<button type="button" onclick="prevStep('step3', 'step2')">Previous</button>-->
            <!--<button type="submit">Submit</button>-->
        </div>
     <!--step 4 end-->
     
    
    </form>
    
      <div class="modal-footer">
        <!--<button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Open second modal</button>-->
      </div>
    </div>
  <!--step 4-->
  
  
  
  
  
  
  
   <!--step 5-->
     
     
      <div class="stepnew" id="step5thr">
            <div id="wizard-property-listing" class="bs-stepper vertical mt-2 linear">
 <div class="bs-stepper-header">
            <button type="button" class="btn btn-primary btn-next">Add new Demonstration</button>
            <br>
    <div class="step " data-target="#personal-details">
      <button type="button" class="step-trigger" aria-selected="false" disabled="">
        <span class="bs-stepper-circle">
                   
          <i class="bx bx-user"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Events Details</span>
          <span class="bs-stepper-subtitle">Title Location</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <div class="step" data-target="#property-details">
      <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
        <span class="bs-stepper-circle">
          <i class="bx bx-home"></i>
        </span>
        <span class="bs-stepper-label">
            <span class="bs-stepper-title">Event Start</span>
          <span class="bs-stepper-subtitle">Date and Time</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <!--<div class="step" data-target="#property-features">-->
    <!--  <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">-->
    <!--    <span class="bs-stepper-circle">-->
    <!--      <i class="bx bx-star"></i>-->
    <!--    </span>-->
    <!--   <span class="bs-stepper-label">-->
    <!--      <span class="bs-stepper-title">Tickets</span>-->
    <!--      <span class="bs-stepper-subtitle">Sale Tickets</span>-->
    <!--    </span>-->
    <!--  </button>-->
    <!--</div>-->
    <div class="line"></div>
    <div class="step " data-target="#property-area">
      <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
        <span class="bs-stepper-circle">
          <i class="bx bx-map"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Notifications</span>
          <span class="bs-stepper-subtitle">Add Notifications</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <div class="step active" data-target="#price-details">
      <button type="button" class="step-trigger" aria-selected="true">
        <span class="bs-stepper-circle">
          <i class="bx bx-dollar"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Contact</span>
          <span class="bs-stepper-subtitle">Contact Person</span>
        </span>
      </button>
    </div>
  </div>
  <div class="bs-stepper-content">
    

      <!-- Personal Details -->
      <div  style="height:100%" id="personal-details" class="content active dstepper-block fv-plugins-bootstrap5 fv-plugins-framework">
        <div  style="height:100%" class="row g-3">
          <div class="col-12">
            <div class="row">
                 <div class="d-flex justify-content-center align-items-center">
              <img src="{{asset('assets/img/contacthead.png')}}" width="230px" height="auto"> 
              </div>
             
              
      <!--       <div class="container" style="width:364px;">-->


      <!--  <div class="dropify-wrapper" style="height: 114px;"><div class="dropify-message"><span class="file-icon"></span> <p>Drag and drop a file here or click</p><p class="dropify-error">Ooops, something wrong appended.</p></div><div class="dropify-loader"></div><div class="dropify-errors-container"><ul></ul></div><input name="file1" type="file" class="dropify" data-height="100"><button type="button" class="dropify-clear">Remove</button><div class="dropify-preview"><span class="dropify-render"></span><div class="dropify-infos"><div class="dropify-infos-inner"><p class="dropify-filename"><span class="file-icon"></span> <span class="dropify-filename-inner"></span></p><p class="dropify-infos-message">Drag and drop or click to replace</p></div></div></div></div>-->
      <!--</div>-->
      
   
          
            </div>
          </div>
        
              <div class="col-sm-12 fv-plugins-icon-container">
            <label class="form-label" for="plContact">First Name</label>
            <!--<div class="input-group input-group-merge">-->
             
            <!--  <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="First Name">-->
            <!--</div>-->
            <div class="input-group input-group-merge">
              <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
              <input type="text" class="form-control" id="basic-icon-default-fullname" placeholder="John Doe" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2">
            </div>
          </div>
          
            <div class="col-sm-12">
            <label class="form-label" for="plContact">Last Name</label>
            <!--<div class="input-group input-group-merge">-->
             
            <!--  <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Last Name">-->
            <!--</div>-->
            <div class="input-group input-group-merge">
              <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
              <input type="text" class="form-control" id="basic-icon-default-fullname" placeholder="Doe Watson" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2">
            </div>
          </div>
          
          
            <div class="col-sm-12">
            <label class="form-label" for="plContact">Mobile</label>
            <!--<div class="input-group input-group-merge">-->
             
            <!--  <input type="number" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Mobile Number">-->
            <!--</div>-->
            <!--<div class="input-group input-group-merge">-->
            <!--  <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-phone"></i></span>-->
            <!--  <input type="text" id="basic-icon-default-phone" class="form-control phone-mask" placeholder="658 799 8941" aria-label="658 799 8941" aria-describedby="basic-icon-default-phone2">-->
            <!--</div>-->
            <div class="input-group">
              <span class="input-group-text">US (+1)</span>
              <input type="text" id="phone-number-mask" class="form-control phone-number-mask" placeholder="202 555 0111">
            </div>
          </div>
          
         
          
          
          <!--<div class="col-sm-6">-->
          <!--       <label class="form-label" for="plContact">Select</label>-->
          <!--                              <select id="sendNotification" class="form-select" name="sendNotification">-->
          <!--                                  <option selected="">Country</option>-->
          <!--                                  <option>America</option>-->
          <!--                              </select>-->
          <!--                          </div>-->
          
          
          
          
          <!-- <div class="col-sm-6">-->
          <!--  <label class="form-label" for="plContact">Select</label>-->
          <!--  <div class="input-group input-group-merge">-->
             
          <!--    <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="City and ZipCode">-->
          <!--  </div>-->
          <!--</div>-->
          
          <!--  <div class="col-sm-6">-->
          <!--  <label class="form-label" for="plContact">Type</label>-->
          <!--  <div class="input-group input-group-merge">-->
             
          <!--    <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Address">-->
          <!--  </div>-->
          <!--</div>-->
          
          
        
          
          
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev" onclick="nextStep('step5thr', 'step4thr')" > <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
              <span class="align-middle d-sm-inline-block d-none">Previous</span>
            </button>
            <!--<button class="btn btn-primary btn-next"  onclick="nextStep('step1', 'step2')"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>-->
            
            <button type="button" class="btn btn-primary btn-next" onclick="nextStep('step4thr', 'step5thr')" >Submit</button>
          </div>
        </div>
      </div>

      <!-- Property Details -->
      <div id="property-details" class="content fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-12">
            <div class="row">
              <div class="col-xl mb-xl-0 mb-2">
                <div class="form-check custom-option custom-option-icon checked">
                  <label class="form-check-label custom-option-content" for="customRadioSell">
                    <span class="custom-option-body">
                      <i class="bx bx-home"></i>
                      <span class="custom-option-title">Sale the property</span>
                      <small>Post your property for sale.<br> Unlimited free listing.</small>
                    </span>
                    <input name="plPropertySaleRent" class="form-check-input" type="radio" value="1" id="customRadioSell" checked="">
                  </label>
                </div>
              </div>
              <div class="col-xl mb-xl-0 mb-2">
                <div class="form-check custom-option custom-option-icon">
                  <label class="form-check-label custom-option-content" for="customRadioRent">
                    <span class="custom-option-body">
                      <i class="bx bx-wallet"></i>
                      <span class="custom-option-title">Rent the property</span>
                      <small>Post your property for rent.<br> Unlimited free listing.</small>
                    </span>
                    <input name="plPropertySaleRent" class="form-check-input" type="radio" value="2" id="customRadioRent">
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 fv-plugins-icon-container">
            <label class="form-label" for="plPropertyType">Property Type</label>
            <div class="position-relative"><select id="plPropertyType" name="plPropertyType" class="select2 form-select select2-hidden-accessible" data-allow-clear="true" data-select2-id="plPropertyType" tabindex="-1" aria-hidden="true">
              <option value="" data-select2-id="4">Select Property Type</option>
              <option value="10002">Flat/ Apartment</option>
              <option value="10001">Residential House</option>
              <option value="10017">Villa</option>
              <option value="10003">Builder Floor Apartment</option>
              <option value="10000">Residential Land/ Plot</option>
              <option value="10021">Penthouse</option>
              <option value="10022">Studio Apartment</option>
            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="3" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-plPropertyType-container"><span class="select2-selection__rendered" id="select2-plPropertyType-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select property type</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
          <div class="col-sm-6 fv-plugins-icon-container">
            <label class="form-label" for="plZipCode">Zip Code</label>
            <input type="number" id="plZipCode" name="plZipCode" class="form-control" placeholder="99950">
          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
          <div class="col-sm-6">
            <label class="form-label" for="plCountry">Country</label>
            <div class="position-relative"><select id="plCountry" name="plCountry" class="select2 form-select select2-hidden-accessible" data-allow-clear="true" data-select2-id="plCountry" tabindex="-1" aria-hidden="true">
              <option value="" data-select2-id="2">Select</option>
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
            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-plCountry-container"><span class="select2-selection__rendered" id="select2-plCountry-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select country</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plState">State</label>
            <input type="text" id="plState" name="plState" class="form-control" placeholder="California">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plCity">City</label>
            <input type="text" id="plCity" name="plCity" class="form-control" placeholder="Los Angeles">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plLandmark">Landmark</label>
            <input type="text" id="plLandmark" name="plLandmark" class="form-control" placeholder="Nr. Hard Rock Cafe">
          </div>
          <div class="col-lg-12">
            <label class="form-label" for="plAddress">Address</label>
            <textarea id="plAddress" name="plAddress" class="form-control" rows="2" placeholder="12, Business Park"></textarea>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Property Features -->
      <div id="property-features" class="content fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-sm-6">
            <label class="form-label d-block" for="plBedrooms">Bedrooms</label>
            <input type="number" id="plBedrooms" name="plBedrooms" class="form-control" placeholder="3">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plFloorNo">Floor No</label>
            <input type="number" id="plFloorNo" name="plFloorNo" class="form-control" placeholder="12">
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plBathrooms">Bathrooms</label>
            <input type="number" id="plBathrooms" name="plBathrooms" class="form-control" placeholder="4">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plFurnishedStatus">Furnished Status</label>
            <select id="plFurnishedStatus" name="plFurnishedStatus" class="form-select">
              <option selected="" disabled="" value="">Select furnished status </option>
              <option value="1">Fully furnished</option>
              <option value="2">Furnished</option>
              <option value="3">Semi furnished</option>
              <option value="4">Unfurnished</option>
            </select>
          </div>
          <div class="col-lg-12">
            <label class="form-label" for="plFurnishingDetails">Furnishing Details</label>
            <tags class="tagify  form-control" tabindex="-1">
            <tag title="Fridge" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="Fridge"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">Fridge</span></div></tag><tag title="AC" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="AC"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">AC</span></div></tag><tag title="TV" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="TV"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">TV</span></div></tag><tag title="WiFi" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="WiFi"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">WiFi</span></div></tag><span contenteditable="" tabindex="0" data-placeholder="select options" aria-placeholder="select options" class="tagify__input" role="textbox" aria-autocomplete="both" aria-multiline="false"></span>
                &ZeroWidthSpace;
        </tags><input id="plFurnishingDetails" name="plFurnishingDetails" class="form-control" placeholder="select options" value="Fridge, AC, TV, WiFi" tabindex="-1">
          </div>
          <div class="col-sm-6">
            <label class="form-label">Is there any common area?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plCommonAreaRadio" id="plCommonAreaRadioYes" checked="">
              <label class="form-check-label" for="plCommonAreaRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plCommonAreaRadio" id="plCommonAreaRadioNo">
              <label class="form-check-label" for="plCommonAreaRadioNo">No</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Is there any attached balcony?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plAttachedBalconyRadio" id="plAttachedBalconyRadioYes" checked="">
              <label class="form-check-label" for="plAttachedBalconyRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plAttachedBalconyRadio" id="plAttachedBalconyRadioNo">
              <label class="form-check-label" for="plAttachedBalconyRadioNo">No</label>
            </div>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Property Area -->
      <div id="property-area" class="content fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-sm-6">
            <label class="form-label d-block" for="plTotalArea">Total Area</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plTotalArea" name="plTotalArea" placeholder="1000" aria-describedby="pl-total-area">
              <span class="input-group-text" id="pl-total-area">sq-ft</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plCarpetArea">Carpet Area</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plCarpetArea" name="plCarpetArea" placeholder="800" aria-describedby="pl-carpet-area">
              <span class="input-group-text" id="pl-carpet-area">sq-ft</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plPlotArea">Plot Area</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plPlotArea" name="plPlotArea" placeholder="800" aria-describedby="pl-plot-area">
              <span class="input-group-text" id="pl-plot-area">sq-yd</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plAvailableFrom">Available From</label>
            <input type="text" id="plAvailableFrom" name="plAvailableFrom" class="form-control flatpickr flatpickr-input" placeholder="YYYY-MM-DD" readonly="readonly">
          </div>
          <div class="col-sm-6">
            <label class="form-label">Possession Status</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plPossessionStatus" id="plUnderConstruction" checked="">
              <label class="form-check-label" for="plUnderConstruction">Under Construction</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plPossessionStatus" id="plReadyToMoveRadio">
              <label class="form-check-label" for="plReadyToMoveRadio">Ready to Move</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Transaction Type</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plTransectionType" id="plNewProperty" checked="">
              <label class="form-check-label" for="plNewProperty">New Property</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plTransectionType" id="plResaleProperty">
              <label class="form-check-label" for="plResaleProperty">Resale</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Is Property Facing Main Road?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plRoadFacingRadio" id="plRoadFacingRadioYes" checked="">
              <label class="form-check-label" for="plRoadFacingRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plRoadFacingRadio" id="plRoadFacingRadioNo">
              <label class="form-check-label" for="plRoadFacingRadioNo">No</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Gated Colony?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plGatedColonyRadio" id="plGatedColonyRadioYes" checked="">
              <label class="form-check-label" for="plGatedColonyRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plGatedColonyRadio" id="plGatedColonyRadioNo">
              <label class="form-check-label" for="plGatedColonyRadioNo">No</label>
            </div>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Price Details -->
      <div id="price-details" class="content fv-plugins-bootstrap5 fv-plugins-framework">
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
              <option value="1" selected="">Monthly</option>
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
              <input class="form-check-input" type="radio" name="plShowPriceRadio" id="plNagotiablePrice" checked="">
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
              <label class="form-check-label" for="plOtherCharges">Stamp Duty &amp; Registration charges excluded.</label>
            </div>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
            <button class="btn btn-success btn-submit btn-next">Submit</button>
          </div>
        </div>
      </div>
    
  </div>
</div>
            <br>
            <!--<button type="button" onclick="nextStep('step1', 'step2')">Next</button>-->
        </div>
     
     
     <!--step 5 end-->

<!--<button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Open first modal</button>-->
    
      <!--bootstrap modal1-->
      
      
      
      
      
      
      
      </div>
      
      <!--bottst 2-->

  
    <div class="modal fade" id="exampleModalToggleone" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
       <div style="" class="modal-header">
          <button type="button" class="btn btn-primary btn-next">Add new Concerts</button>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div style="margin:0;padding:0;" class="modal-body">
    <div id="wizard-property-listing" class="bs-stepper vertical mt-2 linear">
  <div class="bs-stepper-header">
    <div class="step active" data-target="#personal-details">
      <button type="button" class="step-trigger" aria-selected="true">
        <span class="bs-stepper-circle">
          <i class="bx bx-user"></i>
        </span>
        <span class="bs-stepper-label">
           <span class="bs-stepper-title">Events Details</span>
          <span class="bs-stepper-subtitle">Title/Location</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <div class="step" data-target="#property-details">
      <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
        <span class="bs-stepper-circle">
          <i class="bx bx-home"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Property Details</span>
          <span class="bs-stepper-subtitle">Property Type</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <div class="step" data-target="#property-features">
      <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
        <span class="bs-stepper-circle">
          <i class="bx bx-star"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Property Features</span>
          <span class="bs-stepper-subtitle">Bedrooms/Floor No</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <div class="step" data-target="#property-area">
      <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
        <span class="bs-stepper-circle">
          <i class="bx bx-map"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Property Area</span>
          <span class="bs-stepper-subtitle">Covered Area</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <div class="step" data-target="#price-details">
      <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
        <span class="bs-stepper-circle">
          <i class="bx bx-dollar"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Price Details</span>
          <span class="bs-stepper-subtitle">Expected Price</span>
        </span>
      </button>
    </div>
  </div>
  <div class="bs-stepper-content">
    <form id="wizard-property-listing-form" onsubmit="return false">

      <!-- Personal Details -->
      <div id="personal-details" class="content active dstepper-block fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-12">
            <div class="row">
              <!--<div class="col-md mb-md-0 mb-2">-->
              <!--  <div class="form-check custom-option custom-option-icon checked">-->
              <!--    <label class="form-check-label custom-option-content" for="customRadioBuilder">-->
              <!--      <span class="custom-option-body">-->
              <!--        <i class="bx bx-building-house"></i>-->
              <!--        <span class="custom-option-title">I am the Builder</span>-->
              <!--        <small>List property as Builder, list your project and get highest reach.</small>-->
              <!--      </span>-->
              <!--      <input name="plUserType" class="form-check-input" type="radio" value="1" id="customRadioBuilder" checked="">-->
              <!--    </label>-->
              <!--  </div>-->
              <!--</div>-->
              <!--<div class="col-md mb-md-0 mb-2">-->
              <!--  <div class="form-check custom-option custom-option-icon">-->
              <!--    <label class="form-check-label custom-option-content" for="customRadioOwner">-->
              <!--      <span class="custom-option-body">-->
              <!--        <i class="bx bx-crown"></i>-->
              <!--        <span class="custom-option-title"> I am the Owner </span>-->
              <!--        <small>Submit property as an Individual. Lease, Rent or Sell at the best price.</small>-->
              <!--      </span>-->
              <!--      <input name="plUserType" class="form-check-input" type="radio" value="2" id="customRadioOwner">-->
              <!--    </label>-->
              <!--  </div>-->
              <!--</div>-->
              
           <div class="container" style="width:364px;">


        <input name="file1" type="file" class="dropify" data-height="100" />
      </div>
   
              <!--<div class="col-md mb-md-0 mb-2">-->
              <!--  <div class="form-check custom-option custom-option-icon">-->
              <!--    <label class="form-check-label custom-option-content" for="customRadioBroker">-->
              <!--      <span class="custom-option-body">-->
              <!--        <i class="bx bx-briefcase-alt"></i>-->
              <!--        <span class="custom-option-title"> I am a Broker </span>-->
              <!--        <small>Earn highest commission by listing your clients properties at the best price.</small>-->
              <!--      </span>-->
              <!--      <input name="plUserType" class="form-check-input" type="radio" value="3" id="customRadioBroker">-->
              <!--    </label>-->
              <!--  </div>-->
              <!--</div>-->
            </div>
          </div>
          
            <div class="col-sm-6 fv-plugins-icon-container">
            <label class="form-label" for="plContact">Event Title</label>
            <div class="input-group input-group-merge">
             
              <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Event Title">
            </div>
          </div>
          
            <div class="col-sm-6">
            <label class="form-label" for="plContact">Describe</label>
            <div class="input-group input-group-merge">
             
              <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Input Text">
            </div>
          </div>
          
          
            <div class="col-sm-6">
            <label class="form-label" for="plContact">Location Name</label>
            <div class="input-group input-group-merge">
             
              <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Example Human Right Berlin">
            </div>
          </div>
          
         
          
          
          <div class="col-sm-6">
                 <label class="form-label" for="plContact">Select</label>
                                        <select id="sendNotification" class="form-select" name="sendNotification">
                                            <option selected="">Country</option>
                                            <option>America</option>
                                        </select>
                                    </div>
          
          
          
          
           <div class="col-sm-6">
            <label class="form-label" for="plContact">Select</label>
            <div class="input-group input-group-merge">
             
              <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="City and ZipCode">
            </div>
          </div>
          
            <div class="col-sm-6">
            <label class="form-label" for="plContact">Type</label>
            <div class="input-group input-group-merge">
             
              <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Address">
            </div>
          </div>
          
          
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-label-secondary btn-prev" disabled=""> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
              <span class="align-middle d-sm-inline-block d-none">Previous</span>
            </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Property Details -->
      <div id="property-details" class="content fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-12">
            <div class="row">
              <div class="col-xl mb-xl-0 mb-2">
                <div class="form-check custom-option custom-option-icon checked">
                  <label class="form-check-label custom-option-content" for="customRadioSell">
                    <span class="custom-option-body">
                      <i class="bx bx-home"></i>
                      <span class="custom-option-title">Sale the property</span>
                      <small>Post your property for sale.<br> Unlimited free listing.</small>
                    </span>
                    <input name="plPropertySaleRent" class="form-check-input" type="radio" value="1" id="customRadioSell" checked="">
                  </label>
                </div>
              </div>
              <div class="col-xl mb-xl-0 mb-2">
                <div class="form-check custom-option custom-option-icon">
                  <label class="form-check-label custom-option-content" for="customRadioRent">
                    <span class="custom-option-body">
                      <i class="bx bx-wallet"></i>
                      <span class="custom-option-title">Rent the property</span>
                      <small>Post your property for rent.<br> Unlimited free listing.</small>
                    </span>
                    <input name="plPropertySaleRent" class="form-check-input" type="radio" value="2" id="customRadioRent">
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 fv-plugins-icon-container">
            <label class="form-label" for="plPropertyType">Property Type</label>
            <div class="position-relative"><select id="plPropertyType" name="plPropertyType" class="select2 form-select select2-hidden-accessible" data-allow-clear="true" data-select2-id="plPropertyType" tabindex="-1" aria-hidden="true">
              <option value="" data-select2-id="4">Select Property Type</option>
              <option value="10002">Flat/ Apartment</option>
              <option value="10001">Residential House</option>
              <option value="10017">Villa</option>
              <option value="10003">Builder Floor Apartment</option>
              <option value="10000">Residential Land/ Plot</option>
              <option value="10021">Penthouse</option>
              <option value="10022">Studio Apartment</option>
            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="3" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-plPropertyType-container"><span class="select2-selection__rendered" id="select2-plPropertyType-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select property type</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
          <div class="col-sm-6 fv-plugins-icon-container">
            <label class="form-label" for="plZipCode">Zip Code</label>
            <input type="number" id="plZipCode" name="plZipCode" class="form-control" placeholder="99950">
          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
          <div class="col-sm-6">
            <label class="form-label" for="plCountry">Country</label>
            <div class="position-relative"><select id="plCountry" name="plCountry" class="select2 form-select select2-hidden-accessible" data-allow-clear="true" data-select2-id="plCountry" tabindex="-1" aria-hidden="true">
              <option value="" data-select2-id="2">Select</option>
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
            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-plCountry-container"><span class="select2-selection__rendered" id="select2-plCountry-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select country</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plState">State</label>
            <input type="text" id="plState" name="plState" class="form-control" placeholder="California">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plCity">City</label>
            <input type="text" id="plCity" name="plCity" class="form-control" placeholder="Los Angeles">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plLandmark">Landmark</label>
            <input type="text" id="plLandmark" name="plLandmark" class="form-control" placeholder="Nr. Hard Rock Cafe">
          </div>
          <div class="col-lg-12">
            <label class="form-label" for="plAddress">Address</label>
            <textarea id="plAddress" name="plAddress" class="form-control" rows="2" placeholder="12, Business Park"></textarea>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Property Features -->
      <div id="property-features" class="content fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-sm-6">
            <label class="form-label d-block" for="plBedrooms">Bedrooms</label>
            <input type="number" id="plBedrooms" name="plBedrooms" class="form-control" placeholder="3">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plFloorNo">Floor No</label>
            <input type="number" id="plFloorNo" name="plFloorNo" class="form-control" placeholder="12">
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plBathrooms">Bathrooms</label>
            <input type="number" id="plBathrooms" name="plBathrooms" class="form-control" placeholder="4">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plFurnishedStatus">Furnished Status</label>
            <select id="plFurnishedStatus" name="plFurnishedStatus" class="form-select">
              <option selected="" disabled="" value="">Select furnished status </option>
              <option value="1">Fully furnished</option>
              <option value="2">Furnished</option>
              <option value="3">Semi furnished</option>
              <option value="4">Unfurnished</option>
            </select>
          </div>
          <div class="col-lg-12">
            <label class="form-label" for="plFurnishingDetails">Furnishing Details</label>
            <tags class="tagify  form-control" tabindex="-1">
            <tag title="Fridge" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="Fridge"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">Fridge</span></div></tag><tag title="AC" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="AC"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">AC</span></div></tag><tag title="TV" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="TV"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">TV</span></div></tag><tag title="WiFi" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="WiFi"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">WiFi</span></div></tag><span contenteditable="" tabindex="0" data-placeholder="select options" aria-placeholder="select options" class="tagify__input" role="textbox" aria-autocomplete="both" aria-multiline="false"></span>
                ​
        </tags><input id="plFurnishingDetails" name="plFurnishingDetails" class="form-control" placeholder="select options" value="Fridge, AC, TV, WiFi" tabindex="-1">
          </div>
          <div class="col-sm-6">
            <label class="form-label">Is there any common area?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plCommonAreaRadio" id="plCommonAreaRadioYes" checked="">
              <label class="form-check-label" for="plCommonAreaRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plCommonAreaRadio" id="plCommonAreaRadioNo">
              <label class="form-check-label" for="plCommonAreaRadioNo">No</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Is there any attached balcony?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plAttachedBalconyRadio" id="plAttachedBalconyRadioYes" checked="">
              <label class="form-check-label" for="plAttachedBalconyRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plAttachedBalconyRadio" id="plAttachedBalconyRadioNo">
              <label class="form-check-label" for="plAttachedBalconyRadioNo">No</label>
            </div>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Property Area -->
      <div id="property-area" class="content fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-sm-6">
            <label class="form-label d-block" for="plTotalArea">Total Area</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plTotalArea" name="plTotalArea" placeholder="1000" aria-describedby="pl-total-area">
              <span class="input-group-text" id="pl-total-area">sq-ft</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plCarpetArea">Carpet Area</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plCarpetArea" name="plCarpetArea" placeholder="800" aria-describedby="pl-carpet-area">
              <span class="input-group-text" id="pl-carpet-area">sq-ft</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plPlotArea">Plot Area</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plPlotArea" name="plPlotArea" placeholder="800" aria-describedby="pl-plot-area">
              <span class="input-group-text" id="pl-plot-area">sq-yd</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plAvailableFrom">Available From</label>
            <input type="text" id="plAvailableFrom" name="plAvailableFrom" class="form-control flatpickr flatpickr-input" placeholder="YYYY-MM-DD" readonly="readonly">
          </div>
          <div class="col-sm-6">
            <label class="form-label">Possession Status</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plPossessionStatus" id="plUnderConstruction" checked="">
              <label class="form-check-label" for="plUnderConstruction">Under Construction</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plPossessionStatus" id="plReadyToMoveRadio">
              <label class="form-check-label" for="plReadyToMoveRadio">Ready to Move</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Transaction Type</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plTransectionType" id="plNewProperty" checked="">
              <label class="form-check-label" for="plNewProperty">New Property</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plTransectionType" id="plResaleProperty">
              <label class="form-check-label" for="plResaleProperty">Resale</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Is Property Facing Main Road?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plRoadFacingRadio" id="plRoadFacingRadioYes" checked="">
              <label class="form-check-label" for="plRoadFacingRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plRoadFacingRadio" id="plRoadFacingRadioNo">
              <label class="form-check-label" for="plRoadFacingRadioNo">No</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Gated Colony?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plGatedColonyRadio" id="plGatedColonyRadioYes" checked="">
              <label class="form-check-label" for="plGatedColonyRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plGatedColonyRadio" id="plGatedColonyRadioNo">
              <label class="form-check-label" for="plGatedColonyRadioNo">No</label>
            </div>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Price Details -->
      <div id="price-details" class="content fv-plugins-bootstrap5 fv-plugins-framework">
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
              <option value="1" selected="">Monthly</option>
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
              <input class="form-check-input" type="radio" name="plShowPriceRadio" id="plNagotiablePrice" checked="">
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
              <label class="form-check-label" for="plOtherCharges">Stamp Duty &amp; Registration charges excluded.</label>
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
      <div class="modal-footer">
        <!--<button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Open second modal</button>-->
      </div>
    </div>
  </div>
</div>
</div>
<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
     <div style="height:90px" class="modal-header">
          <button type="button" class="btn btn-primary btn-next">Add new Concerts</button>
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Modal 2</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Hide this modal and show the first with the button below.
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back to first</button>
      </div>
    </div>
  </div>
</div>
<!--<button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Open first modal</button>-->
    
<!--boot2-->










<!--boot3-->





 <div class="modal fade" id="exampleModalToggletwo" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
       <div style="height:90px" class="modal-header">
          <button type="button" class="btn btn-primary btn-next">Add new Concerts</button>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
    <div id="wizard-property-listing" class="bs-stepper vertical mt-2 linear">
  <div class="bs-stepper-header">
    <div class="step active" data-target="#personal-details">
      <button type="button" class="step-trigger" aria-selected="true">
        <span class="bs-stepper-circle">
          <i class="bx bx-user"></i>
        </span>
        <span class="bs-stepper-label">
           <span class="bs-stepper-title">Events Details</span>
          <span class="bs-stepper-subtitle">Title/Location</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <div class="step" data-target="#property-details">
      <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
        <span class="bs-stepper-circle">
          <i class="bx bx-home"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Property Details</span>
          <span class="bs-stepper-subtitle">Property Type</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <div class="step" data-target="#property-features">
      <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
        <span class="bs-stepper-circle">
          <i class="bx bx-star"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Property Features</span>
          <span class="bs-stepper-subtitle">Bedrooms/Floor No</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <div class="step" data-target="#property-area">
      <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
        <span class="bs-stepper-circle">
          <i class="bx bx-map"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Property Area</span>
          <span class="bs-stepper-subtitle">Covered Area</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <div class="step" data-target="#price-details">
      <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
        <span class="bs-stepper-circle">
          <i class="bx bx-dollar"></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Price Details</span>
          <span class="bs-stepper-subtitle">Expected Price</span>
        </span>
      </button>
    </div>
  </div>
  <div class="bs-stepper-content">
    <form id="wizard-property-listing-form" onsubmit="return false">

      <!-- Personal Details -->
      <div id="personal-details" class="content active dstepper-block fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-12">
            <div class="row">
              <!--<div class="col-md mb-md-0 mb-2">-->
              <!--  <div class="form-check custom-option custom-option-icon checked">-->
              <!--    <label class="form-check-label custom-option-content" for="customRadioBuilder">-->
              <!--      <span class="custom-option-body">-->
              <!--        <i class="bx bx-building-house"></i>-->
              <!--        <span class="custom-option-title">I am the Builder</span>-->
              <!--        <small>List property as Builder, list your project and get highest reach.</small>-->
              <!--      </span>-->
              <!--      <input name="plUserType" class="form-check-input" type="radio" value="1" id="customRadioBuilder" checked="">-->
              <!--    </label>-->
              <!--  </div>-->
              <!--</div>-->
              <!--<div class="col-md mb-md-0 mb-2">-->
              <!--  <div class="form-check custom-option custom-option-icon">-->
              <!--    <label class="form-check-label custom-option-content" for="customRadioOwner">-->
              <!--      <span class="custom-option-body">-->
              <!--        <i class="bx bx-crown"></i>-->
              <!--        <span class="custom-option-title"> I am the Owner </span>-->
              <!--        <small>Submit property as an Individual. Lease, Rent or Sell at the best price.</small>-->
              <!--      </span>-->
              <!--      <input name="plUserType" class="form-check-input" type="radio" value="2" id="customRadioOwner">-->
              <!--    </label>-->
              <!--  </div>-->
              <!--</div>-->
              
        <div class="container" style="width:364px;">


        <input name="file1" type="file" class="dropify" data-height="100" />
      </div>
   
              <!--<div class="col-md mb-md-0 mb-2">-->
              <!--  <div class="form-check custom-option custom-option-icon">-->
              <!--    <label class="form-check-label custom-option-content" for="customRadioBroker">-->
              <!--      <span class="custom-option-body">-->
              <!--        <i class="bx bx-briefcase-alt"></i>-->
              <!--        <span class="custom-option-title"> I am a Broker </span>-->
              <!--        <small>Earn highest commission by listing your clients properties at the best price.</small>-->
              <!--      </span>-->
              <!--      <input name="plUserType" class="form-check-input" type="radio" value="3" id="customRadioBroker">-->
              <!--    </label>-->
              <!--  </div>-->
              <!--</div>-->
            </div>
          </div>
            <div class="col-sm-6 fv-plugins-icon-container">
            <label class="form-label" for="plContact">Event Title</label>
            <div class="input-group input-group-merge">
             
              <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Event Title">
            </div>
          </div>
          
            <div class="col-sm-6">
            <label class="form-label" for="plContact">Describe</label>
            <div class="input-group input-group-merge">
             
              <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Input Text">
            </div>
          </div>
          
          
            <div class="col-sm-6">
            <label class="form-label" for="plContact">Location Name</label>
            <div class="input-group input-group-merge">
             
              <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Example Human Right Berlin">
            </div>
          </div>
          
         
          
          
          <div class="col-sm-6">
                 <label class="form-label" for="plContact">Select</label>
                                        <select id="sendNotification" class="form-select" name="sendNotification">
                                            <option selected="">Country</option>
                                            <option>America</option>
                                        </select>
                                    </div>
          
          
          
          
           <div class="col-sm-6">
            <label class="form-label" for="plContact">Select</label>
            <div class="input-group input-group-merge">
             
              <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="City and ZipCode">
            </div>
          </div>
          
            <div class="col-sm-6">
            <label class="form-label" for="plContact">Type</label>
            <div class="input-group input-group-merge">
             
              <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="Address">
            </div>
          </div>
          
          
          
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-label-secondary btn-prev" disabled=""> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
              <span class="align-middle d-sm-inline-block d-none">Previous</span>
            </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Property Details -->
      <div id="property-details" class="content fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-12">
            <div class="row">
              <div class="col-xl mb-xl-0 mb-2">
                <div class="form-check custom-option custom-option-icon checked">
                  <label class="form-check-label custom-option-content" for="customRadioSell">
                    <span class="custom-option-body">
                      <i class="bx bx-home"></i>
                      <span class="custom-option-title">Sale the property</span>
                      <small>Post your property for sale.<br> Unlimited free listing.</small>
                    </span>
                    <input name="plPropertySaleRent" class="form-check-input" type="radio" value="1" id="customRadioSell" checked="">
                  </label>
                </div>
              </div>
              <div class="col-xl mb-xl-0 mb-2">
                <div class="form-check custom-option custom-option-icon">
                  <label class="form-check-label custom-option-content" for="customRadioRent">
                    <span class="custom-option-body">
                      <i class="bx bx-wallet"></i>
                      <span class="custom-option-title">Rent the property</span>
                      <small>Post your property for rent.<br> Unlimited free listing.</small>
                    </span>
                    <input name="plPropertySaleRent" class="form-check-input" type="radio" value="2" id="customRadioRent">
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 fv-plugins-icon-container">
            <label class="form-label" for="plPropertyType">Property Type</label>
            <div class="position-relative"><select id="plPropertyType" name="plPropertyType" class="select2 form-select select2-hidden-accessible" data-allow-clear="true" data-select2-id="plPropertyType" tabindex="-1" aria-hidden="true">
              <option value="" data-select2-id="4">Select Property Type</option>
              <option value="10002">Flat/ Apartment</option>
              <option value="10001">Residential House</option>
              <option value="10017">Villa</option>
              <option value="10003">Builder Floor Apartment</option>
              <option value="10000">Residential Land/ Plot</option>
              <option value="10021">Penthouse</option>
              <option value="10022">Studio Apartment</option>
            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="3" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-plPropertyType-container"><span class="select2-selection__rendered" id="select2-plPropertyType-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select property type</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
          <div class="col-sm-6 fv-plugins-icon-container">
            <label class="form-label" for="plZipCode">Zip Code</label>
            <input type="number" id="plZipCode" name="plZipCode" class="form-control" placeholder="99950">
          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
          <div class="col-sm-6">
            <label class="form-label" for="plCountry">Country</label>
            <div class="position-relative"><select id="plCountry" name="plCountry" class="select2 form-select select2-hidden-accessible" data-allow-clear="true" data-select2-id="plCountry" tabindex="-1" aria-hidden="true">
              <option value="" data-select2-id="2">Select</option>
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
            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-plCountry-container"><span class="select2-selection__rendered" id="select2-plCountry-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select country</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plState">State</label>
            <input type="text" id="plState" name="plState" class="form-control" placeholder="California">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plCity">City</label>
            <input type="text" id="plCity" name="plCity" class="form-control" placeholder="Los Angeles">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plLandmark">Landmark</label>
            <input type="text" id="plLandmark" name="plLandmark" class="form-control" placeholder="Nr. Hard Rock Cafe">
          </div>
          <div class="col-lg-12">
            <label class="form-label" for="plAddress">Address</label>
            <textarea id="plAddress" name="plAddress" class="form-control" rows="2" placeholder="12, Business Park"></textarea>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Property Features -->
      <div id="property-features" class="content fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-sm-6">
            <label class="form-label d-block" for="plBedrooms">Bedrooms</label>
            <input type="number" id="plBedrooms" name="plBedrooms" class="form-control" placeholder="3">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plFloorNo">Floor No</label>
            <input type="number" id="plFloorNo" name="plFloorNo" class="form-control" placeholder="12">
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plBathrooms">Bathrooms</label>
            <input type="number" id="plBathrooms" name="plBathrooms" class="form-control" placeholder="4">
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plFurnishedStatus">Furnished Status</label>
            <select id="plFurnishedStatus" name="plFurnishedStatus" class="form-select">
              <option selected="" disabled="" value="">Select furnished status </option>
              <option value="1">Fully furnished</option>
              <option value="2">Furnished</option>
              <option value="3">Semi furnished</option>
              <option value="4">Unfurnished</option>
            </select>
          </div>
          <div class="col-lg-12">
            <label class="form-label" for="plFurnishingDetails">Furnishing Details</label>
            <tags class="tagify  form-control" tabindex="-1">
            <tag title="Fridge" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="Fridge"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">Fridge</span></div></tag><tag title="AC" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="AC"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">AC</span></div></tag><tag title="TV" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="TV"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">TV</span></div></tag><tag title="WiFi" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="WiFi"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">WiFi</span></div></tag><span contenteditable="" tabindex="0" data-placeholder="select options" aria-placeholder="select options" class="tagify__input" role="textbox" aria-autocomplete="both" aria-multiline="false"></span>
                ​
        </tags><input id="plFurnishingDetails" name="plFurnishingDetails" class="form-control" placeholder="select options" value="Fridge, AC, TV, WiFi" tabindex="-1">
          </div>
          <div class="col-sm-6">
            <label class="form-label">Is there any common area?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plCommonAreaRadio" id="plCommonAreaRadioYes" checked="">
              <label class="form-check-label" for="plCommonAreaRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plCommonAreaRadio" id="plCommonAreaRadioNo">
              <label class="form-check-label" for="plCommonAreaRadioNo">No</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Is there any attached balcony?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plAttachedBalconyRadio" id="plAttachedBalconyRadioYes" checked="">
              <label class="form-check-label" for="plAttachedBalconyRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plAttachedBalconyRadio" id="plAttachedBalconyRadioNo">
              <label class="form-check-label" for="plAttachedBalconyRadioNo">No</label>
            </div>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Property Area -->
      <div id="property-area" class="content fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="row g-3">
          <div class="col-sm-6">
            <label class="form-label d-block" for="plTotalArea">Total Area</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plTotalArea" name="plTotalArea" placeholder="1000" aria-describedby="pl-total-area">
              <span class="input-group-text" id="pl-total-area">sq-ft</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plCarpetArea">Carpet Area</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plCarpetArea" name="plCarpetArea" placeholder="800" aria-describedby="pl-carpet-area">
              <span class="input-group-text" id="pl-carpet-area">sq-ft</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plPlotArea">Plot Area</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plPlotArea" name="plPlotArea" placeholder="800" aria-describedby="pl-plot-area">
              <span class="input-group-text" id="pl-plot-area">sq-yd</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plAvailableFrom">Available From</label>
            <input type="text" id="plAvailableFrom" name="plAvailableFrom" class="form-control flatpickr flatpickr-input" placeholder="YYYY-MM-DD" readonly="readonly">
          </div>
          <div class="col-sm-6">
            <label class="form-label">Possession Status</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plPossessionStatus" id="plUnderConstruction" checked="">
              <label class="form-check-label" for="plUnderConstruction">Under Construction</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plPossessionStatus" id="plReadyToMoveRadio">
              <label class="form-check-label" for="plReadyToMoveRadio">Ready to Move</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Transaction Type</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plTransectionType" id="plNewProperty" checked="">
              <label class="form-check-label" for="plNewProperty">New Property</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plTransectionType" id="plResaleProperty">
              <label class="form-check-label" for="plResaleProperty">Resale</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Is Property Facing Main Road?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plRoadFacingRadio" id="plRoadFacingRadioYes" checked="">
              <label class="form-check-label" for="plRoadFacingRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plRoadFacingRadio" id="plRoadFacingRadioNo">
              <label class="form-check-label" for="plRoadFacingRadioNo">No</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Gated Colony?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plGatedColonyRadio" id="plGatedColonyRadioYes" checked="">
              <label class="form-check-label" for="plGatedColonyRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plGatedColonyRadio" id="plGatedColonyRadioNo">
              <label class="form-check-label" for="plGatedColonyRadioNo">No</label>
            </div>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
            <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Price Details -->
      <div id="price-details" class="content fv-plugins-bootstrap5 fv-plugins-framework">
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
              <option value="1" selected="">Monthly</option>
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
              <input class="form-check-input" type="radio" name="plShowPriceRadio" id="plNagotiablePrice" checked="">
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
              <label class="form-check-label" for="plOtherCharges">Stamp Duty &amp; Registration charges excluded.</label>
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
      <div class="modal-footer">
        <!--<button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Open second modal</button>-->
      </div>
    </div>
  </div>
</div>
</div>
<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
       <div style="height:90px" class="modal-header">
          <button type="button" class="btn btn-primary btn-next">Add new Concerts</button>
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Modal 2</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Hide this modal and show the first with the button below.
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back to first</button>
      </div>
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


            <!-- pricingModal -->
                        <!--/ pricingModal -->

          </div>
          <!-- / Content -->

        
          <div class="content-backdrop fade"></div>
        </div>
        
    <script>
        function delete_service(el) {
            let link = $(el).data('id');
            $('.deleted-modal').modal('show');
            $('#delete_form').attr('action', link);
        }
    </script>


@section('page-script')
<script>
    // function confirmAction(event, callback) {
        $(".removebtnn").click(function(){
      
        Swal.fire({
            title: 'Are you sure?'
            , text: "Are you sure you want to delete this?"
            , icon: 'warning'
            , showCancelButton: true
            , confirmButtonText: 'Yes, delete it!'
            , customClass: {
                confirmButton: 'btn btn-danger me-3'
                , cancelButton: 'btn btn-label-secondary'
            }
            , buttonsStyling: false
        }).then(function(result) {
            if (result.value) {
                callback();
            }
        });
    });

</script>
<script>

$(".history_category_image").click(function(){


    event.preventDefault();
    Swal.fire({
      title: 'Request Accepted',
    //   text: "Are you sure you want to delete this?",
      icon: 'success',
      showCancelButton: true,
      confirmButtonText: 'OKAY',
      customClass: {
        confirmButton: 'btn btn-success me-3',
        cancelButton: 'btn btn-label-secondary'
      },
      buttonsStyling: false
    }).then(function (result) {
      if (result.value) {
        callback();
      }
    });
    
    
    });
  

</script>
<script>
    $(".closetogglebtn").on('change',function(){
        if($(this).prop('checked')===true){
            $(".closeradio").removeClass('d-none');
        }else{
 
  $(".closeradio").addClass('d-none');
            
        }
});
</script>
<script>
function buildStepsBreadcrumb (wizard, element, steps) {
  const $steps = document.getElementById(element)
  $steps.innerHTML = ''
  for (let label in steps) {
    if (steps.hasOwnProperty(label)) {
      const $li = document.createElement('li')
      const $a = document.createElement('a')
      $li.classList.add('step-item')
      if (steps[label].active) {
        $li.classList.add('active')
      }
      $a.setAttribute('href', '#')
      $a.classList.add('tooltip')
      $a.dataset.tooltip = label
      $a.innerText = label
      $a.addEventListener('click', e => {
        e.preventDefault()
        wizard.revealStep(label)
      })
      $li.appendChild($a)
      $steps.appendChild($li)
    }
  }
}

function onStepChange(wizard, selector) {
    const steps = wizard.getBreadcrumb()
    buildStepsBreadcrumb(wizard, selector, steps)
}

function customValidation (step, fields, form) {
    Array.from(document.querySelectorAll('.has-error')).forEach(el => {
      el.classList.remove('has-error')
      let message = el.querySelector('.form-input-hint')
      message.classList.remove('is-visible')
      message.innerText = ''
    })
    debugger
    if (step.labeled('security')) {
      if (!form.password.value.length || !form.password_confirm.value.length || form.password.value !== form.password_confirm.value) {
        form.password.parentNode.classList.add('has-error')
        form.password_confirm.parentNode.classList.add('has-error')
        let message = form.password_confirm.parentNode.querySelector('.form-input-hint')
        message.innerText = "Passwords must be the very same !"
        message.classList.add('is-visible')
        return false
      }
    } else if (step.labeled('personal')) {
      debugger
    }
    return true
  }

const native_wizard = new window.Zangdar('#wizard-native', {
  onStepChange: () => {
    onStepChange(native_wizard, 'steps-native')
  },
  onSubmit(e) {
    e.preventDefault()
    console.log(e.target.elements)
    return false
  }
})

onStepChange(native_wizard, 'steps-native')

const custom_wizard = new window.Zangdar('#wizard-custom', {
  onStepChange: () => {
    onStepChange(custom_wizard, 'steps-custom')
  },
  customValidation,
  onSubmit(e) {
    e.preventDefault()
    console.log(e.target.elements)
    return false
  }
})

onStepChange(custom_wizard, 'steps-custom')

</script>
<!--code pen-->

<script>
          $('.dropify').dropify();
          
        //   flatpickr
          $(".flatpickrdate").flatpickr();
        
 $(".flatpickrtime").flatpickr(  {
   
    enableTime: true,
    noCalendar: true,
    dateFormat: "H:i",
    defaultDate: "13:45"

});
      </script>

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
        function nextStep(currentStepId, nextStepId) {
            document.getElementById(currentStepId).classList.remove('active');
            document.getElementById(nextStepId).classList.add('active');
        }

        function prevStep(currentStepId, prevStepId) {
            document.getElementById(currentStepId).classList.remove('active');
            document.getElementById(prevStepId).classList.add('active');
        }
    </script>
    <script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js" onload="drpzone_init()"></script>
    
    
    
    
    
    
    
@endsection
@endsection
