<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\WalletTransaction;
use App\Models\PromoDiscount;
use App\Models\Summary;
use Auth,Mail;
class WalletTransactionController extends Controller
{
    

    public function index()
    {
    	$wallet_transcations = WalletTransaction::get();
    	return view('aadhya.wallet',compact('wallet_transcations'));
    }

	public function createRefer(User $user)
	{

		$wallet_id  = 	'B'.($user->id+108).'-'.bin2hex(random_bytes(6));
		if($user->wallet_id){
				return redirect()->back()->with('error','Wallet id is already created');
			}	

		$counpon  = 	'B'.($user->id+108).'-'.bin2hex(random_bytes(4));
		$user->wallet_id = $wallet_id;
		$user->coupon_code = $counpon;
		$user->update();

		  $promodiscount = new PromoDiscount;

		$futureDate=date('Y-m-d', strtotime('+1 year'));
        $promodiscount->c_12_2_coupon_code = $counpon;
        $promodiscount->c_12_3_min_order_value = 0;
        $promodiscount->c_12_4_discount_amt = 25;
        $promodiscount->c_12_5_issued_on = date('Y-m-d');
        $promodiscount->c_12_6_valid_till_date =$futureDate;
        $promodiscount->c_12_9_no_of_uses = 100;
        $promodiscount->c_12_8_issued_agent_email = $user->email;
        $promodiscount->save();

	return redirect()->back()->with('success','Wallet is successfully created ');
} 


public function withDraw(Request $request)
{

	$user = User::find(Auth::id());
	$order = Summary::where('c_14_2_online_invoice_no',$request->order_id)->where('user_id',$user->id)->first();
	if(!$order){
		return redirect()->back()->with('error','This Invoice no. is not permitted for this Wallet Discount.');

	}

	if($order->transaction_type && $order->wallet_amount){
		return redirect()->back()->with('error','A Wallet Discount has already applied for this Invoice no.');

	}
	if($user->balance < $request->amount){
		return redirect()->back()->with('error','The Amount Exceeds Your Current Wallet Balance.');
	}
	$walletTransaction = new WalletTransaction;
	$walletTransaction->user_id =$user->id;
	$walletTransaction->wallet_id =$user->wallet_id;
	$walletTransaction->order_id =$order->id;
	$walletTransaction->invoice_no = $request->order_id;
	$walletTransaction->wallet_discount =$request->amount;
	$walletTransaction->save();
		$user->balance -= $request->amount;
              $user->update();

   $data['cc'] = env('MAIL_CC');
            
            $data['to'] = $user->email ;

          $data['subject'] ='Deduct Wallet Balance as Cash-Back : Ref. '.$walletTransaction->wallet_id;
          	$wallet_transaction = $walletTransaction;
      Mail::send('mails.mail_24_referrals', compact('wallet_transaction'), function($message) use ($data) {
         $message->to($data['to'])->cc($data['cc'])->from('info@911globalmeds.com', '911globalmeds.com 💊')->subject($data['subject']);
      });

	return redirect()->back()->with('success','We are processing your “Wallet Balance” Discount and will send you a Confirmation Mail soon ! ');

}

public function walletStatus($id,$type)
{	
	$walletTransaction = WalletTransaction::findOrFail($id);
	$summary = Summary::findOrFail($walletTransaction->order_id);
	$user = User::findOrFail($walletTransaction->user_id);
	if($type =='accept'){
		  
      	$summary->c_14_75_coupon_code_used = $walletTransaction->wallet_id;
      	$coupon = $walletTransaction->wallet_discount;
      	$summary->c_14_76_promo_discount = $walletTransaction->wallet_discount;

      if($summary->c_14_93_pay_mode=='Credit Card'){
             $summary->c_14_79_semi_total_amount = $summary->c_14_74_total_order_value + $summary->c_14_77_shipping_charges - $coupon;
            $summary->c_14_82_credit_card_processing_fees =  round(($summary->c_14_79_semi_total_amount)*0.1);
          $summary->c_14_84_total_amount = $summary->c_14_79_semi_total_amount + $summary->c_14_82_credit_card_processing_fees;
      } else {
             $summary->c_14_79_semi_total_amount = $summary->c_14_74_total_order_value +$summary->c_14_77_shipping_charges  - $coupon;
          $summary->c_14_84_total_amount = $summary->c_14_79_semi_total_amount ;
      }

      $summary->c_14_95_amount = round($summary->c_14_84_total_amount*$summary->conversion_usd_to_forex_rate);
      $summary->c_14_100_usd_bal_due = round(($summary->c_14_95_amount - $summary->c_14_96_forex_received)*$summary->c_14_98_conversion_forex_to_usd_rate) ;
      $summary->c_14_99_usd_received =  round($summary->c_14_96_forex_received*$summary->conversion_usd_to_forex_rate);
      $summary->forex_gain_loss =  round($summary->c_14_84_total_amount- $summary->c_14_99_usd_received);
  
  		$summary->transaction_type = 'DEBIT';
  		$summary->wallet_amount = $coupon;
          $walletTransaction->status = 'Accepted';
           $summary->update();
          $walletTransaction->update();
		return redirect()->back()->with('success','This WalletTransaction is successfully Accepted ');
	}

	if($type =='reject'){
          $walletTransaction->status = 'Rejected';
          $user->balance += $walletTransaction->wallet_discount;
          $walletTransaction->update();
          $user->update();
		return redirect()->back()->with('success','This WalletTransaction is successfully Rejected');
	}


}

}
