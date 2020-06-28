@extends('layouts.master_admin')
@section('content')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <h4>Message From BOD</h4>
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
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Profile Image</th>
                                            <th scope="col">Ceo Message</th>
                                            <th scope="col">Time Post</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data_mfbod as $dm)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$dm->name}}</td>
                                            <td><img src="{{asset('imagesmfbod/'.$dm->image.'')}}" class="img-thumbnail" width="100" height="100"></td>
                                            <td>{{$dm->mfbod_message}}</td>
                                            <td>{{$dm->updated_at}}</td>
                                            <td>
                                                <a href="{{url('/opmfbod/edit/'.$dm->id)}}">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row (main row) -->
</section>
<!-- /.content -->
@endsection('content')