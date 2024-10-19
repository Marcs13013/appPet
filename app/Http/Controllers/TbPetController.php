<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tbPet;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validate;

class TbPetController extends Controller
{
    //Para mostrar tela administrativa
   public function MostrarHome() {

        return view('homeadm');

   }

   //mostra tela de cadastro do pet
   public function MostrarCadastroPet(){

        return view('cadastropet');

   }

   //para salvar os registros na tabela pet

   public function CadastrarPet(Request $request){

        $registros = $request->validate([

            'nomePet'=>'string|required', 
            'idadePet'=>'integer|required', 
            'especie'=>'string|required', 
            'raca'=>'string|required', 
            'nomeDono'=>'string|required',        

        ]);

        TbPet::create($registros);
        return Redirect::route('home-adm');


   }

   //deletar registros

   public function Destroy(tbPet $id){

        $id->delete();
        return Redirect::route('home-adm');

   }

   public function Update(tbPet $id, Request $request){

        $registros = $request-> validate([

            'nomePet' => 'string|required',
            'idadePet' => 'integer|required',
            'especie' => 'string|required',
            'raca' => 'string|required',
            'nomeDono' => 'string|required'
        ]);

         $id->fill($registros);
         $id->save();
         return Redirect::route("home-adm");

   }


   //para mostrar somente por codigo
   public function MostrarPetCodigo(tbPet $id){

        return view('alteraPet', ['registrosPet'=>$id]);

   }

   //Pra buscar pet por nome

   public function MostrarPetNome(Request $request){

        $registros = tbPet::query();
        $registros->when($request->nomePet,function($query,$valor){

            $query->where('nomePet','like','%'.$valor.'%');

        });
        
        $todosRegistros = $registros->get();
        return view('listaPet',['registrosPet'=>$todosRegistros]);

   }


}
