
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
<link href="https://cdn.jsdelivr.net/npm/dropify@0.2.2/dist/css/dropify.min.css" rel="stylesheet">


<!--<link href="-->
<!--https://cdn.jsdelivr.net/npm/datatables@1.10.18/media/css/jquery.dataTables.min.css-->
<!--" rel="stylesheet">-->





<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}">
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.0/css/dataTables.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.0/css/dataTables.dataTables.min.css">
 <link href="{{asset('assets/vendor/libs/bootstrap-icons/font/bootstrap-icons.css') }}" rel="stylesheet">
 
 <link href="{{asset('assets/vendor/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet">
 
 <link href="{{asset('assets/vendor/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css') }}" rel="stylesheet">

  <link href="{{asset('assets/vendor/libs/ datatables.net-select-bs5/css/select.bootstrap5.css') }}" rel="stylesheet">
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/flatpickr/flatpickr.js')}}"></script>
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/tagify/tagify.js')}}"></script>
<script src="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/dropify@0.2.2/dist/js/dropify.min.js">
</script>
<!--<script src="-->
<!--https://cdn.jsdelivr.net/npm/datatables@1.10.18/media/js/jquery.dataTables.min.js-->
<!--"></script>-->
<!--<script src="{{asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>-->
<!--<script src="https://cdn.datatables.net/2.0.0/js/dataTables.min.js"></script>-->

@endsection

@section('content')

<style>
    
   #DataTables_Table_0_wrapper .card-header {
        display:none !important;
    }
</style>
<h4 class="py-3 mb-4">
  <span class="text-muted fw-light">eCommerce /</span> Product List
</h4>
<div class="card mb-4">
  <div class="card-widget-separator-wrapper">
    <div class="card-body card-widget-separator">
      <div class="row gy-4 gy-sm-1">
        <div class="col-sm-6 col-lg-3">
          <div class="d-flex justify-content-between align-items-start card-widget-1 border-end pb-3 pb-sm-0">
            <div>
              <h6 class="mb-2">In-store Sales</h6>
              <h4 class="mb-2">$5,345.43</h4>
              <p class="mb-0"><span class="text-muted me-2">5k orders</span><span class="badge bg-label-success">+5.7%</span></p>
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
          <div class="d-flex justify-content-between align-items-start card-widget-2 border-end pb-3 pb-sm-0">
            <div>
              <h6 class="mb-2">Website Sales</h6>
              <h4 class="mb-2">$674,347.12</h4>
              <p class="mb-0"><span class="text-muted me-2">21k orders</span><span class="badge bg-label-success">+12.4%</span></p>
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
          <div class="d-flex justify-content-between align-items-start border-end pb-3 pb-sm-0 card-widget-3">
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
              <p class="mb-0"><span class="text-muted me-2">150 orders</span><span class="badge bg-label-danger">-3.5%</span></p>
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

<div class="card">
  <div class="card-header">
    <h5 class="card-title">Filter</h5>
    <div class="d-flex justify-content-between align-items-center row py-3 gap-3 gap-md-0">
      <div class="col-md-4 product_status"><select id="ProductStatus" class="form-select text-capitalize"><option value="">Status</option><option value="Scheduled">Scheduled</option><option value="Publish">Publish</option><option value="Inactive">Inactive</option></select></div>
      <div class="col-md-4 product_category"><select id="ProductCategory" class="form-select text-capitalize"><option value="">Category</option><option value="Household">Household</option><option value="Office">Office</option><option value="Electronics">Electronics</option><option value="Shoes">Shoes</option><option value="Accessories">Accessories</option><option value="Game">Game</option></select></div>
      <div class="col-md-4 product_stock"><select id="ProductStock" class="form-select text-capitalize"><option value=""> Stock </option><option value="Out_of_Stock">Out of Stock</option><option value="In_Stock">In Stock</option></select></div>
    </div>
  </div>
  <div class="card-datatable table-responsive">
  <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
    <div class="card-header d-flex border-top rounded-0 flex-wrap py-md-0">
      <div class="me-5 ms-n2 pe-5">
        <div id="DataTables_Table_0_filter" class="dataTables_filter"><label><input type="search" class="form-control" placeholder="Search Product" aria-controls="DataTables_Table_0"></label></div>
      </div>
      <div class="d-flex justify-content-start justify-content-md-end align-items-baseline">
        <div class="dt-action-buttons d-flex align-items-start align-items-md-center justify-content-sm-center mb-3 mb-sm-0">
          <div class="dataTables_length mt-0 mt-md-3 me-3" id="DataTables_Table_0_length"><label><select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-select">
                <option value="7">7</option>
                <option value="10">10</option>
                <option value="20">20</option>
                <option value="50">50</option>
                <option value="70">70</option>
                <option value="100">100</option>
              </select></label></div>
          <div class="dt-buttons d-flex flex-wrap"> <button class="dt-button buttons-collection dropdown-toggle btn btn-label-secondary me-3" tabindex="0" aria-controls="DataTables_Table_0" type="button" aria-haspopup="dialog" aria-expanded="false"><span><i class="bx bx-export me-1"></i>Export</span><span class="dt-down-arrow">▼</span></button> <button class="dt-button add-new btn btn-primary" tabindex="0" aria-controls="DataTables_Table_0" type="button"><span><i class="bx bx-plus me-0 me-sm-1"></i><span class="d-none d-sm-inline-block">Add Product</span></span></button> </div>
        </div>
      </div>
    </div>
    <table class="datatables-products table border-top dataTable no-footer dtr-column collapsed" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info" style="width: 1113px;">
      <thead>
        <tr>
          <th class="control sorting_disabled" rowspan="1" colspan="1" style="width: 5px;" aria-label=""></th>
          <th class="sorting_disabled dt-checkboxes-cell dt-checkboxes-select-all" rowspan="1" colspan="1" style="width: 18px;" data-col="1" aria-label=""><input type="checkbox" class="form-check-input"></th>
          <th class="sorting sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 403px;" aria-label="product: activate to sort column descending" aria-sort="ascending">product</th>
          <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 125px;" aria-label="category: activate to sort column ascending">category</th>
          <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 53px;" aria-label="stock">stock</th>
          <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 44px;" aria-label="sku: activate to sort column ascending">sku</th>
          <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 73px;" aria-label="price: activate to sort column ascending">price</th>
          <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 34px;" aria-label="qty: activate to sort column ascending">qty</th>
          <th class="sorting dtr-hidden" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-label="status: activate to sort column ascending">status</th>
          <th class="sorting_disabled dtr-hidden" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-label="Actions">Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr class="odd">
          <td class="control" tabindex="0" style=""></td>
          <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
          <td class="sorting_1">
            <div class="d-flex justify-content-start align-items-center product-name">
              <div class="avatar-wrapper">
                <div class="avatar avatar me-2 rounded-2 bg-label-secondary"><img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/ecommerce-images/product-9.png" alt="Product-9" class="rounded-2"></div>
              </div>
              <div class="d-flex flex-column">
                <h6 class="text-body text-nowrap mb-0">Air Jordan</h6><small class="text-muted text-truncate d-none d-sm-block">Air Jordan is a line of basketball shoes produced by Nike</small>
              </div>
            </div>
          </td>
          <td><span class="text-truncate d-flex align-items-center"><span class="avatar-sm rounded-circle d-flex justify-content-center align-items-center bg-label-info me-2"><i class="bx bx-walk"></i></span>Shoes</span></td>
          <td><span class="text-truncate"><label class="switch switch-primary switch-sm"><input type="checkbox" class="switch-input" id="switch"><span class="switch-toggle-slider"><span class="switch-off"></span></span></label><span class="d-none">Out_of_Stock</span></span></td>
          <td><span>31063</span></td>
          <td><span>$125</span></td>
          <td><span>942</span></td>
          <td class="dtr-hidden" style="display: none;"><span class="badge bg-label-danger" text-capitalized="">Inactive</span></td>
          <td class="dtr-hidden" style="display: none;">
            <div class="d-inline-block text-nowrap"><button class="btn btn-sm btn-icon"><i class="bx bx-edit"></i></button><button class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded me-2"></i></button>
              <div class="dropdown-menu dropdown-menu-end m-0"><a href="javascript:0;" class="dropdown-item">View</a><a href="javascript:0;" class="dropdown-item">Suspend</a></div>
            </div>
          </td>
        </tr>
        <tr class="even">
          <td class="control" tabindex="0" style=""></td>
          <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
          <td class="sorting_1">
            <div class="d-flex justify-content-start align-items-center product-name">
              <div class="avatar-wrapper">
                <div class="avatar avatar me-2 rounded-2 bg-label-secondary"><img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/ecommerce-images/product-13.png" alt="Product-13" class="rounded-2"></div>
              </div>
              <div class="d-flex flex-column">
                <h6 class="text-body text-nowrap mb-0">Amazon Fire TV</h6><small class="text-muted text-truncate d-none d-sm-block">4K UHD smart TV, stream live TV without cable</small>
              </div>
            </div>
          </td>
          <td><span class="text-truncate d-flex align-items-center"><span class="avatar-sm rounded-circle d-flex justify-content-center align-items-center bg-label-primary me-2"><i class="bx bx-mobile-alt"></i></span>Electronics</span></td>
          <td><span class="text-truncate"><label class="switch switch-primary switch-sm"><input type="checkbox" class="switch-input" id="switch"><span class="switch-toggle-slider"><span class="switch-off"></span></span></label><span class="d-none">Out_of_Stock</span></span></td>
          <td><span>5829</span></td>
          <td><span>$263.49</span></td>
          <td><span>587</span></td>
          <td class="dtr-hidden" style="display: none;"><span class="badge bg-label-warning" text-capitalized="">Scheduled</span></td>
          <td class="dtr-hidden" style="display: none;">
            <div class="d-inline-block text-nowrap"><button class="btn btn-sm btn-icon"><i class="bx bx-edit"></i></button><button class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded me-2"></i></button>
              <div class="dropdown-menu dropdown-menu-end m-0"><a href="javascript:0;" class="dropdown-item">View</a><a href="javascript:0;" class="dropdown-item">Suspend</a></div>
            </div>
          </td>
        </tr>
        <tr class="odd">
          <td class="control" tabindex="0" style=""></td>
          <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
          <td class="sorting_1">
            <div class="d-flex justify-content-start align-items-center product-name">
              <div class="avatar-wrapper">
                <div class="avatar avatar me-2 rounded-2 bg-label-secondary"><img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/ecommerce-images/product-15.png" alt="Product-15" class="rounded-2"></div>
              </div>
              <div class="d-flex flex-column">
                <h6 class="text-body text-nowrap mb-0">Apple iPad</h6><small class="text-muted text-truncate d-none d-sm-block">10.2-inch Retina Display, 64GB</small>
              </div>
            </div>
          </td>
          <td><span class="text-truncate d-flex align-items-center"><span class="avatar-sm rounded-circle d-flex justify-content-center align-items-center bg-label-primary me-2"><i class="bx bx-mobile-alt"></i></span>Electronics</span></td>
          <td><span class="text-truncate"><label class="switch switch-primary switch-sm"><input type="checkbox" class="switch-input" checked=""><span class="switch-toggle-slider"><span class="switch-on"></span></span></label><span class="d-none">In_Stock</span></span></td>
          <td><span>35946</span></td>
          <td><span>$248.39</span></td>
          <td><span>468</span></td>
          <td class="dtr-hidden" style="display: none;"><span class="badge bg-label-success" text-capitalized="">Publish</span></td>
          <td class="dtr-hidden" style="display: none;">
            <div class="d-inline-block text-nowrap"><button class="btn btn-sm btn-icon"><i class="bx bx-edit"></i></button><button class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded me-2"></i></button>
              <div class="dropdown-menu dropdown-menu-end m-0"><a href="javascript:0;" class="dropdown-item">View</a><a href="javascript:0;" class="dropdown-item">Suspend</a></div>
            </div>
          </td>
        </tr>
        <tr class="even">
          <td class="control" tabindex="0" style=""></td>
          <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
          <td class="sorting_1">
            <div class="d-flex justify-content-start align-items-center product-name">
              <div class="avatar-wrapper">
                <div class="avatar avatar me-2 rounded-2 bg-label-secondary"><img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/ecommerce-images/product-5.png" alt="Product-5" class="rounded-2"></div>
              </div>
              <div class="d-flex flex-column">
                <h6 class="text-body text-nowrap mb-0">Apple Watch Series 7</h6><small class="text-muted text-truncate d-none d-sm-block">Starlight Aluminum Case with Starlight Sport Band.</small>
              </div>
            </div>
          </td>
          <td><span class="text-truncate d-flex align-items-center"><span class="avatar-sm rounded-circle d-flex justify-content-center align-items-center bg-label-secondary me-2"><i class="bx bxs-watch"></i></span>Accessories</span></td>
          <td><span class="text-truncate"><label class="switch switch-primary switch-sm"><input type="checkbox" class="switch-input" id="switch"><span class="switch-toggle-slider"><span class="switch-off"></span></span></label><span class="d-none">Out_of_Stock</span></span></td>
          <td><span>46658</span></td>
          <td><span>$799</span></td>
          <td><span>851</span></td>
          <td class="dtr-hidden" style="display: none;"><span class="badge bg-label-warning" text-capitalized="">Scheduled</span></td>
          <td class="dtr-hidden" style="display: none;">
            <div class="d-inline-block text-nowrap"><button class="btn btn-sm btn-icon"><i class="bx bx-edit"></i></button><button class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded me-2"></i></button>
              <div class="dropdown-menu dropdown-menu-end m-0"><a href="javascript:0;" class="dropdown-item">View</a><a href="javascript:0;" class="dropdown-item">Suspend</a></div>
            </div>
          </td>
        </tr>
        <tr class="odd">
          <td class="control" tabindex="0" style=""></td>
          <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
          <td class="sorting_1">
            <div class="d-flex justify-content-start align-items-center product-name">
              <div class="avatar-wrapper">
                <div class="avatar avatar me-2 rounded-2 bg-label-secondary"><img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/ecommerce-images/product-16.png" alt="Product-16" class="rounded-2"></div>
              </div>
              <div class="d-flex flex-column">
                <h6 class="text-body text-nowrap mb-0">BANGE Anti Theft Backpack</h6><small class="text-muted text-truncate d-none d-sm-block">Smart Business Laptop Fits 15.6 Inch Notebook</small>
              </div>
            </div>
          </td>
          <td><span class="text-truncate d-flex align-items-center"><span class="avatar-sm rounded-circle d-flex justify-content-center align-items-center bg-label-secondary me-2"><i class="bx bxs-watch"></i></span>Accessories</span></td>
          <td><span class="text-truncate"><label class="switch switch-primary switch-sm"><input type="checkbox" class="switch-input" checked=""><span class="switch-toggle-slider"><span class="switch-on"></span></span></label><span class="d-none">In_Stock</span></span></td>
          <td><span>41867</span></td>
          <td><span>$79.99</span></td>
          <td><span>519</span></td>
          <td class="dtr-hidden" style="display: none;"><span class="badge bg-label-danger" text-capitalized="">Inactive</span></td>
          <td class="dtr-hidden" style="display: none;">
            <div class="d-inline-block text-nowrap"><button class="btn btn-sm btn-icon"><i class="bx bx-edit"></i></button><button class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded me-2"></i></button>
              <div class="dropdown-menu dropdown-menu-end m-0"><a href="javascript:0;" class="dropdown-item">View</a><a href="javascript:0;" class="dropdown-item">Suspend</a></div>
            </div>
          </td>
        </tr>
        <tr class="even">
          <td class="control" tabindex="0" style=""></td>
          <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
          <td class="sorting_1">
            <div class="d-flex justify-content-start align-items-center product-name">
              <div class="avatar-wrapper">
                <div class="avatar avatar me-2 rounded-2 bg-label-secondary"><img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/ecommerce-images/product-18.png" alt="Product-18" class="rounded-2"></div>
              </div>
              <div class="d-flex flex-column">
                <h6 class="text-body text-nowrap mb-0">Canon EOS Rebel T7</h6><small class="text-muted text-truncate d-none d-sm-block">18-55mm Lens | Built-in Wi-Fi | 24.1 MP CMOS Sensor</small>
              </div>
            </div>
          </td>
          <td><span class="text-truncate d-flex align-items-center"><span class="avatar-sm rounded-circle d-flex justify-content-center align-items-center bg-label-primary me-2"><i class="bx bx-mobile-alt"></i></span>Electronics</span></td>
          <td><span class="text-truncate"><label class="switch switch-primary switch-sm"><input type="checkbox" class="switch-input" checked=""><span class="switch-toggle-slider"><span class="switch-on"></span></span></label><span class="d-none">In_Stock</span></span></td>
          <td><span>63474</span></td>
          <td><span>$399</span></td>
          <td><span>810</span></td>
          <td class="dtr-hidden" style="display: none;"><span class="badge bg-label-warning" text-capitalized="">Scheduled</span></td>
          <td class="dtr-hidden" style="display: none;">
            <div class="d-inline-block text-nowrap"><button class="btn btn-sm btn-icon"><i class="bx bx-edit"></i></button><button class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded me-2"></i></button>
              <div class="dropdown-menu dropdown-menu-end m-0"><a href="javascript:0;" class="dropdown-item">View</a><a href="javascript:0;" class="dropdown-item">Suspend</a></div>
            </div>
          </td>
        </tr>
        <tr class="odd">
          <td class="control" tabindex="0" style=""></td>
          <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
          <td class="sorting_1">
            <div class="d-flex justify-content-start align-items-center product-name">
              <div class="avatar-wrapper">
                <div class="avatar avatar me-2 rounded-2 bg-label-secondary"><img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/ecommerce-images/product-3.png" alt="Product-3" class="rounded-2"></div>
              </div>
              <div class="d-flex flex-column">
                <h6 class="text-body text-nowrap mb-0">Dohioue Wall Clock</h6><small class="text-muted text-truncate d-none d-sm-block">Modern 10 Inch Battery Operated Wall Clocks</small>
              </div>
            </div>
          </td>
          <td><span class="text-truncate d-flex align-items-center"><span class="avatar-sm rounded-circle d-flex justify-content-center align-items-center bg-label-warning me-2"><i class="bx bx-home-alt"></i></span>Household</span></td>
          <td><span class="text-truncate"><label class="switch switch-primary switch-sm"><input type="checkbox" class="switch-input" id="switch"><span class="switch-toggle-slider"><span class="switch-off"></span></span></label><span class="d-none">Out_of_Stock</span></span></td>
          <td><span>29540</span></td>
          <td><span>$16.34</span></td>
          <td><span>804</span></td>
          <td class="dtr-hidden" style="display: none;"><span class="badge bg-label-success" text-capitalized="">Publish</span></td>
          <td class="dtr-hidden" style="display: none;">
            <div class="d-inline-block text-nowrap"><button class="btn btn-sm btn-icon"><i class="bx bx-edit"></i></button><button class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded me-2"></i></button>
              <div class="dropdown-menu dropdown-menu-end m-0"><a href="javascript:0;" class="dropdown-item">View</a><a href="javascript:0;" class="dropdown-item">Suspend</a></div>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
    <div class="row mx-2">
      <div class="col-sm-12 col-md-6">
        <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Displaying 1 to 7 of 100 entries</div>
      </div>
      <div class="col-sm-12 col-md-6">
        <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
          <ul class="pagination">
            <li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a aria-controls="DataTables_Table_0" aria-disabled="true" role="link" data-dt-idx="previous" tabindex="0" class="page-link">Previous</a></li>
            <li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" role="link" aria-current="page" data-dt-idx="0" tabindex="0" class="page-link">1</a></li>
            <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" role="link" data-dt-idx="1" tabindex="0" class="page-link">2</a></li>
            <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" role="link" data-dt-idx="2" tabindex="0" class="page-link">3</a></li>
            <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" role="link" data-dt-idx="3" tabindex="0" class="page-link">4</a></li>
            <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" role="link" data-dt-idx="4" tabindex="0" class="page-link">5</a></li>
            <li class="paginate_button page-item disabled" id="DataTables_Table_0_ellipsis"><a aria-controls="DataTables_Table_0" aria-disabled="true" role="link" data-dt-idx="ellipsis" tabindex="0" class="page-link">…</a></li>
            <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" role="link" data-dt-idx="14" tabindex="0" class="page-link">15</a></li>
            <li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" role="link" data-dt-idx="next" tabindex="0" class="page-link">Next</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
       @endsection
       
       @section('page-script')
       <script>
        $('#DataTables_Table_0').dataTable();
        </script>
       @endsection