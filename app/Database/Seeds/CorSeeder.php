<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CorSeeder extends Seeder
{
    public function run()
    {
        

        $cormodel = new \App\Models\CorModel();

        $cores = [
            [
                'nome' => 'Branco',
                'descricao' => 'Descricao da cor',
            ],
            [
                'nome' => 'Cinza',
                'descricao' => 'Descricao da cor',
            ],
            [
                'nome' => 'Marfim',
                'descricao' => 'Descricao da cor',
            ],
            [
                'nome' => 'Laranja',
                'descricao' => 'Descricao da cor',
            ],
            [
                'nome' => 'Bege',
                'descricao' => 'Descricao da cor',
            ],
            [
                'nome' => 'Grafite',
                'descricao' => 'Descricao da cor',
            ],
            [
                'nome' => 'Prata',
                'descricao' => 'Descricao da cor',
            ],
            [
                'nome' => 'CinzaArtico',
                'descricao' => 'Descricao da cor',
            ],
        
        ];

     //dd($cores);

     foreach($cores as $cor){

       $cormodel ->insert($cor);
     }

       echo 'Cores  inseridas com Sucesso!';

    }
}
