<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function show($id)
    {
        dd(request()->all());
    }
}
