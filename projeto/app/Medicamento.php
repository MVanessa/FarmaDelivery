<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Medicamento extends Model
{
	protected $primaryKey = "id";
    protected $fillable = ['nome','fabricante','qtd','peso','indicacoes','contraindicacoes','reacoes'];
    protected $guarded = ['id', 'created_at', 'update_at','img'];
    protected $table = 'medicamentos';

    public static function getName($id){
    	$nome = DB::table('medicamentos')->where('id', $id)->value('nome');

    	return $nome;
    }

    public static function getFabricante($id){
    	$nome = DB::table('medicamentos')->where('id', $id)->value('fabricante');

    	return $nome;
    }

}
