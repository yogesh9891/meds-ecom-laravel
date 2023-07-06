<?php

namespace App\Exports;

use App\Models\MedsProduct;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
class MedsProductExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
      public function collection()
    {
        return MedsProduct::select('c_2_1_1_generic_id_no','c_2_1_2_product_no','c_2_1_3_short_strength_id','c_2_1_4_display_at','c_2_1_5_product_name_h2','c_2_1_6_med_use')->orderBy('c_2_1_1_generic_id_no')->get();
    }

         public function headings(): array
    {
        return [
		   'Generic_ID_No',
			'Product_No',
			'Short_Strength_ID',
			'Display_At',
			'Product_Name_H2',
			'Med_Use',
			];

}
}
