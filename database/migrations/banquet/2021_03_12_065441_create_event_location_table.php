<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventLocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_location', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name');
            $table->string('dimension');
            $table->string('theater');
            $table->string('classroom');
            $table->string('banquet');
            $table->string('booth');
            $table->string('trade');
            $table->string('location_rent')->nullable();
            $table->integer('user_id')->index('users_event_location');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
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
        Schema::dropIfExists('event_location');
    }
}
