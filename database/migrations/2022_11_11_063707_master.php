<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Master extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master', function(Blueprint $table){
            $table->id();
            $table->string('nama', 200)->nullable();
            $table->enum('jenis_kelamin', ['L', 'P'])->nullable();
            $table->string('pangkat_nrp', 200)->nullable();
            $table->string('jabatan', 200)->nullable();
            $table->string('tb_bb', 10)->nullable();
            $table->bigInteger('sizing_dress_id')->unsigned()->index()->nullable();
            $table->bigInteger('sizing_trouser_id')->unsigned()->index()->nullable();
            $table->foreign('sizing_dress_id')->references('id')->on('dress_size');
            $table->foreign('sizing_trouser_id')->references('id')->on('trouser_size');
        });
				
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
