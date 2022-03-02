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

            $table->string('slug_en')->nullable();

            $table->string('slug_ar')->nullable();

            $table->string('title_ar')->nullable();

            $table->string('title_en')->nullable();

            $table->mediumText('description_en')->nullable();

            $table->mediumText('description_ar')->nullable();

            $table->longText('content_ar')->nullable();

            $table->longText('content_en')->nullable();

            $table->string('image_name')->nullable();

            $table->boolean('status')->default(0);

            $table->date('date')->nullable();

            $table->integer('type');

            $table->unsignedBigInteger('category_id')->nullable()->index();

            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

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
