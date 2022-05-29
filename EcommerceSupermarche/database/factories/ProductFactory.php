<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    $factory->define(App\User::class, function (Faker $faker) {
    return [
        // 'Nom_Produit' => $faker->name(),
        // 'Prix_Produit' => rand('1111,9999'),
        // 'Quantite_Produit' => rand('1111,9999'),
    ];
}
