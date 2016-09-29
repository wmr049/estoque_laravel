<?php namespace estoque;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model {

	protected $fillable = array('nome', 'descricao', 'valor', 'quantidade', 'tamanho', 'categoria_id');

	protected $guarded = ['id'];

	public function categoria(){
        $this->belongsTo('estoque\app\Categoria');
    }
}
