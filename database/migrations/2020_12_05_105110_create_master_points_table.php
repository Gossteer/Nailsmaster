<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterPointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_points', function (Blueprint $table) {
            $table->id();
            $table->foreignId('master_id')->constrained()->onDelete('CASCADE');
            $table->string('name');
            $table->float('latitude');
            $table->float('longitude');
            $table->boolean('stasus')->default(0);
            $table->text('description')->nullable();
            $table->string('image');
            $table->string('address');
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
        Schema::dropIfExists('master_points');
    }
}
