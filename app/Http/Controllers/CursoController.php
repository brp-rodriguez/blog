<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    public function index(){
        $cursos = Curso::paginate();
        // return $cursos;
        return view('cursos.index',compact('cursos'));
    }
    public function create(){
        return view('cursos.create');
    }
    public function show($curso){
                                // compact('curso');// ['curso' => $curso]
        return view('cursos.show',compact('curso'));
    }
}
