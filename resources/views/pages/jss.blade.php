@extends('layouts.app')

@section('content')

<div class="container" style="margin-top: 10px;">
    <a href="{{ url()->previous() }}" class="btn btn-sm shadow-none" style="margin: 10px; background-color: #00ff5f; color: #ffffff;">Go Back</a>
    <div class="row">
        
        <div class="col-md-4 shadow-md mb-2"> 
            <div class="card" style="background-color: rgba(255, 255, 255, 0.572)">
                <img class="card-img-top" src="/img/jrn_sec.jpg" alt="">
                <div class="card-body">
                    <h4 class="card-title">JSS ONE</h4>
                    <p class="card-text">Get access to free Junior Secondary School One exam ready matarials</p>
                    <a class="btn" style="margin: 10px; background-color: orange; color: #ffffff;">Start Now</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 shadow-md mb-2">
            <div class="card" style="background-color: rgba(255, 255, 255, 0.572)">
                <img class="card-img-top" src="/img/jrn_sec.jpg" alt="">
                <div class="card-body">
                    <h4 class="card-title">JSS TWO</h4>
                    <p class="card-text">Get access to free Junior Secondary School Two exam ready matarials</p>
                    <a class="btn" style="margin: 10px; background-color: #00ff5f; color: #ffffff;">Start Now</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 shadow-md mb-2">
            <div class="card" style="background-color: rgba(255, 255, 255, 0.572)">
                <img class="card-img-top" src="/img/jrn_sec.jpg" alt="">
                <div class="card-body">
                    <h4 class="card-title">JSS THREE</h4>
                    <p class="card-text">Get access to free Junior Secondary School Three exam ready matarials</p>
                    <a class="btn" style="margin: 10px; background-color: orange; color: #ffffff;">Start Now</a>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection