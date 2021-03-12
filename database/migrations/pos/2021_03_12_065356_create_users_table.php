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
        Schema::connection('mysql_pos')->create('users', function (Blueprint $table) {
            $table->integer('id', true);
            $table->char('surname', 10)->nullable();
            $table->string('first_name', 191);
            $table->string('last_name', 191)->nullable();
            $table->string('username', 191)->unique('username');
            $table->string('email', 191)->nullable();
            $table->string('password', 191);
            $table->char('language', 4)->default('en');
            $table->char('contact_no', 15)->nullable();
            $table->text('address')->nullable()->default('1');
            $table->decimal('cmmsn_percent', 4)->default(0.00);
            $table->tinyInteger('super_admin')->default(0);
            $table->softDeletes();
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
        Schema::connection('mysql_pos')->drop('users', function (Blueprint $table) {
            
            
            
            
            
            
            
            
            
            
            
            
            
            
        });
    }
}
