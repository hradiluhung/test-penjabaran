<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpjsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spjs', function (Blueprint $table) {
            $table->id();
            $table->string('kode');
            $table->string('uraian');
            $table->bigInteger('anggaran');
            $table->bigInteger('realisasi');
            $table->bigInteger('perubahan_rp');
            $table->float('perubahan_persen');
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
        Schema::dropIfExists('spjs');
    }
}
