<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Cornellnote;
use App\Models\Bug;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()
            ->count(50)
            ->hasCornellnotes(6)
            ->hasBugs(5)
            ->create()
            ;
    }
}