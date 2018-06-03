<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidadao extends Model
{
    protected $primaryKey = "id";
    protected $fillable = ['id_user', 'endereco'];
    protected $guarded = ['id'];
    protected $table = 'cidadao';
}
