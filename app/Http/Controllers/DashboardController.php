<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('pages.dashboard.index');
    }
    public function create(){
        return view('pages.dashboard.create');
    }
    public function hh(){
        return view('pages.dashboard.create');
    }
    public function gg(){
        return view('pages.dashboard.create');
    }
}
