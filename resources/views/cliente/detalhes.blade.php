	@extends('layout.principal')
    @section('conteudo')

<h1 class="text-warning">Detalhes do cliente: {{$c->nome}}</h1>
<br>
<ul>
	<li>
		<b>CPF:</b> {{ $c->cpf}}
	</li>
	<br>
	<li>
		<b>Endereco:</b>  {{ $c->endereco }}
	</li>
	<br>
	<li>
		<b>Telefone:</b>  {{ $c->telefone }}
	</li>
 	<br>
    <li>
		<b>E-mail:</b> {{ $c->email }}
    </li>

    <br>
</ul>
<div class="col-sm-12 col-sm-offset-10 hidden-print espaco">
	<a href="#" class="btn btn-primary hidden-print" onClick="window.print();">Imprimir detalhes </a>

@stop