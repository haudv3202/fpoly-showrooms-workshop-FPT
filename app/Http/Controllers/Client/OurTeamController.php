<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OurTeamController extends Controller
{
    public function index(){
        return view('clients.pages.ourTeam');
    }

    public function single(){
        return view('clients.pages.teamSingle');
    }
}
