<?php

namespace App\Http\Requests\Produto;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoFormRequest extends FormRequest
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
           'referencia'    => 'required|max:10',
            'descricao'    => 'required|min:5|max:100',
            'marca'    => 'required|min:2|max:100',
            'precoVenda'   => 'required|numeric',
            'estoque'      => 'required|not_in:0',
            'unidadeVenda' => 'required|numeric',
            
        ];
    }

    public function messages()
    {
        return[
            
            'referencia.required' => 'O campo referência é obrigatório',
            'descricao.required' => 'O campo descrição é obrigatório',
            'marca.required' => 'O campo marca é obrigatório',
            'precoVenda.required' => 'O campo Preço de Venda é obrigatório',
            'precoVenda.numeric' => ' Preço de Venda deve ser um número',
            'estoque.required' => 'O campo estoque é obrigatório',
            'estoque.not_in' => 'Selecione um estado de estoque',
            'unidadeVenda.required' => 'O campo unidade de Venda é obrigatório',
        ];
    }
}
