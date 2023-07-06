<?php

namespace App\Imports;

use App\Models\CountryFreight;
use Maatwebsite\Excel\Concerns\WithStartRow;  
use Maatwebsite\Excel\Concerns\ToModel;

class CountryFreightImport implements ToModel,WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
         public function model(array $row)
    {
         if(!empty($row)){

                $CountryFreight = CountryFreight::where('c_4_1_2_country_name',$row[1])->where('c_4_1_3_country_isd_code',$row[2])->first();
                if($CountryFreight){

                        $CountryFreight->c_4_1_1_s_no = $row[0];
                        $CountryFreight->c_4_1_4_billing_address = $row[3];
                        $CountryFreight->c_4_1_5_delivery_address = $row[4];
                        $CountryFreight->c_4_1_6_priority_display = $row[5];
                        $CountryFreight->c_4_1_7_customs_clearance = $row[6];
                        $CountryFreight->c_4_1_8_patient_use = $row[7];
                        $CountryFreight->c_4_1_9_study_use = $row[8];
                        $CountryFreight->c_4_1_10_dif_freight_chg_inr = $row[9];
                        $CountryFreight->c_4_1_11_delivery_start = $row[10];
                        $CountryFreight->c_4_1_12_delivery_end = $row[11];
                        $CountryFreight->c_4_1_13_single_freight = $row[12];
                        $CountryFreight->c_4_1_14_show_single_freight = $row[13];
                        $CountryFreight->update();
                        
                       return $CountryFreight; 
                }else {
                        if(!empty($row[1])){

                        $CountryFreight =  new CountryFreight;
                        $CountryFreight->c_4_1_1_s_no = $row[0];
                        $CountryFreight->c_4_1_2_country_name = $row[1];
                        $CountryFreight->c_4_1_3_country_isd_code  = $row[2];
                        $CountryFreight->c_4_1_4_billing_address = $row[3];
                        $CountryFreight->c_4_1_5_delivery_address = $row[4];
                        $CountryFreight->c_4_1_6_priority_display = $row[5];
                        $CountryFreight->c_4_1_7_customs_clearance = $row[6];
                        $CountryFreight->c_4_1_8_patient_use = $row[7];
                        $CountryFreight->c_4_1_9_study_use = $row[8];
                        $CountryFreight->c_4_1_10_dif_freight_chg_inr = $row[9];
                        $CountryFreight->c_4_1_11_delivery_start = $row[10];
                        $CountryFreight->c_4_1_12_delivery_end = $row[11];
                        $CountryFreight->c_4_1_13_single_freight = $row[12];
                        $CountryFreight->c_4_1_14_show_single_freight = $row[13];
                        $CountryFreight->save();
                        }
                        return $CountryFreight;
                }

        };
    }
     public function startRow(): int
    {
        return 2;
    }
}
