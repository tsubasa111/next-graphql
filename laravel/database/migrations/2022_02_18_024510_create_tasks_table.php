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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedTinyInteger('task_status_id');
            $table->string('title', 100);
            $table->text('text');
            $table->timestamps();

            $table->foreign('user_id')->references('id')
                ->on('users')->cascadeOnUpdate()->cascadeOnDelete();

            $table->foreign('task_status_id')->references('id')
                ->on('task_statuses')->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
};
