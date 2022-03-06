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
        Schema::create('media', function (Blueprint $table) {
            $table->id();

            $table->text('title_ar')->nullable();

            $table->text('title_en')->nullable();

            $table->integer('sort')->default(1);

            $table->integer('type');

            $table->string('image_name')->nullable();

            $table->boolean('show_in_home')->nullable();

            $table->boolean('status')->default(1);

            $table->text('url')->nullable();

            $table->unsignedBigInteger('media_group_id')->nullable()->index();
            $table->foreign('media_group_id')
                ->references('id')
                ->on('media_groups')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

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
        Schema::dropIfExists('media');
    }
};
