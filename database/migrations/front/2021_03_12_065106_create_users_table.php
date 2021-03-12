<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_front')->create('users', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('username', 191)->unique('username');
            $table->string('email', 191)->unique('email');
            $table->string('first_name', 191)->nullable();
            $table->string('last_name', 191)->nullable();
            $table->string('phone', 191)->nullable();
            $table->date('dob')->nullable();
            $table->longText('address')->nullable();
            $table->enum('sex', ['M', 'F', 'O'])->default('M');
            $table->string('picture', 191)->nullable();
            $table->string('password', 191);
            $table->string('id_type', 191)->nullable();
            $table->string('id_number', 191)->nullable();
            $table->string('id_card_image', 191)->nullable();
            $table->text('remarks')->nullable();
            $table->tinyInteger('vip')->default(0);
            $table->tinyInteger('email_verified')->default(0);
            $table->tinyInteger('email_verified_code')->default(0);
            $table->tinyInteger('sms_verified')->default(0);
            $table->tinyInteger('sms_verified_code')->default(0);
            $table->tinyInteger('status')->default(1);
            $table->rememberToken();
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
        Schema::connection('mysql_front')->drop('users', function (Blueprint $table) {
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
        });
    }
}
