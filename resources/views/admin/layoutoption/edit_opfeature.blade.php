@extends('layouts.master_admin')
@section('content')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <h4>Edit Data</h4>
        <br>
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
        <!-- form start -->
        <form method="post" action="{{url('/opfeature/update/'.$edit_feature->id)}}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter title" value="{{$edit_feature->title}}" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">SubTitle</label>
                    <input type="text" name="subtitle" class="form-control" id="exampleInputEmail1" placeholder="Enter sub-title" value="{{$edit_feature->subtitle}}" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Time</label>
                    <input type="text" name="time" class="form-control" id="exampleInputEmail1" value="{{date('Y-m-d h:i:s')}}" readonly required>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Thumbnail</label>
                            <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Thumbnail 2</label>
                            <input type="file" name="image2" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Thumbnail 3</label>
                            <input type="file" name="image3" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Description</label>
                    <textarea name="description" id="post" class="form-control-file" required>{{$edit_feature->description}}</textarea>
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