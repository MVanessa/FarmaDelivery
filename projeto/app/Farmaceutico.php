<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Farmaceutico extends Model
{
    protected $primaryKey = "id";
    protected $fillable = ['id_user', 'crf'];
    protected $guarded = ['id'];
    protected $table = 'farmaceutico';
}
