@extends('layouts.appother')
@section('content')
    <div class="contact">
        <form method="POST" action="/requests"  enctype="multipart/form-data">
            {{csrf_field() }}
            <div class = "form-group">
            <label for="email"> Enter your email:</label>


            <input class="form-control" type = "text"  id ="email" name = "email">
            </div>
            <div class="form-group">
            What info would you like to know?

            <textarea  class="form-control" id ="info"  cols="40" name="info" rows="15"> </textarea>
            </div>
            <input class="btn btn-primary"type="submit">
        </form>
    </div>
@endsection