<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('slug',100)->unique();
            $table->string('nombre',100);
            $table->text('descripcion');
            $table->date('fecha')->useCurrente();
            $table->bigInteger('precio')->default(0);
            $table->bigInteger('stock')->default(0);
            //esta relacion esta pensado de uno a muchos
            $table->unsignedBigInteger('categorias_id');
            $table->foreign('categorias_id')->references('id')->on('categorias')->onDelete('cascade');
            //relacion de uno a muchos
            



        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
