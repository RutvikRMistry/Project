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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->string('first_name', 191);
            $table->string('last_name', 191);
            $table->string('email', 191)->unique();
            $table->string('phone_number', 191)->nullable();
            $table->string('password', 191);
            $table->text('permissions')->nullable();
            $table->string('user_avatar', 191)->nullable();

            $table->unsignedBigInteger('department_id')->nullable()->index('department_master_users');
            //$table->foreignid('department_id')->constrained('department_master')->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('designation_id')->nullable()->index('designation_master_users');
            //$table->foreignid('designation_id')->constrained('designation_master')->onUpdate('cascade')->onDelete('cascade');

            $table->integer('stripe_id');
            $table->timestamp('last_login')->nullable();
            $table->string('current_billing_plan', 191)->nullable();
            $table->string('card_holder_name', 191)->nullable();
            $table->string('card_brand', 191)->nullable();
            $table->string('card_last_four', 191)->nullable();
            $table->timestamp('trial_ends_at')->nullable();
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
        Schema::dropIfExists('users');
    }
}
