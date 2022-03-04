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
//        protected $fillable = ['full_name_ar', 'full_name_en', 'title_ar', 'title_en', 'sort', 'status', 'image_name'];

        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string('full_name_ar');
            $table->string('full_name_en');
            $table->string('title_ar');
            $table->string('title_en');
            $table->integer('sort');
            $table->boolean('status')->default(1);
            $table->string('image_name');
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
        Schema::dropIfExists('staff');
    }
};
