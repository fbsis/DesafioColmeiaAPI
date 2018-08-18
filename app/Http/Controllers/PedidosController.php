<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pedidos;    # Repositórios de fornecedores


class PedidosController extends Controller
{
    //Lista vários
    public function getLista(){
		$resultado = Pedidos::get();

        return [
            'sucess'    => true,
            'dados'     => $resultado
        ];
    }

    //Lista somente 1
    public function get(Request $request, $id_reg){

    }

    //Grava
    public function post(Request $request){
        $post                         = $request->all(); 
        
		$qry = new Pedidos;
		$qry->nome 			        = array_get($post, 'nome');
		$qry->data_entrega          = array_get($post, 'data_entrega');
		$qry->ponto_partida         = array_get($post, 'ponto_partida');
		$qry->ponto_destino         = array_get($post, 'ponto_destino');
		
		$qry->save();

        return [
            'sucess'    => true,
            'status'    => 'Incluido com sucesso'
        ];
    }

}
