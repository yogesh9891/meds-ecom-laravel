<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\MedsProduct;
use App\Models\MedsPrice;
use App\Models\MedsInfo;
use App\Imports\MedsProductImport;
use App\Exports\MedsProductExport;
use Maatwebsite\Excel\Facades\Excel;
class MedsProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return('aadhya.med_price.meds_price');
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
        //  dd($request->all());
        $this->validate($request , [
            'c_2_1_1_generic_id_no' => 'required',
            'product_no' => 'required',
            'short_strength' => 'required',
            'display_at' => 'required',
            'product_title' => 'required',
            'medication_use' => 'required',
        ]);
         $generic_id  =$request->c_2_1_1_generic_id_no;
             $meds_product =  MedsProduct::where('c_2_1_2_product_no',$request->product_no)->first();
            if($meds_product){
                return redirect()->route('aadhya.2-meds-price.index',$generic_id)->withInput($request->input())->with('error11','this product ID already exists');

            }

             $meds_product =  MedsProduct::where('c_2_1_3_short_strength_id',$request->short_strength)->where('c_2_1_1_generic_id_no',$generic_id)->first();
            if($meds_product){
                return redirect()->route('aadhya.2-meds-price.index',$generic_id)->withInput($request->input())->with('error11','this Short Strength ID already exists');
                
            }
             $meds_product =  MedsProduct::where('c_2_1_5_product_name_h2',$request->product_title)->where('c_2_1_1_generic_id_no',$generic_id)->first();
            if($meds_product){
                return redirect()->route('aadhya.2-meds-price.index',$generic_id)->withInput($request->input())->with('error11','this Product Title Name  already exists');
                
            }

        $data = new MedsProduct;
        $data->c_2_1_2_product_no = $request->product_no;
        $data->c_2_1_1_generic_id_no = $request->c_2_1_1_generic_id_no;

        $data->c_2_1_3_short_strength_id = $request->short_strength;
        $data->c_2_1_4_display_at = $request->display_at;
        $data->c_2_1_5_product_name_h2 = $request->product_title;
        $data->c_2_1_6_med_use = $request->medication_use;
        $data->save();
        if($data){
            return redirect()->route('aadhya.2-meds-price.index',$data->c_2_1_1_generic_id_no)->with('success11','Details submitted successfully');
        }else{
            return back()->with('error11','something went wrong');
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
        $meds_product = MedsProduct::with('meds_price','meds_name')->find($id);
        return $meds_product; 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function medShow($id)
    {
        if($id){
            $data = MedsInfo::with('meds_products')->findOrFail($id);
            
            return response()->json(['data'=>$data->toArray()]);
        }
        return response()->json(['data'=>null]);
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
           $this->validate($request , [
            'product_no' => 'required',
            'short_strength' => 'required',
            'display_at' => 'required',
            'product_title' => 'required',
            'medication_use' => 'required',
        ]);

        $data = MedsProduct::findOrFail($id);
        $generic_id  =$data->c_2_1_1_generic_id_no;
        if(!isset($request->btn_name)){

        if($data->c_2_1_2_product_no ==  $request->product_no){
            $data->c_2_1_2_product_no = $request->product_no;
          

            $data->c_2_1_3_short_strength_id = $request->short_strength;
            $data->c_2_1_4_display_at = $request->display_at;
            $data->c_2_1_5_product_name_h2 = $request->product_title;
            $data->c_2_1_6_med_use = $request->medication_use;
            $data->update();

        } else {

        $newdata = new  MedsProduct;
         $newdata->c_2_1_2_product_no = $request->product_no;
            $newdata->c_2_1_1_generic_id_no = $generic_id;

            $newdata->c_2_1_3_short_strength_id = $request->short_strength;
            $newdata->c_2_1_4_display_at = $request->display_at;
            $newdata->c_2_1_5_product_name_h2 = $request->product_title;
            $newdata->c_2_1_6_med_use = $request->medication_use;
            $newdata->save();

        }
        }else {
                
            $meds_product =  MedsProduct::where('c_2_1_2_product_no',$request->product_no)->first();
            if($meds_product){
                return redirect()->route('aadhya.2-meds-price.index',$generic_id)->withInput($request->input())->with('error11','this product ID already exists');

            }

             $meds_product =  MedsProduct::where('c_2_1_3_short_strength_id',$request->short_strength)->where('c_2_1_1_generic_id_no',$generic_id)->first();
            if($meds_product){
                return redirect()->route('aadhya.2-meds-price.index',$generic_id)->withInput($request->input())->with('error11','this Short Strength ID already exists');
                
            }
             $meds_product =  MedsProduct::where('c_2_1_5_product_name_h2',$request->product_title)->where('c_2_1_1_generic_id_no',$generic_id)->first();
            if($meds_product){
                return redirect()->route('aadhya.2-meds-price.index',$generic_id)->withInput($request->input())->with('error11','this Product Title Name  already exists');
                
            }

        $newdata = new  MedsProduct;
         $newdata->c_2_1_2_product_no = $request->product_no;
            $newdata->c_2_1_1_generic_id_no = $generic_id;

            $newdata->c_2_1_3_short_strength_id = $request->short_strength;
            $newdata->c_2_1_4_display_at = $request->display_at;
            $newdata->c_2_1_5_product_name_h2 = $request->product_title;
            $newdata->c_2_1_6_med_use = $request->medication_use;
            $newdata->save();
            return redirect()->route('aadhya.2-meds-price.index',$generic_id)->with('success11','Details submitted successfully');
            
        }

        if($data){
            return redirect()->route('aadhya.2-meds-price.index',$generic_id)->with('success11','Details submitted successfully');
        }else{
            return back()->with('error11','something went wrong');
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
        $data = MedsProduct::findOrFail($id);

        $gen_id =  $data->c_2_1_1_generic_id_no;
        $medprice = MedsPrice::where('c_2_2_2_product_no', $data->c_2_1_2_product_no)->delete();
        $data->delete();
          return redirect()->route('aadhya.2-meds-price.index',$gen_id)->with('success11','Details submitted successfully');
        
    }

         public function delete()
    {
        MedsProduct::truncate();
        return redirect()->back()->with('success','Details deleted Successfully ');
        
    }

    public function import(Request $request)
    {


         $this->validate($request, [
            'file' => 'required',          
        ]);

       Excel::import(new MedsProductImport, $request->file('file'));
        
        return redirect()->back()->with('success','Details uploaded Successfully ');
    }

    public function export()
    {

         return Excel::download(new MedsProductExport, '2-1-Medicine-Strengths-downloaded-'.date('dmY').'.xlsx');
    }
}
