<?php

namespace App\Http\Controllers;

use App\Ma;
use App\Tma;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mas = Ma::all();
        $tmas = Tma::all();
        return view('ma.index',compact('mas','tmas'));    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tmas = Tma::all();
        return view('ma.add',compact('tmas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ma = new Ma();

        if ($request->hasFile('img')) { 
            $img = $request->file('img');
            $newName = Storage::disk('public')->put('',$img);	
            $ma->img=$newName;
        } 
        
        $ma->nom = $request->input('nom');
        $ma->quantite = $request->input('quantite');
        $ma->unite = $request->input('unite');
        $ma->note = $request->input('note');
        $ma->tiroir_id = $request->input('tiroir_id');
        $ma->save();
        return redirect()->route('ma.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ma  $ma
     * @return \Illuminate\Http\Response
     */
    public function show(Ma $ma)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ma  $ma
     * @return \Illuminate\Http\Response
     */
    public function edit(Ma $ma)
    {
        $tmas = Tma::all();
        return view('ma.edit',compact('ma','tmas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ma  $ma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ma $ma)
    {
        if ($request->hasFile('img')) { 
            $img = $request->file('img');
            $newName = Storage::disk('public')->put('',$img);	
            Storage::disk('public')->delete($ma->img);
            $ma->img=$newName;
        }         
        $ma->nom = $request->input('nom');
        $ma->quantite = $request->input('quantite');
        $ma->unite = $request->input('unite');
        $ma->note = $request->input('note');
        $ma->tiroir_id = $request->input('tiroir_id');
        $ma->save();
        return redirect()->route('ma.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ma  $ma
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ma $ma)
    {
        Storage::disk('public')->delete($ma->img);
        $ma->delete();
        return redirect()->route('ma.index');    }
}
