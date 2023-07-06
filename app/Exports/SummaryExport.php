<?php

namespace App\Exports;

use App\Models\Summary;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SummaryExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
     public function collection()
    {
        return Summary::select('c_14_2_online_invoice_no','c_14_96_forex_received','c_14_97_received_on_date','c_14_115_parcel_shipment_date','c_14_116_carrier','c_14_117_tracking_no','c_14_118_tracking_url','for_arrival_date','customs_cl_date','c_14_124_delivered_date')->whereNotNull('c_14_2_online_invoice_no')->get();
    }

         public function headings(): array
    {
	        return [
				'Online Invoice No.',
				'USD/ForEx Recd.',
				'Received on Date',
				'Parcel Shipment Date',
				'Carrier',
				'Tracking No.',
				'Tracking URL',
				'Foreign Arrival Date',
				'Customs Clearance Date',
				'Delivered Date',
		];

	}
}
