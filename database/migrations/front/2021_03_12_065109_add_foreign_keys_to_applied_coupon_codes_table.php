<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToAppliedCouponCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_front')->table('applied_coupon_codes', function (Blueprint $table) {
            $table->foreign('coupon_id', 'coupon_masters_applied_coupon_codes')->references('id')->on('coupon_masters')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('reservation_id', 'reservations_applied_coupon_codes')->references('id')->on('reservations')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('user_id', 'users_applied_coupon_codes')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_front')->table('applied_coupon_codes', function (Blueprint $table) {
            $table->dropForeign('coupon_masters_applied_coupon_codes');
            $table->dropForeign('reservations_applied_coupon_codes');
            $table->dropForeign('users_applied_coupon_codes');
        });
    }
}
