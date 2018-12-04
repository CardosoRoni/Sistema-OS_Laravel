<?php

namespace sistema\Http\Controllers;
use sistema\Http\Controllers\Controller;
use sistema\Produto;
use Illuminate\Support\Facades\DB;
use Request;
use sistema\Http\Requests\produtosRequest;
use sistema\Http\Requests\ProdutoRequest;
use Excel;
use Dompdf\Dompdf;


class ProdutoController extends Controller{

    //metodo para listar todos os produtos
  public function listaprodutos(){
   $list_produtos = Produto::all()
   ->sortBy('nome'); 
   return view('produto.listaprodutos',['produtos' => $list_produtos]);
 }

//metodo para visualizar os detalhes de cada produto
 public function detalhes($id){
   $produto = Produto::find($id);
   if (empty($produto)) {
    return "Esse produto nao existe";
  }
  return view('produto.detalhes')->with('p', $produto);

}
    // metodo para adicionar no formulario
public function novoproduto(){
 return view('produto.novoproduto');
}

    //metodo para adicionar novo produto no banco
public function adicionaproduto(produtosRequest $request){
          //validando os campos do formulario 
 Produto::create($request->all());
 return redirect()
 ->action('ProdutoController@listaprodutos')
 ->withInput(Request::only('nome'));

}

//metodo para remover um produto:
public function removeproduto($id){
  $produto = Produto::find($id);
  $produto->delete();
  return redirect() ->action('ProdutoController@listaprodutos');
}
    //metodo para editar produto
public function edit($id){
//    $produto = Produto::find($id);
//return view('/produto/edit')->with('produto',$produto);
  $produto = Produto::findOrFail($id);
  return view('produto.edit',compact('produto'));
}
//metodo para alterar um produto
public function update(produtosRequest $request, $id){
  Produto::find($id)->update($request->all());
  return redirect('/produto/listaprodutos');
}  
public function busca(ProdutoRequest $request)
{
  $nome = $request->nome;
  $produtos = Produto::where('nome', 'LIKE', "%{$nome}%")->get();
  return view('produto.listaprodutos',compact('produtos'));
}

    //gerar arquivo PDF
public function download()
{
  $produtos = Produto::all();
  return \PDF::loadView('produto.detalhes', compact('produtos'))
                // Se quiser que fique no formato a4 retrato: 
  ->setPaper('a4', 'landscape')
  ->stream('export.pdf');
}

//exportar tabela excell
public function export() {
  Excel::create('export', function($produtos){
    $produtos=Produto::all();
    Excel::create(' export', function($excel) use ($produtos){
     $excel->sheet(' sheet1', function($sheet)use ($produtos){
      $sheet->fromArray($produtos);
    }); 
   });
  })->export('xlsx');
}
}

