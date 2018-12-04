<?php

namespace sistema;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model{
	protected $fillable = ['id','nome','cpf','endereco','telefone',

	'email'];

	protected $table = 'clientes';

//
	public function ordem(){
		return $this->hasMany(ordem::class,'cliente_id');


	}
	public function getcpfAttribute(){
		$cpf=$this->attributes['cpf'];
		return substr($cpf, 0,3). '.'.substr($cpf, 3,3). '.'.substr($cpf, 7,3). '-'.substr($cpf, -2);
	}
	public function gettelefoneAttribute(){
		$telefone=$this->attributes['telefone'];
		return "(".substr($telefone, 0,2).")".substr($telefone, 2,5)."-".substr($telefone, -4);

}

}