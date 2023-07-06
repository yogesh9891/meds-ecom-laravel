<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountryFreightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('4-country-freight', function (Blueprint $table) {
            $table->id();
            $table->string('c_4_1_1_s_no');
            $table->string('c_4_1_2_country_name');
            $table->string('c_4_1_3_country_isd_code');
            $table->string('c_4_1_4_billing_address');
            $table->string('c_4_1_5_delivery_address');
            $table->string('c_4_1_6_priority_display');
            $table->string('c_4_1_7_customs_clearance');
            $table->string('c_4_1_8_patient_use');
            $table->string('c_4_1_9_study_use');
            $table->string('c_4_1_10_dif_freight_chg_inr');
            $table->string('c_4_1_11_delivery_start');
            $table->string('c_4_1_12_delivery_end');
            $table->string('c_4_1_13_single_freight');
            $table->string('c_4_1_14_show_single_freight');
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
        Schema::dropIfExists('country_freights');
    }
}
