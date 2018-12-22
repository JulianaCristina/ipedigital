<?php

namespace App\Http\Requests\Cliente;

use Illuminate\Foundation\Http\FormRequest;

class ClienteFormRequest extends FormRequest
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
            'nome'      => 'required|min:3|max:100',
            'cpfcnpj'   => 'required|min:11|max:14',
            'cep'       => 'required|max:9',
            'uf'        => 'required|max:2',
            'cidade'    => 'required|max:100',
            'bairro'    => 'required|max:100',
            'endereco'  => 'required|max:100',
            'numero'    => 'required|max:10',
            'telefones'  => 'required|max:20',
            'celular'   => 'required|max:20',
        ];
    }

    public function messages()
    {
        return[
            'nome.required'     => 'O campo nome é de preenchimento obrigatório!',
            'cpfcnpj.required'  => 'O campo CPF/CNPJ é de preenchimento obrigatório!', 
            'cep.required'      => 'O campo CEP é de preenchimento obrigatório!',
            'uf.required'       => 'O campo UF é de preenchimento obrigatório!',
            'cidade.required'   => 'O campo cidade é de preenchimento obrigatório!',
            'bairro.required'   => 'O campo bairro é de preenchimento obrigatório!',
            'endereco.required' => 'O campo endereço é de preenchimento obrigatório!',
            'numero.required'   => 'O campo número é de preenchimento obrigatório!',
            'telefones.required' => 'O campo telefone é de preenchimento obrigatório!',
            'celular.required'  => 'O campo celular é de preenchimento obrigatório!',

        ];
    }
}
