<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use Illuminate\Http\Request;

/**
 * Class CarreraController
 * @package App\Http\Controllers
 */
class CarreraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carreras = Carrera::paginate();
        
        return view('carrera.index', compact('carreras'))
            ->with('i', (request()->input('page', 1) - 1) * $carreras->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $carrera = new Carrera();
        return view('carrera.create', compact('carrera'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Carrera::$rules);

        $carrera = Carrera::create($request->all());

        return redirect()->route('carrera.index')
            ->with('success', 'Carrera creada con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id_carrera
     * @return \Illuminate\Http\Response
     */
    public function show($id_carrera)
    {
        $carrera = Carrera::find($id_carrera);

        return view('carrera.show', compact('carrera'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  varchar $id_carrera 
     * @return \Illuminate\Http\Response
     */
    public function edit($id_carrera )
    {
        $carrera = Carrera::find($id_carrera );

        return view('carrera.edit', compact('carrera'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Carrera $carrera
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carrera $carrera)
    {
        request()->validate(Carrera::$rules);

        $carrera->update($request->all());

        return redirect()->route('carrera.index')
            ->with('success', 'Carrera actualizada con éxito');
    }

    /**
     * @param varchar $id_carrera 
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id_carrera)
    {
        $carrera = Carrera::find($id_carrera)->forceDelete();

        return redirect()->route('carrera.index')
            ->with('success', 'Carrera eliminada con éxito');
    }
}
