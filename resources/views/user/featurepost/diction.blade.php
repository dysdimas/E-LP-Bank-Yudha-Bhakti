@extends('layouts.single_user')
@section('content')
<!-- block content -->
<div class="block-content">

    <!-- single-post box -->
    <div class="single-post-box">

        <div class="title-post">
            <h1>{{$data_diction->title}}</h1>
            <ul class="post-tags">
                <li><i class="fa fa-clock-o"></i>{{date('l, d F Y',strtotime($data_diction->updated_at))}}</li>
            </ul>
        </div>

        <div class="post-gallery">
            <ul class="bxslider">
                <li><img src="{{asset('imagesdiction/'.$data_diction->image)}}" height="480" alt=""></li>
            </ul>
        </div>

        <div class="post-content">
            <?php
            echo $data_diction->description;
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
    </div>
    <!-- End single-post box -->

</div>
<!-- End block content -->
@endsection('content')