<?php

public function up(): void
{
    Schema::create('lowongans', function (Blueprint $table) {
        $table->id();
        $table->string('judul');
        $table->string('slug')->unique();
        $table->text('deskripsi_singkat');
        $table->text('deskripsi_lengkap')->nullable();
        $table->string('icon')->nullable();
        $table->timestamps();
    });
}
