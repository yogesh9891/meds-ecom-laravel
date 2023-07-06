<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VideoReview;

class VideoReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videoReviews = VideoReview::get();
        return view('aadhya.video_review.video_reviews',compact('videoReviews'));
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

    	$data =   $this->validate($request,[
            'full_name'=>'required',
            'country'=>'required',
            'email'=>'required',
            // 'image'=>'required|mimes:jpeg,png,jpg',
            // 'video'=>'required|mimes:mp4',
        ]);
        $videoreview = new VideoReview;
        $videoreview->full_name = $request->full_name;
        $videoreview->country = $request->country;
        $videoreview->email = $request->email;
        $videoreview->posting_date = $request->posting_date;
        $videoreview->display_position = $request->display_position;
        $image_url= '';
        $video_url= '';
          if($request->hasFile('video')){
		           $video = $request->video->getClientOriginalName();
		          $request->video->move(public_path('videos'), $video);
		          $video_url =asset('videos/'.$video) ;
		    //dd($request->video_url);
		      }


		  if($request->hasFile('image')){
       	   	 $img = $request->image->getClientOriginalName();
         	 $request->image->move(public_path('img-vi'), $img);
	         $image_url =asset('img-vi/'.$img) ;
	      }
	    
    
        $videoreview->image = $request->image;
        $videoreview->video = $request->video;
        $videoreview->testimonial = $request->testimonial_page??0;
        $videoreview->about = $request->about_page??0;
        $videoreview->testimonial_top_5 = $request->testimonial_top_5??0;
        $videoreview->about_top_5 = $request->about_top_5??0;
        $videoreview->save();
        if($videoreview){
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
    public function show($id)
    {
        if($id){
            $data = VideoReview::findOrFail($id);

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
        $videoreview = VideoReview::get();
        $video = VideoReview::find($id);
        return view('aadhya.video_review.edit',compact('videoreview','video')); 
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
        $videoreview = VideoReview::find($id);
         $videoreview->full_name = $request->full_name;
        $videoreview->country = $request->country;
        $videoreview->email = $request->email;
        $videoreview->posting_date = $request->posting_date;
        $videoreview->display_position = $request->display_position;
        $image_url= '';
        $video_url= '';
          if($request->hasFile('video')){
                   $video = $request->video->getClientOriginalName();
                  $request->video->move(public_path('videos'), $video);
                  $video_url =asset('videos/'.$video) ;
            //dd($request->video_url);
        $videoreview->image = $image_url;
              }


          if($request->hasFile('image')){
             $img = $request->image->getClientOriginalName();
             $request->image->move(public_path('img-vi'), $img);
             $image_url =asset('img-vi/'.$img) ;
        $videoreview->video = $video_url;
          }
        
    
        $videoreview->testimonial = $request->testimonial_page??0;
        $videoreview->about = $request->about_page??0;
        $videoreview->testimonial_top_5 = $request->testimonial_top_5??0;
        $videoreview->about_top_5 = $request->about_top_5??0;
          $videoreview->image = $request->image;
        $videoreview->video = $request->video;
        $videoreview->update();
        if($videoreview){
            return redirect()->route('aadhya.video_review')->with('success','Detail Updated Successfully');
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
         $videoreview = VideoReview::find($id);
        $videoreview->destroy($id);
        return back()->with('success2','Detail Deleted Successfully');
    }

              public function deleteAll(Request $request)  
    {  
        $ids = $request->ids;  

        VideoReview::whereIn('id',explode(",",$ids))->delete();  
        return response()->json(['success'=>"Details deleted Successfully."]);  
    }
}
