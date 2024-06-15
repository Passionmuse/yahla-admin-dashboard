@extends('layouts/layoutMaster')

@section('title', 'Ads - New Requests')

@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-icons.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.js')}}"></script>
@endsection

@section('content')
<div class="d-flex justify-content-between">
  <div>
<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Ads /</span> Manage
</h4>
</div>
</div>


<!-- Basic Bootstrap Table -->
<div class="card">
    <h5 class="card-header">New Requests</h5>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            {{-- <th>Username</th> --}}
            <th>Ads Title</th>
            <th>Image</th>
            <th>Budget</th>
            <th>Options</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          @forelse($ads as $ad)
          <tr>
            <td>{{ $ad->id }}</td>
            {{-- <td>
              @if ($ad->user)
              <div class="d-flex justify-content-start align-items-center user-name">
                <div class="avatar-wrapper">
                  <div class="avatar avatar-sm me-3"><img src="{{$ad->user->image? url('storage/' . $ad->user->image): 'https://www.w3schools.com/howto/img_avatar.png' }}" alt="Avatar" class="rounded-circle"></div>
                </div>
                <div class="d-flex flex-column">
                  <a href="javascript:void(0)" class="text-body text-truncate">
                    <span class="fw-semibold">{{ $ad->user->name }}</span>
                  </a>
                </div>
              </div>
              @endif
            </td> --}}
            <td>{{ $ad->title }}</td>
            <td><img src="{{ asset('storage/'.$ad->image_url) }}" width="100"></td>
            <td>{{ $ad->budget ?? '' }}</td>
            <td>
                <div class="d-flex justify-content-start align-items-center">
                  <span data-bs-toggle="modal" data-bs-target="#editadsModal{{ $ad->id }}">
                    <button class="btn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit"><i class="bx bx-edit"></i>
                    </button>
                  </span>
                  <form action="{{ route('manage-ads.destroy', $ad->id) }}" onsubmit="confirmAction(event, () => event.target.submit())" method="post" class="d-inline">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-sm btn-icon" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Remove"><i class="bx bx-trash me-1"></i></button>
                  </form>
                  <x-modal id="editadsModal{{ $ad->id }}" 
                  title="Edit Ads"
                   saveBtnText="Update" 
                   saveBtnType="submit"
                    saveBtnForm="editForm{{ $ad->id }}" 
                    size="md">
  
                    @include('content.include.ads.editForm')
                  </x-modal>
                </div>
                </td>
          </tr>
          @empty
          <tr>
            <td class="text-center" colspan="8"><b>No Ads found.<b></td>
          </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
  <!--/ Basic Bootstrap Table -->
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