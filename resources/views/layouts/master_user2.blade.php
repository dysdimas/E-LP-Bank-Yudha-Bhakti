<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>{{$title}}</title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('vendor_user/img/core-img/byb.ico')}}">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{asset('vendor_user/style.css')}}">

    <!-- Fontawesome  -->
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.css')}}">




</head>

<body>
    <script>
        document.addEventListener("contextmenu", function(e) {
            e.preventDefault();
        }, false);
    </script>
    <?php

    use Illuminate\Support\Facades\Session;
    use Illuminate\Support\Facades\DB;
    ?>
    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="top-header-content d-flex align-items-center justify-content-between">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="{{url('/')}}"><img src="{{asset('vendor_user/img/core-img/yudha.png')}}" alt=""></a>
                            </div>

                            <!-- Login Search Area -->
                            <div class="login-search-area d-flex align-items-center">
                                <!-- Login -->
                                <div class="login d-flex">
                                    <!-- Button trigger modal -->
                                    <?php
                                    if (!Session::get('name')) : ?>
                                        <a href="#" data-toggle="modal" data-target=".bd-example-modal-sm">Login</a>
                                        <a href="#">Activation</a>
                                    <?php else : ?>
                                        <a>Hai {{Session::get('name')}}</a>
                                    <?php endif; ?>
                                    <!-- Logout -->
                                    <?php
                                    if (Session::get('name')) : ?>
                                        <a href="{{url('/logout')}}">Logout</a>
                                    <?php else : ?>
                                        <a href="#"></a>
                                    <?php endif; ?>
                                </div>
                                <!-- Search Form -->
                                <div class="search-form">
                                    <form action="#" method="post">
                                        <input type="search" name="search" class="form-control" placeholder="Search">
                                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="newspaper-main-menu" id="stickyMenu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="newspaperNav">
                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <!-- Menampilkan Menu  -->
                            <?php
                            $data_usermenu = DB::table('user_menu')->where(['access' => 'true'])->get();
                            if (Session::get('role') == '') : ?>
                                <div class="classynav">
                                    <ul>
                                        @foreach($data_usermenu as $du)
                                        <?php
                                        if ($title == $du->menu) : ?>
                                            <li class="active">
                                            <?php else : ?>
                                            <li class="">
                                            <?php endif; ?>

                                            <a href="{{url($du->url)}}">{{$du->menu}}</a>
                                            <?php
                                            $menuId = $du->id;
                                            $querySubMenu = DB::table('user_sub_menu')
                                                ->select('user_sub_menu.*')
                                                ->join('user_menu', 'user_sub_menu.menu_id', '=', 'user_menu.id')
                                                ->where('user_sub_menu.menu_id', '=', $menuId)
                                                ->get();
                                            ?>
                                            <ul class="dropdown">
                                                @foreach($querySubMenu as $sm)
                                                <li><a href="{{url($sm->url)}}">{{$sm->sub_menu}}</a></li>
                                                @endforeach
                                            </ul>
                                            </li>
                                            @endforeach
                                    </ul>
                                </div>
                            <?php else : ?>
                                <!-- isi -->
                            <?php endif; ?>

                            <?php

                            $role = Session::get('role');
                            $queryMenu2 = DB::table('user_menu')
                                ->select('user_menu.id', 'menu', 'url')
                                ->join('user_access_menu', 'user_menu.id', '=', 'user_access_menu.menu_id')
                                ->where('user_access_menu.role', '=', $role)
                                ->orderBy('user_access_menu.menu_id')
                                ->get();

                            ?>
                            <div class="classynav">
                                <ul>
                                    @foreach($queryMenu2 as $du)
                                    <?php
                                    if ($title == $du->menu) : ?>
                                        <li class="active">
                                        <?php else : ?>
                                        <li class="">
                                        <?php endif; ?>

                                        <a href="{{url($du->url)}}">{{$du->menu}}</a>
                                        <?php
                                        $menuId = $du->id;
                                        $querySubMenu = DB::table('user_sub_menu')
                                            ->select('user_sub_menu.*')
                                            ->join('user_menu', 'user_sub_menu.menu_id', '=', 'user_menu.id')
                                            ->where('user_sub_menu.menu_id', '=', $menuId)
                                            ->get();
                                        ?>
                                        <ul class="dropdown">
                                            @foreach($querySubMenu as $sm)
                                            <li><a href="{{url($sm->url)}}">{{$sm->sub_menu}}</a></li>
                                            @endforeach
                                        </ul>
                                        </li>
                                        @endforeach
                                </ul>
                            </div>
                            <!-- End menampilkan menu -->
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->
    <!-- ##### Form Validation Login ##### -->
    @if($errors->has('nik'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>
            <marquee scrollamount="10">
                {{ $errors->first('nik') }}
            </marquee>
        </strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    @if($errors->has('password'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>
            <marquee scrollamount="10">
                {{ $errors->first('password') }}
            </marquee>
        </strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    @if(session('gagal'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>
            <marquee scrollamount="10">
                {{session('gagal')}}
            </marquee>
        </strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <!-- ##### End form Validation Login ##### -->
    <!-- ##### Hero Area Start ##### -->
    <div class="hero-area">
        <div class="container">
            <div class="row align-items">
                <div class="col-12 col-lg-8">
                    <?php if (!Session::get('role')) : ?>
                        <marquee behavior="" direction="">
                            <font color="red"><b>Untuk menggunakan fitur lain anda harus melakukan aktivasi akun dan login</b></font>
                        </marquee>
                    <?php endif; ?>
                    <!-- Breaking News Widget -->
                    <?php

                    use App\Opfeature;
                    use App\Opsugcom;

                    $data_opfeature = Opfeature::take(1)->orderBy('time', 'DESC')->get();
                    ?>
                    <div class="breaking-news-area d-flex align-items-center">
                        <div class="news-title">
                            <p>Breaking News</p>
                        </div>
                        <div id="breakingNewsTicker" class="ticker">
                            <ul>
                                @foreach($data_opfeature as $of)
                                <li><a href="#">{{$of->subtitle}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <!-- Breaking News Widget -->
                    <?php
                    $data_opvideos = \App\Opvideos::all();
                    ?>
                    <div class="breaking-news-area d-flex align-items-center mt-15">
                        <div class="news-title title2">
                            <p>Watch On</p>
                        </div>
                        <div id="internationalTicker" class="ticker">
                            <ul>
                                @foreach($data_opvideos as $ov)
                                <li><a href="{{$ov->url}}">{{$ov->url}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <hr>
                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                        <div class="carousel-inner" style=" width:100%; height: 375px !important;">
                            <div class="carousel-item active">
                                <img src="{{asset('imagesfeature/byb2.jpg')}}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('imagesfeature/1578984352.jpeg')}}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('imagesfeature/byb3.jpg')}}" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-4" align="center">

                    <!-- Suggestion & Comments -->
                    <div class="card direct-chat direct-chat-warning">
                        <div class="card-header">
                            <h4 class="card-title" align="center">
                                <font color="red">Suggestion & Comments</font>
                            </h4>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <br>
                            <!-- Conversations are loaded here -->
                            <div class="direct-chat-messages">
                                <!-- Message. Default to the left -->
                                <div class="direct-chat-msg">
                                    <?php
                                    $querySugcom = Opsugcom::take(3)->orderBy('time_post', 'DESC')->get();
                                    ?>
                                    @foreach($querySugcom as $sc)
                                    <div class="direct-chat-infos clearfix">
                                        <span class="direct-chat-name float-left"><b>
                                                <font color='red'>{{$sc->name}}</font>
                                            </b></span>
                                        <span class="direct-chat-timestamp float-right"><b>{{date('l, d F Y',strtotime($sc->time_post))}}</b></span>
                                    </div>
                                    <!-- /.direct-chat-img -->
                                    <div class="direct-chat-text" align="left">
                                        {{substr($sc->message, 0, 70)}}<span>..... <a href="">
                                                <font color='red'>more</font>
                                            </a> </span>
                                    </div>
                                    <br>
                                    @endforeach
                                    <!-- /.direct-chat-text -->
                                </div>
                                <!-- /.direct-chat-msg -->
                                <!-- /.direct-chat-msg -->
                            </div>
                            <!--/.direct-chat-messages-->
                        </div>
                        <!-- /.card-body -->
                        <?php
                        if (Session::get('name')) : ?>
                            <div class="card-footer">
                                <form action="{{url('/cr_sugcom')}}" method="post">
                                    {{ csrf_field() }}
                                    <div class="input-group">
                                        <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                                        <input type="text" name="time_post" class="form-control" value="{{date('Y-m-d h:i:s')}}" hidden>
                                        <span class="input-group-append">
                                            <button type="submit" class="btn btn-danger">Send</button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        <?php else : ?>
                            <div class="card-footer">
                                <marquee behavior="" direction="">
                                    <font color="red"><b>You must login for comment</b></font>
                                </marquee>
                                </form>
                            </div>
                        <?php endif; ?>
                        <!-- /.card-footer-->
                    </div>
                    <hr>
                    <!-- End Suggestion & Comments -->
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Hero Area End ##### -->



    <!-- ##### Featured Post Area Start ##### -->
    <div class="featured-post-area">

        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-8" style="border: 0px solid rgb(204, 204, 204);padding: 15px; overflow: auto; width: 100px; height: 1000px;background-color: rgb(255, 255, 255);">
                    @yield('content')
                    @yield('auth')
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="section-heading">
                        <h6>Popular News</h6>
                    </div>
                    @foreach($data_opfeature as $of)
                    <!-- Single Featured Post -->
                    <div class="scroll" data-spy="scroll">
                        <div class="single-blog-post small-featured-post d-flex">
                            <div class="post-thumb">
                                <a href="{{url('feature/'.$of->id)}}"><img src="{{asset('imagesfeature/'.$of->image.'')}}" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href="{{url('feature/'.$of->id)}}" class="post-catagory">{{$of->title}}</a>
                                <div class="post-meta">
                                    <a href="{{url('feature/'.$of->id)}}" class="post-title">
                                        <h6>{{$of->subtitle}}</h6>
                                    </a>
                                    <p class=<span>{{date('l, d F Y',strtotime($of->time))}}</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- ##### Featured Post Area End ##### -->
        <br><br>
        <!-- ##### Video Post Area Start ##### -->
        <div class="video-post-area bg-img bg-overlay">
            <div class="container">
                <div class="row justify-content-center">
                    <!-- Single Video Post -->
                    @foreach($data_opvideos as $ov)
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="single-video-post">
                            <img src="{{asset('images/'.$ov->image.'')}}" alt="" style=" width:100%; height: 230px !important;">
                            <!-- Video Button -->
                            <div class="videobtn">
                                <a href="{{$ov->url}}" class="videoPlayer"><i class="fa fa-play" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- ##### Video Post Area End ##### -->

        <!-- ##### Footer Area Start ##### -->
        <footer class="footer-area">

            <!-- Bottom Footer Area -->
            <div class="bottom-footer-area">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-6">
                            <!-- Copywrite -->
                            <p>
                                <a href="https://www.yudhabhakti.co.id" target="_blank">PT.Bank Yudha Bhakti.Tbk</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                        <div class="col-6" align="right">
                            <!-- Copywrite -->
                            <p>
                                <a href="https://www.yudhabhakti.co.id"><i class="fab fa-instagram fa-2x"></i></a>
                                &nbsp;
                                <a href="https://www.yudhabhakti.co.id"><i class="fab fa-facebook fa-2x"></i></a>
                                &nbsp;
                                <a href="https://www.yudhabhakti.co.id"><i class="fab fa-youtube fa-2x"></i></a>
                                &nbsp;
                                <a href="https://www.yudhabhakti.co.id"><i class="fab fa-twitter fa-2x"></i></a>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- ##### Footer Area Start ##### -->

        <!-- ##### All Javascript Files ##### -->
        <!-- jQuery-2.2.4 js -->
        <script src="{{asset('vendor_user/js/jquery/jquery-2.2.4.min.js')}}"></script>
        <!-- Popper js -->
        <script src="{{asset('vendor_user/js/bootstrap/popper.min.js')}}"></script>
        <!-- Bootstrap js -->
        <script src="{{asset('vendor_user/js/bootstrap/bootstrap.min.js')}}"></script>
        <!-- All Plugins js -->
        <script src="{{asset('vendor_user/js/plugins/plugins.js')}}"></script>
        <!-- Active js -->
        <script src="{{asset('vendor_user/js/active.js')}}"></script>
    </div>

    <!-- Login modal -->
    <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <!-- ##### Hero Area Start ##### -->
                <div>
                    <div class="newsletter-widget">
                        <h4>Login</h4>
                        <hr>
                        <hr>
                        <form action="{{url('/authentic')}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="col-sm-4">
                                <div class="form-group has-feedback{{ $errors->has('nik') ? ' has-error ' : '' }}">
                                    <input type="text" name="nik" placeholder="Input nomor induk kependudukan" required>
                                </div>
                            </div>
                            <div class="ml-3">
                                <div class="form-group has-feedback{{ $errors->has('nik') ? ' has-error ' : '' }}">
                                    <input type="password" name="password" placeholder="Input password" required>
                                </div>
                            </div>
                            <button type="submit">Login</button>
                        </form>
                    </div>
                </div>
                <!-- ##### Hero Area End ##### -->
            </div>
        </div>
    </div>
</body>

</html>