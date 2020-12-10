<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderUserForMastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_user_for_masters', function (Blueprint $table) {
            $table->id();
            $table->foreignId('master_id')->constrained()->onDelete('CASCADE');
            $table->foreignId('user_id')->constrained()->onDelete('CASCADE');
            $table->integer('price_for_user')->default(0);
            $table->integer('price_for_master')->default(0);
            $table->boolean('message_for_master')->default(1);
            $table->boolean('message_for_user')->default(0);
            $table->string('image_for_user')->nullable();
            $table->string('image_for_master')->nullable();
            $table->boolean('confirmation_master')->default(0);
            $table->boolean('confirmation_customer')->default(0);
            $table->dateTime('datetime_for_order_user');
            $table->dateTime('datetime_for_order_master')->nullable();
            $table->text('description_for_user');
            $table->text('description_for_master')->nullable();
            $table->foreignId('category_nail_id')->constrained()->onDelete('CASCADE');
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
        Schema::dropIfExists('order_user_for_masters');
    }
}
