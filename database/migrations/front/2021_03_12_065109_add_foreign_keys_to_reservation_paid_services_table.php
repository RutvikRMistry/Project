<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToReservationPaidServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_front')->table('reservation_paid_services', function (Blueprint $table) {
            $table->foreign('paid_service_id', 'paid_services_reservation_paid_services')->references('id')->on('paid_services')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('reservation_id', 'reservations_reservation_paid_services')->references('id')->on('reservations')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_front')->table('reservation_paid_services', function (Blueprint $table) {
            $table->dropForeign('paid_services_reservation_paid_services');
            $table->dropForeign('reservations_reservation_paid_services');
        });
    }
}
