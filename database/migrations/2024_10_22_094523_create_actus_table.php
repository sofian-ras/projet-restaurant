<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('actus', function (Blueprint $table) {
            $table->id();
            //titre varchar
            $table->string('titre');
            //image varchar
            $table->string('image');
            //message text
            $table->text('message');
            //date publication timestamp
            $table->timestamp('date_publication');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actus');
    }
};
