<?php

namespace App\Imports;

use App\Models\MedsLeaflet;
use Maatwebsite\Excel\Concerns\WithStartRow;  
use Maatwebsite\Excel\Concerns\ToModel;

class MedsLeafletImport implements ToModel,WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
     public function model(array $row)
    {
         if(!empty($row)){

                $MedsLeaflet = MedsLeaflet::where('c_1_3_1_generic_id_no',$row[0])->where('c_1_3_2_pdf_no', $row[1])->where('c_1_3_3_language',$row[2])->first();
                if($MedsLeaflet){
                          $MedsLeaflet->c_1_3_2_pdf_no = $row[1];
                        $MedsLeaflet->c_1_3_3_language = $row[2];
                        $MedsLeaflet->c_1_3_4_pdf_file = $row[3];
                        $MedsLeaflet->update();
                        
                       return $MedsLeaflet; 
                }else {
                    $MedsLeaflet =  new MedsLeaflet;
                           $MedsLeaflet->c_1_3_1_generic_id_no = $row[0];
                     $MedsLeaflet->c_1_3_2_pdf_no = $row[1];
                        $MedsLeaflet->c_1_3_3_language = $row[2];
                        $MedsLeaflet->c_1_3_4_pdf_file = $row[3];

                        $MedsLeaflet->save();
                        return $MedsLeaflet;
                }

        };
    }
     public function startRow(): int
    {
        return 2;
    }
}
