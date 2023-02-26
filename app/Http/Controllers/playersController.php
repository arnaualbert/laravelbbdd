<?php

namespace App\Http\Controllers;

use App\Models\players;
use App\Models\teams;
use Illuminate\Http\Request;

class playersController extends Controller
{
    //
    // public function list(){
    //     $players = players::all();
    //     return view('players.list',compact('players'));
    // }
    public function list(){
        $players = players::all();
        $teams = teams::all();
        return view('players.list',compact('players','teams'));
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
        $teams = teams::all();
        return view('players.list',compact('players','teams'));
    }

    public function makecontract(players $player){
        $teams = teams::all();
        return view('players.contract',compact('player','teams'));
    }

    public function singforateam(Request $request,players $player){
        $playerupdate = players::find($player->id);
        // $playerupdate->teams_id = $request->team;
        $teamtojoin = $request->team;
        $playerupdate->teams_id = $teamtojoin;
        $playerupdate->save();
        $teamjoined = teams::find($teamtojoin);
        return view('signedinfo',compact('playerupdate','teamjoined'));
        // $players = players::all();
        // $teams = teams::all();
        // return view('players.list',compact('players','teams'));

    }

    public function formtodelete(players $player){
        // return view('players.deleteplayer',compact(('player')));
        return view('players.deleteplayer',compact('player'));
    }

    public function deleteplayer(Request $request, players $player){
        $playertodelete = players::find($request->idplayer);
        $playertodelete->delete();
        $players = players::all();
        $teams = teams::all();
        return view('players.list',compact('players','teams'));
    }

    public function formeditplayer(players $player){
        return view('players.edit',compact('player'));
    }
}
