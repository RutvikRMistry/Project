<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationTaxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_front')->create('reservation_taxes', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('reservation_id')->index('reservations_reservation_tax');
            $table->integer('tax_id')->index('tax_managers_reservation_taxes');
            $table->enum('type', ['PERCENTAGE', 'FIXED']);
            $table->double('value', 8, 2)->default(0.00);
            $table->double('price', 8, 2)->default(0.00);
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
        Schema::connection('mysql_front')->drop('reservation_taxes', function (Blueprint $table) {
            
            
            
            
            
            
            
        });
    }
}
