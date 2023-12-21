<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('specific_questions', function (Blueprint $table) {
            $table->id();
            $table->string("text");
            $table->text("answer");
            $table->string("language");
            $table->integer("question_number");
            $table->timestamps();
        });
        
        Schema::table('specific_questions', function (Blueprint $table) {
            $table->unsignedBigInteger('tourist_spot_id');
            $table->foreign('tourist_spot_id')->references('id')->on('tourist_spots')->onDelete('cascade'); // En;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('specific_questions');
    }
};
