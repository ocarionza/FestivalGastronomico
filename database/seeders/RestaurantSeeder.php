<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('restaurants')->insert([
            [
                'user_id' => 1,
                'name' => 'Qbano',
                'description' => 'comidas rapidas (Hamburguesas y Diferentes Emparedados)',
                'city' => 'Manizales',
                'phone' => '3132514788',
                'category_id' => 1,
                'delivery' => 'y',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            
            [
                'user_id' => 1,
                'name' => 'White House',
                'description' => 'las mejores hamburguesas del siglo',
                'city' => 'Manizales',
                'phone' => '12345',
                'category_id' => 2,
                'delivery' => 'y',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'user_id' => 1,
                'name' => 'mayday',
                'description' => 'experiencia de aviacion, todo tipo de comida',
                'city' => 'Manizales',
                'phone' => '88888',
                'category_id' => 3,
                'delivery' => 'y',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
