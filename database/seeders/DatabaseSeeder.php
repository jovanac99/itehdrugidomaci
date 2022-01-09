<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\DoktorSeeder;
use Database\Seeders\PacijentSeeder;
use Database\Seeders\UstanovaSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $doktorS = new DoktorSeeder();
        $ustanovaS = new UstanovaSeeder();
        $pacijentS = new PacijentSeeder();

        $doktorS->run();
        $ustanovaS->run();
        $pacijentS->run();
    }
}
