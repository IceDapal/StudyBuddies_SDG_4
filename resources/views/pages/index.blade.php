@extends('layouts.app')

@section('content')

<div class="container" style="margin-top: 10px;">
    <div class="row">

        <div class="col-md-4 shadow-md mb-2"> 
            <div class="card" style="background-color: rgba(255, 255, 255, 0.572)">
                <img class="card-img-top" src="/img/pri_sch.jpg" alt="">
                <div class="card-body">
                    <h4 class="card-title">Primary School</h4>
                    <p class="card-text">Get access to free Primary School exam ready matarials</p>
                    <a class="btn" style="margin: 10px; background-color: orange; color: #ffffff;">Start Now</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 shadow-md mb-2">
            <div class="card" style="background-color: rgba(255, 255, 255, 0.572)">
                <img class="card-img-top" src="/img/jrn_sec.jpg" alt="">
                <div class="card-body">
                    <h4 class="card-title">Junior Secondary School</h4>
                    <p class="card-text">Get access to free Junior Secondary School exam ready matarials</p>
                    <a href="/jss" class="btn" style="margin: 10px; background-color: #00ff5f; color: #ffffff;">Start Now</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 shadow-md mb-2">
            <div class="card" style="background-color: rgba(255, 255, 255, 0.572)">
                <img class="card-img-top" src="/img/srn_sec.jpg" alt="">
                <div class="card-body">
                    <h4 class="card-title">Senior Secondary School</h4>
                    <p class="card-text">Get access to free Senior Secondary School exam ready matarials</p>
                    <a href="/sss" class="btn" style="margin: 10px; background-color: orange; color: #ffffff;">Start Now</a>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection