@extends('layouts.master_admin')
@section('content')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <h4>Edit Data</h4>
        <br>
        <form method="post" action="{{url('/user/update/'.$edit_user->id)}}"  enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter here please" required value="{{$edit_user->name}}">
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
                            <input type="text" name="nik" class="form-control" id="exampleInputEmail1" placeholder="Enter here please" required value="{{$edit_user->nik}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Position</label>
                            <input type="text" name="jabatan" class="form-control" id="exampleInputEmail1" placeholder="Enter here please" required value="{{$edit_user->jabatan}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Organization</label>
                            <input type="text" name="organisasi" class="form-control" id="exampleInputEmail1" placeholder="Enter here please" required value="{{$edit_user->organisasi}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Level</label>
                            <input type="text" name="level" class="form-control" id="exampleInputEmail1" placeholder="Enter here please" required value="{{$edit_user->level}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Status</label>
                            <input type="text" name="status" class="form-control" id="exampleInputEmail1" placeholder="Enter here please" required value="{{$edit_user->status}}">
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

        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->

</section>
<!-- /.content -->
@endsection('content')