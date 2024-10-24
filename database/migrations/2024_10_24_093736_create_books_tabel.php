<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Pest\Mutate\Subscribers\StopOnUncoveredMutation;
use PHPUnit\TextUI\XmlConfiguration\Logging\TeamCity;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books_tabel', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('author');
            $table->year('year');
            $table->string('publisher');
            $table->string('city');
            $table->string('cover');
            $table->unsignedBigInteger('bookshelf_id');
            $table->unsignedBigInteger('category_id');
            $table->timestamps();

            $table->foreign('bookshelf_id')
                ->references('id')->on('bookshelves')
                ->onUpdate('cascade')
                ->onDelete('cascade');
                
            $table->foreign('category_id')
                ->references('id')->on('categories')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books_tabel');
    }
};
