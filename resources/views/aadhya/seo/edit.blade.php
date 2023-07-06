@extends('layouts.backend')
@section('title','Edit Setting')
@section('content')



<div class="container">

    <div class="card">
        <div class="card-header">Edit Seo Setting</div>
        <div class="card-body">
            <a href="{{ route('seo_setting.index') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
            <br />
            <br />

            @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

             <form class="dealer_form row" action="{{route('seo_setting.update',$data->id)}}" method="post" enctype="multipart/form-data" id="seo_submit">
                @method('PUT')
                @csrf
                 <div class="form-group col-md-12">

                     <label for="">Page Name</label>
                     <input class="form-control" id="cat_name" type="text" name="page" placeholder="Please enter the Page Name" value="{{$data->page}}">
                 </div>

                 <div class="form-group col-md-12">

                     <label for="">Page Url</label>
                     <input class="form-control" id="cat_name" type="text" name="url" placeholder="Please enter the Page Url" value="{{$data->url}}">
                 </div>
                 <div class="col-md-12">
                             
                                <label for="">Meta Image </label>

                                <input class="form-control "  type="file" name="image">
                           
                                @if($data->image)
                                <img src="{{asset('storage/seo/'.$data->image)}}" width="100px" height="100px">
                                <input type="hidden" name="old_image" value="{{$data->image}}" >
                                @endif
                        </div>
                 <div class="form-group col-md-12">

                     <label for="">Meta Title</label>
                     <input class="form-control" id="cat_name" type="text" name="title" placeholder="Please enter the Meta title" value="{{$data->title}}">
                 </div>
                 <div class="form-group col-md-12">

                     <label for="">Meta keywords</label>
                     <textarea name="keywords" class="form-control">{{$data->keywords}}</textarea>
                 </div>
                 <div class="form-group col-md-12">

                     <label for="">Meta  Description</label>
                     <textarea name="description" class="form-control">{{$data->description}}</textarea>
                 </div>



                    <div class="form-group  col-md-6">
                        <input type="submit" class="btn btn-primary" value="update">
                    </div>
            </form>

        </div>
    </div>

</div>


@endsection

@section('afterScript')
<script>



          $(".seo_settingStatus").on('click',function() {
               var id = $(this).attr('data-id');

               $.ajax({
                    type: "POST",
                    url: "/admin/seo_settingStatus",
                    headers: {
                           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                       },
                    data: {
                        id: id
                    },
                    success: function (msg) {
                        console.log(msg)
                    }
                });
           });



</script>



@endsection

