<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SelectController extends Controller
{
    public function index(){
        return view("frontend.select-search");
    }
}
