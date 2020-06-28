@extends('layouts.single_user3')
@section('content')
<?php
$data_dpp_video = DB::table('opvideosdpp')->get();
?>
<div class="row">
    @foreach($data_dpp_video as $dpp)
    <div class="col-lg-4 col-md-6">
        <div class="feature_box_2">
            <div class="feature_icon">
                <div class="front-content">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <hr>
                    <h3>{{$dpp->title}}</h3>
                    <hr>
                    <img alt="" src="{{asset('images/'.$dpp->image.'')}}" width="300" height="200">
                    <hr>
                </div>
            </div>
            <div class="feature_content">
                <br>
                <br>
                <br>
                <div align="center">
                    <a href="{{$dpp->url}}" style="color:white">
                        <h1>
                            <span class="youtube-link" youtubeid="{{$dpp->url}}">Watch Video</span>
                        </h1>
                    </a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection('content')