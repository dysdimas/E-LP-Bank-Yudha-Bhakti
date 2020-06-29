<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Admin E-LP Bank Yudha Bhakti</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Themesbrand" name="author" />
    <link rel="shortcut icon" href="{{asset('vendor_user3/images/favicon.ico')}}">

    <!--Chartist Chart CSS -->
    <link rel="stylesheet" href="{{asset('vendor_admin/plugins/chartist/css/chartist.min.css')}}">
    <link href="{{asset('vendor_admin/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('vendor_admin/assets/css/metismenu.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('vendor_admin/assets/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('vendor_admin/assets/css/style.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('vendor_admin/DataTables/datatables.min.css')}}" rel="stylesheet" type="text/css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <!-- <script src="//cdn.ckeditor.com/4.13.1/full/ckeditor.js"></script> -->
</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left">
                <a href="{{url('/')}}" class="logo">
                    <span>
                        <img src="{{asset('vendor_user3/images/logo.jpg')}}" alt="" height="35">
                    </span>
                    <i>
                        <img src="{{asset('vendor_user3/images/logo.jpg')}}" alt="" height="10">
                    </i>
                </a>
            </div>

            <nav class="navbar-custom">
                <ul class="navbar-right list-inline float-right mb-0">
                    <!-- full screen -->
                    <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                        <a class="nav-link waves-effect" href="#" id="btn-fullscreen">
                            <i class="mdi mdi-fullscreen noti-icon"></i>
                        </a>
                    </li>

                    <li class="dropdown notification-list list-inline-item">
                        <div class="dropdown notification-list nav-pro-img">
                            <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="{{asset('vendor_admin/img/core-img/profile.png')}}" alt="user" class="rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <!-- item-->
                                <?php

                                use Illuminate\Support\Facades\Session;

                                if (Session::get('role') == 1) : ?>
                                    <a class="dropdown-item" data-toggle="modal" data-target="#exampleModalScrollable_changepass">
                                        <i class="mdi mdi-lock-open-outline m-r-5"></i>
                                        <font color="white">Set Password</font>
                                    </a>
                                <?php else : ?>
                                    <span class="dropdown-item">
                                        <font color="white">Nip : {{Session::get('nik')}}</font>
                                    </span>
                                <?php endif; ?>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="{{url('/logout')}}"><i class="mdi mdi-power text-danger"></i> Logout</a>
                            </div>
                        </div>
                    </li>

                </ul>
                <ul class="list-inline menu-left mb-0">
                    <li class="float-left">
                        <button class="button-menu-mobile open-left waves-effect">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </li>
                </ul>

            </nav>

        </div>
        <!-- Top Bar End -->

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            <div class="slimscroll-menu" id="remove-scroll">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu" id="side-menu">
                        <!-- <li class="menu-title"><b>Main</b></li>
                        <li>
                            <a href="{{url('/admin')}}" class="waves-effect">
                                <i class="ti-calendar"></i>
                                <span>Dashboard</span>
                            </a>
                        </li> -->
                        <?php

                        use Illuminate\Support\Facades\DB;

                        $role = Session::get('role');
                        $queryMenu2 = DB::table('admin_menu')
                            ->select('admin_menu.id', 'menu')
                            ->join('admin_access_menu', 'admin_menu.id', '=', 'admin_access_menu.menu_id')
                            ->where('admin_access_menu.role', '=', $role)
                            ->orderBy('admin_menu.sort')
                            ->get();

                        ?>
                        @foreach($queryMenu2 as $qm)
                        <li class="menu-title">{{$qm->menu}}</li>

                        <?php
                        $menuId = $qm->id;
                        $querySubMenu = DB::table('admin_sub_menu')
                            ->select('admin_sub_menu.*')
                            ->join('admin_menu', 'admin_sub_menu.menu_id', '=', 'admin_menu.id')
                            ->where('admin_sub_menu.menu_id', '=', $menuId)
                            ->get();
                        ?>
                        @foreach($querySubMenu as $sm)
                        <li>
                            <?php
                            if ($title == $sm->sub_menu) : ?>

                                <a href="{{$sm->url}}" class="waves-effect active">
                                <?php else : ?>
                                    <a href="{{$sm->url}}" class="waves-effect">

                                    <?php endif; ?>

                                    <i class="{{$sm->icon}}"></i>
                                    <span>
                                        {{$sm->sub_menu}}
                                    </span>
                                    </a>
                                    @endforeach
                        </li>
                        @endforeach
                    </ul>

                </div>
                <!-- Sidebar -->
                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <br>
            <!-- Start content -->
            @yield('content')
            <!-- content -->
            <footer class="footer">
                <strong>PT.BankYudhaBhakti.Tbk, Powered by Digital Banking</strong>
            </footer>

        </div>

        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <!-- jQuery  -->
    <script src="{{asset('vendor_admin/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('vendor_admin/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('vendor_admin/assets/js/metisMenu.min.js')}}"></script>
    <script src="{{asset('vendor_admin/assets/js/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('vendor_admin/assets/js/waves.min.js')}}"></script>

    <!--Chartist Chart-->
    <script src="{{asset('vendor_admin/plugins/chartist/js/chartist.min.js')}}"></script>
    <script src="{{asset('vendor_admin/plugins/chartist/js/chartist-plugin-tooltip.min.js')}}"></script>

    <!-- peity JS -->
    <script src="{{asset('vendor_admin/plugins/peity-chart/jquery.peity.min.js')}}"></script>

    <script src="{{asset('vendor_admin/assets/pages/dashboard.js')}}"></script>
    <!-- App js -->
    <script src="{{asset('vendor_admin/assets/js/app.js')}}"></script>
    <script src="{{asset('vendor_admin/DataTables/datatables.min.js')}}"></script>
    <!-- Modal Create -->
    <div class="modal fade" id="exampleModalScrollable_changepass" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Change Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php
                    $edit_pass  = \App\User::find(Session::get('id'));
                    ?>
                    <!-- form start -->
                    <div class="card">
                        <div class="card-body">
                            <form class="outer-repeater" method="post" action="{{url('/updatepassword/'. $edit_pass->id)}}">
                                {{ csrf_field() }}
                                <div data-repeater-list="outer-group" class="outer">
                                    <div data-repeater-item class="outer">
                                        <div class="form-group">
                                            <label for="formemail">New Password :</label>
                                            <input type="password" class="form-control" name="password" id="formemail" placeholder="Enter your new password...">
                                        </div>
                                        <div class="form-group">
                                            <label for="formemail">Repeat Your Password :</label>
                                            <input type="password" class="form-control" name="password2" id="formemail" placeholder="Enter your new password...">
                                        </div>
                                        <button type="submit" class="btn btn-warning">Change</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <script>
                        CKEDITOR.replace('post');
                    </script>
                </div>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</body>

</html>