<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->string('bukti_bayar')->nullable()->after('harga_awal');
            $table->string('status_pembayaran')->default('belum_bayar')->after('bukti_bayar'); // belum_bayar, menunggu_konfirmasi, lunas, ditolak
            $table->string('status_pengerjaan')->default('belum_mulai')->after('status_pembayaran'); // belum_mulai, diproses, selesai
            $table->string('file_hasil')->nullable()->after('status_pengerjaan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn([
                'bukti_bayar',
                'status_pembayaran',
                'status_pengerjaan',
                'file_hasil',
            ]);
        });
    }
};
