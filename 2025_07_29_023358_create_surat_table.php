<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('surats', function (Blueprint $table) {
    $table->id();
    $table->string('jenis');
    $table->string('nomor_surat')->unique();
    $table->string('pengirim');
    $table->string('penerima');
    $table->date('tanggal');
    $table->string('perihal');
    $table->text('keterangan')->nullable();
    $table->string('file_path')->nullable();
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
        Schema::dropIfExists('surat');
    }
}
