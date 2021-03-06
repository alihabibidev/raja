<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="/admin/images/favicon.ico">

    <title>آقای ادمین | قالب واکنشگرا مدیریتی</title>

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="/admin/plugins/morris/morris.css">

    <!-- App css -->
    <link href="/admin/css/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>
    <link href="/admin/css/core.css" rel="stylesheet" type="text/css"/>
    <link href="/admin/css/components.css" rel="stylesheet" type="text/css"/>
    <link href="/admin/css/icons.css" rel="stylesheet" type="text/css"/>
    <link href="/admin/css/pages.css" rel="stylesheet" type="text/css"/>
    <link href="/admin/css/menu.css" rel="stylesheet" type="text/css"/>
    <link href="/admin/css/responsive.css" rel="stylesheet" type="text/css"/>

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="/admin/js/modernizr.min.js"></script>

</head>


<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
    <div class="topbar">

        <!-- LOGO -->
        <div class="topbar-left">
            <a href="index.html" class="logo"><span>آقای<span>ادمین</span></span><i class="zmdi zmdi-layers"></i></a>
        </div>

        <!-- Button mobile view to collapse sidebar menu -->
        <div class="navbar navbar-default" role="navigation">
            <div class="container">

                <!-- Page title -->
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <button class="button-menu-mobile open-left">
                            <i class="zmdi zmdi-menu"></i>
                        </button>
                    </li>
                    <li>
                        <h4 class="page-title"> @yield('pagetitle', 'داشبورد')</h4>
                    </li>
                </ul>

                <!-- Right(Notification and Searchbox -->
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <!-- Notification -->
                        <div class="notification-box">
                            <ul class="list-inline m-b-0">
                                <li>
                                    <a href="javascript:void(0);" class="right-bar-toggle">
                                        <i class="zmdi zmdi-notifications-none"></i>
                                    </a>
                                    <div class="noti-dot">
                                        <span class="dot"></span>
                                        <span class="pulse"></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- End Notification bar -->
                    </li>
                    <li class="hidden-xs">
                        <form role="search" class="app-search">
                            <input type="text" placeholder="به دنبال چه می گردی ؟؟؟"
                                   class="form-control">
                            <a href=""><i class="fa fa-search"></i></a>
                        </form>
                    </li>
                </ul>

            </div><!-- end container -->
        </div><!-- end navbar -->
    </div>
    <!-- Top Bar End -->


    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">
        <div class="sidebar-inner slimscrollleft">

            <!-- User -->
            <div class="user-box">
                <div class="user-img">
                    <img src="/admin/images/users/avatar-1.jpg" alt="user-img" title="Mat Helme"
                         class="img-circle img-thumbnail img-responsive">
                    <div class="user-status offline"><i class="zmdi zmdi-dot-circle"></i></div>
                </div>
                <h5><a href="#">علی یدالهی</a></h5>
                <ul class="list-inline">
                    <li>
                        <a href="#">
                            <i class="zmdi zmdi-settings"></i>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="text-custom">
                            <i class="zmdi zmdi-power"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- End User -->

            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <ul>
                    <li class="text-muted menu-title">دسته بندی ها</li>

                    <li>
                        <a href="index.html" class="waves-effect active"><i class="zmdi zmdi-view-dashboard"></i> <span> داشبورد </span>
                        </a>
                    </li>

                    <li>
                        <a href="typography.html" class="waves-effect"><i class="zmdi zmdi-format-underlined"></i>
                            <span> نوشته ها </span> </a>
                    </li>


                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-view-list"></i> <span> برندها </span>
                            <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a href="{{route('showBrand')}}">مشاهده برند ها</a></li>
                            <li><a href="{{route('addBrand')}}"> اضافه کردن برند</a></li>
                        </ul>
                    </li>


                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-view-list"></i> <span> قطارها </span>
                            <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a href="{{route('showTrain')}}">مشاهده قطار ها</a></li>
                            <li><a href="{{route('addTrainPage')}}"> اضافه کردن قطار</a></li>
                        </ul>
                    </li>
                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-view-list"></i> <span> سفرها </span>
                            <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a href="{{route('showtrip')}}">مشاهده سفر ها</a></li>
                            <li><a href="{{route('addTripPage')}}"> اضافه کردن سفر</a></li>
                        </ul>
                    </li>
                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-view-list"></i> <span> کاربران </span>
                            <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a href="{{route('showUser')}}">مشاهده کاربرها </a></li>
                            <li><a href="{{route('addUser')}}"> اضافه کردن کاربر</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="{{route('exit')}}" class="waves-effect"><i class="zmdi zmdi-format-underlined"></i>
                            <span>  خروج </span> </a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <!-- Sidebar -->
            <div class="clearfix"></div>

        </div>

    </div>
    <!-- Left Sidebar End -->


    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">
                @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        {{ session()->get('success') }}
                    </div>
                @endif
                @if(session()->has('error'))
                    <div class="alert alert-danger alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        {{ session()->get('error') }}
                    </div>
                @endif

                @if(session()->has('warning'))
                    <div class="alert alert-warning alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        {{ session()->get('warning') }}
                    </div>
                @endif
                @yield('content')
            </div> <!-- container -->

        </div> <!-- content -->

        <footer class="footer">
            آقای ادمین2016 ©.
        </footer>

    </div>


    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->


    <!-- Right Sidebar -->
    <div class="side-bar right-bar">
        <a href="javascript:void(0);" class="right-bar-toggle">
            <i class="zmdi zmdi-close-circle-o"></i>
        </a>
        <h4 class="">اعلانات</h4>
        <div class="notification-list nicescroll">
            <ul class="list-group list-no-border user-list">
                <li class="list-group-item">
                    <a href="#" class="user-list-item">
                        <div class="avatar">
                            <img src="/admin/images/users/avatar-2.jpg" alt="">
                        </div>
                        <div class="user-desc">
                            <span class="name">کاربر شماره یک</span>
                            <span class="desc">متن کاربر شماره یک</span>
                            <span class="time">2 ساعت قبل</span>
                        </div>
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="#" class="user-list-item">
                        <div class="icon bg-info">
                            <i class="zmdi zmdi-account"></i>
                        </div>
                        <div class="user-desc">
                            <span class="name">ثبت نام جدید</span>
                            <span class="desc">کاربری جدید در سایت ثبت نام کرده است</span>
                            <span class="time">5 ساعت قبل</span>
                        </div>
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="#" class="user-list-item">
                        <div class="icon bg-pink">
                            <i class="zmdi zmdi-comment"></i>
                        </div>
                        <div class="user-desc">
                            <span class="name">پیام جدید</span>
                            <span class="desc">متن پیام جدید از کاریی جدید</span>
                            <span class="time">1 روز قبل</span>
                        </div>
                    </a>
                </li>
                <li class="list-group-item active">
                    <a href="#" class="user-list-item">
                        <div class="avatar">
                            <img src="/admin/images/users/avatar-3.jpg" alt="">
                        </div>
                        <div class="user-desc">
                            <span class="name">کاربر شماره 2</span>
                            <span class="desc">با سلام من یک متن کاملا آزمایشی هستم</span>
                            <span class="time">2 روز قبل</span>
                        </div>
                    </a>
                </li>
                <li class="list-group-item active">
                    <a href="#" class="user-list-item">
                        <div class="icon bg-warning">
                            <i class="zmdi zmdi-settings"></i>
                        </div>
                        <div class="user-desc">
                            <span class="name">تنظیمات</span>
                            <span class="desc">تنظیمات جدید برای دسترسی و راحتی شما موجود است</span>
                            <span class="time">1 روز قبل</span>
                        </div>
                    </a>
                </li>

            </ul>
        </div>
    </div>
    <!-- /Right-bar -->

</div>
<!-- END wrapper -->


<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="/admin/js/jquery.min.js"></script>
<script src="/admin/js/bootstrap-rtl.min.js"></script>
<script src="/admin/js/detect.js"></script>
<script src="/admin/js/fastclick.js"></script>
<script src="/admin/js/jquery.blockUI.js"></script>
<script src="/admin/js/waves.js"></script>
<script src="/admin/js/jquery.nicescroll.js"></script>
<script src="/admin/js/jquery.slimscroll.js"></script>
<script src="/admin/js/jquery.scrollTo.min.js"></script>

<!-- KNOB JS -->
<!--[if IE]>
<script type="text/javascript" src="/admin/plugins/jquery-knob/excanvas.js"></script>
<![endif]-->
<script src="/admin/plugins/jquery-knob/jquery.knob.js"></script>

<!--Morris Chart-->
<script src="/admin/plugins/morris/morris.min.js"></script>
<script src="/admin/plugins/raphael/raphael-min.js"></script>

<!-- Dashboard init -->
<script src="/admin/pages/jquery.dashboard.js"></script>

<!-- App js -->
<script src="/admin/js/jquery.core.js"></script>
<script src="/admin/js/jquery.app.js"></script>
@yield("extra_js")
</body>
</html>
