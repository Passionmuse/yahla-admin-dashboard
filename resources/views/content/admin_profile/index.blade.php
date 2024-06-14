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
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/flatpickr/flatpickr.js')}}"></script>
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/tagify/tagify.js')}}"></script>
<script src="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.js')}}"></script>
@endsection
@section('content')


<div class="container-xxl flex-grow-1 container-p-y">

    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">User / View /</span> Account
    </h4>
    <div class="row">
        <!-- User Sidebar -->
        @include('content.admin_profile.sidebar')
        <!-- User Content -->
        <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-1">
            <!-- User Pills -->
            <ul class="nav nav-pills flex-column flex-md-row mb-3">
                <li class="nav-item"><a class="nav-link active" href="{{ route('admin_profile.account') }}"><i class="bx bx-user me-1"></i>Friends</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('admin_profile.security') }}"><i class="bx bx-lock-alt me-1"></i>Posts</a></li>
                <li class="nav-item"><a class="nav-link" href="javascript:void(0)"><i class="bx bx-detail me-1"></i>Videos</a></li>
                <li class="nav-item"><a class="nav-link" href="javascript:void(0)"><i class="bx bx-bell me-1"></i>Activity</a></li>
            </ul>
            <!--/ User Pills -->

            <!-- Activity Timeline -->
            <x-activity :actions="$activity" title="Your Activity Logs" :all="false" />
            <!-- /Activity Timeline -->

        </div>
        <!--/ User Content -->
    </div>


    <!-- pricingModal -->
    <!--/ pricingModal -->

</div>

@endsection
