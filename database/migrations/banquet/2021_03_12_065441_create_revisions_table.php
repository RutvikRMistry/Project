<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRevisionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('revisions', function (Blueprint $table) {
            $table->id();
            $table->string('revisionable_type', 191);
            $table->integer('revisionable_id');

            $table->unsignedBigInteger('user_id')->nullable()->index('users_revisions');
            //$table->foreignid('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->string('key', 191);
            $table->text('old_value')->nullable();
            $table->text('new_value')->nullable();
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
        Schema::dropIfExists('revisions');
    }
}
