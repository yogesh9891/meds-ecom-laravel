<?php

namespace App\Exports;

use App\Models\TextReview;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
class TextReviewExport implements FromCollection,WithHeadings,WithMapping
{
   /**
    * @return \Illuminate\Support\Collection
    */
         public function collection()
    {
        return TextReview::select('created_at','posting_from_page','rating_1','rating_2','rating_3','rating_4','rating_5','rating','full_name','country','email','comment','medicine','medicine_status','top5','testimonials','testimonial_top_10','about','about_top_5','home','home_top_5')->orderBy('created_at')->get();
    }

      public function map($TextReview) : array {

        return [

            $TextReview->created_at->format('d-m-Y'),
            $TextReview->posting_from_page,
            $TextReview->rating_1,
            $TextReview->rating_2,
            $TextReview->rating_3,
            $TextReview->rating_4,
            $TextReview->rating_5,
            $TextReview->rating,
            $TextReview->full_name,
            $TextReview->country,
            $TextReview->email,
            $TextReview->comment,
            $TextReview->medicine,
            $TextReview->medicine_status?'Y':'N',
            $TextReview->top5?'Y':'N',
            $TextReview->testimonials?'Y':'N',
            $TextReview->testimonial_top_10?'Y':'N',
            $TextReview->about?'Y':'N',
            $TextReview->about_top_5?'Y':'N',
            $TextReview->home?'Y':'N',
            $TextReview->home_top_5?'Y':'N',
        ] ;
 
    }

         public function headings(): array
    {
	        return [
		'Posting_Date',
		'Posted_from',
		'Rating_1',
		'Rating_2',
		'Rating_3',
		'Rating_4',
		'Rating_5',
		'Average_Rating',
		'Full_Name',
		'Country',
		'Email',
		'Comments',
		'Medicine',
		'Show_on_Medicine',
		'M_Top_5',
		'Show_Testimonials',
		'T_Top_10',
		'Show_About',
		'A_Top_5',
		'Show_Home',
		'H_Top_5',
	];
	}
}
