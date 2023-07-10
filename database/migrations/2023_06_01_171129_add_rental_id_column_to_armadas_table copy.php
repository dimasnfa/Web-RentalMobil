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
        Schema::table('armadas', function (Blueprint $table) {
            $table->unsignedBigInteger('rental_id')->after('nomor_polisi');
            $table->foreign('rental_id')->references('id')->on('users')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('armadas', function (Blueprint $table) {
              $table->dropForeign(['rental_id']);
              $table->dropColumn(['rental_id']);
        });
    }
};
