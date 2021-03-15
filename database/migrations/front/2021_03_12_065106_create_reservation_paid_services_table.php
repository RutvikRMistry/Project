<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationPaidServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_front')->create('reservation_paid_services', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('reservation_id')->index('reservations_reservation_paid_services');
            //$table->foreignid('reservation_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            // $table->foreign('reservation_id', 'reservations_reservation_paid_services')->references('id')->on('reservations')->onUpdate('RESTRICT')->onDelete('RESTRICT');

            $table->date('date')->nullable();
            $table->unsignedBigInteger('paid_service_id')->index('paid_services_reservation_paid_services');
            //$table->foreignid('paid_service_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            // $table->foreign('paid_service_id', 'paid_services_reservation_paid_services')->references('id')->on('paid_services')->onUpdate('RESTRICT')->onDelete('RESTRICT');

            $table->double('value', 18, 2)->default(0.00);
            $table->unsignedBigInteger('qty')->default(0);
            $table->double('price', 18, 2)->default(0.00);
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_front')->drop('reservation_paid_services');
    }
}
