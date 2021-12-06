<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScheduleTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedule_tasks', function (Blueprint $table) {
            $table->id();
            $table->string('description')->nullable();
            $table->string('command')->nullable();
            $table->string('parameters')->nullable();
            $table->string('expression')->nullable();
            $table->boolean('is_active')->nullable()->default(true);
            $table->boolean('dont_overlap')->nullable()->default(false);
            $table->string('notification_email_address')->nullable();
            $table->integer('notification_type')->nullable()->default(0);
            $table->integer('log_clean_up_frequency')->nullable()->default(5);
            $table->integer('log_clean_up_type')->nullable()->default(1);
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
        Schema::drop('schedule_tasks');
    }
}
