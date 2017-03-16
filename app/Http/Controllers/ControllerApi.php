<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pessoa;
class ControllerApi extends Controller
{
public function __construct()
    {
        $this->middleware('cors');
    }
    public function Excluir(Request $request) {
        $pessoa = Pessoa::findOrFail($request->id);
        
        if($pessoa->delete()){   
          return "OK";
        }else{
            return "falhou";
        };
    }
    public function Alterar(Request $request) {
        $pessoa = Pessoa::findOrFail($request->id);
         
        $pessoa->nome = $request->nome;
        if($pessoa->update()){
            return "OK";
        }else{
          return;
        } 
         
    }
    public function Adicionar(Request $request) {
        $pessoa = new Pessoa();
        $pessoa->nome = $request->nome;
        if($pessoa->save()){
              return "OK";
        }else{
           return;
        }
    }
    public function Consultar() {
       return Pessoa::all()->toJson(); 
    }
    public function ConsultarId($id) {
       return Pessoa::find($id);
    }
}
