<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class Categorycontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= Category::where('parent_id',0)->get();
        return view('admin.category.index',compact('data'));
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

        $data = new Category;
        $data->name = $request->name;
        $data->slug = str_slug($request->name);
        $data->description = $request->description;
        

        if($request->hasFile('image')){

            $imageName = time().'.'.request()->image->getClientOriginalExtension();

            request()->image->move('storage/category', $imageName);;

            $data->image = $imageName;
        }

        $data->save();
        return redirect()->back()->with('flash_message','Category Added Successfully ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Category::where('parent_id',$id)->get();
        return view('admin.category.subcategory',compact('data','id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Category::find($id);
//        $categories = Category::where('parent_id',0)->get();
        return view('admin.category.edit',compact('data'));

    }

    public function fetchSubcategory($id){
        $data = Category::where('parent_id',$id)->get();
        return $data;
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
        $data = Category::find($id);
        $data->name = $request->name;
        $data->description = $request->description;
        $data->slug = str_slug($request->name);

        if($request->hasFile('image')){

            $imageName = time().'.'.request()->image->getClientOriginalExtension();

            request()->image->move('storage/category', $imageName);;

            $data->image = $imageName;
        }

        $data->update();

        return redirect()->route('category.index')->with('flash_message','Category Updated Successfully ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::destroy($id);

        return redirect()->route('category.index')->with('flash_message', 'Category deleted Successfully!!');
    }


    public function categoryStatus(Request $request)
    {
        $id = $request->id;
        $data = Category::find($id);
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

     public function categoryTop(Request $request)
    {
        $id = $request->id;
        $data = Category::find($id);
        if($data->top==1)
        {
            $data->top = 0;
        }
        else
        {
            $data->top = 1;
        }
        $data->update();
    }
}
