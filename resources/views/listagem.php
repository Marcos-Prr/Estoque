<html>
    <head>
        <link href="/css/app.css" rel="stylesheet">
        <title>Controle de estoque</title>
    </head>
    <body>
        <div class="container">       
            <h1>lista de produtos</h1>
            <table class ="table table-condensed table-bordered">
                <?php foreach ($produtos as $p): ?>
                <tr>
                    <td><?= $p->nome ?></td>
                    <td><?= $p->valor ?></td>
                    <td><?= $p->descricao ?></td>
                    <td><?= $p->quantidade ?></td>
                    <td>
                        <a href="/produtos/mostra>">
                           Ir
                        </a>    
                    </td>
                </tr>
                <?php endforeach ?>
            </table>
        </div>
    </body>
</html>