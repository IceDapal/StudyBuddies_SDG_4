@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="font-weight: bold;">Add Curricullum</div>

                <div class="card-body">
                    <form action="/store" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="level" class="form-label">Select Class</label>
                            <select class="form-control" name="level" id="level">
                              @foreach ($levels as $level)
                                  <option value="{{ $level->level }}">{{ $level->level }}</option>
                              @endforeach
                            </select>
                          </div>

                        <div class="mb-3">
                          <label for="subject" class="form-label">Select Subject</label>
                          <select class="form-control" name="subject" id="subject">
                            @foreach ($subjects as $subject)
                                <option value="{{ $subject->subject }}">{{ $subject->subject }}</option>
                            @endforeach
                          </select>
                        </div>

                        <div class="mb-3">
                          <label for="curricullum" class="form-label">Curricullum</label>
                          <textarea class="form-control" name="curricullum" id="summary-ckeditor" rows="3"></textarea>
                        </div>

                        <button type="submit" class="btn" style="margin: 10px; background-color: orange; color: #ffffff; padding: 10px 25px;">Add curricullum</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
