<?php

namespace App\Imports;

use App\Models\MedsVideo;
use Maatwebsite\Excel\Concerns\WithStartRow;  
use Maatwebsite\Excel\Concerns\ToModel;

class MedsVideoImport implements ToModel,WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
         if(!empty($row)){

                $MedsVideo = MedsVideo::where('c_1_4_1_generic_id_no',$row[0])->where('c_1_4_2_video_no',$row[1])->first();
                if($MedsVideo){
                        $MedsVideo->c_1_4_2_video_no = $row[1];
                        $MedsVideo->c_1_4_3_video_title = $row[2];
                        $MedsVideo->c_1_4_4_image = $row[3];
                        $MedsVideo->c_1_4_5_image_alt_tag = $row[4];
                        $MedsVideo->c_1_4_6_video_file = $row[5];
                        $MedsVideo->c_1_4_7_video_url = $row[6];
                        $MedsVideo->source_url = $row[7];
                        $MedsVideo->youtube_url = $row[8];
                        $MedsVideo->update();
                        
                       return $MedsVideo; 
                }else {
                  
                        $MedsVideo =  new MedsVideo;
                        $MedsVideo->c_1_4_1_generic_id_no = (int)$row[0];
                        $MedsVideo->c_1_4_2_video_no = $row[1];
                        $MedsVideo->c_1_4_3_video_title = $row[2];
                        $MedsVideo->c_1_4_4_image = $row[3];
                        $MedsVideo->c_1_4_5_image_alt_tag = $row[4];
                        $MedsVideo->c_1_4_6_video_file = $row[5];
                        $MedsVideo->c_1_4_7_video_url = $row[6];
                        $MedsVideo->source_url = $row[7];
                        $MedsVideo->youtube_url = $row[8];
                        $MedsVideo->save();
                        return $MedsVideo;
                }

        };
    }
     public function startRow(): int
    {
        return 2;
    }
}
