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
            $table->integer('id', true);
            $table->integer('reservation_id')->index('reservations_reservation_paid_services');
            $table->date('date')->nullable();
            $table->integer('paid_service_id')->index('paid_services_reservation_paid_services');
            $table->double('value', 18, 2)->default(0.00);
            $table->integer('qty')->default(0);
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
        Schema::connection('mysql_front')->drop('reservation_paid_services', function (Blueprint $table) {
            
            
            
            
            
            
            
            
        });
    }
}
