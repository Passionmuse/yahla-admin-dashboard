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
<style>
	.tab-links{
		list-style: none;
		display: flex;
		width: 350px;
		background-color: #F3F3F3;
		border-radius: 20px;
		text-align: center;
		align-items: center;
		justify-content:center;
		margin: 0;
		padding: 0
	}
	.tab-links li{
		width: max-content;
		text-align: center;
		margin: 0px 5px;
		padding:2px 5px;
		cursor:pointer
		
	}
	.tab-links li.active{
		width: max-content;
		background-color: #696cff;
		color:white;
		padding:2px 15px;
		border-radius: 20px
	}
</style>
<h4 class="py-3 mb-4">
  <span class="text-muted fw-light">Restaurant /</span> Reservation 
</h4>

<div class="card mb-4">
  <div class="card-widget-separator-wrapper">
    <div class="card-body card-widget-separator">
      <div class="row gy-4 gy-sm-1">
        <div class="col-sm-6 col-lg-3">
          <div class="d-flex justify-content-between align-items-start card-widget-1 border-end pb-3 pb-sm-0">
            <div>
              <h3 class="mb-2">56</h3>
              <p class="mb-0">Reservation Plus Today</p>
            </div>
            <div class="avatar me-sm-4">
              <span class="avatar-initial rounded bg-label-secondary">
                <i class="bx bx-check-double bx-sm"></i>
              </span>
            </div>
          </div>
          <hr class="d-none d-sm-block d-lg-none me-4">
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="d-flex justify-content-between align-items-start card-widget-2 border-end pb-3 pb-sm-0">
            <div>
              <h3 class="mb-2">12,689</h3>
              <p class="mb-0">New Reservation</p>
            </div>
            <div class="avatar me-lg-4">
              <span class="avatar-initial rounded bg-label-secondary">
                <i class="bx bx-calendar bx-sm"></i>
              </span>
            </div>
          </div>
          <hr class="d-none d-sm-block d-lg-none">
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="d-flex justify-content-between align-items-start border-end pb-3 pb-sm-0 card-widget-3">
            <div>
              <h3 class="mb-2">124</h3>
              <p class="mb-0">Cancel Reservation</p>
            </div>
            <div class="avatar me-sm-4">
              <span class="avatar-initial rounded bg-label-secondary">
                <i class="bx bx-error-alt bx-sm"></i>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="card">
  
	
	<!-- <div class="card-datatable table-responsive">
			<table class="datatables-order table border-top">
			  <thead>
				<tr>
				  <th></th>
				  <th></th>
				  <th>order</th>
				  <th>date</th>
				  <th>customers</th>
				  <th>payment</th>
				  <th>status</th>
				  <th>method</th>
				  <th>actions</th>
				</tr>
			  </thead>
			</table>
		  </div> -->
	
	<div class="card-body">
		<div class="d-flex" style="justify-content:space-between">
			<input type="search" class="form-control" style="width:200px" placeholder="search">
			<ul style="" class="tab-links">
				<li id="all" onclick="tabHS('all')" class="">
					. All .
				</li>
				<li id="today" onclick="tabHS('today')" class="">
					. Today .
				</li>
				<li id="new" onclick="tabHS('new')" class="">
					. New .
				</li>
				<li id="cancelled" class="active" onclick="tabHS('cancelled')">
					. Cancelled .
				</li>
			</ul>
			<select class="form-select" style="width:80px">
				<option>10</option>
				<option>20</option>
			</select>
		</div>
		<table class="table">
			<thead>
				<tr>
					<th>Reservation ID</th>
					<th>Date and Time</th>
					<th>Reservation Date &amp; Time</th>
					<th>Customer Deatails</th>
					<th>Status</th>
					<th>Payment</th>
					<th>Options</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>RP-0123455</td>
					<td>12.10.24- 19:00</td>
					<td>Far 12.10.24- 19:00</td>
					<td>
						<div class="d-flex justify-content-start align-items-center order-name text-nowrap">
							<div class="avatar-wrapper">
								<div class="avatar me-2">
									<img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/1.png" alt="Avatar" class="rounded-circle">
								</div>
							</div>
							<div class="d-flex flex-column">
								<h6 class="m-0">
									<a href="https://restaurant.yamiyami.de/pages/profile-user" class="text-body">Cristine Easom</a>
								</h6>
								<small class="text-muted">ceasomw@theguardian.com</small>
							</div>
						</div>
					</td>
					<td>
						<span class="badge px-2 bg-label-success" text-capitalized="">Delivered</span>
					</td>
					<td>
						<h6 class="mb-0 w-px-100 text-warning"><i class="bx bxs-circle fs-tiny me-2"></i>Pending</h6>
					</td>
					<td>
						<button class="btn btn-lg btn-icon item-edit" data-bs-toggle="modal" data-bs-target="#view-reservation">
							<i class="bx bx-show"></i>
						</button>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>

<div class="modal fade" id="view-reservation" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
			. Reservation Plus Details .
			<br>
			<small>
				Reservation ID - Reservation Date &amp; Time
			</small>
		</h5>
		  <span class="badge bg-warning">Pending</span>
      </div>
      <div class="modal-body">
		  <p> Customer Details</p>
		  <center>
			  <p> . Mrs . <span class="px-2"> . First and Last Name . </span> </p>
			  <p> . Phone . <span class="px-2"> . 1324849 . </span> </p>
		  </center>
		  
		  <hr>
		  
		  <center>
			  <h4>
				  Reservation Details
			  </h4>
			  
			  <div class="px-4">
			  	  <div class="row border rounded p-1 py-3" style="display: flex; align-items: flex-end;">
					  <div class="col-md-3">
						  <object data="/public/assets/svg/adult.svg"></object>
						  <p class="m-0"> . 4 . </p>
					  </div>
					  <div class="col-md-3">
						  <object data="/public/assets/svg/kid.svg"></object>
						  <p class="m-0"> . 2 . </p>
					  </div>
					  <div class="col-md-3">
						  <object data="/public/assets/svg/calender.svg"></object>
						  <p class="m-0">22.09.2023</p>
					  </div>
					  <div class="col-md-3">
						  <object data="/public/assets/svg/clock.svg"></object>
						  <p class="m-0"> . 20:45 . </p>
					  </div>
					  
					  <hr style="border-top-style:dashed" class="mt-2 mb-3">
					  <div class="col-md-4">
						  <span class="bg-primary rounded rounded-pill text-white px-3 py-2 w-100">
							  Family Table
						  </span>
					  </div>
					  <div class="col-md-4">
						  <span class="bg-primary rounded rounded-pill text-white px-3 py-2 w-100">
							  No Smoker
						  </span>
					  </div>
					  <div class="col-md-4">
						  <span class="bg-primary rounded rounded-pill text-white px-3 py-2 w-100">
							  Birthday
						  </span>
					  </div>
					  
				  </div>
			  </div>
		  </center>
		  
		  
		  <hr style="border-top-style:dashed" class="mt-2 mb-3">
		  
		  <center>
			  <p class="m-0">Order Details</p>
			  <small class="text-danger">Order for this reservation date</small>
		  </center>
		  
		  <div id="order-items">
			  <div class="d-flex" style="justify-content:space-between">
				  <p class="my-1">101 - Product Name</p>
				  <b>$ 10,99</b>
			  </div>
			  <span class="text-danger my-1">-Salmai, -Onions</span> | + Olive, + Olive, + Olive, + Tomato,
			  <br>
			  <center>
				  <small class="text-danger my-3">
					  Notification About the item will be here
				  </small>
			  </center>
		  </div>
		  
		  <hr>
		  <div id="order-items">
			  <div class="d-flex" style="justify-content:space-between">
				  <p class="my-1">101 - Product Name</p>
				  <p class="my-1">3x</p>
				  <b>$ 10,99</b>
			  </div>
			  <span class="text-danger">-Salmai, -Onions</span> | + Olive, + Olive, + Olive, + Tomato,
		  </div>
		  <hr>
		  <div id="order-items">
			  <div class="d-flex" style="justify-content:space-between">
				  <p class="my-1">101 - Product Name</p>
				  <p class="my-1">1x</p>
				  <b>$ 10,99</b>
			  </div>
			  <span class="text-danger">-Salmai, -Onions</span> | + Olive, + Olive, + Olive, + Tomato,
		  </div>
		  <hr>
		  <div style="display:flex; justify-content:space-between">
			  <span>
				  Subtotal
			  </span>
			  <span>
				  $32, 97
			  </span>
		  </div>
		  <div style="display:flex; justify-content:space-between">
			  <span>
				  Discount
			  </span>
			  <span>
				  -$4, 97
			  </span>
		  </div>
		  <div style="display:flex; justify-content:space-between">
			  <b>
				  Total
			  </b>
			  <b>
				  $30, 17
			  </b>
		  </div>
		  
		  <center>
			  <button class="btn btn-light border">
					Paid By: Paypal - Date and Time	  
			  </button>
			 </center>
		  
		  <hr style="border-top-style:dashed" class="mt-2 mb-3">
		  
		  
		  
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>

<script>
	function tabHS(param){
		if(param == 'all'){
			document.getElementById('all').classList.add('active');
			document.getElementById('today').classList.remove('active');
			document.getElementById('new').classList.remove('active');
			document.getElementById('cancelled').classList.remove('active');
		}else if(param == 'today'){
			document.getElementById('all').classList.remove('active');
			document.getElementById('today').classList.add('active');
			document.getElementById('new').classList.remove('active');
			document.getElementById('cancelled').classList.remove('active');
		}else if(param == 'new'){
			document.getElementById('all').classList.remove('active');
			document.getElementById('today').classList.remove('active');
			document.getElementById('new').classList.add('active');
			document.getElementById('cancelled').classList.remove('active');
		}else if(param == 'cancelled'){
			document.getElementById('all').classList.remove('active');
			document.getElementById('today').classList.remove('active');
			document.getElementById('new').classList.remove('active');
			document.getElementById('cancelled').classList.add('active');
		}
	}
</script>





@endsection
