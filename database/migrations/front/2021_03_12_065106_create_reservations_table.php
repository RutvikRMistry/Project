<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_front')->create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('uid', 191)->nullable()->unique();
            $table->tinyInteger('online')->nullable()->default(0);
            $table->timestamp('date')->useCurrent();
            $table->unsignedBigInteger('user_id')->unique();
            //$table->foreignid('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            // $table->foreign('user_id', 'users_resverstions')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');

            $table->unsignedBigInteger('room_type_id')->unique();
            //$table->foreignid('room_type_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            // $table->foreign('room_type_id', 'room_types_reservation')->references('id')->on('room_types')->onUpdate('RESTRICT')->onDelete('RESTRICT');

            $table->integer('adults')->default(1);
            $table->integer('kids')->default(0);
            $table->integer('extra_bed')->default(0);
            $table->float('extra_bed_charge', 10, 0)->default(0);
            $table->date('check_in');
            $table->date('check_out');
            $table->integer('number_of_room')->default(1);
            $table->enum('status', ['PENDING', 'CANCEL', 'SUCCESS', 'ONLINE_PENDING'])->default('PENDING');
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
        Schema::connection('mysql_front')->drop('reservations');
    }
}
