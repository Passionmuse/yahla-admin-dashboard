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

@section('content')
<div class="d-flex justify-content-between">
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">Voting /</span> Category
    </h4>
</div>

<!-- Basic Bootstrap Table -->
<div class="card">
    <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="m-0">Category List</h5>
        @can('voting.create')
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newscategorymodel"><i class="bx bx-plus me-0 me-sm-1"></i> Add Category</button>
        @endcan
    </div>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Category</th>
            <th>Category Image</th>
            <th>Option</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
        @forelse($vote_category as $vote)
        <tr>
            <td>{{ $vote->id }}</td>
            <td>{{ $vote->name ?? '' }}</td>
            <td><img src="{{ asset('VotingCategory'.'/'.$vote->image) }}" width="100px"></td>
            <td>
                <div class="dropdown d-inline-block">
                    <!-- Edit -->
                    @can('voting.write')
                    <span data-bs-toggle="modal" data-bs-target="#editvotingcategoryModal{{ $vote->id }}">
                        <button class="btn btn-sm btn-icon" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit">
                            <i class="bx bx-edit"></i>
                        </button>
                    </span>
                    @endcan

                    <!-- Delete -->
                    <form action="{{ route('vote-category.destroy',$vote->id) }}" onsubmit="confirmAction(event, () => event.target.submit())" method="post" class="d-inline">
                        @method('DELETE')
                        @csrf
                        @can('voting.delete')
                        <button type="submit" class="btn btn-sm btn-icon" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Remove"><i class="bx bx-trash me-1"></i></button>
                        @endcan
                    </form>

                    {{--<button type="button" aria-haspopup="true" aria-expanded="false" data-bs-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-light">Action
                    </button>
                    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-xl dropdown-menu" style="min-width: 9rem;">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <button class="btn" data-bs-toggle="modal" data-bs-target="#editvotingcategoryModal{{ $vote->id }}">Edit</button>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0);" class="nav-link" type="button" onclick="delete_service(this);" data-id="{{ route('vote-category.destroy',$vote->id) }}">
                                    <i class="nav-link-icon pe-7s-wallet"> </i><span>Delete</span>
                                </a>
                            </li>
                        </ul>
                    </div>--}}
                </div>
                {{-- Edit Category Voting Model --}}
                <div class="modal fade" id="editvotingcategoryModal{{ $vote->id }}" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel3"> Edit Category</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <form method="POST" action="{{ route('vote-category.update',$vote->id) }}" enctype="multipart/form-data">
                                        @csrf
                                        @method('put')
                                        <div class="col mb-3">
                                            <label for="nameLarge" class="form-label">Category Name</label>
                                            <input type="text" id="nameLarge" class="form-control" placeholder="Category Name" name="vote_category" value="{{ $vote->name ?? '' }}">
                                        </div>
                                        <br>
                                        <div class="col mb-3">
                                             <label for="nameLarge" class="form-label">Category Image</label>
                                            <input type="file" id="nameLarge" class="form-control vote_category_image" data-default-file="{{ asset('VotingCategory'.'/'.$vote->image) }}" name="vote_category_image">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </div>
                                    </form>
                                </div>
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

  <!-- Vote category  Model -->
<div class="modal fade" id="newscategorymodel" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel3">Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <form id="createCatForm" method="POST" action="{{ route('vote-category.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="col mb-3">
                            <label for="nameLarge" class="form-label">Category Name</label>
                            <input type="text" id="nameLarge" class="form-control" placeholder="Category Name" name="vote_category">
                        </div>
                        <div class="col mb-3">
                            <label for="nameLarge" class="form-label">Category Image</label>
                            <input type="file" id="history_category_image" class="form-control vote_category_image"  name="vote_category_image">
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" form="createCatForm">Create</button>
            </div>
        </div>
    </div>
</div>

@endsection

@section('page-script')
<script>
$('.vote_category_image').dropify();
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
