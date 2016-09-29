<?php namespace estoque\Http\Requests;

use estoque\Http\Requests\Request;

class ProdutosRequest extends Request {


	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		return [
			'nome' => 'required|max:100',
			'descricao' => 'required|max:255',
			'valor' => 'required|numeric'
    ];
	}
	public function messages()
	{
		return [
			'required' => 'O campo :attribute não pode estar vazio.',
			'nome.required' => 'O :attribute não pode estar em branco.',
		];
	}

}
