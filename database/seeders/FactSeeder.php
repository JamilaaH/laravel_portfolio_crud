<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('facts')->insert([
            [
                'icon'=> 'icofont-simple-smile',
                'count'=> 232,
                'description' => "Happy Clients",
                "created_at"=>now()

            ],
            [
                'icon'=> "icofont-document-folder",
                'count'=> 521,
                'description' => "project",
                "created_at"=>now()

            ],
            [
                'icon'=> "icofont-live-support",
                'count'=> 1464,
                'description' => "Hours of Suppport",
                "created_at"=>now()

            ],
            [
                'icon'=> "icofont-users-alt-5",
                'count'=> 15,
                'description' => "Hard workers",
                "created_at"=>now()

            ],
        ]);
    }
}
