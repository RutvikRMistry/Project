<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToEventDecoratorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('event_decorators', function (Blueprint $table) {
            $table->foreign('decorator_id', 'decorators_event_decorators')->references('id')->on('decorators')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('event_id', 'eventdetails_event_decorators')->references('id')->on('eventdetails')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('event_decorators', function (Blueprint $table) {
            $table->dropForeign('decorators_event_decorators');
            $table->dropForeign('eventdetails_event_decorators');
        });
    }
}
