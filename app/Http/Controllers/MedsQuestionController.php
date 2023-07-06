<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MedsQuestion;
use App\Imports\MedsQuestionImport;
use App\Exports\MedsQuestionExport;
use Maatwebsite\Excel\Facades\Excel;
class MedsQuestionController extends Controller
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
        $this->validate($request,[
        'question_no'=> 'required',
        'question' => 'required',
        'answer' => 'required',
        ]);

        $data = new MedsQuestion;
        $data->c_1_2_2_qs_no = $request->question_no;
        $data->c_1_2_1_generic_id_no = $request->c_1_2_1_generic_id_no;
        $data->c_1_2_3_question = $request->question;
        $data->c_1_2_4_answer = $request->answer;
        $data->save();
        if($data){
           return redirect()->route('aadhya.1-meds-info.index',$data->c_1_2_1_generic_id_no)->with('success1','Question Added Successfully '); 
        }else{
            return back()->with('error2','something went wrong');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

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
       // dd($request->all());
        $data = MedsQuestion::find($id);
        $this->validate($request,[
            'question_no'=> 'required',
            'question' => 'required',
            'answer' => 'required',
            ]);
    
            $data->c_1_2_2_qs_no = $request->question_no;
            $data->c_1_2_3_question = $request->question;
            $data->c_1_2_4_answer = $request->answer;
            $data->update();
            if($data){
               return redirect()->route('aadhya.1-meds-info.index',$data->c_1_2_1_generic_id_no)->with('success1','Details Added Successfully '); 
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
       
    	$data = MedsQuestion::find($id);
    $c_iud = $data->c_1_2_1_generic_id_no;
    $data->delete();
 		 return redirect()->route('aadhya.1-meds-info.index',$c_iud)->with('success1','Details deleted Successfully '); 
    }

    public function search(Request $request)
    {
        $this->validate($request, [
            'question_info_no' => 'required',
           ]);
           $search = $request->question_info_no;
           $med_id = $request->med_id;
           if(is_numeric($search)){

           $data = MedsQuestion::select('id','c_1_2_2_qs_no','c_1_2_3_question','c_1_2_1_generic_id_no')->where('c_1_2_2_qs_no','LIKE',"%{$search}%")->where('c_1_2_1_generic_id_no',$med_id)->orderBy('c_1_2_2_qs_no')->get();
       } else {
                  $data = MedsQuestion::select('id','c_1_2_2_qs_no','c_1_2_3_question','c_1_2_1_generic_id_no')->where('c_1_2_3_question','LIKE',"%{$search}%")->where('c_1_2_1_generic_id_no',$med_id)->orderBy('c_1_2_2_qs_no')->get();
       }
        //    $output = '';

        // if (count($data)>0) {

        //     $output = .'<select class="form-control">'

        //         foreach ($data as $row){
        //         // concatenate output to the array
        //               $output .=    '<option value="'..'">'.$row->c_1_2_2_qs_no.'-'.$row->c_1_2_3_question.'</option>';
                
        //     }
        //     $output = .'</select>';

        // }
            // if searched countries count is larager than zero
        // if (count($data)>0) {
        //     // concatenate output to the array
        //     $output = '<ul class="list-group" style="display: block; position: relative; z-index: 1">';
        //     // loop through the result array
        //     foreach ($data as $row){
        //         // concatenate output to the array
        //         $output .= '<li class="list-group-item hover-item  p-0 border-0" onclick="getmedQuestion(this)" data-id="'.$row->id.'">'.$row->c_1_2_2_qs_no.' - '.$row->c_1_2_3_question.' </li>';
        //     }
        //     // end of output
        //     $output .= '</ul>';
        // }
        // else {
        //     // if there's no matching results according to the input
        //     $output .= '<li class="list-group-item">'.'No results'.'</li>';
        // }
        // return output result array
        return $output;
    }

    public function show($id){
        if($id){
            $data = MedsQuestion::findOrFail($id);

            return response()->json(['data'=>$data->toArray()]);
        }
        return response()->json(['data'=>null]);
   }


      public function delete()
    {
        MedsQuestion::truncate();
        return redirect()->back()->with('success','Details deleted Successfully ');
        
    }

    public function import(Request $request)
    {


         $this->validate($request, [
            'file' => 'required',          
        ]);

       Excel::import(new MedsQuestionImport, $request->file('file'));
        
        return redirect()->back()->with('success','Details uploaded Successfully ');
    }

    public function export()
    {

         return Excel::download(new MedsQuestionExport, '1-2-Qs-Ans-Information-downloaded-'.date('dmY').'.xlsx');
    }
}
