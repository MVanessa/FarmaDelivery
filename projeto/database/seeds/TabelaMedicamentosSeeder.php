<?php

use Illuminate\Database\Seeder;
use App\Medicamento;

class TabelaMedicamentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Medicamento::create([
            'nome' => 'Paracetamol',
            'fabricante' => 'Neoquímica',
            'qtd' => (50),
            'peso' => 0.50,
            'indicacoes' => 'para a redução da febre e o alívio temporário de dores, como dores associadas a resfriados, dor de cabeça e dores musculares',
            'contraindicacoes' => 'contraindicado para pacientes com hipersensibilidade a qualquer componente do
				produto',
            'reacoes' => 'reação anafilática e hipersensibilidade',
        ]);

        Medicamento::create([
            'nome' => 'Losartana potássica',
            'fabricante' => 'Neoquímica',
            'qtd' => (100),
            'peso' => 0.100,
            'indicacoes' => 'para o tratamento da hipertensão',
            'contraindicacoes' => 'contraindicado para pacientes com hipersensibilidade a qualquer componente do
				produto',
            'reacoes' => 'reação anafilática e hipersensibilidade',
        ]);

        Medicamento::create([
            'nome' => 'Sinvastatina ',
            'fabricante' => 'Medley',
            'qtd' => (85),
            'peso' => 0.010,
            'indicacoes' => 'é indicada para reduzir os riscos à saúde decorrentes das doenças cardiovasculares',
            'contraindicacoes' => 'contraindicado para pacientes com hipersensibilidade a qualquer componente do
				produto',
            'reacoes' => 'reações de hipersensibilidade, como inchaço da face, língua e garganta',
        ]);
    }
}
