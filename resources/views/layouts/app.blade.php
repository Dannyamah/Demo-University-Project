<!DOCTYPE html>
<html>

<!-- Mirrored from thememakker.com/templates/swift/university/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Dec 2022 23:41:03 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Swift University</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="d_assets/plugins/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- Custom Css -->
    <link rel="stylesheet" href="d_assets/css/main.css">

    <link rel="stylesheet" href="d_assets/css/themes/all-themes.css" />
</head>

<body class="theme-blush">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-blush">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->

    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->

    <!-- Morphing Search  -->
    <div id="morphsearch" class="morphsearch">
        <form class="morphsearch-form">
            <div class="form-group m-0">
                <input value="" type="search" placeholder="Search..." class="form-control morphsearch-input" />
                <button class="morphsearch-submit" type="submit">Search</button>
            </div>
        </form>
        <div class="morphsearch-content">
            <div class="column">
                <h2>People</h2>
                <a class="media-object" href="#">
                    <img class="rounded-circle" src="d_assets/images/sm/avatar1.jpg" alt="" />
                    <h3>Sara Soueidan</h3>
                </a>
                <a class="media-object" href="#">
                    <img class="rounded-circle" src="d_assets/images/sm/avatar2.jpg" alt="" />
                    <h3>Rachel Smith</h3>
                </a>
                <a class="media-object" href="#">
                    <img class="rounded-circle" src="d_assets/images/sm/avatar3.jpg" alt="" />
                    <h3>Peter Finlan</h3>
                </a>
                <a class="media-object" href="#">
                    <img class="rounded-circle" src="d_assets/images/sm/avatar4.jpg" alt="" />
                    <h3>Patrick Cox</h3>
                </a>
                <a class="media-object" href="#">
                    <img class="rounded-circle" src="d_assets/images/sm/avatar5.jpg" alt="" />
                    <h3>Tim Holman</h3>
                </a>
            </div>
        </div>
        <!-- /morphsearch-content -->
        <span class="morphsearch-close"></span>
    </div>

    <!-- Top Bar -->
    <nav class="navbar clearHeader">
        <div class="col-12">
            <div class="navbar-header"> <a href="javascript:void(0);" class="bars"></a> <a class="navbar-brand"
                    href="{{ route('welcome') }}">Swift University</a> </div>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i
                            class="zmdi zmdi-settings"></i></a></li>
            </ul>
        </div>
    </nav>
    <!-- #Top Bar -->

    <!--Side menu and right menu -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="admin-image">
                    @if (Auth::user()->image != 0)
                    <img src="/storage/images/{{ Auth::user()->image }}" alt="">
                    @else
                    <img src="d_assets/images/random-avatar7.jpg" alt="">
                    @endif
                </div>
                <div class="admin-action-info"> <span>Welcome</span>
                    <h3>{{ Auth::user()->name }}</h3>
                    <ul>
                        <li><a data-placement="bottom" title="Go to Profile" href="{{ route('view.profile') }}"><i
                                    class="zmdi zmdi-account"></i></a></li>
                        <li><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i
                                    class="zmdi zmdi-settings"></i></a></li>
                        <li><a data-placement="bottom" title="Full Screen" href="{{ route('logout') }}"><i
                                    class="zmdi zmdi-sign-in"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                @if (Auth::user()->role_id == 3)
                    <x-admindashboard-component></x-admindashboard-component>
                @elseif (Auth::user()->role_id == 2)
                    <x-lecturerdashboard-component></x-lecturerdashboard-component>
                @elseif (Auth::user()->role_id == 1)
                    <x-studentdashboard-component></x-studentdashboard-component>
                @endif
            </div>
            <!-- #Menu -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#skins">Skins</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#chat">Chat</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#settings">Setting</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane in active in active" id="skins">
                    <ul class="demo-choose-skin">
                        <li data-theme="red">
                            <div class="red"></div><span>Red</span>
                        </li>
                        <li data-theme="purple">
                            <div class="purple"></div><span>Purple</span>
                        </li>
                        <li data-theme="blue">
                            <div class="blue"></div><span>Blue</span>
                        </li>
                        <li data-theme="cyan">
                            <div class="cyan"></div><span>Cyan</span>
                        </li>
                        <li data-theme="green">
                            <div class="green"></div><span>Green</span>
                        </li>
                        <li data-theme="deep-orange">
                            <div class="deep-orange"></div><span>Deep Orange</span>
                        </li>
                        <li data-theme="blue-grey">
                            <div class="blue-grey"></div><span>Blue Grey</span>
                        </li>
                        <li data-theme="black">
                            <div class="black"></div><span>Black</span>
                        </li>
                        <li data-theme="blush" class="active">
                            <div class="blush"></div><span>Blush</span>
                        </li>
                    </ul>
                </div>
                <div role="tabpanel" class="tab-pane" id="chat">
                    <div class="demo-settings">
                        <div class="search">
                            <div class="input-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Search..." required
                                        autofocus>
                                </div>
                            </div>
                        </div>
                        <h6>Recent</h6>
                        <ul>
                            <li class="online">
                                <div class="media">
                                    <a role="button" tabindex="0"> <img class="media-object "
                                            src="d_assets/images/xs/avatar1.jpg" alt=""> </a>
                                    <div class="media-body">
                                        <span class="name">Claire Sassu</span> <span class="message">Can you share
                                            the...</span> <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </li>
                            <li class="online">
                                <div class="media"> <a role="button" tabindex="0"> <img class="media-object "
                                            src="d_assets/images/xs/avatar2.jpg" alt=""> </a>
                                    <div class="media-body">
                                        <span class="name">Maggie jackson</span> <span class="message">Can you share
                                            the...</span> <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </li>
                            <li class="online">
                                <div class="media"> <a role="button" tabindex="0"> <img class="media-object "
                                            src="d_assets/images/xs/avatar3.jpg" alt=""> </a>
                                    <div class="media-body">
                                        <span class="name">Joel King</span> <span class="message">Ready for the
                                            meeti...</span> <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <h6>Contacts</h6>
                        <ul>
                            <li class="offline">
                                <div class="media"> <a role="button" tabindex="0"> <img class="media-object "
                                            src="d_assets/images/xs/avatar4.jpg" alt=""> </a>
                                    <div class="media-body">
                                        <span class="name">Joel King</span> <span
                                            class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </li>
                            <li class="online">
                                <div class="media"> <a role="button" tabindex="0"> <img class="media-object "
                                            src="d_assets/images/xs/avatar1.jpg" alt=""> </a>
                                    <div class="media-body">
                                        <span class="name">Joel King</span> <span
                                            class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </li>
                            <li class="offline">
                                <div class="media"> <a class="pull-left " role="button" tabindex="0"> <img
                                            class="media-object " src="d_assets/images/xs/avatar2.jpg"
                                            alt="">
                                    </a>
                                    <div class="media-body">
                                        <span class="name">Joel King</span> <span
                                            class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="settings">
                    <div class="demo-settings">
                        <p>GENERAL SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Report Panel Usage</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Email Redirect</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>SYSTEM SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Notifications</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Auto Updates</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>ACCOUNT SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Offline</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Location Permission</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
    </section>
    <!--Side menu and right menu -->

    {{ $slot }}

    <div class="color-bg"></div>

    <!-- Jquery Core Js -->
    <script src="d_assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
    <script src="d_assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
    <script src="d_assets/bundles/morphingsearchscripts.bundle.js"></script> <!-- Main top morphing search -->

    <script src="d_assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script> <!-- Sparkline Plugin Js -->
    <script src="d_assets/plugins/chartjs/Chart.bundle.min.js"></script> <!-- Chart Plugins Js -->

    <script src="d_assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
    <script src="d_assets/js/pages/charts/sparkline.min.js"></script>
    <script src="d_assets/js/pages/index.js"></script>
</body>

<!-- Mirrored from thememakker.com/templates/swift/university/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Dec 2022 23:42:54 GMT -->

</html>
