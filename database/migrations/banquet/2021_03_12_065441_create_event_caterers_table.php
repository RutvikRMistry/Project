<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventCaterersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_caterers', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name');
            $table->string('service_provided')->nullable();
            $table->integer('price')->nullable();
            $table->string('address');
            $table->string('email');
            $table->string('phone');
            $table->text('caterer_contract_terms')->nullable();
            $table->text('caterer_payment')->nullable();
            $table->text('caterer_staff_charge')->nullable();
            $table->text('caterer_guest_number')->nullable();
            $table->text('caterer_additional_meal')->nullable();
            $table->text('dietary_requirements')->nullable();
            $table->text('additional_beverages')->nullable();
            $table->text('food_and_beverages')->nullable();
            $table->text('cancellation')->nullable();
            $table->text('hire_equipment')->nullable();
            $table->text('waste_disposal')->nullable();
            $table->text('responsibility_for_damage')->nullable();
            $table->text('disorderly_conduct')->nullable();
            $table->text('responsible_service_of_alcohol')->nullable();
            $table->text('safety_and_hygiene')->nullable();
            $table->text('reschedule')->nullable();
            $table->text('force_majeure')->nullable();
            $table->text('indemnification')->nullable();
            $table->text('binding_arbitration')->nullable();
            $table->integer('user_id')->index('users_event_caterers');
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
        Schema::dropIfExists('event_caterers');
    }
}
