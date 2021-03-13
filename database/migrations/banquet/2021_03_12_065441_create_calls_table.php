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
            $table->id();
            $table->date('date');
            $table->text('call_summary');
            $table->integer('duration');

            $table->unsignedBigInteger('company_id')->index('companies_calls');
            $table->foreignId('company_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->integer('resp_staff_id');

            $table->unsignedBigInteger('user_id')->index('users_calls');
            $table->foreignId('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

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
