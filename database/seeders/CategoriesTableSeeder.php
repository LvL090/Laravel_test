<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $category1 = new Category;
        $category1-> name = "Deportes";
        $category1-> description = "Categoria basada en deportes como, fútbol, baloncesto, tenis...";
        $category1-> active = true;
        $category1->save();

        $category2 = new Category;
        $category2-> name = "Acción";
        $category2-> description = "Categoria basada en juegos repletos de acción.";
        $category2-> active = true;
        $category2->save();

        $category3 = new Category;
        $category3-> name = "Aventuras";
        $category3-> description = "Categoria basada en juegos trepidantes y llenos de misterios.";
        $category3-> active = true;
        $category3->save();
    }
}
