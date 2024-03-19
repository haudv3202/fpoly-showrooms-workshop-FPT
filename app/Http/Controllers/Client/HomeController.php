<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('clients.pages.home');
    }

    public function single(){
        return view('clients.pages.single');
    }
}
