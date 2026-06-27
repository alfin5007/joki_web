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
            $table->string('nama_klien')->after('id');
            $table->string('layanan')->after('nama_klien');
            $table->integer('jumlah')->after('layanan');
            $table->string('file_referensi')->nullable()->after('jumlah');
            $table->decimal('harga_awal', 12, 2)->after('file_referensi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn([
                'nama_klien',
                'layanan',
                'jumlah',
                'file_referensi',
                'harga_awal',
            ]);
        });
    }
};
