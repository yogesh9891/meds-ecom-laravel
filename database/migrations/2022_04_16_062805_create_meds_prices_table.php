<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedsPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('2-2-meds-prices', function (Blueprint $table) {
            $table->id();
            $table->string('c_2_2_1_generic_id_no');
            $table->string('c_2_2_2_product_no');
            $table->string('c_2_2_3_g_sku');
            $table->string('c_2_2_4_g_available');
            $table->string('c_2_2_5_g_display');
            $table->string('c_2_2_6_g_na_message');
            $table->string('c_2_2_7_g_name_in_h3_tag');
            $table->string('c_2_2_8_g_manufactured_by');
            $table->string('c_2_2_9_g_mfr_url');
            $table->string('c_2_2_10_g_drug_for');
            $table->string('c_2_2_11_g_shipped_from');
            $table->string('c_2_2_12_g_icon_image');
            $table->string('c_2_2_13_g_icon_i_alt_tag');
            $table->string('c_2_2_14_g_full_image');
            $table->string('c_2_2_15_g_full_i_alt_tag');
            $table->string('c_2_2_16_g_pack_1_qty');
            $table->string('c_2_2_17_g_unit');
            $table->string('c_2_2_18_g_pack_1_inr_price');
            $table->string('c_2_2_19_g_pp_x_1');
            $table->string('c_2_2_20_g_pp_x_2');
            $table->string('c_2_2_21_g_pp_x_3');
            $table->string('c_2_2_22_g_disc_1');
            $table->string('c_2_2_23_g_disc_2');
            $table->string('c_2_2_24_g_disc_3');
            $table->string('c_2_2_25_b_sku');
            $table->string('c_2_2_26_b_available');
            $table->string('c_2_2_27_b_display');
            $table->string('c_2_2_28_b_na_message');
            $table->string('c_2_2_29_b_name_in_h3_tag');
            $table->string('c_2_2_30_b_manufactured_by');
            $table->string('c_2_2_31_b_mfr_url');
            $table->string('c_2_2_32_b_drug_for');
            $table->string('c_2_2_33_b_shipped_from');
            $table->string('c_2_2_34_b_icon_image');
            $table->string('c_2_2_35_b_icon_i_alt_tag');
            $table->string('c_2_2_36_b_full_image');
            $table->string('c_2_2_37_b_full_i_alt_tag');
            $table->string('c_2_2_38_b_pack_1_qty');
            $table->string('c_2_2_39_b_unit');
            $table->string('c_2_2_40_b_pack_1_inr_price');
            $table->string('c_2_2_41_b_pp_x_1');
            $table->string('c_2_2_42_b_pp_x_2');
            $table->string('c_2_2_43_b_pp_x_3');
            $table->string('c_2_2_44_b_disc_1');
            $table->string('c_2_2_45_b_disc_2');
            $table->string('c_2_2_46_b_disc_3');
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
        Schema::dropIfExists('meds_prices');
    }
}
