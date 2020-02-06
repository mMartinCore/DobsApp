<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id')->unsigned();
            $table->string('firstName',15);
            $table->string('middleName',15)->nullable();
            $table->string('lastName',15);
            $table->integer('rank_id');
            $table->integer('regNo')->nullable();
            $table->integer('station_id')->unsigned()->index();
            $table->integer('division_id')->unsigned()->index();
            $table->integer('user_id')->unsigned()->index();
            $table->integer('modified_by');
            $table->string('email',50)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('status',10);
            $table->rememberToken();
          //  $table->integer('user_id');
         //   $table->foreign('user_id')->references('id')->on('users');
         //   $table->integer('modify_by');


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
        Schema::dropIfExists('users');
    }
}
