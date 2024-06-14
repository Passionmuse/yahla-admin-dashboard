@extends('layouts/layoutMaster')

@section('title', 'Event - List')

@section('page-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-icons.css') }}" />
@endsection

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css')}}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bs-stepper/bs-stepper.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/tagify/tagify.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/animate-css/animate.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/dropzone/dropzone.css') }}" />
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>
    <script src="{{ asset('assets/js/wizard-ex-property-listing.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/bs-stepper/bs-stepper.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/tagify/tagify.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>
    <script src="{{asset('assets/js/app-ecommerce-product-list.js')}}"></script>
@endsection

@section('content')

    <div class="content-wrapper">

        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">

            <h4 class="py-3 mb-4">
                <span class="text-muted fw-light">Event /</span> Manage List
            </h4>

            <!-- Product List Widget -->

            <div class="card mb-4">
                <div class="card-widget-separator-wrapper">
                    <div class="card-body card-widget-separator">
                        <div class="row gy-4 gy-sm-1">
                            <div class="col-sm-6 col-lg-3">
                                <div
                                    class="d-flex justify-content-between align-items-start card-widget-1 border-end pb-3 pb-sm-0">
                                    <div>
                                        <h6 class="mb-2">In-store Sales</h6>
                                        <h4 class="mb-2">$5,345.43</h4>
                                        <p class="mb-0"><span class="text-muted me-2">5k orders</span><span
                                                class="badge bg-label-success">+5.7%</span></p>
                                    </div>
                                    <div class="avatar me-sm-4">
                                        <span class="avatar-initial rounded bg-label-secondary">
                                            <i class="bx bx-store-alt bx-sm"></i>
                                        </span>
                                    </div>
                                </div>
                                <hr class="d-none d-sm-block d-lg-none me-4">
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div
                                    class="d-flex justify-content-between align-items-start card-widget-2 border-end pb-3 pb-sm-0">
                                    <div>
                                        <h6 class="mb-2">Website Sales</h6>
                                        <h4 class="mb-2">$674,347.12</h4>
                                        <p class="mb-0"><span class="text-muted me-2">21k orders</span><span
                                                class="badge bg-label-success">+12.4%</span></p>
                                    </div>
                                    <div class="avatar me-lg-4">
                                        <span class="avatar-initial rounded bg-label-secondary">
                                            <i class="bx bx-laptop bx-sm"></i>
                                        </span>
                                    </div>
                                </div>
                                <hr class="d-none d-sm-block d-lg-none">
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div
                                    class="d-flex justify-content-between align-items-start border-end pb-3 pb-sm-0 card-widget-3">
                                    <div>
                                        <h6 class="mb-2">Discount</h6>
                                        <h4 class="mb-2">$14,235.12</h4>
                                        <p class="mb-0 text-muted">6k orders</p>
                                    </div>
                                    <div class="avatar me-sm-4">
                                        <span class="avatar-initial rounded bg-label-secondary">
                                            <i class="bx bx-gift bx-sm"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <h6 class="mb-2">Affiliate</h6>
                                        <h4 class="mb-2">$8,345.23</h4>
                                        <p class="mb-0"><span class="text-muted me-2">150 orders</span><span
                                                class="badge bg-label-danger">-3.5%</span></p>
                                    </div>
                                    <div class="avatar">
                                        <span class="avatar-initial rounded bg-label-secondary">
                                            <i class="bx bx-wallet bx-sm"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product List Table -->
            <!--<div class="card">-->
            <!--    <div class="card-header">-->
            <!--        <h5 class="card-title">Filter</h5>-->
            <!--        <div class="d-flex justify-content-between align-items-center row py-3 gap-3 gap-md-0">-->
            <!--            <div class="col-md-4 product_status"><select id="ProductStatus" class="form-select text-capitalize">-->
            <!--                    <option value="">Status</option>-->
            <!--                    <option value="Scheduled">Scheduled</option>-->
            <!--                    <option value="Publish">Publish</option>-->
            <!--                    <option value="Inactive">Inactive</option>-->
            <!--                </select></div>-->
            <!--            <div class="col-md-4 product_category"><select id="ProductCategory"-->
            <!--                    class="form-select text-capitalize">-->
            <!--                    <option value="">Category</option>-->
            <!--                    <option value="Household">Household</option>-->
            <!--                    <option value="Office">Office</option>-->
            <!--                    <option value="Electronics">Electronics</option>-->
            <!--                    <option value="Shoes">Shoes</option>-->
            <!--                    <option value="Accessories">Accessories</option>-->
            <!--                    <option value="Game">Game</option>-->
            <!--                </select></div>-->
            <!--            <div class="col-md-4 product_stock"><select id="ProductStock" class="form-select text-capitalize">-->
            <!--                    <option value=""> Stock </option>-->
            <!--                    <option value="Out_of_Stock">Out of Stock</option>-->
            <!--                    <option value="In_Stock">In Stock</option>-->
            <!--                </select></div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--    <div class="card-datatable table-responsive">-->
            <!--        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">-->
            <!--            <div class="card-header d-flex border-top rounded-0 flex-wrap py-md-0">-->
            <!--                <div class="me-5 ms-n2 pe-5">-->
            <!--                    <div id="DataTables_Table_0_filter" class="dataTables_filter"><label><input type="search"-->
            <!--                                class="form-control" placeholder="Search Product"-->
            <!--                                aria-controls="DataTables_Table_0"></label></div>-->
            <!--                </div>-->
            <!--                <div class="d-flex justify-content-start justify-content-md-end align-items-baseline">-->
            <!--                    <div-->
            <!--                        class="dt-action-buttons d-flex align-items-start align-items-md-center justify-content-sm-center mb-3 mb-sm-0">-->
            <!--                        <div class="dataTables_length mt-0 mt-md-3 me-3" id="DataTables_Table_0_length">-->
            <!--                            <label><select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0"-->
            <!--                                    class="form-select">-->
            <!--                                    <option value="7">7</option>-->
            <!--                                    <option value="10">10</option>-->
            <!--                                    <option value="20">20</option>-->
            <!--                                    <option value="50">50</option>-->
            <!--                                    <option value="70">70</option>-->
            <!--                                    <option value="100">100</option>-->
            <!--                                </select></label></div>-->
            <!--                        <div class="dt-buttons d-flex flex-wrap"> <button-->
            <!--                                class="dt-button buttons-collection dropdown-toggle btn btn-label-secondary me-3"-->
            <!--                                tabindex="0" aria-controls="DataTables_Table_0" type="button"-->
            <!--                                aria-haspopup="dialog" aria-expanded="false"><span><i-->
            <!--                                        class="bx bx-export me-1"></i>Export</span><span-->
            <!--                                    class="dt-down-arrow">▼</span></button> <button-->
            <!--                                class="dt-button add-new btn btn-primary" tabindex="0"-->
            <!--                                aria-controls="DataTables_Table_0" type="button"><span><i-->
            <!--                                        class="bx bx-plus me-0 me-sm-1"></i><span-->
            <!--                                        class="d-none d-sm-inline-block">Add Product</span></span></button>-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--            <table class="datatables-products table border-top dataTable no-footer dtr-column collapsed"-->
            <!--                id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info" style="width: 1131px;">-->
            <!--                <thead>-->
            <!--                    <tr>-->
            <!--                        <th class="control sorting_disabled" rowspan="1" colspan="1"-->
            <!--                            style="width: 5px;" aria-label=""></th>-->
            <!--                        <th class="sorting_disabled dt-checkboxes-cell dt-checkboxes-select-all"-->
            <!--                            rowspan="1" colspan="1" style="width: 18px;" data-col="1"-->
            <!--                            aria-label=""><input type="checkbox" class="form-check-input"></th>-->
            <!--                        <th class="sorting sorting_asc" tabindex="0" aria-controls="DataTables_Table_0"-->
            <!--                            rowspan="1" colspan="1" style="width: 411px;"-->
            <!--                            aria-label="product: activate to sort column descending" aria-sort="ascending">-->
            <!--                            product</th>-->
            <!--                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"-->
            <!--                            colspan="1" style="width: 128px;"-->
            <!--                            aria-label="category: activate to sort column ascending">category</th>-->
            <!--                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 55px;"-->
            <!--                            aria-label="stock">stock</th>-->
            <!--                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"-->
            <!--                            colspan="1" style="width: 46px;"-->
            <!--                            aria-label="sku: activate to sort column ascending">sku</th>-->
            <!--                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"-->
            <!--                            colspan="1" style="width: 75px;"-->
            <!--                            aria-label="price: activate to sort column ascending">price</th>-->
            <!--                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"-->
            <!--                            colspan="1" style="width: 35px;"-->
            <!--                            aria-label="qty: activate to sort column ascending">qty</th>-->
            <!--                        <th class="sorting dtr-hidden" tabindex="0" aria-controls="DataTables_Table_0"-->
            <!--                            rowspan="1" colspan="1" style="width: 0px; display: none;"-->
            <!--                            aria-label="status: activate to sort column ascending">status</th>-->
            <!--                        <th class="sorting_disabled dtr-hidden" rowspan="1" colspan="1"-->
            <!--                            style="width: 0px; display: none;" aria-label="Actions">Actions</th>-->
            <!--                    </tr>-->
            <!--                </thead>-->
            <!--                <tbody>-->
            <!--                    <tr class="odd">-->
            <!--                        <td class="control" tabindex="0" style=""></td>-->
            <!--                        <td class="  dt-checkboxes-cell"><input type="checkbox"-->
            <!--                                class="dt-checkboxes form-check-input"></td>-->
            <!--                        <td class="sorting_1">-->
            <!--                            <div class="d-flex justify-content-start align-items-center product-name">-->
            <!--                                <div class="avatar-wrapper">-->
            <!--                                    <div class="avatar avatar me-2 rounded-2 bg-label-secondary"><img-->
            <!--                                            src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/ecommerce-images/product-9.png"-->
            <!--                                            alt="Product-9" class="rounded-2"></div>-->
            <!--                                </div>-->
            <!--                                <div class="d-flex flex-column">-->
            <!--                                    <h6 class="text-body text-nowrap mb-0">Air Jordan</h6><small-->
            <!--                                        class="text-muted text-truncate d-none d-sm-block">Air Jordan is a line-->
            <!--                                        of basketball shoes produced by Nike</small>-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                        </td>-->
            <!--                        <td><span class="text-truncate d-flex align-items-center"><span-->
            <!--                                    class="avatar-sm rounded-circle d-flex justify-content-center align-items-center bg-label-info me-2"><i-->
            <!--                                        class="bx bx-walk"></i></span>Shoes</span></td>-->
            <!--                        <td><span class="text-truncate"><label class="switch switch-primary switch-sm"><input-->
            <!--                                        type="checkbox" class="switch-input" id="switch"><span-->
            <!--                                        class="switch-toggle-slider"><span-->
            <!--                                            class="switch-off"></span></span></label><span-->
            <!--                                    class="d-none">Out_of_Stock</span></span></td>-->
            <!--                        <td><span>31063</span></td>-->
            <!--                        <td><span>$125</span></td>-->
            <!--                        <td><span>942</span></td>-->
            <!--                        <td class="dtr-hidden" style="display: none;"><span class="badge bg-label-danger"-->
            <!--                                text-capitalized="">Inactive</span></td>-->
            <!--                        <td class="dtr-hidden" style="display: none;">-->
            <!--                            <div class="d-inline-block text-nowrap"><button class="btn btn-sm btn-icon"><i-->
            <!--                                        class="bx bx-edit"></i></button><button-->
            <!--                                    class="btn btn-sm btn-icon dropdown-toggle hide-arrow"-->
            <!--                                    data-bs-toggle="dropdown"><i-->
            <!--                                        class="bx bx-dots-vertical-rounded me-2"></i></button>-->
            <!--                                <div class="dropdown-menu dropdown-menu-end m-0"><a href="javascript:0;"-->
            <!--                                        class="dropdown-item">View</a><a href="javascript:0;"-->
            <!--                                        class="dropdown-item">Suspend</a></div>-->
            <!--                            </div>-->
            <!--                        </td>-->
            <!--                    </tr>-->
            <!--                    <tr class="even">-->
            <!--                        <td class="control" tabindex="0" style=""></td>-->
            <!--                        <td class="  dt-checkboxes-cell"><input type="checkbox"-->
            <!--                                class="dt-checkboxes form-check-input"></td>-->
            <!--                        <td class="sorting_1">-->
            <!--                            <div class="d-flex justify-content-start align-items-center product-name">-->
            <!--                                <div class="avatar-wrapper">-->
            <!--                                    <div class="avatar avatar me-2 rounded-2 bg-label-secondary"><img-->
            <!--                                            src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/ecommerce-images/product-13.png"-->
            <!--                                            alt="Product-13" class="rounded-2"></div>-->
            <!--                                </div>-->
            <!--                                <div class="d-flex flex-column">-->
            <!--                                    <h6 class="text-body text-nowrap mb-0">Amazon Fire TV</h6><small-->
            <!--                                        class="text-muted text-truncate d-none d-sm-block">4K UHD smart TV,-->
            <!--                                        stream live TV without cable</small>-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                        </td>-->
            <!--                        <td><span class="text-truncate d-flex align-items-center"><span-->
            <!--                                    class="avatar-sm rounded-circle d-flex justify-content-center align-items-center bg-label-primary me-2"><i-->
            <!--                                        class="bx bx-mobile-alt"></i></span>Electronics</span></td>-->
            <!--                        <td><span class="text-truncate"><label class="switch switch-primary switch-sm"><input-->
            <!--                                        type="checkbox" class="switch-input" id="switch"><span-->
            <!--                                        class="switch-toggle-slider"><span-->
            <!--                                            class="switch-off"></span></span></label><span-->
            <!--                                    class="d-none">Out_of_Stock</span></span></td>-->
            <!--                        <td><span>5829</span></td>-->
            <!--                        <td><span>$263.49</span></td>-->
            <!--                        <td><span>587</span></td>-->
            <!--                        <td class="dtr-hidden" style="display: none;"><span class="badge bg-label-warning"-->
            <!--                                text-capitalized="">Scheduled</span></td>-->
            <!--                        <td class="dtr-hidden" style="display: none;">-->
            <!--                            <div class="d-inline-block text-nowrap"><button class="btn btn-sm btn-icon"><i-->
            <!--                                        class="bx bx-edit"></i></button><button-->
            <!--                                    class="btn btn-sm btn-icon dropdown-toggle hide-arrow"-->
            <!--                                    data-bs-toggle="dropdown"><i-->
            <!--                                        class="bx bx-dots-vertical-rounded me-2"></i></button>-->
            <!--                                <div class="dropdown-menu dropdown-menu-end m-0"><a href="javascript:0;"-->
            <!--                                        class="dropdown-item">View</a><a href="javascript:0;"-->
            <!--                                        class="dropdown-item">Suspend</a></div>-->
            <!--                            </div>-->
            <!--                        </td>-->
            <!--                    </tr>-->
            <!--                    <tr class="odd">-->
            <!--                        <td class="control" tabindex="0" style=""></td>-->
            <!--                        <td class="  dt-checkboxes-cell"><input type="checkbox"-->
            <!--                                class="dt-checkboxes form-check-input"></td>-->
            <!--                        <td class="sorting_1">-->
            <!--                            <div class="d-flex justify-content-start align-items-center product-name">-->
            <!--                                <div class="avatar-wrapper">-->
            <!--                                    <div class="avatar avatar me-2 rounded-2 bg-label-secondary"><img-->
            <!--                                            src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/ecommerce-images/product-15.png"-->
            <!--                                            alt="Product-15" class="rounded-2"></div>-->
            <!--                                </div>-->
            <!--                                <div class="d-flex flex-column">-->
            <!--                                    <h6 class="text-body text-nowrap mb-0">Apple iPad</h6><small-->
            <!--                                        class="text-muted text-truncate d-none d-sm-block">10.2-inch Retina-->
            <!--                                        Display, 64GB</small>-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                        </td>-->
            <!--                        <td><span class="text-truncate d-flex align-items-center"><span-->
            <!--                                    class="avatar-sm rounded-circle d-flex justify-content-center align-items-center bg-label-primary me-2"><i-->
            <!--                                        class="bx bx-mobile-alt"></i></span>Electronics</span></td>-->
            <!--                        <td><span class="text-truncate"><label class="switch switch-primary switch-sm"><input-->
            <!--                                        type="checkbox" class="switch-input" checked=""><span-->
            <!--                                        class="switch-toggle-slider"><span-->
            <!--                                            class="switch-on"></span></span></label><span-->
            <!--                                    class="d-none">In_Stock</span></span></td>-->
            <!--                        <td><span>35946</span></td>-->
            <!--                        <td><span>$248.39</span></td>-->
            <!--                        <td><span>468</span></td>-->
            <!--                        <td class="dtr-hidden" style="display: none;"><span class="badge bg-label-success"-->
            <!--                                text-capitalized="">Publish</span></td>-->
            <!--                        <td class="dtr-hidden" style="display: none;">-->
            <!--                            <div class="d-inline-block text-nowrap"><button class="btn btn-sm btn-icon"><i-->
            <!--                                        class="bx bx-edit"></i></button><button-->
            <!--                                    class="btn btn-sm btn-icon dropdown-toggle hide-arrow"-->
            <!--                                    data-bs-toggle="dropdown"><i-->
            <!--                                        class="bx bx-dots-vertical-rounded me-2"></i></button>-->
            <!--                                <div class="dropdown-menu dropdown-menu-end m-0"><a href="javascript:0;"-->
            <!--                                        class="dropdown-item">View</a><a href="javascript:0;"-->
            <!--                                        class="dropdown-item">Suspend</a></div>-->
            <!--                            </div>-->
            <!--                        </td>-->
            <!--                    </tr>-->
            <!--                    <tr class="even">-->
            <!--                        <td class="control" tabindex="0" style=""></td>-->
            <!--                        <td class="  dt-checkboxes-cell"><input type="checkbox"-->
            <!--                                class="dt-checkboxes form-check-input"></td>-->
            <!--                        <td class="sorting_1">-->
            <!--                            <div class="d-flex justify-content-start align-items-center product-name">-->
            <!--                                <div class="avatar-wrapper">-->
            <!--                                    <div class="avatar avatar me-2 rounded-2 bg-label-secondary"><img-->
            <!--                                            src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/ecommerce-images/product-5.png"-->
            <!--                                            alt="Product-5" class="rounded-2"></div>-->
            <!--                                </div>-->
            <!--                                <div class="d-flex flex-column">-->
            <!--                                    <h6 class="text-body text-nowrap mb-0">Apple Watch Series 7</h6><small-->
            <!--                                        class="text-muted text-truncate d-none d-sm-block">Starlight Aluminum-->
            <!--                                        Case with Starlight Sport Band.</small>-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                        </td>-->
            <!--                        <td><span class="text-truncate d-flex align-items-center"><span-->
            <!--                                    class="avatar-sm rounded-circle d-flex justify-content-center align-items-center bg-label-secondary me-2"><i-->
            <!--                                        class="bx bxs-watch"></i></span>Accessories</span></td>-->
            <!--                        <td><span class="text-truncate"><label class="switch switch-primary switch-sm"><input-->
            <!--                                        type="checkbox" class="switch-input" id="switch"><span-->
            <!--                                        class="switch-toggle-slider"><span-->
            <!--                                            class="switch-off"></span></span></label><span-->
            <!--                                    class="d-none">Out_of_Stock</span></span></td>-->
            <!--                        <td><span>46658</span></td>-->
            <!--                        <td><span>$799</span></td>-->
            <!--                        <td><span>851</span></td>-->
            <!--                        <td class="dtr-hidden" style="display: none;"><span class="badge bg-label-warning"-->
            <!--                                text-capitalized="">Scheduled</span></td>-->
            <!--                        <td class="dtr-hidden" style="display: none;">-->
            <!--                            <div class="d-inline-block text-nowrap"><button class="btn btn-sm btn-icon"><i-->
            <!--                                        class="bx bx-edit"></i></button><button-->
            <!--                                    class="btn btn-sm btn-icon dropdown-toggle hide-arrow"-->
            <!--                                    data-bs-toggle="dropdown"><i-->
            <!--                                        class="bx bx-dots-vertical-rounded me-2"></i></button>-->
            <!--                                <div class="dropdown-menu dropdown-menu-end m-0"><a href="javascript:0;"-->
            <!--                                        class="dropdown-item">View</a><a href="javascript:0;"-->
            <!--                                        class="dropdown-item">Suspend</a></div>-->
            <!--                            </div>-->
            <!--                        </td>-->
            <!--                    </tr>-->
            <!--                    <tr class="odd">-->
            <!--                        <td class="control" tabindex="0" style=""></td>-->
            <!--                        <td class="  dt-checkboxes-cell"><input type="checkbox"-->
            <!--                                class="dt-checkboxes form-check-input"></td>-->
            <!--                        <td class="sorting_1">-->
            <!--                            <div class="d-flex justify-content-start align-items-center product-name">-->
            <!--                                <div class="avatar-wrapper">-->
            <!--                                    <div class="avatar avatar me-2 rounded-2 bg-label-secondary"><img-->
            <!--                                            src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/ecommerce-images/product-16.png"-->
            <!--                                            alt="Product-16" class="rounded-2"></div>-->
            <!--                                </div>-->
            <!--                                <div class="d-flex flex-column">-->
            <!--                                    <h6 class="text-body text-nowrap mb-0">BANGE Anti Theft Backpack</h6><small-->
            <!--                                        class="text-muted text-truncate d-none d-sm-block">Smart Business-->
            <!--                                        Laptop Fits 15.6 Inch Notebook</small>-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                        </td>-->
            <!--                        <td><span class="text-truncate d-flex align-items-center"><span-->
            <!--                                    class="avatar-sm rounded-circle d-flex justify-content-center align-items-center bg-label-secondary me-2"><i-->
            <!--                                        class="bx bxs-watch"></i></span>Accessories</span></td>-->
            <!--                        <td><span class="text-truncate"><label class="switch switch-primary switch-sm"><input-->
            <!--                                        type="checkbox" class="switch-input" checked=""><span-->
            <!--                                        class="switch-toggle-slider"><span-->
            <!--                                            class="switch-on"></span></span></label><span-->
            <!--                                    class="d-none">In_Stock</span></span></td>-->
            <!--                        <td><span>41867</span></td>-->
            <!--                        <td><span>$79.99</span></td>-->
            <!--                        <td><span>519</span></td>-->
            <!--                        <td class="dtr-hidden" style="display: none;"><span class="badge bg-label-danger"-->
            <!--                                text-capitalized="">Inactive</span></td>-->
            <!--                        <td class="dtr-hidden" style="display: none;">-->
            <!--                            <div class="d-inline-block text-nowrap"><button class="btn btn-sm btn-icon"><i-->
            <!--                                        class="bx bx-edit"></i></button><button-->
            <!--                                    class="btn btn-sm btn-icon dropdown-toggle hide-arrow"-->
            <!--                                    data-bs-toggle="dropdown"><i-->
            <!--                                        class="bx bx-dots-vertical-rounded me-2"></i></button>-->
            <!--                                <div class="dropdown-menu dropdown-menu-end m-0"><a href="javascript:0;"-->
            <!--                                        class="dropdown-item">View</a><a href="javascript:0;"-->
            <!--                                        class="dropdown-item">Suspend</a></div>-->
            <!--                            </div>-->
            <!--                        </td>-->
            <!--                    </tr>-->
            <!--                    <tr class="even">-->
            <!--                        <td class="control" tabindex="0" style=""></td>-->
            <!--                        <td class="  dt-checkboxes-cell"><input type="checkbox"-->
            <!--                                class="dt-checkboxes form-check-input"></td>-->
            <!--                        <td class="sorting_1">-->
            <!--                            <div class="d-flex justify-content-start align-items-center product-name">-->
            <!--                                <div class="avatar-wrapper">-->
            <!--                                    <div class="avatar avatar me-2 rounded-2 bg-label-secondary"><img-->
            <!--                                            src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/ecommerce-images/product-18.png"-->
            <!--                                            alt="Product-18" class="rounded-2"></div>-->
            <!--                                </div>-->
            <!--                                <div class="d-flex flex-column">-->
            <!--                                    <h6 class="text-body text-nowrap mb-0">Canon EOS Rebel T7</h6><small-->
            <!--                                        class="text-muted text-truncate d-none d-sm-block">18-55mm Lens |-->
            <!--                                        Built-in Wi-Fi | 24.1 MP CMOS Sensor</small>-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                        </td>-->
            <!--                        <td><span class="text-truncate d-flex align-items-center"><span-->
            <!--                                    class="avatar-sm rounded-circle d-flex justify-content-center align-items-center bg-label-primary me-2"><i-->
            <!--                                        class="bx bx-mobile-alt"></i></span>Electronics</span></td>-->
            <!--                        <td><span class="text-truncate"><label class="switch switch-primary switch-sm"><input-->
            <!--                                        type="checkbox" class="switch-input" checked=""><span-->
            <!--                                        class="switch-toggle-slider"><span-->
            <!--                                            class="switch-on"></span></span></label><span-->
            <!--                                    class="d-none">In_Stock</span></span></td>-->
            <!--                        <td><span>63474</span></td>-->
            <!--                        <td><span>$399</span></td>-->
            <!--                        <td><span>810</span></td>-->
            <!--                        <td class="dtr-hidden" style="display: none;"><span class="badge bg-label-warning"-->
            <!--                                text-capitalized="">Scheduled</span></td>-->
            <!--                        <td class="dtr-hidden" style="display: none;">-->
            <!--                            <div class="d-inline-block text-nowrap"><button class="btn btn-sm btn-icon"><i-->
            <!--                                        class="bx bx-edit"></i></button><button-->
            <!--                                    class="btn btn-sm btn-icon dropdown-toggle hide-arrow"-->
            <!--                                    data-bs-toggle="dropdown"><i-->
            <!--                                        class="bx bx-dots-vertical-rounded me-2"></i></button>-->
            <!--                                <div class="dropdown-menu dropdown-menu-end m-0"><a href="javascript:0;"-->
            <!--                                        class="dropdown-item">View</a><a href="javascript:0;"-->
            <!--                                        class="dropdown-item">Suspend</a></div>-->
            <!--                            </div>-->
            <!--                        </td>-->
            <!--                    </tr>-->
            <!--                    <tr class="odd">-->
            <!--                        <td class="control" tabindex="0" style=""></td>-->
            <!--                        <td class="  dt-checkboxes-cell"><input type="checkbox"-->
            <!--                                class="dt-checkboxes form-check-input"></td>-->
            <!--                        <td class="sorting_1">-->
            <!--                            <div class="d-flex justify-content-start align-items-center product-name">-->
            <!--                                <div class="avatar-wrapper">-->
            <!--                                    <div class="avatar avatar me-2 rounded-2 bg-label-secondary"><img-->
            <!--                                            src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/ecommerce-images/product-3.png"-->
            <!--                                            alt="Product-3" class="rounded-2"></div>-->
            <!--                                </div>-->
            <!--                                <div class="d-flex flex-column">-->
            <!--                                    <h6 class="text-body text-nowrap mb-0">Dohioue Wall Clock</h6><small-->
            <!--                                        class="text-muted text-truncate d-none d-sm-block">Modern 10 Inch-->
            <!--                                        Battery Operated Wall Clocks</small>-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                        </td>-->
            <!--                        <td><span class="text-truncate d-flex align-items-center"><span-->
            <!--                                    class="avatar-sm rounded-circle d-flex justify-content-center align-items-center bg-label-warning me-2"><i-->
            <!--                                        class="bx bx-home-alt"></i></span>Household</span></td>-->
            <!--                        <td><span class="text-truncate"><label class="switch switch-primary switch-sm"><input-->
            <!--                                        type="checkbox" class="switch-input" id="switch"><span-->
            <!--                                        class="switch-toggle-slider"><span-->
            <!--                                            class="switch-off"></span></span></label><span-->
            <!--                                    class="d-none">Out_of_Stock</span></span></td>-->
            <!--                        <td><span>29540</span></td>-->
            <!--                        <td><span>$16.34</span></td>-->
            <!--                        <td><span>804</span></td>-->
            <!--                        <td class="dtr-hidden" style="display: none;"><span class="badge bg-label-success"-->
            <!--                                text-capitalized="">Publish</span></td>-->
            <!--                        <td class="dtr-hidden" style="display: none;">-->
            <!--                            <div class="d-inline-block text-nowrap"><button class="btn btn-sm btn-icon"><i-->
            <!--                                        class="bx bx-edit"></i></button><button-->
            <!--                                    class="btn btn-sm btn-icon dropdown-toggle hide-arrow"-->
            <!--                                    data-bs-toggle="dropdown"><i-->
            <!--                                        class="bx bx-dots-vertical-rounded me-2"></i></button>-->
            <!--                                <div class="dropdown-menu dropdown-menu-end m-0"><a href="javascript:0;"-->
            <!--                                        class="dropdown-item">View</a><a href="javascript:0;"-->
            <!--                                        class="dropdown-item">Suspend</a></div>-->
            <!--                            </div>-->
            <!--                        </td>-->
            <!--                    </tr>-->
            <!--                </tbody>-->
            <!--            </table>-->
            <!--            <div class="row mx-2">-->
            <!--                <div class="col-sm-12 col-md-6">-->
            <!--                    <div class="dataTables_info" id="DataTables_Table_0_info" role="status"-->
            <!--                        aria-live="polite">Displaying 1 to 7 of 100 entries</div>-->
            <!--                </div>-->
            <!--                <div class="col-sm-12 col-md-6">-->
            <!--                    <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">-->
            <!--                        <ul class="pagination">-->
            <!--                            <li class="paginate_button page-item previous disabled"-->
            <!--                                id="DataTables_Table_0_previous"><a aria-controls="DataTables_Table_0"-->
            <!--                                    aria-disabled="true" role="link" data-dt-idx="previous"-->
            <!--                                    tabindex="0" class="page-link">Previous</a></li>-->
            <!--                            <li class="paginate_button page-item active"><a href="#"-->
            <!--                                    aria-controls="DataTables_Table_0" role="link" aria-current="page"-->
            <!--                                    data-dt-idx="0" tabindex="0" class="page-link">1</a></li>-->
            <!--                            <li class="paginate_button page-item "><a href="#"-->
            <!--                                    aria-controls="DataTables_Table_0" role="link" data-dt-idx="1"-->
            <!--                                    tabindex="0" class="page-link">2</a></li>-->
            <!--                            <li class="paginate_button page-item "><a href="#"-->
            <!--                                    aria-controls="DataTables_Table_0" role="link" data-dt-idx="2"-->
            <!--                                    tabindex="0" class="page-link">3</a></li>-->
            <!--                            <li class="paginate_button page-item "><a href="#"-->
            <!--                                    aria-controls="DataTables_Table_0" role="link" data-dt-idx="3"-->
            <!--                                    tabindex="0" class="page-link">4</a></li>-->
            <!--                            <li class="paginate_button page-item "><a href="#"-->
            <!--                                    aria-controls="DataTables_Table_0" role="link" data-dt-idx="4"-->
            <!--                                    tabindex="0" class="page-link">5</a></li>-->
            <!--                            <li class="paginate_button page-item disabled" id="DataTables_Table_0_ellipsis"><a-->
            <!--                                    aria-controls="DataTables_Table_0" aria-disabled="true" role="link"-->
            <!--                                    data-dt-idx="ellipsis" tabindex="0" class="page-link">…</a></li>-->
            <!--                            <li class="paginate_button page-item "><a href="#"-->
            <!--                                    aria-controls="DataTables_Table_0" role="link" data-dt-idx="14"-->
            <!--                                    tabindex="0" class="page-link">15</a></li>-->
            <!--                            <li class="paginate_button page-item next" id="DataTables_Table_0_next"><a-->
            <!--                                    href="#" aria-controls="DataTables_Table_0" role="link"-->
            <!--                                    data-dt-idx="next" tabindex="0" class="page-link">Next</a></li>-->
            <!--                        </ul>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
    <!--        <div class="card">-->
    <!-- <ul class="nav nav-tabs nav-fill" role="tablist">-->
    <!--  <li class="nav-item" role="presentation">-->
    <!--    <a type="button" class="nav-link active" href="?view=new_request" aria-selected="true"><i class="tf-icons bx bxs-edit me-1"></i> Active Events</a>-->
    <!--    <div class="tab--selected tab__slider"></div>-->
    <!--  </li>-->
    <!--  <li class="nav-item" role="presentation">-->
    <!--    <a type="button" class="nav-link " href="?view=request_on_hold" aria-selected="false" tabindex="-1"><i class="tf-icons bx bxs-edit me-1"></i> Blocked Events</a>-->
    <!--    <div class=" tab__slider"></div>-->
    <!--  </li>-->
      <!--<li class="nav-item" role="presentation">-->
      <!--  <a type="button" class="nav-link " href="?view=rejected_request" aria-selected="false" tabindex="-1"><i class="tf-icons bx bx-block me-1"></i> Rejected Request</a>-->
      <!--  <div class=" tab__slider"></div>-->
      <!--</li>-->
    <!--</ul>-->
    <!--   <ul class="nav nav-tabs nav-fill" role="tablist">-->
    <!--  <li class="nav-item" role="presentation">-->
    <!--    <a type="button" class="nav-link {{ $view === 'new_request'? 'active': '' }}" href="?view=new_request" aria-selected="true"><i class="tf-icons bx bxs-edit me-1"></i> Active Events</a>-->
    <!--    <div class="{{ $view === 'new_request'? 'tab--selected': '' }} tab__slider"></div>-->
    <!--  </li>-->
    <!--  <li class="nav-item" role="presentation">-->
    <!--    <a type="button" class="nav-link {{ $view === 'request_on_hold'? 'active': '' }}" href="?view=request_on_hold" aria-selected="false" tabindex="-1"><i class="tf-icons bx bxs-edit me-1"></i> Blocked Events</a>-->
    <!--    <div class="{{ $view === 'request_on_hold'? 'tab--selected': '' }} tab__slider"></div>-->
    <!--  </li>-->
      <!--<li class="nav-item" role="presentation">-->
      <!--  <a type="button" class="nav-link {{ $view === 'rejected_request'? 'active': '' }}" href="?view=rejected_request" aria-selected="false" tabindex="-1"><i class="tf-icons bx bx-block me-1"></i> Rejected Request</a>-->
      <!--  <div class="{{ $view === 'rejected_request'? 'tab--selected': '' }} tab__slider"></div>-->
      <!--</li>-->
    <!--</ul>-->
    <!--    <div class="card-datatable table-responsive">-->
    <!--        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">-->
    <!--            <div class="card-header d-flex flex-wrap py-3 justify-content-between">-->
    <!--                <div class="me-5 ms-n2 mt-3">-->
    <!--                    <div id="DataTables_Table_0_filter" class="dataTables_filter"><label><input type="search" class="form-control" placeholder="Search Order" aria-controls="DataTables_Table_0"></label></div>-->
    <!--                </div>-->
    <!--                <div class="dt-action-buttons text-xl-end text-lg-start text-md-end text-start d-flex align-items-center justify-content-md-end gap-3 gap-sm-2 flex-wrap flex-sm-nowrap pt-0">-->
    <!--                    <div class="dataTables_length mt-0 mt-md-3 me-2" id="DataTables_Table_0_length"><label><select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-select">-->
    <!--                                <option value="10">10</option>-->
    <!--                                <option value="25">25</option>-->
    <!--                                <option value="50">50</option>-->
    <!--                                <option value="100">100</option>-->
    <!--                            </select></label></div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--           <table class="table border-top" id="data-table">-->
    <!--                <thead>-->
    <!--                    <tr>-->
    <!--                        <th class="control sorting_disabled dtr-hidden" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-label=""></th>-->
    <!--                        <th class="sorting_disabled dt-checkboxes-cell dt-checkboxes-select-all" rowspan="1" colspan="1" style="width: 18px;" data-col="1" aria-label=""><input type="checkbox" class="form-check-input"></th>-->
    <!--                        <th class="text-nowrap sorting sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 132px;" aria-label="Customer Id: activate to sort column descending" aria-sort="ascending">-->
    <!--                            User Id</th>-->
    <!--                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 280px;" aria-label="Customer: activate to sort column ascending">User-->
    <!--                        </th>-->
    <!--                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 225px;" aria-label="Country: activate to sort column ascending">Country-->
    <!--                        </th>-->
    <!--                        <th>Event Title</th>-->
    <!--                        <th>Event Type</th>-->
    <!--                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 225px;" aria-label="Country: activate to sort column ascending">Option-->
    <!--                        </th>-->
    <!--                    </tr>-->
    <!--                </thead>-->
    <!--                <tbody>-->
    <!--                    <tr class="odd">-->
    <!--                        <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>-->
    <!--                        <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>-->
    <!--                        <td class="sorting_1"><span class="fw-medium text-heading">#100696</span></td>-->
    <!--                        <td class="">-->
    <!--                            <div class="d-flex justify-content-start align-items-center customer-name">-->
    <!--                                <div class="avatar-wrapper">-->
    <!--                                    <div class="avatar me-2"><span class="avatar-initial rounded-circle bg-label-warning">RC</span></div>-->
    <!--                                </div>-->
    <!--                                <div class="d-flex flex-column"><a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/customer/details/overview"><span class="fw-medium">Rochell Cockill</span></a><small class="text-muted">rcockill1q@irs.gov</small></div>-->
    <!--                            </div>-->
    <!--                        </td>-->
    <!--                        <td>-->
    <!--                            <div class="d-flex justify-content-start align-items-center customer-country">-->
    <!--                                <div><i class="fis fi fi-id rounded-circle me-2 fs-3"></i></div>-->
    <!--                                <div><span>Indonesia</span></div>-->
    <!--                            </div>-->
    <!--                        </td>-->
    <!--                          <td></td>-->
    <!--                          <td></td>-->
    <!--                        <td>-->
                                <!--<button type="button" class="btn p-1 accept"><i class="bx bx-check"></i></button>-->
                                <!--<button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestDenied"><i class="bx bx-x"></i></button>-->
    <!--                            <button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestView"><i class="bx bx-block"></i></button>-->
    <!--                        <a href="#"><button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestpopup"><i class="bx bx-show"></i></button></a> -->
    <!--                          </td>-->
    <!--                    </tr>-->
    <!--                    <tr class="even">-->
    <!--                        <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>-->
    <!--                        <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>-->
    <!--                        <td class="sorting_1"><span class="fw-medium text-heading">#123210</span></td>-->
    <!--                        <td class="">-->
    <!--                            <div class="d-flex justify-content-start align-items-center customer-name">-->
    <!--                                <div class="avatar-wrapper">-->
    <!--                                    <div class="avatar me-2"><img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/16.png" alt="Avatar" class="rounded-circle"></div>-->
    <!--                                </div>-->
    <!--                                <div class="d-flex flex-column"><a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/customer/details/overview"><span class="fw-medium">Norri Dillinton</span></a><small class="text-muted">ndillinton1o@bbc.co.uk</small></div>-->
    <!--                            </div>-->
    <!--                        </td>-->
    <!--                        <td>-->
    <!--                            <div class="d-flex justify-content-start align-items-center customer-country">-->
    <!--                                <div><i class="fis fi fi-mk rounded-circle me-2 fs-3"></i></div>-->
    <!--                                <div><span>Macedonia</span></div>-->
    <!--                            </div>-->
    <!--                        </td>-->
    <!--                          <td></td>-->
    <!--                          <td></td>-->
    <!--                        <td>-->
                                <!--<button type="button" class="btn p-1 accept"><i class="bx bx-check"></i></button>-->
                                <!--<button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestDenied"><i class="bx bx-x"></i></button>-->
    <!--                            <button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestView"><i class="bx bx-block"></i></button>-->
    <!--                        <a href="#"><button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestpopup"><i class="bx bx-show"></i></button></a> -->
    <!--                          </td>-->
    <!--                    </tr>-->
    <!--                    <tr class="odd">-->
    <!--                        <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>-->
    <!--                        <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>-->
    <!--                        <td class="sorting_1"><span class="fw-medium text-heading">#137049</span></td>-->
    <!--                        <td class="">-->
    <!--                            <div class="d-flex justify-content-start align-items-center customer-name">-->
    <!--                                <div class="avatar-wrapper">-->
    <!--                                    <div class="avatar me-2"><img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/7.png" alt="Avatar" class="rounded-circle"></div>-->
    <!--                                </div>-->
    <!--                                <div class="d-flex flex-column"><a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/customer/details/overview"><span class="fw-medium">Maddie Witherop</span></a><small class="text-muted">mwitherops@bing.com</small></div>-->
    <!--                            </div>-->
    <!--                        </td>-->
    <!--                        <td>-->
    <!--                            <div class="d-flex justify-content-start align-items-center customer-country">-->
    <!--                                <div><i class="fis fi fi-cn rounded-circle me-2 fs-3"></i></div>-->
    <!--                                <div><span>China</span></div>-->
    <!--                            </div>-->
    <!--                        </td>-->
    <!--                          <td></td>-->
    <!--                          <td></td>-->
    <!--                        <td>-->
                                <!--<button type="button" class="btn p-1 accept"><i class="bx bx-check"></i></button>-->
                                <!--                                <button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestDenied"><i class="bx bx-x"></i></button>-->
    <!--                            <button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestView"><i class="bx bx-block"></i></button>-->
    <!--                        <a href="#"><button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestpopup"><i class="bx bx-show"></i></button></a> -->
    <!--                          </td>-->
    <!--                    </tr>-->
    <!--                    <tr class="even">-->
    <!--                        <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>-->
    <!--                        <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>-->
    <!--                        <td class="sorting_1"><span class="fw-medium text-heading">#137230</span></td>-->
    <!--                        <td class="">-->
    <!--                            <div class="d-flex justify-content-start align-items-center customer-name">-->
    <!--                                <div class="avatar-wrapper">-->
    <!--                                    <div class="avatar me-2"><span class="avatar-initial rounded-circle bg-label-primary">BT</span></div>-->
    <!--                                </div>-->
    <!--                                <div class="d-flex flex-column"><a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/customer/details/overview"><span class="fw-medium">Brooke Tegler</span></a><small class="text-muted">btegler2p@state.tx.us</small></div>-->
    <!--                            </div>-->
    <!--                        </td>-->
    <!--                        <td>-->
    <!--                            <div class="d-flex justify-content-start align-items-center customer-country">-->
    <!--                                <div><i class="fis fi fi-kp rounded-circle me-2 fs-3"></i></div>-->
    <!--                                <div><span>North Korea</span></div>-->
    <!--                            </div>-->
    <!--                        </td>-->
    <!--                          <td></td>-->
    <!--                          <td></td>-->
    <!--                        <td>-->
                                <!--<button type="button" class="btn p-1 accept"><i class="bx bx-check"></i></button>-->
                                <!--                                <button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestDenied"><i class="bx bx-x"></i></button>-->
    <!--                            <button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestView"><i class="bx bx-block"></i></button>-->
    <!--                        <a href="#"><button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestpopup"><i class="bx bx-show"></i></button></a> -->
    <!--                          </td>-->
    <!--                    </tr>-->
    <!--                    <tr class="odd">-->
    <!--                        <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>-->
    <!--                        <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>-->
    <!--                        <td class="sorting_1"><span class="fw-medium text-heading">#140146</span></td>-->
    <!--                        <td class="">-->
    <!--                            <div class="d-flex justify-content-start align-items-center customer-name">-->
    <!--                                <div class="avatar-wrapper">-->
    <!--                                    <div class="avatar me-2"><img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/13.png" alt="Avatar" class="rounded-circle"></div>-->
    <!--                                </div>-->
    <!--                                <div class="d-flex flex-column"><a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/customer/details/overview"><span class="fw-medium">Lauritz Ramble</span></a><small class="text-muted">lramble2j@discuz.net</small></div>-->
    <!--                            </div>-->
    <!--                        </td>-->
    <!--                        <td>-->
    <!--                            <div class="d-flex justify-content-start align-items-center customer-country">-->
    <!--                                <div><i class="fis fi fi-ru rounded-circle me-2 fs-3"></i></div>-->
    <!--                                <div><span>Russia</span></div>-->
    <!--                            </div>-->
    <!--                        </td>-->
    <!--                          <td></td>-->
    <!--                          <td></td>-->
    <!--                        <td>-->
                                <!--<button type="button" class="btn p-1 accept"><i class="bx bx-check"></i></button>-->
                                <!--                                <button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestDenied"><i class="bx bx-x"></i></button>-->
    <!--                           <button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestView"><i class="bx bx-block"></i></button>-->
    <!--                        <a href="#"><button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestpopup"><i class="bx bx-show"></i></button></a> -->
    <!--                          </td>-->
    <!--                    </tr>-->
    <!--                    <tr class="even">-->
    <!--                        <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>-->
    <!--                        <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>-->
    <!--                        <td class="sorting_1"><span class="fw-medium text-heading">#152193</span></td>-->
    <!--                        <td class="">-->
    <!--                            <div class="d-flex justify-content-start align-items-center customer-name">-->
    <!--                                <div class="avatar-wrapper">-->
    <!--                                    <div class="avatar me-2"><span class="avatar-initial rounded-circle bg-label-danger">ED</span></div>-->
    <!--                                </div>-->
    <!--                                <div class="d-flex flex-column"><a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/customer/details/overview"><span class="fw-medium">Elsinore Daltry</span></a><small class="text-muted">edaltry20@themeforest.net</small></div>-->
    <!--                            </div>-->
    <!--                        </td>-->
    <!--                        <td>-->
    <!--                            <div class="d-flex justify-content-start align-items-center customer-country">-->
    <!--                                <div><i class="fis fi fi-br rounded-circle me-2 fs-3"></i></div>-->
    <!--                                <div><span>Brazil</span></div>-->
    <!--                            </div>-->
    <!--                        </td>-->
    <!--                          <td></td>-->
    <!--                          <td></td>-->
    <!--                        <td>-->
                                <!--<button type="button" class="btn p-1 accept"><i class="bx bx-check"></i></button>-->
                                <!--                                <button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestDenied"><i class="bx bx-x"></i></button>-->
    <!--                            <button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestView"><i class="bx bx-block"></i></button>-->
    <!--                        <a href="#"><button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestpopup"><i class="bx bx-show"></i></button></a> -->
    <!--                          </td>-->
    <!--                    </tr>-->
    <!--                    <tr class="odd">-->
    <!--                        <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>-->
    <!--                        <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>-->
    <!--                        <td class="sorting_1"><span class="fw-medium text-heading">#155681</span></td>-->
    <!--                        <td class="">-->
    <!--                            <div class="d-flex justify-content-start align-items-center customer-name">-->
    <!--                                <div class="avatar-wrapper">-->
    <!--                                    <div class="avatar me-2"><span class="avatar-initial rounded-circle bg-label-primary">PT</span></div>-->
    <!--                                </div>-->
    <!--                                <div class="d-flex flex-column"><a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/customer/details/overview"><span class="fw-medium">Price Tremathack</span></a><small class="text-muted">ptremathackd@amazon.com</small></div>-->
    <!--                            </div>-->
    <!--                        </td>-->
    <!--                        <td>-->
    <!--                            <div class="d-flex justify-content-start align-items-center customer-country">-->
    <!--                                <div><i class="fis fi fi-ru rounded-circle me-2 fs-3"></i></div>-->
    <!--                                <div><span>Russia</span></div>-->
    <!--                            </div>-->
    <!--                        </td>-->
    <!--                          <td></td>-->
    <!--                          <td></td>-->
    <!--                        <td>-->
                                <!--<button type="button" class="btn p-1 accept"><i class="bx bx-check"></i></button>-->
                                <!--                                <button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestDenied"><i class="bx bx-x"></i></button>-->
    <!--                            <button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestView"><i class="bx bx-block"></i></button>-->
    <!--                        <a href="#"><button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestpopup"><i class="bx bx-show"></i></button></a> -->
    <!--                          </td>-->
    <!--                    </tr>-->
    <!--                    <tr class="even">-->
    <!--                        <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>-->
    <!--                        <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>-->
    <!--                        <td class="sorting_1"><span class="fw-medium text-heading">#158581</span></td>-->
    <!--                        <td class="">-->
    <!--                            <div class="d-flex justify-content-start align-items-center customer-name">-->
    <!--                                <div class="avatar-wrapper">-->
    <!--                                    <div class="avatar me-2"><img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/11.png" alt="Avatar" class="rounded-circle"></div>-->
    <!--                                </div>-->
    <!--                                <div class="d-flex flex-column"><a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/customer/details/overview"><span class="fw-medium">Michale Britton</span></a><small class="text-muted">mbritton2c@cloudflare.com</small></div>-->
    <!--                            </div>-->
    <!--                        </td>-->
    <!--                        <td>-->
    <!--                            <div class="d-flex justify-content-start align-items-center customer-country">-->
    <!--                                <div><i class="fis fi fi-cn rounded-circle me-2 fs-3"></i></div>-->
    <!--                                <div><span>China</span></div>-->
    <!--                            </div>-->
    <!--                        </td>-->
    <!--                          <td></td>-->
    <!--                          <td></td>-->
    <!--                        <td>-->
                                <!--<button type="button" class="btn p-1 accept"><i class="bx bx-check"></i></button>-->
                                <!--                                <button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestDenied"><i class="bx bx-x"></i></button>-->
    <!--                            <button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestView"><i class="bx bx-block"></i></button>-->
    <!--                        <a href="#"><button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestpopup"><i class="bx bx-show"></i></button></a> -->
    <!--                          </td>-->
    <!--                    </tr>-->
    <!--                    <tr class="odd">-->
    <!--                        <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>-->
    <!--                        <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>-->
    <!--                        <td class="sorting_1"><span class="fw-medium text-heading">#165827</span></td>-->
    <!--                        <td class="">-->
    <!--                            <div class="d-flex justify-content-start align-items-center customer-name">-->
    <!--                                <div class="avatar-wrapper">-->
    <!--                                    <div class="avatar me-2"><span class="avatar-initial rounded-circle bg-label-primary">TB</span></div>-->
    <!--                                </div>-->
    <!--                                <div class="d-flex flex-column"><a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/customer/details/overview"><span class="fw-medium">Tobin Bassick</span></a><small class="text-muted">tbassick2e@quantcast.com</small></div>-->
    <!--                            </div>-->
    <!--                        </td>-->
    <!--                        <td>-->
    <!--                            <div class="d-flex justify-content-start align-items-center customer-country">-->
    <!--                                <div><i class="fis fi fi-jo rounded-circle me-2 fs-3"></i></div>-->
    <!--                                <div><span>Jordan</span></div>-->
    <!--                            </div>-->
    <!--                        </td>-->
    <!--                          <td></td>-->
    <!--                          <td></td>-->
    <!--                        <td>-->
                                <!--<button type="button" class="btn p-1 accept"><i class="bx bx-check"></i></button>-->
                                <!--                                <button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestDenied"><i class="bx bx-x"></i></button>-->
                                
                       
                                
                                
    <!--                            <button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestView"><i class="bx bx-block"></i></button>-->
    <!--                        <a href="#"><button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestpopup"><i class="bx bx-show"></i></button></a> -->
    <!--                          </td>-->
    <!--                    </tr>-->
    <!--                    <tr class="even">-->
    <!--                        <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>-->
    <!--                        <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>-->
    <!--                        <td class="sorting_1"><span class="fw-medium text-heading">#178408</span></td>-->
    <!--                        <td class="">-->
    <!--                            <div class="d-flex justify-content-start align-items-center customer-name">-->
    <!--                                <div class="avatar-wrapper">-->
    <!--                                    <div class="avatar me-2"><span class="avatar-initial rounded-circle bg-label-dark">LD</span></div>-->
    <!--                                </div>-->
    <!--                                <div class="d-flex flex-column"><a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/customer/details/overview"><span class="fw-medium">Laurie Dax</span></a><small class="text-muted">ldax1@lycos.com</small></div>-->
    <!--                            </div>-->
    <!--                        </td>-->
    <!--                        <td>-->
    <!--                            <div class="d-flex justify-content-start align-items-center customer-country">-->
    <!--                                <div><i class="fis fi fi-ru rounded-circle me-2 fs-3"></i></div>-->
    <!--                                <div><span>Russia</span></div>-->
    <!--                            </div>-->
    <!--                        </td>-->
    <!--                          <td></td>-->
    <!--                          <td></td>-->
    <!--                        <td>-->
                                <!--<button type="button" class="btn p-1 accept"><i class="bx bx-check"></i></button>-->
                                <!--<button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestDenied"><i class="bx bx-x"></i></button>-->
    <!--                            <button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestView"><i class="bx bx-block"></i></button>-->
    <!--                        <a href="#"><button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestpopup"><i class="bx bx-show"></i></button></a> -->
    <!--                          </td>-->
    <!--                    </tr>-->
    <!--                </tbody>-->
    <!--            </table>-->
    <!--        </div>-->
    <!--    </div>-->
        <!-- Offcanvas to add new customer -->
    <!--    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEcommerceCustomerAdd" aria-labelledby="offcanvasEcommerceCustomerAddLabel">-->
    <!--        <div class="offcanvas-header">-->
    <!--            <h5 id="offcanvasEcommerceCustomerAddLabel" class="offcanvas-title">Add Customer</h5>-->
    <!--            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>-->
    <!--        </div>-->
    <!--        <div class="offcanvas-body mx-0 flex-grow-0">-->
    <!--            <form class="ecommerce-customer-add pt-0 fv-plugins-bootstrap5 fv-plugins-framework" id="eCommerceCustomerAddForm" onsubmit="return false" novalidate="novalidate">-->
    <!--                <div class="ecommerce-customer-add-basic mb-3">-->
    <!--                    <h6 class="mb-3">Basic Information</h6>-->
    <!--                    <div class="mb-3 fv-plugins-icon-container">-->
    <!--                        <label class="form-label" for="ecommerce-customer-add-name">Name*</label>-->
    <!--                        <input type="text" class="form-control" id="ecommerce-customer-add-name" placeholder="John Doe" name="customerName" aria-label="John Doe">-->
    <!--                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="mb-3 fv-plugins-icon-container">-->
    <!--                        <label class="form-label" for="ecommerce-customer-add-email">Email*</label>-->
    <!--                        <input type="text" id="ecommerce-customer-add-email" class="form-control" placeholder="john.doe@example.com" aria-label="john.doe@example.com" name="customerEmail">-->
    <!--                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div>-->
    <!--                        <label class="form-label" for="ecommerce-customer-add-contact">Mobile</label>-->
    <!--                        <input type="text" id="ecommerce-customer-add-contact" class="form-control phone-mask" placeholder="+(123) 456-7890" aria-label="+(123) 456-7890" name="customerContact">-->
    <!--                    </div>-->
    <!--                </div>-->

    <!--                <div class="ecommerce-customer-add-shiping mb-3 pt-3">-->
    <!--                    <h6 class="mb-3">Shipping Information</h6>-->
    <!--                    <div class="mb-3">-->
    <!--                        <label class="form-label" for="ecommerce-customer-add-address">Address Line 1</label>-->
    <!--                        <input type="text" id="ecommerce-customer-add-address" class="form-control" placeholder="45 Roker Terrace" aria-label="45 Roker Terrace" name="customerAddress1">-->
    <!--                    </div>-->
    <!--                    <div class="mb-3">-->
    <!--                        <label class="form-label" for="ecommerce-customer-add-address-2">Address Line 2</label>-->
    <!--                        <input type="text" id="ecommerce-customer-add-address-2" class="form-control" aria-label="address2" name="customerAddress2">-->
    <!--                    </div>-->
    <!--                    <div class="mb-3">-->
    <!--                        <label class="form-label" for="ecommerce-customer-add-town">Town</label>-->
    <!--                        <input type="text" id="ecommerce-customer-add-town" class="form-control" placeholder="New York" aria-label="New York" name="customerTown">-->
    <!--                    </div>-->
    <!--                    <div class="row mb-3">-->
    <!--                        <div class="col-12 col-sm-6">-->
    <!--                            <label class="form-label" for="ecommerce-customer-add-state">State / Province</label>-->
    <!--                            <input type="text" id="ecommerce-customer-add-state" class="form-control" placeholder="Southern tip" aria-label="Southern tip" name="customerState">-->
    <!--                        </div>-->
    <!--                        <div class="col-12 col-sm-6">-->
    <!--                            <label class="form-label" for="ecommerce-customer-add-post-code">Post Code</label>-->
    <!--                            <input type="text" id="ecommerce-customer-add-post-code" class="form-control" placeholder="734990" aria-label="734990" name="pin" pattern="[0-9]{8}" maxlength="8">-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div>-->
    <!--                        <label class="form-label" for="ecommerce-customer-add-country">Country</label>-->
    <!--                        <div class="position-relative"><select id="ecommerce-customer-add-country" class="select2 form-select select2-hidden-accessible" data-select2-id="ecommerce-customer-add-country" tabindex="-1" aria-hidden="true">-->
    <!--                                <option value="" data-select2-id="2">Select</option>-->
    <!--                                <option value="Australia">Australia</option>-->
    <!--                                <option value="Bangladesh">Bangladesh</option>-->
    <!--                                <option value="Belarus">Belarus</option>-->
    <!--                                <option value="Brazil">Brazil</option>-->
    <!--                                <option value="Canada">Canada</option>-->
    <!--                                <option value="China">China</option>-->
    <!--                                <option value="France">France</option>-->
    <!--                                <option value="Germany">Germany</option>-->
    <!--                                <option value="India">India</option>-->
    <!--                                <option value="Indonesia">Indonesia</option>-->
    <!--                                <option value="Israel">Israel</option>-->
    <!--                                <option value="Italy">Italy</option>-->
    <!--                                <option value="Japan">Japan</option>-->
    <!--                                <option value="Korea">Korea, Republic of</option>-->
    <!--                                <option value="Mexico">Mexico</option>-->
    <!--                                <option value="Philippines">Philippines</option>-->
    <!--                                <option value="Russia">Russian Federation</option>-->
    <!--                                <option value="South Africa">South Africa</option>-->
    <!--                                <option value="Thailand">Thailand</option>-->
    <!--                                <option value="Turkey">Turkey</option>-->
    <!--                                <option value="Ukraine">Ukraine</option>-->
    <!--                                <option value="United Arab Emirates">United Arab Emirates</option>-->
    <!--                                <option value="United Kingdom">United Kingdom</option>-->
    <!--                                <option value="United States">United States</option>-->
    <!--                            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: 335px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-ecommerce-customer-add-country-container"><span class="select2-selection__rendered" id="select2-ecommerce-customer-add-country-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">United-->
    <!--                                                States </span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>-->
    <!--                    </div>-->

    <!--                </div>-->

    <!--                <div class="d-sm-flex mb-3 pt-3">-->
    <!--                    <div class="me-auto mb-2 mb-md-0">-->
    <!--                        <h6 class="mb-0">Use as a billing address?</h6>-->
    <!--                        <small class="text-muted">If you need more info, please check budget.</small>-->
    <!--                    </div>-->
    <!--                    <label class="switch m-auto pe-2">-->
    <!--                        <input type="checkbox" class="switch-input">-->
    <!--                        <span class="switch-toggle-slider">-->
    <!--                            <span class="switch-on"></span>-->
    <!--                            <span class="switch-off"></span>-->
    <!--                        </span>-->
    <!--                    </label>-->
    <!--                </div>-->
    <!--                <div class="pt-3">-->
    <!--                    <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Add</button>-->
    <!--                    <button type="reset" class="btn bg-label-danger" data-bs-dismiss="offcanvas">Discard</button>-->
    <!--                </div>-->
    <!--                <input type="hidden">-->
    <!--            </form>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
     <div style="margin-left: 20px;"  class="card">
  
      <ul class="nav nav-tabs nav-fill" role="tablist">
      <li class="nav-item" role="presentation">
        <a type="button" class="nav-link {{ $view === 'new_request'? 'active': '' }}" href="?view=new_request" aria-selected="true"><i class="tf-icons bx bxs-edit me-1"></i> Active Events</a>
        <div class="{{ $view === 'new_request'? 'tab--selected': '' }} tab__slider"></div>
      </li>
      <li class="nav-item" role="presentation">
        <a type="button" class="nav-link {{ $view === 'request_on_hold'? 'active': '' }}" href="?view=request_on_hold" aria-selected="false" tabindex="-1"><i class="tf-icons bx bxs-edit me-1"></i> Blocked Events</a>
        <div class="{{ $view === 'request_on_hold'? 'tab--selected': '' }} tab__slider"></div>
      </li>
     
    </ul>
        <div class="card-datatable table-responsive">
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                <div class="card-header d-flex flex-wrap py-3 justify-content-between">
                    <div class="me-5 ms-n2 mt-3">
                        <div id="DataTables_Table_0_filter" class="dataTables_filter"><label><input type="search" class="form-control" placeholder="Search Order" aria-controls="DataTables_Table_0"></label></div>
                    </div>
                    <div class="dt-action-buttons text-xl-end text-lg-start text-md-end text-start d-flex align-items-center justify-content-md-end gap-3 gap-sm-2 flex-wrap flex-sm-nowrap pt-0">
                        <div class="dataTables_length mt-0 mt-md-3 me-2" id="DataTables_Table_0_length"><label><select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-select">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select></label></div>
                    </div>
                </div>
                @if($view=='request_on_hold')
                 <table class="table border-top" id="data-table">
                    <thead>
                        <tr>
                            <th class="control sorting_disabled dtr-hidden" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-label=""></th>
                            <th class="sorting_disabled dt-checkboxes-cell dt-checkboxes-select-all" rowspan="1" colspan="1" style="width: 18px;" data-col="1" aria-label=""><input type="checkbox" class="form-check-input"></th>
                            <th class="text-nowrap sorting sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 132px;" aria-label="Customer Id: activate to sort column descending" aria-sort="ascending">
                                Admin Id</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 280px;" aria-label="Customer: activate to sort column ascending">Admin Name
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 225px;" aria-label="Country: activate to sort column ascending">Country
                            </th>
                            <th>Event Title</th>
                            <th>Event Type</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 225px;" aria-label="Country: activate to sort column ascending">Option
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd">
                            <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>
                            <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                            <td class="sorting_1"><span class="fw-medium text-heading">#100696</span></td>
                            <td class="">
                                <div class="d-flex justify-content-start align-items-center customer-name">
                                    <div class="avatar-wrapper">
                                        <div class="avatar me-2"><span class="avatar-initial rounded-circle bg-label-warning">RC</span></div>
                                    </div>
                                    <div class="d-flex flex-column"><a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/customer/details/overview"><span class="fw-medium">Rochell Cockill</span></a><small class="text-muted">rcockill1q@irs.gov</small></div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-start align-items-center customer-country">
                                    <div><i class="fis fi fi-id rounded-circle me-2 fs-3"></i></div>
                                    <div><span>Indonesia</span></div>
                                </div>
                            </td>
                              <td></td>
                              <td></td>
                            <td>
                                <!--<button type="button" class="btn p-1 accept"><i class="bx bx-check"></i></button>-->
                                <!--<button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestDenied"><i class="bx bx-x"></i></button>-->
                                 
                                
                                
                                
                               
                           
                                 <!--<input type="file" id="history_category_image" class="form-control history_category_image" placeholder="Category Name" name="history_category_image">-->
                               
                            <a href="#"><button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestpopup"><i class="bx bx-show"></i></button></a> 
                            
                              <button type="submit" class="btn btn-sm btn-icon removebtnn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title=""><i class="bx bx-trash me-1 "></i></button>
                              
                              </td>
                        </tr>
                        <tr class="even">
                            <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>
                            <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                            <td class="sorting_1"><span class="fw-medium text-heading">#123210</span></td>
                            <td class="">
                                <div class="d-flex justify-content-start align-items-center customer-name">
                                    <div class="avatar-wrapper">
                                        <div class="avatar me-2"><img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/16.png" alt="Avatar" class="rounded-circle"></div>
                                    </div>
                                    <div class="d-flex flex-column"><a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/customer/details/overview"><span class="fw-medium">Norri Dillinton</span></a><small class="text-muted">ndillinton1o@bbc.co.uk</small></div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-start align-items-center customer-country">
                                    <div><i class="fis fi fi-mk rounded-circle me-2 fs-3"></i></div>
                                    <div><span>Macedonia</span></div>
                                </div>
                            </td>
                              <td></td>
                              <td></td>
                            <td>
                                <!--<button type="button" class="btn p-1 accept"><i class="bx bx-check"></i></button>-->
                                <!--<button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestDenied"><i class="bx bx-x"></i></button>-->
                                 
                               
                            <a href="#"><button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestpopup"><i class="bx bx-show"></i></button></a> 
                              <button type="submit" class="btn btn-sm btn-icon removebtnn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title=""><i class="bx bx-trash me-1 "></i></button>
                              </td>
                        </tr>
                        <tr class="odd">
                            <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>
                            <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                            <td class="sorting_1"><span class="fw-medium text-heading">#137049</span></td>
                            <td class="">
                                <div class="d-flex justify-content-start align-items-center customer-name">
                                    <div class="avatar-wrapper">
                                        <div class="avatar me-2"><img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/7.png" alt="Avatar" class="rounded-circle"></div>
                                    </div>
                                    <div class="d-flex flex-column"><a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/customer/details/overview"><span class="fw-medium">Maddie Witherop</span></a><small class="text-muted">mwitherops@bing.com</small></div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-start align-items-center customer-country">
                                    <div><i class="fis fi fi-cn rounded-circle me-2 fs-3"></i></div>
                                    <div><span>China</span></div>
                                </div>
                            </td>
                              <td></td>
                              <td></td>
                            <td>
                                <!--<button type="button" class="btn p-1 accept"><i class="bx bx-check"></i></button>-->
                                <!--                                <button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestDenied"><i class="bx bx-x"></i></button>-->
                                 
                               
                            <a href="#"><button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestpopup"><i class="bx bx-show"></i></button></a> 
                              <button type="submit" class="btn btn-sm btn-icon removebtnn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title=""><i class="bx bx-trash me-1 "></i></button>
                              </td>
                        </tr>
                        <tr class="even">
                            <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>
                            <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                            <td class="sorting_1"><span class="fw-medium text-heading">#137230</span></td>
                            <td class="">
                                <div class="d-flex justify-content-start align-items-center customer-name">
                                    <div class="avatar-wrapper">
                                        <div class="avatar me-2"><span class="avatar-initial rounded-circle bg-label-primary">BT</span></div>
                                    </div>
                                    <div class="d-flex flex-column"><a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/customer/details/overview"><span class="fw-medium">Brooke Tegler</span></a><small class="text-muted">btegler2p@state.tx.us</small></div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-start align-items-center customer-country">
                                    <div><i class="fis fi fi-kp rounded-circle me-2 fs-3"></i></div>
                                    <div><span>North Korea</span></div>
                                </div>
                            </td>
                              <td></td>
                              <td></td>
                            <td>
                                <!--<button type="button" class="btn p-1 accept"><i class="bx bx-check"></i></button>-->
                                <!--                                <button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestDenied"><i class="bx bx-x"></i></button>-->
                                 
                               
                            <a href="#"><button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestpopup"><i class="bx bx-show"></i></button></a> 
                              <button type="submit" class="btn btn-sm btn-icon removebtnn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title=""><i class="bx bx-trash me-1 "></i></button>
                              </td>
                        </tr>
                        <tr class="odd">
                            <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>
                            <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                            <td class="sorting_1"><span class="fw-medium text-heading">#140146</span></td>
                            <td class="">
                                <div class="d-flex justify-content-start align-items-center customer-name">
                                    <div class="avatar-wrapper">
                                        <div class="avatar me-2"><img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/13.png" alt="Avatar" class="rounded-circle"></div>
                                    </div>
                                    <div class="d-flex flex-column"><a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/customer/details/overview"><span class="fw-medium">Lauritz Ramble</span></a><small class="text-muted">lramble2j@discuz.net</small></div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-start align-items-center customer-country">
                                    <div><i class="fis fi fi-ru rounded-circle me-2 fs-3"></i></div>
                                    <div><span>Russia</span></div>
                                </div>
                            </td>
                              <td></td>
                              <td></td>
                            <td>
                                <!--<button type="button" class="btn p-1 accept"><i class="bx bx-check"></i></button>-->
                                <!--                                <button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestDenied"><i class="bx bx-x"></i></button>-->
                                 
                              
                            <a href="#"><button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestpopup"><i class="bx bx-show"></i></button></a> 
                              <button type="submit" class="btn btn-sm btn-icon removebtnn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title=""><i class="bx bx-trash me-1 "></i></button>
                            
                        
                              </td>
                        </tr>
                        <tr class="even">
                            <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>
                            <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                            <td class="sorting_1"><span class="fw-medium text-heading">#152193</span></td>
                            <td class="">
                                <div class="d-flex justify-content-start align-items-center customer-name">
                                    <div class="avatar-wrapper">
                                        <div class="avatar me-2"><span class="avatar-initial rounded-circle bg-label-danger">ED</span></div>
                                    </div>
                                    <div class="d-flex flex-column"><a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/customer/details/overview"><span class="fw-medium">Elsinore Daltry</span></a><small class="text-muted">edaltry20@themeforest.net</small></div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-start align-items-center customer-country">
                                    <div><i class="fis fi fi-br rounded-circle me-2 fs-3"></i></div>
                                    <div><span>Brazil</span></div>
                                </div>
                            </td>
                              <td></td>
                              <td></td>
                            <td>
                                <!--<button type="button" class="btn p-1 accept"><i class="bx bx-check"></i></button>-->
                                <!--                                <button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestDenied"><i class="bx bx-x"></i></button>-->
                                 
                               
                            <a href="#"><button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestpopup"><i class="bx bx-show"></i></button></a> 
                              <button type="submit" class="btn btn-sm btn-icon removebtnn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title=""><i class="bx bx-trash me-1 "></i></button>
                              </td>
                        </tr>
                        <tr class="odd">
                            <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>
                            <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                            <td class="sorting_1"><span class="fw-medium text-heading">#155681</span></td>
                            <td class="">
                                <div class="d-flex justify-content-start align-items-center customer-name">
                                    <div class="avatar-wrapper">
                                        <div class="avatar me-2"><span class="avatar-initial rounded-circle bg-label-primary">PT</span></div>
                                    </div>
                                    <div class="d-flex flex-column"><a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/customer/details/overview"><span class="fw-medium">Price Tremathack</span></a><small class="text-muted">ptremathackd@amazon.com</small></div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-start align-items-center customer-country">
                                    <div><i class="fis fi fi-ru rounded-circle me-2 fs-3"></i></div>
                                    <div><span>Russia</span></div>
                                </div>
                            </td>
                              <td></td>
                              <td></td>
                            <td>
                                <!--<button type="button" class="btn p-1 accept"><i class="bx bx-check"></i></button>-->
                                <!--                                <button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestDenied"><i class="bx bx-x"></i></button>-->
                              
                               
                            <a href="#"><button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestpopup"><i class="bx bx-show"></i></button></a> 
                              <button type="submit" class="btn btn-sm btn-icon removebtnn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title=""><i class="bx bx-trash me-1 "></i></button>
                              </td>
                        </tr>
                        <tr class="even">
                            <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>
                            <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                            <td class="sorting_1"><span class="fw-medium text-heading">#158581</span></td>
                            <td class="">
                                <div class="d-flex justify-content-start align-items-center customer-name">
                                    <div class="avatar-wrapper">
                                        <div class="avatar me-2"><img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/11.png" alt="Avatar" class="rounded-circle"></div>
                                    </div>
                                    <div class="d-flex flex-column"><a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/customer/details/overview"><span class="fw-medium">Michale Britton</span></a><small class="text-muted">mbritton2c@cloudflare.com</small></div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-start align-items-center customer-country">
                                    <div><i class="fis fi fi-cn rounded-circle me-2 fs-3"></i></div>
                                    <div><span>China</span></div>
                                </div>
                            </td>
                              <td></td>
                              <td></td>
                            <td>
                                <!--<button type="button" class="btn p-1 accept"><i class="bx bx-check"></i></button>-->
                                <!--                                <button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestDenied"><i class="bx bx-x"></i></button>-->
                                 
                               
                            <a href="#"><button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestpopup"><i class="bx bx-show"></i></button></a>
                              <button type="submit" class="btn btn-sm btn-icon removebtnn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title=""><i class="bx bx-trash me-1 "></i></button>
                              </td>
                        </tr>
                        <tr class="odd">
                            <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>
                            <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                            <td class="sorting_1"><span class="fw-medium text-heading">#165827</span></td>
                            <td class="">
                                <div class="d-flex justify-content-start align-items-center customer-name">
                                    <div class="avatar-wrapper">
                                        <div class="avatar me-2"><span class="avatar-initial rounded-circle bg-label-primary">TB</span></div>
                                    </div>
                                    <div class="d-flex flex-column"><a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/customer/details/overview"><span class="fw-medium">Tobin Bassick</span></a><small class="text-muted">tbassick2e@quantcast.com</small></div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-start align-items-center customer-country">
                                    <div><i class="fis fi fi-jo rounded-circle me-2 fs-3"></i></div>
                                    <div><span>Jordan</span></div>
                                </div>
                            </td>
                              <td></td>
                              <td></td>
                            <td>
                                <!--<button type="button" class="btn p-1 accept"><i class="bx bx-check"></i></button>-->
                                <!--                                <button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestDenied"><i class="bx bx-x"></i></button>-->
                                
                       
                                
                                
                                 
                               
                            <a href="#"><button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestpopup"><i class="bx bx-show"></i></button></a> 
                              <button type="submit" class="btn btn-sm btn-icon removebtnn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title=""><i class="bx bx-trash me-1 "></i></button>
                              </td>
                        </tr>
                        <tr class="even">
                            <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>
                            <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                            <td class="sorting_1"><span class="fw-medium text-heading">#178408</span></td>
                            <td class="">
                                <div class="d-flex justify-content-start align-items-center customer-name">
                                    <div class="avatar-wrapper">
                                        <div class="avatar me-2"><span class="avatar-initial rounded-circle bg-label-dark">LD</span></div>
                                    </div>
                                    <div class="d-flex flex-column"><a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/customer/details/overview"><span class="fw-medium">Laurie Dax</span></a><small class="text-muted">ldax1@lycos.com</small></div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-start align-items-center customer-country">
                                    <div><i class="fis fi fi-ru rounded-circle me-2 fs-3"></i></div>
                                    <div><span>Russia</span></div>
                                </div>
                            </td>
                              <td></td>
                              <td></td>
                            <td>
                                <!--<button type="button" class="btn p-1 accept"><i class="bx bx-check"></i></button>-->
                                <!--<button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestDenied"><i class="bx bx-x"></i></button>-->
                                   
                               
                            <a href="#"><button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestpopup"><i class="bx bx-show"></i></button></a> 
                              <button type="submit" class="btn btn-sm btn-icon removebtnn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title=""><i class="bx bx-trash me-1 "></i></button>
                              
                              </td>
                        </tr>
                    </tbody>
                </table>
                @else
                    <table class="table border-top" id="data-table">
                    <thead>
                        <tr>
                            <th class="control sorting_disabled dtr-hidden" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-label=""></th>
                            <th class="sorting_disabled dt-checkboxes-cell dt-checkboxes-select-all" rowspan="1" colspan="1" style="width: 18px;" data-col="1" aria-label=""><input type="checkbox" class="form-check-input"></th>
                            <th class="text-nowrap sorting sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 132px;" aria-label="Customer Id: activate to sort column descending" aria-sort="ascending">
                                Admin Id</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 280px;" aria-label="Customer: activate to sort column ascending">Admin Name
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 225px;" aria-label="Country: activate to sort column ascending">Country
                            </th>
                            <th>Event Title</th>
                            <th>Event Type</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 225px;" aria-label="Country: activate to sort column ascending">Option
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd">
                            <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>
                            <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                            <td class="sorting_1"><span class="fw-medium text-heading">#100696</span></td>
                            <td class="">
                                <div class="d-flex justify-content-start align-items-center customer-name">
                                    <div class="avatar-wrapper">
                                        <div class="avatar me-2"><span class="avatar-initial rounded-circle bg-label-warning">RC</span></div>
                                    </div>
                                    <div class="d-flex flex-column"><a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/customer/details/overview"><span class="fw-medium">Rochell Cockill</span></a><small class="text-muted">rcockill1q@irs.gov</small></div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-start align-items-center customer-country">
                                    <div><i class="fis fi fi-id rounded-circle me-2 fs-3"></i></div>
                                    <div><span>Indonesia</span></div>
                                </div>
                            </td>
                              <td></td>
                              <td></td>
                           <td>
                                <!--<button type="button" class="btn p-1 accept"><i class="bx bx-check"></i></button>-->
                                <!--<button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestDenied"><i class="bx bx-x"></i></button>-->
                                <a href="#"><button type="button" class="btn p-1 history_category_image"><i class="bx bx-check"></i></button></a> 
                                 <!--<input type="file" id="history_category_image" class="form-control history_category_image" placeholder="Category Name" name="history_category_image">-->
                            <a href="#"><button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestpopup"><i class="bx bx-show"></i></button></a> 
                                <button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestView"><i class="bx bx-block"></i></button>
                              </td>
                        </tr>
                        <tr class="even">
                            <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>
                            <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                            <td class="sorting_1"><span class="fw-medium text-heading">#123210</span></td>
                            <td class="">
                                <div class="d-flex justify-content-start align-items-center customer-name">
                                    <div class="avatar-wrapper">
                                        <div class="avatar me-2"><img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/16.png" alt="Avatar" class="rounded-circle"></div>
                                    </div>
                                    <div class="d-flex flex-column"><a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/customer/details/overview"><span class="fw-medium">Norri Dillinton</span></a><small class="text-muted">ndillinton1o@bbc.co.uk</small></div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-start align-items-center customer-country">
                                    <div><i class="fis fi fi-mk rounded-circle me-2 fs-3"></i></div>
                                    <div><span>Macedonia</span></div>
                                </div>
                            </td>
                              <td></td>
                              <td></td>
                             <td>
                                <!--<button type="button" class="btn p-1 accept"><i class="bx bx-check"></i></button>-->
                                <!--<button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestDenied"><i class="bx bx-x"></i></button>-->
                                <a href="#"><button type="button" class="btn p-1 history_category_image"><i class="bx bx-check"></i></button></a> 
                                 <!--<input type="file" id="history_category_image" class="form-control history_category_image" placeholder="Category Name" name="history_category_image">-->
                            <a href="#"><button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestpopup"><i class="bx bx-show"></i></button></a> 
                                <button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestView"><i class="bx bx-block"></i></button>
                              </td>
                        </tr>
                        <tr class="odd">
                            <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>
                            <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                            <td class="sorting_1"><span class="fw-medium text-heading">#137049</span></td>
                            <td class="">
                                <div class="d-flex justify-content-start align-items-center customer-name">
                                    <div class="avatar-wrapper">
                                        <div class="avatar me-2"><img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/7.png" alt="Avatar" class="rounded-circle"></div>
                                    </div>
                                    <div class="d-flex flex-column"><a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/customer/details/overview"><span class="fw-medium">Maddie Witherop</span></a><small class="text-muted">mwitherops@bing.com</small></div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-start align-items-center customer-country">
                                    <div><i class="fis fi fi-cn rounded-circle me-2 fs-3"></i></div>
                                    <div><span>China</span></div>
                                </div>
                            </td>
                              <td></td>
                              <td></td>
                              <td>
                                <!--<button type="button" class="btn p-1 accept"><i class="bx bx-check"></i></button>-->
                                <!--<button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestDenied"><i class="bx bx-x"></i></button>-->
                                <a href="#"><button type="button" class="btn p-1 history_category_image"><i class="bx bx-check"></i></button></a> 
                                 <!--<input type="file" id="history_category_image" class="form-control history_category_image" placeholder="Category Name" name="history_category_image">-->
                            <a href="#"><button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestpopup"><i class="bx bx-show"></i></button></a> 
                                <button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestView"><i class="bx bx-block"></i></button>
                              </td>
                        </tr>
                        <tr class="even">
                            <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>
                            <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                            <td class="sorting_1"><span class="fw-medium text-heading">#137230</span></td>
                            <td class="">
                                <div class="d-flex justify-content-start align-items-center customer-name">
                                    <div class="avatar-wrapper">
                                        <div class="avatar me-2"><span class="avatar-initial rounded-circle bg-label-primary">BT</span></div>
                                    </div>
                                    <div class="d-flex flex-column"><a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/customer/details/overview"><span class="fw-medium">Brooke Tegler</span></a><small class="text-muted">btegler2p@state.tx.us</small></div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-start align-items-center customer-country">
                                    <div><i class="fis fi fi-kp rounded-circle me-2 fs-3"></i></div>
                                    <div><span>North Korea</span></div>
                                </div>
                            </td>
                              <td></td>
                              <td></td>
                            <td>
                                <!--<button type="button" class="btn p-1 accept"><i class="bx bx-check"></i></button>-->
                                <!--<button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestDenied"><i class="bx bx-x"></i></button>-->
                                <a href="#"><button type="button" class="btn p-1 history_category_image"><i class="bx bx-check"></i></button></a> 
                                 <!--<input type="file" id="history_category_image" class="form-control history_category_image" placeholder="Category Name" name="history_category_image">-->
                            <a href="#"><button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestpopup"><i class="bx bx-show"></i></button></a> 
                                <button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestView"><i class="bx bx-block"></i></button>
                              </td>
                        </tr>
                        <tr class="odd">
                            <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>
                            <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                            <td class="sorting_1"><span class="fw-medium text-heading">#140146</span></td>
                            <td class="">
                                <div class="d-flex justify-content-start align-items-center customer-name">
                                    <div class="avatar-wrapper">
                                        <div class="avatar me-2"><img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/13.png" alt="Avatar" class="rounded-circle"></div>
                                    </div>
                                    <div class="d-flex flex-column"><a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/customer/details/overview"><span class="fw-medium">Lauritz Ramble</span></a><small class="text-muted">lramble2j@discuz.net</small></div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-start align-items-center customer-country">
                                    <div><i class="fis fi fi-ru rounded-circle me-2 fs-3"></i></div>
                                    <div><span>Russia</span></div>
                                </div>
                            </td>
                              <td></td>
                              <td></td>
                             <td>
                                <!--<button type="button" class="btn p-1 accept"><i class="bx bx-check"></i></button>-->
                                <!--<button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestDenied"><i class="bx bx-x"></i></button>-->
                                <a href="#"><button type="button" class="btn p-1 history_category_image"><i class="bx bx-check"></i></button></a> 
                                 <!--<input type="file" id="history_category_image" class="form-control history_category_image" placeholder="Category Name" name="history_category_image">-->
                            <a href="#"><button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestpopup"><i class="bx bx-show"></i></button></a> 
                                <button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestView"><i class="bx bx-block"></i></button>
                              </td>
                        </tr>
                        <tr class="even">
                            <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>
                            <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                            <td class="sorting_1"><span class="fw-medium text-heading">#152193</span></td>
                            <td class="">
                                <div class="d-flex justify-content-start align-items-center customer-name">
                                    <div class="avatar-wrapper">
                                        <div class="avatar me-2"><span class="avatar-initial rounded-circle bg-label-danger">ED</span></div>
                                    </div>
                                    <div class="d-flex flex-column"><a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/customer/details/overview"><span class="fw-medium">Elsinore Daltry</span></a><small class="text-muted">edaltry20@themeforest.net</small></div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-start align-items-center customer-country">
                                    <div><i class="fis fi fi-br rounded-circle me-2 fs-3"></i></div>
                                    <div><span>Brazil</span></div>
                                </div>
                            </td>
                              <td></td>
                              <td></td>
                           <td>
                                <!--<button type="button" class="btn p-1 accept"><i class="bx bx-check"></i></button>-->
                                <!--<button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestDenied"><i class="bx bx-x"></i></button>-->
                                <a href="#"><button type="button" class="btn p-1 history_category_image"><i class="bx bx-check"></i></button></a> 
                                 <!--<input type="file" id="history_category_image" class="form-control history_category_image" placeholder="Category Name" name="history_category_image">-->
                            <a href="#"><button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestpopup"><i class="bx bx-show"></i></button></a> 
                                <button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestView"><i class="bx bx-block"></i></button>
                              </td>
                        </tr>
                        <tr class="odd">
                            <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>
                            <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                            <td class="sorting_1"><span class="fw-medium text-heading">#155681</span></td>
                            <td class="">
                                <div class="d-flex justify-content-start align-items-center customer-name">
                                    <div class="avatar-wrapper">
                                        <div class="avatar me-2"><span class="avatar-initial rounded-circle bg-label-primary">PT</span></div>
                                    </div>
                                    <div class="d-flex flex-column"><a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/customer/details/overview"><span class="fw-medium">Price Tremathack</span></a><small class="text-muted">ptremathackd@amazon.com</small></div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-start align-items-center customer-country">
                                    <div><i class="fis fi fi-ru rounded-circle me-2 fs-3"></i></div>
                                    <div><span>Russia</span></div>
                                </div>
                            </td>
                              <td></td>
                              <td></td>
                             <td>
                                <!--<button type="button" class="btn p-1 accept"><i class="bx bx-check"></i></button>-->
                                <!--<button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestDenied"><i class="bx bx-x"></i></button>-->
                                <a href="#"><button type="button" class="btn p-1 history_category_image"><i class="bx bx-check"></i></button></a> 
                                 <!--<input type="file" id="history_category_image" class="form-control history_category_image" placeholder="Category Name" name="history_category_image">-->
                            <a href="#"><button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestpopup"><i class="bx bx-show"></i></button></a> 
                                <button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestView"><i class="bx bx-block"></i></button>
                              </td>
                        </tr>
                        <tr class="even">
                            <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>
                            <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                            <td class="sorting_1"><span class="fw-medium text-heading">#158581</span></td>
                            <td class="">
                                <div class="d-flex justify-content-start align-items-center customer-name">
                                    <div class="avatar-wrapper">
                                        <div class="avatar me-2"><img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/11.png" alt="Avatar" class="rounded-circle"></div>
                                    </div>
                                    <div class="d-flex flex-column"><a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/customer/details/overview"><span class="fw-medium">Michale Britton</span></a><small class="text-muted">mbritton2c@cloudflare.com</small></div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-start align-items-center customer-country">
                                    <div><i class="fis fi fi-cn rounded-circle me-2 fs-3"></i></div>
                                    <div><span>China</span></div>
                                </div>
                            </td>
                              <td></td>
                              <td></td>
                             <td>
                                <!--<button type="button" class="btn p-1 accept"><i class="bx bx-check"></i></button>-->
                                <!--<button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestDenied"><i class="bx bx-x"></i></button>-->
                                <a href="#"><button type="button" class="btn p-1 history_category_image"><i class="bx bx-check"></i></button></a> 
                                 <!--<input type="file" id="history_category_image" class="form-control history_category_image" placeholder="Category Name" name="history_category_image">-->
                            <a href="#"><button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestpopup"><i class="bx bx-show"></i></button></a> 
                                <button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestView"><i class="bx bx-block"></i></button>
                              </td>
                        </tr>
                        <tr class="odd">
                            <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>
                            <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                            <td class="sorting_1"><span class="fw-medium text-heading">#165827</span></td>
                            <td class="">
                                <div class="d-flex justify-content-start align-items-center customer-name">
                                    <div class="avatar-wrapper">
                                        <div class="avatar me-2"><span class="avatar-initial rounded-circle bg-label-primary">TB</span></div>
                                    </div>
                                    <div class="d-flex flex-column"><a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/customer/details/overview"><span class="fw-medium">Tobin Bassick</span></a><small class="text-muted">tbassick2e@quantcast.com</small></div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-start align-items-center customer-country">
                                    <div><i class="fis fi fi-jo rounded-circle me-2 fs-3"></i></div>
                                    <div><span>Jordan</span></div>
                                </div>
                            </td>
                              <td></td>
                              <td></td>
                            <td>
                                <!--<button type="button" class="btn p-1 accept"><i class="bx bx-check"></i></button>-->
                                <!--<button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestDenied"><i class="bx bx-x"></i></button>-->
                                <a href="#"><button type="button" class="btn p-1 history_category_image"><i class="bx bx-check"></i></button></a> 
                                 <!--<input type="file" id="history_category_image" class="form-control history_category_image" placeholder="Category Name" name="history_category_image">-->
                            <a href="#"><button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestpopup"><i class="bx bx-show"></i></button></a> 
                                <button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestView"><i class="bx bx-block"></i></button>
                              </td>
                        </tr>
                        <tr class="even">
                            <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>
                            <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                            <td class="sorting_1"><span class="fw-medium text-heading">#178408</span></td>
                            <td class="">
                                <div class="d-flex justify-content-start align-items-center customer-name">
                                    <div class="avatar-wrapper">
                                        <div class="avatar me-2"><span class="avatar-initial rounded-circle bg-label-dark">LD</span></div>
                                    </div>
                                    <div class="d-flex flex-column"><a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/customer/details/overview"><span class="fw-medium">Laurie Dax</span></a><small class="text-muted">ldax1@lycos.com</small></div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-start align-items-center customer-country">
                                    <div><i class="fis fi fi-ru rounded-circle me-2 fs-3"></i></div>
                                    <div><span>Russia</span></div>
                                </div>
                            </td>
                              <td></td>
                              <td></td>
                            <td>
                                <!--<button type="button" class="btn p-1 accept"><i class="bx bx-check"></i></button>-->
                                <!--<button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestDenied"><i class="bx bx-x"></i></button>-->
                                <a href="#"><button type="button" class="btn p-1 history_category_image"><i class="bx bx-check"></i></button></a> 
                                 <!--<input type="file" id="history_category_image" class="form-control history_category_image" placeholder="Category Name" name="history_category_image">-->
                            <a href="#"><button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestpopup"><i class="bx bx-show"></i></button></a> 
                                <button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestView"><i class="bx bx-block"></i></button>
                              </td>
                        </tr>
                    </tbody>
                </table>
                @endif
             
            </div>
        </div>
        
        <!-- Offcanvas to add new customer -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEcommerceCustomerAdd" aria-labelledby="offcanvasEcommerceCustomerAddLabel">
            <div class="offcanvas-header">
                <h5 id="offcanvasEcommerceCustomerAddLabel" class="offcanvas-title">Add Customer</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body mx-0 flex-grow-0">
                <form class="ecommerce-customer-add pt-0 fv-plugins-bootstrap5 fv-plugins-framework" id="eCommerceCustomerAddForm" onsubmit="return false" novalidate="novalidate">
                    <div class="ecommerce-customer-add-basic mb-3">
                        <h6 class="mb-3">Basic Information</h6>
                        <div class="mb-3 fv-plugins-icon-container">
                            <label class="form-label" for="ecommerce-customer-add-name">Name*</label>
                            <input type="text" class="form-control" id="ecommerce-customer-add-name" placeholder="John Doe" name="customerName" aria-label="John Doe">
                            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                            </div>
                        </div>
                        <div class="mb-3 fv-plugins-icon-container">
                            <label class="form-label" for="ecommerce-customer-add-email">Email*</label>
                            <input type="text" id="ecommerce-customer-add-email" class="form-control" placeholder="john.doe@example.com" aria-label="john.doe@example.com" name="customerEmail">
                            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                            </div>
                        </div>
                        <div>
                            <label class="form-label" for="ecommerce-customer-add-contact">Mobile</label>
                            <input type="text" id="ecommerce-customer-add-contact" class="form-control phone-mask" placeholder="+(123) 456-7890" aria-label="+(123) 456-7890" name="customerContact">
                        </div>
                    </div>

                    <div class="ecommerce-customer-add-shiping mb-3 pt-3">
                        <h6 class="mb-3">Shipping Information</h6>
                        <div class="mb-3">
                            <label class="form-label" for="ecommerce-customer-add-address">Address Line 1</label>
                            <input type="text" id="ecommerce-customer-add-address" class="form-control" placeholder="45 Roker Terrace" aria-label="45 Roker Terrace" name="customerAddress1">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="ecommerce-customer-add-address-2">Address Line 2</label>
                            <input type="text" id="ecommerce-customer-add-address-2" class="form-control" aria-label="address2" name="customerAddress2">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="ecommerce-customer-add-town">Town</label>
                            <input type="text" id="ecommerce-customer-add-town" class="form-control" placeholder="New York" aria-label="New York" name="customerTown">
                        </div>
                        <div class="row mb-3">
                            <div class="col-12 col-sm-6">
                                <label class="form-label" for="ecommerce-customer-add-state">State / Province</label>
                                <input type="text" id="ecommerce-customer-add-state" class="form-control" placeholder="Southern tip" aria-label="Southern tip" name="customerState">
                            </div>
                            <div class="col-12 col-sm-6">
                                <label class="form-label" for="ecommerce-customer-add-post-code">Post Code</label>
                                <input type="text" id="ecommerce-customer-add-post-code" class="form-control" placeholder="734990" aria-label="734990" name="pin" pattern="[0-9]{8}" maxlength="8">
                            </div>
                        </div>
                        <div>
                            <label class="form-label" for="ecommerce-customer-add-country">Country</label>
                            <div class="position-relative"><select id="ecommerce-customer-add-country" class="select2 form-select select2-hidden-accessible" data-select2-id="ecommerce-customer-add-country" tabindex="-1" aria-hidden="true">
                                    <option value="" data-select2-id="2">Select</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="Canada">Canada</option>
                                    <option value="China">China</option>
                                    <option value="France">France</option>
                                    <option value="Germany">Germany</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Korea">Korea, Republic of</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Philippines">Philippines</option>
                                    <option value="Russia">Russian Federation</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="United States">United States</option>
                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: 335px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-ecommerce-customer-add-country-container"><span class="select2-selection__rendered" id="select2-ecommerce-customer-add-country-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">United
                                                    States </span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
                        </div>

                    </div>

                    <div class="d-sm-flex mb-3 pt-3">
                        <div class="me-auto mb-2 mb-md-0">
                            <h6 class="mb-0">Use as a billing address?</h6>
                            <small class="text-muted">If you need more info, please check budget.</small>
                        </div>
                        <label class="switch m-auto pe-2">
                            <input type="checkbox" class="switch-input">
                            <span class="switch-toggle-slider">
                                <span class="switch-on"></span>
                                <span class="switch-off"></span>
                            </span>
                        </label>
                    </div>
                    <div class="pt-3">
                        <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Add</button>
                        <button type="reset" class="btn bg-label-danger" data-bs-dismiss="offcanvas">Discard</button>
                    </div>
                    <input type="hidden">
                </form>
            </div>
        </div>
    </div>

        </div>
        <!-- / Content -->

        <div class="content-backdrop fade"></div>
    </div>

    <script>
        function delete_service(el) {
            let link = $(el).data('id');
            $('.deleted-modal').modal('show');
            $('#delete_form').attr('action', link);
        }
    </script>


@section('page-script')
<script>
    // function confirmAction(event, callback) {
        $(".removebtnn").click(function(){
      
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
    });

</script>
<script>

$(".history_category_image").click(function(){


    event.preventDefault();
    Swal.fire({
      title: 'Request Accepted',
    //   text: "Are you sure you want to delete this?",
      icon: 'success',
      showCancelButton: true,
      confirmButtonText: 'OKAY',
      customClass: {
        confirmButton: 'btn btn-success me-3',
        cancelButton: 'btn btn-label-secondary'
      },
      buttonsStyling: false
    }).then(function (result) {
      if (result.value) {
        callback();
      }
    });
    
    
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
    <script>
        function drpzone_init() {
            dropZoneInitFunctions.forEach(callback => callback());
        }
    </script>
    <script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js" onload="drpzone_init()"></script>
    
    
        <x-modal
id="requestpopup"
title="Detail of Air Jordan"
size="md">
 @include('content.include.live_stream.popuptwo')
</x-modal>



<x-modal
id="requestView"
title="Request Deined"
saveBtnText="Submit"
saveBtnType="button"
saveBtnForm="createForm"
size="md">
 @include('content.include.live_stream.view_request')
</x-modal>
@endsection
@endsection
