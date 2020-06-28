@extends('layouts.master_admin')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">{{$title}}</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
        <hr>
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
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
                                <form action="{{url('/opsugcom')}}" method="GET">
                                    <div class="col-12">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="search" id="search" placeholder="Search by name" aria-label="Recipient's username" aria-describedby="button-addon2">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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