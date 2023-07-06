<?php

namespace App\Imports;

use App\Models\MedsForex;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;  

class MedsForexImport implements ToModel,WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
          public function model(array $row)
    {
         if(!empty($row)){

                $MedsForex = MedsForex::first();
                if($MedsForex){

                        $MedsForex->c_2_3_1_fx_sign_1 = $row[0];
                        $MedsForex->c_2_3_2_fx_rate_1 = $row[1];
                        $MedsForex->c_2_3_3_fx_sign_2 = $row[2];
                        $MedsForex->c_2_3_4_fx_rate_2 = $row[3];
                        $MedsForex->c_2_3_5_fx_sign_3 = $row[4];
                        $MedsForex->c_2_3_6_fx_rate_3 = $row[5];
                        $MedsForex->c_2_3_7_fx_sign_4 = $row[6];
                        $MedsForex->c_2_3_8_fx_rate_4 = $row[7];
                        $MedsForex->c_2_3_9_fx_sign_5 = $row[8];
                        $MedsForex->c_2_3_10_fx_rate_5 = $row[9];
                        $MedsForex->c_2_3_11_fx_sign_6 = $row[10];
                        $MedsForex->c_2_3_12_fx_rate_6 = $row[11];
                        $MedsForex->c_2_3_13_fx_sign_7 = $row[12];
                        $MedsForex->c_2_3_14_fx_rate_7 = $row[13];
                        $MedsForex->c_2_3_15_fx_sign_8 = $row[14];
                        $MedsForex->c_2_3_16_fx_rate_8 = $row[15];
                        $MedsForex->c_2_3_17_fx_sign_9 = $row[16];
                        $MedsForex->c_2_3_18_fx_rate_9 = $row[17];
                        $MedsForex->c_2_3_19_fx_sign_10 = $row[18];
                        $MedsForex->c_2_3_20_fx_rate_10 = $row[19];
                        $MedsForex->c_2_3_21_fx_sign_11 = $row[20];
                        $MedsForex->c_2_3_22_fx_rate_11 = $row[21];
                        $MedsForex->c_2_3_23_fx_sign_12 = $row[22];
                        $MedsForex->c_2_3_24_fx_rate_12 = $row[23];
                        $MedsForex->c_2_3_25_fx_sign_13 = $row[24];
                        $MedsForex->c_2_3_26_fx_rate_13 = $row[25];
                        $MedsForex->c_2_3_27_fx_sign_14 = $row[26];
                        $MedsForex->c_2_3_28_fx_rate_14 = $row[27];
                        $MedsForex->c_2_3_28_fx_sign_15 = $row[28];
                        $MedsForex->c_2_3_28_fx_rate_15 = $row[29];
                      
                        $MedsForex->update();
                        
                       return $MedsForex; 
                } else {

                          $MedsForex = new  MedsForex;
                          $MedsForex->c_2_3_1_fx_sign_1 = $row[0];
                        $MedsForex->c_2_3_2_fx_rate_1 = $row[1];
                        $MedsForex->c_2_3_3_fx_sign_2 = $row[2];
                        $MedsForex->c_2_3_4_fx_rate_2 = $row[3];
                        $MedsForex->c_2_3_5_fx_sign_3 = $row[4];
                        $MedsForex->c_2_3_6_fx_rate_3 = $row[5];
                        $MedsForex->c_2_3_7_fx_sign_4 = $row[6];
                        $MedsForex->c_2_3_8_fx_rate_4 = $row[7];
                        $MedsForex->c_2_3_9_fx_sign_5 = $row[8];
                        $MedsForex->c_2_3_10_fx_rate_5 = $row[9];
                        $MedsForex->c_2_3_11_fx_sign_6 = $row[10];
                        $MedsForex->c_2_3_12_fx_rate_6 = $row[11];
                        $MedsForex->c_2_3_13_fx_sign_7 = $row[12];
                        $MedsForex->c_2_3_14_fx_rate_7 = $row[13];
                        $MedsForex->c_2_3_15_fx_sign_8 = $row[14];
                        $MedsForex->c_2_3_16_fx_rate_8 = $row[15];
                        $MedsForex->c_2_3_17_fx_sign_9 = $row[16];
                        $MedsForex->c_2_3_18_fx_rate_9 = $row[17];
                        $MedsForex->c_2_3_19_fx_sign_10 = $row[18];
                        $MedsForex->c_2_3_20_fx_rate_10 = $row[19];
                        $MedsForex->c_2_3_21_fx_sign_11 = $row[20];
                        $MedsForex->c_2_3_22_fx_rate_11 = $row[21];
                        $MedsForex->c_2_3_23_fx_sign_12 = $row[22];
                        $MedsForex->c_2_3_24_fx_rate_12 = $row[23];
                        $MedsForex->c_2_3_25_fx_sign_13 = $row[24];
                        $MedsForex->c_2_3_26_fx_rate_13 = $row[25];
                        $MedsForex->c_2_3_27_fx_sign_14 = $row[26];
                        $MedsForex->c_2_3_28_fx_rate_14 = $row[27];
                        $MedsForex->c_2_3_28_fx_sign_15 = $row[28];
                        $MedsForex->c_2_3_28_fx_rate_15 = $row[29];
                      
                        $MedsForex->save();
                        
                       return $MedsForex; 
                }

        };
    }
     public function startRow(): int
    {
        return 2;
    }
}
