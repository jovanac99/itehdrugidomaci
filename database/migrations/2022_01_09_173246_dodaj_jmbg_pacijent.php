<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DodajJmbgPacijent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pacijents', function (Blueprint $table) {
            $table->after('prezime', function ($table) {
                $table->bigInteger('jmbg')->unique();
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pacijents', function (Blueprint $table) {
            $table->dropColumn('jmbg');
        });
    }
}
