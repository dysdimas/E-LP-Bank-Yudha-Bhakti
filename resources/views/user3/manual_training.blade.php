@extends('layouts.single_user3')
@section('content')
<div class="row">
    <div class="col-md-12">
        <main id="main_accordion">
            <div class="accordion">
                <div class="questions_3">
                    <div class="accordion_head_3">
                        <p>Division Funding & Services</p>
                    </div>
                    <div class="accordion_detail_3">
                        <h6 style="color:red">Services & Funding</h6>
                        <hr>
                        <a href="{{url('/manualdppreport')}}" style="color:red">> Material</a>
                        <hr>
                    </div>
                </div>
                <div class="questions_3">
                    <div class="accordion_head_3">
                        <p>Division Risk & Compliance</p>
                    </div>
                    <div class="accordion_detail_3">
                        <h6 style="color:red">All</h6>
                        <hr>
                        <a href="{{url('/manualrcreport')}}" style="color:red">> Material</a>
                        <hr>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
@endsection('content')