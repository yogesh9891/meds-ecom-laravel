<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Faq;
use App\Models\FaqTitle;

class FaqsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $faq_title =  FaqTitle::first();
        $faqs = Faq::orderBy('question_no','asc')->orderBy('question','asc')->get();
        return view('aadhya.faqs.faqs',compact('faqs','faq_title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function updateTitle(Request $request)
    {
        $faq_title =  FaqTitle::first();
        $faq_title->section_1 = $request->section_1;
        $faq_title->section_2 = $request->section_2;
        $faq_title->section_3 = $request->section_3;
        $faq_title->section_4 = $request->section_4;
        $faq_title->section_5 = $request->section_5;
        $faq_title->save();
         if($faq_title){
            return back()->with('success','UPdate Added Successfully');
         }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $faqs = new Faq;
        $faqs->type = $request->type;
        $faqs->question_no = $request->question_no;
        $faqs->question = $request->question;
        $faqs->answer = $request->answer;
        $faqs->save();
             return back();
         if($faqs){
            return back()->with('success','Detail Added Successfully');
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
        $faqs = Faq::find($id);
       // $faqs->type = $request->type;
        $faqs->question_no = $request->question_no;
        $faqs->question = $request->question;
        $faqs->answer = $request->answer;
        $faqs->update();
        
         return back();
        if($faqs){
            return back()->with('success','Detail updated Successfully');
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
         $data = Faq::find($id);
         $data->destroy($id);
        return redirect()->back()->with('success','Details deleted Successfully ');
    }

    public function search(Request $request)
    {
        $this->validate($request, [
            'question_info_no' => 'required',
           ]);
           $search = $request->question_info_no;
           $type = $request->type;
           $data = Faq::select('id','question_no','question','answer')->where('question','LIKE',"%{$search}%")->where('type',$type)->get();
           $output = '';

            // if searched countries count is larager than zero
        if (count($data)>0) {
            // concatenate output to the array
            $output = '<ul class="list-group" style="display: block; position: relative; z-index: 1">';
            // loop through the result array
            foreach ($data as $row){
                // concatenate output to the array
                $output .= '<li class="list-group-item hover-item  p-0 border-0" onclick="getmedQuestion(this)" data-id="'.$row->id.'">'.$row->question_no.' - '.$row->question.' </li>';
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

    public function show($id)
    { 
         if($id){
            $data = Faq::findOrFail($id);
            return response()->json(['data'=>$data->toArray()]);
            }
        return response()->json(['data'=>null]);
    }


    public function general1Search(Request $request)
    {
        $this->validate($request, [
            'generic_info1_no' => 'required',
           ]);
           $search = $request->generic_info1_no;
           $type = $request->type;
           $data = Faq::select('id','question_no','question','answer')->where('question','LIKE',"%{$search}%")->orWhere('type',$type)->get();
           $output = '';

            // if searched countries count is larager than zero
        if (count($data)>0) {
            // concatenate output to the array
            $output = '<ul class="list-group" style="display: block; position: relative; z-index: 1">';
            // loop through the result array
            foreach ($data as $row){
                // concatenate output to the array
                $output .= '<li class="list-group-item hover-item  p-0 border-0" onclick="getmedQuestion(this)" data-id="'.$row->id.'">'.$row->question_no.' - '.$row->question.' </li>';
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

    public function generalShow($id)
    { 
         if($id){
            $data = Faq::findOrFail($id);
            return response()->json(['data'=>$data->toArray()]);
            }
        return response()->json(['data'=>null]);
    }


    public function general2Search(Request $request)
    {
        $this->validate($request, [
            'generic_info2_no' => 'required',
           ]);
           $search = $request->generic_info2_no;
           $type = $request->type;
           $data = Faq::select('id','question_no','question','answer')->where('question','LIKE',"%{$search}%")->orWhere('type',$type)->get();
           $output = '';

            // if searched countries count is larager than zero
        if (count($data)>0) {
            // concatenate output to the array
            $output = '<ul class="list-group" style="display: block; position: relative; z-index: 1">';
            // loop through the result array
            foreach ($data as $row){
                // concatenate output to the array
                $output .= '<li class="list-group-item hover-item  p-0 border-0" onclick="getmedQuestion(this)" data-id="'.$row->id.'">'.$row->question_no.' - '.$row->question.' </li>';
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


     public function general3Search(Request $request)
    {
        $this->validate($request, [
            'generic_info3_no' => 'required',
           ]);
           $search = $request->generic_info3_no;
           $type = $request->type;
           $data = Faq::select('id','question_no','question','answer')->where('question','LIKE',"%{$search}%")->orWhere('type',$type)->get();
           $output = '';

            // if searched countries count is larager than zero
        if (count($data)>0) {
            // concatenate output to the array
            $output = '<ul class="list-group" style="display: block; position: relative; z-index: 1">';
            // loop through the result array
            foreach ($data as $row){
                // concatenate output to the array
                $output .= '<li class="list-group-item hover-item  p-0 border-0" onclick="getmedQuestion(this)" data-id="'.$row->id.'">'.$row->question_no.' - '.$row->question.' </li>';
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


    public function general4Search(Request $request)
    {
        $this->validate($request, [
            'generic_info4_no' => 'required',
           ]);
           $search = $request->generic_info4_no;
           $type = $request->type;
           $data = Faq::select('id','question_no','question','answer')->where('question','LIKE',"%{$search}%")->orWhere('type',$type)->get();
           $output = '';

            // if searched countries count is larager than zero
        if (count($data)>0) {
            // concatenate output to the array
            $output = '<ul class="list-group" style="display: block; position: relative; z-index: 1">';
            // loop through the result array
            foreach ($data as $row){
                // concatenate output to the array
                $output .= '<li class="list-group-item hover-item  p-0 border-0" onclick="getmedQuestion(this)" data-id="'.$row->id.'">'.$row->question_no.' - '.$row->question.' </li>';
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


    public function general5Search(Request $request)
    {
        $this->validate($request, [
            'generic_info5_no' => 'required',
           ]);
           $search = $request->generic_info5_no;
           $type = $request->type;
           $data = Faq::select('id','question_no','question','answer')->where('question','LIKE',"%{$search}%")->orWhere('type',$type)->get();
           $output = '';

            // if searched countries count is larager than zero
        if (count($data)>0) {
            // concatenate output to the array
            $output = '<ul class="list-group" style="display: block; position: relative; z-index: 1">';
            // loop through the result array
            foreach ($data as $row){
                // concatenate output to the array
                $output .= '<li class="list-group-item hover-item  p-0 border-0" onclick="getmedQuestion(this)" data-id="'.$row->id.'">'.$row->question_no.' - '.$row->question.' </li>';
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



}


