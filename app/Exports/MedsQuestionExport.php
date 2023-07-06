<?php

namespace App\Exports;

use App\Models\MedsQuestion;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class MedsQuestionExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return MedsQuestion::select('c_1_2_1_generic_id_no','c_1_2_2_qs_no','c_1_2_3_question','c_1_2_4_answer')->orderBy('c_1_2_1_generic_id_no')->orderBy('c_1_2_2_qs_no')->get();
    }
        public function headings(): array
    {
        return [
         	 'Generic_ID_No',
			'Qs_no',
			'Question',
			'Answer',
        ];
    }
}
