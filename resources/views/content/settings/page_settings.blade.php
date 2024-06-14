@extends('layouts/layoutMaster')

@section('title', 'Settings - Development Mode')

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
        <span class="text-muted fw-light">Settings /</span> Development Mode
    </h4>
</div>

<div class="nav-align-left mb-4">
    <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#post" aria-controls="post"><i class='bx bx-pin'></i> Post</button>
        </li>
        <li class="nav-item" role="presentation">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#music" aria-controls="music"><i class='bx bx-music'></i> Music</button>
        </li>
        <li class="nav-item" role="presentation">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#news" aria-controls="news"><i class='bx bx-rss' ></i> News</button>
        </li>
        <li class="nav-item" role="presentation">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#events" aria-controls="events"><i class='bx bx-calendar'></i> Events</button>
        </li>
        <li class="nav-item" role="presentation">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#videos" aria-controls="videos"><i class='bx bx-video'></i> Videos</button>
        </li>
        <li class="nav-item" role="presentation">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#online-shop" aria-controls="navs-left-messages"><i class='bx bx-cart-add' ></i> <span style="white-space: nowrap;">Online Shop</span></button>
        </li>
        <li class="nav-item" role="presentation">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#bazar" aria-controls="bazar"><i class='bx bx-cart-download' ></i> Bazar</button>
        </li>
        <li class="nav-item" role="presentation">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#history" aria-controls="history"><i class='bx bx-stopwatch' ></i> History</button>
        </li>
        <li class="nav-item" role="presentation">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#media" aria-controls="media"><i class='bx bx-tv' ></i> Media</button>
        </li>
        <li class="nav-item" role="presentation">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#voting" aria-controls="voting"><i class='bx bx-check-circle' ></i> Voting</button>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane fade active show" id="post" role="tabpanel">
            <h5>Page Settings</h5>
            <hr class="m-0">
            <div class="p-4">
                <form action="" method="post">
                    @csrf
                    <input type="hidden" name="name" value="post_module">
                    <div class="mb-3 row">
                        <label class="col-md-1 col-form-label">Status</label>
                        <div class="col-md-11 d-flex align-items-center">
                            <div class="form-check form-switch">
                                <input class="form-check-input" onclick="confirmSettingUpdate(event)" type="checkbox" {{ $post_module->value === 'true'? 'checked': '' }}>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="tab-pane fade" id="music" role="tabpanel">
            <h5>Page Settings</h5>
            <hr class="m-0">
            <div class="p-4">
                <form action="" method="post">
                    @csrf
                    <input type="hidden" name="name" value="music_module">
                    <div class="mb-3 row">
                        <label class="col-md-1 col-form-label">Status</label>
                        <div class="col-md-11 d-flex align-items-center">
                            <div class="form-check form-switch">
                                <input class="form-check-input" onclick="confirmSettingUpdate(event)" type="checkbox" {{ $music_module->value === 'true'? 'checked': '' }}>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="tab-pane fade" id="news" role="tabpanel">
            <h5>Page Settings</h5>
            <hr class="m-0">
            <div class="p-4">
                <form action="" method="post">
                    @csrf
                    <input type="hidden" name="name" value="news_module">
                    <div class="mb-3 row">
                        <label class="col-md-1 col-form-label">Status</label>
                        <div class="col-md-11 d-flex align-items-center">
                            <div class="form-check form-switch">
                                <input class="form-check-input" onclick="confirmSettingUpdate(event)" type="checkbox" {{ $news_module->value === 'true'? 'checked': '' }}>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="tab-pane fade" id="events" role="tabpanel">
            <h5>Page Settings</h5>
            <hr class="m-0">
            <div class="p-4">
                <form action="" method="post">
                    @csrf
                    <input type="hidden" name="name" value="events_module">
                    <div class="mb-3 row">
                        <label class="col-md-1 col-form-label">Status</label>
                        <div class="col-md-11 d-flex align-items-center">
                            <div class="form-check form-switch">
                                <input class="form-check-input" onclick="confirmSettingUpdate(event)" type="checkbox" {{ $events_module->value === 'true'? 'checked': '' }}>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="tab-pane fade" id="videos" role="tabpanel">
            <h5>Page Settings</h5>
            <hr class="m-0">
            <div class="p-4">
                <form action="" method="post">
                    @csrf
                    <input type="hidden" name="name" value="videos_module">
                    <div class="mb-3 row">
                        <label class="col-md-1 col-form-label">Status</label>
                        <div class="col-md-11 d-flex align-items-center">
                            <div class="form-check form-switch">
                                <input class="form-check-input" onclick="confirmSettingUpdate(event)" type="checkbox" {{ $videos_module->value === 'true'? 'checked': '' }}>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="tab-pane fade" id="online-shop" role="tabpanel">
            <h5>Page Settings</h5>
            <hr class="m-0">
            <div class="p-4">
                <form action="" method="post">
                    @csrf
                    <input type="hidden" name="name" value="online_shop_module">
                    <div class="mb-3 row">
                        <label class="col-md-1 col-form-label">Status</label>
                        <div class="col-md-11 d-flex align-items-center">
                            <div class="form-check form-switch">
                                <input class="form-check-input" onclick="confirmSettingUpdate(event)" type="checkbox" {{ $online_shop_module->value === 'true'? 'checked': '' }}>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="tab-pane fade" id="bazar" role="tabpanel">
            <h5>Page Settings</h5>
            <hr class="m-0">
            <div class="p-4">
                <form action="" method="post">
                    @csrf
                    <input type="hidden" name="name" value="bazar_module">
                    <div class="mb-3 row">
                        <label class="col-md-1 col-form-label">Status</label>
                        <div class="col-md-11 d-flex align-items-center">
                            <div class="form-check form-switch">
                                <input class="form-check-input" onclick="confirmSettingUpdate(event)" type="checkbox" {{ $bazar_module->value === 'true'? 'checked': '' }}>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="tab-pane fade" id="history" role="tabpanel">
            <h5>Page Settings</h5>
            <hr class="m-0">
            <div class="p-4">
                <form action="" method="post">
                    @csrf
                    <input type="hidden" name="name" value="history_module">
                    <div class="mb-3 row">
                        <label class="col-md-1 col-form-label">Status</label>
                        <div class="col-md-11 d-flex align-items-center">
                            <div class="form-check form-switch">
                                <input class="form-check-input" onclick="confirmSettingUpdate(event)" type="checkbox" {{ $history_module->value === 'true'? 'checked': '' }}>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="tab-pane fade" id="media" role="tabpanel">
            <h5>Page Settings</h5>
            <hr class="m-0">
            <div class="p-4">
                <form action="" method="post">
                    @csrf
                    <input type="hidden" name="name" value="media_module">
                    <div class="mb-3 row">
                        <label class="col-md-1 col-form-label">Status</label>
                        <div class="col-md-11 d-flex align-items-center">
                            <div class="form-check form-switch">
                                <input class="form-check-input" onclick="confirmSettingUpdate(event)" type="checkbox" {{ $media_module->value === 'true'? 'checked': '' }}>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="tab-pane fade" id="voting" role="tabpanel">
            <h5>Page Settings</h5>
            <hr class="m-0">
            <div class="p-4">
                <form action="" method="post">
                    @csrf
                    <input type="hidden" name="name" value="voting_module">
                    <div class="mb-3 row">
                        <label class="col-md-1 col-form-label">Status</label>
                        <div class="col-md-11 d-flex align-items-center">
                            <div class="form-check form-switch">
                                <input class="form-check-input" onclick="confirmSettingUpdate(event)" type="checkbox" {{ $voting_module->value === 'true'? 'checked': '' }}>
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
        const name = self.closest('form').querySelector('[name=name]').value;
        const value = self.checked? 'true': 'false';
        console.log(name, value);
        $.ajax({
            url: '{{ route('settings.development-mode') }}',
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
