<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('nama', 50)->nullable(false);
            $table->integer('umur')->nullable(false);
            $table->string('gender', 10)->nullable(false);
            $table->string('kontak', 20)->nullable(false);
            $table->string('email', 50)->nullable(false)->unique();
            $table->string('keahlian')->nullable(false);
            $table->text('kelebihan')->nullable(false);
            $table->text('kekurangan')->nullable(false);
            $table->string('cv')->nullable(false);
            $table->string('gambar')->nullable(false);
            $table->string('status')->default('Pending');
            $table->timestamps();
            $table->string('rate')->nullable();
            $table->foreign('email')->references('email')->on('users');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};