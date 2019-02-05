<?php  
namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;

Class ProdutoController extends Controller {
    public function lista(){
        $html = '<h1> Lista de produtos</h1>';

        $html .= '<ul>';

        $produtos = DB::select('select * from produtos');

        foreach($produtos as $p) {
            $html .= '<li>nome: '. $p ->nome .' 
                        descricao :'. $p -> descricao .'</li>' ;
        }
        $html .= '</ul>';
        return $html;
    }
}