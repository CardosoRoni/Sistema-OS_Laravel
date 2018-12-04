  @extends('layout.principal')
  @section('conteudo')

<h1>Novo cliente</h1>

@if(count($errors) > 0)
<div class="alert alert-danger">
	<ul>
		@foreach($errors->all() as $error)
		<li>{{$error}}</li>
         @endforeach
	</ul>
</div>
@endif
<form action="/cliente/adicionacliente" method="post">
	<div class="col-xs-12 col-sm-6">
	<div class="form-group">
	<label>Nome</label>
	<input name="nome" class="form-control" placeholder="Nome Cliente" value="{{old('nome')}}"/>
	</div>
    </div>
	
	<div class="col-xs-12 col-sm-6">
	<div class="form-group">
	<label>CPF/CNPJ</label>
	<input name="cpf" class="form-control" placeholder="CPF/CNPJ" value="{{old('cpf')}}"/>
	</div>
</div>

	<div class="col-xs-12 col-sm-6">
	<div class="form-group">
	<label>Endereço</label>
	<input name="endereco" class="form-control" placeholder="Endereço" value="{{old('endereco')}}"/>
	</div>
</div>

	<div class="col-xs-12 col-sm-6">
	<div class="form-group">
	<label>Telefone</label>
	<input name="telefone" class="form-control" placeholder="Telefone" value="{{old('telefone')}}"/>
	</div>
</div>

	<div class="col-xs-12 col-sm-6">	
	<div class="form-group">
	<label>Email</label>
	<input name="email" class="form-control" placeholder="E-mail" value="{{old('email')}}"/>
	</div>
    </div>
<div class="col-xs-12">
	<input type="hidden" name="_token" value="{{{csrf_token()}}}"/>

	<button type="submit" class="btn btn-primary ">Adicionar</button>
</div>
</form>

@stop