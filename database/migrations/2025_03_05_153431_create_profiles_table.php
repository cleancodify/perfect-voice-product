<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('country_code', 5); // Store country code, e.g. 'US'
            $table->enum('gender', ['female', 'male']); // Enum for gender
            $table->string('language_code', 5); // Store language code, e.g. 'en'
            $table->string('photo_src')->nullable(); // Store photo URL or path
            $table->text('bio')->nullable(); // Text field for bio
            $table->string('worked_brands')->nullable(); // Store comma-separated list of brands
            $table->string('audio_src_explainer')->nullable(); // Audio source for explainer
            $table->string('audio_src_elearning')->nullable(); // Audio source for eLearning
            $table->string('audio_src_guide')->nullable(); // Audio source for guide
            $table->string('audio_src_telephony')->nullable(); // Audio source for telephony
            $table->string('audio_src_commercial')->nullable(); // Audio source for commercial
            $table->string('audio_src_characters')->nullable(); // Audio source for characters
            $table->string('video_src')->nullable(); // Video source for profile
            $table->integer('deadline')->nullable(); // Deadline in hours
            $table->boolean('accept_demo')->default(false); // Accept demo, boolean field
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
