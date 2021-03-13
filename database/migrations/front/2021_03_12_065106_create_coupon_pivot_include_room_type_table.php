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
            $table->id();
            $table->unsignedBigInteger('coupon_id')->index('coupon_masters_coupon_pivot_include_room_type');
            $table->foreignId('coupon_id')->constrained('coupon_masters')->onUpdate('cascade')->onDelete('cascade');

            // $table->foreign('coupon_id', 'coupon_masters_coupon_pivot_include_room_type')->references('id')->on('coupon_masters')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->unsignedBigInteger('room_type_id')->index('room_types_coupon_pivot_include_room');
            $table->foreignId('room_type_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            // $table->foreign('room_type_id', 'room_types_coupon_pivot_include_room')->references('id')->on('room_types')->onUpdate('RESTRICT')->onDelete('RESTRICT');
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
        Schema::connection('mysql_front')->drop('coupon_pivot_include_room_type');
    }
}
