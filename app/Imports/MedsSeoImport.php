<?php

namespace App\Imports;

use App\Models\MedsSeo;
use Maatwebsite\Excel\Concerns\WithStartRow;  
use Maatwebsite\Excel\Concerns\ToModel;

class MedsSeoImport implements ToModel,WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
     public function model(array $row)
    {
         if(!empty($row)){

                $MedsSeo = MedsSeo::where('c_1_5_1_generic_id_no',$row[0])->first();
                if($MedsSeo){
                        $MedsSeo->c_1_5_2_meta_title = $row[1];
                        $MedsSeo->c_1_5_3_meta_description = $row[2];
                        $MedsSeo->c_1_5_4_meta_keyword = $row[3];
                        $MedsSeo->c_1_5_5_hyperlink_page_tags = $row[4];
                        $MedsSeo->c_1_5_7_language = $row[5];
                        $MedsSeo->c_1_5_8_country = $row[6];
                        $MedsSeo->c_1_5_9_distribution = $row[7];
                        $MedsSeo->c_1_5_10_author = $row[8];
                        $MedsSeo->c_1_5_11_robots = $row[9];
                        $MedsSeo->c_1_5_12_revisit_after = $row[10];
                        $MedsSeo->c_1_5_13_rating_value = $row[11];
                        $MedsSeo->c_1_5_14_rating_count = $row[12];
                        $MedsSeo->c_1_5_15_other_tags_3 = $row[13];
                        $MedsSeo->c_1_5_16_other_tags_4 = $row[14];
                        $MedsSeo->c_1_5_17_other_tags_5 = $row[15];
                        $MedsSeo->update();
                        
                       return $MedsSeo; 
                }else {
                  
                        $MedsSeo =  new MedsSeo;
                        $MedsSeo->c_1_5_1_generic_id_no = (int)$row[0];
                             $MedsSeo->c_1_5_2_meta_title = $row[1];
                        $MedsSeo->c_1_5_3_meta_description = $row[2];
                        $MedsSeo->c_1_5_4_meta_keyword = $row[3];
                        $MedsSeo->c_1_5_5_hyperlink_page_tags = $row[4];
                        $MedsSeo->c_1_5_7_language = $row[5];
                        $MedsSeo->c_1_5_8_country = $row[6];
                        $MedsSeo->c_1_5_9_distribution = $row[7];
                        $MedsSeo->c_1_5_10_author = $row[8];
                        $MedsSeo->c_1_5_11_robots = $row[9];
                        $MedsSeo->c_1_5_12_revisit_after = $row[10];
                        $MedsSeo->c_1_5_13_rating_value = $row[11];
                        $MedsSeo->c_1_5_14_rating_count = $row[12];
                        $MedsSeo->c_1_5_15_other_tags_3 = $row[13];
                        $MedsSeo->c_1_5_16_other_tags_4 = $row[14];
                        $MedsSeo->c_1_5_17_other_tags_5 = $row[15];
                        $MedsSeo->save();
                        return $MedsSeo;
                }

        };
    }
     public function startRow(): int
    {
        return 2;
    }
}
