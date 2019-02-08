@extends('principal')

@section('conteudo')

@if(empty($produtos))
    
    <div class="alert alert-sucess"> Voce nao tem nenhum produto cadastrado. </div>
@else     
    <h1>Listagem de produtos</h1>
    <table class="table table-striped table-bordered table-hover">
        <?php foreach ($produtos as $p): ?>
        <tr class="{{$p->quantidade<=1 ? 'danger' : ' ' }}">
                <tr>
                    <td><?= $p->nome ?> </td>
                    <td><?= $p->valor ?> </td>
                    <td><?= $p->descricao ?> </td>
                    <td><?= $p->quantidade ?> </td>
                    <td>
                        <a href="/produtos/mostra/<?= $p->id ?> ">
                            Ir
                        </a>
                    </td>
                </tr>
        <?php endforeach ?>
        </tr>  
        
       
    </table>

@endif
<h4>
    <span class="label label-danger pull-right">
        Um ou menos itens no estoque
    </span>
</h4>    
@stop