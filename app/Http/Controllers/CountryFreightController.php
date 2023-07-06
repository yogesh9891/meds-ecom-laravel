<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CountryFreight;
use App\Models\MedsForex;
use App\Models\BankDetail;
use App\Imports\CountryFreightImport;
use App\Exports\CountryFreightExport;
use Maatwebsite\Excel\Facades\Excel;
class CountryFreightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $countryFreights =  CountryFreight::get();
        $country =  CountryFreight::whereNotNull('c_4_1_13_single_freight')->first();
        $forex = MedsForex::first();
        $bank_details = BankDetail::get();
        return view('aadhya.country_freight.country_freight',compact('countryFreights','country','forex','bank_details'));   
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
        $this->validate($request ,[
        'country_name' => 'required',
        'country_isd' => 'required',
        'freight_charges_inr' => 'required',
        'delivery_start' => 'required',
        'delivery_end' => 'required',
        'single_freight_charge' => 'required',
        ]);

        $countryFreight = new CountryFreight;
     
        $countryFreight->c_4_1_2_country_name = $request->country_name;
        $countryFreight->c_4_1_3_country_isd_code = $request->country_isd;
        $countryFreight->c_4_1_4_billing_address = $request->billing_address ?? 'N';
        $countryFreight->c_4_1_5_delivery_address = $request->delivery_address ?? 'N';
        $countryFreight->c_4_1_6_priority_display = $request->priority_display ?? 'N';
        $countryFreight->c_4_1_7_customs_clearance = $request->customs_clearance ?? 'N';
        $countryFreight->c_4_1_8_patient_use = $request->patient_use ?? 'N';
        $countryFreight->c_4_1_9_study_use = $request->study_use ?? 'N';
        $countryFreight->c_4_1_10_dif_freight_chg_inr = $request->freight_charges_inr;
        $countryFreight->c_4_1_11_delivery_start = $request->delivery_start;
        $countryFreight->c_4_1_12_delivery_end = $request->delivery_end;
        $countryFreight->c_4_1_13_single_freight = $request->single_freight_charge;
        $countryFreight->c_4_1_14_show_single_freight = $request->show_single_freight ?? 'N';
        $countryFreight->save();

       if($countryFreight){
            return redirect()->route('aadhya.country_freight')->with('success','Detail Added Successfully');
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
        if($id){
            $data = CountryFreight::findOrFail($id);

            return response()->json(['data'=>$data->toArray()]);
        }
        return response()->json(['data'=>null]);
    }


    public function search($q)
    {
        if(!$q){
            return false;
        }
           $data = CountryFreight::select('id','c_4_1_2_country_name','c_4_1_1_s_no')->where('c_4_1_2_country_name','LIKE',"%{$q}%")->get();
           $output = '';

            // if searched countries count is larager than zero
        if (count($data)>0) {
            // concatenate output to the array
            $output = '<ul class="list-group " style="display: block; position: relative; z-index: 1;border:1px solid #000;left:130px;width:410px">';
            // loop through the result array
            foreach ($data as $row){
                // concatenate output to the array
                $output .= '<li class="list-group-item hover-item  p-0 border-0" onclick="getCountry(this)" data-id="'.$row->id.'">'.$row->c_4_1_2_country_name.' </li>';
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { 
        $countryFreight =  CountryFreight::findOrFail($id);
        $countryFreights =  CountryFreight::get();
        return view('aadhya.country_freight.country_freight_edit',compact('countryFreights','countryFreight')); 
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
           $this->validate($request ,[
        'country_name' => 'required',
        'country_isd' => 'required',
      
        ]);
        $countryFreight =  CountryFreight::findOrFail($id);


        $countryFreight->c_4_1_2_country_name = $request->country_name;
        $countryFreight->c_4_1_3_country_isd_code = $request->country_isd;
        $countryFreight->c_4_1_4_billing_address = $request->billing_address ?? 'N';
        $countryFreight->c_4_1_5_delivery_address = $request->delivery_address ?? 'N';
        $countryFreight->c_4_1_6_priority_display = $request->priority_display ?? 'N';
        $countryFreight->c_4_1_7_customs_clearance = $request->customs_clearance ?? 'N';
        $countryFreight->c_4_1_8_patient_use = $request->patient_use ?? 'N';
        $countryFreight->c_4_1_9_study_use = $request->study_use ?? 'N';
        $countryFreight->c_4_1_10_dif_freight_chg_inr = $request->freight_charges_inr;
        $countryFreight->c_4_1_11_delivery_start = $request->delivery_start;
        $countryFreight->c_4_1_12_delivery_end = $request->delivery_end;
        $countryFreight->c_4_1_13_single_freight = $request->single_freight_charge;
        $countryFreight->c_4_1_14_show_single_freight = $request->show_single_freight ?? 'N';
        $countryFreight->update();

       if($countryFreight){
            return redirect()->route('aadhya.country_freight')->with('success','Detail Updated Successfully');
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
           CountryFreight::destroy($id);
         return redirect()->back()->with('success','Delete Successfully ');
    }

    public function singleFreight(Request $request)
    {
        $charge =$request->single_freight_charge;
        if(empty($charge) || $charge ==0){
                $charge = 1;
        }
        $show =$request->show_single_freight ?? 'N';
        $countryFreights = CountryFreight::get();
            foreach ($countryFreights as $key => $countryFreight) {
                $countryFreight->c_4_1_13_single_freight = $charge;
                $countryFreight->c_4_1_14_show_single_freight = $show;
                $countryFreight->update();
            }
        return redirect()->back()->with('success1','CountryFreight update Successfully');
    }


      public function delete()
    {
        CountryFreight::truncate();
        return redirect()->back()->with('success','Details deleted Successfully ');
        
    }

    public function import(Request $request)
    {
         $this->validate($request, [
            'file' => 'required',          
        ]);

       Excel::import(new CountryFreightImport, $request->file('file'));
        
        return redirect()->back()->with('success','Details uploaded Successfully ');
    }


        public function deleteAll(Request $request)  
    {  
        $ids = $request->ids;  
        CountryFreight::whereIn('id',explode(",",$ids))->delete();  
        return response()->json(['success'=>"Details deleted Successfully."]);  
    }  

    public function export()
    {

         return Excel::download(new CountryFreightExport, '4-1-Country-Details-downloaded-'.date('dmY').'.xlsx');
    }

}
