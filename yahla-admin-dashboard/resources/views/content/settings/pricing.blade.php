@extends('layouts/layoutMaster')

@section('title', 'Settings - Pricing')

@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-icons.css')}}" />
@endsection

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/animate-css/animate.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.css')}}" />
<style>
    .nav-tabs .nav-item .nav-link {
        padding: 1rem;
    }

    .edit-price {
        display: flex;
    }

    [x-cloak] {
        display: none !important;
    }
</style>
@endsection

@section('vendor-script')
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
<script src="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.js')}}"></script>
@endsection

@section('content')
<div class="d-flex justify-content-between">
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">Settings /</span> Pricing
    </h4>
</div>

<div class="row">
    <div class="col-12 col-md-8">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="m-0">Edit Pricing</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Role</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            <tr>
                                <td>Standard</td>
                                <td x-data="{editPrice: false, showLoader: false, name: 'standard_price', value: {{ $standard_price->value }}}">
                                    <div class="py-2 px-3 rounded" style="width:fit-content">
                                        <div x-show="!editPrice">
                                            <span x-text="value + ' €'" class="me-4">{{ $standard_price->value }} €</span>
                                            <span  @click="editPrice = !editPrice">
                                                <button class="btn bg-primary btn-sm p-1 text-white" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit Price"><i class="bx bx-pencil bx-xs"></i></button>
                                            </span>
                                        </div>
                                        <div x-cloak x-show="editPrice" class="edit-price align-items-center gap-1">
                                            <input x-model="value" type="number" class="form-control form-control-sm" min="1" step="any" value="{{ $standard_price->value }}" style="width:fit-content;">
                                            <span  @click="showLoader=true; updatePrice({name, value}, () => {showLoader=false; editPrice=false})">
                                                <button class="btn bg-primary btn-sm p-1 text-white" x-bind:disabled="showLoader" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Save">
                                                    <i x-show="!showLoader" class="bx bx-check bx-xs"></i>
                                                    <span x-show="showLoader" class="spinner-border" role="status" aria-hidden="true" style="height: 1.5em; width: 1.5em;"></span>
                                                </button>
                                            </span>
                                            <span  @click="editPrice = !editPrice">
                                                <button class="btn bg-secondary btn-sm p-1 text-white" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Cancel"><i class="tf-icons bx bx-x bx-xs"></i></button>
                                            </span>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Premium</td>
                                <td x-data="{editPrice: false, showLoader: false, name: 'premium_price', value: {{ $premium_price->value }}}">
                                    <div class="py-2 px-3 rounded" style="width:fit-content">
                                        <div x-show="!editPrice">
                                            <span x-text="value + ' €'" class="me-4">{{ $premium_price->value }} €</span>
                                            <span  @click="editPrice = !editPrice">
                                                <button class="btn bg-primary btn-sm p-1 text-white" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit Price"><i class="bx bx-pencil bx-xs"></i></button>
                                            </span>
                                        </div>
                                        <div x-cloak x-show="editPrice" class="edit-price align-items-center gap-1">
                                            <input x-model="value" type="number" class="form-control form-control-sm" min="1" step="any" value="{{ $premium_price->value }}" style="width:fit-content;">
                                            <span  @click="showLoader=true; updatePrice({name, value}, () => {showLoader=false; editPrice=false})">
                                                <button class="btn bg-primary btn-sm p-1 text-white" x-bind:disabled="showLoader" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Save">
                                                    <i x-show="!showLoader" class="bx bx-check bx-xs"></i>
                                                    <span x-show="showLoader" class="spinner-border" role="status" aria-hidden="true" style="height: 1.5em; width: 1.5em;"></span>
                                                </button>
                                            </span>
                                            <span  @click="editPrice = !editPrice">
                                                <button class="btn bg-secondary btn-sm p-1 text-white" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Cancel"><i class="tf-icons bx bx-x bx-xs"></i></button>
                                            </span>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>VIP</td>
                                <td x-data="{editPrice: false, showLoader: false, name: 'vip_price', value: {{ $vip_price->value }}}">
                                    <div class="py-2 px-3 rounded" style="width:fit-content">
                                        <div x-show="!editPrice">
                                            <span x-text="value + ' €'" class="me-4">{{ $vip_price->value }} €</span>
                                            <span  @click="editPrice = !editPrice">
                                                <button class="btn bg-primary btn-sm p-1 text-white" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit Price"><i class="bx bx-pencil bx-xs"></i></button>
                                            </span>
                                        </div>
                                        <div x-cloak x-show="editPrice" class="edit-price align-items-center gap-1">
                                            <input x-model="value" type="number" class="form-control form-control-sm" min="1" step="any" value="{{ $vip_price->value }}" style="width:fit-content;">
                                            <span  @click="showLoader=true; updatePrice({name, value}, () => {showLoader=false; editPrice=false})">
                                                <button class="btn bg-primary btn-sm p-1 text-white" x-bind:disabled="showLoader" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Save">
                                                    <i x-show="!showLoader" class="bx bx-check bx-xs"></i>
                                                    <span x-show="showLoader" class="spinner-border" role="status" aria-hidden="true" style="height: 1.5em; width: 1.5em;"></span>
                                                </button>
                                            </span>
                                            <span  @click="editPrice = !editPrice">
                                                <button class="btn bg-secondary btn-sm p-1 text-white" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Cancel"><i class="tf-icons bx bx-x bx-xs"></i></button>
                                            </span>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function updatePrice(data, callback) {
        $.ajax({
            url: "{{ route('settings.save') }}",
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: data,
            success: function (res) {
                callback();
                toastr.success("Settings successfully updated.");
            }
        });
    }

    function updateSetting(event) {
        const self = event.target;
        const name = self.dataset.name;
        const value = self.checked? 'true': 'false';
        $.ajax({
            url: '{{ route('settings.save') }}',
            method: 'POST',
            data: {
                name: name,
                value: value
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (res) {
                toastr.success("Settings successfully updated.");
            }
        });
    }
</script>
@endsection
