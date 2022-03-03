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
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();

            $table->text('description_ar')->nullable();
            $table->text('description_en')->nullable();
            $table->integer('sort')->default(1);
            $table->string('image_name');
            $table->boolean('status')->default(false);
            $table->unsignedBigInteger('slider_group_id')->index();
            $table->foreign('slider_group_id')
                ->references('id')
                ->on('slider_groups')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table->timestamps();
        });
    }
//    protected $fillable = ['description_ar','description_en', 'slider_group_id', 'sort', 'image_name', 'status'];

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sliders');
    }
};
