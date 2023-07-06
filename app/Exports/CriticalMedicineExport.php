<?php

namespace App\Exports;

use App\Models\CriticalMedicine;
use App\Models\HomeCriticalDiseases;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CriticalMedicineExport implements FromCollection,WithHeadings,WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {

       return $CriticalMedicine =  CriticalMedicine::get();
    }


    public function map($CriticalMedicine) : array {

            $HomeGeneralDiseases = HomeCriticalDiseases::find($CriticalMedicine->critical_disease_id);
            if($HomeGeneralDiseases){
	        return [
	        	   $HomeGeneralDiseases->c_3_4_1_disease_no,
	         	  $HomeGeneralDiseases->c_3_4_2_critical_disease,
	          	 $CriticalMedicine->generic_med_no,
	   	     ] ;
            }

 
}
 

         public function headings(): array
    {
        return [
			 'Cancer Disease Code',
			'Cancer Disease Name',
			'Generic ID Number',
			];
}
}
