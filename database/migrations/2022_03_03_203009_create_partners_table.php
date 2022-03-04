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
        Schema::create('partners', function (Blueprint $table) {
            $table->id();
            $table->text('name_ar');
            $table->text('name_en');
            $table->mediumText('description_ar')->nullable();
            $table->mediumText('description_en')->nullable();
            $table->boolean('status')->default(1);
            $table->integer('type');
            $table->integer('sort')->default(1);
            $table->string('image_name')->nullable();
            $table->boolean('show_in_home');
            $table->boolean('show_in_footer');
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
        Schema::dropIfExists('partners');
    }
};
