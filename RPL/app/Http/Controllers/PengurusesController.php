<?php

namespace App\Http\Controllers;

use App\Models\Pengurus;
use Illuminate\Http\Request;

class PengurusesController extends Controller{
    
    public function index(){
        return view('Dashboard.dashboard_pengurus');
    }

    public function kuis(){
        return view('penguruses.kuisioner');
    }

    public function psiko(){
        return view('penguruses.psikologi');
    }
}

?>