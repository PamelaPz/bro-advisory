<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImgclientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('imgclients')->insert([
            'img_cliente'=> 'Images/bimbo.png',
            'category_id' => '1'
        ]);
        DB::table('imgclients')->insert([
            'img_cliente'=> 'Images/mexichem.png',
            'category_id' => '1'
        ]);
        DB::table('imgclients')->insert([
            'img_cliente'=> 'Images/alsea.png',
            'category_id' => '1'
        ]);
        DB::table('imgclients')->insert([
            'img_cliente'=> 'Images/palacio_de_hierro.png',
            'category_id' => '1'
        ]);
        DB::table('imgclients')->insert([
            'img_cliente'=> 'Images/gerdau.png',
            'category_id' => '1'
        ]);
        DB::table('imgclients')->insert([
            'img_cliente'=> 'Images/jugos_del_valle.png',
            'category_id' => '1'
        ]);
        DB::table('imgclients')->insert([
            'img_cliente'=> 'Images/tmm.png',
            'category_id' => '1'
        ]);
        DB::table('imgclients')->insert([
            'img_cliente'=> 'Images/tv_azteca.png',
            'category_id' => '1'
        ]);
        DB::table('imgclients')->insert([
            'img_cliente'=> 'Images/bachoco.png',
            'category_id' => '2'
        ]);
        DB::table('imgclients')->insert([
            'img_cliente'=> 'Images/fibra_hd.png',
            'category_id' => '2'
        ]);
        DB::table('imgclients')->insert([
            'img_cliente'=> 'Images/financiera_atlas.png',
            'category_id' => '2'
        ]);
        DB::table('imgclients')->insert([
            'img_cliente'=> 'Images/la_vasconia.png',
            'category_id' => '2'
        ]);
        DB::table('imgclients')->insert([
            'img_cliente'=> 'Images/elementia.png',
            'category_id' => '2'
        ]);
        DB::table('imgclients')->insert([
            'img_cliente'=> 'Images/idesa.png',
            'category_id' => '2'
        ]);
        DB::table('imgclients')->insert([
            'img_cliente'=> 'Images/totalplay.png',
            'category_id' => '2'
        ]);
        DB::table('imgclients')->insert([
            'img_cliente'=> 'Images/grupo_iamsa.png',
            'category_id' => '3'
        ]);
        DB::table('imgclients')->insert([
            'img_cliente'=> 'Images/cas.png',
            'category_id' => '3'
        ]);
        DB::table('imgclients')->insert([
            'img_cliente'=> 'Images/canal_5.png',
            'category_id' => '3'
        ]);
        DB::table('imgclients')->insert([
            'img_cliente'=> 'Images/tmm.png',
            'category_id' => '3'
        ]);
        DB::table('imgclients')->insert([
            'img_cliente'=> 'Images/promotora_fresnillo.png',
            'category_id' => '3'
        ]);
        DB::table('imgclients')->insert([
            'img_cliente'=> 'Images/grupo_herradura_occidente.png',
            'category_id' => '3'
        ]);
        DB::table('imgclients')->insert([
            'img_cliente'=> 'Images/tuca.png',
            'category_id' => '3'
        ]);
        DB::table('imgclients')->insert([
            'img_cliente'=> 'Images/tv_azteca.png',
            'category_id' => '3'
        ]);
        DB::table('imgclients')->insert([
            'img_cliente'=> 'Images/pinfra.png',
            'category_id' => '4'
        ]);
        DB::table('imgclients')->insert([
            'img_cliente'=> 'Images/dinero_express.svg',
            'category_id' => '4'
        ]);
        DB::table('imgclients')->insert([
            'img_cliente'=> 'Images/instituto_de_control_vehicular.png',
            'category_id' => '4'
        ]);
        DB::table('imgclients')->insert([
            'img_cliente'=> 'Images/fonacot.png',
            'category_id' => '4'
        ]);
        DB::table('imgclients')->insert([
            'img_cliente'=> 'Images/docsolutions.png',
            'category_id' => '4'
        ]);
        DB::table('imgclients')->insert([
            'img_cliente'=> 'Images/grupo_jap.png',
            'category_id' => '4'
        ]);
        DB::table('imgclients')->insert([
            'img_cliente'=> 'Images/ssl_digital.png',
            'category_id' => '4'
        ]);
        DB::table('imgclients')->insert([
            'img_cliente'=> 'Images/orsan.png',
            'category_id' => '4'
        ]);
    }
}
