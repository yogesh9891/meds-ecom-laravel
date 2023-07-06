<?php

namespace App\Http\Controllers;
use App\Models\HomeMainBody;
use Illuminate\Http\Request;

class HomeMainBodyController extends Controller
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
        //dd($request->all());
      
        $main = HomeMainBody::first();
        $this->validate($request ,[
            'title_in_green' => 'required',
            'ans_h2_green' => 'required',
            'h2_blue_line_1' => 'required',
            'text_below_blue_line_1' => 'required',
            'h2_blue_line_2' => 'required',
            'text_below_blue_line_2' => 'required',
            'h2_blue_line_3' => 'required',
            'text_below_blue_line_3' => 'required',
         
        ]);
        $main->c_3_2_1_h1_title_in_green = $request->title_in_green;
        $main->c_3_2_2_qa_h2_green_title = $request->ans_h2_green;
        $main->c_3_2_3_h2_blue_line_1 = $request->h2_blue_line_1;
        $main->c_3_2_4_text_below_blue_1 = $request->text_below_blue_line_1;
        $main->c_3_2_5_h2_blue_line_2 = $request->h2_blue_line_2;
        $main->c_3_2_6_text_below_blue_2 = $request->text_below_blue_line_2;
        $main->c_3_2_7_h2_blue_line_3 = $request->h2_blue_line_3;
        $main->c_3_2_8_text_below_blue_3 = $request->text_below_blue_line_3;
      
        $main->update();
        if($main){
            return redirect()->route('aadhya.3-home')->with('success2','Detail Updated Successfully');
        }else{
            return back()->with('error2','Something Went wrong');
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
        $main = HomeMainBody::first();
        $this->validate($request ,[
            'title_in_green' => 'required',
            'ans_h2_green' => 'required',
            'h2_blue_line_1' => 'required',
            'text_below_blue_line_1' => 'required',
            'h2_blue_line_2' => 'required',
            'text_below_blue_line_2' => 'required',
            'h2_blue_line_3' => 'required',
            'text_below_blue_line_3' => 'required',
        ]);
        $main->c_3_2_1_h1_title_in_green = $request->title_in_green;
        $main->c_3_2_2_qa_h2_green_title = $request->ans_h2_green;
        $main->c_3_2_3_h2_blue_line_1 = $request->h2_blue_line_1;
        $main->c_3_2_4_text_below_blue_1 = $request->text_below_blue_line_1;
        $main->c_3_2_5_h2_blue_line_2 = $request->h2_blue_line_2;
        $main->c_3_2_6_text_below_blue_2 = $request->text_below_blue_line_2;
        $main->c_3_2_7_h2_blue_line_3 = $request->h2_blue_line_3;
        $main->c_3_2_8_text_below_blue_3 = $request->text_below_blue_line_3;
     
        $main->update();
        if($main){
            return redirect()->route('aadhya.3-home')->with('success2','Detail Updated Successfully');
        }else{
            return back()->with('error2','Something Went wrong');
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
}
