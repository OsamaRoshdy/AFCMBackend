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
        Schema::create('links', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('menu_link_id')->index();
            $table->foreign('menu_link_id')
                ->references('id')
                ->on('menu_links')
                ->onDelete('CASCADE');

            $table->unsignedBigInteger('block_id')->nullable()->index();
            $table->foreign('block_id')
                ->references('id')
                ->on('blocks')
                ->onDelete('CASCADE');

            $table->unsignedBigInteger('link_id')->nullable()->index();
            $table->foreign('link_id')
                ->references('id')
                ->on('links')
                ->onDelete('CASCADE');

            $table->string('name_ar');
            $table->string('name_en');
            $table->string('route')->default('#');
            $table->integer('sort')->default(1);
            $table->boolean('status')->default(0);
            $table->integer('type');

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
        Schema::dropIfExists('links');
    }
};
