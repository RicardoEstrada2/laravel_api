<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Address;
use App\Models\Category;
use App\Models\Maker;
use App\Models\Users;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Users::factory(10)->create();
        Maker::factory(10)->create();
        Category::factory(10)->create();
        Address::factory(10)->create();
    }
}
