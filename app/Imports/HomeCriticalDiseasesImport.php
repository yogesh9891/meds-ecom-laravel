<?php

namespace App\Imports;

use App\Models\HomeCriticalDiseases;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;  

class HomeCriticalDiseasesImport implements ToModel,WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
         public function model(array $row)
    {
         if(!empty($row)){

                $HomeCriticalDiseases = HomeCriticalDiseases::where('c_3_4_1_disease_no',$row[0])->where('c_3_4_2_critical_disease',$row[1])->first();
                if($HomeCriticalDiseases){
                            $HomeCriticalDiseases->c_3_4_2_critical_disease = $row[1];
                        $HomeCriticalDiseases->c_3_4_3_image  = $row[2];
                        $HomeCriticalDiseases->c_3_4_4_image_alt_tag  = $row[3];
                        $HomeCriticalDiseases->si_source_url = $row[4];
                        $HomeCriticalDiseases->c_3_4_5_disease_information = $row[5];
                        $HomeCriticalDiseases->update();
                        
                       return $HomeCriticalDiseases; 
                }else {
                  
                        $HomeCriticalDiseases =  new HomeCriticalDiseases;
                           $HomeCriticalDiseases->c_3_4_1_disease_no = $row[0];
                           $HomeCriticalDiseases->c_3_4_2_critical_disease = $row[1];
                        $HomeCriticalDiseases->c_3_4_3_image  = $row[2];
                        $HomeCriticalDiseases->c_3_4_4_image_alt_tag  = $row[3];
                        $HomeCriticalDiseases->si_source_url = $row[4];
                        $HomeCriticalDiseases->c_3_4_5_disease_information = $row[5];
                        $HomeCriticalDiseases->save();
                        return $HomeCriticalDiseases;
                }

        };
    }
     public function startRow(): int
    {
        return 2;
    }
}
