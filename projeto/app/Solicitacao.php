<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitacao extends Model
{
    protected $primaryKey = "id";
    protected $fillable = ['id_user','id_medicamento','qtd'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'solicitacoes';
}
