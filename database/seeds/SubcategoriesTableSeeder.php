<?php

use Illuminate\Database\Seeder;
use App\subCategory;

class SubcategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        subCategory::create([
            'category_id' => 1,
            'name' => 'Minuman',
            'image' => 'default.jpg'
        ]);

        subCategory::create([
            'category_id' => 1,
            'name' => 'Jajanan',
            'image' => 'default.jpg'
        ]);

        subCategory::create([
            'category_id' => 1,
            'name' => 'Aneka Nasi',
            'image' => 'default.jpg'
        ]);

        subCategory::create([
            'category_id' => 1,
            'name' => 'Ayam',
            'image' => 'default.jpg'
        ]);

        subCategory::create([
            'category_id' => 1,
            'name' => 'Mie Ayam',
            'image' => 'default.jpg'
        ]);

        subCategory::create([
            'category_id' => 1,
            'name' => 'Bakso',
            'image' => 'default.jpg'
        ]);

        subCategory::create([
            'category_id' => 1,
            'name' => 'Soto',
            'image' => 'default.jpg'
        ]);

        subCategory::create([
            'category_id' => 1,
            'name' => 'Roti',
            'image' => 'default.jpg'
        ]);

        subCategory::create([
            'category_id' => 1,
            'name' => 'Bakmie',
            'image' => 'default.jpg'
        ]);

        subCategory::create([
            'category_id' => 1,
            'name' => 'Kopi',
            'image' => 'default.jpg'
        ]);

        subCategory::create([
            'category_id' => 1,
            'name' => 'Martabak',
            'image' => 'default.jpg'
        ]);

        subCategory::create([
            'category_id' => 1,
            'name' => 'Pizza',
            'image' => 'default.jpg'
        ]);

        subCategory::create([
            'category_id' => 1,
            'name' => 'Sate',
            'image' => 'default.jpg'
        ]);

        subCategory::create([
            'category_id' => 2,
            'name' => 'Tanah Liat',
            'image' => 'default.jpg'
        ]);

        subCategory::create([
            'category_id' => 2,
            'name' => 'Kayu dan Bambu',
            'image' => 'default.jpg'
        ]);

        subCategory::create([
            'category_id' => 2,
            'name' => 'Serat Alam',
            'image' => 'default.jpg'
        ]);

        subCategory::create([
            'category_id' => 2,
            'name' => 'Logam',
            'image' => 'default.jpg'
        ]);

        subCategory::create([
            'category_id' => 2,
            'name' => 'Bahan Bekas',
            'image' => 'default.jpg'
        ]);

        subCategory::create([
            'category_id' => 2,
            'name' => 'Resin',
            'image' => 'default.jpg'
        ]);

        subCategory::create([
            'category_id' => 3,
            'name' => 'Sejarah',
            'image' => 'default.jpg'
        ]);

        subCategory::create([
            'category_id' => 3,
            'name' => 'Alam',
            'image' => 'default.jpg'
        ]);

        subCategory::create([
            'category_id' => 3,
            'name' => 'Religi',
            'image' => 'default.jpg'
        ]);

        subCategory::create([
            'category_id' => 3,
            'name' => 'Pendidikan',
            'image' => 'default.jpg'
        ]);
    }
}
