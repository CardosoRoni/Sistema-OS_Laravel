<?php 



namespace sistema\Http\Controllers;

use sistema\Cliente;
use sistema\Servico;
use sistema\Ordem;
use sistema\Produto;
Use DB;
use Request;
use sistema\Http\Requests\ordensRequest;
use sistema\Http\Requests\OrdemRequest;
use Excel;
use Carbon\Carbon;


class OrdemController extends Controller
{


	
    //metodo para listar todos as ordens
    /*public function listaordens($id){
      $ordem = DB::table('ordens')
        ->join('clientes', 'clientes.id', '=', 'cliente_id')
        ->select('ordens.*', 'clientes.*')
        ->where('ordens.id', $id)
        ->get();
        return view('ordem.listaordens')->with('ordem', $ordem);

      }*/
 public function listaordens(){
   $list_ordens = Ordem::with('cliente')->get()
   ->sortBy('cliente_id');
   return view('ordem.listaordens',['ordens' => $list_ordens]);
 }

 public function detalhes($id){
  $ordem = Ordem::find($id);
   if (empty($ordem)) {
    return "Essa ordem nao existe";
  }
  return view('ordem.detalhes')->with('o', $ordem);

    /*metodo para listar todas as ordens
      public function listaordens(){
    $ordem= Ordem::join('clientes', 'ordens.cliente_id', '=', 'cliente_id')
            ->select('clientes.id', 'nome')
            ->get();
          return view('ordem.listaordens',['ordens' => $ordem]);
   */
        
      }
        //  metodo para adicionar no formulario
      public function novaordem(){
        $list_clientes = Cliente::pluck('nome', 'id');
        $list_servicos = Servico::all()->sortBy('nome');
        $list_produtos = Produto::all()->sortBy('nome');
       return view('ordem.novaordem',['clientes' => $list_clientes, 'servicos' => $list_servicos, 'produtos' => $list_produtos]);
     }
     
    //metodo para adicionar nova ordem no banco
     public function adicionaordem(ordensRequest $request){
      //validando os campos do formulario 
      Debugbar :: info ( $cliente ); 
       Ordem::create($request->all());

       return redirect()->action('OrdemController@listaordens')->withInput(Request::only('cliente_id','produto_id', 'servico_id');

     }


    //metodo para remover uma ordem:
     public function removeordem($id){
      $ordem = Ordem::find($id);
      $ordem->delete();
      return redirect() ->action('OrdemController@listaordens');
    }
       //metodo para editar ordem
    public function edit($id){
      $ordem = Ordem::findOrFail($id);
      $list_clientes = Cliente::all()->sortBy('nome');
      $list_servicos = Servico::all()->sortBy('nome');
      $list_produtos = Produto::all()->sortBy('nome');
      return view('ordem.edit',compact('ordem') ,['clientes' => $list_clientes, 'servicos' => $list_servicos, 'produtos' => $list_produtos]);
    }
//metodo para alterar uma ordem
    public function update(ordensRequest $request, $id){
      Ordem::find($id)->update($request->all());
      return redirect('/ordem/listaordens');

    }
    public function busca(OrdemRequest $request)
    {
      $problema = $request->problema;
      $ordens = Ordem::where('problema', 'LIKE', "%{$problema}%")->get();
      return view('ordem.listaordens',compact('ordens'));
    }


   //metodo para finalizar ordem 
   public function finalizaordem(){
  return view('ordem.finalizaordem');
   }
public function export() {
  Excel::create('export', function($produtos){
    $ordens=Ordem::all();
    Excel::create(' export', function($excel) use ($ordens){
     $excel->sheet(' sheet1', function($sheet)use ($ordens){
      $sheet->fromArray($ordens);
    }); 
   });
  })->export('xlsx');
}
}
