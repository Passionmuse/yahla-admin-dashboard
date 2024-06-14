@php
$customizerHidden = 'customizer-hide';
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Yekbun - Login')

@section('vendor-style')
<!-- Vendor -->
<link rel="stylesheet" href="{{asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css')}}" />
@endsection

@section('page-style')
<!-- Page -->
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-auth.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-auth.css')}}">
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js')}}"></script>

    <script src="{{asset('assets/vendor/libs/cleavejs/cleave.js')}}"></script>
    <script src="{{asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js')}}"></script>
    <script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js')}}"></script>
    <script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js')}}"></script>
    <script src="{{asset('assets/js/pages-auth.js')}}"></script>
    <script src="{{asset('assets/js/pages-auth-two-steps.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/pages-auth.js')}}"></script>
@endsection

@section('content')
<div class="container-xxl">
  <div class="authentication-wrapper authentication-basic container-p-y">
    <div class="authentication-inner">
      <!-- Register -->
      <div class="card">
        <div class="card-body">
          <!-- Logo -->
          <div class="app-brand justify-content-center">
            <a href="{{url('/')}}" class="app-brand-link gap-2">
              <span class="app-brand-logo demo">@include('_partials.macros',["width"=>220])</span>
              <!-- <span class="app-brand-text demo text-body fw-bolder">Yekbun</span> -->
            </a>
          </div>
          <!-- /Logo -->
          <h4 class="mb-2">Two Step Verification 💬</h4>
                    <p class="text-start mb-4">
                        We sent a verification code to your Email. Enter the code from the email in the field below.
                        We sent code to email : {{ substr(auth()->user()->email, 0, 5) . '******' . substr(auth()->user()->email,  -2) }}
                    </p>
                    <p class="mb-0 fw-semibold">Type your 6 digit security code</p>
                    <form  method="POST" action="{{ route('2fa.post') }}" >
                        @csrf
                        <div class="mb-3 fv-plugins-icon-container">
                            @if ($message = Session::get('success'))
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <strong>{{ $message }}</strong>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                </div>
                            </div>
                            @endif

                            @if ($message = Session::get('error'))
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <strong>{{ $message }}</strong>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                </div>
                            </div>
                            @endif
                            <div class="auth-input-wrapper d-flex align-items-center justify-content-sm-between numeral-mask-wrapper">
                                <input type="text" class="form-control auth-input h-px-50 text-center numeral-mask text-center h-px-50 mx-1 my-2" maxlength="1" autofocus="" name="otp[]" required >
                                <input type="text" class="form-control auth-input h-px-50 text-center numeral-mask text-center h-px-50 mx-1 my-2" maxlength="1" name="otp[]" required >
                                <input type="text" class="form-control auth-input h-px-50 text-center numeral-mask text-center h-px-50 mx-1 my-2" maxlength="1" name="otp[]" required >
                                <input type="text" class="form-control auth-input h-px-50 text-center numeral-mask text-center h-px-50 mx-1 my-2" maxlength="1" name="otp[]" required >
                                <input type="text" class="form-control auth-input h-px-50 text-center numeral-mask text-center h-px-50 mx-1 my-2" maxlength="1" name="otp[]" required >
                                <input type="text" class="form-control auth-input h-px-50 text-center numeral-mask text-center h-px-50 mx-1 my-2" maxlength="1" name="otp[]" required >
                            </div>
                            <!-- Create a hidden field which is combined by 3 fields above -->
                            <input type="hidden" name="">
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <button class="btn btn-primary d-grid w-100 mb-3" type="submit">
                            Verify my account
                        </button>
                        <div class="text-center">Didn't get the code?
                            <a class="btn btn-link" href="{{ route('2fa.resend') }}">Resend Code?</a>
                        </div>
                        <input type="hidden">
                    </form>
        </div>
      </div>
      <!-- /Register -->
    </div>
  </div>
</div>
@endsection
