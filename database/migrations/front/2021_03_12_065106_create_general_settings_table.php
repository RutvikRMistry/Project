<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_front')->create('general_settings', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('title', 191)->nullable();
            $table->string('name', 191)->nullable();
            $table->string('email', 191)->nullable();
            $table->string('phone', 191)->nullable();
            $table->text('address')->nullable();
            $table->string('color', 191)->nullable();
            $table->string('cur', 191)->nullable()->comment('CURRENCY');
            $table->string('cur_sym', 191)->nullable()->comment('CURRENCY SYMBOL');
            $table->tinyInteger('en')->default(1)->comment('EMAIL NOTIFICATION');
            $table->tinyInteger('mn')->default(1)->comment('SMS NOTIFICATION');
            $table->string('sender_email', 191)->nullable();
            $table->longText('email_message')->nullable();
            $table->longText('sms_api')->nullable();
            $table->time('check_in_time')->nullable();
            $table->time('check_out_time')->nullable();
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
        Schema::connection('mysql_front')->drop('general_settings', function (Blueprint $table) {
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
        });
    }
}
