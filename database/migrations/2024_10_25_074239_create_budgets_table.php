<?php

// database/migrations/xxxx_xx_xx_xxxxxx_create_budgets_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBudgetsTable extends Migration
{
    public function up()
    {
        Schema::create('budgets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('category');
            $table->decimal('amount', 10, 2);
            $table->boolean('completed')->default(false);
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('budgets');
    }
}
