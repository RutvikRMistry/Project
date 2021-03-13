<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTermsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terms', function (Blueprint $table) {
            $table->id();
            $table->text('food_beverage')->nullable();
            $table->text('administrative_fees')->nullable();
            $table->text('function_room_assignement')->nullable();
            $table->text('guarantees')->nullable();
            $table->text('menu_pricing')->nullable();
            $table->text('decoration')->nullable();
            $table->text('security_parking')->nullable();
            $table->text('damages')->nullable();
            $table->text('service_fees')->nullable();

            $table->unsignedBigInteger('user_id')->index('users_terms');
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
        Schema::dropIfExists('terms');
    }
}
