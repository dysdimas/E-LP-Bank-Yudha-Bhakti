<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="description" content="Netbizz - Corporate Responsive HTML template">
    <meta name="keywords" content="HTML,CSS,HTML5, CSS3, Corporate, Business, template, Bootstrap, JavaScript">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-LP Bank Yudha Bhakti</title>
    <link href="{{asset('vendor_user3/images/favicon.ico')}}" rel=" shortcut icon" type="image/x-icon" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('vendor_user3/css/style.css')}}">
    <link rel=" stylesheet" href="{{asset('vendor_user3/css/sm-clean.css')}}">
    <link rel=" stylesheet" href="{{asset('vendor_user3/css/sm-core-css.css')}}">
    <link rel=" stylesheet" href="{{asset('vendor_user3/css/owl.carousel.css')}}">
    <link rel=" stylesheet" href="{{asset('vendor_user3/css/owl.theme.default.css')}}">
    <link rel=" stylesheet" href="{{asset('vendor_user3/css/grt-youtube-popup.css')}}">
    <link rel=" stylesheet" href="{{asset('vendor_user3/css/lightbox.css')}}">
    <link rel=" stylesheet" href="{{asset('vendor_user3/css/responsive.css')}}">

</head>

<body>
    <!-- <script>
        document.addEventListener("contextmenu", function(e) {
            e.preventDefault();
        }, false);
    </script> -->
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- /header start-->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="main-nav">
                        <input id="main-menu-state" type="checkbox" />
                        <label class="main-menu-btn" for="main-menu-state"> <span class="main-menu-btn-icon"></span> Toggle main menu visibility </label>
                        <h2 class="nav-brand"><a href="{{url('/')}}"><img class="img-fluid header_logo" src="{{asset('vendor_user3/images/logo.jpg')}}" height="250" width="250"><img class="img-fluid logo_stricky" src="{{asset('vendor_user3/images/logo_stricky.jpg')}}" height="250" width="250"></a></h2>
                        <!-- Menampilkan Menu  -->
                        <?php
                        $data_usermenu = DB::table('user_menu')->where(['access' => 'true'])->get();
                        if (Session::get('role') == '') : ?>
                            <ul id="main-menu" class="sm sm-clean">
                                @foreach($data_usermenu as $du)
                                <?php
                                if ($title == $du->menu) : ?>
                                    <li>
                                    <?php else : ?>
                                    <li>
                                    <?php endif; ?>
                                    <a href="{{url($du->url)}}">
                                        {{$du->menu}}
                                    </a>
                                    <?php
                                    $menuId = $du->id;
                                    $querySubMenu = DB::table('user_sub_menu')
                                        ->select('user_sub_menu.*')
                                        ->join('user_menu', 'user_sub_menu.menu_id', '=', 'user_menu.id')
                                        ->where('user_sub_menu.menu_id', '=', $menuId)
                                        ->get();
                                    ?>
                                    <ul>
                                        @foreach($querySubMenu as $sm)
                                        <li><a href="{{url($sm->url)}}">{{$sm->sub_menu}}</a></li>
                                        @endforeach
                                    </ul>
                                    </li>
                                    @endforeach
                                    <li class="last_menu"><a href="{{url('/auth')}}">Log In</a></li>
                            </ul>
                            <!-- <ul>
                                <form role="search">
                                    <input type="text" id="search" name="search" placeholder="Search here">
                                    <button type="submit" id="search-submit"><i class="fa fa-search"></i></button>
                                </form>
                            </ul> -->
                        <?php else : ?>
                            <!-- isi -->
                        <?php endif; ?>

                        <?php

                        $role = Session::get('role');
                        $queryMenu2 = DB::table('user_menu')
                            ->select('user_menu.id', 'menu', 'url', 'class')
                            ->join('user_access_menu', 'user_menu.id', '=', 'user_access_menu.menu_id')
                            ->where('user_access_menu.role', '=', $role)
                            ->orderBy('user_access_menu.menu_id')
                            ->get();

                        ?>
                        <ul id="main-menu" class="sm sm-clean">
                            @foreach($queryMenu2 as $du)
                            <?php
                            if ($title == $du->menu) : ?>
                                <li>
                                <?php else : ?>
                                <li>
                                <?php endif; ?>

                                <a href="{{url($du->url)}}">
                                    {{$du->menu}}
                                </a>
                                <?php
                                $menuId = $du->id;
                                $querySubMenu = DB::table('user_sub_menu')
                                    ->select('user_sub_menu.*')
                                    ->join('user_menu', 'user_sub_menu.menu_id', '=', 'user_menu.id')
                                    ->where('user_sub_menu.menu_id', '=', $menuId)
                                    ->get();
                                ?>
                                <ul>
                                    @foreach($querySubMenu as $sm)
                                    <li><a href="{{url($sm->url)}}">{{$sm->sub_menu}}</a></li>
                                    @endforeach
                                </ul>
                                </li>
                                @endforeach
                                <?php
                                if (Session::get('role') != null) : ?>
                                    <li class="last_menu"><a href="{{url('/logout')}}">Log Out</a></li>
                                <?php endif; ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- /header end-->

    <!-- /page_banner start-->
    <div class="carousel-item active" style="background-image: url(assets/images/page_banner.png); background-size:cover; height:100px; width:100%;">
        <div class="carousel-caption1">

        </div>
    </div>
    <!-- /page_banner end-->

    <!-- /blog_pages_con start-->
    <div class="blog_pages">
        <div class="container">
            @yield('content')
        </div>
    </div>
    <!-- /blog_pages_con end-->

    <div class="footer_bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>PT. Bank Yudha Bhakti Powered by Digital Banking</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /footer end-->

    <!-- /scroll_to_top start-->
    <a href="#" class="scrollToTop"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
    <!-- /scroll_to_top end-->

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

    <!-- projects-->
    <script src="{{asset('vendor_user3/js/Isotope.js')}}"></script>
    <script src=" {{asset('vendor_user3/js/MagnificPopup.js')}}"></script>

    <!-- header menu -->
    <script src="{{asset('vendor_user3/js/jquery.smartmenus.min.js')}}"></script>

    <!-- carousel slider -->
    <script src=" {{asset('vendor_user3/js/owl.carousel.js')}}"></script>

    <!-- Testimonials slider -->
    <script src="{{asset('vendor_user3/js/cascade-slider.js')}}"></script>

    <!-- youtube video -->
    <script src=" {{asset('vendor_user3/js/grt-youtube-popup.js')}}"></script>

    <!-- images popup -->
    <script src="{{asset('vendor_user3/js/lightbox.js')}}"></script>

    <!-- Global Init -->
    <script src=" {{asset('vendor_user3/js/custom.js')}}"></script>

    <!-- datatable -->


</body>

</html>