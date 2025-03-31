<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('actor_id')->constrained('users')->onDelete('cascade'); // Assuming actor is a user
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('medium');
            $table->integer('amount_words');
            $table->date('deadline');
            $table->text('instruction')->nullable();
            $table->string('tone_voice');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('projects');
    }
};
