<?php

namespace App\Http\Controllers;
use App\Models\HomeCriticalDiseases;
use App\Models\MedsInfo;
use App\Models\CriticalMedicine;
use App\Imports\HomeCriticalDiseasesImport;
use App\Exports\HomeCriticalDiseasesExport;
use App\Imports\CriticalMedicineImport;
use App\Exports\CriticalMedicineExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;


class HomeCriticalDiseasesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('aadhya.home.home');
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
            'critical_disease' => 'required',
            'critical_id_no' => 'required',
            'critical_square_image' => 'required|image',
            's_i_alt_tag' => 'required',
            'disease_information_in_brief' => 'required',
        ]);
        $image = '';
        if($request->hasFile('critical_square_image')){
                   $image = $request->critical_square_image->getClientOriginalName();
          $request->critical_square_image->move(public_path('img-di'), $image);
          $image_url =asset('img-di/'.$image);
        }
          $critical = new HomeCriticalDiseases;
          $critical->c_3_4_2_critical_disease = $request->critical_disease;
          $critical->c_3_4_1_disease_no = $request->critical_id_no;
          $critical->c_3_4_3_image = $image;
          $critical->c_3_4_4_image_alt_tag = $request->s_i_alt_tag;
          $critical->si_source_url = $request->si_source_url;
          $critical->c_3_4_5_disease_information = $request->disease_information_in_brief;
           $j = 6;
         

              if(isset($request->critical_disease_medicine) && !empty($request->critical_disease_medicine)){
                 $homeInfos = MedsInfo::select('c_1_1_1_generic_id_no')->whereIn('c_1_1_1_generic_id_no',$request->critical_disease_medicine)->orderBy('c_1_1_2_main_generic_name')->get();

            foreach ($homeInfos as $key => $homeInfo) {
                $general_med = CriticalMedicine::where('critical_disease_id',$critical->id)->where('generic_med_no',$homeInfo->c_1_1_1_generic_id_no)->first();
                if(!$general_med){
                    $general_med = new CriticalMedicine;
                    $general_med->critical_disease_id = $critical->id;
                    $general_med->generic_med_no = $homeInfo->c_1_1_1_generic_id_no;
                    $general_med->save();
                }
            }
          }
          $critical->save();
          if($critical){
            return redirect()->route('aadhya.3-home')->with('success6','Detail Added Successfully');
        }else{
            return back()->with('error6','Something Went Wrong');
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
            $data = HomeCriticalDiseases::with('crtical_medicines','crtical_medicines.generic_medcine_info')->findOrFail($id);
            return response()->json(['data'=>$data]);
        }
        return response()->json(['data'=>null]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
            $output = '<ul class="list-group" style="display: block; position: relative; z-index: 1;padding:none;border:1px solid black;">';
            // loop through the result array
            foreach ($data as $row){
                // concatenate output to the array
                $output .= '<li class="list-group-item hover-item  p-0 border-0" onclick="getCriticalInfo(this)" data-id="'.$row->id.'">'.$row->c_1_1_1_generic_id_no.' - '.$row->c_1_1_2_main_generic_name.'</li>';
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $critical = HomeCriticalDiseases::find($id);

        $this->validate($request ,[
            'critical_disease' => 'required',
            'critical_id_no' => 'required',
            's_i_alt_tag' => 'required',
            'disease_information_in_brief' => 'required',
        ]);
         
        $image = '';
        if($request->hasFile('critical_square_image')){
            $image = $request->critical_square_image->getClientOriginalName();
          $request->critical_square_image->move(public_path('img-di'), $image);
          $image_url =asset('img-di/'.$image) ;
          $critical->c_3_4_3_image = $image;
        }
          $critical->c_3_4_2_critical_disease = $request->critical_disease;
          $critical->c_3_4_1_disease_no = $request->critical_id_no; 
          $critical->c_3_4_4_image_alt_tag = $request->s_i_alt_tag;
           $critical->si_source_url = $request->s_i_source_url;
          $critical->c_3_4_5_disease_information = $request->disease_information_in_brief;
           $j = 6;
            if(isset($request->critical_disease_medicine) && !empty($request->critical_disease_medicine)){
                 $critical_d =  CriticalMedicine::where('critical_disease_id',$critical->id)->delete();
                 $homeInfos = MedsInfo::select('c_1_1_1_generic_id_no','c_1_1_2_main_generic_name')->whereIn('c_1_1_1_generic_id_no',$request->critical_disease_medicine)->orderBy('c_1_1_2_main_generic_name','asc')->get();

            foreach ($homeInfos as $key => $homeInfo) {
                $general_med = CriticalMedicine::where('critical_disease_id',$critical->id)->where('generic_med_no',$homeInfo->c_1_1_1_generic_id_no)->first();
                if(!$general_med){
                    $general_med = new CriticalMedicine;
                    $general_med->critical_disease_id = $critical->id;
                    $general_med->generic_med_no = $homeInfo->c_1_1_1_generic_id_no;
                    $general_med->save();
                }
            }
          }

          $critical->update();
          if($critical){
            return redirect()->route('aadhya.3-home')->with('success6','Detail updated Successfully');
        }else{
            return back()->with('error6','Something Went Wrong');
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
        HomeCriticalDiseases::destroy($id);
                return redirect()->back()->with('success6','Detail delete Successfully');
    }

     public function delete()
    {
        HomeCriticalDiseases::truncate();
        CriticalMedicine::truncate();
        return redirect()->back()->with('success','Details deleted Successfully ');
        
    }

    public function import(Request $request)
    {
         $this->validate($request, [
            'file' => 'required',          
        ]);

       Excel::import(new HomeCriticalDiseasesImport, $request->file('file'));
        
        return redirect()->back()->with('success','Details uploaded Successfully ');
    }

    public function export()
    {

         return Excel::download(new HomeCriticalDiseasesExport, '3-4a-Cancer-Diseases-Details-downloaded-'.date('dmY').'.xlsx');
    }

     public function medicineDelete()
    {
        CriticalMedicine::truncate();
        return redirect()->back()->with('success','Details deleted Successfully ');
    }

    public function medicineimport(Request $request)
    {
         $this->validate($request, [
            'file' => 'required',          
        ]);

       Excel::import(new CriticalMedicineImport, $request->file('file'));
        
        return redirect()->back()->with('success','Details uploaded Successfully ');
    }

    public function medicineExport()
    {

         return Excel::download(new CriticalMedicineExport, '3-4b-Cancer-Diseases-Medicines-downloaded-'.date('dmY').'.xlsx');
    }
}
