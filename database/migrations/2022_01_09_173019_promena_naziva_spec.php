<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PromenaNazivaSpec extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('doktors', function (Blueprint $table) {
            $table->renameColumn('spec', 'specijalizacija');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('doktors', function (Blueprint $table) {
            $table->renameColumn('specijalizacija', 'spec');
        });
    }
}
