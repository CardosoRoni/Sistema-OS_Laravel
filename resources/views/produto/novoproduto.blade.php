
  @extends('layout.principal')
  @section('conteudo')

<h1>Novo produto</h1>
	
@if(count($errors) > 0)
<div class="alert alert-danger">
	<ul>
		@foreach($errors->all() as $error)
		<li>{{$error}}</li>
         @endforeach
	</ul>
</div>
@endif
<form action="/produto/adicionaproduto" method="post">
	<div class="col-xs-12 col-sm-6">
		<div class="form-group">
			<label>Nome</label>
			<input name="nome" class="form-control" placeholder="Nome produto" value="{{old('nome')}}"/>
		</div>
	</div>
	<div class="col-xs-12 col-sm-6">
	<div class="form-group">
	<label>Descrição</label>
	<input name="descricao" class="form-control" placeholder="Descrição"  value="{{old('descricao')}}"/>
	</div>
	</div>

			

	<div class="col-xs-12 col-sm-6">
	<div class="form-group">
	<label>Valor Entrada</label>
	<input name="valor_entrada" class="form-control" placeholder="Valor de entrada" value="{{old('valor_entrada')}}"/>
	</div>
	</div>
	<div class="col-xs-12 col-sm-6">
	<div class="form-group">
	<label>Valor Saida</label>
	<input name="valor_saida" class="form-control" placeholder="Valor de saida" value="{{old('valor_saida')}}"/>
	</div>
	</div>
	<div class="col-xs-12 col-sm-6">
	<div class="form-group">
	<label>Quantidade</label>
	<input type="number" name="qtd_estoque" class="form-control" placeholder="Quantidade" value="{{old('qtd_estoque')}}"/>
	</div>
	</div>
	<div class="col-xs-12">
		<input type="hidden" name="_token" value="{{{csrf_token()}}}"/>

		<button type="submit" class="btn btn-primary">Adicionar</button>
	</div>

</form>

@stop