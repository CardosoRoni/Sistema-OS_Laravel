<?php

namespace sistema\Http\Controllers;


use sistema\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Request;
use sistema\Cliente;
use sistema\Http\Requests\clientesRequest;
use sistema\Http\Requests\ClienteRequest;
use Carbon\Carbon;
class ClienteController extends Controller
{
     public function listaclientes(){
        $list_clientes = Cliente::all()
        ->sortBy('nome');
        return view('cliente.listaclientes',['clientes' => $list_clientes]);
    }

    //metodo para visualizar os detalhes de cada cliente
    public function detalhes($id){
        $cliente = Cliente::find($id);
        if (empty($cliente)) {
            return "Esse cliente nao existe";
        }
        return view('cliente.detalhes')->with('c', $cliente); 
    }

    public function novocliente(){
        return view('cliente.novocliente');
    }
     //metodo para adicionar novo cliente no banco
    public function adicionacliente(clientesRequest $request){
        //validando os campos do formulario 
        Cliente::create($request->all());
        return redirect()
        ->action('ClienteController@listaclientes')
        ->withInput(Request::only('nome'));
    }

    //metodo para remover um cliente:
    public function removecliente($id){
        $cliente = Cliente::find($id);
        $cliente->delete();
        return redirect() ->action('ClienteController@listaclientes');
    }
       //metodo para editar cliente
public function edit($id){
        $cliente = Cliente::findOrFail($id);
        return view('cliente.edit',compact('cliente'));
}
//metodo para alterar um cliente
public function update(clientesRequest $request, $id){
  Cliente::find($id)->update($request->all());
  return redirect('/cliente/listaclientes');
}
public function busca(ClienteRequest $request)
{
  $nome = $request->nome;
  $clientes = Cliente::where('nome', 'LIKE', "%{$nome}%")->get();
  return view('cliente.listaclientes',compact('clientes'));
}
 


    //gerar arquivo PDF
public function download()
{
    $clientes = Cliente::all();
 
    return \PDF::loadView('cliente.listaclientes', compact('clientes'))
                // Se quiser que fique no formato a4 retrato: 
    ->setPaper('a4', 'landscape')
    ->setOptions(['dpi' => 100,'enable_php'=>true])
                ->download('import.pdf');
}
}