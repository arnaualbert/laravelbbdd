<?php

namespace App\Http\Controllers;

use App\Models\players;
use App\Models\teams;
use Illuminate\Http\Request;

class playersController extends Controller
{
    /**
     * show the players list
     */
    public function list(){
        $players = players::all();
        $teams = teams::all();
        return view('players.list',compact('players','teams'));
    }
    /**
     * show the add players form
     */
    public function addplayer(){
        return view('players.form');
    }
    /**
     * add a new team to the database
     * @param $request get the info from the form
     * @param $player is the player to add
     */
    public function store(Request $request,players $player){
        $player = new players;
        $player->name = $request->name;
        $player->surname = $request->surname;
        $player->yearofbirth = $request->yearofbirth;
        $player->salary = $request->salary;
        // $player->teams_id = "";
        // return back();
        // $player->save();
        // $players = players::all();
        // $teams = teams::all();
        // return view('players.list',compact('players','teams'));
        if ($request->name != null && $request->surname != null && $request->yearofbirth != null && $request->salary != null) {
            $player->save();
            $players = players::all();
            $teams = teams::all();
            return view('players.list',compact('players','teams'));
        } else {
            return view('players.form');
        }
    }
    /**
     * show the view for sign a player
     * @param $player is the player to sign
     */
    public function makecontract(players $player){
        $teams = teams::all();
        return view('players.contract',compact('player','teams'));
    }
    /**
     * signa a player to a team
     * @param $request is the object to get the info from the form
     * @param $player is the player to sign
     */
    public function singforateam(Request $request,players $player){
        $playerupdate = players::find($player->id);
        $teamtojoin = $request->team;
        $playerupdate->teams_id = $teamtojoin;
        $playerupdate->save();
        $teamjoined = teams::find($teamtojoin);
        return view('signedinfo',compact('playerupdate','teamjoined'));

    }
    /**
     * show the form to delete a player
     */
    public function formtodelete(players $player){
        // return view('players.deleteplayer',compact(('player')));
        return view('players.deleteplayer',compact('player'));
    }
    /**
     * delete a player from the database
     * @param $player is the player to delete
     * @param $request is the object to get the info from the form
     */
    public function deleteplayer(Request $request, players $player){
        $playertodelete = players::find($request->idplayer);
        $playertodelete->delete();
        $players = players::all();
        $teams = teams::all();
        return view('players.list',compact('players','teams'));
    }
    /**
     * show the form to edit the player
     * @param $plaer is the player to edit
     */
    public function formeditplayer(players $player){
        return view('players.edit',compact('player'));
    }
    /**
     * show the form to edit
     * @param $playe is the player to edit
     * @param $request is the object to get the info from the form
     */
    public function editplayer(Request $request,players $player){
        $playertoupdate = players::find($player->id);
        $playertoupdate->name = $request->name;
        $playertoupdate->surname = $request->surname;
        $playertoupdate->yearofbirth = $request->yearofbirth;
        $playertoupdate->salary = $request->salary;
        // $playertoupdate->save();
        // $players = players::all();
        // $teams = teams::all();
        // return view('players.list',compact('players','teams'));

        if ($request->name != null && $request->surname != null && $request->yearofbirth != null && $request->salary != null) {
            $playertoupdate->save();
            $players = players::all();
            $teams = teams::all();
            return view('players.list',compact('players','teams'));
        } else {
            return view('players.edit',compact('player'));
        }
    }

}
