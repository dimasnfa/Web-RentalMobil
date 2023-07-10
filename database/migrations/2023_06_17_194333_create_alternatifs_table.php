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
        Schema::create('alternatifs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('alternatifs');
            $table->string('merk');
            $table->double('harga');
            $table->double('kecepatan');
            $table->double('kapasitasorang');
            $table->double('waktupenyewaan');
            $table->double('kapasitasbensin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alternatifs');
    }
};
