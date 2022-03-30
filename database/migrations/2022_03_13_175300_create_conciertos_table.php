<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConciertosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conciertos', function (Blueprint $table) {
            $table->id();
            $table->date('fechacelebracion');
            $table->string('informacion',5000);
            $table->decimal('precio',8,2);

            $table->unsignedBigInteger('provincia_id');
            $table->foreign('provincia_id')
                ->references('id')
                ->on('provincias');

            $table->unsignedBigInteger('artista_id');
            $table->foreign('artista_id')
                ->references('id')
                ->on('artistas')
                ->onDelete('cascade');
            
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
        Schema::dropIfExists('conciertos');
    }
}
