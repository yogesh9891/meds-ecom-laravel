<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Summary;
use App\Models\BankDetail;
use Mail;
use App\Imports\SummaryImport;
use App\Exports\SummaryExport;
use App\Exports\ReferralsExport;
use App\Exports\OrderExport;
use Maatwebsite\Excel\Facades\Excel;
class AdminOrderController extends Controller
{
    

    public function orderRemainder1($id)
    {
    	$summary = Summary::with('order_details')->find($id);
	     $bank_detail = BankDetail::where('c_5_1_s_no','BD-1')->first();
			$data['cc'] = env('MAIL_CC');
	  		$data['to'] = $summary->c_14_9_login_email ;
	  	  Mail::send('mails.mail_1_order_reminder_or1', compact('summary','bank_detail'), function($message)use ($data) {
	         $message->to($data['to'])->cc($data['cc'])->subject('Your Medicines Order : Details Incomplete');
	      }); 

    	$summary->order_reminder_or1 = date('Y-m-d');
    	$summary->update();

         return redirect()->back()->with('success','Order Remainder - 1 sent Successfully');
    }


     public function orderRemainder2($id)
    {
    	$summary = Summary::with('order_details')->find($id);
  		   $bank_detail = BankDetail::where('c_5_1_s_no','BD-1')->first();
  		   $data['cc'] = env('MAIL_CC');
  		$data['to'] = $summary->c_14_9_login_email ;
    	 Mail::send('mails.mail_2_order_reminder_mail_or2', compact('summary','bank_detail'), function($message)use ($data) {
         $message->to($data['to'])->cc($data['cc'])->subject('Details Incomplete for your Medicines Order');
      });
    	$summary->order_reminder_or2 = date('Y-m-d');
    	$summary->update();

    return redirect()->back()->with('success','Order Remainder - 2 sent Successfully');
    }


       public function orderRemainder3($id)
    {
    	$summary = Summary::with('order_details')->find($id);
  		   $bank_detail = BankDetail::where('c_5_1_s_no','BD-1')->first();

  		$data['cc'] = env('MAIL_CC');
  		$data['to'] = $summary->c_14_9_login_email ;
    	 Mail::send('mails.mail_3_order_reminder_mail_or3', compact('summary','bank_detail'), function($message) use ($data) {
         $message->to($data['to'])->cc($data['cc'])->subject(' Your Medicines Order : Cart-Checkout completion reminder '); 
           });
    	$summary->order_reminder_or3 = date('Y-m-d');
    	$summary->update();
    return redirect()->back()->with('success','Order Remainder - 3 sent Successfully');
    }


     public function delete()
    {
        Summary::truncate();
        return redirect()->back()->with('success','Details deleted Successfully ');
        
    }

    public function import(Request $request)
    {
         $this->validate($request, [
            'file' => 'required',          
        ]);

       Excel::import(new SummaryImport, $request->file('file'));
        
        return redirect()->back()->with('success','Details uploaded Successfully ');
    }

    public function export()
    {

         return Excel::download(new SummaryExport, '18-Order-Status-Popup-downloaded-'.date('dmY').'.xlsx');
    }


      public function exportReferrals()
    {
         return Excel::download(new ReferralsExport, '13-Referrals-downloaded-'.date('dmY').'.xlsx');
    }


        public function exportOrder()
    {
         return Excel::download(new ReferralsExport, '13-Referrals-downloaded-'.date('dmY').'.xlsx');
    }
         public function summaryReferrals()
    {
         return Excel::download(new OrderExport, '14-Summary-downloaded-'.date('dmY').'.xlsx');
    }

         public function orderdeleteAll(Request $request)  
    {  
        $ids = $request->ids;  
        Summary::whereIn('id',explode(",",$ids))->delete();  
        return response()->json(['success'=>"Details deleted Successfully."]);  
    } 




}
