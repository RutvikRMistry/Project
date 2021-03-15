<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_name', 191);
            $table->string('site_logo', 191);
            $table->string('pdf_logo', 191);
            $table->string('site_email', 191);
            $table->string('address', 191);
            $table->string('phone', 191)->nullable();
            $table->string('currency', 191);
            $table->string('currency_position', 191);
            $table->string('date_format', 191);
            $table->string('time_format', 191);
            $table->string('trial_period', 191);
            $table->string('sales_tax')->nullable();
            $table->string('email_host')->nullable();
            $table->string('email_port')->nullable();
            $table->string('email_username')->nullable();
            $table->string('email_password')->nullable();

            $table->unsignedBigInteger('user_id')->index('users_settings');
            //$table->foreignid('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

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
        Schema::dropIfExists('settings');
    }
}
