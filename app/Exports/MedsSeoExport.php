<?php

namespace App\Exports;

use App\Models\MedsSeo;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
class MedsSeoExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
       public function collection()
    {
        return MedsSeo::select('c_1_5_1_generic_id_no','c_1_5_2_meta_title','c_1_5_3_meta_description','c_1_5_4_meta_keyword','c_1_5_5_hyperlink_page_tags','c_1_5_7_language','c_1_5_8_country','c_1_5_9_distribution','c_1_5_9_distribution','c_1_5_10_author','c_1_5_11_robots','c_1_5_12_revisit_after','c_1_5_13_rating_value','c_1_5_14_rating_count','c_1_5_15_other_tags_3','c_1_5_16_other_tags_4','c_1_5_17_other_tags_5')->orderBy('c_1_5_1_generic_id_no')->get();
    }

         public function headings(): array
    {
        return [
      	 'Generic_ID_No',
		'Meta_Title',
		'Meta_Description',
		'Meta_Keyword',
		'Hyperlink_Page_Tags',
		'Language',
		'Country',
		'Distribution',
		'Author',
		'Robots',
		'Revisit_After',
		'Rating_Value',
		'Rating_Count',
		'Tags_3',
		'Tags_4',
		'Tags_5',
	];

}
}
