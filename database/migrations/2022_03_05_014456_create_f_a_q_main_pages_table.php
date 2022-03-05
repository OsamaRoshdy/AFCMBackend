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
        Schema::create('f_a_q_main_pages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('main_page_id')->nullable()->index();
            $table->foreign('main_page_id')
                ->references('id')
                ->on('main_pages')
                ->onUpdate('CASCADE');

            $table->unsignedBigInteger('faq_id')->nullable()->index();
            $table->foreign('faq_id')
                ->references('id')
                ->on('f_a_q_s')
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
        Schema::dropIfExists('f_a_q_main_pages');
    }
};
