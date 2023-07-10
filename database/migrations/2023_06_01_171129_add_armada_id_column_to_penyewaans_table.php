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
        Schema::table('penyewaans', function (Blueprint $table) {
            $table->unsignedBigInteger('armada_id')->after('id');
            $table->foreign('armada_id')->references('id')->on('armadas')->onDelete('restrict');
            $table->unsignedBigInteger('penyewa_id')->after('armada_id');
            $table->foreign('penyewa_id')->references('id')->on('users')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('penyewaans', function (Blueprint $table) {
              $table->dropForeign(['armada_id']);
              $table->dropColumn(['armada_id']);
              $table->dropForeign(['penyewa_id']);
              $table->dropColumn(['penyewa_id']);
        });
    }
};
