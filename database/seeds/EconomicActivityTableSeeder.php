<?php

use Illuminate\Database\Seeder;
use App\Models\All\EconomicActivity;

class EconomicActivityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //devido a chave extrangeira não foi possivel truncar a tabela.
        //DB::table('economic_activities')->truncate();
        
        EconomicActivity::create([
            'cnae' => '0162-8/01',
            'description' => 'Serviço de inseminação artificial em animais'
        ]);
        
        EconomicActivity::create([
            'cnae' => '0230-6/00',
            'description' => 'Atividades de apoio à produção florestal'
        ]);
    }
}
