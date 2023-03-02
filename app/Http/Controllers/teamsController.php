<?php

namespace App\Http\Controllers;

use App\Models\teams;
use Illuminate\Http\Request;
use App\Models\players;

class teamsController extends Controller
{
    //
    /**
     * show the view of the teams with a list
     */
    public function list()
    {
        $teams = teams::all();
        return view('teams.list', compact('teams'));
    }
    /**
     * show the team info
     * @param $team type teams(object)
     * return view
     */
    public function find(teams $team)
    {
        return view('teams.info', compact('team'));
    }
    /**
     * show the form for edit a team
     * @param $team type teams(object)
     */
    public function formforteam(teams $team)
    {
        return view('teams.form', compact('team'));
    }
    /**
     * update the team with the params of the form
     * @param $team type teams(object)
     * @param $request type request(object)
     * return view
     */
    public function update(Request $request, teams $team)
    {
        $oldteam = teams::find($team->id);
        $teamupdate = teams::find($team->id);
        $teamupdate->name = $request->name;
        $teamupdate->coach = $request->coach;
        $teamupdate->category = $request->category;
        $teamupdate->budget = $request->budget;
        // $teamupdate->save();
        // return back();
        if ($request->category != null && $request->name != null && $request->coach != null && $request->budget != null) {
            $teamupdate->save();
            return view('teamupdateinfo', compact('teamupdate', 'oldteam'));
        } else {
            return view('teams.form', compact('team'));
        }
    }
    /**
     * show the add team view
     */
    public function addteam()
    {
        return view('teams.newteam');
    }
    /**
     * the function add a new team to the database
     * @param $request
     * @param $team
     */
    public function store(Request $request, teams $team)
    {
        $team = new teams;
        $team->name = $request->name;
        $team->coach = $request->coach;
        $team->category = $request->category;
        $team->budget = $request->budget;
        // $team->save();
        // // return back();
        // $teams = teams::all();
        if($request->category != null && $request->name != null && $request->coach != null && $request->budget != null){
            $team->save();
            $teams = teams::all();
            return view('teams.list', compact('teams'));
        }else{
        return view('teams.newteam', compact('teams'));
        }
    }

    /**
     * this show the form to fire a player
     * @param $player is the player to be fired
     */
    public function formforfire(players $player, teams $team)
    {
        return view('teams.fireplayer', compact('player', 'team'));
    }
    /**
     * This fire a player from the team
     * @param $player is the player to be fired
     * @param $team is the team to be fired
     */
    public function fireplayer(Request $request, players $player)
    {
        $playerupdate = players::find($player->id);
        // $teamfired = $playerupdate->teams_id;
        $playerupdate->teams_id = $request->fire;
        $playerupdate->save();
        //temporal
        $teams = teams::all();
        return view('teams.list', compact('teams'));
        // return back();
        // $playerfired = players::find($player->id);
        // return view('firedinfo',compact('playerfired','teamfired'));
        // $teamjoined = teams::find($playerupdate->teams_id);
        // return view('signedinfo',compact('player','teamjoined'));

    }
    /**
     * is the list of players that can be signed for a team
     * @param $team is the team that is going to sign
     */
    public function listofplayerstohire(teams $team)
    {
        $player = players::all();
        $teams = teams::all();
        return view('teams.makedeallist', compact('player', 'team', 'teams'));
    }
    /**
     * show the form to
     * @param $team
     */
    public function formforhire(players $player, teams $team)
    {
        return view('teams.hireplayer', compact('player', 'team'));
    }
    /**
     * hire a player from the list of players to the team
     * @param $request is the request object to get the info from the form
     * @param $player is the player to hire
     */
    public function hireplayer(Request $request, players $player)
    {
        $playerupdate = players::find($player->id);
        $playerupdate->teams_id = $request->hire;
        $playerupdate->save();
        // return back();
        $teamjoined = teams::find($playerupdate->teams_id);
        return view('signedinfo', compact('playerupdate', 'teamjoined'));
    }
    /**
     * show the view to delete the team
     * @param $team is the team to be deleted
     */
    public function formtodelete(teams $team)
    {
        return view('teams.deleteteam', compact(('team')));
    }
    /**
     * @param $teams
     * @param $request is the request object to get the info from the form
     */
    public function deleteteam(Request $request, teams $team)
    {
        $teamtodelete = teams::find($request->idteam);
        $teamtodelete->delete();
        $teams = teams::all();
        return view('teams.list', compact('teams'));
    }
}
