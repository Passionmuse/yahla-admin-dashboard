@extends('layouts/layoutMaster')

@section('title', 'Posts - List')

@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-icons.css')}}" />
@endsection

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/animate-css/animate.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/dropzone/dropzone.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.js')}}"></script>
@endsection

@section('content')
<script>
  const dropZoneInitFunctions = [];
</script>
<div class="d-flex justify-content-between">
  <div>
<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Organizations /</span> All Organizations
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
        <h5 class="m-0">Organization List</h5>
        @can('donation.create')
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal"><i class="bx bx-plus me-0 me-sm-1"></i> Add Organization</button>
        @endcan
    </div>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Organization Name</th>
            <th>Total Reach</th>
            <th>Option</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          @forelse($organizations as $organization)
          <tr>
            <td>{{ $organization->id }}</td>
            <td>
              <div class="d-flex justify-content-start align-items-center user-name">
                @if ($organization->logo && false)
                <div class="avatar-wrapper">
                  <div class="avatar me-2">
                    <img src="{{ url('storage/' . $organization->logo) }}" alt="Avatar" class="rounded">
                  </div>
                </div>
                @endif
                <div class="d-flex flex-column">
                  <a href="javascript:void(0)" class="text-body text-truncate">
                    <span class="fw-semibold">{{ $organization->name }}</span>
                  </a>
                </div>
              </div>
            </td>
            <td>0</td>
            <td>
              <div>
                <!-- Edit -->
                <span data-bs-toggle="modal" data-bs-target="#editModal{{ $organization->id }}">
                  @can('donation.write')
                  <button class="btn btn-sm btn-icon" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit">
                    <i class="bx bx-edit"></i>
                  </button>
                  @endcan
                </span>

                <!-- Delete -->
                <form action="{{ route('donations.organizations.destroy', $organization->id) }}" onsubmit="confirmAction(event, () => event.target.submit())" method="post" class="d-inline">
                  @method('DELETE')
                  @csrf
                  @can('donation.delete')
                  <button type="submit" class="btn btn-sm btn-icon" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Remove"><i class="bx bx-trash me-1"></i></button>
                  @endcan
                </form>
              </div>
              {{--
              <div class="dropdown d-inline-block">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                <div class="dropdown-menu">
                  <!-- <a class="dropdown-item" href="{{ route('donations.organizations.edit', $organization->id) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a> -->
                  <button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#editModal{{ $organization->id }}"><i class="bx bx-edit-alt me-1"></i> Edit</button>
                  <form action="{{ route('donations.organizations.destroy', $organization->id) }}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="dropdown-item"><i class="bx bx-trash me-1"></i> Delete</button>
                  </form>
                </div>
              </div>
              --}}
              <x-modal
                id="editModal{{ $organization->id }}"
                title="Edit Organization" 
                saveBtnText="Update"
                saveBtnType="submit"
                saveBtnForm="editForm{{ $organization->id }}"
                size="md"
                :show="old('showEditFormModal'.$organization->id)? true: false"
              >
                @include('content.organizations.includes.edit_form')
              </x-modal>
            </td>
          </tr>
          @empty
          <tr>
            <td class="text-center" colspan="8"><b>No organizations found.<b></td>
          </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
  <!--/ Basic Bootstrap Table -->

  <x-modal
    id="createModal"
    title="Add Organization" 
    saveBtnText="Create"
    saveBtnType="submit"
    saveBtnForm="createForm"
    size="md"
    :show="old('showCreateFormModal')? true: false"
  >
    @include('content.organizations.includes.create_form')
  </x-modal>
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
  function drpzone_init() {
      dropZoneInitFunctions.forEach(callback => callback());
  }
</script>
<script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js" onload="drpzone_init()"></script>
@endsection