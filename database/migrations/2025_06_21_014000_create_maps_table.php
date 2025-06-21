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
        Schema::create('maps', function (Blueprint $table) {
            $table->id(); // Kolom primary key
            $table->string('nama'); // Nama rumah sakit
            $table->text('alamat'); // Alamat lengkap
            $table->string('no_telepon'); // Nomor telepon
            $table->string('tipe'); // Type rumah sakit (misalnya: umum, khusus, dll)
            $table->decimal('latitude', 10, 7); // Latitude dengan presisi tinggi
            $table->decimal('longitude', 10, 7); // Longitude dengan presisi tinggi
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('maps');
    }
};

