<?php  
namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;

Class ProdutoController extends Controller {
    public function lista(){

        $produtos = DB::select('select * from produtos');
        return view('listagem')->with('produtos',$produtos);

    }
    public function mostra($id){
        //$id = Request::route('id');
        $resposta = DB::select('select * from produtos where id = ?',[$id]);
    
        if(empty($resposta)){
            return "produto nao existe";
        }
        return view('detalhes')->with('p' , $resposta[0]);
    }

    public function novo(){
        return view('produtos.formulario');
    }

    public function adiciona(){
        $nome = Request::input('nome');
        $descricao = Request::input('descricao');
        $valor = Request::input('valor');
        $quantidade = Request::input('quantidade');

        DB::insert('insert into produtos (nome, valor, descricao, quantidade) values (?,?,?,?)', array($nome, $valor, $descricao, $quantidade));
        
        return view('produtos.adicionado')->with('nome',$nome);
    }
}