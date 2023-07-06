<?php

namespace App\Imports;

use App\Models\Summary;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;  
use Carbon\Carbon;
class SummaryImport implements ToModel,WithStartRow
{
       public function model(array $row)
    {
         if(!empty($row)){

                $Summary = Summary::where('c_14_2_online_invoice_no',$row[0])->first();
                if($Summary){

                   $received_on_date =  null;
                    if(!empty($row[2])){
                         $received_on_date =Carbon::createFromFormat('d-m-Y', $row[2])->format('Y-m-d');
                    }

                     $c_14_115_parcel_shipment_date =  null;
                    if(!empty($row[3])){
                         $c_14_115_parcel_shipment_date =Carbon::createFromFormat('d-m-Y', $row[3])->format('Y-m-d');
                    }


                     $for_arrival_date =  null;
                    if(!empty($row[7])){
                         $for_arrival_date =Carbon::createFromFormat('d-m-Y', $row[7])->format('Y-m-d');
                    }


                     $customs_cl_date =  null;
                    if(!empty($row[8])){
                         $customs_cl_date =Carbon::createFromFormat('d-m-Y', $row[8])->format('Y-m-d');
                    }


                     $c_14_124_delivered_date =  null;
                    if(!empty($row[9])){
                         $c_14_124_delivered_date =Carbon::createFromFormat('d-m-Y', $row[9])->format('Y-m-d');
                    }

      
                   
                        $Summary->c_14_96_forex_received = $row[1];
                        $Summary->c_14_97_received_on_date = $received_on_date;
                        $Summary->c_14_115_parcel_shipment_date = $c_14_115_parcel_shipment_date;
                        $Summary->c_14_116_carrier = $row[4];
                        $Summary->c_14_117_tracking_no = $row[5];
                        $Summary->c_14_118_tracking_url = $row[6];
                        $Summary->for_arrival_date =$for_arrival_date;
                        $Summary->customs_cl_date = $customs_cl_date;
                        $Summary->c_14_124_delivered_date = $c_14_124_delivered_date;
                        $Summary->update();
                       return $Summary; 
                }

        };
    }
     public function startRow(): int
    {
        return 2;
    }
}
