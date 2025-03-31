<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdToProfilesTable extends Migration
{
    public function up()
    {
        Schema::table('profiles', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Add the user_id as a foreign key
        });
    }

    public function down()
    {
        Schema::table('profiles', function (Blueprint $table) {
            $table->dropForeign(['user_id']); // Remove foreign key if rolling back
            $table->dropColumn('user_id');
        });
    }
}
