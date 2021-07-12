<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $guarded = array('id');

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function thread(){
        return $this->belongsTo('App\Thread');
    }

    public static $rules = array(
        'message' => 'required',
    );

}
