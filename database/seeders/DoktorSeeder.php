<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Doktor;

class DoktorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Doktor::factory()->count(50)->create();
    }
}
