<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
use Illuminate\Database\QueryException;
class CursoController extends Controller
{
    public function listarCursos()
    {
        $cursos = Curso::all(); 
        return view('cursos', compact('cursos'));
    }
    public function mostrarDetalhes($id_do_curso)
    {
        $curso = Curso::findOrFail($id_do_curso);

        return view('mostrar-curso', compact('curso'));
    }
    public function criarCurso(Request $request)
    {
        
    try {
    Curso::create([
        'nome_curso' => $request->input('nome'),
        'quantidade_modulos' => $request->input('qtd_modulos'),
        'quantidade_aulas' => $request->input('qtd_aulas'),
        'titulo' => $request->input('titulo_curso'),
        'descricao' => $request->input('desc'),
    ]);

    return redirect()->route('listar-cursos');
} catch (QueryException $e) {
    return back()->withInput()->withErrors(['error' => 'Erro insira apenas numeros nos campus Quantidade De Modulos e Aulas']);
}
        
    }
    public function editar($id_do_curso)
    {
        $curso = Curso::findOrFail($id_do_curso);
        return view('editar_curso', compact('curso'));
    }

    public function atualizar(Request $request, $id_do_curso)
    {
        $curso = Curso::findOrFail($id_do_curso);

        if ($request->filled('nome') && $request->nome != $curso->nome_curso) {
            $curso->nome_curso = $request->nome;
        }
    
        if ($request->filled('qtd_modulos') && $request->qtd_modulos != $curso->quantidade_modulos) {
            $curso->quantidade_modulos = $request->qtd_modulos;
        }
    
        if ($request->filled('qtd_aulas') && $request->qtd_aulas != $curso->quantidade_aulas) {
            $curso->quantidade_aulas = $request->qtd_aulas;
        }
    
        if ($request->filled('titulo_curso') && $request->titulo_curso != $curso->titulo) {
            $curso->titulo = $request->titulo_curso;
        }
    
        if ($request->filled('desc') && $request->desc != $curso->descricao) {
            $curso->descricao = $request->desc;
        }
    
        // Verifique se houve alguma modificação
        if ($curso->isDirty()) {
            $curso->save();  
        } 
            return redirect()->route('listar-cursos');
    }
     public function deletar($id_do_curso){
            $curso = Curso::findOrFail($id_do_curso);
            $curso->delete();
            return redirect()->route('listar-cursos');

    }
}
