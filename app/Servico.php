<?php

namespace sistema;

use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    protected $fillable = ['id','nome','valor_total','ordem_id'];

    protected $table = 'servicos';

    //
    public function ordem(){
    	return $this->belongsToMany(ordem::class,'servico_id','ordem_id');
    }

    public function servico(){
    	return $this->belongsTo(servico::class,'ordem_id','servico_id' );
    }
}
