<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurrenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('currencies', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('priority')->nullable()->default(100);
            $table->string('iso_code')->nullable();
            $table->string('name')->nullable();
            $table->string('symbol')->nullable();
            $table->string('disambiguate_symbol')->nullable();
            $table->string('alternate_symbols')->nullable();
            $table->string('subunit')->nullable();
            $table->integer('subunit_to_unit')->default(100);
            $table->tinyInteger('symbol_first')->default(1);
            $table->string('html_entity')->nullable();
            $table->string('decimal_mark', 25)->nullable();
            $table->string('thousands_separator', 25)->nullable();
            $table->string('iso_numeric', 25)->nullable();
            $table->integer('smallest_denomination')->default(1);
            $table->tinyInteger('active')->default(1);
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
        Schema::dropIfExists('currencies');
    }
}
