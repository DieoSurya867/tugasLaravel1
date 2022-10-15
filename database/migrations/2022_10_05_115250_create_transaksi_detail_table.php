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
        Schema::create('transaksi_detail', function (Blueprint $table) {
            $table->id();
            $table->foreignId('transaksi_id')->constrained('transaksi')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('products_id')->constrained('products')->cascadeOnUpdate()->cascadeOnDelete();
            $table->integer('harga');
            $table->string('pengiriman_status');
            $table->string('resi');
            $table->foreignId('kode_transaksi')->constrained('transaksi')->cascadeOnUpdate()->cascadeOnDelete();

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
        Schema::dropIfExists('transaksi_detail');
    }
};
