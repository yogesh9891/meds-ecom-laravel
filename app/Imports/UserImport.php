<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\WithStartRow;  
use Maatwebsite\Excel\Concerns\ToModel;

class UserImport implements ToModel,WithStartRow
{
    public function model(array $row)
    {
         if(!empty($row)){

                $User = User::where('email',$row[5])->first();
                if($User){

                          $User->name = $row[2];
                        $User->country = $row[3];
                        $User->mobile = $row[4];
                        $User->email = $row[5];
                        $User->password = $row[6];
                
                      
                        $User->update();
                        
                       return $User; 
                } else {

                    if(!empty($row[5])){
                        
                          $User = new  User;
                        $User->name = $row[2];
                        $User->country = $row[3];
                        $User->mobile = $row[4];
                        $User->email = $row[5];
                        $User->password = $row[6];
                        $User->save();
                        
                       return $User; 
                    }

                }

        };
    }
     public function startRow(): int
    {
        return 2;
    }
}
