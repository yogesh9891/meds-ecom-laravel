<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\HomeGeneralDiseases;
use App\Models\MedsInfo;
use App\Models\GeneralMedicine;
use App\Imports\HomeGeneralDiseasesImport;
use App\Exports\HomeGeneralDiseasesExport;
use App\Imports\GeneralMedicineImport;
use App\Exports\GeneralMedicineExport;
use Maatwebsite\Excel\Facades\Excel;

class HomeGeneralDiseasesController extends Controller
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
            'general_disease' => 'required',
            'id_no' => 'required',
            'square_image' => 'required',
            'si_alt_tag' => 'required',
            'disease_information_brief' => 'required',
        ]);

        $image = '';
        
        if($request->hasFile('square_image')){
          $image = $request->square_image->getClientOriginalName();
          $request->square_image->move(public_path('img-di'), $image);
          $image_url =asset('img-di/'.$image);
        }
          $general = new HomeGeneralDiseases;
          $general->c_3_3_2_general_disease = $request->general_disease;
          $general->c_3_3_1_disease_no = $request->id_no;
          $general->c_3_3_3_image = $image;
          $general->c_3_3_4_image_alt_tag = $request->si_alt_tag;
          $general->si_source_url = $request->si_source_url;
          $general->c_3_3_5_disease_information = $request->disease_information_brief;
          $j = 6;

        if(isset($request->general_disease_medicine) && !empty($request->general_disease_medicine)){
                 $homeInfos = MedsInfo::select('c_1_1_1_generic_id_no')->whereIn('c_1_1_1_generic_id_no',$request->general_disease_medicine)->orderBy('c_1_1_2_main_generic_name')->get();
            foreach ($homeInfos as $key => $homeInfo) {
                $general_med = GeneralMedicine::where('general_disease_id',$general->id)->where('generic_med_no',$homeInfo->c_1_1_1_generic_id_no)->first();
                if(!$general_med){
                    $general_med = new GeneralMedicine;
                    $general_med->general_disease_id = $general->id;
                    $general_med->generic_med_no = $homeInfo->c_1_1_1_generic_id_no;
                    $general_med->save();
                }
            }
          }

          $general->save();
          if($general){
            return redirect()->route('aadhya.3-home')->with('success5','Detail Added Successfully');
        }else{
            return back()->with('error5','Something Went Wrong');
        }
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
            $output = '<ul class="list-group" style="display: block; position: relative; z-index: 1;padding:none;border:1px solid black;">';
            // loop through the result array
            foreach ($data as $row){
                // concatenate output to the array
                $output .= '<li class="list-group-item hover-item  p-0 border-0" onclick="getGeneralInfo(this)" data-id="'.$row->id.'">'.$row->c_1_1_1_generic_id_no.' - '.$row->c_1_1_2_main_generic_name.'</li>';
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if($id){
            $data = HomeGeneralDiseases::with('generic_medicines','generic_medicines.generic_medcine_info')->findOrFail($id);
             // $data = HomeGeneralDiseases::with('generic_med_1','generic_med_2','generic_med_3','generic_med_4','generic_med_5','generic_med_5')->findOrFail($id);
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
        $general = HomeGeneralDiseases::find($id);
         $this->validate($request ,[
            'general_disease' => 'required',
            'id_no' => 'required',
            'si_alt_tag' => 'required',
            'disease_information_brief' => 'required',
        ]);
        if($request->hasFile('square_image')){
            $image = $request->square_image->getClientOriginalName();
          $request->square_image->move(public_path('img-di'), $image);
          $image_url =asset('img-di/'.$image);
          $general->c_3_3_3_image = $image;

        }
          $general->c_3_3_2_general_disease = $request->general_disease;
          $general->c_3_3_1_disease_no = $request->id_no;
          $general->c_3_3_4_image_alt_tag = $request->si_alt_tag;
          $general->c_3_3_5_disease_information = $request->disease_information_brief;
             $general->si_source_url = $request->si_source_url;
             // sort($request->general_disease_medicine_diease);
          $j = 6;
          if(isset($request->general_disease_medicine) && !empty($request->general_disease_medicine)){
                 GeneralMedicine::where('general_disease_id',$general->id)->delete();

                 $homeInfos = MedsInfo::select('c_1_1_1_generic_id_no')->whereIn('c_1_1_1_generic_id_no',$request->general_disease_medicine)->orderBy('c_1_1_2_main_generic_name')->get();
            foreach ($homeInfos as $key => $homeInfo) {
                $general_med = GeneralMedicine::where('general_disease_id',$general->id)->where('generic_med_no',$homeInfo->c_1_1_1_generic_id_no)->first();
                if(!$general_med){
                    $general_med = new GeneralMedicine;
                    $general_med->general_disease_id = $general->id;
                    $general_med->generic_med_no = $homeInfo->c_1_1_1_generic_id_no;
                    $general_med->save();
                }
            }
          }
          $general->update();
          if($general){
            return redirect()->route('aadhya.3-home')->with('success5','Detail updated Successfully');
        }else{
            return back()->with('error5','Something Went Wrong');
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
         HomeGeneralDiseases::destroy($id);
                return redirect()->back()->with('success6','Detail delete Successfully');
    }


    public function delete()
    {
        HomeGeneralDiseases::truncate();
        GeneralMedicine::truncate();
        return redirect()->back()->with('success','Details deleted Successfully ');
        
    }

    public function import(Request $request)
    {
         $this->validate($request, [
            'file' => 'required',          
        ]);

       Excel::import(new HomeGeneralDiseasesImport, $request->file('file'));
        
        return redirect()->back()->with('success','Details uploaded Successfully ');
    }

    public function export()
    {

         return Excel::download(new HomeGeneralDiseasesExport, '3-3a-General-Diseases-Details-downloaded-'.date('dmY').'.xlsx');
    }

     public function medicineDelete()
    {
        GeneralMedicine::truncate();
        return redirect()->back()->with('success','Details deleted Successfully ');
    }

    public function medicineimport(Request $request)
    {
         $this->validate($request, [
            'file' => 'required',          
        ]);

       Excel::import(new GeneralMedicineImport, $request->file('file'));
        
        return redirect()->back()->with('success','Details uploaded Successfully ');
    }

    public function medicineExport()
    {

         return Excel::download(new GeneralMedicineExport, '3-3b-General-Diseases-Medicines-downloaded-'.date('dmY').'.xlsx');
    }
}
