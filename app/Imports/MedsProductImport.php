<?php

namespace App\Imports;

use App\Models\MedsProduct;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;  

class MedsProductImport implements ToModel,WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
         if(!empty($row)){

                $MedsProduct = MedsProduct::where('c_2_1_1_generic_id_no',$row[0])->where('c_2_1_2_product_no',$row[1])->first();
                if($MedsProduct){
                        $MedsProduct->c_2_1_2_product_no = $row[1];
                        $MedsProduct->c_2_1_3_short_strength_id = $row[2];
                        $MedsProduct->c_2_1_4_display_at  = $row[3];
                        $MedsProduct->c_2_1_5_product_name_h2 = $row[4];
                        $MedsProduct->c_2_1_6_med_use = $row[5];
                       
                        $MedsProduct->update();
                        
                       return $MedsProduct; 
                }else {
                  
                        $MedsProduct =  new MedsProduct;
                        $MedsProduct->c_2_1_1_generic_id_no = (int)$row[0];
                          $MedsProduct->c_2_1_2_product_no = $row[1];
                        $MedsProduct->c_2_1_3_short_strength_id = $row[2];
                        $MedsProduct->c_2_1_4_display_at  = $row[3];
                        $MedsProduct->c_2_1_5_product_name_h2 = $row[4];
                        $MedsProduct->c_2_1_6_med_use = $row[5];
                        $MedsProduct->save();
                        return $MedsProduct;
                }

        };
    }
     public function startRow(): int
    {
        return 2;
    }
}
