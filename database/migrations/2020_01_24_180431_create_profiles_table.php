<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->integer('age')->nullable();
            $table->string('gender')->nullable();
            $table->string('blood')->nullable();
            $table->integer('weight')->nullable();
            $table->string('occupation')->nullable();
            $table->text('major_diseases')->nullable();
            $table->text('alergy')->nullable();
            $table->string('village')->nullable();
            $table->string('upazilla')->nullable();
            $table->string('district')->nullable();
            $table->timestamps();

            $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
