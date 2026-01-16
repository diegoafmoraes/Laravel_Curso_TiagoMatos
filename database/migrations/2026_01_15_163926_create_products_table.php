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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('cover')->nullable();
            $table->decimal('price')->default('0.00');
            $table->text('description')->nullable();
            $table->integer('stock')->default('0');
            $table->timestamps(); // Opcional, mas recomendado. softDeletes() não adiciona timestamps por padrão, por isso é bom adicionar separadamente.
            $table->softDeletes(); // Adiciona deleted_at, created_at e updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
