<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Sweaters extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sweaters', function (Blueprint $table) {
            $table->integer('id_sweater')->autoincrement()->primary();
            $table->string('nombre',30);
            $table->string('descripcion',120);
            $table->string('material',50);
            $table->string('tipo_lavado',40);
            $table->string('tipo_cierre',20);
            $table->string('cuello',30);
            $table->string('mangas',20);
            $table->string('telar',20);
            $table->string('tamanos',70);
            $table->string('imagen',140);
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
        //
    }
}
