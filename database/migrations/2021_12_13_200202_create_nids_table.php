<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nids', function (Blueprint $table) {
            $table->id();
            $table->double('nid_no');
            $table->string('Name');
            $table->string('fName');
            $table->string('mName');
            $table->double('cell');
            $table->string('email');
            $table->double('birthdate');
            $table->string('address');
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
        Schema::dropIfExists('nids');
    }
}
