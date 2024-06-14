@extends('layouts/layoutMaster')

@section('title', 'Settings - Mobile App')

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
        <span class="text-muted fw-light">Settings /</span> Mobile App 
    </h4>
</div>

<div class="nav-align-left mb-4">
    <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#sign-in" aria-controls="sign-in"><i class='bx bx-user-circle'></i> Sign In</button>
        </li>
        <li class="nav-item" role="presentation">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#sign-up" aria-controls="sign-up"><i class='bx bx-user-pin'></i> Sign Up</button>
        </li>
    </ul>
    <div class="tab-content">
        {{-- Sign in start here --}}
        <div class="tab-pane fade active show" id="sign-in" role="tabpanel">
            <h5>Sign In Settings</h5>
            <hr class="m-0">
            <div class="p-4">
                <form action="" method="post">
                    @csrf
                    <input type="hidden" name="name" value="sign_in">
                    <div class="mb-3 row">
                        <label class="col-md-1 col-form-label">Status</label>
                        <div class="col-md-11 d-flex align-items-center">
                            <div class="form-check form-switch">
                                <input class="form-check-input" onclick="confirmSettingUpdate(event)" type="checkbox" {{ $sign_in->value === 'true'? 'checked': '' }}>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        {{-- Sign up start here --}}
        <div class="tab-pane fade" id="sign-up" role="tabpanel">
            <h5>Sign Up Settings</h5>
            <hr class="m-0">
            <div class="p-4">
                <form action="" method="post">
                    @csrf
                    <input type="hidden" name="name" value="sign_up">
                    <div class="mb-3 row">
                        <label class="col-md-1 col-form-label">Status</label>
                        <div class="col-md-11 d-flex align-items-center">
                            <div class="form-check form-switch">
                                <input class="form-check-input" onclick="confirmSettingUpdate(event)" type="checkbox" {{ $sign_up->value === 'true'? 'checked': '' }}>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
       
    </div>
</div>

<script>
    function confirmSettingUpdate(event) {
        event.preventDefault();
        const self = event.target;

        Swal.fire({
            title: 'Are you sure?',
            text: "Are you sure you want to " + (self.checked? 'activate': 'disable') + " this?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, ' + (self.checked? 'activate': 'disable') + ' it!',
            customClass: {
                confirmButton: 'btn btn-danger me-3',
                cancelButton: 'btn btn-label-secondary'
            },
            buttonsStyling: false
        }).then(function (result) {
            if (result.value) {
                self.setAttribute('onclick', 'updateSetting(event)');
                self.click();
                self.setAttribute('onclick', 'confirmSettingUpdate(event)');
            }
        });
    }

    function updateSetting(event) {
        const self = event.target;
        console.log(self);
        const name = self.closest('form').querySelector('[name=name]').value;
        const value = self.checked? 'true': 'false';
        // console.log(name, value);
        $.ajax({
            url: '{{ route('mobile-setting') }}',
            method: 'POST',
            data: {
                name: name,
                value: value
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (res) {
                // console.log(res);
                toastr.success("Settings successfully updated.");
            }
        });
    }
</script>
@endsection
