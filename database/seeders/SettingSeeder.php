<?php

namespace Database\Seeders;

use App\Models\Settings;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //elequent
        //query builder
        //::

        // $setting = new \App\Models\Settings;
        // $setting->app_name = "Rara";
        // $setting->save();

        Settings::create([
            'app_name' => 'Point Of Sales | PPKD JP',
            'address' => 'Jl. karet Baru',
            'phone_number' => '0881080546266',
        ]);
        

        // DB::table('settings')->create(['app_name' => 'Point Of Sales | PPKD JP','address' => 'Jl. karet Baru','phone_number' => '0881080546266',]);
    }
}