<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToVariationValueTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_pos')->table('variation_value_templates', function (Blueprint $table) {
            $table->foreign('variation_template_id', 'variation_templates_variation_value_templates')->references('id')->on('variation_templates')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_pos')->table('variation_value_templates', function (Blueprint $table) {
            $table->dropForeign('variation_templates_variation_value_templates');
        });
    }
}
