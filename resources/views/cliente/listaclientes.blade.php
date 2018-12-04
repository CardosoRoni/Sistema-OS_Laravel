    
@extends('layout.principal')
@section('conteudo')

@if(empty($clientes))
<div class="alert alert-danger">
	Você não tem nenhum cliente cadastrado.
</div>
@else
<h1>Lista de Clientes</h1>
<div class="row">
	<div class="container-fluid">
		<form action="/cliente/busca"method="post">	
			<div class="form-group">
				{{csrf_field()}}
				<div class="col-sm-3">
					<input type="text" class="form-control" name="nome" placeholder="Buscar...">
				</div>
				<div class="col-sm-1">
					<button type="submit" class="btn btn-success "><span class="glyphicon glyphicon-search"></span></button>       
				</div>
				<div class="col-sm-1">
					<a class="btn btn-primary"href="{{action('ClienteController@novocliente')}}">Novo Cliente</a>
				</div>
				</div>
			</div>
		</form>
	</div>
</div>

<table class="table table-condensed table-striped table-bordered
table-hover">
<tr>
	<th>Nome</th>	
	<th class="text-right"> CPF/CNPJ</th>
	<th class="text-center"> Endereço </th>
	<th class="text-right"> Telefone</th>
	<th class="text-center"> E-mail </th>
	<th class="text-center">Opções</th>
</tr>
@foreach($clientes as $c)
<tr > 
	<td class="text-center"> {{$c->nome}} </td>	
	<td class="text-right"> {{$c->cpf}} </td>
	<td class="text-center"> {{$c->endereco}} </td>
	<td class="text-right"> {{$c->telefone}} </td>
	<td class="text-center"> {{$c->email}} </td>
	<td class="text-center">
		<div class="btn-group" role="group">
			<a href="/cliente/detalhes/ <?=$c->id ?>" class="btn btn-info btn-sm">
				<span class="glyphicon glyphicon-eye-open"></span>

				<a href="{{action('ClienteController@edit',$c->id)}}" class="btn btn-sm btn-primary">
					<span class="glyphicon glyphicon-pencil"></span>

					<a href="{{action('ClienteController@removecliente',$c->id)}}" onclick="return confirm('Deseja mesmo excluir esse cliente?');" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-trash"></span>
					</a>
				</div>
			</td>
		</tr>
		@endforeach 
	</table>

	@endif


	@if(old('nome'))
	<div class="alert alert-success">
		<strong>Sucesso!</strong> O cliente {{old('nome')}} foi adicionado com sucesso!
	</div>
	@endif
	@stop