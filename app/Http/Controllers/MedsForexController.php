<?php

namespace App\Http\Controllers;
use App\Models\MedsForex;
use App\Models\BankDetail;
use Illuminate\Http\Request;
use App\Imports\MedsForexImport;
use App\Exports\MedsForexExport;
use Maatwebsite\Excel\Facades\Excel;
class MedsForexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $medForex = MedsForex::first();
        $medForex->c_2_3_1_fx_sign_1 = $request->sign_1;
      
        $medForex->c_2_3_2_fx_rate_1 = $request->rate_1;
        $medForex->c_2_3_3_fx_sign_2 = $request->sign_2;
        $medForex->c_2_3_4_fx_rate_2 = $request->rate_2;
        $medForex->c_2_3_5_fx_sign_3 = $request->sign_3;
        $medForex->c_2_3_6_fx_rate_3 = $request->rate_3;
        $medForex->c_2_3_7_fx_sign_4 = $request->sign_4;
        $medForex->c_2_3_8_fx_rate_4 = $request->rate_4;
        $medForex->c_2_3_9_fx_sign_5 = $request->sign_5;
        $medForex->c_2_3_10_fx_rate_5 = $request->rate_5;
        $medForex->c_2_3_11_fx_sign_6 = $request->sign_6;
        $medForex->c_2_3_12_fx_rate_6 = $request->rate_6;
        $medForex->c_2_3_13_fx_sign_7 = $request->sign_7;
        $medForex->c_2_3_14_fx_rate_7 = $request->rate_7;
        $medForex->c_2_3_15_fx_sign_8 = $request->sign_8;
        $medForex->c_2_3_16_fx_rate_8 = $request->rate_8;
        $medForex->c_2_3_17_fx_sign_9 = $request->sign_9;
        $medForex->c_2_3_18_fx_rate_9 = $request->rate_9;
        $medForex->c_2_3_19_fx_sign_10 = $request->sign_10;
        $medForex->c_2_3_20_fx_rate_10 = $request->rate_10;
        $medForex->c_2_3_21_fx_sign_11 = $request->sign_11;
        $medForex->c_2_3_22_fx_rate_11 = $request->rate_11;
        $medForex->c_2_3_23_fx_sign_12 = $request->sign_12;
        $medForex->c_2_3_24_fx_rate_12 = $request->rate_12;
        $medForex->c_2_3_25_fx_sign_13 = $request->sign_13;
        $medForex->c_2_3_26_fx_rate_13 = $request->rate_13;
        $medForex->c_2_3_27_fx_sign_14 = $request->sign_14;
        $medForex->c_2_3_28_fx_rate_14 = $request->rate_14;
         $medForex->c_2_3_28_fx_sign_15 = $request->sign_15;
        $medForex->c_2_3_28_fx_rate_15 = $request->rate_15;
        $medForex->update();

          if($medForex->c_2_3_3_fx_sign_2){
            $BankDetail = BankDetail::where('c_5_11_currency',$medForex->c_2_3_3_fx_sign_2)->update(['c_5_12_usd_rate'=>$request->rate_2]);
        }
          if($medForex->c_2_3_5_fx_sign_3){
            $BankDetail = BankDetail::where('c_5_11_currency',$medForex->c_2_3_5_fx_sign_3)->update(['c_5_12_usd_rate'=>$request->rate_3]);
        }
          if($medForex->c_2_3_7_fx_sign_4){
            $BankDetail = BankDetail::where('c_5_11_currency',$medForex->c_2_3_7_fx_sign_4)->update(['c_5_12_usd_rate'=>$request->rate_4]);
        }
          if($medForex->c_2_3_9_fx_sign_5){
            $BankDetail = BankDetail::where('c_5_11_currency',$medForex->c_2_3_9_fx_sign_5)->update(['c_5_12_usd_rate'=>$request->rate_5]);
        }
          if($medForex->c_2_3_11_fx_sign_6){
            $BankDetail = BankDetail::where('c_5_11_currency',$medForex->c_2_3_11_fx_sign_6)->update(['c_5_12_usd_rate'=>$request->rate_6]);
        }
          if($medForex->c_2_3_13_fx_sign_7){
            $BankDetail = BankDetail::where('c_5_11_currency',$medForex->c_2_3_13_fx_sign_7)->update(['c_5_12_usd_rate'=>$request->rate_7]);
        }
          if($medForex->c_2_3_15_fx_sign_8){
            $BankDetail = BankDetail::where('c_5_11_currency',$medForex->c_2_3_15_fx_sign_8)->update(['c_5_12_usd_rate'=>$request->rate_8]);
        }
          if($medForex->c_2_3_17_fx_sign_9){
            $BankDetail = BankDetail::where('c_5_11_currency',$medForex->c_2_3_17_fx_sign_9)->update(['c_5_12_usd_rate'=>$request->rate_9]);
        }
          if($medForex->c_2_3_19_fx_sign_10){
            $BankDetail = BankDetail::where('c_5_11_currency',$medForex->c_2_3_19_fx_sign_10)->update(['c_5_12_usd_rate'=>$request->rate_10]);
        }
          if($medForex->c_2_3_21_fx_sign_11){
            $BankDetail = BankDetail::where('c_5_11_currency',$medForex->c_2_3_21_fx_sign_11)->update(['c_5_12_usd_rate'=>$request->rate_11]);
        }
          if($medForex->c_2_3_23_fx_sign_12){
            $BankDetail = BankDetail::where('c_5_11_currency',$medForex->c_2_3_23_fx_sign_12)->update(['c_5_12_usd_rate'=>$request->rate_12]);
        }
          if($medForex->c_2_3_25_fx_sign_13){
            $BankDetail = BankDetail::where('c_5_11_currency',$medForex->c_2_3_25_fx_sign_13)->update(['c_5_12_usd_rate'=>$request->rate_13]);
        }
          if($medForex->c_2_3_27_fx_sign_14){
            $BankDetail = BankDetail::where('c_5_11_currency',$medForex->c_2_3_27_fx_sign_14)->update(['c_5_12_usd_rate'=>$request->rate_14]);
        } 
         if($medForex->c_2_3_28_fx_sign_15){
            $BankDetail = BankDetail::where('c_5_11_currency',$medForex->c_2_3_28_fx_sign_15)->update(['c_5_12_usd_rate'=>$request->rate_15]);
        }

        if($medForex){
            return redirect()->route('aadhya.2-meds-price')->with('success2','Details updated successfully');
        }else{
            return back()->with('error2','something went wrong');
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
    
         public function delete()
    {
        MedsForex::truncate();
        return redirect()->back()->with('success','Details deleted Successfully ');
        
    }

    public function import(Request $request)
    {
         $this->validate($request, [
            'file' => 'required',          
        ]);

       Excel::import(new MedsForexImport, $request->file('file'));
        
        return redirect()->back()->with('success','Details uploaded Successfully ');
    }

    public function export()
    {

         return Excel::download(new MedsForexExport, '2-3-Forex-Rates-downloaded-'.date('dmY').'.xlsx');
    }
}
