@extends('layouts.single_user')
@section('content')
<!-- block content -->
<div class="block-content">

    <!-- single-post box -->
    <div class="single-post-box">

        <div class="title-section">
            <h1><span>{{$title}}</span></h1>
        </div>
        <div class="post-content">
            <div class="widget recent-comments-widget">
                <?php
                $data_opsugcom = \App\Opsugcom::all();
                $data_commentbranch = \App\Comment_branch::all();
                $data_commentdivisi = \App\Comment_divisi::all();
                $data_commentfeature = \App\Comment_feature::all();
                $data_commenthotnews = \App\Comment_hotnews::all();
                $data_commenttech = \App\Comment_tech::all();
                ?>
                <div class="owl-wrapper">
                    <div class="owl-carousel" data-num="1">
                        <div class="item">
                            <style>
                                #example {
                                    width: 100%;
                                    height: 1500px;
                                    border: 1px solid #E62129;
                                    border-radius: 8px;
                                    padding: 20px;
                                    overflow: auto;
                                }
                            </style>
                            <div id="example">
                                @foreach($data_opsugcom as $sc)
                                <div class="comment-content">
                                    <p class="main-message">
                                        Message : {{$sc->message}} <br>
                                        <span><i class="fa fa-user"></i> by {{$sc->name}}</span><br>
                                        <span><i class="fa fa-clock-o"></i> {{date('l, d F Y',strtotime($sc->time_post))}}</span>
                                    </p>
                                </div>
                                <hr>
                                @endforeach
                                @foreach($data_commentbranch as $sc)
                                <div class="comment-content">
                                    <p class="main-message">
                                        Message : {{$sc->comment}} <br>
                                        <span><i class="fa fa-user"></i> by {{$sc->author}}</span><br>
                                        <span><i class="fa fa-clock-o"></i> {{date('l, d F Y',strtotime($sc->time_post))}}</span>
                                    </p>
                                </div>
                                <hr>
                                @endforeach
                                @foreach($data_commentdivisi as $sc)
                                <div class="comment-content">
                                    <p class="main-message">
                                        Message : {{$sc->comment}} <br>
                                        <span><i class="fa fa-user"></i> by {{$sc->author}}</span><br>
                                        <span><i class="fa fa-clock-o"></i> {{date('l, d F Y',strtotime($sc->time_post))}}</span>
                                    </p>
                                </div>
                                <hr>
                                @endforeach
                                @foreach($data_commentfeature as $sc)
                                <div class="comment-content">
                                    <p class="main-message">
                                        Message : {{$sc->comment}} <br>
                                        <span><i class="fa fa-user"></i> by {{$sc->author}}</span><br>
                                        <span><i class="fa fa-clock-o"></i> {{date('l, d F Y',strtotime($sc->time_post))}}</span>
                                    </p>
                                </div>
                                <hr>
                                @endforeach
                                @foreach($data_commenthotnews as $sc)
                                <div class="comment-content">
                                    <p class="main-message">
                                        Message : {{$sc->comment}} <br>
                                        <span><i class="fa fa-user"></i> by {{$sc->author}}</span><br>
                                        <span><i class="fa fa-clock-o"></i> {{date('l, d F Y',strtotime($sc->time_post))}}</span>
                                    </p>
                                </div>
                                <hr>
                                @endforeach
                                @foreach($data_commenttech as $sc)
                                <div class="comment-content">
                                    <p class="main-message">
                                        Message : {{$sc->comment}} <br>
                                        <span><i class="fa fa-user"></i> by {{$sc->author}}</span><br>
                                        <span><i class="fa fa-clock-o"></i> {{date('l, d F Y',strtotime($sc->time_post))}}</span>
                                    </p>
                                </div>
                                <hr>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- pagination box -->
            <div class="pagination-box">
                <ul class="pagination-list">
                </ul>
            </div>
            <!-- End Pagination box -->
        </div>
        <div class="post-tags-box">
            <ul class="tags-box">
                <li><i class="fa fa-tags"></i><span>Tags:</span></li>
                <li><a>News</a></li>
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