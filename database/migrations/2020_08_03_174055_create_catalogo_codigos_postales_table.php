<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatalogoCodigosPostalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalogo_codigos_postales', function (Blueprint $table) {
            $table->id();
            $table->string('codigo')->nullable();
            $table->index('codigo');
            $table->string('estado')->nullable();
            $table->index('estado');
            $table->string('codigo_municipio')->nullable();
            $table->index('codigo_municipio');
            $table->string('codigo_localidad')->nullable();
            $table->index('codigo_localidad');
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
        Schema::dropIfExists('catalogo_codigos_postales');
    }
}
