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
                        <h6 style="color:red">Services</h6>
                        <hr>
                        <a href="{{url('/videodpp')}}" style="color:red">> All Video</a>
                        <hr>
                        <!-- <h6 style="color:red">Funding</h6>
                        <hr>
                        <a href="{{url('/videodpp')}}" style="color:red">> All Video</a>
                        <hr> -->
                    </div>
                </div>
                <!-- <div class="questions_3">
                    <div class="accordion_head_3">
                        <p>Division Risk & Compliance</p>
                    </div>
                    <div class="accordion_detail_3">
                        <p> Neque porro quisquam est quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                    </div>
                </div> -->
            </div>
        </main>
    </div>
</div>
@endsection('content')