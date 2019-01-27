<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserIdToFillordersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fillorders', function (Blueprint $table) {
            $table->integer('user_id')->unsigned()->nullable();
        });

        // add the user_id foreign key
        // which references the users.id column
        Schema::table('fillorders', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fillorders', function (Blueprint $table) {
            $table->dropForeign('fillorders_user_id_foreign');
            $table->dropColumn('user_id');                 
        });
    }
}
