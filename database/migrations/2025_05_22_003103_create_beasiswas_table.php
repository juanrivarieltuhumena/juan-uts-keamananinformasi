<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeasiswasTable extends Migration
{
    public function up()
    {
        Schema::create('beasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_penerima');
            $table->string('jenis_beasiswa');
            $table->decimal('jumlah', 12, 2);
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai')->nullable();
            $table->timestamps();
            $table->softDeletes(); // jika ingin soft delete, bisa hapus jika tidak perlu
        });
    }

    public function down()
    {
        Schema::dropIfExists('beasiswas');
    }
}
