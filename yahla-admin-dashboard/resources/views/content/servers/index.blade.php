@extends('layouts/layoutMaster')

@section('title', 'Settings - FPT Settings')

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
    <span class="text-muted fw-light">Settings /</span> FPT Settings
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
        <h5 class="m-0">Servers List</h5>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal"><i class="bx bx-plus me-0 me-sm-1"></i> Add Server</button>
    </div>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>Server Address</th>
            <th>Port</th>
            <th>Username</th>
            <th>Password</th>
            <th>File Limit</th>
            <th>Status</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          @forelse($servers as $server)
          <tr>
            <td>{{ $server->address }}</td>
            <td>{{ $server->port }}</td>
            <td>{{ $server->username }}</td>
            <td>{{ $server->password }}</td>
            <td>{{ $server->file_limit }}</td>
            <td>
              @if ((int) $server->status)
                <span class="badge bg-label-success me-1">Active</span>
              @else
                <span class="badge bg-label-secondary me-1">Disabled</span>
              @endif
            </td>
            <td>
              <div>
                <!-- Edit -->
                <span data-bs-toggle="modal" data-bs-target="#editModal{{ $server->id }}">
                  <button class="btn btn-sm btn-icon" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit">
                    <i class="bx bx-edit"></i>
                  </button>
                </span>

                <!-- Delete -->
                <form action="{{ route('settings.servers.destroy', $server->id) }}" onsubmit="confirmAction(event, () => event.target.submit())" method="post" class="d-inline">
                  @method('DELETE')
                  @csrf
                  <button type="submit" class="btn btn-sm btn-icon" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Remove"><i class="bx bx-trash me-1"></i></button>
                </form>
              </div>
              {{--
              <div class="dropdown d-inline-block">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                <div class="dropdown-menu">
                  <!-- <a class="dropdown-item" href="{{ route('donations.organizations.edit', $server->id) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a> -->
                  <button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#editModal{{ $server->id }}"><i class="bx bx-edit-alt me-1"></i> Edit</button>
                  <form action="{{ route('donations.organizations.destroy', $server->id) }}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="dropdown-item"><i class="bx bx-trash me-1"></i> Delete</button>
                  </form>
                </div>
              </div>
              --}}
              <x-modal
                id="editModal{{ $server->id }}"
                title="Edit Server" 
                saveBtnText="Update"
                saveBtnType="submit"
                saveBtnForm="editForm{{ $server->id }}"
                size="md"
                :show="old('showEditFormModal'.$server->id)? true: false"
              >
                @include('content.servers.includes.edit_form')
              </x-modal>
            </td>
          </tr>
          @empty
          <tr>
            <td class="text-center" colspan="8"><b>No servers found.<b></td>
          </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
  <!--/ Basic Bootstrap Table -->

  <x-modal
    id="createModal"
    title="Add Server" 
    saveBtnText="Create"
    saveBtnType="submit"
    saveBtnForm="createForm"
    size="md"
    :show="old('showCreateFormModal')? true: false"
  >
    @include('content.servers.includes.create_form')
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
@endsection