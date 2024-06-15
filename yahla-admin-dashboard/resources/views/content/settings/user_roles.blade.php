@extends('layouts/layoutMaster')

@section('title', 'Settings - User Roles - ' . ucfirst($userLevel) . ' User')

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
        {{ ucfirst($userLevel) }} User
    </h4>
</div>
<ul class="nav nav-tabs nav-fill" role="tablist">
  <li class="nav-item" role="presentation">
    <a type="button" class="nav-link {{ ucfirst($userLevel) == 'Standard' ? 'active' : '' }}" href="{{url('settings/user-roles/standard')}}" aria-selected="{{ ucfirst($userLevel) == 'Standard' ? 'true' : 'false' }}" tabindex="-1">Standard User</a>
    <div class="{{ ucfirst($userLevel) == 'Standard' ? 'tab--selected' : '' }} tab__slider"></div>
  </li>
  <li class="nav-item" role="presentation">
    <a type="button" class="nav-link {{ ucfirst($userLevel) == 'Premium' ? 'active' : '' }}" href="{{url('settings/user-roles/premium')}}" aria-selected="{{ ucfirst($userLevel) == 'Premium' ? 'true' : 'false' }}" tabindex="-1">Premium User</a>
    <div class="{{ ucfirst($userLevel) == 'Premium' ? 'tab--selected' : '' }} tab__slider"></div>
  </li>
  <li class="nav-item" role="presentation">
    <a type="button" class="nav-link {{ ucfirst($userLevel) == 'Vip' ? 'active' : '' }}" href="{{url('settings/user-roles/vip')}}" aria-selected="{{ ucfirst($userLevel) == 'Vip' ? 'true' : 'false' }}" tabindex="-1">VIP User</a>
    <div class="{{ ucfirst($userLevel) == 'Vip' ? 'tab--selected' : '' }} tab__slider"></div>
  </li>
</ul>
<div class="nav-align-left mb-4">

    <ul class="nav nav-tabs" role="tablist">
        @foreach ($modules as $module)
            <li class="nav-item" role="presentation">
                <button type="button" class="nav-link {{ $loop->first? 'active': '' }}" role="tab" data-bs-toggle="tab" data-bs-target="#{{ $module->name }}" aria-controls="{{ $module->name }}">
                    <i class='{{ $module->icon }}'></i> {{ $module->label }}
                </button>
            </li>
            @section('tab-page')
                @parent
                <div class="tab-pane fade {{ $loop->first? 'active show': '' }}" id="{{ $module->name }}" role="tabpanel">
                    <h4 class="px-4">{{ $module->label }}</h4>
                    <!-- <hr class="m-0"> -->
                    <div class="p-4 pb-0">
                        <form action="" method="post">
                            @csrf
                            <input type="hidden" name="module" value="{{ $module->name }}">
                            @foreach ($module->userPermissions as $permission)
                                <div class="mb-3 row">
                                    <label class="col-md-2 col-form-label">{{ $permission->label }}</label>
                                    <div class="col-md-5 d-flex align-items-center">
                                        @if ($permission->inputType === 'select')
                                            <select class="form-control" data-setting name="{{ $userLevel . '_' . $module->name . '_' . $permission->name }}">
                                                @foreach ($permission->options as $option)
                                                    <option value="{{ $option->value }}" {{ $permission->value && $option->value === $permission->value? 'selected': '' }}>{{ $option->label }}</option>
                                                @endforeach
                                            </select>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                            <div class="">
                                <button type="button" class="btn btn-primary" onclick="updateSettings(event)">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            @endsection
        @endforeach
    </ul>
    <div class="tab-content">
        @yield('tab-page')
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

    function updateSettings(event) {
        const self = event.target;
        const userLevel = '{{ $userLevel }}';
        const form = self.closest('form');
        const settingInputs = form.querySelectorAll('[data-setting]');
        const settings = [];
        settingInputs.forEach(input => {
            settings.push({
                name: input.name,
                value: input.value
            });
        });

        $.ajax({
            url: '{{ route('settings.saveMany') }}',
            method: 'POST',
            data: {settings},
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
