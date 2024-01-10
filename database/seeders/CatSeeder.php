<?php

namespace Database\Seeders;

use App\Models\Cat;
use App\Models\Owner;
use Database\Factories\CatFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $owner = Owner::factory()->create();

        Cat::factory()
            ->count(5)
            ->create(['owner_id' => $owner]);
    }
}
