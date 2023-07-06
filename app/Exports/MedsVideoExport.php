<?php

namespace App\Exports;

use App\Models\MedsVideo;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class MedsVideoExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
     public function collection()
    {
        return MedsVideo::select('c_1_4_1_generic_id_no','c_1_4_2_video_no','c_1_4_3_video_title','c_1_4_4_image','c_1_4_5_image_alt_tag','c_1_4_6_video_file','c_1_4_7_video_url','source_url','youtube_url')->orderBy('c_1_4_1_generic_id_no')->orderBy('c_1_4_2_video_no')->get();
    }

         public function headings(): array
    {
        return [
         'Generic_ID_No',
		'Video_No',
		'Video_Title',
		'Image',
		'Image_Alt_Tag',
		'Video_File',
		'video.mp4_URL',
		'Source',
        'You Tube Url',
    ];

}

}
