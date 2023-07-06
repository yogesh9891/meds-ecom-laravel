<?php

namespace App\Exports;

use App\Models\MedsInfo;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
class MedsNamesExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return MedsInfo::select('c_1_1_1_generic_id_no','c_1_1_2_main_generic_name','c_1_1_3_other_names','c_1_1_4_frontend_url','c_1_1_5_browsing_path_name','c_1_1_6_h1_title_in_blue','c_1_1_7_name_in_home_diseases','c_1_1_8_drug_info_title','c_1_1_9_generic_intro_details','c_1_1_11_di_source_name','c_1_1_12_di_source_url')->orderBy('c_1_1_1_generic_id_no')->get();
    }


      public function headings(): array
    {
        return [
         	 'Generic_ID_No',
			'Main_Generic_Name',
			'Other_Names',
			'Frontend_URL',
			'Browsing_Path_Name',
			'H1_Title_in_Blue',
			'Name_in_Home_Diseases',
			'Drug_Info_Title',
			'Generic_Intro_Details',
			'DI_Source_Name',
			'DI_Source_URL',
        ];
    }
}
