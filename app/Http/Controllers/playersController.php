<?php

namespace App\Http\Controllers;

use App\Models\players;
use Illuminate\Http\Request;

class playersController extends Controller
{
    //
    public function list(){
        $players = players::all();
        return view('players.list',compact('players'));
    }
}
