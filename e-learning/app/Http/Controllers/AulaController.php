<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aula;
use App\Models\Modulo;


class AulaController extends Controller
{
    public function index()
    {   
       
        $aulas = Aula::all();
        foreach ($aulas as $aula) {
            $aula->modulo = $aula->relModuloAula;
        }
        return view('aulas.index', compact('aulas'));
    }
    public function create()
    {
        $modulosCount = Modulo::count();

        if ($modulosCount === 0) {
            return redirect()->back()->with('error', 'Você precisa criar pelo menos um módulo antes de criar uma aula.');
        }
        $modulos = Modulo::all();

        return view('/aulas/create', compact('modulos'));
    }

    public function store(Request $request)
    {
        Aula::create([
        'descricao' => $request->input('descricao'),
        'link' => $request->input('link'),
        'modulos_id' => $request->input('modulos_id'),
        
    ]);
    $aulas = Aula::all();
    return view('/aulas/index', compact('aulas'));
    }
    
    public function show($id)
    {
        $aula = Aula::findOrFail($id);
        $modulo = $aula->relModuloAula;
        return view('aulas.show', compact('aula', 'modulo'));
    }
    public function destroy($id)
    {
        $aula = Aula::findOrFail($id);
        $aula->delete();
        return redirect()->route('aula.index')->with('success', 'Aula deletada com sucesso.');
    }
}
