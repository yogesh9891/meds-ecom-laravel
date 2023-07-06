<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request; 
use Auth,Share;
use Hash,Mail;
use App\Models\contact;
use App\Models\User;
use App\Models\HomeHeader;
use App\Models\HomeMainBody;
use App\Models\HomeSeo;
use App\Models\HomeQa;
use App\Models\HomeGeneralDiseases;
use App\Models\HomeCriticalDiseases;
use App\Models\MedsInfo;
use App\Models\MedsVideo;
use App\Models\MedsLeaflet;
use App\Models\MedsProduct;
use App\Models\MedsQuestion;
use App\Models\MedsKeyword;
use App\Models\MedsPrice;
use App\Models\MedsSeo;
use App\Models\MedsForex;
use App\Models\CountryFreight;
use App\Models\Summary;
use App\Models\BankDetail;
use App\Models\BlogNews;
use App\Models\TextReview;
use App\Models\BlogReview;
use App\Models\VideoReview;
use App\Models\FaqTitle;
use App\Models\Faq;
use App\Models\QueryDetails;
use App\Models\WalletTransaction;
use Cache ;

use Illuminate\Auth\Events\Registered;


class FrontEndController extends Controller
{
    public function index()
    {
        $seconds = 86400;
        $HomeGeneralDiseases = Cache::remember('3-3-general-diseases', $seconds, function () { return  HomeGeneralDiseases::with('generic_medicines','generic_medicines.generic_medcine_info')->get(); });
       $HomeCriticalDiseases =  Cache::remember('3-4-critical-diseases', $seconds, function () { return   HomeCriticalDiseases::with('crtical_medicines','crtical_medicines.generic_medcine_info')->get(); });
        $homeQas = HomeQa::select('id','c_3_5_3_answer','c_3_5_2_question')->orderBy('c_3_5_1_qs_no')->orderBy('c_3_5_2_question')->get();
        $mainBody = HomeMainBody::first();
        $homeHeaders = HomeHeader::where('display','S')->get();
        $homeSeo = HomeSeo::first();
        $blognews = BlogNews::select('blog_title_h1','page_url_name','image_icon','image_icon_alt_tag')->where('home_page',1)->orderBy('blog_news_no','desc')->orderBy('blog_title_h1','asc')->get();
        // $allMedicine = MedsKeyword::get();
        //     $allMedicine =  Cache::remember('meds_keywords', $seconds, function () {
        //                     return MedsKeyword::get();
        //                 });
        
        //   $all_medcines = $allMedicine->unique('generic_name')->sortBy('generic_name')->groupBy(function ($item, $key) {
        //          return strtoupper(substr($item['generic_name'], 0, 1));
        //     })->toArray();
        // ksort($all_medcines);
        //  $genric_medcines = $allMedicine->sortBy('other_names')->groupBy(function ($item, $key) {
        //          return strtoupper(substr($item['other_names'], 0, 1));
        //     })->toArray();
        // ksort($genric_medcines);

$all_medcines = '';
$genric_medcines = '';
            $testimonials =  Cache::remember('text_reviews', $seconds, function () {
                            return TextReview::where('home',1)->orderBy('id','desc')->get();
                        });
           $testimonials_count = TextReview::where('testimonials',1)->count();
        return view('front.index',compact('homeHeaders','mainBody','homeQas','HomeGeneralDiseases','HomeCriticalDiseases','homeSeo','all_medcines','genric_medcines','testimonials','blognews','testimonials_count'));
    }


    public function medication($url)
    { 

        // if(!strpos($url, 'buy')){
        //     return redirect($url);
        // }


        $medicas = MedsInfo::where('c_1_1_4_frontend_url',$url)->firstOrFail();
        $allMedicine = MedsKeyword::get();
        $all_medcines = $allMedicine->unique('generic_name')->sortBy('generic_name')->groupBy(function ($item, $key) {
                 return strtoupper(substr($item['generic_name'], 0, 1));
            })->toArray();
        ksort($all_medcines);
         $genric_medcines = $allMedicine->sortBy('other_names')->groupBy(function ($item, $key) {
                 return strtoupper(substr($item['other_names'], 0, 1));
            })->toArray();
        ksort($genric_medcines);
        $medsVideos = MedsVideo::where('c_1_4_1_generic_id_no',$medicas->c_1_1_1_generic_id_no)->orderBy('c_1_4_2_video_no')->get();
        //dd($medsVideos);
        $medsqas = MedsQuestion::where('c_1_2_1_generic_id_no',$medicas->c_1_1_1_generic_id_no)->orderBy('c_1_2_2_qs_no')->orderBy('c_1_2_3_question')->get();
        
        $medsLeaflets = MedsLeaflet::where('c_1_3_1_generic_id_no',$medicas->c_1_1_1_generic_id_no)->where('c_1_3_2_pdf_no','!=','1')->orderBy('c_1_3_3_language')->get()->unique('c_1_3_2_pdf_no');
        $medsLeafletsFirst = MedsLeaflet::where('c_1_3_1_generic_id_no',$medicas->c_1_1_1_generic_id_no)->where('c_1_3_2_pdf_no','1')->first();
        $medsProducts = MedsProduct::where('c_2_1_1_generic_id_no',$medicas->c_1_1_1_generic_id_no)->orderBy('c_2_1_4_display_at')->get();
        $medsImages = [];
        $medsImages =   $medsProducts->map(function($med)   {
            $medsImages1 = [];
             if(!empty($med->meds_price)){
                if(!is_null($med->meds_price->c_2_2_14_g_full_image) && !empty($med->meds_price->c_2_2_14_g_full_image)){
                    array_push($medsImages1, $med->meds_price->c_2_2_14_g_full_image);
                } 
                 if(!is_null($med->meds_price->c_2_2_36_b_full_image) && !empty($med->meds_price->c_2_2_36_b_full_image)){
                    array_push($medsImages1, $med->meds_price->c_2_2_36_b_full_image);
                }    
                if(!empty($medsImages1)){
                return $medsImages1;
                }

             // return $med->meds_price->c_2_2_36_b_full_image.'#$'.$med->meds_price->c_2_2_14_g_full_image;
            }
             })->toArray();
             $medsImages =  array_filter($medsImages);
        $medsPrices = MedsPrice::where('c_2_2_1_generic_id_no',$medicas->c_1_1_1_generic_id_no)->get();
        $medsSeo = MedsSeo::where('c_1_5_1_generic_id_no',$medicas->c_1_1_1_generic_id_no)->first();
        $medsForex = MedsForex::first();
        $doller = $medsForex->c_2_3_2_fx_rate_1 ;

        $sign = $medsForex->c_2_3_1_fx_sign_1 ;
          $testimonials = TextReview::where('medicine',$medicas->c_1_1_1_generic_id_no)->where('medicine_status',1)->orderBy('id','desc')->get();
          $all_testimonials = TextReview::where('testimonials',1)->orderBy('rating','desc')->get();
            $countries = CountryFreight::where('c_4_1_5_delivery_address','Y')->get();
    $blognews = BlogNews::select('blog_title_h1','page_url_name','medium_image','medium_image_alt_tag')->where('medication',$medicas->c_1_1_1_generic_id_no)->orderBy('blog_news_no','desc')->orderBy('blog_title_h1','asc')->get();
        return view('front.medication',compact('medicas','medsProducts','medsPrices','medsqas','medsVideos','medsSeo','medsLeaflets','sign','doller','medsLeafletsFirst','allMedicine','all_medcines','medsImages','genric_medcines','testimonials','blognews','countries','all_testimonials'));
    }



    public function my_account(Request $request)
    { 
        if($request->isMethod('post')){

            $request->validate([
                'old_Password' => 'required',
                'email' => 'required',
                'newPass' => 'required',
                'confirmPass' => 'same:newPass',
            ],['confirm_pass.same'=>'The New Login Password & its Confirm Password does not match!']);;
            if($request->old_Password == Auth::user()->password) {
                User::find(Auth()->user()->id)->update(['password' => $request->newPass,'email'=>$request->email]);
                     return response()->json(['status'=>true,'msg'=>'Password is change successfully']);
                // return back()->with('success', 'Password is change successfully');
               
            }
            else {

                     return response()->json(['status'=>false,'msg'=>'Your Old Password is incorrect.']);
                return back()->with('error', 'Old password is worng');
            }
        }
    
    $orders = Summary::where('user_id',Auth::id())->whereNotNull('c_14_2_online_invoice_no')->orderBy('id','desc')->get();

        return view('front.my_account',compact('orders'));
    }

    public function angel_number()
    { 
        return view('front.angel_number');
    }

    public function how_to_order()
    {   
          $faq_title =  FaqTitle::first();
        $faqs = Faq::orderBy('question_no','asc')->orderBy('question','asc')->get();
        return view('front.how_to_order',compact('faqs','faq_title'));
    }

      public function brand_generic()
    { 
        $faqs = Faq::where('type','branded_and_generic')->orderBy('question_no','asc')->orderBy('question','asc')->get();
        $allMedicine = MedsKeyword::get();
        
         $all_medcines = $allMedicine->unique('generic_name')->sortBy('generic_name')->groupBy(function ($item, $key) {
                 return strtoupper(substr($item['generic_name'], 0, 1));
            })->toArray();
        ksort($all_medcines);
         $genric_medcines = $allMedicine->sortBy('other_names')->groupBy(function ($item, $key) {
                 return strtoupper(substr($item['other_names'], 0, 1));
            })->toArray();
        ksort($genric_medcines);
        return view('front.branded-vs-generic',compact('faqs','all_medcines','genric_medcines'));
    }
         public function who_faq()
    { 
        $faqs = Faq::where('type','who')->orderBy('question_no','asc')->orderBy('question','asc')->get();
     
        return view('front.who',compact('faqs'));
    }



      public function guest_blog()
    { 
        return view('front.guest_blogs');
    }


      public function beOurPartner()
    { 
        return view('front.be-our-pharmacy');
    }


    public function cart_checkout()
    { 
        return view('front.cart_chechout');
    }   

    
     public function privacyPolicy()
    { 
        return view('front.privacy-policy');
    } 
    
    
     public function sitemap()
    { 
             $allMedicine = MedsKeyword::get();
        
         $all_medcines = $allMedicine->unique('generic_name')->sortBy('generic_name')->groupBy(function ($item, $key) {
                 return strtoupper(substr($item['generic_name'], 0, 1));
            })->toArray();
        ksort($all_medcines);
         $genric_medcines = $allMedicine->sortBy('other_names')->groupBy(function ($item, $key) {
                 return strtoupper(substr($item['other_names'], 0, 1));
            })->toArray();
        ksort($genric_medcines);
        return view('front.sitemap',compact('all_medcines','genric_medcines'));
    } 

     public function disclaimer()
    { 
        return view('front.disclaimer');
    }   
    

     public function termAndCondition()
    { 
        return view('front.term-and-conditions');
    }  

    public function get_Cart(Request $request)
    {

        return view('front.cart_chechout');
    } 
    
    public function reloadCaptcha()
    {
        return response()->json(['captcha'=> captcha_img('flat')]);
    }

    public function testimonial(Request $request)
    {   
        $rating = $request->r ?? 5;

        $lowest_rating = $rating-0.5;
        $highest_rating = $rating+0.5;

        $testimonials = TextReview::where('testimonials',1)->whereBetween('rating',[$lowest_rating,$highest_rating])->orderBy('id','desc')->get();
        $all_testimonials = TextReview::where('testimonials',1)->orderBy('rating','desc')->get();
        $video_reviews = VideoReview::where('testimonial',1)->get();
        $allMedicine = MedsKeyword::get();

        
          $all_medcines = $allMedicine->unique('generic_name')->sortBy('generic_name')->groupBy(function ($item, $key) {
                 return strtoupper(substr($item['generic_name'], 0, 1));
            })->toArray();
        ksort($all_medcines);
         $genric_medcines = $allMedicine->sortBy('other_names')->groupBy(function ($item, $key) {
                 return strtoupper(substr($item['other_names'], 0, 1));
            })->toArray();
        ksort($genric_medcines);
        return view('front.testimonial',compact('testimonials','video_reviews','all_testimonials','all_medcines','genric_medcines'));
    }
    
    public function latestBlog()
    {
        $blognews = BlogNews::where('blog_news',1)->orderBy('blog_news_no','desc')->orderBy('blog_title_h1','asc')->paginate(9);
        $homeSeo = HomeSeo::orderBy('id','desc')->first();

        return view('front.latest_blog',compact('blognews','homeSeo'));
    }

    public function indivisualBlog($slug)
    {
        $blog = BlogNews::with('blog_reviews')->where('page_url_name',$slug)->firstOrFail();
        $blognews = BlogNews::select('blog_title_h1','page_url_name','image_icon','image_icon_alt_tag')->orderBy('blog_news_no','desc')->orderBy('blog_title_h1','asc')->get();

        $blog_url = route('indivisual_blog',$slug);
      $social_links =   Share::page($blog_url, $blog->blog_title_h1)
            ->facebook()
            ->twitter()
            ->linkedin()
            ->reddit()
            ->telegram()
            ->getRawLinks();


        return view('front.indivisual_blog',compact('blog','blognews','social_links'));
    }

    public function reviewAndTestimonial()
    { 
        return view('front.review-and-testimonial');
    }

    public function contact_us(Request $request)
    { 
        if($request->isMethod('post')) {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|emailemail:rfc,dns',
            'mobile' => 'required',
            'country' => 'required',
            'message' => 'required|min:15',
        ]);

        $data = new contact;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->mobile = $request->mobile;
        $data->country = $request->country;
        $data->message = $request->message;
        $data->save();
        return redirect()->route('front.contact_us')->with('success', 'User created successfully.');
        }

        return view('front.contact_us');

    }

    public function about_us()
    { 

        $video_reviews = VideoReview::where('about',1)->get();
         $testimonials = TextReview::where('about',1)->where('rating',5)->orderBy('id','desc')->get();
        $all_testimonials = TextReview::where('testimonials',1)->orderBy('rating','desc')->get();

        return view('front.about_us',compact('testimonials','video_reviews','all_testimonials'));
    }
  
	    public function search($q)
    {
        
       if(!$q){
       	return false;
       }

       $allItems = new \Illuminate\Database\Eloquent\Collection;
       $new_array = [];

        $data = MedsInfo::select('id','c_1_1_1_generic_id_no','c_1_1_2_main_generic_name','c_1_1_4_frontend_url')->where('c_1_1_2_main_generic_name','LIKE',"{$q}%")->orderBy('c_1_1_2_main_generic_name')->get();

        // array_push($new_array, $data);
       $new_array =  array_merge($data->toArray());
  
        // $allItems = $allItems->merge($data);

     $data1 = MedsInfo::select('id','c_1_1_1_generic_id_no','c_1_1_2_main_generic_name','c_1_1_4_frontend_url','c_1_1_3_other_names')->where('c_1_1_3_other_names','LIKE',"%{$q}%")->orderBy('c_1_1_2_main_generic_name')->get();

        foreach ($data1 as  $row){
                // concatenate output to the array
                $array = explode(',', $row->c_1_1_3_other_names);
                // $row->c_1_1_2_main_generic_name = strtoupper($row->c_1_1_2_main_generic_name);
                foreach ($array as $key => $value) {
            $sa = '/^'.$q.'/i';
              $matches  =   preg_match($sa, $value);
                    if($matches){
                        $row->c_1_1_2_main_generic_name = $value;

                       // $allItems = $allItems->merge($row);
                         array_push($new_array,$row->toArray());
                // $output .= '<li class="list-group-item search-hover"  data-id="'.$row->id.'"><a  href="'.route('medication',$row->c_1_1_4_frontend_url).'"> '.$value.' </a></li>';
                //     }
                }
            }

        }   

        $columns = array_column($new_array, 'c_1_1_2_main_generic_name');
        array_multisort($columns, SORT_ASC, $new_array);
      // return response()->json(['data'=>$allItems]);
        $output = '';
            $output = '<ul class="list-group search-ul" >';
        // if searched countries count is larager than zero
        if (count($new_array)>0) {
            // concatenate output to the array
            // loop through the result array
            foreach ($new_array as $row){
                // concatenate output to the array

                $output .= '<li class="list-group-item search-hover" style="padding-left: 10px;" data-id="'.$row['id'].'"><a  href="'.route('medication',$row['c_1_1_4_frontend_url']).'"> '.$row['c_1_1_2_main_generic_name'].' </a></li>';
            }
            // end of output
         
        }
      


        //      if (count($data1)>0) {
        //     // concatenate output to the array
        //     // loop through the result array
        //     foreach ($data1 as $row){
        //         // concatenate output to the array
        //         $array = explode(',', $row->c_1_1_3_other_names);
        //         foreach ($array as $key => $value) {
        //     $sa = '/'.$q.'/i';
        //       $matches  =   preg_match($sa, $value);
        //             if($matches){

        //         $output .= '<li class="list-group-item search-hover"  data-id="'.$row->id.'"><a  href="'.route('medication',$row->c_1_1_4_frontend_url).'"> '.$value.' </a></li>';
        //             }
        //         }
        //     }
        //     // end of output
        // }
           $output .= '</ul>';
        // return output result array
        return $output;

    }


    public function forgetPassword(Request $request)
    {
        $email = $request->email;
      $user = User::where('email',$email)->where('is_block',0)->first();
      if(!$user){
        return response()->json(['status'=>false,'msg'=>'This Login ID does not exist!']);
      }

      $data['to'] = $user->email;
        $data['cc'] = env('MAIL_CC');
           Mail::send('mails.mail_23_forget_password', compact('user'), function($message) use ($data) {
         $message->to($data['to'])->cc($data['cc'])->from('info@911globalmeds.com', '911globalmeds.com 💊')->subject('Your Login Password at 911GlobalMeds.com');
               }); 

        return   response()->json(['status'=>true,'msg'=>'This Login ID does not exist!']);

    }

    public function countrySearch($q)
    {
        if(!$q){
            return false;
        }

        $isBilling = $request->is_billing ?? false;
           $data = CountryFreight::select('id','c_4_1_2_country_name','c_4_1_1_s_no','c_4_1_5_delivery_address')->where('c_4_1_2_country_name','LIKE',"%{$q}%")->where('c_4_1_5_delivery_address','Y')->get();    
        if($isBilling){
              $data = CountryFreight::select('id','c_4_1_2_country_name','c_4_1_1_s_no','c_4_1_4_billing_address')->where('c_4_1_2_country_name','LIKE',"%{$q}%")->where('c_4_1_4_billing_address','Y')->get();
        }
           $output = '';

            // if searched countries count is larager than zero
        if (count($data)>0) {
            // concatenate output to the array
            $output = '<ul class="list-group " style="display: block; position: relative; z-index: 1;border:1px solid #000;width:180px">';
            // loop through the result array
            foreach ($data as $row){
                // concatenate output to the array
                $output .= '<li class="list-group-item hover-item  p-0 border-0" onclick="getCountry(this)" data-id="'.$row->id.'">'.$row->c_4_1_2_country_name.' </li>';
            }
            // end of output
            $output .= '</ul>';
        }
        else {
            // if there's no matching results according to the input
            $output .= '<li class="list-group-item">'.'No results'.'</li>';
        }
        // return output result array
        return $output;
    }

    public function UserLogin(Request $request)
    {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
    

    if(isset($request->url)){
        $user = User::where('email',$request->email)->where('password',$request->password)->where('wallet_id',$request->url)->where('is_block',0)->first();
                  ;

                  if ($user) {
                           Auth::login($user);

                        $request->session()->regenerate();
                  return redirect()->back();
                 }  else {
                        return redirect()->back()->with('error','The LogIn Credentials are not correct for this page link.Please fill the correct Wallet Account credentials.');

     }
     } 
    

        $user = User::where('email',$request->email)->where('password',$request->password)->where('is_block',0)->first();
        if ($user) {
               Auth::login($user);

            $request->session()->regenerate();
 
                if($request->ajax()){

                        return response()->json(['status'=>true]);
                    } else {

                       
                        return redirect()->route('cart_checkout');
                    }
        } else {

            
                if($request->ajax()){
                                return response()->json(['status'=>false,'msg'=>'Login Details are incorrect. Please correct/fill again.']);
                         // return response()->json(['status'=>false,'msg'=>'Login Details are incorrect. Please fill again']);
                    } else {
                        return redirect()->back()->with('error','Login Details are incorrect. Please correct/fill again.');
                    }
        }
                
     
    }

      public function UserRegister(Request $request)
    {

       $data =   $this->validate($request,[
            'name' => ['required', 'string', 'max:255'],
            'mobile' => ['required'],
            'country' => ['required'],
            'email' => ['required', 'string', 'email:rfc,dns', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8','confirmed'],
            'captcha' => 'required|captcha'
        ],['captcha.captchaco' =>'Enable Captcha from the Checkbox - “I’m not a Robot”']);
        // ]);

     $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'country' => $data['country'],
            'mobile' => $data['mobile'],
            'password' => $data['password'],
        ]);

          event(new Registered($user));
               Auth::login($user);
             if($request->ajax()){

            return response()->json(['status'=>true]);
        } else {
            return redirect()->route('cart_checkout');
        }
        
            // return response()->json(['status'=>false,'msg'=>'Please try again after sometime']);
     
    }


    public function submitReview(Request $request)
    { 

        // dd($request->all());
        $this->validate($request,[
            'name' => ['required', 'string', 'max:255'],
            'country' => ['required'],
             'email' => 'required|email:rfc,dns',
            'rating_1' => 'required',     
            'rating_2' => 'required',     
            'rating_3' => 'required',     
            'rating_4' => 'required',     
            'rating_5' => 'required',     
             'captcha' => 'required|captcha'
        ],['recaptcha' =>'Enable Captcha from the Checkbox - “I’m not a Robot”']);
     
        $review = new TextReview;
        $review->full_name = $request->name;
        $review->country = $request->country;
        $review->email = $request->email;
        $review->comment = $request->review;
        $review->rating_1  = $request->rating_1;
        $review->rating_2  = $request->rating_2;
        $review->rating_3  = $request->rating_3;
        $review->rating_4  = $request->rating_4;
        $review->rating_5  = $request->rating_5;
          $avg_rating = round(($request->rating_1+$request->rating_2+$request->rating_3+$request->rating_4+$request->rating_5)/5,2);
        $review->rating  = $avg_rating;
        $review->status  = 1;
        $review->posting_from_page  = $request->posting_url;
        $review->page_name  = $request->posting_name;
        $review->save();

        if($request->ajax()){
         return response()->json(['status'=>true]);
            }
         return redirect()->back()->with('success','Thank you for your Reviews / Testimonials, they shall be posted soon!');
    }


    public function blogComment(Request $request)
    { 
        $this->validate($request,[
            'name' => ['required', 'string', 'max:255'],
            'country' => ['required'],
            'comment' => 'required',
            'captcha' => 'required|captcha'
        ],['recaptcha' =>'Enable Captcha from the Checkbox - “I’m not a Robot”']);
     
        $review = new BlogReview;
        $review->fullname = $request->name;
        $review->country = $request->country;
        $review->email = $request->email;
        $review->comment = $request->comment;
        $review->post_on_blog = $request->post_on_blog;
        $review->save();
            return back()->with('success','Vomment Posted Successfully');
       
    }
    
    public function patient_authorization()
    { 
      return view('front.patient_authorization');
    }
    
     public function customer_agreement()
    { 
      return view('front.customer_agreement');
    }
    
  


    public function cancerDisease()
    {
         $general_diseases = HomeCriticalDiseases::with('crtical_medicines','crtical_medicines.generic_medcine_info')->get();
         
         $disease = '';
         if($general_diseases->count() > 0 ){
             
             $id = $general_diseases->first()->id;
             
            $disease = HomeCriticalDiseases::with('crtical_medicines','crtical_medicines.generic_medcine_info')->findOrFail($id); 
            
         }
        
         $medsSeo = HomeSeo::find(9);
          $allMedicine = MedsKeyword::get();
        
         $all_medcines = $allMedicine->unique('generic_name')->sortBy('generic_name')->groupBy(function ($item, $key) {
                 return strtoupper(substr($item['generic_name'], 0, 1));
            })->toArray();
        ksort($all_medcines);
         $genric_medcines = $allMedicine->sortBy('other_names')->groupBy(function ($item, $key) {
                 return strtoupper(substr($item['other_names'], 0, 1));
            })->toArray();
        ksort($genric_medcines);
        return view('front.cancer_disease',compact('general_diseases','disease','medsSeo','all_medcines','genric_medcines'));
        }


           public function allDisease()
    {
         $general_diseases = HomeGeneralDiseases::with('generic_medicines','generic_medicines.generic_medcine_info')->get();
         
         $disease = '';
         if($general_diseases->count() > 0 ){
             
             $id = $general_diseases->first()->id;
             
            $disease = HomeGeneralDiseases::with('generic_medicines','generic_medicines.generic_medcine_info')->findOrFail($id); 
            
         }
        
         $medsSeo = HomeSeo::find(8);
          $allMedicine = MedsKeyword::get();
        
         $all_medcines = $allMedicine->unique('generic_name')->sortBy('generic_name')->groupBy(function ($item, $key) {
                 return strtoupper(substr($item['generic_name'], 0, 1));
            })->toArray();
        ksort($all_medcines);
         $genric_medcines = $allMedicine->sortBy('other_names')->groupBy(function ($item, $key) {
                 return strtoupper(substr($item['other_names'], 0, 1));
            })->toArray();
        ksort($genric_medcines);
        return view('front.all_disease',compact('general_diseases','disease','medsSeo','all_medcines','genric_medcines'));
        }

    public function cancerDiseaseByName($name)
    {
         $general_diseases = HomeGeneralDiseases::get();
         $disease = HomeGeneralDiseases::with('generic_medicines','generic_medicines.generic_medcine_info')->where('c_3_3_2_general_disease',$name)->firstOrFail();

        //  if($general_diseases->count() > 0 ){
             
        //      $id = $general_diseases->first()->id;
             
        //     $disease = HomeGeneralDiseases::with('generic_medicines','generic_medicines.generic_medcine_info')->findOrFail($id); 
            
        //  }
      $medsSeo = HomeSeo::find(8);
        $allMedicine = MedsKeyword::get();
        
         $all_medcines = $allMedicine->unique('generic_name')->sortBy('generic_name')->groupBy(function ($item, $key) {
                 return strtoupper(substr($item['generic_name'], 0, 1));
            })->toArray();
        ksort($all_medcines);
         $genric_medcines = $allMedicine->sortBy('other_names')->groupBy(function ($item, $key) {
                 return strtoupper(substr($item['other_names'], 0, 1));
            })->toArray();
        ksort($genric_medcines);
       return view('front.cancer_disease',compact('general_diseases','disease','medsSeo','all_medcines','genric_medcines'));
        }



public function gustBlogSubmit(Request $request)
{
   
   $request->validate([
         'name' => 'required',
         'country' => 'required',
         'email' => 'required|email:rfc,dns',
         'image' => 'mimes:jpeg,png,jpg,.webp',
         'docs' => 'mimes:docs,docx',
         'comment' => 'required',
        'captcha' => 'required|captcha'
        ],['captcha.captcha' =>' Captcha is Wrong']);
      
      

      //      $query_detail = $contactUsQuery;
      //        $data['cc'] = env('MAIL_CC');
      //       $data['to'] = $query_detail->c_10_6_email ;
      //     $data['subject'] = 'Query from Contact us Form' ;
      //    Mail::send('mails.mail_22_retail_query', compact('query_detail'), function($message) use ($data) {
      //    $message->to($data['to'])->cc($data['cc'])->from('info@911globalmeds.com', '911globalmeds.com 💊')->subject($data['subject']);
      // });
        return back()->with('success','Record is successfully added');

}


public function referFriend(Request $request,$wallet_url)
{
    $user= User::where('wallet_id',$wallet_url)->firstOrFail();
    if(Auth::user() && Auth::id() != $user->id){
        Auth::logout();
    }
    $coupons = [
        $user->wallet_id??'###',
        $user->coupon_code??'####',
    ];
    if(isset($request->id) && $request->id ==$user->email && $request->pwd == $user->password){
       Auth::login($user, true); 
    }
    $orders = Summary::with('coupon')->whereNotNull('c_14_93_pay_mode')->whereIn('c_14_75_coupon_code_used',$coupons)->whereNotNull('c_14_76_promo_discount')->whereNotNull('c_14_96_forex_received')->latest()->get();

    return view('front.refer',compact('user','orders'));
}
    public function test()
    {
     
    $summary = Summary::with('order_details')->find(8); 	
     $bank_detail = BankDetail::where('c_5_1_s_no','BD-1')->first();
     $query_detail = QueryDetails::find(1);
     $wallet_transaction = WalletTransaction::find(1);
     // return view('mails.mail_4_proforma_order_mail_pi',compact('summary','bank_detail'));
    //  return view('mails.mail_5_final_order_mail_oi',compact('summary','bank_detail'));
     // return view('mails.mail_1_order_reminder_or1',compact('summary','bank_detail'));
    // return view('mails.mail_2_order_reminder_mail_or2',compact('summary','bank_detail'));
    // return view('mails.mail_3_order_reminder_mail_or3',compact('summary','bank_detail'));
    // return view('mails.mail_6_cc_payment_reminder_mail_cp1 ',compact('summary','bank_detail'));
   // return view('mails.mail_7_cc_payment_reminder_mail_cp2 ',compact('summary','bank_detail'));
    // return view('mails.mail_8_cc_payment_thanks_mail_cpt  ',compact('summary','bank_detail'));
  //  return view('mails.mail_9_bt_payment_reminder_mail_bp1',compact('summary','bank_detail'));
    // return view('mails.mail_10_bt_payment_reminder_mail_bp2',compact('summary','bank_detail'));
    // return view('mails.mail_11_bt_payment_thanks_mail_bpt',compact('summary','bank_detail'));
    // return view('mails.mail_12_shipment_mail_s',compact('summary','bank_detail'));
    // return view('mails.mail_13_foreign_arrival_mail_f',compact('summary','bank_detail'));
     // return view('mails.mail_14_custom_clearance_mail_c',compact('summary','bank_detail'));
    // return view('mails.mail_15_delivered_mail_d',compact('summary','bank_detail'));
    // return view('mails.mail_16_reviews_mail_r1',compact('summary','bank_detail'));
    // return view('mails.mail_17_reviews_mail_r2',compact('summary','bank_detail'));
    // return view('mails.mail_18_refil_reminder_mail_1_rr1',compact('summary','bank_detail'));
    // return view('mails.mail_19_refil_reminder_mail_2_rr2',compact('summary','bank_detail'));
    // return view('mails.mail_20_refil_reminder_mail_3_rr3',compact('summary','bank_detail'));
    // return view('mails.mail_21_order_hold_mail_oh',compact('summary','bank_detail'));
    // return view('mails.mail_30_guest_blog',compact('summary','bank_detail'));
    // return view('mails.mail_22_retail_query',compact('query_detail'));
    // return view('mails.mail_24_referrals',compact('wallet_transaction'));
     $user = User::find(Auth::id());
    // return view('mails.mail_25_refer_friend',compact('user'));

    // return view('mails.mail_23_forget_password',compact('user'));
    

     $emailData = [];
    $subject = 'Welcome to Refer-a-Friend Benefits – a/c  '.$wallet_transaction->wallet_id;
      Mail::send('mails.mail_25_refer_friend', compact('user'), function($message) use ($subject) {
         $message->to('arhamconsultants@gmail.com')->cc('medibridgeindia@gmai.com')->subject($subject);
      });
      die;
              $data['cc'] = env('MAIL_CC');
            
            $data['to'] = $query_detail->c_10_6_email ;
            $data['file'] = $query_detail->c_10_9_attachment ;
            if($query_detail->medicine){
                $subject = 'Patient Purchase Query : ';
                if($query_detail->c_10_5_business_name){
                     $subject = 'Business Purchase Query : ';
                }

                 $data['subject'] = $subject.$query_detail->medicine->c_1_1_2_main_generic_name.'/'.$query_detail->medicine->c_1_1_3_other_names ;

            }

                 if($query_detail->c_10_1_s_no =='Contact Us'){
                    $data['subject']  = 'Query from Contact us Form';
                 }


                  if($query_detail->order){
                    $data['subject']  = 'Your Query on your Ordered Medications';
                 }

         Mail::send('mails.mail_22_retail_query', compact('query_detail'), function($message) use ($data) {
         $message->to($data['to'])->cc($data['cc'])->from('info@911globalmeds.com', '911globalmeds.com 💊 Cares for You !')->subject($data['subject']);
         if($data['file']){
         $message->attach(url('/'.$data['file']));

         }


      });  

      //   Mail::send('mails.mail_1_order_reminder_or1', compact('summary','bank_detail'), function($message) {
      //    $message->to('arhamconsultants@gmail.com')->cc('medibridgeindia@gmai.com')->subject('Your Medicines Order : Details Incomplete');
      // }); 
      //     Mail::send('mails.mail_2_order_reminder_mail_or2', compact('summary','bank_detail'), function($message) {
      //    $message->to('arhamconsultants@gmail.com')->cc('medibridgeindia@gmai.com')->subject('Details Incomplete for your Medicines Order');
      // });

     //          Mail::send('mails.mail_3_order_reminder_mail_or3', compact('summary','bank_detail'), function($message) {
     //     $message->to('arhamconsultants@gmail.com')->cc('medibridgeindia@gmai.com')->subject(' Your Medicines Order : Cart-Checkout completion reminder ');   
     // });
      //     Mail::send('mails.mail_6_cc_payment_reminder_mail_cp1 ', compact('summary','bank_detail'), function($message) {
      //    $message->to('arhamconsultants@gmail.com')->cc('medibridgeindia@gmai.com')->subject('Credit Card Payment Reminder for your Ordered Medicines');
      // });

      //     Mail::send('mails.mail_7_cc_payment_reminder_mail_cp2 ', compact('summary','bank_detail'), function($message) {
      //    $message->to('arhamconsultants@gmail.com')->cc('medibridgeindia@gmai.com')->subject('Second Reminder for Credit Card Payment ');
      // });   

      //    Mail::send('mails.mail_8_cc_payment_thanks_mail_cpt', compact('summary','bank_detail'), function($message) {
      //    $message->to('arhamconsultants@gmail.com')->cc('medibridgeindia@gmai.com')->subject('Receipt of Credit Card Payment');
      // });

      //      Mail::send('mails.mail_9_bt_payment_reminder_mail_bp1', compact('summary','bank_detail'), function($message) {
      //    $message->to('arhamconsultants@gmail.com')->cc('medibridgeindia@gmai.com')->subject('Bank Transfer Payment Reminder for your Ordered Medicines');
      // });

      //       Mail::send('mails.mail_10_bt_payment_reminder_mail_bp2', compact('summary','bank_detail'), function($message) {
      //    $message->to('arhamconsultants@gmail.com')->cc('medibridgeindia@gmail.com')->subject('Second Reminder for Bank Transfer Payment ');
      // });

      //        Mail::send('mails.mail_11_bt_payment_thanks_mail_bpt', compact('summary','bank_detail'), function($message) {
      //    $message->to('arhamconsultants@gmail.com')->cc('medibridgeindia@gmail.com')->subject('Receipt of Bank Transfer Payment');
      // });

      //         Mail::send('mails.mail_12_shipment_mail_s', compact('summary','bank_detail'), function($message) {
      //    $message->to('arhamconsultants@gmail.com')->cc('medibridgeindia@gmai.com')->subject('Tracking Details for your Medicines Order ');
      // });

      //          Mail::send('mails.mail_13_foreign_arrival_mail_f', compact('summary','bank_detail'), function($message) {
      //    $message->to('arhamconsultants@gmail.com')->cc('medibridgeindia@gmai.com')->subject('Your Medicines Parcel Arrival at UK Customs');
      // });

      //    Mail::send('mails.mail_14_custom_clearance_mail_c', compact('summary','bank_detail'), function($message) {
      //    $message->to('arhamconsultants@gmail.com')->cc('medibridgeindia@gmai.com')->subject('Customs Clearance of your medicines parcel');
      // });

      //     Mail::send('mails.mail_15_delivered_mail_d', compact('summary','bank_detail'), function($message) {
      //    $message->to('arhamconsultants@gmail.com')->cc('medibridgeindia@gmai.com')->subject('Parcel Delivered / Feedback requested');
      // });

	      //      Mail::send('mails.mail_16_reviews_mail_r1', compact('summary','bank_detail'), function($message) {
	      //    $message->to('arhamconsultants@gmail.com')->cc('medibridgeindia@gmai.com')->subject('Reviews requested on the medicines delivered to you');
	      // });

	      //       Mail::send('mails.mail_17_reviews_mail_r2', compact('summary','bank_detail'), function($message) {
	      //    $message->to('arhamconsultants@gmail.com')->cc('medibridgeindia@gmai.com')->subject('Reviews / Testimonials requested ');
	      // });

	      //        Mail::send('mails.mail_18_refil_reminder_mail_1_rr1', compact('summary','bank_detail'), function($message) {
	      //    $message->to('arhamconsultants@gmail.com')->cc('medibridgeindia@gmai.com')->subject('Refill Reminder for your medicines');
	      // });

	      //         Mail::send('mails.mail_19_refil_reminder_mail_2_rr2', compact('summary','bank_detail'), function($message) {
	      //    $message->to('arhamconsultants@gmail.com')->cc('medibridgeindia@gmai.com')->subject('Your medicines are due for a Refill');
	      // });

	      //          Mail::send('mails.mail_20_refil_reminder_mail_3_rr3', compact('summary','bank_detail'), function($message) {
	      //    $message->to('arhamconsultants@gmail.com')->cc('medibridgeindia@gmai.com')->subject('Your medicines Refill Order is Overdue');
	      // });

       //         Mail::send('mails.mail_21_order_hold_mail_oh', compact('summary','bank_detail'), function($message) {
	      //    $message->to('arhamconsultants@gmail.com')->cc('medibridgeindia@gmai.com')->subject('Your medicines Order is on Hold');
	      // });

    }

}
