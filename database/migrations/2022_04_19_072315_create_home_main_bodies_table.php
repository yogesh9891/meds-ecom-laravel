<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeMainBodiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('3-2-main-body', function (Blueprint $table) {
            $table->id();
            $table->string('c_3_2_1_h1_title_in_green');
            $table->string('c_3_2_2_qa_h2_green_title');
            $table->string('c_3_2_3_h2_blue_line_1');
            $table->string('c_3_2_4_text_below_blue_1');
            $table->string('c_3_2_5_h2_blue_line_2');
            $table->string('c_3_2_6_text_below_blue_2');
            $table->string('c_3_2_7_h2_blue_line_3');
            $table->string('c_3_2_8_text_below_blue_3');
            $table->string('c_3_2_9_h2_blue_line_4');
            $table->string('c_3_2_10_text_below_blue_4');
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('home_main_bodies');
    }
}
