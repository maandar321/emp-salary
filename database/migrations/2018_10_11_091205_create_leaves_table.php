<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeavesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leaves', function (Blueprint $table) {
            $table->increments('id');
            $table->string('leave_type');
            $table->string('start_date');
            $table->string('end_date');
            $table->boolean('half_day');
            $table->text('text');
            $table->boolean('is_approved');
            $table->boolean('is_canceled');
            $table->integer('user_id');
            $table->integer('status');
            $table->string('date');
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
        Schema::dropIfExists('leaves');
    }
}
