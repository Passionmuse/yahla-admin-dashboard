@extends('layouts/layoutMaster')

@section('title', 'Boxicons - Icons')

@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-icons.css')}}" />
@endsection
@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/flatpickr/flatpickr.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/tagify/tagify.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/animate-css/animate.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/flatpickr/flatpickr.js')}}"></script>
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/tagify/tagify.js')}}"></script>
<script src="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.js')}}"></script>
@endsection
@section('content')
<div class="d-flex justify-content-between">
    <div>
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Movie /</span> All Movie Category
        </h4>
    </div>
    <div class="">
        @can('movies.create')
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createmoviecategoryModal">Add Category</button>
        @endcan
    </div>
</div>

{{-- Add Categroy modal --}}
<div class="modal fade" id="createmoviecategoryModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCenterTitle">Add Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('upload-movies-category.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameLarge" class="form-label">Name</label>
                            <input type="text" id="nameLarge" class="form-control" placeholder="Enter Name" name="movie_category">
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Basic Bootstrap Table -->
<div class="card">
    <h5 class="card-header">List of Movie Category</h5>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Category Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @if(count($movie_category))
                @foreach($movie_category as $movie)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $movie->category ?? '' }}</td>

                    <td>
                        <div class="d-flex justify-content-start align-items-center">
                            @can('movies.write')
                            <span data-bs-toggle="modal" data-bs-target="#editmoviecategoryModal{{ $movie->id }}">
                                <button class="btn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit"><i class="bx bx-edit"></i></button>
                                @endcan
                            </span>

                            <form action="{{ route('upload-movies-category.destroy', $movie->id) }}" onsubmit="confirmAction(event, () => event.target.submit())" method="post" class="d-inline">
                                @method('DELETE')
                                @csrf
                                @can('movies.delete')
                                <button type="submit" class="btn btn-sm btn-icon" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Remove"><i class="bx bx-trash me-1"></i></button>
                                @endcan
                            </form>
                        </div>


                        <!-- Category Model -->
                        <div class="modal fade" id="editmoviecategoryModal{{ $movie->id }}" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel3">Category</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" action="{{ route('upload-movies-category.update',$movie->id) }}">
                                            @csrf
                                            @method('put')
                                            <div class="row">
                                                <div class="col mb-3">
                                                    <label for="nameLarge" class="form-label">Name</label>
                                                    <input type="text" id="nameLarge" class="form-control" placeholder="Enter Name" name="movie_category" value={{ $movie->category ?? '' }}>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td class="text-center" colspan="8">No Music Category found.</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
<!--/ Basic Bootstrap Table -->

@section('page-script')
<script>
    function confirmAction(event, callback) {
        event.preventDefault();
        Swal.fire({
            title: 'Are you sure?'
            , text: "Are you sure you want to delete this?"
            , icon: 'warning'
            , showCancelButton: true
            , confirmButtonText: 'Yes, delete it!'
            , customClass: {
                confirmButton: 'btn btn-danger me-3'
                , cancelButton: 'btn btn-label-secondary'
            }
            , buttonsStyling: false
        }).then(function(result) {
            if (result.value) {
                callback();
            }
        });
    }

</script>
@endsection
@endsection
