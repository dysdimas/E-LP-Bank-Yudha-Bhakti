@extends('layouts.single_user3')
@section('content')
<div class="row">
    @foreach($data_ceom as $dc)
    <div class="col-md-12 margin-60px-bottom xs-margin-30px-bottom blockquote_box">
        <!-- style 02-->
        <h5 align="center">Ceo Message</h5>
        <div align="center">
            <img class="img-fluid" src="{{asset('imagesceom/'.$dc->image.'')}}" width="250" align="center">
        </div>
        <hr>
        <div class="border-left border-width-3 padding-25px-all xs-padding-20px-all blockquote_box_2 ">
            <p>{{$dc->ceom_message}}</p>
            <h6 class="font-size13 text-uppercase font-weight-600 no-margin">- {{$dc->name}}</h6>
        </div>
        <!-- end style 02-->
    </div>
    @endforeach
    <!-- <div class="col-md-6 margin-60px-bottom xs-margin-30px-bottom blockquote_box">
        <h5>Bod Message</h5> -->
    <!-- style 02-->
    <!-- <div class="border-left border-width-3 padding-25px-all xs-padding-20px-all blockquote_box_2 "> -->
    <!-- <img class="img-fluid" src="{{asset('imagesmfbod/'.$dc->image.'')}}" width="250"> -->
    <!-- <p>{{$dc->mfbod_message}}</p>
            <h6 class="font-size13 text-uppercase font-weight-600 no-margin">- {{$dc->name}}</h6>
        </div> -->
    <!-- end style 02-->
    <!-- </div> -->
</div>
@endsection('content')