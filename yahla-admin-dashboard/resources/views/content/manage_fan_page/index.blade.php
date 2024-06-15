@extends('layouts/layoutMaster')

@section('title', 'Boxicons - Icons')

@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-icons.css')}}" />
@endsection

@section('content')
<div class="d-flex justify-content-between">
  <div>
<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Manage FanPage /</span> Manage FanPage
</h4>
</div>
<div class="">
    <a href="{{ route('manage-fanpage.create') }}">
<button class="btn btn-primary">Add FanPage </button>
</a>
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
            <th>User Name</th>
            <th>FanPage Name</th>
            <th>Status</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            @foreach($fanpage as $page)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $page->user_name ?? '' }}</td>
            <td>{{ $page->fanpage_name ?? '' }}</td>
      
            <td>
                <div class="dropdown d-inline-block show">
                  @php
                  if($page->status==0){
                  $btn='secondary';
                  }elseif ($page->status==1) {
                    $btn='success';
                  }elseif ($page->status==2) {
                    $btn='danger';
                  }elseif ($page->status==3) {
                    $btn='danger';
                  }
                  @endphp
                  <button type="button" aria-haspopup="true" aria-expanded="true" data-bs-toggle="dropdown"
                    class="mb-2 mr-2 dropdown-toggle btn btn-{{ $btn }}">
                    @if ($page->status==0)
                    Pending
                    @elseif($page->status==1)
                    Active
                    @elseif($page->status==2)
                    Dective
                    @elseif($page->status==3)
                    Block
                    @endif
                  </button>
                  <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-xl dropdown-menu"
                    x-placement="top-start"
                    style="position: absolute; transform: translate3d(0px, -362px, 0px); top: 0px; left: 0px; will-change: transform;min-width: 9rem;">
                    <ul class="nav flex-column">
                      <li class="nav-item">
                        <a href="{{ route('managefanpage-status',['id'=>$page->id,'status'=>0]) }}"
                          class="nav-link">Pending
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{ route('managefanpage-status',['id'=>$page->id,'status'=>1]) }}"
                          class="nav-link">Active
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{ route('managefanpage-status',['id'=>$page->id,'status'=>2]) }}"
                          class="nav-link">DeActive
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{ route('managefanpage-status',['id'=>$page->id,'status'=>3]) }}"
                          class="nav-link">Block</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </td>
              <td>
                <div class="dropdown d-inline-block">
                  <button type="button" aria-haspopup="true" aria-expanded="false" data-bs-toggle="dropdown"
                    class="mb-2 mr-2 dropdown-toggle btn btn-light">Action
                  </button>
                  <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-xl dropdown-menu" style="min-width: 9rem;">
                    <ul class="nav flex-column">
                      <li class="nav-item">
                        <a href="{{ route('manage-fanpage.edit',$page->id) }}" class="nav-link">
                          <i class="nav-link-icon pe-7s-chat"> </i><span>Edit</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="javascript:void(0);" class="nav-link" type="button" onclick="delete_service(this);"
                          data-id="{{ route('manage-fanpage.destroy',$page->id) }}">
                          <i class="nav-link-icon pe-7s-wallet"> </i><span>Delete</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </td>
          </tr>
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
