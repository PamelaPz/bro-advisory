<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdvisorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('advisories')->insert([
            'icon' => 'lni-investment',
            'subh4' => 'CAPITAL',
            'p1' => 'Asesoría para preparar compañías privadas para emisiones públicas de acciones (IPOs), Follow-on, oferta secundarias, suscripciones y ofertas dirigidas, entre otros.',
        ]);
        DB::table('advisories')->insert([
            'icon' => 'lni-stats-up',
            'subh4' => 'DEUDA',
            'p1' => 'Brindamos un servicio integral para el levantamiento de recursos a través de colocaciones de capital, mezzanine, instrumentos convertibles, crédito preferente deuda subordinada y otros instrumentos híbridos a nivel nacional e internacional.',
        ]);
        DB::table('advisories')->insert([
            'icon' => 'lni-handshake',
            'subh4' => 'M&A',
            'p1' => 'Brindamos el servicio de fusiones y Adquisiciones (M&A), desinversiones y escisiones (Spin-off), adquisiciones apalancadas (LBO, MBO y MBI), alianzas estratégicas y joint-ventures, ampliaciones y reestructuras de capital, proyectos de evaluación financiera y valuación de empresas y activos (fairness opinion) para empresas públicas y privadas en diversas industrias en mercados nacionales como internacionales.',
        ]);
        DB::table('advisories')->insert([
            'icon' => 'lni-invest-monitor',
            'subh4' => 'FX & IR',
            'p1' => 'Brindamos asesoría en: optimización y cobertura de riesgos de tipo de cambio de diversas monedas (FX options) y tasa de interés (CCS, IRS, COS, Swaptions, Caps) con derivados, contratos ISDA y líneas de crédito para operar TH, valuaciones de MTM y llamadas de margen, valuación de costos reales de diversas estrategias presentadas por bancos.',
        ]);
    }
}
