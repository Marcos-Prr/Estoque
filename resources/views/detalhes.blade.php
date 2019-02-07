@extends('principal')
@section('conteudo')
<ul>
    <li>
        <b>Valor:</b> R$ <? = $p->valor ?>
    </li>
    <li>
        <b>Descrição:</b> <? = $p->descricao ?>
    </li>
    <li>
        <b>Quantidade em estoque:</b> <? = $p->quantidade ?>
    </li>
</ul>

@stop