<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjetosdeleiController extends Controller
{
    //Função para listar todos os projetos de lei cadastrados com paginação pega via url
    public function index($pag)
    {
        //Pega todos os projetos de lei cadastrados
        $projetosdelei = DB::table('projetosdelei')->paginate(10, ['*'], 'pag', $pag);
        //Retorna a view com os projetos de lei cadastrados
        return view('projetosdelei.index', ['projetosdelei' => $projetosdelei]);
    }

}
