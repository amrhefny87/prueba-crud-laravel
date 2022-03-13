<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Document;
use App\Models\Subcategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        Category::factory(3)->create();
        Subcategory::factory(3)->create(['category_id'=>1]);
        Subcategory::factory(3)->create(['category_id'=>2]);
        Subcategory::factory(3)->create(['category_id'=>3]);
        Document::factory(3)->create(['subcategory_id'=>3]);
        Document::factory(3)->create(['subcategory_id'=>5]);
        Document::factory(3)->create(['subcategory_id'=>6]);
        Document::factory(3)->create(['subcategory_id'=>9]);

    }
}
