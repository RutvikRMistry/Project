<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppliedCouponCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_front')->create('applied_coupon_codes', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('reservation_id');
            $table->foreignId('reservation_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            // $table->foreign('reservation_id', 'reservations_applied_coupon_codes')->references('id')->on('reservations')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            
            $table->unsignedBigInteger('coupon_id');
            $table->foreignId('coupon_id')->constrained('coupon_masters')->onUpdate('cascade')->onDelete('cascade');

            // $table->foreign('coupon_id', 'coupon_masters_applied_coupon_codes')->references('id')->on('coupon_masters')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            
            $table->unsignedBigInteger('user_id');
            $table->foreignId('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('user_id', 'users_applied_coupon_codes')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
           
            $table->date('date');
            $table->tinyInteger('status')->default(1);
            $table->enum('coupon_type', ['PERCENTAGE', 'FIXED'])->nullable();
            $table->double('coupon_rate', 8, 2)->default(0.00);
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
        Schema::connection('mysql_front')->drop('applied_coupon_codes');
    }
}
