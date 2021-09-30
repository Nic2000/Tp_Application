<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllcontactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_allcontact', function (Blueprint $table) {

            $table->bigIncrements();
            $table->string('nom');
            $table->string('prenom');
            $table->string('email')->unique();
            $table->string('city');
            $table->string('country');
            $table->string('job');
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
        Schema::dropIfExists('_allcontact');
    }
}
