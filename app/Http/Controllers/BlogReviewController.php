<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogReview;

class BlogReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogreviews = BlogReview::get();
        return view('aadhya.blog_review.blogs_reviews',compact('blogreviews'));
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
        $blogreview = new BlogReview;
        $blogreview->fullname = $request->fullName;
        $blogreview->country = $request->country;
        $blogreview->email = $request->email;
        $blogreview->comment = $request->comment;
        $blogreview->posting_date = $request->date;
        $blogreview->post_on_blog = $request->post_blog;
        $blogreview->display_hide = $request->display;
        $blogreview->save();
        if($blogreview){
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
            $data = BlogReview::with('blog')->findOrFail($id);

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
        $blogreview = BlogReview::get();
        $blog = BlogReview::find($id);
        return view('aadhya.blog_review.edit',compact('blogreview','blog')); 
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
        $blogreview = BlogReview::find($id);
        $blogreview->fullname = $request->fullName;
        $blogreview->country = $request->country;
        $blogreview->email = $request->email;
        $blogreview->comment = $request->comment;
        $blogreview->status = $request->status;
        $blogreview->update();
        if($blogreview){
            return redirect()->route('aadhya.blog_review')->with('success','Detail updated Successfully');
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
        $blogreview = BlogReview::find($id);
        $blogreview->destroy($id);
        return back()->with('success2','Detail Deleted Successfully');
    }


                public function deleteAll(Request $request)  
    {  
        $ids = $request->ids;  
        BlogReview::whereIn('id',explode(",",$ids))->delete();  
        return response()->json(['success'=>"Details deleted Successfully."]);  
    }
}
