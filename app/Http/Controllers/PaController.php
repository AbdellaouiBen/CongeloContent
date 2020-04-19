<?php

namespace App\Http\Controllers;

use App\Pa;
use App\Tpa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pas = Pa::all();
        $tpas = Tpa::all();
        return view('pa.index',compact('pas','tpas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tpas = Tpa::all();
        return view('pa.add',compact('tpas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pa = new Pa();

        if ($request->hasFile('img')) { 
            $img = $request->file('img');
            $newName = Storage::disk('public')->put('',$img);	
            $pa->img=$newName;
        } 
        
        $pa->nom = $request->input('nom');
        $pa->quantite = $request->input('quantite');
        $pa->unite = $request->input('unite');
        $pa->note = $request->input('note');
        $pa->tiroir_id = $request->input('tiroir_id');
        $pa->save();
        return redirect()->route('pa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pa  $pa
     * @return \Illuminate\Http\Response
     */
    public function show(Pa $pa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pa  $pa
     * @return \Illuminate\Http\Response
     */
    public function edit(Pa $pa)
    {
        $tpas = Tpa::all();
        return view('pa.edit',compact('pa','tpas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pa  $pa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pa $pa)
    {
        if ($request->hasFile('img')) { 
            $img = $request->file('img');
            $newName = Storage::disk('public')->put('',$img);	
            Storage::disk('public')->delete($pa->img);
            $pa->img=$newName;
        }         
        $pa->nom = $request->input('nom');
        $pa->quantite = $request->input('quantite');
        $pa->unite = $request->input('unite');
        $pa->note = $request->input('note');
        $pa->tiroir_id = $request->input('tiroir_id');
        $pa->save();
        return redirect()->route('pa.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pa  $pa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pa $pa)
    {
        Storage::disk('public')->delete($pa->img);
        $pa->delete();
        return redirect()->route('pa.index');
    }
}
