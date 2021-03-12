<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_front')->create('admins', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('username', 191)->unique('username');
            $table->string('email', 191)->unique('email');
            $table->string('first_name', 191)->nullable();
            $table->string('last_name', 191)->nullable();
            $table->string('phone', 191)->nullable();
            $table->longText('address')->nullable();
            $table->enum('sex', ['M', 'F', 'O'])->default('M');
            $table->string('picture', 191)->nullable();
            $table->tinyInteger('status')->default(1);
            $table->string('password', 191);
            $table->rememberToken();
            $table->integer('role')->default(2)->comment('admin=0,staff=1');
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
        Schema::connection('mysql_front')->drop('admins', function (Blueprint $table) {
            
            
            
            
            
            
            
            
            
            
            
            
            
            
        });
    }
}
