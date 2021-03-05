<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'h4' => 'ENCUENTRANOS EN',
            'address' => 'Javier Barros Sierra 540, Torre 1, Piso 5 Santa Fe, C.P. 01210 CDMX',
            'phone1' => '(55) 3633 2080',
            'phone2' => '(55) 7672 4817',
            'email' => 'abringas@bropartners.com',
        ]);
    }
}
