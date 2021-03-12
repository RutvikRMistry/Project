<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToReservationTaxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_front')->table('reservation_taxes', function (Blueprint $table) {
            $table->foreign('reservation_id', 'reservations_reservation_tax')->references('id')->on('reservations')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('tax_id', 'tax_managers_reservation_taxes')->references('id')->on('tax_managers')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_front')->table('reservation_taxes', function (Blueprint $table) {
            $table->dropForeign('reservations_reservation_tax');
            $table->dropForeign('tax_managers_reservation_taxes');
        });
    }
}
