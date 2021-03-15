<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQtemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qtemplates', function (Blueprint $table) {
            $table->id();
            $table->string('quotation_template', 191);
            $table->integer('quotation_duration')->nullable();
            $table->tinyInteger('immediate_payment')->default(1);
            $table->text('terms_and_conditions')->nullable();
            $table->double('total', 8, 2);
            $table->double('tax_amount', 8, 2);
            $table->double('grand_total', 8, 2);

            $table->unsignedBigInteger('user_id')->index('users_qtemplates');
            //$table->foreignid('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

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
        Schema::dropIfExists('qtemplates');
    }
}
