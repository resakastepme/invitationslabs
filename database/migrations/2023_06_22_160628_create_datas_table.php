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
        Schema::create('datas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_user');
            $table->enum('foto_pria', ['1', '0']);
            $table->enum('foto_wanita', ['1', '0']);
            $table->enum('foto_sampul', ['1', '0']);
            $table->text('maps')->nullable();
            $table->text('video')->nullable();
            $table->text('musik')->nullable();
            $table->text('salam_pembuka')->nullable();
            $table->text('wa_token')->nullable();
            $table->text('wa_atas')->nullable();
            $table->text('wa_bawah')->nullable();
            $table->text('kunci')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datas');
    }
};
