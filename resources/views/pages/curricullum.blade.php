@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{ url()->previous() }}" class="btn btn-sm shadow-none" style="margin: 10px; background-color: #00ff5f; color: #ffffff;">Go Back</a>
            <div class="card" style="background-color: rgba(255, 255, 255, 0.572)">
                <div class="card-header" style="font-weight: bold; color: black;">{{ $curricullums->level }} | {{ $curricullums->subject }}</div>
                <div class="card-body">
                    {!! $curricullums->curricullum !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection