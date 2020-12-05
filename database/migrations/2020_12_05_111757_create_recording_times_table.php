<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordingTimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recording_times', function (Blueprint $table) {
            $table->id();
            $table->foreignId('master_point_id')->constrained()->onDelete('CASCADE');
            $table->dateTime('time');
            $table->boolean('logical_delet')->default(0);
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
        Schema::dropIfExists('recording_times');
    }
}
