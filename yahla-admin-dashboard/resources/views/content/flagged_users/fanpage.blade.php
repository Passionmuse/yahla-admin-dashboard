@extends('layouts/layoutMaster')

@section('title', 'Flagged Users - List')

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
    <span class="text-muted fw-light">Flagged Users /</span> All Flagged Users
</h4>
</div>
<!-- <div class="">
    <a href="{{ route('reports.create') }}">
      <button class="btn btn-primary">Add Report</button>
    </a>
</div> -->
</div>

<div class="nav-align-top mb-4">

  <ul class="nav nav-tabs nav-fill" role="tablist">
    <li class="nav-item" role="presentation">
      <a type="button" class="nav-link {{ (int) $status === 0? 'active': '' }}" href="?status=pending"  aria-controls="awaitingFlaggedUsersTab" aria-selected="true">New Flaggas</a>
      <div class="{{  (int) $status === 0 ? 'tab--selected': '' }} tab__slider"></div>
    </li>
    <li class="nav-item" role="presentation">
      <a type="button" class="nav-link {{ (int) $status === 1? 'active': '' }}" href="?status=resolved"  aria-controls="solovedFlaggedUsersTab" aria-selected="false" tabindex="-1">Delayed Flaggs</a>
      <div class="{{  (int) $status === 1 ? 'tab--selected': '' }} tab__slider"></div>
    </li>
    <!--<li class="nav-item" role="presentation">-->
    <!--  <a type="button" class="nav-link {{ (int) $status === 2? 'active': '' }}" href="?status=dismissed"  aria-controls="dismissedFlaggedUsersTab" aria-selected="true">Level 3</a>-->
    <!--  <div class="{{  (int) $status === 2 ? 'tab--selected': '' }} tab__slider"></div>-->
    <!--</li>-->
  </ul>

  <div class="tab-content p-0">

    <div class="tab-pane fade show active" id="awaitingFlaggedUsersTab" role="tabpanel">
      <div class="table-responsive text-nowrap">
        <table class="table">
          <thead>
            <tr>
              <th>User</th>
              <th>Reason</th>
              <th>Date</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            @forelse($flaggedUsers as $flagged)
            <tr>
              <td>{{ $flagged->user? $flagged->user->name: '' }}</td>
              <td>{{ $flagged->reason }}</td>
              <td>{{ $flagged->created_at->format('F jS, Y') }}</td>
              <td>
                @if((int) $flagged->status == 0)
                  <span class="badge bg-label-warning me-1">Pending</span>
                @elseif((int) $flagged->status == 1)
                  <span class="badge bg-label-success me-1">Resolved</span>
                @elseif((int) $flagged->status == 2)
                  <span class="badge bg-label-danger me-1">Dismissed</span>
                @endif
              </td>
              <td>
              <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                  <div class="dropdown-menu">
                    @can('report.write')
                    <button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#changeStatusModal">
                      Change status to
                    </button>
                    @endcan
                  </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="changeStatusModal" tabindex="-1" style="display: none;" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered justify-content-center" role="document">
                    <form action="{{ route('reports.flagged-users.update', $flagged->id) }}" method="post">
                      @method('PUT')
                      @csrf
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="modalCenterTitle">Change Status</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <div class="form-check mt-3">
                            <input name="status" class="form-check-input" type="radio" value="0" id="pending" {{ (int) $flagged->status === 0? 'checked': '' }}>
                            <label class="form-check-label" for="pending">
                              Pending
                            </label>
                          </div>
                          <div class="form-check mt-3">
                            <input name="status" class="form-check-input" type="radio" value="1" id="resolved" {{ (int) $flagged->status === 1? 'checked': '' }}>
                            <label class="form-check-label" for="resolved">
                              Resolved
                            </label>
                          </div>
                          <div class="form-check mt-3">
                            <input name="status" class="form-check-input" type="radio" value="2" id="dismissed" {{ (int) $flagged->status === 2? 'checked': '' }}>
                            <label class="form-check-label" for="dismissed">
                              Dismissed
                            </label>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </td>
            </tr>
            @empty
            <tr>
              <td class="text-center" colspan="5"><b>No flagged users found.<b></td>
            </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
