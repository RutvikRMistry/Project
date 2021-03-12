<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponPivotIncludeRoomTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_front')->create('coupon_pivot_include_room_type', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('coupon_id')->index('coupon_masters_coupon_pivot_include_room_type');
            $table->integer('room_type_id')->index('room_types_coupon_pivot_include_room');
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
        Schema::connection('mysql_front')->drop('coupon_pivot_include_room_type', function (Blueprint $table) {
            
            
            
            
        });
    }
}
