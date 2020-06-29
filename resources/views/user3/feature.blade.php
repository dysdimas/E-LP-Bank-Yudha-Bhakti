@extends('layouts.single_user3')
@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="row">
            @foreach($data_opfeature as $div)
            <div class="col-md-4">
                <div class="news_box blog_page">
                    <div class="news_img"> <img class="img-fluid" src="{{asset('imagesfeature/'.$div->image.'')}}" alt="news-2">
                        <div class="news_date">
                            <div class="blog_date_img">
                                <div class="blog_date_1"></div>
                                <div class="blog_date_2"></div>
                            </div>
                            <div class="date_box">
                                <h2><span class="large">{{date('d',strtotime($div->updated_at))}}</span> <br>
                                    {{date('M',strtotime($div->updated_at))}}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="news_detail">
                        <h3>{{$div->title}}</h3>
                        <p>{{$div->subtitle}}</p>
                        <a href="{{url('/feature/'.$div->id.'')}}">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="pagination">
            <ul>
                {{ $data_opfeature->links( "pagination::default") }}
            </ul>
        </div>
    </div>
</div>
@endsection('content')