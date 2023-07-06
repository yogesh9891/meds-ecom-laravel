<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MedsPrice;
use App\Models\Summary;
use App\Models\MedsForex;
use App\Models\CountryFreight;
use App\Models\OrderDetail;
use App\Models\PromoDiscount;
use Illuminate\Support\Str;
use Session,Auth;


class CartController extends Controller
{
    public function viewCart()
    {
   
    	  $cartItems = \Cart::getContent();
        $country_id = 0;
        if(Auth::user()){
          $old_summary = Summary::select('arrival_country')->where('user_id',Auth::id())->whereNotNull('c_14_93_pay_mode')->latest()->first();
          if($old_summary){
          $country_id = $old_summary->arrival_country;

          }
        }
        
          $countries = CountryFreight::where('c_4_1_5_delivery_address','Y')->get();


           if($cartItems->count() ==0){
            Session::forget('cart_url');
            Session::forget('order_id');
           \Cart::clearCartConditions();

        }
          if(Session::get('cart_url')){
            $url = Session::get('cart_url');
                 return redirect()->route('cart.order',$url);

          }
        return view('front.cart', compact('cartItems','countries','country_id'));
    }


    public function addToCart(Request $request)
    {   
          $cartItems = \Cart::getContent();
          

           if($cartItems->count() ==0){
            Session::forget('cart_url');
            Session::forget('order_id');
           \Cart::clearCartConditions();

        }
        if($cartItems->count() <5){


        $forex = MedsForex::first();
        $id = $request->id;
        $type = $request->type;
        $val = $request->val;
        $price = 0;
        $MedsPrice = MedsPrice::with('meds_name')->findOrFail($id);
        $multiply = 0;
        $discount = 0;
        $unit ='';
        $qty = 0;
        $image = '';
        $icon = '';
        $name = $MedsPrice->c_2_2_7_g_name_in_h3_tag;
        if($type =='g'){
        $qty = $MedsPrice->c_2_2_16_g_pack_1_qty;
        $price = $MedsPrice->c_2_2_18_g_pack_1_inr_price;
        $image = $MedsPrice->c_2_2_14_g_full_image;
        $icon = $MedsPrice->c_2_2_12_g_icon_image;
        $unit = $MedsPrice->c_2_2_17_g_unit;
            if($val ==1){
                $multiply = $MedsPrice->c_2_2_19_g_pp_x_1;
                $discount = $MedsPrice->c_2_2_22_g_disc_1;
            }elseif ($val==2) {
                $multiply = $MedsPrice->c_2_2_20_g_pp_x_2;
                $discount = $MedsPrice->c_2_2_23_g_disc_2;

            }elseif ($val==3) {
                $multiply = $MedsPrice->c_2_2_21_g_pp_x_3;
                $discount = $MedsPrice->c_2_2_24_g_disc_3;
            }
        }
        if($type =='b'){
        $qty = $MedsPrice->c_2_2_38_b_pack_1_qty;
        $price = $MedsPrice->c_2_2_40_b_pack_1_inr_price  ;
        $image = $MedsPrice->c_2_2_36_b_full_image;
        $unit = $MedsPrice->c_2_2_39_b_unit;
        $icon = $MedsPrice->c_2_2_34_b_icon_image;
        $name = $MedsPrice->c_2_2_29_b_name_in_h3_tag;	

             if($val ==1){
                $multiply = $MedsPrice->c_2_2_41_b_pp_x_1;
                $discount = $MedsPrice->c_2_2_44_b_disc_1   ;
            }elseif ($val==2) {
                $multiply = $MedsPrice->c_2_2_42_b_pp_x_2;
                $discount = $MedsPrice->c_2_2_45_b_disc_2;

            }elseif ($val==3) {
                $multiply = $MedsPrice->c_2_2_43_b_pp_x_3;
                $discount = $MedsPrice->c_2_2_46_b_disc_3;
            }
        }
        // dd($multiply,$price,$discount);
        $pack = $qty*$multiply;
        $price = round(($price*$multiply));
        $discount = round(($price*($discount/100)));
        $discount_price = round(($price-$discount)/$forex->c_2_3_2_fx_rate_1);
        // dd($multiply,$price,$discount,$forex->c_2_3_2_fx_rate_1,$discount_price);
        $cart_id = md5('medicine_id'.$MedsPrice->id.'-'.$multiply.$type);
       \Cart::add([
            'id' => md5('medicine_id'.$MedsPrice->id.'-'.$multiply.$type),
            'name' => $name,
            'price' => $discount_price,
            'quantity' => 1,
            'attributes' => array(
                'image' => $image,
                'type' => $type,
                'icon' => $icon,
                'pack' =>$pack,
                'unit' =>$unit,
                'multiply' =>$multiply,
                'sku'=>$MedsPrice->c_2_2_3_g_sku,
                'model' => $MedsPrice->toArray()
            )
        ]);

       if(Session::get('cart_url')){
             $order_id = Session::get('order_id');
                 $ordrerDetails = OrderDetail::where('order_id',$order_id)->where('cart_id',$cart_id)->first();
                $order = Summary::find($order_id);

             if($ordrerDetails){
                   $cart = \Cart::get($cart_id);

                $ordrerDetails->c_14_39_total_quantity = $cart->quantity;
                $ordrerDetails->c_14_41_total_amount = $cart->quantity*$cart->price;
                $ordrerDetails->update();

             }else {

            $ordrerDetails = new OrderDetail;
            $ordrerDetails->order_id = $order_id;
            $ordrerDetails->cart_id = $cart_id;
             $ordrerDetails->product_id = $MedsPrice->c_2_2_2_product_no;
             $ordrerDetails->med_type = $type;
            $ordrerDetails->c_14_34_medicine_no =$MedsPrice->c_2_2_3_g_sku;
            $ordrerDetails->c_14_35_description = $name;
            $ordrerDetails->c_14_36_quantity_pack = $pack;
            $ordrerDetails->c_14_37_net_price_pack = $discount_price;
            $ordrerDetails->c_14_41_total_amount = $discount_price*1;
            $ordrerDetails->c_14_39_total_quantity = 1;
            $ordrerDetails->c_14_38_no_of_packs = $multiply;
            $ordrerDetails->c_14_40_medicine_form = $unit;
            $ordrerDetails->save();
        }
                 $order->c_14_74_total_order_value = \Cart::getTotal();
                 $order->update();

       }

       // $cart_details =  new CartDetails;
       // $cart_details->cart_id =  $cart_id;
       // $cart_details->c_14_34_medicine_no =  $MedsPrice->c_2_2_1_generic_id_no;
       // $cart_details->c_14_35_description =  $name;
       // $cart_details->c_14_36_quantity_pack =  $pack.'-'.$val;
       // $cart_details->c_14_37_net_price_pack =  $\;
       // $cart_details->c_14_38_no_of_packs = 1;
       // $cart_details->c_14_39_total_quantity = 1;
       // $cart_details->c_14_39_total_quantity = $discount_price;
       // $cart_details->c_14_41_total_amount = $discount_price;
       // $cart_details->save();
        // session()->flash('success', 'Product is Added to Cart Successfully !');
                return response()->json(['msg'=>'Successfully','status'=>true]);
        } else {
                return response()->json(['msg'=>'Only 5 Medications are allowed in a single order.Please finalize the medications added to Cart and create a new order for further medications.','status'=>false]);
        }
    }

     public function removeCart(Request $request)
    {
        \Cart::remove($request->id);
        session()->flash('success', 'Item Cart Remove Successfully !');
          $cartItems = \Cart::getContent();

        if($cartItems->count() ==0){
            Session::forget('cart_url');
            Session::forget('order_id');
           \Cart::clearCartConditions();

        }

        return redirect()->route('cart_checkout');
    }

     public function updateCart(Request $request)
    {
        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->qty
                ],
            ]
        );

        $cart = \Cart::get($request->id);
        $total = \Cart::getTotal();

        return response()->json(['cart'=>$cart,'status'=>true,'total'=>$total]);

}


public function applyCoupon(Request $request)
{
      \Cart::clearCartConditions();
  
      $code  = $request->coupon;
     $promo_discount = PromoDiscount::where('c_12_2_coupon_code',$code)->first();

     if(!$promo_discount){
      return response()->json(['status'=>false,'msg'=>'Invalid Coupon']);
     }

     $today = \Carbon\Carbon::now();

     if($today->format('Y-m-d') > $promo_discount->c_12_6_valid_till_date){
       return response()->json(['status'=>false,'msg'=>' Coupon is Expired']);
     } 

     $subtotal = \Cart::getSubTotal();

     if($subtotal < $promo_discount->c_12_3_min_order_value){
       return response()->json(['status'=>false,'msg'=>' Minimum order value for this coupon is US$'.$promo_discount->c_12_3_min_order_value]);
     }

     if($promo_discount->c_12_10_times_used >= $promo_discount->c_12_9_no_of_uses){
       return response()->json(['status'=>false,'msg'=>' Coupon is no longer available']);
     } 

     if(Auth::user() && $promo_discount->c_12_10_times_used >= $code){
        $user = User::find(Auth::id());
        if($user->coupon_code == $code){
                 return response()->json(['status'=>false,'msg'=>'This PromoCode is not applicable for your own account']);
        }
     } 

      $condition = new \Darryldecode\Cart\CartCondition(array(
            'type' =>$promo_discount->c_12_2_coupon_code,
            'name' => 'coupon',
            'target' => 'product',
            'value' => $promo_discount->c_12_4_discount_amt
        ));

       if(Session::get('cart_url')){
             $order_id = Session::get('order_id');
                $order = Summary::find($order_id);
                $order->c_14_75_coupon_code_used = $promo_discount->c_12_2_coupon_code;
                $order->c_14_76_promo_discount =  $promo_discount->c_12_4_discount_amt;
                $order->update();

      }
\Cart::condition($condition);
      $coupon_result = [
        'name' =>$promo_discount->c_12_2_coupon_code,
         'value' => $promo_discount->c_12_4_discount_amt,
        'total'=> $subtotal,
        'discount_total'=> ($subtotal - $promo_discount->c_12_4_discount_amt),
      ];
       return response()->json(['status'=>true,'msg'=>' Coupon is applied','coupon'=>$coupon_result]);


}

}
