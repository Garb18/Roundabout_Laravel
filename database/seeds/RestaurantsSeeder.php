<?php

use Illuminate\Database\Seeder;

class RestaurantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $restaurants = [
            [
                'name' => 'Item One',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!',
                'photo' => 'http://placehold.it/700x400',

            ],
            [
                'name' => 'Item Two',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.',
                'photo' => 'http://placehold.it/700x400',

            ],
            [
                'name' => 'Item Three',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!',
                'photo' => 'http://placehold.it/700x400',

            ],
            [
                'name' => 'Item Four',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.',
                'photo' => 'http://placehold.it/700x400',

            ],
            [
                'name' => 'Item Five',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!',
                'photo' => 'http://placehold.it/700x400',

            ],
            [
                'name' => 'Item Six',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.',
                'photo' => 'http://placehold.it/700x400',

            ],
        ];

        foreach ($restaurants as $restaurant) {
            \App\Restaurant::create($restaurant);
        }
    }
}
