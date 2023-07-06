@extends('layouts.front')

@section('seo_section')

<title> 💊 {{$homeSeo->c_3_6_3_meta_title ??''}}</title>

   <!-- META TAGS -->



   <meta id="MetaDesc" name="description" itemprop="" property="" content="{{$homeSeo->c_3_6_4_meta_description ??''}}"/>

   <meta name="keywords" content="{{$homeSeo->c_3_6_5_meta_keyword ??''}}"/> 

   <meta name="geo.placename" content="{{$homeSeo->c_3_6_9_country ??''}}"/>

   <link rel="canonical" href="{{url('/')}}"/>

   <meta id="Language" name="language" content="{{$homeSeo->c_3_6_8_language ??''}}"/>

   <meta id="Country" name="Country" content="{{$homeSeo->c_3_6_9_country ??''}}" />

   <meta id="Distribution" name="distribution" content="{{$homeSeo->c_3_6_10_distribution ??''}}"/>

   <meta id="Author" content="{{$homeSeo->c_3_6_11_author ??''}}" name="Author"/>

   <meta name="robots" content="{{$homeSeo->c_3_6_12_robots ??''}}"/> 

   <meta  name="revisit-after" content="{{$homeSeo->c_3_6_13_revisit_after ??''}}"/>

@endsection

@section('content')



<section class="inner-page pt-0 pb-0">

   <div class="container">

         <div class="breadcrumbs">

            <ul>

               <li><a href="{{ url('/') }}">Home</a></li>

               <li>Latest Blogs & News</li>

            </ul>

         </div>

	</div>

	<div class="container">

         <div class="content-part categorypage mt-3">

            <section class="blog-item latest-blog">

               <div class="container">

                  <div class="common-heading text-center mb-4">

                     <h1 class="green-text">Blogs & News</h1>

                  </div>

                  <div class="row">

                 @foreach($blognews as $blognew)

    					 <div class="col-lg-4 col-md-6 col-sm-12">

                            <div class="blog-box all-blog-box text-center">

                               <a href="{{route('indivisual_blog',$blognew->page_url_name)}}" target="_blank" ><img src="{{asset('img-bl/'.$blognew->medium_image)}}" alt="{{ $blognew->medium_image_alt_tag }}"></a>

    						   <div class="blog-item-text">

                               <h2><a href="{{route('indivisual_blog',$blognew->page_url_name)}}" target="_blank">{{ $blognew->blog_title_h1}}</a></h2>

    						   <p>{{$blognew->brief_introduction}} ...</p>

    						   <a href="{{route('indivisual_blog',$blognew->page_url_name)}}" target="_blank" class="read-more text-danger">Read More</a>

    						   </div>

    						   <div class="author">

    							<span class="name"><i class="fa fa-user"></i><a href="{{ $blognew->source_url }}" target="_blank">{{ $blognew->posted_source }} : {{$blognew->posted_or_source}}</a></span>

    							

    						  </div>

                            </div>

                         </div>

					   @endforeach

					</div>
          <div class="custom-pagination text-center">
            <nav aria-label="...">
    {{ $blognews->links('vendor.pagination.custom') }}
               {{--  <ul class="pagination">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1"><<</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active">
                  <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">>></a>
                </li>
                </ul> --}}
            </nav>
          </div>
               </div>

            </section>	

         </div>

   </div>







</section>





@endsection