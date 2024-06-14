@extends('layouts/layoutMaster')

@section('title', 'Account settings - Account')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/animate-css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/admin/style.css') }}">


    <!--<link rel="stylesheet" href="https://efood-admin.6amtech.com/public/assets/admin/css/vendor.min.css">-->
    <link rel="stylesheet" href="https://efood-admin.6amtech.com/public/assets/admin/vendor/icon-set/style.css">
    <!--<link rel="stylesheet" href="https://efood-admin.6amtech.com/public/assets/admin/css/owl.min.css">-->

    <!--<link rel="stylesheet" href="https://efood-admin.6amtech.com/public/assets/admin/css/theme.minc619.css?v=1.0">-->
    <!--<script
        src="https://efood-admin.6amtech.com/public/assets/admin/vendor/hs-navbar-vertical-aside/hs-navbar-vertical-aside-mini-cache.js">
    </script>-->
    <!--<link rel="stylesheet" href="https://efood-admin.6amtech.com/public/assets/admin/css/toastr.css">-->
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">-->
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave-phone.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>


    <!--<script src="https://efood-admin.6amtech.com/public/assets/admin/js/vendor.min.js"></script>-->
    <!--<script src="https://efood-admin.6amtech.com/public/assets/admin/js/theme.min.js"></script>-->
    <!--<script src="https://efood-admin.6amtech.com/public/assets/admin/js/sweet_alert.js"></script>-->
    <!--<script src="https://efood-admin.6amtech.com/public/assets/admin/js/toastr.js"></script>-->
    <!--<script src="https://efood-admin.6amtech.com/public/assets/admin/js/owl.min.js"></script>-->
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>-->
@endsection

@section('page-script')
    <script src="{{ asset('assets/js/pages-account-settings-account.js') }}"></script>
@endsection

@section('content')
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-sm mb-2 mb-sm-0">
                    <h1 class="page-header-title">Settings</h1>
                </div>

            </div>

        </div>
        <br>
        <div class="row">
            <div class="col-lg-4">

                <div class="navbar-vertical navbar-expand-lg mb-3 mb-lg-5">

                    <button type="submit" class="navbar-toggler btn btn-block btn-white mb-3"
                        aria-label="Toggle navigation" aria-expanded="false" aria-controls="navbarVerticalNavMenu"
                        data-toggle="collapse" data-target="#navbarVerticalNavMenu">
                        <span class="d-flex justify-content-between align-items-center">
                            <span class="h5 mb-0">Nav menu</span>
                            <span class="navbar-toggle-default">
                                <i class="tio-menu-hamburger"></i>
                            </span>
                            <span class="navbar-toggle-toggled">
                                <i class="tio-clear"></i>
                            </span>
                        </span>
                    </button>

                    <div id="navbarVerticalNavMenu" class="collapse navbar-collapse">

                        {{-- <ul id="navbarSettings"
                            class="js-sticky-block js-scrollspy navbar-nav navbar-nav-lg nav-tabs card card-navbar-nav w-100 d-inline-block p-2">
                            <li class="nav-item">
                                <a class="nav-link active d-inline-block p-2" href="javascript:" id="generalSection">
                                    <i class="tio-user-outlined nav-icon"></i> Basic information
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-inline-block p-2" href="javascript:" id="passwordSection">
                                    <i class="tio-lock-outlined nav-icon"></i> Password
                                </a>
                            </li>
                        </ul> --}}

                    </div>
                </div>

            </div>
            <div class="col-lg-12">

                <form action="{{ route('admin_profile.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3 mb-lg-5 d-flex justify-content-center " id="generalDiv">

                        <style>
                            .card>.profile-cover,
                            .card>.profile-cover .profile-cover-img,
                            .card>.profile-cover .profile-cover-img-wrapper {
                                border-bottom-right-radius: 0;
                                border-bottom-left-radius: 0;
                            }

                            @media (min-width: 992px) .profile-cover {
                                height: 10rem;
                            }

                            .profile-cover {
                                position: relative;
                                height: 7.5rem;
                                padding: 1.75rem 2rem;
                                border-radius: 0.75rem;
                            }

                            .profile-cover-img-wrapper {
                                height: 10rem;
                            }

                            .profile-cover-img-wrapper {
                                position: absolute;
                                top: 60%;
                                inset-inline-end: 0;
                                inset-inline-start: 0;
                                height: 7.5rem;
                                background-color: #e7eaf3;
                                border-radius: 0.75rem;
                            }

                            .avatar:not(img) {
                                background-color: #fff;
                            }

                            .profile-cover-avatar {
                                display: -ms-flexbox;
                                display: flex;
                                margin: -6.3rem auto 0.5rem;
                            }

                            .avatar-uploader {
                                cursor: pointer;
                                display: inline-block;
                                transition: .2s;
                                margin-bottom: 0;
                            }

                            .avatar-xxl {
                                width: 7.875rem;
                                height: 7.875rem;
                            }

                            .avatar-border-lg {
                                border: 0.1875rem solid #fff;
                            }

                            .avatar-circle {
                                border-radius: 50% !important;
                            }

                            .avatar {
                                position: relative;
                                display: inline-block;
                                /*width: 7.625rem;*/
                                /*height: 7.625rem;*/
                                border-radius: 0.3125rem;
                            }

                            label {
                                color: #334257;
                                text-transform: capitalize;
                            }

                            label {
                                display: inline-block;
                                margin-bottom: 0.5rem;
                            }

                            .avatar-circle .avatar-img,
                            .avatar-circle .avatar-initials {
                                border-radius: 50%;
                            }

                            .avatar-img {
                                display: block;
                                max-width: 100%;
                                height: 100%;
                                -o-object-fit: cover;
                                object-fit: cover;
                                pointer-events: none;
                                border-radius: 0.3125rem;
                            }

                            .avatar-uploader-input {
                                position: absolute;
                                top: 0;
                                inset-inline-end: 0;
                                inset-inline-start: 0;
                                z-index: -1;
                                opacity: 0;
                                width: 100%;
                                height: 100%;
                                background-color: rgba(19, 33, 68, .25);
                                border-radius: 50%;
                                transition: .2s;
                            }

                            .avatar-uploader-trigger {
                                position: absolute;
                                bottom: 0;
                                inset-inline-end: 0;
                                cursor: pointer;
                                border-radius: 50%;
                            }

                            .avatar-xxl .avatar-uploader-icon {
                                width: 2.1875rem;
                                height: 2.1875rem;
                            }

                            .shadow-soft {
                                box-shadow: 0 3px 6px 0 rgba(140, 152, 164, .25) !important;
                            }

                            .avatar-uploader-icon {
                                display: -ms-inline-flexbox;
                                display: inline-flex;
                                -ms-flex-negative: 0;
                                flex-shrink: 0;
                                -ms-flex-pack: center;
                                justify-content: center;
                                -ms-flex-align: center;
                                align-items: center;
                                color: #677788;
                                background-color: #fff;
                                border-radius: 50%;
                                transition: .2s;
                            }
                        </style>

                        <label class="avatar avatar-xxl avatar-circle avatar-border-lg avatar-uploader profile-cover-avatar"
                            for="avatarUploader">
                            <img id="viewer"
                                onerror="this.src='https://efood-admin.6amtech.com/public/assets/admin/img/160x160/img1.jpg'"
                                class="avatar-img"
                                src="{{ $user->image ? asset('uploads/students/' . $user->image) : asset('https://efood-admin.6amtech.com/public/assets/admin/img/160x160/img1.jpg') }}"
                                width="70px" height="70px" alt="Image" class="avatar-img">

                            <input type="file" name="image" class="js-file-attach avatar-uploader-input"
                                id="customFileEg1" accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*">
                            <label class="avatar-uploader-trigger" for="customFileEg1">
                                <i class="tio-edit avatar-uploader-icon shadow-soft"></i>
                            </label>
                        </label>


                    </div>


                    <div class="card mb-3 mb-lg-5">
                        <div class="card-header">
                            <h2 class="card-title h4"><i class="tio-info"></i> Basic information </h2>
                        </div>

                        <div class="card-body">


                            <div class="row form-group">
                                <label for="firstNameLabel"
                                    class="col-sm-3 col-form-label input-label label-has-tooltip">Full name <i
                                        class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top"
                                        title="" data-original-title="Display name"></i></label>
                                <div class="col-sm-9">
                                    <div class="input-group input-group-sm-down-break">
                                        <input type="text" class="form-control" name="f_name" id="firstNameLabel"
                                            placeholder="Your first name" aria-label="Your first name"
                                            value="{{ $user->l_name }}">
                                        <input type="text" class="form-control" name="l_name" id="lastNameLabel"
                                            placeholder="Your last name"
                                            aria-label="Your last name"value="{{ $user->f_name }}">
                                    </div>
                                </div>
                            </div>

                            <br>
                            <div class="row form-group">
                                <label for="phoneLabel" class="col-sm-3 col-form-label input-label">Phone <span
                                        class="input-label-secondary">(Optional)</span></label>
                                <div class="col-sm-9">
                                    <input type="text" class="js-masked-input form-control" name="phone"
                                        id="phoneLabel" placeholder="+x(xxx)xxx-xx-xx" aria-label="+(xxx)xx-xxx-xxxxx"
                                        value="{{ $user->phone }}">

                                </div>
                            </div>

                            <br>
                            <div class="row form-group">
                                <label for="newEmailLabel" class="col-sm-3 col-form-label input-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" name="email" id="newEmailLabel"
                                        value="admin@admin.com" placeholder="Enter new email address"
                                        aria-label="Enter new email address">
                                </div>
                            </div>

                            <br>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>

                        </div>

                    </div>

                </form>

                <div id="passwordDiv" class="card mb-3 mb-lg-5">
                    <div class="card-header">
                        <h4 class="card-title"><i class="tio-lock"></i> Change your password</h4>
                    </div>

                    <div class="card-body">

                        <form action="{{ route('admin_change_password') }}" method="post"enctype="multipart/form-data">

                            @csrf

                            <div class="row form-group">
                                <label for="newPassword" class="col-sm-3 col-form-label input-label">New password</label>
                                <div class="col-sm-9 input-group input-group-merge">
                                    <input type="password" name="password"
                                        class="js-toggle-password form-control form-control input-field" id="password"
                                        placeholder="Enter new password" required=""
                                        data-hs-toggle-password-options="{
                                        &quot;target&quot;: &quot;#changePassTarget&quot;,
                                        &quot;defaultClass&quot;: &quot;tio-hidden-outlined&quot;,
                                        &quot;showClass&quot;: &quot;tio-visible-outlined&quot;,
                                        &quot;classChangeTarget&quot;: &quot;#changePassIcon&quot;
                                        }">
                                </div>
                            </div>


                            <br>
                            <div class="row form-group">
                                <label for="confirmNewPasswordLabel" class="col-sm-3 col-form-label input-label">Confirm
                                    password</label>
                                <div class="col-sm-9 input-group input-group-merge">
                                    <input type="password" name="confirm_password"
                                        class="js-toggle-password form-control form-control input-field"
                                        id="confirm_password" placeholder="Confirm your new password" required=""
                                        data-hs-toggle-password-options="{
                                                &quot;target&quot;: &quot;#changeConPassTarget&quot;,
                                                &quot;defaultClass&quot;: &quot;tio-hidden-outlined&quot;,
                                                &quot;showClass&quot;: &quot;tio-visible-outlined&quot;,
                                                &quot;classChangeTarget&quot;: &quot;#changeConPassIcon&quot;
                                                }">
                                </div>
                            </div>

                            <br>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">Save changes </button>
                            </div>
                        </form>

                    </div>

                </div>


                <div id="stickyBlockEndPoint"></div>
            </div>
        </div>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-sidebar/3.3.2/jquery.sidebar.min.js"
        integrity="sha512-sE4GyQp4GEFV4qtelZtk1VmjxViVV9zC3PnZCKEjmDIiNZ+MpY/53EKGk+eZUx4FvvH7F2QgduRa2Oxe/pK7fQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-sidebar/3.3.2/jquery.sidebar.js"
        integrity="sha512-y8re1na3dlaxdUOVLuChUco/+7zYw4QO0ghT2oRW6coXyv8aSNDeSPplNWwzb4Xe58tAQu3Ez3wLwv38/WVGTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).on('ready', function() {

            $(".direction-toggle").on("click", function() {
                setDirection(localStorage.getItem("direction"));
            });

            function setDirection(direction) {
                if (direction == "rtl") {
                    localStorage.setItem("direction", "ltr");
                    $("html").attr('dir', 'ltr');
                    $(".direction-toggle").find('span').text('Toggle RTL')
                } else {
                    localStorage.setItem("direction", "rtl");
                    $("html").attr('dir', 'rtl');
                    $(".direction-toggle").find('span').text('Toggle LTR')
                }
            }

            if (localStorage.getItem("direction") == "rtl") {
                $("html").attr('dir', "rtl");
                $(".direction-toggle").find('span').text('Toggle LTR')
            } else {
                $("html").attr('dir', "ltr");
                $(".direction-toggle").find('span').text('Toggle RTL')
            }

        })
    </script>
    <script>
        // INITIALIZATION OF NAVBAR VERTICAL NAVIGATION
        // =======================================================
        var sidebar = $('.js-navbar-vertical-aside').hsSideNav();

        $(document).on('ready', function() {

            // BUILDER TOGGLE INVOKER
            // =======================================================
            $('.js-navbar-vertical-aside-toggle-invoker').click(function() {
                $('.js-navbar-vertical-aside-toggle-invoker i').tooltip('hide');
            });
            // INITIALIZATION OF UNFOLD
            // =======================================================
            $('.js-hs-unfold-invoker').each(function() {
                var unfold = new HSUnfold($(this)).init();
            });






            // INITIALIZATION OF TOOLTIP IN NAVBAR VERTICAL MENU
            // =======================================================
            $('.js-nav-tooltip-link').tooltip({
                boundary: 'window'
            })

            $(".js-nav-tooltip-link").on("show.bs.tooltip", function(e) {
                if (!$("body").hasClass("navbar-vertical-aside-mini-mode")) {
                    return false;
                }
            });


        });
    </script>
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#viewer').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#customFileEg1").change(function() {
            readURL(this);
        });
    </script>
    <script>
        $("#generalSection").click(function() {
            $("#passwordSection").removeClass("active");
            $("#generalSection").addClass("active");
            $('.content').animate({
                scrollTop: $("#generalDiv").offset().top
            }, 2000);
        });

        $("#passwordSection").click(function() {
            $("#generalSection").removeClass("active");
            $("#passwordSection").addClass("active");
            $('.content').animate({
                scrollTop: $("#passwordDiv").offset().top
            }, 2000);
        });
    </script>
    <script>
        $(window).on('load', function() {
            if ($(".navbar-vertical-content li.active").length) {
                $('.navbar-vertical-content').animate({
                    scrollTop: $(".navbar-vertical-content li.active").offset().top - 150
                }, 10);
            }
        });

        //Sidebar Menu Search
        var $rows = $('.navbar-vertical-content  .navbar-nav > li');
        $('#search-bar-input').keyup(function() {
            var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();

            $rows.show().filter(function() {
                var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
                return !~text.indexOf(val);
            }).hide();
        });
    </script>
    <audio id="myAudio">
        <source src="https://efood-admin.6amtech.com/public/assets/admin/sound/notification.mp3" type="audio/mpeg">
    </audio>
    <script>
        var audio = document.getElementById("myAudio");

        function playAudio() {
            audio.play();
        }

        function pauseAudio() {
            audio.pause();
        }

        //File Upload
        $(window).on('load', function() {
            $(".upload-file__input").on("change", function() {
                if (this.files && this.files[0]) {
                    let reader = new FileReader();
                    let img = $(this).siblings(".upload-file__img").find('img');

                    reader.onload = function(e) {
                        img.attr("src", e.target.result);
                        console.log($(this).parent());
                    };

                    reader.readAsDataURL(this.files[0]);
                }
            });
        })
    </script>
    <script>
        setInterval(function() {
            $.get({
                url: 'https://efood-admin.6amtech.com/admin/get-restaurant-data',
                dataType: 'json',
                success: function(response) {
                    let data = response.data;
                    if (data.new_order > 0) {
                        playAudio();
                        $('#popup-modal').appendTo("body").modal('show');
                    }
                },
            });
        }, 10000);

        function check_order() {
            location.href = 'https://efood-admin.6amtech.com/admin/orders/list/all';
        }

        function route_alert(route, message) {
            Swal.fire({
                title: 'Are you sure ',
                text: message,
                type: 'warning',
                showCancelButton: true,
                cancelButtonColor: 'default',
                confirmButtonColor: '#FC6A57',
                cancelButtonText: 'No',
                confirmButtonText: 'Yes',
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    location.href = route;
                }
            })
        }

        function form_alert(id, message) {
            Swal.fire({
                title: 'Are you sure ',
                text: message,
                type: 'warning',
                showCancelButton: true,
                cancelButtonColor: 'default',
                confirmButtonColor: '#FC6A57',
                cancelButtonText: 'No',
                confirmButtonText: 'Yes',
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    $('#' + id).submit()
                }
            })
        }
    </script>
    <script>
        function call_demo() {
            toastr.info('This option is disabled for demo!', {
                CloseButton: true,
                ProgressBar: true
            });
        }
    </script>
    <script></script>
    <script>
        if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write(
            '<script src="https://efood-admin.6amtech.com/public/assets/admin/vendor/babel-polyfill/polyfill.min.js"><\/script>'
        );
    </script>
    <script>
        function status_change(t) {
            let url = $(t).data('url');
            let checked = $(t).prop("checked");
            let status = checked === true ? 1 : 0;

            Swal.fire({
                title: 'Are you sure?',
                text: 'Want to change status',
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#FC6A57',
                cancelButtonColor: 'default',
                cancelButtonText: 'No',
                confirmButtonText: 'Yes',
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url: url,
                        data: {
                            status: status
                        },
                        success: function(data, status) {
                            toastr.success("Status changed successfully");
                        },
                        error: function(data) {
                            toastr.error("Status changed failed");
                        }
                    });
                } else if (result.dismiss) {
                    if (status == 1) {
                        $('#' + t.id).prop('checked', false)

                    } else if (status == 0) {
                        $('#' + t.id).prop('checked', true)
                    }
                    toastr.info("Status has not changed");
                }
            })
        }
    </script>
    <script>
        let initialImages = [];
        $(window).on('load', function() {
            $("form").find('img').each(function(index, value) {
                initialImages.push(value.src);
            })
        })

        $(document).ready(function() {
            $('form').on('reset', function(e) {
                $("form").find('img').each(function(index, value) {
                    $(value).attr('src', initialImages[index]);
                })
                $('.js-select2-custom').val(null).trigger('change');

            });
        });
    </script>
    <script>
        $(document).on('ready', function() {
            // INITIALIZATION OF SHOW PASSWORD
            // =======================================================
            $('.js-toggle-password').each(function() {
                new HSTogglePassword(this).init()
            });

            // INITIALIZATION OF FORM VALIDATION
            // =======================================================
            $('.js-validate').each(function() {
                $.HSCore.components.HSValidation.init($(this));
            });
        });
    </script>
    <script>
        $('[data-toggle="tooltip"]').parent('label').addClass('label-has-tooltip')
    </script>
    <script>
        $('.blinkings').on('mouseover', () => $('.blinkings').removeClass('active'))
        $('.blinkings').addClass('open-shadow')
        setTimeout(() => {
            $('.blinkings').removeClass('active')
        }, 10000);
        setTimeout(() => {
            $('.blinkings').removeClass('open-shadow')
        }, 5000);
    </script>
    <script>
        $(function() {
            var owl = $('.single-item-slider');
            owl.owlCarousel({
                autoplay: false,
                items: 1,
                onInitialized: counter,
                onTranslated: counter,
                autoHeight: true,
                dots: true,
            });

            function counter(event) {
                var element = event.target; // DOM element, in this example .owl-carousel
                var items = event.item.count; // Number of items
                var item = event.item.index + 1; // Position of the current item

                // it loop is true then reset counter from 1
                if (item > items) {
                    item = item - items
                }
                $('.slide-counter').html(+item + "/" + items)
            }
        });
    </script>
    <script>
        function toogleStatusModal(e, toggle_id, on_image, off_image, on_title, off_title, on_message, off_message) {
            // console.log($('#'+toggle_id).is(':checked'));
            e.preventDefault();
            if ($('#' + toggle_id).is(':checked')) {
                $('#toggle-status-title').empty().append(on_title);
                $('#toggle-status-message').empty().append(on_message);
                $('#toggle-status-image').attr('src', "https://efood-admin.6amtech.com/public/assets/admin/img/modal/" +
                    on_image);
                $('#toggle-status-ok-button').attr('toggle-ok-button', toggle_id);
            } else {
                $('#toggle-status-title').empty().append(off_title);
                $('#toggle-status-message').empty().append(off_message);
                $('#toggle-status-image').attr('src', "https://efood-admin.6amtech.com/public/assets/admin/img/modal/" +
                    off_image);
                $('#toggle-status-ok-button').attr('toggle-ok-button', toggle_id);
            }
            $('#toggle-status-modal').modal('show');
        }

        function confirmStatusToggle() {

            var toggle_id = $('#toggle-status-ok-button').attr('toggle-ok-button');
            if ($('#' + toggle_id).is(':checked')) {
                $('#' + toggle_id).prop('checked', false);
                $('#' + toggle_id).val(0);
            } else {
                $('#' + toggle_id).prop('checked', true);
                $('#' + toggle_id).val(1);
            }
            // console.log($('#'+toggle_id+'_form'));
            console.log(toggle_id);
            $('#' + toggle_id + '_form').submit();

        }

        function checkMailElement(id) {
            console.log(id);
            if ($('.' + id).is(':checked')) {
                $('#' + id).show();
            } else {
                $('#' + id).hide();
            }
        }

        function change_mail_route(value) {
            if (value == 'user') {
                var url = 'https://efood-admin.6amtech.com/admin/business-settings/email-setup/' + value + '/new-order';
            } else if (value == 'dm') {
                var url = 'https://efood-admin.6amtech.com/admin/business-settings/email-setup/' + value + '/registration';
            }
            location.href = url;
        }


        function checkedFunc() {
            $('.switch--custom-label .toggle-switch-input').each(function() {
                if (this.checked) {
                    $(this).closest('.switch--custom-label').addClass('checked')
                } else {
                    $(this).closest('.switch--custom-label').removeClass('checked')
                }
            })
        }
        checkedFunc()
        $('.switch--custom-label .toggle-switch-input').on('change', checkedFunc)
    </script>
@endsection
