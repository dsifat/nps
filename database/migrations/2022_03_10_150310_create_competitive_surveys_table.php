<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->string('customer_msisdn')->nullable();
            $table->string('customer_email')->nullable();
            $table->string('survey_topic')->nullable();
            $table->string('survey_name')->nullable();
            $table->string('question')->nullable();
            $table->string('user_response')->nullable();
            $table->string('nps_status')->nullable();
            $table->date('survey_date')->nullable();
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
