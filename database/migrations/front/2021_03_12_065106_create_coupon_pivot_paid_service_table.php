<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponPivotPaidServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_front')->create('coupon_pivot_paid_service', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('coupon_id')->index('coupon_masters_coupon_pivot_paid_services');
            //$table->foreignid('coupon_id')->constrained('coupon_masters')->onUpdate('cascade')->onDelete('cascade');

            // $table->foreign('coupon_id', 'coupon_masters_coupon_pivot_paid_services')->references('id')->on('coupon_masters')->onUpdate('RESTRICT')->onDelete('RESTRICT');

            $table->unsignedBigInteger('paid_service_id')->index('paid_services_coupon_pivot_paid_services');
            //$table->foreignid('paid_service_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            // $table->foreign('paid_service_id', 'paid_services_coupon_pivot_paid_services')->references('id')->on('paid_services')->onUpdate('RESTRICT')->onDelete('RESTRICT');

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
        Schema::connection('mysql_front')->drop('coupon_pivot_paid_service');
    }
}
