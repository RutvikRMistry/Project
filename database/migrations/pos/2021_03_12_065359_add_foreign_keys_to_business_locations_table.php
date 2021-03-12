<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToBusinessLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_pos')->table('business_locations', function (Blueprint $table) {
            $table->foreign('business_id', 'business_business_locations_business')->references('id')->on('business')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('invoice_layout_id', 'invoice_layouts_business_locations')->references('id')->on('invoice_layouts')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('invoice_scheme_id', 'invoice_schemes_business_locations')->references('id')->on('invoice_schemes')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('printer_id', 'printers_business_locations')->references('id')->on('printers')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_pos')->table('business_locations', function (Blueprint $table) {
            $table->dropForeign('business_business_locations_business');
            $table->dropForeign('invoice_layouts_business_locations');
            $table->dropForeign('invoice_schemes_business_locations');
            $table->dropForeign('printers_business_locations');
        });
    }
}
