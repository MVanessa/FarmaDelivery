<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
	protected $primaryKey = "id";
    protected $fillable = ['nome','fabricante','qtd','peso','indicacoes','contraindicacoes','reacoes'];
    protected $guarded = ['id', 'created_at', 'update_at','img'];
    protected $table = 'medicamentos';
}
