
@extends('layout.principal')
@section('conteudo')

<h1 class="text-warning">Ordem numero: {{$o->cliente_id}}</h1>
<br>
<ul>
	<li>
		<b>Cliente:</b>  {{ $o->cliente->nome}}
	</li>
	<br>
	<li>
		<b>Telefone:</b>  {{ $o->cliente->telefone}}
	</li>
	<br>
	<li>
		<b>Data:</b> {{ $o->data }}
	</li>
	<br>
	<li>
		<b>Problema:</b> {{ $o->problema }}
	</li>
	<br>
	<li>
		<b>Valor :</b> R$ {{ $o->valor }}
	</li>
	<br>
</ul>

<div class="col-sm-12 col-sm-offset-10 hidden-print espaco">
	
	<a href="#" class="btn btn-primary hidden-print" onClick="window.print();">Imprimir detalhes </a>

</div>
@stop