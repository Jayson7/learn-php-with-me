<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
  public function up()
{
    Schema::create('posts', function (Blueprint $table) {
        $table->id();                  // Auto-incrementing primary key
        $table->string('title');      // Title of the post
        $table->text('body');         // Full body content of the post
        $table->timestamps();         // Created at / Updated at
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};