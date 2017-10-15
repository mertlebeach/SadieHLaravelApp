@extends('layouts.appother')
@section('content')

<html>
    <head>

    </head>
    <body>
        <table class="table">
            <thead>
                <tr>
                    <th>Email</th>
                    <th>Inquiry</th>
                </tr>
            </thead>
            <tbody>
            @foreach($requests as $request)
                <tr>
                <td>{{$request->email}}</td>
                <td>{{$request->info}}</td>
                </tr>
            @endforeach
            </tbody>



        </table>
    </body>
</html>
@endsection