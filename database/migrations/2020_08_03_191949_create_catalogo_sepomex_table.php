<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatalogoSepomexTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalogo_sepomex', function (Blueprint $table) {
            $table->id();
            $table->string('d_codigo')->nullable();
            $table->index('d_codigo');
            $table->string('d_asenta')->nullable();
            $table->index('d_asenta');
            $table->string('d_tipo_asenta')->nullable();
            $table->string('D_mnpio')->nullable();
            $table->index('D_mnpio');
            $table->string('d_estado')->nullable();
            $table->index('d_estado');
            $table->string('d_ciudad')->nullable();
            $table->index('d_ciudad');
            $table->string('d_CP')->nullable();
            $table->string('c_estado')->nullable();
            $table->string('c_oficina')->nullable();
            $table->string('c_CP')->nullable();
            $table->string('c_tipo_asenta')->nullable();
            $table->string('c_mnpio')->nullable();
            $table->string('id_asenta_cpcons')->nullable();
            $table->string('d_zona')->nullable();
            $table->string('c_cve_ciudad')->nullable();


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
        Schema::dropIfExists('catalogo_sepomex');
    }
}
