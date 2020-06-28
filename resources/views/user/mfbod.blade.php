@extends('layouts.master_user')
@section('content')

<div class="single-blog-post featured-post">
    <div class="post-thumb">
        <h1>Message From BOD</h1>
    </div>
</div>
<hr>

<div align="center">
    <div class="card-group">
        <div class="card">
            @foreach($data_mfbod as $dm)
            <img src="{{url('imagesmfbod/'.$dm->image)}}" class="card-img-top" alt="..." style=" width:50%; height: 350px !important;">
            <div class="card-body">
                <h5 class="card-title">{{$dm->name}}</h5>
                <p class="card-text">{{$dm->mfbod_message}}</p>
                <p class="card-text"><small class="text-muted">{{date('l, d F Y',strtotime($dm->updated_at))}}</small></p>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection('content')