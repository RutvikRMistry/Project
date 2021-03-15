<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarcodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_pos')->create('barcodes', function (Blueprint $table) {
            $table->id();
            $table->string('name', 191);
            $table->text('description');
            $table->double('width', 8, 2)->nullable();
            $table->double('height', 8, 2)->nullable();
            $table->double('paper_width', 8, 2)->nullable();
            $table->double('paper_height', 8, 2)->nullable();
            $table->double('top_margin', 8, 2)->nullable();
            $table->double('left_margin', 8, 2)->nullable();
            $table->double('row_distance', 8, 2)->nullable();
            $table->double('col_distance', 8, 2)->nullable();
            $table->bigInteger('stickers_in_one_row')->nullable();
            $table->tinyInteger('is_default')->default(0);
            $table->tinyInteger('is_continuous')->default(0);
            $table->bigInteger('stickers_in_one_sheet')->nullable();

            $table->unsignedBigInteger('business_id')->nullable()->index('business_business_barcode');

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
        Schema::connection('mysql_pos')->drop('barcodes');
    }
}
