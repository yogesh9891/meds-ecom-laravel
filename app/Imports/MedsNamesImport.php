<?php

namespace App\Imports;

use App\Models\MedsInfo;
use App\Models\MedsKeyword;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;    

class MedsNamesImport implements ToModel,WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {   
        if(!empty($row)){

                $MedsInfo = MedsInfo::where('c_1_1_1_generic_id_no',$row[0])->first();
                if($MedsInfo){
                        $MedsInfo->c_1_1_2_main_generic_name = $row[1];
                        $MedsInfo->c_1_1_3_other_names = $row[2];
                        $MedsInfo->c_1_1_4_frontend_url = $row[3];
                        $MedsInfo->c_1_1_5_browsing_path_name = $row[4];
                        $MedsInfo->c_1_1_6_h1_title_in_blue = $row[5];
                        $MedsInfo->c_1_1_7_name_in_home_diseases = $row[6];
                        $MedsInfo->c_1_1_8_drug_info_title = $row[7];
                        $MedsInfo->c_1_1_9_generic_intro_details = $row[8];
                        $MedsInfo->c_1_1_11_di_source_name = $row[9];
                        $MedsInfo->c_1_1_12_di_source_url = $row[10];
                          $MedsInfo->update();
                       return $MedsInfo; 
                }else {
                    $MedsInfo =  new MedsInfo;
                          $MedsInfo->c_1_1_1_generic_id_no = $row[0];
                          $MedsInfo->c_1_1_2_main_generic_name = $row[1];
                        $MedsInfo->c_1_1_3_other_names = $row[2];
                        $MedsInfo->c_1_1_4_frontend_url = $row[3];
                        $MedsInfo->c_1_1_5_browsing_path_name = $row[4];
                        $MedsInfo->c_1_1_6_h1_title_in_blue = $row[5];
                        $MedsInfo->c_1_1_7_name_in_home_diseases = $row[6];
                        $MedsInfo->c_1_1_8_drug_info_title = $row[7];
                        $MedsInfo->c_1_1_9_generic_intro_details = $row[8];
                        $MedsInfo->c_1_1_11_di_source_name = $row[9];
                        $MedsInfo->c_1_1_12_di_source_url = $row[10];

                        $MedsInfo->save();
                                  $other_names = explode(',',$MedsInfo->c_1_1_3_other_names);
                         foreach ($other_names as $key => $medcine) {
                            $meds_keyword = new MedsKeyword;
                            $meds_keyword->generic_id_no = $data->c_1_1_1_generic_id_no;
                            $meds_keyword->frontend_url = $data->c_1_1_4_frontend_url;
                            $meds_keyword->generic_name = $data->c_1_1_2_main_generic_name;
                            $meds_keyword->other_names = $medcine;
                            $meds_keyword->save();
                        }
                        return $MedsInfo;
                }

        }
    }


     public function startRow(): int
    {
        return 2;
    }
}
