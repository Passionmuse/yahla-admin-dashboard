@extends('layouts/layoutMaster')

@section('title', 'Boxicons - Icons')

@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-icons.css')}}" />
@endsection

@section('content')
<div class="d-flex justify-content-between">
  <div>
<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Report /</span> All Report
</h4>
</div>
</div>
   <!-- Basic Bootstrap Table -->
  <div class="card">
    <h5 class="card-header">Table Basic</h5>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>Id</th>
            <th>User</th>
            <th>Video</th>
            <th>reason</th>
            <th>Status </th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            @foreach($reported_video as $report)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ auth()->user()->name ?? '' }}</td>
            <td>@if(isset($report->video->video)) 
                <video controls width="200">
                <source src="{{ asset('storage/'.$report->video->video) }}">
                </video>
            @endif
        </td>
            <td>
                {{ $report->reason  ??  '' }} </option>
            </td>
            <td>
                <div class="dropdown d-inline-block show">
                  @php
                  if($report->status==1){
                  $btn='success';
                  }else{
                  $btn='danger';
                  }
                  @endphp
                  <button type="button" aria-haspopup="true" aria-expanded="true" data-bs-toggle="dropdown"
                    class="mb-2 mr-2 dropdown-toggle btn btn-{{ $btn }}">
                    @if ($report->status==1)
                    Active
                    @else
                    Dective
                    @endif
                  </button>
                  <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-xl dropdown-menu"
                    x-placement="top-start"
                    style="position: absolute; transform: translate3d(0px, -362px, 0px); top: 0px; left: 0px; will-change: transform;min-width: 9rem;">
                    <ul class="nav flex-column">
                      <li class="nav-item">
                        <a href="{{ route('report-status',['id'=>$report->id,'status'=>1]) }}"
                          class="nav-link">Active
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{ route('report-status',['id'=>$report->id,'status'=>0]) }}"
                          class="nav-link">Deactive</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </td>

          @endforeach
       
      
        </tbody>
      </table>
    </div>
  </div>
  <!--/ Basic Bootstrap Table -->

  <div class="modal fade deleted-modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  style="padding-right: 17px;" aria-modal="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Banner</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="mb-0">Are you Sure to delete this!</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <form action="" method="post" id="delete_form">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Yes</button>
        </form>
      </div>
    </div>
  </div>
</div>
<script>
  function delete_service(el){
    let link=$(el).data('id');
    $('.deleted-modal').modal('show');
    $('#delete_form').attr('action', link);
  }
</script>
@endsection
