@extends('layouts.single_user')
@section('content')
<!-- block content -->
<div class="block-content">

    <!-- single-post box -->
    <div class="single-post-box">

        <div class="title-post">
            <h1>{{$data_division->divisi}}</h1>
            <h3>{{$data_division->title}}</h3>
            <ul class="post-tags">
                <li><i class="fa fa-clock-o"></i>{{date('l, d F Y',strtotime($data_division->updated_at))}}</li>
            </ul>
        </div>

        <div class="post-gallery">
            <ul class="bxslider">
                <li><img src="{{asset('imagesdivision/'.$data_division->image)}}" alt=""></li>
                <li><img src="{{asset('imagesdivision/'.$data_division->image)}}" alt=""></li>
                <li><img src="{{asset('imagesdivision/'.$data_division->image)}}" alt=""></li>
            </ul>
        </div>

        <div class="post-content">
            <?php
            echo $data_division->description;
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
                <h1><span>5 Comments</span></h1>
            </div>
            <ul class="comment-tree">
                <li>
                    <div class="comment-box">
                        <img alt="" src="{{asset('vendor_user/img/core-img/profile.png')}}">
                        <div class="comment-content">
                            <h4>John Doe <a href="#"><i class="fa fa-comment-o"></i>Reply</a></h4>
                            <span><i class="fa fa-clock-o"></i>27 may 2013 at 8:57 pm</span>
                            <p>Suspendisse mauris. Fusce accumsan mollis eros. Pellentesque a diam sit amet mi ullamcorper vehicula. Integer adipiscing risus a sem. Nullam. </p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="comment-box">
                        <img alt="" src="{{asset('vendor_user/img/core-img/profile.png')}}">
                        <div class="comment-content">
                            <h4>John Doe <a href="#"><i class="fa fa-comment-o"></i>Reply</a></h4>
                            <span><i class="fa fa-clock-o"></i>27 may 2013 at 8:57 pm</span>
                            <p>Suspendisse mauris. Fusce accumsan mollis eros. Pellentesque a diam sit amet mi ullamcorper vehicula. Integer adipiscing risus a sem. Nullam. </p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="comment-box">
                        <img alt="" src="{{asset('vendor_user/img/core-img/profile.png')}}">
                        <div class="comment-content">
                            <h4>John Doe <a href="#"><i class="fa fa-comment-o"></i>Reply</a></h4>
                            <span><i class="fa fa-clock-o"></i>27 may 2013 at 8:57 pm</span>
                            <p>Suspendisse mauris. Fusce accumsan mollis eros. Pellentesque a diam sit amet mi ullamcorper vehicula. Integer adipiscing risus a sem. Nullam. </p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <!-- End comment area box -->

        <!-- contact form box -->
        <div class="contact-form-box">
            <div class="title-section">
                <h1><span>Leave a Comment</span></h1>
            </div>
            <form id="comment-form">
                <label for="comment">Comment*</label>
                <textarea id="comment" name="comment"></textarea>
                <button type="submit" id="submit-contact">
                    <i class="fa fa-comment"></i> Post Comment
                </button>
            </form>
        </div>
        <!-- End contact form box -->

    </div>
    <!-- End single-post box -->

</div>
<!-- End block content -->
@endsection('content')