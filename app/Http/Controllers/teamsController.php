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
}
