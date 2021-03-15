<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaxRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_pos')->create('tax_rates', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('business_id')->index('business_tax_rates');
            // $table->foreign('business_id')->constrained('businesss')->onUpdate('cascade')->onDelete('cascade');

            $table->string('name', 191);
            $table->double('amount', 8, 2);
            $table->tinyInteger('is_tax_group')->default(0);
            $table->integer('created_by');
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
        Schema::connection('mysql_pos')->drop('tax_rates');
    }
}
