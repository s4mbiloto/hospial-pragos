<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    public function up(){
        Schema::create('pasien', function (Blueprint $table) {
            $table->increments('id_pasien');
            $table->string('nama', 100);
            $table->integer('umur');
            $table->string('diagnosa', 255)->nullable();
            $table->date('tanggal_masuk')->default(DB::raw('curdate()'));
            $table->unsignedInteger('id_kamar')->nullable();

            $table->foreign('id_kamar')
                  ->references('id_kamar')->on('kamar')
                  ->onDelete('set null');
        });
    }
    public function down(){
        Schema::dropIfExists('pasien');
    }
};
