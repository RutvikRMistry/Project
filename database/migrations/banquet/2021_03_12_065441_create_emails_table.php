<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emails', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('assign_customer_id');
            $table->string('to', 191);
            $table->string('from', 191);
            $table->string('subject', 191);
            $table->text('message');
            $table->tinyInteger('read')->default(0);
            $table->tinyInteger('delete_sender')->default(0);
            $table->tinyInteger('delete_receiver')->default(0);
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
        Schema::dropIfExists('emails');
    }
}
