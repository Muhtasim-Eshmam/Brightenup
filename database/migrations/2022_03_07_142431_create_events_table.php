<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
   
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('topic');
            $table->string('venue');
            $table->string('contact');
            $table->string('tseat');
            $table->string('reserved')->nullable();
            $table->string('date')->nullable();
            $table->string('time')->nullable();
          
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('events');
    }
}
