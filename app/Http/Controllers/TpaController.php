<?php

namespace App\Http\Controllers;

use App\Tpa;
use Illuminate\Http\Request;

class TpaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tpa  $tpa
     * @return \Illuminate\Http\Response
     */
    public function show(Tpa $tpa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tpa  $tpa
     * @return \Illuminate\Http\Response
     */
    public function edit(Tpa $tpa)
    {
        return view('pa.editTiroir',compact('tpa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tpa  $tpa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tpa $tpa)
    {
        $tpa->categorie = $request->input('categorie');
        $tpa->save();
        return redirect()->route('pa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tpa  $tpa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tpa $tpa)
    {
        //
    }
}
