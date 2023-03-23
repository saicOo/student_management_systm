<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    @include('layouts.head')
</head>

<body class="nav-md">

    @guest

        @yield('content')
    @else
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                            <a href="{{ route('home') }}" class="site_title"><span>Management System</span></a>
                        </div>

                        <div class="clearfix"></div>

                        <!-- menu profile quick info -->
                        <div class="profile clearfix">
                            <div class="profile_pic">
                                <img src="{{ asset('images/user.png') }}" alt="..." class="img-circle profile_img">
                            </div>
                            <div class="profile_info">
                                <span>{{ Auth::user()->name }}</span>
                                <h2>{{ Auth::user()->email }}</h2>
                            </div>
                        </div>
                        <!-- /menu profile quick info -->

                        <br />

                        <!-- sidebar menu -->
                        @include('layouts.sidebar')
                        <!-- /sidebar menu -->

                        <!-- /menu footer buttons -->
                        <div class="sidebar-footer hidden-small">

                        </div>
                        <!-- /menu footer buttons -->
                    </div>
                </div>

                <!-- top navigation -->
                <div class="top_nav">
                    <div class="nav_menu">
                        <nav>
                            <div class="nav toggle">
                                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                            </div>

                            <ul class="nav navbar-nav navbar-right">
                                <li class="">
                                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                                        aria-expanded="false">
                                        <img src="{{ asset('images/user.png') }}" alt="">{{ Auth::user()->name }}
                                        <span class=" fa fa-angle-down"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                                        @if (Auth::user()->role == 1)
                                            @if (Route::has('register'))
                                                <li>
                                                    <a class="dropdown-item "href="{{ route('admins') }}">List Admins</a>
                                                </li>
                                                <li>
                                                    <a
                                                        class="dropdown-item "href="{{ route('register') }}">{{ __('Register') }}</a>
                                                </li>
                                            @endif
                                        @endif

                                        <li><a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i
                                                    class="fa fa-sign-out pull-right"></i> Log Out</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                style="display: none;">
                                                @csrf
                                            </form>
                                        </li>

                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- /top navigation -->

                <!-- page content -->
                <div class="right_col" role="main">
                    @yield('content')
                </div>
                <!-- footer content -->
                <footer>
                    <div class="pull-right">
                        <strong>Copyright &copy; 2022-2023
                            <a href="https://saicopy.com">Saico</a>.</strong> All rights
                    </div>
                    <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->
            </div>
        </div>

    @endguest

    <!-- jQuery -->
    <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{ URL::asset('js/bootstrap-progressbar.min.js') }}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{ URL::asset('js/moment.min.js') }}"></script>
    <script src="{{ URL::asset('js/daterangepicker.js') }}"></script>
    <!-- Custom Theme Scripts -->
    <script src="{{ URL::asset('js/custom.min.js') }}"></script>
    @stack('footer-scripts')
</body>

</html>
