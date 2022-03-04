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
        Schema::create('category_blocks', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('category_id')->nullable()->index();
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onUpdate('CASCADE');

            $table->unsignedBigInteger('block_id')->nullable()->index();
            $table->foreign('block_id')
                ->references('id')
                ->on('blocks')
                ->onUpdate('CASCADE');

            $table->integer('sort')->default(1);

            $table->integer('type');

            $table->date('date')->nullable();

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
        Schema::dropIfExists('category_blocks');
    }
};
