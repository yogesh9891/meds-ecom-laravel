<?php

namespace App\Exports;

use App\Models\MedsPrice;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class MedsPriceExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
         public function collection()
    {
        return MedsPrice::select(
		'c_2_2_1_generic_id_no',
		'c_2_2_2_product_no',
		'c_2_2_3_g_sku'	,
		'c_2_2_4_g_available'	,
		'c_2_2_5_g_display'	,
		'c_2_2_6_g_na_message'	,
		'c_2_2_7_g_name_in_h3_tag'	,
		'c_2_2_8_g_manufactured_by'	,
		'c_2_2_9_g_mfr_url'	,
		'c_2_2_10_g_drug_for'	,
		'c_2_2_11_g_shipped_from'	,
		'c_2_2_12_g_icon_image'	,
		'c_2_2_13_g_icon_i_alt_tag',
		'generic_med_image'	,
		'generic_med_image_alt_tag'	,
		'c_2_2_14_g_full_image'	,
		'c_2_2_15_g_full_i_alt_tag'	,
		'c_2_2_16_g_pack_1_qty'	,
		'c_2_2_17_g_unit'	,
		'c_2_2_18_g_pack_1_inr_price'	,
		'c_2_2_19_g_pp_x_1'	,
		'c_2_2_20_g_pp_x_2'	,
		'c_2_2_21_g_pp_x_3'	,
		'c_2_2_22_g_disc_1'	,
		'c_2_2_23_g_disc_2',
		'c_2_2_24_g_disc_3'	,
		'c_2_2_25_b_sku'	,
		'c_2_2_26_b_available'	,
		'c_2_2_27_b_display'	,
		'c_2_2_28_b_na_message'	,
		'c_2_2_29_b_name_in_h3_tag'	,
		'c_2_2_30_b_manufactured_by'	,
		'c_2_2_31_b_mfr_url'	,
		'c_2_2_32_b_drug_for'	,
		'c_2_2_33_b_shipped_from'	,
		'c_2_2_34_b_icon_image'	,
		'c_2_2_35_b_icon_i_alt_tag',
		'branded_med_image',
		'branded_icon_alt_tag'	,
		'c_2_2_36_b_full_image'	,
		'c_2_2_37_b_full_i_alt_tag'	,
		'c_2_2_38_b_pack_1_qty'	,
		'c_2_2_39_b_unit'	,
		'c_2_2_40_b_pack_1_inr_price'	,
		'c_2_2_41_b_pp_x_1'	,
		'c_2_2_42_b_pp_x_2'	,
		'c_2_2_43_b_pp_x_3'	,
		'c_2_2_44_b_disc_1'	,
		'c_2_2_45_b_disc_2',
		'c_2_2_46_b_disc_3')->orderBy('c_2_2_1_generic_id_no')->orderBy('c_2_2_2_product_no')->get();
    }

         public function headings(): array
    {
        return [
			'Generic_ID_No',
			'Product_No',
			'G_SKU',
			'G_Available',
			'G_Display',
			'G_NA_Message',
			'G_Name_in_H3_Tag',
			'G_Manufactured_by',
			'G_Mfr_URL',
			'G_Drug_for',
			'G_Shipped_from',
			'G_Icon_Image',
			'G_Icon_I_Alt_tag',
			'G_Med_Image',
			'G_Med_I_Alt_tag',
			'G_Full_Image',
			'G_Full_I_Alt_tag',
			'G_Pack_1_Qty',
			'G_Unit',
			'G_Pack_1_INR_Price',
			'G_PP_X_1',
			'G_PP_X_2',
			'G_PP_X_3',
			'G_Disc_1',
			'G_Disc_2',
			'G_Disc_3',
			'B_SKU',
			'B_A,vailable',
			'B_Display',
			'B_NA_Message',
			'B_Name_in_H3_Tag',
			'B_Manufactured_by',
			'B_Mfr_URL',
			'B_Drug_for',
			'B_Shipped_from',
			'B_Icon_Image',
			'B_Icon_I_Alt_tag',
			'B_Med_Image',
			'B_Med_I_Alt_tag',
			'B_Full_Image',
			'B_Full_I_Alt_tag',
			'B_Pack_1_Qty',
			'B_Unit',
			'B_Pack_1_INR_Price',
			'B_PP_X_1',
			'B_PP_X_2',
			'B_PP_X_3',
			'B_Disc_1',
			'B_Disc_2',
			'B_Disc_3'
			];

}

}
