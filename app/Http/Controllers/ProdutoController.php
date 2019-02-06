<?php  
namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;

Class ProdutoController extends Controller {
    public function lista(){

        $produtos = DB::select('select * from produtos');
        return view('listagem')->with('produtos',$produtos);

    }
}