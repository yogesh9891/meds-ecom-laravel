@extends('layouts.front')

@section('content')

@section('seo_section')

<title>Guest Blogs | 911GlobalMeds </title>
@endsection

   <div class="inner-page">

   <div class="container">

      <div class="breadcrumbs">

         <ul>

            <li><a href="index.php">Home</a></li>

            <li><a href="{{ url('/latest-blogs-news') }}">Latest Blogs & News</a></li>

            <li>Guest Blogs</li>

         </ul>

      </div>

   </div>

    <section class="pt-4 pb-4">

		<div class="container">

			<div class="row">

				<div class="col-lg-12 col-sm-12">

					<div class="content-part">

						<div class="text-left mb-2">

							<h1 class="font30">We welcome Guest Blogs : Write for Us</h1>

						</div>

						<div class="blog-content">

						<p>If you are a health care expert and you are as passionate as we are about helping cancer patients through the journey we would love to hear from you.&nbsp;We accept inquiries from credentialed professionals who can write well-researched, science-backed articles that not only inform but also provide our readers with actionable steps they can take to lead fuller, richer lives.</p>

						<p>Please send your article idea and a brief introduction, including why you’re qualified to write it, to <a href="mailto:editor@CancerCareNews.com">WeCare@911GlobalMeds.com</a>. Do not send an attachment; please paste the information directly into the body of your email. All articles must be research-based and factually sound.&nbsp;We are especially interested in interviews, feature stories, book reviews, and opinion pieces that are expertly written and well supported, and provide a fresh perspective on living well with, through, and beyond cancer.</p>

						

						

						<div class="guestBlog pt-4 pb-4">

							<form class="custom-form contactus"   action="{{ route('guest_blog.submit') }}" method="post" enctype="multipart/form-data">

							@csrf
@if(Session::has('success'))
<script type="text/javascript">
                  				alert('Thank you.we will revert to you very soon');
	
</script>

@endif

					@if ($errors->any())
					    <div>
					        <ul>
					            @foreach ($errors->all() as $error)
					                <li class="text-danger">{{ $error }}</li>
					            @endforeach
					        </ul>
					    </div>
					@endif

					<div class="fieldset">

						<h2 class="legend">Submit your Blog</h2>

						<div class="fielsmend">All fields are mandatory <span class="astrik">*</span> </div>

						<div class="row">

							<div class="col-md-4 col-sm-12">

								<div class="form-group">

									<label>Name<span class="astrik">*</span></label>

									<input type="text" class="form-control Cfield" required="" aria-label="Name"  name="name"  onkeyup="nameValidation(this)" maxlength="30" value="{{ old('name') }}">

								</div>

							</div>

							<div class="col-md-4 col-sm-12">

								<div class="form-group">

									<label>Country<span class="astrik">*</span></label>

									<input type="text" class="form-control Cfield" required="" aria-label="Country"  name="country"   onkeyup="nameValidation(this)" maxlength="30" value="{{ old('name') }}">

								</div>

							</div>

							<div class="col-md-4 col-sm-12">

								<div class="form-group">

									<label>Email<span class="astrik">*</span></label>

									<input type="text" class="form-control Cfield" required="" aria-label="email" name="email"  maxlength="50" onchange="emailValidation(this)" value="{{ old('name') }}">

								</div>

							</div>

							<div class="col-md-12 col-sm-12">

								<div class="form-group">

									<label>Please provide a brief introduction about yourself or your company<span class="error">*</span></label>

									<textarea name="comment" id="comment" title="Comment" class="form-control Cfield" cols="5" rows="3" name="message"  placeholder="" onkeyup="messageValidation(this)" maxlength="300" aria-label="Comment"  required="">{{old('comment') }}</textarea>

								</div>

							</div>

							<div class="col-md-12 col-sm-12">

								<div class="form-group">

									<label>Attach the Blog Text details in your layout format <span class="error">*</span><small class="text-dark">( only .doc or .docx files accepted )</small></label>

									<input type="file" class="form-control Cfield"  aria-label="docs" name="docs" required="" />

								</div>

							</div>

							<div class="col-md-12 col-sm-12">

								<div class="form-group">

									<label>Attach an image for your blog <span class="error">*</span><small class="text-dark">(jpeg, png, jpg, .webp files accepted )</small></label>

									<input type="file" class="form-control Cfield" aria-label="blog"  name="image" required="" />

								</div>

							</div>

							<div class="col-md-8 col-sm-12">

								<div class="form-group">

									<label>Enter Characters as displayed in image</label>
                                    <div class="captcha">
                                          <button type="button" class="btn btn-danger  reloadBtn  " id="reload">
                                            &#x21bb;
                                        </button>
                                     
                                        <span>{!! captcha_img('flat') !!}</span></br>
                                    </div>
                                    <input id="captcha" type="text" class="form-control mt-3" aria-label="Characters"  placeholder="Enter Characters as displayed in image" name="captcha">
									

								</div>

							</div>

							<div class="col-md-4 col-sm-12">

								<button type="submit"  class="btn nobtn green-bg lg-btn">SUBMIT YOUR BLOG</button>

								<p class="font14 text-right">You may also e-mail your Blog text and image to <a href="mailto:WeCare@911GlobalMeds.com" class="darkblue-text">WeCare@911GlobalMeds.com</a></p>

							</div>

						</div>

					</div>

				</form>

						</div>

						

						

						<h2>Guest Post Guidelines</h2>

						<div class="font20">Article Length</div>

						<p>We’re not about the word count. It takes what it takes to communicate your message effectively, however, most of our articles average 500-750 words. We’re looking for writing that’s chock-full of&nbsp;current, credible, relevant information that benefits our readers.</p>

						<div class="font20">Topics</div>

						<p>Some of the topics our readers are interested in include breaking news on cancer treatments and clinical trials as well as screening programs, nutrition and exercise guidelines, sample fitness regimens, meal prep, time savers, stress reducers and other healthy living tips useful to cancer patients before and after diagnosis. Check out our <a href="https://cancercarenews.com/category/ccn-blog/">blog</a> to get an idea of the types of posts our readers use to help in their daily lives, and get in touch if you think you have something unique to offer. It’s also a good idea to make sure we haven’t already covered the topic several times recently. We do not accept for consideration any cartoons, fiction, poetry, or politically-themed or anonymous articles.</p>

						<div class="font20">Content Review/Edit</div>

						<p>All content is subject to a thorough review process by medical professionals to ensure the accuracy of the information presented. We reserve the right to&nbsp;edit for content and clarity, but will always do our best to preserve your voice.</p>

						<div class="font20">Multimedia</div>

						<p>There is no need to add multimedia to your content; we will add it later. However, if you do choose to include any, please note we accept only images, videos and screenshots when they enhance the message and are free from copyright restrictions.</p>

						<div class="font20">Copyright</div>

						<p>All work submitted must be original and unique to Cancer Care News. We do not publish anything that appears elsewhere on the web.&nbsp;If we publish your post on Cancer Care News, we retain the rights to that content. We don’t allow republishing on any other website or blog.</p>

						<div class="font20">Disclosures</div>

						<p>Writers must disclose any financial investment in or involvement with the subject of the article for careful review by CCN editorial staff. Articles with a known conflicts of interest will be rejected.</p>

						<div class="font20">Acceptance</div>

						<p>While we read every pitch and article, due to time constraints we can’t respond to every one we receive. If you haven’t heard back from us in two weeks, we will not be able to use your content.&nbsp;An accepted query does not guarantee publication of your article. Editors reserve the right to reject any article at any time before publication.</p>

						<div class="font20">Links</div>

						<p>We limit links within accepted articles to two maximum. Your byline of up to 50 words may also be followed by two links to your author page and/or social media accounts.</p>

						<div class="quick-share ">

						<!-- AddToAny BEGIN -->

						<div class="a2a_kit a2a_kit_size_32 a2a_default_style">

						<a class="a2a_dd" href="https://www.addtoany.com/share"></a>

						<a class="a2a_button_facebook"></a>

						<a class="a2a_button_twitter"></a>

						<a class="a2a_button_linkedin"></a>

						<a class="a2a_button_pinterest"></a>

						</div>

						<script async src="https://static.addtoany.com/menu/page.js"></script>

						<!-- AddToAny END -->

						</div>

						</div>

					</div>

				</div>

			</div>      

		</div>

	</section>

</div>



@endsection