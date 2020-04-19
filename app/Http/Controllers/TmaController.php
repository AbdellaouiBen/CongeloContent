<?php

namespace App\Http\Controllers;

use App\Tma;
use Illuminate\Http\Request;

class TmaController extends Controller
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
     * @param  \App\Tma  $tma
     * @return \Illuminate\Http\Response
     */
    public function show(Tma $tma)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tma  $tma
     * @return \Illuminate\Http\Response
     */
    public function edit(Tma $tma)
    {
        return view('ma.editTiroir',compact('tma'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tma  $tma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tma $tma)
    {
        $tma->categorie = $request->input('categorie');
        $tma->save();
        return redirect()->route('ma.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tma  $tma
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tma $tma)
    {
        //
    }
}
