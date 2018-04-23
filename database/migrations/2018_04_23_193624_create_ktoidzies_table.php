<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKtoidziesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ktoidzies', function (Blueprint $table) {

            $table->increments('id');
            $table->enum('idzie', ["Lipiec", "Sierpien", "Nie ide"])->nullable();
            $table->timestamps();
        });

        Schema::table('ktoidzies', function (Blueprint $table) {       
            $table->foreign('id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ktoidzies');
    }
}
