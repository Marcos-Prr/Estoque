<html>
<head>
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="/css/custom.css" rel="stylesheet">
    
    <title>Controle de estoque</title>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="/produtos">
                    Estoque Laravel
                </a>
            </div>
                <ul class="nav navbar-nav navbar-right">
                    <button class="btn btn-info" >
                        <li><a href="{{action('ProdutoController@lista')}}">Listagem</a></li>
                    </button>
                    <button class="btn btn-info" >
                        <li><a href="{{action('ProdutoController@novo')}}">Novo</a></li>
                    </button>
                </ul>
            </div>
               
        </nav>
        @yield('conteudo') 
        <footer class="footer">
            <p> Laravel Teste .</p>    
        </footer>   
    </div>
    
</body>
</html>