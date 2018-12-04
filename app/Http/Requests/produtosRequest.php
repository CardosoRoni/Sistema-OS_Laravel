<?php

namespace sistema\Http\Requests;

use sistema\Http\Requests\Request;

class produtosRequest extends Request
{
    public function messages(){
        return[
            'required'=> 'O campo nome não pode estar vazio.',];
        }
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome'=> 'required|max:20',
            'descricao'=> 'required|max:20',
            'valor_entrada'=> 'required|numeric',
            'valor_saida'=> 'required|numeric',
            'qtd_estoque'=> 'required|numeric',         
        ];
    }
}
