@php
  $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Countries - List')

@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-icons.css')}}" />
@endsection

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/animate-css/animate.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.js')}}"></script>
@endsection

@section('content')
<h4 class="fw-bold py-3 mb-2">Roles List</h4>

<p>A role provided access to predefined menus and features so that depending on <br> assigned role an administrator can have access to what user needs.</p>
<!-- Role cards -->
<div class="row g-4">
  @foreach($roles as $role)
 
  <div class="col-xl-4 col-lg-6 col-md-6">
    <div class="card h-100">
      <div class="card-body">
        <div class="d-flex justify-content-between mb-2">
          <h6 class="fw-normal">Total {{ $role->users->count() }} users</h6>
          <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
            @foreach($role->users as $user)
            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="{{ $user->name ?? '' }}" class="avatar avatar-sm pull-up">
              <img class="rounded-circle" src="{{asset('storage/'.$user->image)}}" alt="Avatar">
            </li>
            @endforeach
          </ul>
        </div>
        <div class="d-flex justify-content-between align-items-end">
          <div class="role-heading">
            <h4 class="mb-1">{{ $role->name }}</h4>
            @if ($role->name !== 'Super Admin')
            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#editRoleModal{{ $role->id }}" class="role-edit-modal"><small>Edit Role</small></a>
            @endif
          </div>
          @if ($role->name !== 'Super Admin')
          <form action="{{ route('settings.team.roles.destroy', $role->id) }}" onsubmit="confirmAction(event, () => event.target.submit())" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-sm btn-icon" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Remove"><i class="bx bx-trash me-1"></i></button>
          </form>
          @endif
        </div>
        @include('content.settings.roles.includes.edit_form')
      </div>
    </div>
  </div>
  @endforeach
  <div class="col-xl-4 col-lg-6 col-md-6">
    <div class="card h-100">
      <div class="row h-100">
        <div class="col-sm-5">
          <div class="d-flex align-items-end h-100 justify-content-center mt-sm-0 mt-3">
            <img src="{{asset('assets/img/illustrations/sitting-girl-with-laptop-'.$configData['style'].'.png')}}" class="img-fluid" alt="Image" width="120" data-app-light-img="illustrations/sitting-girl-with-laptop-light.png" data-app-dark-img="illustrations/sitting-girl-with-laptop-dark.png">
          </div>
        </div>
        <div class="col-sm-7">
          <div class="card-body text-sm-end text-center ps-sm-0">
            <button data-bs-target="#addRoleModal" data-bs-toggle="modal" class="btn btn-primary mb-3 text-nowrap add-new-role">Add New Role</button>
            <p class="mb-0">Add role, if it does not exist</p>
          </div>
        </div>
      </div>
    </div>
  </div>
<div class="">
    <!-- <a href="{{ route('donations.organizations.create') }}">
      <button class="btn btn-primary">Add Organization</button>
    </a> -->
</div>
</div>

@include('content.settings.roles.includes.create_form')
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
    }).then(function (result) {
      if (result.value) {
        callback();
      }
    });
  }
</script>

<script>
  (function () {
    const adminAccessCheckbox = document.querySelectorAll('.admin-access');
    adminAccessCheckbox.forEach(checkbox => {
      checkbox.addEventListener('change', () => {
        const allOtherCheckboxes = checkbox.closest('table').querySelectorAll('[name="permissions[]"]');
        allOtherCheckboxes.forEach(permission => permission.checked = checkbox.checked);
      });
    });
  })();
</script>
@endsection