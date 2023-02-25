<?php

namespace App\Http\Controllers;

use App\Models\teams;
use Illuminate\Http\Request;
use App\Models\players;
class teamsController extends Controller
{
    //
    public function list(){
        $teams = teams::all();
        return view('teams.list',compact('teams'));
    }

    public function find(teams $team){
        return view('teams.info',compact('team'));
    }

    public function formforteam(teams $team){
        return view('teams.form',compact('team'));
    }

    public function update(Request $request,teams $team){
        $teamupdate = teams::find($team->id);
        $teamupdate->name = $request->name;
        $teamupdate->coach = $request->coach;
        $teamupdate->category = $request->category;
        $teamupdate->budget = $request->budget;
        $teamupdate->save();
        return back();
    }

    public function addteam(){
        return view('teams.newteam');
    }


    public function store(Request $request,teams $team){
        $team = new teams;
        $team->name = $request->name;
        $team->coach = $request->coach;
        $team->category = $request->category;
        $team->budget = $request->budget;
        $team->save();
        return back();
    }

    // public function formforfire(players $player){
    //     return view('teams.fireplayer',compact('player'));
    // }
    public function formforfire(players $player,teams $team){
        return view('teams.fireplayer',compact('player','team'));
    }
    public function fireplayer(Request $request, players $player){
        $playerupdate = players::find($player->id);
        $playerupdate->teams_id = $request->fire;
        $playerupdate->save();
        return back();
    }

}
