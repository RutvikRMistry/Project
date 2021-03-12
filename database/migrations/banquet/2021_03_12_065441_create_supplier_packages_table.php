<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupplierPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplier_packages', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('supplier_id');
            $table->string('supplier_type');
            $table->string('package_name');
            $table->string('price')->nullable();
            $table->string('person')->nullable();
            $table->text('services')->nullable();
            $table->integer('user_id')->index('users_supplier_packages');
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
        Schema::dropIfExists('supplier_packages');
    }
}
