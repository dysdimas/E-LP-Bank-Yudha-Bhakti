@extends('layouts.master_admin')
@section('content')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <h4>Hot News</h4>
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
                    @foreach($data_ophot as $dop)
                    <div class="col-4">
                        <div class="card" align="center">
                            <div class="card-body">
                                <img src="{{asset('imageshotnews/'.$dop[0]->image.'')}}" class="img-thumbnail" width="100" height="100">
                                <h4 class="card-title font-16 mt-0">Super Hot News 1</h4>
                                <p class="card-text">Description 1 : {{str_word_count($dop[0]->description)}} Words</p>
                                <p class="card-text">Description 2 : {{str_word_count($dop[0]->description2)}} Words</p>
                                <p class="card-text">Description 3 : {{str_word_count($dop[0]->description3)}} Words</p>
                                <a href="{{url('ophot/edit/'.$dop[0]->id.'')}}" class="btn btn-primary waves-effect waves-light">Edit</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @foreach($data_ophot as $dop)
                    <div class="col-4">
                        <div class="card" align="center">
                            <div class="card-body">
                                <img src="{{asset('imageshotnews/'.$dop[1]->image.'')}}" class="img-thumbnail" width="100" height="100">
                                <h4 class="card-title font-16 mt-0">Super Hot News 2</h4>
                                <p class="card-text">Description 1 : {{str_word_count($dop[1]->description)}} Words</p>
                                <p class="card-text">Description 2 : {{str_word_count($dop[1]->description2)}} Words</p>
                                <p class="card-text">Description 3 : {{str_word_count($dop[1]->description3)}} Words</p>
                                <a href="{{url('ophot/edit/'.$dop[1]->id.'')}}" class="btn btn-primary waves-effect waves-light">Edit</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @foreach($data_ophot as $dop)
                    <div class="col-4">
                        <div class="card" align="center">
                            <div class="card-body">
                                <img src="{{asset('imageshotnews/'.$dop[2]->image.'')}}" class="img-thumbnail" width="100" height="100">
                                <h4 class="card-title font-16 mt-0">Super Hot News 3</h4>
                                <p class="card-text">Description 1 : {{str_word_count($dop[2]->description)}} Words</p>
                                <p class="card-text">Description 2 : {{str_word_count($dop[2]->description2)}} Words</p>
                                <p class="card-text">Description 3 : {{str_word_count($dop[2]->description3)}} Words</p>
                                <a href="{{url('ophot/edit/'.$dop[2]->id.'')}}" class="btn btn-primary waves-effect waves-light">Edit</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="row" align="center">
                    @foreach($data_ophot as $dop)
                    <div class="col-sm-6">
                        <div class="card" align="center">
                            <div class="card-body">
                                <img src="{{asset('imageshotnews/'.$dop[3]->image.'')}}" class="img-thumbnail" width="100" height="100">
                                <h4 class="card-title font-16 mt-0">Top-Left Hot News</h4>
                                <p class="card-text">Description 1 : {{str_word_count($dop[3]->description)}} Words</p>
                                <p class="card-text">Description 2 : {{str_word_count($dop[3]->description2)}} Words</p>
                                <p class="card-text">Description 3 : {{str_word_count($dop[3]->description3)}} Words</p>
                                <a href="{{url('ophot/edit/'.$dop[3]->id.'')}}" class="btn btn-primary waves-effect waves-light">Edit</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @foreach($data_ophot as $dop)
                    <div class="col-sm-6">
                        <div class="card" align="center">
                            <div class="card-body">
                                <img src="{{asset('imageshotnews/'.$dop[4]->image.'')}}" class="img-thumbnail" width="100" height="100">
                                <h4 class="card-title font-16 mt-0">Top-Right Hot News</h4>
                                <p class="card-text">Description 1 : {{str_word_count($dop[4]->description)}} Words</p>
                                <p class="card-text">Description 2 : {{str_word_count($dop[4]->description2)}} Words</p>
                                <p class="card-text">Description 3 : {{str_word_count($dop[4]->description3)}} Words</p>
                                <a href="{{url('ophot/edit/'.$dop[4]->id.'')}}" class="btn btn-primary waves-effect waves-light">Edit</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @foreach($data_ophot as $dop)
                    <div class="col-sm-6">
                        <div class="card" align="center">
                            <div class="card-body">
                                <img src="{{asset('imageshotnews/'.$dop[5]->image.'')}}" class="img-thumbnail" width="100" height="100">
                                <h4 class="card-title font-16 mt-0">Bottom-Left Hot News</h4>
                                <p class="card-text">Description 1 : {{str_word_count($dop[5]->description)}} Words</p>
                                <p class="card-text">Description 2 : {{str_word_count($dop[5]->description2)}} Words</p>
                                <p class="card-text">Description 3 : {{str_word_count($dop[5]->description3)}} Words</p>
                                <a href="{{url('ophot/edit/'.$dop[5]->id.'')}}" class="btn btn-primary waves-effect waves-light">Edit</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @foreach($data_ophot as $dop)
                    <div class="col-sm-6">
                        <div class="card" align="center">
                            <div class="card-body">
                                <img src="{{asset('imageshotnews/'.$dop[6]->image.'')}}" class="img-thumbnail" width="100" height="100">
                                <h4 class="card-title font-16 mt-0">Bottom-Right Hot News</h4>
                                <p class="card-text">Description 1 : {{str_word_count($dop[6]->description)}} Words</p>
                                <p class="card-text">Description 2 : {{str_word_count($dop[6]->description2)}} Words</p>
                                <p class="card-text">Description 3 : {{str_word_count($dop[6]->description3)}} Words</p>
                                <a href="{{url('ophot/edit/'.$dop[6]->id.'')}}" class="btn btn-primary waves-effect waves-light">Edit</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- /.row (main row) -->

        <!-- Modal Create -->
        <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalScrollableTitle">Create New Post Feature</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- form start -->
                        <form method="post" action="{{url('/upfeature')}}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Title</label>
                                    <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter title" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">SubTitle</label>
                                    <input type="text" name="subtitle" class="form-control" id="exampleInputEmail1" placeholder="Enter sub-title" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Time</label>
                                    <input type="text" name="time" class="form-control" id="exampleInputEmail1" value="{{date('Y-m-d h:i:s')}}" readonly>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="exampleFormControlFile1">Thumbnail</label>
                                            <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1" multiple="true" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="exampleFormControlFile1">Thumbnail 2</label>
                                            <input type="file" name="image2" class="form-control-file" id="exampleFormControlFile1" multiple="true" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="exampleFormControlFile1">Thumbnail 3</label>
                                            <input type="file" name="image3" class="form-control-file" id="exampleFormControlFile1" multiple="true" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Description</label>
                                    <textarea name="description" id="post" class="form-control-file" required>Type here .....</textarea>
                                </div>
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

</section>
<!-- /.content -->
@endsection('content')