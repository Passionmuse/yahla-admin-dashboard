@extends('layouts/layoutMaster')

@section('title', 'Province - List')

@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-icons.css')}}" />
<style>
    .select2-container {
        z-index: 5000;
    }
</style>
@endsection

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/animate-css/animate.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
@endsection

@section('content')
<div class="d-flex justify-content-between">
  <div>
<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Settings /</span> Add / Manage Province
</h4>
</div>
<div class="">
    <!-- <a href="{{ route('donations.organizations.create') }}">
      <button class="btn btn-primary">Add Organization</button>
    </a> -->
</div>
</div>
  <!-- Basic Bootstrap Table -->
  <div class="card">
    <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="m-0">Province List</h5>
        @can('location.create')
          <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal"><i class="bx bx-plus me-0 me-sm-1"></i> Add Province</button>
        @endcan
    </div>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Country Name</th>
            <th>Province Name</th>
            <th>Total People</th>
            <th>Options</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          @forelse($regions as $region)
          <tr>
            <td>{{ $region->id }}</td>
            <td>{{ $region->country? $region->country->name: '' }}</td>
            <td>{{ $region->name }}</td>
            <td>{{ $region->users->count() }}</td>
            <td>
              <div>
                @can('location.write')
                  <!-- Edit -->
                  <span data-bs-toggle="modal" data-bs-target="#editModal{{ $region->id }}">
                    <button class="btn btn-sm btn-icon" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit">
                      <i class="bx bx-edit"></i>
                    </button>
                  </span>
                @endcan

                @can('location.delete')
                  <!-- Delete -->
                  <form action="{{ route('settings.provinces.destroy', $region->id) }}" onsubmit="confirmAction(event, () => event.target.submit())" method="post" class="d-inline">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-sm btn-icon" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Remove"><i class="bx bx-trash me-1"></i></button>
                  </form>
                @endcan
              </div>
              
              @can('location.write')
                <x-modal
                  id="editModal{{ $region->id }}"
                  title="Edit Province" 
                  saveBtnText="Update"
                  saveBtnType="submit"
                  saveBtnForm="editForm{{ $region->id }}"
                  size="sm"
                  :show="old('showEditFormModal'.$region->id)? true: false"
                >
                  @include('content.settings.regions.includes.edit_form')
                </x-modal>
              @endcan
            </td>
          </tr>
          @empty
          <tr>
            <td class="text-center" colspan="5"><b>No province found.<b></td>
          </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
  <!--/ Basic Bootstrap Table -->
  
  @can('location.create')
    <x-modal
      id="createModal"
      title="Add Province" 
      saveBtnText="Create"
      saveBtnType="submit"
      saveBtnForm="createForm"
      size="sm"
      :show="old('showCreateFormModal')? true: false"
    >
      @include('content.settings.regions.includes.create_form')
    </x-modal>
  @endcan
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
@endsection