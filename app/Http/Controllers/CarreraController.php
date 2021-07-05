<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use App\Models\Piloto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class CarreraController extends Controller
{

    private $rules;

    public function __construct()
    {
        //$this->middleware('auth')->except('index');
        $this->rules = [
            'nombre'=>['required','string','min:1','max:255'],
            'temporada'=>['required','string','min:4','max:4'],
            'circuito'=>['required','string','min:1','max:255'],
            'pais'=>['required','string','min:1','max:255'],
        ];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carreras = Carrera::all();
        return view('carrera.carrera-index', compact('carreras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('admin-carreras');
        return view('carrera.carrera-form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('admin-carreras');
        $request->validate($this->rules);
        //$request->merge(['escuderia_id' => $request->escuderia()->id]);
        Carrera::create($request->all());

        return redirect()->route('carrera.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Carrera  $carrera
     * @return \Illuminate\Http\Response
     */
    public function show(Carrera $carrera)
    {
        
        $pilotos_all = Piloto::all();
        return view('carrera.carrera-show', compact('carrera', 'pilotos_all'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Carrera  $carrera
     * @return \Illuminate\Http\Response
     */
    public function edit(Carrera $carrera)
    {        
        Gate::authorize('admin-carreras');
        return view('carrera.carrera-form', compact('carrera'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Carrera  $carrera
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carrera $carrera)
    {
        Gate::authorize('admin-carreras');
        $request->validate($this->rules);
        Carrera::where('id', $carrera->id)->update($request->except('_method','_token'));

        return redirect()->route('carrera.show', $carrera);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Carrera  $carrera
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carrera $carrera)
    {
        Gate::authorize('admin-carreras');
        $carrera->delete();
        return redirect()->route('carrera.index');
    }

    public function agregaPiloto(Request $request, Carrera $carrera){
        Gate::authorize('admin-carreras');
        
        $carrera->pilotos()->attach($request->piloto_id);

        return redirect()->route('carrera.show', $carrera);
    }
}
