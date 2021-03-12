<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhotographersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photographers', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name');
            $table->integer('price')->nullable();
            $table->string('address');
            $table->string('email');
            $table->string('phone');
            $table->text('wedding_photography_contract_terms');
            $table->text('payment');
            $table->text('cancellation');
            $table->text('reschedule');
            $table->text('liability');
            $table->text('responsibilities');
            $table->text('coverage');
            $table->text('image_processing');
            $table->text('model_release');
            $table->text('copyright');
            $table->text('unauthorized_reproduction');
            $table->text('approval');
            $table->integer('user_id')->index('users_photographers');
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
        Schema::dropIfExists('photographers');
    }
}
