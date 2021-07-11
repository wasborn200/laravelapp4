<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index(Request $request){
        $items = User::all();
        return view('hello.index', ['items' => $items]);
    }
}
