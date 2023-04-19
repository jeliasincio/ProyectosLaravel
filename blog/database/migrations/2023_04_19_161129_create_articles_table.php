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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title',255);
            $table->string('slug',255)->unique();
            $table->string('introduction',255);
            $table->string('image',255);
            $table->text('body');
            $table->boolean('status')->default(0);

            //Relaciòn con la tabla users
            $table->unsignedBigInteger('user_id')->nullable(); // admite valores nulos
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('set null'); // si se elimina un usuario no quiero que se elimine un articulo

            //Relaciòn con la tabla categories
            $table->unsignedBigInteger('category_id'); // admite valores nulos
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('set null'); // si se elimina un usaurio no quiero que se elimine un articulo

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
