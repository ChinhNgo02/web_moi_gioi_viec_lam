<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Language;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Language::factory(10)->create();
        Company::factory(1)->create();
        // $this->call(UserSeeder::class);
    }
}