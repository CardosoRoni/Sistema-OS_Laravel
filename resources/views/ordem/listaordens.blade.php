 @extends('layout.principal')
 @section('conteudo')

 @if(empty($ordens))
 <div class="alert alert-danger">
 	Você não tem nenhuma ordem cadastrada.
 </div>
 @else
 <h1>Lista de Ordens</h1>



<div class="row">
	<div class="container-fluid">
		<form action="/ordem/busca"method="post">	
			<div class="form-group">
				{{csrf_field()}}
				<div class="col-sm-3">
					<input type="text" class="form-control" name="problema" placeholder="Buscar...">
				</div>
				<div class="col-sm-1">
					<button type="submit" class="btn btn-success "><span class="glyphicon glyphicon-search"></span></button>       
				</div>
				<div class="col-sm-1">
					<a class="btn btn-primary"href="{{action('OrdemController@novaordem')}}">Nova Ordem</a>
				</div>
				<div class="col-sm-1">
					<a class="btn btn-primary"href="{{action('OrdemController@export')}}">Exportar</a>
				</div>
			</div>
		</form>
	</div>
</div>

 <table class="table table-condensed table-striped table-bordered
 table-hover" >
 <tr>
 	<th>Cliente</th>	
 	<th class="text-right"> Data de Entrada</th>
 	<th class="text-center"> Problema</th>
 	<th class="text-right"> Valor</th>
 	<th class="text-right"> Produto incluso</th>
 	<th class="text-center">Opções</th>


 </tr>
 @foreach($ordens as $o)
 <tr>
 	<td> {{$o->cliente->nome}} </td>
 		
 	<td class="text-right"> {{($o->data)}} </td>
 	<td class="text-center"> {{$o->problema}} </td>
 	<td class="text-right"> {{$o->valor}} </td>
 	<td class="text-right"> {{$o->produto_incluso}} </td>
 	<td class="text-center">


 		<div class="btn-group" role="group">
 			<a href="/ordem/detalhes/ <?=$o->id ?>" class="btn btn-info btn-sm">
 				<span class="glyphicon glyphicon-eye-open"></span>
 			</a>

 			<a href="{{action('OrdemController@edit',$o->id)}}" class="btn btn-sm btn-primary">
					<span class="glyphicon glyphicon-pencil"></span></a>

					<a href="{{action('OrdemController@removeordem',$o->id)}}"onclick="return confirm('Deseja mesmo excluir essa ordem?');" class="btn btn-sm btn-danger">
						<span class="glyphicon glyphicon-trash"></span>
					</a>
					
 		</div>
 	</td>
 </tr>
 @endforeach 
</table>


@endif

@if(old('nome'))
<div class="alert alert-success">
	<strong>Sucesso!</strong> A Ordem  {{old('cliente')}} foi adicionado com sucesso!
</div>
@endif
@stop