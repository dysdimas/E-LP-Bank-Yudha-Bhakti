@extends('layouts.master_admin')
@section('content')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <h4>Ceo Message</h4>
        <br>
        <!-- Main row -->
        <div class="d-flex justify-content-center">
            <div>
                @if(session('sukses'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{session('sukses')}}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                <div class="row">
                    <div class="col" align="center">
                        <!-- /.card-header -->
                        @foreach($data_ceom as $dc)
                        <div class="col-sm-6">
                            <div class="card" align="center">
                                <div class="card-body">
                                    <img src="{{asset('imagesceom/'.$dc->image.'')}}" class="img-thumbnail" width="100" height="100">
                                    <h4 class="card-title font-16 mt-0">{{$dc->name}}</h4>
                                    <h4 class="card-title font-16 mt-0">{{date('l, d F Y',strtotime($dc->updated_at))}}</h4>
                                    <p class="card-text">{{$dc->ceom_message}}</p>
                                    <a href="{{url('/opceom/edit/'.$dc->id)}}" class="btn btn-primary waves-effect waves-light">Edit</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.row (main row) -->
</section>
<!-- /.content -->
@endsection('content')