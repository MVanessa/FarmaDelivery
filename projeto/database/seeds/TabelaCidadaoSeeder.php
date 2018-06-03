<?php

use Illuminate\Database\Seeder;
use App\Cidadao;

class TabelaCidadaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cidadao::create([
            'id_user' => 2,
            'endereco' => 'Fraiburgo, Bairro São José, R. XV de Novembro, n° 75',
        ]);
    }
}
