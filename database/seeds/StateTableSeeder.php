<?php

use Illuminate\Database\Seeder;
use App\Models\All\State;

class StateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //devido a chave extrangeira não foi possivel truncar a tabela.
        //DB::table('states')->truncate();
        
        State::create([
            'state' => 'AC',
            'description' => 'Acre'
        ]);
        
        State::create([
            'state' => 'AL',
            'description' => 'Alagoas'
        ]);
        
        State::create([
            'state' => 'AP',
            'description' => 'Amapá'
        ]);
        
        State::create([
            'state' => 'AM',
            'description' => 'Amazonas'
        ]);
        
        State::create([
            'state' => 'BA',
            'description' => 'Bahia'
        ]);
        
        State::create([
            'state' => 'CE',
            'description' => 'Ceará'
        ]);
        
        State::create([
            'state' => 'DF',
            'description' => 'Distrito Federal'
        ]);
        
        State::create([
            'state' => 'ES',
            'description' => 'Espírito Santo'
        ]);
        
        State::create([
            'state' => 'GO',
            'description' => 'Goiás'
        ]);
        
        State::create([
            'state' => 'MA',
            'description' => 'Maranhão'
        ]);
        
        State::create([
            'state' => 'MT',
            'description' => 'Mato Grosso'
        ]);
        
        State::create([
            'state' => 'MS',
            'description' => 'Mato Grosso do Sul'
        ]);
        
        State::create([
            'state' => 'MG',
            'description' => 'Minas Gerais'
        ]);
        
        State::create([
            'state' => 'PA',
            'description' => 'Pará'
        ]);
        
        State::create([
            'state' => 'PB',
            'description' => 'Paraíba'
        ]);
        
        State::create([
            'state' => 'PR',
            'description' => 'Paraná'
        ]);
        
        State::create([
            'state' => 'PE',
            'description' => 'Pernambuco'
        ]);
        
        State::create([
            'state' => 'PI',
            'description' => 'Piauí'
        ]);
        
        State::create([
            'state' => 'RJ',
            'description' => 'Rio de Janeiro'
        ]);
        
        State::create([
            'state' => 'RN',
            'description' => 'Rio Grande do Norte'
        ]);
        
        State::create([
            'state' => 'RS',
            'description' => 'Rio Grande do Sul'
        ]);
        
        State::create([
            'state' => 'RO',
            'description' => 'Rondônia'
        ]);
        
        State::create([
            'state' => 'RR',
            'description' => 'Roraima'
        ]);
        
        State::create([
            'state' => 'SC',
            'description' => 'Santa Catarina'
        ]);
        
        State::create([
            'state' => 'SP',
            'description' => 'São Paulo'
        ]);
        
        State::create([
            'state' => 'SE',
            'description' => 'Sergipe'
        ]);
        
        State::create([
            'state' => 'TO',
            'description' => 'Tocantins'
        ]);
    }
}
