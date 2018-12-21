<?php

namespace App\Http\Requests\Cliente;

use Illuminate\Foundation\Http\FormRequest;

class \ClienteFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; //false (usar acl)
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required'|min:3|max:100,
            'cpfcnpj' => 'required'|min:11|max:14,
            'cep' => 'required'|max:8,
            'uf' => 'required'|max:2,
            'cidade' => 'required'|max:100,
            'bairro' => 'required'|max:100,
            'endereco' => 'required'|max:100,
            'numero' => 'required'|max:10,
            'telefone' => 'required'|max:20,
            'celular' => 'required'|max:20,
        ];
    }
}
