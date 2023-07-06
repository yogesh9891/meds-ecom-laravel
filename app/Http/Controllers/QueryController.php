<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\QueryDetails;
use App\Models\User;
use Auth,Mail;

class QueryController extends Controller
{
    
    public function patientQuery(Request $request)
    { //dd($request->all());
        $validator = \Validator::make($request->all(), [
         'full_name' => 'required',
          'email' => 'required|email:rfc,dns',
         'contact_no' => 'required',
         'message' => 'required',
         'captcha' => 'required|captcha'
        ],['recaptcha' =>'Enable Captcha from the Checkbox - “I’m not a Robot”']);

      
        if($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
          $patientQuery = new QueryDetails;
        $patientQuery->c_10_4_name = $request->full_name;

        $patientQuery->c_10_6_email = $request->email;
        $patientQuery->c_10_7_contact_no = $request->contact_no;
        $patientQuery->c_10_10_message = $request->message;
         $patientQuery->c_10_3_sent_from_page = $request->url;
        $patientQuery->c_10_1_s_no = $request->id;
        $patientQuery->save();


        $query_detail = $patientQuery;
             $data['cc'] = env('MAIL_CC');
            $data['to'] = $query_detail->c_10_6_email ;
               if($query_detail->medicine){
                  $data['subject'] = 'Patient Purchase Query : '.$query_detail->medicine->c_1_1_2_main_generic_name.'/'.$query_detail->medicine->c_1_1_3_other_names ;
           }
           if($query_detail->order){
                    $data['subject']  = 'Your Query on your Ordered Medications';
                 }
         Mail::send('mails.mail_22_retail_query', compact('query_detail'), function($message) use ($data) {
         $message->to($data['to'])->cc($data['cc'])->from('info@911globalmeds.com', '911globalmeds.com 💊')->subject($data['subject']);
      });
        return response()->json(['success'=>true,'msg'=>'We welcome your Query on this medication and will revert to you very soon !']);

        
    } 

     public function businessQuery(Request $request)
    {
     // dd($request->all());
        $validator = \Validator::make($request->all(), [
         'full_name' => 'required',
         'business_name' => 'required',
          'email' => 'required|email:rfc,dns',
        //  'upload_licence' => 'mimes:jpeg,png,jpg,pdf',
         'contact_no' => 'required',
         'message' => 'required',
           'captcha' => 'required|captcha'
        ],['recaptcha' =>'Enable Captcha from the Checkbox - “I’m not a Robot”']);

         $filename = '';
        if($request->hasFile('upload_licence')){
             $file = $request->file('upload_licence');
                        $filename = time().'.'.$file->getClientOriginalExtension();
          // $image = time().'-upload_licence.'.$request->upload_licence->extension();
          // $file->move('scripts', $filename);
            $path = $request->file('upload_licence')->move('scripts', $filename);
          // $image_url =asset('/query/'.$image) ;
      }

      
        if($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        $businessQuery = new QueryDetails;
        $businessQuery->c_10_4_name = $request->full_name;
        $businessQuery->c_10_5_business_name = $request->business_name;
        $businessQuery->c_10_6_email = $request->email;
        $businessQuery->c_10_9_attachment = $filename;
        $businessQuery->c_10_7_contact_no = $request->contact_no;
        $businessQuery->c_10_10_message = $request->message;
        $businessQuery->c_10_8_country = $request->country;
        $businessQuery->c_10_3_sent_from_page = $request->url;
        $businessQuery->c_10_1_s_no = $request->id;
        $businessQuery->save();

          $query_detail = $businessQuery;
               $data['cc'] = env('MAIL_CC');
            
            $data['to'] = $query_detail->c_10_6_email ;
            $data['file'] = $query_detail->c_10_9_attachment ;
            if($query_detail->medicine){
             $data['subject'] = 'Business Purchase Query  : '.$query_detail->medicine->c_1_1_2_main_generic_name.'/'.$query_detail->medicine->c_1_1_3_other_names ;
            }    else {
                  $data['subject'] = 'Business Purchase Query  : ';

            }
         Mail::send('mails.mail_22_retail_query', compact('query_detail'), function($message) use ($data) {
         $message->to($data['to'])->cc($data['cc'])->from('info@911globalmeds.com', '911globalmeds.com 💊')->subject($data['subject']);

           if($data['file']){
         $message->attach(url('/scripts/'.$data['file']));

         }
      });
        return response()->json(['success'=>true,'msg'=>'We welcome your Business Purchase Query for this medication and will revert to you very soon !']);
      

        
    } 

     public function contactUsQuery(Request $request)
    { //dd($request->all());
        $validator = \Validator::make($request->all(), [
         'full_name' => 'required',
         'country' => 'required',
         'email' => 'required|email:rfc,dns',
         'contact_no' => 'required',
         'message' => 'required',
        'captcha' => 'required|captcha'
        ],['recaptcha' =>'Enable Captcha from the Checkbox - “I’m not a Robot”']);
      
        if($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }

        $contactUsQuery = new QueryDetails;
        $contactUsQuery->c_10_4_name = $request->full_name;       
        $contactUsQuery->c_10_6_email = $request->email;
        $contactUsQuery->c_10_7_contact_no = $request->contact_no;
        $contactUsQuery->c_10_8_country = $request->country;
        $contactUsQuery->c_10_1_s_no = 'Contact Us';
         $contactUsQuery->c_10_3_sent_from_page = '/contact-us';
      
        $contactUsQuery->c_10_10_message = $request->message;
        $contactUsQuery->save();

           $query_detail = $contactUsQuery;
             $data['cc'] = env('MAIL_CC');
            $data['to'] = $query_detail->c_10_6_email ;
          $data['subject'] = 'Query from Contact us Form' ;
         Mail::send('mails.mail_22_retail_query', compact('query_detail'), function($message) use ($data) {
         $message->to($data['to'])->cc($data['cc'])->from('info@911globalmeds.com', '911globalmeds.com 💊')->subject($data['subject']);
      });
        return response()->json(['success'=>'Record is successfully added']);

        
    } 

    public function orderRefillQuery(Request $request)
    {
        $user  = User::find(Auth::id());

        $query = new QueryDetails;
        $query->c_10_4_name = $user->name;
        $query->c_10_6_email = $user->email ;
         $query->c_10_3_sent_from_page = 'Fast Refill';
          $query->c_10_7_contact_no = $user->mobile ;
        $query->c_10_8_country = $user->user_country->c_4_1_2_country_name ;
        $query->c_10_11_order_ref = $request->c_10_11_order_ref ;
        $query->c_10_12_refill_pay_address = $request->c_10_12_refill_pay_address ;
        $query->c_10_13_refill_del_address = $request->c_10_13_refill_del_address ;
        $query->c_10_14_refill_order_quantity = $request->c_10_14_refill_order_quantity ;
        $query->c_10_15_refill_other_change  = $request->c_10_15_refill_other_change  ;

        $query->save();

        
           $query_detail = $query;
             $data['cc'] = env('MAIL_CC');
            $data['to'] = $query_detail->c_10_6_email ;
          $data['subject'] = 'Your Request for Refill of earlier Medications Order' ;
         Mail::send('mails.mail_22_retail_query', compact('query_detail'), function($message) use ($data) {
         $message->to($data['to'])->cc($data['cc'])->from('info@911globalmeds.com', '911globalmeds.com 💊')->subject($data['subject']);
      });
        return redirect()->route('my-account')->with('success','Your Order Requirement has been successfully submitted.We will contact you back very soon.');
    }



    public function emailReply(Request $request,$id)
    {
        $query =  QueryDetails::find($id);
        $query->c_10_16_email_reply = $request->date;
        $query->update();
        return redirect()->back()->with('success','Data save successfully');
    }
    public function waReply(Request $request,$id)
    {
          $query =  QueryDetails::find($id);
           $query->c_10_17_wa_reply = $request->date;
        $query->update();
        return redirect()->back()->with('success','Data save successfully');
    }


    public function destroy($id)
    {
         QueryDetails::destroy($id);
         return redirect()->back()->with('success','Delete Successfully ');
    }

                public function deleteAll(Request $request)  
    {  
        $ids = $request->ids;  
        QueryDetails::whereIn('id',explode(",",$ids))->delete();  
        return response()->json(['success'=>"Details deleted Successfully."]);  
    }



    public function patnerQuery(Request $request)
    {
     // dd($request->all());
         $request->validate([
         'fname' => 'required',
         'lname' => 'required',
         'company' => 'required',
         'designation' => 'required',
         'address1' => 'required',
         'address2' => 'required',
          'email' => 'required|email:rfc,dns',
         'file' => 'mimes:jpeg,png,jpg,pdf',
         'contact_no' => 'required',
         'city' => 'required',
         'country' => 'required',
         'zip' => 'required',
         'country' => 'required',
         'message' => 'required',
         'website' => 'required',
           'captcha' => 'required|captcha'
        ],['recaptcha' =>'Enable Captcha from the Checkbox - “I’m not a Robot”']);

         $filename = '';
        if($request->hasFile('file')){
             $file = $request->file('file');
                        $filename = time().'.'.$file->getClientOriginalExtension();
          // $image = time().'-file.'.$request->file->extension();
          // $file->move('scripts', $filename);
            $path = $request->file('file')->move('scripts', $filename);
          // $image_url =asset('/query/'.$image) ;
      }

      
        // if($validator->fails())
        // {
        //     return response()->json(['errors'=>$validator->errors()->all()]);
        // }
        $businessQuery = new QueryDetails;
        $businessQuery->c_10_4_name = $request->fname.' '.$request->lname;
        $businessQuery->c_10_5_business_name = $request->company;
        $businessQuery->c_10_6_email = $request->email;
        $businessQuery->c_10_9_attachment = $filename;
        $businessQuery->c_10_7_contact_no = $request->contact_no;
        $businessQuery->c_10_10_message = $request->message;
        $businessQuery->c_10_8_country = $request->country;
        $businessQuery->c_10_3_sent_from_page = $request->url;
        $businessQuery->save();

      //     $query_detail = $businessQuery;
      //          $data['cc'] = env('MAIL_CC');
            
      //       $data['to'] = $query_detail->c_10_6_email ;
      //       $data['file'] = $query_detail->c_10_9_attachment ;

      //     $data['subject'] = 'Business Purchase Query  : '.$query_detail->medicine->c_1_1_2_main_generic_name.'/'.$query_detail->medicine->c_1_1_3_other_names ;
      //    Mail::send('mails.mail_22_retail_query', compact('query_detail'), function($message) use ($data) {
      //    $message->to($data['to'])->cc($data['cc'])->from('info@911globalmeds.com', '911globalmeds.com 💊')->subject($data['subject']);

      //      if($data['file']){
      //    $message->attach(url('/scripts/'.$data['file']));

      //    }
      // });
        return back()->with('success','We welcome your Business Purchase Query for this medication and will revert to you very soon');
              return response()->json(['success'=>true,'msg'=>'We welcome your Business Purchase Query for this medication and will revert to you very soon !']);
      

        
    } 


    public function referFriendSubmit(Request $request)
{
    
    $request->validate([
         'name' => 'required',
         'main_email' => 'required',
         'main_contact_no' => 'required',
        ]);

     $message = '';


     if($request->full_name){

     $message .= $request->full_name[0]??' - ';
     $message .= ' , ';
     $message .= $request->email[0]??' - ';
     $message .= ' , ';

     $message .= $request->contact_no[0]??' - ';
     $message .= ' , ';
        $message .= $request->full_name[1]??' - ';
     $message .= ' , ';

     $message .= $request->email[1]??' - ';
     $message .= ' , ';

     
     $message .= $request->contact_no[1]??' - ';
     $message .= ' , ';


          $message .= $request->full_name[2]??' - ';

     $message .= ' , ';
     $message .= $request->email[2]??' - ';
     $message .= ' , ';
     $message .= $request->contact_no[2]??' - ';
     $message .= ' , ';

    $message .= $request->full_name[3]??' - ';
     $message .= ' , ';
     $message .= $request->email[3]??' - ';
     $message .= ' , ';
     $message .= $request->contact_no[3]??' - ';
     $message .= ' , ';


    $message .= $request->full_name[4]??' - ';
     $message .= ' , ';
     $message .= $request->email[4]??' - ';
     $message .= ' , ';
     $message .= $request->contact_no[4]??' - ';

     }
  

       $businessQuery = new QueryDetails;
        $businessQuery->c_10_4_name = $request->name;
        $businessQuery->c_10_6_email = $request->main_email;
        $businessQuery->c_10_7_contact_no = $request->main_contact_no;
        $businessQuery->c_10_10_message = $message;
        $businessQuery->c_10_3_sent_from_page = $request->url;
        $businessQuery->save();

        return back()->with('success','We welcome your Business Purchase Query for this medication and will revert to you very soon');

}

}
