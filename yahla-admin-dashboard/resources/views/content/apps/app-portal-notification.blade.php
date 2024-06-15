@extends('layouts/layoutMaster')

@section('title', 'Event - Ticket List')

@section('page-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-icons.css') }}" />
@endsection

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}" />
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
    <script src="{{ asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/js/wizard-ex-property-listing.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/bs-stepper/bs-stepper.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/tagify/tagify.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>
    <script src="{{ asset('assets/js/app-ecommerce-product-list.js') }}"></script>
@endsection

@section('content')

    <div class="content-wrapper">

        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">

            <h4 class="py-3 mb-4">
                <span class="text-muted fw-light">Account Settings /</span> Notifications
            </h4>

            <div class="row">
                <div class="col-md-12">
                    <!--<ul class="nav nav-pills flex-column flex-md-row mb-3">-->
                    <!--    <li class="nav-item"><a class="nav-link"-->
                    <!--            href="javascript:void(0)"><i-->
                    <!--                class="bx bx-user me-1"></i> Account</a></li>-->
                    <!--    <li class="nav-item"><a class="nav-link"-->
                    <!--            href="javascript:void(0)"><i-->
                    <!--                class="bx bx-lock-alt me-1"></i> Security</a></li>-->
                    <!--    <li class="nav-item"><a class="nav-link"-->
                    <!--            href="javascript:void(0)"><i-->
                    <!--                class="bx bx-detail me-1"></i> Billing &amp; Plans</a></li>-->
                    <!--    <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i-->
                    <!--                class="bx bx-bell me-1"></i> Notifications</a></li>-->
                    <!--    <li class="nav-item"><a class="nav-link"-->
                    <!--            href="javascript:void(0)"><i-->
                    <!--                class="bx bx-link-alt me-1"></i> Connections</a></li>-->
                    <!--</ul>-->
                    <div class="card">
                        <!-- Notifications -->
                        <h5 class="card-header">Recent Devices</h5>
                        <div class="card-body">
                            <span>We need permission from your browser to show notifications. <span
                                    class="notificationRequest"><span class="fw-medium">Request
                                        Permission</span></span></span>
                            <div class="error"></div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-borderless border-bottom">
                                <thead>
                                    <tr>
                                        <th class="text-nowrap">Type</th>
                                        <th class="text-nowrap text-center">✉️ Email</th>
                                        <th class="text-nowrap text-center">🖥 Browser</th>
                                        <th class="text-nowrap text-center">👩🏻‍💻 App</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-nowrap">New for you</td>
                                        <td>
                                            <div class="form-check d-flex justify-content-center">
                                                <input class="form-check-input" type="checkbox" id="defaultCheck1"
                                                    checked="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check d-flex justify-content-center">
                                                <input class="form-check-input" type="checkbox" id="defaultCheck2"
                                                    checked="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check d-flex justify-content-center">
                                                <input class="form-check-input" type="checkbox" id="defaultCheck3"
                                                    checked="">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap">Account activity</td>
                                        <td>
                                            <div class="form-check d-flex justify-content-center">
                                                <input class="form-check-input" type="checkbox" id="defaultCheck4"
                                                    checked="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check d-flex justify-content-center">
                                                <input class="form-check-input" type="checkbox" id="defaultCheck5"
                                                    checked="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check d-flex justify-content-center">
                                                <input class="form-check-input" type="checkbox" id="defaultCheck6"
                                                    checked="">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap">A new browser used to sign in</td>
                                        <td>
                                            <div class="form-check d-flex justify-content-center">
                                                <input class="form-check-input" type="checkbox" id="defaultCheck7"
                                                    checked="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check d-flex justify-content-center">
                                                <input class="form-check-input" type="checkbox" id="defaultCheck8"
                                                    checked="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check d-flex justify-content-center">
                                                <input class="form-check-input" type="checkbox" id="defaultCheck9">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap">A new device is linked</td>
                                        <td>
                                            <div class="form-check d-flex justify-content-center">
                                                <input class="form-check-input" type="checkbox" id="defaultCheck10"
                                                    checked="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check d-flex justify-content-center">
                                                <input class="form-check-input" type="checkbox" id="defaultCheck11">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check d-flex justify-content-center">
                                                <input class="form-check-input" type="checkbox" id="defaultCheck12">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-body">
                            <h6>When should we send you notifications?</h6>
                            <form action="javascript:void(0);">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <select id="sendNotification" class="form-select" name="sendNotification">
                                            <option selected="">Only when I'm online</option>
                                            <option>Anytime</option>
                                        </select>
                                    </div>
                                    <div class="mt-4">
                                        <button type="submit" class="btn btn-primary me-2">Save changes</button>
                                        <button type="reset" class="btn btn-label-secondary">Discard</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /Notifications -->
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
