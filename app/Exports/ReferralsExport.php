<?php

namespace App\Exports;

use App\Models\Summary;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Carbon\Carbon;
class ReferralsExport implements FromCollection,WithHeadings,WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
       public function collection()
    {
        return Summary::with('coupon')->whereNotNull('c_14_93_pay_mode')->whereNotNull('c_14_75_coupon_code_used')->whereNotNull('c_14_76_promo_discount')->latest()->get();
    }

       public function map($Summary): array
    {
    			$payment_date = '';
	           if($Summary->c_14_97_received_on_date){
	           $date =Carbon::createFromFormat('Y-m-d', $Summary->c_14_97_received_on_date);
	         		  $payment_date = $date->format('d-m-Y');
	           }
        return [
        	   $Summary->c_14_75_coupon_code_used,
	           $Summary->coupon->c_12_8_issued_agent_email??'',
	           $Summary->c_14_2_online_invoice_no,
	           $Summary->created_at->format('d-m-Y'),
	           $Summary->c_14_10_payer_full_name .' & '.$Summary->c_14_17_payer_country,
	           $Summary->c_14_22_parcel_receivers_full_name .' & '.$Summary->c_14_29_receiver_country,
	           round($Summary->c_14_84_total_amount),
	           round($Summary->c_14_76_promo_discount),
	           $Summary->c_14_96_forex_received ?'Paid':'Unpaid',
	           $payment_date
        ];
    }

         public function headings(): array
    {
	        return [
				'Coupon Used',
				'Mktg. Agent Email',
				'Order No.',
				'Date',
				'Billing Name & Country',
				'Patient/Receiver & Country',
				'Order Amount',
				'Discount Given',
				'Payment Status',
				'Payment Date',
		];

	}
}
