<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCouponPivotPaidServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_front')->table('coupon_pivot_paid_service', function (Blueprint $table) {
            $table->foreign('coupon_id', 'coupon_masters_coupon_pivot_paid_services')->references('id')->on('coupon_masters')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('paid_service_id', 'paid_services_coupon_pivot_paid_services')->references('id')->on('paid_services')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_front')->table('coupon_pivot_paid_service', function (Blueprint $table) {
            $table->dropForeign('coupon_masters_coupon_pivot_paid_services');
            $table->dropForeign('paid_services_coupon_pivot_paid_services');
        });
    }
}
