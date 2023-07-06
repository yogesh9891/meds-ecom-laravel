<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

use App\Models\ProductEnquiry;
use App\Models\Category;
use App\Models\Size;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $sizes = Size::where('status',1)->get();
        $categories = Category::where('status',1)->get();
        $product = Product::all();
        return view('admin.products.index',compact('product','sizes','categories'));
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


    //    $this->validate($request, [
    //        'name' => 'required',
    //        'cat_id' => 'required',
    //        // 'image'=>'image|dimensions:width=1200',
    //    ],['image.dimensions'=>'Image dimension must be 1200x919',]);


        $data = new Product;
        $data->name = $request->name;
    

        $data->size =  implode(';', $request->size);
        $slug=str_slug($request->name);
        $data->slug = $slug;
        $data->description = $request->description;
        $data->short_description = $request->short_description;
        $data->info = $request->info;
        $data->category_id = $request->category_id;
        
       

        $i = 0 ;
          if($request->hasFile('main_image')){

                $imageName = time().'.'.request()->main_image->getClientOriginalExtension();

                request()->main_image->move('storage/product', $imageName);;

                $data->main_image = $imageName;
            }

         if($request->hasfile('image'))
         {
            foreach($request->file('image') as $image)
            { $i++;
                $name  = time().$i.'.'.$image->getClientOriginalExtension();
                $path = 'storage/product/';
                $upload = $image->move($path, $name);
                $data1[] = $name;
            }
         $image_str = implode(';', $data1);
         $data->images = $image_str;
         }
      $data->save();

        return redirect()->route('product.index')->with('flash_message','Product Added Successfully');
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
        $data = Product::find($id);
        $sizes = Size::where('status',1)->get();
        $categories = Category::where('status',1)->get();

        return view('admin.products.edit',compact('data','sizes','categories'));
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


//        $this->validate($request, [
//            'name' => 'required',
//            'cat_id' => 'required',
//            'price' => 'required',
//            'p_code' => 'required',
//            // 'image'=>'image|dimensions:width=1200',
//        ],['image.dimensions'=>'Image dimension must be 1200x919']);

        $data =  Product::find($id);
        $data->name = $request->name;
       $data->size =  implode(';', $request->size);
         // $slug=preg_replace('/[^A-Za-z0-9-]+/', '-',$request->name);
        $data->slug = str_slug($request->name);
        $data->description = $request->description;
        $data->short_description = $request->short_description;
        $data->info = $request->info;
        $data->category_id = $request->category_id;
        

        $a = explode(';',$data->image);
        $j = 0 ;

          if($request->hasFile('main_image')){

                $imageName = time().'.'.request()->main_image->getClientOriginalExtension();

                request()->main_image->move('storage/product', $imageName);;

                $data->main_image = $imageName;
            }


      if($request->hasfile('image'))
      {
          foreach($request->file('image') as $image)
          {
              $j++;
             $name = time().$j.'.'.$image->getClientOriginalExtension();
              $path = 'storage/product/';
             $upload = $image->move($path, $name);
              array_push($a,$name);
          }
          $image_str = implode(';', $a);
          $data->images = $image_str;
      }

       $data->save();

        return redirect()->route('product.index')->with('flash_message','Product Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);



        return redirect()->route('product.index')->with('flash_message', 'Product deleted!');
    }

    public function productStatus(Request $request)
    {
        $id = $request->id;
        $data = Product::find($id);
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

    public function deleteImage(Request  $request)
    {
         $data =  Product::find($request->p_id);
         $a = explode(';',$data->image);
        $path = public_path('storage/product/'.$a[$request->id]);
         unset($a[$request->id]);
         $image = implode(';',$a);
         $data->image = $image;
        echo  $data->update();
    }

    public function singlePage($id){

        $data = Product::find($id);
        $colors = Color::where('status',1)->get();
        $sizes = Size::where('status',1)->get();
        return view('admin.products.product_single',compact('data','colors','sizes'));

    }

    public function productEnquiry()
    {
        $data = ProductEnquiry::with('product')->get();
        return view('admin.products.product_enquiry',compact('data'));
    }

    public function singleEnquiry($id)
    {
        $data = ProductEnquiry::with('product')->find($id);
        $data->product->category = Category::find($data->product->category_id);
        // return view('admin.products.product_enquiry',compact('data'));
        return response()->json($data);
    }
}
