<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerhitunganDataSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perhitungan_data_siswa',function(Blueprint $table){
            $table->increments('id');
            $table->integer('data_siswa_id')->unsigned();
            $table->double('ipk_sedikit');
            $table->double('ipk_sedang');
            $table->double('ipk_banyak');
            $table->double('toefl_sedikit');
            $table->double('toefl_sedang');
            $table->double('toefl_banyak');
            $table->double('prestasi_sedikit');
            $table->double('prestasi_sedang');
            $table->double('prestasi_banyak');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('data_siswa_id')
                  ->references('id')
                  ->on('data_siswa')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perhitungan_data_siswa');
    }
}
