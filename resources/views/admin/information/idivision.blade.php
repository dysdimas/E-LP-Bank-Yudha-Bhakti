@extends('layouts.master_admin')
@section('content')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <h4>Division News</h4>
        <br>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">
            Post New Branch News
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
                                <table id="datatable_idivision" class="table table-bordered table-responsive">
                                    <thead>
                                        <tr>
                                            <th scope="col">Divisi</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Image 2</th>
                                            <th scope="col">Image 3</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Time Post</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- @foreach($data_division as $ddv)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$ddv->divisi}}</td>
                                            <td>{{$ddv->title}}</td>
                                            <td><img src="{{asset('imagesdivision/'.$ddv->image.'')}}" class="img-thumbnail" width="100" height="100"></td>
                                            <td><img src="{{asset('imagesdivision/'.$ddv->image2.'')}}" class="img-thumbnail" width="100" height="100"></td>
                                            <td><img src="{{asset('imagesdivision/'.$ddv->image3.'')}}" class="img-thumbnail" width="100" height="100"></td>
                                            <td>{{str_word_count($ddv->description)}} words</td>
                                            <td>{{$ddv->updated_at}}</td>
                                            <td>
                                                <a href="{{url('/idivision/edit/'.$ddv->id)}}">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <a href="{{url('/idivision/delete/'.$ddv->id)}}">
                                                    <i class="fas fa-trash-alt"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach -->
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row (main row) -->
    </div>
</section>
<!-- /.content -->

<!-- Modal Create -->
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Create New Post</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- form start -->
                <form method="post" action="{{url('/upidivision')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Divisi</label>
                            <input type="text" name="divisi" class="form-control" id="exampleInputEmail1" placeholder="Enter divisi" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter title" required>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Thumbnail</label>
                                    <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1" required>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Thumbnail 2</label>
                                    <input type="file" name="image2" class="form-control-file" id="exampleFormControlFile1" required>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Thumbnail 3</label>
                                    <input type="file" name="image3" class="form-control-file" id="exampleFormControlFile1" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Description</label>
                            <textarea name="description" id="post" class="form-control-file" required>Type here .....</textarea>
                        </div>
                        <input type="text" name="updated_at" class="form-control" id="exampleInputEmail1" value="{{date('Y-m-d h:i:s')}}" hidden required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
                <script>
                    CKEDITOR.replace('post');
                </script>
            </div>
        </div>
    </div>
</div><!-- /.container-fluid -->
<script>
    $(document).ready(function() {
        $('#datatable_idivision').DataTable({
            processing: true,
            serverside: true,
            ajax: "{{route('ajax.get.data.idivision')}}",
            columns: [{
                    data: 'divisi',
                    name: 'divisi'
                },
                {
                    data: 'title',
                    name: 'title'
                },
                {
                    data: 'image',
                    name: 'image'
                },
                {
                    data: 'image2',
                    name: 'image2'
                },
                {
                    data: 'image3',
                    name: 'image3'
                },
                {
                    data: 'description',
                    name: 'description'
                },
                {
                    data: 'updated_at',
                    name: 'updated_at'
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