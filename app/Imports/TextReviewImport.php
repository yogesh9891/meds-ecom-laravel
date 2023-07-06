<?php

namespace App\Imports;

use App\Models\TextReview;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;  

class TextReviewImport implements ToModel,WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
            public function model(array $row)
    {
        
       
         if(!empty($row)){

                        if(!empty($row[8])){
                                    $TextReview =  new TextReview;
                                    // $createdAt = \Carbon\Carbon::parse($row[0]);
                                    // dd($row[0],$createdAt->format('Y-m-d H:i:s'));
                                    // $TextReview->created_at =$row[1];
                                    $TextReview->posting_from_page=$row[1];
                                    $TextReview->page_name=$row[1];
                                    $TextReview->rating_1=$row[2];
                                    $TextReview->rating_2=$row[3];
                                    $TextReview->rating_3=$row[4];
                                    $TextReview->rating_4=$row[5];
                                    $TextReview->rating_5=$row[6];
                                    $avg_rating = ceil(((float)$row[2]+(float)$row[3]+(float)$row[4]+(float)$row[5]+(float)$row[6])/5);
                                    $TextReview->rating=$avg_rating;
                                    $TextReview->full_name=$row[8];
                                    $TextReview->country=$row[9];
                                    $TextReview->email=$row[10];
                                    $TextReview->comment=$row[11];
                                    $TextReview->medicine=$row[12];
                                    $TextReview->medicine_status= $row[13]=='Y'?1:0;
                                    $TextReview->top5= $row[14]=='Y'?1:0;
                                    $TextReview->testimonials= $row[15]=='Y'?1:0;
                                    $TextReview->testimonial_top_10= $row[16]=='Y'?1:0;
                                    $TextReview->about= $row[17]=='Y'?1:0;
                                    $TextReview->about_top_5= $row[18]=='Y'?1:0;
                                    $TextReview->home= $row[19]=='Y'?1:0;
                                    $TextReview->home_top_5= $row[20]=='Y'?1:0;
                                     $TextReview->save();
                              return $TextReview;
                            }
                }

            }

     public function startRow(): int
    {
        return 2;
    }
}
