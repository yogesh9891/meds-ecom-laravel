<!DOCTYPE html>

<html>

<head>

	<title></title>

</head>

<body>



	<div>

		<table width='600px' border='0' cellspacing='0' cellpadding='0' bgcolor='#3f3fdd' style='font-family:Arial, Helvetica, sans-serif; font-size:13px;border-radius:8px;border-radius:8px;background: linear-gradient(90deg, rgba(138, 136, 136,1) 0%, rgb(85, 203, 205,1) 100%)'><tr> <td style='padding:10px;'> 



<tbody><tr>

<td style="padding:10px;"><table width="95%" cellspacing="0" cellpadding="0" border="0">

<tbody><tr>

<td style="width:50%;"><a href="{{ url('/') }}"  ><img  src="{{ asset('/img/911-Global-Meds-logo.webp') }}" style="width:180px;border-radius: 4px;;"></a> </td>

<td style="width:50%;" align="right"><p style="font-size: 14px;">911globalmeds.com 💊 Cares for You !</p></td></tr></tbody></table></td></tr>

<tr>

<td style="padding:10px;"><table width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="white" style="border-radius:8px;">

<tbody><tr>

<td style="color:black;font-size:13px;padding:5px 5px 5px 10px;"><b>      

   

    </td>

  </tr>

<tr>

<td style="color:black;font-size:13px;padding:5px 5px 5px 10px;">
Dear {{$query_detail->c_10_4_name}} {{ $query_detail->c_10_5_business_name? ' , '.$query_detail->c_10_5_business_name: ''}} <br aria-hidden="true">
Greetings,<br aria-hidden="true"><br>
We have received your Query

 @if($query_detail->medicine) for the medication  <strong ><a style="color: #3f3fdd"  href="{{ url('/'.$query_detail->c_10_3_sent_from_page) }}"  target="_blank" >{{ $query_detail->medicine ? $query_detail->medicine->c_1_1_2_main_generic_name: '' }} / {{ $query_detail->medicine->c_1_1_3_other_names??'' }}</a></strong>@endif

@if($query_detail->order)
for your   <strong ><a style="color: #3f3fdd"  href="{{ url('/'.$query_detail->c_10_3_sent_from_page) }}"  target="_blank" >Ordered Medications</a></strong>
@endif
@if($query_detail->summary)
for a Refill of your last   <strong ><a style="color: #3f3fdd"  href="{{route('order.invoice',$query_detail->summary->c_14_7_order_invoice_url??'url')}}"  target="_blank" >Medications Order</a></strong>, with changes required as 
@endif

  : <br aria-hidden="true">
<br>



<table style="font-size:13px;font-family:Arial,Helvetica,sans-serif;border:1px solid black;text-align: left;" width="100%" cellspacing="0" cellpadding="3" border="1">

<tbody>
@if(!$query_detail->summary)
            <tr>
              <th>Name</th>
               <td>{{ $query_detail->c_10_4_name }}</td>
          </tr>
          @if($query_detail->c_10_5_business_name)
             <tr>
              <th>Business Name</th>
               <td>{{ $query_detail->c_10_5_business_name }}</td>
          </tr>
          @endif

            @if($query_detail->c_10_8_country)
             <tr>
              <th>Country</th>
               <td>{{ $query_detail->c_10_8_country }}</td>
          </tr>
          @endif
            <tr>
              <th>Email</th>
               <td>{{ $query_detail->c_10_6_email }}</td>
          </tr>

            <tr>
              <th>Contact No.</th>
               <td>{{ $query_detail->c_10_7_contact_no }}</td>
          </tr>


            <tr>
              <th>Message</th>
               <td>{{ $query_detail->c_10_10_message }}</td>
          </tr>
 
@else
    <tr>
              <th>Payment Address</th>
               <td>{{ $query_detail->c_10_12_refill_pay_address }}</td>
          </tr>
      

            <tr>
              <th>Delivery Address</th>
               <td>{{ $query_detail->c_10_13_refill_del_address }}</td>
          </tr>

            <tr>
              <th>Order Quantity</th>
               <td>{{ $query_detail->c_10_14_refill_order_quantity }}</td>
          </tr>


            <tr>
              <th>Any Other</th>
               <td>{{ $query_detail->c_10_15_refill_other_change }}</td>
          </tr>
@endif


    



</tbody></table>




<tr>

{{-- <td style="padding:0px 10px;">

  <p>

We can send the parcel by Express Air Shipment and guarantee the parcel reaching the {{ $summary->c_14_29_receiver_country }} Customs Office within 1-3 working days.

</p>

<p>However, as {{ $summary->c_14_29_receiver_country }} is not a general shipping destination for us, you are requested to contact the {{ $summary->c_14_29_receiver_country }}  DHL office to confirm if they will clear and deliver the parcel on the basis of your

@if($summary->c_14_31_end_use_selected == 1)  Doctor's prescription @elseif($summary->c_14_31_end_use_selected == 2)  Scholarly Use Undertaking @endif

 document.</p>

<p> As you will be responsible to fulfil your country’s Customs documents requirements, please proceed to make the payment only if you are sure to fulfil the same for the clearance and delivery of the parcel. </p>

 </td></tr>
 --}}
<tr>

<td style="padding:10px;"><span style="color:#3f3fdd;font-weight:bold;">Our Customer Care Executive will contact you back very soon from WeCare@911GlobalMeds.com.</span><br aria-hidden="true">

<br aria-hidden="true">

Best Regards &amp; Have a good day.<br aria-hidden="true">

Administrator <br aria-hidden="true">

<a href="{{ url('/') }}" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="5">www.911GlobalMeds.com </a></td></tr>

<tr>

<td style="padding:5px 10px;">Email / WhatsApp: 24 hours a day, anyday ! <br  aria-hidden="true">

{{-- <span style="color:#3f3fdd;">Call 1.30 pm to 5.00 pm(HK time) </span><br aria-hidden="true">

<span style="color:#3f3fdd;">Email 10.30 am to 10.30 pm(HK time) </span></td></tr> --}}

<tr>



<td style="color:white;font-size:13px;border-radius:8px;border-radius:8px;background: linear-gradient(90deg, rgba(138, 136, 136,1) 0%, rgb(85, 203, 205,1) 100%);">

 <p style="color:white;margin-bottom: 0px;">BRUDER COSMOGEN LIMITED<br aria-hidden="true">

“Global Sourcing – Global Servicing” Pharmaceuticals Marketplace<br aria-hidden="true"><br>

Americas : Midland Avenue, Scarborough, Ontario M1K4H2, Canada<br aria-hidden="true"><br>

Asia : Multifield Plaza, 3 Prat Avenue, TST, Kowloon, Hong Kong<br aria-hidden="true"><br>

WhatsApp : +1 (567) 252-7545<br aria-hidden="true">

Email :  WeCare@911GlobalMeds.com</p>

</td></tr>

{{-- 

<tr>

<td style="color:white;font-size:13px;background-color:#3f3fdd;padding:5px 5px 5px 10px;">“Global Sourcing – Global Servicing” Pharmaceuticals Marketplace</td></tr>

<tr>

<td style="color:white;font-size:13px;background-color:#3f3fdd;padding:5px 5px 5px 10px;">Midland Avenue, Scarborough, Ontario M1K4H2, Canada<br aria-hidden="true">

Multifield Plaza, 3 Prat Avenue, TST, Kowloon, Hong Kong</td></tr>

<tr>

<td style="color:white;font-size:13px;background:;padding:5px 5px 5px 10px;">WhatsApp Messaging No. : 911-Global-Meds-logo.webp <br aria-hidden="true">

Email :&nbsp;<span style="color:white;"><a style="color:white;"> WeCare@911GlobalMeds.com</a></span></td></tr> --}}</tbody></table></td></tr></tbody>

       





       </div>



	</div>



</body>

</html>