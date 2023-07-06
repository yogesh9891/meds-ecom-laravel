<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BankDetail;
use App\Models\MedsForex;
use App\Imports\BankDetailImport;
use App\Exports\BankDetailExport;
use Maatwebsite\Excel\Facades\Excel;
class BankDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bankdetails = BankDetail::get();
        $medsforex = MedsForex::first();
        $bankdetail = '';
        return view('aadhya.bank_detail.bank_detail',compact('bankdetails','bankdetail','medsforex'));
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
        'company_code' => 'required',
        'account_name' => 'required',
      
        
       ]); 

       $bankdetail = new BankDetail;

       $bankdetail->c_5_2_company_code = $request->company_code;
       $bankdetail->c_5_3_account_name = $request->account_name;
       $bankdetail->c_5_4_account_address = $request->account_address;
       $bankdetail->c_5_5_bank_name_location = $request->bank_name_location;
       $bankdetail->c_5_6_bank_branch_code = $request->bank_branch_code;
       $bankdetail->c_5_7_account_type = $request->account_type;
       $bankdetail->c_5_8_account_no = $request->account_number;
       $bankdetail->c_5_9_bank_transfer_code = $request->bank_transfer_code;
       $bankdetail->c_5_10_email = $request->bank_email;
       $bankdetail->c_5_11_currency = $request->currency;
        $bankdetail->c_5_12_usd_rate = $request->rate_usd;
       $bankdetail->save();
         $bankdetail->c_5_1_s_no = 'BD-'.$bankdetail->id;
         $bankdetail->save();
       if($bankdetail){
            return redirect()->route('aadhya.bank_detail')->with('success','Detail Added Successfully');
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
            $data = BankDetail::findOrFail($id);

            return response()->json(['data'=>$data->toArray()]);
        }
        return response()->json(['data'=>null]);
    }


    public function search($q)
    {
        if(!$q){
            return false;
        }
           $data = BankDetail::select('id','c_5_2_company_code')->where('c_5_2_company_code','LIKE',"%{$q}%")->get();
           $output = '';

            // if searched countries count is larager than zero
        if (count($data)>0) {
            // concatenate output to the array
            $output = '<ul class="list-group " style="display: block; position: relative; z-index: 1;border:1px solid #000;left:50px;width:189px;">';
            // loop through the result array
            foreach ($data as $row){
                // concatenate output to the array
                $output .= '<li class="list-group-item hover-item  p-0 border-0" onclick="getBank(this)" data-id="'.$row->id.'">'.$row->c_5_2_company_code.' </li>';
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
        $bankdetail =  BankDetail::findOrFail($id);

        $bankdetails =  BankDetail::get();
        return view('aadhya.bank_detail.bank_detail',compact('bankdetails','bankdetail')); 
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
       $bankdetail = BankDetail::find($id);

       $bankdetail->c_5_2_company_code = $request->company_code;
       $bankdetail->c_5_3_account_name = $request->account_name;
       $bankdetail->c_5_4_account_address = $request->account_address;
       $bankdetail->c_5_5_bank_name_location = $request->bank_name_location;
       $bankdetail->c_5_6_bank_branch_code = $request->bank_branch_code;
       $bankdetail->c_5_7_account_type = $request->account_type;
       $bankdetail->c_5_8_account_no = $request->account_number;
       $bankdetail->c_5_9_bank_transfer_code = $request->bank_transfer_code;
       $bankdetail->c_5_10_email = $request->bank_email;
       $bankdetail->c_5_11_currency = $request->currency;
        $bankdetail->c_5_12_usd_rate = $request->rate_usd;
       $bankdetail->update();
       if($bankdetail){
            return redirect()->route('aadhya.bank_detail')->with('success','Detail updated Successfully');
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
        BankDetail::destroy($id);
        return redirect()->back()->with('success','Delete Successfully ');
    }

         public function delete()
    {
        BankDetail::truncate();
        return redirect()->back()->with('success','Details deleted Successfully ');
        
    }

    public function import(Request $request)
    {
         $this->validate($request, [
            'file' => 'required',          
        ]);

       Excel::import(new BankDetailImport, $request->file('file'));
        
        return redirect()->back()->with('success','Details uploaded Successfully ');
    }

    public function export()
    {

         return Excel::download(new BankDetailExport, '5-Bank-Details-downloaded-'.date('dmY').'.xlsx');
    }

    
        public function deleteAll(Request $request)  
    {  
        $ids = $request->ids;  
        BankDetail::whereIn('id',explode(",",$ids))->delete();  
        return response()->json(['success'=>"Details deleted Successfully."]);  
    } 
}
