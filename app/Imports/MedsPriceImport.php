<?php

namespace App\Imports;

use App\Models\MedsPrice;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;  

class MedsPriceImport implements ToModel,WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
     public function model(array $row)
    {
         if(!empty($row)){

                $MedsPrice = MedsPrice::where('c_2_2_1_generic_id_no',$row[0])->where('c_2_2_2_product_no',$row[1])->first();
                if($MedsPrice){
        $MedsPrice->c_2_2_3_g_sku = $row[2];
        $MedsPrice->c_2_2_4_g_available = $row[3] ??'NA';
        $MedsPrice->c_2_2_5_g_display = $row[4] ?? 'H';
        $MedsPrice->c_2_2_6_g_na_message = $row[5];
        $MedsPrice->c_2_2_7_g_name_in_h3_tag = $row[6];
        $MedsPrice->c_2_2_8_g_manufactured_by = $row[7];  
        $MedsPrice->c_2_2_9_g_mfr_url = $row[8];
        $MedsPrice->c_2_2_10_g_drug_for = $row[9];
        $MedsPrice->c_2_2_11_g_shipped_from = $row[10];
           $MedsPrice->c_2_2_12_g_icon_image =  $row[11];
        $MedsPrice->c_2_2_13_g_icon_i_alt_tag = $row[12];
           $MedsPrice->generic_med_image =  $row[13];
        $MedsPrice->generic_med_image_alt_tag =$row[14];
           $MedsPrice->c_2_2_14_g_full_image =  $row[15];
        $MedsPrice->c_2_2_15_g_full_i_alt_tag = $row[16];
        $MedsPrice->c_2_2_16_g_pack_1_qty =$row[17];
        $MedsPrice->c_2_2_17_g_unit = $row[18];
        $MedsPrice->c_2_2_18_g_pack_1_inr_price = $row[19];
        $MedsPrice->c_2_2_19_g_pp_x_1 = $row[20];
        $MedsPrice->c_2_2_20_g_pp_x_2 = $row[21];
        $MedsPrice->c_2_2_21_g_pp_x_3 = $row[22];
        $MedsPrice->c_2_2_22_g_disc_1 = $row[23];
        $MedsPrice->c_2_2_23_g_disc_2 = $row[24];
        $MedsPrice->c_2_2_24_g_disc_3 = $row[25];
        $MedsPrice->c_2_2_25_b_sku = $row[26];
        $MedsPrice->c_2_2_26_b_available =$row[27]??'NA';
        $MedsPrice->c_2_2_27_b_display = $row[28] ?? 'H';
        $MedsPrice->c_2_2_28_b_na_message = $row[29];
        $MedsPrice->c_2_2_29_b_name_in_h3_tag =$row[30];
        $MedsPrice->c_2_2_30_b_manufactured_by = $row[31];
        $MedsPrice->c_2_2_31_b_mfr_url =$row[32];
        $MedsPrice->c_2_2_32_b_drug_for = $row[33];
        $MedsPrice->c_2_2_33_b_shipped_from = $row[34];
           $MedsPrice->c_2_2_34_b_icon_image =  $row[35];
        $MedsPrice->c_2_2_35_b_icon_i_alt_tag = $row[36];
        $MedsPrice->branded_med_image = $row[37];
            $MedsPrice->branded_icon_alt_tag = $row[38];
           $MedsPrice->c_2_2_36_b_full_image =  $row[39];
        $MedsPrice->c_2_2_37_b_full_i_alt_tag = $row[40];
            $MedsPrice->c_2_2_38_b_pack_1_qty = $row[41];
            $MedsPrice->c_2_2_39_b_unit = $row[42];
            $MedsPrice->c_2_2_40_b_pack_1_inr_price = $row[43];
            $MedsPrice->c_2_2_41_b_pp_x_1 = $row[44];
            $MedsPrice->c_2_2_42_b_pp_x_2 = $row[45];
            $MedsPrice->c_2_2_43_b_pp_x_3 = $row[46];
            $MedsPrice->c_2_2_44_b_disc_1 = $row[47];
            $MedsPrice->c_2_2_45_b_disc_2 = $row[48];
            $MedsPrice->c_2_2_46_b_disc_3 =$row[49];
                           
                        $MedsPrice->update();
                        
                       return $MedsPrice; 
                }else {
                  
                        $MedsPrice =  new MedsPrice;
                          $MedsPrice->c_2_2_1_generic_id_no = $row[0];
                          $MedsPrice->c_2_2_2_product_no = $row[1];
                          $MedsPrice->c_2_2_3_g_sku = $row[2];
        $MedsPrice->c_2_2_4_g_available = $row[3]??'NA';
        $MedsPrice->c_2_2_5_g_display = $row[4]??'H';
        $MedsPrice->c_2_2_6_g_na_message = $row[5];
        $MedsPrice->c_2_2_7_g_name_in_h3_tag = $row[6];
        $MedsPrice->c_2_2_8_g_manufactured_by = $row[7];  
        $MedsPrice->c_2_2_9_g_mfr_url = $row[8];
        $MedsPrice->c_2_2_10_g_drug_for = $row[9];
        $MedsPrice->c_2_2_11_g_shipped_from = $row[10];
           $MedsPrice->c_2_2_12_g_icon_image =  $row[11];
        $MedsPrice->c_2_2_13_g_icon_i_alt_tag = $row[12];
           $MedsPrice->generic_med_image =  $row[13];
        $MedsPrice->generic_med_image_alt_tag =$row[14];
           $MedsPrice->c_2_2_14_g_full_image =  $row[15];
        $MedsPrice->c_2_2_15_g_full_i_alt_tag = $row[16];
        $MedsPrice->c_2_2_16_g_pack_1_qty =$row[17];
        $MedsPrice->c_2_2_17_g_unit = $row[18];
        $MedsPrice->c_2_2_18_g_pack_1_inr_price = $row[19];
        $MedsPrice->c_2_2_19_g_pp_x_1 = $row[20];
        $MedsPrice->c_2_2_20_g_pp_x_2 = $row[21];
        $MedsPrice->c_2_2_21_g_pp_x_3 = $row[22];
        $MedsPrice->c_2_2_22_g_disc_1 = $row[23];
        $MedsPrice->c_2_2_23_g_disc_2 = $row[24];
        $MedsPrice->c_2_2_24_g_disc_3 = $row[25];
        $MedsPrice->c_2_2_25_b_sku = $row[26];
        $MedsPrice->c_2_2_26_b_available =$row[27]??'NA';
        $MedsPrice->c_2_2_27_b_display = $row[28]??'H';
        $MedsPrice->c_2_2_28_b_na_message = $row[29];
        $MedsPrice->c_2_2_29_b_name_in_h3_tag =$row[30];
        $MedsPrice->c_2_2_30_b_manufactured_by = $row[31];
        $MedsPrice->c_2_2_31_b_mfr_url =$row[32];
        $MedsPrice->c_2_2_32_b_drug_for = $row[33];
        $MedsPrice->c_2_2_33_b_shipped_from = $row[34];
           $MedsPrice->c_2_2_34_b_icon_image =  $row[35];
        $MedsPrice->c_2_2_35_b_icon_i_alt_tag = $row[36];
        $MedsPrice->branded_med_image = $row[37];
            $MedsPrice->branded_icon_alt_tag = $row[38];
           $MedsPrice->c_2_2_36_b_full_image =  $row[39];
        $MedsPrice->c_2_2_37_b_full_i_alt_tag = $row[40];
            $MedsPrice->c_2_2_38_b_pack_1_qty = $row[41];
            $MedsPrice->c_2_2_39_b_unit = $row[42];
            $MedsPrice->c_2_2_40_b_pack_1_inr_price = $row[43];
            $MedsPrice->c_2_2_41_b_pp_x_1 = $row[44];
            $MedsPrice->c_2_2_42_b_pp_x_2 = $row[45];
            $MedsPrice->c_2_2_43_b_pp_x_3 = $row[46];
            $MedsPrice->c_2_2_44_b_disc_1 = $row[47];
            $MedsPrice->c_2_2_45_b_disc_2 = $row[48];
            $MedsPrice->c_2_2_46_b_disc_3 =$row[49];
                        $MedsPrice->save();
                        return $MedsPrice;
                }

        };
    }
     public function startRow(): int
    {
        return 2;
    }
}
