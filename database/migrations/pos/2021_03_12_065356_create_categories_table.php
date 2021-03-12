<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_pos')->create('categories', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name', 191);
            $table->integer('business_id')->index('business_catagories');
            $table->string('short_code', 191)->nullable();
            $table->integer('parent_id');
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
        Schema::connection('mysql_pos')->drop('categories', function (Blueprint $table) {
            
            
            
            
            
            
            
            
        });
    }
}
