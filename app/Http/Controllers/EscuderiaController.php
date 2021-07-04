<?php

namespace App\Http\Controllers;

use App\Models\Escuderia;
use Illuminate\Http\Request;

class EscuderiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $escuderiums = Escuderia::all();
        return view('escuderia.escuderia-index', compact('escuderiums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('escuderia.escuderia-form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        // $escuderia = new Escuderia;
        // $escuderia->nombre = $request->nombre;
        // $escuderia->motor = $request->motor;
        // $escuderia->director = $request->director;
        Escuderia::create($request->all());
        return redirect()->route('escuderia.escuderia-index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Escuderia  $escuderia
     * @return \Illuminate\Http\Response
     */
    public function show(Escuderia $escuderium)
    {
        //dd($escuderium);
        return view('escuderia.escuderia-show', compact('escuderium'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Escuderia  $escuderia
     * @return \Illuminate\Http\Response
     */
    public function edit(Escuderia $escuderium)
    {
        return view('escuderia.escuderia-form', compact('escuderium'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Escuderia  $escuderia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Escuderia $escuderium)
    {        
        // $escuderium->nombre = $request->nombre;
        // $escuderium->motor = $request->motor;
        // $escuderium->director = $request->director;
        // $escuderium->save();

        Escuderia::where('id', $request->id)->update($request->except('_token', '_method'));

        return redirect()->route('escuderia.show', $escuderium);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Escuderia  $escuderia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Escuderia $escuderium)
    {
        $escuderium->delete();
        return redirect()->route('escuderia.index');
    }
}
