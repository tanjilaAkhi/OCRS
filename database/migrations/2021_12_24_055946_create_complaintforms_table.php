<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplaintformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complaintforms', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('time');
            $table->string('cname');
            $table->string('c_address');
            $table->integer('cell');
            $table->string('email');
            $table->string('casetype');
            $table->string('details');
            $table->string('dname');
            $table->string('address');
            $table->string('image')->nullable();
            $table->string('policestation');
            $table->string('issued_at');
            $table->string('officername');
            $table->string('officeremail');
            $table->string('officerphone');
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
        Schema::dropIfExists('complaintforms');
    }
}
