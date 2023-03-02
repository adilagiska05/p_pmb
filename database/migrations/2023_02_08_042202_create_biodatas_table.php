<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodatas', function (Blueprint $table) {
            $table->id();
            $table-> foreign('nama')->references('id')->on('pendaftars');
            $table->bigInteger('nama')->unsigned();
            $table->integer('nik');
            $table->string('jk');
            $table->string('tempat_lahir');
            $table-> foreign('tgl_lahir')->references('id')->on('pendaftars');
            $table->bigInteger('tgl_lahir')->unsigned();
            $table->string('agama');
            $table->string('status_kawin');
            $table-> foreign('email')->references('id')->on('pendaftars');
            $table->bigInteger('email')->unsigned();
            $table-> foreign('no_hp')->references('id')->on('pendaftars');
            $table->bigInteger('no_hp')->unsigned();
            $table->string('alamat');
            $table->string('rt');
            $table->string('rw');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('provinsi');
            $table->string('kota/kab');
            $table->integer('kode_pos');
            $table->string('kewarganegaraan');
            $table->string('ukuran_almamater');
            $table->string('foto');
            $table->string('up_ktp');
            $table->string('vaksin');

            $table->string('nama_ibu');
            $table->string('nama_ayah');
            $table->string('alamat_ortu');
            $table->string('kelurahan_ortu');
            $table->string('kecamatan_ortu');
            $table->string('provinsi_ortu');
            $table->string('kota/kab_ortu');
            $table->integer('no_hp_ortu');
            $table->string('pekerjaan_ibu');
            $table->string('pekerjaan_ayah');


           
            
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
        Schema::dropIfExists('biodatas');
    }
};
