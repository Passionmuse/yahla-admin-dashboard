@extends('layouts/layoutMaster')

@section('title', 'Boxicons - Icons')

@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-icons.css')}}" />
@endsection

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/flatpickr/flatpickr.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/tagify/tagify.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/animate-css/animate.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/dropzone/dropzone.css')}}" />
<link href="
https://cdn.jsdelivr.net/npm/dropify@0.2.2/dist/css/dropify.min.css
" rel="stylesheet">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}">


<!--add-->

  <!-- Favicon -->
 
  
  <!-- Include Styles -->
  <!-- BEGIN: Theme CSS-->
<!-- Fonts -->




<link rel="stylesheet" href="{{asset('assets/vendor/fonts/boxicons.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/fonts/fontawesome.css')}}"  />
<link rel="stylesheet" href="{{asset('assets/vendor/fonts/flag-icons.css')}}"  />

<!-- Core CSS -->
<link rel="stylesheet" href="{{asset('assets/vendor/css/rtl/core.css')}}" class="template-customizer-core-css" />
<link rel="stylesheet" href="{{asset('assets/vendor/css/rtl/theme-default.css')}}" class="template-customizer-theme-css" />
<link rel="stylesheet" href="{{asset('assets/vendor/css/demo.css')}}" />


<link rel="stylesheet" href="{{asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}"  />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/typeahead-js/typeahead.css')}}"  />

<!-- Vendor Styles -->
<link rel="stylesheet" href="{{asset('assets/vendor/libs/nouislider/nouislider.css')}}"  />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/toastr/toastr.css')}}"  />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/animate-css/animate.css')}}"  />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/flatpickr/flatpickr.js')}}"></script>
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/tagify/tagify.js')}}"></script>
<script src="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.js')}}"></script>
<script src="
https://cdn.jsdelivr.net/npm/dropify@0.2.2/dist/js/dropify.min.js
">
  
</script>
<script src="{{asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>
@endsection


@section('content')


                <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">App Settings /</span> Storage Settings
    </h4>

    <!-- Basic Bootstrap Table -->
    <div class="row">
        <div class="col-md-6">
			<div class="card">
				<div class="card-header p-0 pt-3 px-3">
					<div class="card-title d-flex" style="justify-content: space-between">
						<div>
							<h5 class="m-0">
								Storage Settings
							</h5>
							<small class="m-0">
								For all users
							</small>
						</div>
						<div>
							<label class="switch me-0">
							  <input type="checkbox" class="switch-input" checked="">
							  <span class="switch-toggle-slider">
								
							  </span>
							  <span class="switch-label"></span>
							</label>
						</div>
						
					</div>
				</div>
				<hr class="mt-2 mb-0">
				<div class="card-body p-2">
						
					<div class="p-1 rounded mb-2" style="background-color:#F4F4F4">
						<div class="d-flex ">
							<div class="flex-shrink-0">
								<object data="https://servicebieter.de/svgs/standarduser.svg" width="30" height="30" class="mt-1 mx-2"> 								</object>
							</div>
							<div class="flex-grow-1 row">
							  <div class="col-9 mb-sm-0 mb-2">
								<h6 class="mb-0">Standard User</h6>
								<small class="text-muted">The total Storage Amount that allowed for Standard users</small>
							  </div>
							  <div class="col-3 text-end mt-1">
								<label class="switch me-0">
								  <input type="checkbox" class="switch-input" checked="">
								  <span class="switch-toggle-slider">

								  </span>
								  <span class="switch-label"></span>
								</label>
							  </div>
							</div>

						  </div>
						
							<p class="text-muted mx-2">Storage size</p>
						
						<div class="row">
							<div class="col-md-9">
								<div class="card-body bg-white rounded-0" style="padding-top: 30px; padding-bottom: 40px">
									<div id="slider-pips" onclick="sliderVal()" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr"><div class="noUi-base"><div class="noUi-connects"></div><div class="noUi-origin" style="transform: translate(-90%, 0px); z-index: 4;"><div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="10.0" aria-valuetext="10.00"><div class="noUi-touch-area"></div><div class="noUi-tooltip">10.00</div></div></div></div><div class="noUi-pips noUi-pips-horizontal"><div class="noUi-marker noUi-marker-horizontal noUi-marker-large" style="left: 0%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-large" data-value="0" style="left: 0%;">0</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 5%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 10%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="10" style="left: 10%;">10</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 15%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 20%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="20" style="left: 20%;">20</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 25%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 30%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="30" style="left: 30%;">30</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 35%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 40%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="40" style="left: 40%;">40</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 45%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 50%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="50" style="left: 50%;">50</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 55%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 60%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="60" style="left: 60%;">60</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 65%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 70%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="70" style="left: 70%;">70</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 75%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 80%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="80" style="left: 80%;">80</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 85%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 90%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="90" style="left: 90%;">90</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 95%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-large" style="left: 100%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-large" data-value="100" style="left: 100%;">100</div></div></div>
								</div>
							</div>
							<div class="col-md-3" style="display: flex; align-items: center; justify-content: center; height:80px">
								<input type="text" value="10 MB" id="slider-pips-input" class="form-control text-center">
							</div>
						</div>
					</div>
						
					<div class="p-1 rounded mb-2" style="background-color:#F4F4F4">
						<div class="d-flex ">
							<div class="flex-shrink-0">
								<object data="https://servicebieter.de/svgs/standarduser.svg" width="30" height="30" class="mt-1 mx-2"> 								</object>
							</div>
							<div class="flex-grow-1 row">
							  <div class="col-9 mb-sm-0 mb-2">
								<h6 class="mb-0">VIP User</h6>
								<small class="text-muted">The total Storage Amount that allowed for VIP users</small>
							  </div>
							  <div class="col-3 text-end mt-1">
								<label class="switch me-0">
								  <input type="checkbox" class="switch-input" checked="">
								  <span class="switch-toggle-slider">

								  </span>
								  <span class="switch-label"></span>
								</label>
							  </div>
							</div>

						  </div>
						
							<p class="text-muted mx-2">Storage size</p>
						
						<div class="row">
							<div class="col-md-9">
								<div class="card-body bg-white rounded-0" style="padding-top: 30px; padding-bottom: 40px">
									<div id="slider-pips2" onclick="sliderVal2()" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr"><div class="noUi-base"><div class="noUi-connects"></div><div class="noUi-origin" style="transform: translate(-90%, 0px); z-index: 4;"><div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="10.0" aria-valuetext="10.00"><div class="noUi-touch-area"></div><div class="noUi-tooltip">10.00</div></div></div></div><div class="noUi-pips noUi-pips-horizontal"><div class="noUi-marker noUi-marker-horizontal noUi-marker-large" style="left: 0%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-large" data-value="0" style="left: 0%;">0</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 5%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 10%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="10" style="left: 10%;">10</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 15%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 20%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="20" style="left: 20%;">20</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 25%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 30%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="30" style="left: 30%;">30</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 35%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 40%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="40" style="left: 40%;">40</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 45%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 50%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="50" style="left: 50%;">50</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 55%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 60%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="60" style="left: 60%;">60</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 65%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 70%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="70" style="left: 70%;">70</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 75%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 80%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="80" style="left: 80%;">80</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 85%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 90%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="90" style="left: 90%;">90</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 95%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-large" style="left: 100%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-large" data-value="100" style="left: 100%;">100</div></div></div>
								</div>
							</div>
							<div class="col-md-3" style="display: flex; align-items: center; justify-content: center; height:80px">
								<input type="text" value="10 MB" id="slider-pips2-input" class="form-control text-center">
							</div>
						</div>
					</div>
					
					
						
					<div class="p-1 rounded mb-2" style="background-color:#F4F4F4">
						<div class="d-flex ">
							<div class="flex-shrink-0">
								<object data="https://servicebieter.de/svgs/standarduser.svg" width="30" height="30" class="mt-1 mx-2"> 								</object>
							</div>
							<div class="flex-grow-1 row">
							  <div class="col-9 mb-sm-0 mb-2">
								<h6 class="mb-0">Premium User</h6>
								<small class="text-muted">The total Storage Amount that allowed for Premium users</small>
							  </div>
							  <div class="col-3 text-end mt-1">
								<label class="switch me-0">
								  <input type="checkbox" class="switch-input" checked="">
								  <span class="switch-toggle-slider">

								  </span>
								  <span class="switch-label"></span>
								</label>
							  </div>
							</div>

						  </div>
						
							<p class="text-muted mx-2">Storage size</p>
						
						<div class="row">
							<div class="col-md-9">
								<div class="card-body bg-white rounded-0" style="padding-top: 30px; padding-bottom: 40px">
									<div id="slider-pips3" onclick="sliderVal3()" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr"><div class="noUi-base"><div class="noUi-connects"></div><div class="noUi-origin" style="transform: translate(-90%, 0px); z-index: 4;"><div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="10.0" aria-valuetext="10.00"><div class="noUi-touch-area"></div><div class="noUi-tooltip">10.00</div></div></div></div><div class="noUi-pips noUi-pips-horizontal"><div class="noUi-marker noUi-marker-horizontal noUi-marker-large" style="left: 0%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-large" data-value="0" style="left: 0%;">0</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 5%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 10%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="10" style="left: 10%;">10</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 15%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 20%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="20" style="left: 20%;">20</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 25%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 30%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="30" style="left: 30%;">30</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 35%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 40%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="40" style="left: 40%;">40</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 45%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 50%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="50" style="left: 50%;">50</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 55%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 60%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="60" style="left: 60%;">60</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 65%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 70%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="70" style="left: 70%;">70</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 75%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 80%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="80" style="left: 80%;">80</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 85%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 90%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="90" style="left: 90%;">90</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 95%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-large" style="left: 100%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-large" data-value="100" style="left: 100%;">100</div></div></div>
								</div>
							</div>
							<div class="col-md-3" style="display: flex; align-items: center; justify-content: center; height:80px">
								<input type="text" value="10 MB" id="slider-pips3-input" class="form-control text-center">
							</div>
						</div>
					</div>
					
					
					
						
					<div class="p-1 rounded mb-2" style="background-color:#FEE9EA">
						<div class="d-flex ">
							<div class="flex-shrink-0">
								<object data="https://servicebieter.de/svgs/standarduser.svg" width="30" height="30" class="mt-1 mx-2"> 								</object>
							</div>
							<div class="flex-grow-1 row">
							  <div class="col-9 mb-sm-0 mb-2">
								<h6 class="mb-0">Storage alert</h6>
								<small class="text-muted">User will get alert on the App once the Storage Amount is less then set it %</small>
							  </div>
							  <div class="col-3 text-end mt-1">
								<label class="switch me-0">
								  <input type="checkbox" class="switch-input" checked="">
								  <span class="switch-toggle-slider">

								  </span>
								  <span class="switch-label"></span>
								</label>
							  </div>
							</div>

						  </div>
						
							<p class="text-muted mx-2">Storage alert when reach %</p>
						
						<div class="row">
							<div class="col-md-9">
								<div class="card-body bg-white rounded-0" style="padding-top: 30px; padding-bottom: 40px">
									<div id="slider-pips4" onclick="sliderVal4()" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr"><div class="noUi-base"><div class="noUi-connects"></div><div class="noUi-origin" style="transform: translate(-90%, 0px); z-index: 4;"><div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="10.0" aria-valuetext="10.00"><div class="noUi-touch-area"></div><div class="noUi-tooltip">10.00</div></div></div></div><div class="noUi-pips noUi-pips-horizontal"><div class="noUi-marker noUi-marker-horizontal noUi-marker-large" style="left: 0%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-large" data-value="0" style="left: 0%;">0</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 5%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 10%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="10" style="left: 10%;">10</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 15%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 20%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="20" style="left: 20%;">20</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 25%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 30%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="30" style="left: 30%;">30</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 35%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 40%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="40" style="left: 40%;">40</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 45%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 50%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="50" style="left: 50%;">50</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 55%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 60%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="60" style="left: 60%;">60</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 65%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 70%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="70" style="left: 70%;">70</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 75%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 80%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="80" style="left: 80%;">80</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 85%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 90%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="90" style="left: 90%;">90</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="left: 95%;"></div><div class="noUi-marker noUi-marker-horizontal noUi-marker-large" style="left: 100%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-large" data-value="100" style="left: 100%;">100</div></div></div>
								</div>
							</div>
							<div class="col-md-3" style="display: flex; align-items: center; justify-content: center; height:80px">
								<input type="text" value="10 MB" id="slider-pips4-input" class="form-control text-center">
							</div>
						</div>
					</div>
					<center>
						<button class="btn btn-nz border"> 
							Edit / Save
						</button>
					</center>
				</div>
			</div>
			
		</div>
    </div>
    <!--/ Basic Bootstrap Table -->


<script>
	function sliderVal(){
		var a = document.querySelector('.noUi-tooltip').innerText;
		document.getElementById("slider-pips-input").value = a + " MB";
	}
	function sliderVal2(){
		
		const element = document.getElementById('slider-pips2');
		const handleElement = element.querySelector('.noUi-handle');
		const ariaValuetext = handleElement.getAttribute('aria-valuetext');
    	document.getElementById("slider-pips2-input").value = ariaValuetext + " MB";
	}
	function sliderVal3(){
		
		const element = document.getElementById('slider-pips3');
		const handleElement = element.querySelector('.noUi-handle');
		const ariaValuetext = handleElement.getAttribute('aria-valuetext');
    	document.getElementById("slider-pips3-input").value = ariaValuetext + " MB";
	}
	function sliderVal4(){
		
		const element = document.getElementById('slider-pips4');
		const handleElement = element.querySelector('.noUi-handle');
		const ariaValuetext = handleElement.getAttribute('aria-valuetext');
    	document.getElementById("slider-pips4-input").value = ariaValuetext + " MB";
	}
</script>

            <!-- pricingModal -->
                        <!--/ pricingModal -->

@endsection
