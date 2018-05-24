<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidadao extends Model
{
    protected $primaryKey = "id";
    protected $fillable = ['endereco'];
    protected $guarded = ['id', 'id_user'];
    protected $table = 'cidadao';
}
