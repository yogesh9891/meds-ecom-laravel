<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SeoSetting;

class SeoSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= SeoSetting::all();
        return view('admin.seo.index',compact('data'));
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
        $data = new SeoSetting();
        $data->page = $request->page;
        $data->url = $request->url;
        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->description = $request->description;

            if($request->hasFile('image')){

                $imageName = time().'.'.request()->image->getClientOriginalExtension();

                request()->image->move('storage/seo', $imageName);;

                $data->image = $imageName;
            }
        $data->save();
        return redirect()->back()->with('flash_message','Seo Added Successfully ');
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
        $data = SeoSetting::find($id);
        return view('admin.seo.edit',compact('data'));
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
        $data = SeoSetting::find($id);
        $data->page = $request->page;
        $data->url = $request->url;
        $data->title = $request->title;
        $data->keywords = $request->keywords;

            if($request->hasFile('image')){

                $imageName = time().'.'.request()->image->getClientOriginalExtension();

                request()->image->move('storage/seo', $imageName);;

                $data->image = $imageName;
            }
        $data->description = $request->description;
        $data->update();

        return redirect()->route('seo_setting.index')->with('flash_message','Seo Updated Successfully ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SeoSetting::destroy($id);

        return redirect()->route('seo_setting.index')->with('flash_message', 'Seo deleted Successfully!!');
    }

    public function seo_settingStatus(Request $request)
    {
        $id = $request->id;
        $data = SeoSetting::find($id);
        if($data->status==1)
        {
            $data->status = 0;
        }
        else
        {
            $data->status = 1;
        }
        $data->update();
    }
}
