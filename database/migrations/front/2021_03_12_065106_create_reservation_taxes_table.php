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
            $table->id();
            $table->unsignedBigInteger('reservation_id')->index('reservations_reservation_tax');
            $table->foreignId('reservation_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            // $table->foreign('reservation_id', 'reservations_reservation_tax')->references('id')->on('reservations')->onUpdate('RESTRICT')->onDelete('RESTRICT');

            $table->unsignedBigInteger('tax_id')->index('tax_managers_reservation_taxes');
            $table->foreignId('tax_id')->constrained('tax_managers')->onUpdate('cascade')->onDelete('cascade');

            // $table->foreign('tax_id', 'tax_managers_reservation_taxes')->references('id')->on('tax_managers')->onUpdate('RESTRICT')->onDelete('RESTRICT');

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
        Schema::connection('mysql_front')->drop('reservation_taxes');
    }
}
