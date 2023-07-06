<?php

namespace App\Exports;

use App\Models\HomeCriticalDiseases;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class HomeCriticalDiseasesExport implements FromCollection,WithHeadings
{
       /**
    * @return \Illuminate\Support\Collection
    */
      public function collection()
    {
        return HomeCriticalDiseases::select('c_3_4_1_disease_no','c_3_4_2_critical_disease','c_3_4_3_image','c_3_4_4_image_alt_tag','si_source_url','c_3_4_5_disease_information')->orderBy('c_3_4_1_disease_no')->get();
    }

         public function headings(): array
    {
        return [
		  'Disease_No',
		'Cancer_Disease',
		'Image  380 x 287',
		'Image_Alt_tag',
		'Source_Link',
		'Disease_Information',
			];

	}
}
