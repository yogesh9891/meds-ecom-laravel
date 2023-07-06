<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeSeo;
class HomeSeoController extends Controller
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
        // $this->validate($request ,[
        //     'frontent_url' => 'required',
        //     'browsing_path_name' => 'required',
        //     'meta_title' => 'required',
        //     'meta_description' => 'required',
        //     'meta_keeyword' => 'required',
        //     'hyperlink_link_page' => 'required',
        //     'canonical' => 'required',
        //     'language' => 'required',
        //     'country' => 'required',
        //     'distribution' => 'required',
        //     'author' => 'required',
        //     'robots' => 'required',
        //     'revisit_after' => 'required',
        //     'rating_value' => 'required',
        //     'rating_count' => 'required',
        //     'other_tag_3' => 'required',
        //     'other_tag_4' => 'required',
        //     'other_tag_5' => 'required',
        // ]);
        $seo = HomeSeo::first();
        $seo->c_3_6_1_frontend_url = $request->frontent_url;
        $seo->c_3_6_2_browsing_path_name = $request->browsing_path_name;
        $seo->c_3_6_3_meta_title = $request->meta_title;
        $seo->c_3_6_4_meta_description = $request->meta_description;
        $seo->c_3_6_5_meta_keyword = $request->meta_keeyword;
        $seo->c_3_6_6_hyperlink_page_tags = $request->hyperlink_link_page;
        $seo->c_3_6_7_canonical = $request->canonical;
        $seo->c_3_6_8_language = $request->language;
        $seo->c_3_6_9_country = $request->country;
        $seo->c_3_6_10_distribution = $request->distribution;
        $seo->c_3_6_11_author = $request->author;
        $seo->c_3_6_12_robots = $request->robots;
        $seo->c_3_6_13_revisit_after = $request->revisit_after;
        $seo->c_3_6_14_rating_value = $request->rating_value;
        $seo->c_3_6_15_rating_count = $request->rating_count;
        $seo->c_3_6_16_other_tags_3 = $request->other_tag_3;
        $seo->c_3_6_17_other_tags_4 = $request->other_tag_4;
        $seo->c_3_6_18_other_tags_5 = $request->other_tag_5;
        $seo->save();
        if($seo){
            return redirect()->route('aadhya.3-home')->with('success4','Detail Added Successfully');
        }else{
            return back()->with('error4','Something Went Wrong');
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
        $seo = HomeSeo::find($id);
        $seo->c_3_6_1_frontend_url = $request->frontent_url;
        $seo->c_3_6_2_browsing_path_name = $request->browsing_path_name;
        $seo->c_3_6_3_meta_title = $request->meta_title;
        $seo->c_3_6_4_meta_description = $request->meta_description;
        $seo->c_3_6_5_meta_keyword = $request->meta_keeyword;
        $seo->c_3_6_6_hyperlink_page_tags = $request->hyperlink_link_page;
        $seo->c_3_6_7_canonical = $request->canonical;
        $seo->c_3_6_8_language = $request->language;
        $seo->c_3_6_9_country = $request->country;
        $seo->c_3_6_10_distribution = $request->distribution;
        $seo->c_3_6_11_author = $request->author;
        $seo->c_3_6_12_robots = $request->robots;
        $seo->c_3_6_13_revisit_after = $request->revisit_after;
        $seo->c_3_6_14_rating_value = $request->rating_value;
        $seo->c_3_6_15_rating_count = $request->rating_count;
        $seo->c_3_6_16_other_tags_3 = $request->other_tag_3;
        $seo->c_3_6_17_other_tags_4 = $request->other_tag_4;
        $seo->c_3_6_18_other_tags_5 = $request->other_tag_5;
        $seo->update();
        if($seo){
            return redirect()->route('aadhya.3-home')->with('success445','Detail Updated Successfully');
        }else{
            return back()->with('error4','Something Went Wrong');
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
