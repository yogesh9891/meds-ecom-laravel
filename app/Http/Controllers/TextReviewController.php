<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TextReview;
use App\Imports\TextReviewImport;
use App\Exports\TextReviewExport;
use Maatwebsite\Excel\Facades\Excel;
class TextReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $textReviews = TextReview::get();

        return view('aadhya.text_review.text_reviews',compact('textReviews'));
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
        $textreview = new TextReview;
        $textreview->full_name = $request->fullName;
        $textreview->country = $request->country;
        $textreview->email = $request->email;
        $textreview->posting_from_page = $request->postingPage;
         
        $textreview->rating_1 = $request->rating_1;
        $textreview->rating_2 = $request->rating_2;
        $textreview->rating_3 = $request->rating_3;
        $textreview->rating_4 = $request->rating_4;
        $textreview->rating_5 = $request->rating_5;
          $avg_rating = round(($request->rating_1+$request->rating_2+$request->rating_3+$request->rating_4+$request->rating_5)/5,2);
        $textreview->rating  = $avg_rating;
        $textreview->comment = $request->comment;
        $textreview->medicine = $request->medicine;
        $textreview->top5 = $request->top5;
        $textreview->testimonials = json_encode($request->testimonial);
        $textreview->about = json_encode($request->about);
        $textreview->home = json_encode($request->home);
        $textreview->save();
        if($textreview){
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
            $data = TextReview::with('medication')->find($id);

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
        $textReview = TextReview::get();
        $text = TextReview::find($id);
        return view('aadhya.text_review.edit',compact('textReview','text')); 
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
        $textreview = TextReview::find($id);

        $textreview->full_name = $request->fullName;
        $textreview->country = $request->country;
        $textreview->email = $request->email;
        $textreview->posting_from_page = $request->postingPage;
         $textreview->rating_1 = $request->rating_1;
        $textreview->rating_2 = $request->rating_2;
        $textreview->rating_3 = $request->rating_3;
        $textreview->rating_4 = $request->rating_4;
        $textreview->rating_5 = $request->rating_5;
          $avg_rating = round(($request->rating_1+$request->rating_2+$request->rating_3+$request->rating_4+$request->rating_5)/5,2);
        $textreview->rating  = $avg_rating;
        $textreview->comment = $request->comment;
        $textreview->medicine = $request->medicine;
        $textreview->top5 = $request->top5 ?? 0;
        $textreview->testimonials = $request->testimonial ?? 0;
        $textreview->about = (int)$request->about ?? 0;
        $textreview->home = $request->home ?? 0;
        $textreview->testimonial_top_10 = $request->testimonial_top_10 ?? 0;
        $textreview->home_top_5 = $request->home_top_5 ?? 0;
        $textreview->about_top_5 = $request->about_top_5 ?? 0;
        $textreview->medicine_status = $request->medicine_status ?? 0;
        $textreview->update();
        if($textreview){
            return redirect()->route('aadhya.text_review')->with('success','Detail Updated Successfully');
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
        $textReview = TextReview::find($id);
        $textReview->destroy($id);
        return back()->with('success2','Detail Deleted Successfully');
    }

    public function status(Request $request)
    {
        $id = $request->id ;

        $status = (int)$request->status;
        $text_review = TextReview::find($id);
        $text_review->status = $status;
        $text_review->update();
        return response()->json(['status'=>true,'type'=>$status]);
    }

     public function delete()
    {
        TextReview::truncate();
        return redirect()->back()->with('success','Details deleted Successfully ');
        
    }

    public function import(Request $request)
    {
        
         $this->validate($request, [
            'file' => 'required',          
        ]);

       Excel::import(new TextReviewImport, $request->file('file'));
        
        return redirect()->back()->with('success','Details uploaded Successfully ');
    }

    public function export()
    {

         return Excel::download(new TextReviewExport, '6-Text-Reviews-downloaded-'.date('dmY').'.xlsx');
    }

            public function deleteAll(Request $request)  
    {  
        $ids = $request->ids;  
        TextReview::whereIn('id',explode(",",$ids))->delete();  
        return response()->json(['success'=>"Details deleted Successfully."]);  
    } 
}
