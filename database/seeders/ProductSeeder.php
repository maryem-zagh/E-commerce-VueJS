<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('products')->insert([
            'title'=>"Earthen Bottle",
            'description'=>"Tall slender porcelain bottle with natural clay textured body and cork stopper.",
            'price'=>48,
            'slug'=> Str::slug('Earthen Bottle'),
            'imageSrc'=>"https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-01.jpg",
            'imageAlt'=>"Tall slender porcelain bottle with natural clay textured body and cork stopper."     
    ]);
        DB::table('products')->insert([
            'title'=>"Nomad Tumbler",
            'description'=> "Olive drab green insulated bottle with flared screw lid and flat top.",
            'price'=>35,
            'slug'=> Str::slug('Nomad Tumbler'),
            'imageSrc'=>"https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-02.jpg",
            'imageAlt'=> "Olive drab green insulated bottle with flared screw lid and flat top."     
    ]);
        DB::table('products')->insert([
            'title'=>"Focus Paper Refill",
            'description'=>"Person using a pen to cross a task off a productivity paper card.",
            'price'=>48,
            'slug'=> Str::slug('Focus Paper Refill'),
            'imageSrc'=>"https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-03.jpg",
            'imageAlt'=>"Person using a pen to cross a task off a productivity paper card."     
    ]);
        DB::table('products')->insert([
            'title'=>"Machined Mechanical Pencil",
            'description'=>"Hand holding black machined steel mechanical pencil with brass tip and top.",
            'price'=>35,
            'slug'=> Str::slug('Machined Mechanical Pencil'),
            'imageSrc'=>"https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-04.jpg",
            'imageAlt'=>"Hand holding black machined steel mechanical pencil with brass tip and top."     
    ]);
   
        
    }
}

