<?php

namespace sistema\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ordensRequest extends FormRequest
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
             'cliente'=> 'required|max:50',
              'data'=> 'required|max:20',
            'problema'=> 'required|max:5000',
            'valor'=> 'required|numeric',
        ];
    }
}
