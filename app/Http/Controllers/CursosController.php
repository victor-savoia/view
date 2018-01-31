<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursosController extends Controller{

    private $arrayCursos = array(
     'Lógica de programação', 'Desenvolvimento Web com PHP',
     'Algoritmos e estrutura de dados', 'Test Driven Development');



   public function index() {
      $cursos = $this->arrayCursos;
      return view('cursos.index', compact('cursos'));
    }

    public function show($indexValue){
        $cursos = $this->arrayCursos;
        $curso = $cursos[$indexValue];
        return view('cursos.show', compact('curso')); 
    }
}
