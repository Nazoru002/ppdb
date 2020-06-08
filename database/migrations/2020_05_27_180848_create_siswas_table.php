<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('nik');
            $table->string('name');
            $table->string('province');
            $table->string('city');
            $table->string('tempat_lahir');
            $table->date('date_of_birth');
            $table->string('gender');
            $table->string('phone');
            $table->text('address');
            $table->string('post_code', 10);
            $table->text('berkas');
            $table->text('photo')->nullable();
            $table->string('bank')->nullable();
            $table->enum('transfer_status', ['Belum', 'Sedang', 'Sudah'])->default('Belum');
            $table->enum('payment_status', ['Belum', 'Lunas'])->default('Belum');
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
        Schema::dropIfExists('siswas');
    }
}
