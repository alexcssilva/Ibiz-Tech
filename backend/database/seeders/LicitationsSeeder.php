<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lic;
use Illuminate\Support\Carbon;

class LicitationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lic::create([
            'nu_fase' => 1,
            'nu_edital' => '2023001',
            'modalidade' => 'Concorrência',
            'data_abertura' => Carbon::now(),
            'nome_licitador' => 'Sport Club Corinthians Paulista',
            'cnpj_licitador' => '12345678901234',
            'prioridade' => 5,
            'objeto' => 'Salve o Corinthians O campeão dos campeões Eternamente Dentro dos nossos corações Salve o Corinthians De tradições e glórias mil Tu és orgulho Dos desportistas do Brasil Teu passado é uma bandeira Teu presente é uma lição Figuras entre os primeiros',
            'created_at' => now(),
            'updated_at' => now(),
            'deleted_at' => null,
        ]);

        Lic::create([
            'nu_fase' => 0,
            'nu_edital' => '2023002',
            'modalidade' => 'Tomada de Preços',
            'data_abertura' => Carbon::now(),
            'nome_licitador' => 'Adventure Time',
            'cnpj_licitador' => '98765432109876',
            'prioridade' => 5,
            'objeto' => 'Finn, Jake, Princesa Jujuba, Marceline, Rei Gelado, BMO, Princesa Caroço, Princesa de Fogo, Princesa Chiclete, Lady Íris, Lich, Gunter, Lemongrab, Abracadaniel, Mordomo Menta.',
            'created_at' => now(),
            'updated_at' => now(),
            'deleted_at' => null,
        ]);

        Lic::create([
            'nu_fase' => -1,
            'nu_edital' => '2023003',
            'modalidade' => 'Pregão',
            'data_abertura' => Carbon::now(),
            'nome_licitador' => 'Star Wars',
            'cnpj_licitador' => '12345678901234',
            'prioridade' => 4,
            'objeto' => 'Luke Skywalker, Leia Organa, Han Solo, Darth Vader, Obi-Wan Kenobi, Yoda, Rey, Finn, Poe Dameron, Chewbacca, R2-D2, BB-8, C-3PO, Darth Sidious, Lando Calrissian.',
            'created_at' => now(),
            'updated_at' => now(),
            'deleted_at' => null,
        ]);

        Lic::create([
            'nu_fase' => 1,
            'nu_edital' => '2023004',
            'modalidade' => 'Concorrência',
            'data_abertura' => Carbon::now(),
            'nome_licitador' => 'Rick and Morty',
            'cnpj_licitador' => '98765432109876',
            'prioridade' => 3,
            'objeto' => 'Rick Sanchez, Morty Smith, Summer Smith, Beth Smith, Jerry Smith, Mr. Poopybutthole',
            'created_at' => now(),
            'updated_at' => now(),
            'deleted_at' => null,
        ]);
    }
}
