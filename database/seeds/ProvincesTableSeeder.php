<?php

use Illuminate\Database\Seeder;
use App\province;

class ProvincesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        province::create([
            'name' => 'Yogyakarta'
        ]);
    }
}
