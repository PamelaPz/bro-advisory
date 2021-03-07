<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            'h4' => 'Productos de',
            'span' => 'tesorería',
            'h4_2'=> 'en los que hemos participado y cerrado',
            'client1'=> 'Images/bimbo.png',
            'client2'=> 'Images/mexichem.png',
            'client3'=> 'Images/alsea.png',
            'client4'=> 'Images/palacio_de_hierro.png',
            'client5'=> 'Images/gerdau.png',
            'client6'=> 'Images/jugos_del_valle.png',
            'client7'=> 'Images/tmm.png',
            'client8'=> 'Images/tv_azteca.png',
        ]);
        DB::table('clients')->insert([
            'h4' => 'Productos de',
            'span' => 'tesorería',
            'h4_2'=> 'en los que hemos valuado y cerrado',
            'client1'=> 'Images/bachoco.png',
            'client2'=> 'Images/fibra_hd.png',
            'client3'=> 'Images/financiera_atlas.png',
            'client4'=> 'Images/la_vasconia.png',
            'client5'=> 'Images/elementia.png',
            'client6'=> 'Images/idesa.png',
            'client7'=> 'Images/totalplay.png',
            'client8'=> 'Images/fibra_hd.png',
        ]);
        DB::table('clients')->insert([
            'h4' => 'Banca de',
            'span' => 'inversión',
            'h4_2'=> 'en los que hemos estructurado y vendido',
            'client1'=> 'Images/grupo_iamsa.png',
            'client2'=> 'Images/cas.png',
            'client3'=> 'Images/canal_5.png',
            'client4'=> 'Images/tmm.png',
            'client5'=> 'Images/promotora_fresnillo.png',
            'client6'=> 'Images/grupo_herradura_occidente.png',
            'client7'=> 'Images/tuca.png',
            'client8'=> 'Images/tv_azteca.png',
        ]);
        DB::table('clients')->insert([
            'h4' => 'Asesor',
            'span' => 'financiero',
            'h4_2'=> 'líder en la infraestructura de financiamientos bursátiles',
            'client1'=> 'Images/pinfra.png',
            'client2'=> 'Images/dinero_express.svg',
            'client3'=> 'Images/instituto_de_control_vehicular.png',
            'client4'=> 'Images/fonacot.png',
            'client5'=> 'Images/docsolutions.png',
            'client6'=> 'Images/grupo_jap.png',
            'client7'=> 'Images/ssl_digital.png',
            'client8'=> 'Images/orsan.png',
        ]);
    }
}
