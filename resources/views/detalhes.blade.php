@extends('principal')
@section('conteudo')
<h1>Produto: <?= $p->nome ?> </h1>
<ul>
    <li>
        <b>Valor:</b> R$ <?= $p->valor ?>
    </li>
    <li>
        <b>Descrição:</b> <?= $p->descricao ?>
    </li>
    <li>
        <b>Quantidade em estoque:</b> <?= $p->quantidade ?>
    </li>
</ul>

@stop