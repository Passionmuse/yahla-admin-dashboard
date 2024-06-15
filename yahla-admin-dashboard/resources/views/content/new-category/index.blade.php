@extends('layouts/layoutMaster')

@section('title', 'News - Categories')

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
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">News /</span> Add Category
    </h4>
</div>

<!-- Category Model -->
<div class="modal fade" id="createnewscategoryModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel3">Add Category</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <form method="POST" id="addForm" action="{{ route('news-category.store') }}">
                        @csrf
                        <div class="col mb-3">
                            <label for="nameLarge" class="form-label">Category Name</label>
                            <input type="text" id="nameLarge" class="form-control" placeholder="Category Name" name="news_category">
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" form="addForm">Create</button>
            </div>
        </div>
    </div>
</div>

<!-- Basic Bootstrap Table -->
<div class="card">
    <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="m-0">Category List</h5>
        @can('news.create')
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createnewscategoryModal"><i class="bx bx-plus me-0 me-sm-1"></i> Add Category</button>
        @endcan
    </div>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Category</th>
            <th>Option</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
        @forelse($news_category as $news)
            <tr>
                <td>{{ $news->id }}</td>
                <td>{{ $news->name ?? '' }}</td>
                <td>
                    <div class="dropdown d-inline-block">
                        <!-- Edit -->
                        @can('news.write')
                        <span data-bs-toggle="modal" data-bs-target="#editnewscategoryModal{{ $news->id }}">
                            <button class="btn btn-sm btn-icon" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit" aria-describedby="tooltip408529">
                                <i class="bx bx-edit"></i>
                            </button>
                            @endcan
                        </span>

                        <!-- Delete -->
                        <form action="{{ route('news-category.destroy',$news->id) }}" onsubmit="confirmAction(event, () => event.target.submit())" method="post" class="d-inline">
                            @method ('DELETE')
                            @csrf
                            @can('news.delete')
                            <button type="submit" class="btn btn-sm btn-icon" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Remove"><i class="bx bx-trash me-1"></i></button>
                            @endcan
                        </form>

                        {{--<button type="button" aria-haspopup="true" aria-expanded="false" data-bs-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-light">Action
                        </button>
                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-xl dropdown-menu" style="min-width: 9rem;">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <button class="btn" data-bs-toggle="modal" data-bs-target="#editnewscategoryModal{{ $news->id }}">edit</button>

                                </li>
                                <li class="nav-item">
                                    <a href="javascript:void(0);" class="nav-link" type="button" onclick="delete_service(this);" data-id="{{ route('news-category.destroy',$news->id) }}">
                                        <i class="nav-link-icon pe-7s-wallet"> </i><span>Delete</span>
                                    </a>
                                </li>
                            </ul>
                        </div>--}}
                    </div>

                    <!-- Category Model -->
                    <div class="modal fade" id="editnewscategoryModal{{ $news->id }}" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="exampleModalLabel3">Edit Category</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <form id="editForm{{ $news->id }}" method="POST" action="{{ route('news-category.update',$news->id) }}" enctype="multipart/form-data">
                                            @csrf
                                            @method('put')
                                            <div class="row">
                                                <div class="col-lg-12 mx-auto">
                                                    <div class="row g-3">
                                                        <div class="col-md-12">
                                                            <label class="form-label" for="fullname">Category Name</label>
                                                            <input type="text" id="fullname" class="form-control" placeholder="Category Name" name="news_category" value="{{ $news->name ?? '' }}">
                                                            @error('news_category')
                                                            <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" form="editForm{{ $news->id }}">Update</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </td>
            </tr>
        @empty
        <tr>
            <td class="text-center" colspan="8"><b>No Category found.<b></td>
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