<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCallsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calls', function (Blueprint $table) {
            $table->integer('id', true);
            $table->date('date');
            $table->text('call_summary');
            $table->integer('duration');
            $table->integer('company_id')->index('companies_calls');
            $table->integer('resp_staff_id');
            $table->integer('user_id')->index('users_calls');
            $table->timestamps();
            $table->softDeletes();
            $table->string('company_name', 191);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calls');
    }
}
