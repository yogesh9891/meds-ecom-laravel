<?php

namespace App\Exports;

use App\Models\GeneralMedicine;
use App\Models\HomeGeneralDiseases;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
class GeneralMedicineExport implements FromCollection,WithMapping,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
      public function collection()
    {

       return $GeneralMedicine =  GeneralMedicine::get();
    }


    public function map($GeneralMedicine) : array {

            $HomeGeneralDiseases = HomeGeneralDiseases::find($GeneralMedicine->general_disease_id);
            if($HomeGeneralDiseases){
	        return [
	        	   $HomeGeneralDiseases->c_3_3_1_disease_no,
	         	  $HomeGeneralDiseases->c_3_3_2_general_disease,
	          	 $GeneralMedicine->generic_med_no,
	   	     ] ;
            }

 
}
 

         public function headings(): array
    {
        return [
			 'General Disease Code',
			'General Disease Name',
			'Generic ID Number',
			];
}
}
