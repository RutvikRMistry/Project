<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDecoratorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('decorators', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('service_provided');
            $table->integer('price')->nullable();
            $table->string('address');
            $table->string('email');
            $table->string('phone');
            $table->text('decoration_contract_terms');
            $table->text('decoration_fees');
            $table->text('decoration_arrangements');
            $table->text('damage_to_property');
            $table->text('deposit');
            $table->text('cancellation_and_design_change_fee');
            $table->text('safety');
            $table->text('material_guarantee');
            $table->text('making_changes');
            $table->text('approval');

            $table->unsignedBigInteger('user_id')->index('users_decorators');
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
        Schema::dropIfExists('decorators');
    }
}
