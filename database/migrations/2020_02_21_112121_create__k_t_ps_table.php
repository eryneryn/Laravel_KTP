<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKTPsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_k_t_ps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('nik', 16)->unique();
            $table->string('image');
            $table->string('nama');
            $table->string('ttl');
            $table->string('gender');
            $table->string('goldar', 3);
            $table->string('alamat');
            $table->string('rr');
            $table->string('kd');
            $table->string('camat');
            $table->string('agama');
            $table->string('status');
            $table->string('pekerjaan');
            $table->string('warga');
            $table->string('berlaku');
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
        Schema::dropIfExists('_k_t_ps');
    }
}
