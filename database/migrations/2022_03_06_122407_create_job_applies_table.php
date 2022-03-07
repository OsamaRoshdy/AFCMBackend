<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_applies', function (Blueprint $table) {
            $table->id();

            $table->string('fullname')->nullable();
            $table->string('name')->nullable();
            $table->string('dateOfBirth')->nullable();
            $table->string('nationality')->nullable();
            $table->string('nationalID')->nullable();
            $table->string('passport')->nullable();
            $table->string('residence')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('collegeAndUniversity')->nullable();
            $table->string('graduationEstimate')->nullable();
            $table->string('estimateOfMajor')->nullable();
            $table->string('dateOfBachelor')->nullable();
            $table->string('otherQualifications')->nullable();
            $table->string('degreeSpecialization')->nullable();

            $table->unsignedBigInteger('block_id')->nullable()->index();
            $table->foreign('block_id')
                ->references('id')
                ->on('blocks')
                ->onUpdate('CASCADE');

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
        Schema::dropIfExists('job_applies');
    }
};
