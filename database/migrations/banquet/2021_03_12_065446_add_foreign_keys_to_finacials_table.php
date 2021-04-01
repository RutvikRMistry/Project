<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToFinacialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('finacials', function (Blueprint $table) {
            $table->foreign('event_id', 'eventdetails_finacials')->references('id')->on('eventdetails')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('finacials', function (Blueprint $table) {
            $table->dropForeign('eventdetails_finacials');
        });
    }
}
