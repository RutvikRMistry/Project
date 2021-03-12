<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToQtemplateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('qtemplate_products', function (Blueprint $table) {
            $table->foreign('product_id', 'products_qtemplate_products')->references('id')->on('products')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('qtemplate_id', 'qtemplates_qtemplate_products')->references('id')->on('qtemplates')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('qtemplate_products', function (Blueprint $table) {
            $table->dropForeign('products_qtemplate_products');
            $table->dropForeign('qtemplates_qtemplate_products');
        });
    }
}
