@extends('layouts.master_user3')
@section('content')

<!-- /blog start -->
<section class="news" id="blog">
    <?php

    use App\Opfeature;

    $data_opfeature = Opfeature::take(6)->orderBy('time', 'DESC')->get();
    ?>

    <?php

    use App\Opimage;

    use Illuminate\Support\Facades\DB;

    $data_opimage = array(\App\Opimage::all());
    ?>
    <div class="container">
        <div class="row">
            <div class="offset-lg-2 col-lg-8">
                <div class="title_box">
                    <h2>News</h2>
                    <div class="title_border"></div>
                    <br>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="owl-carousel carouselslider owl-theme ss_carousel latest_news_slider bottom-navigation" id="slider1" data-options='{"itemsCustom": [[0, 1],[768, 2],[992, 3],[1230, 3]], "navigation": false}'>
                @foreach($data_opfeature as $of)
                <div class="item">
                    <div class="col-md-12">
                        <div class="news_box">
                            <div class="news_img"> <img class="img-fluid" src="{{asset('imagesfeature/'.$of->image.'')}}" alt="news-1">
                                <div class="news_date">
                                    <div class="blog_date_img">
                                        <div class="blog_date_1"></div>
                                        <div class="blog_date_2"></div>
                                    </div>
                                    <div class="date_box">
                                        <h2><span class="large">{{date('d',strtotime($of->time))}}</span> <br>
                                            {{date('F',strtotime($of->time))}}</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="news_detail">
                                <h3>{{$of->title}}</h3>
                                <p>{{$of->subtitle}}</p>
                                <a href="{{url('/feature/'.$of->id.'')}}">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- /projects start -->

        <!-- /projects end -->
    </div>
</section>
<!-- /blog end -->
<!-- /projects start -->
<section class="projects" id="projects">
    <div class="container">
        <div class="row">
            <div class="offset-lg-2 col-lg-8">
                <div class="title_box">
                    <h2>Budaya Kerja Bank Yudha Bhakti</h2>
                    <div class="title_border"></div>
                    <br>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="gallery_padding">
                    <div class="gallery" data-cols="3" data-margin="15" data-height="auto">
                        @foreach($data_opimage as $dop)
                        <div class="entry work-entry graphic"> <img class="img-fluid" src="{{asset('opimage/'.$dop[0]->filename.'')}}" alt="Assistant" /> <a href="{{asset('opimage/'.$dop[0]->filename.'')}}" data-lightbox="example-1">
                                <div class="overlay overlay-light hidden" data-overlay="9" data-pos="center">
                                    <div class="overlay-content text-center">
                                        <div class="link_set"><i class="fa fa-link" aria-hidden="true"></i></div>

                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="entry work-entry branding"> <img class="img-fluid" src="{{asset('opimage/'.$dop[3]->filename.'')}}" alt="Velo Love" /> <a href="{{asset('opimage/'.$dop[3]->filename.'')}}" data-lightbox="example-1">
                                <div class="overlay overlay-light hidden" data-overlay="9" data-pos="center">
                                    <div class="overlay-content text-center">
                                        <div class="link_set"><i class="fa fa-link" aria-hidden="true"></i></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="entry work-entry branding"> <img class="img-fluid" src="{{asset('opimage/'.$dop[2]->filename.'')}}" alt="Botanical" /> <a href="{{asset('opimage/'.$dop[2]->filename.'')}}" data-lightbox="example-1">
                                <div class="overlay overlay-light hidden" data-overlay="9" data-pos="center">
                                    <div class="overlay-content text-center">
                                        <div class="link_set"><i class="fa fa-link" aria-hidden="true"></i></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="entry work-entry branding"> <img class="img-fluid" src="{{asset('opimage/'.$dop[4]->filename.'')}}" alt="Ted Baker" /> <a href="{{asset('opimage/'.$dop[4]->filename.'')}}" data-lightbox="example-1">
                                <div class="overlay overlay-light hidden" data-overlay="9" data-pos="center">
                                    <div class="overlay-content text-center">
                                        <div class="link_set"><i class="fa fa-link" aria-hidden="true"></i></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="entry work-entry graphic"> <img class="img-fluid" src="{{asset('opimage/'.$dop[1]->filename.'')}}" alt="Frockhub" /> <a href="{{asset('opimage/'.$dop[1]->filename.'')}}" data-lightbox="example-1">
                                <div class="overlay overlay-light hidden" data-overlay="9" data-pos="center">
                                    <div class="overlay-content text-center">
                                        <div class="link_set"><i class="fa fa-link" aria-hidden="true"></i></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="entry work-entry web"> <img class="img-fluid" src="{{asset('opimage/'.$dop[6]->filename.'')}}" alt="Frockhub" /> <a href="{{asset('opimage/'.$dop[6]->filename.'')}}" data-lightbox="example-1">
                                <div class="overlay overlay-light hidden" data-overlay="9" data-pos="center">
                                    <div class="overlay-content text-center">
                                        <div class="link_set"><i class="fa fa-link" aria-hidden="true"></i></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="entry work-entry graphic"> <img class="img-fluid" src="{{asset('opimage/'.$dop[5]->filename.'')}}" alt="Oh Beard!" /> <a href="{{asset('opimage/'.$dop[5]->filename.'')}}" data-lightbox="example-1">
                                <div class="overlay overlay-light hidden" data-overlay="9" data-pos="center">
                                    <div class="overlay-content text-center">
                                        <div class="link_set"><i class="fa fa-link" aria-hidden="true"></i></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /projects end -->
@endsection('content')