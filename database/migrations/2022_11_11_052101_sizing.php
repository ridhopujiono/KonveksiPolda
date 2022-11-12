<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Sizing extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dress_size', function(Blueprint $table){
            $table->id();
            $table->float('panjang_baju', 8, 2)->nullable();
            $table->float('lebar_dada', 8, 2)->nullable();
            $table->float('lebar_pundak', 8, 2)->nullable();
            $table->float('panjang_punggung', 8, 2)->nullable();
            $table->float('lebar_punggung', 8, 2)->nullable();
            $table->float('lingkar_lengan', 8, 2)->nullable();
            $table->float('arm_hold', 8, 2)->nullable();
            $table->float('panjang_tangan_pdh', 8, 2)->nullable();
            $table->float('panjang_tangan_pdl_i', 8, 2)->nullable();
            $table->float('panjang_tangan_pdl_ii', 8, 2)->nullable();
            $table->float('panjang_tangan_pdu_i', 8, 2)->nullable();
            $table->float('panjang_tangan_pdu_iv', 8, 2)->nullable();
            $table->float('panjang_tangan_jas_resintel_kam', 8, 2)->nullable();
            $table->float('lingkar_ujung_lengan', 8, 2)->nullable();
            $table->float('lingkar_dada', 8, 2)->nullable();
            $table->float('lingkar_pinggang__perut', 8, 2)->nullable();
            $table->float('lingkar_panggul', 8, 2)->nullable();
            $table->float('lingkar_leher', 8, 2)->nullable();
        });
        Schema::create('trouser_size', function(Blueprint $table){
            $table->id();
            $table->float('panjang_celana_rok', 8, 2)->nullable();
            $table->float('lingkar_pinggang', 8, 2)->nullable();
            $table->float('lingkar_pinggul', 8, 2)->nullable();
            $table->float('pesak_kil', 8, 2)->nullable();
            $table->float('lingkar_paha', 8, 2)->nullable();
            $table->float('lingkar_lutut', 8, 2)->nullable();
            $table->float('lingkar_bawah', 8, 2)->nullable();
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
