<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ustanova;

class UstanovaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ustanova::factory()->count(20)->create();
    }
}
