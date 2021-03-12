<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToAdditionalinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('additionalinfos', function (Blueprint $table) {
            $table->foreign('event_id', 'eventdetails_additional_info')->references('id')->on('eventdetails')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('additionalinfos', function (Blueprint $table) {
            $table->dropForeign('eventdetails_additional_info');
        });
    }
}
