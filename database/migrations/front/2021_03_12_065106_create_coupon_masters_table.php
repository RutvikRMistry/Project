<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponMastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_front')->create('coupon_masters', function (Blueprint $table) {
            $table->id();
            $table->string('offer_title', 191);
            $table->longText('description')->nullable();
            $table->string('image', 191)->nullable();
            $table->dateTime('period_start_time');
            $table->dateTime('period_end_time');
            $table->string('code', 191)->unique();
            $table->enum('type', ['PERCENTAGE', 'FIXED'])->default('PERCENTAGE');
            $table->double('value', 8, 2)->default(0.00);
            $table->double('min_amount', 8, 2)->default(0.00);
            $table->double('max_amount', 8, 2)->default(0.00);
            $table->integer('limit_per_user')->default(0);
            $table->integer('limit_per_coupon')->default(0);
            $table->tinyInteger('status')->default(1);
            $table->softDeletes();
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
        Schema::connection('mysql_front')->drop('coupon_masters');
    }
}
