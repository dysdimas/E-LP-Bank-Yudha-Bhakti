<!doctype html>
<html lang="en" class="no-js">

<head>
    <title>Hay - Dms</title>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="shortcut icon" href="{{asset('vendor_user/img/core-img/hay.ico')}}">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,400italic' rel='stylesheet' type='text/css'>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor_user/css/bootstrap.min.css')}}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor_user/css/jquery.bxslider.css')}}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor_user/css/font-awesome.css')}}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor_user/css/magnific-popup.css')}}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor_user/css/owl.carousel.css')}}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor_user/css/owl.theme.css')}}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor_user/css/ticker-style.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('vendor_user/css/style.css')}}" media="screen">
    <!-- DataTable -->
    <link href="{{asset('vendor_user/DataTables/datatables.min.css')}}" rel="stylesheet" type="text/css">
</head>

<body class="boxed">
    <!-- Container -->
    <div id="container">
        <?php

        use Illuminate\Support\Facades\Session;
        use Illuminate\Support\Facades\DB;
        ?>
        <!-- Header
		    ================================================== -->
        <header class="clearfix second-style">
            <!-- Bootstrap navbar -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation">

                <!-- Top line -->
                <div class="top-line">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9">
                                <ul class="top-line-list">
                                    <li>
                                        <span class="city-weather">Jakarta, Indonesia</span>
                                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="30px" height="24px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
                                            <path fill="#777777" d="M208,64c8.833,0,16-7.167,16-16V16c0-8.833-7.167-16-16-16s-16,7.167-16,16v32
												C192,56.833,199.167,64,208,64z M332.438,106.167l22.625-22.625c6.249-6.25,6.249-16.375,0-22.625
												c-6.25-6.25-16.375-6.25-22.625,0l-22.625,22.625c-6.25,6.25-6.25,16.375,0,22.625
												C316.062,112.417,326.188,112.417,332.438,106.167z M16,224h32c8.833,0,16-7.167,16-16s-7.167-16-16-16H16
												c-8.833,0-16,7.167-16,16S7.167,224,16,224z M352,208c0,8.833,7.167,16,16,16h32c8.833,0,16-7.167,16-16s-7.167-16-16-16h-32
												C359.167,192,352,199.167,352,208z M83.541,106.167c6.251,6.25,16.376,6.25,22.625,0c6.251-6.25,6.251-16.375,0-22.625
												L83.541,60.917c-6.25-6.25-16.374-6.25-22.625,0c-6.25,6.25-6.25,16.375,0,22.625L83.541,106.167z M400,256
												c-5.312,0-10.562,0.375-15.792,1.125c-16.771-22.875-39.124-40.333-64.458-51.5C318.459,145,268.938,96,208,96
												c-61.75,0-112,50.25-112,112c0,17.438,4.334,33.75,11.5,48.438C47.875,258.875,0,307.812,0,368c0,61.75,50.25,112,112,112
												c13.688,0,27.084-2.5,39.709-7.333C180.666,497.917,217.5,512,256,512c38.542,0,75.333-14.083,104.291-39.333
												C372.916,477.5,386.312,480,400,480c61.75,0,112-50.25,112-112S461.75,256,400,256z M208,128c39.812,0,72.562,29.167,78.708,67.25
												c-10.021-2-20.249-3.25-30.708-3.25c-45.938,0-88.5,19.812-118.375,53.25C131.688,234.083,128,221.542,128,208
												C128,163.812,163.812,128,208,128z M400,448c-17.125,0-32.916-5.5-45.938-14.667C330.584,461.625,295.624,480,256,480
												c-39.625,0-74.584-18.375-98.062-46.667C144.938,442.5,129.125,448,112,448c-44.188,0-80-35.812-80-80s35.812-80,80-80
												c7.75,0,15.062,1.458,22.125,3.541c2.812,0.792,5.667,1.417,8.312,2.521c4.375-8.562,9.875-16.396,15.979-23.75
												C181.792,242.188,216.562,224,256,224c10.125,0,19.834,1.458,29.25,3.709c10.562,2.499,20.542,6.291,29.834,11.291
												c23.291,12.375,42.416,31.542,54.457,55.063C378.938,290.188,389.209,288,400,288c44.188,0,80,35.812,80,80S444.188,448,400,448z" />
                                        </svg>
                                        <span class="cel-temperature">+7</span>
                                    </li>
                                    <li><span class="time-now">{{date('l, d-m-Y')}}</span></li>
                                    <?php
                                    if (!Session::get('name')) : ?>
                                        <li><a href="{{url('/auth')}}">Log In</a></li>
                                    <?php else : ?>
                                        <?php if (Session::get('role') == 1) : ?>
                                            <li><a href="{{url('/admin')}}">Hay {{Session::get('name')}}</a></li>
                                        <?php else : ?>
                                            <li><a href="{{url('/profile')}}">Hay {{Session::get('name')}}</a></li>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                    <!-- Logout -->
                                    <?php
                                    if (Session::get('name')) : ?>
                                        <li><a href="{{url('/logout')}}">Logout</a></li>
                                    <?php else : ?>
                                        <a href="#"></a>
                                    <?php endif; ?>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <ul class="social-icons">
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="rss" href="#"><i class="fa fa-rss"></i></a></li>
                                    <li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Top line -->

                <!-- Logo & advertisement -->
                <div class="logo-advertisement">
                    <div class="container">

                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#"><img src="{{asset('vendor_user/img/bg-img/banner.png')}}" alt=""></a>
                        </div>
                    </div>
                </div>
                <!-- End Logo & advertisement -->

                <!-- End Logo & advertisement
                <!-- navbar list container -->
                <div class="nav-list-container">
                    <div class="container">
                        <!-- Menampilkan Menu  -->
                        <?php
                        $data_usermenu = DB::table('user_menu')->where(['access' => 'true'])->get();
                        if (Session::get('role') == '') : ?>
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav navbar-left">
                                    @foreach($data_usermenu as $du)
                                    <?php
                                    if ($title == $du->menu) : ?>
                                        <li class="drop">
                                        <?php else : ?>
                                        <li class="drop">
                                        <?php endif; ?>
                                        <a class="{{$du->class}}" href="{{url($du->url)}}">
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
                                        <ul class="dropdown">
                                            @foreach($querySubMenu as $sm)
                                            <li><a href="{{url($sm->url)}}">{{$sm->sub_menu}}</a></li>
                                            @endforeach
                                        </ul>
                                        </li>
                                        @endforeach
                                </ul>
                                <!-- <ul>
                                    <form role="search">
                                        <input type="text" id="search" name="search" placeholder="Search here">
                                        <button type="submit" id="search-submit"><i class="fa fa-search"></i></button>
                                    </form>
                                </ul> -->
                            </div>
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
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-left">
                                @foreach($queryMenu2 as $du)
                                <?php
                                if ($title == $du->menu) : ?>
                                    <li class="drop">
                                    <?php else : ?>
                                    <li class="drop">
                                    <?php endif; ?>

                                    <a class="{{$du->class}}" href="{{url($du->url)}}">
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
                    </div>
                </div>
                <!-- /.navbar-collapse -->

                <!-- End navbar list container -->

            </nav>
            <!-- End Bootstrap navbar -->

        </header>
        <!-- End Header -->

        <!-- heading-news-section2
            ================================================== -->

        <section class="heading-news2">

            <div class="container">

                <div class="ticker-news-box">
                    <span class="breaking-news">breaking news</span>
                    <ul id="js-news">
                        @foreach($data_breaking as $db)
                            <li class="news-item"><span class="time-news">{{date('l, d F Y',strtotime($db->updated_at))}}</span> <a href="{{$db->link}}">{{$db->description}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="iso-call heading-news-box">
                    <div class="image-slider snd-size">
                        <span class="top-stories">TOP STORIES</span>
                        @foreach($data_ophot as $dop)
                        <ul class="bxslider">
                            <li>
                                <div class="news-post image-post">
                                    <img src="{{asset('imageshotnews/'.$dop[0]->image.'')}}" height="474" alt="">
                                    <div class="hover-box">
                                        <div class="inner-hover">
                                            <a class="category-post travel" href="{{url('/hotnews'.$dop[0]->id.'')}}">{{$dop[0]->title}}</a>
                                            <h2><a href="{{url('/hotnews/'.$dop[0]->id.'')}}">{{$dop[0]->subtitle}}</a></h2>
                                            <ul class="post-tags">
                                                <li><i class="fa fa-clock-o"></i>{{date('l, d F Y',strtotime($dop[0]->updated_at))}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="news-post image-post">
                                    <img src="{{asset('imageshotnews/'.$dop[1]->image.'')}}" height="474" alt="">
                                    <div class="hover-box">
                                        <div class="inner-hover">
                                            <a class="category-post travel" href="{{url('/hotnews/'.$dop[1]->id.'')}}">{{$dop[1]->title}}</a>
                                            <h2><a href="{{url('/hotnews/'.$dop[1]->id.'')}}">{{$dop[1]->subtitle}}</a></h2>
                                            <ul class="post-tags">
                                                <li><i class="fa fa-clock-o"></i>{{date('l, d F Y',strtotime($dop[1]->updated_at))}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="news-post image-post">
                                    <img src="{{asset('imageshotnews/'.$dop[2]->image.'')}}" height="474" alt="">
                                    <div class="hover-box">
                                        <div class="inner-hover">
                                            <a class="category-post travel" href="{{url('/hotnews/'.$dop[2]->id.'')}}">{{$dop[2]->title}}</a>
                                            <h2><a href="{{url('/hotnews/'.$dop[2]->id.'')}}">{{$dop[2]->subtitle}}</a></h2>
                                            <ul class="post-tags">
                                                <li><i class="fa fa-clock-o"></i>{{date('l, d F Y',strtotime($dop[2]->updated_at))}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        @endforeach
                    </div>

                    @foreach($data_ophot as $dop)
                    <div class="news-post image-post default-size">
                        <img src="{{asset('imageshotnews/'.$dop[3]->image.'')}}" height="232" alt="">
                        <div class="hover-box">
                            <div class="inner-hover">
                                <a class="category-post travel" href="{{url('/hotnews/'.$dop[3]->id.'')}}">{{$dop[3]->title}}</a>
                                <h2><a href="{{url('/hotnews/'.$dop[3]->id.'')}}">{{$dop[3]->subtitle}}</a></h2>
                                <ul class="post-tags">
                                    <li><i class="fa fa-clock-o"></i><span>{{date('l, d F Y',strtotime($dop[3]->updated_at))}}</span></li>
                                </ul>
                                <p>{{$of->subtitle}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @foreach($data_ophot as $dop)
                    <div class="news-post image-post default-size">
                        <img src="{{asset('imageshotnews/'.$dop[4]->image.'')}}" height="232" alt="">
                        <div class="hover-box">
                            <div class="inner-hover">
                                <a class="category-post travel" href="{{url('/hotnews/'.$dop[4]->id.'')}}">{{$dop[4]->title}}</a>
                                <h2><a href="{{url('/hotnews/'.$dop[4]->id.'')}}">{{$dop[4]->subtitle}}</a></h2>
                                <ul class="post-tags">
                                    <li><i class="fa fa-clock-o"></i><span>{{date('l, d F Y',strtotime($dop[4]->updated_at))}}</span></li>
                                </ul>
                                <p>{{$of->subtitle}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @foreach($data_ophot as $dop)
                    <div class="news-post image-post default-size">
                        <img src="{{asset('imageshotnews/'.$dop[5]->image.'')}}" height="232" alt="">
                        <div class="hover-box">
                            <div class="inner-hover">
                                <a class="category-post travel" href="{{url('/hotnews/'.$dop[5]->id.'')}}">{{$dop[5]->title}}</a>
                                <h2><a href="{{url('/hotnews/'.$dop[5]->id.'')}}">{{$dop[5]->subtitle}}</a></h2>
                                <ul class="post-tags">
                                    <li><i class="fa fa-clock-o"></i><span>{{date('l, d F Y',strtotime($dop[5]->updated_at))}}</span></li>
                                </ul>
                                <p>{{$of->subtitle}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @foreach($data_ophot as $dop)
                    <div class="news-post image-post default-size">
                        <img src="{{asset('imageshotnews/'.$dop[6]->image.'')}}" height="232" alt="">
                        <div class="hover-box">
                            <div class="inner-hover">
                                <a class="category-post travel" href="{{url('/hotnews/'.$dop[6]->id.'')}}">{{$dop[6]->title}}</a>
                                <h2><a href="{{url('/hotnews/'.$dop[6]->id.'')}}">{{$dop[6]->subtitle}}</a></h2>
                                <ul class="post-tags">
                                    <li><i class="fa fa-clock-o"></i><span>{{date('l, d F Y',strtotime($dop[6]->updated_at))}}</span></li>
                                </ul>
                                <p>{{$of->subtitle}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </section>
        <!-- <section class="heading-news2">

            <div class="container">

                <div class="ticker-news-box">
                    <span class="breaking-news">breaking news</span>
                    <ul id="js-news">
                        <li class="news-item"><span class="time-news"></span> <a href="#">Ikuti Tes Online Hari ini pukul 16:00 Wib, Klik kata ini untuk melakukan tes online </li>
                        <li class="news-item"><span class="time-news"></span> <a href="#">Ikuti Tes Online Hari ini pukul 16:00 Wib, Klik kata ini untuk melakukan tes online </li>
                    </ul>
                </div>
                <div class="iso-call heading-news-box">
                    <div class="image-slider snd-size">
                        <span class="top-stories">TOP STORIES</span>
                        @foreach($data_ophot as $dop)
                        <ul class="bxslider">
                            <li>
                                <div class="news-post image-post">
                                    <img src="{{asset('imageshotnews/'.$dop[0]->image.'')}}" height="474" alt="">
                                    <div class="hover-box">
                                        <div class="inner-hover">
                                            <a class="category-post sport" href="{{url('/hotnews'.$dop[0]->id.'')}}">{{$dop[0]->title}}</a>
                                            <h2><a href="{{url('/hotnews/'.$dop[0]->id.'')}}">{{$dop[0]->subtitle}}</a></h2>
                                            <ul class="post-tags">
                                                <li><i class="fa fa-clock-o"></i>{{date('l, d F Y',strtotime($dop[0]->updated_at))}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="news-post image-post">
                                    <img src="{{asset('imageshotnews/'.$dop[1]->image.'')}}" height="474" alt="">
                                    <div class="hover-box">
                                        <div class="inner-hover">
                                            <a class="category-post sport" href="{{url('/hotnews/'.$dop[1]->id.'')}}">{{$dop[1]->title}}</a>
                                            <h2><a href="{{url('/hotnews/'.$dop[1]->id.'')}}">{{$dop[1]->subtitle}}</a></h2>
                                            <ul class="post-tags">
                                                <li><i class="fa fa-clock-o"></i>{{date('l, d F Y',strtotime($dop[1]->updated_at))}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="news-post image-post">
                                    <img src="{{asset('imageshotnews/'.$dop[2]->image.'')}}" height="474" alt="">
                                    <div class="hover-box">
                                        <div class="inner-hover">
                                            <a class="category-post sport" href="{{url('/hotnews/'.$dop[2]->id.'')}}">{{$dop[2]->title}}</a>
                                            <h2><a href="{{url('/hotnews/'.$dop[2]->id.'')}}">{{$dop[2]->subtitle}}</a></h2>
                                            <ul class="post-tags">
                                                <li><i class="fa fa-clock-o"></i>{{date('l, d F Y',strtotime($dop[2]->updated_at))}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        @endforeach
                    </div>
                    @foreach($data_ophot as $dop)
                    <div class="news-post image-post default-size">
                        <img src="{{asset('imageshotnews/'.$dop[3]->image.'')}}" height="232" alt="">
                        <div class="hover-box">
                            <div class="inner-hover">
                                <a class="category-post travel" href="{{url('/hotnews/'.$dop[3]->id.'')}}">{{$dop[3]->title}}</a>
                                <h2><a href="{{url('/hotnews/'.$dop[3]->id.'')}}">{{$dop[3]->subtitle}}</a></h2>
                                <ul class="post-tags">
                                    <li><i class="fa fa-clock-o"></i><span>{{date('l, d F Y',strtotime($dop[3]->updated_at))}}</span></li>
                                </ul>
                                <p>{{$of->subtitle}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @foreach($data_ophot as $dop)
                    <div class="news-post image-post default-size">
                        <img src="{{asset('imageshotnews/'.$dop[4]->image.'')}}" height="232" alt="">
                        <div class="hover-box">
                            <div class="inner-hover">
                                <a class="category-post travel" href="{{url('/hotnews/'.$dop[4]->id.'')}}">{{$dop[4]->title}}</a>
                                <h2><a href="{{url('/hotnews/'.$dop[4]->id.'')}}">{{$dop[4]->subtitle}}</a></h2>
                                <ul class="post-tags">
                                    <li><i class="fa fa-clock-o"></i><span>{{date('l, d F Y',strtotime($dop[4]->updated_at))}}</span></li>
                                </ul>
                                <p>{{$of->subtitle}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @foreach($data_ophot as $dop)
                    <div class="news-post image-post default-size">
                        <img src="{{asset('imageshotnews/'.$dop[5]->image.'')}}" height="232" alt="">
                        <div class="hover-box">
                            <div class="inner-hover">
                                <a class="category-post travel" href="{{url('/hotnews/'.$dop[5]->id.'')}}">{{$dop[5]->title}}</a>
                                <h2><a href="{{url('/hotnews/'.$dop[5]->id.'')}}">{{$dop[5]->subtitle}}</a></h2>
                                <ul class="post-tags">
                                    <li><i class="fa fa-clock-o"></i><span>{{date('l, d F Y',strtotime($dop[5]->updated_at))}}</span></li>
                                </ul>
                                <p>{{$of->subtitle}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @foreach($data_ophot as $dop)
                    <div class="news-post image-post default-size">
                        <img src="{{asset('imageshotnews/'.$dop[6]->image.'')}}" height="232" alt="">
                        <div class="hover-box">
                            <div class="inner-hover">
                                <a class="category-post travel" href="{{url('/hotnews/'.$dop[6]->id.'')}}">{{$dop[6]->title}}</a>
                                <h2><a href="{{url('/hotnews/'.$dop[6]->id.'')}}">{{$dop[6]->subtitle}}</a></h2>
                                <ul class="post-tags">
                                    <li><i class="fa fa-clock-o"></i><span>{{date('l, d F Y',strtotime($dop[6]->updated_at))}}</span></li>
                                </ul>
                                <p>{{$of->subtitle}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </section> -->
        <!-- End heading-news-section -->

        <!-- block-wrapper-section
			================================================== -->
        <section class="block-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">

                        <!-- block content -->
                        <div class="block-content">
                            @yield('content')
                        </div>
                        <!-- End block content -->

                    </div>

                    <div class="col-sm-4">
                        <!-- sidebar -->
                        <div class="sidebar">
                            <div class="widget search-widget">
                                <form role="search" class="search-form">
                                    <input type="text" id="search" name="search" placeholder="Search here">
                                    <button type="submit" id="search-submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>

                            <!-- <div class="widget social-widget">
                                <div class="title-section">
                                    <h1><span>Application</span></h1>
                                </div>
                                <ul class="social-share">
                                    <li>
                                        <a href="#" class="rss"><i class="fa fa-ad"></i></a>
                                        <span class="number">9,455</span>
                                        <span>Subscribers</span>
                                    </li>
                                    <li>
                                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                        <span class="number">56,743</span>
                                        <span>Fans</span>
                                    </li>
                                    <li>
                                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                        <span class="number">43,501</span>
                                        <span>Followers</span>
                                    </li>
                                    <li>
                                        <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                                        <span class="number">35,003</span>
                                        <span>Followers</span>
                                    </li>
                                </ul>
                            </div> -->

                            <div class="widget tab-posts-widget">

                                <ul class="nav nav-tabs" id="myTab">
                                    <li class="active">
                                        <a href="#option1" data-toggle="tab">Education</a>
                                    </li>
                                    <li>
                                        <a href="#option2" data-toggle="tab">SBS</a>
                                    </li>
                                    <li>
                                        <a href="#option3" data-toggle="tab">SBDK</a>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                    <div class="tab-pane active" id="option1">
                                        <ul class="list-posts">
                                            <?php

                                            use App\Dictionary;

                                            $data_diction = Dictionary::take(5)->orderByRaw('RAND()')->get();
                                            ?>
                                            @foreach($data_diction as $de)
                                            <li>
                                                <img src="{{asset('imagesdiction/'.$de->image.'')}}" height="65" alt="">
                                                <div class="post-content">
                                                    <h2><a href="{{url('/diction/'.$de->id.'')}}">{{$de->title}}</a></h2>
                                                    <ul class="post-tags">
                                                        <li><i class="fa fa-clock-o"></i>{{date('l, d F Y',strtotime($de->updated_at))}}</li>
                                                    </ul>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="option2">
                                        <ul class="list-posts">
                                            <div class="table table-bordered table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr align="center">
                                                            <th class="align-middle">
                                                                <font color="black">Description</font>
                                                            </th>
                                                            <th class="align-middle">
                                                                <font color="black"></font>
                                                            </th>
                                                            <th>
                                                                <font color="black">1 bln</font>
                                                            </th>
                                                            <th>
                                                                <font color="black">3 bln</font>
                                                            </th>
                                                            <th>
                                                                <font color="black">6 bln</font>
                                                            </th>
                                                            <th>
                                                                <font color="black">12 bln</font>
                                                            </th>
                                                        </tr>

                                                    </thead>
                                                    <tbody>
                                                        <form action="{{url('/update/{id}')}}" method="post">
                                                            @foreach($data_deprate as $dd)
                                                            <tr>
                                                                <td>
                                                                    <div class="pagination-box">
                                                                        <ul class="pagination-list">
                                                                            <li><a class="active">{{$dd->description}}</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="pagination-box">
                                                                        <ul class="pagination-list">
                                                                            <li><a class="active">></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="pagination-box">
                                                                        <ul class="pagination-list">
                                                                            <li><a class="active">{{$dd->onem}}</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="pagination-box">
                                                                        <ul class="pagination-list">
                                                                            <li><a class="active">{{$dd->twom}}</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="pagination-box">
                                                                        <ul class="pagination-list">
                                                                            <li><a class="active">{{$dd->threem}}</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="pagination-box">
                                                                        <ul class="pagination-list">
                                                                            <li><a class="active">{{$dd->twelm}}</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                        </form>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="option3">
                                        <ul class="list-posts">
                                            <div class="table table-bordered table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr align="center">
                                                            <th class="align-middle">
                                                                <font color="black">Segmen</font>
                                                            </th>
                                                            <th class="align-middle">
                                                                <font color="black"></font>
                                                            </th>
                                                            <th>
                                                                <font color="black">Sbdk</font>
                                                            </th>
                                                        </tr>

                                                    </thead>
                                                    <tbody>
                                                        <form action="{{url('/update/{id}')}}" method="post">
                                                            @foreach($data_sbdk as $ds)
                                                            <tr>
                                                                <td>
                                                                    <div class="pagination-box">
                                                                        <ul class="pagination-list">
                                                                            <li><a class="active">{{$ds->segmen}}</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="pagination-box">
                                                                        <ul class="pagination-list">
                                                                            <li><a class="active">></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="pagination-box">
                                                                        <ul class="pagination-list">
                                                                            <li><a class="active">{{$ds->sbdk}}</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                        </form>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="widget features-slide-widget">
                                <div class="title-section">
                                    <h1><span>BOD Featured</span></h1>
                                </div>
                                <?php

                                use App\Opceom;
                                use App\Opmfbod;

                                $data_opceom = Opceom::take(1)->orderByRaw('RAND()')->get();
                                $data_opmfbod = Opmfbod::take(3)->orderByRaw('RAND()')->get();
                                ?>
                                <div class="image-post-slider">
                                    <ul class="bxslider">
                                        @foreach($data_opceom as $doc)
                                        <li>
                                            <div class="news-post image-post2">
                                                <div class="post-gallery">
                                                    <img src="{{asset('imagesceom/'.$doc->image.'')}}" height="320" alt="">
                                                    <div class="hover-box">
                                                        <div class="inner-hover">
                                                            <h2><a href="{{url('/ceom')}}">{{$doc->name}}</a></h2>
                                                            <ul class="post-tags">
                                                                <li><i class="fa fa-clock-o"></i>{{date('l, d F Y',strtotime($doc->updated_at))}}</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
                                        @foreach($data_opmfbod as $dom)
                                        <li>
                                            <div class="news-post image-post2">
                                                <div class="post-gallery">
                                                    <img src="{{asset('imagesmfbod/'.$dom->image.'')}}" height="320" alt="">
                                                    <div class="hover-box">
                                                        <div class="inner-hover">
                                                            <h2><a href="{{url('/ceom')}}">{{$dom->name}}</a></h2>
                                                            <ul class="post-tags">
                                                                <li><i class="fa fa-clock-o"></i>{{date('l, d F Y',strtotime($dom->updated_at))}}</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>

                            <div class="widget recent-comments-widget">
                                <div class="title-section">
                                    <h1><span>Recent Comments</span></h1>
                                </div>
                                <?php

                                use App\Opsugcom;

                                $querySugcom = Opsugcom::take(3)->orderBy('time_post', 'DESC')->get();
                                $querySugcom2 = Opsugcom::take(3)->orderByRaw('RAND()')->get();
                                ?>
                                <div class="owl-wrapper">
                                    <div class="owl-carousel" data-num="1">
                                        <div class="item">
                                            @foreach($querySugcom as $sc)
                                            <ul class="comment-list">
                                                <li>
                                                    <img src="{{asset('vendor_user/img/core-img/profile.png')}}" alt="">
                                                    <div class="comment-content">
                                                        <p class="main-message">
                                                            {{substr($sc->message, 0, 70)}}
                                                        </p>
                                                        <span><i class="fa fa-user"></i>by {{$sc->name}}</span>
                                                        <span><i class="fa fa-clock-o"></i>{{date('l, d F Y',strtotime($sc->time_post))}}</span>
                                                    </div>
                                                </li>
                                            </ul>
                                            <hr>
                                            @endforeach
                                        </div>
                                        <div class="item">
                                            @foreach($querySugcom2 as $sc)
                                            <ul class="comment-list">
                                                <li>
                                                    <img src="{{asset('vendor_user/img/core-img/profile.png')}}" alt="">
                                                    <div class="comment-content">
                                                        <p class="main-message">
                                                            {{substr($sc->message, 0, 70)}}
                                                        </p>
                                                        <span><i class="fa fa-user"></i>by {{$sc->name}}</span>
                                                        <span><i class="fa fa-clock-o"></i>{{date('l, d F Y',strtotime($sc->time_post))}}</span>
                                                    </div>
                                                </li>
                                            </ul>
                                            <hr>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            if (Session::get('name')) : ?>
                                <div class="widget subscribe-widget">
                                    <form action="{{url('/cr_sugcom')}}" method="post">
                                        {{ csrf_field() }}
                                        <h1>Suggestion & Comments</h1>
                                        <input type="text" name="message" id="subscribe" placeholder="Enter here please" />
                                        <button id="submit-subscribe" type="submit">
                                            <i class="fa fa-arrow-circle-right"></i>
                                        </button>
                                        <p>
                                            <marquee behavior="" direction="">
                                                <font color="red"><b>Suggestion & comment here</b></font>
                                            </marquee>
                                        </p>
                                    </form>
                                </div>
                            <?php else : ?>
                                <div class="widget subscribe-widget">
                                    <marquee behavior="" direction="">
                                        <font color="red"><b>You must login for comment</b></font>
                                    </marquee>
                                </div>
                            <?php endif; ?>
                            <!-- 
                            <div class="widget post-widget">
                                <div class="title-section">
                                    <h1><span>Featured Video</span></h1>
                                </div>
                                <div class="news-post video-post">
                                    <img alt="" src="{{asset('vendor_user/upload/news-posts/video-sidebar.jpg')}}">
                                    <a href="https://www.youtube.com/watch?v=LL59es7iy8Q" class="video-link"><i class="fa fa-play-circle-o"></i></a>
                                    <div class="hover-box">
                                        <h2><a href="single-post.html">Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. </a></h2>
                                        <ul class="post-tags">
                                            <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                        </ul>
                                    </div>
                                </div>
                                <p>Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis. </p>
                            </div> -->
                        </div>
                        <!-- End sidebar -->
                    </div>

                </div>

            </div>
        </section>
        <!-- End block-wrapper-section -->
        <!-- footer 
			================================================== -->
        <footer>
            <div class="container">
                <div class="footer-widgets-part">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="widget text-widget">
                                <h1>About</h1>
                                <p>Hay - Dms adalah sebuah portal berita-berita perusahaan yang didalamnya juga mempunyai fitur-fitur aplikasi lainnya</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="widget categories-widget">
                                <h1>Hot Categories</h1>
                                <ul class="category-list">
                                    @foreach($data_usermenu as $du)
                                    <li>
                                        <a href="#">{{$du->menu}}<span>></span></a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-last-line">
                    <div class="row">
                        <div class="col" align="center">
                            <p>&copy; COPYRIGHT {{date("Y")}} HayDms-PT.BankYudhaBhakti.Tbk,</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End footer -->

    </div>
    <!-- End Container -->

    <script type="text/javascript" src="{{asset('vendor_user/js/jquery.min.js')}}">
    </script>
    <script type="text/javascript" src="{{asset('vendor_user/js/jquery.migrate.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendor_user/js/jquery.bxslider.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendor_user/js/jquery.magnific-popup.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendor_user/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendor_user/js/jquery.ticker.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendor_user/js/jquery.imagesloaded.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendor_user/js/jquery.isotope.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendor_user/js/owl.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendor_user/js/retina-1.1.0.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendor_user/js/script.js')}}"></script>
    <!-- Datatable -->
    <script src="{{asset('vendor_user/DataTables/datatables.min.js')}}"></script>
</body>

</html>