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

    public function addplayer(){
        return view('players.form');
    }

    public function store(Request $request,players $player){
        $player = new players;
        $player->name = $request->name;
        $player->surname = $request->surname;
        $player->yearofbirth = $request->yearofbirth;
        $player->salary = $request->salary;
        // $player->teams_id = "";
        $player->save();
        // return back();
        $players = players::all();
        return view('players.list',compact('players'));
    }



}
