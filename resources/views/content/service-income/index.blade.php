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

@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/flatpickr/flatpickr.js')}}"></script>
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/tagify/tagify.js')}}"></script>
<script src="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.js')}}"></script>
@endsection

@section('content')

<script>
const dropZoneInitFunctions = [];
</script>

<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Online Shop Income /</span> All Income
</h4>

<div class="row g-4 mb-4">
  <div class="col-sm-6 col-xl-4">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span>Today</span>
            <div class="d-flex align-items-end mt-2">
              <h4 class="mb-0 me-2">21,459</h4>
              <small class="text-success">(+29%)</small>
            </div>
            <small>Today analytic</small>
          </div>
          <span class="badge bg-label-primary rounded p-2">
            <i class="bx bx-user bx-sm"></i>
          </span>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-xl-4">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span>This Month</span>
            <div class="d-flex align-items-end mt-2">
              <h4 class="mb-0 me-2">4,567</h4>
              <small class="text-success">(+18%)</small>
            </div>
            <small>This month analytics</small>
          </div>
          <span class="badge bg-label-danger rounded p-2">
            <i class="bx bx-user-plus bx-sm"></i>
          </span>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-xl-4">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span>This Year</span>
            <div class="d-flex align-items-end mt-2">
              <h4 class="mb-0 me-2">19,860</h4>
              <small class="text-danger">(-14%)</small>
            </div>
            <small>This year analytics</small>
          </div>
          <span class="badge bg-label-success rounded p-2">
            <i class="bx bx-group bx-sm"></i>
          </span>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="nav-align-top mb-4">
    <ul class="nav nav-tabs nav-fill" role="tablist">
    <li class="nav-item" role="presentation">
            <a type="button" class="nav-link {{ $view === 'daily'? 'active': '' }}" href="?view=daily" aria-selected="true"> Daily Income</a>
        </li>
        <li class="nav-item" role="presentation">
            <a type="button" class="nav-link {{ $view === 'monthly'? 'active': '' }}" href="?view=monthly" aria-selected="false" tabindex="-1"> Monthly
                Income</a>
        </li>
        <li class="nav-item" role="presentation">
            <a type="button" class="nav-link {{ $view === 'yearly'? 'active': '' }}" href="?view=yearly" aria-selected="false" tabindex="-1"> Yearly
                Income</a>
        </li>
    </ul>
    <div class="tab-content p-0">
        <div class="tab-pane fade show active" id="solovedReportsTab" role="tabpanel">
            <div class="table-responsive text-nowrap pd-t-24px">
                <table class="{{ $view === 'daily'? 'table': 'd-none' }}">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Date</th>
                            <th>Total Services</th>
                            <th>Bank Transfer </th>
                            <th>Paypal </th>
                            <th>Payment Office </th>
                            <th>Discount</th>
                            <th>Total </th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <tr>
                            <td>01</td>
                            <td>
                                12-05-2023
                            </td>
                            <td>
                                5
                            </td>
                            <td>
                                50 $
                            </td>
                            <td>
                                50 $
                            </td>
                            <td>
                                1250 $
                            </td>
                            <td>
                                0 $
                            </td>
                            <td>
                                1250 $
                            </td>
                            <td>
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#sub-categories"
                                    data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true"
                                    data-bs-original-title="Edit">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td>02</td>
                            <td>
                                11-05-2023
                            </td>
                            <td>
                                10
                            </td>
                            <td>
                                150.000 $
                            </td>
                            <td>
                                150.000 $
                            </td>
                            <td>
                                150.000 $
                            </td>
                            <td>
                                0.000 $
                            </td>
                            <td>
                                150.000 $
                            </td>
                            <td>
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#sub-categories"
                                    data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true"
                                    data-bs-original-title="Edit">View</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table class="{{ $view === 'monthly'? 'table': 'd-none' }}">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Date</th>
                            <th>Total Services</th>
                            <th>Bank Transfer </th>
                            <th>Paypal </th>
                            <th>Payment Office </th>
                            <th>Discount</th>
                            <th>Total </th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <tr>
                            <td>01</td>
                            <td>
                                12-2023
                            </td>
                            <td>
                                50
                            </td>
                            <td>
                                12.5000 $
                            </td>
                            <td>
                                10.000 $
                            </td>
                            <td>
                                20.000 $
                            </td>
                            <td>
                                0.000 $
                            </td>
                            <td>
                                32.500 $
                            </td>
                            <td>
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#sub-categories"
                                    data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true"
                                    data-bs-original-title="Edit">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td>02</td>
                            <td>
                                11-2023
                            </td>
                            <td>
                                100
                            </td>
                            <td>
                                10.000 $
                            </td>
                            <td>
                                10.000 $
                            </td>
                            <td>
                                50.000 $
                            </td>
                            <td>
                                0.000 $
                            </td>
                            <td>
                                70.000 $
                            </td>
                            <td>
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#sub-categories"
                                    data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true"
                                    data-bs-original-title="Edit">View</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table class="{{ $view === 'yearly'? 'table': 'd-none' }}">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Date</th>
                            <th>Total Services</th>
                            <th>Bank Transfer </th>
                            <th>Paypal </th>
                            <th>Payment Office </th>
                            <th>Discount</th>
                            <th>Total </th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <tr>
                            <td>01</td>
                            <td>
                                2023
                            </td>
                            <td>
                                5
                            </td>
                            <td>
                                150.000 $
                            </td>
                            <td>
                                150.000 $
                            </td>
                            <td>
                                150.000 $
                            </td>
                            <td>
                                0.000 $
                            </td>
                            <td>
                                150.000 $
                            </td>
                            <td>
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#sub-categories"
                                    data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true"
                                    data-bs-original-title="Edit">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td>02</td>
                            <td>
                                2023
                            </td>
                            <td>
                                5
                            </td>
                            <td>
                                150.000 $
                            </td>
                            <td>
                                150.000 $
                            </td>
                            <td>
                                150.000 $
                            </td>
                            <td>
                                0.000 $
                            </td>
                            <td>
                                150.000 $
                            </td>
                            <td>
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#sub-categories"
                                    data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true"
                                    data-bs-original-title="Edit">View</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
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


<!-- Invoice Modal -->
<div class="modal fade" id="sub-categories" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-sub-categories">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card-body row">
                    <div class="col-sm-9 text-center">
                        <div class="row mb-4">
                            <div class="col-sm-6">
                                <h5 class="mb-3">Sneat</h5>
                                <div>Office 149,450 South Brand Brooklyn</div>
                                <div>San Diego County, CA 91905, USA</div>
                                <div>+1 (123) 456 7891, +44 (876) 5432198</div>
                            </div>
                            <div class="col-sm-6 ">
                                <h5 class="mb-3">Invoice #3492</h5>
                                <div>Date Issues: 25/08/2020</div>
                                <div>Date Due: 29/08/2020</div>
                            </div>
                        </div>
                        <div class="table-responsive-sm mt-5">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Item</th>
                                        <th>Description</th>
                                        <th class="right">Cost</th>
                                        <th class="center">QTY</th>
                                        <th class="right">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="left strong">Vuexy Admin Template</td>
                                        <td class="left">HTML Admin Template</td>
                                        <td class="right">$32</td>
                                        <td class="center">1</td>
                                        <td class="right">$32.00</td>
                                    </tr>
                                    <tr>
                                        <td class="left">Frest Admin Template</td>
                                        <td class="left">Angular Admin Template</td>
                                        <td class="right">$22</td>
                                        <td class="center">1</td>
                                        <td class="right">$22.00</td>
                                    </tr>
                                    <tr>
                                        <td class="left">Apex Admin Template</td>
                                        <td class="left">HTML Admin Template</td>
                                        <td class="right">$17</td>
                                        <td class="center">2</td>
                                        <td class="right">$34.00</td>
                                    </tr>
                                    <tr>
                                        <td class="left">Robust Admin Template</td>
                                        <td class="left">React Admin Template</td>
                                        <td class="right">$66</td>
                                        <td class="center">1</td>
                                        <td class="right">$66.00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row mt-5">
                            <div class="col-sm-6">
                                <div><span class="fw-bold">Salesperson:</span> Alpie Solomons</div>
                                <div>Thanks for your business.</div>
                            </div>
                            <div class="col-sm-6">
                                <div>Subtotal: &nbsp $154.25</div>
                                <div>Discount: &nbsp $00.00</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 d-flex flex-column">
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#sub-categories"
                            data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true"
                            data-bs-original-title="Edit"><i class="fa-solid fa-paper-plane"></i>&nbsp Send
                            Invoice</button>
                        <button class="btn btn-grey mt-3 border border-*" data-bs-toggle="modal"
                            data-bs-target="#sub-categories" data-bs-offset="0,4" data-bs-placement="top"
                            data-bs-html="true" data-bs-original-title="Edit">Download</button>
                        <button class="btn btn-grey mt-3 border border-* overlay-primary" data-bs-toggle="modal"
                            data-bs-target="#sub-categories" data-bs-offset="0,4" data-bs-placement="top"
                            data-bs-html="true" data-bs-original-title="Edit">Print</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>

<!--/ Invoice Modal -->

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
@endsection

@endsection