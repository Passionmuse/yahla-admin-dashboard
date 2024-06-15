@extends('layouts/layoutMaster')

@section('title', 'Notes')

@section('page-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-icons.css') }}" />
    <style>
      .custom-option-icon .form-check-input{
        background-color: transparent !important;
        border:none !important;
      }
        #wizard-create-deal-form .form-check-input:checked,
        #wizard-create-deal-form .form-check-input[type=checkbox] {
            background-color: transparent !important;
            border:none !important;
            box-shadow: none !important;
            background-image: none !important;
        }
        .dropdown.is-right .dropdown-menu {
            left: 56px;
            right: auto;
            padding: 0;
            top:-22px;
        }
        .dropdown-item h6, .h6, h5, .h5, h4, .h4, h3, .h3, h2, .h2, h1, .h1{
          margin-bottom: 0 !important;
        }

        .modal-content, .modal-card{
          overflow-x: hidden !important;
        }
        .modal-header .btn-close{
          top: 10px;
          position: relative;
          right: 14px;
        }

        .modal-body .btn-close{
          top: -20px !important;
          right: -20px !important;
        }
    </style>
@endsection

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bs-stepper/bs-stepper.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/tagify/tagify.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/animate-css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/dropzone/dropzone.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/friendkit/css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/friendkit/css/core.css') }}" />
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/wizard-ex-property-listing.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/bs-stepper/bs-stepper.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/tagify/tagify.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>
    <!-- Concatenated js plugins and jQuery -->
    <script src="{{asset('assets/friendkit/js/app.js')}}"></script>

    <!-- Core js -->
    <script src="{{asset('assets/friendkit/js/global.js')}}"></script>

    <!-- Navigation options js -->
    <script src="{{asset('assets/friendkit/js/navbar-v1.js')}}"></script>
    <script src="{{asset('assets/friendkit/js/navbar-v2.js')}}"></script>
    <script src="{{asset('assets/friendkit/js/navbar-mobile.js')}}"></script>
    <script src="{{asset('assets/friendkit/js/navbar-options.js')}}"></script>
    <script src="{{asset('assets/friendkit/js/sidebar-v1.js')}}"></script>

    <!-- Core instance js -->
    <script src="{{asset('assets/friendkit/js/main.js')}}"></script>
    <script src="{{asset('assets/friendkit/js/chat.js')}}"></script>
    <script src="{{asset('assets/friendkit/js/touch.js')}}"></script>
    <script src="{{asset('assets/friendkit/js/tour.js')}}"></script>

    <!-- Components js -->
    <script src="{{asset('assets/friendkit/js/explorer.js')}}"></script>
    <script src="{{asset('assets/friendkit/js/widgets.js')}}"></script>
    <script src="{{asset('assets/friendkit/js/modal-uploader.js')}}"></script>
    <script src="{{asset('assets/friendkit/js/popovers-users.js')}}"></script>
    <script src="{{asset('assets/friendkit/js/popovers-pages.js')}}"></script>
    <script src="{{asset('assets/friendkit/js/lightbox.js')}}"></script>

    <!-- Landing page js -->

    <!-- Signup page js -->

    <!-- Feed pages js -->
    <script src="{{asset('assets/friendkit/js/feed.js')}}"></script>

    <script src="{{asset('assets/friendkit/js/webcam.js')}}"></script>
    <script src="{{asset('assets/friendkit/js/compose.js')}}"></script>
    <script src="{{asset('assets/friendkit/js/autocompletes.js')}}"></script>
@endsection

@section('content')

    <div class="content-wrapper">

        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">

            <!-- Create Deal Wizard -->
            <div id="wizard-create-deal" class="bs-stepper vertical mt-2 linear"
                style="box-shadow:none;background-color:transparent">
                <div class="bs-stepper-content">
                    <form id="wizard-create-deal-form" onsubmit="return false">
                        <!-- Deal Type -->
                        <div id="deal-type"
                            class="content active dstepper-block fv-plugins-bootstrap5 fv-plugins-framework">
                            <div class="row g-3">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-md mb-md-0 mb-2">
                                            <div class="form-check card custom-option custom-option-icon">
                                                <a href="javascript:void(0)" class="form-check-label custom-option-content"
                                                    for="customRadioPercentage" data-bs-toggle="modal" data-bs-target="#createnewsModal">
                                                    <span class="custom-option-body">
                                                        <svg height="512" viewBox="0 0 64 64" width="512" xmlns="http://www.w3.org/2000/svg"><g id="expanded"><g fill="#2a3854"><path d="m20.16791 41.875a31.92891 31.92891 0 0 0 -4.08917-9.15131c-.02655-.00012-.05213-.004-.07874-.004s-.05219.00384-.07874.004a31.92891 31.92891 0 0 0 -4.08917 9.15131z"/><path d="m8.83978 44.375h-7.6441a14.719 14.719 0 0 0 .0003 7.19043h7.64392a26.48248 26.48248 0 0 1 -.00012-7.19043z"/><path d="m20.68274 44.375h-9.36542a23.78129 23.78129 0 0 0 .00012 7.19043h9.36518a23.78129 23.78129 0 0 0 .00012-7.19043z"/><path d="m11.83234 54.06543a31.929 31.929 0 0 0 4.08892 9.15033c.02655.00012.05213.004.07874.004s.05219-.00385.07874-.004a31.929 31.929 0 0 0 4.08892-9.15033z"/><path d="m22.70245 41.875h7.268a15.29891 15.29891 0 0 0 -10.7962-8.81793 32.7778 32.7778 0 0 1 3.5282 8.81793z"/><path d="m22.70221 54.06543a32.77982 32.77982 0 0 1 -3.528 8.817 15.29891 15.29891 0 0 0 10.79579-8.817z"/><path d="m30.804 51.56543a14.719 14.719 0 0 0 .0003-7.19043h-7.6441a26.48248 26.48248 0 0 1 -.00012 7.19043z"/><path d="m9.29779 54.06543h-7.26779a15.29891 15.29891 0 0 0 10.79577 8.817 32.77982 32.77982 0 0 1 -3.52798-8.817z"/><path d="m9.29755 41.875a32.7778 32.7778 0 0 1 3.52819-8.81793 15.29891 15.29891 0 0 0 -10.7962 8.81793z"/></g><path d="m34.75977 3.25h-3a1.25 1.25 0 0 1 0-2.5h3a1.25 1.25 0 0 1 0 2.5z" fill="#ff8a93"/><path d="m2 31.6001a1.24991 1.24991 0 0 1 -1.25-1.25v-26.3501a3.25377 3.25377 0 0 1 3.25-3.25h22.75977a1.25 1.25 0 0 1 0 2.5h-22.75977a.76011.76011 0 0 0 -.75.75v26.3501a1.24991 1.24991 0 0 1 -1.25 1.25z" fill="#2a3854"/><path d="m58.25 15.75h-10v-11.75a3.25377 3.25377 0 0 0 -3.25-3.25h-5.24023a1.25 1.25 0 0 0 0 2.5h5.24023a.76011.76011 0 0 1 .75.75v50.5a8.71988 8.71988 0 0 0 2.63763 6.25h-18.38763a1.25 1.25 0 0 0 0 2.5h24.5a8.75935 8.75935 0 0 0 8.75-8.75v-33.75a5.00588 5.00588 0 0 0 -5-5zm-10 2.5h5.69556a4.94151 4.94151 0 0 0 -.69556 2.5v29.07813h-5zm12.5 36.25a6.25 6.25 0 0 1 -12.5 0v-2.17187h5.25a2.25309 2.25309 0 0 0 2.25-2.25v-29.32813a2.5 2.5 0 0 1 5 0z" fill="#2a3854"/><path d="m42.10352 5.88818h-35.20704a1.24991 1.24991 0 0 0 -1.25 1.25v13.57471a1.24991 1.24991 0 0 0 1.25 1.25h35.207a1.24991 1.24991 0 0 0 1.25-1.25v-13.57471a1.24991 1.24991 0 0 0 -1.24996-1.25zm-29.06739 12.00635-2.96777-4.29687v3.87695a1 1 0 0 1 -2 0v-7.08447a1.00105 1.00105 0 0 1 1.82324-.56836l3.12207 4.52148-.03808-3.95654a1.00072 1.00072 0 0 1 .99023-1.00972h.00977a.9999.9999 0 0 1 1 .99024l.0664 6.8584a1.09162 1.09162 0 0 1 -2.00586.66889zm7.58106-4.96875a1 1 0 0 1 0 2h-1.74512v1.51611h1.96387a1 1 0 0 1 0 2h-2.96387a.99974.99974 0 0 1 -1-1v-7.03271a.99974.99974 0 0 1 1-1h2.96387a1 1 0 0 1 0 2h-1.96387v1.5166zm11.07812 4.63522a1.15964 1.15964 0 0 1 -2.22558.14111l-1.21125-3.92987-1.20379 3.88934a1.15933 1.15933 0 0 1 -2.23926-.1001l-1.38281-6.99068a1.00041 1.00041 0 0 1 1.96289-.38769l.7334 3.708 1.1748-3.79736a1.01076 1.01076 0 0 1 1.91113-.01123l1.17188 3.80713.73633-3.69531a.99973.99973 0 1 1 1.96095.39066zm9.19727-1.44874a3.03878 3.03878 0 0 1 -3.09668 2.36231 4.331 4.331 0 0 1 -3.21485-1.38037 1.00024 1.00024 0 0 1 1.48243-1.3432 2.35658 2.35658 0 0 0 1.73242.72363 1.07869 1.07869 0 0 0 1.12793-.71387c.082-.45654-.63574-.75928-.8584-.84131-1.10352-.40673-2.085-.84375-2.126-.8623-1.74156-.76629-1.7152-3.80058.69336-4.52637a4.26 4.26 0 0 1 3.707.81055 1 1 0 0 1 -1.2812 1.53567 2.24384 2.24384 0 0 0 -1.84959-.4312c-.53249.16094-.591.62834-.36328.82568.26465.11524 1.05957.45752 1.91211.77149 1.85643.68503 2.3203 2.03467 2.13475 3.06933z" fill="#5dd1fd"/><path d="m42.10352 28.59766h-35.20704a1.25 1.25 0 0 1 0-2.5h35.207a1.25 1.25 0 0 1 0 2.5z" fill="#2a3854"/><path d="m42.10352 35.73047h-11.92286a1.25 1.25 0 0 1 0-2.5h11.92286a1.25 1.25 0 0 1 0 2.5z" fill="#2a3854"/><path d="m42.10352 41.99023h-8.84473a1.25 1.25 0 0 1 0-2.5h8.84473a1.25 1.25 0 0 1 0 2.5z" fill="#2a3854"/><path d="m42.10352 48.25h-6.78125a1.25 1.25 0 0 1 0-2.5h6.78125a1.25 1.25 0 0 1 0 2.5z" fill="#2a3854"/><path d="m42.10352 54.50977h-6.78125a1.25 1.25 0 0 1 0-2.5h6.78125a1.25 1.25 0 0 1 0 2.5z" fill="#2a3854"/></g></svg>
                                                        <span class="custom-option-title">Create News</span>
                                                        <small>Share News with your Community</small>
                                                    </span>
                                                    <input name="customRadioIcon" class="form-check-input" type="radio"
                                                        value="" id="customRadioPercentage">
                                                  </a>
                                            </div>
                                        </div>
                                        <div class="col-md mb-md-0 mb-2">
                                            <div class="form-check card custom-option custom-option-icon">
                                                <a href="{{url('app/user/notes?type=admin-feeds')}}" class="form-check-label custom-option-content"
                                                data-bs-toggle="modal" data-bs-target="#createnewsModal"
                                                for="customRadioFlat">
                                                    <span class="custom-option-body">
                                                        <svg id="Master_Line" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><path d="m295.93 426.52c-6.27-1.46-12.53-2.57-18.8-3.34v-22.49c11.02-7.24 18.49-19.09 20.03-32.52h.59l5.36-2.38c3.29-1.46 5.56-4.55 5.96-8.13l1.15-10.1c.47-4.1-2.74-7.69-6.87-7.69h-4.12-.59l.15-3.13c1.21-24.59-18.4-45.18-43.02-45.18s-44.23 20.6-43.02 45.18l.15 3.13h-.55-4.12c-4.13 0-7.33 3.59-6.87 7.69l1.15 10.1c.41 3.58 2.68 6.67 5.96 8.13l5.36 2.38h.56c1.55 13.43 9.01 25.28 20.03 32.52v22.49c-6.18.76-12.35 1.86-18.53 3.28-15.52 3.59-25.95 18.14-24.25 33.98l1.95 18.16c18.13 11.01 39.41 17.35 62.18 17.35 22.76 0 44.05-6.34 62.18-17.35l1.95-18.16c1.74-15.74-8.55-30.33-23.97-33.92z" fill="#5cd1fd"/><g fill="#ebeced"><path d="m88.59 74.05c6.49 0 12.01-4.52 13.53-10.83 4.86-20.07 22.95-34.98 44.52-34.98s39.65 14.91 44.52 34.98c1.53 6.31 7.05 10.83 13.53 10.83 0-32.06-25.99-58.05-58.05-58.05s-58.05 25.99-58.05 58.05z"/><path d="m337.16 149.47c6.76 0 12.43-4.93 13.59-11.59 5.49-31.37 32.86-55.22 65.81-55.22 32.94 0 60.32 23.84 65.81 55.22 1.17 6.66 6.83 11.59 13.59 11.59h.22c0-43.98-35.65-79.62-79.62-79.62-43.98 0-79.62 35.65-79.62 79.62z"/><circle cx="45.44" cy="212.1" r="14.22"/><path d="m136.16 366.73c9.77 0 18.21-6.67 20.64-16.13 11.29-44.15 51.34-76.8 99.01-76.8s87.72 32.64 99.01 76.8c2.42 9.46 10.87 16.13 20.64 16.13-4.74-61.94-56.49-110.73-119.65-110.73s-114.91 48.79-119.65 110.73z"/></g><g fill="#2a3853"><path d="m255.81 252.5c-38.52 0-72.97 17.73-95.64 45.45l-74.92-58.96c-1.52-1.19-3.72-.93-4.92.58-1.2 1.52-.93 3.72.59 4.92l74.97 59.01c-14.83 20.38-23.59 45.44-23.59 72.51 0 68.1 55.4 123.5 123.5 123.5s123.5-55.4 123.5-123.5-55.39-123.51-123.49-123.51zm0 240c-64.24 0-116.5-52.26-116.5-116.5s52.26-116.5 116.5-116.5 116.5 52.26 116.5 116.5-52.26 116.5-116.5 116.5z"/><path d="m416.56 66.34c-36.44 0-67.46 23.58-78.65 56.27l-130.55-38.51c.54-3.27.83-6.63.83-10.05 0-33.94-27.61-61.55-61.55-61.55s-61.55 27.61-61.55 61.55c0 18.52 8.24 35.15 21.23 46.44l-44.63 62.74c-4.8-2.71-10.34-4.27-16.24-4.27-18.27 0-33.13 14.86-33.13 33.13s14.86 33.13 33.13 33.13 33.13-14.86 33.13-33.13c0-9.86-4.34-18.73-11.2-24.8l44.46-62.51c.93.64 1.88 1.27 2.85 1.86.02.01.04.02.06.04 9.3 5.66 20.22 8.92 31.88 8.92 28.08 0 51.81-18.91 59.18-44.66l130.1 38.38c-1.61 6.45-2.48 13.2-2.48 20.14 0 26.49 12.47 50.11 31.83 65.34l-34.02 47.32c-1.13 1.57-.77 3.76.8 4.88.62.44 1.33.66 2.04.66 1.09 0 2.16-.51 2.84-1.46l34.01-47.3c.82.54 1.64 1.08 2.49 1.6.03.02.06.04.08.05 12.56 7.64 27.3 12.04 43.04 12.04 45.83 0 83.12-37.29 83.12-83.12s-37.26-83.13-83.1-83.13zm-344.98 145.76c0 14.41-11.72 26.13-26.13 26.13s-26.13-11.72-26.13-26.13 11.72-26.13 26.13-26.13 26.13 11.72 26.13 26.13zm48.27-90.55-.75-7.01c-.63-5.88 3.25-11.32 9.04-12.65 2.85-.66 5.75-1.17 8.6-1.53 1.75-.22 3.07-1.71 3.07-3.47v-10.89c0-1.18-.59-2.28-1.58-2.92-4.55-2.99-7.51-7.8-8.14-13.21-.18-1.57-1.38-2.8-2.9-3.05l-2.03-.9c-.46-.2-.77-.64-.83-1.13l-.53-4.71h2.08c.96 0 1.87-.39 2.54-1.09s1.01-1.63.96-2.58l-.07-1.52c-.23-4.79 1.46-9.33 4.76-12.8s7.76-5.38 12.56-5.38 9.25 1.91 12.56 5.38c3.3 3.47 4.99 8.02 4.76 12.81l-.07 1.52c-.05.96.3 1.89.96 2.58s1.58 1.09 2.53 1.09h2.1l-.53 4.71c-.06.5-.37.93-.83 1.13l-2.02.9c-1.53.24-2.74 1.48-2.92 3.06-.62 5.4-3.59 10.22-8.14 13.21-.98.65-1.58 1.75-1.58 2.92v10.88c0 1.77 1.32 3.26 3.07 3.47 2.91.36 5.85.88 8.73 1.55 5.72 1.33 9.56 6.76 8.93 12.63l-.75 7.02c-7.92 4.49-17.06 7.06-26.79 7.06-9.73-.02-18.87-2.6-26.79-7.08zm61.18-5.19.12-1.08c1.01-9.38-5.14-18.06-14.3-20.19-2.11-.49-4.25-.91-6.39-1.25v-6.04c4.82-3.72 8.12-9.01 9.33-14.97l1.17-.52c2.71-1.21 4.61-3.79 4.94-6.74l.55-4.88c.22-1.93-.4-3.88-1.69-5.33-1-1.12-2.34-1.87-3.8-2.16-.19-5.97-2.53-11.57-6.7-15.95-4.64-4.87-10.9-7.56-17.63-7.56s-12.99 2.68-17.63 7.56c-4.17 4.38-6.51 9.98-6.7 15.95-1.45.29-2.78 1.04-3.78 2.15-1.3 1.45-1.92 3.4-1.7 5.33l.55 4.89c.34 2.95 2.23 5.53 4.94 6.74l1.15.51c1.21 5.96 4.51 11.26 9.33 14.98v6.04c-2.09.33-4.18.74-6.25 1.22-9.23 2.13-15.43 10.83-14.42 20.22l.12 1.08c-12.29-10.01-20.16-25.26-20.16-42.31 0-30.08 24.47-54.55 54.55-54.55s54.55 24.47 54.55 54.55c.01 17.06-7.86 32.3-20.15 42.31zm197.56 99.04-1.11-10.28c-.94-8.71 4.82-16.78 13.4-18.76 3.95-.91 7.96-1.62 11.94-2.12 1.75-.22 3.07-1.71 3.07-3.47v-14.93c0-1.18-.59-2.28-1.58-2.92-6.56-4.31-10.84-11.26-11.74-19.05-.19-1.62-1.46-2.88-3.04-3.07l-2.94-1.31c-1.04-.46-1.77-1.46-1.9-2.59l-.76-6.7c-.05-.42.15-.71.27-.85.12-.13.39-.36.81-.36h3.1c.96 0 1.87-.39 2.53-1.09.66-.69 1.01-1.63.96-2.58l-.1-2.08c-.34-6.92 2.1-13.5 6.89-18.52s11.23-7.79 18.16-7.79 13.38 2.77 18.16 7.79 7.23 11.6 6.89 18.52l-.1 2.08c-.05.96.3 1.89.96 2.58s1.58 1.09 2.53 1.09h3.12c.42 0 .69.23.81.36.12.14.32.43.27.85l-.76 6.7c-.13 1.13-.86 2.13-1.9 2.59l-2.93 1.3c-1.6.18-2.89 1.44-3.08 3.08-.9 7.79-5.18 14.74-11.74 19.05-.98.65-1.58 1.75-1.58 2.92v14.92c0 1.77 1.32 3.26 3.07 3.47 4.02.5 8.1 1.22 12.11 2.16 8.49 1.97 14.18 10.02 13.25 18.72l-1.11 10.28c-11.18 6.47-24.15 10.19-37.97 10.19-13.81.01-26.77-3.71-37.96-10.18zm83.52-4.97.49-4.55c1.31-12.21-6.69-23.52-18.62-26.29-3.23-.75-6.51-1.38-9.77-1.86v-10.04c6.81-5.05 11.42-12.46 12.94-20.79l2.23-.99c3.3-1.47 5.61-4.61 6.01-8.2l.76-6.7c.26-2.29-.47-4.58-2-6.3-1.42-1.59-3.41-2.55-5.52-2.68.01-8.28-3.1-16.08-8.85-22.12-6.11-6.42-14.37-9.96-23.23-9.96-8.87 0-17.12 3.54-23.23 9.96-5.75 6.04-8.86 13.84-8.85 22.12-2.1.14-4.08 1.1-5.49 2.68-1.53 1.72-2.26 4.01-2 6.3l.76 6.7c.41 3.59 2.71 6.73 6.01 8.2l2.2.98c1.52 8.34 6.13 15.75 12.94 20.81v10.05c-3.2.48-6.41 1.09-9.58 1.82-12.02 2.78-20.1 14.1-18.78 26.33l.49 4.55c-18.55-13.9-30.58-36.05-30.58-60.96 0-41.98 34.15-76.12 76.12-76.12s76.12 34.15 76.12 76.12c.01 24.89-12.02 47.04-30.57 60.94z"/></g><path d="m451.33 271.77c-1.88 0-3.44-1.5-3.5-3.39-.06-1.93 1.46-3.55 3.39-3.61l26.03-.83c1.9-.05 3.55 1.46 3.61 3.39s-1.46 3.55-3.39 3.61l-26.03.83c-.03 0-.07 0-.11 0z" fill="#f46e94"/><path d="m433.62 363.42c-1.01 0-2.02-.44-2.71-1.28l-16.51-20.14c-1.23-1.5-1.01-3.7.49-4.93 1.49-1.23 3.7-1.01 4.93.49l16.51 20.13c1.23 1.5 1.01 3.7-.49 4.93-.65.54-1.44.8-2.22.8z" fill="#f46e94"/><path d="m82.64 374.43c-.56 0-1.12-.13-1.65-.42-1.7-.91-2.35-3.03-1.43-4.74l12.29-22.96c.91-1.7 3.03-2.34 4.74-1.43 1.7.91 2.35 3.03 1.43 4.74l-12.29 22.96c-.63 1.18-1.84 1.85-3.09 1.85z" fill="#f46e94"/><path d="m24.4 290.33c-1.68 0-3.17-1.22-3.45-2.93-.31-1.91.98-3.71 2.88-4.02l25.69-4.24c1.91-.32 3.71.98 4.02 2.88.31 1.91-.98 3.71-2.88 4.02l-25.69 4.24c-.19.04-.38.05-.57.05z" fill="#f46e94"/></svg>
                                                        <span class="custom-option-title"> Add Feeds </span>
                                                        <small>Share a Feed with Community</small>
                                                    </span>
                                                    <input name="customRadioIcon" class="form-check-input" type="radio"
                                                        value="" id="customRadioFlat">
                                                  </a>
                                            </div>
                                        </div>
                                        <div class="col-md mb-md-0 mb-2">
                                            <div class="form-check card custom-option custom-option-icon checked">

                                              <a href="javascript:void(0)" class="form-check-label custom-option-content active"
                                              data-bs-toggle="modal" data-bs-target="#addNewAddress" for="customRadioPrime">
                                                    <span class="custom-option-body">
                                                        <svg id="Master_Line" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><path d="m259.66 419.6h-7.27c-2.56 0-4.79-1.74-5.41-4.22l-1.01-4.03h20.15l-1.07 4.08c-.64 2.46-2.86 4.17-5.39 4.17z" fill="#ebeced"/><path d="m252.43 463.52h7.27c2.56 0 4.79 1.74 5.41 4.22l1.01 4.03h-20.15l1.07-4.08c.63-2.45 2.85-4.17 5.39-4.17z" fill="#ebeced"/><path d="m286.05 324.08h-60.1c-7.15 0-13.52-4.52-15.88-11.28l-.02-.05h91.89c-2.34 6.79-8.72 11.33-15.89 11.33z" fill="#ebeced"/><path d="m243.04 434.62c-44.19 0-80.14-35.95-80.14-80.14 0-1.93 1.57-3.5 3.5-3.5s3.5 1.57 3.5 3.5c0 40.33 32.81 73.14 73.14 73.14 1.93 0 3.5 1.57 3.5 3.5s-1.57 3.5-3.5 3.5z" fill="#2a3853"/><path d="m317.08 284.51v-65.08c0-22.57-18.3-40.87-40.87-40.87h-40.42c-22.57 0-40.87 18.3-40.87 40.87v65.08z" fill="#5cd1fd"/><path d="m269.13 398.7h-26.26c-1.61 0-2.92-1.31-2.92-2.92v-4.59c0-1.61 1.31-2.92 2.92-2.92h26.26c1.61 0 2.92 1.31 2.92 2.92v4.59c0 1.61-1.31 2.92-2.92 2.92z" fill="#ebeced"/><g fill="#5cd1fd"><path d="m380.47 66.47c1-1.27 1.51-3.03 1.51-5.27 0-1.75-.41-3.29-1.21-4.62-.81-1.33-1.93-2.33-3.37-2.99-1.36-.63-4.03-.95-8.03-.95h-10.73v17.33h10.41c2.79 0 5.14-.26 7.05-.8 1.91-.52 3.36-1.42 4.37-2.7z"/><path d="m278.04 81.46h17.15l-8.66-26.01z"/><path d="m153.81 54.74c-2.52-1.73-5.41-2.6-8.67-2.6-2.32 0-4.47.48-6.44 1.44s-3.67 2.36-5.09 4.19-2.54 4.18-3.37 7.03c-.82 2.85-1.23 6.06-1.23 9.61 0 3.58.41 6.82 1.23 9.72s1.98 5.29 3.48 7.2 3.22 3.33 5.17 4.28c1.94.95 4.08 1.42 6.4 1.42 2.98 0 5.71-.82 8.2-2.45s4.48-4.16 5.95-7.57 2.21-7.61 2.21-12.6c0-4.61-.68-8.61-2.04-11.99-1.35-3.39-3.28-5.95-5.8-7.68z"/><path d="m399.92 16h-287.84c-11.6 0-21 9.4-21 21v75.15c0 11.6 9.4 21 21 21h287.84c11.6 0 21-9.4 21-21v-75.15c0-11.6-9.4-21-21-21zm-228.28 71.78c-1.2 3.98-3 7.44-5.4 10.36s-5.35 5.16-8.85 6.71-7.5 2.32-12.02 2.32c-4.49 0-8.51-.8-12.06-2.39s-6.51-3.83-8.89-6.73c-2.38-2.89-4.17-6.38-5.38-10.45s-1.82-8.47-1.82-13.2c0-4.84.63-9.29 1.9-13.33s3.1-7.48 5.5-10.32 5.32-5.01 8.77-6.51c3.44-1.5 7.36-2.26 11.74-2.26 5.95 0 11.06 1.33 15.33 3.98s7.5 6.42 9.69 11.31 3.29 10.63 3.29 17.22c0 4.87-.6 9.3-1.8 13.29zm59.93 11.09c0 5.53-2.09 8.3-6.26 8.3-1.04 0-1.98-.17-2.82-.49-.84-.33-1.62-.85-2.35-1.57s-1.41-1.55-2.04-2.52c-.63-.96-1.25-1.94-1.88-2.94l-21.8-36.71v36.93c0 2.41-.51 4.23-1.53 5.46s-2.32 1.85-3.91 1.85c-1.64 0-2.96-.62-3.95-1.87s-1.49-3.06-1.49-5.44v-48.64c0-2.06.21-3.68.63-4.86.5-1.29 1.32-2.34 2.47-3.16s2.39-1.23 3.72-1.23c1.04 0 1.94.19 2.68.56s1.4.87 1.96 1.5 1.13 1.45 1.72 2.45 1.19 2.05 1.82 3.14l22.35 37.14v-37.47c0-2.44.48-4.26 1.43-5.48s2.24-1.83 3.86-1.83c1.67 0 2.99.61 3.95 1.83.97 1.22 1.45 3.05 1.45 5.48v49.57zm80.23 6.47c-1.11 1.22-2.45 1.83-4.01 1.83-.91 0-1.7-.18-2.35-.54s-1.2-.85-1.64-1.46c-.44-.62-.92-1.56-1.43-2.84-.51-1.27-.95-2.4-1.31-3.38l-2.74-7.91h-23.33l-2.74 8.08c-1.07 3.15-1.98 5.28-2.74 6.38s-2 1.66-3.72 1.66c-1.46 0-2.75-.59-3.88-1.76-1.12-1.17-1.68-2.51-1.68-4 0-.86.13-1.75.39-2.67s.69-2.19 1.29-3.83l14.68-40.93c.42-1.17.92-2.59 1.51-4.23.59-1.65 1.21-3.02 1.88-4.11s1.54-1.97 2.62-2.64 2.42-1.01 4.01-1.01c1.62 0 2.97.34 4.05 1.01s1.96 1.54 2.62 2.6c.67 1.06 1.23 2.2 1.68 3.42.46 1.22 1.04 2.84 1.74 4.88l14.99 40.67c1.17 3.1 1.76 5.35 1.76 6.75.02 1.47-.54 2.81-1.65 4.03zm22.3-5.96c0 2.61-.54 4.56-1.62 5.85s-2.5 1.93-4.25 1.93c-1.67 0-3.05-.65-4.13-1.96-1.08-1.3-1.62-3.25-1.62-5.83v-49.64c0-2.58.53-4.51 1.6-5.8s2.45-1.93 4.15-1.93c1.75 0 3.16.64 4.25 1.91 1.08 1.28 1.62 3.22 1.62 5.83zm59.95 5.14c-.48.82-1.14 1.46-1.98 1.93s-1.8.71-2.9.71c-1.31 0-2.4-.34-3.29-1.01s-1.65-1.53-2.29-2.56-1.51-2.55-2.6-4.56l-4.66-8.51c-1.67-3.12-3.16-5.5-4.48-7.14s-2.66-2.75-4.01-3.35c-1.36-.6-3.07-.9-5.13-.9h-4.07v20.25c0 2.67-.54 4.63-1.6 5.89-1.07 1.26-2.47 1.89-4.19 1.89-1.85 0-3.29-.66-4.31-1.98s-1.53-3.25-1.53-5.8v-48.49c0-2.75.56-4.74 1.68-5.98 1.12-1.23 2.94-1.85 5.44-1.85h18.91c2.61 0 4.84.12 6.69.37 1.85.24 3.52.74 5.01 1.48 1.8.83 3.39 2.02 4.78 3.57 1.38 1.55 2.43 3.35 3.15 5.4s1.08 4.22 1.08 6.51c0 4.7-1.21 8.46-3.62 11.26-2.41 2.81-6.07 4.8-10.98 5.98 2.06 1.2 4.03 2.98 5.91 5.33s3.56 4.85 5.03 7.5 2.62 5.04 3.45 7.18c.82 2.14 1.23 3.6 1.23 4.41 0 .83-.24 1.65-.72 2.47z"/></g><g fill="#f46e94"><path d="m87.58 490.44c-.38 0-.76-.06-1.14-.19-1.83-.63-2.8-2.62-2.17-4.45l8.49-24.62c.63-1.83 2.62-2.8 4.45-2.17s2.8 2.62 2.17 4.45l-8.49 24.62c-.5 1.45-1.86 2.36-3.31 2.36z"/><path d="m16.72 416.67c-1.46 0-2.83-.93-3.32-2.39-.61-1.83.37-3.82 2.21-4.43l24.69-8.27c1.83-.62 3.82.37 4.43 2.21.61 1.83-.37 3.82-2.21 4.43l-24.69 8.27c-.37.12-.75.18-1.11.18z"/><path d="m430.33 165.04c-.67 0-1.35-.19-1.95-.6-1.6-1.08-2.02-3.26-.94-4.86l14.56-21.59c1.08-1.6 3.26-2.03 4.86-.94 1.6 1.08 2.02 3.26.94 4.86l-14.56 21.59c-.68.99-1.78 1.54-2.91 1.54z"/><path d="m468.29 223.71c-1.82 0-3.36-1.41-3.49-3.25-.14-1.93 1.31-3.6 3.24-3.74l25.97-1.86c1.94-.13 3.6 1.31 3.74 3.24s-1.31 3.6-3.24 3.74l-25.97 1.86c-.08.01-.17.01-.25.01z"/></g><g fill="#2a3853"><path d="m218.44 331.02c-1.93 0-3.5 1.57-3.5 3.5v22.89c0 1.93 1.57 3.5 3.5 3.5s3.5-1.57 3.5-3.5v-22.89c0-1.94-1.57-3.5-3.5-3.5z"/><path d="m243.48 360.91c1.93 0 3.5-1.57 3.5-3.5v-22.89c0-1.93-1.57-3.5-3.5-3.5s-3.5 1.57-3.5 3.5v22.89c0 1.93 1.57 3.5 3.5 3.5z"/><path d="m268.52 360.91c1.93 0 3.5-1.57 3.5-3.5v-22.89c0-1.93-1.57-3.5-3.5-3.5s-3.5 1.57-3.5 3.5v22.89c0 1.93 1.57 3.5 3.5 3.5z"/><path d="m293.56 360.91c1.93 0 3.5-1.57 3.5-3.5v-22.89c0-1.93-1.57-3.5-3.5-3.5s-3.5 1.57-3.5 3.5v22.89c0 1.93 1.57 3.5 3.5 3.5z"/><path d="m368.94 192.58c-1.51-1.2-3.72-.95-4.92.57-1.2 1.51-.95 3.72.57 4.92 31.02 24.6 48.81 61.39 48.81 100.94 0 39.54-17.79 76.33-48.81 100.94-1.51 1.2-1.77 3.4-.57 4.92.69.87 1.71 1.33 2.74 1.33.76 0 1.53-.25 2.17-.76 32.7-25.94 51.46-64.73 51.46-106.42.01-41.71-18.75-80.5-51.45-106.44z"/><path d="m395.62 164.37c-1.49-1.23-3.7-1.02-4.93.47s-1.02 3.7.47 4.93c38.73 31.96 60.94 79.07 60.94 129.23 0 49.73-21.9 96.57-60.08 128.51-1.48 1.24-1.68 3.45-.44 4.93.69.83 1.69 1.25 2.69 1.25.79 0 1.59-.27 2.24-.82 39.78-33.27 62.59-82.07 62.59-133.88.01-52.25-23.13-101.32-63.48-134.62z"/><path d="m147.41 198.07c1.51-1.2 1.77-3.4.57-4.92-1.2-1.51-3.4-1.77-4.92-.57-32.7 25.94-51.46 64.73-51.46 106.42s18.76 80.48 51.46 106.42c.64.51 1.41.76 2.17.76 1.03 0 2.05-.45 2.74-1.33 1.2-1.51.95-3.72-.57-4.92-31.01-24.59-48.8-61.38-48.8-100.93 0-39.54 17.79-76.33 48.81-100.93z"/><path d="m59.89 299c0-49.73 21.9-96.57 60.08-128.51 1.48-1.24 1.68-3.45.44-4.93s-3.45-1.68-4.93-.44c-39.78 33.28-62.59 82.08-62.59 133.88 0 51.81 22.81 100.6 62.59 133.88.65.55 1.45.82 2.24.82 1 0 1.99-.43 2.69-1.25 1.24-1.48 1.04-3.69-.44-4.93-38.18-31.95-60.08-78.79-60.08-128.52z"/><path d="m340.49 295.13h-2.92v-3.32c0-5.95-4.84-10.8-10.8-10.8h-141.55c-5.95 0-10.8 4.84-10.8 10.8v3.32h-2.92c-4.75 0-8.61 3.86-8.61 8.61v50.74c0 43.16 34.31 78.45 77.08 80.06v33.73h-11.51c-15.77 0-28.6 12.83-28.6 28.6 0 1.93 1.57 3.5 3.5 3.5h105.27c1.93 0 3.5-1.57 3.5-3.5 0-15.77-12.83-28.6-28.6-28.6h-11.51v-33.73c42.78-1.62 77.08-36.9 77.08-80.06v-50.74c0-4.74-3.86-8.61-8.61-8.61zm-159.07-3.32c0-2.09 1.7-3.8 3.8-3.8h141.55c2.09 0 3.8 1.7 3.8 3.8v13.65c0 2.09-1.7 3.8-3.8 3.8h-141.55c-2.09 0-3.8-1.7-3.8-3.8zm-11.52 62.67v-50.74c0-.89.72-1.61 1.61-1.61h2.92v3.32c0 5.95 4.84 10.8 10.8 10.8h6.19v38.16c0 14.05 6.76 27.41 18.08 35.75.62.46 1.35.68 2.07.68 1.07 0 2.13-.49 2.82-1.42 1.15-1.56.81-3.75-.74-4.89-9.54-7.03-15.23-18.28-15.23-30.11v-38.16h115.17v38.16c0 15.91-9.99 29.51-24.03 34.89v-8.59c0-4.75-3.86-8.61-8.61-8.61h-49.9c-4.75 0-8.61 3.86-8.61 8.61v15.3c0 9.95 7.76 18.09 17.54 18.76v12.76c-38.92-1.61-70.08-33.76-70.08-73.06zm100.83 53.37h-29.46c-6.52 0-11.83-5.31-11.83-11.83v-15.3c0-.89.72-1.61 1.61-1.61h49.9c.89 0 1.61.72 1.61 1.61v15.3c0 6.53-5.31 11.83-11.83 11.83zm34.12 85.52h-97.7c1.68-10.25 10.6-18.1 21.32-18.1h55.06c10.72 0 19.64 7.85 21.32 18.1zm-57.87-25.1v-53.42h18.04v53.42zm95.12-113.79c0 39.3-31.17 71.45-70.08 73.06v-12.76c9.54-.65 17.14-8.43 17.5-18.05 17.98-5.67 31.06-22.49 31.06-42.32v-38.16h6.19c5.95 0 10.8-4.84 10.8-10.8v-3.32h2.92c.89 0 1.61.72 1.61 1.61z"/></g></svg>
                                                        <span class="custom-option-title"> Go Live </span>
                                                        <small>Go Live or Plan a date to Go Live</small>
                                                    </span>
                                                    <input name="customRadioIcon" class="form-check-input" type="radio"
                                                        value="" id="customRadioPrime" checked>
                                                  </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Deal Details -->
                        <div id="deal-details" class="content fv-plugins-bootstrap5 fv-plugins-framework">
                            <div class="row g-3">
                                <div class="col-sm-6 fv-plugins-icon-container">
                                    <label class="form-label" for="dealTitle">Deal Title</label>
                                    <input type="text" id="dealTitle" name="dealTitle" class="form-control"
                                        placeholder="Black friday sale, 25% off">
                                    <div
                                        class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                    </div>
                                </div>
                                <div class="col-sm-6 fv-plugins-icon-container">
                                    <label class="form-label" for="dealCode">Deal Code</label>
                                    <input type="text" id="dealCode" name="dealCode" class="form-control"
                                        placeholder="25PEROFF">
                                    <div
                                        class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="dealDescription">Deal Description</label>
                                    <textarea id="dealDescription" name="dealDescription" class="form-control" rows="5"
                                        placeholder="To sell or distribute something as a business deal"></textarea>
                                </div>
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <label class="form-label" for="dealOfferedItem">Offered Items</label>
                                            <div class="position-relative"><select
                                                    class="select2 select2-hidden-accessible" id="dealOfferedItem"
                                                    name="dealOfferedItem" multiple=""
                                                    data-select2-id="dealOfferedItem" tabindex="-1" aria-hidden="true">
                                                    <option disabled="" value="">Select offered item</option>
                                                    <option value="65328">Apple iPhone 12 Pro Max (256GB)</option>
                                                    <option value="25612">Apple iPhone 12 Pro (512GB)</option>
                                                    <option value="65454">Apple iPhone 12 Mini (256GB)</option>
                                                    <option value="12365">Apple iPhone 11 Pro Max (256GB)</option>
                                                    <option value="85466">Apple iPhone 11 (64GB)</option>
                                                    <option value="98564">OnePlus Nord CE 5G (128GB)</option>
                                                </select><span class="select2 select2-container select2-container--default"
                                                    dir="ltr" data-select2-id="2" style="width: auto;"><span
                                                        class="selection"><span
                                                            class="select2-selection select2-selection--multiple"
                                                            role="combobox" aria-haspopup="true" aria-expanded="false"
                                                            tabindex="-1" aria-disabled="false">
                                                            <ul class="select2-selection__rendered">
                                                                <li class="select2-search select2-search--inline"><input
                                                                        class="select2-search__field" type="search"
                                                                        tabindex="0" autocomplete="off"
                                                                        autocorrect="off" autocapitalize="none"
                                                                        spellcheck="false" role="searchbox"
                                                                        aria-autocomplete="list"
                                                                        placeholder="Select an offered item"
                                                                        style="width: 0px;"></li>
                                                            </ul>
                                                        </span></span><span class="dropdown-wrapper"
                                                        aria-hidden="true"></span></span></div>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label" for="dealCartCondition">Cart condition</label>
                                            <select class="form-select" id="dealCartCondition" name="dealCartCondition">
                                                <option disabled="" value="">Select cart condition</option>
                                                <option value="all">Cart must contain all selected Downloads</option>
                                                <option value="any">Cart needs one or more of the selected Downloads
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label for="dealDuration" class="form-label">Deal Duration</label>
                                    <input type="text" id="dealDuration" name="dealDuration"
                                        class="form-control flatpickr-input" placeholder="YYYY-MM-DD to YYYY-MM-DD"
                                        readonly="readonly">
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label">Notify Users</label>
                                    <div class="row">
                                        <div class="col mt-2">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="dealNotifyEmail"
                                                    name="dealNotifyEmail" value="email">
                                                <label class="form-check-label" for="dealNotifyEmail">Email</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="dealNotifySMS"
                                                    name="dealNotifySMS" value="sms">
                                                <label class="form-check-label" for="dealNotifySMS">SMS</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="dealNotifyPush"
                                                    name="dealNotifyPush" value="push">
                                                <label class="form-check-label" for="dealNotifyPush">Push
                                                    Notification</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-between">
                                    <button class="btn btn-primary btn-prev">
                                        <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                    </button>
                                    <button class="btn btn-primary btn-next">
                                        <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                                        <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
                                </div>
                            </div>
                        </div>
                        <!-- Deal Usage -->
                        <div id="deal-usage" class="content fv-plugins-bootstrap5 fv-plugins-framework">
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <label class="form-label" for="dealUserType">User Type</label>
                                    <select id="dealUserType" name="dealUserType" class="form-select">
                                        <option selected="" disabled="" value="">Select user type</option>
                                        <option value="all">All</option>
                                        <option value="registered">Registered</option>
                                        <option value="unregistered">Unregistered</option>
                                        <option value="prime-members">Prime members</option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="dealMaxUsers">Max Users</label>
                                    <input type="number" id="dealMaxUsers" name="dealMaxUsers" class="form-control"
                                        placeholder="500">
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="dealMinimumCartAmount">Minimum Cart Amount</label>
                                    <input type="number" id="dealMinimumCartAmount" name="dealMinimumCartAmount"
                                        class="form-control" placeholder="$99">
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="dealPromotionalFee">Promotional Fee</label>
                                    <input type="number" id="dealPromotionalFee" name="dealPromotionalFee"
                                        class="form-control" placeholder="$9">
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="dealPaymentMethod">Payment Method</label>
                                    <select id="dealPaymentMethod" name="dealPaymentMethod" class="form-select">
                                        <option selected="" disabled="" value="">Select payment method
                                        </option>
                                        <option value="any">Any</option>
                                        <option value="credit-card">Credit Card</option>
                                        <option value="net-banking">Net Banking</option>
                                        <option value="wallet">Wallet</option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="dealStatus">Deal Status</label>
                                    <select id="dealStatus" name="dealStatus" class="form-select">
                                        <option selected="" disabled="" value="">Select status</option>
                                        <option value="active">Active</option>
                                        <option value="inactive">Inactive</option>
                                        <option value="suspend">Suspend</option>
                                        <option value="abandon">Abandone</option>
                                    </select>
                                </div>
                                <div class="col-lg-12">
                                    <label class="switch">
                                        <input type="checkbox" class="switch-input" id="dealLimitUser"
                                            name="dealLimitUser">
                                        <span class="switch-toggle-slider">
                                            <span class="switch-on"></span>
                                            <span class="switch-off"></span>
                                        </span>
                                        <span class="switch-label"> Limit this discount to a single-use per
                                            customer?</span>
                                    </label>
                                </div>
                                <div class="col-12 d-flex justify-content-between">
                                    <button class="btn btn-primary btn-prev"> <i
                                            class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                    </button>
                                    <button class="btn btn-primary btn-next"> <span
                                            class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i
                                            class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
                                </div>
                            </div>
                        </div>
                        <!-- Review & Complete -->
                        <div id="review-complete" class="content fv-plugins-bootstrap5 fv-plugins-framework">
                            <div class="row g-3">

                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-12 mb-0">
                                            <h3>Almost done! 🚀</h3>
                                            <p>Confirm your deal details information and submit to create it.</p>
                                        </div>
                                        <div class="col-12 mb-0">
                                            <table class="table table-borderless">
                                                <tbody>
                                                    <tr>
                                                        <td class="ps-0 align-top text-nowrap py-1"><span
                                                                class="fw-medium">Deal Type</span></td>
                                                        <td class="px-0 py-1">Percentage</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="ps-0 align-top text-nowrap py-1"><span
                                                                class="fw-medium">Amount</span></td>
                                                        <td class="px-0 py-1">25%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="ps-0 align-top text-nowrap py-1"><span
                                                                class="fw-medium">Deal Code</span></td>
                                                        <td class="px-0 py-1">
                                                            <div class="badge bg-label-warning">25PEROFF</div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="ps-0 align-top text-nowrap py-1"><span
                                                                class="fw-medium">Deal Title</span></td>
                                                        <td class="px-0 py-1">Black friday sale, 25% OFF</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="ps-0 align-top text-nowrap py-1"><span
                                                                class="fw-medium">Deal Duration</span></td>
                                                        <td class="px-0 py-1"><span class="fw-medium">2021-07-14</span> to
                                                            <span class="fw-medium">2021-07-30</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 d-flex align-items-center justify-content-center">
                                    <img class="img-fluid w-px-200"
                                        src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/illustrations/man-with-laptop-light.png"
                                        alt="deal image cap" data-app-light-img="illustrations/man-with-laptop-light.png"
                                        data-app-dark-img="illustrations/man-with-laptop-dark.png">
                                </div>
                                <div class="col-md-12">
                                    <label class="switch">
                                        <input type="checkbox" class="switch-input" id="dealConfirmed"
                                            name="dealConfirmed">
                                        <span class="switch-toggle-slider">
                                            <span class="switch-on"></span>
                                            <span class="switch-off"></span>
                                        </span>
                                        <span class="switch-label"> I have confirmed the deal details.</span>
                                    </label>
                                </div>
                                <div class="col-12 d-flex justify-content-between">
                                    <button class="btn btn-primary btn-prev"> <i
                                            class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                    </button>
                                    <button class="btn btn-success btn-submit btn-next">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /Create Deal Wizard -->


            <div class="view-wrapper">
                <div id="main-feed" class="container">
                    <div id="activity-feed" class="view-wrap true-dom">

                        <div class="columns">
                            <div class="column is-3 is-hidden-mobile">
                                <div class="card">
                                    <div class="card-body p-0 border-none">
                                        <div class="list-group nav nav-tab" role="tablist">
                                            <a class="list-group-item list-group-item-action {{request('type') == 'admin-feeds' ? 'active' : ''}}" href="{{url('app/user/notes?type=admin-feeds')}}">
                                                Admin Feeds<br>
                                                <small class="text-muted">Admin has Post</small>
                                            </a>
                                            <a class="list-group-item list-group-item-action {{request('type') == 'all-news' ? 'active' : ''}}" href="{{url('app/user/notes?type=all-news')}}">
                                                All News<br>
                                                <small class="text-muted">Admin has create</small>
                                            </a>
                                            <a class="list-group-item list-group-item-action {{request('type') == 'go-live' ? 'active' : ''}}" href="{{url('app/user/live?type=go-live')}}">
                                                Go Live Soon<br>
                                                <small class="text-muted">Planed Live Streams</small>
                                            </a>
                                            <a class="list-group-item list-group-item-action {{request('type') == 'admin-live' ? 'active' : ''}}" href="{{url('app/user/notes?type=admin-live')}}">
                                                Admin Live Streams<br>
                                                <small class="text-muted">Live Streams by Admin</small>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="column column is-6">
                              <div class="card p-2 mb-4">
                                <div class="card-body">
                                  <h4 class="mb-2 pb-1">Upcoming Webinar</h4>
                                  <p class="small">Next Generation Frontend Architecture Using Layout Engine And React Native Web.</p>
                                  <div class="row mb-3 g-3">
                                    <div class="col-6">
                                      <div class="d-flex">
                                        <div class="avatar flex-shrink-0 me-2">
                                          <span class="avatar-initial rounded bg-label-primary"><i class="bx bx-calendar-exclamation bx-sm"></i></span>
                                        </div>
                                        <div>
                                          <h6 class="mb-0 text-nowrap">17 Nov 23</h6>
                                          <small>Date</small>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-6">
                                      <div class="d-flex">
                                        <div class="avatar flex-shrink-0 me-2">
                                          <span class="avatar-initial rounded bg-label-primary"><i class="bx bx-time-five bx-sm"></i></span>
                                        </div>
                                        <div>
                                          <h6 class="mb-0 text-nowrap">32 minutes</h6>
                                          <small>Duration</small>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-12 text-center">
                                    <a href="javascript:void(0);" class="btn btn-primary w-100 d-grid" data-bs-toggle="modal" data-bs-target="#addNewAddress">Join the event</a>
                                  </div>
                                </div>
                              </div>
                              <div class="card p-2 mb-4">
                                <div class="card-body">
                                  <h4 class="mb-2 pb-1">Upcoming Webinar</h4>
                                  <p class="small">Next Generation Frontend Architecture Using Layout Engine And React Native Web.</p>
                                  <div class="row mb-3 g-3">
                                    <div class="col-6">
                                      <div class="d-flex">
                                        <div class="avatar flex-shrink-0 me-2">
                                          <span class="avatar-initial rounded bg-label-primary"><i class="bx bx-calendar-exclamation bx-sm"></i></span>
                                        </div>
                                        <div>
                                          <h6 class="mb-0 text-nowrap">17 Nov 23</h6>
                                          <small>Date</small>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-6">
                                      <div class="d-flex">
                                        <div class="avatar flex-shrink-0 me-2">
                                          <span class="avatar-initial rounded bg-label-primary"><i class="bx bx-time-five bx-sm"></i></span>
                                        </div>
                                        <div>
                                          <h6 class="mb-0 text-nowrap">32 minutes</h6>
                                          <small>Duration</small>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-12 text-center">
                                    <a href="javascript:void(0);" class="btn btn-primary w-100 d-grid" data-bs-toggle="modal" data-bs-target="#addNewAddress">Join the event</a>
                                  </div>
                                </div>
                              </div>
                              <div class="card p-2 mb-4">
                                <div class="card-body">
                                  <h4 class="mb-2 pb-1">Upcoming Webinar</h4>
                                  <p class="small">Next Generation Frontend Architecture Using Layout Engine And React Native Web.</p>
                                  <div class="row mb-3 g-3">
                                    <div class="col-6">
                                      <div class="d-flex">
                                        <div class="avatar flex-shrink-0 me-2">
                                          <span class="avatar-initial rounded bg-label-primary"><i class="bx bx-calendar-exclamation bx-sm"></i></span>
                                        </div>
                                        <div>
                                          <h6 class="mb-0 text-nowrap">17 Nov 23</h6>
                                          <small>Date</small>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-6">
                                      <div class="d-flex">
                                        <div class="avatar flex-shrink-0 me-2">
                                          <span class="avatar-initial rounded bg-label-primary"><i class="bx bx-time-five bx-sm"></i></span>
                                        </div>
                                        <div>
                                          <h6 class="mb-0 text-nowrap">32 minutes</h6>
                                          <small>Duration</small>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-12 text-center">
                                    <a href="javascript:void(0);" class="btn btn-primary w-100 d-grid" data-bs-toggle="modal" data-bs-target="#addNewAddress">Join the event</a>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="column is-3"></div>

                        </div>
                        <x-modal id="createnewsModal"
                        title="Create News"
                        :titleCentered="true"
                        titleTag="h3"
                        saveBtnText="Create"
                        saveBtnType="submit"
                        saveBtnForm="createForm"
                        size="lg"
                        :showFooter="false"
                      >
                       @include('content.include.news.createForm')
                      </x-modal>
                      @include('content.include.goLive.addressForm')
                    </div>
                </div>
            </div>
        </div>
        <!-- / Content -->

        <div class="content-backdrop fade"></div>
    </div>

    <script>
        function delete_service(el) {
            let link = $(el).data('id');
            $('.deleted-modal').modal('show');
            $('#delete_form').attr('action', link);
        }
    </script>


@section('page-script')
    <script>
        function confirmAction(event, callback) {
            event.preventDefault();
            Swal.fire({
                title: 'Are you sure?',
                text: "Are you sure you want to delete this?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                customClass: {
                    confirmButton: 'btn btn-danger me-3',
                    cancelButton: 'btn btn-label-secondary'
                },
                buttonsStyling: false
            }).then(function(result) {
                if (result.value) {
                    callback();
                }
            });
        }
    </script>
    <script>
        function drpzone_init() {
            dropZoneInitFunctions.forEach(callback => callback());
        }
    </script>
    <script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js" onload="drpzone_init()"></script>
@endsection
@endsection
