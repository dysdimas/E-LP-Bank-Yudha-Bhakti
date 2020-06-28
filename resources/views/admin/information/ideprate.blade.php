@extends('layouts.master_admin')
@section('content')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <h4>Deposit Rate</h4>
        <br>
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
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="align-middle">#</th>
                                            <th class="align-middle">Description</th>
                                            <th>1 Month (% Suku Bunga)</th>
                                            <th>3 Month (% Suku Bunga)</th>
                                            <th>6 Month (% Suku Bunga)</th>
                                            <th>12 Month (% Suku Bunga)</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <form action="{{url('ideprate/update')}}" method="post">
                                            {{ csrf_field() }}
                                            @foreach($data_deprate as $dd)
                                            <tr>
                                                <td><b>{{$loop->iteration}}</b></td>
                                                <td>{{$dd->description}}</td>
                                                <td>{{$dd->onem}}</td>
                                                <td>{{$dd->twom}}</td>
                                                <td>{{$dd->threem}}</td>
                                                <td>{{$dd->twelm}}</td>
                                                <td>
                                                    <a href="{{url('/ideprate/edit/'.$dd->id)}}">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </form>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
                <h4>Suku Bunga Kredit</h4>
                <br>
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="align-middle">#</th>
                                            <th>Segment Kredit</th>
                                            <th>SBDK</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <form action="{{url('isbdk/update')}}" method="post">
                                            {{ csrf_field() }}
                                            @foreach($data_sbdk as $ds)
                                            <tr>
                                                <td><b>{{$loop->iteration}}</b></td>
                                                <td>{{$ds->segmen}}</td>
                                                <td>{{$ds->sbdk}}</td>
                                                <td>
                                                    <a href="{{url('/isbdk/edit/'.$ds->id)}}">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </form>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row (main row) -->
</section>
<!-- /.content -->
@endsection('content')