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
            $table->integer('id', true);
            $table->string('uid', 191)->nullable()->unique('uid');
            $table->tinyInteger('online')->nullable()->default(0);
            $table->timestamp('date')->useCurrent();
            $table->integer('user_id')->unique('user_id');
            $table->integer('room_type_id')->unique('room_type_id');
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
        Schema::connection('mysql_front')->drop('reservations', function (Blueprint $table) {
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
        });
    }
}
