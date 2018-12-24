<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnidadeVenda extends Model
{
    public $timestamps = false;
    protected $table = "unidade_vendas";
	protected $primaryKey = 'id';
}
