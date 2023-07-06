<?php

namespace App\Imports;

use App\Models\BankDetail;
use Maatwebsite\Excel\Concerns\WithStartRow;  
use Maatwebsite\Excel\Concerns\ToModel;

class BankDetailImport implements ToModel,WithStartRow
{
          public function model(array $row)
    {
         if(!empty($row)){

                $BankDetail = BankDetail::where('c_5_1_s_no',$row[0])->where('c_5_2_company_code',$row[1])->first();
                if($BankDetail){

                        $BankDetail->c_5_3_account_name = $row[2];
                        $BankDetail->c_5_4_account_address = $row[3];
                        $BankDetail->c_5_5_bank_name_location = $row[4];
                        $BankDetail->c_5_6_bank_branch_code = $row[5];
                        $BankDetail->c_5_7_account_type = $row[6];
                        $BankDetail->c_5_8_account_no = $row[7];
                        $BankDetail->c_5_9_bank_transfer_code = $row[8];
                        $BankDetail->c_5_10_email = $row[9];
                        $BankDetail->c_5_11_currency = $row[10];
                      
                        $BankDetail->update();
                        
                       return $BankDetail; 
                }else {
                        if(!empty($row[1])){

                        $BankDetail =  new BankDetail;
                        $BankDetail->c_5_1_s_no = $row[0];
                        $BankDetail->c_5_2_company_code = $row[1];
                         $BankDetail->c_5_3_account_name = $row[2];
                        $BankDetail->c_5_4_account_address = $row[3];
                        $BankDetail->c_5_5_bank_name_location = $row[4];
                        $BankDetail->c_5_6_bank_branch_code = $row[5];
                        $BankDetail->c_5_7_account_type = $row[6];
                        $BankDetail->c_5_8_account_no = $row[7];
                        $BankDetail->c_5_9_bank_transfer_code = $row[8];
                        $BankDetail->c_5_10_email = $row[9];
                        $BankDetail->c_5_11_currency = $row[10];
                        $BankDetail->save();
                        }
                        return $BankDetail;
                }

        };
    }
     public function startRow(): int
    {
        return 2;
    }
}
