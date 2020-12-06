<?php

use Illuminate\Database\Seeder;
use App\village;

class VillagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        village::create([
            'city_id' => 1,
            'name' => 'Bambanglipuro',
        ]);

        village::create([
            'city_id' => 1,
            'name' => 'Banguntapan',
        ]);

        village::create([
            'city_id' => 1,
            'name' => 'Bantul',
        ]);

        village::create([
            'city_id' => 1,
            'name' => 'Dlingo',
        ]);

        village::create([
            'city_id' => 1,
            'name' => 'Imogiri',
        ]);

        village::create([
            'city_id' => 1,
            'name' => 'Jetis',
        ]);

        village::create([
            'city_id' => 1,
            'name' => 'Kasihan',
        ]);

        village::create([
            'city_id' => 1,
            'name' => 'Kretek',
        ]);

        village::create([
            'city_id' => 1,
            'name' => 'Pajangan',
        ]);

        village::create([
            'city_id' => 1,
            'name' => 'Pandak',
        ]);

        village::create([
            'city_id' => 1,
            'name' => 'Piyungan',
        ]);

        village::create([
            'city_id' => 1,
            'name' => 'Pleret',
        ]);

        village::create([
            'city_id' => 1,
            'name' => 'Pundong',
        ]);

        village::create([
            'city_id' => 1,
            'name' => 'Sanden',
        ]);

        village::create([
            'city_id' => 1,
            'name' => 'Sedayu',
        ]);

        village::create([
            'city_id' => 1,
            'name' => 'Sewon',
        ]);

        village::create([
            'city_id' => 1,
            'name' => 'Srandakan',
        ]);

    }
}
