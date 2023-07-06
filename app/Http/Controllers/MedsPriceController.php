<?php

namespace App\Http\Controllers;
use App\Models\MedsProduct;
use App\Models\MedsInfo;
use App\Models\MedsPrice;
use App\Models\MedsForex;
use Illuminate\Http\Request;
use Session;
use App\Imports\MedsPriceImport;
use App\Exports\MedsPriceExport;
use Maatwebsite\Excel\Facades\Excel;
class MedsPriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $generic_id_no = 0 ;
        // if(Session::has('generic_id_no')){
        //     $generic_id_no = Session::get('generic_id_no');
        // }
        $medsProduct = MedsProduct::where('c_2_1_1_generic_id_no',$generic_id_no)->get();
        $meds_info = '';
        $medsForex = MedsForex::first();
        return view('aadhya.med_price.meds_price',compact('medsForex','medsProduct','meds_info'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showById($id)
    {
 		  if($id){
           $medsProduct = MedsProduct::where('c_2_1_1_generic_id_no',$id)->get();
                    	$meds_info = MedsInfo::where('c_1_1_1_generic_id_no',$id)->first(); 
                    	$name = $meds_info->c_1_1_1_generic_id_no.' - '.$meds_info->c_1_1_2_main_generic_name ;
        $medsForex = MedsForex::first();
      	if($medsProduct){
           return view('aadhya.med_price.meds_price',compact('medsForex','medsProduct','meds_info','name') );
     	 }
     }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //   dd($request->all());
        $this->validate($request ,[
            'product_no2' => 'required',
        ]);
         $image1 = '';
        if($request->hasFile('generic_select_icon')){
          $image1 = $request->generic_select_icon->getClientOriginalName();
          $request->generic_select_icon->move(public_path('/meds'), $image1);
          $image_url =asset('meds/'.$image1) ;
        }

       $image2 = '';
        if($request->hasFile('generic_select_full')){
            $image2 = $request->generic_select_full->getClientOriginalName();
          $request->generic_select_full->move(public_path('/meds'), $image2);
          $image_url =asset('/meds/'.$image2) ;
        }

        $image3 = '';
        if($request->hasFile('branded_meds_meds_icon')){
            $image3 = $request->branded_meds_meds_icon->getClientOriginalName();
          $request->branded_meds_meds_icon->move(public_path('/meds'), $image3);
          $image_url =asset('/meds/'.$image3) ;
        }

        $image4 = '';
        if($request->hasFile('branded_meds_meds_full')){
          $image4 = $request->branded_meds_meds_full->getClientOriginalName();
          $request->branded_meds_meds_full->move(public_path('/meds'), $image4);
          $image_url =asset('/meds/'.$image4) ;
        }
        
          $image5 = '';
        if($request->hasFile('generic_med_image')){
            $image5 = $request->generic_med_image->getClientOriginalName();
          $request->generic_med_image->move(public_path('/meds'), $image5);
          $image_url =asset('/meds/'.$image3) ;
        }

        $image6 = '';
        if($request->hasFile('branded_med_image')){
          $image6 = $request->branded_med_image->getClientOriginalName();
          $request->branded_med_image->move(public_path('/meds'), $image6);
          $image_url =asset('/meds/'.$image4) ;
        }

        $price = new MedsPrice;
        $price->c_2_2_2_product_no = $request->c_2_2_2_product_no;
        $price->c_2_2_1_generic_id_no = $request->c_2_2_1_generic_id_no;
        $price->c_2_2_3_g_sku = $request->c_2_2_3_g_sku;
        $price->c_2_2_4_g_available = $request->generic_available ?? 'NA';
        $price->c_2_2_5_g_display = $request->generic_display ?? 'H';
        $price->c_2_2_6_g_na_message = $request->generic_na_message;
        $price->c_2_2_7_g_name_in_h3_tag = $request->generic_name_h3_tag;
        $price->c_2_2_8_g_manufactured_by = $request->generic_who_certificate;  
        $price->c_2_2_9_g_mfr_url = $request->generic_who_url;
        $price->c_2_2_10_g_drug_for = $request->generic_drug_for;
        $price->c_2_2_11_g_shipped_from = $request->generic_shipped_from;

        // $price->c_2_2_12_g_icon_image = $image1;
        $price->c_2_2_13_g_icon_i_alt_tag = $request->generic_icon_alt_tag;
          $price->generic_med_image_alt_tag = $request->generic_med_image_alt_tag;
        // $price->generic_med_image = $image5;
        // $price->c_2_2_14_g_full_image = $image2;
        $price->c_2_2_15_g_full_i_alt_tag = $request->generic_image_alt_tag;
        $price->c_2_2_16_g_pack_1_qty = $request->generic_pack_1_quantity;
        $price->c_2_2_17_g_unit = $request->generic_units_tablet;
        $price->c_2_2_18_g_pack_1_inr_price = $request->generic_inr_price_pack;
        $price->c_2_2_19_g_pp_x_1 = $request->generic_pack1;
        $price->c_2_2_20_g_pp_x_2 = $request->generic_price1;
        $price->c_2_2_21_g_pp_x_3 = $request->generic_default1;
        $price->c_2_2_22_g_disc_1 = $request->generic_discount1;
        $price->c_2_2_23_g_disc_2 = $request->generic_discount2;
        $price->c_2_2_24_g_disc_3 = $request->generic_discount3;
        $price->c_2_2_25_b_sku = $request->c_2_2_25_b_sku;
        $price->c_2_2_26_b_available = $request->branded_available ?? 'NA' ;
        $price->c_2_2_27_b_display = $request->branded_display ?? 'H';
        $price->c_2_2_28_b_na_message = $request->branded_n_a_message;
        $price->c_2_2_29_b_name_in_h3_tag = $request->branded_name_in_h3_tag;
        $price->c_2_2_30_b_manufactured_by = $request->branded_mfd_by_who_input;
        $price->c_2_2_31_b_mfr_url = $request->branded_mfr_url_who_input;
        $price->c_2_2_32_b_drug_for = $request->branded_drug_for;
        $price->c_2_2_33_b_shipped_from = $request->branded_shipped_from;
        // $price->c_2_2_34_b_icon_image = $image3;
        $price->c_2_2_35_b_icon_i_alt_tag = $request->branded_icon_alt_tag;
        // $price->branded_med_image = $image6;
        $price->branded_icon_alt_tag = $request->branded_med_image_alt_tag;
        // $price->c_2_2_36_b_full_image = $image4;
        $price->c_2_2_37_b_full_i_alt_tag = $request->branded_image_alt_tag;
        $price->c_2_2_38_b_pack_1_qty = $request->branded_pack_1_quantity;
        $price->c_2_2_39_b_unit = $request->branded_unit_tablets_2;
        $price->c_2_2_40_b_pack_1_inr_price = $request->branded_inr_price_pack;
        $price->generic_med_image_alt_tag = $request->generic_med_image_alt_tag;
           $price->c_2_2_12_g_icon_image =  $request->generic_select_icon;
           $price->c_2_2_14_g_full_image =  $request->generic_select_full;
           $price->c_2_2_34_b_icon_image =  $request->branded_meds_meds_icon;
    
           $price->generic_med_image =  $request->generic_med_image;
           $price->c_2_2_36_b_full_image =  $request->branded_meds_meds_full;
        $price->branded_med_image = $request->branded_med_image;
        $price->c_2_2_41_b_pp_x_1 = $request->branded_pack;
        $price->c_2_2_42_b_pp_x_2 = $request->branded_price;
        $price->c_2_2_43_b_pp_x_3 = $request->branded_default;
        $price->c_2_2_44_b_disc_1 = $request->branded_discount1;
        $price->c_2_2_45_b_disc_2 = $request->branded_discount2;
        $price->c_2_2_46_b_disc_3 = $request->branded_discount3;
        $price->save();
       
        if($price){
            return redirect()->route('aadhya.2-meds-price.index',$price->c_2_2_1_generic_id_no)->with('success33','Detail Added Successfully');
        }else{
            return back()->with('error33','Something Went Wrong');
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
        if($id){
            $data = MedsInfo::findOrFail($id);
            return response()->json(['data'=>$data->toArray()]);
        }
        return response()->json(['data'=>null]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $price = MedsPrice::find($id);
        //  dd($request->all());
        if($request->hasFile('generic_select_icon')){
          $image1 = $request->generic_select_icon->getClientOriginalName();
          $request->generic_select_icon->move(public_path('/meds'), $image1);
          $image_url =asset('meds/'.$image1) ;
        $price->c_2_2_12_g_icon_image = $image1;
        }

        if($request->hasFile('generic_select_full')){
            $image2 = $request->generic_select_full->getClientOriginalName();
          $request->generic_select_full->move(public_path('/meds'), $image2);
          $image_url =asset('/meds/'.$image2) ;
        $price->c_2_2_14_g_full_image = $image2;
        }

     
        if($request->hasFile('branded_meds_meds_icon')){
            $image3 = $request->branded_meds_meds_icon->getClientOriginalName();
          $request->branded_meds_meds_icon->move(public_path('/meds'), $image3);
          $image_url =asset('/meds/'.$image3) ;
        $price->c_2_2_34_b_icon_image = $image3;
        }

  
        if($request->hasFile('branded_meds_meds_full')){
          $image4 = $request->branded_meds_meds_full->getClientOriginalName();
          $request->branded_meds_meds_full->move(public_path('/meds'), $image4);
          $image_url =asset('/meds/'.$image4) ;
      		  $price->c_2_2_36_b_full_image = $image4;
        }
           $image5 = '';
        if($request->hasFile('generic_med_image')){
            $image5 = $request->generic_med_image->getClientOriginalName();
          $request->generic_med_image->move(public_path('/meds'), $image5);
          $image_url =asset('/meds/'.$image5) ;
            $price->generic_med_image = $image5;
        }

        $image6 = '';
        if($request->hasFile('branded_med_image')){
          $image6 = $request->branded_med_image->getClientOriginalName();
          $request->branded_med_image->move(public_path('/meds'), $image6);
          $image_url =asset('/meds/'.$image6) ;
        $price->branded_med_image = $image6;
        }

        $price->c_2_2_2_product_no = $request->c_2_2_2_product_no;
        $price->c_2_2_3_g_sku = $request->c_2_2_3_g_sku;
        $price->c_2_2_4_g_available = $request->generic_available ?? 'NA';
        $price->c_2_2_5_g_display = $request->generic_display ?? 'H';
        $price->c_2_2_6_g_na_message = $request->generic_na_message;
        $price->c_2_2_7_g_name_in_h3_tag = $request->generic_name_h3_tag;
        $price->c_2_2_8_g_manufactured_by = $request->generic_who_certificate;  
        $price->c_2_2_9_g_mfr_url = $request->generic_who_url;
        $price->c_2_2_10_g_drug_for = $request->generic_drug_for;
        $price->c_2_2_11_g_shipped_from = $request->generic_shipped_from;
        $price->c_2_2_13_g_icon_i_alt_tag = $request->generic_icon_alt_tag;
        
        $price->generic_med_image_alt_tag = $request->generic_med_image_alt_tag;
           $price->c_2_2_12_g_icon_image =  $request->generic_select_icon;
           $price->c_2_2_14_g_full_image =  $request->generic_select_full;
           $price->c_2_2_34_b_icon_image =  $request->branded_meds_meds_icon;
    
           $price->generic_med_image =  $request->generic_med_image;
           $price->c_2_2_36_b_full_image =  $request->branded_meds_meds_full;
        $price->branded_med_image = $request->branded_med_image;

        $price->c_2_2_15_g_full_i_alt_tag = $request->generic_image_alt_tag;
        $price->c_2_2_16_g_pack_1_qty = $request->generic_pack_1_quantity;
        $price->c_2_2_17_g_unit = $request->generic_units_tablet;
        $price->c_2_2_18_g_pack_1_inr_price = $request->generic_inr_price_pack;
        $price->c_2_2_19_g_pp_x_1 = $request->generic_pack1;
        $price->c_2_2_20_g_pp_x_2 = $request->generic_price1;
        $price->c_2_2_21_g_pp_x_3 = $request->generic_default1;
        $price->c_2_2_22_g_disc_1 = $request->generic_discount1;
        $price->c_2_2_23_g_disc_2 = $request->generic_discount2;
        $price->c_2_2_24_g_disc_3 = $request->generic_discount3;
        $price->c_2_2_25_b_sku = $request->c_2_2_25_b_sku;
        $price->c_2_2_26_b_available = $request->branded_available  ??'NA';
        $price->c_2_2_27_b_display = $request->branded_display ?? 'H';
        $price->c_2_2_28_b_na_message = $request->branded_n_a_message;
        $price->c_2_2_29_b_name_in_h3_tag = $request->branded_name_in_h3_tag;
        $price->c_2_2_30_b_manufactured_by = $request->branded_mfd_by_who_input;
        $price->c_2_2_31_b_mfr_url = $request->branded_mfr_url_who_input;
        $price->c_2_2_32_b_drug_for = $request->branded_drug_for;
        $price->c_2_2_33_b_shipped_from = $request->branded_shipped_from;
        $price->c_2_2_35_b_icon_i_alt_tag = $request->branded_icon_alt_tag;
        $price->c_2_2_37_b_full_i_alt_tag = $request->branded_image_alt_tag;
       
        $price->branded_icon_alt_tag = $request->branded_med_image_alt_tag;
        $price->c_2_2_38_b_pack_1_qty = $request->branded_pack_1_quantity;
        $price->c_2_2_39_b_unit = $request->branded_unit_tablets_2;
        $price->c_2_2_40_b_pack_1_inr_price = $request->branded_inr_price_pack;
        $price->c_2_2_41_b_pp_x_1 = $request->branded_pack;
        $price->c_2_2_42_b_pp_x_2 = $request->branded_price;
        $price->c_2_2_43_b_pp_x_3 = $request->branded_default;
        $price->c_2_2_44_b_disc_1 = $request->branded_discount1;
        $price->c_2_2_45_b_disc_2 = $request->branded_discount2;
        $price->c_2_2_46_b_disc_3 = $request->branded_discount3;
        $price->update();
       
        if($price){
            return redirect()->route('aadhya.2-meds-price.index',$price->c_2_2_1_generic_id_no)->with('success33','Detail Updated Successfully');
        }else{
            return back()->with('error33','Something Went Wrong');
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
        //
    }

    public function search(Request $request)
    {
        $this->validate($request, [
            'genrice_no' => 'required',
           ]);
           $search = $request->genrice_no;
   
           $data = MedsInfo::select('id','c_1_1_1_generic_id_no','c_1_1_2_main_generic_name')->where('c_1_1_1_generic_id_no','LIKE',"%{$search}%")->orWhere('c_1_1_2_main_generic_name','LIKE',"%{$search}%")->get();
           $output = '';
           // if searched countries count is larager than zero
           if (count($data)>0) {
               // concatenate output to the array
               $output = '<ul class="list-group" style="display: block; position: relative; z-index: 1">';
               // loop through the result array
               foreach ($data as $row){
                   // concatenate output to the array
                   $output .= '<li class="list-group-item" onclick="getMedsPrice(this)" data-id="'.$row->id.'">'.$row->c_1_1_1_generic_id_no.'( '.$row->c_1_1_2_main_generic_name.' )</li>';
               }
               // end of output
               $output .= '</ul>';
           }
           else {
               // if there's no matching results according to the input
               $output .= '<li class="list-group-item">'.'No results'.'</li>';
           }
           // return output result array
           return $output;
    }


      public function delete()
    {
        MedsPrice::truncate();
        return redirect()->back()->with('success','Details deleted Successfully ');
        
    }

    public function import(Request $request)
    {


         $this->validate($request, [
            'file' => 'required',          
        ]);

       Excel::import(new MedsPriceImport, $request->file('file'));
        
        return redirect()->back()->with('success','Details uploaded Successfully ');
    }

    public function export()
    {

         return Excel::download(new MedsPriceExport, '2-2-B-G-Prices-Images-downloaded-'.date('dmY').'.xlsx');
    }
}
