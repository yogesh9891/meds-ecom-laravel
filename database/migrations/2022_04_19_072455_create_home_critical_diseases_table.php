<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeCriticalDiseasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('3-4-critical-diseases', function (Blueprint $table) {
            $table->id();
            $table->string('c_3_4_1_disease_no');
            $table->string('c_3_4_2_critical_disease');
            $table->string('c_3_4_3_image');
            $table->string('c_3_4_4_image_alt_tag');
            $table->string('c_3_4_5_disease_information');
            $table->string('c_3_4_6_generic_med_1');
            $table->string('c_3_4_7_generic_med_2');
            $table->string('c_3_4_8_generic_med_3');
            $table->string('c_3_4_9_generic_med_4');
            $table->string('c_3_4_10_generic_med_5');
            $table->string('c_3_4_11_generic_med_6');
            $table->string('c_3_4_12_generic_med_7');
            $table->string('c_3_4_13_generic_med_8');
            $table->string('c_3_4_14_generic_med_9');
            $table->string('c_3_4_15_generic_med_10');
            $table->string('c_3_4_16_generic_med_11');
            $table->string('c_3_4_17_generic_med_12');
            $table->string('c_3_4_18_generic_med_13');
            $table->string('c_3_4_19_generic_med_14');
            $table->string('c_3_4_20_generic_med_15');
            $table->string('c_3_4_21_generic_med_16');
            $table->string('c_3_4_22_generic_med_17');
            $table->string('c_3_4_23_generic_med_18');
            $table->string('c_3_4_24_generic_med_19');
            $table->string('c_3_4_25_generic_med_20');
            $table->string('c_3_4_26_generic_med_21');
            $table->string('c_3_4_27_generic_med_22');
            $table->string('c_3_4_28_generic_med_23');
            $table->string('c_3_4_29_generic_med_24');
            $table->string('c_3_4_30_generic_med_25');
            $table->string('c_3_4_31_generic_med_26');
            $table->string('c_3_4_32_generic_med_27');
            $table->string('c_3_4_33_generic_med_28');
            $table->string('c_3_4_34_generic_med_29');
            $table->string('c_3_4_35_generic_med_30');
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
        Schema::dropIfExists('home_critical_diseases');
    }
}
