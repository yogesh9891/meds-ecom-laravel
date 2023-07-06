<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Summary;
use App\Models\OrderDetail;
use App\Models\CountryFreight;
use App\Models\BankDetail;
use App\Models\MedsForex;
use App\Models\PromoDiscount;
use App\Models\User;
use Str,Auth,Session,Mail;
class OrderController extends Controller
{
    public function proccedDeliver(Request $request)
    { 
      $url = '';
      if(!isset($request->summary_url) && empty($request->summary_url)){
        $user_id =Auth::id();

      $old_summary = Summary::where('user_id',$user_id)->whereNotNull('c_14_93_pay_mode')->latest()->first();
    	$summary =  new Summary ;
    	$summary->user_id = Auth::id() ;
    	$summary->c_14_9_login_email = Auth::user()->email;
      $summary->c_14_90_email_address = Auth::user()->email;
    	$summary->c_14_85_refil_after_days = $request->days;
    	$summary->arrival_country = $request->country;
      $summary->c_14_29_receiver_country = $request->country;
      // dd($request->country,$old_summary->arrival_country);
      if($old_summary && ($request->country ==$old_summary->arrival_country)){
      $summary->c_14_22_parcel_receivers_full_name = $old_summary->c_14_22_parcel_receivers_full_name;
      $summary->c_14_23_receiver_relation_patient = $old_summary->c_14_23_receiver_relation_patient ;
      $summary->c_14_24_receiver_address_line_1 = $old_summary->c_14_24_receiver_address_line_1;
      $summary->c_14_25_receiver_address_line_2 = $old_summary->c_14_25_receiver_address_line_2;
          $summary->c_14_26_receiver_city = $old_summary->c_14_26_receiver_city;
          $summary->c_14_27_receiver_state = $old_summary->c_14_27_receiver_state;
          $summary->c_14_28_receiver_zip = $old_summary->c_14_28_receiver_zip;
          $summary->c_14_30_receiver_mobile = $old_summary->c_14_30_receiver_mobile;
          $summary->c_14_19_patient_name = $old_summary->c_14_19_patient_name;
          $summary->c_14_20_patient_sex  = $old_summary->c_14_20_patient_sex;
          $summary->c_14_21_patient_age  = $old_summary->c_14_21_patient_age;
          $summary->c_14_10_payer_full_name = $old_summary->c_14_10_payer_full_name;
          $summary->c_14_11_patient_relation_payer = $old_summary->c_14_11_patient_relation_payer;
          $summary->c_14_12_payer_address_line_1 = $old_summary->c_14_12_payer_address_line_1;
          $summary->c_14_13_payer_address_line_2   = $old_summary->c_14_13_payer_address_line_2;
          $summary->c_14_14_pay_city = $old_summary->c_14_14_pay_city;
          $summary->c_14_15_payer_state = $old_summary->c_14_15_payer_state;
          $summary->c_14_16_payer_zip = $old_summary->c_14_16_payer_zip;
          $summary->c_14_17_payer_country = $old_summary->c_14_17_payer_country;
          $summary->c_14_18_payer_mobile = $old_summary->c_14_18_payer_mobile;
          $summary->is_old = 1;
        }


    	// $url = strtolower(base64_encode(time()));
      $url = date('md').'-'.bin2hex(random_bytes(6));
    	$summary->c_14_4_cart_url = $url;
      $condition = \Cart::getCondition('coupon');
      if($condition){
        $subtotal = \Cart::getSubTotal();
               // $summary->c_14_74_total_summary_value = ($subtotal -  $condition->getValue() );
                    $summary->c_14_75_coupon_code_used =  $condition->getType();
                     $summary->c_14_76_promo_discount =   $condition->getValue();
      } 
      	$summary->c_14_74_total_order_value = \Cart::getTotal();
      $summary->checkout_step = 2;

    	$summary->save();
    
    	  $cartItems = \Cart::getContent();
    	  foreach ($cartItems as $key => $cart) {
	    	$ordrerDetails = new OrderDetail;

	    	$ordrerDetails->order_id = $summary->id;
        $ordrerDetails->cart_id = $cart->id;
        $ordrerDetails->product_id = $cart->attributes->model['c_2_2_2_product_no'];
        $ordrerDetails->med_type = $cart->attributes->type;
	    	$ordrerDetails->c_14_34_medicine_no = $cart->attributes->sku;
	    	$ordrerDetails->c_14_35_description = $cart->name;
	    	$ordrerDetails->c_14_36_quantity_pack = $cart->attributes->pack;
	    	$ordrerDetails->c_14_37_net_price_pack = $cart->price;
	    	$ordrerDetails->c_14_41_total_amount = $cart->price*$cart->quantity;
	    	$ordrerDetails->c_14_39_total_quantity = $cart->quantity;
	    	$ordrerDetails->c_14_38_no_of_packs = $cart->attributes->multiply;
	    	$ordrerDetails->c_14_40_medicine_form = $cart->attributes->unit;
	    	$ordrerDetails->save();
          Session::put('cart_url', $url);
            Session::put('order_id', $summary->id);

      }

      } else {
        $url =$request->summary_url;
        $summary = Summary::where('c_14_4_cart_url',$url)->first();
        $summary->c_14_85_refil_after_days = $request->days;
        if($summary->arrival_country && ($request->country !=$summary->arrival_country)){
             $summary->c_14_22_parcel_receivers_full_name = null;
            $summary->c_14_23_receiver_relation_patient = null;
            $summary->c_14_24_receiver_address_line_1 =null;
           $summary->c_14_25_receiver_address_line_2 = null;
          $summary->c_14_26_receiver_city = null;
          $summary->c_14_27_receiver_state =null;
          $summary->c_14_28_receiver_zip = null;
          $summary->c_14_30_receiver_mobile =null;
          $summary->c_14_19_patient_name = null;
          $summary->c_14_20_patient_sex  = null;
          $summary->c_14_21_patient_age  = null;
        }


         $summary->arrival_country = $request->country;
        $summary->c_14_29_receiver_country = $request->destination_country;
        $summary->checkout_step = 2;
         $summary->update();
         $url = $summary->c_14_4_cart_url;
      }


    	return redirect()->route('cart.order',$url);
    }

    public function removeOrderDetails(Request $request)
    {
      $id = $request->id;
        $ordrerDetails =  OrderDetail::findOrFail($id);
       $amount =  $ordrerDetails->c_14_41_total_amount;
       $order = Summary::find($ordrerDetails->order_id);
       $order->c_14_74_total_order_value -= $amount;
       $order->update();
        \Cart::remove($ordrerDetails->cart_id);
        $ordrerDetails->delete();
          $cartItems = \Cart::getContent();

           if($cartItems->count() ==0){
            Session::forget('cart_url');
            Session::forget('order_id');
           \Cart::clearCartConditions();

        }
        return redirect()->back();
      
    }

         public function updateOrderDetails(Request $request)
    {
       
        $ordrerDetails =  OrderDetail::findOrFail($request->id);
        $totalAmount= $ordrerDetails->c_14_37_net_price_pack*$request->qty;
          $amount =  $ordrerDetails->c_14_41_total_amount ;
          $ordrerDetails->c_14_41_total_amount = $totalAmount;
          $ordrerDetails->c_14_39_total_quantity = $request->qty;
       $order = Summary::find($ordrerDetails->order_id);
       $order->c_14_74_total_order_value += ($totalAmount -$amount);
       $ordrerDetails->update();
       $order->update();
       $data['price'] = $ordrerDetails->c_14_37_net_price_pack;
       $data['quantity'] = $ordrerDetails->c_14_39_total_quantity;
       $data['total_amount'] = $ordrerDetails->c_14_41_total_amount;
       $data['total'] = $order->c_14_74_total_order_value;
       $data['status'] = true;

        \Cart::update(
            $ordrerDetails->cart_id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->qty
                ],
            ]
        );
       // $data = json_encode($data,true);

        return response()->json($data);
}

    public function orderCart($url)
    {
    	$summary =Summary::with('order_details','country','order_details.meds_price','payment_country')->where('c_14_4_cart_url',$url)->firstOrFail();

      if($summary->c_14_93_pay_mode){

             Session::forget('cart_url');
             Session::forget('order_id');
      \Cart::clearCartConditions();

       
        $home_url = url('/');

        echo '<script>alert("This order has already been placed. You are being redirected to HOME page."); location.href="'.$home_url.'";</script>';
        return false;
        // return redirect('/');
      }
      if(!Auth::user()){
          $this->addOrderIntoCart($summary);
      }
          $countries = CountryFreight::get();
          if(!Session::get('cart_url')){
             Session::put('cart_url', $url);
             Session::put('order_id', $summary->id);

          }

          $condition = \Cart::getCondition('coupon');
          if($condition && Auth::user() && $condition->getValue() == Auth::user()->coupon_code){
            \Cart::clearCartConditions();

          }
        return view('front.checkout', compact('summary','countries'));
    }

    public function addOrderIntoCart($summary)
    {
      $user = User::find($summary->user_id);
       Auth::login($user, true);
        $ordrerDetails = $summary->order_details;
        foreach ($ordrerDetails as $key => $order_detail) {
          if($order_detail->cart_id){

           \Cart::add([
            'id' => $order_detail->cart_id,
            'name' => $order_detail->c_14_35_description,
            'price' => $order_detail->c_14_37_net_price_pack,
            'quantity' => $order_detail->c_14_39_total_quantity,
        ]);
          }
        }

        return true;
    }

    public function proceedBiling(Request $request,Summary $summary)
    {
    	$summary->c_14_22_parcel_receivers_full_name = $request->parcel_name;
    	$summary->c_14_23_receiver_relation_patient = $request->patient_relationship ;
    	$summary->c_14_24_receiver_address_line_1 = $request->address1;
    	$summary->c_14_25_receiver_address_line_2 = $request->address2;
    	$summary->c_14_26_receiver_city = $request->city;
          // $summary->c_14_11_patient_relation_payer = null;

    	$summary->c_14_27_receiver_state = $request->state;
    	$summary->c_14_28_receiver_zip = $request->zip;
    	$summary->c_14_30_receiver_mobile = $request->patient_phone;
    	$summary->c_14_19_patient_name = $request->patient_name;
    	$summary->c_14_20_patient_sex	 = $request->gender;
    	$summary->c_14_21_patient_age	 = $request->age;
      $summary->c_14_29_receiver_country = $request->destination_country;
      
    	if($request->is_billing){

    	$summary->c_14_10_payer_full_name = $request->parcel_name;
      // $summary->c_14_11_patient_relation_payer = $request->patient_relationship;
      if($request->parcel_name == $request->patient_name ){
         	$summary->c_14_11_patient_relation_payer = 'Self';
      }
    	$summary->c_14_12_payer_address_line_1 = $request->address1;
    	$summary->c_14_13_payer_address_line_2	 = $request->address2;
    	$summary->c_14_14_pay_city = $request->city;
    	$summary->c_14_15_payer_state = $request->state;
    	$summary->c_14_16_payer_zip = $request->zip;
    	$summary->c_14_17_payer_country = $summary->country->c_4_1_2_country_name;
    	$summary->c_14_18_payer_mobile = $request->patient_phone;
    	$summary->c_14_19_patient_name = $request->patient_name;
      $summary->is_old=0;
      $summary->update();

        // return redirect()->route('cart.order',[$summary->c_14_4_cart_url,'s=4']);
    	} else {
        if(!$summary->c_14_22_parcel_receivers_full_name && !$summary->c_14_26_receiver_city){
            $user_id =Auth::id();
           $old_summary = Summary::where('user_id',$user_id)->whereNotNull('c_14_93_pay_mode')->latest()->first();
      // dd($summary->arrival_country,$old_summary->arrival_country);
              if($old_summary && ($summary->c_14_17_payer_country ==$old_summary->c_14_17_payer_country)){
        $summary->c_14_10_payer_full_name = $old_summary->c_14_10_payer_full_name;
          $summary->c_14_11_patient_relation_payer = $old_summary->c_14_11_patient_relation_payer;
          $summary->c_14_12_payer_address_line_1 = $old_summary->c_14_12_payer_address_line_1;
          $summary->c_14_13_payer_address_line_2   = $old_summary->c_14_13_payer_address_line_2;
          $summary->c_14_14_pay_city = $old_summary->c_14_14_pay_city;
          $summary->c_14_15_payer_state = $old_summary->c_14_15_payer_state;
          $summary->c_14_16_payer_zip = $old_summary->c_14_16_payer_zip;
          $summary->c_14_17_payer_country = $old_summary->c_14_17_payer_country;
          $summary->c_14_18_payer_mobile = $old_summary->c_14_18_payer_mobile;

        } else {

      $summary->c_14_10_payer_full_name = null;
      $summary->c_14_12_payer_address_line_1 =null;
      $summary->c_14_13_payer_address_line_2   =null;
      $summary->c_14_11_patient_relation_payer = null;

      $summary->c_14_14_pay_city = null;
      $summary->c_14_15_payer_state = null;
      $summary->c_14_16_payer_zip = null;
      $summary->c_14_17_payer_country =null;
      $summary->c_14_18_payer_mobile = null;
      }

    }
      }
        $summary->checkout_step = 3;

      $forex = MedsForex::first();
      $doller = $forex->c_2_3_2_fx_rate_1;
      $charges = round($summary->country->c_4_1_10_dif_freight_chg_inr/$doller);
      
           if($summary->country->c_4_1_14_show_single_freight == 'Y'){

        $charges = round($summary->country->c_4_1_13_single_freight/$doller);
      }
      $summary->c_14_77_shipping_charges = $charges;

      $summary->update();

    	
    	return redirect()->route('cart.order',$summary->c_14_4_cart_url);


    }

    public function proceedPay(Request $request, Summary $summary)
    {
    	 $summary->c_14_10_payer_full_name = $request->pay_name;
    	$summary->c_14_11_patient_relation_payer = $request->pay_patient_relationship;
    	$summary->c_14_12_payer_address_line_1 = $request->pay_address1;
    	$summary->c_14_13_payer_address_line_2	 = $request->pay_address2;
    	$summary->c_14_14_pay_city = $request->pay_city;
    	$summary->c_14_15_payer_state = $request->pay_state;
    	$summary->c_14_16_payer_zip = $request->pay_zip;
    	$summary->c_14_17_payer_country = $request->pay_country;
     
    	$summary->c_14_18_payer_mobile = $request->pay_phone;
        $summary->checkout_step = 4;

       	$summary->update();
    	
    	return redirect()->route('cart.order',$summary->c_14_4_cart_url);
    }

    public function proceedOrder(Request $request,Summary $summary)
    {


       $data =   $this->validate($request,[
            'captcha' => 'required|captcha'
        ],['recaptcha' =>'Enable Captcha from the Checkbox - “I’m not a Robot”']);
       
      $forex = MedsForex::first();
      $bank_detail = BankDetail::where('c_5_1_s_no','BD-1')->first();
         $country_frieght   =CountryFreight::where('c_4_1_2_country_name',$summary->c_14_17_payer_country)->first();
          if($country_frieght){
            $bank = BankDetail::where('c_5_2_company_code',$country_frieght->c_4_1_6_priority_display)->first();
            if($bank){
              $bank_detail = $bank;
              $summary->bank_branch_code = $bank->c_5_6_bank_branch_code;
              $summary->bank_company_code = $bank->c_5_2_company_code;
            }
          }
      $doller = $forex->c_2_3_2_fx_rate_1;
    	$summary->c_14_93_pay_mode = $request->payment;
       $latest_summary = Summary::whereNotNull('c_14_2_online_invoice_no')->latest()->first();
       if($latest_summary){
          $summary->c_14_2_online_invoice_no = ($latest_summary->c_14_2_online_invoice_no+1);

       } else {
          $summary->c_14_2_online_invoice_no = 200108;

       }
      $summary->c_14_86_cc_name = $request->cc_name;
      $summary->c_14_88_cc_state = $request->cc_state;
      $summary->c_14_94_forex_currency = $bank_detail->c_5_11_currency;
      $summary->conversion_usd_to_forex_rate = $bank_detail->c_5_12_usd_rate ?? 1;
      $summary->c_14_98_conversion_forex_to_usd_rate = round(1/$summary->conversion_usd_to_forex_rate,8);
    	$summary->c_14_31_end_use_selected = $request->doctorcheck ?? '';
      $charges = round($summary->country->c_4_1_10_dif_freight_chg_inr/$doller);

      $p = 'p=1';
      if($summary->country->c_4_1_14_show_single_freight == 'Y'){

        $charges = round($summary->country->c_4_1_13_single_freight/$doller);
      }
      $summary->c_14_77_shipping_charges = $charges;

      $coupon_total = 0;
        $condition = \Cart::getCondition('coupon');

      if($condition){
        $subtotal = $summary->c_14_74_total_order_value;
               // $summary->c_14_74_total_summary_value = ($subtotal -  $condition->getValue() );
                    $summary->c_14_75_coupon_code_used =  $condition->getType();
                     $summary->c_14_76_promo_discount =   $condition->getValue();
                     $coupon_total =  $condition->getValue();
               $promo_discount = PromoDiscount::where('c_12_2_coupon_code',$condition->getType())->first();
               if($promo_discount){ 
                  $promo_discount->c_12_10_times_used =  $promo_discount->c_12_10_times_used+1;
                  $promo_discount->update();
               } 

      \Cart::clearCartConditions();

      } 

      if($request->payment=='Credit Card'){
             // $summary->c_14_84_total_amount = $summary->c_14_74_total_order_value + $summary->c_14_82_credit_card_processing_fees;
             $summary->c_14_79_semi_total_amount = $summary->c_14_74_total_order_value + $charges - $coupon_total;
            $summary->c_14_82_credit_card_processing_fees =  round(($summary->c_14_79_semi_total_amount)*0.1);
          $summary->c_14_84_total_amount = $summary->c_14_79_semi_total_amount + $summary->c_14_82_credit_card_processing_fees;
          $summary->c_14_86_cc_name = $summary->c_14_10_payer_full_name;
          $summary->c_14_88_cc_state = $summary->c_14_15_payer_state.', '.$summary->c_14_17_payer_country;

             $p='p=99';
      } else {
             $summary->c_14_79_semi_total_amount = $summary->c_14_74_total_order_value + $charges - $coupon_total;
          $summary->c_14_84_total_amount = $summary->c_14_79_semi_total_amount ;
      }

      $summary->c_14_95_amount = round($summary->c_14_84_total_amount*$summary->conversion_usd_to_forex_rate);
      $summary->c_14_96_forex_received =0;
      $summary->c_14_100_usd_bal_due = round(($summary->c_14_95_amount - $summary->c_14_96_forex_received)*$summary->c_14_98_conversion_forex_to_usd_rate) ;
      $summary->c_14_99_usd_received =  round($summary->c_14_96_forex_received*$summary->conversion_usd_to_forex_rate);
      $summary->forex_gain_loss =  round($summary->c_14_84_total_amount- $summary->c_14_99_usd_received);
    	$image_url = '';
      $summary->c_14_80_convert_payment_mode= 'Advance';
    	   if($request->hasFile('prescription')){
               $image = $summary->c_14_2_online_invoice_no.'-'.bin2hex(random_bytes(6)).'.'.$request->prescription->extension();
          $request->prescription->move(public_path('scripts'), $image);
          $image_url =asset('scripts/'.$image) ;
         $summary->c_14_32_doctor_prescription_url= $image;
      }
        $url = $summary->c_14_2_online_invoice_no.'-'.bin2hex(random_bytes(6));
        $url2 = $summary->c_14_2_online_invoice_no.'-'.bin2hex(random_bytes(6));
      $summary->c_14_6_proforma_invoice_url= $url;
      $summary->shipment_url= $url;
      $summary->c_14_8_excel_order_url= $url2;
          $summary->checkout_step = 5;
          $summary->proforma_invoice_mail = date('Y-m-d');
      $summary->update();
      \Cart::clear();


            $data['cc'] = env('MAIL_CC');
            $data['to'] = $summary->c_14_9_login_email ;
            $data['invoice'] = $summary->c_14_2_online_invoice_no ;

        Mail::send('mails.mail_4_proforma_order_mail_pi', compact('summary','bank_detail'), function($message) use ($data) {
         $message->to($data['to'])->cc($data['cc'])->from('info@911globalmeds.com', '911globalmeds.com 💊')->subject($data['invoice'] .' : Proforma Invoice for your Medicines Order' );
      });

       if(Session::get('cart_url')){
             Session::forget('cart_url');
             Session::forget('order_id');

          }


      return redirect()->route('cart.invoice',[$summary->c_14_6_proforma_invoice_url,$p]);

      return redirect()->route('my_account');
    	
    }
	
  public function performaInvoice($url)
    {
  	 	$summary =Summary::with('order_details')->where('c_14_6_proforma_invoice_url',$url)->firstOrFail();

         $bank_detail = BankDetail::where('c_5_1_s_no','BD-1')->first();
          $country_frieght   =CountryFreight::where('c_4_1_2_country_name',$summary->c_14_17_payer_country)->first();
          if($country_frieght){
            $bank = BankDetail::where('c_5_2_company_code',$country_frieght->c_4_1_6_priority_display)->first();
            if($bank){
              $bank_detail = $bank;
            }
          }
        return view('front.perfoma-invoice', compact('summary','bank_detail'));
  	}

     public function orderInvoice($url)
    {
      $summary =Summary::with('order_details')->where('c_14_7_order_invoice_url',$url)->firstOrFail();
          $bank_detail = BankDetail::where('c_5_1_s_no','BD-1')->first();
        return view('front.order-invoice', compact('summary','bank_detail'));
    }

    public function shippingUndertaking($url)
    {
            $summary =Summary::with('order_details')->where('shipment_url',$url)->firstOrFail();
            $country = '';
        return view('front.shipment_tracking', compact('summary','country'));
    }

        public function shippingUndertakingFromUrl($country,$url)
    {
          $url = $country.'/'.$url;
            $summary =Summary::with('order_details')->where('shipment_url',$url)->firstOrFail();
        return view('front.shipment_tracking', compact('summary','country'));
    }

    public function orderRefill()
    {
      if(Auth::user()){
        return redirect()->route('order.confirm');
      } else {
        return view('front.order_refill');
      }
    }


      public function orderConfirm()
    {
        $summary = Summary::where('user_id',Auth::id())->whereNotNull('c_14_7_order_invoice_url')->whereNotNull('c_14_2_online_invoice_no')->orderBy('id','desc')->first();
        return view('front.order_confirmation',compact('summary'));
    }


	
}
