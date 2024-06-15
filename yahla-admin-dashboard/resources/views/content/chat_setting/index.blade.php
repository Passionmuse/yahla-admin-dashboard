@extends('layouts/layoutMaster')

@section('title', 'Settings - Payment Methods')

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
        <span class="text-muted fw-light">Mobile Settings </span>
    </h4>
</div>

<div class="nav-align-left mb-4">
    <div class="tab-content">
        {{-- Sign in start here --}}
        <div class="tab-pane fade active show" id="group-chat" role="tabpanel">
            <h5>Group Chat Settings</h5>
            <hr class="m-0">
            <div class="p-4">
                <form action="{{ route('chat-settings.store') }}" method="post">
                    @csrf
                    <input type="hidden" name="name" value="group_chat">
                    <div class="mb-3 row">
                        <label class="col-md-1 col-form-label">Status</label>
                        <div class="col-md-3">
                            <div class="form-check form-switch">
                             <select class="form-select" name="group_chat">
                                <option selected value="">Select Option</option>
                                <option value="1" {{ $group_chat->value == '1' ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ $group_chat->value == '0' ? 'selected' : '' }}>Deactive</option>
                             </select>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-md-1 col-form-label">File Size</label>
                        <div class="col-md-3 ">
                            <div class="form-check form-switch">
                           <input type ="text" name ="file_size" value="{{ $file_size->value ?? '' }}" class ="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-md-1 col-form-label">Font Type </label>
                        <div class="col-md-3">
                            <div class="form-check form-switch">
                           <input type ="text" name ="font_type" value="{{ $font_type->value ?? '' }}" class ="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-md-2 col-form-label"></label>
                        <button class="btn btn-primary col-md-1">Submit</button>
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
            url: '{{ route('chat-setting') }}',
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
