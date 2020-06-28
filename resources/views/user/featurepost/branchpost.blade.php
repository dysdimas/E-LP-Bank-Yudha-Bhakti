@extends('layouts.single_user')
@section('content')
<!-- block content -->
<div class="block-content">

    <!-- single-post box -->
    <div class="single-post-box">

        <div class="title-post">
            <h1>{{$data_branch->cabang}}</h1>
            <h3>{{$data_branch->title}}</h3>
            <ul class="post-tags">
                <li><i class="fa fa-clock-o"></i>{{date('l, d F Y',strtotime($data_branch->updated_at))}}</li>
            </ul>
        </div>

        <div class="post-gallery">
            <ul class="bxslider">
                <li><img src="{{asset('imagesbranch/'.$data_branch->image)}}" height="480" alt=""></li>
                <li><img src="{{asset('imagesbranch/'.$data_branch->image2)}}" height="480" alt=""></li>
                <li><img src="{{asset('imagesbranch/'.$data_branch->image3)}}" height="480" alt=""></li>
            </ul>
        </div>

        <div class="post-content">
            <?php
            echo $data_branch->description;
            ?>
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

        <!-- comment area box -->
        <div class="comment-area-box">
            <div class="title-section">
                <h1><span>Comments</span></h1>
            </div>
            <?php

            use App\Comment_branch;

            $comment_branch = Comment_branch::take(5)->orderBy('time_post', 'DESC')->where(['cb_id' => $data_branch->id])->get();
            ?>
            <ul class="comment-tree">
                @foreach($comment_branch as $cb)
                <li>
                    <div class="comment-box">
                        <img alt="" src="{{asset('vendor_user/img/core-img/profile.png')}}">
                        <div class="comment-content">
                            <h4>{{$cb->author}}</h4>
                            <span><i class="fa fa-clock-o"></i>{{date('l, d F Y',strtotime($cb->time_post))}}</span>
                            <p>{{$cb->comment}}</p>
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
            <form id="comment-form" action="{{url('/comment_branch')}}" method="post">
                {{ csrf_field() }}
                <input type="text" name="cb_id" value="{{$data_branch->id}}" hidden>
                <input type="text" name="author" value="{{Session::get('name')}}" hidden readonly>
                <input type="text" name="cabang" value="{{$data_branch->cabang}}" hidden readonly>
                <input type="text" name="time_post" value="{{date('Y-m-d h:i:s')}}" hidden readonly>
                <textarea class="form-control" name="comment" id="exampleFormControlTextarea1" rows="3"></textarea>
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