<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'user_id' => 'required',
        'title' => 'required',
        'message' => 'required',
    );

    public function getData(){
        return 'id: ' . $this->id . ',  user_id: ' . $this->user_id
            . ',  title: ' . $this->title . ',  user_name: '
            . $this->person->name;
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
