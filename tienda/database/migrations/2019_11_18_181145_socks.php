<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Socks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('socks', function (Blueprint $table) {
            $table->integer('id_socks')->autoincrement()->primary();
            $table->string('nombre',30);
            $table->string('descripcion',120);
            $table->string('material',50);
            $table->string('tipo_lavado',40);
            $table->integer('cantidad_pares');
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
