<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                "icon"=>"icofont-computer",
                "titre"=>"Lorem ipsum",
                "description"=>"Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi
                sint occaecati cupiditate non provident",
                "created_at"=>now()
            ],
            [
                "icon"=>"icofont-chart-bar-graph",
                "titre"=>"Lorem ipsum",
                "description"=>"Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi
                sint occaecati cupiditate non provident",
                "created_at"=>now()
            ],
            [
                "icon"=>"icofont-earth",
                "titre"=>"Lorem ipsum",
                "description"=>"Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi
                sint occaecati cupiditate non provident",
                "created_at"=>now()
            ],
            [
                "icon"=>"icofont-image",
                "titre"=>"Lorem ipsum",
                "description"=>"Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi
                sint occaecati cupiditate non provident",
                "created_at"=>now()
            ],
            [
                "icon"=>"icofont-settings",
                "titre"=>"Lorem ipsum",
                "description"=>"Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi
                sint occaecati cupiditate non provident",
                "created_at"=>now()
            ],
            [
                "icon"=>"icofont-tasks-alt",
                "titre"=>"Lorem ipsum",
                "description"=>"Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi
                sint occaecati cupiditate non provident",
                "created_at"=>now()
            ],
        ]);
    }
}
