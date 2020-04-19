<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pa;
use App\Ka;
use App\Ma;
use App\Tpa;
use App\Tka;
use App\Tma;

class WelcomeController extends Controller
{
    public function index(){
        $kas = Ka::all();
        $mas = Ma::all();
        $pas = Pa::all();
        $tkas = Tka::all();
        $tmas = Tma::all();
        $tpas = Tpa::all();
        return view('welcome',compact('kas','pas','mas','tkas','tmas','tpas'));
    }
}
