<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditTripsTableNew3 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trips' , function (Blueprint $table){

            $table->unsignedBigInteger('train_id');
            $table->foreign("train_id")->on("trains")->references("id");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trips' , function (Blueprint $table){
            $table->removeColumn('train_id');
        });
    }
}
