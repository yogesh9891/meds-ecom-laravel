<?php

namespace App\Imports;

use App\Models\MedsQuestion;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;  

class MedsQuestionImport implements ToModel,WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
         if(!empty($row)){

                $MedsQuestion = MedsQuestion::where('c_1_2_1_generic_id_no',$row[0])->where('c_1_2_2_qs_no',$row[1])->first();
                if($MedsQuestion){
                        $MedsQuestion->c_1_2_2_qs_no = $row[1];
                        $MedsQuestion->c_1_2_3_question = $row[2];
                        $MedsQuestion->c_1_2_4_answer = $row[3];
                        $MedsQuestion->update();
                        
                       return $MedsQuestion; 
                }else {
                    $MedsQuestion =  new MedsQuestion;
                           $MedsQuestion->c_1_2_1_generic_id_no = $row[0];
                     $MedsQuestion->c_1_2_2_qs_no = $row[1];
                        $MedsQuestion->c_1_2_3_question = $row[2];
                        $MedsQuestion->c_1_2_4_answer = $row[3];

                        $MedsQuestion->save();
                        return $MedsQuestion;
                }

        };
    }



     public function startRow(): int
    {
        return 2;
    }
}
