<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_pos')->table('bookings', function (Blueprint $table) {
            $table->foreign('business_id', 'business_business_bookings')->references('id')->on('business')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('location_id', 'contacts_bookings')->references('id')->on('contacts')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('contact_id', 'contacts_ookings')->references('id')->on('contacts')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_pos')->table('bookings', function (Blueprint $table) {
            $table->dropForeign('business_business_bookings');
            $table->dropForeign('contacts_bookings');
            $table->dropForeign('contacts_ookings');
        });
    }
}
