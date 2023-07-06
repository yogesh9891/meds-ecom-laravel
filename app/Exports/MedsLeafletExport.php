<?php

namespace App\Exports;

use App\Models\MedsLeaflet;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class MedsLeafletExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return MedsLeaflet::select('c_1_3_1_generic_id_no','c_1_3_2_pdf_no','c_1_3_3_language','c_1_3_4_pdf_file')->orderBy('c_1_3_1_generic_id_no')->orderBy('c_1_3_2_pdf_no')->get();
    }

         public function headings(): array
    {
        return [
         	'Generic_ID_No',
			'PDF_no',
			'Language',
			'pdf_File',
    ];

}
}
