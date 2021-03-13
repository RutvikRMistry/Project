<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaterersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caterers', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('event_id')->nullable()->index('eventdetails_caterers');
            $table->foreignId('event_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->integer('day');
            $table->integer('caterers_id')->nullable();
            $table->string('veg_quoted_price');
            $table->string('nonveg_quoted_price');
            $table->string('veg_final_price');
            $table->string('nonveg_final_price');
            $table->string('service_needed')->nullable();
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
        Schema::dropIfExists('caterers');
    }
}
