<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= Gallery::all();
        return view('admin.gallery.index',compact('data'));

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

            $gallery = new Gallery();

            // $rules = [

            //         'image' => 'image|dimensions:width=640,height=640',

            //     ];

            //     $customMessages = [

            //         'image.dimensions' => 'Image Must be in 640 X 640 in size ',

            //     ];

            //     $request->validate( $rules, $customMessages);

            if($request->hasFile('image')){

                $imageName = time().'.'.request()->image->getClientOriginalExtension();

                request()->image->move(public_path('storage/gallery'), $imageName);;

                $gallery->image = $imageName;
            }
            $gallery->title = $request->title;
            $gallery->save();

        }

        return redirect()->back()->with('flash_message','Gallery Image Added Successfully ');;
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
        $data = Gallery::find($id);
        return view('admin.gallery.edit',compact('data'));
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

            $gallery =  Gallery::find($id);

            // $rules = [

            //         'image' => 'image|dimensions:width=640,height=640',

            //     ];

            //     $customMessages = [

            //         'image.dimensions' => 'Image Must be in 640 X 640 in size ',

            //     ];

            //     $request->validate( $rules, $customMessages);

            $gallery->id = $id;

            if($request->hasFile('image')){

                $imageName = time().'.'.request()->image->getClientOriginalExtension();

                request()->image->move(public_path('storage/gallery'), $imageName);;

                $gallery->image = $imageName;

                $old_path = public_path('storage/gallery/'.$request->old_image);

                if(!empty($request->old_image)){

                    unlink($old_path);

                }
            }

            //return $gallery;
            $gallery->title = $request->title;
            $gallery->save();

        }
        return redirect()->route('gallery.index')->with('flash_message','Gallery Image Updated Successfully ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::find($id);

        $old_path = public_path('storage/gallery/'.$gallery->image);

        if(!empty($gallery->image)){
            unlink($old_path);
        }

        $gallery->destroy($id);
        return redirect()->route('gallery.index')->with('flash_message', 'Gallery Image deleted Successfully!!');
    }


    public function galleryStatus(Request $request)
    {
        $id = $request->id;
        $data = Gallery::find($id);
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
