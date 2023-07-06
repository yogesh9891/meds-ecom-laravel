<?php

namespace App\Http\Controllers;
use App\Models\HomeHeader;
use App\Models\HomeQa;
use App\Models\HomeSeo;
use App\Models\HomeGeneralDiseases;
use App\Models\HomeCriticalDiseases;
use App\Models\MedsInfo;


use App\Models\HomeMainBody;
use Illuminate\Http\Request;

class HomeHeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medsinfos = MedsInfo::get();
        $critical = HomeCriticalDiseases::get();
        $general = HomeGeneralDiseases::get();
        $seo = HomeSeo::first();
        $general_seo = HomeSeo::find(8);
        $cancer_seo = HomeSeo::find(9);
        $main = HomeMainBody::first();
        $faqs = HomeQa::orderBy('c_3_5_1_qs_no','asc')->orderBy('c_3_5_2_question','asc')->get();
        // dd($qa);
        $headers = HomeHeader::get();
        return view('aadhya.home.home',compact('headers','main','faqs','seo','general','critical','medsinfos','general_seo','cancer_seo'));
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
                'image_name' => 'required',
                'image_alt_tag' => 'required',
                'message_on_image' => 'required',
                'text_color' => 'required',
                'url_to_open' => 'required',
            ]);

            $image = '';
            if($request->hasFile('image_name')){
                 $image = $request->image_name->getClientOriginalName();
              $request->image_name->move(public_path('img'), $image);
              $image_url =asset('/img/'.$image) ;
          }
            $header = new HomeHeader;
            $header->c_3_1_2_image_name = $image;
            $header->c_3_1_3_image_alt_tag = $request->image_alt_tag;
            $header->c_3_1_1_image_no = $request->image_no;
            $header->c_3_1_4_message_on_image = $request->message_on_image;
            $header->c_3_1_5_text_color = $request->text_color;
            $header->c_3_1_6_url_to_open = $request->url_to_open;
       		 $header->display = $request->banner_display;

            $header->save();
            if($header){
                return redirect()->route('aadhya.3-home')->with('success','Detail Added Successfully');
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
    public function search($id)
    {
        
        if(!$id){
        	return false;
        }
        $data = HomeHeader::where('c_3_1_1_image_no',$id)->get();
        $output = '';
        // if searched countries count is larager than zero
        if (count($data)>0) {
            // concatenate output to the array
            $output = '<ul class="list-group" style="display: block; position: relative; z-index: 1;padding:none;border:1px solid black;">';
            // loop through the result array
            foreach ($data as $row){
                // concatenate output to the array
                $output .= '<li class="list-group-item hover-item  p-0 border-0" onclick="getBannerInfo(this)" data-id="'.$row->id.'">'.$row->c_3_1_1_image_no.'</li>';
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
   public function show($id)
    {
        if($id){
            $data = HomeHeader::findOrFail($id);
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
            $this->validate($request ,[
            'image_alt_tag' => 'required',
            'message_on_image' => 'required',
            'text_color' => 'required',
            'url_to_open' => 'required',
        ]);
        $header =  HomeHeader::findOrfail($id);

        if($request->hasFile('image_name')){
            $image = $request->image_name->getClientOriginalName();

          $request->image_name->move(public_path('img'), $image);
          $image_url =asset('img/'.$image) ;
        $header->c_3_1_2_image_name = $image;
      }
        $header->c_3_1_3_image_alt_tag = $request->image_alt_tag;
            $header->c_3_1_1_image_no = $request->image_no;

        $header->c_3_1_4_message_on_image = $request->message_on_image;
        $header->c_3_1_5_text_color = $request->text_color;
        $header->c_3_1_6_url_to_open = $request->url_to_open;
        $header->display = $request->banner_display;
        $header->save();
        if($header){
            return redirect()->route('aadhya.3-home')->with('success','Detail updated Successfully');
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
      	      $header = HomeHeader::findOrfail($id);
      	      $header->delete();
      	        return redirect()->route('aadhya.3-home')->with('success','Detail deletd Successfully');
    }

    public function bannerStatus(Request  $request)
    {
        $id = $request->id;
        $header = HomeHeader::findOrfail($id);
        if($header->status){
            $header->status =0;
        }else {

            $header->status =1;
        }
        $header->update();

        return response()->json(['success'=>true,'msg'=>'updated']);
    }
}
