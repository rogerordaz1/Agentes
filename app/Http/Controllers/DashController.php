<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashController extends Controller
{
    public function index(){
        return view('dash.dash');
    }
    public function create(){
        return view('dash.crud_agentes.show');
    }
    //
}
