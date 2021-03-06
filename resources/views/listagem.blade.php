@extends('principal')

@section('conteudo')

@if(empty($produtos))
    
    <div class="alert alert-danger"> Voce nao tem nenhum produto cadastrado. </div>
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
                            <button type="button" class="btn btn-info">Detalhes</button>

                         
                        </a>
                        <a href="{{action('ProdutoController@remove',$p->id)}}">
                            <button class="btn btn-danger ">Remover </button>
                        </a>  
                        
                    
                    </td>
                </tr>
        <?php endforeach ?>
        </tr>  
        
       
    </table>

@endif

@if(old('nome'))
    <div class="alert alert-success " >
        O produto {{ old('nome')}} foi adicionado com sucesso!
    </div>  
@endif
  
@stop