<?php

use Illuminate\Database\Seeder;
use App\article;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(article::class, 10)->create();
    }
}
