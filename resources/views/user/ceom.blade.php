@extends('layouts.single_user')
@section('content')
<!-- block content -->
<div class="block-content">

    <!-- single-post box -->
    <div class="single-post-box">
        <div class="post-content">
            <!-- isi -->
            <div class="title-section">
                <h1><span>Ceo Message</span></h1>
            </div>
            <ul class="autor-list">
                <li>
                    @foreach($data_ceom as $dc)
                    <div class="autor-box">
                        <img src="{{asset('imagesceom/'.$dc->image.'')}}" height="100" alt="">
                        <div class="autor-content">
                            <div class="autor-title">
                                <h1>{{$dc->name}}</h1>
                                <ul class="autor-social">
                                    <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>
                                    <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#" class="dribble"><i class="fa fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                            <p>
                                {{$dc->ceom_message}}
                            </p>
                        </div>
                    </div>
                    @endforeach
                </li>

            </ul>
            <div class="title-section">
                <h1><span>Message From Bod</span></h1>
            </div>
            <ul class="autor-list">
                @foreach($data_mfbod as $dc)
                <li>
                    <div class="autor-box">
                        <img src="{{asset('imagesmfbod/'.$dc->image.'')}}" height="100" alt="">
                        <div class="autor-content">
                            <div class="autor-title">
                                <h1>{{$dc->name}}</h1>
                                <ul class="autor-social">
                                    <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>
                                    <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#" class="dribble"><i class="fa fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                            <p>
                                {{$dc->mfbod_message}}
                            </p>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>

        </div>
        <div class="post-tags-box">
            <ul class="tags-box">
                <li><i class="fa fa-tags"></i><span>Tags:</span></li>
                <li><a>Message</a></li>
                <li><a>Company</a></li>
                <li><a>Finance</a></li>
            </ul>
        </div>
        <div class="share-post-box">
            <ul class="share-box">
                <li><i class="fa fa-share-alt"></i><span>Share Post</span></li>
                <li>
                    <?php
                    $uri = $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
                    echo "<a class='facebook' href='https://www.facebook.com/sharer.php?u=http://$uri'><i class='fa fa-facebook'></i>Share on Facebook</a>"
                    ?>
                </li>
                <li>
                    <?php
                    echo "<a class='twitter' href='https://twitter.com/share?url=http://$uri'><i class='fa fa-twitter'></i>Share on Twitter</a>"
                    ?>
                </li>
                <li>
                    <?php
                    echo "<a class='google' href='https://plus.google.com/share?url=http://$uri'><i class='fa fa-google-plus'></i><span></span></a>"
                    ?>
                </li>
                <li>
                    <?php
                    echo "<a class='linkedin' href='http://www.linkedin.com/shareArticle?mini=true&url=http://$uri'><i class='fa fa-linkedin'></i><span></span></a>"
                    ?>
                </li>
            </ul>
        </div>

    </div>
    <!-- End single-post box -->

</div>
<!-- End block content -->
@endsection('content')