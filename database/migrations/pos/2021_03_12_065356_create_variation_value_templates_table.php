<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVariationValueTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_pos')->create('variation_value_templates', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name', 191);
            $table->integer('variation_template_id')->index('variation_templates_variation_value_templates');
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
        Schema::connection('mysql_pos')->drop('variation_value_templates', function (Blueprint $table) {
            
            
            
            
        });
    }
}