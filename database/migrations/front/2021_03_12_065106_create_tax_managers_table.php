<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaxManagersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_front')->create('tax_managers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 191)->nullable();
            $table->string('code', 191)->nullable();
            $table->enum('type', ['PERCENTAGE', 'FIXED'])->default('PERCENTAGE');
            $table->double('rate', 8, 2)->default(0.00);
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
        Schema::connection('mysql_front')->drop('tax_managers');
    }
}
