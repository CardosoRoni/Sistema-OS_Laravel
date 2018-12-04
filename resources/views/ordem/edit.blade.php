  @extends('layout.principal')
  @section('conteudo')

  <h1>Edita Ordem</h1>
  @if(count($errors) > 0)
  <div class="alert alert-danger">
  	<ul>
  		@foreach($errors->all() as $error)
  		<li>{{$error}}</li>
  		@endforeach
  	</ul>
  </div>
  @endif
<div class="container-fluid">
  <div class="form-group">
    <div class="col-sm-6">
      <select name="cliente_id" id="cliente_id" class="form-control">
        <option value=" ">Clientes</option>
        @foreach($clientes  as $c)
        <option value="{{$clientes}}">{{$c->nome}}</option>
        @endforeach
      </select>
    </div>
  </div>



  <div class="form-group">
    <div class="col-sm-6">
      <select name="servico_id" id="servico_id" class="form-control">
        <option value="">Serviços</option>
        @foreach($servicos  as $s)
          <option value="{{$servicos}}" >{{$s->nome}}</option>
        @endforeach
      </select>
    </div>
  </div>  

    <div class="form-group">
    <div class="col-sm-6">
      <select name="produto_id" id="produto_id" class="form-control">
        <option value="">Produtos</option>
        @foreach($produtos  as $p)
        <option value="{{$produtos}}">{{$p->nome}}</option>
        @endforeach
      </select>
    </div>
  </div>

  	<div class="container">
   <div class="row">
        <div class="col-xs-12 col-sm-6">
            <div class="form-group">
            	<label>Data</label>
                <div class='input-group date' id='exemplo'>
                  <input name="data" class="form-control"  value="{{$ordem->data,old('data')}}"/><span class="input-group-addon">
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
</div>


  	<script type="text/javascript">
  		$('#exemplo').datepicker({	
  			format: "dd/mm/yyyy",	
  			language: "pt-BR",
  			startDate: '+0d',
  		});
  	</script>



  	<div class="col-xs-12 col-sm-6">
  		<div class="form-group">
  			<label>Problema</label>
        <textarea name="problema" id="problema" cols="30" rows="10" class="form-control">{{$ordem->problema,old('problema')}}</textarea>
  		</div>
  	</div>

  	<div class="col-xs-12 col-sm-6">
  		<div class="form-group">
  			<label>Valor</label>
  			<input name="valor" class="form-control" value="{{$ordem->valor,old('valor')}}"/>
  		</div>

  	</div>

  	<div class="col-xs-12">
  		<input type="hidden" name="_token" value="{{{csrf_token()}}}"/>

  		<button type="submit" class="btn btn-primary ">Salvar</button>
  	</div>

  </form>
  



  @stop