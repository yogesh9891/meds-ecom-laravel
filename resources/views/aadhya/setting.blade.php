@extends('layouts.backend')
@section('title','Setting')
@section('before_body')

<link rel="stylesheet" href="https://vitalets.github.io/x-editable/assets/x-editable/bootstrap3-editable/css/bootstrap-editable.css">
@endsection
@section('content')



<div class="container">

    <div class="card">
        <div class="card-header">Edit Setting</div>
        <div class="card-body">
            <a href="{{ route('admin') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
            <br />
            <br />

            @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

             <form class="dealer_form row" action="{{url('admin/setting')}}" method="post" enctype="multipart/form-data">
                @method('POST')
                @csrf

                  <div class="col-md-6">
                             <div class="form-group">
                                <label for="">Logo </label>

                                <input class="form-control "  type="file" name="image">
                            </div>

                        </div>
                         <div class="form-group col-md-6">
                          @if($data->logo)
                                <img src="{{asset('images/'.$data->logo)}}" width="200" height="100">
                                <input type="hidden" name="old_image" value="{{$data->logo}}" >
                                @endif
                    </div>
                   <div class="form-group col-md-6">
                         <label for="">Email</label> <input class="form-control " required type="text" name="email" placeholder="Please enter the name" value="{{$data->email}}">
                    </div>
                   <div class="col-md-6">
                              <label for="">Phone</label> <input class="form-control " required type="text" name="phone" placeholder="Please enter the name" value="{{$data->phone}}">

                        </div>

                        <div class="col-md-12">
                             <div class="form-group in-div" style="width: 100%;">
                                <label for="">Address </label>
                                <textarea name="address" class="form-control"  style="width: 100%;">{{$data->address}}</textarea>
                            </div>
                        </div>

                        <div class="col-md-6">
                             <div class="form-group">
                                <label for="">Youtube Url</label>
                                <input class="form-control " required type="text" name="youtube" value="{{$data->youtube}}">
                            </div>
                        </div>
                          <div class="col-md-6">
                             <div class="form-group">
                                <label for="">Twitter Url</label>
                                <input class="form-control " required type="text" name="twitter" value="{{$data->twitter}}">
                            </div>
                        </div>
                          <div class="col-md-6">
                             <div class="form-group">
                                <label for="">Instagram Url</label>
                                <input class="form-control " required type="text" name="insta" value="{{$data->insta}}">
                            </div>
                        </div>
                          <div class="col-md-6">
                             <div class="form-group">
                                <label for="">Facebook Url</label>
                                <input class="form-control " required type="text" name="facebook" value="{{$data->facebook}}">
                            </div>
                        </div>


                        <div class="col-md-12">
                             <div class="form-group in-div" style="width: 100%;">
                                <label for="">Description </label>
                                <textarea name="description" class="form-control"  style="width: 100%;">{{$data->description}}</textarea>
                            </div>
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

<script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
<script type="text/javascript">

  CKEDITOR.replace( 'editor' );
</script>

@endsection
