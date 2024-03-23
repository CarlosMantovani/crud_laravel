<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modulo;
use App\Models\Curso;
class ModuloController extends Controller
{

    public function index()
    {   
       
        $modulos = Modulo::all();
        foreach ($modulos as $modulo) {
            $modulo->curso = $modulo->relCurso;
        }
        return view('modulos.index', compact('modulos'));
    }
    
    public function create()
    {
        $cursos = Curso::all();

        return view('/modulos/create', compact('cursos'));
    }
    public function store(Request $request)
    {
        Modulo::create([
        'titulo' => $request->input('titulo'),
        'curso_id' => $request->input('curso_id'),
        
    ]);
    $modulos = Modulo::all();
    return view('/modulos/index', compact('modulos'));
    }
    public function show($id)
    {
        $modulo = Modulo::findOrFail($id);
        $curso = $modulo->relCurso;
        return view('modulos.show', compact('modulo', 'curso'));
        
        
    }
    public function destroy($id)
    {
        $modulo = Modulo::findOrFail($id);
        $modulo->delete();
        return redirect()->route('modulos.index')->with('success', 'Modulo deletado com sucesso.');
    }
}
