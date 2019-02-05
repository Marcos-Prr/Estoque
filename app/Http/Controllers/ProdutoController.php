<?php  
namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;

Class ProdutoController extends Controller {
    public function lista(){
        $produtos = DB::select('select * from produtos');

        return '<h1>Lista de produtos</h1>';
    }
}