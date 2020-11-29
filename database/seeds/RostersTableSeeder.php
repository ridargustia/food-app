<?php

use Illuminate\Database\Seeder;
use App\roster;

class RostersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(roster::class, 10)->create();
    }
}
