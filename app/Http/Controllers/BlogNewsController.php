<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogNews;
use App\Models\HomeSeo;

class BlogNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
        $homeSeo = HomeSeo::orderBy('id','desc')->first();
        $blogNews = BlogNews::get();
        return view('aadhya.blog_news.blogs_news',compact('blogNews','homeSeo'));
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

        $image1 = '';
            if($request->hasFile('bigImage')){
                 $image1 = $request->bigImage->getClientOriginalName();
              $request->bigImage->move(public_path('img-bl'), $image1);
              $image_url1 =asset('/img-bl/'.$image1) ;
}
      $image2 = '';
            if($request->hasFile('mediumImage')){
                 $image2 = $request->mediumImage->getClientOriginalName();
              $request->mediumImage->move(public_path('img-bl'), $image2);
              $image_url2 =asset('/img-bl/'.$image2) ;
}
       $image3 = '';
            if($request->hasFile('imageIcon')){
                 $image3 = $request->imageIcon->getClientOriginalName();
              $request->imageIcon->move(public_path('img-bl'), $image3);
              $image_url3 =asset('/img-bl/'.$image3) ;
}
        $blogNews = new BlogNews;
        $blogNews->blog_news_no = $request->blogNewsNo;
        $blogNews->posted_source = $request->postedby;
        $blogNews->posted_or_source = $request->postedOrSource;
        $blogNews->date = $request->date;
        $blogNews->source_url = $request->sourceUrl;
        $blogNews->blog_title_h1 = $request->blogTitleH1Tag;
        $blogNews->page_url_name = $request->pageUrlName;
        $blogNews->browsing_path_name = $request->browsingPathName;
        $blogNews->hyperlink_page_tag = $request->hyperlinkPageTag;
        $blogNews->big_image = $image1;
        $blogNews->big_image_alt_tag = $request->bigImageAltTag;
        $blogNews->medium_image = $image2;
        $blogNews->medium_image_alt_tag = $request->mediumAltTag;
        $blogNews->image_icon = $image3;
        $blogNews->image_icon_alt_tag = $request->imageIconAltTag;
        $blogNews->home_page = $request->home;
        $blogNews->blog_news = $request->blog;
        $blogNews->medication = $request->medicine;
        $blogNews->brief_introduction = $request->briefIntroduction;
        $blogNews->full_information = $request->fullInformation;
        $blogNews->meta_title = $request->metaTitle;
        $blogNews->meta_description = $request->metaDescription;
        $blogNews->meta_keyword = $request->metaKeyword;
        $blogNews->canonical = $request->canonical;
        $blogNews->language = $request->language;
        $blogNews->country = $request->country;
        $blogNews->distribution = $request->distribution;
        $blogNews->author = $request->author;
        $blogNews->robots = $request->robots;
        $blogNews->revisit_after = $request->revisitAfter;
        $blogNews->rating_value = $request->ratingValue;
        $blogNews->rating_count = $request->ratingCount;
        $blogNews->other_tag_3 = $request->otherTag3;
        $blogNews->other_tag_4 = $request->otherTag4;
        $blogNews->other_tag_5 = $request->otherTag5;
        $blogNews->save();
        if($blogNews){
            return back()->with('success','Blog Information successfully saved.');
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
            $data = BlogNews::with('medication')->findOrFail($id);
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
        $blogNews = BlogNews::get();
        $blog = BlogNews::with('medication')->find($id);
        return view('aadhya.blog_news.edit',compact('blog','blogNews')); 
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
        $blogNews = BlogNews::find($id);

        $image1 = '';
            if($request->hasFile('bigImage')){
                 $image1 = $request->bigImage->getClientOriginalExtension();
              $request->bigImage->move(public_path('img-bl'), $image1);
              $image_url1 =asset('/img-bl/'.$image1);
              $blogNews->big_image = $image1;
}
      $image2 = '';
            if($request->hasFile('mediumImage')){
                 $image2 = $request->mediumImage->getClientOriginalExtension();
              $request->mediumImage->move(public_path('img-bl'), $image2);
              $image_url2 =asset('/img-bl/'.$image2);
              $blogNews->medium_image = $image2;
}
       $image3 = '';
            if($request->hasFile('imageIcon')){
                 $image3 = $request->imageIcon->getClientOriginalExtension();
              $request->imageIcon->move(public_path('img-bl'), $image3);
              $image_url3 =asset('/img-bl/'.$image3);
              $blogNews->image_icon = $image3;
}
        $blogNews->blog_news_no = $request->blogNewsNo;
        $blogNews->posted_source = $request->postedby ??'posted';
        $blogNews->posted_or_source = $request->postedOrSource;
        $blogNews->date = $request->date;
        $blogNews->source_url = $request->sourceUrl;
        $blogNews->blog_title_h1 = $request->blogTitleH1Tag;
        $blogNews->page_url_name = $request->pageUrlName;
        $blogNews->browsing_path_name = $request->browsingPathName;
        $blogNews->hyperlink_page_tag = $request->hyperlinkPageTag;
        $blogNews->big_image_alt_tag = $request->bigImageAltTag;
        $blogNews->medium_image_alt_tag = $request->mediumAltTag;
        $blogNews->image_icon_alt_tag = $request->imageIconAltTag;
        $blogNews->home_page = $request->home ??0;
        $blogNews->blog_news = $request->blog ??0;
        $blogNews->medication = $request->medicine;
        $blogNews->brief_introduction = $request->briefIntroduction;
        $blogNews->full_information = $request->fullInformation;
        $blogNews->meta_title = $request->metaTitle;
        $blogNews->meta_description = $request->metaDescription;
        $blogNews->meta_keyword = $request->metaKeyword;
        $blogNews->canonical = $request->canonical;
        $blogNews->language = $request->language;
        $blogNews->country = $request->country;
        $blogNews->distribution = $request->distribution;
        $blogNews->author = $request->author;
        $blogNews->robots = $request->robots;
        $blogNews->revisit_after = $request->revisitAfter;
        $blogNews->rating_value = $request->ratingValue;
        $blogNews->rating_count = $request->ratingCount;
        $blogNews->other_tag_3 = $request->otherTag3;
        $blogNews->other_tag_4 = $request->otherTag4;
        $blogNews->other_tag_5 = $request->otherTag5;
        $blogNews->update();
        if($blogNews){
            return redirect()->back()->with('success','Blog Information successfully updated .');
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
        $blogNews = BlogNews::find($id);
        $blogNews->destroy($id);
        return back()->with('success2','Detail Deleted Successfully');
    }


    public function blogSeo(Request $request)
    {
       $seo = HomeSeo::orderBy('id','desc')->first();
        $seo->c_3_6_1_frontend_url = $request->c_3_6_1_frontend_url;
        $seo->c_3_6_2_browsing_path_name = $request->c_3_6_2_browsing_path_name;
        $seo->c_3_6_3_meta_title = $request->c_3_6_3_meta_title;
        $seo->c_3_6_4_meta_description = $request->c_3_6_4_meta_description;
        $seo->c_3_6_5_meta_keyword = $request->c_3_6_5_meta_keyword;
        $seo->c_3_6_6_hyperlink_page_tags = $request->c_3_6_6_hyperlink_page_tags;
        $seo->c_3_6_7_canonical = $request->c_3_6_7_canonical;
        $seo->c_3_6_8_language = $request->c_3_6_8_language;
        $seo->c_3_6_9_country = $request->c_3_6_9_country;
        $seo->c_3_6_10_distribution = $request->c_3_6_10_distribution;
        $seo->c_3_6_11_author = $request->c_3_6_11_author;
        $seo->c_3_6_12_robots = $request->c_3_6_12_robots;
        $seo->c_3_6_13_revisit_after = $request->c_3_6_13_revisit_after;
        $seo->c_3_6_14_rating_value = $request->c_3_6_14_rating_value;
        $seo->c_3_6_15_rating_count = $request->c_3_6_15_rating_count;
        $seo->c_3_6_16_other_tags_3 = $request->c_3_6_16_other_tags_3;
        $seo->c_3_6_17_other_tags_4 = $request->c_3_6_17_other_tags_4;
        $seo->c_3_6_18_other_tags_5 = $request->c_3_6_18_other_tags_5;
        $seo->update();
           return back()->with('success','SEO Information for All Blogs page successfully updated / saved.');


    }

               public function deleteAll(Request $request)  
    {  
        $ids = $request->ids;  
        BlogNews::whereIn('id',explode(",",$ids))->delete();  
        return response()->json(['success'=>"Details deleted Successfully."]);  
    }
}
