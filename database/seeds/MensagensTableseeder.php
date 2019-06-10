<?php

use Illuminate\Database\Seeder;
use App\mensagens;

class MensagensTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        mensagens::create([
            'titulo' => 'Topicos Especiais',
            'autor' => 'Tiago Rios',
            'texto' => 'Vamo dale pra não tomale',
            'user_id' => 1,
            'atividade_id' => 1
        ]);

        mensagens::create([
            'titulo' => 'Topicos Especialees',
            'autor' => 'Tiago Rios Rocha',
            'texto' => 'Vamo dale pra não tomaleeeeeee',
            'user_id' => 2,
            'atividade_id' => 2
        ]);

    }
}
