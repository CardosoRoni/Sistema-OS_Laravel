    
@extends('layout.principal')
@section('conteudo')


<h1>Lista de Produtos</h1>

<div class="row">
	<div class="container-fluid">
		<form action="/produto/busca"method="post">	
			<div class="form-group">
				{{csrf_field()}}
				<div class="col-sm-3">
					<input type="text" class="form-control" name="nome" placeholder="Buscar...">
				</div>
				<div class="col-sm-1">
					<button type="submit"class="btn btn-success "><span class="glyphicon glyphicon-search"></span></button>       
				</div>
				<div class="col-sm-1">
					<a class="btn btn-primary"href="{{action('ProdutoController@novoproduto')}}">Novo Produto</a>
				</div>
				<div class="col-sm-1">
					<a class="btn btn-primary"href="{{action('ProdutoController@export')}}">Exportar</a>
				</div>
			</div>
		</form>
	</div>
</div>

<div class="container-fluid">
	<table class="table table-condensed table-striped table-bordered
	table-hover"> 
	<tr>
		<th>Nome</th>	
		<th> Descrição</th>
		<th class="text-right"> Valor entrada </th>
		<th class="text-right"> Valor saída</th>
		<th class="text-right"> Qtd. estoque </th>
		<th class="text-center">Opções</th>

	</tr>

	@foreach($produtos as $p)
	<tr class="{{$p->qtd_estoque <=2?'danger':''}}">
		<td>{{$p->nome}}</td>	
		<td>{{$p->descricao}}</td>
		<td class="text-right">{{$p->valor_entrada}}</td>
		<td class="text-right">{{$p->valor_saida}}</td>
		<td class="text-right">{{$p->qtd_estoque}}</td>
		<td class="text-center">

			<div class="btn-group"role="group">
 			<a href="/produto/detalhes/ <?=$p->id ?>"class="btn btn-info btn-sm">
 				<span class="glyphicon glyphicon-eye-open"></span>
 			</a>

					<a href="{{action('ProdutoController@edit', $p->id)}}"class="btn btn-sm btn-primary">
						<span class="glyphicon glyphicon-pencil"></span></a>

						<a href="{{action('ProdutoController@removeproduto',$p->id)}}"onclick="return confirm('Deseja mesmo excluir esse produto?');"class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
					</div>
				</td>
			</tr>
			@endforeach 
		</table>
		<h4>
			<span class="label label-danger pull-right">
				Verifique periodicamente o seu estoque.
			</span>
		</h4>
		@if(old('nome'))
		<div class="alert alert-success">
			<strong>Sucesso!</strong> O produto {{old('nome')}} foi adicionado com sucesso!
		</div>
	</div>
	@endif
	@stop
