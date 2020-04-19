<?php

namespace App\Http\Controllers;

use App\Ka;
use App\Tka;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kas = Ka::all();
        $tkas = Tka::all();
        return view('ka.index',compact('kas','tkas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tkas = Tka::all();
        return view('ka.add',compact('tkas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ka = new Ka();

        if ($request->hasFile('img')) { 
            $img = $request->file('img');
            $newName = Storage::disk('public')->put('',$img);	
            $ka->img=$newName;
        } 
        
        $ka->nom = $request->input('nom');
        $ka->quantite = $request->input('quantite');
        $ka->unite = $request->input('unite');
        $ka->note = $request->input('note');
        $ka->tiroir_id = $request->input('tiroir_id');
        $ka->save();
        return redirect()->route('ka.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ka  $ka
     * @return \Illuminate\Http\Response
     */
    public function show(Ka $ka)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ka  $ka
     * @return \Illuminate\Http\Response
     */
    public function edit(Ka $ka)
    {
        $tkas = Tka::all();
        return view('ka.edit',compact('ka','tkas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ka  $ka
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ka $ka)
    {
        if ($request->hasFile('img')) { 
            $img = $request->file('img');
            $newName = Storage::disk('public')->put('',$img);	
            Storage::disk('public')->delete($ka->img);
            $ka->img=$newName;
        }         
        $ka->nom = $request->input('nom');
        $ka->quantite = $request->input('quantite');
        $ka->unite = $request->input('unite');
        $ka->note = $request->input('note');
        $ka->tiroir_id = $request->input('tiroir_id');
        $ka->save();
        return redirect()->route('ka.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ka  $ka
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ka $ka)
    {
        Storage::disk('public')->delete($ka->img);
        $ka->delete();
        return redirect()->route('ka.index');
    }
}
