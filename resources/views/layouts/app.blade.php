<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Olarm') }}</title>

    <!-- Scripts -->
    {{--<script src="{{ asset('js/app.js') }}" defer></script>--}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css" />

    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
</head>
<body class="layout-row">
    @auth
    <div id="aside" class="page-sidenav no-shrink bg-light nav-dropdown fade" aria-hidden="true">
        <div class="sidenav h-100 modal-dialog bg-light">
            <!-- sidenav top -->
            <div class="navbar">
                <!-- brand -->
                <a href="{{ route('home') }}" class="navbar-brand ">
                    <svg width="32" height="32" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                        <g class="loading-spin" style="transform-origin: 256px 256px">
                            <path d="M200.043 106.067c-40.631 15.171-73.434 46.382-90.717 85.933H256l-55.957-85.933zM412.797 288A160.723 160.723 0 0 0 416 256c0-36.624-12.314-70.367-33.016-97.334L311 288h101.797zM359.973 134.395C332.007 110.461 295.694 96 256 96c-7.966 0-15.794.591-23.448 1.715L310.852 224l49.121-89.605zM99.204 224A160.65 160.65 0 0 0 96 256c0 36.639 12.324 70.394 33.041 97.366L201 224H99.204zM311.959 405.932c40.631-15.171 73.433-46.382 90.715-85.932H256l55.959 85.932zM152.046 377.621C180.009 401.545 216.314 416 256 416c7.969 0 15.799-.592 23.456-1.716L201.164 288l-49.118 89.621z"></path>
                        </g>
                    </svg>
                    {{--<img src="{{ asset('assets/img/logo.png') }}" alt="...">--}}
                    <span class="hidden-folded d-inline l-s-n-1x ">Olarm</span>
                </a>
                <!-- / brand -->
            </div>
            <!-- Flex nav content -->
            <div class="flex scrollable hover">
                <div class="nav-active-text-primary" data-nav>
                    <ul class="nav bg">
                        <li class="nav-header hidden-folded">
                            <span class="text-muted">Applications</span>
                        </li>
                        <li>
                            <a href="{{ route('home') }}">
                                <span class="nav-icon text-success"><i data-feather='users'></i></span>
                                <span class="nav-text">Users Management</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="main" class="layout-column flex">
        <!-- Header START-->
        <div id="header" class="page-header ">
            <div class="navbar navbar-expand-lg">
                <!-- brand -->
                <a href="{{ route("home") }}" class="navbar-brand d-lg-none">
                    <svg width="32" height="32" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                        <g class="loading-spin" style="transform-origin: 256px 256px">
                            <path d="M200.043 106.067c-40.631 15.171-73.434 46.382-90.717 85.933H256l-55.957-85.933zM412.797 288A160.723 160.723 0 0 0 416 256c0-36.624-12.314-70.367-33.016-97.334L311 288h101.797zM359.973 134.395C332.007 110.461 295.694 96 256 96c-7.966 0-15.794.591-23.448 1.715L310.852 224l49.121-89.605zM99.204 224A160.65 160.65 0 0 0 96 256c0 36.639 12.324 70.394 33.041 97.366L201 224H99.204zM311.959 405.932c40.631-15.171 73.433-46.382 90.715-85.932H256l55.959 85.932zM152.046 377.621C180.009 401.545 216.314 416 256 416c7.969 0 15.799-.592 23.456-1.716L201.164 288l-49.118 89.621z"></path>
                        </g>
                    </svg>
                    <!-- <img src="../assets/img/logo.png" alt="..."> -->
                    <span class="hidden-folded d-inline l-s-n-1x d-lg-none">Olarm</span>
                </a>
                <!-- / brand -->
                <!-- Navbar collapse -->

                <ul class="nav navbar-menu order-1 order-lg-2">

                    <!-- Notification -->
                    <li class="nav-item dropdown">
                        <a class="nav-link px-2 mr-lg-2" data-toggle="dropdown">
                            <i data-feather="bell"></i>
                            <span class="badge badge-pill badge-up bg-primary">1</span>
                        </a>
                        <!-- dropdown -->
                        <div class="dropdown-menu dropdown-menu-right mt-3 w-md animate fadeIn p-0">
                            <div class="scrollable hover" style="max-height: 250px">
                                <div class="list list-row">
                                    <div class="list-item " data-id="12">
                                        <div>
                                            <a href="#">
                                                    <span class="w-32 avatar gd-info">
                                                        A
                                                    </span>
                                            </a>
                                        </div>
                                        <div class="flex">
                                            <div class="item-feed h-2x">
                                                <a href='#'>Support</a> team updated the status
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex px-3 py-2 b-t">
                                <div class="flex">
                                    <span>1 Notifications</span>
                                </div>
                                <a href="#">See all
                                    <i class="fa fa-angle-right text-muted"></i>
                                </a>
                            </div>
                        </div>
                        <!-- / dropdown -->
                    </li>
                    <!-- User dropdown menu -->
                    <li class="nav-item dropdown">
                        <a href="#" data-toggle="dropdown" class="nav-link d-flex align-items-center px-2 text-color">
                            <span class="avatar w-24" style="margin: -2px;"><img src="{{ asset('assets/img/a4.jpg') }}" alt="..."></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right w mt-3 animate fadeIn">
                            <a class="dropdown-item" href="{{ route('accountsetting') }}">
                                <span>Account Settings</span>
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="GET" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    <!-- Navarbar toggle btn -->
                    <li class="nav-item d-lg-none">
                        <a class="nav-link px-1" data-toggle="modal" data-target="#aside">
                            <i data-feather="menu"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        @endauth
        <!-- Footer END-->
        @yield('content')
        <!-- Footer START -->
        @auth
        <div id="footer" class="page-footer show">
            <div class="d-flex p-3">
                <span class="text-sm text-muted flex">&copy; Copyright. test.myolarm.com</span>
                <div class="text-sm text-muted">Version 1.0.0</div>
            </div>
        </div>
        @endauth
        <!-- Footer END -->
    </div>
</body>

<!-- build:js ../assets/js/site.min.js -->
<!-- jQuery -->
<script src="{{ asset('libs/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('libs/popper.js/dist/umd/popper.min.js') }}"></script>
<script src="{{ asset('libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- ajax page -->
<script src="{{ asset('libs/pjax/pjax.min.js') }}"></script>
<script src="{{ asset('assets/js/ajax.js') }}"></script>
<!-- lazyload plugin -->
<script src="{{ asset('assets/js/lazyload.config.js') }}"></script>
<script src="{{ asset('assets/js/lazyload.js') }}"></script>
<script src="{{ asset('assets/js/plugin.js') }}"></script>
<!-- scrollreveal -->
<script src="{{ asset('libs/scrollreveal/dist/scrollreveal.min.js') }}"></script>
<!-- feathericon -->
<script src="{{ asset('libs/feather-icons/dist/feather.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/feathericon.js') }}"></script>
<!-- theme -->
<script src="{{ asset('assets/js/theme.js') }}"></script>
<script src="{{ asset('assets/js/utils.js') }}"></script>
<!-- end build -->
</html>
