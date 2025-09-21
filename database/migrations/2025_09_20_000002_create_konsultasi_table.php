<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(){
        Schema::create('konsultasi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama', 100);
            $table->string('nik', 50);
            $table->text('keluhan');
            $table->timestamp('tanggal')->useCurrent();
        });
    }
    public function down(){
        Schema::dropIfExists('konsultasi');
    }
};
