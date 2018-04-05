<?php

namespace casadocodigoestoque\Http\Controllers;

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{
    // Lista de Produtos
    public function lista(){
		
		$html = '<h1>Listagem de produtos com Laravel</h1>';

		$html .= '<ul>';
		
		$produtos = DB::select('select * from produtos');

		foreach ($produtos as $p) {
			$html .= '<li> Id: '.$p -> id.', Nome: '.$p -> nome.', Descrição: '.$p -> descricao .', Valor: '.$p -> valor.'</li>';
		}
		
		$html .= '</ul>';
		return $html;
	}

}
