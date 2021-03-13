<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotations', function (Blueprint $table) {
            $table->id();            
            $table->string('quotations_number', 191);

            $table->unsignedBigInteger('customer_id')->index('customers_quotations');
            $table->foreignId('customer_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('qtemplate_id')->nullable()->index('qtemplates_quotations');
            $table->foreignId('qtemplate_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->date('date');
            $table->date('exp_date');
            $table->string('payment_term', 191);
            $table->integer('sales_person_id');

            $table->unsignedBigInteger('sales_team_id')->index('sales_teams_quotations');
            $table->foreignId('sales_team_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->text('terms_and_conditions')->nullable();
            $table->string('status', 191);
            $table->double('total', 8, 2);
            $table->double('tax_amount', 8, 2);
            $table->double('grand_total', 8, 2);
            $table->double('discount')->nullable();
            $table->double('final_price', 8, 2);
          
            $table->unsignedBigInteger('user_id')->index('users_quotations');
            $table->foreignId('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->timestamps();
            $table->softDeletes();

            $table->unsignedBigInteger('opportunity_id')->index('opportunities_quotations');
            $table->foreignId('opportunity_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->integer('is_delete_list');
            $table->integer('is_converted_list');
            $table->integer('is_quotation_invoice_list');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quotations');
    }
}
