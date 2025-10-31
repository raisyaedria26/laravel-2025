<?php

namespace Database\Seeders;

// use Faker\Factory;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // INSERT INTO users () VALUES ();
        $faker = \Faker\Factory::create("id_ID");
        for ($i=1; $i <=10 ; $i++) { 
            User::create([
                "name" => $faker->name(),
                "email" => $faker->email(),
                "password" => \Illuminate\Support\Facades\Hash::make("jopartop")
            ]);
        }
    }
}