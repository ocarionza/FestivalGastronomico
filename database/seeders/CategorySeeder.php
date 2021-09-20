<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('categories')->insert([

        [
            'name' => 'Comidas Rapidas',
            'description' => 'Hamburguesas, pizzas, perros',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],

        [
            'name' => 'Asados',
            'description' => 'Carne de pollo res y cerdo',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],

        [
            'name' => 'Pasta',
            'description' => 'rica pasta italiana',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],

        [
            'name' => 'comida tipica',
            'description' => 'Full tipico colombiano',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],

    ]);

    }
}
