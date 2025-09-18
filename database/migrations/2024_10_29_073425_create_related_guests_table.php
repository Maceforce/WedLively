<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelatedGuestsTable extends Migration
{
    public function up()
    {
        Schema::create('related_guests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('guest_id')->constrained('guests')->onDelete('cascade');
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->string('relationship', 50);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('related_guests');
    }

};
