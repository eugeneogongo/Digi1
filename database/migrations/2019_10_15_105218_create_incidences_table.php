<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIncidencesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incidences', function (Blueprint $table) {
            $table->increments('id');
            $table->string('details');
            $table->string('route_no');
            $table->string('route');
            $table->string('noplate');
            $table->string('sacco');
            $table->text('problem');
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
        Schema::drop('incidences');
    }
}
