<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntertainmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entertainment', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('price')->nullable();
            $table->string('address');
            $table->string('email');
            $table->string('phone');
            $table->text('contract_terms')->nullable();
            $table->text('payment');
            $table->text('cancellation');
            $table->text('force_majeure');
            $table->text('safety_and_security');
            $table->text('indemnification');
            $table->text('binding_arbitration');
            $table->text('approval');

            $table->unsignedBigInteger('user_id')->index('users_entertainment');
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
        Schema::dropIfExists('entertainment');
    }
}
