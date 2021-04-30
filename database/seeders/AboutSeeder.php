<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about')->insert([
                "nom" => "Smith",
                "prenom" => "Alex",
                "titre" => "UI/UX Designer & Web Developer",
                "image" => "profile-img.jpg",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                labore et dolore
                magna aliqua.",
                "birthday" => Carbon::create('1995', '05', '01'),
                "website" => "www.example.com",
                "phone" => 1234567890,
                "city" => "New York, USA",
                "age" => 30,
                "degree" => "master",
                "email" => "email@example.com",
                "statut" => "Available",
                "created_at" => now(),                
        ]);
    }
}
