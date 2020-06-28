@extends('layouts.master_user')
@section('content')
<div class="single-blog-post featured-post">
    <div class="post-thumb">
        <h1>Deposit Rate Interest</h1>
    </div>
</div>
<hr>
<div>
    <div class="row">
        <div class="col">
            <table class="table table-hover table-dark">
                <thead>
                    <tr align="center">
                        <th scope="col" class="align-middle">#</th>
                        <th class="align-middle">Description</th>
                        <th>1 Month (% Suku Bunga)</th>
                        <th>3 Month (% Suku Bunga)</th>
                        <th>6 Month (% Suku Bunga)</th>
                        <th>12 Month (% Suku Bunga)</th>
                    </tr>

                </thead>
                <tbody>
                    <form action="{{url('/update/{id}')}}" method="post">
                        @foreach($data_deprate as $dd)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$dd->description}}</td>
                            <td align="center">{{$dd->onem}}</td>
                            <td align="center">{{$dd->twom}}</td>
                            <td align="center">{{$dd->threem}}</td>
                            <td align="center">{{$dd->twelm}}</td>
                        </tr>
                        @endforeach
                    </form>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="single-blog-post featured-post">
    <div class="post-thumb">
        <h1>Kredit Rate Interest</h1>
    </div>
</div>
@endsection('content')