<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_payments', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('event_id')->index('eventdetails_admin_payments');
            $table->integer('supplier_id');
            $table->string('supplier_type');
            $table->integer('amount');
            $table->integer('payment_method')->nullable();
            $table->string('payment_date')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin_payments');
    }
}
