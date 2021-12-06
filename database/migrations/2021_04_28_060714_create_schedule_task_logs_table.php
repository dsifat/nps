<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScheduleTaskLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedule_task_logs', function (Blueprint $table) {
            $table->id();

            $table->string('executed_by')->nullable()->default('Scheduler');
            $table->boolean('is_successfull')->default(true);
            $table->text('log')->nullable();
            $table->string('time_taken')->nullable();
            $table->unsignedBigInteger('schedule_task_id');
            $table->foreign('schedule_task_id')->references('id')->on('schedule_tasks')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedule_task_logs');
    }
}
