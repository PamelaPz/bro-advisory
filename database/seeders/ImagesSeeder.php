<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            'image'=> 'Images/bimbo.png',
            'client_id' => '1'
        ]);
        DB::table('images')->insert([
            'image'=> 'Images/mexichem.png',
            'client_id' => '1'
        ]);
        DB::table('images')->insert([
            'image'=> 'Images/alsea.png',
            'client_id' => '1'
        ]);
        DB::table('images')->insert([
            'image'=> 'Images/palacio_de_hierro.png',
            'client_id' => '1'
        ]);
        DB::table('images')->insert([
            'image'=> 'Images/gerdau.png',
            'client_id' => '1'
        ]);
        DB::table('images')->insert([
            'image'=> 'Images/jugos_del_valle.png',
            'client_id' => '1'
        ]);
        DB::table('images')->insert([
            'image'=> 'Images/tmm.png',
            'client_id' => '1'
        ]);
        DB::table('images')->insert([
            'image'=> 'Images/tv_azteca.png',
            'client_id' => '1'
        ]);
        DB::table('images')->insert([
            'image'=> 'Images/bachoco.png',
            'client_id' => '2'
        ]);
        DB::table('images')->insert([
            'image'=> 'Images/fibra_hd.png',
            'client_id' => '2'
        ]);
        DB::table('images')->insert([
            'image'=> 'Images/financiera_atlas.png',
            'client_id' => '2'
        ]);
        DB::table('images')->insert([
            'image'=> 'Images/la_vasconia.png',
            'client_id' => '2'
        ]);
        DB::table('images')->insert([
            'image'=> 'Images/elementia.png',
            'client_id' => '2'
        ]);
        DB::table('images')->insert([
            'image'=> 'Images/idesa.png',
            'client_id' => '2'
        ]);
        DB::table('images')->insert([
            'image'=> 'Images/totalplay.png',
            'client_id' => '2'
        ]);
        DB::table('images')->insert([
            'image'=> 'Images/grupo_iamsa.png',
            'client_id' => '3'
        ]);
        DB::table('images')->insert([
            'image'=> 'Images/cas.png',
            'client_id' => '3'
        ]);
        DB::table('images')->insert([
            'image'=> 'Images/canal_5.png',
            'client_id' => '3'
        ]);
        DB::table('images')->insert([
            'image'=> 'Images/tmm.png',
            'client_id' => '3'
        ]);
        DB::table('images')->insert([
            'image'=> 'Images/promotora_fresnillo.png',
            'client_id' => '3'
        ]);
        DB::table('images')->insert([
            'image'=> 'Images/grupo_herradura_occidente.png',
            'client_id' => '3'
        ]);
        DB::table('images')->insert([
            'image'=> 'Images/tuca.png',
            'client_id' => '3'
        ]);
        DB::table('images')->insert([
            'image'=> 'Images/tv_azteca.png',
            'client_id' => '3'
        ]);
        DB::table('images')->insert([
            'image'=> 'Images/pinfra.png',
            'client_id' => '4'
        ]);
        DB::table('images')->insert([
            'image'=> 'Images/dinero_express.svg',
            'client_id' => '4'
        ]);
        DB::table('images')->insert([
            'image'=> 'Images/instituto_de_control_vehicular.png',
            'client_id' => '4'
        ]);
        DB::table('images')->insert([
            'image'=> 'Images/fonacot.png',
            'client_id' => '4'
        ]);
        DB::table('images')->insert([
            'image'=> 'Images/docsolutions.png',
            'client_id' => '4'
        ]);
        DB::table('images')->insert([
            'image'=> 'Images/grupo_jap.png',
            'client_id' => '4'
        ]);
        DB::table('images')->insert([
            'image'=> 'Images/ssl_digital.png',
            'client_id' => '4'
        ]);
        DB::table('images')->insert([
            'image'=> 'Images/orsan.png',
            'client_id' => '4'
        ]);
    }
}
