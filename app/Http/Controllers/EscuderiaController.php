<?php

namespace App\Http\Controllers;

use App\Models\Escuderia;
use App\Models\Piloto;
use App\Http\Controllers\DB;
use Illuminate\Http\Request;

class EscuderiaController extends Controller
{
    private $rules;
    /**
     * Constructor del controlador
     *
     */
    public function __construct()
    {
        //$this->middleware('auth')->except('index');
        $this->rules = [
            'nombre'=>['required','string','min:1','max:255'],
            'motor'=>['required','string','min:1','max:255'],
            'director'=>'required|string|min:1|max:255',
        ];
    }

    public function inicio()
    {
        return view('inicio');
    }


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
        $request->validate($this->rules);
        Escuderia::create($request->all());
        return redirect()->route('escuderia.index');
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
        
        //$pilotos = $escuderium->pilotos->get();
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
        // // $escuderium->save();
        // dd($escuderium);
        $request->validate($this->rules);
        Escuderia::where('id', $escuderium->id)->update($request->except('_method','_token'));

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
