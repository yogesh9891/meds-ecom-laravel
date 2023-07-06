@extends('layouts.front')

@section('seo_section')

<title> 💊 {{$blog->meta_title ??''}}</title>

   <!-- META TAGS -->



	<meta id="MetaDesc" name="description" itemprop="" property="" content="{{$blog->meta_description ??''}}"/>

	<meta name="keywords" content="{{$blog->meta_keyword ??''}}"/> 

	<meta name="geo.placename" content="{{$blog->country ??''}}"/>

	<link rel="canonical" href="{{url('/')}}"/>

	<meta id="Language" name="language" content="{{$blog->language ??''}}"/>

	<meta id="Country" name="Country" content="{{$blog->country ??''}}" />

	<meta id="Distribution" name="distribution" content="{{$blog->distribution ??''}}"/>

	<meta id="Author" content="{{$blog->author ??''}}" name="Author"/>

	<meta name="robots" content="{{$blog->robots ??''}}"/> 

	<meta id="RevisitAfter" name="revisit-after" content="{{$blog->revisit_after ??''}}"/>

@endsection

@section('content')

 <div class="container">

         <div class="breadcrumbs">

            <ul>

               <li><a href="{{ url('/') }}">Home</a></li>

               <li>Latest Blogs & News</li>
               <li>{{ $blog->browsing_path_name }}</li>

            </ul>

         </div>

	</div>

 <div class="inner-page">

    <section class="pt-4 pb-4">

		<div class="container">

			<div class="row">

				<div class="col-lg-8 col-sm-12">

					<div class="content-part">

						<div class="text-left mb-2">

							<h1 class="font30">{{ $blog->blog_title_h1 }}</h1>

						</div>

						<div class="entry-meta mb-2">

							<a href="{{ $blog->source_url }}" target="_blank">{{ $blog->posted_source }} : {{$blog->posted_or_source}}</a> / <a href="">{{ $blog->blog_reviews->count() > 0 ?  $blog->blog_reviews->count() : 'No' }} Comments</a>

						</div>

						<div class="quick-share">

							<ul>

								<li><a href="{{ $social_links['facebook'] ?? '' }}" target="_blank"><img src="{{asset('/img/facebook.png')}}"></a></li>

								<li><a href="{{ $social_links['twitter'] ?? '' }}" target="_blank"><img src="{{asset('/img/twitter.png')}}"></a></li>

								<li><a href="{{ $social_links['linkedin'] ?? '' }}" target="_blank"><img src="{{asset('/img/Linkedin.png')}}"></a></li>

								<li><a href="{{ $social_links['reddit'] ?? '' }}" target="_blank"><img src="{{asset('/img/reddit.png')}}"></a></li>

								<li><a href="{{ $social_links['telegram'] ?? '' }}" target="_blank"><img src="{{asset('/img/telegram.png')}}"></a></li>

							</ul>

						</div> 

						<p class="individual-blogs-img mt-3"><img src="{{asset('img-bl/'.$blog->big_image)}}"  alt="{{ $blog->big_image_alt_tag }}" /></p>

						<div class="blog-content">

						{!! $blog->full_information !!}



						@if($blog->blog_reviews->count() > 0)

						<div class="readerComment">

							<p class="orange-text"><strong>Readers Comments</strong></p>

							@foreach($blog->blog_reviews as $review)

							<p class="mb-1"><span class="green-text">{{ $review->fullname }}</span> from <span class="green-text">{{ $review->country }}</span> says :</p>

							<p class="mb-3">{{ $review->comment }}</p>

							@endforeach

					

						</div>

						@endif

						</div>

						<div class="font20"><strong>Leave a Comment</strong></div>

						<div class="leave-comment mt-3">

						<div class="fielsmend">All fields are mandatory <span class="astrik">*</span> </div>

							<form action="{{ route('blog.comment') }}" method="post">

								 	@if (Session::has('success'))

                                         			<script type="text/javascript">

                                         			  alert('Thank you for your Comments, they shall be posted soon!');

                    								  window.location.reload();

                                         			</script>

                                              @endif

@if ($errors->any())
    <div class="">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="text-danger">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
								@csrf

								<div class="row">

									<div class="col-md-12">

										<div class="form-group">

										<label>Comments<span class="error">*</span></label>

											<textarea class="form-control" name="comment" cols="45" rows="8" placeholder="Your Comments on this Blog" required="" onkeyup="messageValidation(this)" maxlength="300">{{ old('comment')}}</textarea>

										</div>

									</div>

									<input type="hidden" name="post_on_blog" value="{{ $blog->id }}">

									<div class="col-md-4 col-sm-12">

										<div class="form-group">

											<label>Name<span class="error">*</span></label>

											<input type="text" class="form-control" placeholder="Your Full Name" required="" name="name" onkeyup="nameValidation(this)" maxlength="30" value="{{ old('name')}}"> 

										</div>										

									</div>

									<div class="col-md-4 col-sm-12">

										<div class="form-group">

											<label>Country<span class="error">*</span></label>

											<input type="text" class="form-control" placeholder="Your Country" required="" name="country"  onkeyup="nameValidation(this)" maxlength="30" value="{{ old('country')}}"> 

										</div>										

									</div>



									<div class="col-md-4 col-sm-12">

										<div class="form-group">

											<label>Email<span class="error">*</span></label>

											<input type="email" class="form-control" placeholder="Your Email" required="" name="email"  maxlength="50" onchange="emailValidation(this)" value="{{ old('email')}}">

										</div>										

									</div>

									<div class="col-md-4 col-sm-12">

										<div class="form-group">

										<label>Enter Characters as displayed in image</label>
                                    <div class="captcha">
                                          <button type="button" class="btn btn-danger reloadBtn"  id="reload">
                                            &#x21bb;
                                        </button>
                                     
                                        <span>{!! captcha_img('flat') !!}</span></br>
                                    </div>
                                    <input id="captcha" type="text" class="form-control mt-3" placeholder="Enter Characters as displayed in image" name="captcha">
											

										</div>									

									</div>

									<div class="col-md-8 col-sm-12"><button class="btn nobtn green-bg float-right">Submit Comment</button></div>

								</div>

							</form>

						</div>

					</div>

				</div>

				<div class="col-lg-4 col-sm-12 individualBlogs">

					<div class="sidebar">

					  <div class="mainsidebar">

   <div class="text-center">

		<a href="{{ url('/guest-blogs') }}" target="_blank"><img src="{{asset('/img/Guest-Blog.webp')}}" alt="aS DJA"/></a>

   </div>

</div>

<div class="mainsidebar mt-4 latestnews">

   <h2 class="sidebar-heading"><span class="rounded-circle"><i class="fa fa-pencil-square-o text-dark" aria-hidden="true"></i> </span><a href="{{ route('latest_blog') }}" target="_blank">LATEST BLOGS & NEWS</a> <a href="{{ route('latest_blog') }}" target="_blank" class="font14 text-underline float-right v-link-b">View all</a></h2>

   <div class="custom-scroll">

   <div class="content mCustomScrollbar">

    <ul>

    	@foreach($blognews as $single_blog)

		<li>

			

			<div class="leftImg">

				<a  href="{{route('indivisual_blog',$single_blog->page_url_name)}}" target="_blank"><img src="{{asset('img-bl/'.$single_blog->image_icon)}}" alt="{{ $single_blog->image_icon_alt_tag }}" /></a>

			</div>

			<div class="rightTxt clearfix">

				<p><a  href="{{route('indivisual_blog',$single_blog->page_url_name)}}" target="_blank">{{ substr($single_blog->blog_title_h1,0,65)}}</a></p>

			</div>

		</li>

		@endforeach

	

   </ul>

   </div>

   </div>



</div>

          

					</div>

				</div>

			</div>      

		</div>

	</section>

@endsection