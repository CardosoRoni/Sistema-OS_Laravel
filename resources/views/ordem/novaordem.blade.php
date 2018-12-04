 

@extends('layout.principal')
@section('conteudo')


<h1>Nova Ordem</h1>

@if(count($errors) > 0)
<div class="alert alert-danger">
	<ul>
		@foreach($errors->all() as $error)
		<li>{{$error}}</li>
		@endforeach
	</ul>
</div>
@endif
<form action="/ordem/adicionaordem" method="post">
<div class="container-fluid">
	<div class="form-group">
		<div class="col-sm-6">
			<select name="clientes">
				<option value="">Clientes</option>
				@foreach($clientes  as $c)
				<option value="{{$clientes}}">{{$c->nome}}</option>
				@endforeach
			</select>
		</div>
	</div>



	<div class="form-group">
		<div class="col-sm-6">
			<select name="servicos">
				<option value="">Serviços</option>
				@foreach($servicos  as $s)
				<option value="{{$servicos}}">{{$s->nome}}</option>
				@endforeach
			</select>
		</div>
	</div>

		<div class="form-group">
		<div class="col-sm-6">
			<select name="produtos">
				<option value="">Produtos</option>
				@foreach($produtos  as $p)
				<option value="{{$produtos}}">{{$p->nome}}</option>
				@endforeach
			</select>
		</div>
	


	<div class="col-xs-12 col-sm-6">
		<div class="form-group">
			<label>Valor</label>
			<input name="nome" class="form-control" placeholder="R$" value="{{old('nome')}}"/>
		</div>
	</div>

	<div class="container-fluid">
		<div class="col-sm-6 ">
			<label>Problema</label>
			{!! Form::textarea('name', null, ['class'=>'form-control','placeholder'=>'Descrição do problema']) !!}
		</div>
	</div>

</div>



	<div class="row">
		<div class="col-xs-12 col-sm-6">
			<div class="form-group">
				<label>Data</label>
				<div class='input-group date' id='exemplo'>
					<input name="data" class="form-control">
					<span class="input-group-addon">
						<span class="glyphicon glyphicon-calendar"></span>
					</span>
				</div>
			</div>
		</div>
		<script type="text/javascript">
			$('#exemplo').datepicker({	
				format: "dd/mm/yyyy",	
				language: "pt-BR",
				startDate: 'd',
				autoclose: true
			});

		</script>
	</div>

<br>
<br>

<div class="container-fluid">
	<div class="col-sm-3 col-lg-offset-10">
		<input type="hidden" name="_token" value="{{{csrf_token()}}}"/>
		<button type="submit" class="btn btn-success">Salvar</button>
		<a class="btn btn-primary"href="">Finalizar</a>
	</div>
</div>

</form>
</div>


@stop