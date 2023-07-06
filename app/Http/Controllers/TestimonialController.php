<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= Testimonial::all();
        return view('admin.testimonial.index',compact('data'));
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
        $data = new Testimonial;
        $data->name = $request->name;
        $data->message = $request->message;
        $data->post = $request->post;
        if($request->hasFile('image')){

            $imageName = time().'.'.request()->image->getClientOriginalExtension();

            request()->image->move(public_path('storage/testimonial'), $imageName);;

            $data->image = $imageName;
        }
        $data->save();
        return redirect()->back()->with('flash_message','Testimonial Added Successfully ');
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
        $data = Testimonial::find($id);
        return view('admin.testimonial.edit',compact('data'));
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
        $data = Testimonial::find($id);
        $data->name = $request->name;
        $data->message = $request->message;
        $data->post = $request->post;
        

        if($request->hasFile('image')){

            $imageName = time().'.'.request()->image->getClientOriginalExtension();

            request()->image->move(public_path('storage/testimonial'), $imageName);;

            $data->image = $imageName;

        }
        $data->update();

        return redirect()->route('testimonial.index')->with('flash_message','Testimonial Updated Successfully ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Testimonial::destroy($id);

        return redirect()->route('testimonial.index')->with('flash_message', 'Testimonial deleted Successfully!!');
    }


    public function testimonialStatus(Request $request)
    {
        $id = $request->id;
        $data = Testimonial::find($id);
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
