<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateGuestsTable extends Migration
{
    public function up()
    {
        Schema::table('guests', function (Blueprint $table) {
            // Add new columns
            $table->string('first_name', 50)->nullable()->after('user_id');
            $table->string('last_name', 50)->nullable()->after('first_name');
            $table->string('group_name', 50)->nullable()->after('phone');
            $table->boolean('needs_hotel')->default(false)->after('group_name');
            $table->boolean('invited_to_wedding')->default(false)->after('needs_hotel');
            $table->boolean('invited_to_rehearsal')->default(false)->after('invited_to_wedding');
            $table->boolean('invited_to_shower')->default(false)->after('invited_to_rehearsal');

            // Modify existing columns
            $table->string('name', 191)->nullable()->change();
            $table->string('email', 191)->nullable()->change();
            $table->string('phone', 191)->nullable()->change();
            $table->string('meal_choice', 191)->nullable()->change();

            // Add foreign key constraints if they are not already in place
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('group_id')->references('id')->on('groups')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('guests', function (Blueprint $table) {
            // Drop the added columns
            $table->dropColumn('first_name');
            $table->dropColumn('last_name');
            $table->dropColumn('group_name');
            $table->dropColumn('needs_hotel');
            $table->dropColumn('invited_to_wedding');
            $table->dropColumn('invited_to_rehearsal');
            $table->dropColumn('invited_to_shower');

            // Restore the original column lengths and defaults
            //$table->string('name')->change();
            $table->string('email')->nullable()->change();
            $table->string('phone')->nullable()->change();
            $table->string('meal_choice')->nullable()->change();

            // Drop foreign key constraints if necessary
            $table->dropForeign(['user_id']);
            $table->dropForeign(['group_id']);
        });
    }
}
