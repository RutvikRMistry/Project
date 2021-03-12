<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToRegularPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_front')->table('regular_prices', function (Blueprint $table) {
            $table->foreign('room_type_id', 'room_types_regular_prices')->references('id')->on('room_types')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_front')->table('regular_prices', function (Blueprint $table) {
            $table->dropForeign('room_types_regular_prices');
        });
    }
}
