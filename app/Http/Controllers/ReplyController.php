<?php

namespace App\Http\Controllers;

use App\Thread;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReplyController extends Controller
{
    public function add(Request $request){
        $user = Auth::user();
        $thread_id = $request->thread_id;
        $params = ['user' => $user, 'thread_id' => $thread_id];
        return view('reply.add', $params);
    }

    public function create(Request $request){
        $this->validate($request, Thread::$rules);
        $thread = new Thread;
        $form = $request->all();
        unset($form['_token']);
        $thread->fill($form)->save();
        return redirect('/thread');
    }
}
