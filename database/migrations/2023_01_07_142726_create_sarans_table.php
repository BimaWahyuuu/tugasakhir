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
        Schema::create('saran', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('bidang_id')->unsigned();
            $table->foreign('bidang_id')->references('id')->on('bidang')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->string('tiket');
            $table->string('nama');
            $table->string('pengenal');
            $table->string('judul');
            $table->string('isi');
            $table->string('foto');
            $table->timestamp('dibuat');
            $table->string('status');
            $table->BigInteger('quote')->nullable();
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
        Schema::dropIfExists('sarans');
    }
};
