<?php

namespace App\Exports;

use App\Models\BankDetail;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class BankDetailExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
         public function collection()
    {
        return BankDetail::select('c_5_1_s_no','c_5_2_company_code','c_5_3_account_name','c_5_4_account_address','c_5_5_bank_name_location','c_5_6_bank_branch_code','c_5_7_account_type','c_5_8_account_no','c_5_9_bank_transfer_code','c_5_10_email','c_5_11_currency')->orderBy('c_5_1_s_no')->get();
    }

         public function headings(): array
    {
	        return [
			'S_No',
			'Company_Code',
			'Account_Name',
			'Account_Address',
			'Bank_Name_Location',
			'Bank_Branch_code',
			'Account_Type',
			'Account_No',
			'Bank_Transfer_code',
			'Email' ,
			'Currency',
		];

	}
}

