@extends('layouts/layoutMaster')

@section('title', 'Boxicons - Icons')

@section('page-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-icons.css') }}" />
@endsection

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/tagify/tagify.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/animate-css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/dropzone/dropzone.css') }}" />
    <link href="
https://cdn.jsdelivr.net/npm/dropify@0.2.2/dist/css/dropify.min.css
" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}">

@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/tagify/tagify.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>
    <script src="
    https://cdn.jsdelivr.net/npm/dropify@0.2.2/dist/js/dropify.min.js
    "></script>
    <script src="{{ asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
@endsection

@section('content')

@php
$subcategories = \App\Models\SubCategoryDepartment::with('country')->get();

 @endphp

<div class="container-xxl flex-grow-1 container-p-y">

    <div class="card-header d-flex align-items-center px-2 justify-content-between">
        <h4 class="fw-bold py-3 mb-4">
            Categories
        </h4>
        <div>
            {{-- <a href="javascript:void(0)" class="btn btn-primary add-button" data-bs-toggle="modal"
                data-bs-target="#addCategory">Add Category</a> --}}
            <a href="javascript:void(0)" class="btn btn-primary add-button" data-bs-toggle="modal"
                data-bs-target="#addSubcategory">Add SubCategory</a>
        </div>
    </div>
    <div style="padding:20px" class="card">
        <table class="table border-top dataTable no-footer" id="DataTables_Table_0"
            aria-describedby="DataTables_Table_0_info">
            <thead>
                <tr>
                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                        aria-label="#: activate to sort column ascending" style="width: 59.375px;">#</th>
                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                        aria-label="Category Name: activate to sort column ascending" style="width: 262.891px;">Country
                        Name</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                        aria-label="Category Name: activate to sort column ascending" style="width: 262.891px;">Department
                        Name</th>
                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                        aria-label="Category Thumbnail: activate to sort column ascending" style="width: 341.359px;">
                        Country Thumbnail</th>
                       
                    <th class="sorting sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                        colspan="1" aria-label="Option: activate to sort column descending" style="width: 154.016px;"
                        aria-sort="ascending">Option</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($subcategories as $category)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $category->country->name }}</td>
                        <td>{{ $category->name }}</td>
                        <td><img style="border-radius: 100%; height: 43px; width: 43px;"
                                src="{{ asset($category->thumbnail) }}" alt="Category Thumbnail"></td>
                         
                        <td>
                            <a href="javascript:void(0)" class="btn btn-sm btn-icon editbtn" data-id="{{ $category->id }}" data-name="{{ $category->name }}" data-country-id="{{ $category->country->id }}" data-thumbnail="{{ asset($category->thumbnail) }}" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit"><i class="bx bx-edit me-1"></i></a>
  
                            <form action="{{ route('categories123.destroy', $category->id) }}" onsubmit="confirmAction(event, () => event.target.submit())" method="post" class="d-inline">    
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-icon deletebtn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Remove"><i class="bx bx-trash me-1"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    
    <!-- Edit SubCategory Modal -->
    <div class="modal fade" id="editSubCategory" tabindex="-10" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-title"><span class="modal-title-span">Edit</span> Subcategory</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="editSubCategoryForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="row">
                            <div class="col mb-3">
                                <label for="editSubCategoryName" class="form-label">Subcategory Name</label>
                                <input type="text" id="editSubCategoryName" name="name" class="form-control" placeholder="Enter Subcategory Name" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="editSubCategoryParent" class="form-label">Select Country</label>
                                <select name="country_id" id="editSubCategoryParent" class="form-control" required>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col mb-0">
                                <label for="editSubCategoryThumbnail" class="form-label">Subcategory Thumbnail</label>
                                <input type="file" id="editSubCategoryThumbnail" name="thumbnail" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>

    <!-- Add Subcategory Modal -->
    <div class="modal fade" id="addSubcategory" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-title"><span class="modal-title-span">Edit</span> Subcategory</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('subcategory.store') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col mb-3">
                                <label for="category_id" class="form-label">Select Country</label>
                                <select id="category_id" name="country_id" class="form-control" required>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="name" class="form-label"> Department Name</label>
                                <input type="text" id="name" name="name" class="form-control"
                                    placeholder="Enter Department Name" required>
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col mb-0">
                                <label for="thumbnail" class="form-label">Thumbnail</label>
                                <input type="file" id="thumbnail" name="thumbnail" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    

 
</div>
<script>
    $(document).on('click', '.editbtn', function() {
        var subCategoryId = $(this).data('id');
        var subCategoryName = $(this).data('name');
        var subCategoryCountry = $(this).data('country-id');
        var subCategoryThumbnail = $(this).data('thumbnail');

        $('#editSubCategoryForm').attr('action', '/subcategories/' + subCategoryId);
        $('#editSubCategoryName').val(subCategoryName);
        $('#editSubCategoryParent').val(subCategoryCountry);
        // Handle thumbnail preview if needed
        // $('#thumbnailPreview').attr('src', subCategoryThumbnail);

        $('#editSubCategory').modal('show');
    });
</script>

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
        }).then(function(result) {
            if (result.value) {
                callback();
            }
        });
    }

    
</script>

@endsection
 
