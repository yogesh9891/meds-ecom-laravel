<?php

namespace App\Exports;

use App\Models\HomeGeneralDiseases;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class HomeGeneralDiseasesExport implements FromCollection,WithHeadings
{
   
     /**
    * @return \Illuminate\Support\Collection
    */
      public function collection()
    {
        return HomeGeneralDiseases::select('c_3_3_1_disease_no','c_3_3_2_general_disease','c_3_3_3_image','c_3_3_4_image_alt_tag','si_source_url','c_3_3_5_disease_information')->orderBy('c_3_3_1_disease_no')->get();
    }

         public function headings(): array
    {
        return [
		  'Disease_No',
		'General_Disease',
		'Image  380 x 287',
		'Image_Alt_tag',
		'Source_Link',
		'Disease_Information',
			];

	}
}
