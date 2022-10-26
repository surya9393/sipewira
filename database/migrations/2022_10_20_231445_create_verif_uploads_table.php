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
        Schema::create('verif_uploads', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('upload_id');
            $table->string('s_ktp');
            $table->string('s_npwp');
            $table->string('s_skpns');
            $table->string('s_skpangkat');
            $table->string('s_skijazah');
            $table->string('s_skjabatan');
            $table->string('s_sksehat');
            $table->string('s_suratpernyataan');
            $table->string('s_disiplin');
            $table->string('s_belajar');
            $table->string('s_cuti');
            $table->string('s_wirausaha');
            $table->string('s_nilai');
            $table->string('s_biografi');
            $table->string('s_peta');
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
        Schema::dropIfExists('verif_uploads');
    }
};
