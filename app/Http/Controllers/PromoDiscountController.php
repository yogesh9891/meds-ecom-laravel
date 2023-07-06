<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PromoDiscount;

class PromoDiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promodiscounts = PromoDiscount::get();
        $promodiscount = '';
        return view('aadhya.promo_discount.promo_discount',compact('promodiscounts','promodiscount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request , [
         'coupon_code' => 'required|unique:12-promo-discount,c_12_2_coupon_code',
         'discount_amount' =>'required',
         'issued_on_date' =>'required',
         'valid_till_date' =>'required',
         'number_of_use' =>'required',
         // 'issued_general_email' =>'required',
         // 'issued_to_name' =>'required',
        ]);

        $promodiscount = new PromoDiscount;

        $promodiscount->c_12_2_coupon_code = $request->coupon_code;
        $promodiscount->c_12_3_min_order_value = $request->minimum_order_value ??0;
        $promodiscount->c_12_4_discount_amt = $request->discount_amount;
        $promodiscount->c_12_5_issued_on = $request->issued_on_date;
        $promodiscount->c_12_6_valid_till_date = $request->valid_till_date;
        $promodiscount->c_12_9_no_of_uses = $request->number_of_use;
        $promodiscount->c_12_7_issued_email = $request->issued_general_email;
        $promodiscount->c_12_8_issued_agent_email = $request->issued_to_name;
        $promodiscount->save();
         if($promodiscount){
            return redirect()->route('aadhya.promo_discount')->with('success','Detail Added Successfully');
        }else{
            return back()->with('error','Something Went Wrong');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $promodiscount =  PromoDiscount::findOrFail($id);
        $promodiscounts=  PromoDiscount::get();

        return view('aadhya.promo_discount.promo_discount',compact('promodiscounts','promodiscount')); 
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
          $this->validate($request , [
         'coupon_code' => 'required|unique:12-promo-discount,c_12_2_coupon_code,' . $id,
          'discount_amount' =>'required',
         'issued_on_date' =>'required',
         'valid_till_date' =>'required',
         'number_of_use' =>'required',
        ]);

        $promodiscount =  PromoDiscount::find($id);
        if(  $promodiscount->c_12_2_coupon_code != $request->coupon_code){

        $promodiscount = new PromoDiscount;
        $promodiscount->c_12_2_coupon_code = $request->coupon_code;
        $promodiscount->c_12_3_min_order_value = $request->minimum_order_value;
        $promodiscount->c_12_4_discount_amt = $request->discount_amount;
        $promodiscount->c_12_5_issued_on = $request->issued_on_date;
        $promodiscount->c_12_6_valid_till_date = $request->valid_till_date;
        $promodiscount->c_12_9_no_of_uses = $request->number_of_use;
        $promodiscount->c_12_7_issued_email = $request->issued_general_email;
        $promodiscount->c_12_8_issued_agent_email = $request->issued_to_name;
        $promodiscount->save();
        } else {
                 $promodiscount->c_12_2_coupon_code = $request->coupon_code;
        $promodiscount->c_12_3_min_order_value = $request->minimum_order_value;
        $promodiscount->c_12_4_discount_amt = $request->discount_amount;
        $promodiscount->c_12_5_issued_on = $request->issued_on_date;
        $promodiscount->c_12_6_valid_till_date = $request->valid_till_date;
        $promodiscount->c_12_9_no_of_uses = $request->number_of_use;
        $promodiscount->c_12_7_issued_email = $request->issued_general_email;
        $promodiscount->c_12_8_issued_agent_email = $request->issued_to_name;
        $promodiscount->update();
        }
         if($promodiscount){
            return redirect()->route('aadhya.promo_discount')->with('success','Detail Update Successfully');
        }else{
            return back()->with('error','Something Went Wrong');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         PromoDiscount::destroy($id);
         return redirect()->back()->with('flash_message','Delete Successfully ');
    }

    public function checkCouponText(Request $request)
    {
        $q = $request->q;
        $promodiscount = PromoDiscount::where('c_12_2_coupon_code',$q)->first();
        if($promodiscount){
            return response()->json(['status'=>false,'msg'=>'The coupon code has already been issued.']);
        } else{
            return response()->json(['status'=>true]);

        }
    }


          public function deleteAll(Request $request)  
    {  
        $ids = $request->ids;  
        PromoDiscount::whereIn('id',explode(",",$ids))->delete();  
        return response()->json(['success'=>"Details deleted Successfully."]);  
    } 
}
