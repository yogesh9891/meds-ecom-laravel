<?php

namespace App\Http\Controllers;
use App\Models\MedsInfo;
use App\Models\MedsQuestion;
use App\Models\MedsLeaflet;
use App\Models\MedsVideo;
use App\Models\MedsSeo;
use App\Models\MedsPrice;
use App\Models\MedsProduct;
use App\Models\GeneralMedicine;
use App\Models\CriticalMedicine;
use App\Models\MedsKeyword;
use Illuminate\Http\Request;
use Session,DB;
use App\Imports\MedsNamesImport;
use App\Exports\MedsNamesExport;
use Maatwebsite\Excel\Facades\Excel;

class MedsNamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 		
        
        //     $datas =  MedsInfo::orderBy('c_1_1_1_generic_id_no')->get(); 
            
        //       foreach ($datas as $key => $data) {
        //   $other_names = explode(',',$data->c_1_1_3_other_names);

        //     foreach ($other_names as $key => $medcine) {
        //         $meds_keyword = new MedsKeyword;
        //         $meds_keyword->generic_id_no = $data->c_1_1_1_generic_id_no;
        //         $meds_keyword->frontend_url = $data->c_1_1_4_frontend_url;
        //         $meds_keyword->generic_name = $data->c_1_1_2_main_generic_name;
        //         $meds_keyword->other_names = $medcine;
        //         $meds_keyword->save();
        //     }
        //       }
       
        
    		$name = '';
    $meds_info= '';

    $array = MedsInfo::pluck('c_1_1_1_generic_id_no')->toArray(); 

    $array = array_map(
    function($value) { return (int)$value; },
    $array
);

    array_push($array,116);
    $range = range(108, max($array));
    $missing = array_diff($range, $array);

    if(count($missing)  > 0) {
        
        $missing = array_shift($missing);

    } else {
        $missing =  max($array)+1;
    }
           return view('aadhya.med_info.meds_info',compact('meds_info','name','missing') );

    }

    public function showById($id){

      if($id){
         	$meds_info = MedsInfo::with('meds_seo','meds_questions','meds_leaflets','meds_videos')->where('c_1_1_1_generic_id_no',$id)->first(); 
      $name = $meds_info->c_1_1_1_generic_id_no.' - '.$meds_info->c_1_1_2_main_generic_name ;


    $array = MedsInfo::pluck('c_1_1_1_generic_id_no')->toArray(); 

    $array = array_map(
    function($value) { return (int)$value; },
    $array
);

    array_push($array,116);
    $range = range(108, max($array));
    $missing = array_diff($range, $array);

    if(count($missing)  > 0) {
        
        $missing = array_shift($missing);

    } else {
        $missing =  max($array)+1;
    }
      if($meds_info){
    	   return view('aadhya.med_info.meds_info',compact('meds_info','name','missing') );
      }
        }
    
    return redirect()->route('aadhya.1-meds-info');
    }


    public function searchValidation(Request $request){
    	$search = $request->q;
    	$type = $request->type;
        $genrice_no = $request->genrice_no;
        $found = '';
    $status =false;
    if($search && $type){
    		if($type=='generic_id'){
            	$data = MedsInfo::select('id','c_1_1_1_generic_id_no','c_1_1_2_main_generic_name')->where('c_1_1_1_generic_id_no',$search)->first();
            	if($data){
           		  $status =true;
                  $found = $search;
          		  }
            } elseif($type=='generic'){
         		   $data = MedsInfo::select('id','c_1_1_1_generic_id_no','c_1_1_2_main_generic_name')->where('c_1_1_2_main_generic_name',$search)->first();
            	if($data){
           		 	 $status =true;
                  $found = $search;

          		  }
            }
    	elseif($type=='brand'){
        $name = explode(',',$search);
          
        if(count($name) > 0){
            $data = '';
            if($genrice_no){

       					 $data = MedsInfo::select('id','c_1_1_1_generic_id_no','c_1_1_2_main_generic_name','c_1_1_3_other_names')->where('c_1_1_1_generic_id_no','!=',$genrice_no)->where('c_1_1_3_other_names','LIKE',"%{$name[0]}%")->first();
                        } else{
                             $data = MedsInfo::select('id','c_1_1_1_generic_id_no','c_1_1_2_main_generic_name','c_1_1_3_other_names')->where('c_1_1_3_other_names','LIKE',"%{$name[0]}%")->first();
                        }
            	if($data){
           		  		$status =true;
                  $found = $name;

          		  }
        }
          if(count($name) > 1){
                foreach ($name as $key => $value) {
                    $data = '';
                     if($genrice_no){

                         $data = MedsInfo::select('id','c_1_1_1_generic_id_no','c_1_1_2_main_generic_name')->where('c_1_1_1_generic_id_no','!=',$genrice_no)->where('c_1_1_3_other_names','LIKE',"%{$value}%")->first();
                        } else{
                             $data = MedsInfo::select('id','c_1_1_1_generic_id_no','c_1_1_2_main_generic_name','c_1_1_3_other_names')->where('c_1_1_3_other_names','LIKE',"%{$value}%")->first();
                        }
        	   
            	if($data){
           		  		$status =true;
                          $found = $value;
                          break;

          		  }
                }
          }
   			 }
    	
         }
    	
    return response()->json(['status'=>$status,'found'=>$found]);
    }


    /**
     * Show the form for creating a new reso urce.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        
        $this->validate($request, [
         'genrice_no' => 'required',
        ]);
        $search = $request->genrice_no;

        $data = MedsInfo::select('id','c_1_1_1_generic_id_no','c_1_1_2_main_generic_name')->where('c_1_1_1_generic_id_no','LIKE',"%{$search}%")->orWhere('c_1_1_2_main_generic_name','LIKE',"%{$search}%")->orderBy('c_1_1_1_generic_id_no')->get();
        $output = '';
        // if searched countries count is larager than zero
        if (count($data)>0) {
            // concatenate output to the array
            $output = '<ul class="list-group" style="display: block; position: relative; z-index: 1;padding:none;border:1px solid black;">';
            // loop through the result array
            foreach ($data as $row){
                // concatenate output to the array
                $output .= '<li class="list-group-item hover-item  p-0 border-0" onclick="getmedInfo(this)" data-id="'.$row->id.'">'.$row->c_1_1_1_generic_id_no.' - '.$row->c_1_1_2_main_generic_name.'</li>';
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



   public function show($id){
        if($id){
            $data = MedsInfo::with('meds_seo','meds_leaflets','meds_questions','meds_videos')->findOrFail($id);

            Session::put('generic_id_no',$data->c_1_1_1_generic_id_no);
            return response()->json(['data'=>$data->toArray()]);
        }
        return response()->json(['data'=>null]);
   }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
    
        $this->validate($request, [
            'c_1_1_1_generic_id_no' => 'required|unique:1-1-meds-names,deleted_at,NULL',
            'c_1_1_2_main_generic_name' => 'unique:1-1-meds-names,deleted_at,NULL',
            'frontend_url' => 'required',
            'browsing_path' => 'required',
            'title_in_blue' => 'required',
            'home_disease' => 'required',
          
        ]);

        $data =  new MedsInfo;
    
        $data->c_1_1_1_generic_id_no = $request->c_1_1_1_generic_id_no;
        $data->c_1_1_2_main_generic_name = $request->c_1_1_2_main_generic_name;
        $data->c_1_1_3_other_names = $request->other_name;
        $data->c_1_1_4_frontend_url = $request->frontend_url;
        $data->c_1_1_5_browsing_path_name = $request->browsing_path;
        $data->c_1_1_6_h1_title_in_blue = $request->title_in_blue;
        $data->c_1_1_7_name_in_home_diseases = $request->home_disease;
        $data->c_1_1_8_drug_info_title = $request->drug_title;
        $data->c_1_1_9_generic_intro_details = $request->intro_detail;
        $data->c_1_1_11_di_source_name = $request->source_name;
        $data->c_1_1_12_di_source_url = $request->source_url;
        $data->save();
           $other_names = explode(',',$data->c_1_1_3_other_names);

            foreach ($other_names as $key => $medcine) {
                $meds_keyword = new MedsKeyword;
                $meds_keyword->generic_id_no = $data->c_1_1_1_generic_id_no;
                $meds_keyword->frontend_url = $data->c_1_1_4_frontend_url;
                $meds_keyword->generic_name = $data->c_1_1_2_main_generic_name;
                $meds_keyword->other_names = $medcine;
                $meds_keyword->save();
            }
            
            
            $meds_leaf = [
    ['c_1_3_2_pdf_no'=>1,'c_1_3_1_generic_id_no'=>$data->c_1_1_1_generic_id_no,'c_1_3_3_language' =>'English'],
    ['c_1_3_2_pdf_no'=>2,'c_1_3_1_generic_id_no'=>$data->c_1_1_1_generic_id_no,'c_1_3_3_language' =>'Arabic'],
    ['c_1_3_2_pdf_no'=>3,'c_1_3_1_generic_id_no'=>$data->c_1_1_1_generic_id_no,'c_1_3_3_language'=> 'Bulgarian'],
   ['c_1_3_2_pdf_no'=>4,'c_1_3_1_generic_id_no'=>$data->c_1_1_1_generic_id_no,'c_1_3_3_language' =>'Chinese'],
    ['c_1_3_2_pdf_no'=>5,'c_1_3_1_generic_id_no'=>$data->c_1_1_1_generic_id_no,'c_1_3_3_language'=>'Dutch'],
    ['c_1_3_2_pdf_no'=>6,'c_1_3_1_generic_id_no'=>$data->c_1_1_1_generic_id_no,'c_1_3_3_language'=>'Filipino'],
    ['c_1_3_2_pdf_no'=>7,'c_1_3_1_generic_id_no'=>$data->c_1_1_1_generic_id_no,'c_1_3_3_language'=>'French'],
    ['c_1_3_2_pdf_no'=>10,'c_1_3_1_generic_id_no'=>$data->c_1_1_1_generic_id_no,'c_1_3_3_language'=>'Hebrew'],
    ['c_1_3_2_pdf_no'=>12,'c_1_3_1_generic_id_no'=>$data->c_1_1_1_generic_id_no,'c_1_3_3_language'=>'Japanese'],
    ['c_1_3_2_pdf_no'=>13,'c_1_3_1_generic_id_no'=>$data->c_1_1_1_generic_id_no,'c_1_3_3_language'=>'Korean'],
    ['c_1_3_2_pdf_no'=>14,'c_1_3_1_generic_id_no'=>$data->c_1_1_1_generic_id_no,'c_1_3_3_language'=>'Portuguese'],
    ['c_1_3_2_pdf_no'=>15,'c_1_3_1_generic_id_no'=>$data->c_1_1_1_generic_id_no,'c_1_3_3_language'=>'Romanian'],
     ['c_1_3_2_pdf_no'=>16,'c_1_3_1_generic_id_no'=>$data->c_1_1_1_generic_id_no,'c_1_3_3_language'=>'Russian'],
   ['c_1_3_2_pdf_no'=>18,'c_1_3_1_generic_id_no'=>$data->c_1_1_1_generic_id_no,'c_1_3_3_language'=>'Spanish'],
    ['c_1_3_2_pdf_no'=>19,'c_1_3_1_generic_id_no'=>$data->c_1_1_1_generic_id_no,'c_1_3_3_language' =>'Swedish'],
    ['c_1_3_2_pdf_no'=>20,'c_1_3_1_generic_id_no'=>$data->c_1_1_1_generic_id_no,'c_1_3_3_language'=>'Thai'],
    ['c_1_3_2_pdf_no'=>21,'c_1_3_1_generic_id_no'=>$data->c_1_1_1_generic_id_no,'c_1_3_3_language'=> 'Turkish'],
    ['c_1_3_2_pdf_no'=>22,'c_1_3_1_generic_id_no'=>$data->c_1_1_1_generic_id_no,'c_1_3_3_language' =>'Vietnamese'],

];

DB::table('1-3-meds-leaflets')->insert($meds_leaf);
            
        if($data){
            return redirect()->route('aadhya.1-meds-info.index',$data->c_1_1_1_generic_id_no)->with('success1','Details Added Successfully ');   
         }else{
             return back()->with('error1','something error'); 
        }
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
        $data = MedsInfo::find($id);
        $this->validate($request, [
            'c_1_1_1_generic_id_no' => 'required|unique:1-1-meds-names,c_1_1_1_generic_id_no,'.$data->id,
            'c_1_1_2_main_generic_name' => 'required|unique:1-1-meds-names,c_1_1_2_main_generic_name,'.$data->id,
            'frontend_url' => 'required',
            'title_in_blue' => 'required',
            'browsing_path' => 'required',
         
        ]);
    
    // dd($request->all());
        $data->c_1_1_2_main_generic_name = $request->c_1_1_2_main_generic_name;
        $data->c_1_1_3_other_names = $request->other_name;
        $data->c_1_1_4_frontend_url = $request->frontend_url;
        $data->c_1_1_5_browsing_path_name = $request->browsing_path;
        $data->c_1_1_6_h1_title_in_blue = $request->title_in_blue;
        $data->c_1_1_7_name_in_home_diseases = $request->home_disease;
        $data->c_1_1_8_drug_info_title = $request->drug_title;
        $data->c_1_1_9_generic_intro_details = $request->intro_detail;
        $data->c_1_1_11_di_source_name = $request->source_name;
        $data->c_1_1_12_di_source_url = $request->source_url;
        $data->update();

        $meds_keywords = MedsKeyword::where('generic_id_no',$data->c_1_1_1_generic_id_no)->get();
        if($meds_keywords->count() < 1){
            $other_names = explode(',',$data->c_1_1_3_other_names);

            foreach ($other_names as $key => $medcine) {
                $meds_keyword = new MedsKeyword;
                $meds_keyword->generic_id_no = $data->c_1_1_1_generic_id_no;
                $meds_keyword->frontend_url = $data->c_1_1_4_frontend_url;
                $meds_keyword->generic_name = $data->c_1_1_2_main_generic_name;
                $meds_keyword->other_names = $medcine;
                $meds_keyword->save();
            }
         
        } else {
            $request_other_names = explode(',',$data->c_1_1_3_other_names);
            $other_names = array_column($meds_keywords->toArray(), 'other_names');
            $new_diff_in_other_names =array_diff($request_other_names,$other_names);
            $old_diff_in_other_names =array_diff($other_names,$request_other_names);
            if(!empty($new_diff_in_other_names)){
                      foreach ($new_diff_in_other_names as $key => $medcine) {
                    $meds_keyword = new MedsKeyword;
                    $meds_keyword->generic_id_no = $data->c_1_1_1_generic_id_no;
                    $meds_keyword->frontend_url = $data->c_1_1_4_frontend_url;
                    $meds_keyword->generic_name = $data->c_1_1_2_main_generic_name;
                    $meds_keyword->other_names = $medcine;
                    $meds_keyword->save();
                }
            }
              if(!empty($old_diff_in_other_names)){
                  MedsKeyword::whereIn('other_names',$old_diff_in_other_names)->where('generic_id_no',$data->c_1_1_1_generic_id_no)->delete();
            }
              $meds_keywords = MedsKeyword::where('generic_id_no',$data->c_1_1_1_generic_id_no)->update(['frontend_url'=>$data->c_1_1_4_frontend_url,'generic_name'=>$data->c_1_1_2_main_generic_name]);

            
        }
        if($data){
            return redirect()->route('aadhya.1-meds-info.index',$data->c_1_1_1_generic_id_no)->with('success','Details Updated Successfully ');   
         }else{
             return back()->with('error','something error'); 
        }

        
        
        //dd($id,$request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    
       $meds =  MedsInfo::where('c_1_1_1_generic_id_no',$id)->first();
        MedsQuestion::where('c_1_2_1_generic_id_no',$id)->delete();
        MedsLeaflet::where('c_1_3_1_generic_id_no',$id)->delete();
        MedsVideo::where('c_1_4_1_generic_id_no',$id)->delete();
        MedsSeo::where('c_1_5_1_generic_id_no',$id)->delete();
        MedsProduct::where('c_2_1_1_generic_id_no',$id)->delete();
        MedsPrice::where('c_2_2_1_generic_id_no',$id)->delete();
        GeneralMedicine::where('generic_med_no',$id)->delete();
        CriticalMedicine::where('generic_med_no',$id)->delete();
        MedsInfo::destroy($meds->id);
            return redirect()->route('aadhya.1-meds-info')->with('success1','Details deleted Successfully ');   

        
    }

    public function delete()
    {
        MedsInfo::truncate();
        return redirect()->back()->with('success','Details deleted Successfully ');
        
    }

    public function import(Request $request)
    {


         $this->validate($request, [
            'file' => 'required',          
        ]);

       Excel::import(new MedsNamesImport, $request->file('file'));
        
        return redirect()->back()->with('success','Details uploaded Successfully ');
    }

    public function export()
    {

         return Excel::download(new MedsNamesExport, '1-1-Medicine-Names-downloaded-'.date('dmY').'.xlsx');
    }
}
