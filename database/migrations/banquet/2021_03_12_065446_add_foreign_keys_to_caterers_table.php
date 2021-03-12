<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCaterersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('caterers', function (Blueprint $table) {
            $table->foreign('event_id', 'eventdetails_caterers')->references('id')->on('eventdetails')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('caterers', function (Blueprint $table) {
            $table->dropForeign('eventdetails_caterers');
        });
    }
}
