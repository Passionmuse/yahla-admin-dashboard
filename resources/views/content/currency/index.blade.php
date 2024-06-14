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

@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/flatpickr/flatpickr.js')}}"></script>
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/tagify/tagify.js')}}"></script>
<script src="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.js')}}"></script>
@endsection

@section('content')
<style>
    .swal2-icon .swal2-icon-content {
        font-size: 66px !important;
    }
    .btn-danger {
        background-color: #ff3e1d !important;
    }
</style>
<script>
  const dropZoneInitFunctions = [];
</script>

{{-- Nav TAb --}}
<div class="d-flex justify-content-between">
  <div>
<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Currencies
</h4>
</div>
<div class="">
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createserviceModal">Add Currency</button>
</div>
</div>

   <!-- Basic Bootstrap Table -->
  <div class="card">
    <h5 class="card-header">Currency List</h5>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Symbol</th>
            <th>Code</th>
            <th>Option</th>
          </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>USD</td>
                <td>$</td>
                <td>U+0024</td>
                <td> <button type="button" class="btn btn-sm btn-icon deletebtn"
                                                            data-bs-toggle="tooltip" data-bs-offset="0,4"
                                                            data-bs-placement="top" data-bs-html="true"
                                                            data-bs-original-title="Remove"><i
                                                                class="bx bx-trash me-1"></i></button></td>
            </tr>
        </tbody>
      </table>
    </div>
  </div>
{{-- Create Music model --}}
<x-modal 
id="createserviceModal" 
title="Add Currency"
 saveBtnText="Add" 
 saveBtnType="button"
  saveBtnForm="createForm" 
  size="md">
    
 @include('content.include.currency.createForm')
</x-modal>

@section('page-script')
<script>
 $(document).on('click','.deletebtn',function(){
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
        });
</script>
<script>
  function drpzone_init() {
      dropZoneInitFunctions.forEach(callback => callback());
  }
</script>
<script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js" onload="drpzone_init()"></script>
@endsection
@endsection
