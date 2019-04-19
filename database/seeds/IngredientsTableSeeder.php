<?php

use Illuminate\Database\Seeder;

class IngredientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $faker->addProvider(new \Bezhanov\Faker\Provider\Food($faker));

        for ($i = 0; $i < 50; $i++) {
            DB::table('ingredients')->insert([
            'name' => $faker->ingredient,
            'description' => $faker->text(1000),
            'serving_size' => $faker->measurement,
            'calories' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 999),
            'fats' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 999),
            'carbohydrates' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 999),
            'proteins' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 999),
        ]);
        }
    }
}
