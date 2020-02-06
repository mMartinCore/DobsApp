<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned()->index();
            $table->string('station',200)->unique();
            $table->string('stationCode',10)->unique(); 
            $table->integer('division_id')->unsigned()->index();;
			$table->integer('modify_by');
			$table->softDeletes();
            $table->timestamps();
            //$table->foreign('division_id')->references('id')->on('divisions');
            //$table->foreign('user_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stations');
    }
}
