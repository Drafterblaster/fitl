<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fillorder_id')->unsigned();
            $table->text('part');
            $table->timestamps();
        });

        // add the part_id foreign key which references the parts.id column
        Schema::table('parts', function (Blueprint $table) {
            $table->foreign('fillorder_id')->references('id')->on('fillorders');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // drop the parts_id foreign key
        Schema::table('parts', function(Blueprint $table) {
            $table->dropForeign('parts_fillorder_id_foreign');
        });

        Schema::drop('parts');
    }
}
