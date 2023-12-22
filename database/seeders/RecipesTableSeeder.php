<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Recipe;


class RecipesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $recipe = config('db.products');
        foreach ($recipe as $recipeItem) {
            $newRecipeItem = new Recipe();
            $newRecipeItem->title = $recipeItem['titolo'];
            $newRecipeItem->image = $recipeItem['src'];
            $newRecipeItem->save();
        }
    }
}
