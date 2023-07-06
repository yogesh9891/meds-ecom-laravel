<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedsSeosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meds_seos', function (Blueprint $table) {
            $table->id();
            $table->string('c_1_5_1_generic_id_no');
            $table->string('c_1_5_2_meta_title');
            $table->string('c_1_5_3_meta_description');
            $table->string('c_1_5_4_meta_keyword');
            $table->string('c_1_5_5_hyperlink_page_tags');
            $table->string('c_1_5_6_canonical');
            $table->string('c_1_5_7_language');
            $table->string('c_1_5_8_country');
            $table->string('c_1_5_9_distribution');
            $table->string('c_1_5_10_author');
            $table->string('c_1_5_11_robots');
            $table->string('c_1_5_12_revisit_after');
            $table->string('c_1_5_13_rating_value');
            $table->string('c_1_5_14_rating_count');
            $table->string('c_1_5_15_other_tags_3');
            $table->string('c_1_5_16_other_tags_4');
            $table->string('c_1_5_17_other_tags_5');
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
        Schema::dropIfExists('meds_seos');
    }
}
