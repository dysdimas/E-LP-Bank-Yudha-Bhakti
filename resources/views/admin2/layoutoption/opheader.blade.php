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
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">
            Post New Navbar
        </button>
        <br>
        <hr>
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
                                            <input type="text" class="form-control" name="search" id="search" placeholder="Search by menu" aria-label="Recipient's username" aria-describedby="button-addon2">
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
                                            <th scope="col">Url</th>
                                            <th scope="col">Menu</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data_usermenu as $du)
                                        <tr>
                                            <td><b>{{$loop->iteration}}</b></td>
                                            <td>{{$du->url}}</td>
                                            <td>{{$du->menu}}</td>
                                            <td>
                                                <a href="{{url('/opheader/edit/'.$du->id)}}">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                &nbsp;
                                                &nbsp;
                                                <a href="{{url('/opheader/delete/'.$du->id)}}">
                                                    <i class="fas fa-trash-alt"></i>
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

        <!-- Modal Create -->
        <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalScrollableTitle">Create New Post</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- form start -->
                        <form method="post" action="{{url('/upheader')}}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Url</label>
                                    <input type="text" name="url" class="form-control" id="exampleInputEmail1" placeholder="Enter url" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Menu</label>
                                    <input type="text" name="menu" class="form-control" id="exampleInputEmail1" placeholder="Enter url menu" required>
                                </div>
                                <input type="text" name="updated_at" class="form-control" id="exampleInputEmail1" value="{{date('Y-m-d h:i:s')}}" hidden>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->

</section>
<!-- /.content -->
@endsection('content')