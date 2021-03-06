<?php

namespace App\Http\Controllers;

use App\Models\Piloto;
use App\Models\Escuderia;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Http\Request;

class PilotoController extends Controller
{
    private $rules;

    public function __construct()
    {
        //$this->middleware('auth')->except('index');
        $this->rules = [
            'nombre'=>['required','string','min:1','max:255'],
            'apellido'=>['required','string','min:1','max:255'],
            'edad'=>['required', 'integer', 'min:1', 'max:100'],
        ];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pilotos = Piloto::all();
        return view('piloto.piloto-index', compact('pilotos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $escuderiums = Escuderia::all();
        return view('piloto.piloto-form', compact('escuderiums'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->rules);
        //$request->merge(['escuderia_id' => $request->escuderia()->id]);
        Piloto::create($request->all());

        return redirect()->route('piloto.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Piloto  $piloto
     * @return \Illuminate\Http\Response
     */
    public function show(Piloto $piloto)
    {
        return view('piloto.piloto-show', compact('piloto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Piloto  $piloto
     * @return \Illuminate\Http\Response
     */
    public function edit(Piloto $piloto)
    {
        $escuderiums = Escuderia::all();
        return view('piloto.piloto-form', compact('piloto', 'escuderiums'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Piloto  $piloto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Piloto $piloto)
    {
        $request->validate($this->rules);
        Piloto::where('id', $piloto->id)->update($request->except('_method','_token'));

        return redirect()->route('piloto.show', $piloto);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Piloto  $piloto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Piloto $piloto)
    {
        $piloto->delete();
        return redirect()->route('piloto.index');
    }
}
