<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedsForexesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('2-3-meds-forexes', function (Blueprint $table) {
            $table->id();
            $table->string('c_2_3_1_fx_sign_1');
            $table->string('c_2_3_2_fx_rate_1');
            $table->string('c_2_3_3_fx_sign_2');
            $table->string('c_2_3_4_fx_rate_2');
            $table->string('c_2_3_5_fx_sign_3');
            $table->string('c_2_3_6_fx_rate_3');
            $table->string('c_2_3_7_fx_sign_4');
            $table->string('c_2_3_8_fx_rate_4');
            $table->string('c_2_3_9_fx_sign_5');
            $table->string('c_2_3_10_fx_rate_5');
            $table->string('c_2_3_11_fx_sign_6');
            $table->string('c_2_3_12_fx_rate_6');
            $table->string('c_2_3_13_fx_sign_7');
            $table->string('c_2_3_14_fx_rate_7');
            $table->string('c_2_3_15_fx_sign_8');
            $table->string('c_2_3_16_fx_rate_8');
            $table->string('c_2_3_17_fx_sign_9');
            $table->string('c_2_3_18_fx_rate_9');
            $table->string('c_2_3_19_fx_sign_10');
            $table->string('c_2_3_20_fx_rate_10');
            $table->string('c_2_3_21_fx_sign_11');
            $table->string('c_2_3_22_fx_rate_11');
            $table->string('c_2_3_23_fx_sign_12');
            $table->string('c_2_3_24_fx_rate_12');
            $table->string('c_2_3_25_fx_sign_13');
            $table->string('c_2_3_26_fx_rate_13');
            $table->string('c_2_3_27_fx_sign_14');
            $table->string('c_2_3_28_fx_rate_14');
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
        Schema::dropIfExists('meds_forexes');
    }
}
