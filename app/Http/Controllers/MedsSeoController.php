<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MedsSeo;
use App\Imports\MedsSeoImport;
use App\Exports\MedsSeoExport;
use Maatwebsite\Excel\Facades\Excel;
class MedsSeoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('aadhya.med_info.meds_info');
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
        //dd($request->all());
         $this->validate($request ,[
            'meta_title' => 'required',
            'meta_description' => 'required',
            'meta_keyword' => 'required',
            'hyperlink_link' => 'required',
            'language' => 'required',
            'country' => 'required',
            'distribution' => 'required',
            'author' => 'required',

        ]);
    
     $data = new MedsSeo;
     $data->c_1_5_1_generic_id_no = $request->c_1_5_1_generic_id_no;
     $data->c_1_5_2_meta_title = $request->meta_title;
     $data->c_1_5_3_meta_description = $request->meta_description;
     $data->c_1_5_4_meta_keyword = $request->meta_keyword;
     $data->c_1_5_5_hyperlink_page_tags = $request->hyperlink_link;
     $data->c_1_5_6_canonical = $request->canonical;
     $data->c_1_5_7_language = $request->language;
     $data->c_1_5_8_country = $request->country;
     $data->c_1_5_9_distribution = $request->distribution;
     $data->c_1_5_10_author = $request->author;
     $data->c_1_5_11_robots = $request->robots;
     $data->c_1_5_12_revisit_after = $request->revisit_after;
     $data->c_1_5_13_rating_value = $request->rating_value;
     $data->c_1_5_14_rating_count = $request->rating_count;
     $data->c_1_5_15_other_tags_3 = $request->other_tag_3;
     $data->c_1_5_16_other_tags_4 = $request->other_tag_4;
     $data->c_1_5_17_other_tags_5 = $request->other_tag_5;
     $data->save();
     if($data){
            return redirect()->route('aadhya.1-meds-info.index',$data->c_1_5_1_generic_id_no)->with('success55','Details Added Successfully ');   
         }else{
             return back()->with('error55','something error'); 
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
     $data = MedsSeo::find($id);
        $this->validate($request ,[
            'meta_title' => 'required',
            'meta_description' => 'required',
            'meta_keyword' => 'required',
        ]);
    
     $data->c_1_5_2_meta_title = $request->meta_title;
     $data->c_1_5_3_meta_description = $request->meta_description;
     $data->c_1_5_4_meta_keyword = $request->meta_keyword;
     $data->c_1_5_5_hyperlink_page_tags = $request->hyperlink_link;
     $data->c_1_5_6_canonical = $request->canonical;
     $data->c_1_5_7_language = $request->language;
     $data->c_1_5_8_country = $request->country;
     $data->c_1_5_9_distribution = $request->distribution;
     $data->c_1_5_10_author = $request->author;
     $data->c_1_5_11_robots = $request->robots;
     $data->c_1_5_12_revisit_after = $request->revisit_after;
     $data->c_1_5_13_rating_value = $request->rating_value;
     $data->c_1_5_14_rating_count = $request->rating_count;
     $data->c_1_5_15_other_tags_3 = $request->other_tag_3;
     $data->c_1_5_16_other_tags_4 = $request->other_tag_4;
     $data->c_1_5_17_other_tags_5 = $request->other_tag_5;
     $data->update();
     if($data){
            return redirect()->route('aadhya.1-meds-info.index',$data->c_1_5_1_generic_id_no)->with('success55','Details Update Successfully ');   
         }else{
             return back()->with('error55','something error'); 
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
        MedsSeo::truncate();
        return redirect()->back()->with('success','Details deleted Successfully ');
        
    }

    public function import(Request $request)
    {


         $this->validate($request, [
            'file' => 'required',          
        ]);

       Excel::import(new MedsSeoImport, $request->file('file'));
        
        return redirect()->back()->with('success','Details uploaded Successfully ');
    }

    public function export()
    {

         return Excel::download(new MedsSeoExport, '1-5-Medicine-SEO-downloaded-'.date('dmY').'.xlsx');
    }
}
