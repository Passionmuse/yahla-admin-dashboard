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
        <span class="text-muted fw-light">App Settings /</span> Backup Settings
    </h4>

    <!-- Basic Bootstrap Table -->
    <div class="row">
        <div class="col-md-6">
			<div class="card">
				<div class="card-header p-0 pt-3 px-3">
					<div class="card-title d-flex" style="justify-content: space-between">
						<div>
							<h5 class="m-0">
								Backup Settings
							</h5>
							<small class="m-0">
								Current Backup Settings
							</small>
						</div>
						<div>
						</div>
						
					</div>
				</div>
				<hr class="mt-2 mb-0">
				<div class="card-body p-2">
					<p>
						Current Services
					</p>
					<div class="d-flex p-1 rounded mb-2" style="background-color:#F4F4F4">
						<div class="flex-shrink-0">
							<object data="https://servicebieter.de/svgs/googledrive.svg" width="30" height="30" class="mt-1 mx-2"> </object>
						</div>
						<div class="flex-grow-1 row">
						  <div class="col-9 mb-sm-0 mb-2">
							<h6 class="mb-0">Google Drive</h6>
							<small class="text-muted">Each User has to use his owen Google Drive Account</small>
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
					
					<div class="d-flex p-1 rounded mb-2" style="background-color:#F4F4F4">
						<div class="flex-shrink-0">
							<object data="https://servicebieter.de/svgs/onedrive.svg" width="30" height="30" class="mt-1 mx-2"> </object>
						</div>
						<div class="flex-grow-1 row">
						  <div class="col-9 mb-sm-0 mb-2">
							<h6 class="mb-0">One Drive</h6>
							<small class="text-muted">Each User has to use his owen One Drive Account</small>
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
					
					<div class="d-flex p-1 rounded mb-2" style="background-color:#F4F4F4">
						<div class="flex-shrink-0">
							<object data="https://servicebieter.de/svgs/dropbox.svg" width="30" height="30" class="mt-1 mx-2"> </object>
						</div>
						<div class="flex-grow-1 row">
						  <div class="col-9 mb-sm-0 mb-2">
							<h6 class="mb-0">Drop Box</h6>
							<small class="text-muted">Each User has to use his owen Dropbox Account</small>
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
					
					
					<div class="d-flex p-1 rounded mb-2" style="background-color:#F4F4F4">
						<div class="flex-shrink-0">
							<object data="https://servicebieter.de/svgs/icloud.svg" width="30" height="30" class="mt-1 mx-2"> </object>
						</div>
						<div class="flex-grow-1 row">
						  <div class="col-9 mb-sm-0 mb-2">
							<h6 class="mb-0">iCloud</h6>
							<small class="text-muted">Each User has to use his owen iCloud Account</small>
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
		document.getElementById("slider-pips-input").value = a + " min";
	}
	function sliderVal2(){
		
		const element = document.getElementById('slider-pips2');
		const handleElement = element.querySelector('.noUi-handle');
		const ariaValuetext = handleElement.getAttribute('aria-valuetext');
    	document.getElementById("slider-pips2-input").value = ariaValuetext + " min";
	}
</script>

            <!-- pricingModal -->
                        <!--/ pricingModal -->

       

@endsection