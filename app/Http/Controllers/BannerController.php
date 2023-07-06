<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;


class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $data = Banner::all();
        return view('admin.banner.index',compact('data'));
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
        if($request->isMethod('post')){

            $banner = new Banner;
            // $rules = [
            //     'title' => 'required',
            // ];

            // $customMessages = [
            //     'required' => 'The :attribute field can not be blank.',
            //     'image.dimensions' => 'Image  Must be in 1133 X 729 in size ',

            // ];

          //  $request->validate( $rules, $customMessages);

            $banner->title = $request->title;
          
          //  $banner->description = $request->description;
          

            if($request->hasFile('image')){

                $imageName = time().'.'.request()->image->getClientOriginalExtension();

                request()->image->move('storage/banner', $imageName);;

                $banner->image = $imageName;
            }



            $banner->save();

            return redirect()->route('banner.index')->with('flash_message','Banner Added Successfully');

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
        $data = Banner::find($id);
  
        return view('admin.banner.edit',compact('data'));
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
        if($request->isMethod('put')){

            $banner  =  Banner::find($id);

            $banner->title = $request->title;
          
         //   $banner->description = $request->description;
          



            if($request->hasFile('image')){

                $imageName = time().'.'.request()->image->getClientOriginalExtension();

                request()->image->move('storage/banner', $imageName);

                $banner->image = $imageName;
            }



            $banner->save();

            return redirect()->route('banner.index')->with('flash_message','Banner is Updated successfully');

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
        Banner::destroy($id);

       

        return redirect()->route('banner.index')->with('flash_message','Banner is deleted successfully');
    }

    public function bannerStatus(Request $request)
    {
        $id = $request->id;
        $data = Banner::find($id);
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
