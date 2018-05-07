<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    protected $fillable = ['nome','fabricante','peso','indicacao','contraindicacao','reacoes'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'medicamentos';
}
