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
                                            <input type="text" class="form-control" name="search" id="search" placeholder="Search description" aria-label="Recipient's username" aria-describedby="button-addon2">
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
                                            <th scope="col" class="align-middle">#</th>
                                            <th class="align-middle">Description</th>
                                            <th>1 Month (% Suku Bunga)</th>
                                            <th>3 Month (% Suku Bunga)</th>
                                            <th>6 Month (% Suku Bunga)</th>
                                            <th>12 Month (% Suku Bunga)</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <form action="{{url('ideprate/update')}}" method="post">
                                            {{ csrf_field() }}
                                            @foreach($data_deprate as $dd)
                                            <tr>
                                                <td><b>{{$loop->iteration}}</b></td>
                                                <td>{{$dd->description}}</td>
                                                <td>{{$dd->onem}}</td>
                                                <td>{{$dd->twom}}</td>
                                                <td>{{$dd->threem}}</td>
                                                <td>{{$dd->twelm}}</td>
                                                <td>
                                                    <a href="{{url('/ideprate/edit/'.$dd->id)}}">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </form>
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