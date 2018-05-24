<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Farmaceutico extends Model
{
    protected $primaryKey = "id";
    protected $fillable = ['crf'];
    protected $guarded = ['id', 'id_user'];
    protected $table = 'farmaceutico';
}
