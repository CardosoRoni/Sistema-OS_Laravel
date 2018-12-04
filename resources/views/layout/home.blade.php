<!DOCTYPE html>
<html>
<head>
	<title>Sistema Laravel</title>
  <script type='text/javascript' src='/js/jquery.min.js'></script>
  <link href="/css/bootstrap.css" rel="stylesheet">
  <link href="/css/custom.css"rel="stylesheet">
</head>
<body>

 <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{('/')}}">
        Sistema Laravel
      </a>
    </div>
    
  </div>
</nav>
<div class="container-fluid">
  @yield('homeconteudo')
</div>
<footer class="footer">
  <p>SISTEMA DE SUPORTE PARA EMPRESAS DA ÁREA DE INFORMÁTICA UTILIZANDO PHP E LARAVEL</p>
</footer>
</div>


</body>
</html>