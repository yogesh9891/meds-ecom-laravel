<?php

namespace App\Imports;

use App\Models\GeneralMedicine;
use App\Models\HomeGeneralDiseases;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;  

class GeneralMedicineImport implements ToModel,WithStartRow
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
            $GeneralMedicine = GeneralMedicine::where('general_disease_id',$HomeGeneralDiseases->id)->where('generic_med_no',$row[2])->first();
                if(!$GeneralMedicine){

                    $GeneralMedicine  = new GeneralMedicine;
                        $GeneralMedicine->general_disease_id = $HomeGeneralDiseases->id;
                        $GeneralMedicine->generic_med_no = $row[2];
                        $GeneralMedicine->save();
                       return $GeneralMedicine; 
                }

                return $GeneralMedicine;
            }

        };
    }
     public function startRow(): int
    {
        return 2;
    }
}
