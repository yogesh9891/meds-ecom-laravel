<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedsVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meds_videos', function (Blueprint $table) {
            $table->id();
            $table->string('c_1_4_1_generic_id_no');
            $table->string('c_1_4_2_video_no');
            $table->string('c_1_4_3_video_title');
            $table->string('c_1_4_4_image');
            $table->string('c_1_4_5_image_alt_tag');
            $table->string('c_1_4_6_video_file');
            $table->string('c_1_4_7_video_url');
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
        Schema::dropIfExists('meds_videos');
    }
}
