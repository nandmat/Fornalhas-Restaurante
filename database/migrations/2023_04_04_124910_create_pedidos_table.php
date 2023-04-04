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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->string('cliente');
            $table->integer('mesa');
            $table->json('pratos');
            $table->unsignedBigInteger('status_id');
            $table->double('valor', 10,2);
            $table->unsignedBigInteger('funcionarios_id');
            $table->timestamps();

            $table->foreign('status_id')->references('id')->on('states');
            $table->foreign('funcionarios_id')->references('id')->on('funcionarios');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
};
