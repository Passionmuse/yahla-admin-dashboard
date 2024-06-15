@extends('layouts/layoutMaster')

@section('title', 'Settings - Add / Manage Payment Offices')

@section('page-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-icons.css') }}" />
@endsection

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/animate-css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/dropzone/dropzone.css') }}" />
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>
@endsection

@section('content')
    <script>
        const dropZoneInitFunctions = [];
    </script>
    <div class="d-flex justify-content-between">
        <div>
            <h4 class="fw-bold py-3 mb-4">
                <span class="text-muted fw-light">Settings /</span> Add / Manage Payment Offices
            </h4>
        </div>
        <div class="">
            <!-- <a href="{{ route('donations.organizations.create') }}">
              <button class="btn btn-primary">Add Organization</button>
            </a> -->
        </div>
    </div>

    <style>
        .office-card {
            width: 120px;
            height: 125px;
            position: relative;
            overflow: hidden;
            box-shadow: 0 0.125rem 0.25rem rgba(161, 172, 184, 0.4) !important;
        }

        .office-card .img {
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: 1;
        }

        .office-card .actions {
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: 2;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgba(0, 0, 0, 0);
            transition: all .1s;
        }

        .office-card .actions .actions-inner {
            display: none;
        }

        .office-card:hover .actions {
            background-color: rgba(0, 0, 0, .4);
        }

        .office-card:hover .actions .actions-inner {
            display: block;
        }

        .office-card .actions .actions-inner {}
    </style>

    <!-- Basic Bootstrap Table -->
    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="m-0">Payment Office List</h5>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal"><i
                    class="bx bx-plus me-0 me-sm-1"></i> Add Office</button>
        </div>
        <hr class="m-0">
        <div class="card-body d-flex flex-wrap gap-3" style="min-height: 282px">
            @forelse($paymentOffices as $office)
                <div class="office-card bg-secondary rounded">
                    <div class="office-card-body">
                        <img class="img" src="{{ asset('storage/' . $office->image_path) }}" alt="">
                        <div class="actions">
                            <div class="actions-inner">
                                <!-- Edit -->
                                <span data-bs-toggle="modal" data-bs-target="#editModal{{ $office->id }}" class="me-2">
                                    <button class="btn btn-sm btn-primary btn-icon" data-bs-toggle="tooltip"
                                        data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true"
                                        data-bs-original-title="Edit">
                                        <i class="bx bx-edit"></i>
                                    </button>
                                </span>

                                <!-- Delete -->
                                <form action="{{ route('settings.payment-offices.destroy', $office->id) }}"
                                    onsubmit="confirmAction(event, () => event.target.submit())" method="post"
                                    class="d-inline">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger btn-icon" data-bs-toggle="tooltip"
                                        data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true"
                                        data-bs-original-title="Remove"><i class="bx bx-trash"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <x-modal id="editModal{{ $office->id }}" title="Edit Payment Office" saveBtnText="Update"
                        saveBtnType="submit" saveBtnForm="editForm{{ $office->id }}" size="md" :show="old('showEditFormModal' . $office->id) ? true : false">
                        @include('content.payment_offices.includes.edit_form')
                    </x-modal>
                </div>
            @empty
                <tr>
                    <td class="text-center" colspan="8"><b>No Offices found.<b></td>
                </tr>
            @endforelse
        </div>
        {{-- <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Invoie Prefix</th>
                    <th>Service</th>
                    <th>Username </th>
                    <th>Paid type </th>
                    <th>Office </th>
                    <th>Date </th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                <tr>
                    <td>1</td>
                    <td>Invoie Prefix</td>
                    <td>Service</td>
                    <td>Username </td>
                    <td>Paid type </td>
                    <td>Office </td>
                    <td>DD/MM/YYYY </td>
                    <td><button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#sub-categories"
                            data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true"
                            data-bs-original-title="Edit">View</button></td>
                </tr>
            </tbody>
        </table> --}}
    </div>
    <!--/ Basic Bootstrap Table -->

    <x-modal id="createModal" title="Add Payment Office" saveBtnText="Create" saveBtnType="submit" saveBtnForm="createForm"
        size="md" :show="old('showCreateFormModal') ? true : false">
        @include('content.payment_offices.includes.create_form')
    </x-modal>

    <!-- SubCategories Modal -->
    <div class="modal fade" id="sub-categories" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered modal-sub-categories">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="content-wrapper">

                        <!-- Content -->
                        <div class="container-xxl flex-grow-1 container-p-y">


                            <div class="row invoice-preview">
                                <!-- Invoice -->
                                <div class="col-xl-9 col-md-8 col-12 mb-md-0 mb-4">
                                    <div class="card invoice-preview-card">
                                        <div class="card-body">
                                            <div
                                                class="d-flex justify-content-between flex-xl-row flex-md-column flex-sm-row flex-column p-sm-3 p-0">
                                                <div class="mb-xl-0 mb-4">
                                                    <div class="d-flex svg-illustration mb-3 gap-2">
                                                        <span class="app-brand-logo demo">
                                                            <img src="http://127.0.0.1:8000/assets/img/logo-ff.jpeg"
                                                                width="20" style="margin-left:-20px">


                                                        </span>
                                                        <span class="app-brand-text demo text-body fw-bolder">
                                                            Sneat
                                                        </span>
                                                    </div>
                                                    <p class="mb-1">Office 149, 450 South Brand Brooklyn</p>
                                                    <p class="mb-1">San Diego County, CA 91905, USA</p>
                                                    <p class="mb-0">+1 (123) 456 7891, +44 (876) 543 2198</p>
                                                </div>
                                                <div>
                                                    <h4>Invoice #3492</h4>
                                                    <div class="mb-2">
                                                        <span class="me-1">Date Issues:</span>
                                                        <span class="fw-semibold">25/08/2020</span>
                                                    </div>
                                                    <div>
                                                        <span class="me-1">Date Due:</span>
                                                        <span class="fw-semibold">29/08/2020</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="my-0">
                                        <div class="card-body">
                                            <div class="row p-sm-3 p-0">
                                                <div
                                                    class="col-xl-6 col-md-12 col-sm-5 col-12 mb-xl-0 mb-md-4 mb-sm-0 mb-4">
                                                    <h6 class="pb-2">Invoice To:</h6>
                                                    <p class="mb-1">Thomas shelby</p>
                                                    <p class="mb-1">Shelby Company Limited</p>
                                                    <p class="mb-1">Small Heath, B10 0HF, UK</p>
                                                    <p class="mb-1">718-986-6062</p>
                                                    <p class="mb-0">peakyFBlinders@gmail.com</p>
                                                </div>
                                                <div class="col-xl-6 col-md-12 col-sm-7 col-12">
                                                    <h6 class="pb-2">Bill To:</h6>
                                                    <table>
                                                        <tbody>
                                                            <tr>
                                                                <td class="pe-3">Total Due:</td>
                                                                <td>$12,110.55</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="pe-3">Bank name:</td>
                                                                <td>American Bank</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="pe-3">Country:</td>
                                                                <td>United States</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="pe-3">IBAN:</td>
                                                                <td>ETD95476213874685</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="pe-3">SWIFT code:</td>
                                                                <td>BR91905</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table border-top m-0">
                                                <thead>
                                                    <tr>
                                                        <th>Item</th>
                                                        <th>Description</th>
                                                        <th>Cost</th>
                                                        <th>Qty</th>
                                                        <th>Price</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-nowrap">Vuexy Admin Template</td>
                                                        <td class="text-nowrap">HTML Admin Template</td>
                                                        <td>$32</td>
                                                        <td>1</td>
                                                        <td>$32.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-nowrap">Frest Admin Template</td>
                                                        <td class="text-nowrap">Angular Admin Template</td>
                                                        <td>$22</td>
                                                        <td>1</td>
                                                        <td>$22.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-nowrap">Apex Admin Template</td>
                                                        <td class="text-nowrap">HTML Admin Template</td>
                                                        <td>$17</td>
                                                        <td>2</td>
                                                        <td>$34.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-nowrap">Robust Admin Template</td>
                                                        <td class="text-nowrap">React Admin Template</td>
                                                        <td>$66</td>
                                                        <td>1</td>
                                                        <td>$66.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3" class="align-top px-4 py-5">
                                                            <p class="mb-2">
                                                                <span class="me-1 fw-semibold">Salesperson:</span>
                                                                <span>Alfie Solomons</span>
                                                            </p>
                                                            <span>Thanks for your business</span>
                                                        </td>
                                                        <td class="text-end px-4 py-5">
                                                            <p class="mb-2">Subtotal:</p>
                                                            <p class="mb-2">Discount:</p>
                                                            <p class="mb-2">Tax:</p>
                                                            <p class="mb-0">Total:</p>
                                                        </td>
                                                        <td class="px-4 py-5">
                                                            <p class="fw-semibold mb-2">$154.25</p>
                                                            <p class="fw-semibold mb-2">$00.00</p>
                                                            <p class="fw-semibold mb-2">$50.00</p>
                                                            <p class="fw-semibold mb-0">$204.25</p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12">
                                                    <span class="fw-semibold">Note:</span>
                                                    <span>It was a pleasure working with you and your team. We hope you will
                                                        keep us in mind for future freelance
                                                        projects. Thank You!</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Invoice -->

                                <!-- Invoice Actions -->
                                <div class="col-xl-3 col-md-4 col-12 invoice-actions">
                                    <div class="card">
                                        <div class="card-body">
                                            <button class="btn btn-primary d-grid w-100 mb-3" data-bs-toggle="offcanvas"
                                                data-bs-target="#sendInvoiceOffcanvas">
                                                <span
                                                    class="d-flex align-items-center justify-content-center text-nowrap"><i
                                                        class="bx bx-paper-plane bx-xs me-1"></i>Send Invoice</span>
                                            </button>
                                            <button class="btn btn-label-secondary d-grid w-100 mb-3">
                                                Download
                                            </button>
                                            <a class="btn btn-label-secondary d-grid w-100 mb-3" target="_blank"
                                                href="http://127.0.0.1:8000/app/invoice/print">
                                                Print
                                            </a>
                                            <a href="http://127.0.0.1:8000/app/invoice/edit"
                                                class="btn btn-label-secondary d-grid w-100 mb-3">
                                                Edit Invoice
                                            </a>
                                            <button class="btn btn-primary d-grid w-100" data-bs-toggle="offcanvas"
                                                data-bs-target="#addPaymentOffcanvas">
                                                <span
                                                    class="d-flex align-items-center justify-content-center text-nowrap"><i
                                                        class="bx bx-dollar bx-xs me-1"></i>Add Payment</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Invoice Actions -->
                            </div>

                            <!-- Offcanvas -->
                            <!-- Send Invoice Sidebar -->
                            <div class="offcanvas offcanvas-end" id="sendInvoiceOffcanvas" aria-hidden="true">
                                <div class="offcanvas-header mb-3">
                                    <h5 class="offcanvas-title">Send Invoice</h5>
                                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                        aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body flex-grow-1">
                                    <form>
                                        <div class="mb-3">
                                            <label for="invoice-from" class="form-label">From</label>
                                            <input type="text" class="form-control" id="invoice-from"
                                                value="shelbyComapny@email.com" placeholder="company@email.com">
                                        </div>
                                        <div class="mb-3">
                                            <label for="invoice-to" class="form-label">To</label>
                                            <input type="text" class="form-control" id="invoice-to"
                                                value="qConsolidated@email.com" placeholder="company@email.com">
                                        </div>
                                        <div class="mb-3">
                                            <label for="invoice-subject" class="form-label">Subject</label>
                                            <input type="text" class="form-control" id="invoice-subject"
                                                value="Invoice of purchased Admin Templates"
                                                placeholder="Invoice regarding goods">
                                        </div>
                                        <div class="mb-3">
                                            <label for="invoice-message" class="form-label">Message</label>
                                            <textarea class="form-control" name="invoice-message" id="invoice-message" cols="3" rows="8">Dear Queen Consolidated,
            Thank you for your business, always a pleasure to work with you!
            We have generated a new invoice in the amount of $95.59
            We would appreciate payment of this invoice by 05/11/2021</textarea>
                                        </div>
                                        <div class="mb-4">
                                            <span class="badge bg-label-primary">
                                                <i class="bx bx-link bx-xs"></i>
                                                <span class="align-middle">Invoice Attached</span>
                                            </span>
                                        </div>
                                        <div class="mb-3 d-flex flex-wrap">
                                            <button type="button" class="btn btn-primary me-3"
                                                data-bs-dismiss="offcanvas">Send</button>
                                            <button type="button" class="btn btn-label-secondary"
                                                data-bs-dismiss="offcanvas">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- /Send Invoice Sidebar -->
                            <!-- Add Payment Sidebar -->
                            <div class="offcanvas offcanvas-end" id="addPaymentOffcanvas" aria-hidden="true">
                                <div class="offcanvas-header mb-3">
                                    <h5 class="offcanvas-title">Add Payment</h5>
                                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                        aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body flex-grow-1">
                                    <div class="d-flex justify-content-between bg-lighter p-2 mb-3">
                                        <p class="mb-0">Invoice Balance:</p>
                                        <p class="fw-bold mb-0">$5000.00</p>
                                    </div>
                                    <form>
                                        <div class="mb-3">
                                            <label class="form-label" for="invoiceAmount">Payment Amount</label>
                                            <div class="input-group">
                                                <span class="input-group-text">$</span>
                                                <input type="text" id="invoiceAmount" name="invoiceAmount"
                                                    class="form-control invoice-amount" placeholder="100">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="payment-date">Payment Date</label>
                                            <input id="payment-date" class="form-control invoice-date flatpickr-input"
                                                type="text" readonly="readonly">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="payment-method">Payment Method</label>
                                            <select class="form-select" id="payment-method">
                                                <option value="" selected="" disabled="">Select payment
                                                    method</option>
                                                <option value="Cash">Cash</option>
                                                <option value="Bank Transfer">Bank Transfer</option>
                                                <option value="Debit Card">Debit Card</option>
                                                <option value="Credit Card">Credit Card</option>
                                                <option value="Paypal">Paypal</option>
                                            </select>
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label" for="payment-note">Internal Payment Note</label>
                                            <textarea class="form-control" id="payment-note" rows="2"></textarea>
                                        </div>
                                        <div class="mb-3 d-flex flex-wrap">
                                            <button type="button" class="btn btn-primary me-3"
                                                data-bs-dismiss="offcanvas">Send</button>
                                            <button type="button" class="btn btn-label-secondary"
                                                data-bs-dismiss="offcanvas">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- /Add Payment Sidebar -->
                            <!-- /Offcanvas -->

                            <!-- pricingModal -->
                            <!--/ pricingModal -->

                        </div>
                        <!-- / Content -->


                        <div class="content-backdrop fade"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--/ SubCategories Modal -->
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
