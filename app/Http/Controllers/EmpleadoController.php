<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('empleado.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Creacion de empleado
        return view('empleado.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Recolecta toda la informacion del empleado
        //$datosEmpleado = request()->all();
        $datosEmpleado = request()->except('_token');

            // Condicional para la carga de imagenes
            if($request->hasFile('Foto')){
                $datosEmpleado['Foto']=$request->file('Foto')->store('uploads','public');
            }

        Empleado::insert($datosEmpleado);
        return response()->json($datosEmpleado);
    }

    /**
     * Display the specified resource.
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Empleado $empleado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Empleado $empleado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Empleado $empleado)
    {
        //
    }
}
