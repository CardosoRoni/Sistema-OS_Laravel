<?php

namespace sistema;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
	protected $fillable = ['id','nome','descricao','valor_entrada',
	'valor_saida','qtd_estoque', 'ordem_id'];

	protected $table = 'produtos';

	public function ordem(){
    	return $this->belongsToMany(ordem::class,'produto_id','ordem_id');
    }

    public function produto(){
    	return $this->belongsTo(produto::class,'ordem_id','produto_id' );
    }
}







