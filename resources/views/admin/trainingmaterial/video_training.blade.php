@extends('layouts.master_admin')
@section('content')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <h4>{{$title}}</h4>
        <br>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">
            Post New Video
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
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <h3>DPP Video</h3>
                                <table id="datatable_opvideosdpp" class="table table-bordered table-responsive">
                                    <thead>
                                        <tr>
                                            <th scope="col">Title</th>
                                            <th scope="col">Url</th>
                                            <th scope="col">Thumbnail</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- @foreach($data_opvideos as $ov)
                                        <tr>
                                            <th scope="row"><b>{{$loop->iteration}}</b></th>
                                            <td>{{$ov->title}}</td>
                                            <td>{{$ov->url}}</td>
                                            <td><img src="{{asset('images/'.$ov->image.'')}}" class="img-thumbnail" width="100" height="100"></td>
                                            <td>
                                                <a href="{{url('/opvideo/edit/'.$ov->id)}}">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                &nbsp;
                                                &nbsp;
                                                <a href="{{url('/opvideo/delete/'.$ov->id)}}">
                                                    <i class="fas fa-trash-alt"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach -->
                                    </tbody>
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
                        <form method="post" action="{{url('/upopvid')}}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Title</label>
                                    <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter title" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Url</label>
                                    <input type="text" name="url" class="form-control" id="exampleInputEmail1" placeholder="Enter url youtube" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Thumbnail</label>
                                    <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1" required>
                                </div>
                                <input type="text" name="updated_at" class="form-control" id="exampleInputEmail1" value="{{date('Y-m-d h:i:s')}}" readonly>
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

    </div>
    <!-- /.row (main row) -->
</section>
<!-- /.content -->
<script>
    $(document).ready(function() {
        $('#datatable_opvideosdpp').DataTable({
            processing: true,
            serverside: true,
            ajax: "{{route('ajax.get.data.opvideosdpp')}}",
            columns: [{
                    data: 'title',
                    name: 'title'
                },
                {
                    data: 'url',
                    name: 'url'
                },
                {
                    data: 'image',
                    name: 'image'
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