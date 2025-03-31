<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::table('contacts', function (Blueprint $table) {
            // Add the 'project_id' field
            $table->foreignId('project_id')->constrained('projects')->onDelete('cascade');
        });
    }

    public function down() {
        Schema::table('contacts', function (Blueprint $table) {
            // Revert the changes in the down method
            $table->dropColumn('project_id');
        });
    }
};
