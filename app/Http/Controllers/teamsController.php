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
        // return back();
        $teams = teams::all();
        return view('teams.list',compact('teams'));
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

    public function listofplayerstohire(teams $team){
        $player = players::all();
        $teams = teams::all();
        return view('teams.makedeallist',compact('player','team','teams'));
    }
    public function formforhire(players $player,teams $team){
        return view('teams.hireplayer',compact('player','team'));
    }

    public function hireplayer(Request $request, players $player){
        $playerupdate = players::find($player->id);
        $playerupdate->teams_id = $request->hire;
        $playerupdate->save();
        return back();
    }

    public function formtodelete(teams $team){
        return view('teams.deleteteam',compact(('team')));
    }

    public function deleteteam(Request $request, teams $team){
        $teamtodelete = teams::find($request->idteam);
        $teamtodelete->delete();
        $teams = teams::all();
        return view('teams.list',compact('teams'));
    }
}
