<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBatchtablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('batchtables', function (Blueprint $table) {
            $table->increments('id');
            $table->string('batch_name');
            $table->string('name');
            $table->string('image');
            $table->string('membership_no');
            $table->text('degree');
            $table->text('present_professional_status');
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
        Schema::dropIfExists('batchtables');
    }
}
