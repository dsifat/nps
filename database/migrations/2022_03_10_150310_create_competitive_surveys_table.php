<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompetitiveSurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competitive_surveys', function (Blueprint $table) {
            $table->id();
            $table->string('customer_msisdn');
            $table->string('customer_email')->unique();
            $table->string('survey_topic');
            $table->string('survey_name');
            $table->string('question');
            $table->string('user_response');
            $table->string('nps_status');
            $table->timestamp('survey_date');
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
        Schema::dropIfExists('competitive_surveys');
    }
}
