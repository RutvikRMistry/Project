<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVariationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_pos')->create('variations', function (Blueprint $table) {
            $table->id();
            $table->string('name', 191);

            $table->unsignedBigInteger('product_id');
            // $table->foreign('product_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->string('sub_sku', 191)->nullable();
            $table->timestamps();
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
        Schema::connection('mysql_pos')->drop('variations');
    }
}
