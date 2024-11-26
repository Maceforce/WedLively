<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuestsTable extends Migration
{
    public function up()
    {
        Schema::create('guests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            //$table->string('name');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->enum('rsvp_status', ['Pending', 'Accepted', 'Declined'])->default('Pending');
            $table->string('meal_choice')->nullable();
            $table->foreignId('group_id')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('guests');
    }
}
