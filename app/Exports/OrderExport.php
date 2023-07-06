<?php

namespace App\Exports;

use App\Models\Summary;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class OrderExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Summary::all();
    }
//          public function headings(): array
//     {
// 	        return [
// 				'Online_Invoice_No'
// 'Cart_Date_&_Time_IST'
// 'Cart_URL'
// 'Order_Date_&_Time_IST'
// 'Proforma_Invoice_URL'
// 'Order_Invoice_URL'
// 'Excel_Order_URL'
// 'Repeat_Last_Order_Reference_Details'
// 'Login_Email'
// 'Payer_Full_Name'
// 'Patient_is_(Relation)_of_the_Payer'
// 'Payer_Address_Line_1':
// 'Payer_Address_Line_2':
// 'Payer_City':
// 'Payer_State'
// 'Payer_Zip':
// 'Payer_Country'
// 'Payer_Mobile'
// 'Patient_Name'
// 'D_Patient’s_Full_Name'
// 'Patient_Sex'
// 'Patient_Age'
// 'Parcel_Receiver’s_Full_Name'
// 'Receiver_is_(Relation)_of_the_Patient'
// 'Receiver_Address_Line_1':
// 'Receiver_Address_Line_2':
// 'Receiver_City'
// 'Receiver_State'
// 'Receiver_Zip':
// 'D_Postal_Zip_Code'
// 'Receiver_Country'
// 'Receiver_Mobile'
// 'End_Use_Selected':
// 'Doctor’s_Prescription'
// 'Undertaking'
// 'Medicine_No._1'
// 'Description_1'
// 'Quantity/Pack_1'
// 'Net_Price/Pack_1'
// 'No._of_Packs_1'
// 'Total_Quantity_1'
// 'Medicine_Form_1'
// 'Total_Amount_1'
// 'Medicine_No._2'
// 'Description_2'
// 'Quantity/Pack_2'
// 'Net_Price/Pack_2'
// No._of_Packs_2
// Total_Quantity_2
// Medicine_Form_2
// Total_Amount_2
// Medicine_No._3
// Description_3
// Quantity/Pack_3
// Net_Price/Pack_3
// No._of_Packs_3
// Total_Quantity_3
// Medicine_Form_3
// Total_Amount_3
// Medicine_No._4
// Description_4
// Quantity/Pack_4
// Net_Price/Pack_4
// No._of_Packs_4
// Total_Quantity_4
// Medicine_Form_4
// Total_Amount_4
// Medicine_No._5
// Description_5
// Quantity/Pack_5
// Net_Price/Pack_5
// No._of_Packs_5
// Total_Quantity_5
// Medicine_Form_5
// Total_Amount_5
// Coupon_Code_Used
// Promotional_Discount_()
// Express_Shipping_Charges_(+)
// Any_Additional_Charges_(+)
// SEMITOTAL_AMOUNT
// PayonDelivery_Charges_(+)
// Credit_Card_Processing_Fees_(+)
// TOTAL_AMOUNT_(in_US$)
// Refil_After_Days
// CC_Payer_Name
// CC_State_&_Country
// CC_Email_Address
// CC_Request_Details
// CC_Request_Link
// Pay_Mode
// Forex_Currency
// Conversion_Rate
// TOTAL_AMOUNT_PAYABLE
// PAYMENT_RECEIVED
// Received_on_Date
// Conversion_Rate
// USD_Eqv._Value_Recd.
// Balance_Due
// Order_Reminder_Mail_(OR1):
// Order_Reminder_Mail_(OR2):
// Order_Reminder_Mail_(OR3):
// Proforma_Invoice_Mail_(PI):
// Order_on_Hold_Mail_(OH):
// Order_Invoice_Mail_(OI):
// CC_Payment_Reminder_Mail_(CP1)
// CC_Payment_Reminder_Mail_(CP2)
// CC_Payment_Thanks_Mail_(CPT)
// BT_Payment_Reminder_Mail_(BP1)
// BT_Payment_Reminder_Mail_(BP2)
// BT_Payment_Thanks_Mail_(BPT)
// Parcel_Shipment_Date
// Carrier
// Tracking_No.
// Tracking_URL
// Shipment_Mail_(S)
// Foreign_Arrival_Date
// Foreign_Arrival_Mail_(F)
// Customs_Clearance_Date
// Custom_Clearance_Mail_(C)
// Delivered_Date
// Delivered_Mail_(D)
// Reviews_Mail_(R1)
// Reviews_Mail_(R2)
// Refil_Reminder_Mail_1_(RR1)
// Refil_Reminder_Mail_2_(RR2)
// Refil_Reminder_Mail_3_(RR3)
// 		];


}
