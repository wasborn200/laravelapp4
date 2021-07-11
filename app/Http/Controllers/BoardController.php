<?php

namespace App\Http\Controllers;

use App\Board;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BoardController extends Controller
{
    public function index(){
        $items = Board::all();
        return view('board.index', ['items' => $items]);
    }

    public function add(){
        $user = Auth::user();
        return view('board.add', ['user' => $user]);
    }

    public function create(Request $request){
        $this->validate($request, Board::$rules);
        $board = new Board;
        $form = $request->all();
        unset($form['_token']);
        $board->fill($form)->save();
        logger($board);
        return redirect('/board');
    }
}
