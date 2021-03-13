<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQtemplateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qtemplate_products', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('qtemplate_id')->index('qtemplates_qtemplate_products');
            $table->foreignId('qtemplate_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->integer('product_id')->index('products_qtemplate_products');
            $table->string('product_name', 191);
            $table->text('description')->nullable();
            $table->integer('quantity');
            $table->double('price', 8, 2);
            $table->double('sub_total', 8, 2);

            $table->unsignedBigInteger('user_id');
            $table->foreignId('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

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
        Schema::dropIfExists('qtemplate_products');
    }
}
