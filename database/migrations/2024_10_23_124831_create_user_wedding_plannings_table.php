<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserWeddingPlanningsTable extends Migration
{
    public function up()
    {
        Schema::create('user_wedding_plannings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->constrained()->onDelete('cascade'); // Ensure user_id is unsigned big integer
            $table->string('name');
            $table->string('email');
            $table->string('getting_married');
            $table->date('wedding_date');
            $table->integer('number_of_guests');
            $table->decimal('estimated_budget', 10, 2);
            $table->string('city_town');
            $table->json('vendors')->nullable(); // To store the selected vendors
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_wedding_plannings');
    }
}
