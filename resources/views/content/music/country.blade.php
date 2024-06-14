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
<div class="d-flex justify-content-between">
  <div>
<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Settings /</span> Add / Manage Country
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
        <h5 class="m-0">Countries List</h5>
        @can('location.create')
          <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal"><i class="bx bx-plus me-0 me-sm-1"></i> Add Country</button>
        @endcan
    </div>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Country Name</th>
            <th>Total People</th>
            <th>Options</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          @forelse($countries as $country)
          <tr>
            <td>{{ $country->id }}</td>
            <td>{{ $country->name }}</td>
            <td>{{ $country->users->count() }}</td>
            <td>
              <div>
                @can('location.write')
                  <!-- Edit -->
                  <span data-bs-toggle="modal" data-bs-target="#editModal{{ $country->id }}">
                    <button class="btn btn-sm btn-icon" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit">
                      <i class="bx bx-edit"></i>
                    </button>
                  </span>
                @endcan

                @can('location.delete')
                  <!-- Delete -->
                  <form action="{{ route('settings.countries.destroy', $country->id) }}" onsubmit="confirmAction(event, () => event.target.submit())" method="post" class="d-inline">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-sm btn-icon" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Remove"><i class="bx bx-trash me-1"></i></button>
                  </form>
                @endcan
              </div>
              
              @can('location.write')
                <x-modal
                  id="editModal{{ $country->id }}"
                  title="Edit Country" 
                  saveBtnText="Update"
                  saveBtnType="submit"
                  saveBtnForm="editForm{{ $country->id }}"
                  size="sm"
                  :show="old('showEditFormModal'.$country->id)? true: false"
                >
                  @include('content.settings.countries.includes.edit_form')
                </x-modal>
              @endcan
            </td>
          </tr>
          @empty
          <tr>
            <td class="text-center" colspan="4"><b>No countries found.<b></td>
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
      title="Add Country" 
      saveBtnText="Create"
      saveBtnType="submit"
      saveBtnForm="createForm"
      size="sm"
      :show="old('showCreateFormModal')? true: false"
    >
      @include('content.settings.countries.includes.create_form')
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