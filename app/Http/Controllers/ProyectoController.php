<?php

namespace App\Http\Controllers;
use PDF;
use Illuminate\Http\Request;
use App\Models\Proyecto;

class ProyectoController extends Controller
{
    public function index()
    {
        $proyectos = Proyecto::all();
        return view('proyectos.index', compact('proyectos'));
    }

    public function create()
    {
        return view('proyectos.create');
    }

    public function store(Request $request)
    {
        $proyecto = new Proyecto();
        $proyecto->fill($request->all());
        $proyecto->save();

        return redirect()->route('proyectos.index');
    }

    public function edit(Proyecto $proyecto)
    {
        return view('proyectos.edit', compact('proyecto'));
    }

    public function update(Request $request, Proyecto $proyecto)
    {
        $proyecto->fill($request->all());
        $proyecto->save();

        return redirect()->route('proyectos.index');
    }

    public function destroy(Proyecto $proyecto)
    {
        $proyecto->delete();

        return redirect()->route('proyectos.index');
    }


    public function informe()
    {
        $proyectos = Proyecto::all();

        return view('proyectos.informe', compact('proyectos'));
    }

    public function downloadPDF($id)
    {
        $proyecto = Proyecto::find($id);
    
        if (!$proyecto) {
            return redirect()->route('proyectos.index')->with('error', 'El proyecto no se encontró');
        }
    
        // Aquí se pasa el proyecto a la vista para generar el PDF
        $pdf = PDF::loadView('proyectos.pdf_template', compact('proyecto'));
    
        return $pdf->download('proyecto_' . $id . '.pdf');
    }
    

}
