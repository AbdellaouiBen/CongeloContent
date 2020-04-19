<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pa;
use App\Ka;
use App\Ma;
use App\Tpa;
use App\Tka;
use App\Tma;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $kas = Ka::all();
        $mas = Ma::all();
        $pas = Pa::all();
        $tkas = Tka::all();
        $tmas = Tma::all();
        $tpas = Tpa::all();
        return view('home',compact('kas','pas','mas','tkas','tmas','tpas'));
    }
}
