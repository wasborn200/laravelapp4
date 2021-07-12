<?php

namespace App\Http\Controllers;

use App\Thread;
use App\Reply;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ThreadController extends Controller
{
    public function index(Response $response){
        $items = Thread::all();
        return view('thread.index', ['items' => $items]);
    }

    public function add(){
        $user = Auth::user();
        return view('thread.add', ['user' => $user]);
    }

    public function create(Request $request){
        $this->validate($request, Thread::$rules);
        $thread = new Thread;
        $form = $request->all();
        unset($form['_token']);
        $thread->fill($form)->save();
        return redirect('/thread');
    }

    public function show(Request $request){
        $item = Thread::where('id', $request->id)->first();
        // thread_idに紐づけられるreplyを全て表示する
        $replies = Reply::where('thread_id', $request->id)->get();
        $params = ['item' => $item, 'replies' => $replies];
        return view('thread.show', $params);
    }
}
