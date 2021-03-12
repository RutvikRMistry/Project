<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToContactusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contactuses', function (Blueprint $table) {
            $table->foreign('event_id', 'eventdetails_contactuses')->references('id')->on('eventdetails')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('type_event_id', 'type_event_contactuses')->references('id')->on('type_event')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contactuses', function (Blueprint $table) {
            $table->dropForeign('eventdetails_contactuses');
            $table->dropForeign('type_event_contactuses');
        });
    }
}
