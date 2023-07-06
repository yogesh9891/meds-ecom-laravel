<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;
use PDF,Mail;
use App\Models\User;
use App\Models\Contact;
use App\Models\SiteSetting;
use App\Models\Corporate;
use App\Models\Customization;
use App\Models\QueryDetails;
use App\Models\Summary;
use App\Models\CountryFreight;
use App\Models\BankDetail;
use App\Models\OrderDetail;
use App\Models\Admin;
use Carbon\Carbon;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Imports\UserImport;
use App\Exports\UserExport;
use Maatwebsite\Excel\Facades\Excel;
class AdminController extends Controller
{

    private $cpupon_percent = 0.025;

    public function __construct()
    {
        // $this->middleware('auth:admin')->except(['index','login','adminLogin']);
    }

    public function index()
    {
         if (Auth::guard('admin')->check()) {
            // return redirect()->route('aadhya.1-meds-info');
        }
        return $this->login();
    }

    public function login()
    {
        return view('aadhya.login');
    }

   public function adminLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        $admin = Admin::where('email', $request->email)->where('password',$request->password)->first();

        if ($admin) {
          $admin_staff =    Auth::guard('admin')->login($admin);
           
             return redirect()->route('aadhya.dashboard');
        } else {
          return redirect()->back()->with('error','Invalid Credentials');
        }
        return back()->withInput($request->only('email', 'remember'));
    }

    public function logout(Request $request) {
          Auth::guard('admin')->logout();
      return redirect('/aadhya');
    }
    public function dashboard()
    { 
        $querydetails = QueryDetails::orderBy('id','desc')->get();
        return view('aadhya.index' ,compact('querydetails'));
    }

    public function meds_info()
    {
        return view('aadhya.med_info.1-meds-info');
    }

    public function meds_price()
    {
        return view('aadhya.meds_price');
    }


    public function home()
    {
        

        return view('aadhya.home');
    }

    public function country_freight()
    {
        return view('aadhya.country_freight');
    }

    public function bank_detail()
    {
        return view('aadhya.bank_detail');
    }

    public function text_reviews()
    {
        return view('aadhya.text_reviews');
    }

    public function video_reviews()
    {
        return view('aadhya.video_reviews');
    }

    public function blogs_news()
    {
        return view('aadhya.blogs_news');
    }

    public function blogs_reviews()
    {
        return view('aadhya.blogs_reviews');
    }

     public function uploads()
    {
        return view('aadhya.upload');
    }

    public function query()
    {
         $querydetails = QueryDetails::get();
        return view('aadhya.query', compact('querydetails'));
    }

    public function buyer_login()
    {   
        $users = User::where('is_admin',0)->get();

        $countries = CountryFreight::where('c_4_1_5_delivery_address','Y')->get();

        return view('aadhya.buyer_login.buyer_login',compact('users','countries'));
    }

    public function userDelete($id)
    {   
        $user =  User::findOrFail($id);
        $user->delete();
        return redirect()->back()->with('success','User deleted successfully');
    }

     public function userBlock($id)
    {
         
        $user =  User::findOrFail($id);
        if($user->is_block){
        $user->is_block = 0;
        $user->update();
        return redirect()->back()->with('success','User unblocked successfully');

      } else {
        $user->is_block = 1;

        $user->update();
        return redirect()->back()->with('success','User blocked successfully');

      }
    }

      public function userUpdate(Request $request,$id)
    {
        $user =  User::findOrFail($id);

        // if(!$old_user){
        $user->email =$request->email;
        $user->password =$request->password;
        $user->mobile =$request->mobile;
        $user->country =$request->country;
        $user->name =$request->name;
        $user->update();
        return redirect()->back()->with('success','User updated successfully');
    // } else {

    //     return redirect()->back()->with('error','Email already  exits');
    // }
    }


    public function promo_discount()
    {
        return view('aadhya.promo_discount');
    }

    public function referrals()
    {
            $orders = Summary::with('coupon')->whereNotNull('c_14_93_pay_mode')->whereNotNull('c_14_75_coupon_code_used')->whereNotNull('c_14_76_promo_discount')->latest()->get();

        return view('aadhya.referrals',compact('orders'));
    }

    public function summary($id)
    {
       $order = Summary::with('order_details')->where('c_14_8_excel_order_url',$id)->firstOrFail();
        $countries = CountryFreight::get();
        $bank_details = BankDetail::get();

        return view('aadhya.summary',compact('order','countries','bank_details'));
    }

     public function summaryUpdate(Request $request,$id)
    {
         $order = Summary::findOrFail($id);

          $order->c_14_9_login_email = $request->c_14_9_login_email;
          $order->c_14_90_email_address = $request->c_14_9_login_email;
          $order->c_14_10_payer_full_name = $request->c_14_10_payer_full_name;
          $order->c_14_11_patient_relation_payer = $request->c_14_11_patient_relation_payer;
          $order->c_14_12_payer_address_line_1 = $request->c_14_12_payer_address_line_1;
          $order->c_14_13_payer_address_line_2   = $request->c_14_13_payer_address_line_2;
          $order->c_14_14_pay_city = $request->c_14_14_pay_city;
          $order->c_14_15_payer_state = $request->c_14_15_payer_state;
          $order->c_14_16_payer_zip = $request->c_14_16_payer_zip;
          $order->c_14_17_payer_country = $request->country;
          $order->c_14_18_payer_mobile = $request->c_14_18_payer_mobile;
          $order->c_14_19_patient_name = $request->c_14_19_patient_name;
          $order->c_14_22_parcel_receivers_full_name = $request->c_14_22_parcel_receivers_full_name;
          $order->c_14_23_receiver_relation_patient = $request->c_14_23_receiver_relation_patient ;
          $order->c_14_24_receiver_address_line_1 = $request->c_14_24_receiver_address_line_1;
          $order->c_14_25_receiver_address_line_2 = $request->c_14_25_receiver_address_line_2;
          $order->c_14_26_receiver_city = $request->c_14_26_receiver_city;
          $order->c_14_27_receiver_state = $request->c_14_27_receiver_state;
          $order->c_14_28_receiver_zip = $request->c_14_28_receiver_zip;
          $order->c_14_30_receiver_mobile = $request->c_14_30_receiver_mobile;
          $order->c_14_29_receiver_country = $request->c_14_29_receiver_country;
          $order->c_14_19_patient_name = $request->c_14_19_patient_name;
          $order->c_14_31_end_use_selected = $request->end_use_selected;
          $order->c_14_20_patient_sex  = $request->gender;
          $order->c_14_21_patient_age  = $request->c_14_21_patient_age;
// dd($request->all());
          foreach ($request->order_id as $key => $value) {
                $order_detail =OrderDetail::find($value);

                $order_detail->c_14_34_medicine_no  =$request->c_14_34_medicine_no[$key];
                $order_detail->c_14_35_description  =$request->c_14_35_description[$key];
                $order_detail->c_14_36_quantity_pack  =$request->c_14_36_quantity_pack[$key];
                $order_detail->c_14_37_net_price_pack  =$request->c_14_37_net_price_pack[$key];
                $order_detail->c_14_40_medicine_form  =$request->c_14_40_medicine_form[$key];
                $order_detail->c_14_41_total_amount  =$request->c_14_41_total_amount[$key];
                $order_detail->c_14_39_total_quantity  =$request->c_14_39_total_quantity[$key];
                $order_detail->update();
          } 

          $order->c_14_76_promo_discount = $request->c_14_76_promo_discount;
          $order->c_14_74_total_order_value = $request->c_14_74_total_order_value;
          $order->c_14_77_shipping_charges = $request->c_14_77_shipping_charges;
          $order->c_14_78_additional_charges = $request->c_14_78_additional_charges;
          $order->c_14_79_semi_total_amount = $request->c_14_79_semi_total_amount;
          $order->c_14_80_convert_payment_mode = $request->payment_mode;
             if($request->hasFile('prescription')){
          $image = $order->c_14_2_online_invoice_no.'-'.bin2hex(random_bytes(6)).'.'.$request->prescription->extension();
          $request->prescription->move(public_path('scripts'), $image);
          $image_url =asset('scripts/'.$image) ;
          if($order->c_14_32_doctor_prescription_url){
          rename(public_path('/scripts/'.$order->c_14_32_doctor_prescription_url), public_path('/scripts/'.$order->c_14_2_online_invoice_no.$order->c_14_32_doctor_prescription_url));
          }
           $order->c_14_32_doctor_prescription_url= $image;
      }
          if($request->payment_mode =='POD'){
             $order->c_14_81_pod_charges = $request->c_14_81_pod_charges;

          }
          $payment_mode = 'Bank';
          if($request->is_cc == 'Credit Card'){
                 $payment_mode = 'Credit Card';
          $order->c_14_82_credit_card_processing_fees = $request->c_14_82_credit_card_processing_fees;
          } 
          $order->c_14_93_pay_mode = $payment_mode;
          $order->c_14_84_total_amount = $request->c_14_84_total_amount;
          $order->c_14_86_cc_name = $request->c_14_86_cc_name;
          $order->c_14_88_cc_state = $request->c_14_88_cc_state;
          $order->c_14_94_forex_currency = $request->c_14_94_forex_currency;
          $order->conversion_usd_to_forex_rate = $request->conversion_usd_to_forex_rate;
          $order->c_14_95_amount = $request->c_14_95_amount;
          $order->c_14_98_conversion_forex_to_usd_rate = $request->c_14_98_conversion_forex_to_usd_rate;
          $order->c_14_92_cc_request_link = $request->c_14_92_cc_request_link;
         if($order->c_14_75_coupon_code_used && $order->c_14_76_promo_discount){
            $userAmount =  round(($request->c_14_99_usd_received- $order->c_14_99_usd_received)*$this->cpupon_percent);
            $waletAmount =  round(($request->c_14_99_usd_received)*$this->cpupon_percent);
           $couponStatus =  $this->balanceUpdate($order->c_14_75_coupon_code_used,$userAmount);
           if($couponStatus){
              $order->transaction_type = 'CREDIT';
              $order->wallet_amount = $waletAmount;
           }
          }
          $order->c_14_99_usd_received = $request->c_14_99_usd_received;
          $order->forex_gain_loss = $request->forex_gain_loss;
          $order->c_14_100_usd_bal_due = $request->c_14_100_usd_bal_due;
          $order->reorder_invoice_no = $request->reorder_invoice_no;
          
          if(isset($request->shipment_url)){
              $url3 = $order->c_14_2_online_invoice_no.'-'.bin2hex(random_bytes(6));
               $order->shipment_url = $request->shipment_url.'/'.$url3;
              if($request->shipment_url == 'ss'){
                     $order->shipment_url = $url3;
              }
             
          }

          if($order->is_order ==0){
              $url = $order->c_14_2_online_invoice_no.'-'.bin2hex(random_bytes(6));
              $url3 = $order->c_14_2_online_invoice_no.'-'.bin2hex(random_bytes(6));
              $order->c_14_7_order_invoice_url= $url;
              // $order->c_14_8_excel_order_url= $url3;
              $order->is_order =   1;
         
          }
          if($request->select_payment_mode != 'Credit Card'){
                $bank_detail = BankDetail::find($request->select_payment_mode);
                if($bank_detail){
             $order->bank_company_code = $bank_detail->c_5_2_company_code;
             $order->bank_account_name = $bank_detail->c_5_3_account_name;
             $order->bank_account_address = $bank_detail->c_5_4_account_address;
             $order->bank_name_location = $bank_detail->c_5_5_bank_name_location;
             $order->account_type = $bank_detail->c_5_7_account_type;
             $order->account_no = $bank_detail->c_5_8_account_no;
             $order->bank_transfer_code = $bank_detail->c_5_9_bank_transfer_code;
             $order->bank_email = $bank_detail->c_5_10_email;
             $order->bank_branch_code = $bank_detail->c_5_6_bank_branch_code;

                }

          }
                 $order->is_pdf =   1;
          $order->update();
            if(isset($request->is_mail)){
              $summary = Summary::with('order_details')->find($id);
               $bank_detail = BankDetail::where('c_5_1_s_no','BD-1')->first();
                  $data['cc'] = env('MAIL_CC');
                   $data['to'] = $summary->c_14_9_login_email ;
                   $data['invoice'] = $summary->c_14_2_online_invoice_no;

                 Mail::send('mails.mail_5_final_order_mail_oi', compact('summary','bank_detail'), function($message) use ($data) {
                 $message->to($data['to'])->cc($data['cc'])->from('info@911globalmeds.com', '911globalmeds.com 💊')->subject($data['invoice'].' : Stock Confirmation & Order Invoice for your Ordered Medicines ');
              });
            $order->order_invoice_mail = date('Y-m-d');
              $order->update();

             return redirect()->back()->with('success',' Mail Sent Successfully');
            }

        return redirect()->back()->with('success','Order Satus Updated Successfully');

        
    }


     public function orderUpdate(Request $request,$id)
    {
         $order = Summary::findOrFail($id);
         $order->c_14_96_forex_received = $request->forex_received;
         $order->c_14_97_received_on_date = $request->received_on_date;
         $order->c_14_115_parcel_shipment_date = $request->shipment_date;
         $order->c_14_116_carrier = $request->carrier;
         $order->c_14_117_tracking_no = $request->tracking_no;
         $order->c_14_118_tracking_url = $request->tracking_url;
         $order->for_arrival_date = $request->arrival_date;
         $order->customs_cl_date = $request->customs_date;
         $order->c_14_124_delivered_date = $request->delivered_date;
         $order->c_14_100_usd_bal_due = round(($order->c_14_95_amount - $order->c_14_96_forex_received)*$order->c_14_98_conversion_forex_to_usd_rate) ;
        $received =  round($order->c_14_96_forex_received*$order->c_14_98_conversion_forex_to_usd_rate);
         if($order->c_14_75_coupon_code_used && $order->c_14_76_promo_discount){
            $userAmount =  round(($received - $order->c_14_99_usd_received)*$this->cpupon_percent);
            $waletAmount =  round(($received)*$this->cpupon_percent);
            
           $couponStatus =  $this->balanceUpdate($order->c_14_75_coupon_code_used,$userAmount);
           if($couponStatus){
              $order->transaction_type = 'CREDIT';
              $order->wallet_amount = $waletAmount;
           }
          }
        $order->c_14_99_usd_received =  $received;
         $order->forex_gain_loss =  round($order->c_14_99_usd_received -$order->c_14_84_total_amount);
         $order->update();

        return redirect()->back()->with('success','Order Satus Updated Successfully');
    }

    public function orderNewInvoice($id)
    {
      $summary = Summary::with('order_details')->find($id);
      $latest_summary = Summary::whereNotNull('c_14_2_online_invoice_no')->latest()->first();

      $newsummary = $summary->replicate();
      $newsummary->created_at = Carbon::now();
      $newsummary->updated_at = Carbon::now();
      $newsummary->c_14_2_online_invoice_no =($latest_summary->c_14_2_online_invoice_no+1);
      $newsummary->c_14_4_cart_url = null;
      $newsummary->reorder_invoice_no = $summary->c_14_2_online_invoice_no;
      $newsummary->c_14_6_proforma_invoice_url = null;
        $url3 = $newsummary->c_14_2_online_invoice_no.'-'.bin2hex(random_bytes(6));
        $url1 = $newsummary->c_14_2_online_invoice_no.'-'.bin2hex(random_bytes(6));
        $url2 = $newsummary->c_14_2_online_invoice_no.'-'.bin2hex(random_bytes(6));
              $newsummary->c_14_7_order_invoice_url= $url3;
              $newsummary->c_14_8_excel_order_url= $url1;
              $newsummary->c_14_6_proforma_invoice_url= $url2;


      $newsummary->order_invoice_mail = null;
      $newsummary->order_reminder_or1 = null;
      $newsummary->order_reminder_or2 = null;
      $newsummary->order_reminder_or3 = null;
      $newsummary->cc_payment_reminder_mail1 = null;
      $newsummary->cc_payment_reminder_mail2 = null;
      $newsummary->cc_payment_thanks_mail = null;
      $newsummary->bt_payment_reminder_mail1 = null;
      $newsummary->bt_payment_reminder_mail2 = null;
      $newsummary->bt_payment_thanks_mail = null;
      $newsummary->shipment_mail = null;
      $newsummary->custom_clearance_mail = null;
      $newsummary->delivered_mail = null;
      $newsummary->reviews_mail1 = null;
      $newsummary->reviews_mail2 = null;
      $newsummary->refil_reminder_mail1 = null;
      $newsummary->refil_reminder_mail2 = null;
      $newsummary->refil_reminder_mail3 = null;
      $newsummary->order_hold_mail = null;
      $newsummary->c_14_96_forex_received  = 0;
      $newsummary->c_14_97_received_on_date  = null;
      $newsummary->c_14_107_payment_received_amount  = null;
      $newsummary->c_14_108_payment_received_date  = null;
      $newsummary->c_14_115_parcel_shipment_date  = null;
      $newsummary->c_14_116_carrier  = null;
      $newsummary->for_arrival_date  = null;
      $newsummary->customs_cl_date  = null;
      $newsummary->foreign_arrival_mail  = null;
      $newsummary->c_14_124_delivered_date   = null;
      $newsummary->c_14_117_tracking_no   = null;
      $newsummary->c_14_118_tracking_url  = null;
            $newsummary->c_14_100_usd_bal_due = round(($newsummary->c_14_95_amount - $newsummary->c_14_96_forex_received)*$summary->c_14_98_conversion_forex_to_usd_rate) ;
      $newsummary->c_14_99_usd_received =  round($newsummary->c_14_96_forex_received*$newsummary->conversion_usd_to_forex_rate);
      $newsummary->forex_gain_loss =  round($summary->c_14_84_total_amount- $newsummary->c_14_99_usd_received);
      $newsummary->reorder_date = null;
      $newsummary->save();
      foreach ($summary->order_details as $key => $order) {
        $order_details = OrderDetail::find($order->id);
         $new_order_details = $order_details->replicate();
         $new_order_details->order_id = $newsummary->id;
          $new_order_details->created_at = Carbon::now();
      $new_order_details->updated_at = Carbon::now();
      $new_order_details->save();
       
      }


    return redirect()->route('aadhya.summary',$newsummary->c_14_2_online_invoice_no)->with('success','New Order Created Successfully');
    }

    public function faqs()
    {
        return view('aadhya.faqs');
    }

    public function pending_cart()
    {

    //     $summary = Summary::find(10);
    //  $bank_detail = BankDetail::where('c_5_1_s_no','BD-1')->first();
    // $data['cc'] = env('MAIL_CC');

    //     $data['to'] = $summary->c_14_9_login_email ;
    //    Mail::send('mails.mail_2_order_reminder_mail_or2', compact('summary','bank_detail'), function($message)use ($data) {

    //      $message->to($data['to'])->cc($data['cc'])->subject('Details Incomplete for your Medicines Order');
    //   });
    $orders = Summary::with('order_details','country')->whereNull('c_14_93_pay_mode')->latest()->get();
        return view('aadhya.pending_cart',compact('orders'));
    }

    public function order_status()
    {
    	$orders = Summary::with('order_details')->whereNotNull('c_14_93_pay_mode')->orderBy('id','desc')->get();
          $bank_detail = BankDetail::where('c_5_1_s_no','BD-1')->first();

        return view('aadhya.order_status',compact('orders','bank_detail'));
    }

    public function order_refill()
    {   

      $orders = Summary::with('order_details')->whereNotNull('c_14_7_order_invoice_url')->orderBy('id','desc')->get();
          $bank_detail = BankDetail::where('c_5_1_s_no','BD-1')->first();
        return view('aadhya.order_refill',compact('orders','bank_detail'));
    }

    public function excel_order($url)
    { 
      $order = Summary::with('order_details')->where('c_14_8_excel_order_url',$url)->firstOrFail();
        $countries = CountryFreight::get();
        $bank_details = BankDetail::get();

//      $bytes = random_bytes(6);
// var_dump(bin2hex($bytes));
// dd('sdf');


        return view('aadhya.excel_order',compact('order','countries','bank_details'));
    }

    public function generatePDF($url)
    {
        $summary =Summary::with('order_details')->where('c_14_6_proforma_invoice_url',$url)->firstOrFail();
        $summary->is_pdf = 1;
        $summary->update();

       $bank_detail = BankDetail::where('c_5_1_s_no','BD-1')->first();
        $data = [
          'summary'=>$summary,
          'bank_detail'=>$bank_detail
        ];

        $filename = 'Proforma Invoice - '.$summary->c_14_2_online_invoice_no;

        if($summary->c_14_93_pay_mode == 'Bank'){
          $filename .= ' - Bank Transfer';
        } else {

          $filename .= ' - Credit Card';
        }


               $pdf = PDF::loadView('aadhya.pdf.porfoma_save_invoice', $data)->setOptions(['defaultFont' => 'sans-serif']);;
        return $pdf->download($filename.'.pdf');


    }


    public function passwordMatch(Request $request)
    {
         if($request->isMethod('post')){

            $request->validate([
                'old_Password' => 'required',
                ]);;
                

              $admi_user  =Auth::guard('admin')->user() ;
            $admin = Admin::where('email', $admi_user->email)->where('password',$request->old_Password)->first();
            if($admin){
                            $permissions = Permission::orderBy('s_no')->get();
                            
//                               $role = Role::where(['name' => 'admin','guard_name'=>'admin'])->first();
// // $role->revokePermissionTo($permission);
// // $permission->removeRole($role);
//             $role->syncPermissions($permissions->toArray());

//         dd('sdafdf');
                            $admin  =Auth::guard('admin')->user() ;
                           $admin_staffs = Admin::where('is_super',0)->get();
                  return view('aadhya.16-password',compact('admin','permissions','admin_staffs'));
              
            }
               
            else {

                return back()->with('error', 'Old password is wrong');
            }
        }


        return redirect()->route('aadhya.password');
    }

    public function password(Request $request)
    {
        if($request->isMethod('post')){

            $request->validate([
                'email' => 'required|email',
               'password' => 'required|min:8|confirmed',
                ]);;

              $admi_user  =Auth::guard('admin')->user() ;
            $admin = Admin::where('email', $admi_user->email)->first();
            if($admin){

             $admin->update(['password' => $request->password,'email'=>$request->email]);

                return back()->with('success', 'Password is changed successfully');
            }
               
            else {

                return back()->with('error', 'Old password is wrong');
            }
        }
          $permissions = Permission::orderBy('s_no')->get();
        $admin  =Auth::guard('admin')->user() ;
        $admin_staffs = Admin::where('is_super',0)->get();
        return view('aadhya.password',compact('admin','permissions','admin_staffs'));
    }


    public function setting(Request $request)
    {

        $data = SiteSetting::find(1);

        if($request->isMethod('post')){

            $data->email = $request->email;
            $data->phone = $request->phone;
            $data->address = $request->address;
            $data->youtube = $request->youtube;
            $data->twitter = $request->twitter;
            $data->insta = $request->insta;
            $data->facebook = $request->facebook;
            $data->description = $request->description;

            if($request->hasFile('image')){

                $imageName = time().'.'.request()->image->getClientOriginalExtension();

                request()->image->move(public_path('images'), $imageName);;

                $data->logo = $imageName;
                $old_path = public_path('images/'.$request->old_image);

                if(!empty($request->old_image)){

                    unlink($old_path);

                }
            }
            $data->save();
            return redirect()->route('setting')->with('flash_message',' Setting Updated Successfully ');
        }
        return view('aadhya.setting',compact('data'));

    }


    

    public function contact(){
        $data = Contact::all();
        return view('aadhya.contact',compact('data'));
    }



    public function singlecontact($id){
        $data = Contact::find($id);
        // return view('admin.products.product_enquiry',compact('data'));
        return response()->json($data);
    }

      public function summaryDelete($id){
        $data = Summary::find($id);
        // return view('admin.products.product_enquiry',compact('data'));
        $data->delete();
        return redirect()->back()->with('success','Order Deleted Successfully');
    }


    public function orderRefillDelete($id)
    {
        $data = Summary::find($id);
        // return view('admin.products.product_enquiry',compact('data'));
        $data->reorder_date = date('Y-m-d');
        if($data->reorder_invoice_no){
        $child_summary = Summary::where('c_14_2_online_invoice_no',$data->reorder_invoice_no)->first();
        if($child_summary){
        $child_summary->delete();
         $data->reorder_invoice_no = null;
        }
        }
        $data->update();
        return redirect()->back()->with('success','Order Refiill Canceled Successfully');
    }


public function contact_delete(Request $request,$id)
{
  Contact::destroy($id);
  return redirect()->back()->with('flash_message',' Contact Deleted Successfully ');
}

public function staffPermission(Request $request)
{
  $email = $request->new_email;
  if($request->new_email && $request->new_password && (count($request->new_staff_permission) > 0)){
  $admin_staff = Admin::where('email',$email)->first();
  if($admin_staff){
       return back()->with('error', 'Email already exits');
  }
// dd($request->all(),$email);
		  $admin_staff = new Admin;
		  $admin_staff->name = $email;
		  $admin_staff->email = $email;
		  $admin_staff->password = $request->new_password;
		  $admin_staff->save();

		  $staff_id = $admin_staff->id;
		  if(count($request->new_staff_permission) > 0){
		 	 $role_name = 'staff-'.$staff_id;
		    $role = Role::create(['name' => $role_name,'guard_name'=>'admin']);
		        $role->syncPermissions($request->new_staff_permission);
		    $admin_staff->assignRole($role);

		  }

		      return back()->with('success', 'Staff is created  successfully');
} else {

}

  }

  public function updatestaffPermission(Request $request,$id)
  {
   // dd($request->all());

      $request->validate([
                'old_email' => 'required|email',
               'new_password' => 'required',
                ]);;
      $admin_staff =  Admin::findOrFail($id);

      $email = $request->old_email;
      $admin_staff->name = $email;
      $admin_staff->email = $email;
      $admin_staff->password = $request->new_password;
      $admin_staff->update();
    if(count($request->old_staff_permission) > 0){
       $role_name = 'staff-'.$id;
        $role = Role::where(['name' => $role_name,'guard_name'=>'admin'])->first();
// $role->revokePermissionTo($permission);
// $permission->removeRole($role);
            $role->syncPermissions($request->old_staff_permission);
        $admin_staff->assignRole($role);

      }

          return back()->with('success', 'Staff is updated  successfully');

  }


          public function delete()
    {
        User::truncate();
        return redirect()->back()->with('success','Details deleted Successfully ');
        
    }

    public function import(Request $request)
    {
         $this->validate($request, [
            'file' => 'required',          
        ]);

       Excel::import(new UserImport, $request->file('file'));
        
        return redirect()->back()->with('success','Details uploaded Successfully ');
    }

    public function export()
    {

         return Excel::download(new UserExport, '11-Buyer-Details-downloaded-'.date('dmY').'.xlsx');
    }

                public function deleteAll(Request $request)  
    {  
        $ids = $request->ids;  
        User::whereIn('id',explode(",",$ids))->delete();  
        return response()->json(['success'=>"Details deleted Successfully."]);  
    }

      public function cartDestroy($id)
    {
        $Summary = Summary::find($id);
        $Summary->destroy($id);
        return back()->with('success','Detail Deleted Successfully');
    }

      public function passwordDelete($id)
    {
        $admin_staff =  Admin::findOrFail($id);
        $role_name = 'staff-'.$id;
        $role = Role::where(['name' => $role_name,'guard_name'=>'admin'])->first();
        $role->syncPermissions([]);
        $admin_staff->assignRole([]);
        $role->delete();

        $admin_staff->destroy($id);
        return back()->with('success','Detail Deleted Successfully');
    }


    public function balanceUpdate($userCoupon,$amount)
    {
      $user = User::where('coupon_code',$userCoupon)->first();
      if($user){
 
            $user->balance += $amount;
            $user->update();
            return true;
        
      }

      return false;
    }


}
