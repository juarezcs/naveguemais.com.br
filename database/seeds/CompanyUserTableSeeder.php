<?php

use Illuminate\Database\Seeder;
use App\Models\Company\CompanyAuth\CompanyUser;

class CompanyUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CompanyUser::create([
            'company_id' => '1',
            'name' => 'Grunpfi Mobility Mídia Digital Ltda',
            'email' => 'juarez.costa@grunpfi.com.br',
            'password' => '4#ESbs@2'
        ]);
    }
}