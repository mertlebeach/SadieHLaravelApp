<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Requests;

class RequestsController extends Controller
{
    //
    public function index()
    {
        return view('requests.requests');
    }
    public function create()
    {
        return view('requests.create');
    }
//    public function show($id)
//    {
//        dd(request()->all());
//    }
    public function store()
    {
        $post = new Requests;

        $post->info = request('info');
        $post->email = request('email');
        $post->user_id=1;

        $post->save();

        return redirect('/');

    }
}
