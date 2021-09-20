<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            [
                'user_id' => 1,
                'restaurant_id' => 1,
                'comment' => 'Delicioso, muy recomendado',
                'score' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'user_id' => 1,
                'restaurant_id' => 2,
                'comment' => 'Mala atencion, la comida estaba buena',
                'score' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'user_id' => 1,
                'restaurant_id' => 3,
                'comment' => 'una experiencia muy agaradable',
                'score' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

        ]);
    }
}
