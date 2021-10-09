<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use Illuminate\Http\Request;

/**
 * Class DepartamentoController
 * @package App\Http\Controllers
 */
class DepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departamentos = Departamento::paginate();

        return view('departamento.index', compact('departamentos'))
            ->with('i', (request()->input('page', 1) - 1) * $departamentos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departamento = new Departamento();
        return view('departamento.create', compact('departamento'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Departamento::$rules);

        $departamento = Departamento::create($request->all());

        return redirect()->route('departamento.index')
            ->with('success', 'Departamento created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $Codigo
     * @return \Illuminate\Http\Response
     */
    public function show($Codigo)
    {
        $departamento = Departamento::find($Codigo);

        return view('departamento.show', compact('departamento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $Codigo
     * @return \Illuminate\Http\Response
     */
    public function edit($Codigo)
    {
        $departamento = Departamento::find($Codigo);

        return view('departamento.edit', compact('departamento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Departamento $departamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Departamento $departamento)
    {
        request()->validate(Departamento::$rules);

        $departamento->update($request->all());

        return redirect()->route('departamentos.index')
            ->with('success', 'Departamento updated successfully');
    }

    /**
     * @param int $Codigo
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($Codigo)
    {
        $departamento = Departamento::find($Codigo)->delete();

        return redirect()->route('departamentos.index')
            ->with('success', 'Departamento deleted successfully');
    }
}
