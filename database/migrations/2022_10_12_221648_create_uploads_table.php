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
        Schema::create('uploads', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('user_id');
            $table->string('ktp');
            $table->string('npwp');
            $table->string('skpns');
            $table->string('skpangkat');
            $table->string('skijazah');
            $table->string('skjabatan');
            $table->string('sksehat');
            $table->string('suratpernyataan');
            $table->string('disiplin');
            $table->string('belajar');
            $table->string('cuti');
            $table->string('wirausaha');
            $table->string('nilai');
            $table->string('biografi');
            $table->string('peta');
            $table->timestamps();
        });    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('uploads');
    }
};
