<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
            [
                'titre'=>"HTML",
                "value"=>100,
                "created_at"=>now()
            ],
            [
                'titre'=>"CSS",
                "value"=>90,
                "created_at"=>now()
            ],
            [
                'titre'=>"Javascript",
                "value"=>75,
                "created_at"=>now()
            ],
            [
                'titre'=>"PHP",
                "value"=>80,
                "created_at"=>now()
            ],
            [
                'titre'=>"wordpress",
                "value"=>90,
                "created_at"=>now()
            ],
            [
                'titre'=>"photoshop",
                "value"=>55,
                "created_at"=>now()
            ],
        ]);
    }
}
