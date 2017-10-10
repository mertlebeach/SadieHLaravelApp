<!DOCTYPE html>

<html>
    <head>

    </head>
    <body>
        <ul>
            @foreach($requests as $request)
                <li>{{$request->email}}</li>
            @endforeach



        </ul>
    </body>
</html>
