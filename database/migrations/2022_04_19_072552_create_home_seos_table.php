<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeSeosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('3-6-home-seo', function (Blueprint $table) {
            $table->id();
            $table->string('c_3_6_1_frontend_url');
            $table->string('c_3_6_2_browsing_path_name');
            $table->string('c_3_6_3_meta_title');
            $table->string('c_3_6_4_meta_description');
            $table->string('c_3_6_5_meta_keyword');
            $table->string('c_3_6_6_hyperlink_page_tags');
            $table->string('c_3_6_7_canonical');
            $table->string('c_3_6_8_language');
            $table->string('c_3_6_9_country');
            $table->string('c_3_6_10_distribution');
            $table->string('c_3_6_11_author');
            $table->string('c_3_6_12_robots');
            $table->string('c_3_6_13_revisit_after');
            $table->string('c_3_6_14_rating_value');
            $table->string('c_3_6_15_rating_count');
            $table->string('c_3_6_16_other_tags_3');
            $table->string('c_3_6_17_other_tags_4');
            $table->string('c_3_6_18_other_tags_5');
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
        Schema::dropIfExists('home_seos');
    }
}
