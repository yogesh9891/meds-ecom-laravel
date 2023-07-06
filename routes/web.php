<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MedsNamesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\MedsQuestionController;
use App\Http\Controllers\MedsVideoController;
use App\Http\Controllers\MedsSeoController;
use App\Http\Controllers\MedsProductController;
use App\Http\Controllers\MedsPriceController;
use App\Http\Controllers\MedsForexController;
use App\Http\Controllers\MedsLeafletController;
use App\Http\Controllers\HomeHeaderController;
use App\Http\Controllers\HomeMainBodyController;
use App\Http\Controllers\HomeGeneralDiseasesController;
use App\Http\Controllers\HomeQaController;
use App\Http\Controllers\HomeSeoController;
use App\Http\Controllers\HomeCriticalDiseasesController;
use App\Http\Controllers\QueryController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CountryFreightController;
use App\Http\Controllers\PromoDiscountController;
use App\Http\Controllers\BankDetailController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\BlogNewsController;
use App\Http\Controllers\TextReviewController;
use App\Http\Controllers\VideoReviewController;
use App\Http\Controllers\BlogReviewController;
use App\Http\Controllers\FaqsController;
use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\WalletTransactionController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
            return redirect()->route('index');
});
Route::get('/home2', function () {
    return view('home');
});


// Route::get('/{url}',[FrontEndController::class, 'medication'])->name('medication');


Auth::routes();

Route::get('/aadhya/i-love-you', [AdminController::class, 'index'])->name('aadhya');
Route::post('/aadhya-login', [AdminController::class, 'adminLogin'])->name('aadhya.login');
Route::get('/home', [HomeController::class, 'index']);


Route::group(['prefix' => 'aadhya',  'middleware' => ['is_admin'],'as'=>'aadhya.'],function () {
    // Route::get('/query', [AdminController::class, 'query'])->name('query');
    Route::post('/logout', [AdminController::class, 'logout'])->name('logout');
    Route::get('/logout', function () {
    return abort(404);
});

    Route::get('/1-meds-info', [MedsNamesController::class,'index'])->name('1-meds-info')->middleware('permission');
    Route::get('/thank-you', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::match(['get','post'],'/16-password', [AdminController::class, 'password'])->name('password');
    Route::match(['get','post'],'/password-match', [AdminController::class,'passwordMatch'])->name('password.match');
    Route::get('/16-password/delete/{id}', [AdminController::class,'passwordDelete'])->name('password.delete');
    Route::post('/1-meds-info', [MedsNamesController::class,'store'])->name('1-meds-info.store');
    Route::get('/1-meds-info-search', [MedsNamesController::class,'search'])->name('1-meds-info.search');
    Route::post('/1-meds-info-search-validation', [MedsNamesController::class,'searchValidation'])->name('1-meds-info.search.validation');
    Route::get('/1-meds-info-show/{id}' , [MedsNamesController::class,'show'])->name('1-meds-info.show'); 
    Route::post('/1-meds-info/upadate/{id}', [MedsNamesController::class,'update'])->name('1-meds-info.udate');
    Route::get('/1-meds-info/delete/{id}', [MedsNamesController::class,'destroy'])->name('1-meds-info.delete');
    Route::post('/1-meds-info/import' , [MedsNamesController::class,'import'])->name('1-meds-info.import'); 
    Route::get('/1-meds-info/export' , [MedsNamesController::class,'export'])->name('1-meds-info.export'); 
    Route::get('/1-meds-info/delete' , [MedsNamesController::class,'delete'])->name('1-meds-info.destroy'); 
    Route::get('/1-meds-info/{id}' , [MedsNamesController::class,'showById'])->name('1-meds-info.index'); 



    Route::get('/1-meds-leaflet', [MedsLeafletController::class,'index'])->name('1-meds-leaflet');
    Route::post('/1-meds-leaflet', [MedsLeafletController::class,'store'])->name('1-meds-leaflet.store');
    Route::get('/1-meds-leaflet/delete/{id}', [MedsLeafletController::class,'destroy'])->name('1-meds-leaflet.delete');
     Route::get('/1-meds-leaflet/export', [MedsLeafletController::class,'export'])->name('1-meds-leaflet.export');
    Route::post('/1-meds-leaflet/import', [MedsLeafletController::class,'import'])->name('1-meds-leaflet.import');
    Route::get('/1-meds-leaflet/delete', [MedsLeafletController::class,'delete'])->name('1-meds-leaflet.destroy');
    
    Route::get('/1-meds-question', [MedsQuestionController::class,'index'])->name('1-meds-question');
    Route::post('/1-meds-question', [MedsQuestionController::class,'store'])->name('1-meds-question.store');
    Route::get('/1-meds-question-search', [MedsQuestionController::class,'search'])->name('1-meds-question.search');
    Route::get('/1-meds-question-show/{id}' , [MedsQuestionController::class,'show'])->name('1-meds-question.show'); 
    Route::post('/1-meds-question/update/{id}', [MedsQuestionController::class,'update'])->name('1-meds-question.update');
    Route::get('/1-meds-question/delete/{id}', [MedsQuestionController::class,'destroy'])->name('1-meds-question.delete');
    Route::get('/1-meds-question/export', [MedsQuestionController::class,'export'])->name('1-meds-question.export');
    Route::post('/1-meds-question/import', [MedsQuestionController::class,'import'])->name('1-meds-question.import');
    Route::get('/1-meds-question/delete', [MedsQuestionController::class,'delete'])->name('1-meds-question.destroy');
    
    


    Route::get('/1-meds-video', [MedsVideoController::class,'index'])->name('1-meds-video');
    Route::post('/1-meds-video', [MedsVideoController::class,'store'])->name('1-meds-video.store');
    Route::get('/1-meds-video-search', [MedsVideoController::class,'search'])->name('1-meds-video.search');
    Route::get('/1-meds-video-show/{id}' , [MedsVideoController::class,'show'])->name('1-meds-video.show'); 
    Route::post('/1-meds-video/update/{id}', [MedsVideoController::class,'update'])->name('1-meds-video.update');
    Route::get('/1-meds-video/delete/{id}', [MedsVideoController::class,'destroy'])->name('1-meds-video.delete');
      Route::get('/1-meds-video/export', [MedsVideoController::class,'export'])->name('1-meds-video.export');
    Route::post('/1-meds-video/import', [MedsVideoController::class,'import'])->name('1-meds-video.import');
    Route::get('/1-meds-video/delete', [MedsVideoController::class,'delete'])->name('1-meds-video.destroy');

    Route::get('/1-meds-seo', [MedsSeoController::class,'index'])->name('1-meds-seo');
    Route::post('/1-meds-seo', [MedsSeoController::class,'store'])->name('1-meds-seo.store');
    Route::post('/1-meds-seo/upadate/{id}', [MedsSeoController::class,'update'])->name('1-meds-seo.udate');
          Route::get('/1-meds-seo/export', [MedsSeoController::class,'export'])->name('1-meds-seo.export');
    Route::post('/1-meds-seo/import', [MedsSeoController::class,'import'])->name('1-meds-seo.import');
    Route::get('/1-meds-seo/delete', [MedsSeoController::class,'delete'])->name('1-meds-seo.destroy');




    Route::get('/2-meds-price', [MedsPriceController::class,'index'])->name('2-meds-price')->middleware('permission');
    Route::get('/2-meds-price-search', [MedsPriceController::class,'search'])->name('2-meds-price.search');
    Route::get('/2-meds-price-show/{id}' , [MedsPriceController::class,'show'])->name('2-meds-price.show'); 
    Route::post('/2-meds-price/upadate/{id}', [MedsPriceController::class,'update'])->name('2-meds-price.update');

    Route::post('/2-meds-product', [MedsProductController::class,'store'])->name('2-meds-product.store');
    Route::get('/2-meds-product-show/{id}' , [MedsProductController::class,'show'])->name('2-meds-product.show'); 
    Route::get('/2-meds-product-med-show/{id}' , [MedsProductController::class,'medShow'])->name('2-meds-product.med-show'); 
    Route::post('/2-meds-product/update/{id}', [MedsProductController::class,'update'])->name('2-meds-product.update');
    Route::get('/2-meds-product/delete/{id}', [MedsProductController::class,'destroy'])->name('2-meds-product.destory');
    Route::post('/2-meds-price', [MedsPriceController::class,'store'])->name('2-meds-price.store');
    Route::get('/2-meds-forex', [MedsForexController::class,'index'])->name('2-meds-forex');
    Route::post('/2-meds-forex', [MedsForexController::class,'store'])->name('2-meds-forex.store');
          Route::get('/2-meds-forex/export', [MedsForexController::class,'export'])->name('2-meds-forex.export');
    Route::post('/2-meds-forex/import', [MedsForexController::class,'import'])->name('2-meds-forex.import');
    Route::get('/1-meds-forex/delete', [MedsForexController::class,'delete'])->name('2-meds-forex.destroy');

        Route::get('/2-meds-product/export', [MedsProductController::class,'export'])->name('2-meds-product.export');
    Route::post('/2-meds-product/import', [MedsProductController::class,'import'])->name('2-meds-product.import');
    Route::get('/1-meds-product/delete', [MedsProductController::class,'delete'])->name('2-meds-product.destroy');

            Route::get('/2-meds-price/export', [MedsPriceController::class,'export'])->name('2-meds-price.export');
    Route::post('/2-meds-price/import', [MedsPriceController::class,'import'])->name('2-meds-price.import');
    Route::get('/2-meds-price/delete', [MedsPriceController::class,'delete'])->name('2-meds-price.destroy');
   Route::get('/2-meds-price/{id}' , [MedsPriceController::class,'showById'])->name('2-meds-price.index'); 
  

    Route::get('/3-home', [HomeHeaderController::class, 'index'])->name('3-home')->middleware('permission');
    Route::post('/3-home-header', [HomeHeaderController::class, 'store'])->name('3-home-header.store');
    Route::post('/3-home-header/update/{id}', [HomeHeaderController::class, 'update'])->name('3-home-header.update');
    Route::post('/3-home-header/banner', [HomeHeaderController::class, 'bannerStatus'])->name('3-home-header.bannerStatus');
    Route::get('/3-home-header/{id}', [HomeHeaderController::class, 'search'])->name('3-home-header.search');
    Route::get('/3-home-header/show/{id}', [HomeHeaderController::class, 'show'])->name('3-home-header.show');
    Route::get('/3-home-header/delete/{id}', [HomeHeaderController::class, 'destroy'])->name('3-home-header.delete');
    Route::post('/3-home', [HomeMainBodyController::class, 'index'])->name('3-home');
    Route::post('/3-home-main', [HomeMainBodyController::class, 'store'])->name('3-home-main.store');
    Route::post('/3-home', [HomeGeneralDiseasesController::class, 'index']);
    Route::post('/3-home-general', [HomeGeneralDiseasesController::class, 'store'])->name('3-home-general.store');
    Route::get('/3-home-general/show/{id}', [HomeGeneralDiseasesController::class, 'show'])->name('3-home-general.show');
    Route::post('/3-home-general/update/{id}', [HomeGeneralDiseasesController::class, 'update'])->name('3-home-general.update');
    Route::get('/3-home-general/delete/{id}', [HomeGeneralDiseasesController::class, 'destroy'])->name('3-home-general.delete');
     Route::get('/1-meds-info-general-search', [HomeGeneralDiseasesController::class,'search'])->name('1-meds-info.general.search');
         Route::post('/3-home-general/import', [HomeGeneralDiseasesController::class,'import'])->name('3-home-general.import');
    Route::get('/3-home-general/delete', [HomeGeneralDiseasesController::class,'delete'])->name('3-home-general.destroy');
   Route::get('/3-home-general/export' , [HomeGeneralDiseasesController::class,'export'])->name('3-home-general.export'); 

            Route::post('/3-home-general/medicine-import', [HomeGeneralDiseasesController::class,'medicineimport'])->name('3-home-general-medicine.import');
    Route::get('/3-home-general/medicine-delete', [HomeGeneralDiseasesController::class,'medicineDelete'])->name('3-home-general-medicine.destroy');
   Route::get('/3-home-general/medicine-export' , [HomeGeneralDiseasesController::class,'medicineExport'])->name('3-home-general-medicine.export'); 

    Route::post('/3-home', [HomeCriticalDiseasesController::class, 'index']);
    Route::post('/3-home-critical', [HomeCriticalDiseasesController::class, 'store'])->name('3-home-critical.store');
    Route::get('/3-home-critical/show/{id}', [HomeCriticalDiseasesController::class, 'show'])->name('3-home-critical.show');
    Route::post('/3-home-critical/update/{id}', [HomeCriticalDiseasesController::class, 'update'])->name('3-home-critical.update');
    Route::get('/3-home-critical/delete/{id}', [HomeCriticalDiseasesController::class, 'destroy'])->name('3-home-critical.delete');
     Route::get('/1-meds-info-critical-search', [HomeCriticalDiseasesController::class,'search'])->name('1-meds-info.critical.search');

         Route::post('/3-home-critical/import', [HomeCriticalDiseasesController::class,'import'])->name('3-home-critical.import');
    Route::get('/3-home-critical/delete', [HomeCriticalDiseasesController::class,'delete'])->name('3-home-critical.destroy');
   Route::get('/3-home-critical/export' , [HomeCriticalDiseasesController::class,'export'])->name('3-home-critical.export'); 

            Route::post('/3-home-critical/medicine-import', [HomeCriticalDiseasesController::class,'medicineimport'])->name('3-home-critical-medicine.import');
    Route::get('/3-home-critical/medicine-delete', [HomeCriticalDiseasesController::class,'medicineDelete'])->name('3-home-critical-medicine.destroy');
   Route::get('/3-home-critical/medicine-export' , [HomeCriticalDiseasesController::class,'medicineExport'])->name('3-home-critical-medicine.export'); 

    Route::post('/3-home', [HomeQaController::class, 'index']);
    Route::post('/3-home-qa', [HomeQaController::class, 'store'])->name('3-home-qa.store');
    Route::get('/3-home-qa-search', [HomeQaController::class,'search'])->name('3-home-qa.search');
    Route::get('/3-home-qa-show/{id}' , [HomeQaController::class,'show'])->name('3-home-qa.show'); 
    Route::post('/3-home-qa/update/{id}' , [HomeQaController::class,'update'])->name('3-home-qa.update'); 
    Route::get('/3-home-qa/delete/{id}', [HomeQaController::class,'destroy'])->name('3-home-show.delete');



    Route::post('/3-home', [HomeSeoController::class, 'index']);
    Route::post('/3-home-seo', [HomeSeoController::class, 'store'])->name('3-home-seo.store');
    Route::post('/3-home-seo/update/{id}', [HomeSeoController::class, 'update'])->name('3-home-seo.update');



    Route::get('/4-country-freight', [CountryFreightController::class, 'index'])->name('country_freight')->middleware('permission');
    Route::post('/4-country-freight', [CountryFreightController::class, 'store'])->name('country_freight.store');
    Route::get('/4-country-edit/{id}', [CountryFreightController::class, 'edit'])->name('country_freight.edit');
    Route::post('/4-country-update/{id}', [CountryFreightController::class, 'update'])->name('country_freight.update');
    Route::get('/4-country-delete/{id}', [CountryFreightController::class, 'destroy'])->name('country_freight.destroy');
    Route::delete('/4-country-delete-all', [CountryFreightController::class, 'deleteAll'])->name('country_freight.deleteAll');
    Route::get('/4-country-show/{id}', [CountryFreightController::class, 'show'])->name('country_freight.show');
    Route::get('/4-country-search/{id}', [CountryFreightController::class, 'search'])->name('country_freight.search');
    Route::post('/4-single-country-freight', [CountryFreightController::class, 'singleFreight'])->name('single_country_freight.update');
        Route::post('/4-single-country/import', [CountryFreightController::class,'import'])->name('4-single-country.import');
    Route::get('/4-single-country/delete', [CountryFreightController::class,'delete'])->name('4-single-country.destroy');
   Route::get('/4-single-country/export' , [CountryFreightController::class,'export'])->name('4-single-country.export'); 


    Route::get('/12-promo-discount', [PromoDiscountController::class, 'index'])->name('promo_discount')->middleware('permission');
    Route::post('/12-promo-discount-store', [PromoDiscountController::class, 'store'])->name('promo_discount.store');
    Route::post('/12-promo-discount-store-update/{id}', [PromoDiscountController::class, 'update'])->name('promo_discount.update');
    Route::get('/12-promo-discount-edit/{id}', [PromoDiscountController::class, 'edit'])->name('promo_discount.edit');
    Route::get('/12-promo-discount-delete/{id}', [PromoDiscountController::class, 'destroy'])->name('promo_discount.destroy');
    Route::get('/check-coupon-text', [PromoDiscountController::class,'checkCouponText'])->name('check-coupon-text');
       Route::delete('/12-promo-discount-delete-all', [PromoDiscountController::class, 'deleteAll'])->name('12-promo-discount.deleteAll');


    Route::get('/5-bank-details', [BankDetailController::class, 'index'])->name('bank_detail')->middleware('permission');
    Route::post('/5-bank-detail-store', [BankDetailController::class, 'store'])->name('bank_detail.store');
    Route::get('/5-bank-detail-edit/{id}', [BankDetailController::class, 'edit'])->name('bank_detail.edit');
    Route::get('/5-bank-detail-delete/{id}', [BankDetailController::class, 'destroy'])->name('bank_detail.destroy');
    Route::post('/5-bank-detail-update/{id}', [BankDetailController::class, 'update'])->name('bank_detail.update');
    Route::get('/5-bank-detail-show/{id}', [BankDetailController::class, 'show'])->name('bank_detail.show');
    Route::get('/5-bank-detail-search/{id}', [BankDetailController::class, 'search'])->name('bank_detail.search');
        Route::post('/5-bank-detail/import', [BankDetailController::class,'import'])->name('5-bank-detail.import');
    Route::get('/5-bank-detail/delete', [BankDetailController::class,'delete'])->name('5-bank-detail.destroy');
   Route::get('/5-bank-detail/export' , [BankDetailController::class,'export'])->name('5-bank-detail.export'); 
       Route::delete('/5-bank-detail-delete-all', [BankDetailController::class, 'deleteAll'])->name('5-bank-detail.deleteAll');


    Route::get('/8-blogs-news', [BlogNewsController::class,'index'])->name('blog_news');
    Route::post('/8-blogs-news-store', [BlogNewsController::class,'store'])->name('blog_news.store');
    Route::get('/8-blogs-news-edit/{id}', [BlogNewsController::class,'edit'])->name('blog_news.edit');
    Route::get('/8-blogs-news-show/{id}', [BlogNewsController::class,'show'])->name('blog_news.show');
    Route::post('/8-blogs-news-update/{id}', [BlogNewsController::class,'update'])->name('blog_news.update');
    Route::get('/8-blogs-news-destroy/{id}', [BlogNewsController::class,'destroy'])->name('blog_news.destroy');
    Route::post('/blog-seo', [BlogNewsController::class,'blogSeo'])->name('blog-seo.update');
       Route::delete('/8-blogs-news-delete-all', [BlogNewsController::class, 'deleteAll'])->name('8-blogs-news.deleteAll');

   
    Route::get('/6-text-reviews', [TextReviewController::class,'index'])->name('text_review');
    Route::post('/6-text-reviews-store', [TextReviewController::class,'store'])->name('text_review.store');
    Route::get('/6-text-reviews-edit/{id}', [TextReviewController::class,'edit'])->name('text_review.edit');
    Route::post('/6-text-reviews-update/{id}', [TextReviewController::class,'update'])->name('text_review.update');
    Route::get('/6-text-reviews-destroy/{id}', [TextReviewController::class,'destroy'])->name('text_review.destroy');
    Route::get('/6-text-reviews-show/{id}', [TextReviewController::class, 'show'])->name('text_review.show');
    Route::post('/6-text-reviews-status', [TextReviewController::class, 'status'])->name('text_review.status');
          Route::post('/6-text-reviews/import', [TextReviewController::class,'import'])->name('6-text-reviews.import');
    Route::get('/6-text-reviews/delete', [TextReviewController::class,'delete'])->name('6-text-reviews.destroy');
   Route::get('/6-text-reviews/export' , [TextReviewController::class,'export'])->name('6-text-reviews.export');
       Route::delete('/6-text-reviews-delete-all', [TextReviewController::class, 'deleteAll'])->name('6-text-reviews.deleteAll');




    Route::get('/7-video-reviews', [VideoReviewController::class,'index'])->name('video_review');
    Route::post('/7-video-reviews-store', [VideoReviewController::class,'store'])->name('video_review.store');
    Route::get('/7-video-reviews-edit/{id}', [VideoReviewController::class,'edit'])->name('video_review.edit');
    Route::post('/7-video-reviews-update/{id}', [VideoReviewController::class,'update'])->name('video_review.update');
    Route::get('/7-video-reviews-destroy/{id}', [VideoReviewController::class,'destroy'])->name('video_review.destroy');
    Route::get('/7-video-reviews-show/{id}', [VideoReviewController::class,'show'])->name('video_review.show');
       Route::delete('/7-video-reviews-delete-all', [VideoReviewController::class, 'deleteAll'])->name('video_review.deleteAll');


   Route::get('/9-blogs-reviews', [BlogReviewController::class,'index'])->name('blog_review');
   Route::post('/9-blogs-reviews-store', [BlogReviewController::class,'store'])->name('blog_review.store');
   Route::get('/9-blogs-reviews-edit/{id}', [BlogReviewController::class,'edit'])->name('blog_review.edit');
   Route::post('/9-blogs-reviews-update/{id}', [BlogReviewController::class,'update'])->name('blog_review.update');
   Route::get('/9-blogs-reviews-destroy/{id}', [BlogReviewController::class,'destroy'])->name('blog_review.destroy');
   Route::get('/9-blogs-reviews-show/{id}', [BlogReviewController::class,'show'])->name('blog_review.show');
       Route::delete('/9-blogs-reviews-delete-all', [BlogReviewController::class, 'deleteAll'])->name('9-blogs-reviews.deleteAll');


   Route::get('/15-faqs', [FaqsController::class,'index'])->name('faqs');
   Route::post('/15-faqs-store', [FaqsController::class,'store'])->name('faqs.store');
   Route::get('/15-faqs-search', [FaqsController::class,'search'])->name('faqs.search');
   Route::get('/15-faqs-show/{id}', [FaqsController::class,'show'])->name('faqs.show');
   Route::post('/15-faqs-update/{id}', [FaqsController::class,'update'])->name('faqs.update');
   Route::get('/15-faqs-delete/{id}', [FaqsController::class,'destroy'])->name('faqs.delete');
   Route::post('/faq-title/update/', [FaqsController::class,'updateTitle'])->name('faq_title.update');

   Route::get('/15-faqs-generalSearch', [FaqsController::class,'general1Search'])->name('faqs.generalSearch');
   Route::get('/15-faqs-generalShow/{id}', [FaqsController::class,'generalShow'])->name('faqs.generalShow');
   Route::post('/15-faqs-generalUpdate/{id}', [FaqsController::class,'update'])->name('faqs.generalUpdate');
   Route::get('/15-faqs-generalDelete/{id}', [FaqsController::class,'destroy'])->name('faqs.generalDelete');

   Route::get('/15-faqs-general2Search', [FaqsController::class,'general2Search'])->name('faqs.general2Search');
   Route::get('/15-faqs-general2Show/{id}', [FaqsController::class,'generalShow'])->name('faqs.general2Show');
   Route::post('/15-faqs-general2Update/{id}', [FaqsController::class,'update'])->name('faqs.general2Update');
   Route::get('/15-faqs-general2Delete/{id}', [FaqsController::class,'destroy'])->name('faqs.general2Delete');

   // Route::get('/15-faqs-general3Search', [FaqsController::class,'general3Search'])->name('faqs.general3Search');
   // Route::get('/15-faqs-general3Show/{id}', [FaqsController::class,'generalShow'])->name('faqs.general3Search');
   // Route::post('/15-faqs-general3Update/{id}', [FaqsController::class,'update'])->name('faqs.general3Search');
   // Route::get('/15-faqs-general3Delete/{id}', [FaqsController::class,'destroy'])->name('faqs.general3Search');

   // Route::get('/15-faqs-general4Search', [FaqsController::class,'general4Search'])->name('faqs.general4Search');
   // Route::get('/15-faqs-general4Show/{id}', [FaqsController::class,'generalShow'])->name('faqs.general4Search');
   // Route::post('/15-faqs-general4Update/{id}', [FaqsController::class,'update'])->name('faqs.general4Search');
   // Route::get('/15-faqs-general4Delete/{id}', [FaqsController::class,'destroy'])->name('faqs.general4Search');

   // Route::get('/15-faqs-general5Search', [FaqsController::class,'general5Search'])->name('faqs.general5Search');
   // Route::get('/15-faqs-general5Show/{id}', [FaqsController::class,'generalShow'])->name('faqs.general5Search');
   // Route::post('/15-faqs-general5Update/{id}', [FaqsController::class,'update'])->name('faqs.general5Search');
   // Route::get('/15-faqs-general5Delete/{id}', [FaqsController::class,'destroy'])->name('faqs.general5Search');


    // Route::get('/6-text-reviews', [AdminController::class, 'text_reviews'])->name('text_reviews')->middleware('permission');

    // Route::get('/7-video-reviews', [AdminController::class, 'video_reviews'])->name('video_reviews')->middleware('permission');

    // Route::get('/8-blogs-news', [AdminController::class, 'blogs_news'])->name('blogs_news')->middleware('permission');

    // Route::get('/9-blogs-reviews', [AdminController::class, 'blogs_reviews'])->name('blogs_reviews')->middleware('permission');
    Route::get('/10-query', [AdminController::class, 'query'])->name('query')->middleware('permission');
    Route::get('/11-buyer-login', [AdminController::class, 'buyer_login'])->name('buyer_login')->middleware('permission');
    Route::get('/11-buyer-login-delete/{id}', [AdminController::class, 'userDelete'])->name('user.delete');
    Route::get('/11-buyer-login-block/{id}', [AdminController::class, 'userBlock'])->name('user.block');
    Route::post('/11-buyer-login-update/{id}', [AdminController::class, 'userUpdate'])->name('user.update');

        Route::post('/11-buyer-login/import', [AdminController::class,'import'])->name('11-buyer-login.import');
    Route::get('/11-buyer-login/delete', [AdminController::class,'delete'])->name('11-buyer-login.destroy');
   Route::get('/11-buyer-login/export' , [AdminController::class,'export'])->name('11-buyer-login.export'); 
       Route::delete('/11-buyer-login-delete-all', [AdminController::class, 'deleteAll'])->name('11-buyer-login.deleteAll');
       Route::delete('/10-query-delete-all', [QueryController::class, 'deleteAll'])->name('10-query.deleteAll');
   Route::get('/10-query-destroy/{id}', [QueryController::class,'destroy'])->name('10-query.destroy');




    //Route::get('/12-promo-discount', [AdminController::class, 'promo_discount'])->name('promo_discount');
    Route::get('/13-referrals', [AdminController::class, 'referrals'])->name('referrals')->middleware('permission');
    Route::get('/14-summary/{id}', [AdminController::class, 'summary'])->name('summary');
    Route::post('/14-summary/update/{id}', [AdminController::class, 'summaryUpdate'])->name('summary.update');
    Route::get('/14-summary/delete/{id}', [AdminController::class, 'summaryDelete'])->name('summary.delete');
    Route::get('/19-order-refill/delete/{id}', [AdminController::class, 'orderRefillDelete'])->name('order_refill.delete');
    Route::post('/14-order/update/{id}', [AdminController::class, 'orderUpdate'])->name('order_status.update');
    Route::get('order/new_invoice/{id}', [AdminController::class, 'orderNewInvoice'])->name('order.new_invoice');
    Route::post('/staff-permission', [AdminController::class, 'staffPermission'])->name('permisson');
    Route::post('/update-staff-permission/{id}', [AdminController::class, 'updatestaffPermission'])->name('update.permisson');
    Route::get('/17-pending-cart', [AdminController::class, 'pending_cart'])->name('pending_cart')->middleware('permission');
    Route::get('/17-pending-cart/delete/{id}', [AdminController::class, 'cartDestroy'])->name('pending_cart.destroy');
    Route::get('/18-order-status', [AdminController::class, 'order_status'])->name('order_status')->middleware('permission');
    Route::get('/19-order-refill', [AdminController::class, 'order_refill'])->name('order_refill')->middleware('permission');
    Route::get('/ES/{url}', [AdminController::class, 'excel_order'])->name('excel.invoice');
    Route::get('pi-save/{url}', [AdminController::class, 'generatePDF'])->name('pi.save');
       Route::delete('/18-order-status-delete-all', [AdminOrderController::class, 'orderdeleteAll'])->name('18-order-status.deleteAll');
       Route::delete('/17-pending-cart-delete-all', [AdminOrderController::class, 'pendingdeleteAll'])->name('17-pending-cart.deleteAll');
       Route::delete('/19-order-refill-delete-all', [AdminOrderController::class, 'refilldeleteAll'])->name('19-order-refill.deleteAll');




    
    Route::post('/18-order-status/import', [AdminOrderController::class,'import'])->name('18-order-status.import');
   Route::get('/18-order-status/export' , [AdminOrderController::class,'export'])->name('18-order-status.export'); 
   Route::get('/13-referrals/export' , [AdminOrderController::class,'exportReferrals'])->name('13-referrals.export'); 
   Route::get('/14-order/export' , [AdminOrderController::class,'summaryReferrals'])->name('14-order.export'); 

       Route::delete('/13-referral-delete-all', [AdminOrderController::class, 'deleteAll'])->name('13-referral.deleteAll');

    Route::get('/excel', [AdminController::class, 'uploads'])->name('uploads');

    // mail urls
    Route::get('order_reminder_or1/{id}', [MailController::class, 'orderRemainder1'])->name('order_reminder_or1');
    Route::get('order_reminder_or2/{id}', [MailController::class, 'orderRemainder2'])->name('order_reminder_or2');
    Route::get('order_reminder_or3/{id}', [MailController::class, 'orderRemainder3'])->name('order_reminder_or3');
    Route::get('cc_payment_reminder_mail1/{id}', [MailController::class, 'ccpaymentReminder1'])->name('cc_payment_reminder_mail1');
    Route::get('cc_payment_reminder_mail2/{id}', [MailController::class, 'ccpaymentReminder2'])->name('cc_payment_reminder_mail2');
    Route::get('cc_payment_thanks_mail/{id}', [MailController::class, 'ccPaymentThanks'])->name('cc_payment_thanks_mail');
      Route::get('order_hold_mail/{id}', [MailController::class, 'orderOnHold'])->name('order_hold_mail');
    Route::get('order_reminder_or3/{id}', [MailController::class, 'orderRemainder3'])->name('order_reminder_or3');
    Route::get('bt_payment_reminder_mail1/{id}', [MailController::class, 'btPaymentReminder1'])->name('bt_payment_reminder_mail1');
    Route::get('bt_payment_reminder_mail2/{id}', [MailController::class, 'btPaymentReminder2'])->name('bt_payment_reminder_mail2');
      Route::get('bt_payment_thanks_mail/{id}', [MailController::class, 'btPaymentThanks'])->name('bt_payment_thanks_mail');
    Route::get('shipment_mail/{id}', [MailController::class, 'shipmentMail'])->name('shipment_mail');
    Route::get('foreign_arrival_mail/{id}', [MailController::class, 'arrivalMail'])->name('foreign_arrival_mail');
      Route::get('custom_clearance_mail/{id}', [MailController::class, 'customMail'])->name('custom_clearance_mail');
    Route::get('delivered_mail/{id}', [MailController::class, 'deliveryMail'])->name('delivered_mail');
    Route::get('reviews_mail1/{id}', [MailController::class, 'reviewMailR1'])->name('reviews_mail1');
    Route::get('reviews_mail2/{id}', [MailController::class, 'reviewMailR2'])->name('reviews_mail2');
    Route::get('mail_refer_friend/{id}', [MailController::class, 'referMail'])->name('mail_refer_friend');
    Route::get('refil_reminder_mail1/{id}', [MailController::class, 'refillMailR1'])->name('refil_reminder_mail1');
    Route::get('refil_reminder_mail2/{id}', [MailController::class, 'refillMailR2'])->name('refil_reminder_mail2');
    Route::get('refil_reminder_mail3/{id}', [MailController::class, 'refillMailR3'])->name('refil_reminder_mail3');
    Route::post('/email-replay/{id}', [QueryController::class, 'emailReply'])->name('query.email_reply');
    Route::post('/wa-reply/{id}', [QueryController::class, 'waReply'])->name('query.wa_reply');


    Route::get('14-wallet', [WalletTransactionController::class, 'index'])->name('wallet')->middleware('permission');;
    Route::get('create-refer/{user}', [WalletTransactionController::class, 'createRefer'])->name('create_refer');
    Route::get('wallet-status/{id}/{type}', [WalletTransactionController::class, 'walletStatus'])->name('wallet_status');





});



Route::get('/',[FrontEndController::class, 'index'])->name('index');
// Route::get('/buy-brand-generic-medications-at-hk-canada-online-pharmacy-marketplace-co',[FrontEndController::class, 'index'])->name('index');
Route::get('/my-account',[FrontEndController::class, 'my_account'])->name('my-account')->middleware('auth');;
Route::get('/test',[FrontEndController::class, 'test'])->name('test');
Route::post('/my-account',[FrontEndController::class, 'my_account'])->name('my_account.update');
Route::get('/search/{q}',[FrontEndController::class, 'search'])->name('search');
Route::get('/contact-us',[FrontEndController::class, 'contact_us'])->name('contact_us');
Route::get('/about-us-and-how-to-buy-prescription-drugs-online',[FrontEndController::class, 'about_us'])->name('about_us');
Route::get('/angel-number-911',[FrontEndController::class, 'angel_number'])->name('angel_number');
Route::get('/reviews-testimonials',[FrontEndController::class, 'testimonial'])->name('testimonial');
Route::get('/how-to-order-faqs',[FrontEndController::class, 'how_to_order'])->name('how_to_order');
Route::get('/be-our-pharmacy-vendor-partner',[FrontEndController::class, 'beOurPartner'])->name('be_our_partner');
Route::post('/be-our-pharmacy-vendor-partner',[QueryController::class, 'patnerQuery'])->name('be_our_partner.query');
Route::get('/brand-vs-generic-medications',[FrontEndController::class, 'brand_generic'])->name('brand_generic');
Route::get('/whocgmp-certification-faqs',[FrontEndController::class, 'who_faq'])->name('who_faq');
Route::get('/guest-blogs',[FrontEndController::class, 'guest_blog'])->name('guest_blog');
Route::post('/guest-blogs',[FrontEndController::class, 'gustBlogSubmit'])->name('guest_blog.submit');
Route::post('/3-home-header',[FrontEndController::class, 'homeHeader'])->name('homeHeader');
Route::get('/latest-blogs-news',[FrontEndController::class, 'latestBlog'])->name('latest_blog');
Route::get('/blogs-news/{slug}',[FrontEndController::class, 'indivisualBlog'])->name('indivisual_blog');
Route::get('/patient-authorization-agreement',[FrontEndController::class, 'patient_authorization'])->name('patient_authorization');
Route::get('/customer-agreement',[FrontEndController::class, 'customer_agreement'])->name('customer-agreement');
Route::get('/sitemap',[FrontEndController::class, 'sitemap'])->name('sitemap');


Route::post('/patient-query',[QueryController::class, 'patientQuery'])->name('medication.patientQuery');
Route::post('/business-query',[QueryController::class, 'businessQuery'])->name('medication.businessQuery');
Route::post('/contact-us',[QueryController::class, 'contactUsQuery'])->name('medication.contactUsQuery');
Route::get('/cart-checkout',[CartController::class, 'viewCart'])->name('cart_checkout');
Route::post('/add-to-cart',[CartController::class, 'addToCart'])->name('add_to_cart');
Route::post('/remove-cart',[CartController::class, 'removeCart'])->name('cart.remove');
Route::post('/update-cart',[CartController::class, 'updateCart'])->name('cart.update');
Route::get('/country-freight/{id}', [CountryFreightController::class, 'show'])->name('country-freight.show');
Route::get('/get-country-freight/{q}', [FrontEndController::class, 'countrySearch'])->name('get-country-freight');
Route::get('/reload-captcha', [FrontEndController::class, 'reloadCaptcha']);
Route::post('/proceed-delivery', [OrderController::class, 'proccedDeliver'])->name('procced-delivery')->middleware('auth');
Route::get('/checkout/{url}', [OrderController::class, 'orderCart'])->name('cart.order');
Route::post('/orderdetails-cart',[OrderController::class, 'removeOrderDetails'])->name('order_details.remove');
Route::post('/orderdetails-update',[OrderController::class, 'updateOrderDetails'])->name('order_details.update');
Route::get('/coupon-apply', [CartController::class, 'applyCoupon'])->name('coupon.apply');
Route::get('/proforma-invoice/{url}', [OrderController::class, 'performaInvoice'])->name('cart.invoice');
Route::get('/order-invoice/{url}', [OrderController::class, 'orderInvoice'])->name('order.invoice');
Route::get('/shipment-undertaking/{url}', [OrderController::class, 'shippingUndertaking'])->name('shipment_undertaking');
Route::get('/shipment-undertaking/{country}/{url}', [OrderController::class, 'shippingUndertakingFromUrl']);
Route::post('/proceed-billing/{summary}', [OrderController::class, 'proceedBiling'])->name('procced-billing')->middleware('auth');
Route::post('/proceed-pay/{summary}', [OrderController::class, 'proceedPay'])->name('procced-pay')->middleware('auth');
Route::post('/placed-order/{summary}', [OrderController::class, 'proceedOrder'])->name('placed-order')->middleware('auth');
Route::get('/privacy-policy',[FrontEndController::class, 'privacyPolicy'])->name('privacy-policy');
Route::post('/user-login',[FrontEndController::class, 'UserLogin'])->name('user-login');
Route::post('/user-register',[FrontEndController::class, 'UserRegister'])->name('user-register');
Route::get('/disclaimer',[FrontEndController::class, 'disclaimer'])->name('disclaimer');
Route::get('/terms-conditions-of-use',[FrontEndController::class, 'termAndCondition'])->name('term-and-conditions');
Route::get('/review-and-testimonial',[FrontEndController::class, 'reviewAndTestimonial'])->name('review-and-testimonial');
Route::get('/refer-a-friend/{wallet_url}',[FrontEndController::class, 'referFriend'])->name('refer_friend');
Route::post('/apply-balance',[WalletTransactionController::class, 'withDraw'])->name('apply_wallet');
Route::post('/refer-a-friend',[QueryController::class, 'referFriendSubmit'])->name('refer_friend.submit');
Route::get('/fast-refill',[OrderController::class, 'orderRefill'])->name('fastfill');
Route::get('/fast-refill-order-confirmation',[OrderController::class, 'orderConfirm'])->name('order.confirm');
Route::post('/order-confirmation',[QueryController::class, 'orderRefillQuery'])->name('order.refill.query');

Route::get('/list-of-common-diseases-drugs-medicines-names-and-price-list',[FrontEndController::class, 'allDisease'])->name('all_disease_medication');
Route::get('/most-common-oral-chemo-therapy-cancer-drugs-names-and-price-list',[FrontEndController::class, 'cancerDisease'])->name('canceer_disease_medication');
Route::get('/list-of-common-diseases-drugs-medicines-names-and-price-list/{disease}',[FrontEndController::class, 'cancerDiseaseByName']);
Route::get('/most-common-oral-chemo-therapy-cancer-drugs-names-and-price-list/{disease}',[FrontEndController::class, 'allDiseaseByName']);
Route::post('/review-submit',[FrontEndController::class, 'submitReview'])->name('review.submit');
Route::post('/blog-comment',[FrontEndController::class, 'blogComment'])->name('blog.comment');
Route::post('/forget-password',[FrontEndController::class, 'forgetPassword'])->name('forgot_password');

// Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
// Route::post('cart', [FrontEndController::class, 'addToCart'])->name('cart_checkout');
Route::get('/3-home-general/show/{id}', [HomeGeneralDiseasesController::class, 'show']);
Route::get('/{url}',[FrontEndController::class, 'medication'])->name('medication');