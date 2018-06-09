<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MedicamentoTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testStoreMedicamento()
    {
        $data = [
            'nome' => 'Topiramato',
            'fabricante' => 'Germed',
            'qtd' => 10,
            'peso' => 0.1,
            'indicacoes' => 'para tratamento de epilepsia',
            'contraindicacoes' => 'não deve ser usado durante a gravidez',
            'reacoes' => 'nenhuma',
        ];
      
        $this
            ->post(route('medicamentos.store'), $data)
            ->assertStatus(302)
            ->assertRedirect(route('medicamentos.index'));
    }
}
