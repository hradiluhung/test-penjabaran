<?php

use App\Models\Spj;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenjelasansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjelasans', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Spj::class, 'spj_id');
            $table->string('nama');
            $table->integer('volume');
            $table->bigInteger('harga');
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
        Schema::dropIfExists('penjelasans');
    }
}
