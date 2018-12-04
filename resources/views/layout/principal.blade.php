<!DOCTYPE html>
<html>
<head>
	<title>Sistema Laravel</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
  <link href="/css/bootstrap-datepicker.css" rel="stylesheet"/>
  <script src="/js/bootstrap-datepicker.min.js"></script> 
  <script src="/js/bootstrap-datepicker.pt-BR.min.js" charset="UTF-8"></script>
  <link href="/css/bootstrap.css" rel="stylesheet">
  <link href="/css/custom.css"rel="stylesheet">
</head>
<body>
  <div class="container-fluid">
 <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{('/')}}">
        Sistema Laravel
      </a>
      
    </div>
    <ul class="nav navbar-nav navbar-right">
     <li><a href="{{action('ClienteController@listaclientes')}}">Clientes</a></li>
     <li><a href="{{action('ProdutoController@listaprodutos')}}">Produtos</a></li>
     <li><a href="{{action('OrdemController@listaordens')}}">Ordens</a></li>
   </ul>
 </div>
</nav>

<div class="container-fluid">
  @yield('conteudo')
</div>

<footer class="footer">
  <p>SISTEMA DE SUPORTE PARA EMPRESAS DA ÁREA DE INFORMÁTICA UTILIZANDO PHP E LARAVEL</p>
</footer>
</div>
</div>
</body>
</html>