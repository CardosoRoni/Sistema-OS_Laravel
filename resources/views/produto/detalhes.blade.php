
@extends('layout.principal')
@section('conteudo')

<h1 class="text-warning">Detalhes do produto:{{$p->nome}}</h1>
<br>
<ul>
	<li>
		<b>Descrição:</b> {{ $p->descricao}}
	</li>
	<br>
	<li>
		<b>Valor Entrada:</b> R$ {{ $p->valor_entrada }}
	</li>
	<br>
	<li>
		<b>Valor Saida:</b> R$ {{ $p->valor_saida }}
	</li>
	<br>
	<li>
		<b>Quantidade em estoque:</b> {{ $p->qtd_estoque }}
	</li>
	<br>
</ul>

<div class="col-sm-12 col-sm-offset-10 hidden-print espaco">
	<a href="#" class="btn btn-primary hidden-print" onClick="window.print();">Imprimir detalhes </a>

</div>

@stop

