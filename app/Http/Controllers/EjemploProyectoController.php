<?php

namespace App\Http\Controllers;

use App\Models\Proyectos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EjemploProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //aqui se listan los proyectos
        //echo ("Hola desde el index"); // ejemplo de respuesta
        // return view('ejemploProyecto.index'); // ejemplo de vista
        // return view('ejemploProyecto.index', ['proyectos' => $proyectos]); // ejemplo de vista con datos
        $proyectos = DB::table('ejemplo_proyectos')->get(); // obtenemos todos los proyectos en la base de datos
        return view('projectsVista/index', ['proyectos' => $proyectos]); // pasamos los proyectos a la vista
        // view('ejemploProyecto.index', ahi se pone el nombre de la carpeta en vista);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("projectsVista/new");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        EjemploProyecto::create($request->all());
        return redirect('project/')
            ->with('success', 'Proyecto creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Proyectos $proyectos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proyectos $proyectos)
    {
        //
        $proyecto=Proyecto::find($id);
        return view("projects/update", compact('proyecto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Proyectos $proyectos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proyectos $proyectos)
    {
        //
    }
}
