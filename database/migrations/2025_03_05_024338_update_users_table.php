<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // Add new columns
            $table->string('first_name')->after('id');
            $table->string('last_name')->after('first_name');
            $table->string('phone')->nullable()->after('last_name');
            $table->enum('role', ['client', 'voice_actor'])->default('client')->after('phone');

            // Remove old column
            $table->dropColumn('name');
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // Rollback: Remove new columns
            $table->dropColumn(['first_name', 'last_name', 'phone', 'role']);

            // Add back the 'name' column
            $table->string('name')->after('id');
        });
    }
};