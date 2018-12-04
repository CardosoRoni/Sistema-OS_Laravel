<?php

namespace sistema;

use Illuminate\Database\Eloquent\Model;

class Ordem extends Model{
	
	protected $fillable =['id','cliente_id','valor','data','problema','servico_id','produto_id',' data_final', 'produto_incluso'];


	protected $table = 'ordens';

	//
	public function produto(){
		return $this->belongsToMany(produto::class, 'produto_id','ordem_id');
	}

	//
	public function servico(){
		return $this->belongsToMany(servico::class,'ordem_id','servico_id');
	}

	 public function cliente(){
        return $this->belongsTo(Cliente::class,'cliente_id');

        
    
}
}
