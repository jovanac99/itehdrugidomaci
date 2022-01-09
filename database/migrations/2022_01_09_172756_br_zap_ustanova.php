<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BrZapUstanova extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ustanovas', function (Blueprint $table) {
            $table->after('grad', function ($table) {
                $table->integer('broj_zaposlenih');
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
        Schema::table('ustanovas', function (Blueprint $table) {
            $table->dropColumn('broj_zaposlenih');
        });
    }
}
