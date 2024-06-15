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
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js')}}"></script>
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
          <h4 class="mb-2">Welcome to Yekbun! 👋</h4>
          @if (session()->has('error'))
          <div class="alert alert-danger alert-dismissible" role="alert">
            <h6 class="alert-heading d-flex align-items-center fw-bold mb-1">{{ session('error') }}</h6>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
          </div>
          @endif
          <form id="" class="mb-3" action="{{ route('admin.login') }}" method="post">
            @csrf
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="Enter your email or username" autofocus>
              @error('email')
                <div class="invalid-feedback d-block">{{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3 form-password-toggle">
              <div class="d-flex justify-content-between">
                <label class="form-label" for="password">Password</label>
                <a href="{{url('auth/forgot-password-basic')}}">
                  <small>Forgot Password?</small>
                </a>
              </div>
              <div class="input-group input-group-merge">
                <input type="password"  class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
              </div>
              @error('password')
                <div class="invalid-feedback d-block">{{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="remember-me">
                <label class="form-check-label" for="remember-me">
                  Remember Me
                </label>
              </div>
            </div>
            <div class="mb-3">
              <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
            </div>
          </form>
        </div>
      </div>
      <!-- /Register -->
    </div>
  </div>
</div>
@endsection
