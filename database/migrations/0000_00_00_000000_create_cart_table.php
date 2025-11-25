<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('cart', function (Blueprint $table) {

            $table->bigInteger('user_id')->unsigned()->nullable();

            $table->string('identifier');
            $table->string('instance');
            $table->longText('content');
            $table->nullableTimestamps();

            $table->primary(['identifier', 'instance']);
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('cart');
    }
};
