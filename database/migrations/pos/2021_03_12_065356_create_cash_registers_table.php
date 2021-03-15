<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCashRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_pos')->create('cash_registers', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('business_id')->index('business_cash_registers');
            // $table->foreign('business_id')->constrained('business')->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('user_id')->index('users_cash_registers');
            // $table->foreign('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->enum('status', ['close', 'open'])->default('open');
            $table->dateTime('closed_at')->nullable();
            $table->decimal('closing_amount', 20)->default(0.00);
            $table->integer('total_card_slips')->default(0);
            $table->integer('total_cheques')->default(0);
            $table->text('closing_note');
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
        Schema::connection('mysql_pos')->drop('cash_registers');
    }
}
