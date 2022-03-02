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
        Schema::create('menu_links', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('main_page_id')->index();
            $table->foreign('main_page_id')
                ->references('id')
                ->on('main_pages')
                ->onDelete('CASCADE');

            $table->string('name_ar');
            $table->string('name_en');
            $table->boolean('status')->default(0);

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
        Schema::dropIfExists('menu_links');
    }
};
