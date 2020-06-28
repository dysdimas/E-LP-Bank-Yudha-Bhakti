@extends('layouts.master_admin')
@section('content')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <h4>User Data</h4>
        <br>
        @if(session('sukses'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{session('sukses')}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        {{-- menampilkan error validasi --}}
        @if (count($errors) > 0)
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                <span>{{ $error }}|</span>
                @endforeach
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </ul>
        </div>
        @endif
        <!-- Main row -->
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <form action="{{url('/showuser')}}" method="GET">
                            <div class="row">
                                <div class="col-1">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">
                                        Create
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="datatable_user" class="table table-bordered table-responsive">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Role</th>
                                    <th>NIK</th>
                                    <th>Jabatan</th>
                                    <th>Organisasi</th>
                                    <th>Level</th>
                                    <th>Status</th>
                                    <th>Active</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <!-- <tbody>
                                @foreach($data_user as $du)
                                <tr>
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
                            </tbody> -->
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
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
                            <input class="form-check-input" type="checkbox" value="1" id="defaultCheck1" name="is_active" required>
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
<script>
    $(document).ready(function() {
        $('#datatable_user').DataTable({
            processing: true,
            serverside: true,
            ajax: "{{route('ajax.get.data.user')}}",
            columns: [{
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'role',
                    name: 'role'
                },
                {
                    data: 'nik',
                    name: 'nik'
                },
                {
                    data: 'jabatan',
                    name: 'jabatan'
                },
                {
                    data: 'organisasi',
                    name: 'organisasi'
                },
                {
                    data: 'level',
                    name: 'level'
                },
                {
                    data: 'status',
                    name: 'status'
                },
                {
                    data: 'is_active',
                    name: 'is_active'
                },
                {
                    data: 'action',
                    name: 'action'
                },
            ]
        });
    });
</script>
@endsection('content')