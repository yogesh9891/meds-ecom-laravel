<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MedsLeaflet;
use App\Imports\MedsLeafletImport;
use App\Exports\MedsLeafletExport;
use Maatwebsite\Excel\Facades\Excel;
class MedsLeafletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public $language = 
    [
    1 =>'English',
    2 =>'Arabic',
    3=> 'Bulgarian',
    4 =>'Chinese',
    5=>'Dutch',
    6=>'Filipino',
    7=>'French',
    10=>'Hebrew',
    12=>'Japanese',
    13=>'Korean',
    14=>'Portuguese',
    15=>'Romanian',
     16=>'Russian',
    18=>'Spanish',
    19 =>'Swedish',
    20=>'Thai',
    21=> 'Turkish',
    22 =>'Vietnamese',
];

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
        // $this->validate($request ,[
        //     'leaf_language'=>'required',
        //     'c_1_3_1_generic_id_no'=>'required',
        //      'pdf' => 'required',
            
        // ]);
        
       
            
        foreach($request->leaf_id as $key  => $leaf_id){
              $data = MedsLeaflet::find($leaf_id);
                // if(isset($request->c_1_3_4_pdf_file[$key])){
                       $data->c_1_3_4_pdf_file = $request->c_1_3_4_pdf_file[$key];
                // }
      
            $data->update();
        }
            
        // $image ='';
        // if($request->hasFile('pdf')){
        //     $image = $request->pdf->getClientOriginalName();
        //     $request->pdf->move(public_path('info'), $image);
        // }
        // $data = new MedsLeaflet;
        // $data->c_1_3_1_generic_id_no = $request->c_1_3_1_generic_id_no;
        // $data->c_1_3_2_pdf_no = $request->leaf_language;
        // $data->c_1_3_3_language = $this->language[$request->leaf_language];
        // $data->c_1_3_4_pdf_file = $image;

        // $data->save();
          return redirect()->route('aadhya.1-meds-info.index',$data->c_1_3_1_generic_id_no)->with('success1','Details Added Successfully ');   
        if($data){
        return redirect()->route('aadhya.1-meds-info.index',$data->c_1_3_1_generic_id_no)->with('success1','Details Added Successfully ');   
           }else{
        return back()->with('error5','something error'); 
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $data = MedsLeaflet::find($id);
    $c_iud = $data->c_1_3_1_generic_id_no;
    $data->delete();
 		 return redirect()->route('aadhya.1-meds-info.index',$c_iud)->with('success1','Details deleted Successfully '); 
    }


       public function delete()
    {
        MedsLeaflet::truncate();
        return redirect()->back()->with('success','Details deleted Successfully ');
        
    }

    public function import(Request $request)
    {


         $this->validate($request, [
            'file' => 'required',          
        ]);

       Excel::import(new MedsLeafletImport, $request->file('file'));
        
        return redirect()->back()->with('success','Details uploaded Successfully ');
    }

    public function export()
    {

         return Excel::download(new MedsLeafletExport, '1-3-FDA-Leaflets-downloaded-'.date('dmY').'.xlsx');
    }
}
