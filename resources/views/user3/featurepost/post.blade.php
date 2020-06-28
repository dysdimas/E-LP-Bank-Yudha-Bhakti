@extends('layouts.single_user3')
@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="single-blog-post">
            <div class="row">
                <div class="col-sm-12">
                    <div class="img-box" align="center"> <img class="img-fluid" src="{{asset('imagesfeature/'.$data_opfeature->image)}}" height="480" alt=""> </div>
                </div>
            </div>
            <div class="content-box">
                <div class="date-box">
                    <div class="inner">
                        <div class="date"> <b>{{date('d',strtotime($data_opfeature->time))}}</b> {{date('M',strtotime($data_opfeature->time))}} </div>
                    </div>
                </div>
                <div class="content_blog"> <a href="#">
                        <h3>{{$data_opfeature->title}}</h3>
                    </a>
                    <hr>
                    <!-- <h5>{{$data_opfeature->subtitle}}</h5> -->
                    <?php
                    echo $data_opfeature->description;
                    ?>
                    <ul class="pull-right share">
                        <li><span>Share: </span></li>
                        <li>
                            <?php
                            $uri = $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
                            echo "<a class='facebook' href='https://www.facebook.com/sharer.php?u=http://$uri'><i class='fa fa-facebook'></i></a>"
                            ?>
                        </li>
                        <li>
                            <?php
                            echo "<a class='twitter' href='https://twitter.com/share?url=http://$uri'><i class='fa fa-twitter'></i></a>"
                            ?>
                        </li>
                        <li>
                            <?php
                            echo "<a class='google' href='https://plus.google.com/share?url=http://$uri'><i class='fa fa-google-plus'></i><span></span></a>"
                            ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-md-12">
        <div class="comment-box">
            <div class="title">
                <h2>Comments</h2>
            </div>
            <?php

            use App\Comment_feature;

            $comment_feature = Comment_feature::take(5)->orderBy('time_post', 'DESC')->where(['cf_id' => $data_opfeature->id])->get();
            ?>
            <div class="row">
                <div class="col-md-12">
                    @foreach($comment_feature as $cf)
                    <div class="single-comment-box">
                        <div class="img-box">
                            <div class="inner-box"> <img class="img-fluid" src="{{asset('vendor_user/img/core-img/profile.png')}}" alt=""> </div>
                        </div>
                        <div class="content-box">
                            <h3>{{$cf->author}}</h3>
                            <div class="meta-box clearfix"> <span class="pull-left">{{date('l, d F Y',strtotime($cf->time_post))}}</span></div>
                            <p>{{$cf->comment}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="comment-form contact-content">
        <?php

        use Illuminate\Support\Facades\Session;

        if (Session::get('name')) : ?>
            <h2>Leave a Comment</h2>
            <form action="{{url('/comment_feature')}}" class="contact-form row" id="contact-page-contact-form" novalidate method="post">
                {{ csrf_field() }}
                <div class="col-md-6">
                    <input type="text" name="cf_id" value="{{$data_opfeature->id}}" hidden>
                    <input type="text" name="author" value="{{Session::get('name')}}" hidden readonly>
                    <input type="text" name="title" value="{{$data_opfeature->title}}" hidden readonly>
                    <input type="text" name="time_post" value="{{date('Y-m-d h:i:s')}}" hidden readonly>
                </div>
                <div class="col-md-12">
                    <textarea name="comment" placeholder="Message" cols="300" rows="10"></textarea>
                </div>
                <div class="col-md-12">
                    <button class="thm-btn" type="submit">Send</button>
                </div>
            </form>
        <?php else : ?>
            <div>
                <marquee behavior="" direction="">
                    <font color="red"><b>You must login for comment</b></font>
                </marquee>
            </div>
        <?php endif; ?>
    </div>
</div>
@endsection('content')