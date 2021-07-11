<?php

namespace App;

use http\Env\Request;
use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    protected $guarded = array('id');

    public function user(){
        return $this->belongsTo('App\User');
    }

    public static $rules = array(
        'user_id' => 'required',
        'title' => 'required',
        'message' => 'required',
    );

    public function index(Request $response){
        $items = Thread::all();
        return view('thread.index', ['items' => $items]);
    }
}
