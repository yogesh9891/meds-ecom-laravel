@extends('layouts.backend')
@section('title','Seo Setting')
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-car icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div>  Seo Setting
                <div class="page-title-subheading">Please define your product variation by clicking on the add Create new button.
                </div>
            </div>
        </div>
           @if ($errors->any())
                                            <span class="alert-danger d-block mb-15 p-15" role="alert">
                                               @foreach ($errors->all() as $error)
                                                <strong>* {{$error}}</strong>
                                                @endforeach
                                            </span>
                       @endif

                    @if(Session::has('success'))
                                            <span class="alert-success d-block mb-15 p-15" role="alert">
                                                <strong>{{ Session::get('success') }}</strong>
                                            </span>
                   @endif
    </div>
</div>

<div class="card mb-3">
    <div class="card-header-tab card-header">

        <div class="card-header-title font-size-lg text-capitalize font-weight-normal"><i class="header-icon lnr-laptop-phone mr-3 text-muted opacity-6"> </i> Seo Setting</div>

        <button type="button" data-toggle="modal" data-target=".add-modal" class="mb-2 mr-2 btn-hover-shine btn btn-shadow btn-primary add_new_buton">Create new
        </button>

    </div>
    <div class="card-body">
        <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap4">

            <div class="row">
                <div class="col-sm-12">
                    <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered dataTable dtr-inline" role="grid" aria-describedby="example_info">
                        <thead>
                            <tr role="row">
                                <th class="sorting_asc">Page Name</th>
                                <th class="sorting_asc">Page Url</th>
                                <th class="sorting_asc">Meta title</th>
                                <th class="sorting_asc">Status</th>
                                <th>Action</th>


                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $val)
                            <tr role="row" class="even">
                                <td tabindex="0" class="sorting_1">{{ $val->page}}</td>
                                <td tabindex="0" class="sorting_1">
                                    {{ $val->url}}
                                </td>
                                <td> {{ $val->title}}</td>
                                <td>
                                  <input type="checkbox" @if($val->status == 1) checked @endif class="seo_settingStatus check_box" data-id="{{ $val->id }}">
                                </td>
                                <td>
                                    <a href="{{route('seo_setting.edit',$val->id)}}"  class="btn btn-sm btn-success edit-cat"><i class="fa fa-edit"></i></a>

                                    <form action="{{route('seo_setting.destroy',$val->id)}}" method="post" class="d-inline"> @csrf @method('DELETE')
                                         <button type ="submit" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Delete Category"  onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash"></i></button>
                                    </form>


                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
@section('afterScript')

<div class="modal fade add-modal ">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add Seo Setting</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>

            </div>
            <form class="client_form" action="{{route('seo_setting.store')}}" method="post" enctype="multipart/form-data">
                @method('POST')
                @csrf
                <div class="modal-body">

                    <div class="form-group col-md-12">

                        <label for="">Page Name</label>
                        <input class="form-control" id="cat_name" type="text" name="page" placeholder="Please enter the Page Name">
                    </div>

                    <div class="form-group col-md-12">

                        <label for="">Page Url</label>
                        <input class="form-control" id="cat_name" type="text" name="url" placeholder="Please enter the Page Url">
                    </div>
                        <div class="form-group col-md-12">

                        <label for="">Meta Image</label>
                        <input class="form-control" name="image" type="file">
                    </div>
                    <div class="form-group col-md-12">

                        <label for="">Meta Title</label>
                        <input class="form-control" id="cat_name" type="text" name="title" placeholder="Please enter the Meta title">
                    </div>
                    <div class="form-group col-md-12">

                        <label for="">Meta keywords</label>
                        <textarea name="keywords" class="form-control"></textarea>
                    </div>
                    <div class="form-group col-md-12">

                        <label for="">Meta  Description</label>
                        <textarea name="description" class="form-control"></textarea>
                    </div>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>




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
