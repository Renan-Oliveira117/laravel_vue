<?php

namespace App\Http\Controllers;

use App\Contato;
use Exception;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
   
    public function index()
    {
        try{
            return Contato::all();
        }catch(Exception $ex){
            return response('Erro ao listar os contatos', 400);
        }
        
    }

    public function create()
    {
    
    }

    public function store(Request $request)
    {
        try{
                return Contato::create($request->all());

           }catch(Exception $ex){

                return response('Erro ao salvar', 400);
        }
    }

    public function show(Contato $contato)
    {
        
    }

    public function edit(Contato $contato)
    {
        
    }

    public function update(Request $request, Contato $contato)
    {
        
    }

    public function destroy(Contato $contato)
    {
        
    }
}
