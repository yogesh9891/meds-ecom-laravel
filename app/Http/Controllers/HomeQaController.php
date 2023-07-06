<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeQa;
class HomeQaController extends Controller
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
            'question_no' => 'required',
            'question' => 'required',
            'answer' => 'required',
        ]);
        $qa = new HomeQa;
        $qa->c_3_5_1_qs_no = $request->question_no;
        $qa->c_3_5_2_question = $request->question;
        $qa->c_3_5_3_answer = $request->answer;
        $qa->save();
        if($qa){
            return redirect()->route('aadhya.3-home')->with('success3','Detail Added Successfully');
        }else{
            return back()->with('error3','Something Went Wrong');
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
            $data = HomeQa::findOrFail($id);

            return response()->json(['data'=>$data->toArray()]);
        }
        return response()->json(['data'=>null]);
    }


    public function search(Request $request)
    {
        $this->validate($request, [
            'question_info_no' => 'required',
           ]);
           $search = $request->question_info_no;
           $data = HomeQa::select('id','c_3_5_1_qs_no','c_3_5_2_question','c_3_5_3_answer')->where('c_3_5_1_qs_no','LIKE',"%{$search}%")->orWhere('c_3_5_2_question','LIKE',"%{$search}%")->get();
           $output = '';

            // if searched countries count is larager than zero
        if (count($data)>0) {
            // concatenate output to the array
            $output = '<ul class="list-group" style="display: block; position: relative; z-index: 1">';
            // loop through the result array
            foreach ($data as $row){
                // concatenate output to the array
                $output .= '<li class="list-group-item hover-item  p-0 border-0" onclick="getmedQuestion(this)" data-id="'.$row->id.'">'.$row->c_3_5_1_qs_no.' - '.$row->c_3_5_2_question.' </li>';
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
        $this->validate($request ,[
            'question_no' => 'required',
            'question' => 'required',
            'answer' => 'required',
        ]);
        
        $qa = HomeQa::findOrFail($id);

        $qa->c_3_5_1_qs_no = $request->question_no;
        $qa->c_3_5_2_question = $request->question;
        $qa->c_3_5_3_answer = $request->answer;
        $qa->update();
        if($qa){
            return redirect()->route('aadhya.3-home')->with('success3','Detail Updated Successfully');
        }else{
            return back()->with('error3','Something Went Wrong');
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
        $data = HomeQa::find($id);
    $c_iud = $data->c_1_2_1_generic_id_no;
    $data->delete();
         return redirect()->back()->with('success1','Details deleted Successfully ');
    }
}
