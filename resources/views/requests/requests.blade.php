@extends('layouts.appother')
@section('content')

<div class="container pull-right">
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
</div>

@endsection