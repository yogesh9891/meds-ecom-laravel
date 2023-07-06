<?php

namespace App\Exports;

use App\Models\MedsForex;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
class MedsForexExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
          public function collection()
    {
        return MedsForex::select('c_2_3_1_fx_sign_1' 	,'c_2_3_2_fx_rate_1' 	,'c_2_3_3_fx_sign_2' 	,'c_2_3_4_fx_rate_2' 	,'c_2_3_5_fx_sign_3' 	,'c_2_3_6_fx_rate_3' 	,'c_2_3_7_fx_sign_4' 	,'c_2_3_8_fx_rate_4' 	,'c_2_3_9_fx_sign_5' 	,'c_2_3_10_fx_rate_5' 	,'c_2_3_11_fx_sign_6' 	,'c_2_3_12_fx_rate_6' 	,'c_2_3_13_fx_sign_7' 	,'c_2_3_14_fx_rate_7' 	,'c_2_3_15_fx_sign_8' 	,'c_2_3_16_fx_rate_8' 	,'c_2_3_17_fx_sign_9' 	,'c_2_3_18_fx_rate_9' 	,'c_2_3_19_fx_sign_10' 	,'c_2_3_20_fx_rate_10' 	,'c_2_3_21_fx_sign_11' 	,'c_2_3_22_fx_rate_11' 	,'c_2_3_23_fx_sign_12' 	,'c_2_3_24_fx_rate_12' 	,'c_2_3_25_fx_sign_13' 	,'c_2_3_26_fx_rate_13' 	,'c_2_3_27_fx_sign_14' 	,'c_2_3_28_fx_rate_14' 	,'c_2_3_28_fx_sign_15' 	,'c_2_3_28_fx_rate_15')->get();
    }

         public function headings(): array
    {
	        return [
			'FX_Sign_1',
			'FX_Rate_1',
			'FX_Sign_2',
			'FX_Rate_2',
			'FX_Sign_3',
			'FX_Rate_3',
			'FX_Sign_4',
			'FX_Rate_4',
			'FX_Sign_5',
			'FX_Rate_5',
			'FX_Sign_6',
			'FX_Rate_6',
			'FX_Sign_7',
			'FX_Rate_7',
			'FX_Sign_8',
			'FX_Rate_8',
			'FX_Sign_9',
			'FX_Rate_9',
			'FX_Sign_10',
			'FX_Rate_10',
			'FX_Sign_11',
			'FX_Rate_11',
			'FX_Sign_12',
			'FX_Rate_12',
			'FX_Sign_13',
			'FX_Rate_13',
			'FX_Sign_14',
			'FX_Rate_14',
			'FX_Sign_15',
			'FX_Rate_15'
		];

	}
}
