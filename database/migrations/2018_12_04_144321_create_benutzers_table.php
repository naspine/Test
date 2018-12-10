<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBenutzersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('benutzers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username'); //varchar (25)
            $table->string('password'); //varchar (25)
            $table->integer('berechtigungs_id');
            $table->string('E-Mail'); //varchar(50)
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
        Schema::dropIfExists('benutzers');
    }
}
