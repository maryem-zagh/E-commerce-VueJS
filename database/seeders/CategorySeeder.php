<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['New Arrivals', 'Shop', 'The Interior Gates'];
        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'name'=>$category,
                'slug'=>Str::slug($category)
            ]);
        }
        $sub_categories = ['Tables','Seating','Bedroom','Storage','Decor'];
        foreach ($sub_categories as $category) {
            DB::table('categories')->insert([
                'name'=>$category,
                'slug'=>Str::slug($category),
                'parent_id'=>2
            ]);
        }
    }
}
