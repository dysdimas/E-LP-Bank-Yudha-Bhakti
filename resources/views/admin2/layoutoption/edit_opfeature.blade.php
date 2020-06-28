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
        <form method="post" action="{{url('/opfeature/update/'.$edit_feature->id)}}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter title" value="{{$edit_feature->title}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">SubTitle</label>
                    <input type="text" name="subtitle" class="form-control" id="exampleInputEmail1" placeholder="Enter sub-title" value="{{$edit_feature->subtitle}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Time</label>
                    <input type="text" name="time" class="form-control" id="exampleInputEmail1" value="{{date('Y-m-d h:i:s')}}" readonly>
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
                <div class="form-group">
                    <label for="exampleFormControlFile1">Description</label>
                    <textarea name="description" id="post" class="form-control-file">{{$edit_feature->description}}</textarea>
                </div>

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