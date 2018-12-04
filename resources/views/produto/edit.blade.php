
  @extends('layout.principal')
  @section('conteudo')

<h1>Edita produto</h1>


@if(count($errors) > 0)
<div class="alert alert-danger">
	<ul>
		@foreach($errors->all() as $error)
		<li>{{$error}}</li>
         @endforeach
	</ul>
</div>
@endif
<form action="/produto/listaprodutos{{$produto->id}}" method="post">

	<div class="col-xs-12 col-sm-6">
		<div class="form-group">
			<label>Nome</label>
			<input name="nome" class="form-control"  value="{{$produto->nome, old('nome')}}"/>
		</div>
	</div>
	<div class="col-xs-12 col-sm-6">
	<div class="form-group">
	<label>Descrição</label>
	<input name="descricao" class="form-control"  value="{{$produto->descricao, old('descricao')}}"/>
	</div>
	</div>
	<div class="col-xs-12 col-sm-6">
	<div class="form-group">
	<label>Valor Entrada</label>
	<input name="valor_entrada" class="form-control" value="{{$produto->valor_entrada, old('valor_entrada')}}"/>
	</div>
	</div>
	<div class="col-xs-12 col-sm-6">
	<div class="form-group">
	<label>Valor Saida</label>
	<input name="valor_saida" class="form-control" value="{{$produto->valor_saida, old('valor_saida')}}"/>
	</div>
	</div>
	<div class="col-xs-12 col-sm-6">
	<div class="form-group">
	<label>Quantidade</label>
	<input type="number" name="qtd_estoque" class="form-control" value="{{$produto->qtd_estoque, old('qtd_estoque')}}"/>
	</div>
	</div>
	<div class="col-xs-12">
		<input type="hidden" name="_token" value="{{{csrf_token()}}}"/>

		<button type="submit" class="btn btn-primary">Salvar</button>
	</div>

</form>

@stop