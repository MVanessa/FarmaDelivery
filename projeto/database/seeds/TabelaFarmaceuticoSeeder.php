<?php

use Illuminate\Database\Seeder;
use App\Farmaceutico;

class TabelaFarmaceuticoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Farmaceutico::create([
            'id_user' => 1,
            'crf' => '14775',
        ]);
    }
}
