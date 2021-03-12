<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMiscellaneousTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('miscellaneous', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name');
            $table->text('address')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('price')->nullable();
            $table->text('miscellaneous_contract_terms')->nullable();
            $table->text('miscellaneous_payment')->nullable();
            $table->text('miscellaneous_arrangements')->nullable();
            $table->text('miscellaneous_cancellation')->nullable();
            $table->text('reschedule')->nullable();
            $table->text('force_majeure')->nullable();
            $table->text('indemnification')->nullable();
            $table->text('material_guarantee')->nullable();
            $table->text('binding_arbitration')->nullable();
            $table->text('approval')->nullable();
            $table->integer('user_id')->index('users_miscellaneous');
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
        Schema::dropIfExists('miscellaneous');
    }
}
