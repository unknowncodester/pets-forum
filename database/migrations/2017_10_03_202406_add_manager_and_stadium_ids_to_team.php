<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddManagerAndStadiumIdsToTeam extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('teams', function (Blueprint $table) {
            $table->integer('manager_id')->unsigned();
            $table->integer('stadium_id')->unsigned();
            $table->foreign('manager_id')->references('id')->on('managers');
            $table->foreign('stadium_id')->references('id')->on('stadiums');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('teams', function (Blueprint $table) {
            $table->dropForeign('teams_manager_id_foreign');
            $table->dropForeign('teams_stadium_id_foreign');
            $table->dropColumn('manager_id');
            $table->dropColumn('stadium_id');
        });

    }
}
