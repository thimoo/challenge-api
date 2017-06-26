<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Développement sur mesure',
            'hour_amount' => 20.0,
            'description' => "Développement d'une fonctionnalité sur mesure.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('products')->insert([
            'name' => 'Design & Graphisme',
            'hour_amount' => 25.0,
            'description' => "Réalisation de flyers ou d'affiches.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('products')->insert([
            'name' => 'Web design',
            'hour_amount' => 40.0,
            'description' => "Création d'une maquette sur mesure respectant la charte graphique.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('products')->insert([
            'name' => 'SEO',
            'hour_amount' => 32.0,
            'description' => "Mise en place d'une stratégie de référencement naturel.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('products')->insert([
            'name' => 'Campagne sur les réseaux sociaux',
            'hour_amount' => 18.0,
            'description' => "Création d'une page Facebook et gestion de la publicité.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
