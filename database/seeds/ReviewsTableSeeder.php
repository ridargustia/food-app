<?php

use Illuminate\Database\Seeder;
use App\review;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(review::class, 50)->create();
    }
}
