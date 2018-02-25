<?php

use Illuminate\Database\Seeder;
use App\Models\Company\CompanyAuth\Company;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::create([
            'cnpf' => '25074585000115',
            'company_name' => 'Grunpfi Mobility Mídia Digital Ltda',
            'economicactivity_id' => '1',
            'landline_phone' => '15998030485',
            'mobile_phone' => '15998030485',
            'zip_code' => '18125000',
            'address' => 'Rua Antonio Adade',
            'number' => '65',
            'city' => 'Sorocaba',
            'neighborhood' => 'Parque Campolim',
            'state_id' => '1',
            'site_unifi' => 'guest/s/i1budkki',
            'active' => '1',
            'accepted_terms' => '1'
        ]);
    }
}