<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_pos')->create('contacts', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('business_id')->index('business_contacts');
            $table->foreignId('business_id')->constrained('business')->onUpdate('cascade')->onDelete('cascade');

            $table->enum('type', ['supplier', 'customer', 'both']);
            $table->string('supplier_business_name', 191)->nullable();
            $table->string('name', 191);
            $table->string('email', 191)->nullable();
            $table->integer('contact_id');
            $table->string('tax_number', 191)->nullable();
            $table->string('city', 191)->nullable();
            $table->string('state', 191)->nullable();
            $table->string('country', 191)->nullable();
            $table->string('landmark', 191)->nullable();
            $table->string('mobile', 191);
            $table->string('landline', 191)->nullable();
            $table->string('alternate_number', 191)->nullable();
            $table->integer('pay_term_number')->nullable();
            $table->enum('pay_term_type', ['days', 'months'])->nullable();
            $table->decimal('credit_limit', 20)->nullable();
            $table->integer('created_by');
            $table->tinyInteger('is_default')->default(0);

            $table->unsignedBigInteger('customer_group_id')->nullable()->index('customer_groups_contacts');
            $table->foreignId('customer_group_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->string('custom_field1', 191)->nullable();
            $table->string('custom_field2', 191)->nullable();
            $table->string('custom_field3', 191)->nullable();
            $table->string('custom_field4', 191)->nullable();
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
        Schema::connection('mysql_pos')->drop('contacts', function (Blueprint $table) {
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
        });
    }
}
