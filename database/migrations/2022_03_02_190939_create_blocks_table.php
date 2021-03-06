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
        Schema::create('blocks', function (Blueprint $table) {
            $table->id();

            $table->text('slug_en')->nullable();

            $table->text('slug_ar')->nullable();

            $table->text('title_ar')->nullable();

            $table->text('title_en')->nullable();

            $table->mediumText('description_en')->nullable();

            $table->mediumText('description_ar')->nullable();

            $table->longText('content_ar')->nullable();

            $table->longText('content_en')->nullable();

            $table->string('image_name')->nullable();

            $table->boolean('status')->default(0);

            $table->date('date')->nullable();

            $table->integer('type');

            $table->integer('sort')->default(1);

            $table->string('button_en')->nullable();

            $table->string('button_ar')->nullable();

            $table->string('unique_name')->nullable()->unique();

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
        Schema::dropIfExists('blocks');
    }
};
