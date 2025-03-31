<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('attachment_files', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->constrained()->onDelete('cascade'); // Foreign key to projects table
            $table->string('file_name'); // Name of the file
            $table->string('file_path'); // Storage path
            $table->string('mime_type')->nullable(); // File MIME type (optional)
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('attachment_files');
    }
};
