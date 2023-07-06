<?php

namespace App\Exports;

use App\Models\CountryFreight;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class CountryFreightExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
       public function collection()
    {
        return CountryFreight::select('c_4_1_1_s_no','c_4_1_2_country_name','c_4_1_3_country_isd_code','c_4_1_4_billing_address','c_4_1_5_delivery_address','c_4_1_6_priority_display','c_4_1_7_customs_clearance','c_4_1_8_patient_use','c_4_1_9_study_use','c_4_1_10_dif_freight_chg_inr','c_4_1_11_delivery_start','c_4_1_12_delivery_end','c_4_1_13_single_freight','c_4_1_14_show_single_freight')->orderBy('c_4_1_1_s_no')->get();
    }

         public function headings(): array
    {
	        return [
			'S_No',
			'Country_Name',
			'Country_ISD_Code',
			'Billing_Address',
			'Delivery_Address',
			'Bank_Details',
			'Customs_Clearance',
			'Patient_Use',
			'Study_Use',
			'Dif_Freight_Chg_INR',
			'Delivery_start',
			'Delivery_end',
			'Single_Freight',
			'Show_Single_Freight',
		];

	}
}
