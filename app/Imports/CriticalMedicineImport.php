<?php

namespace App\Imports;

use App\Models\CriticalMedicine;
use App\Models\HomeCriticalDiseases;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;  
class CriticalMedicineImport implements ToModel,WithStartRow
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
            $CriticalMedicine = CriticalMedicine::where('critical_disease_id',$HomeCriticalDiseases->id)->where('generic_med_no',$row[2])->first();
                if(!$CriticalMedicine){

                    $CriticalMedicine  = new CriticalMedicine;
                        $CriticalMedicine->critical_disease_id = $HomeCriticalDiseases->id;
                        $CriticalMedicine->generic_med_no = $row[2];
                        $CriticalMedicine->save();
                       return $CriticalMedicine; 
                }

                return $CriticalMedicine;
            }

        };
    }
     public function startRow(): int
    {
        return 2;
    }
}
