<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrintersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_pos')->create('printers', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('business_id')->index('business_printers');
            $table->string('name', 256);
            $table->enum('connection_type', ['network', 'windows', 'linux']);
            $table->enum('capability_profile', ['default', 'simple', 'SP2000', 'TEP-200M', 'P822D'])->default('default');
            $table->string('char_per_line', 191)->nullable();
            $table->string('ip_address', 191)->nullable();
            $table->string('port', 191)->nullable();
            $table->string('path', 191)->nullable();
            $table->integer('created_by');
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
        Schema::connection('mysql_pos')->drop('printers', function (Blueprint $table) {
            
            
            
            
            
            
            
            
            
            
            
        });
    }
}
