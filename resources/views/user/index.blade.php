@extends('layouts.master_user')
@section('content')
<!-- grid box -->
<div class="grid-box">

    <div class="title-section">
        <h1><span>Today's Featured</span></h1>
    </div>
    <?php

    use App\Opfeature;

    $data_opfeature = Opfeature::take(1)->orderByRaw('RAND()')->get();
    $data_opfeature2 = Opfeature::take(1)->orderByRaw('RAND()')->get();
    $data_opfeature3 = Opfeature::take(3)->orderByRaw('RAND()')->get();
    $data_opfeature4 = Opfeature::take(3)->orderByRaw('RAND()')->get();
    ?>
    <div class="row">
        @foreach($data_opfeature as $of)
        <div class="col-md-6">
            <div class="news-post image-post2">
                <div class="post-gallery">
                    <img src="{{asset('imagesfeature/'.$of->image.'')}}" height="280" alt="">
                    <div class=" hover-box">
                        <div class="inner-hover">
                            <a class="category-post travel" href="{{url('/feature/'.$of->id.'')}}">{{$of->title}}</a>
                            <h2><a href="{{url('/feature/'.$of->id.'')}}">{{$of->subtitle}}</a></h2>
                            <ul class="post-tags">
                                <li><i class="fa fa-clock-o"></i>{{date('l, d F Y',strtotime($of->time))}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

        <div class="col-md-6">
            <ul class="list-posts">
                @foreach($data_opfeature3 as $of)
                <li>
                    <img src="{{asset('imagesfeature/'.$of->image.'')}}" height="70" width="80" alt="">
                    <div class="post-content">
                        <a href="{{url('/feature/'.$of->id.'')}}">{{$of->title}}</a>
                        <h2><a href="{{url('/feature/'.$of->id.'')}}">{{$of->subtitle}}</a></h2>
                        <ul class="post-tags">
                            <li><i class="fa fa-clock-o"></i>{{date('l, d F Y',strtotime($of->time))}}</li>
                        </ul>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="row">
        @foreach($data_opfeature2 as $of)
        <div class="col-md-6">
            <div class="news-post image-post2">
                <div class="post-gallery">
                    <img src="{{asset('imagesfeature/'.$of->image.'')}}" height="280" alt="">
                    <div class="hover-box">
                        <div class="inner-hover">
                            <a class="category-post travel" href="{{url('/feature/'.$of->id.'')}}">{{$of->title}}</a>
                            <h2><a href="{{url('/feature/'.$of->id.'')}}">{{$of->subtitle}}</a></h2>
                            <ul class="post-tags">
                                <li><i class="fa fa-clock-o"></i>{{date('l, d F Y',strtotime($of->time))}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

        <div class="col-md-6">
            <ul class="list-posts">
                @foreach($data_opfeature4 as $of)
                <li>
                    <img src="{{asset('imagesfeature/'.$of->image.'')}}" height="70" width="80" alt="">
                    <div class="post-content">
                        <a href="{{url('/feature/'.$of->id.'')}}">{{$of->title}}</a>
                        <h2><a href="{{url('/feature/'.$of->id.'')}}">{{$of->subtitle}}</a></h2>
                        <ul class="post-tags">
                            <li><i class="fa fa-clock-o"></i>{{date('l, d F Y',strtotime($of->time))}}</li>
                        </ul>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>

    </div>
    <div class="pagination-box">
        <ul class="pagination-list">
            <li><a class="active" href="{{url('/feature')}}">More</a></li>
        </ul>
    </div>
    <!-- <div class="center-button">
    <a href="#"><i class="fa fa-refresh"></i> More from featured</a>
</div> -->
</div>
<!-- End grid box -->
<!-- grid-box -->
<div class="grid-box">

    <div class="title-section">
        <h1><span>News Videos</span></h1>
    </div>
    <?php

    use App\Opvideos;

    $data_opvideo = Opvideos::take(3)->orderByRaw('RAND()')->get();
    $data_opvideo2 = Opvideos::take(3)->orderByRaw('RAND()')->get();
    ?>
    <div class="row">
        @foreach($data_opvideo as $dv)
        <div class="col-md-4">
            <div class="news-post video-post">
                <img alt="" src="{{asset('images/'.$dv->image.'')}}" width="270" height="150">
                <a href="{{$dv->url}}" class="video-link"><i class="fa fa-play-circle-o"></i></a>
                <div class="hover-box">
                    <h2>
                        <font color="white">{{$dv->title}}</f>
                    </h2>
                    <ul class="post-tags">
                        <li><i class="fa fa-clock-o"></i>{{date('l, d F Y',strtotime($dv->updated_at))}}</li>
                    </ul>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="row">
        @foreach($data_opvideo2 as $dv)
        <div class="col-md-4">
            <div class="news-post video-post">
                <img alt="" src="{{asset('images/'.$dv->image.'')}}" width="270" height="150">
                <a href="{{$dv->url}}" class="video-link"><i class="fa fa-play-circle-o"></i></a>
                <div class="hover-box">
                    <h2>
                        <font color="white">{{$dv->title}}</f>
                    </h2>
                    <ul class="post-tags">
                        <li><i class="fa fa-clock-o"></i>{{date('l, d F Y',strtotime($dv->updated_at))}}</li>
                    </ul>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="pagination-box">
        <ul class="pagination-list">
            <li><a class="active" href="{{url('/videos')}}">More</a></li>
        </ul>
    </div>
</div>
<!-- End grid-box -->

<!-- carousel box -->
<div class="carousel-box owl-wrapper">

    <div class="title-section">
        <h1><span>Mix</span></h1>
    </div>
    <?php

    use App\Idivision;
    use App\Ibranch;
    use App\Itech;
    //Division
    $data_idivisi = Idivision::take(1)->orderByRaw('RAND()')->get();
    $data_idivisi2 = Idivision::take(3)->orderByRaw('RAND()')->get();
    //Branch
    $data_ibranch = Ibranch::take(1)->orderByRaw('RAND()')->get();
    $data_ibranch2 = Ibranch::take(3)->orderByRaw('RAND()')->get();
    //Tech
    $data_itech = Itech::take(1)->orderByRaw('RAND()')->get();
    $data_itech2 = Itech::take(3)->orderByRaw('RAND()')->get();
    ?>
    <div class="owl-carousel" data-num="2">

        <div class="item">
            @foreach($data_idivisi as $div)
            <div class="news-post image-post2">
                <div class="post-gallery">
                    <img src="{{asset('imagesdivision/'.$div->image.'')}}" height="300" alt="">
                    <div class="hover-box">
                        <div class="inner-hover">
                            <h2><a href="{{url('/division/'.$div->id.'')}}">{{$div->title}}</a></h2>
                            <ul class="post-tags">
                                <li><i class="fa fa-clock-o"></i>{{date('l, d F Y',strtotime($div->updated_at))}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            <ul class="list-posts">
                @foreach($data_idivisi2 as $div)
                <li>
                    <img src="{{asset('imagesdivision/'.$div->image.'')}}" height="82" alt="">
                    <div class="post-content">
                        <h2><a href="{{url('/division/'.$div->id.'')}}">{{$div->title}}</a></h2>
                        <ul class="post-tags">
                            <li><i class="fa fa-clock-o"></i>{{date('l, d F Y',strtotime($div->updated_at))}}</li>
                        </ul>
                    </div>
                </li>
                @endforeach
            </ul>
            <div class="pagination-box">
                <ul class="pagination-list">
                    <li><a class="active" href="{{url('/division')}}">More News</a></li>
                </ul>
            </div>
        </div>

        <div class="item">
            @foreach($data_ibranch as $dib)
            <div class="news-post image-post2">
                <div class="post-gallery">
                    <img src="{{asset('imagesbranch/'.$dib->image.'')}}" height="300" alt="">
                    <div class="hover-box">
                        <div class="inner-hover">
                            <h2><a href="{{url('/branchnews/'.$dib->id.'')}}">{{$dib->title}}</a></h2>
                            <ul class="post-tags">
                                <li><i class="fa fa-clock-o"></i>{{date('l, d F Y',strtotime($dib->time))}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            <ul class="list-posts">
                @foreach($data_ibranch2 as $dib)
                <li>
                    <img src="{{asset('imagesbranch/'.$dib->image.'')}}" height="82" alt="">
                    <div class="post-content">
                        <h2><a href="{{url('/branchnews/'.$dib->id.'')}}">{{$dib->title}}</a></h2>
                        <ul class="post-tags">
                            <li><i class="fa fa-clock-o"></i>{{date('l, d F Y',strtotime($dib->time))}}</li>
                        </ul>
                    </div>
                </li>
                @endforeach
            </ul>
            <div class="pagination-box">
                <ul class="pagination-list">
                    <li><a class="active" href="{{url('/branchnews')}}">More News</a></li>
                </ul>
            </div>
        </div>

        <div class="item">
            @foreach($data_itech as $dit)
            <div class="news-post image-post2">
                <div class="post-gallery">
                    <img src="{{asset('imagestech/'.$dit->image.'')}}" height="300" alt="">
                    <div class="hover-box">
                        <div class="inner-hover">
                            <h2><a href="{{url('/tech/'.$dit->id.'')}}">{{$dit->title}}</a></h2>
                            <ul class="post-tags">
                                <li><i class="fa fa-clock-o"></i>{{date('l, d F Y',strtotime($dit->time))}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @foreach($data_itech2 as $dit)
            <ul class="list-posts">
                <li>
                    <img src="{{asset('imagestech/'.$dit->image.'')}}" height="82" alt="">
                    <div class="post-content">
                        <h2><a href="{{url('/tech/'.$dit->id.'')}}">{{$dit->title}}</a></h2>
                        <ul class="post-tags">
                            <li><i class="fa fa-clock-o"></i>{{date('l, d F Y',strtotime($dit->time))}}</li>
                        </ul>
                    </div>
                </li>
            </ul>
            @endforeach
            <div class="pagination-box">
                <ul class="pagination-list">
                    <li><a class="active" href="{{url('/tech')}}">More News</a></li>
                </ul>
            </div>
        </div>

    </div>
</div>
<!-- End carousel box -->


<!-- article box -->
<!-- <div class="article-box">

<div class="title-section">
    <h1><span>Latest Articles</span></h1>
</div>

<div class="news-post article-post">
    <div class="row">
        <div class="col-sm-5">
            <div class="post-gallery">
                <img alt="" src="{{asset('vendor_user/upload/news-posts/art1.jpg')}}">
            </div>
        </div>
        <div class="col-sm-7">
            <div class="post-content">
                <h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.</a></h2>
                <ul class="post-tags">
                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                    <li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
                    <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                    <li><i class="fa fa-eye"></i>872</li>
                </ul>
                <p>Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</p>
                <a href="single-post.html" class="read-more-button"><i class="fa fa-arrow-circle-right"></i>Read More</a>
            </div>
        </div>
    </div>
</div>

<div class="news-post article-post">
    <div class="row">
        <div class="col-sm-5">
            <div class="post-gallery">
                <img alt="" src="{{asset('vendor_user/upload/news-posts/art2.jpg')}}">
            </div>
        </div>
        <div class="col-sm-7">
            <div class="post-content">
                <h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.</a></h2>
                <ul class="post-tags">
                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                    <li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
                    <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                    <li><i class="fa fa-eye"></i>872</li>
                </ul>
                <p>Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</p>
                <a href="single-post.html" class="read-more-button"><i class="fa fa-arrow-circle-right"></i>Read More</a>
            </div>
        </div>
    </div>
</div>

<div class="news-post article-post">
    <div class="row">
        <div class="col-sm-5">
            <div class="post-gallery">
                <img alt="" src="{{asset('vendor_user/upload/news-posts/art3.jpg')}}">
            </div>
        </div>
        <div class="col-sm-7">
            <div class="post-content">
                <h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.</a></h2>
                <ul class="post-tags">
                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                    <li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
                    <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                    <li><i class="fa fa-eye"></i>872</li>
                </ul>
                <p>Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</p>
                <a href="single-post.html" class="read-more-button"><i class="fa fa-arrow-circle-right"></i>Read More</a>
            </div>
        </div>
    </div>
</div>

<div class="news-post article-post">
    <div class="row">
        <div class="col-sm-5">
            <div class="post-gallery">
                <img alt="" src="{{asset('vendor_user/upload/news-posts/art4.jpg')}}">
            </div>
        </div>
        <div class="col-sm-7">
            <div class="post-content">
                <h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.</a></h2>
                <ul class="post-tags">
                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                    <li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
                    <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                    <li><i class="fa fa-eye"></i>872</li>
                </ul>
                <p>Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</p>
                <a href="single-post.html" class="read-more-button"><i class="fa fa-arrow-circle-right"></i>Read More</a>
            </div>
        </div>
    </div>
</div>
</div> -->
<!-- End article box -->

<!-- pagination box -->
<!-- <div class="pagination-box">
    <ul class="pagination-list">
        <li><a class="active" href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><span>...</span></li>
        <li><a href="#">9</a></li>
        <li><a href="#">Next</a></li>
    </ul>
    <p>Page 1 of 9</p>
</div> -->
<!-- End Pagination box -->
@endsection('content')