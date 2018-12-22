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
            'precoVenda'   => 'required|max:9',
            'estoque'      => 'required|max:2',
            'unidadeVenda' => 'required|numeric',
            
        ];
    }
}
