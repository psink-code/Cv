<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();

            // Announcements
            $table->unsignedBigInteger('announcement_id')->nullable();
            $table->foreign('announcement_id')->references('id')->on('announcements')->onDelete('cascade');

            $table->string('path')->nullable();
            $table->timestamps();            
    }); 
 }
    public function down()
    {
        Schema::dropIfExists('images');
    }
};
