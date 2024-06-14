@extends('layouts/layoutMaster')

@section('title', 'Settings - User Roles - Fanpage')

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
</style>
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.js')}}"></script>
@endsection

@section('content')
<div class="d-flex justify-content-between">
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">Settings /</span> 
        <span class="text-muted fw-light">User Roles /</span> 
        Fanpage
    </h4>
</div>
@endsection
