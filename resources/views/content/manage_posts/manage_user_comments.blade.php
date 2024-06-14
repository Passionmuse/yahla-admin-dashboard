@extends('layouts/layoutMaster')

@section('title', 'Manage User Feeds')

@section('page-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-icons.css') }}" />
@endsection

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/animate-css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:600,700,800,900" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fontisto@v3.0.4/css/fontisto/fontisto-brands.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/friendkit/css/app.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/friendkit/css/core.css')}}" />
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>

    <script src="https://friendkit.cssninja.io/assets/js/app.js"></script>
    <script src="https://friendkit.cssninja.io/assets/data/tipuedrop_content.js"></script>

    <!-- Core js -->
    <script src="https://friendkit.cssninja.io/assets/js/global.js"></script>

    <!-- Navigation options js -->
    <script src="https://friendkit.cssninja.io/assets/js/navbar-v1.js"></script>
    <script src="https://friendkit.cssninja.io/assets/js/navbar-v2.js"></script>
    <script src="https://friendkit.cssninja.io/assets/js/navbar-mobile.js"></script>
    <script src="https://friendkit.cssninja.io/assets/js/navbar-options.js"></script>
    <script src="https://friendkit.cssninja.io/assets/js/sidebar-v1.js"></script>

    <!-- Core instance js -->
    <script src="https://friendkit.cssninja.io/assets/js/main.js"></script>
    <script src="https://friendkit.cssninja.io/assets/js/chat.js"></script>
    <script src="https://friendkit.cssninja.io/assets/js/touch.js"></script>
    <script src="https://friendkit.cssninja.io/assets/js/tour.js"></script>

    <!-- Components js -->
    <script src="https://friendkit.cssninja.io/assets/js/explorer.js"></script>
    <script src="https://friendkit.cssninja.io/assets/js/widgets.js"></script>
    <script src="https://friendkit.cssninja.io/assets/js/modal-uploader.js"></script>
    <script src="https://friendkit.cssninja.io/assets/js/popovers-users.js"></script>
    <script src="https://friendkit.cssninja.io/assets/js/popovers-pages.js"></script>
    <script src="https://friendkit.cssninja.io/assets/js/lightbox.js"></script>

    <!-- Landing page js -->

    <!-- Signup page js -->

    <!-- Feed pages js -->
    <script src="https://friendkit.cssninja.io/assets/js/feed.js"></script>

    <script src="https://friendkit.cssninja.io/assets/js/webcam.js"></script>
    <script src="https://friendkit.cssninja.io/assets/js/compose.js"></script>
    <script src="https://friendkit.cssninja.io/assets/js/autocompletes.js"></script>
@endsection

@section('content')

    <div class="view-wrapper">
        <!-- Container -->
        <div id="main-feed" class="container">
            <!-- Content placeholders at page load -->
            <!-- this holds the animated content placeholders that show up before content -->


            <!-- Feed page main wrapper -->
            <div id="activity-feed" class="view-wrap true-dom">
                <div class="columns">
                    <!-- Left side column -->
                    <div class="column is-3 is-hidden-mobile">
                        <!-- Weather widget -->
                        <!-- /partials/widgets/weather-widget.html -->
                        <div class="card is-weather-card has-background-image"
                            data-background="https://friendkit.cssninja.io/assets/img/illustrations/cards/weather-bg.svg"
                            style="background-image: url(&quot;assets/img/illustrations/cards/weather-bg.svg&quot;);">
                            <div class="card-heading">
                                <div class="dropdown is-spaced is-accent is-right dropdown-trigger is-light">
                                    <div>
                                        <div class="button">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-more-vertical">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="12" cy="5" r="1"></circle>
                                                <circle cx="12" cy="19" r="1"></circle>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="dropdown-menu" role="menu">
                                        <div class="dropdown-content">
                                            <a href="#" class="dropdown-item">
                                                <div class="media">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-map-pin">
                                                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                                        <circle cx="12" cy="10" r="3"></circle>
                                                    </svg>
                                                    <div class="media-content">
                                                        <h3>Change City</h3>
                                                        <small>Change the displayed city.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="dropdown-item">
                                                <div class="media">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-rotate-ccw">
                                                        <polyline points="1 4 1 10 7 10"></polyline>
                                                        <path d="M3.51 15a9 9 0 1 0 2.13-9.36L1 10"></path>
                                                    </svg>
                                                    <div class="media-content">
                                                        <h3>Synchronize</h3>
                                                        <small>Synchronize with a weather source.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item">
                                                <div class="media">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-settings">
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                        <path
                                                            d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                                        </path>
                                                    </svg>
                                                    <div class="media-content">
                                                        <h3>Settings</h3>
                                                        <small>Access widget settings.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <hr class="dropdown-divider">
                                            <a href="#" class="dropdown-item">
                                                <div class="media">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-trash-2">
                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                        <path
                                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                        </path>
                                                        <line x1="10" y1="11" x2="10"
                                                            y2="17"></line>
                                                        <line x1="14" y1="11" x2="14"
                                                            y2="17"></line>
                                                    </svg>
                                                    <div class="media-content">
                                                        <h3>Remove</h3>
                                                        <small>Removes this widget from your feed.</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="temperature">
                                    <span>71</span>
                                </div>
                                <div class="weather-icon">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun">
                                            <circle cx="12" cy="12" r="5"></circle>
                                            <line x1="12" y1="1" x2="12" y2="3"></line>
                                            <line x1="12" y1="21" x2="12" y2="23"></line>
                                            <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                                            <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                                            <line x1="1" y1="12" x2="3" y2="12"></line>
                                            <line x1="21" y1="12" x2="23" y2="12"></line>
                                            <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                                            <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                                        </svg>
                                        <h4>Sunny</h4>
                                        <div class="details">
                                            <span>Real Feel: 78° </span>
                                            <span>Rain Chance: 5%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="previsions">
                                    <div class="day">
                                        <span>Mon</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun">
                                            <circle cx="12" cy="12" r="5"></circle>
                                            <line x1="12" y1="1" x2="12" y2="3"></line>
                                            <line x1="12" y1="21" x2="12" y2="23"></line>
                                            <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                                            <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                                            <line x1="1" y1="12" x2="3" y2="12"></line>
                                            <line x1="21" y1="12" x2="23" y2="12"></line>
                                            <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                                            <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                                        </svg>
                                        <span>69°</span>
                                    </div>
                                    <div class="day">
                                        <span>Tue</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-cloud-lightning">
                                            <path d="M19 16.9A5 5 0 0 0 18 7h-1.26a8 8 0 1 0-11.62 9"></path>
                                            <polyline points="13 11 9 17 15 17 11 23"></polyline>
                                        </svg>
                                        <span>74°</span>
                                    </div>
                                    <div class="day">
                                        <span>Wed</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-cloud-lightning">
                                            <path d="M19 16.9A5 5 0 0 0 18 7h-1.26a8 8 0 1 0-11.62 9"></path>
                                            <polyline points="13 11 9 17 15 17 11 23"></polyline>
                                        </svg>
                                        <span>73°</span>
                                    </div>
                                    <div class="day">
                                        <span>Thu</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun">
                                            <circle cx="12" cy="12" r="5"></circle>
                                            <line x1="12" y1="1" x2="12" y2="3"></line>
                                            <line x1="12" y1="21" x2="12" y2="23"></line>
                                            <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                                            <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                                            <line x1="1" y1="12" x2="3" y2="12"></line>
                                            <line x1="21" y1="12" x2="23" y2="12"></line>
                                            <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                                            <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                                        </svg>
                                        <span>68°</span>
                                    </div>
                                    <div class="day">
                                        <span>Fri</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-cloud-drizzle">
                                            <line x1="8" y1="19" x2="8" y2="21"></line>
                                            <line x1="8" y1="13" x2="8" y2="15"></line>
                                            <line x1="16" y1="19" x2="16" y2="21"></line>
                                            <line x1="16" y1="13" x2="16" y2="15"></line>
                                            <line x1="12" y1="21" x2="12" y2="23"></line>
                                            <line x1="12" y1="15" x2="12" y2="17"></line>
                                            <path d="M20 16.58A5 5 0 0 0 18 7h-1.26A8 8 0 1 0 4 15.25"></path>
                                        </svg>
                                        <span>55°</span>
                                    </div>
                                    <div class="day">
                                        <span>Sat</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-cloud-rain">
                                            <line x1="16" y1="13" x2="16" y2="21"></line>
                                            <line x1="8" y1="13" x2="8" y2="21"></line>
                                            <line x1="12" y1="15" x2="12" y2="23"></line>
                                            <path d="M20 16.58A5 5 0 0 0 18 7h-1.26A8 8 0 1 0 4 15.25"></path>
                                        </svg>
                                        <span>58°</span>
                                    </div>
                                    <div class="day">
                                        <span>Sun</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun">
                                            <circle cx="12" cy="12" r="5"></circle>
                                            <line x1="12" y1="1" x2="12" y2="3"></line>
                                            <line x1="12" y1="21" x2="12" y2="23"></line>
                                            <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                                            <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                                            <line x1="1" y1="12" x2="3" y2="12"></line>
                                            <line x1="21" y1="12" x2="23" y2="12"></line>
                                            <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                                            <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                                        </svg>
                                        <span>64°</span>
                                    </div>
                                </div>
                                <div class="current-date-location has-text-centered">
                                    <span class="date">Sunday, 18th 2018</span>
                                    <span class="location">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-map-pin">
                                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                            <circle cx="12" cy="10" r="3"></circle>
                                        </svg> Los Angeles, CA</span>
                                </div>
                            </div>
                        </div>

                        <!-- Pages widget -->
                        <!-- /partials/widgets/recommended-pages-1-widget.html -->
                        <div class="card">
                            <div class="card-heading is-bordered">
                                <h4>Recommended Pages</h4>
                                <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                    <div>
                                        <div class="button">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-more-vertical">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="12" cy="5" r="1"></circle>
                                                <circle cx="12" cy="19" r="1"></circle>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="dropdown-menu" role="menu">
                                        <div class="dropdown-content">
                                            <a href="#" class="dropdown-item">
                                                <div class="media">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-file-text">
                                                        <path
                                                            d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                        </path>
                                                        <polyline points="14 2 14 8 20 8"></polyline>
                                                        <line x1="16" y1="13" x2="8"
                                                            y2="13"></line>
                                                        <line x1="16" y1="17" x2="8"
                                                            y2="17"></line>
                                                        <polyline points="10 9 9 9 8 9"></polyline>
                                                    </svg>
                                                    <div class="media-content">
                                                        <h3>All Recommandations</h3>
                                                        <small>View all recommandations.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item">
                                                <div class="media">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-settings">
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                        <path
                                                            d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                                        </path>
                                                    </svg>
                                                    <div class="media-content">
                                                        <h3>Settings</h3>
                                                        <small>Access widget settings.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <hr class="dropdown-divider">
                                            <a href="#" class="dropdown-item">
                                                <div class="media">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-trash-2">
                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                        <path
                                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                        </path>
                                                        <line x1="10" y1="11" x2="10"
                                                            y2="17"></line>
                                                        <line x1="14" y1="11" x2="14"
                                                            y2="17"></line>
                                                    </svg>
                                                    <div class="media-content">
                                                        <h3>Remove</h3>
                                                        <small>Removes this widget from your feed.</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body no-padding">
                                <!-- Recommended Page -->
                                <div class="page-block transition-block">
                                    <img src="https://friendkit.cssninja.io/assets/img/vector/icons/logos/fastpizza.svg"
                                        data-demo-src="https://friendkit.cssninja.io/assets/img/vector/icons/logos/fastpizza.svg" data-page-popover="0"
                                        alt="">
                                    <div class="page-meta">
                                        <span>Fast Pizza</span>
                                        <span>Pizza &amp; Fast Food</span>
                                    </div>
                                    <div class="add-page add-transition">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-bookmark">
                                            <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <!-- Recommended Page -->
                                <div class="page-block transition-block">
                                    <img src="https://friendkit.cssninja.io/assets/img/vector/icons/logos/lonelydroid.svg"
                                        data-demo-src="https://friendkit.cssninja.io/assets/img/vector/icons/logos/lonelydroid.svg"
                                        data-page-popover="1" alt="">
                                    <div class="page-meta">
                                        <span>Lonely Droid</span>
                                        <span>Technology</span>
                                    </div>
                                    <div class="add-page add-transition">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-bookmark">
                                            <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <!-- Recommended Page -->
                                <div class="page-block transition-block">
                                    <img src="https://friendkit.cssninja.io/assets/img/vector/icons/logos/metamovies.svg"
                                        data-demo-src="https://friendkit.cssninja.io/assets/img/vector/icons/logos/metamovies.svg" data-page-popover="2"
                                        alt="">
                                    <div class="page-meta">
                                        <span>Meta Movies</span>
                                        <span>Movies / Entertainment</span>
                                    </div>
                                    <div class="add-page add-transition">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-bookmark">
                                            <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <!-- Recommended Page -->
                                <div class="page-block transition-block">
                                    <img src="https://friendkit.cssninja.io/assets/img/vector/icons/logos/nuclearjs.svg"
                                        data-demo-src="https://friendkit.cssninja.io/assets/img/vector/icons/logos/nuclearjs.svg" data-page-popover="3"
                                        alt="">
                                    <div class="page-meta">
                                        <span>Nuclearjs</span>
                                        <span>Technology</span>
                                    </div>
                                    <div class="add-page add-transition">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-bookmark">
                                            <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <!-- Recommended Page -->
                                <div class="page-block transition-block">
                                    <img src="https://friendkit.cssninja.io/assets/img/vector/icons/logos/slicer.svg"
                                        data-demo-src="https://friendkit.cssninja.io/assets/img/vector/icons/logos/slicer.svg" data-page-popover="4"
                                        alt="">
                                    <div class="page-meta">
                                        <span>Slicer</span>
                                        <span>Web / Design</span>
                                    </div>
                                    <div class="add-page add-transition">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-bookmark">
                                            <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Fake Ad -->
                        <!-- /partials/widgets/fake-add-widget.html -->
                        <div class="card is-ad">
                            <div class="card-body">
                                <img src="https://friendkit.cssninja.io/assets/img/ads/ninja-ad.svg" alt="">
                                <div class="ad-text">Simple, pleasant, and productive.</div>
                                <div class="ad-brand">Ads via Ninja</div>
                            </div>
                        </div>

                        <!-- Latest activities widget -->
                        <!-- /partials/widgets/latest-activity-1-widget.html -->
                        <div id="latest-activity-1" class="card">
                            <div class="card-heading is-bordered">
                                <h4>Latest activity</h4>
                                <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                    <div>
                                        <div class="button">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-more-vertical">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="12" cy="5" r="1"></circle>
                                                <circle cx="12" cy="19" r="1"></circle>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="dropdown-menu" role="menu">
                                        <div class="dropdown-content">
                                            <a href="#" class="dropdown-item">
                                                <div class="media">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-list">
                                                        <line x1="8" y1="6" x2="21"
                                                            y2="6"></line>
                                                        <line x1="8" y1="12" x2="21"
                                                            y2="12"></line>
                                                        <line x1="8" y1="18" x2="21"
                                                            y2="18"></line>
                                                        <line x1="3" y1="6" x2="3.01"
                                                            y2="6"></line>
                                                        <line x1="3" y1="12" x2="3.01"
                                                            y2="12"></line>
                                                        <line x1="3" y1="18" x2="3.01"
                                                            y2="18"></line>
                                                    </svg>
                                                    <div class="media-content">
                                                        <h3>All updates</h3>
                                                        <small>View my network's activity.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item">
                                                <div class="media">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-settings">
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                        <path
                                                            d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                                        </path>
                                                    </svg>
                                                    <div class="media-content">
                                                        <h3>Settings</h3>
                                                        <small>Access widget settings.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <hr class="dropdown-divider">
                                            <a href="#" class="dropdown-item">
                                                <div class="media">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-trash-2">
                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                        <path
                                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                        </path>
                                                        <line x1="10" y1="11" x2="10"
                                                            y2="17"></line>
                                                        <line x1="14" y1="11" x2="14"
                                                            y2="17"></line>
                                                    </svg>
                                                    <div class="media-content">
                                                        <h3>Remove</h3>
                                                        <small>Removes this widget from your feed.</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body no-padding">
                                <!-- Recommended Page -->
                                <div class="page-block">
                                    <img src="https://friendkit.cssninja.io/assets/img/avatars/hanzo.svg" data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/hanzo.svg"
                                        data-page-popover="5" alt="">
                                    <div class="page-meta">
                                        <span>Css Ninja</span>
                                        <span>3 hours ago</span>
                                    </div>
                                    <div class="add-page">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg>
                                    </div>
                                </div>
                                <!-- Recommended Page -->
                                <div class="page-block">
                                    <img src="https://friendkit.cssninja.io/assets/img/avatars/milly.jpg" data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/milly.jpg"
                                        alt="" data-user-popover="7">
                                    <div class="page-meta">
                                        <span>Milly Augustine</span>
                                        <span>5 hours ago</span>
                                    </div>
                                    <div class="add-page">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg>
                                    </div>
                                </div>
                                <!-- Recommended Page -->
                                <div class="page-block">
                                    <img src="https://friendkit.cssninja.io/assets/img/vector/icons/logos/nuclearjs.svg"
                                        data-demo-src="https://friendkit.cssninja.io/assets/img/vector/icons/logos/nuclearjs.svg" data-page-popover="3"
                                        alt="">
                                    <div class="page-meta">
                                        <span>Nuclearjs</span>
                                        <span>Yesterday</span>
                                    </div>
                                    <div class="add-page">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Left side column -->

                    <!-- Middle column -->
                    <div class="column is-6">
                        <!-- Publishing Area -->
                        <!-- /partials/pages/feed/compose-card.html -->
                        <div id="compose-card" class="card is-new-content">
                            <!-- Top tabs -->
                            <div class="tabs-wrapper">
                                <div class="tabs is-boxed is-fullwidth">
                                    <ul>
                                        <li class="is-active">
                                            <a>
                                                <span class="icon is-small"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-edit-3">
                                                        <path d="M12 20h9"></path>
                                                        <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z">
                                                        </path>
                                                    </svg></span>
                                                <span>Publish</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="modal-trigger" data-modal="albums-help-modal">
                                                <span class="icon is-small"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-image">
                                                        <rect x="3" y="3" width="18" height="18" rx="2"
                                                            ry="2"></rect>
                                                        <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                                        <polyline points="21 15 16 10 5 21"></polyline>
                                                    </svg></span>
                                                <span>Albums</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="modal-trigger" data-modal="videos-help-modal">
                                                <span class="icon is-small"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-video">
                                                        <polygon points="23 7 16 12 23 17 23 7"></polygon>
                                                        <rect x="1" y="5" width="15" height="14" rx="2"
                                                            ry="2"></rect>
                                                    </svg></span>
                                                <span>Video</span>
                                            </a>
                                        </li>
                                        <!-- Close X button -->
                                        <li class="close-wrap">
                                            <span class="close-publish">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-x">
                                                    <line x1="18" y1="6" x2="6" y2="18">
                                                    </line>
                                                    <line x1="6" y1="6" x2="18" y2="18">
                                                    </line>
                                                </svg>
                                            </span>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Tab content -->
                                <div class="tab-content">
                                    <!-- Compose form -->
                                    <div class="compose">
                                        <div class="compose-form">
                                            <img src="https://friendkit.cssninja.io/assets/img/avatars/jenna.png"
                                                data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/jenna.png" alt="">
                                            <div class="control">
                                                <textarea id="publish" class="textarea" rows="3" placeholder="Write something about you..."></textarea>
                                            </div>
                                        </div>

                                        <div id="feed-upload" class="feed-upload"></div>

                                        <div id="options-summary" class="options-summary"></div>

                                        <div id="tag-suboption" class="is-autocomplete is-suboption is-hidden">
                                            <!-- Tag friends suboption -->
                                            <div id="tag-list" class="tag-list"></div>
                                            <div class="control">
                                                <div class="easy-autocomplete" style="width: 0px;"><input
                                                        id="users-autocpl" type="text" class="input"
                                                        placeholder="Who are you with?" autocomplete="off">
                                                    <div class="easy-autocomplete-container"
                                                        id="eac-container-users-autocpl">
                                                        <ul></ul>
                                                    </div>
                                                </div>
                                                <div class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-search">
                                                        <circle cx="11" cy="11" r="8"></circle>
                                                        <line x1="21" y1="21" x2="16.65"
                                                            y2="16.65"></line>
                                                    </svg>
                                                </div>
                                                <div class="close-icon is-main">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-x">
                                                        <line x1="18" y1="6" x2="6"
                                                            y2="18"></line>
                                                        <line x1="6" y1="6" x2="18"
                                                            y2="18"></line>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Tag friends suboption -->

                                        <!-- Activities suboption -->
                                        <div id="activities-suboption" class="is-autocomplete is-suboption is-hidden">
                                            <div id="activities-autocpl-wrapper" class="control has-margin">
                                                <div class="easy-autocomplete" style="width: 0px;"><input
                                                        id="activities-autocpl" type="text" class="input"
                                                        placeholder="What are you doing right now?" autocomplete="off">
                                                    <div class="easy-autocomplete-container"
                                                        id="eac-container-activities-autocpl">
                                                        <ul></ul>
                                                    </div>
                                                </div>
                                                <div class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-search">
                                                        <circle cx="11" cy="11" r="8"></circle>
                                                        <line x1="21" y1="21" x2="16.65"
                                                            y2="16.65"></line>
                                                    </svg>
                                                </div>
                                                <div class="close-icon is-main">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-x">
                                                        <line x1="18" y1="6" x2="6"
                                                            y2="18"></line>
                                                        <line x1="6" y1="6" x2="18"
                                                            y2="18"></line>
                                                    </svg>
                                                </div>
                                            </div>

                                            <!-- Mood suboption -->
                                            <div id="mood-autocpl-wrapper" class="is-autocomplete is-activity is-hidden">
                                                <div class="control has-margin">
                                                    <div class="easy-autocomplete" style="width: 0px;"><input
                                                            id="mood-autocpl" type="text" class="input is-subactivity"
                                                            placeholder="How do you feel?" autocomplete="off">
                                                        <div class="easy-autocomplete-container"
                                                            id="eac-container-mood-autocpl">
                                                            <ul></ul>
                                                        </div>
                                                    </div>
                                                    <div class="input-block">Feels</div>
                                                    <div class="close-icon is-subactivity">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-x">
                                                            <line x1="18" y1="6" x2="6"
                                                                y2="18"></line>
                                                            <line x1="6" y1="6" x2="18"
                                                                y2="18"></line>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Drinking suboption child -->
                                            <div id="drinking-autocpl-wrapper"
                                                class="is-autocomplete is-activity is-hidden">
                                                <div class="control has-margin">
                                                    <div class="easy-autocomplete" style="width: 0px;"><input
                                                            id="drinking-autocpl" type="text"
                                                            class="input is-subactivity"
                                                            placeholder="What are you drinking?" autocomplete="off">
                                                        <div class="easy-autocomplete-container"
                                                            id="eac-container-drinking-autocpl">
                                                            <ul></ul>
                                                        </div>
                                                    </div>
                                                    <div class="input-block">Drinks</div>
                                                    <div class="close-icon is-subactivity">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-x">
                                                            <line x1="18" y1="6" x2="6"
                                                                y2="18"></line>
                                                            <line x1="6" y1="6" x2="18"
                                                                y2="18"></line>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Eating suboption child -->
                                            <div id="eating-autocpl-wrapper"
                                                class="is-autocomplete is-activity is-hidden">
                                                <div class="control has-margin">
                                                    <div class="easy-autocomplete" style="width: 0px;"><input
                                                            id="eating-autocpl" type="text"
                                                            class="input is-subactivity"
                                                            placeholder="What are you eating?" autocomplete="off">
                                                        <div class="easy-autocomplete-container"
                                                            id="eac-container-eating-autocpl">
                                                            <ul></ul>
                                                        </div>
                                                    </div>
                                                    <div class="input-block">Eats</div>
                                                    <div class="close-icon is-subactivity">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-x">
                                                            <line x1="18" y1="6" x2="6"
                                                                y2="18"></line>
                                                            <line x1="6" y1="6" x2="18"
                                                                y2="18"></line>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Reading suboption child -->
                                            <div id="reading-autocpl-wrapper"
                                                class="is-autocomplete is-activity is-hidden">
                                                <div class="control has-margin">
                                                    <div class="easy-autocomplete" style="width: 0px;"><input
                                                            id="reading-autocpl" type="text"
                                                            class="input is-subactivity"
                                                            placeholder="What are you reading?" autocomplete="off">
                                                        <div class="easy-autocomplete-container"
                                                            id="eac-container-reading-autocpl">
                                                            <ul></ul>
                                                        </div>
                                                    </div>
                                                    <div class="input-block">Reads</div>
                                                    <div class="close-icon is-subactivity">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-x">
                                                            <line x1="18" y1="6" x2="6"
                                                                y2="18"></line>
                                                            <line x1="6" y1="6" x2="18"
                                                                y2="18"></line>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Watching suboption child -->
                                            <div id="watching-autocpl-wrapper"
                                                class="is-autocomplete is-activity is-hidden">
                                                <div class="control has-margin">
                                                    <div class="easy-autocomplete" style="width: 0px;"><input
                                                            id="watching-autocpl" type="text"
                                                            class="input is-subactivity"
                                                            placeholder="What are you watching?" autocomplete="off">
                                                        <div class="easy-autocomplete-container"
                                                            id="eac-container-watching-autocpl">
                                                            <ul></ul>
                                                        </div>
                                                    </div>
                                                    <div class="input-block">Watches</div>
                                                    <div class="close-icon is-subactivity">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-x">
                                                            <line x1="18" y1="6" x2="6"
                                                                y2="18"></line>
                                                            <line x1="6" y1="6" x2="18"
                                                                y2="18"></line>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Travel suboption child -->
                                            <div id="travel-autocpl-wrapper"
                                                class="is-autocomplete is-activity is-hidden">
                                                <div class="control has-margin">
                                                    <div class="easy-autocomplete" style="width: 0px;"><input
                                                            id="travel-autocpl" type="text"
                                                            class="input is-subactivity"
                                                            placeholder="Where are you going?" autocomplete="off">
                                                        <div class="easy-autocomplete-container"
                                                            id="eac-container-travel-autocpl">
                                                            <ul></ul>
                                                        </div>
                                                    </div>
                                                    <div class="input-block">Travels</div>
                                                    <div class="close-icon is-subactivity">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-x">
                                                            <line x1="18" y1="6" x2="6"
                                                                y2="18"></line>
                                                            <line x1="6" y1="6" x2="18"
                                                                y2="18"></line>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Activities suboption -->

                                        <!-- Location suboption -->
                                        <div id="location-suboption" class="is-autocomplete is-suboption is-hidden">
                                            <div id="location-autocpl-wrapper"
                                                class="control is-location-wrapper has-margin">
                                                <input id="location-autocpl" type="text"
                                                    class="input pac-target-input" placeholder="Where are you now?"
                                                    autocomplete="off">
                                                <div class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-map-pin">
                                                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                                        <circle cx="12" cy="10" r="3"></circle>
                                                    </svg>
                                                </div>
                                                <div class="close-icon is-main">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-x">
                                                        <line x1="18" y1="6" x2="6"
                                                            y2="18"></line>
                                                        <line x1="6" y1="6" x2="18"
                                                            y2="18"></line>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Link suboption -->
                                        <div id="link-suboption" class="is-autocomplete is-suboption is-hidden">
                                            <div id="link-autocpl-wrapper"
                                                class="control is-location-wrapper has-margin">
                                                <input id="link-autocpl" type="text" class="input"
                                                    placeholder="Enter the link URL">
                                                <div class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-link-2">
                                                        <path
                                                            d="M15 7h3a5 5 0 0 1 5 5 5 5 0 0 1-5 5h-3m-6 0H6a5 5 0 0 1-5-5 5 5 0 0 1 5-5h3">
                                                        </path>
                                                        <line x1="8" y1="12" x2="16"
                                                            y2="12"></line>
                                                    </svg>
                                                </div>
                                                <div class="close-icon is-main">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-x">
                                                        <line x1="18" y1="6" x2="6"
                                                            y2="18"></line>
                                                        <line x1="6" y1="6" x2="18"
                                                            y2="18"></line>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- GIF suboption -->
                                        <div id="gif-suboption" class="is-autocomplete is-suboption is-hidden">
                                            <div id="gif-autocpl-wrapper" class="control is-gif-wrapper has-margin">
                                                <input id="gif-autocpl" type="text" class="input"
                                                    placeholder="Search a GIF to add" autofocus="">
                                                <div class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-search">
                                                        <circle cx="11" cy="11" r="8"></circle>
                                                        <line x1="21" y1="21" x2="16.65"
                                                            y2="16.65"></line>
                                                    </svg>
                                                </div>
                                                <div class="close-icon is-main">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-x">
                                                        <line x1="18" y1="6" x2="6"
                                                            y2="18"></line>
                                                        <line x1="6" y1="6" x2="18"
                                                            y2="18"></line>
                                                    </svg>
                                                </div>
                                                <div class="gif-dropdown">
                                                    <div class="inner">
                                                        <div class="gif-block">
                                                            <img src="https://friendkit.cssninja.io/assets/img/demo/gif/1.gif"
                                                                data-demo-src="https://friendkit.cssninja.io/assets/img/demo/gif/1.gif"
                                                                alt="">
                                                            <img src="https://friendkit.cssninja.io/assets/img/demo/gif/2.gif"
                                                                data-demo-src="https://friendkit.cssninja.io/assets/img/demo/gif/2.gif"
                                                                alt="">
                                                            <img src="https://friendkit.cssninja.io/assets/img/demo/gif/3.gif"
                                                                data-demo-src="https://friendkit.cssninja.io/assets/img/demo/gif/3.gif"
                                                                alt="">
                                                            <img src="https://friendkit.cssninja.io/assets/img/demo/gif/4.gif"
                                                                data-demo-src="https://friendkit.cssninja.io/assets/img/demo/gif/4.gif"
                                                                alt="">
                                                        </div>
                                                        <div class="gif-block">
                                                            <img src="https://friendkit.cssninja.io/assets/img/demo/gif/5.gif"
                                                                data-demo-src="https://friendkit.cssninja.io/assets/img/demo/gif/5.gif"
                                                                alt="">
                                                            <img src="https://friendkit.cssninja.io/assets/img/demo/gif/6.gif"
                                                                data-demo-src="https://friendkit.cssninja.io/assets/img/demo/gif/6.gif"
                                                                alt="">
                                                            <img src="https://friendkit.cssninja.io/assets/img/demo/gif/7.gif"
                                                                data-demo-src="https://friendkit.cssninja.io/assets/img/demo/gif/7.gif"
                                                                alt="">
                                                            <img src="https://friendkit.cssninja.io/assets/img/demo/gif/8.gif"
                                                                data-demo-src="https://friendkit.cssninja.io/assets/img/demo/gif/8.gif"
                                                                alt="">
                                                        </div>
                                                        <div class="gif-block">
                                                            <img src="https://friendkit.cssninja.io/assets/img/demo/gif/9.gif"
                                                                data-demo-src="https://friendkit.cssninja.io/assets/img/demo/gif/9.gif"
                                                                alt="">
                                                            <img src="https://friendkit.cssninja.io/assets/img/demo/gif/10.gif"
                                                                data-demo-src="https://friendkit.cssninja.io/assets/img/demo/gif/10.gif"
                                                                alt="">
                                                            <img src="https://friendkit.cssninja.io/assets/img/demo/gif/11.gif"
                                                                data-demo-src="https://friendkit.cssninja.io/assets/img/demo/gif/11.gif"
                                                                alt="">
                                                            <img src="https://friendkit.cssninja.io/assets/img/demo/gif/12.gif"
                                                                data-demo-src="https://friendkit.cssninja.io/assets/img/demo/gif/12.gif"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Compose form -->

                                    <!-- General extended options -->
                                    <div id="extended-options" class="compose-options is-hidden">
                                        <div class="columns is-multiline is-full">
                                            <!-- Upload action -->
                                            <div class="column is-6 is-narrower">
                                                <div class="compose-option is-centered">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-camera">
                                                        <path
                                                            d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z">
                                                        </path>
                                                        <circle cx="12" cy="13" r="4"></circle>
                                                    </svg>
                                                    <span>Photo/Video</span>
                                                    <input id="feed-upload-input-1" type="file"
                                                        accept=".png, .jpg, .jpeg" onchange="readURL(this)">
                                                </div>
                                            </div>
                                            <!-- Mood action -->
                                            <div class="column is-6 is-narrower">
                                                <div id="extended-show-activities" class="compose-option is-centered">
                                                    <img src="https://friendkit.cssninja.io/assets/img/icons/emoji/emoji-1.svg" alt="">
                                                    <span>Mood/Activity</span>
                                                </div>
                                            </div>
                                            <!-- Tag friends action -->
                                            <div class="column is-6 is-narrower">
                                                <div id="open-tag-suboption" class="compose-option is-centered">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-tag">
                                                        <path
                                                            d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z">
                                                        </path>
                                                        <line x1="7" y1="7" x2="7.01"
                                                            y2="7"></line>
                                                    </svg>
                                                    <span>Tag friends</span>
                                                </div>
                                            </div>
                                            <!-- Post location action -->
                                            <div class="column is-6 is-narrower">
                                                <div id="open-location-suboption" class="compose-option is-centered">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-map-pin">
                                                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                                        <circle cx="12" cy="10" r="3"></circle>
                                                    </svg>
                                                    <span>Post location</span>
                                                </div>
                                            </div>
                                            <!-- Share link action -->
                                            <div class="column is-6 is-narrower">
                                                <div id="open-link-suboption" class="compose-option is-centered">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-link-2">
                                                        <path
                                                            d="M15 7h3a5 5 0 0 1 5 5 5 5 0 0 1-5 5h-3m-6 0H6a5 5 0 0 1-5-5 5 5 0 0 1 5-5h3">
                                                        </path>
                                                        <line x1="8" y1="12" x2="16"
                                                            y2="12"></line>
                                                    </svg>
                                                    <span>Share link</span>
                                                </div>
                                            </div>
                                            <!-- Post GIF action -->
                                            <div class="column is-6 is-narrower">
                                                <div id="open-gif-suboption" class="compose-option is-centered">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-image">
                                                        <rect x="3" y="3" width="18" height="18" rx="2"
                                                            ry="2"></rect>
                                                        <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                                        <polyline points="21 15 16 10 5 21"></polyline>
                                                    </svg>
                                                    <span>Post GIF</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /General extended options -->

                                    <!-- General basic options -->
                                    <div id="basic-options" class="compose-options">
                                        <!-- Upload action -->
                                        <div class="compose-option">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-camera">
                                                <path
                                                    d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z">
                                                </path>
                                                <circle cx="12" cy="13" r="4"></circle>
                                            </svg>
                                            <span>Media</span>
                                            <input id="feed-upload-input-2" type="file" accept=".png, .jpg, .jpeg"
                                                onchange="readURL(this)">
                                        </div>
                                        <!-- Mood action -->
                                        <div id="show-activities" class="compose-option">
                                            <img src="https://friendkit.cssninja.io/assets/img/icons/emoji/emoji-1.svg" alt="">
                                            <span>Activity</span>
                                        </div>
                                        <!-- Expand action -->
                                        <div id="open-extended-options" class="compose-option">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-more-horizontal">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="19" cy="12" r="1"></circle>
                                                <circle cx="5" cy="12" r="1"></circle>
                                            </svg>
                                        </div>
                                    </div>
                                    <!-- /General basic options -->

                                    <!-- Hidden Options -->
                                    <div class="hidden-options">
                                        <div class="target-channels">
                                            <!-- Publication Channel -->
                                            <div class="channel">
                                                <div class="round-checkbox is-small">
                                                    <div>
                                                        <input type="checkbox" id="checkbox-1" checked="">
                                                        <label for="checkbox-1"></label>
                                                    </div>
                                                </div>
                                                <div class="channel-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-bell">
                                                        <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                                        <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                                    </svg>
                                                </div>
                                                <div class="channel-name">Activity Feed</div>
                                                <!-- Dropdown menu -->
                                                <div
                                                    class="dropdown is-spaced is-modern is-right is-neutral dropdown-trigger">
                                                    <div>
                                                        <button class="button" aria-haspopup="true">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-smile main-icon">
                                                                <circle cx="12" cy="12" r="10"></circle>
                                                                <path d="M8 14s1.5 2 4 2 4-2 4-2"></path>
                                                                <line x1="9" y1="9" x2="9.01"
                                                                    y2="9"></line>
                                                                <line x1="15" y1="9" x2="15.01"
                                                                    y2="9"></line>
                                                            </svg>
                                                            <span>Friends</span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-chevron-down caret">
                                                                <polyline points="6 9 12 15 18 9"></polyline>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="dropdown-menu" role="menu">
                                                        <div class="dropdown-content">
                                                            <a href="#" class="dropdown-item">
                                                                <div class="media">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-globe">
                                                                        <circle cx="12" cy="12" r="10">
                                                                        </circle>
                                                                        <line x1="2" y1="12"
                                                                            x2="22" y2="12"></line>
                                                                        <path
                                                                            d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                                                                        </path>
                                                                    </svg>
                                                                    <div class="media-content">
                                                                        <h3>Public</h3>
                                                                        <small>Anyone can see this publication.</small>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a class="dropdown-item">
                                                                <div class="media">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-users">
                                                                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2">
                                                                        </path>
                                                                        <circle cx="9" cy="7" r="4">
                                                                        </circle>
                                                                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                                                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                                                    </svg>
                                                                    <div class="media-content">
                                                                        <h3>Friends</h3>
                                                                        <small>only friends can see this
                                                                            publication.</small>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a class="dropdown-item">
                                                                <div class="media">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-user">
                                                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2">
                                                                        </path>
                                                                        <circle cx="12" cy="7" r="4">
                                                                        </circle>
                                                                    </svg>
                                                                    <div class="media-content">
                                                                        <h3>Specific friends</h3>
                                                                        <small>Don't show it to some friends.</small>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <hr class="dropdown-divider">
                                                            <a class="dropdown-item">
                                                                <div class="media">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-lock">
                                                                        <rect x="3" y="11" width="18" height="11"
                                                                            rx="2" ry="2"></rect>
                                                                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                                                    </svg>
                                                                    <div class="media-content">
                                                                        <h3>Only me</h3>
                                                                        <small>Only me can see this publication.</small>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Publication Channel -->
                                            <div class="channel">
                                                <div class="round-checkbox is-small">
                                                    <div>
                                                        <input type="checkbox" id="checkbox-2">
                                                        <label for="checkbox-2"></label>
                                                    </div>
                                                </div>
                                                <div class="story-icon">
                                                    <div class="plus-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-plus">
                                                            <line x1="12" y1="5" x2="12"
                                                                y2="19"></line>
                                                            <line x1="5" y1="12" x2="19"
                                                                y2="12"></line>
                                                        </svg>
                                                    </div>
                                                </div>

                                                <div class="channel-name">My Story</div>
                                                <!-- Dropdown menu -->
                                                <div
                                                    class="dropdown is-spaced is-modern is-right is-neutral dropdown-trigger">
                                                    <div>
                                                        <button class="button" aria-haspopup="true">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-smile main-icon">
                                                                <circle cx="12" cy="12" r="10"></circle>
                                                                <path d="M8 14s1.5 2 4 2 4-2 4-2"></path>
                                                                <line x1="9" y1="9" x2="9.01"
                                                                    y2="9"></line>
                                                                <line x1="15" y1="9" x2="15.01"
                                                                    y2="9"></line>
                                                            </svg>
                                                            <span>Friends</span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-chevron-down caret">
                                                                <polyline points="6 9 12 15 18 9"></polyline>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="dropdown-menu" role="menu">
                                                        <div class="dropdown-content">
                                                            <a href="#" class="dropdown-item">
                                                                <div class="media">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-globe">
                                                                        <circle cx="12" cy="12" r="10">
                                                                        </circle>
                                                                        <line x1="2" y1="12"
                                                                            x2="22" y2="12"></line>
                                                                        <path
                                                                            d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                                                                        </path>
                                                                    </svg>
                                                                    <div class="media-content">
                                                                        <h3>Public</h3>
                                                                        <small>Anyone can see this publication.</small>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a class="dropdown-item">
                                                                <div class="media">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-users">
                                                                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2">
                                                                        </path>
                                                                        <circle cx="9" cy="7" r="4">
                                                                        </circle>
                                                                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                                                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                                                    </svg>
                                                                    <div class="media-content">
                                                                        <h3>Friends</h3>
                                                                        <small>only friends can see this
                                                                            publication.</small>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a class="dropdown-item">
                                                                <div class="media">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-users">
                                                                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2">
                                                                        </path>
                                                                        <circle cx="9" cy="7" r="4">
                                                                        </circle>
                                                                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                                                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                                                    </svg>
                                                                    <div class="media-content">
                                                                        <h3>Friends and contacts</h3>
                                                                        <small>Your friends and contacts.</small>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Friends list -->
                                        <div class="friends-list is-hidden">
                                            <!-- Header -->
                                            <div class="list-header">
                                                <span>Send in a message</span>
                                                <div class="actions">
                                                    <a id="open-compose-search" href="javascript:void(0);"
                                                        class="search-trigger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-search">
                                                            <circle cx="11" cy="11" r="8"></circle>
                                                            <line x1="21" y1="21" x2="16.65"
                                                                y2="16.65"></line>
                                                        </svg>
                                                    </a>
                                                    <!-- Hidden filter input -->
                                                    <div id="compose-search" class="control is-hidden">
                                                        <input type="text" class="input"
                                                            placeholder="Search People">
                                                        <span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-search">
                                                                <circle cx="11" cy="11" r="8"></circle>
                                                                <line x1="21" y1="21" x2="16.65"
                                                                    y2="16.65"></line>
                                                            </svg>
                                                        </span>
                                                    </div>
                                                    <a href="javascript:void(0);" class="is-inverted modal-trigger"
                                                        data-modal="create-group-modal">Create group</a>
                                                </div>
                                            </div>
                                            <!-- List body -->
                                            <div class="list-body">
                                                <!-- Friend -->
                                                <div class="friend-block">
                                                    <div class="round-checkbox is-small">
                                                        <div>
                                                            <input type="checkbox" id="checkbox-3">
                                                            <label for="checkbox-3"></label>
                                                        </div>
                                                    </div>
                                                    <img class="friend-avatar" src="https://friendkit.cssninja.io/assets/img/avatars/dan.jpg"
                                                        data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/dan.jpg" alt="">
                                                    <div class="friend-name">Dan Walker</div>
                                                </div>
                                                <!-- Friend -->
                                                <div class="friend-block">
                                                    <div class="round-checkbox is-small">
                                                        <div>
                                                            <input type="checkbox" id="checkbox-4">
                                                            <label for="checkbox-4"></label>
                                                        </div>
                                                    </div>
                                                    <img class="friend-avatar" src="https://friendkit.cssninja.io/assets/img/avatars/daniel.jpg"
                                                        data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/daniel.jpg" alt="">
                                                    <div class="friend-name">Daniel Wellington</div>
                                                </div>
                                                <!-- Friend -->
                                                <div class="friend-block">
                                                    <div class="round-checkbox is-small">
                                                        <div>
                                                            <input type="checkbox" id="checkbox-5">
                                                            <label for="checkbox-5"></label>
                                                        </div>
                                                    </div>
                                                    <img class="friend-avatar" src="https://friendkit.cssninja.io/assets/img/avatars/stella.jpg"
                                                        data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/stella.jpg" alt="">
                                                    <div class="friend-name">Stella Bergmann</div>
                                                </div>
                                                <!-- Friend -->
                                                <div class="friend-block">
                                                    <div class="round-checkbox is-small">
                                                        <div>
                                                            <input type="checkbox" id="checkbox-6">
                                                            <label for="checkbox-6"></label>
                                                        </div>
                                                    </div>
                                                    <img class="friend-avatar" src="https://friendkit.cssninja.io/assets/img/avatars/david.jpg"
                                                        data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/david.jpg" alt="">
                                                    <div class="friend-name">David Kim</div>
                                                </div>
                                                <!-- Friend -->
                                                <div class="friend-block">
                                                    <div class="round-checkbox is-small">
                                                        <div>
                                                            <input type="checkbox" id="checkbox-7">
                                                            <label for="checkbox-7"></label>
                                                        </div>
                                                    </div>
                                                    <img class="friend-avatar" src="https://friendkit.cssninja.io/assets/img/avatars/nelly.png"
                                                        data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/nelly.png" alt="">
                                                    <div class="friend-name">Nelly Schwartz</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Footer buttons -->
                                    <div class="more-wrap">
                                        <!-- View more button -->
                                        <button id="show-compose-friends" type="button" class="button is-more"
                                            aria-haspopup="true">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-more-vertical">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="12" cy="5" r="1"></circle>
                                                <circle cx="12" cy="19" r="1"></circle>
                                            </svg>
                                            <span>View More</span>
                                        </button>
                                        <!-- Publish button -->
                                        <button id="publish-button" type="button"
                                            class="button is-solid accent-button is-fullwidth is-disabled">
                                            Publish
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Post 1 -->
                        <!-- /partials/pages/feed/posts/feed-post1.html -->
                        <!-- POST #1 -->
                        <div id="feed-post-1" class="card is-post">
                            <!-- Main wrap -->
                            <div class="content-wrap">
                                <!-- Post header -->
                                <div class="card-heading">
                                    <!-- User meta -->
                                    <div class="user-block">
                                        <div class="image">
                                            <img src="https://friendkit.cssninja.io/assets/img/avatars/dan.jpg"
                                                data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/dan.jpg" data-user-popover="1"
                                                alt="">
                                        </div>
                                        <div class="user-info">
                                            <a href="#">Dan Walker</a>
                                            <span class="time">July 26 2018, 01:03pm</span>
                                        </div>
                                    </div>
                                    <!-- Right side dropdown -->
                                    <!-- /partials/pages/feed/dropdowns/feed-post-dropdown.html -->
                                    <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                        <div>
                                            <div class="button">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-more-vertical">
                                                    <circle cx="12" cy="12" r="1"></circle>
                                                    <circle cx="12" cy="5" r="1"></circle>
                                                    <circle cx="12" cy="19" r="1"></circle>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="dropdown-menu" role="menu">
                                            <div class="dropdown-content">
                                                <a href="#" class="dropdown-item">
                                                    <div class="media">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-bookmark">
                                                            <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z">
                                                            </path>
                                                        </svg>
                                                        <div class="media-content">
                                                            <h3>Bookmark</h3>
                                                            <small>Add this post to your bookmarks.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item">
                                                    <div class="media">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-bell">
                                                            <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                                            <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                                        </svg>
                                                        <div class="media-content">
                                                            <h3>Notify me</h3>
                                                            <small>Send me the updates.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <hr class="dropdown-divider">
                                                <a href="#" class="dropdown-item">
                                                    <div class="media">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-flag">
                                                            <path
                                                                d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z">
                                                            </path>
                                                            <line x1="4" y1="22" x2="4"
                                                                y2="15"></line>
                                                        </svg>
                                                        <div class="media-content">
                                                            <h3>Flag</h3>
                                                            <small>In case of inappropriate content.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Post header -->

                                <!-- Post body -->
                                <div class="card-body">
                                    <!-- Post body text -->
                                    <div class="post-text">
                                        <p>
                                            Yesterday with <a href="#">@Karen Miller</a> and
                                            <a href="#">@Marvin Stemperd</a> at the
                                            <a href="#">#Rock'n'Rolla</a> concert in LA. Was totally fantastic!
                                            People were really excited about this one!
                                        </p>
                                    </div>
                                    <!-- Featured image -->
                                    <div class="post-image">
                                        <a data-fancybox="post1" data-lightbox-type="comments"
                                            data-thumb="https://friendkit.cssninja.io/assets/img/demo/unsplash/1.jpg"
                                            href="https://friendkit.cssninja.io/assets/img/demo/unsplash/1.jpg"
                                            data-demo-href="https://friendkit.cssninja.io/assets/img/demo/unsplash/1.jpg">
                                            <img src="https://friendkit.cssninja.io/assets/img/demo/unsplash/1.jpg"
                                                data-demo-src="https://friendkit.cssninja.io/assets/img/demo/unsplash/1.jpg" alt="">
                                        </a>
                                        <!-- Action buttons -->
                                        <!-- /partials/pages/feed/buttons/feed-post-actions.html -->
                                        <div class="like-wrapper">
                                            <a href="javascript:void(0);" class="like-button">
                                                <i class="bx bx-heart" style="color:red"></i>
                                                <i class="bxs bx-heart d-none" style="color:red"></i>
                                                <span class="like-overlay"></span>
                                            </a>
                                        </div>

                                        <div class="fab-wrapper is-share">
                                            <a href="javascript:void(0);" class="small-fab share-fab modal-trigger"
                                                data-modal="share-modal">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-link-2">
                                                    <path
                                                        d="M15 7h3a5 5 0 0 1 5 5 5 5 0 0 1-5 5h-3m-6 0H6a5 5 0 0 1-5-5 5 5 0 0 1 5-5h3">
                                                    </path>
                                                    <line x1="8" y1="12" x2="16"
                                                        y2="12"></line>
                                                </svg>
                                            </a>
                                        </div>

                                        <div class="fab-wrapper is-comment">
                                            <a href="javascript:void(0);" class="small-fab">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-message-circle">
                                                    <path
                                                        d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Post body -->

                                <!-- Post footer -->
                                <div class="card-footer">
                                    <!-- Followers avatars -->
                                    <div class="likers-group">
                                        <img src="https://friendkit.cssninja.io/assets/img/avatars/dan.jpg" data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/dan.jpg"
                                            data-user-popover="1" alt="">
                                        <img src="https://friendkit.cssninja.io/assets/img/avatars/david.jpg"
                                            data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/david.jpg" data-user-popover="4"
                                            alt="">
                                        <img src="https://friendkit.cssninja.io/assets/img/avatars/edward.jpeg"
                                            data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/edward.jpeg" data-user-popover="5"
                                            alt="">
                                        <img src="https://friendkit.cssninja.io/assets/img/avatars/milly.jpg"
                                            data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/milly.jpg" data-user-popover="7"
                                            alt="">
                                    </div>
                                    <!-- Followers text -->
                                    <div class="likers-text">
                                        <p>
                                            <a href="#">Milly</a>,
                                            <a href="#">David</a>
                                        </p>
                                        <p>and 23 more liked this</p>
                                    </div>
                                    <!-- Post statistics -->
                                    <div class="social-count">
                                        <div class="likes-count">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-heart">
                                                <path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                                </path>
                                            </svg>
                                            <span>27</span>
                                        </div>
                                        <div class="shares-count">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-link-2">
                                                <path
                                                    d="M15 7h3a5 5 0 0 1 5 5 5 5 0 0 1-5 5h-3m-6 0H6a5 5 0 0 1-5-5 5 5 0 0 1 5-5h3">
                                                </path>
                                                <line x1="8" y1="12" x2="16" y2="12">
                                                </line>
                                            </svg>
                                            <span>9</span>
                                        </div>
                                        <div class="comments-count">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-message-circle">
                                                <path
                                                    d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z">
                                                </path>
                                            </svg>
                                            <span>3</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Post footer -->
                            </div>
                            <!-- /Main wrap -->

                            <!-- Post #1 Comments -->
                            <div class="comments-wrap is-hidden">
                                <!-- Header -->
                                <div class="comments-heading">
                                    <h4>Comments <small>(8)</small></h4>
                                    <div class="close-comments">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-x">
                                            <line x1="18" y1="6" x2="6" y2="18">
                                            </line>
                                            <line x1="6" y1="6" x2="18" y2="18">
                                            </line>
                                        </svg>
                                    </div>
                                </div>
                                <!-- /Header -->

                                <!-- Comments body -->
                                <div class="comments-body has-slimscroll">
                                    <!-- Comment -->
                                    <div class="media is-comment">
                                        <!-- User image -->
                                        <div class="media-left">
                                            <div class="image">
                                                <img src="https://friendkit.cssninja.io/assets/img/avatars/dan.jpg"
                                                    data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/dan.jpg" data-user-popover="1"
                                                    alt="">
                                            </div>
                                        </div>
                                        <!-- Content -->
                                        <div class="media-content">
                                            <a href="#">Dan Walker</a>
                                            <span class="time">28 minutes ago</span>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                eiusmod tempo incididunt ut labore et dolore magna aliqua. Ut enim
                                                ad minim veniam, quis nostrud exercitation ullamco laboris
                                                consequat.
                                            </p>
                                            <!-- Actions -->
                                            <div class="controls">
                                                <div class="like-count">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-thumbs-up">
                                                        <path
                                                            d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                                                        </path>
                                                    </svg>
                                                    <span>4</span>
                                                </div>
                                                <div class="reply">
                                                    <a href="#">Reply</a>
                                                </div>
                                                <div class="edit">
                                                    <a href="#">Edit</a>
                                                </div>
                                            </div>

                                            <!-- Nested Comment -->
                                            <div class="media is-comment">
                                                <!-- User image -->
                                                <div class="media-left">
                                                    <div class="image">
                                                        <img src="https://friendkit.cssninja.io/assets/img/avatars/david.jpg"
                                                            data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/david.jpg"
                                                            data-user-popover="4" alt="">
                                                    </div>
                                                </div>
                                                <!-- Content -->
                                                <div class="media-content">
                                                    <a href="#">David Kim</a>
                                                    <span class="time">15 minutes ago</span>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                        eiusmod tempo incididunt ut labore et dolore magna aliqua.
                                                    </p>
                                                    <!-- Actions -->
                                                    <div class="controls">
                                                        <div class="like-count">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-thumbs-up">
                                                                <path
                                                                    d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                                                                </path>
                                                            </svg>
                                                            <span>0</span>
                                                        </div>
                                                        <div class="reply">
                                                            <a href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Right side dropdown -->
                                                <div class="media-right">
                                                    <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                                        <div>
                                                            <div class="button">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-more-vertical">
                                                                    <circle cx="12" cy="12" r="1">
                                                                    </circle>
                                                                    <circle cx="12" cy="5" r="1">
                                                                    </circle>
                                                                    <circle cx="12" cy="19" r="1">
                                                                    </circle>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-menu" role="menu">
                                                            <div class="dropdown-content">
                                                                <a class="dropdown-item">
                                                                    <div class="media">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-x">
                                                                            <line x1="18" y1="6"
                                                                                x2="6" y2="18"></line>
                                                                            <line x1="6" y1="6"
                                                                                x2="18" y2="18"></line>
                                                                        </svg>
                                                                        <div class="media-content">
                                                                            <h3>Hide</h3>
                                                                            <small>Hide this comment.</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <div class="dropdown-divider"></div>
                                                                <a href="#" class="dropdown-item">
                                                                    <div class="media">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-flag">
                                                                            <path
                                                                                d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z">
                                                                            </path>
                                                                            <line x1="4" y1="22"
                                                                                x2="4" y2="15"></line>
                                                                        </svg>
                                                                        <div class="media-content">
                                                                            <h3>Report</h3>
                                                                            <small>Report this comment.</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Nested Comment -->
                                        </div>
                                        <!-- Right side dropdown -->
                                        <div class="media-right">
                                            <!-- /partials/pages/feed/dropdowns/comment-dropdown.html -->
                                            <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                                <div>
                                                    <div class="button">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-more-vertical">
                                                            <circle cx="12" cy="12" r="1"></circle>
                                                            <circle cx="12" cy="5" r="1"></circle>
                                                            <circle cx="12" cy="19" r="1"></circle>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="dropdown-menu" role="menu">
                                                    <div class="dropdown-content">
                                                        <a class="dropdown-item">
                                                            <div class="media">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-x">
                                                                    <line x1="18" y1="6" x2="6"
                                                                        y2="18"></line>
                                                                    <line x1="6" y1="6" x2="18"
                                                                        y2="18"></line>
                                                                </svg>
                                                                <div class="media-content">
                                                                    <h3>Hide</h3>
                                                                    <small>Hide this comment.</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <div class="dropdown-divider"></div>
                                                        <a href="#" class="dropdown-item">
                                                            <div class="media">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-flag">
                                                                    <path
                                                                        d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z">
                                                                    </path>
                                                                    <line x1="4" y1="22" x2="4"
                                                                        y2="15"></line>
                                                                </svg>
                                                                <div class="media-content">
                                                                    <h3>Report</h3>
                                                                    <small>Report this comment.</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Comment -->

                                    <!-- Comment -->
                                    <div class="media is-comment">
                                        <!-- User image -->
                                        <div class="media-left">
                                            <div class="image">
                                                <img src="https://friendkit.cssninja.io/assets/img/avatars/rolf.jpg"
                                                    data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/rolf.jpg" data-user-popover="13"
                                                    alt="">
                                            </div>
                                        </div>
                                        <!-- Content -->
                                        <div class="media-content">
                                            <a href="#">Rolf Krupp</a>
                                            <span class="time">9 hours ago</span>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                eiusmod tempo incididunt ut labore et dolore magna aliqua.
                                                Exercitation ullamco laboris consequat.
                                            </p>
                                            <!-- Actions -->
                                            <div class="controls">
                                                <div class="like-count">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-thumbs-up">
                                                        <path
                                                            d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                                                        </path>
                                                    </svg>
                                                    <span>2</span>
                                                </div>
                                                <div class="reply">
                                                    <a href="#">Reply</a>
                                                </div>
                                            </div>

                                            <!-- Nested Comment -->
                                            <div class="media is-comment">
                                                <!-- User image -->
                                                <div class="media-left">
                                                    <div class="image">
                                                        <img src="https://friendkit.cssninja.io/assets/img/avatars/elise.jpg"
                                                            data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/elise.jpg"
                                                            data-user-popover="6" alt="">
                                                    </div>
                                                </div>
                                                <!-- Content -->
                                                <div class="media-content">
                                                    <a href="#">Elise Walker</a>
                                                    <span class="time">8 hours ago</span>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                        eiusmod tempo incididunt ut labore et dolore magna aliqua.
                                                    </p>
                                                    <!-- Actions -->
                                                    <div class="controls">
                                                        <div class="like-count">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-thumbs-up">
                                                                <path
                                                                    d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                                                                </path>
                                                            </svg>
                                                            <span>0</span>
                                                        </div>
                                                        <div class="reply">
                                                            <a href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Right side dropdown -->
                                                <div class="media-right">
                                                    <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                                        <div>
                                                            <div class="button">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-more-vertical">
                                                                    <circle cx="12" cy="12" r="1">
                                                                    </circle>
                                                                    <circle cx="12" cy="5" r="1">
                                                                    </circle>
                                                                    <circle cx="12" cy="19" r="1">
                                                                    </circle>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-menu" role="menu">
                                                            <div class="dropdown-content">
                                                                <a class="dropdown-item">
                                                                    <div class="media">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-x">
                                                                            <line x1="18" y1="6"
                                                                                x2="6" y2="18"></line>
                                                                            <line x1="6" y1="6"
                                                                                x2="18" y2="18"></line>
                                                                        </svg>
                                                                        <div class="media-content">
                                                                            <h3>Hide</h3>
                                                                            <small>Hide this comment.</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <div class="dropdown-divider"></div>
                                                                <a href="#" class="dropdown-item">
                                                                    <div class="media">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-flag">
                                                                            <path
                                                                                d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z">
                                                                            </path>
                                                                            <line x1="4" y1="22"
                                                                                x2="4" y2="15"></line>
                                                                        </svg>
                                                                        <div class="media-content">
                                                                            <h3>Report</h3>
                                                                            <small>Report this comment.</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Nested Comment -->

                                            <!-- Nested Comment -->
                                            <div class="media is-comment">
                                                <!-- User image -->
                                                <div class="media-left">
                                                    <div class="image">
                                                        <img src="https://friendkit.cssninja.io/assets/img/avatars/rolf.jpg"
                                                            data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/rolf.jpg"
                                                            data-user-popover="13" alt="">
                                                    </div>
                                                </div>
                                                <!-- Content -->
                                                <div class="media-content">
                                                    <a href="#">Rolf Krupp</a>
                                                    <span class="time">7 hours ago</span>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                        eiusmod tempo incididunt ut labore et dolore magna aliqua.
                                                    </p>
                                                    <!-- Actions -->
                                                    <div class="controls">
                                                        <div class="like-count">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-thumbs-up">
                                                                <path
                                                                    d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                                                                </path>
                                                            </svg>
                                                            <span>1</span>
                                                        </div>
                                                        <div class="reply">
                                                            <a href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Right side dropdown -->
                                                <div class="media-right">
                                                    <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                                        <div>
                                                            <div class="button">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-more-vertical">
                                                                    <circle cx="12" cy="12" r="1">
                                                                    </circle>
                                                                    <circle cx="12" cy="5" r="1">
                                                                    </circle>
                                                                    <circle cx="12" cy="19" r="1">
                                                                    </circle>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-menu" role="menu">
                                                            <div class="dropdown-content">
                                                                <a class="dropdown-item">
                                                                    <div class="media">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-x">
                                                                            <line x1="18" y1="6"
                                                                                x2="6" y2="18"></line>
                                                                            <line x1="6" y1="6"
                                                                                x2="18" y2="18"></line>
                                                                        </svg>
                                                                        <div class="media-content">
                                                                            <h3>Hide</h3>
                                                                            <small>Hide this comment.</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <div class="dropdown-divider"></div>
                                                                <a href="#" class="dropdown-item">
                                                                    <div class="media">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-flag">
                                                                            <path
                                                                                d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z">
                                                                            </path>
                                                                            <line x1="4" y1="22"
                                                                                x2="4" y2="15"></line>
                                                                        </svg>
                                                                        <div class="media-content">
                                                                            <h3>Report</h3>
                                                                            <small>Report this comment.</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Nested Comment -->

                                            <!-- Nested Comment -->
                                            <div class="media is-comment">
                                                <!-- User image -->
                                                <div class="media-left">
                                                    <div class="image">
                                                        <img src="https://friendkit.cssninja.io/assets/img/avatars/elise.jpg"
                                                            data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/elise.jpg"
                                                            data-user-popover="6" alt="">
                                                    </div>
                                                </div>
                                                <!-- Content -->
                                                <div class="media-content">
                                                    <a href="#">Elise Walker</a>
                                                    <span class="time">6 hours ago</span>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                        eiusmod tempo incididunt ut labore et dolore magna aliqua.
                                                    </p>
                                                    <!-- Actions -->
                                                    <div class="controls">
                                                        <div class="like-count">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-thumbs-up">
                                                                <path
                                                                    d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                                                                </path>
                                                            </svg>
                                                            <span>0</span>
                                                        </div>
                                                        <div class="reply">
                                                            <a href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Right side dropdown -->
                                                <div class="media-right">
                                                    <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                                        <div>
                                                            <div class="button">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-more-vertical">
                                                                    <circle cx="12" cy="12" r="1">
                                                                    </circle>
                                                                    <circle cx="12" cy="5" r="1">
                                                                    </circle>
                                                                    <circle cx="12" cy="19" r="1">
                                                                    </circle>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-menu" role="menu">
                                                            <div class="dropdown-content">
                                                                <a class="dropdown-item">
                                                                    <div class="media">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-x">
                                                                            <line x1="18" y1="6"
                                                                                x2="6" y2="18"></line>
                                                                            <line x1="6" y1="6"
                                                                                x2="18" y2="18"></line>
                                                                        </svg>
                                                                        <div class="media-content">
                                                                            <h3>Hide</h3>
                                                                            <small>Hide this comment.</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <div class="dropdown-divider"></div>
                                                                <a href="#" class="dropdown-item">
                                                                    <div class="media">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-flag">
                                                                            <path
                                                                                d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z">
                                                                            </path>
                                                                            <line x1="4" y1="22"
                                                                                x2="4" y2="15"></line>
                                                                        </svg>
                                                                        <div class="media-content">
                                                                            <h3>Report</h3>
                                                                            <small>Report this comment.</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Nested Comment -->
                                        </div>
                                        <!-- Right side dropdown -->
                                        <div class="media-right">
                                            <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                                <div>
                                                    <div class="button">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-more-vertical">
                                                            <circle cx="12" cy="12" r="1"></circle>
                                                            <circle cx="12" cy="5" r="1"></circle>
                                                            <circle cx="12" cy="19" r="1"></circle>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="dropdown-menu" role="menu">
                                                    <div class="dropdown-content">
                                                        <a class="dropdown-item">
                                                            <div class="media">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-x">
                                                                    <line x1="18" y1="6" x2="6"
                                                                        y2="18"></line>
                                                                    <line x1="6" y1="6" x2="18"
                                                                        y2="18"></line>
                                                                </svg>
                                                                <div class="media-content">
                                                                    <h3>Hide</h3>
                                                                    <small>Hide this comment.</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <div class="dropdown-divider"></div>
                                                        <a href="#" class="dropdown-item">
                                                            <div class="media">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-flag">
                                                                    <path
                                                                        d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z">
                                                                    </path>
                                                                    <line x1="4" y1="22" x2="4"
                                                                        y2="15"></line>
                                                                </svg>
                                                                <div class="media-content">
                                                                    <h3>Report</h3>
                                                                    <small>Report this comment.</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Comment -->

                                    <!-- Comment -->
                                    <div class="media is-comment">
                                        <!-- User image -->
                                        <div class="media-left">
                                            <div class="image">
                                                <img src="https://friendkit.cssninja.io/assets/img/avatars/lana.jpeg"
                                                    data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/lana.jpeg" data-user-popover="10"
                                                    alt="">
                                            </div>
                                        </div>
                                        <!-- Content -->
                                        <div class="media-content">
                                            <a href="#">Lana Henrikssen</a>
                                            <span class="time">10 hours ago</span>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                eiusmod tempo incididunt ut labore et dolore magna aliqua.
                                            </p>
                                            <!-- Comment actions -->
                                            <div class="controls">
                                                <div class="like-count">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-thumbs-up">
                                                        <path
                                                            d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                                                        </path>
                                                    </svg>
                                                    <span>5</span>
                                                </div>
                                                <div class="reply">
                                                    <a href="#">Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Right side dropdown -->
                                        <div class="media-right">
                                            <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                                <div>
                                                    <div class="button">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-more-vertical">
                                                            <circle cx="12" cy="12" r="1"></circle>
                                                            <circle cx="12" cy="5" r="1"></circle>
                                                            <circle cx="12" cy="19" r="1"></circle>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="dropdown-menu" role="menu">
                                                    <div class="dropdown-content">
                                                        <a class="dropdown-item">
                                                            <div class="media">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-x">
                                                                    <line x1="18" y1="6" x2="6"
                                                                        y2="18"></line>
                                                                    <line x1="6" y1="6" x2="18"
                                                                        y2="18"></line>
                                                                </svg>
                                                                <div class="media-content">
                                                                    <h3>Hide</h3>
                                                                    <small>Hide this comment.</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <div class="dropdown-divider"></div>
                                                        <a href="#" class="dropdown-item">
                                                            <div class="media">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-flag">
                                                                    <path
                                                                        d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z">
                                                                    </path>
                                                                    <line x1="4" y1="22" x2="4"
                                                                        y2="15"></line>
                                                                </svg>
                                                                <div class="media-content">
                                                                    <h3>Report</h3>
                                                                    <small>Report this comment.</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Comment -->
                                </div>
                                <!-- /Comments body -->

                                <!-- Comments footer -->
                                <div class="card-footer">
                                    <div class="media post-comment has-emojis">
                                        <!-- Comment Textarea -->
                                        <div class="media-content">
                                            <div class="field">
                                                <p class="control">
                                                    <textarea class="textarea comment-textarea" rows="5" placeholder="Write a comment..."
                                                        id="post-comment-textarea-1"></textarea>
                                                </p>
                                            </div>
                                            <!-- Additional actions -->
                                            <div class="actions">
                                                <div class="image is-32x32">
                                                    <img class="is-rounded" src="https://friendkit.cssninja.io/assets/img/avatars/jenna.png"
                                                        data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/jenna.png"
                                                        data-user-popover="0" alt="">
                                                </div>
                                                <div class="toolbar">
                                                    <div class="action is-auto">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-at-sign">
                                                            <circle cx="12" cy="12" r="4"></circle>
                                                            <path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path>
                                                        </svg>
                                                    </div>
                                                    <div class="action is-emoji" id="post-comment-button-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-smile">
                                                            <circle cx="12" cy="12" r="10"></circle>
                                                            <path d="M8 14s1.5 2 4 2 4-2 4-2"></path>
                                                            <line x1="9" y1="9" x2="9.01"
                                                                y2="9"></line>
                                                            <line x1="15" y1="9" x2="15.01"
                                                                y2="9"></line>
                                                        </svg>
                                                    </div>
                                                    <div class="action is-upload">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-camera">
                                                            <path
                                                                d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z">
                                                            </path>
                                                            <circle cx="12" cy="13" r="4"></circle>
                                                        </svg>
                                                        <input type="file">
                                                    </div>
                                                    <a class="button is-solid primary-button raised">Post Comment</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Comments footer -->
                            </div>
                            <!-- /Post #1 Comments -->
                        </div>
                        <!-- POST #1 -->

                        <!-- Post 2 -->
                        <!-- /partials/pages/feed/posts/feed-post2.html -->
                        <!-- POST #2 -->
                        <div class="card is-post">
                            <!-- Main wrap -->
                            <div class="content-wrap">
                                <!-- Post header -->
                                <div class="card-heading">
                                    <!-- User meta -->
                                    <div class="user-block">
                                        <div class="image">
                                            <img src="https://friendkit.cssninja.io/assets/img/avatars/edward.jpeg"
                                                data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/edward.jpeg" data-user-popover="5"
                                                alt="">
                                        </div>
                                        <div class="user-info">
                                            <a href="#">Edward Mayers</a>
                                            <span class="time">July 26 2018, 11:14am</span>
                                        </div>
                                    </div>
                                    <!-- Right side dropdown -->
                                    <!-- /partials/pages/feed/dropdowns/feed-post-dropdown.html -->
                                    <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                        <div>
                                            <div class="button">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-more-vertical">
                                                    <circle cx="12" cy="12" r="1"></circle>
                                                    <circle cx="12" cy="5" r="1"></circle>
                                                    <circle cx="12" cy="19" r="1"></circle>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="dropdown-menu" role="menu">
                                            <div class="dropdown-content">
                                                <a href="#" class="dropdown-item">
                                                    <div class="media">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-bookmark">
                                                            <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z">
                                                            </path>
                                                        </svg>
                                                        <div class="media-content">
                                                            <h3>Bookmark</h3>
                                                            <small>Add this post to your bookmarks.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item">
                                                    <div class="media">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-bell">
                                                            <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                                            <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                                        </svg>
                                                        <div class="media-content">
                                                            <h3>Notify me</h3>
                                                            <small>Send me the updates.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <hr class="dropdown-divider">
                                                <a href="#" class="dropdown-item">
                                                    <div class="media">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-flag">
                                                            <path
                                                                d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z">
                                                            </path>
                                                            <line x1="4" y1="22" x2="4"
                                                                y2="15"></line>
                                                        </svg>
                                                        <div class="media-content">
                                                            <h3>Flag</h3>
                                                            <small>In case of inappropriate content.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Post header -->

                                <!-- Post body -->
                                <div class="card-body">
                                    <!-- Post body text -->
                                    <div class="post-text">
                                        <p>
                                            You all know how i love bootstrap, but i didn't have time to dig
                                            deeper into it. Therefore i found this very interesting video i wanted
                                            to share with you all. <a href="#">#bootsrap #webdesign</a>
                                        </p>

                                        <p></p>
                                    </div>
                                    <!-- Featured youtube video -->
                                    <div class="post-link is-video">
                                        <!-- Link image -->
                                        <div class="link-image">
                                            <img src="https://friendkit.cssninja.io/assets/img/demo/video/bootstrap.jpg"
                                                data-demo-src="https://friendkit.cssninja.io/assets/img/demo/video/bootstrap.jpg" alt="">
                                            <div class="video-overlay"></div>
                                            <a class="video-button" data-fancybox=""
                                                href="https://www.youtube.com/watch?v=N8GksI_-iIM">
                                                <img src="https://friendkit.cssninja.io/assets/img/icons/video/play.svg" alt="">
                                            </a>
                                        </div>
                                        <!-- Link content -->
                                        <div class="link-content">
                                            <h4>
                                                <a href="#">What's new in Bootstrap 4 ?</a>
                                            </h4>
                                            <p>
                                                Before I create the new Bootstrap 4 crash course I want to go over
                                                some of the changes from Bootstrap 3.
                                            </p>
                                            <small>Youtube.com</small>
                                        </div>
                                        <!-- Post actions -->
                                        <!-- /partials/pages/feed/buttons/feed-post-actions.html -->
                                        <div class="like-wrapper">
                                            <a href="javascript:void(0);" class="like-button">
                                                <i class="bx bx-heart" style="color:red"></i>
                                                <i class="bxs bx-heart d-none" style="color:red"></i>
                                                <span class="like-overlay"></span>
                                            </a>
                                        </div>

                                        <div class="fab-wrapper is-share">
                                            <a href="javascript:void(0);" class="small-fab share-fab modal-trigger"
                                                data-modal="share-modal">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-link-2">
                                                    <path
                                                        d="M15 7h3a5 5 0 0 1 5 5 5 5 0 0 1-5 5h-3m-6 0H6a5 5 0 0 1-5-5 5 5 0 0 1 5-5h3">
                                                    </path>
                                                    <line x1="8" y1="12" x2="16"
                                                        y2="12"></line>
                                                </svg>
                                            </a>
                                        </div>

                                        <div class="fab-wrapper is-comment">
                                            <a href="javascript:void(0);" class="small-fab">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-message-circle">
                                                    <path
                                                        d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Post body -->

                                <!-- Post footer -->
                                <div class="card-footer">
                                    <!-- Followers -->
                                    <div class="likers-group">
                                        <img src="https://friendkit.cssninja.io/assets/img/avatars/daniel.jpg"
                                            data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/daniel.jpg" data-user-popover="3"
                                            alt="">
                                        <img src="https://friendkit.cssninja.io/assets/img/avatars/elise.jpg"
                                            data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/elise.jpg" data-user-popover="6"
                                            alt="">
                                    </div>
                                    <div class="likers-text">
                                        <p>
                                            <a href="#">Daniel</a> and
                                            <a href="#">Elise</a>
                                        </p>
                                        <p>liked this</p>
                                    </div>
                                    <!-- Post statistics -->
                                    <div class="social-count">
                                        <div class="likes-count">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-heart">
                                                <path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                                </path>
                                            </svg>
                                            <span>2</span>
                                        </div>
                                        <div class="shares-count">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-link-2">
                                                <path
                                                    d="M15 7h3a5 5 0 0 1 5 5 5 5 0 0 1-5 5h-3m-6 0H6a5 5 0 0 1-5-5 5 5 0 0 1 5-5h3">
                                                </path>
                                                <line x1="8" y1="12" x2="16" y2="12">
                                                </line>
                                            </svg>
                                            <span>0</span>
                                        </div>
                                        <div class="comments-count">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-message-circle">
                                                <path
                                                    d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z">
                                                </path>
                                            </svg>
                                            <span>2</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Post footer -->
                            </div>
                            <!-- /Main wrap -->

                            <!-- Post #2 comments -->
                            <div class="comments-wrap is-hidden">
                                <!-- Header -->
                                <div class="comments-heading">
                                    <h4>Comments <small>(2)</small></h4>
                                    <div class="close-comments">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-x">
                                            <line x1="18" y1="6" x2="6" y2="18">
                                            </line>
                                            <line x1="6" y1="6" x2="18" y2="18">
                                            </line>
                                        </svg>
                                    </div>
                                </div>
                                <!-- /Header -->

                                <!-- Comments body -->
                                <div class="comments-body has-slimscroll">
                                    <!-- Comment -->
                                    <div class="media is-comment">
                                        <!-- User image -->
                                        <div class="media-left">
                                            <div class="image">
                                                <img src="https://friendkit.cssninja.io/assets/img/avatars/elise.jpg"
                                                    data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/elise.jpg" data-user-popover="6"
                                                    alt="">
                                            </div>
                                        </div>
                                        <!-- Content -->
                                        <div class="media-content">
                                            <a href="#">Elise Walker</a>
                                            <span class="time">2 days ago</span>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                eiusmod tempo incididunt ut labore et dolore magna aliqua. Ut enim
                                                ad minim veniam, quis nostrud exercitation ullamco laboris
                                                consequat.
                                            </p>
                                            <!-- Comment actions -->
                                            <div class="controls">
                                                <div class="like-count">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-thumbs-up">
                                                        <path
                                                            d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                                                        </path>
                                                    </svg>
                                                    <span>1</span>
                                                </div>
                                                <div class="reply">
                                                    <a href="#">Reply</a>
                                                </div>
                                            </div>

                                            <!-- Nested Comment -->
                                            <div class="media is-comment">
                                                <!-- User image -->
                                                <div class="media-left">
                                                    <div class="image">
                                                        <img src="https://friendkit.cssninja.io/assets/img/avatars/daniel.jpg"
                                                            data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/daniel.jpg"
                                                            data-user-popover="3" alt="">
                                                    </div>
                                                </div>
                                                <!-- Content -->
                                                <div class="media-content">
                                                    <a href="#">Daniel Wellington</a>
                                                    <span class="time">2 days ago</span>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                        eiusmod tempo incididunt ut labore et dolore magna aliqua.
                                                    </p>
                                                    <!-- Comment actions -->
                                                    <div class="controls">
                                                        <div class="like-count">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-thumbs-up">
                                                                <path
                                                                    d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                                                                </path>
                                                            </svg>
                                                            <span>0</span>
                                                        </div>
                                                        <div class="reply">
                                                            <a href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Right side dropdown -->
                                                <div class="media-right">
                                                    <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                                        <div>
                                                            <div class="button">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-more-vertical">
                                                                    <circle cx="12" cy="12" r="1">
                                                                    </circle>
                                                                    <circle cx="12" cy="5" r="1">
                                                                    </circle>
                                                                    <circle cx="12" cy="19" r="1">
                                                                    </circle>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-menu" role="menu">
                                                            <div class="dropdown-content">
                                                                <a class="dropdown-item">
                                                                    <div class="media">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-x">
                                                                            <line x1="18" y1="6"
                                                                                x2="6" y2="18"></line>
                                                                            <line x1="6" y1="6"
                                                                                x2="18" y2="18"></line>
                                                                        </svg>
                                                                        <div class="media-content">
                                                                            <h3>Hide</h3>
                                                                            <small>Hide this comment.</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <div class="dropdown-divider"></div>
                                                                <a href="#" class="dropdown-item">
                                                                    <div class="media">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-flag">
                                                                            <path
                                                                                d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z">
                                                                            </path>
                                                                            <line x1="4" y1="22"
                                                                                x2="4" y2="15"></line>
                                                                        </svg>
                                                                        <div class="media-content">
                                                                            <h3>Report</h3>
                                                                            <small>Report this comment.</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Nested Comment -->
                                        </div>
                                        <!-- Right side dropdown -->
                                        <div class="media-right">
                                            <!-- /partials/pages/feed/dropdowns/comment-dropdown.html -->
                                            <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                                <div>
                                                    <div class="button">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-more-vertical">
                                                            <circle cx="12" cy="12" r="1"></circle>
                                                            <circle cx="12" cy="5" r="1"></circle>
                                                            <circle cx="12" cy="19" r="1"></circle>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="dropdown-menu" role="menu">
                                                    <div class="dropdown-content">
                                                        <a class="dropdown-item">
                                                            <div class="media">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-x">
                                                                    <line x1="18" y1="6" x2="6"
                                                                        y2="18"></line>
                                                                    <line x1="6" y1="6" x2="18"
                                                                        y2="18"></line>
                                                                </svg>
                                                                <div class="media-content">
                                                                    <h3>Hide</h3>
                                                                    <small>Hide this comment.</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <div class="dropdown-divider"></div>
                                                        <a href="#" class="dropdown-item">
                                                            <div class="media">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-flag">
                                                                    <path
                                                                        d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z">
                                                                    </path>
                                                                    <line x1="4" y1="22" x2="4"
                                                                        y2="15"></line>
                                                                </svg>
                                                                <div class="media-content">
                                                                    <h3>Report</h3>
                                                                    <small>Report this comment.</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Comment -->
                                </div>
                                <!-- /Comments body -->

                                <!-- Comments footer -->
                                <div class="card-footer">
                                    <!-- User image -->
                                    <div class="media post-comment has-emojis">
                                        <!-- Textarea -->
                                        <div class="media-content">
                                            <div class="field">
                                                <p class="control">
                                                    <textarea class="textarea comment-textarea" rows="5" placeholder="Write a comment..."
                                                        id="post-comment-textarea-2"></textarea>
                                                </p>
                                            </div>
                                            <!-- Additional actions -->
                                            <div class="actions">
                                                <div class="image is-32x32">
                                                    <img class="is-rounded" src="https://friendkit.cssninja.io/assets/img/avatars/jenna.png"
                                                        data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/jenna.png"
                                                        data-user-popover="0" alt="">
                                                </div>
                                                <div class="toolbar">
                                                    <div class="action is-auto">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-at-sign">
                                                            <circle cx="12" cy="12" r="4"></circle>
                                                            <path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path>
                                                        </svg>
                                                    </div>
                                                    <div class="action is-emoji" id="post-comment-button-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-smile">
                                                            <circle cx="12" cy="12" r="10"></circle>
                                                            <path d="M8 14s1.5 2 4 2 4-2 4-2"></path>
                                                            <line x1="9" y1="9" x2="9.01"
                                                                y2="9"></line>
                                                            <line x1="15" y1="9" x2="15.01"
                                                                y2="9"></line>
                                                        </svg>
                                                    </div>
                                                    <div class="action is-upload">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-camera">
                                                            <path
                                                                d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z">
                                                            </path>
                                                            <circle cx="12" cy="13" r="4"></circle>
                                                        </svg>
                                                        <input type="file">
                                                    </div>
                                                    <a class="button is-solid primary-button raised">Post Comment</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Comments footer -->
                            </div>
                            <!-- /Post #2 comments -->
                        </div>
                        <!-- /POST #2 -->

                        <!-- Post 3 -->
                        <!-- /partials/pages/feed/posts/feed-post3.html -->
                        <!-- POST #3 -->
                        <div class="card is-post">
                            <!-- Main wrap -->
                            <div class="content-wrap">
                                <!-- Header -->
                                <div class="card-heading">
                                    <div class="user-block">
                                        <div class="image">
                                            <img src="https://friendkit.cssninja.io/assets/img/avatars/elise.jpg"
                                                data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/elise.jpg" data-user-popover="6"
                                                alt="">
                                        </div>
                                        <div class="user-info">
                                            <a href="#">Elise Walker</a>
                                            <span class="time">July 19 2018, 19:42pm</span>
                                        </div>
                                    </div>
                                    <!-- /partials/pages/feed/dropdowns/feed-post-dropdown.html -->
                                    <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                        <div>
                                            <div class="button">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-more-vertical">
                                                    <circle cx="12" cy="12" r="1"></circle>
                                                    <circle cx="12" cy="5" r="1"></circle>
                                                    <circle cx="12" cy="19" r="1"></circle>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="dropdown-menu" role="menu">
                                            <div class="dropdown-content">
                                                <a href="#" class="dropdown-item">
                                                    <div class="media">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-bookmark">
                                                            <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z">
                                                            </path>
                                                        </svg>
                                                        <div class="media-content">
                                                            <h3>Bookmark</h3>
                                                            <small>Add this post to your bookmarks.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item">
                                                    <div class="media">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-bell">
                                                            <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                                            <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                                        </svg>
                                                        <div class="media-content">
                                                            <h3>Notify me</h3>
                                                            <small>Send me the updates.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <hr class="dropdown-divider">
                                                <a href="#" class="dropdown-item">
                                                    <div class="media">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-flag">
                                                            <path
                                                                d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z">
                                                            </path>
                                                            <line x1="4" y1="22" x2="4"
                                                                y2="15"></line>
                                                        </svg>
                                                        <div class="media-content">
                                                            <h3>Flag</h3>
                                                            <small>In case of inappropriate content.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Header -->

                                <!-- Post body -->
                                <div class="card-body">
                                    <!-- Post body text -->
                                    <div class="post-text">
                                        <p>
                                            Thanks a lot to <a href="#">@Gaelle</a> and <a
                                                href="#">@Rolf</a> for
                                            this wonderful team lunch. The food was really tasty and we had some
                                            great laughs. Thanks to all the team, you're all awesome !
                                        </p>

                                        <p></p>
                                    </div>
                                    <!-- Featured image -->
                                    <div class="post-image">
                                        <a data-fancybox="post2" data-lightbox-type="comments"
                                            data-thumb="https://friendkit.cssninja.io/assets/img/demo/unsplash/2.jpg"
                                            href="https://friendkit.cssninja.io/assets/img/demo/unsplash/2.jpg"
                                            data-demo-href="https://friendkit.cssninja.io/assets/img/demo/unsplash/2.jpg">
                                            <img src="https://friendkit.cssninja.io/assets/img/demo/unsplash/2.jpg"
                                                data-demo-src="https://friendkit.cssninja.io/assets/img/demo/unsplash/2.jpg" alt="">
                                        </a>
                                        <!-- Post actions -->
                                        <!-- /partials/pages/feed/buttons/feed-post-actions.html -->
                                        <div class="like-wrapper">
                                            <a href="javascript:void(0);" class="like-button">
                                                <i class="bx bx-heart" style="color:red"></i>
                                                <i class="bxs bx-heart d-none" style="color:red"></i>
                                                <span class="like-overlay"></span>
                                            </a>
                                        </div>

                                        <div class="fab-wrapper is-share">
                                            <a href="javascript:void(0);" class="small-fab share-fab modal-trigger"
                                                data-modal="share-modal">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-link-2">
                                                    <path
                                                        d="M15 7h3a5 5 0 0 1 5 5 5 5 0 0 1-5 5h-3m-6 0H6a5 5 0 0 1-5-5 5 5 0 0 1 5-5h3">
                                                    </path>
                                                    <line x1="8" y1="12" x2="16"
                                                        y2="12"></line>
                                                </svg>
                                            </a>
                                        </div>

                                        <div class="fab-wrapper is-comment">
                                            <a href="javascript:void(0);" class="small-fab">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-message-circle">
                                                    <path
                                                        d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Post body -->

                                <!-- Post footer -->
                                <div class="card-footer">
                                    <!-- Followers -->
                                    <div class="likers-group">
                                        <img src="https://friendkit.cssninja.io/assets/img/avatars/gaelle.jpeg"
                                            data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/gaelle.jpeg" data-user-popover="11"
                                            alt="">
                                        <img src="https://friendkit.cssninja.io/assets/img/avatars/edward.jpeg"
                                            data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/edward.jpeg" data-user-popover="5"
                                            alt="">
                                        <img src="https://friendkit.cssninja.io/assets/img/avatars/nelly.png"
                                            data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/nelly.png" data-user-popover="9"
                                            alt="">
                                    </div>
                                    <div class="likers-text">
                                        <p>
                                            <a href="#">Gaelle</a>,
                                            <a href="#">Edward</a>
                                        </p>
                                        <p>and 1 more liked this</p>
                                    </div>
                                    <!-- Post statistics -->
                                    <div class="social-count">
                                        <div class="likes-count">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-heart">
                                                <path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                                </path>
                                            </svg>
                                            <span>3</span>
                                        </div>
                                        <div class="shares-count">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-link-2">
                                                <path
                                                    d="M15 7h3a5 5 0 0 1 5 5 5 5 0 0 1-5 5h-3m-6 0H6a5 5 0 0 1-5-5 5 5 0 0 1 5-5h3">
                                                </path>
                                                <line x1="8" y1="12" x2="16" y2="12">
                                                </line>
                                            </svg>
                                            <span>0</span>
                                        </div>
                                        <div class="comments-count">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-message-circle">
                                                <path
                                                    d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z">
                                                </path>
                                            </svg>
                                            <span>5</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Post footer -->
                            </div>
                            <!-- /Main wrap -->

                            <!-- Post #3 comments -->
                            <div class="comments-wrap is-hidden">
                                <!-- Header -->
                                <div class="comments-heading">
                                    <h4>Comments <small>(5)</small></h4>
                                    <div class="close-comments">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-x">
                                            <line x1="18" y1="6" x2="6" y2="18">
                                            </line>
                                            <line x1="6" y1="6" x2="18" y2="18">
                                            </line>
                                        </svg>
                                    </div>
                                </div>
                                <!-- Header -->

                                <!-- Comments body -->
                                <div class="comments-body has-slimscroll">
                                    <!-- Comment -->
                                    <div class="media is-comment">
                                        <!-- User image -->
                                        <div class="media-left">
                                            <div class="image">
                                                <img src="https://friendkit.cssninja.io/assets/img/avatars/gaelle.jpeg"
                                                    data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/gaelle.jpeg"
                                                    data-user-popover="11" alt="">
                                            </div>
                                        </div>
                                        <!-- Content -->
                                        <div class="media-content">
                                            <a href="#">Gaelle Morris</a>
                                            <span class="time">2 days ago</span>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                eiusmod tempo incididunt ut labore et dolore magna aliqua. Ut enim
                                                ad minim veniam, quis nostrud exercitation ullamco laboris
                                                consequat.
                                            </p>
                                            <!-- Comment actions -->
                                            <div class="controls">
                                                <div class="like-count">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-thumbs-up">
                                                        <path
                                                            d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                                                        </path>
                                                    </svg>
                                                    <span>3</span>
                                                </div>
                                                <div class="reply">
                                                    <a href="#">Reply</a>
                                                </div>
                                            </div>

                                            <!-- Nested Comment -->
                                            <div class="media is-comment">
                                                <!-- User image -->
                                                <div class="media-left">
                                                    <div class="image">
                                                        <img src="https://friendkit.cssninja.io/assets/img/avatars/elise.jpg"
                                                            data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/elise.jpg"
                                                            data-user-popover="6" alt="">
                                                    </div>
                                                </div>
                                                <!-- Content -->
                                                <div class="media-content">
                                                    <a href="#">Elise Walker</a>
                                                    <span class="time">2 days ago</span>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                        eiusmod tempo incididunt ut labore et dolore magna aliqua.
                                                    </p>
                                                    <!-- Comment actions -->
                                                    <div class="controls">
                                                        <div class="like-count">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-thumbs-up">
                                                                <path
                                                                    d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                                                                </path>
                                                            </svg>
                                                            <span>1</span>
                                                        </div>
                                                        <div class="reply">
                                                            <a href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Right side dropdown -->
                                                <div class="media-right">
                                                    <!-- /partials/pages/feed/dropdowns/comment-dropdown.html -->
                                                    <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                                        <div>
                                                            <div class="button">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-more-vertical">
                                                                    <circle cx="12" cy="12" r="1">
                                                                    </circle>
                                                                    <circle cx="12" cy="5" r="1">
                                                                    </circle>
                                                                    <circle cx="12" cy="19" r="1">
                                                                    </circle>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-menu" role="menu">
                                                            <div class="dropdown-content">
                                                                <a class="dropdown-item">
                                                                    <div class="media">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-x">
                                                                            <line x1="18" y1="6"
                                                                                x2="6" y2="18"></line>
                                                                            <line x1="6" y1="6"
                                                                                x2="18" y2="18"></line>
                                                                        </svg>
                                                                        <div class="media-content">
                                                                            <h3>Hide</h3>
                                                                            <small>Hide this comment.</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <div class="dropdown-divider"></div>
                                                                <a href="#" class="dropdown-item">
                                                                    <div class="media">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-flag">
                                                                            <path
                                                                                d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z">
                                                                            </path>
                                                                            <line x1="4" y1="22"
                                                                                x2="4" y2="15"></line>
                                                                        </svg>
                                                                        <div class="media-content">
                                                                            <h3>Report</h3>
                                                                            <small>Report this comment.</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Nested Comment -->

                                            <!-- Nested Comment -->
                                            <div class="media is-comment">
                                                <!-- User image -->
                                                <div class="media-left">
                                                    <div class="image">
                                                        <img src="https://friendkit.cssninja.io/assets/img/avatars/rolf.jpg"
                                                            data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/rolf.jpg"
                                                            data-user-popover="13" alt="">
                                                    </div>
                                                </div>
                                                <!-- Content -->
                                                <div class="media-content">
                                                    <a href="#">Rolf Krupp</a>
                                                    <span class="time">2 days ago</span>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                        eiusmod tempo incididunt.
                                                    </p>
                                                    <!-- Comment actions -->
                                                    <div class="controls">
                                                        <div class="like-count">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-thumbs-up">
                                                                <path
                                                                    d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                                                                </path>
                                                            </svg>
                                                            <span>1</span>
                                                        </div>
                                                        <div class="reply">
                                                            <a href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Right side dropdown -->
                                                <div class="media-right">
                                                    <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                                        <div>
                                                            <div class="button">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-more-vertical">
                                                                    <circle cx="12" cy="12" r="1">
                                                                    </circle>
                                                                    <circle cx="12" cy="5" r="1">
                                                                    </circle>
                                                                    <circle cx="12" cy="19" r="1">
                                                                    </circle>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-menu" role="menu">
                                                            <div class="dropdown-content">
                                                                <a class="dropdown-item">
                                                                    <div class="media">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-x">
                                                                            <line x1="18" y1="6"
                                                                                x2="6" y2="18"></line>
                                                                            <line x1="6" y1="6"
                                                                                x2="18" y2="18"></line>
                                                                        </svg>
                                                                        <div class="media-content">
                                                                            <h3>Hide</h3>
                                                                            <small>Hide this comment.</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <div class="dropdown-divider"></div>
                                                                <a href="#" class="dropdown-item">
                                                                    <div class="media">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-flag">
                                                                            <path
                                                                                d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z">
                                                                            </path>
                                                                            <line x1="4" y1="22"
                                                                                x2="4" y2="15"></line>
                                                                        </svg>
                                                                        <div class="media-content">
                                                                            <h3>Report</h3>
                                                                            <small>Report this comment.</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Nested Comment -->

                                            <!-- Nested Comment -->
                                            <div class="media is-comment">
                                                <!-- User image -->
                                                <div class="media-left">
                                                    <div class="image">
                                                        <img src="https://friendkit.cssninja.io/assets/img/avatars/elise.jpg"
                                                            data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/elise.jpg"
                                                            data-user-popover="6" alt="">
                                                    </div>
                                                </div>
                                                <!-- Content -->
                                                <div class="media-content">
                                                    <a href="#">Elise Walker</a>
                                                    <span class="time">2 days ago</span>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                        eiusmod tempo incididunt ut labore et dolore magna aliqua.
                                                    </p>
                                                    <!-- Comment actions -->
                                                    <div class="controls">
                                                        <div class="like-count">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-thumbs-up">
                                                                <path
                                                                    d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                                                                </path>
                                                            </svg>
                                                            <span>1</span>
                                                        </div>
                                                        <div class="reply">
                                                            <a href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Right side dropdown -->
                                                <div class="media-right">
                                                    <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                                        <div>
                                                            <div class="button">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-more-vertical">
                                                                    <circle cx="12" cy="12" r="1">
                                                                    </circle>
                                                                    <circle cx="12" cy="5" r="1">
                                                                    </circle>
                                                                    <circle cx="12" cy="19" r="1">
                                                                    </circle>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-menu" role="menu">
                                                            <div class="dropdown-content">
                                                                <a class="dropdown-item">
                                                                    <div class="media">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-x">
                                                                            <line x1="18" y1="6"
                                                                                x2="6" y2="18"></line>
                                                                            <line x1="6" y1="6"
                                                                                x2="18" y2="18"></line>
                                                                        </svg>
                                                                        <div class="media-content">
                                                                            <h3>Hide</h3>
                                                                            <small>Hide this comment.</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <div class="dropdown-divider"></div>
                                                                <a href="#" class="dropdown-item">
                                                                    <div class="media">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-flag">
                                                                            <path
                                                                                d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z">
                                                                            </path>
                                                                            <line x1="4" y1="22"
                                                                                x2="4" y2="15"></line>
                                                                        </svg>
                                                                        <div class="media-content">
                                                                            <h3>Report</h3>
                                                                            <small>Report this comment.</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Nested Comment -->
                                        </div>
                                        <!-- Right side dropdown -->
                                        <div class="media-right">
                                            <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                                <div>
                                                    <div class="button">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-more-vertical">
                                                            <circle cx="12" cy="12" r="1"></circle>
                                                            <circle cx="12" cy="5" r="1"></circle>
                                                            <circle cx="12" cy="19" r="1"></circle>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="dropdown-menu" role="menu">
                                                    <div class="dropdown-content">
                                                        <a class="dropdown-item">
                                                            <div class="media">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-x">
                                                                    <line x1="18" y1="6" x2="6"
                                                                        y2="18"></line>
                                                                    <line x1="6" y1="6" x2="18"
                                                                        y2="18"></line>
                                                                </svg>
                                                                <div class="media-content">
                                                                    <h3>Hide</h3>
                                                                    <small>Hide this comment.</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <div class="dropdown-divider"></div>
                                                        <a href="#" class="dropdown-item">
                                                            <div class="media">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-flag">
                                                                    <path
                                                                        d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z">
                                                                    </path>
                                                                    <line x1="4" y1="22" x2="4"
                                                                        y2="15"></line>
                                                                </svg>
                                                                <div class="media-content">
                                                                    <h3>Report</h3>
                                                                    <small>Report this comment.</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Comment -->

                                    <!-- Comment -->
                                    <div class="media is-comment">
                                        <!-- User image -->
                                        <div class="media-left">
                                            <div class="image">
                                                <img src="https://friendkit.cssninja.io/assets/img/avatars/nelly.png"
                                                    data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/nelly.png" data-user-popover="9"
                                                    alt="">
                                            </div>
                                        </div>
                                        <!-- Content -->
                                        <div class="media-content">
                                            <a href="#">Nelly Schwartz</a>
                                            <span class="time">2 days ago</span>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                eiusmod tempo incididunt ut labore et dolore magna aliqua.
                                            </p>
                                            <!-- Comment actions -->
                                            <div class="controls">
                                                <div class="like-count">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-thumbs-up">
                                                        <path
                                                            d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                                                        </path>
                                                    </svg>
                                                    <span>1</span>
                                                </div>
                                                <div class="reply">
                                                    <a href="#">Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Right side dropdown -->
                                        <div class="media-right">
                                            <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                                <div>
                                                    <div class="button">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-more-vertical">
                                                            <circle cx="12" cy="12" r="1"></circle>
                                                            <circle cx="12" cy="5" r="1"></circle>
                                                            <circle cx="12" cy="19" r="1"></circle>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="dropdown-menu" role="menu">
                                                    <div class="dropdown-content">
                                                        <a class="dropdown-item">
                                                            <div class="media">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-x">
                                                                    <line x1="18" y1="6" x2="6"
                                                                        y2="18"></line>
                                                                    <line x1="6" y1="6" x2="18"
                                                                        y2="18"></line>
                                                                </svg>
                                                                <div class="media-content">
                                                                    <h3>Hide</h3>
                                                                    <small>Hide this comment.</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <div class="dropdown-divider"></div>
                                                        <a href="#" class="dropdown-item">
                                                            <div class="media">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-flag">
                                                                    <path
                                                                        d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z">
                                                                    </path>
                                                                    <line x1="4" y1="22" x2="4"
                                                                        y2="15"></line>
                                                                </svg>
                                                                <div class="media-content">
                                                                    <h3>Report</h3>
                                                                    <small>Report this comment.</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Comment -->
                                </div>
                                <!-- Comments body -->

                                <!-- Comments footer -->
                                <div class="card-footer">
                                    <div class="media post-comment has-emojis">
                                        <!-- Textarea -->
                                        <div class="media-content">
                                            <div class="field">
                                                <p class="control">
                                                    <textarea class="textarea comment-textarea" rows="5" placeholder="Write a comment..."
                                                        id="post-comment-textarea-3"></textarea>
                                                </p>
                                            </div>
                                            <!-- Additional actions -->
                                            <div class="actions">
                                                <div class="image is-32x32">
                                                    <img class="is-rounded" src="https://friendkit.cssninja.io/assets/img/avatars/jenna.png"
                                                        data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/jenna.png"
                                                        data-user-popover="0" alt="">
                                                </div>
                                                <div class="toolbar">
                                                    <div class="action is-auto">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-at-sign">
                                                            <circle cx="12" cy="12" r="4"></circle>
                                                            <path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path>
                                                        </svg>
                                                    </div>
                                                    <div class="action is-emoji" id="post-comment-button-3">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-smile">
                                                            <circle cx="12" cy="12" r="10"></circle>
                                                            <path d="M8 14s1.5 2 4 2 4-2 4-2"></path>
                                                            <line x1="9" y1="9" x2="9.01"
                                                                y2="9"></line>
                                                            <line x1="15" y1="9" x2="15.01"
                                                                y2="9"></line>
                                                        </svg>
                                                    </div>
                                                    <div class="action is-upload">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-camera">
                                                            <path
                                                                d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z">
                                                            </path>
                                                            <circle cx="12" cy="13" r="4"></circle>
                                                        </svg>
                                                        <input type="file">
                                                    </div>
                                                    <a class="button is-solid primary-button raised">Post Comment</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Comments footer -->
                            </div>
                            <!-- /Post #3 Comments -->
                        </div>
                        <!-- /POST #3 -->

                        <!-- Post 4 -->
                        <!-- /partials/pages/feed/posts/feed-post4.html -->
                        <!-- POST #4 -->
                        <div class="card is-post">
                            <!-- Main wrap -->
                            <div class="content-wrap">
                                <!-- Header -->
                                <div class="card-heading">
                                    <div class="user-block">
                                        <div class="image">
                                            <img src="https://friendkit.cssninja.io/assets/img/avatars/stella.jpg"
                                                data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/stella.jpg" data-user-popover="2"
                                                alt="">
                                        </div>
                                        <div class="user-info">
                                            <a href="#">Stella Bergmann</a>
                                            <span class="time">July 19 2018, 15:13pm</span>
                                        </div>
                                    </div>
                                    <!-- Right side dropdown -->
                                    <!-- /partials/pages/feed/dropdowns/feed-post-dropdown.html -->
                                    <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                        <div>
                                            <div class="button">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-more-vertical">
                                                    <circle cx="12" cy="12" r="1"></circle>
                                                    <circle cx="12" cy="5" r="1"></circle>
                                                    <circle cx="12" cy="19" r="1"></circle>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="dropdown-menu" role="menu">
                                            <div class="dropdown-content">
                                                <a href="#" class="dropdown-item">
                                                    <div class="media">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-bookmark">
                                                            <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z">
                                                            </path>
                                                        </svg>
                                                        <div class="media-content">
                                                            <h3>Bookmark</h3>
                                                            <small>Add this post to your bookmarks.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item">
                                                    <div class="media">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-bell">
                                                            <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                                            <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                                        </svg>
                                                        <div class="media-content">
                                                            <h3>Notify me</h3>
                                                            <small>Send me the updates.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <hr class="dropdown-divider">
                                                <a href="#" class="dropdown-item">
                                                    <div class="media">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-flag">
                                                            <path
                                                                d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z">
                                                            </path>
                                                            <line x1="4" y1="22" x2="4"
                                                                y2="15"></line>
                                                        </svg>
                                                        <div class="media-content">
                                                            <h3>Flag</h3>
                                                            <small>In case of inappropriate content.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Header -->

                                <!-- Post body -->
                                <div class="card-body">
                                    <!-- Post body text -->
                                    <div class="post-text">
                                        <p>
                                            Hey friends ! Iam back and i wanted to share with you some awesome
                                            pictures we took during our trip to Santa Monica. We had wonderful
                                            holidays at the beach. Kisses to all !
                                        </p>

                                        <p></p>
                                    </div>
                                    <!-- Featured image -->
                                    <div class="post-image">
                                        <!-- CSS masonry wrap -->
                                        <div class="masonry-grid">
                                            <!-- Left column -->
                                            <div class="masonry-column-left">
                                                <a data-fancybox="post3" data-lightbox-type="comments"
                                                    data-thumb="https://friendkit.cssninja.io/assets/img/demo/unsplash/3.jpg"
                                                    href="https://friendkit.cssninja.io/assets/img/demo/unsplash/3.jpg"
                                                    data-demo-href="https://friendkit.cssninja.io/assets/img/demo/unsplash/3.jpg">
                                                    <img src="https://friendkit.cssninja.io/assets/img/demo/unsplash/3.jpg"
                                                        data-demo-src="https://friendkit.cssninja.io/assets/img/demo/unsplash/3.jpg" alt="">
                                                </a>
                                                <a data-fancybox="post3" data-lightbox-type="comments"
                                                    data-thumb="https://friendkit.cssninja.io/assets/img/demo/unsplash/4.jpg"
                                                    href="https://friendkit.cssninja.io/assets/img/demo/unsplash/4.jpg"
                                                    data-demo-href="https://friendkit.cssninja.io/assets/img/demo/unsplash/4.jpg">
                                                    <img src="https://friendkit.cssninja.io/assets/img/demo/unsplash/4.jpg"
                                                        data-demo-src="https://friendkit.cssninja.io/assets/img/demo/unsplash/4.jpg" alt="">
                                                </a>
                                            </div>
                                            <!-- Right column -->
                                            <div class="masonry-column-right">
                                                <a data-fancybox="post3" data-lightbox-type="comments"
                                                    data-thumb="https://friendkit.cssninja.io/assets/img/demo/unsplash/5.jpg"
                                                    href="https://friendkit.cssninja.io/assets/img/demo/unsplash/5.jpg"
                                                    data-demo-href="https://friendkit.cssninja.io/assets/img/demo/unsplash/5.jpg">
                                                    <img src="https://friendkit.cssninja.io/assets/img/demo/unsplash/5.jpg"
                                                        data-demo-src="https://friendkit.cssninja.io/assets/img/demo/unsplash/5.jpg" alt="">
                                                </a>
                                                <a data-fancybox="post3" data-lightbox-type="comments"
                                                    data-thumb="https://friendkit.cssninja.io/assets/img/demo/unsplash/6.jpg"
                                                    href="https://friendkit.cssninja.io/assets/img/demo/unsplash/6.jpg"
                                                    data-demo-href="https://friendkit.cssninja.io/assets/img/demo/unsplash/6.jpg">
                                                    <img src="https://friendkit.cssninja.io/assets/img/demo/unsplash/6.jpg"
                                                        data-demo-src="https://friendkit.cssninja.io/assets/img/demo/unsplash/6.jpg" alt="">
                                                </a>
                                                <a data-fancybox="post3" data-lightbox-type="comments"
                                                    data-thumb="https://friendkit.cssninja.io/assets/img/demo/unsplash/7.jpg"
                                                    href="https://friendkit.cssninja.io/assets/img/demo/unsplash/7.jpg"
                                                    data-demo-href="https://friendkit.cssninja.io/assets/img/demo/unsplash/7.jpg">
                                                    <img src="https://friendkit.cssninja.io/assets/img/demo/unsplash/7.jpg"
                                                        data-demo-src="https://friendkit.cssninja.io/assets/img/demo/unsplash/7.jpg" alt="">
                                                </a>
                                            </div>
                                            <!-- Post actions -->
                                            <!-- /partials/pages/feed/buttons/feed-post-actions.html -->
                                            <div class="like-wrapper">
                                                <a href="javascript:void(0);" class="like-button">
                                                    <i class="bx bx-heart" style="color:red"></i>
                                                    <i class="bxs bx-heart d-none" style="color:red"></i>
                                                    <span class="like-overlay"></span>
                                                </a>
                                            </div>

                                            <div class="fab-wrapper is-share">
                                                <a href="javascript:void(0);" class="small-fab share-fab modal-trigger"
                                                    data-modal="share-modal">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-link-2">
                                                        <path
                                                            d="M15 7h3a5 5 0 0 1 5 5 5 5 0 0 1-5 5h-3m-6 0H6a5 5 0 0 1-5-5 5 5 0 0 1 5-5h3">
                                                        </path>
                                                        <line x1="8" y1="12" x2="16"
                                                            y2="12"></line>
                                                    </svg>
                                                </a>
                                            </div>

                                            <div class="fab-wrapper is-comment">
                                                <a href="javascript:void(0);" class="small-fab">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-message-circle">
                                                        <path
                                                            d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Post body -->

                                <!-- Post footer -->
                                <div class="card-footer">
                                    <!-- Followers -->
                                    <div class="likers-group">
                                        <img src="https://friendkit.cssninja.io/assets/img/avatars/rolf.jpg"
                                            data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/rolf.jpg" data-user-popover="13"
                                            alt="">
                                        <img src="https://friendkit.cssninja.io/assets/img/avatars/mike.jpg"
                                            data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/mike.jpg" data-user-popover="12"
                                            alt="">
                                        <img src="https://friendkit.cssninja.io/assets/img/avatars/daniel.jpg"
                                            data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/daniel.jpg" data-user-popover="3"
                                            alt="">
                                        <img src="https://friendkit.cssninja.io/assets/img/avatars/elise.jpg"
                                            data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/elise.jpg" data-user-popover="6"
                                            alt="">
                                        <img src="https://friendkit.cssninja.io/assets/img/avatars/david.jpg"
                                            data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/david.jpg" data-user-popover="4"
                                            alt="">
                                    </div>
                                    <div class="likers-text">
                                        <p>
                                            <a href="#">Gaelle</a>,
                                            <a href="#">Rolf</a>
                                        </p>
                                        <p>and 31 more liked this</p>
                                    </div>
                                    <!-- Post statistics -->
                                    <div class="social-count">
                                        <div class="likes-count">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-heart">
                                                <path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                                </path>
                                            </svg>
                                            <span>33</span>
                                        </div>
                                        <div class="shares-count">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-link-2">
                                                <path
                                                    d="M15 7h3a5 5 0 0 1 5 5 5 5 0 0 1-5 5h-3m-6 0H6a5 5 0 0 1-5-5 5 5 0 0 1 5-5h3">
                                                </path>
                                                <line x1="8" y1="12" x2="16" y2="12">
                                                </line>
                                            </svg>
                                            <span>1</span>
                                        </div>
                                        <div class="comments-count">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-message-circle">
                                                <path
                                                    d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z">
                                                </path>
                                            </svg>
                                            <span>9</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Post footer -->
                            </div>
                            <!-- Main wrap -->

                            <!-- Post #4 comments -->
                            <div class="comments-wrap is-hidden">
                                <!-- Header -->
                                <div class="comments-heading">
                                    <h4>Comments <small>(9)</small></h4>
                                    <div class="close-comments">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-x">
                                            <line x1="18" y1="6" x2="6" y2="18">
                                            </line>
                                            <line x1="6" y1="6" x2="18" y2="18">
                                            </line>
                                        </svg>
                                    </div>
                                </div>
                                <!-- /Header -->

                                <!-- Comments body -->
                                <div class="comments-body has-slimscroll">
                                    <!-- Comment -->
                                    <div class="media is-comment">
                                        <!-- User image -->
                                        <div class="media-left">
                                            <div class="image">
                                                <img src="https://friendkit.cssninja.io/assets/img/avatars/jenna.png"
                                                    data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/jenna.png" data-user-popover="0"
                                                    alt="">
                                            </div>
                                        </div>
                                        <!-- Content -->
                                        <div class="media-content">
                                            <a href="#">Jenna Davis</a>
                                            <span class="time">30 minutes ago</span>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                eiusmod tempo incididunt ut labore et dolore magna aliqua. Ut enim
                                                ad minim veniam, quis nostrud exercitation ullamco laboris
                                                consequat.
                                            </p>
                                            <!-- Comment actions -->
                                            <div class="controls">
                                                <div class="like-count">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-thumbs-up">
                                                        <path
                                                            d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                                                        </path>
                                                    </svg>
                                                    <span>0</span>
                                                </div>
                                                <div class="reply">
                                                    <a href="#">Reply</a>
                                                </div>
                                            </div>

                                            <!-- Nested Comment -->
                                            <div class="media is-comment">
                                                <!-- User image -->
                                                <div class="media-left">
                                                    <div class="image">
                                                        <img src="https://friendkit.cssninja.io/assets/img/avatars/lana.jpeg"
                                                            data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/lana.jpeg"
                                                            data-user-popover="10" alt="">
                                                    </div>
                                                </div>
                                                <!-- Content -->
                                                <div class="media-content">
                                                    <a href="#">Lana Henrikssen</a>
                                                    <span class="time">15 minutes ago</span>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                        eiusmod tempo.
                                                    </p>
                                                    <!-- Comment actions -->
                                                    <div class="controls">
                                                        <div class="like-count">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-thumbs-up">
                                                                <path
                                                                    d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                                                                </path>
                                                            </svg>
                                                            <span>2</span>
                                                        </div>
                                                        <div class="reply">
                                                            <a href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Right side dropdown -->
                                                <div class="media-right">
                                                    <!-- /partials/pages/feed/dropdowns/comment-dropdown.html -->
                                                    <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                                        <div>
                                                            <div class="button">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-more-vertical">
                                                                    <circle cx="12" cy="12" r="1">
                                                                    </circle>
                                                                    <circle cx="12" cy="5" r="1">
                                                                    </circle>
                                                                    <circle cx="12" cy="19" r="1">
                                                                    </circle>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-menu" role="menu">
                                                            <div class="dropdown-content">
                                                                <a class="dropdown-item">
                                                                    <div class="media">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-x">
                                                                            <line x1="18" y1="6"
                                                                                x2="6" y2="18"></line>
                                                                            <line x1="6" y1="6"
                                                                                x2="18" y2="18"></line>
                                                                        </svg>
                                                                        <div class="media-content">
                                                                            <h3>Hide</h3>
                                                                            <small>Hide this comment.</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <div class="dropdown-divider"></div>
                                                                <a href="#" class="dropdown-item">
                                                                    <div class="media">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-flag">
                                                                            <path
                                                                                d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z">
                                                                            </path>
                                                                            <line x1="4" y1="22"
                                                                                x2="4" y2="15"></line>
                                                                        </svg>
                                                                        <div class="media-content">
                                                                            <h3>Report</h3>
                                                                            <small>Report this comment.</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Nested Comment -->

                                            <!-- Nested Comment -->
                                            <div class="media is-comment">
                                                <!-- User image -->
                                                <div class="media-left">
                                                    <div class="image">
                                                        <img src="https://friendkit.cssninja.io/assets/img/avatars/david.jpg"
                                                            data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/david.jpg"
                                                            data-user-popover="4" alt="">
                                                    </div>
                                                </div>
                                                <!-- Content -->
                                                <div class="media-content">
                                                    <a href="#">David Kim</a>
                                                    <span class="time">12 minutes ago</span>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                        eiusmod tempo incididunt ut labore et dolore magna aliqua.
                                                    </p>
                                                    <div class="controls">
                                                        <div class="like-count">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-thumbs-up">
                                                                <path
                                                                    d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                                                                </path>
                                                            </svg>
                                                            <span>5</span>
                                                        </div>
                                                        <div class="reply">
                                                            <a href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Right side dropdown -->
                                                <div class="media-right">
                                                    <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                                        <div>
                                                            <div class="button">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-more-vertical">
                                                                    <circle cx="12" cy="12" r="1">
                                                                    </circle>
                                                                    <circle cx="12" cy="5" r="1">
                                                                    </circle>
                                                                    <circle cx="12" cy="19" r="1">
                                                                    </circle>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-menu" role="menu">
                                                            <div class="dropdown-content">
                                                                <a class="dropdown-item">
                                                                    <div class="media">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-x">
                                                                            <line x1="18" y1="6"
                                                                                x2="6" y2="18"></line>
                                                                            <line x1="6" y1="6"
                                                                                x2="18" y2="18"></line>
                                                                        </svg>
                                                                        <div class="media-content">
                                                                            <h3>Hide</h3>
                                                                            <small>Hide this comment.</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <div class="dropdown-divider"></div>
                                                                <a href="#" class="dropdown-item">
                                                                    <div class="media">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-flag">
                                                                            <path
                                                                                d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z">
                                                                            </path>
                                                                            <line x1="4" y1="22"
                                                                                x2="4" y2="15"></line>
                                                                        </svg>
                                                                        <div class="media-content">
                                                                            <h3>Report</h3>
                                                                            <small>Report this comment.</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Nested Comment -->

                                            <!-- Nested Comment -->
                                            <div class="media is-comment">
                                                <!-- User image -->
                                                <div class="media-left">
                                                    <div class="image">
                                                        <img src="https://friendkit.cssninja.io/assets/img/avatars/mike.jpg"
                                                            data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/mike.jpg"
                                                            data-user-popover="12" alt="">
                                                    </div>
                                                </div>
                                                <!-- Content -->
                                                <div class="media-content">
                                                    <a href="#">Mike Lasalle</a>
                                                    <span class="time">8 minutes ago</span>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                        eiusmod tempo incididunt.
                                                    </p>
                                                    <div class="controls">
                                                        <div class="like-count">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-thumbs-up">
                                                                <path
                                                                    d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                                                                </path>
                                                            </svg>
                                                            <span>5</span>
                                                        </div>
                                                        <div class="reply">
                                                            <a href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Right side dropdown -->
                                                <div class="media-right">
                                                    <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                                        <div>
                                                            <div class="button">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-more-vertical">
                                                                    <circle cx="12" cy="12" r="1">
                                                                    </circle>
                                                                    <circle cx="12" cy="5" r="1">
                                                                    </circle>
                                                                    <circle cx="12" cy="19" r="1">
                                                                    </circle>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-menu" role="menu">
                                                            <div class="dropdown-content">
                                                                <a class="dropdown-item">
                                                                    <div class="media">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-x">
                                                                            <line x1="18" y1="6"
                                                                                x2="6" y2="18"></line>
                                                                            <line x1="6" y1="6"
                                                                                x2="18" y2="18"></line>
                                                                        </svg>
                                                                        <div class="media-content">
                                                                            <h3>Hide</h3>
                                                                            <small>Hide this comment.</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <div class="dropdown-divider"></div>
                                                                <a href="#" class="dropdown-item">
                                                                    <div class="media">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-flag">
                                                                            <path
                                                                                d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z">
                                                                            </path>
                                                                            <line x1="4" y1="22"
                                                                                x2="4" y2="15"></line>
                                                                        </svg>
                                                                        <div class="media-content">
                                                                            <h3>Report</h3>
                                                                            <small>Report this comment.</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Nested Comment -->

                                            <!-- Nested Comment -->
                                            <div class="media is-comment">
                                                <!-- User image -->
                                                <div class="media-left">
                                                    <div class="image">
                                                        <img src="https://friendkit.cssninja.io/assets/img/avatars/stella.jpg"
                                                            data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/stella.jpg"
                                                            data-user-popover="2" alt="">
                                                    </div>
                                                </div>
                                                <!-- Content -->
                                                <div class="media-content">
                                                    <a href="#">Stella Bergmann</a>
                                                    <span class="time">Just now</span>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                        eiusmod tempo incididunt.
                                                    </p>
                                                    <div class="controls">
                                                        <div class="like-count">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-thumbs-up">
                                                                <path
                                                                    d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                                                                </path>
                                                            </svg>
                                                            <span>2</span>
                                                        </div>
                                                        <div class="reply">
                                                            <a href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Right side dropdown -->
                                                <div class="media-right">
                                                    <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                                        <div>
                                                            <div class="button">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-more-vertical">
                                                                    <circle cx="12" cy="12" r="1">
                                                                    </circle>
                                                                    <circle cx="12" cy="5" r="1">
                                                                    </circle>
                                                                    <circle cx="12" cy="19" r="1">
                                                                    </circle>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-menu" role="menu">
                                                            <div class="dropdown-content">
                                                                <a class="dropdown-item">
                                                                    <div class="media">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-x">
                                                                            <line x1="18" y1="6"
                                                                                x2="6" y2="18"></line>
                                                                            <line x1="6" y1="6"
                                                                                x2="18" y2="18"></line>
                                                                        </svg>
                                                                        <div class="media-content">
                                                                            <h3>Hide</h3>
                                                                            <small>Hide this comment.</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <div class="dropdown-divider"></div>
                                                                <a href="#" class="dropdown-item">
                                                                    <div class="media">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-flag">
                                                                            <path
                                                                                d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z">
                                                                            </path>
                                                                            <line x1="4" y1="22"
                                                                                x2="4" y2="15"></line>
                                                                        </svg>
                                                                        <div class="media-content">
                                                                            <h3>Report</h3>
                                                                            <small>Report this comment.</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Nested Comment -->
                                        </div>
                                        <!-- Right side dropdown -->
                                        <div class="media-right">
                                            <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                                <div>
                                                    <div class="button">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-more-vertical">
                                                            <circle cx="12" cy="12" r="1"></circle>
                                                            <circle cx="12" cy="5" r="1"></circle>
                                                            <circle cx="12" cy="19" r="1"></circle>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="dropdown-menu" role="menu">
                                                    <div class="dropdown-content">
                                                        <a class="dropdown-item">
                                                            <div class="media">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-x">
                                                                    <line x1="18" y1="6" x2="6"
                                                                        y2="18"></line>
                                                                    <line x1="6" y1="6" x2="18"
                                                                        y2="18"></line>
                                                                </svg>
                                                                <div class="media-content">
                                                                    <h3>Hide</h3>
                                                                    <small>Hide this comment.</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <div class="dropdown-divider"></div>
                                                        <a href="#" class="dropdown-item">
                                                            <div class="media">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-flag">
                                                                    <path
                                                                        d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z">
                                                                    </path>
                                                                    <line x1="4" y1="22" x2="4"
                                                                        y2="15"></line>
                                                                </svg>
                                                                <div class="media-content">
                                                                    <h3>Report</h3>
                                                                    <small>Report this comment.</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Comment -->

                                    <!-- Comment -->
                                    <div class="media is-comment">
                                        <!-- User image -->
                                        <div class="media-left">
                                            <div class="image">
                                                <img src="https://friendkit.cssninja.io/assets/img/avatars/daniel.jpg"
                                                    data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/daniel.jpg" data-user-popover="3"
                                                    alt="">
                                            </div>
                                        </div>
                                        <!-- Content -->
                                        <div class="media-content">
                                            <a href="#">Daniel Wellington</a>
                                            <span class="time">5 hours ago</span>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                eiusmod tempo incididunt ut labore et dolore magna aliqua.
                                            </p>
                                            <!-- Comment actions -->
                                            <div class="controls">
                                                <div class="like-count">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-thumbs-up">
                                                        <path
                                                            d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                                                        </path>
                                                    </svg>
                                                    <span>1</span>
                                                </div>
                                                <div class="reply">
                                                    <a href="#">Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Right side dropdown -->
                                        <div class="media-right">
                                            <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                                <div>
                                                    <div class="button">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-more-vertical">
                                                            <circle cx="12" cy="12" r="1"></circle>
                                                            <circle cx="12" cy="5" r="1"></circle>
                                                            <circle cx="12" cy="19" r="1"></circle>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="dropdown-menu" role="menu">
                                                    <div class="dropdown-content">
                                                        <a class="dropdown-item">
                                                            <div class="media">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-x">
                                                                    <line x1="18" y1="6" x2="6"
                                                                        y2="18"></line>
                                                                    <line x1="6" y1="6" x2="18"
                                                                        y2="18"></line>
                                                                </svg>
                                                                <div class="media-content">
                                                                    <h3>Hide</h3>
                                                                    <small>Hide this comment.</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <div class="dropdown-divider"></div>
                                                        <a href="#" class="dropdown-item">
                                                            <div class="media">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-flag">
                                                                    <path
                                                                        d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z">
                                                                    </path>
                                                                    <line x1="4" y1="22" x2="4"
                                                                        y2="15"></line>
                                                                </svg>
                                                                <div class="media-content">
                                                                    <h3>Report</h3>
                                                                    <small>Report this comment.</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Comment -->

                                    <!-- Comment -->
                                    <div class="media is-comment">
                                        <!-- User image -->
                                        <div class="media-left">
                                            <div class="image">
                                                <img src="https://friendkit.cssninja.io/assets/img/avatars/bobby.jpg"
                                                    data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/bobby.jpg" data-user-popover="8"
                                                    alt="">
                                            </div>
                                        </div>
                                        <!-- Content -->
                                        <div class="media-content">
                                            <a href="#">Bobby Brown</a>
                                            <span class="time">7 hours ago</span>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                eiusmod tempo incididunt ut labore et dolore magna aliqua.
                                            </p>
                                            <!-- Comment actions -->
                                            <div class="controls">
                                                <div class="like-count">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-thumbs-up">
                                                        <path
                                                            d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                                                        </path>
                                                    </svg>
                                                    <span>1</span>
                                                </div>
                                                <div class="reply">
                                                    <a href="#">Reply</a>
                                                </div>
                                            </div>

                                            <!-- Nested Comment -->
                                            <div class="media is-comment">
                                                <!-- User image -->
                                                <div class="media-left">
                                                    <div class="image">
                                                        <img src="https://friendkit.cssninja.io/assets/img/avatars/stella.jpg"
                                                            data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/stella.jpg"
                                                            data-user-popover="2" alt="">
                                                    </div>
                                                </div>
                                                <!-- Content -->
                                                <div class="media-content">
                                                    <a href="#">Stella Bergmann</a>
                                                    <span class="time">7 hours ago</span>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                        eiusmod tempo incididunt.
                                                    </p>
                                                    <div class="controls">
                                                        <div class="like-count">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-thumbs-up">
                                                                <path
                                                                    d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                                                                </path>
                                                            </svg>
                                                            <span>2</span>
                                                        </div>
                                                        <div class="reply">
                                                            <a href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Right side dropdown -->
                                                <div class="media-right">
                                                    <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                                        <div>
                                                            <div class="button">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-more-vertical">
                                                                    <circle cx="12" cy="12" r="1">
                                                                    </circle>
                                                                    <circle cx="12" cy="5" r="1">
                                                                    </circle>
                                                                    <circle cx="12" cy="19" r="1">
                                                                    </circle>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-menu" role="menu">
                                                            <div class="dropdown-content">
                                                                <a class="dropdown-item">
                                                                    <div class="media">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-x">
                                                                            <line x1="18" y1="6"
                                                                                x2="6" y2="18"></line>
                                                                            <line x1="6" y1="6"
                                                                                x2="18" y2="18"></line>
                                                                        </svg>
                                                                        <div class="media-content">
                                                                            <h3>Hide</h3>
                                                                            <small>Hide this comment.</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <div class="dropdown-divider"></div>
                                                                <a href="#" class="dropdown-item">
                                                                    <div class="media">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-flag">
                                                                            <path
                                                                                d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z">
                                                                            </path>
                                                                            <line x1="4" y1="22"
                                                                                x2="4" y2="15"></line>
                                                                        </svg>
                                                                        <div class="media-content">
                                                                            <h3>Report</h3>
                                                                            <small>Report this comment.</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Nested Comment -->

                                            <!-- Nested Comment -->
                                            <div class="media is-comment">
                                                <!-- User image -->
                                                <div class="media-left">
                                                    <div class="image">
                                                        <img src="https://friendkit.cssninja.io/assets/img/avatars/lana.jpeg"
                                                            data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/lana.jpeg"
                                                            data-user-popover="10" alt="">
                                                    </div>
                                                </div>
                                                <!-- Content -->
                                                <div class="media-content">
                                                    <a href="#">Lana Henrikssen</a>
                                                    <span class="time">15 minutes ago</span>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                        eiusmod tempo.
                                                    </p>
                                                    <!-- Comment actions -->
                                                    <div class="controls">
                                                        <div class="like-count">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-thumbs-up">
                                                                <path
                                                                    d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                                                                </path>
                                                            </svg>
                                                            <span>2</span>
                                                        </div>
                                                        <div class="reply">
                                                            <a href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Right side dropdown -->
                                                <div class="media-right">
                                                    <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                                        <div>
                                                            <div class="button">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-more-vertical">
                                                                    <circle cx="12" cy="12" r="1">
                                                                    </circle>
                                                                    <circle cx="12" cy="5" r="1">
                                                                    </circle>
                                                                    <circle cx="12" cy="19" r="1">
                                                                    </circle>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-menu" role="menu">
                                                            <div class="dropdown-content">
                                                                <a class="dropdown-item">
                                                                    <div class="media">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-x">
                                                                            <line x1="18" y1="6"
                                                                                x2="6" y2="18"></line>
                                                                            <line x1="6" y1="6"
                                                                                x2="18" y2="18"></line>
                                                                        </svg>
                                                                        <div class="media-content">
                                                                            <h3>Hide</h3>
                                                                            <small>Hide this comment.</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <div class="dropdown-divider"></div>
                                                                <a href="#" class="dropdown-item">
                                                                    <div class="media">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-flag">
                                                                            <path
                                                                                d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z">
                                                                            </path>
                                                                            <line x1="4" y1="22"
                                                                                x2="4" y2="15"></line>
                                                                        </svg>
                                                                        <div class="media-content">
                                                                            <h3>Report</h3>
                                                                            <small>Report this comment.</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Nested Comment -->
                                        </div>
                                        <!-- Right side dropdown -->
                                        <div class="media-right">
                                            <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                                <div>
                                                    <div class="button">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-more-vertical">
                                                            <circle cx="12" cy="12" r="1"></circle>
                                                            <circle cx="12" cy="5" r="1"></circle>
                                                            <circle cx="12" cy="19" r="1"></circle>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="dropdown-menu" role="menu">
                                                    <div class="dropdown-content">
                                                        <a class="dropdown-item">
                                                            <div class="media">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-x">
                                                                    <line x1="18" y1="6" x2="6"
                                                                        y2="18"></line>
                                                                    <line x1="6" y1="6" x2="18"
                                                                        y2="18"></line>
                                                                </svg>
                                                                <div class="media-content">
                                                                    <h3>Hide</h3>
                                                                    <small>Hide this comment.</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <div class="dropdown-divider"></div>
                                                        <a href="#" class="dropdown-item">
                                                            <div class="media">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-flag">
                                                                    <path
                                                                        d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z">
                                                                    </path>
                                                                    <line x1="4" y1="22" x2="4"
                                                                        y2="15"></line>
                                                                </svg>
                                                                <div class="media-content">
                                                                    <h3>Report</h3>
                                                                    <small>Report this comment.</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Comment -->
                                </div>
                                <!-- /Comments body -->

                                <!-- Comments footer -->
                                <div class="card-footer">
                                    <div class="media post-comment has-emojis">
                                        <!-- Textarea -->
                                        <div class="media-content">
                                            <div class="field">
                                                <p class="control">
                                                    <textarea class="textarea comment-textarea" rows="5" placeholder="Write a comment..."
                                                        id="post-comment-textarea-4"></textarea>
                                                </p>
                                            </div>
                                            <!-- Additional actions -->
                                            <div class="actions">
                                                <div class="image is-32x32">
                                                    <img class="is-rounded" src="https://friendkit.cssninja.io/assets/img/avatars/jenna.png"
                                                        data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/jenna.png"
                                                        data-user-popover="0" alt="">
                                                </div>
                                                <div class="toolbar">
                                                    <div class="action is-auto">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-at-sign">
                                                            <circle cx="12" cy="12" r="4"></circle>
                                                            <path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path>
                                                        </svg>
                                                    </div>
                                                    <div class="action is-emoji" id="post-comment-button-4">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-smile">
                                                            <circle cx="12" cy="12" r="10"></circle>
                                                            <path d="M8 14s1.5 2 4 2 4-2 4-2"></path>
                                                            <line x1="9" y1="9" x2="9.01"
                                                                y2="9"></line>
                                                            <line x1="15" y1="9" x2="15.01"
                                                                y2="9"></line>
                                                        </svg>
                                                    </div>
                                                    <div class="action is-upload">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-camera">
                                                            <path
                                                                d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z">
                                                            </path>
                                                            <circle cx="12" cy="13" r="4"></circle>
                                                        </svg>
                                                        <input type="file">
                                                    </div>
                                                    <a class="button is-solid primary-button raised">Post Comment</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Comments footer -->
                            </div>
                            <!-- /Post #4 comments -->
                        </div>
                        <!-- /POST #4 -->

                        <!-- Post 5 -->
                        <!-- /partials/pages/feed/posts/feed-post5.html -->
                        <!-- POST #5 -->
                        <div class="card is-post">
                            <!-- Main wrap -->
                            <div class="content-wrap">
                                <!-- Header -->
                                <div class="card-heading">
                                    <!-- User image -->
                                    <div class="user-block">
                                        <div class="image">
                                            <img src="https://friendkit.cssninja.io/assets/img/avatars/david.jpg"
                                                data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/david.jpg" data-user-popover="4"
                                                alt="">
                                        </div>
                                        <div class="user-info">
                                            <a href="#">David Kim</a>
                                            <span class="time">August 02 2018, 03:04pm</span>
                                        </div>
                                    </div>
                                    <!-- Right side dropdown -->
                                    <!-- /partials/pages/feed/dropdowns/feed-post-dropdown.html -->
                                    <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                        <div>
                                            <div class="button">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-more-vertical">
                                                    <circle cx="12" cy="12" r="1"></circle>
                                                    <circle cx="12" cy="5" r="1"></circle>
                                                    <circle cx="12" cy="19" r="1"></circle>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="dropdown-menu" role="menu">
                                            <div class="dropdown-content">
                                                <a href="#" class="dropdown-item">
                                                    <div class="media">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-bookmark">
                                                            <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z">
                                                            </path>
                                                        </svg>
                                                        <div class="media-content">
                                                            <h3>Bookmark</h3>
                                                            <small>Add this post to your bookmarks.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item">
                                                    <div class="media">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-bell">
                                                            <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                                            <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                                        </svg>
                                                        <div class="media-content">
                                                            <h3>Notify me</h3>
                                                            <small>Send me the updates.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <hr class="dropdown-divider">
                                                <a href="#" class="dropdown-item">
                                                    <div class="media">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-flag">
                                                            <path
                                                                d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z">
                                                            </path>
                                                            <line x1="4" y1="22" x2="4"
                                                                y2="15"></line>
                                                        </svg>
                                                        <div class="media-content">
                                                            <h3>Flag</h3>
                                                            <small>In case of inappropriate content.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Header -->

                                <!-- Post body -->
                                <div class="card-body">
                                    <!-- Post body text -->
                                    <div class="post-text">
                                        <p>
                                            Just discovered this awesome CSS framework named
                                            <a href="#">#bulmaCss</a>. It's based on flexbox, so easy to use and
                                            comes with so many mobile first modifiers. You can build anything from
                                            scratch easily with Bulma.
                                            <a href="#">#webdesign #bulmaio</a>
                                        </p>
                                    </div>
                                    <!-- Featured link -->
                                    <div class="post-link">
                                        <!-- link image -->
                                        <div class="link-image">
                                            <img src="https://friendkit.cssninja.io/assets/img/demo/video/bulma2.png"
                                                data-demo-src="https://friendkit.cssninja.io/assets/img/demo/video/bulma2.png" alt="">
                                        </div>
                                        <!-- Link content -->
                                        <div class="link-content">
                                            <h4>
                                                <a href="#">Bulma CSS Framework</a>
                                            </h4>
                                            <p>
                                                Bulma is a mobile first CSS framework built on top of Flexbox. It's
                                                awesome and so easy to use.
                                            </p>
                                            <small>Bulma.io</small>
                                        </div>
                                        <!-- Post actions -->
                                        <!-- /partials/pages/feed/buttons/feed-post-actions.html -->
                                        <div class="like-wrapper">
                                            <a href="javascript:void(0);" class="like-button">
                                                <i class="bx bx-heart" style="color:red"></i>
                                                <i class="bxs bx-heart d-none" style="color:red"></i>
                                                <span class="like-overlay"></span>
                                            </a>
                                        </div>

                                        <div class="fab-wrapper is-share">
                                            <a href="javascript:void(0);" class="small-fab share-fab modal-trigger"
                                                data-modal="share-modal">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-link-2">
                                                    <path
                                                        d="M15 7h3a5 5 0 0 1 5 5 5 5 0 0 1-5 5h-3m-6 0H6a5 5 0 0 1-5-5 5 5 0 0 1 5-5h3">
                                                    </path>
                                                    <line x1="8" y1="12" x2="16"
                                                        y2="12"></line>
                                                </svg>
                                            </a>
                                        </div>

                                        <div class="fab-wrapper is-comment">
                                            <a href="javascript:void(0);" class="small-fab">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-message-circle">
                                                    <path
                                                        d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Post body -->

                                <!-- Post footer -->
                                <div class="card-footer">
                                    <!-- Followers -->
                                    <div class="likers-group">
                                        <img src="https://friendkit.cssninja.io/assets/img/avatars/lana.jpeg"
                                            data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/lana.jpeg" data-user-popover="10"
                                            alt="">
                                        <img src="https://friendkit.cssninja.io/assets/img/avatars/mike.jpg"
                                            data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/mike.jpg" data-user-popover="12"
                                            alt="">
                                        <img src="https://friendkit.cssninja.io/assets/img/avatars/gaelle.jpeg"
                                            data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/gaelle.jpeg" data-user-popover="11"
                                            alt="">
                                    </div>
                                    <div class="likers-text">
                                        <p>
                                            <a href="#">Lana</a>,
                                            <a href="#">Mike</a>
                                        </p>
                                        <p>and 1 more liked this</p>
                                    </div>
                                    <!-- Post statistics -->
                                    <div class="social-count">
                                        <div class="likes-count">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-heart">
                                                <path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                                </path>
                                            </svg>
                                            <span>11</span>
                                        </div>
                                        <div class="shares-count">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-link-2">
                                                <path
                                                    d="M15 7h3a5 5 0 0 1 5 5 5 5 0 0 1-5 5h-3m-6 0H6a5 5 0 0 1-5-5 5 5 0 0 1 5-5h3">
                                                </path>
                                                <line x1="8" y1="12" x2="16" y2="12">
                                                </line>
                                            </svg>
                                            <span>3</span>
                                        </div>
                                        <div class="comments-count">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-message-circle">
                                                <path
                                                    d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z">
                                                </path>
                                            </svg>
                                            <span>2</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Post footer -->
                            </div>
                            <!-- /Main wrap -->

                            <!-- Post #5 comments -->
                            <div class="comments-wrap is-hidden">
                                <!-- Header -->
                                <div class="comments-heading">
                                    <h4>
                                        Comments
                                        <small>(2)</small>
                                    </h4>
                                    <div class="close-comments">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-x">
                                            <line x1="18" y1="6" x2="6" y2="18">
                                            </line>
                                            <line x1="6" y1="6" x2="18" y2="18">
                                            </line>
                                        </svg>
                                    </div>
                                </div>
                                <!-- /Header -->

                                <!-- Comments body -->
                                <div class="comments-body has-slimscroll">
                                    <!-- Comment -->
                                    <div class="media is-comment">
                                        <!-- User image -->
                                        <div class="media-left">
                                            <div class="image">
                                                <img src="https://friendkit.cssninja.io/assets/img/avatars/lana.jpeg"
                                                    data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/lana.jpeg" data-user-popover="10"
                                                    alt="">
                                            </div>
                                        </div>
                                        <!-- Content -->
                                        <div class="media-content">
                                            <a href="#">Lana Henrikssen</a>
                                            <span class="time">2 days ago</span>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                eiusmod tempo incididunt ut labore et dolore magna aliqua. Ut enim
                                                ad minim veniam, quis nostrud exercitation ullamco laboris
                                                consequat.
                                            </p>
                                            <!-- Comment actions -->
                                            <div class="controls">
                                                <div class="like-count">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-thumbs-up">
                                                        <path
                                                            d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                                                        </path>
                                                    </svg>
                                                    <span>1</span>
                                                </div>
                                                <div class="reply">
                                                    <a href="#">Reply</a>
                                                </div>
                                            </div>

                                            <!-- Nested Comment -->
                                            <div class="media is-comment">
                                                <!-- User image -->
                                                <div class="media-left">
                                                    <div class="image">
                                                        <img src="https://friendkit.cssninja.io/assets/img/avatars/david.jpg"
                                                            data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/david.jpg"
                                                            data-user-popover="4" alt="">
                                                    </div>
                                                </div>
                                                <!-- Content -->
                                                <div class="media-content">
                                                    <a href="#">David Kim</a>
                                                    <span class="time">2 days ago</span>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                        eiusmod tempo incididunt ut labore et dolore magna aliqua.
                                                    </p>
                                                    <!-- Comment actions -->
                                                    <div class="controls">
                                                        <div class="like-count">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-thumbs-up">
                                                                <path
                                                                    d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                                                                </path>
                                                            </svg>
                                                            <span>0</span>
                                                        </div>
                                                        <div class="reply">
                                                            <a href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Right side dropdown -->
                                                <div class="media-right">
                                                    <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                                        <div>
                                                            <div class="button">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-more-vertical">
                                                                    <circle cx="12" cy="12" r="1">
                                                                    </circle>
                                                                    <circle cx="12" cy="5" r="1">
                                                                    </circle>
                                                                    <circle cx="12" cy="19" r="1">
                                                                    </circle>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-menu" role="menu">
                                                            <div class="dropdown-content">
                                                                <a class="dropdown-item">
                                                                    <div class="media">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-x">
                                                                            <line x1="18" y1="6"
                                                                                x2="6" y2="18"></line>
                                                                            <line x1="6" y1="6"
                                                                                x2="18" y2="18"></line>
                                                                        </svg>
                                                                        <div class="media-content">
                                                                            <h3>Hide</h3>
                                                                            <small>Hide this comment.</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <div class="dropdown-divider"></div>
                                                                <a href="#" class="dropdown-item">
                                                                    <div class="media">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-flag">
                                                                            <path
                                                                                d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z">
                                                                            </path>
                                                                            <line x1="4" y1="22"
                                                                                x2="4" y2="15"></line>
                                                                        </svg>
                                                                        <div class="media-content">
                                                                            <h3>Report</h3>
                                                                            <small>Report this comment.</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Nested Comment -->
                                        </div>
                                        <!-- Right side dropdown -->
                                        <div class="media-right">
                                            <!-- /partials/pages/feed/dropdowns/comment-dropdown.html -->
                                            <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                                <div>
                                                    <div class="button">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-more-vertical">
                                                            <circle cx="12" cy="12" r="1"></circle>
                                                            <circle cx="12" cy="5" r="1"></circle>
                                                            <circle cx="12" cy="19" r="1"></circle>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="dropdown-menu" role="menu">
                                                    <div class="dropdown-content">
                                                        <a class="dropdown-item">
                                                            <div class="media">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-x">
                                                                    <line x1="18" y1="6" x2="6"
                                                                        y2="18"></line>
                                                                    <line x1="6" y1="6" x2="18"
                                                                        y2="18"></line>
                                                                </svg>
                                                                <div class="media-content">
                                                                    <h3>Hide</h3>
                                                                    <small>Hide this comment.</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <div class="dropdown-divider"></div>
                                                        <a href="#" class="dropdown-item">
                                                            <div class="media">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-flag">
                                                                    <path
                                                                        d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z">
                                                                    </path>
                                                                    <line x1="4" y1="22" x2="4"
                                                                        y2="15"></line>
                                                                </svg>
                                                                <div class="media-content">
                                                                    <h3>Report</h3>
                                                                    <small>Report this comment.</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Comment -->
                                </div>
                                <!-- Comments body -->

                                <!-- Comments footer -->
                                <div class="card-footer">
                                    <div class="media post-comment has-emojis">
                                        <!-- Textarea -->
                                        <div class="media-content">
                                            <div class="field">
                                                <p class="control">
                                                    <textarea class="textarea comment-textarea" rows="5" placeholder="Write a comment..."
                                                        id="post-comment-textarea-5"></textarea>
                                                </p>
                                            </div>
                                            <!-- Additional actions -->
                                            <div class="actions">
                                                <div class="image is-32x32">
                                                    <img class="is-rounded" src="https://friendkit.cssninja.io/assets/img/avatars/jenna.png"
                                                        data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/jenna.png"
                                                        data-user-popover="0" alt="">
                                                </div>
                                                <div class="toolbar">
                                                    <div class="action is-auto">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-at-sign">
                                                            <circle cx="12" cy="12" r="4"></circle>
                                                            <path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path>
                                                        </svg>
                                                    </div>
                                                    <div class="action is-emoji" id="post-comment-button-5">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-smile">
                                                            <circle cx="12" cy="12" r="10"></circle>
                                                            <path d="M8 14s1.5 2 4 2 4-2 4-2"></path>
                                                            <line x1="9" y1="9" x2="9.01"
                                                                y2="9"></line>
                                                            <line x1="15" y1="9" x2="15.01"
                                                                y2="9"></line>
                                                        </svg>
                                                    </div>
                                                    <div class="action is-upload">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-camera">
                                                            <path
                                                                d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z">
                                                            </path>
                                                            <circle cx="12" cy="13" r="4"></circle>
                                                        </svg>
                                                        <input type="file">
                                                    </div>
                                                    <a class="button is-solid primary-button raised">Post Comment</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Comments footer -->
                            </div>
                            <!-- /Post #5 comments -->
                        </div>
                        <!-- /POST #5 -->

                        <!-- Post 6 -->
                        <!-- /partials/pages/feed/posts/feed-post6.html -->
                        <!-- POST #6 -->
                        <div class="card is-post is-simple">
                            <!-- Main wrap -->
                            <div class="content-wrap">
                                <!-- Header -->
                                <div class="card-heading">
                                    <!-- User image -->
                                    <div class="user-block">
                                        <div class="image">
                                            <img src="https://friendkit.cssninja.io/assets/img/avatars/bobby.jpg"
                                                data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/bobby.jpg" data-user-popover="8"
                                                alt="">
                                        </div>
                                        <div class="user-info">
                                            <a href="#">Bobby Brown</a>
                                            <span class="time">July 26 2018, 11:14am</span>
                                        </div>
                                    </div>
                                    <!-- /partials/pages/feed/dropdowns/feed-post-dropdown.html -->
                                    <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                        <div>
                                            <div class="button">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-more-vertical">
                                                    <circle cx="12" cy="12" r="1"></circle>
                                                    <circle cx="12" cy="5" r="1"></circle>
                                                    <circle cx="12" cy="19" r="1"></circle>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="dropdown-menu" role="menu">
                                            <div class="dropdown-content">
                                                <a href="#" class="dropdown-item">
                                                    <div class="media">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-bookmark">
                                                            <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z">
                                                            </path>
                                                        </svg>
                                                        <div class="media-content">
                                                            <h3>Bookmark</h3>
                                                            <small>Add this post to your bookmarks.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item">
                                                    <div class="media">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-bell">
                                                            <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                                            <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                                        </svg>
                                                        <div class="media-content">
                                                            <h3>Notify me</h3>
                                                            <small>Send me the updates.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <hr class="dropdown-divider">
                                                <a href="#" class="dropdown-item">
                                                    <div class="media">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-flag">
                                                            <path
                                                                d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z">
                                                            </path>
                                                            <line x1="4" y1="22" x2="4"
                                                                y2="15"></line>
                                                        </svg>
                                                        <div class="media-content">
                                                            <h3>Flag</h3>
                                                            <small>In case of inappropriate content.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Header -->

                                <!-- Post body -->
                                <div class="card-body">
                                    <!-- Post body text -->
                                    <div class="post-text">
                                        <p>
                                            Today, when i was walking back home from my job, i figured that i
                                            should build the best social media template in ThemeForest. As soon as
                                            i got back, i started working on this fresh and new project. Any
                                            suggestions about where i could find some interesting resources for
                                            social media design? <a href="#">#webdesign #socialmedia</a>
                                        </p>

                                        <p></p>
                                    </div>
                                    <!-- Post actions -->
                                    <div class="post-actions">
                                        <!-- /partials/pages/feed/buttons/feed-post-actions.html -->
                                        <div class="like-wrapper">
                                            <a href="javascript:void(0);" class="like-button">
                                                <i class="bx bx-heart" style="color:red"></i>
                                                <i class="bxs bx-heart d-none" style="color:red"></i>
                                                <span class="like-overlay"></span>
                                            </a>
                                        </div>

                                        <div class="fab-wrapper is-share">
                                            <a href="javascript:void(0);" class="small-fab share-fab modal-trigger"
                                                data-modal="share-modal">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-link-2">
                                                    <path
                                                        d="M15 7h3a5 5 0 0 1 5 5 5 5 0 0 1-5 5h-3m-6 0H6a5 5 0 0 1-5-5 5 5 0 0 1 5-5h3">
                                                    </path>
                                                    <line x1="8" y1="12" x2="16"
                                                        y2="12"></line>
                                                </svg>
                                            </a>
                                        </div>

                                        <div class="fab-wrapper is-comment">
                                            <a href="javascript:void(0);" class="small-fab">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-message-circle">
                                                    <path
                                                        d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Post body -->

                                <!-- Post footer -->
                                <div class="card-footer">
                                    <!-- Followers -->
                                    <div class="likers-group">
                                        <img src="https://friendkit.cssninja.io/assets/img/avatars/daniel.jpg"
                                            data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/daniel.jpg" data-user-popover="3"
                                            alt="">
                                        <img src="https://friendkit.cssninja.io/assets/img/avatars/elise.jpg"
                                            data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/elise.jpg" data-user-popover="6"
                                            alt="">
                                    </div>
                                    <div class="likers-text">
                                        <p>
                                            <a href="#">Daniel</a> and
                                            <a href="#">Elise</a>
                                        </p>
                                        <p>liked this</p>
                                    </div>
                                    <!-- Post statistics -->
                                    <div class="social-count">
                                        <div class="likes-count">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-heart">
                                                <path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                                </path>
                                            </svg>
                                            <span>2</span>
                                        </div>
                                        <div class="shares-count">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-link-2">
                                                <path
                                                    d="M15 7h3a5 5 0 0 1 5 5 5 5 0 0 1-5 5h-3m-6 0H6a5 5 0 0 1-5-5 5 5 0 0 1 5-5h3">
                                                </path>
                                                <line x1="8" y1="12" x2="16" y2="12">
                                                </line>
                                            </svg>
                                            <span>0</span>
                                        </div>
                                        <div class="comments-count">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-message-circle">
                                                <path
                                                    d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z">
                                                </path>
                                            </svg>
                                            <span>0</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Post footer -->
                            </div>
                            <!-- /Main wrap -->

                            <!-- Post #6 comments -->
                            <div class="comments-wrap is-hidden">
                                <!-- Header -->
                                <div class="comments-heading">
                                    <h4>
                                        Comments
                                        <small>(0)</small>
                                    </h4>
                                    <div class="close-comments">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-x">
                                            <line x1="18" y1="6" x2="6" y2="18">
                                            </line>
                                            <line x1="6" y1="6" x2="18" y2="18">
                                            </line>
                                        </svg>
                                    </div>
                                </div>
                                <!-- /Header -->

                                <!-- Comments body -->
                                <div class="comments-body has-slimscroll">
                                    <div class="comments-placeholder">
                                        <img src="https://friendkit.cssninja.io/assets/img/icons/feed/bubble.svg" alt="">
                                        <h3>Nothing in here yet</h3>
                                        <p>Be the first to post a comment.</p>
                                    </div>
                                </div>
                                <!-- /Comments body -->

                                <!-- Comments footer -->
                                <div class="card-footer">
                                    <div class="media post-comment has-emojis">
                                        <!-- Textarea -->
                                        <div class="media-content">
                                            <div class="field">
                                                <p class="control">
                                                    <textarea class="textarea comment-textarea" rows="5" placeholder="Write a comment..."
                                                        id="post-comment-textarea-6"></textarea>
                                                </p>
                                            </div>
                                            <!-- Additional actions -->
                                            <div class="actions">
                                                <div class="image is-32x32">
                                                    <img class="is-rounded" src="https://friendkit.cssninja.io/assets/img/avatars/jenna.png"
                                                        data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/jenna.png"
                                                        data-user-popover="0" alt="">
                                                </div>
                                                <div class="toolbar">
                                                    <div class="action is-auto">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-at-sign">
                                                            <circle cx="12" cy="12" r="4"></circle>
                                                            <path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path>
                                                        </svg>
                                                    </div>
                                                    <div class="action is-emoji" id="post-comment-button-6">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-smile">
                                                            <circle cx="12" cy="12" r="10"></circle>
                                                            <path d="M8 14s1.5 2 4 2 4-2 4-2"></path>
                                                            <line x1="9" y1="9" x2="9.01"
                                                                y2="9"></line>
                                                            <line x1="15" y1="9" x2="15.01"
                                                                y2="9"></line>
                                                        </svg>
                                                    </div>
                                                    <div class="action is-upload">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-camera">
                                                            <path
                                                                d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z">
                                                            </path>
                                                            <circle cx="12" cy="13" r="4"></circle>
                                                        </svg>
                                                        <input type="file">
                                                    </div>
                                                    <a class="button is-solid primary-button raised">Post Comment</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Comments footer -->
                            </div>
                            <!-- /Post #6 comments -->
                        </div>
                        <!-- /POST #6 -->

                        <!-- Load more posts -->
                        <div class="load-more-wrap narrow-top has-text-centered">
                            <a href="#" class="load-more-button">Load More</a>
                        </div>
                        <!-- /Load more posts -->
                    </div>
                    <!-- /Middle column -->

                    <!-- Right side column -->
                    <div class="column is-3">
                        <!-- Stories widget -->
                        <!-- /partials/widgets/stories-widget.html -->
                        <div class="card">
                            <div class="card-heading is-bordered">
                                <h4>Stories</h4>
                                <div class="dropdown is-spaced is-neutral is-right dropdown-trigger">
                                    <div>
                                        <div class="button">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-more-vertical">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="12" cy="5" r="1"></circle>
                                                <circle cx="12" cy="19" r="1"></circle>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="dropdown-menu" role="menu">
                                        <div class="dropdown-content">
                                            <a href="#" class="dropdown-item">
                                                <div class="media">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-tv">
                                                        <rect x="2" y="7" width="20" height="15" rx="2"
                                                            ry="2"></rect>
                                                        <polyline points="17 2 12 7 7 2"></polyline>
                                                    </svg>
                                                    <div class="media-content">
                                                        <h3>Browse stories</h3>
                                                        <small>View all recent stories.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item">
                                                <div class="media">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-settings">
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                        <path
                                                            d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                                        </path>
                                                    </svg>
                                                    <div class="media-content">
                                                        <h3>Settings</h3>
                                                        <small>Access widget settings.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <hr class="dropdown-divider">
                                            <a href="#" class="dropdown-item">
                                                <div class="media">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-trash-2">
                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                        <path
                                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                        </path>
                                                        <line x1="10" y1="11" x2="10"
                                                            y2="17"></line>
                                                        <line x1="14" y1="11" x2="14"
                                                            y2="17"></line>
                                                    </svg>
                                                    <div class="media-content">
                                                        <h3>Remove</h3>
                                                        <small>Removes this widget from your feed.</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body no-padding">
                                <!-- Story block -->
                                <div class="story-block">
                                    <a id="add-story-button" href="#" class="add-story">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-plus">
                                            <line x1="12" y1="5" x2="12" y2="19">
                                            </line>
                                            <line x1="5" y1="12" x2="19" y2="12">
                                            </line>
                                        </svg>
                                    </a>
                                    <div class="story-meta">
                                        <span>Add a new Story</span>
                                        <span>Share an image, a video or some text</span>
                                    </div>
                                </div>
                                <!-- Story block -->
                                <div class="story-block">
                                    <div class="img-wrapper">
                                        <img src="https://friendkit.cssninja.io/assets/img/avatars/dan.jpg" data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/dan.jpg"
                                            data-user-popover="1" alt="">
                                    </div>
                                    <div class="story-meta">
                                        <span>Dan Walker</span>
                                        <span>1 hour ago</span>
                                    </div>
                                </div>
                                <!-- Story block -->
                                <div class="story-block">
                                    <div class="img-wrapper">
                                        <img src="https://friendkit.cssninja.io/assets/img/avatars/bobby.jpg"
                                            data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/bobby.jpg" data-user-popover="8"
                                            alt="">
                                    </div>
                                    <div class="story-meta">
                                        <span>Bobby Brown</span>
                                        <span>3 days ago</span>
                                    </div>
                                </div>
                                <!-- Story block -->
                                <div class="story-block">
                                    <div class="img-wrapper">
                                        <img src="https://friendkit.cssninja.io/assets/img/avatars/elise.jpg"
                                            data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/elise.jpg" data-user-popover="6"
                                            alt="">
                                    </div>
                                    <div class="story-meta">
                                        <span>Elise Walker</span>
                                        <span>Last week</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Birthday widget -->
                        <!-- /partials/widgets/birthday-widget.html -->
                        <div class="card is-birthday-card has-background-image"
                            data-background="https://friendkit.cssninja.io/assets/img/illustrations/cards/birthday-bg.svg"
                            style="background-image: url(&quot;assets/img/illustrations/cards/birthday-bg.svg&quot;);">
                            <div class="card-heading">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-gift">
                                    <polyline points="20 12 20 22 4 22 4 12"></polyline>
                                    <rect x="2" y="7" width="20" height="5"></rect>
                                    <line x1="12" y1="22" x2="12" y2="7"></line>
                                    <path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z"></path>
                                    <path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"></path>
                                </svg>
                                <div class="dropdown is-spaced is-right dropdown-trigger is-light">
                                    <div>
                                        <div class="button">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-more-vertical">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="12" cy="5" r="1"></circle>
                                                <circle cx="12" cy="19" r="1"></circle>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="dropdown-menu" role="menu">
                                        <div class="dropdown-content">
                                            <a href="#" class="dropdown-item">
                                                <div class="media">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-clock">
                                                        <circle cx="12" cy="12" r="10"></circle>
                                                        <polyline points="12 6 12 12 16 14"></polyline>
                                                    </svg>
                                                    <div class="media-content">
                                                        <h3>Remind me</h3>
                                                        <small>Remind me of this later today.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item">
                                                <div class="media">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-message-circle">
                                                        <path
                                                            d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z">
                                                        </path>
                                                    </svg>
                                                    <div class="media-content">
                                                        <h3>Message</h3>
                                                        <small>Send an automatic greeting message.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <hr class="dropdown-divider">
                                            <a href="#" class="dropdown-item">
                                                <div class="media">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-trash-2">
                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                        <path
                                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                        </path>
                                                        <line x1="10" y1="11" x2="10"
                                                            y2="17"></line>
                                                        <line x1="14" y1="11" x2="14"
                                                            y2="17"></line>
                                                    </svg>
                                                    <div class="media-content">
                                                        <h3>Remove</h3>
                                                        <small>Removes this widget from your feed.</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div>
                                    <div class="birthday-avatar">
                                        <img src="https://friendkit.cssninja.io/assets/img/avatars/dan.jpg" data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/dan.jpg"
                                            alt="">
                                        <div class="birthday-indicator">31</div>
                                    </div>
                                    <div class="birthday-content">
                                        <h4>Dan turns 31 today!</h4>
                                        <p>Send him your best wishes by leaving something on his wall.</p>
                                        <button type="button" class="button light-button">Write Message</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Suggested friends widget -->
                        <!-- /partials/widgets/suggested-friends-1-widget.html -->
                        <div class="card">
                            <div class="card-heading is-bordered">
                                <h4>Suggested Friends</h4>
                                <div class="dropdown is-spaced is-right dropdown-trigger">
                                    <div>
                                        <div class="button">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-more-vertical">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="12" cy="5" r="1"></circle>
                                                <circle cx="12" cy="19" r="1"></circle>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="dropdown-menu" role="menu">
                                        <div class="dropdown-content">
                                            <a href="#" class="dropdown-item">
                                                <div class="media">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-users">
                                                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                                        <circle cx="9" cy="7" r="4"></circle>
                                                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                                    </svg>
                                                    <div class="media-content">
                                                        <h3>All Suggestions</h3>
                                                        <small>View all friend suggestions.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item">
                                                <div class="media">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-settings">
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                        <path
                                                            d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                                        </path>
                                                    </svg>
                                                    <div class="media-content">
                                                        <h3>Settings</h3>
                                                        <small>Access widget settings.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <hr class="dropdown-divider">
                                            <a href="#" class="dropdown-item">
                                                <div class="media">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-trash-2">
                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                        <path
                                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                        </path>
                                                        <line x1="10" y1="11" x2="10"
                                                            y2="17"></line>
                                                        <line x1="14" y1="11" x2="14"
                                                            y2="17"></line>
                                                    </svg>
                                                    <div class="media-content">
                                                        <h3>Remove</h3>
                                                        <small>Removes this widget from your feed.</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body no-padding">
                                <!-- Suggested friend -->
                                <div class="add-friend-block transition-block">
                                    <img src="https://friendkit.cssninja.io/assets/img/avatars/nelly.png" data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/nelly.png"
                                        data-user-popover="9" alt="">
                                    <div class="page-meta">
                                        <span>Nelly Schwartz</span>
                                        <span>Melbourne</span>
                                    </div>
                                    <div class="add-friend add-transition">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-user-plus">
                                            <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="8.5" cy="7" r="4"></circle>
                                            <line x1="20" y1="8" x2="20" y2="14">
                                            </line>
                                            <line x1="23" y1="11" x2="17" y2="11">
                                            </line>
                                        </svg>
                                    </div>
                                </div>
                                <!-- Suggested friend -->
                                <div class="add-friend-block transition-block">
                                    <img src="https://friendkit.cssninja.io/assets/img/avatars/lana.jpeg" data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/lana.jpeg"
                                        data-user-popover="10" alt="">
                                    <div class="page-meta">
                                        <span>Lana Henrikssen</span>
                                        <span>Helsinki</span>
                                    </div>
                                    <div class="add-friend add-transition">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-user-plus">
                                            <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="8.5" cy="7" r="4"></circle>
                                            <line x1="20" y1="8" x2="20" y2="14">
                                            </line>
                                            <line x1="23" y1="11" x2="17" y2="11">
                                            </line>
                                        </svg>
                                    </div>
                                </div>
                                <!-- Suggested friend -->
                                <div class="add-friend-block transition-block">
                                    <img src="https://friendkit.cssninja.io/assets/img/avatars/gaelle.jpeg"
                                        data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/gaelle.jpeg" data-user-popover="11"
                                        alt="">
                                    <div class="page-meta">
                                        <span>Gaelle Morris</span>
                                        <span>Lyon</span>
                                    </div>
                                    <div class="add-friend add-transition">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-user-plus">
                                            <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="8.5" cy="7" r="4"></circle>
                                            <line x1="20" y1="8" x2="20" y2="14">
                                            </line>
                                            <line x1="23" y1="11" x2="17" y2="11">
                                            </line>
                                        </svg>
                                    </div>
                                </div>
                                <!-- Suggested friend -->
                                <div class="add-friend-block transition-block">
                                    <img src="https://friendkit.cssninja.io/assets/img/avatars/mike.jpg" data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/mike.jpg"
                                        data-user-popover="12" alt="">
                                    <div class="page-meta">
                                        <span>Mike Lasalle</span>
                                        <span>Toronto</span>
                                    </div>
                                    <div class="add-friend add-transition">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-user-plus">
                                            <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="8.5" cy="7" r="4"></circle>
                                            <line x1="20" y1="8" x2="20" y2="14">
                                            </line>
                                            <line x1="23" y1="11" x2="17" y2="11">
                                            </line>
                                        </svg>
                                    </div>
                                </div>
                                <!-- Suggested friend -->
                                <div class="add-friend-block transition-block">
                                    <img src="https://friendkit.cssninja.io/assets/img/avatars/rolf.jpg" data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/rolf.jpg"
                                        data-user-popover="13" alt="">
                                    <div class="page-meta">
                                        <span>Rolf Krupp</span>
                                        <span>Berlin</span>
                                    </div>
                                    <div class="add-friend add-transition">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-user-plus">
                                            <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="8.5" cy="7" r="4"></circle>
                                            <line x1="20" y1="8" x2="20" y2="14">
                                            </line>
                                            <line x1="23" y1="11" x2="17" y2="11">
                                            </line>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- New job widget -->
                        <!-- /partials/widgets/new-job-widget.html -->
                        <div class="card is-new-job-card has-background-image"
                            data-background="https://friendkit.cssninja.io/assets/img/illustrations/cards/job-bg.svg"
                            style="background-image: url(&quot;assets/img/illustrations/cards/job-bg.svg&quot;);">
                            <div class="card-heading">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-briefcase">
                                    <rect x="2" y="7" width="20" height="14" rx="2" ry="2">
                                    </rect>
                                    <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                </svg>
                                <div class="dropdown is-spaced is-right dropdown-trigger is-light">
                                    <div>
                                        <div class="button">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-more-vertical">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="12" cy="5" r="1"></circle>
                                                <circle cx="12" cy="19" r="1"></circle>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="dropdown-menu" role="menu">
                                        <div class="dropdown-content">
                                            <a href="#" class="dropdown-item">
                                                <div class="media">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-clock">
                                                        <circle cx="12" cy="12" r="10"></circle>
                                                        <polyline points="12 6 12 12 16 14"></polyline>
                                                    </svg>
                                                    <div class="media-content">
                                                        <h3>Remind me</h3>
                                                        <small>Remind me of this later today.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item">
                                                <div class="media">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-message-circle">
                                                        <path
                                                            d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z">
                                                        </path>
                                                    </svg>
                                                    <div class="media-content">
                                                        <h3>Message</h3>
                                                        <small>Send an automatic congratz message.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <hr class="dropdown-divider">
                                            <a href="#" class="dropdown-item">
                                                <div class="media">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-trash-2">
                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                        <path
                                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                        </path>
                                                        <line x1="10" y1="11" x2="10"
                                                            y2="17"></line>
                                                        <line x1="14" y1="11" x2="14"
                                                            y2="17"></line>
                                                    </svg>
                                                    <div class="media-content">
                                                        <h3>Remove</h3>
                                                        <small>Removes this widget from your feed.</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div>
                                    <div class="job-avatar">
                                        <img src="https://friendkit.cssninja.io/assets/img/avatars/nelly.png"
                                            data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/nelly.png" alt="">
                                    </div>
                                    <div class="job-content">
                                        <h4>Nelly has a new job!</h4>
                                        <p>Send her message congratulating her for getting this job.</p>
                                        <button type="button" class="button light-button">Write Message</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Right side column -->
                </div>
            </div>
            <!-- /Feed page main wrapper -->
        </div>
        <!-- /Container -->

        <!-- Create group modal in compose card -->
        <!-- /partials/pages/feed/modals/create-group-modal.html -->
        <div id="create-group-modal" class="modal create-group-modal is-light-bg">
            <div class="modal-background"></div>
            <div class="modal-content">
                <div class="card">
                    <div class="card-heading">
                        <h3>Create group</h3>
                        <!-- Close X button -->
                        <div class="close-wrap">
                            <span class="close-modal">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                </svg>
                            </span>
                        </div>
                    </div>
                    <!-- Modal subheading -->
                    <div class="subheading">
                        <!-- Group avatar -->
                        <div class="group-avatar">
                            <input id="group-avatar-upload" type="file">
                            <div class="add-photo">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg>
                            </div>
                        </div>
                        <!-- Group name -->
                        <div class="control">
                            <input type="text" class="input" placeholder="Give the group a name">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="inner">
                            <div class="left-section">
                                <div class="search-subheader">
                                    <div class="control">
                                        <input type="text" class="input" placeholder="Search for friends to add">
                                        <span class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-search">
                                                <circle cx="11" cy="11" r="8"></circle>
                                                <line x1="21" y1="21" x2="16.65" y2="16.65">
                                                </line>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                                <div id="new-group-list" class="user-list has-slimscroll">
                                    <!-- Friend -->
                                    <div class="friend-block" data-ref="ref-1">
                                        <img class="friend-avatar" src="https://friendkit.cssninja.io/assets/img/avatars/dan.jpg"
                                            data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/dan.jpg" alt="">
                                        <div class="friend-name">Dan Walker</div>
                                        <div class="round-checkbox is-small">
                                            <div>
                                                <input type="checkbox" id="checkbox-group-1">
                                                <label for="checkbox-group-1"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Friend -->
                                    <div class="friend-block" data-ref="ref-2">
                                        <img class="friend-avatar" src="https://friendkit.cssninja.io/assets/img/avatars/daniel.jpg"
                                            data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/daniel.jpg" alt="">
                                        <div class="friend-name">Daniel Wellington</div>
                                        <div class="round-checkbox is-small">
                                            <div>
                                                <input type="checkbox" id="checkbox-group-2">
                                                <label for="checkbox-group-2"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Friend -->
                                    <div class="friend-block" data-ref="ref-3">
                                        <img class="friend-avatar" src="https://friendkit.cssninja.io/assets/img/avatars/stella.jpg"
                                            data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/stella.jpg" alt="">
                                        <div class="friend-name">Stella Bergmann</div>
                                        <div class="round-checkbox is-small">
                                            <div>
                                                <input type="checkbox" id="checkbox-group-3">
                                                <label for="checkbox-group-3"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Friend -->
                                    <div class="friend-block" data-ref="ref-4">
                                        <img class="friend-avatar" src="https://friendkit.cssninja.io/assets/img/avatars/david.jpg"
                                            data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/david.jpg" alt="">
                                        <div class="friend-name">David Kim</div>
                                        <div class="round-checkbox is-small">
                                            <div>
                                                <input type="checkbox" id="checkbox-group-4">
                                                <label for="checkbox-group-4"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Friend -->
                                    <div class="friend-block" data-ref="ref-5">
                                        <img class="friend-avatar" src="https://friendkit.cssninja.io/assets/img/avatars/nelly.png"
                                            data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/nelly.png" alt="">
                                        <div class="friend-name">Nelly Schwartz</div>
                                        <div class="round-checkbox is-small">
                                            <div>
                                                <input type="checkbox" id="checkbox-group-5">
                                                <label for="checkbox-group-5"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Friend -->
                                    <div class="friend-block" data-ref="ref-6">
                                        <img class="friend-avatar" src="https://friendkit.cssninja.io/assets/img/avatars/elise.jpg"
                                            data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/elise.jpg" alt="">
                                        <div class="friend-name">Elise Walker</div>
                                        <div class="round-checkbox is-small">
                                            <div>
                                                <input type="checkbox" id="checkbox-group-6">
                                                <label for="checkbox-group-6"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Friend -->
                                    <div class="friend-block" data-ref="ref-7">
                                        <img class="friend-avatar" src="https://friendkit.cssninja.io/assets/img/avatars/bobby.jpg"
                                            data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/bobby.jpg" alt="">
                                        <div class="friend-name">Bobby Brown</div>
                                        <div class="round-checkbox is-small">
                                            <div>
                                                <input type="checkbox" id="checkbox-group-7">
                                                <label for="checkbox-group-7"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Friend -->
                                    <div class="friend-block" data-ref="ref-8">
                                        <img class="friend-avatar" src="https://friendkit.cssninja.io/assets/img/avatars/lana.jpeg"
                                            data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/lana.jpeg" alt="">
                                        <div class="friend-name">Lana Henrikssen</div>
                                        <div class="round-checkbox is-small">
                                            <div>
                                                <input type="checkbox" id="checkbox-group-8">
                                                <label for="checkbox-group-8"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Friend -->
                                    <div class="friend-block" data-ref="ref-9">
                                        <img class="friend-avatar" src="https://friendkit.cssninja.io/assets/img/avatars/gaelle.jpeg"
                                            data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/gaelle.jpeg" alt="">
                                        <div class="friend-name">Gaelle Morris</div>
                                        <div class="round-checkbox is-small">
                                            <div>
                                                <input type="checkbox" id="checkbox-group-9">
                                                <label for="checkbox-group-9"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Friend -->
                                    <div class="friend-block" data-ref="ref-10">
                                        <img class="friend-avatar" src="https://friendkit.cssninja.io/assets/img/avatars/mike.jpg"
                                            data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/mike.jpg" alt="">
                                        <div class="friend-name">Mike Lasalle</div>
                                        <div class="round-checkbox is-small">
                                            <div>
                                                <input type="checkbox" id="checkbox-group-10">
                                                <label for="checkbox-group-10"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="right-section has-slimscroll">
                                <div class="selected-count">
                                    <span>Selected</span>
                                    <span id="selected-friends-count">0</span>
                                </div>

                                <div id="selected-list" class="selected-list"></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="button is-solid grey-button close-modal">
                            Cancel
                        </button>
                        <button type="button" class="button is-solid accent-button close-modal">
                            Create a Group
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Albums onboarding modal -->
        <!-- /partials/pages/feed/modals/albums-help-modal.html -->
        <div id="albums-help-modal" class="modal albums-help-modal is-xsmall has-light-bg">
            <div class="modal-background"></div>
            <div class="modal-content">
                <div class="card">
                    <div class="card-heading">
                        <h3>Add Photos</h3>
                        <!-- Close X button -->
                        <div class="close-wrap">
                            <span class="close-modal">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="content-block is-active">
                            <img src="https://friendkit.cssninja.io/assets/img/illustrations/cards/albums.svg" alt="">
                            <div class="help-text">
                                <h3>Manage your photos</h3>
                                <p>
                                    Lorem ipsum sit dolor amet is a dummy text used by the typography
                                    industry and the web industry.
                                </p>
                            </div>
                        </div>

                        <div class="content-block">
                            <img src="https://friendkit.cssninja.io/assets/img/illustrations/cards/upload.svg" alt="">
                            <div class="help-text">
                                <h3>Upload your photos</h3>
                                <p>
                                    Lorem ipsum sit dolor amet is a dummy text used by the typography
                                    industry and the web industry.
                                </p>
                            </div>
                        </div>

                        <div class="slide-dots">
                            <div class="dot is-active"></div>
                            <div class="dot"></div>
                        </div>
                        <div class="action">
                            <button type="button" class="button is-solid accent-button next-modal raised"
                                data-modal="albums-modal">
                                Next
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Album upload modal -->
        <!-- /partials/pages/feed/modals/albums-modal.html -->
        <div id="albums-modal" class="modal albums-modal is-xxl has-light-bg">
            <div class="modal-background"></div>
            <div class="modal-content">
                <div class="card">
                    <div class="card-heading">
                        <h3>New album</h3>
                        <div class="button is-solid accent-button fileinput-button dz-clickable">
                            <i class="mdi mdi-plus"></i>
                            Add pictures/videos
                        </div>

                        <!-- Close X button -->
                        <div class="close-wrap">
                            <span class="close-modal">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="left-section">
                            <div class="album-form">
                                <div class="control">
                                    <input type="text" class="input is-sm no-radius is-fade"
                                        placeholder="Album name">
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-camera">
                                            <path
                                                d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z">
                                            </path>
                                            <circle cx="12" cy="13" r="4"></circle>
                                        </svg>
                                    </div>
                                </div>
                                <div class="control">
                                    <textarea class="textarea is-fade no-radius is-sm" rows="3" placeholder="describe your album ..."></textarea>
                                </div>
                                <div class="control">
                                    <input type="text" class="input is-sm no-radius is-fade" placeholder="Place">
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-map-pin">
                                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                            <circle cx="12" cy="10" r="3"></circle>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div id="album-date" class="album-date">
                                <div class="head">
                                    <h4>Change the date</h4>
                                    <button type="button" class="button is-solid dark-grey-button icon-button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-plus">
                                            <line x1="12" y1="5" x2="12" y2="19">
                                            </line>
                                            <line x1="5" y1="12" x2="19" y2="12">
                                            </line>
                                        </svg>
                                    </button>
                                </div>

                                <p>Set a date for your album. You can always change it later.</p>
                                <div class="control is-hidden">
                                    <input id="album-datepicker" type="text" class="input is-sm is-fade"
                                        placeholder="Select a date">
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-calendar">
                                            <rect x="3" y="4" width="18" height="18" rx="2"
                                                ry="2"></rect>
                                            <line x1="16" y1="2" x2="16" y2="6">
                                            </line>
                                            <line x1="8" y1="2" x2="8" y2="6">
                                            </line>
                                            <line x1="3" y1="10" x2="21" y2="10">
                                            </line>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div id="tagged-in-album" class="tagged-in-album">
                                <div class="head">
                                    <h4>Tag friends in this album</h4>
                                    <button type="button" class="button is-solid dark-grey-button icon-button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-plus">
                                            <line x1="12" y1="5" x2="12" y2="19">
                                            </line>
                                            <line x1="5" y1="12" x2="19" y2="12">
                                            </line>
                                        </svg>
                                    </button>
                                </div>

                                <p>
                                    Tag friends in this album. Tagged friends can see photos they are
                                    tagged in.
                                </p>
                                <div class="field is-autocomplete is-hidden">
                                    <div class="control">
                                        <div class="easy-autocomplete" style="width: 0px;"><input
                                                id="create-album-friends-autocpl" type="text"
                                                class="input is-sm is-fade" placeholder="Search for friends"
                                                autocomplete="off">
                                            <div class="easy-autocomplete-container"
                                                id="eac-container-create-album-friends-autocpl">
                                                <ul></ul>
                                            </div>
                                        </div>
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-search">
                                                <circle cx="11" cy="11" r="8"></circle>
                                                <line x1="21" y1="21" x2="16.65" y2="16.65">
                                                </line>
                                            </svg>
                                        </div>
                                    </div>
                                </div>

                                <div id="album-tag-list" class="album-tag-list"></div>
                            </div>

                            <div class="shared-album">
                                <div class="head">
                                    <h4>Allow friends to add photos</h4>
                                    <div class="basic-checkbox">
                                        <input class="styled-checkbox" id="styled-checkbox-1" type="checkbox"
                                            value="value1">
                                        <label for="styled-checkbox-1"></label>
                                    </div>
                                </div>

                                <p>
                                    Tagged friends will be able to share content inside this album.
                                </p>
                            </div>
                        </div>
                        <div class="right-section has-slimscroll">
                            <div class="modal-uploader">
                                <div id="actions" class="columns is-multiline no-mb">
                                    <div class="column is-12">
                                        <span class="button has-icon is-solid grey-button fileinput-button dz-clickable">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-plus">
                                                <line x1="12" y1="5" x2="12" y2="19">
                                                </line>
                                                <line x1="5" y1="12" x2="19" y2="12">
                                                </line>
                                            </svg>
                                        </span>
                                        <button type="submit" class="button start is-hidden">
                                            <span>Upload</span>
                                        </button>
                                        <button type="reset" class="button is-solid grey-button cancel">
                                            <span>Clear all</span>
                                        </button>
                                        <span class="file-count">
                                            <span id="modal-uploader-file-count">0</span> file(s) selected
                                        </span>
                                    </div>

                                    <div class="column is-12 is-hidden">
                                        <!-- The global file processing state -->
                                        <div class="fileupload-process">
                                            <div id="total-progress" class="progress progress-striped active"
                                                role="progressbar" aria-valuemin="0" aria-valuemax="100"
                                                aria-valuenow="0">
                                                <div class="progress-bar progress-bar-success" style="width: 0%"
                                                    data-dz-uploadprogress=""></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="columns is-multiline" id="previews">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <!-- Dropdown menu -->
                        <div class="dropdown is-up is-spaced is-modern is-neutral is-right dropdown-trigger">
                            <div>
                                <button class="button" aria-haspopup="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-smile main-icon">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <path d="M8 14s1.5 2 4 2 4-2 4-2"></path>
                                        <line x1="9" y1="9" x2="9.01" y2="9"></line>
                                        <line x1="15" y1="9" x2="15.01" y2="9"></line>
                                    </svg>
                                    <span>Friends</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-chevron-down caret">
                                        <polyline points="6 9 12 15 18 9"></polyline>
                                    </svg>
                                </button>
                            </div>
                            <div class="dropdown-menu" role="menu">
                                <div class="dropdown-content">
                                    <a href="#" class="dropdown-item">
                                        <div class="media">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-globe">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <line x1="2" y1="12" x2="22" y2="12">
                                                </line>
                                                <path
                                                    d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                                                </path>
                                            </svg>
                                            <div class="media-content">
                                                <h3>Public</h3>
                                                <small>Anyone can see this publication.</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item">
                                        <div class="media">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-users">
                                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="9" cy="7" r="4"></circle>
                                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                            </svg>
                                            <div class="media-content">
                                                <h3>Friends</h3>
                                                <small>only friends can see this publication.</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item">
                                        <div class="media">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-user">
                                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="12" cy="7" r="4"></circle>
                                            </svg>
                                            <div class="media-content">
                                                <h3>Specific friends</h3>
                                                <small>Don't show it to some friends.</small>
                                            </div>
                                        </div>
                                    </a>
                                    <hr class="dropdown-divider">
                                    <a class="dropdown-item">
                                        <div class="media">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-lock">
                                                <rect x="3" y="11" width="18" height="11" rx="2"
                                                    ry="2"></rect>
                                                <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                            </svg>
                                            <div class="media-content">
                                                <h3>Only me</h3>
                                                <small>Only me can see this publication.</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="button is-solid accent-button close-modal">
                            Create album
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Live video onboarding modal -->
        <!-- /partials/pages/feed/modals/videos-help-modal.html -->
        <div id="videos-help-modal" class="modal videos-help-modal is-xsmall has-light-bg">
            <div class="modal-background"></div>
            <div class="modal-content">
                <div class="card">
                    <div class="card-heading">
                        <h3>Add Photos</h3>
                        <!-- Close X button -->
                        <div class="close-wrap">
                            <span class="close-modal">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="content-block is-active">
                            <img src="https://friendkit.cssninja.io/assets/img/illustrations/cards/videotrip.svg" alt="">
                            <div class="help-text">
                                <h3>Share live videos</h3>
                                <p>
                                    Lorem ipsum sit dolor amet is a dummy text used by the typography
                                    industry and the web industry.
                                </p>
                            </div>
                        </div>

                        <div class="content-block">
                            <img src="https://friendkit.cssninja.io/assets/img/illustrations/cards/videocall.svg" alt="">
                            <div class="help-text">
                                <h3>To build your audience</h3>
                                <p>
                                    Lorem ipsum sit dolor amet is a dummy text used by the typography
                                    industry and the web industry.
                                </p>
                            </div>
                        </div>

                        <div class="slide-dots">
                            <div class="dot is-active"></div>
                            <div class="dot"></div>
                        </div>
                        <div class="action">
                            <button type="button" class="button is-solid accent-button next-modal raised"
                                data-modal="videos-modal">
                                Next
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Live video modal -->
        <!-- /partials/pages/feed/modals/videos-modal.html -->
        <div id="videos-modal" class="modal videos-modal is-xxl has-light-bg">
            <div class="modal-background"></div>
            <div class="modal-content">
                <div class="card">
                    <div class="card-heading">
                        <h3>Go live</h3>
                        <div id="stop-stream" class="button is-solid accent-button is-hidden" onclick="stopWebcam();">
                            <i class="mdi mdi-video-off"></i>
                            Stop stream
                        </div>
                        <div id="start-stream" class="button is-solid accent-button" onclick="startWebcam();">
                            <i class="mdi mdi-video"></i>
                            Start stream
                        </div>

                        <!-- Close X button -->
                        <div class="close-wrap">
                            <span class="close-modal">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="inner">
                            <div class="left-section">
                                <div class="video-wrapper">
                                    <div class="video-wrap">
                                        <div id="live-indicator" class="live is-vhidden">Live</div>
                                        <video id="video" width="400" height="240" controls=""
                                            autoplay=""></video>
                                    </div>
                                </div>
                            </div>
                            <div class="right-section">
                                <div class="header">
                                    <img src="https://friendkit.cssninja.io/assets/img/avatars/jenna.png" data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/jenna.png"
                                        alt="">
                                    <div class="user-meta">
                                        <span>Jenna Davis <small>is live</small></span>
                                        <span><small>right now</small></span>
                                    </div>
                                    <button type="button" class="button">Follow</button>
                                    <div class="dropdown is-spaced is-right dropdown-trigger">
                                        <div>
                                            <div class="button">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-more-vertical">
                                                    <circle cx="12" cy="12" r="1"></circle>
                                                    <circle cx="12" cy="5" r="1"></circle>
                                                    <circle cx="12" cy="19" r="1"></circle>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="dropdown-menu" role="menu">
                                            <div class="dropdown-content">
                                                <div class="dropdown-item is-title">Who can see this ?</div>
                                                <a href="#" class="dropdown-item">
                                                    <div class="media">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-globe">
                                                            <circle cx="12" cy="12" r="10"></circle>
                                                            <line x1="2" y1="12" x2="22"
                                                                y2="12"></line>
                                                            <path
                                                                d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                                                            </path>
                                                        </svg>
                                                        <div class="media-content">
                                                            <h3>Public</h3>
                                                            <small>Anyone can see this publication.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item">
                                                    <div class="media">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-users">
                                                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                                            <circle cx="9" cy="7" r="4"></circle>
                                                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                                        </svg>
                                                        <div class="media-content">
                                                            <h3>Friends</h3>
                                                            <small>only friends can see this publication.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item">
                                                    <div class="media">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-user">
                                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                            <circle cx="12" cy="7" r="4"></circle>
                                                        </svg>
                                                        <div class="media-content">
                                                            <h3>Specific friends</h3>
                                                            <small>Don't show it to some friends.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <hr class="dropdown-divider">
                                                <a class="dropdown-item">
                                                    <div class="media">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-lock">
                                                            <rect x="3" y="11" width="18" height="11"
                                                                rx="2" ry="2"></rect>
                                                            <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                                        </svg>
                                                        <div class="media-content">
                                                            <h3>Only me</h3>
                                                            <small>Only me can see this publication.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="inner-content">
                                    <div class="control">
                                        <input type="text" class="input is-sm is-fade"
                                            placeholder="What is this live about?">
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-activity">
                                                <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="live-stats">
                                        <div class="social-count">
                                            <div class="likes-count">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-heart">
                                                    <path
                                                        d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                                    </path>
                                                </svg>
                                                <span>0</span>
                                            </div>
                                            <div class="shares-count">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-link-2">
                                                    <path
                                                        d="M15 7h3a5 5 0 0 1 5 5 5 5 0 0 1-5 5h-3m-6 0H6a5 5 0 0 1-5-5 5 5 0 0 1 5-5h3">
                                                    </path>
                                                    <line x1="8" y1="12" x2="16"
                                                        y2="12"></line>
                                                </svg>
                                                <span>0</span>
                                            </div>
                                            <div class="comments-count">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-message-circle">
                                                    <path
                                                        d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z">
                                                    </path>
                                                </svg>
                                                <span>0</span>
                                            </div>
                                        </div>
                                        <div class="social-count ml-auto">
                                            <div class="views-count">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-eye">
                                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                </svg>
                                                <span>0</span>
                                                <span class="views"><small>views</small></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="actions">
                                        <div class="action">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-thumbs-up">
                                                <path
                                                    d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                                                </path>
                                            </svg>
                                            <span>Like</span>
                                        </div>
                                        <div class="action">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-message-circle">
                                                <path
                                                    d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z">
                                                </path>
                                            </svg>
                                            <span>Comment</span>
                                        </div>
                                        <div class="action">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-link-2">
                                                <path
                                                    d="M15 7h3a5 5 0 0 1 5 5 5 5 0 0 1-5 5h-3m-6 0H6a5 5 0 0 1-5-5 5 5 0 0 1 5-5h3">
                                                </path>
                                                <line x1="8" y1="12" x2="16" y2="12">
                                                </line>
                                            </svg>
                                            <span>Share</span>
                                        </div>
                                        <div class="dropdown is-spaced is-right dropdown-trigger">
                                            <div>
                                                <div class="avatar-button">
                                                    <img src="https://friendkit.cssninja.io/assets/img/avatars/jenna.png"
                                                        data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/jenna.png" alt="">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-triangle">
                                                        <path
                                                            d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="dropdown-menu has-margin" role="menu">
                                                <div class="dropdown-content">
                                                    <a href="#" class="dropdown-item is-selected">
                                                        <div class="media">
                                                            <img src="https://friendkit.cssninja.io/assets/img/avatars/jenna.png"
                                                                data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/jenna.png"
                                                                alt="">
                                                            <div class="media-content">
                                                                <h3>Jenna Davis</h3>
                                                                <small>Interact as Jenna Davis.</small>
                                                            </div>
                                                            <div class="checkmark">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-check">
                                                                    <polyline points="20 6 9 17 4 12"></polyline>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <hr class="dropdown-divider">
                                                    <a href="#" class="dropdown-item">
                                                        <div class="media">
                                                            <img src="https://friendkit.cssninja.io/assets/img/avatars/hanzo.svg"
                                                                data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/hanzo.svg"
                                                                alt="">
                                                            <div class="media-content">
                                                                <h3>Css Ninja</h3>
                                                                <small>Interact as Css Ninja.</small>
                                                            </div>
                                                            <div class="checkmark">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-check">
                                                                    <polyline points="20 6 9 17 4 12"></polyline>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tabs-wrapper">
                                    <div class="tabs is-fullwidth">
                                        <ul>
                                            <li class="is-active">
                                                <a>Comments</a>
                                            </li>
                                            <li>
                                                <a>Upcoming</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-content has-slimscroll">
                                        <div class="media is-comment">
                                            <figure class="media-left">
                                                <p class="image is-32x32">
                                                    <img src="https://friendkit.cssninja.io/assets/img/avatars/dan.jpg"
                                                        data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/dan.jpg" alt=""
                                                        data-user-popover="1">
                                                </p>
                                            </figure>
                                            <div class="media-content">
                                                <div class="username">Dan Walker</div>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    Proin ornare magna eros.
                                                </p>
                                                <div class="comment-actions">
                                                    <a href="javascript:void(0);" class="is-inverted">Like</a>
                                                    <span>3h</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="media is-comment">
                                            <figure class="media-left">
                                                <p class="image is-32x32">
                                                    <img src="https://friendkit.cssninja.io/assets/img/avatars/david.jpg"
                                                        data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/david.jpg" alt=""
                                                        data-user-popover="4">
                                                </p>
                                            </figure>
                                            <div class="media-content">
                                                <div class="username">David Kim</div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                                                <div class="comment-actions">
                                                    <a href="javascript:void(0);" class="is-inverted">Like</a>
                                                    <span>4h</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="media is-comment">
                                            <figure class="media-left">
                                                <p class="image is-32x32">
                                                    <img src="https://friendkit.cssninja.io/assets/img/avatars/rolf.jpg"
                                                        data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/rolf.jpg" alt=""
                                                        data-user-popover="17">
                                                </p>
                                            </figure>
                                            <div class="media-content">
                                                <div class="username">Rolf Krupp</div>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    Proin ornare magna eros. Consectetur adipiscing elit.
                                                    Proin ornare magna eros.
                                                </p>
                                                <div class="comment-actions">
                                                    <a href="javascript:void(0);" class="is-inverted">Like</a>
                                                    <span>4h</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="comment-controls">
                                    <div class="controls-inner">
                                        <img src="https://friendkit.cssninja.io/assets/img/avatars/jenna.png"
                                            data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/jenna.png" alt="">
                                        <div class="control">
                                            <textarea class="textarea comment-textarea is-rounded" rows="1"></textarea>
                                            <button class="emoji-button">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-smile">
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                    <path d="M8 14s1.5 2 4 2 4-2 4-2"></path>
                                                    <line x1="9" y1="9" x2="9.01"
                                                        y2="9"></line>
                                                    <line x1="15" y1="9" x2="15.01"
                                                        y2="9"></line>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Share from feed modal -->
        <!-- /partials/pages/feed/modals/share-modal.html -->
        <div id="share-modal" class="modal share-modal is-xsmall has-light-bg">
            <div class="modal-background"></div>
            <div class="modal-content">
                <div class="card">
                    <div class="card-heading">
                        <div class="dropdown is-primary share-dropdown">
                            <div>
                                <div class="button">
                                    <i class="mdi mdi-format-float-left"></i>
                                    <span>Share in your feed</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-chevron-down">
                                        <polyline points="6 9 12 15 18 9"></polyline>
                                    </svg>
                                </div>
                            </div>
                            <div class="dropdown-menu" role="menu">
                                <div class="dropdown-content">
                                    <div class="dropdown-item" data-target-channel="feed">
                                        <div class="media">
                                            <i class="mdi mdi-format-float-left"></i>
                                            <div class="media-content">
                                                <h3>Share in your feed</h3>
                                                <small>Share this publication on your feed.</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown-item" data-target-channel="friend">
                                        <div class="media">
                                            <i class="mdi mdi-account-heart"></i>
                                            <div class="media-content">
                                                <h3>Share in a friend's feed</h3>
                                                <small>Share this publication on a friend's feed.</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown-item" data-target-channel="group">
                                        <div class="media">
                                            <i class="mdi mdi-account-group"></i>
                                            <div class="media-content">
                                                <h3>Share in a group</h3>
                                                <small>Share this publication in a group.</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown-item" data-target-channel="page">
                                        <div class="media">
                                            <i class="mdi mdi-file-document-box"></i>
                                            <div class="media-content">
                                                <h3>Share in a page</h3>
                                                <small>Share this publication in a page.</small>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="dropdown-divider">
                                    <div class="dropdown-item" data-target-channel="private-message">
                                        <div class="media">
                                            <i class="mdi mdi-email-plus"></i>
                                            <div class="media-content">
                                                <h3>Share in message</h3>
                                                <small>Share this publication in a private message.</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Close X button -->
                        <div class="close-wrap">
                            <span class="close-modal">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div class="share-inputs">
                        <div class="field is-autocomplete">
                            <div id="share-to-friend" class="control share-channel-control is-hidden">
                                <div class="easy-autocomplete" style="width: 0px;"><input id="share-with-friend"
                                        type="text" class="input is-sm no-radius share-input simple-users-autocpl"
                                        placeholder="Your friend's name" autocomplete="off">
                                    <div class="easy-autocomplete-container" id="eac-container-share-with-friend">
                                        <ul></ul>
                                    </div>
                                </div>
                                <div class="input-heading">Friend :</div>
                            </div>
                        </div>

                        <div class="field is-autocomplete">
                            <div id="share-to-group" class="control share-channel-control is-hidden">
                                <div class="easy-autocomplete" style="width: 0px;"><input id="share-with-group"
                                        type="text" class="input is-sm no-radius share-input simple-groups-autocpl"
                                        placeholder="Your group's name" autocomplete="off">
                                    <div class="easy-autocomplete-container" id="eac-container-share-with-group">
                                        <ul></ul>
                                    </div>
                                </div>
                                <div class="input-heading">Group :</div>
                            </div>
                        </div>

                        <div id="share-to-page" class="control share-channel-control no-border is-hidden">
                            <div class="page-controls">
                                <div class="page-selection">
                                    <div class="dropdown is-accent page-dropdown">
                                        <div>
                                            <div class="button page-selector">
                                                <img src="https://friendkit.cssninja.io/assets/img/avatars/hanzo.svg"
                                                    data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/hanzo.svg" alt="">
                                                <span>Css Ninja</span> <svg xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" class="feather feather-chevron-down">
                                                    <polyline points="6 9 12 15 18 9"></polyline>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="dropdown-menu" role="menu">
                                            <div class="dropdown-content">
                                                <div class="dropdown-item">
                                                    <div class="media">
                                                        <img src="https://friendkit.cssninja.io/assets/img/avatars/hanzo.svg"
                                                            data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/hanzo.svg" alt="">
                                                        <div class="media-content">
                                                            <h3>Css Ninja</h3>
                                                            <small>Share on Css Ninja.</small>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="dropdown-item">
                                                    <div class="media">
                                                        <img src="https://friendkit.cssninja.io/assets/img/vector/icons/logos/nuclearjs.svg"
                                                            data-demo-src="https://friendkit.cssninja.io/assets/img/vector/icons/logos/nuclearjs.svg"
                                                            alt="">
                                                        <div class="media-content">
                                                            <h3>NuclearJs</h3>
                                                            <small>Share on NuclearJs.</small>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="dropdown-item">
                                                    <div class="media">
                                                        <img src="https://friendkit.cssninja.io/assets/img/vector/icons/logos/slicer.svg"
                                                            data-demo-src="https://friendkit.cssninja.io/assets/img/vector/icons/logos/slicer.svg"
                                                            alt="">
                                                        <div class="media-content">
                                                            <h3>Slicer</h3>
                                                            <small>Share on Slicer.</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="alias">
                                    <img src="https://friendkit.cssninja.io/assets/img/avatars/jenna.png" data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/jenna.png"
                                        alt="">
                                </div>
                            </div>
                        </div>

                        <div class="field is-autocomplete">
                            <div id="share-to-private-message" class="control share-channel-control is-hidden">
                                <div class="easy-autocomplete" style="width: 0px;"><input
                                        id="share-with-private-message" type="text"
                                        class="input is-sm no-radius share-input simple-users-autocpl"
                                        placeholder="Message a friend" autocomplete="off">
                                    <div class="easy-autocomplete-container"
                                        id="eac-container-share-with-private-message">
                                        <ul></ul>
                                    </div>
                                </div>
                                <div class="input-heading">To :</div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="control">
                            <textarea class="textarea comment-textarea" rows="1" placeholder="Say something about this ..."></textarea>
                            <button class="emoji-button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-smile">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <path d="M8 14s1.5 2 4 2 4-2 4-2"></path>
                                    <line x1="9" y1="9" x2="9.01" y2="9"></line>
                                    <line x1="15" y1="9" x2="15.01" y2="9"></line>
                                </svg>
                            </button>
                        </div>
                        <div class="shared-publication">
                            <div class="featured-image">
                                <img id="share-modal-image" src="https://friendkit.cssninja.io/assets/img/demo/unsplash/1.jpg"
                                    data-demo-src="https://friendkit.cssninja.io/assets/img/demo/unsplash/1.jpg" alt="">
                            </div>
                            <div class="publication-meta">
                                <div class="inner-flex">
                                    <img id="share-modal-avatar" src="https://friendkit.cssninja.io/assets/img/avatars/dan.jpg"
                                        data-demo-src="https://friendkit.cssninja.io/assets/img/avatars/dan.jpg" data-user-popover="1"
                                        alt="">
                                    <p id="share-modal-text">
                                        Yesterday with <a href="#">@Karen Miller</a> and
                                        <a href="#">@Marvin Stemperd</a> at the
                                        <a href="#">#Rock'n'Rolla</a> concert in LA. Was totally
                                        fantastic! People were really excited about this one!
                                    </p>
                                </div>
                                <div class="publication-footer">
                                    <div class="stats">
                                        <div class="stat-block">
                                            <i class="mdi mdi-earth"></i>
                                            <small>Public</small>
                                        </div>
                                        <div class="stat-block">
                                            <i class="mdi mdi-eye"></i>
                                            <small>163 views</small>
                                        </div>
                                    </div>
                                    <div class="publication-origin">
                                        <small>Friendkit.io</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bottom-share-inputs">
                        <div id="action-place" class="field is-autocomplete is-dropup is-hidden">
                            <div id="share-place" class="control share-bottom-channel-control">
                                <div class="easy-autocomplete" style="width: 0px;"><input type="text"
                                        class="input is-sm no-radius share-input simple-locations-autocpl"
                                        placeholder="Where are you?" id="eac-6158" autocomplete="off">
                                    <div class="easy-autocomplete-container" id="eac-container-eac-6158">
                                        <ul></ul>
                                    </div>
                                </div>
                                <div class="input-heading">Location :</div>
                            </div>
                        </div>

                        <div id="action-tag" class="field is-autocomplete is-dropup is-hidden">
                            <div id="share-tags" class="control share-bottom-channel-control">
                                <div class="easy-autocomplete" style="width: 0px;"><input
                                        id="share-friend-tags-autocpl" type="text"
                                        class="input is-sm no-radius share-input" placeholder="Who are you with"
                                        autocomplete="off">
                                    <div class="easy-autocomplete-container"
                                        id="eac-container-share-friend-tags-autocpl">
                                        <ul></ul>
                                    </div>
                                </div>
                                <div class="input-heading">Friends :</div>
                            </div>
                            <div id="share-modal-tag-list" class="tag-list no-margin"></div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="action-wrap">
                            <div class="footer-action" data-target-action="tag">
                                <i class="mdi mdi-account-plus"></i>
                            </div>
                            <div class="footer-action" data-target-action="place">
                                <i class="mdi mdi-map-marker"></i>
                            </div>
                            <div class="footer-action dropdown is-spaced is-neutral dropdown-trigger is-up"
                                data-target-action="permissions">
                                <div>
                                    <i class="mdi mdi-lock-clock"></i>
                                </div>
                                <div class="dropdown-menu" role="menu">
                                    <div class="dropdown-content">
                                        <a href="#" class="dropdown-item">
                                            <div class="media">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-globe">
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                    <line x1="2" y1="12" x2="22"
                                                        y2="12"></line>
                                                    <path
                                                        d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                                                    </path>
                                                </svg>
                                                <div class="media-content">
                                                    <h3>Public</h3>
                                                    <small>Anyone can see this publication.</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item">
                                            <div class="media">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-users">
                                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                                    <circle cx="9" cy="7" r="4"></circle>
                                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                                </svg>
                                                <div class="media-content">
                                                    <h3>Friends</h3>
                                                    <small>only friends can see this publication.</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item">
                                            <div class="media">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-user">
                                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                    <circle cx="12" cy="7" r="4"></circle>
                                                </svg>
                                                <div class="media-content">
                                                    <h3>Specific friends</h3>
                                                    <small>Don't show it to some friends.</small>
                                                </div>
                                            </div>
                                        </a>
                                        <hr class="dropdown-divider">
                                        <a class="dropdown-item">
                                            <div class="media">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-lock">
                                                    <rect x="3" y="11" width="18" height="11" rx="2"
                                                        ry="2"></rect>
                                                    <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                                </svg>
                                                <div class="media-content">
                                                    <h3>Only me</h3>
                                                    <small>Only me can see this publication.</small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="button-wrap">
                            <button type="button" class="button is-solid dark-grey-button close-modal">
                                Cancel
                            </button>
                            <button type="button" class="button is-solid primary-button close-modal">
                                Publish
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- No Stream modal -->
        <!-- /partials/pages/feed/modals/no-stream-modal.html -->
        <div id="no-stream-modal" class="modal no-stream-modal is-xsmall has-light-bg">
            <div class="modal-background"></div>
            <div class="modal-content">
                <div class="card">
                    <div class="card-heading">
                        <h3></h3>
                        <!-- Close X button -->
                        <div class="close-wrap">
                            <span class="close-modal">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div class="card-body has-text-centered">
                        <div class="image-wrap">
                            <img src="https://friendkit.cssninja.io/assets/img/illustrations/characters/no-stream.svg" alt="">
                        </div>

                        <h3>Streaming Disabled</h3>
                        <p>
                            Streaming is not allowed from mobile web. Please use our mobile apps
                            for mobile streaming.
                        </p>

                        <div class="action">
                            <a href="/#demos-section" class="button is-solid accent-button raised is-fullwidth">Got
                                It</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Google places Lib -->
        <script src="https://maps.google.com/maps/api/js?key=AIzaSyAGLO_M5VT7BsVdjMjciKoH1fFJWWdhDPU&amp;libraries=places">
        </script>

    </div>

@endsection

@section('page-script')

@endsection
