@extends('layouts.backend')
@section('title','Contact')
@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-car icon-gradient bg-mean-fruit">
                    </i>
                </div>
                <div>  Contact
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

            <div class="card-header-title font-size-lg text-capitalize font-weight-normal"><i class="header-icon lnr-laptop-phone mr-3 text-muted opacity-6"> </i> Contact</div>



        </div>
        <div class="card-body">
            <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap4">

                <div class="row">
                    <div class="col-sm-12">
                        <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered dataTable dtr-inline" role="grid" aria-describedby="example_info">
                            <thead>
                            <tr role="row">
                                <th class="sorting_asc"> Name</th>
                                <th class="sorting_asc">Email</th>
                                <th class="sorting_asc">Phone</th>
                                <th class="sorting_asc">Mesaage</th>
                                <th>Action</th>


                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $val)
                                <tr role="row" class="even">
                                    <td tabindex="0" class="sorting_1">{{ $val->name}}</td>
                                    <td tabindex="0" class="sorting_1">
                                        {{ $val->email}}
                                    </td>
                                    <td> {{ $val->phone}}</td>
                                    <td> {{ $val->message}}</td>

                                    <td>
                            
{{--                                        <a href="{{route('seo_setting.edit',$val->id)}}"  class="btn btn-sm btn-success edit-cat"><i class="fa fa-edit"></i></a>--}}

                                       <form action="{{route('contact.destroy',$val->id)}}" method="post" class="d-inline"> @csrf @method('DELETE')
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
<div class="modal fade editPr">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Contact</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>

            </div>
            <form class="edit_pr_form" action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PATCH">
                @csrf
                <div class="modal-body" id="modal-data">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </form>
        </div>
    </div>
</div>
@section('afterScript')

    <script type="text/javascript">
        $('.showModal').click(function (){
            var id = $(this).attr('data-id');




            $.ajax({
                type: "GET",
                url: "single_contact/"+id,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (res) {

                    let data  = res ;


                    let html = `<div class="row">
                        <h4 style="margin-left:10px">Contact Detail</h4>
                        <div class="col-md-12">

                             <table class="table">
                                                <tr>
                                                    <th>Name</th>
                                                     <th>Email</th>
                                                       <th>Phone</th>
                                                         <th>Hotel/Company</th>
                                                         <th>Website</th>
                                                         <th>Address</th>

                                                </tr>
                                                <tr>
                                                    <td>${data.name}</td>
                                                    <td>${data.email}</td>
                                                    <td>${data.phone}</td>
                                                    <td>${data.hotel}</td>
                                                    <td>${data.website}</td>
                                                    <td>${data.Address}</td>

                                                </tr>

                           </table>

                        </div>

                                           <div class="col-md-12">
                                          <h5> Message</h5>

                                        <p>${data.message}</p>

                                        <div>





                    </div>`;


                    $('#modal-data').html(html);
                    $('.editPr').modal('show');
                    // $('#edit_p_code').val(res.p_code);
                    // $('#price').val(res.price);
                    // $('#edit_p_stock').val(res.raw_stock);

                    // var action = '/products/'+res.id;

                    // $('.edit_pr_form').attr('action',action);

                    // $('.edit_cat option[value="'+res.category_id+'"]').prop('selected','selected');

                    // nicEditors.findEditor( "edit_about" ).setContent( res.description );

                    // $('.editPr').modal('show');

                }
            });
        });

    </script>



@endsection
