<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoriesTableSeeder::class);
        $this->call(SubcategoriesTableSeeder::class);
        $this->call(ProvincesTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(VillagesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ArticlesTableSeeder::class);
        $this->call(PlacesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(ImageproductsTableSeeder::class);
        $this->call(ReviewsTableSeeder::class);
        $this->call(RostersTableSeeder::class);
        $this->call(ImageplacesTableSeeder::class);
        $this->call(RosterwithproductsTableSeeder::class);
        
    }
}
