@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card">
                <div class="card-header" style="color:orange!important; font-size: 50px">Bem Vindo</div>

                <div class="card-body "style="color:blue!important">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    Você está logado!
                </div>
            </div>
        </div>
    </div>
</div>
@stop
