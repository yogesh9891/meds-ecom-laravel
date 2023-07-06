<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Summary;
use App\Models\BankDetail;
use App\Models\User;
use Mail;

class MailController extends Controller
{
     public function orderRemainder1($id)
    {
    	$summary = Summary::with('order_details')->find($id);
	     $bank_detail = BankDetail::where('c_5_1_s_no','BD-1')->first();
			$data['cc'] = env('MAIL_CC');
	  		$data['to'] = $summary->c_14_9_login_email ;
	  	  Mail::send('mails.mail_1_order_reminder_or1', compact('summary','bank_detail'), function($message)use ($data) {
	         $message->to($data['to'])->cc($data['cc'])->from('info@911globalmeds.com', '911globalmeds.com 💊')->subject('Your Medicines Order : Details Incomplete');
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
         $message->to($data['to'])->cc($data['cc'])->from('info@911globalmeds.com', '911globalmeds.com 💊')->subject('Details Incomplete for your Medicines Order');
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
         $message->to($data['to'])->cc($data['cc'])->from('info@911globalmeds.com', '911globalmeds.com 💊')->subject(' Your Medicines Order : Cart-Checkout completion reminder '); 
           });
    	$summary->order_reminder_or3 = date('Y-m-d');
    	$summary->update();

    return redirect()->back()->with('success','Order Remainder - 3 sent Successfully');
    }

           public function orderOnHold($id)
    {
    	$summary = Summary::with('order_details')->find($id);
  		   $bank_detail = BankDetail::where('c_5_1_s_no','BD-1')->first();

  		$data['cc'] = env('MAIL_CC');
      $data['invoice'] = $summary->c_14_2_online_invoice_no;
  		$data['to'] = $summary->c_14_9_login_email ;
    	 Mail::send('mails.mail_21_order_hold_mail_oh', compact('summary','bank_detail'), function($message) use ($data) {
         $message->to($data['to'])->cc($data['cc'])->from('info@911globalmeds.com', '911globalmeds.com 💊')->subject($data['invoice'] .' :  Your medicines Order is on Hold'); 
           });
    	$summary->order_hold_mail = date('Y-m-d');
    	$summary->update();

       $date =   'OH sent:'.date_format(date_create($summary->order_hold_mail),'d-m-y');
      return response()->json(['status'=>true,'date'=>$date]);
       
       return redirect()->back()->with('success','Order Hold -  sent Successfully');
    }

            public function ccpaymentReminder1($id)
    {
    	$summary = Summary::with('order_details')->find($id);
  		   $bank_detail = BankDetail::where('c_5_1_s_no','BD-1')->first();

  		$data['cc'] = env('MAIL_CC');
  		$data['to'] = $summary->c_14_9_login_email ;
      $data['invoice'] = $summary->c_14_2_online_invoice_no;
    	 Mail::send('mails.mail_6_cc_payment_reminder_mail_cp1 ', compact('summary','bank_detail'), function($message) use ($data) {
         $message->to($data['to'])->cc($data['cc'])->from('info@911globalmeds.com', '911globalmeds.com 💊')->subject($data['invoice'] .' : Credit Card Payment Reminder for your Ordered Medicines ');
      });
    	$summary->cc_payment_reminder_mail1 = date('Y-m-d');
    	$summary->update();
    
       $date =   'CP1 sent:'.date_format(date_create($summary->cc_payment_reminder_mail1),'d-m-y');
      return response()->json(['status'=>true,'date'=>$date]);
    }

             public function ccpaymentReminder2($id)
    {
    	$summary = Summary::with('order_details')->find($id);
  		   $bank_detail = BankDetail::where('c_5_1_s_no','BD-1')->first();

  		$data['cc'] = env('MAIL_CC');
      $data['invoice'] = $summary->c_14_2_online_invoice_no;
  		$data['to'] = $summary->c_14_9_login_email ;
    	 Mail::send('mails.mail_7_cc_payment_reminder_mail_cp2 ', compact('summary','bank_detail'), function($message) use ($data) {
         $message->to($data['to'])->cc($data['cc'])->from('info@911globalmeds.com', '911globalmeds.com 💊')->subject($data['invoice'] .' : Second Reminder for Credit Card Payment ');
      });   
    	$summary->cc_payment_reminder_mail2 = date('Y-m-d');
    	$summary->update();

       $date =   'CP2 sent:'.date_format(date_create($summary->cc_payment_reminder_mail2),'d-m-y');
      return response()->json(['status'=>true,'date'=>$date]);
       return redirect()->back()->with('success','Credit Card Payment Reminder 2 - sent Successfully');
    }

          public function ccPaymentThanks($id)
    {
          
    	$summary = Summary::with('order_details')->find($id);
      if(!$summary->c_14_96_forex_received || !$summary->c_14_97_received_on_date){
            return response()->json(['status'=>false,'error'=>'Please FILL/SAVE Forex Received & Forex Received Date']);
      }
  		   $bank_detail = BankDetail::where('c_5_1_s_no','BD-1')->first();

  		$data['cc'] = env('MAIL_CC');
      $data['invoice'] = $summary->c_14_2_online_invoice_no;
  		$data['to'] = $summary->c_14_9_login_email ;
    	    Mail::send('mails.mail_8_cc_payment_thanks_mail_cpt', compact('summary','bank_detail'), function($message) use ($data) {
         $message->to($data['to'])->cc($data['cc'])->from('info@911globalmeds.com', '911globalmeds.com 💊')->subject($data['invoice'] .' :  Receipt of Credit Card Payment ');
      });  
    	$summary->cc_payment_thanks_mail = date('Y-m-d');
    	$summary->update();

       $date =   'CPT sent:'.date_format(date_create($summary->cc_payment_thanks_mail),'d-m-y');
      return response()->json(['status'=>true,'date'=>$date]);
       return redirect()->back()->with('success','Credit Card Payment Thanks - sent Successfully');
    }


                public function btPaymentReminder1($id)
    {
    	$summary = Summary::with('order_details')->find($id);
  		   $bank_detail = BankDetail::where('c_5_1_s_no','BD-1')->first();

  		$data['cc'] = env('MAIL_CC');
  		$data['to'] = $summary->c_14_9_login_email ;
      $data['invoice'] = $summary->c_14_2_online_invoice_no;

         Mail::send('mails.mail_9_bt_payment_reminder_mail_bp1', compact('summary','bank_detail'), function($message) use ($data) {
         $message->to($data['to'])->cc($data['cc'])->from('info@911globalmeds.com', '911globalmeds.com 💊')->subject($data['invoice'] .' :  Bank Transfer Payment Reminder for your Ordered Medicines ');
    	  });
    	$summary->bt_payment_reminder_mail1 = date('Y-m-d');
    	$summary->update();

       $date =   'BP1 sent:'.date_format(date_create($summary->bt_payment_reminder_mail1),'d-m-y');
      return response()->json(['status'=>true,'date'=>$date]);
       return redirect()->back()->with('success','Bank Transfer Payment Reminder 1 - sent Successfully');
    }


                public function btPaymentReminder2($id)
    {
    	$summary = Summary::with('order_details')->find($id);
  		   $bank_detail = BankDetail::where('c_5_1_s_no','BD-1')->first();

  		$data['cc'] = env('MAIL_CC');
      $data['invoice'] = $summary->c_14_2_online_invoice_no;
  		$data['to'] = $summary->c_14_9_login_email ;
           Mail::send('mails.mail_10_bt_payment_reminder_mail_bp2', compact('summary','bank_detail'), function($message) use ($data) {
         $message->to($data['to'])->cc($data['cc'])->from('info@911globalmeds.com', '911globalmeds.com 💊')->subject($data['invoice'] .' : Second Reminder for Bank Transfer Payment ');
      });
 
    	$summary->bt_payment_reminder_mail2 = date('Y-m-d');
    	$summary->update();

       $date =   'BP2 sent:'.date_format(date_create($summary->bt_payment_reminder_mail2),'d-m-y');
      return response()->json(['status'=>true,'date'=>$date]);
       return redirect()->back()->with('success','Bank Transfer Payment Reminder 2 - sent Successfully');
    }

            public function btPaymentThanks($id)
    {
    	$summary = Summary::with('order_details')->find($id);

         if(!$summary->c_14_96_forex_received || !$summary->c_14_97_received_on_date){
            return response()->json(['status'=>false,'error'=>'Please FILL/SAVE Forex Received & Forex Received Date']);
      }
    	$summary->bt_payment_thanks_mail = date('Y-m-d');

    	$summary = Summary::with('order_details')->find($id);
  		   $bank_detail = BankDetail::where('c_5_1_s_no','BD-1')->first();

  		$data['cc'] = env('MAIL_CC');
      $data['invoice'] = $summary->c_14_2_online_invoice_no;
  		$data['to'] = $summary->c_14_9_login_email ;
             Mail::send('mails.mail_11_bt_payment_thanks_mail_bpt', compact('summary','bank_detail'), function($message) use ($data) {
         $message->to($data['to'])->cc($data['cc'])->from('info@911globalmeds.com', '911globalmeds.com 💊')->subject($data['invoice'] .' : Receipt of Bank Transfer Payment ');
      });
   
    	$summary->bt_payment_thanks_mail = date('Y-m-d');
    	$summary->update();

       $date =   'BPT sent:'.date_format(date_create($summary->bt_payment_thanks_mail),'d-m-y');
      return response()->json(['status'=>true,'date'=>$date]);
       return redirect()->back()->with('success','Bank Transfer Payment Thanks - sent Successfully');
    }

               public function shipmentMail($id)
    {

    	$summary = Summary::with('order_details')->find($id);
        if(!$summary->c_14_116_carrier || !$summary->c_14_117_tracking_no || !$summary->c_14_118_tracking_url || !$summary->c_14_115_parcel_shipment_date){
            return response()->json(['status'=>false,'error'=>'Please FILL/SAVE Shipment Date, Carrier,Tracking no. & Tracking Url']);
      }
  		   $bank_detail = BankDetail::where('c_5_1_s_no','BD-1')->first();

  		$data['cc'] = env('MAIL_CC');
      $data['invoice'] = $summary->c_14_2_online_invoice_no;
  		$data['to'] = $summary->c_14_9_login_email ;
                   Mail::send('mails.mail_12_shipment_mail_s', compact('summary','bank_detail'), function($message) use ($data) {
         $message->to($data['to'])->cc($data['cc'])->from('info@911globalmeds.com', '911globalmeds.com 💊')->subject($data['invoice'] .' : Tracking Details for your Medicines Order  ');
      });
   
    	$summary->shipment_mail = date('Y-m-d');
    	$summary->update();

       $date =   'S sent:'.date_format(date_create($summary->shipment_mail),'d-m-y');
      return response()->json(['status'=>true,'date'=>$date]);
       return redirect()->back()->with('success','Bank Transfer Payment Thanks - sent Successfully');
    }


               public function arrivalMail($id)
    {

    	$summary = Summary::with('order_details')->find($id);

        if(!$summary->for_arrival_date){
            return response()->json(['status'=>false,'error'=>'Please FILL/SAVE Foreign Arrival Date']);
      }
  		   $bank_detail = BankDetail::where('c_5_1_s_no','BD-1')->first();

  		$data['cc'] = env('MAIL_CC');
      $data['invoice'] = $summary->c_14_2_online_invoice_no;
  		$data['to'] = $summary->c_14_9_login_email ;
      $data['country'] = $summary->c_14_29_receiver_country  ??'';
                 Mail::send('mails.mail_13_foreign_arrival_mail_f', compact('summary','bank_detail'), function($message) use ($data) {
         $message->to($data['to'])->cc($data['cc'])->from('info@911globalmeds.com', '911globalmeds.com 💊')->subject($data['invoice'] .' : Your Medicines Parcel has arrived at '.$data['country'].' Customs  ');
      });
   
    	$summary->foreign_arrival_mail = date('Y-m-d');
    	$summary->update();

       $date =   'F sent:'.date_format(date_create($summary->foreign_arrival_mail),'d-m-y');
      return response()->json(['status'=>true,'date'=>$date]);
       return redirect()->back()->with('success','Bank Transfer Payment Thanks - sent Successfully');
    }


               public function customMail($id)
    {
    	$summary = Summary::with('order_details')->find($id);
         if(!$summary->customs_cl_date){
            return response()->json(['status'=>false,'error'=>'Please FILL/SAVE Customs Clearance Date']);
      }
  		   $bank_detail = BankDetail::where('c_5_1_s_no','BD-1')->first();

  		$data['cc'] = env('MAIL_CC');
      $data['invoice'] = $summary->c_14_2_online_invoice_no;
  		$data['to'] = $summary->c_14_9_login_email ;
          Mail::send('mails.mail_14_custom_clearance_mail_c', compact('summary','bank_detail'), function($message) use ($data) {
         $message->to($data['to'])->cc($data['cc'])->from('info@911globalmeds.com', '911globalmeds.com 💊')->subject($data['invoice'] .' : Customs Clearance of your medicines parcel ');
      });
    	$summary->custom_clearance_mail = date('Y-m-d');
    	$summary->update();

       $date =   'C sent:'.date_format(date_create($summary->custom_clearance_mail),'d-m-y');
      return response()->json(['status'=>true,'date'=>$date]);
       return redirect()->back()->with('success','Custom Clearance Mail - sent Successfully');
    }


               public function deliveryMail($id)
    {
    	$summary = Summary::with('order_details')->find($id);
        if(!$summary->c_14_124_delivered_date ){
            return response()->json(['status'=>false,'error'=>'Please FILL/SAVE Parcel Delivey Date']);
      }
  		   $bank_detail = BankDetail::where('c_5_1_s_no','BD-1')->first();

  		$data['cc'] = env('MAIL_CC');
      $data['invoice'] = $summary->c_14_2_online_invoice_no;
  		$data['to'] = $summary->c_14_9_login_email ;
            Mail::send('mails.mail_15_delivered_mail_d', compact('summary','bank_detail'), function($message) use ($data) {
         $message->to($data['to'])->cc($data['cc'])->from('info@911globalmeds.com', '911globalmeds.com 💊')->subject($data['invoice'] .' : Parcel Delivered / Feedback requested ');
      });
   
    	$summary->delivered_mail = date('Y-m-d');
    	$summary->update();

       $date =   'D sent:'.date_format(date_create($summary->delivered_mail),'d-m-y');
      return response()->json(['status'=>true,'date'=>$date]);
       return redirect()->back()->with('success','Delivey Mail - sent Successfully');
    }

               public function reviewMailR1($id)
    {
    	$summary = Summary::with('order_details')->find($id);
  		   $bank_detail = BankDetail::where('c_5_1_s_no','BD-1')->first();

  		$data['cc'] = env('MAIL_CC');
      $data['invoice'] = $summary->c_14_2_online_invoice_no;
  		$data['to'] = $summary->c_14_9_login_email ;
             Mail::send('mails.mail_16_reviews_mail_r1', compact('summary','bank_detail'), function($message) use ($data) {
         $message->to($data['to'])->cc($data['cc'])->from('info@911globalmeds.com', '911globalmeds.com 💊')->subject($data['invoice'] .' : Reviews requested on the medicines delivered to you ');
	      });
   
    	$summary->reviews_mail1 = date('Y-m-d');
    	$summary->update();

       $date =   'R1 sent:'.date_format(date_create($summary->reviews_mail1),'d-m-y');
      return response()->json(['status'=>true,'date'=>$date]);
       return redirect()->back()->with('success','Review Remainder 1 - sent Successfully');
    }


               public function reviewMailR2($id)
    {
    	$summary = Summary::with('order_details')->find($id);
  		   $bank_detail = BankDetail::where('c_5_1_s_no','BD-1')->first();

  		$data['cc'] = env('MAIL_CC');
  		$data['to'] = $summary->c_14_9_login_email ;
      $data['invoice'] = $summary->c_14_2_online_invoice_no;
      
	            Mail::send('mails.mail_17_reviews_mail_r2', compact('summary','bank_detail'), function($message) use ($data) {
         $message->to($data['to'])->cc($data['cc'])->from('info@911globalmeds.com', '911globalmeds.com 💊')->subject($data['invoice'] .' :  Reviews / Testimonials requested ');
	      });
   
    	$summary->reviews_mail2 = date('Y-m-d');
    	$summary->update();

       $date =   'R2 sent:'.date_format(date_create($summary->reviews_mail2),'d-m-y');
      return response()->json(['status'=>true,'date'=>$date]);
       return redirect()->back()->with('success','Review Remainder 2 - sent Successfully');
    }


                 public function refillMailR1($id)
    {
    	$summary = Summary::with('order_details')->find($id);
  		   $bank_detail = BankDetail::where('c_5_1_s_no','BD-1')->first();

  		$data['cc'] = env('MAIL_CC');
  		$data['to'] = $summary->c_14_9_login_email ;
      $data['invoice'] = $summary->c_14_2_online_invoice_no;
      
	              Mail::send('mails.mail_18_refil_reminder_mail_1_rr1', compact('summary','bank_detail'), function($message) use ($data) {
        			 $message->to($data['to'])->cc($data['cc'])->from('info@911globalmeds.com', '911globalmeds.com 💊')->subject($data['invoice'] .' : Refill Reminder for your medicines ');
	      });;
   
    	$summary->refil_reminder_mail1 = date('Y-m-d');
    	$summary->update();
       return redirect()->back()->with('success','Refill Remainder 1- sent Successfully');
    }

       public function refillMailR2($id)
    {
    	$summary = Summary::with('order_details')->find($id);
  		   $bank_detail = BankDetail::where('c_5_1_s_no','BD-1')->first();

  		$data['cc'] = env('MAIL_CC');
  		$data['to'] = $summary->c_14_9_login_email ;
      $data['invoice'] = $summary->c_14_2_online_invoice_no;
      
	                Mail::send('mails.mail_19_refil_reminder_mail_2_rr2', compact('summary','bank_detail'), function($message) use ($data) {
         $message->to($data['to'])->cc($data['cc'])->from('info@911globalmeds.com', '911globalmeds.com 💊')->subject($data['invoice'] .' : Your medicines are due for a Refill ');
	      });
   
    	$summary->refil_reminder_mail2 = date('Y-m-d');
    	$summary->update();
       return redirect()->back()->with('success','Refill Remainder 2 - sent Successfully');
    }

        public function refillMailR3($id)
    {
    	$summary = Summary::with('order_details')->find($id);
  		   $bank_detail = BankDetail::where('c_5_1_s_no','BD-1')->first();

  		$data['cc'] = env('MAIL_CC');
  		$data['to'] = $summary->c_14_9_login_email ;
      $data['invoice'] = $summary->c_14_2_online_invoice_no;
      
	               Mail::send('mails.mail_20_refil_reminder_mail_3_rr3', compact('summary','bank_detail'), function($message) use ($data) {
         $message->to($data['to'])->cc($data['cc'])->from('info@911globalmeds.com', '911globalmeds.com 💊')->subject($data['invoice'] .' : Your medicines Refill Order is Overdue  ');
	      });

   
    	$summary->refil_reminder_mail3 = date('Y-m-d');
    	$summary->update();
       return redirect()->back()->with('success','Refill Remainder 3 - sent Successfully');
    }
 

               public function referMail($id)
    {
      $summary = Summary::with('order_details')->find($id);
      $user  = User::where('id',$summary->user_id)->first();

      if($user) {

        if(!$user->wallet_id){
            return response()->json(['status'=>false,'error'=>'Create a Wallet Account First']);

        }
            $data['cc'] = env('MAIL_CC');
            $data['to'] = $summary->c_14_9_login_email ;
            $data['subject'] ='Welcome to Refer-a-Friend Benefits – a/c  '.$user->wallet_id;
            
                    Mail::send('mails.mail_25_refer_friend', compact('user'), function($message) use ($data) {
               $message->to($data['to'])->cc($data['cc'])->from('info@911globalmeds.com', '911globalmeds.com 💊')->subject($data['subject']);
              });
         
            $summary->mail_refer_friend = date('Y-m-d');
            $summary->update();

             $date =   'R-a-F sent:'.date_format(date_create($summary->mail_refer_friend),'d-m-y');
            return response()->json(['status'=>true,'date'=>$date]);
             return redirect()->back()->with('success','Refer Friend Mail - sent Successfully');

      }  else {
            return response()->json(['status'=>false,'error'=>'User not exist']);

      }
    }

}
