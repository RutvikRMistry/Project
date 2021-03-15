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
            $table->id();
            $table->string('name', 191);

            $table->unsignedBigInteger('variation_template_id')->index('variation_templates_variation_value_templates');
            // $table->foreign('variation_template_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

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
        Schema::connection('mysql_pos')->drop('variation_value_templates');
    }
}
