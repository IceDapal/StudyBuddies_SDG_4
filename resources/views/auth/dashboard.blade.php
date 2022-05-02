@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (Auth::check() && !(Auth::user()->id !== 1))
            <a href="/create" class="btn btn-sm shadow-none" style="margin: 10px; background-color: #00ff5f; color: #ffffff;">Add New Curricullum</a>
            @endif         
            <div class="card">
                <div class="card-header" style="font-weight: bold;">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (Auth::check() && !(Auth::user()->id !== 1))
                        @if(count($curricullums) > 0)
                        <table class="table table-hover">
                            <thead style="font-weight: bold; background-color: #242424; color: #f0f0f0; font-size: 14px;
                            font-family: Verdana, Geneva, Tahoma, sans-serif;
                            ">
                            <tr>
                                <td style="width: 30%">Class</td>
                                <td style="width: 30%">Subject</td>
                                <td style="width: 15%">Edit</td>
                                <td style="width: 15%">Delete</td>
                                
                        
                        
                            </tr>
                            </thead>
                            
                            <tbody>
                                @foreach($curricullums as $curricullum)
                                <tr>
                                    <td style="width: 30%"><p><a href="/curricullums/{{$curricullum->id}}">{{ $curricullum->level }}</a></p></td>
    
                                    <td style="width: 30%"><p><a href="/curricullums/{{$curricullum->id}}"> {{$curricullum->subject}}</a></p></td>
                                    
                                    <td style="width: 15%">
                                        <a href="/curricullums/{{$curricullum->id}}/edit" class="btn btn-sm shadow-none" style="font-size: 13px; border:#242424 1px solid; color:#242424;">Edit</a>
                                    </td>
                                    <td style="width: 15%">
                                        <a href="{{ URL::to('curricullums/'.$curricullum->id.'/delete') }}" data-target="delete" class="btn btn-sm btn-danger btn-flat shadow-none">Delete</a>
                                    </td>
                            
                                </tr>
                                @endforeach
                            </tbody>
                        
                        </table>
                        @else
                
                        <p>You have not added any curricullum yet</p>
    
                    
                    
                        @endif

                    @else

                    <p>You are in Volunteer Dashboard</p>

                    @endif
                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
