<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class agentNameController extends Controller
{
    public function index () 
    {
        return view('agents/index');
    }
}
