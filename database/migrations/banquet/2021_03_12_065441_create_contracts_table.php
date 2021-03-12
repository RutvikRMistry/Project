<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->integer('id', true);
            $table->date('start_date');
            $table->date('end_date');
            $table->text('description');
            $table->integer('company_id')->index('companies_contracts');
            $table->integer('resp_staff_id');
            $table->string('real_signed_contract', 191);
            $table->integer('user_id')->index('users_contracts');
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
        Schema::dropIfExists('contracts');
    }
}
