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
<link rel="stylesheet" href="{{asset('assets/vendor/libs/dropzone/dropzone.css')}}" />
<link href="
https://cdn.jsdelivr.net/npm/dropify@0.2.2/dist/css/dropify.min.css
" rel="stylesheet">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}">

@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/flatpickr/flatpickr.js')}}"></script>
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/tagify/tagify.js')}}"></script>
<script src="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.js')}}"></script>
<script src="
https://cdn.jsdelivr.net/npm/dropify@0.2.2/dist/js/dropify.min.js
">

</script>
<script src="{{asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>
@endsection


@section('content')

<div class="container-xxl flex-grow-1 container-p-y">

    <div class="card-header d-flex align-items-center px-2 justify-content-between">
        <h4 class="fw-bold py-3 mb-4">
            Categories
        </h4>
        <div>
            <a href="javascript:void(0)" class="btn btn-primary add-button" data-bs-toggle="modal"
                data-bs-target="#addCategory">Add Category</a>
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
                        aria-label="Category Name: activate to sort column ascending" style="width: 262.891px;">Category
                        Name</th>
                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                        aria-label="Category Thumbnail: activate to sort column ascending" style="width: 341.359px;">
                        Category Thumbnail</th>
                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                        aria-label="Total Subcategories: activate to sort column ascending" style="width: 348.359px;">
                        Total Subcategories</th>
                    <th class="sorting sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                        colspan="1" aria-label="Option: activate to sort column descending" style="width: 154.016px;"
                        aria-sort="ascending">Option</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $index => $categorie)
                    <tr class="{{$index % 2 == 0 ? "even" : "odd"}}" category-index="{{$categorie->id}}">
                        <td class="">{{$index + 1}}</td>
                        <td>{{$categorie->name}}</td>
                        <td><img style="border-radius: 100%;  height: 43px; width: 43px;"
                                src="{{asset('uploads/' . $categorie->image)}}" alt="Category Thumbnail"></td>
                        <td class="form-check-label" onclick="getSubCatagories(12)" data-bs-toggle="modal"
                            data-bs-target="#editSubCategoryModal">{{$categorie->children()->count()}}</td>

                        <td class="sorting_1">
                            <a href="javascript:;" class="btn btn-sm btn-icon item-edit edit-button" data-bs-toggle="modal"
                                data-bs-target="#editCategoryModal" ><i
                                    class="bx bxs-edit"></i></a>

                            <!--ssa-->
                            <button type="submit" class="btn btn-sm btn-icon delete" data-bs-toggle="tooltip"
                                data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true"
                                data-bs-original-title="Remove"><i class="bx bx-trash me-1"></i></button>
                            <!--ssa-->
                        </td>
                    </tr>
                @endforeach
            </tbody> 
        </table>
    </div>



    <!-- Add Category Modal -->
    <div class="modal fade" id="addCategory" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-title"><span class="modal-title-span">Add</span> Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{route('manage_categories.store')}}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col mb-3">
                                <label for="nameWithTitle" class="form-label">Category Name</label>
                                <input type="text" id="nameWithTitle" name="name" class="form-control"
                                    placeholder="Enter Category Name" required>
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col mb-0">
                                <label for="image" class="form-label">Thumbnail</label>
                                <input type="file" id="image" name="image" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Edit Category Modal -->
    <div class="modal fade" id="editCategoryModal" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-title"><span class="modal-title-span">Edit</span> Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="editCategoryForm" enctype="multipart/form-data" method="POST"
                    action="/serviceportal/manage_categories/">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="row">
                            <div class="col mb-3">
                                <label for="nameWithTitle" class="form-label">Category Name</label>
                                <input type="text" id="editCategoryName" required name="name" class="form-control"
                                    placeholder="Enter Category Name">
                                <input type="image" name="catid" id="catid" value="">
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col mb-0">
                                <label for="image" class="form-label">Thumbnail</label>
                                <input type="file" id="image" name="image" class="form-control">
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


    <div class="modal fade" id="deleteCategoryModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-title"><span class="modal-title-span">Edit</span> Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="deleteCategoryForm" enctype="multipart/form-data" method="POST">
                    <input type="hidden" name="_token" value="yBXbrpL8jJ2w4HfrArx7J27WfXUMitWn9xZZF07T"> <input
                        type="hidden" name="_method" value="Delete">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col mb-3">
                                <label for="nameWithTitle" class="form-label">Do you really want to delete this
                                    category?</label>
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


    <!-- SubCategory Modal -->
    <div class="modal fade" id="addSubcategory" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-title"><span class="modal-title-span">Edit</span> Subcategory</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="https://tacir.yekbun.net/online-shop/category" method="POST"
                    enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="yBXbrpL8jJ2w4HfrArx7J27WfXUMitWn9xZZF07T">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col mb-3">
                                <label for="nameWithTitle" class="form-label">Subcategory Name</label>
                                <input type="text" id="nameWithTitle" name="name" class="form-control"
                                    placeholder="Enter Subcategory Name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="nameWithTitle" class="form-label">Select Category</label>
                                <select name="parent_category" id="" required class="form-control">
                                    <option value="">Select Category</option>
                                    @foreach ($categories as $categorie)
                                        <option value="{{$categorie->_id}}">{{$categorie->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col mb-0">
                                <label for="emailWithTitle" class="form-label">Subcategory Thumbnail</label>
                                <input type="file" id="emailWithTitle" name="thumbnail" class="form-control">
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

    <!-- Edit SubCategory Modal -->
    <div class="modal fade" id="editSubCategory" tabindex="-10" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-title"><span class="modal-title-span">Edit</span> Subcategory</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="editSubCategoryForm" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="yBXbrpL8jJ2w4HfrArx7J27WfXUMitWn9xZZF07T"> <input
                        type="hidden" name="_method" value="PUT">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col mb-3">
                                <label for="nameWithTitle" class="form-label">Subcategory Name</label>
                                <input type="text" id="editSubCategoryName" name="name" class="form-control"
                                    placeholder="Enter Subcategory Name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="nameWithTitle" class="form-label">Select Category</label>
                                <select name="parent_category" id="editSubCategoryParent" class="form-control"
                                    required="">
                                    <option value="">Select Category</option>
                                    <option value="12">Mobiles</option>
                                </select>
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col mb-0">
                                <label for="emailWithTitle" class="form-label">Subcategory Thumbnail</label>
                                <input type="file" id="emailWithTitle" name="thumbnail" class="form-control">
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



    <!-- SubCategories Modal -->
    <div class="modal fade" id="sub-categories" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered modal-sub-categories">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel3">Subcategories</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-datatable table-responsive">

                            <div id="subCategoryTable_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="dataTables_length" id="subCategoryTable_length"><label>Show <select
                                                    name="subCategoryTable_length" aria-controls="subCategoryTable"
                                                    class="form-select form-select-sm">
                                                    <option value="10">10</option>
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                </select> entries</label></div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div id="subCategoryTable_filter" class="dataTables_filter"><label>Search:<input
                                                    type="search" class="form-control form-control-sm" placeholder=""
                                                    aria-controls="subCategoryTable"></label></div>
                                    </div>
                                </div>
                                <div class="row dt-row">
                                    <div class="col-sm-12">
                                        <table id="subCategoryTable" class="table border-top no-footer dataTable"
                                            aria-describedby="subCategoryTable_info" style="">
                                            <thead>
                                                <tr>
                                                    <th class="sorting sorting_asc" tabindex="0"
                                                        aria-controls="subCategoryTable" rowspan="1" colspan="1"
                                                        aria-label="#: activate to sort column descending"
                                                        style="width: 0px;" aria-sort="ascending">#</th>
                                                    <th class="sorting" tabindex="0" aria-controls="subCategoryTable"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Category Name: activate to sort column ascending"
                                                        style="width: 0px;">Category Name</th>
                                                    <th class="sorting" tabindex="0" aria-controls="subCategoryTable"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Subcategory: activate to sort column ascending"
                                                        style="width: 0px;">Subcategory</th>
                                                    <th class="sorting" tabindex="0" aria-controls="subCategoryTable"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Subcategory Thumbnail: activate to sort column ascending"
                                                        style="width: 0px;">Subcategory Thumbnail</th>
                                                    <th class="sorting" tabindex="0" aria-controls="subCategoryTable"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Option: activate to sort column ascending"
                                                        style="width: 0px;">Option</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="odd">
                                                    <td valign="top" colspan="5" class="dataTables_empty">No data
                                                        available in table</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-5">
                                        <div class="dataTables_info" id="subCategoryTable_info" role="status"
                                            aria-live="polite">Showing 0 to 0 of 0 entries</div>
                                    </div>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="dataTables_paginate paging_simple_numbers"
                                            id="subCategoryTable_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button page-item previous disabled"
                                                    id="subCategoryTable_previous"><a href="#"
                                                        aria-controls="subCategoryTable" data-dt-idx="previous"
                                                        tabindex="0" class="page-link">Previous</a></li>
                                                <li class="paginate_button page-item next disabled"
                                                    id="subCategoryTable_next"><a href="#"
                                                        aria-controls="subCategoryTable" data-dt-idx="next" tabindex="0"
                                                        class="page-link">Next</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ SubCategories Modal -->

    <!--ssss-->
    <div class="modal fade" id="editSubCategoryModal" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered modal-sub-categories">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel3">Subcategories</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-datatable table-responsive">

                            <div id="subCategoryTable_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="dataTables_length" id="subCategoryTable_length"><label>Show <select
                                                    name="subCategoryTable_length" aria-controls="subCategoryTable"
                                                    class="form-select form-select-sm">
                                                    <option value="10">10</option>
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                </select> entries</label></div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div id="subCategoryTable_filter" class="dataTables_filter"><label>Search:<input
                                                    type="search" class="form-control form-control-sm" placeholder=""
                                                    aria-controls="subCategoryTable"></label></div>
                                    </div>
                                </div>
                                <div class="row dt-row">
                                    <div class="col-sm-12">
                                        <table id="subCategoryTable" class="table border-top no-footer dataTable"
                                            aria-describedby="subCategoryTable_info" style="">
                                            <thead>
                                                <tr>
                                                    <th class="sorting sorting_asc" tabindex="0"
                                                        aria-controls="subCategoryTable" rowspan="1" colspan="1"
                                                        aria-label="#: activate to sort column descending"
                                                        style="width: 0px;" aria-sort="ascending">#</th>
                                                    <th class="sorting" tabindex="0" aria-controls="subCategoryTable"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Category Name: activate to sort column ascending"
                                                        style="width: 0px;">Category Name</th>
                                                    <th class="sorting" tabindex="0" aria-controls="subCategoryTable"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Subcategory: activate to sort column ascending"
                                                        style="width: 0px;">Subcategory</th>
                                                    <th class="sorting" tabindex="0" aria-controls="subCategoryTable"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Subcategory Thumbnail: activate to sort column ascending"
                                                        style="width: 0px;">Subcategory Thumbnail</th>
                                                    <th class="sorting" tabindex="0" aria-controls="subCategoryTable"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Option: activate to sort column ascending"
                                                        style="width: 0px;">Option</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="odd">
                                                    <td valign="top" colspan="5" class="dataTables_empty">No data
                                                        available in table</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-5">
                                        <div class="dataTables_info" id="subCategoryTable_info" role="status"
                                            aria-live="polite">Showing 0 to 0 of 0 entries</div>
                                    </div>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="dataTables_paginate paging_simple_numbers"
                                            id="subCategoryTable_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button page-item previous disabled"
                                                    id="subCategoryTable_previous"><a href="#"
                                                        aria-controls="subCategoryTable" data-dt-idx="previous"
                                                        tabindex="0" class="page-link">Previous</a></li>
                                                <li class="paginate_button page-item next disabled"
                                                    id="subCategoryTable_next"><a href="#"
                                                        aria-controls="subCategoryTable" data-dt-idx="next" tabindex="0"
                                                        class="page-link">Next</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--sss-->

    <!-- pricingModal -->

    <!--/ pricingModal -->

</div>

<!--dasdas-->





@section('page-script')
<script>
    $('#DataTables_Table_0').DataTable();
</script>

<script src="/js/service-portal/manage-category.js" type="text/javascript"></script>

<!-- <script>
    $('.delete').click(function () {
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
        }).then(function (result) {
            if (result.value) {
                callback();
            }
        });
    })



</script> -->
@endsection
@endsection