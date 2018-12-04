<?php

namespace sistema\Http\Requests;

use sistema\Http\Requests\Request;

class clientesRequest extends Request
{
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
             'nome'=> 'required|max:25',
             'cpf'=> 'required|min:11',
              'endereco'=> 'required|max:100',
               'telefone'=> 'required|max:12',
                'email'=> 'required|max:25',
        ];
    }
}
