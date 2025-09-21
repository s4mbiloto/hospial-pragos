<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(){
        Schema::create('kamar', function (Blueprint $table) {
            $table->increments('id_kamar');
            $table->string('no_kamar', 10)->unique();
        });
    }
    public function down(){
        Schema::dropIfExists('kamar');
    }
};
