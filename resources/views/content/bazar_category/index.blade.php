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

{{-- Nav TAb --}}
<div class="d-flex justify-content-between">
    <div>
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Category/Subcatgory</span>
        </h4>
    </div>
    <div class="">
        @can('bazar.create')
        <button class="btn btn-primary  mr-2" data-bs-toggle="modal" data-bs-target="#createbazarcategoryModal">Add Category</button>
        <button class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#createbazarsubcategoryModal">Add SubCategory</button>
        @endcan
    </div>
</div>


<!-- Category Model -->
<div class="modal fade" id="createbazarcategoryModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel3">Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('bazar-category.store') }}">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameLarge" class="form-label">Name</label>
                            <input type="text" id="nameLarge" class="form-control" placeholder="Enter Name" name="bazar_category">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!--  Create Sub Category Model -->
<div class="modal fade" id="createbazarsubcategoryModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel3">Sub Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('bazar-subcategory.store') }}">
                @csrf
            <div class="modal-body">
                <div class="row">
                        <div class="col-12 mb-3">
                            <label for="nameLarge" class="form-label">Category</label>
                            <select class="form-select" name="category_id">
                                <option>Select Category</option>
                                @foreach($bazar_category as $bazar)
                                <option value="{{ $bazar->id }}">{{ $bazar->name ?? '' }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col mb-3">
                            <label for="nameLarge" class="form-label">Name</label>
                            <input type="text" id="nameLarge" class="form-control" placeholder="Enter Name" name="name">
                        </div>
                        <div class="col-12 mb-3">
                            <label for="city" class="form-label">City</label>
                            <input type="text" class="form-control" name="city" placeholder="City" />
                        </div>
                        <div class="col-12 mb-3">
                            <label for="state" class="form-label">State</label>
                            <input type="text" class="form-control" name="state" placeholder="State" />
                        </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">create</button>
            </div>
        </form>

        </div>
    </div>
</div>


<!-- Basic Bootstrap Table -->
<div class="card">
    <h5 class="card-header">Category List</h5>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Category Name</th>
                    <th>SubCategory Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach($bazar_category as $bazar)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $bazar->name ?? '' }}</td>
                    <td>
                        @php
                        $subcategory = DB::table('sub_category_bazars')->where('category_id' , $bazar->id)->first();
                        @endphp
                        @can('bazar.read')
                        <span><button class="btn text-primary" data-bs-toggle="modal" data-bs-target="#checkfullsubcategory{{ $bazar->id }}"> {{ $subcategory->name ?? ''  }}</button> </span>
                        @endcan
                        <!--  Create Sub Category Model -->
                        <div class="modal fade" id="checkfullsubcategory{{ $bazar->id }}" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel3">Sub Category</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <table class="table">
                                                <thead>
                                                    <th>Category Name</th>
                                                    <th>Actions</th>
                                                </thead>
                                                <tbody>
                                                    @foreach($bazar->bazarsubcategory as $b)
                                                    <tr>
                                                        <td>{{ $b->name ?? '' }}</td>
                                                        <td>
                                                            @can('bazar.write')
                                                                <span data-bs-toggle="modal" data-bs-target="#editbazarsubcategoryModal{{ $bazar->id }}{{ $b->id }}" data-bs-dismiss="modal">
                                                                    <button class="btn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit"><i class="bx bx-edit"></i></button>
                                                                </span>
                                                                @section ('modals')
                                                                    @parent
                                                                    <!-- Category Model -->
                                                                    <div class="modal fade" id="editbazarsubcategoryModal{{ $bazar->id }}{{ $b->id }}" tabindex="-1" aria-hidden="true">
                                                                            <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h5 class="modal-title" id="exampleModalLabel3">Subcategory</h5>
                                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                    </div>
                                                                                    <form method="POST" action="{{ route('bazar-subcategory.update', $b->id) }}">
                                                                                        @csrf
                                                                                        @method('put')
                                                                                        <div class="modal-body">
                                                                                            <div class="row">
                                                                                                <div class="col-12 mb-3">
                                                                                                    <label for="nameLarge" class="form-label">Category</label>
                                                                                                    <select class="form-select" name="category_id">
                                                                                                        <option>Select Category</option>
                                                                                                        @foreach($bazar_category as $bazar)
                                                                                                        <option value="{{ $bazar->id }}" {{ $bazar->id == $b->category_id? 'selected': '' }}>{{ $bazar->name ?? '' }}</option>
                                                                                                        @endforeach
                                                                                                    </select>
                                                                                                </div>
                                                                                                <div class="col mb-3">
                                                                                                    <label for="nameLarge" class="form-label">Name</label>
                                                                                                    <input type="text" id="nameLarge" class="form-control" placeholder="Enter Name" name="name" value="{{ $b->name }}">
                                                                                                </div>
                                                                                                <div class="col-12 mb-3">
                                                                                                    <label for="city" class="form-label">City</label>
                                                                                                    <input type="text" class="form-control" name="city" placeholder="City" value="{{ $b->city }}" />
                                                                                                </div>
                                                                                                <div class="col-12 mb-3">
                                                                                                    <label for="state" class="form-label">State</label>
                                                                                                    <input type="text" class="form-control" name="state" placeholder="State" value="{{ $b->state }}" />
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="modal-footer">
                                                                                            <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                                                                                            <button type="submit" class="btn btn-primary">update</button>
                                                                                        </div>
                                                                                    </form>


                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endsection
                                                            @endcan

                                                            <form action="{{ route('bazar-subcategory.destroy', $b->id) }}" onsubmit="confirmAction(event, () => event.target.submit())" method="post" class="d-inline">
                                                                @method('DELETE')
                                                                @csrf
                                                                @can('bazar.delete')
                                                                <button class="btn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Remove"><i class="bx bx-trash"></i></button>
                                                                @endcan
                                                            </form>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </td>


                    <td>

                        <div class="d-flex justify-content-start align-items-center">
                            @can('bazar.write')
                            <span data-bs-toggle="modal" data-bs-target="#editbazarcategoryModal{{ $bazar->id }}">
                                <button class="btn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit"><i class="bx bx-edit"></i></button>
                            </span>
                            @endcan

                            <form action="{{ route('bazar-category.destroy', $bazar->id) }}" onsubmit="confirmAction(event, () => event.target.submit())" method="post" class="d-inline">
                                @method('DELETE')
                                @csrf
                                @can('bazar.delete')
                                <button class="btn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Remove"><i class="bx bx-trash"></i></button>
                                @endcan

                            </form>
                        </div>

                        <!-- Category Model -->
                        <div class="modal fade" id="editbazarcategoryModal{{ $bazar->id }}" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel3">Category</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form method="POST" action="{{ route('bazar-category.update',$bazar->id) }}">
                                        @csrf
                                        @method('put')
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col mb-3">
                                                    <label for="nameLarge" class="form-label">Name</label>
                                                    <input type="text" id="nameLarge" class="form-control" placeholder="Enter Name" name="bazar_category" value="{{ $bazar->name ?? '' }}">
                                                    @error('bazar_category')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">update</button>
                                        </div>
                                    </form>


                                </div>
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

@yield('modals')

<script>
    function delete_service(el) {
        let link = $(el).data('id');
        $('.deleted-modal').modal('show');
        $('#delete_form').attr('action', link);
    }

</script>
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
