@extends('layouts.master_admin')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Edit Data</h1>
            </div><!-- /.col -->

        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- form start -->
        <form method="post" action="{{url('/opvideo/update/'.$edit_opvideos->id)}}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Url</label>
                    <input type="text" name="url" class="form-control" id="exampleInputEmail1" placeholder="Enter title" value="{{$edit_opvideos->url}}">
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Thumbnail</label>
                            <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                    </div>
                    <div class="col-sm-6">
                    </div>
                </div>
                <input type="text" name="updated_at" class="form-control" id="exampleInputEmail1" value="{{date('Y-m-d h:i:s')}}" readonly>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </form>
        <script>
            CKEDITOR.replace('post');
        </script>
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection('content')