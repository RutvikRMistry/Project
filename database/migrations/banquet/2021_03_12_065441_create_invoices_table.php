<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('order_id')->index('sales_orders_invoices');
            $table->foreignId('order_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('customer_id')->index('customers_invoices');
            $table->foreignId('customer_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->integer('sales_person_id');
            $table->unsignedBigInteger('sales_team_id')->index('sales_teams_invoices');
            $table->foreignId('sales_team_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->string('invoice_number', 191);
            $table->date('invoice_date');
            $table->date('due_date');
            $table->string('payment_term', 191);
            $table->string('status', 191);
            $table->double('total', 8, 2);
            $table->double('tax_amount', 8, 2);
            $table->double('grand_total', 8, 2);
            $table->double('unpaid_amount', 8, 2);
            $table->double('discount')->nullable();
            $table->double('final_price', 8, 2);
           
            $table->unsignedBigInteger('user_id')->index('users_invoices');
            $table->foreignId('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->timestamps();
            $table->softDeletes();
            $table->integer('is_delete_list');

            $table->integer('qtemplate_id')->index('qtemplates_invoices');
            $table->foreignId('qtemplate_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
