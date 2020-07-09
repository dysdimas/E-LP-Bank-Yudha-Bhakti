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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


</head>
<!-- <div id=" loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div> -->
<!-- /header start-->
<header>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="main-nav">
                    <input id="main-menu-state" type="checkbox" />
                    <label class="main-menu-btn" for="main-menu-state"> <span class="main-menu-btn-icon"></span> Toggle main menu visibility </label>
                    <h2 class="nav-brand"><a href="index.html"><img class="img-fluid header_logo" src="{{asset('vendor_user3/images/logo.jpg')}}" height="250" width="250"><img class="img-fluid logo_stricky" src="{{asset('vendor_user3/images/logo_stricky.jpg')}}" height="250" width="250"></a></h2>
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
                                    <li><a href="{{url($sm->url)}}">{{$sm->sub_menu}}</a>
                                    </li>
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
            </div>

            <!-- End menampilkan menu -->
            <!-- <ul id="main-menu" class="sm sm-clean">
                    <li class="active"><a href="index.html">Home</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="services.html">Service</a></li>
                            <li><a href="projects.html">Projects</a></li>
                            <li><a href="team.html">Team</a></li>
                            <li><a href="pricing.html">Pricing</a></li>
                            <li><a href="blog.html">Blog</a>
                            <ul>
                                <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                <li><a href="blog.html">Blog Right Sidebar</a></li>
                                <li><a href="blog-details-left-sidebar.html">Single Left Sidebar</a></li>
                                <li><a href="blog-details.html">Single Right Sidebar</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Pages</a>
                                <ul>
                                    <li><a href="faq.html">Faq</a></li>
                                    <li><a href="accordions.html">Accordions</a></li>
                                    <li><a href="actionboxes.html">Action Boxes</a></li>
                                    <li><a href="alerts.html">Alerts</a></li>
                                    <li><a href="blockquote.html">Blockquote</a></li>
                                    <li><a href="countups.html">Countups</a></li>
                                    <li><a href="featureboxes.html">Feature Boxes</a></li>
                                    <li><a href="404.html">404</a></li>
                                    <li><a href="comingsoon.html">Coming Soon</a></li>
                                </ul>
                            </li>
                            <li class="last_menu"><a href="contact.html">Contact</a></li>
                        </ul> -->
            </nav>
        </div>
    </div>
    </div>
</header>
<!-- /header end-->

<!-- /carousel start-->
<div id="home">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <?php

            use Illuminate\Support\Facades\DB;

            $data_carousel = array(\App\Opcarousel::all());
            ?>
            @foreach($data_carousel as $dc)
            <div class="carousel-item active" style="background-image:url(<?php echo 'carousel/' . $dc[0]->image; ?>); background-size:cover; height:650px; width:100%;">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Hai {{Session::get('name')}}</h3>
                    <h1>E-Learning Portal <br>
                        Bank Yudha Bhakti</h1>
                    <div class="slider_border"></div>
                    <p>We are the unique Consultancy Farm for your problem solution, That is<br>
                        ready to take challenge and knockout your problems</p>
                    <div class="slider_btn"> <a href="http://hto.haybyb.com/login" class="get_started">Test Online</a>
                        <?php
                        if (Session::get('role') != null) {

                            echo '<a href="/feature" class="explore" data-toggle="modal" data-target="#exampleModalCenter">Profile</a>';
                        }

                        ?>
                    </div>
                </div>
            </div>
            <div class="carousel-item" style="background-image:url(<?php echo 'carousel/' . $dc[1]->image; ?>) ; background-size:cover; height:650px; width:100%;">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Hai {{Session::get('name')}}</h3>
                    <h1>E-Learning Portal <br>
                        Bank Yudha Bhakti</h1>
                    <div class="slider_border"></div>
                    <p>We are the unique Consultancy Farm for your problem solution, That is<br>
                        ready to take challenge and knockout your problems</p>
                    <div class="slider_btn"> <a href="http://hto.haybyb.com/login" class="get_started">Test Online</a>
                        <?php
                        if (Session::get('role') != null) {

                            echo '<a href="/feature" class="explore" data-toggle="modal" data-target="#exampleModalCenter">Profile</a>';
                        }

                        ?>
                    </div>
                </div>
            </div>
            <div class="carousel-item" style="background-image:url(<?php echo 'carousel/' . $dc[2]->image; ?>) ; background-size:cover; height:650px; width:100%;">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Hai {{Session::get('name')}}</h3>
                    <h1>E-Learning Portal <br>
                        Bank Yudha Bhakti</h1>
                    <div class="slider_border"></div>
                    <p>We are the unique Consultancy Farm for your problem solution, That is<br>
                        ready to take challenge and knockout your problems</p>
                    <div class="slider_btn"> <a href="http://hto.haybyb.com/login" class="get_started">Test Online</a>
                        <?php
                        if (Session::get('role') != null) {

                            echo '<a href="/feature" class="explore"  data-toggle="modal" data-target="#exampleModalCenter">Profile</a>';
                        }

                        ?>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"> <i class="fa fa-angle-left" aria-hidden="true"></i> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"> <i class="fa fa-angle-right" aria-hidden="true"></i> <span class="sr-only">Next</span> </a>
    </div>
</div>
<!-- /carousel end-->
@if(session('sukses'))
<br>
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{session('sukses')}}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
{{-- menampilkan error validasi --}}
@if (count($errors) > 0)
<br>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <ul>
        @foreach ($errors->all() as $error)
        <span>{{ $error }}|</span>
        @endforeach
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </ul>
</div>
@endif
@yield('content')

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
<!-- /footer end -->

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">NIK : {{Session::get('nik')}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="outer-repeater" method="post" action="{{url('/updatepassworduser/'.Session::get('id').'')}}">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="inner-box"> <img class="img-fluid" src="{{asset('vendor_user/img/core-img/profile.png')}}" alt=""> </div>
                        </div>
                        <div class="col-md-6">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Password</label>
                                <input type="password" class="form-control" name="password" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Re-Type Password</label>
                                <input type="password" class="form-control" name="password2" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="thm-btn">Change Password</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- /scroll_to_top start -->
<a href="#" class="scrollToTop"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
<!-- /scroll_to_top start -->

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
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>

</html>