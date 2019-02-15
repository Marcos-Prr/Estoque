<?php  
namespace estoque\Http\Controllers;
use estoque\Produto;
use Illuminate\Support\Facades\DB;
use Request;

Class ProdutoController extends Controller {
    public function lista(){

        $produtos = Produto::all();
        return view('listagem')->with('produtos',$produtos);

    }
    public function mostra($id){
        //$id = Request::route('id');
        $resposta =Produto::find($id);
    
        if(empty($resposta)){
            return "produto nao existe";
        }
        return view('detalhes')->with('p' , $resposta);
    }

    public function novo(){
        return view('produtos.formulario');
    }

    public function adiciona(){
        /*$nome = Request::input('nome');
        $descricao = Request::input('descricao');
        $valor = Request::input('valor');
        $quantidade = Request::input('quantidade');

        DB::insert('insert into produtos (nome, valor, descricao, quantidade) values (?,?,?,?)', array($nome, $valor, $descricao, $quantidade));
        */
        Produto::create(Request::all());
        
        return redirect() ->action('ProdutoController@lista')->withInput(Request::only('nome'));
    }

    public function remove($id){
        $produto =Produto::find($id);
        $produto->delete();

        return redirect()->action('ProdutoController@lista');
    }

    public function listaJson(){
        $produtos =DB::select('select * from produtos ');
        return response()->json($produtos);
    }
}