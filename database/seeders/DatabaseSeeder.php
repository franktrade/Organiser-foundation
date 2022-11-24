<?php

namespace Database\Seeders;

use App\Models\Testimony;
use Database\Factories\ImpactFactory;
use Database\Factories\TestimonyFactory;
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
        ImpactFactory::new()->count(50)->create();

        TestimonyFactory::new()->count(6)->create();
    }
}
