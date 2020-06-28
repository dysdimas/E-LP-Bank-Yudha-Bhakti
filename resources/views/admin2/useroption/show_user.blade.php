@extends('layouts.master_admin')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Data User</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
        <hr>
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        @if(session('sukses'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{session('sukses')}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <!-- Main row -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <form action="{{url('/showuser')}}" method="GET">
                            <div class="row">
                                <div class="col-2">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">
                                        Create User
                                    </button>
                                </div>
                                <div class="col-10">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="search" id="search" placeholder="Search name or nik" aria-label="Recipient's username" aria-describedby="button-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
                                        </div>
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
                                    <th scope="col">Num.</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">NIK</th>
                                    <th scope="col">Jabatan</th>
                                    <th scope="col">Organisasi</th>
                                    <th scope="col">Level</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Active</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = $data_user->firstItem() - 1; ?>
                                @foreach($data_user as $du)
                                <?php $no++; ?>
                                <tr>
                                    <th scope="row">{{$no}}</th>
                                    <td>{{ $du->name }}</td>
                                    <td>{{ $du->role }}</td>
                                    <td>{{ $du->nik }}</td>
                                    <td>{{ $du->jabatan }}</td>
                                    <td>{{ $du->organisasi }}</td>
                                    <td>{{ $du->level }}</td>
                                    <td>{{ $du->status }}</td>
                                    <td>{{ $du->is_active }}</td>
                                </tr>
                                @endforeach
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                {{ $data_user->links( "pagination::bootstrap-4") }}
            </div>
            <div>
            </div>
        </div>
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

<!-- Modal Create -->
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Create New Account</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- form start -->
                <form method="post" action="{{url('/upshowuser')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter here please" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Role</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="role">
                                <option value="1">Super Admin</option>
                                <option value="2">User</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nik</label>
                            <input type="text" name="nik" class="form-control" id="exampleInputEmail1" placeholder="Enter here please" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Position</label>
                            <input type="text" name="jabatan" class="form-control" id="exampleInputEmail1" placeholder="Enter here please" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Organization</label>
                            <input type="text" name="organisasi" class="form-control" id="exampleInputEmail1" placeholder="Enter here please" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Level</label>
                            <input type="text" name="level" class="form-control" id="exampleInputEmail1" placeholder="Enter here please" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Status</label>
                            <input type="text" name="status" class="form-control" id="exampleInputEmail1" placeholder="Enter here please" required>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="defaultCheck1" name="is_active">
                            <label class="form-check-label" for="defaultCheck1">
                                Active ?
                            </label>
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
@endsection('content')