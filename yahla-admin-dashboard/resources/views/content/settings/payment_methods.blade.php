@extends('layouts/layoutMaster')

@section('title', 'Settings - Payment Methods')

@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-icons.css')}}" />
@endsection

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/animate-css/animate.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.js')}}"></script>
@endsection

@section('content')
<div class="d-flex justify-content-between">
  <div>
<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Settings /</span> Payment Methods
</h4>
</div>
</div>
  
  <div class="row">
    <div class="col-12 col-md-6">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="m-0">Paypal Settings</h5>
            </div>
            <hr class="m-0">
            <div class="card-body">
                <form action="{{ route('settings.payment-methods') }}" method="post">
                    @csrf
                    <div class="mb-3 row">
                        <label class="col-md-4 col-form-label">Paypal Client Id</label>
                        <div class="col-md-8">
                            <input class="form-control" type="text" name="paypal_client_id" value="{{ $paypal_client_id->value }}" placeholder="Paypal Client Id">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-md-4 col-form-label">Paypal Client Secret</label>
                        <div class="col-md-8">
                            <input class="form-control" type="text" name="paypal_client_secret" value="{{ $paypal_client_secret->value }}" placeholder="Paypal Client Secret">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-md-4 col-form-label">Paypal Sandbox Mode</label>
                        <div class="col-md-8">
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" name="paypal_sandbox_mode" type="checkbox" {{ $paypal_sandbox_mode->value === 'true'? 'checked': 'false' }}>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="m-0">Stripe Settings</h5>
            </div>
            <hr class="m-0">
            <div class="card-body">
            <form action="{{ route('settings.payment-methods') }}" method="post">
                    @csrf
                    <div class="mb-3 row">
                        <label class="col-md-4 col-form-label">Stripe Key</label>
                        <div class="col-md-8">
                            <input class="form-control" type="text" name="stripe_key" value="{{ $stripe_key->value }}" placeholder="Stripe Key">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-md-4 col-form-label">Stripe Secret</label>
                        <div class="col-md-8">
                            <input class="form-control" type="text" name="stripe_secret" value="{{ $stripe_secret->value }}" placeholder="Stripe Secret">
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </div>
@endsection
