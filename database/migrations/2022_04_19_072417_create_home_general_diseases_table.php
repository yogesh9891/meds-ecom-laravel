<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeGeneralDiseasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('3-3-general-diseases', function (Blueprint $table) {
            $table->id();
            $table->string('c_3_3_1_disease_no');
            $table->string('c_3_3_2_general_disease');
            $table->string('c_3_3_3_image');
            $table->string('c_3_3_4_image_alt_tag');
            $table->string('c_3_3_5_disease_information');
            $table->string('c_3_3_6_generic_med_1');
            $table->string('c_3_3_7_generic_med_2');
            $table->string('c_3_3_8_generic_med_3');
            $table->string('c_3_3_9_generic_med_4');
            $table->string('c_3_3_10_generic_med_5');
            $table->string('c_3_3_11_generic_med_6');
            $table->string('c_3_3_12_generic_med_7');
            $table->string('c_3_3_13_generic_med_8');
            $table->string('c_3_3_14_generic_med_9');
            $table->string('c_3_3_15_generic_med_10');
            $table->string('c_3_3_16_generic_med_11');
            $table->string('c_3_3_17_generic_med_12');
            $table->string('c_3_3_18_generic_med_13');
            $table->string('c_3_3_19_generic_med_14');
            $table->string('c_3_3_20_generic_med_15');
            $table->string('c_3_3_21_generic_med_16');
            $table->string('c_3_3_22_generic_med_17');
            $table->string('c_3_3_23_generic_med_18');
            $table->string('c_3_3_24_generic_med_19');
            $table->string('c_3_3_25_generic_med_20');
            $table->string('c_3_3_26_generic_med_21');
            $table->string('c_3_3_27_generic_med_22');
            $table->string('c_3_3_28_generic_med_23');
            $table->string('c_3_3_29_generic_med_24');
            $table->string('c_3_3_30_generic_med_25');
            $table->string('c_3_3_31_generic_med_26');
            $table->string('c_3_3_32_generic_med_27');
            $table->string('c_3_3_33_generic_med_28');
            $table->string('c_3_3_34_generic_med_29');
            $table->string('c_3_3_35_generic_med_30');
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
        Schema::dropIfExists('home_general_diseases');
    }
}
