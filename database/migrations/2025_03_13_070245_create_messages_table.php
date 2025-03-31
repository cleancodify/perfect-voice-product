<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->string('chat_id'); // Links to the chat session
            $table->foreignId('sender_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('receiver_id')->constrained('users')->onDelete('cascade');
            $table->text('message'); // The actual message content
            $table->boolean('is_read')->default(false); // Read status
            $table->timestamps();

            // Index for faster lookups
            $table->index(['chat_id', 'sender_id', 'receiver_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('messages');
    }
};
