@extends('layouts/layoutMaster')

@section('title', 'Ads - Denied')

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
    <span class="text-muted fw-light">Ads /</span> Denied
</h4>
</div>
<!-- <div class="">
    <a href="{{ route('fanpage.create') }}">
    <button class="btn btn-primary">Add FanPage</button>
  </a>
</div> -->
</div>

<div class="row g-4 mb-4">
  <div class="col-sm-6 col-xl-4">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span>Total New Requests</span>
            <div class="d-flex align-items-end mt-2">
              <h4 class="mb-0 me-2">21,459</h4>
              <small class="text-success">(+29%)</small>
            </div>
            <small>Total Request</small>
          </div>
          <span class="badge bg-label-primary rounded p-2">
            <i class="bx bx-user bx-sm"></i>
          </span>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-xl-4">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span>Total Ads</span>
            <div class="d-flex align-items-end mt-2">
              <h4 class="mb-0 me-2">4,567</h4>
              <small class="text-success">(+18%)</small>
            </div>
            <small>Last week analytics </small>
          </div>
          <span class="badge bg-label-danger rounded p-2">
            <i class="bx bx-user-plus bx-sm"></i>
          </span>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-xl-4">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span>Denied Total</span>
            <div class="d-flex align-items-end mt-2">
              <h4 class="mb-0 me-2">19,860</h4>
              <small class="text-danger">(-14%)</small>
            </div>
            <small>Last week analytics</small>
          </div>
          <span class="badge bg-label-success rounded p-2">
            <i class="bx bx-group bx-sm"></i>
          </span>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Basic Bootstrap Table -->
<div class="card">
    <h5 class="card-header">Denied Ads</h5>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Username</th>
            <th>Ads Title</th>
            <th>Service Type</th>
            <th>Payment Type</th>
            <td>Denied Reason</td>
            <th>Options</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          @forelse($ads as $ad)
          <tr>
            <td>{{ $ad->id }}</td>
            <td>
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
            </td>
            <td>{{ $ad->title }}</td>
            <td>{{ $ad->service_type }}</td>
            <td>{{ $ad->payment_type }}</td>
            <td>{{ $ad->denied_reason?? '' }}</td>
            <td>
              @can('advertisement.write')
              <a href="{{ route('ads-status', ['id' => $ad->id, 'status' => 1]) }}" class="btn badge badge-center bg-label-secondary ms-1" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Accept"><i class="bx bx-check"></i></a>
              @endcan
              <!-- View -->
              <span data-bs-toggle="modal" data-bs-target="#viewModal{{ $ad->id }}" class="ms-1">
                @can('advertisement.read')
                <button class="btn btn-sm btn-icon" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="View">
                  <i class="fa fa-eye fa-lg"></i>
                </button>
                @endcan
              </span>

              <!-- Delete -->
              <form action="{{ route('ads.destroy', $ad->id) }}" class="ms-1 d-inline-block" onsubmit="confirmAction(event, () => event.target.submit())" method="post" class="d-inline">
                @method('DELETE')
                @csrf
                @can('advertisement.delete')
                <button type="submit" class="btn btn-sm btn-icon" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Remove"><i class="bx bx-trash me-1"></i></button>
                @endcan
              </form>

              <x-modal
                id="viewModal{{ $ad->id }}"
                title="View Ad"
                :showSaveBtn="false"
                size="md"
              >
                <ul class="list-unstyled d-flex flex-wrap">
                  <li class="mb-4 w-100">
                    <div class="fw-bold me-2 mb-1">Advertiser</div>
                    <div class="">
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
                    </div>
                  </li>
                  <li class="mb-4 w-50">
                    <div class="fw-bold me-2 mb-1">Ad Title</div>
                    <div class="">
                      {{ $ad->title }}
                    </div>
                  </li>
                  <li class="mb-4 w-50">
                    <div class="fw-bold me-2 mb-1">Service Type</div>
                    <div class="">
                      {{ $ad->service_type }}
                    </div>
                  </li>
                  <li class="w-50">
                    <div class="fw-bold me-2 mb-1">Payment Type</div>
                    <div class="">
                      {{ $ad->service_type }}
                    </div>
                  </li>
                  <li class="w-50">
                    <div class="fw-bold me-2 mb-1">Date</div>
                    <div class="">
                      {{ $ad->created_at->format('M j, Y') }}
                    </div>
                  </li>
                </ul>
              </x-modal>
            </td>
          </tr>
          @empty
          <tr>
            <td class="text-center" colspan="8"><b>No requests found.<b></td>
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