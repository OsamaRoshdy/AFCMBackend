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
        Schema::create('main_page_blocks', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('main_page_id')->nullable()->index();
            $table->foreign('main_page_id')
                ->references('id')
                ->on('main_pages')
                ->onUpdate('CASCADE');

            $table->unsignedBigInteger('block_id')->nullable()->index();
            $table->foreign('block_id')
                ->references('id')
                ->on('blocks')
                ->onUpdate('CASCADE');

            $table->integer('sort')->default(1);

            $table->integer('type');

            $table->date('date')->nullable();

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
        Schema::dropIfExists('main_page_blocks');
    }
};
