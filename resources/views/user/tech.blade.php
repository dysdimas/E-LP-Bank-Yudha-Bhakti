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
            <div class="item">
                <ul class="list-posts">
                    @foreach($data_idivisi as $div)
                    <li>
                        <img src="{{asset('imagestech/'.$div->image.'')}}" height="82" alt="">
                        <div class="post-content">
                            <h2><a href="{{url('/tech/'.$div->id.'')}}">{{$div->title}}</a></h2>
                            <ul class="post-tags">
                                <li><i class="fa fa-clock-o"></i>{{date('l, d F Y',strtotime($div->updated_at))}}</li>
                            </ul>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
            <!-- pagination box -->
            <div class="pagination-box">
                <ul class="pagination-list">
                    {{ $data_idivisi->links( "pagination::default") }}
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