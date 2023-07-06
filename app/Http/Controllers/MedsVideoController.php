<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MedsVideo;
use App\Imports\MedsVideoImport;
use App\Exports\MedsVideoExport;
use Maatwebsite\Excel\Facades\Excel;
class MedsVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medsVideos = MedsVideo::get();
        return view('aadhya.med_info.meds_info',compact('medsVideos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $this->validate($request, [
            'video_info_no' => 'required',
           ]);
           $search = $request->video_info_no;
           $med_id = $request->med_id;
           $data = MedsVideo::select('id','c_1_4_2_video_no','c_1_4_3_video_title')->where('c_1_4_2_video_no','LIKE',"%{$search}%")->orWhere('c_1_4_1_generic_id_no',$med_id)->get();
           $output = '';

            // if searched countries count is larager than zero
        if (count($data)>0) {
            // concatenate output to the array
            $output = '<ul class="list-group" style="display: block; position: relative; z-index: 1">';
            // loop through the result array
            foreach ($data as $row){
                // concatenate output to the array
                $output .= '<li class="list-group-item hover-item  p-0 border-0"onclick="getMedVideo(this)" data-id="'.$row->id.'">'.$row->c_1_4_2_video_no.' - '.$row->c_1_4_3_video_title.' </li>';
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {//dd($request->all());
        $this->validate($request ,[
        'video_no' => 'required',
        'video_title' => 'required',
        // 'display_image' => 'mimes:png,jpeg,jpg',
        'video_url' => 'required',
        ]);
    $image = '';
        if($request->hasFile('display_image')){
           $image = $request->display_image->getClientOriginalName();
          $request->display_image->move(public_path('img-vi'), $image);
          $image_url =asset('img-vi/'.$image) ;
      }
    $video_url = '';
    $video = '';
    if($request->hasFile('upload_video')){
           $video = $request->upload_video->getClientOriginalName();
          $request->upload_video->move(public_path('videos'), $video);
          $video_url =asset('videos/'.$video) ;
    //dd($request->video_url);
      }
    
     $data = new MedsVideo;
     $data->c_1_4_1_generic_id_no = $request->c_1_4_1_generic_id_no;
     $data->c_1_4_2_video_no = $request->video_no;
     $data->c_1_4_3_video_title = $request->video_title;
     $data->source_url = $request->source_url;
     $data->c_1_4_4_image =  $request->display_image;
     $data->c_1_4_5_image_alt_tag = $request->alt_tag;
     $data->c_1_4_6_video_file  = $request->upload_video;
     $data->c_1_4_7_video_url = $video_url;
     $data->youtube_url = $request->youtube_url;
     $data->save();
     if($data){
           return redirect()->route('aadhya.1-meds-info.index',$data->c_1_4_1_generic_id_no)->with('success1','Details Added Successfully ');      
         }else{
             return back()->with('error3','something error'); 
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
            $data = MedsVideo::findOrFail($id);

            return response()->json(['data'=>$data->toArray()]);
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
        //dd($request->all());
        $data = MedsVideo::find($id);
        $this->validate($request ,[
            'video_no' => 'required',
            'video_title' => 'required',
            // 'display_image' => 'mimes:png,jpeg,jpg',
            'video_url' => 'required',
            ]);
        $image = '';
            if($request->hasFile('display_image')){
                $image = $request->display_image->getClientOriginalName();
          $request->display_image->move(public_path('img-vi'), $image);
          $image_url =asset('img-vi/'.$image) ;
         $data->c_1_4_4_image = $image;
          }
        $video_url = '';
        $video = '';
        if($request->hasFile('upload_video')){
                      $video = $request->upload_video->getClientOriginalName();
          $request->upload_video->move(public_path('videos'), $video);
          $video_url =asset('videos/'.$video) ;
         $data->c_1_4_6_video_file  = $video;
        //dd($request->video_url);
          }
        
         $data->c_1_4_2_video_no = $request->video_no;
         $data->c_1_4_3_video_title = $request->video_title;
         $data->source_url = $request->source_url;
         $data->c_1_4_5_image_alt_tag = $request->alt_tag;
         $data->c_1_4_4_image = $request->display_image;
         $data->c_1_4_6_video_file = $request->upload_video;
         $data->c_1_4_7_video_url = $request->video_url;
         $data->youtube_url = $request->youtube_url;
        

         $data->update();
         if($data){
                  return redirect()->route('aadhya.1-meds-info.index',$data->c_1_4_1_generic_id_no)->with('success1','Details Added Successfully ');       
             }else{
                 return back()->with('error3','something error'); 
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
       	$data = MedsVideo::find($id);
    $c_iud = $data->c_1_4_1_generic_id_no;
    $data->delete();
 		 return redirect()->route('aadhya.1-meds-info.index',$c_iud)->with('success1','Details deleted Successfully '); 
    }

           public function delete()
    {
        MedsVideo::truncate();
        return redirect()->back()->with('success','Details deleted Successfully ');
        
    }

    public function import(Request $request)
    {


         $this->validate($request, [
            'file' => 'required',          
        ]);

       Excel::import(new MedsVideoImport, $request->file('file'));
        
        return redirect()->back()->with('success','Details uploaded Successfully ');
    }

    public function export()
    {

         return Excel::download(new MedsVideoExport, '1-4-Consumer-Videos-downloaded-'.date('dmY').'.xlsx');
    }
}
