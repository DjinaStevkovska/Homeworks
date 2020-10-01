<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventAtendeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_atendees', function (Blueprint $table) {
            $table->primary(['event_id', 'atendee_id']);
            $table->unsignedBigInteger('event_id');
            $table->unsignedBigInteger('atendee_id');
            $table->timestamps();

            $table->foreign('event_id')
                ->references('id')
                ->on('events');

            $table->foreign('atendee_id')
                ->references('id')
                ->on('atendees');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_atendees');
    }
}
