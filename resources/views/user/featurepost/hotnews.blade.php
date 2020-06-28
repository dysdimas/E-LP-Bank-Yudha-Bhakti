@extends('layouts.single_user')
@section('content')
<!-- block content -->
<div class="block-content">


    <!-- single-post box -->
    <div class="single-post-box wide-version">

        <div class="title-post">
            <h1>{{$data_ophot->title}}</h1>
            <h3>{{$data_ophot->subtitle}}</h3>
            <ul class="post-tags">
                <li><i class="fa fa-clock-o"></i>{{date('l, d F Y',strtotime($data_ophot->updated_at))}}</li>
            </ul>
        </div>

        <div class="post-content">

            <p>
                <?php
                echo $data_ophot->description;
                ?>
            </p>

        </div>

        <div class="article-inpost">
            <div class="row">
                <div class="col-md-6">
                    <div class="image-content">
                        <div class="image-place">
                            <img src="{{asset('imageshotnews/'.$data_ophot->image.'')}}" height="252" alt="">
                            <div class="hover-image">
                                <a class="zoom" href="{{asset('imageshotnews/'.$data_ophot->image.'')}}"><i class="fa fa-arrows-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="image-content">
                        <div class="image-place">
                            <img src="{{asset('imageshotnews/'.$data_ophot->image2.'')}}" height="252" alt="">
                            <div class="hover-image">
                                <a class="zoom" href="{{asset('imageshotnews/'.$data_ophot->image2.'')}}"><i class="fa fa-arrows-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="post-content">

            <p>
                <?php
                echo $data_ophot->description2;
                ?>
            </p>

        </div>

        <div class="article-inpost">
            <div class="row">
                <div class="col-md-6">
                    <div class="image-content">
                        <div class="image-place">
                            <img src="{{asset('imageshotnews/'.$data_ophot->image3.'')}}" height="252" alt="">
                            <div class="hover-image">
                                <a class="zoom" href="{{asset('imageshotnews/'.$data_ophot->image3.'')}}"><i class="fa fa-arrows-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="image-content">
                        <div class="image-place">
                            <img src="{{asset('imageshotnews/'.$data_ophot->image4.'')}}" height="252" alt="">
                            <div class="hover-image">
                                <a class="zoom" href="{{asset('imageshotnews/'.$data_ophot->image4.'')}}"><i class="fa fa-arrows-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="post-content">

            <p>
                <?php
                echo $data_ophot->description3;
                ?>
            </p>

        </div>

        <div class="post-tags-box">
            <ul class="tags-box">
                <li><i class="fa fa-tags"></i><span>Tags:</span></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Finance</a></li>
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

        <!-- comment area box -->
        <div class="comment-area-box">
            <div class="title-section">
                <h1><span>Comments</span></h1>
            </div>
            <?php

            use App\Comment_hotnews;

            $comment_ophot = Comment_hotnews::take(5)->orderBy('time_post', 'DESC')->where(['ch_id' => $data_ophot->id])->get();
            ?>
            <ul class="comment-tree">
                @foreach($comment_ophot as $cd)
                <li>
                    <div class="comment-box">
                        <img alt="" src="{{asset('vendor_user/img/core-img/profile.png')}}">
                        <div class="comment-content">
                            <h4>{{$cd->author}}</h4>
                            <span><i class="fa fa-clock-o"></i>{{date('l, d F Y',strtotime($cd->time_post))}}</span>
                            <p>{{$cd->comment}}</p>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
        <!-- End comment area box -->

        <!-- contact form box -->
        <div class="title-section">
            <h1><span>Leave a Comment</span></h1>
        </div>
        <?php

        use Illuminate\Support\Facades\Session;

        if (Session::get('name')) : ?>
            <form id="comment-form" action="{{url('/comment_hotnews')}}" method="post">
                {{ csrf_field() }}
                <input type="text" name="ch_id" value="{{$data_ophot->id}}" hidden>
                <input type="text" name="author" value="{{Session::get('name')}}" hidden readonly>
                <input type="text" name="title" value="{{$data_ophot->title}}" hidden readonly>
                <input type="text" name="time_post" value="{{date('Y-m-d h:i:s')}}" hidden readonly>
                <textarea class="form-control" name="comment" id="exampl    eFormControlTextarea1" rows="3"></textarea>
                <hr>
                <button type="submit" id="submit-contact">
                    <i class="fa fa-comment"></i> Post Comment
                </button>
            </form>
        <?php else : ?>
            <div class="widget subscribe-widget">
                <marquee behavior="" direction="">
                    <font color="red"><b>You must login for comment</b></font>
                </marquee>
            </div>
        <?php endif; ?>
        <!-- End contact form box -->

    </div>
    <!-- End single-post box -->

</div>
<!-- End block content -->
@endsection('content')