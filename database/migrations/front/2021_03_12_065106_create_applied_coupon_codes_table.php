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
            $table->integer('id', true);
            $table->integer('reservation_id')->index('reservations_applied_coupon_codes');
            $table->integer('coupon_id')->index('coupon_masters_applied_coupon_codes');
            $table->integer('user_id')->index('users_applied_coupon_codes');
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
        Schema::connection('mysql_front')->drop('applied_coupon_codes', function (Blueprint $table) {
            
            
            
            
            
            
            
            
            
        });
    }
}
