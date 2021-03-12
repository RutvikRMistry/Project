<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCouponPivotIncludeRoomTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_front')->table('coupon_pivot_include_room_type', function (Blueprint $table) {
            $table->foreign('coupon_id', 'coupon_masters_coupon_pivot_include_room_type')->references('id')->on('coupon_masters')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('room_type_id', 'room_types_coupon_pivot_include_room')->references('id')->on('room_types')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_front')->table('coupon_pivot_include_room_type', function (Blueprint $table) {
            $table->dropForeign('coupon_masters_coupon_pivot_include_room_type');
            $table->dropForeign('room_types_coupon_pivot_include_room');
        });
    }
}
