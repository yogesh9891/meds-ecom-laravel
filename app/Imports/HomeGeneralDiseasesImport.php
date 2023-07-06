<?php

namespace App\Imports;

use App\Models\HomeGeneralDiseases;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;  

class HomeGeneralDiseasesImport implements ToModel,WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
      public function model(array $row)
    {
         if(!empty($row)){

                $HomeGeneralDiseases = HomeGeneralDiseases::where('c_3_3_1_disease_no',$row[0])->where('c_3_3_2_general_disease',$row[1])->first();
                if($HomeGeneralDiseases){
                        $HomeGeneralDiseases->c_3_3_2_general_disease = $row[1];
                        $HomeGeneralDiseases->c_3_3_3_image = $row[2];
                        $HomeGeneralDiseases->c_3_3_4_image_alt_tag  = $row[3];
                        $HomeGeneralDiseases->si_source_url = $row[4];
                        $HomeGeneralDiseases->c_3_3_5_disease_information = $row[5];
                        $HomeGeneralDiseases->update();
                        
                       return $HomeGeneralDiseases; 
                }else {
                  
                        $HomeGeneralDiseases =  new HomeGeneralDiseases;
                           $HomeGeneralDiseases->c_3_3_1_disease_no = $row[0];
                           $HomeGeneralDiseases->c_3_3_2_general_disease = $row[1];
                        $HomeGeneralDiseases->c_3_3_3_image = $row[2];
                        $HomeGeneralDiseases->c_3_3_4_image_alt_tag  = $row[3];
                        $HomeGeneralDiseases->si_source_url = $row[4];
                        $HomeGeneralDiseases->c_3_3_5_disease_information = $row[5];
                        $HomeGeneralDiseases->save();
                        return $HomeGeneralDiseases;
                }

        };
    }
     public function startRow(): int
    {
        return 2;
    }
}
