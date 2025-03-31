<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('temporary_attachments', function (Blueprint $table) {
            $table->bigInteger('file_size')->after('mime_type')->nullable(); // Adding file_size column
        });

        Schema::table('attachment_files', function (Blueprint $table) {
            $table->bigInteger('file_size')->after('mime_type')->nullable(); // Adding file_size column
        });
    }

    public function down()
    {
        Schema::table('temporary_attachments', function (Blueprint $table) {
            $table->dropColumn('file_size');
        });

        Schema::table('attachment_files', function (Blueprint $table) {
            $table->dropColumn('file_size');
        });
    }
};
