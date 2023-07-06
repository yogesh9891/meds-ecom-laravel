<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = Blog::all();
        return view('admin.blog.index',compact('data'));
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

            $blog = new Blog();

            // $rules = [
            //         'title' => 'required',

            //         'image' => 'image|dimensions:width=740,height=440',
            //         'slug' => 'required',
            //     ];

            //     $customMessages = [
            //         'required' => 'The :attribute field can not be blank.',
            //         'image.dimensions' => 'Image  Must be in 740 X 440 in size ',

            //     ];

            // $request->validate( $rules, $customMessages);

            $blog->title = $request->title;
            $blog->description = $request->description;
            $slug=preg_replace('/[^A-Za-z0-9-]+/', '-', $request->title);
            $blog->slug = str_slug($request->title);
            $blog->date = $request->date;
            $blog->author = $request->author;


            if($request->hasFile('image')){

                $imageName = time().'.'.request()->image->getClientOriginalExtension();

                request()->image->move(public_path('storage/blog'), $imageName);;

                $blog->image = $imageName;
            }



            $blog->save();

            return redirect()->route('blog.index')->with('flash_message','Blog Added Successfully');

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
        $data = Blog::find($id);
        return view('admin.blog.edit',compact('data'));
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

            $blog = Blog::find($id);
            // $rules = [
            //         'title' => 'required',

            //         'image' => 'image|dimensions:width=740,height=440',
            //         'slug' => 'required',
            //     ];

            //     $customMessages = [
            //         'required' => 'The :attribute field can not be blank.',
            //         'image.dimensions' => 'Image  Must be in 740 X 440 in size ',

            //     ];

            // $request->validate( $rules, $customMessages);

            $blog->title = $request->title;
            $blog->description = $request->description;
            $slug=preg_replace('/[^A-Za-z0-9-]+/', '-', $request->title);
            $blog->slug = str_slug($request->title);
            $blog->author = $request->author;
              $blog->date = $request->date;


            if($request->hasFile('image')){

                $imageName = time().'.'.request()->image->getClientOriginalExtension();

                request()->image->move(public_path('storage/blog'), $imageName);

                $blog->image = $imageName;
            }



            $blog->save();

            return redirect()->route('blog.index')->with('flash_message','Blog is Updated successfully');

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
        $blog = Blog::find($id);

        $blog->destroy($id);

        return redirect()->route('blog.index')->with('flash_message','Blog is deleted successfully');
    }


    public function blogStatus(Request $request)
    {
        $id = $request->id;
        $data = Blog::find($id);
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
