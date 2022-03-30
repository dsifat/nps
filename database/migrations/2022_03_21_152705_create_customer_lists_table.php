<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_lists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('customer_group_id');
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('phone_number')->nullable();

            $table->foreign('customer_group_id')->references('id')->on('customer_groups')->onDelete('cascade');
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
        Schema::dropIfExists('customer_lists');
    }
}
