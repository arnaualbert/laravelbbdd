<?php

namespace App\Http\Controllers;

use App\Models\teams;
use Illuminate\Http\Request;

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
}
