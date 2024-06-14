@extends('layouts/layoutMaster')

@section('title', 'Boxicons - Icons')

@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-icons.css')}}" />
@endsection

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/animate-css/animate.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.css')}}" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/dropify@0.2.2/dist/css/dropify.min.css">
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/dropify@0.2.2/dist/js/dropify.min.js"></script>
@endsection
s
@section('content')
<div class="d-flex justify-content-between">
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">History /</span> Add Category
    </h4>
</div>
<style>
    .dropify-wrapper .dropify-message span.file-icon {
        line-height: 57px;
    }
</style>
<!-- Category Model -->
<div class="modal fade" id="createhistorycategoryModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel3">Add Category</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <form id="createForm" method="POST" action="{{ route('history-category.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="col mb-3">
                            <label for="nameLarge" class="form-label">Category Name</label>
                            <input type="text" id="nameLarge" class="form-control" placeholder="Category Name" name="history_category">
                        </div>
                        <div class="col mb-3">
                            <label for="nameLarge" class="form-label">Category Image</label>
                            <input type="file" id="history_category_image" class="form-control history_category_image" placeholder="Category Name" name="history_category_image">
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" form="createForm" class="btn btn-primary">Create</button>
            </div>
        </div>
    </div>
</div>

<!-- Basic Bootstrap Table -->
<div class="card">
    <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="m-0">Category List</h5>
        @can('history.create')
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createhistorycategoryModal"><i class="bx bx-plus me-0 me-sm-1"></i> Add Category</button>
        @endcan
    </div>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Category Image</th>
            <th>Category</th>
            <th>Option</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
        @forelse($history_category as $history)
        <tr>
            <td>{{ $history->id }}</td>
            <td><img src="{{ asset('historyCategory'.'/'.$history->image) }}" width="100px"></td>
            <td>{{ $history->name ?? '' }}</td>
            <td>
                <div class="dropdown d-inline-block">
                    @can('history.write')
                    <!-- Edit -->
                    <span data-bs-toggle="modal" data-bs-target="#edithistorycategoryModal{{ $history->id }}">
                        <button class="btn btn-sm btn-icon" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit">
                            <i class="bx bx-edit"></i>
                        </button>
                        @endcan
                    </span>

                    <!-- Delete -->
                    <form action="{{ route('history-category.destroy',$history->id) }}" onsubmit="confirmAction(event, () => event.target.submit())" method="post" class="d-inline">
                        @method('DELETE')
                        @csrf
                        @can('history.delete')
                        <button type="submit" class="btn btn-sm btn-icon" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Remove"><i class="bx bx-trash me-1"></i></button>
                        @endcan
                    </form>

                    {{--<button type="button" aria-haspopup="true" aria-expanded="false" data-bs-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-light">Action
                    </button>
                    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-xl dropdown-menu" style="min-width: 9rem;">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <button class="btn" data-bs-toggle="modal" data-bs-target="#edithistorycategoryModal">Edit</button>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0);" class="nav-link" type="button" onclick="delete_service(this);" data-id="{{ route('history-category.destroy',$history->id) }}">
                                    <i class="nav-link-icon pe-7s-wallet"> </i><span>Delete</span>
                                </a>
                            </li>
                        </ul>
                    </div>--}}
                </div>
                <!-- Edit History Category Model -->
                <div class="modal fade" id="edithistorycategoryModal{{ $history->id }}" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="exampleModalLabel3">Edit Category</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <form id="updateForm{{ $history->id }}" method="POST" action="{{ route('history-category.update',$history->id) }}" enctype="multipart/form-data">
                                        @csrf
                                        @method('put')
                                        <label class="form-label" for="fullname{{ $history->id }}">Category Name</label>
                                        <input type="text" id="fullname{{ $history->id }}" class="form-control" placeholder="Jang" name="history_category" value="{{ $history->name ?? '' }}">
                                        @error('history_category')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <br>
                                        <div class="col mb-3">
                                             <label for="nameLarge" class="form-label">Category Image</label>
                                            <input type="file" id="nameLarge" class="form-control history_category_image" data-default-file="{{ asset('historyCategory'.'/'.$history->image) }}" name="history_category_image">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" form="updateForm{{ $history->id }}" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </div>
                </div>

            </td>
        </tr>
        @empty
          <tr>
            <td class="text-center" colspan="8"><b>No category found.<b></td>
          </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
  <!--/ Basic Bootstrap Table -->

<div class="modal fade deleted-modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="padding-right: 17px;" aria-modal="true">
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
    function delete_service(el) {
        let link = $(el).data('id');
        $('.deleted-modal').modal('show');
        $('#delete_form').attr('action', link);
    }

</script>
@endsection

@section('page-script')
<script>
$('.history_category_image').dropify();
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