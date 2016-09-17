<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('account_id')->unsigned();
            $table->integer('contact_id')->unsigned();
            $table->integer('type_id')->unsigned();
            $table->integer('priority_id')->unsigned();
            $table->integer('status_id')->unsigned();
            $table->string('subject');
            $table->text('discription');
            $table->foreign('account_id')->references('id')->on('accounts');
            $table->foreign('contact_id')->references('id')->on('contacts');
            $table->foreign('type_id')->references('id')->on('ticket_types');
            $table->foreign('priority_id')->references('id')->on('ticket_priorities');
            $table->foreign('status_id')->references('id')->on('ticket_statuses');
            $table->softDeletes();
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
        Schema::dropIfExists('tickets');
    }
}
