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

          Dear   {{$summary->c_14_10_payer_full_name}}

                        @if($summary->c_14_19_patient_name)

           / {{$summary->c_14_19_patient_name}} c/o {{$summary->c_14_22_parcel_receivers_full_name}} <br>

            @endif </b>

    </td>

  </tr>

<tr>

<td style="color:black;font-size:13px;padding:5px 5px 5px 10px;">

A medicines supply was <a href="{{$summary->c_14_118_tracking_url}}" target="_blank" >successfully delivered</a> to you in {{ $summary->c_14_29_receiver_country }} on  {{ date_format(date_create($summary->c_14_115_parcel_shipment_date),"d M, Y") }}  for: <br aria-hidden="true">





<table style="font-size:13px;font-family:Arial,Helvetica,sans-serif;border:1px solid black;" width="100%" cellspacing="0" cellpadding="3" border="1">

<tbody>

            <tr>

          <td>Packs x Quantity</td>

          <td>Drug Details</td>

          </tr>

          @php $total = 0;  @endphp

                 @if($summary->order_details)

                @foreach($summary->order_details as $order_detail)

        <tr style="border:1px solid black;">

        <td>{{$order_detail->c_14_36_quantity_pack}} {{$order_detail->c_14_40_medicine_form}} x {{$order_detail->c_14_39_total_quantity}}</td>

        <td>

          {{ $order_detail->c_14_35_description }}

        </td>

        </tr>

        @endforeach

        @endif



</tbody></table>



against your  <a href="{{route('order.invoice',$summary->c_14_7_order_invoice_url)}}" target="_blank" ><b>Order No. </b>{{$summary->c_14_2_online_invoice_no}}</a> dated  {{ $summary->created_at->format('d M, Y') }} :<br aria-hidden="true">





<tr>

<td style="padding:0px 10px;">

  <p><strong>A Refill Reminder request was required to be sent to be sent to you after {{ $summary->c_14_85_refil_after_days }}  days and so its high time for you to order the medicines refill, if so required. </strong></p>

 <p>Do inform if any changes are required in the <a href="{{route('order.invoice',$summary->c_14_7_order_invoice_url)}}" target="_blank" > previous order </a> and we will get a repeat order created for you.</p>

  </td></tr>

<tr>

<td style="padding:10px;"><span style="color:#3f3fdd;font-weight:bold;">You may contact Emily or Jack at WeCare@911GlobalMeds.com for any further medication requirements.</span><br aria-hidden="true">

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

<td style="color:white;font-size:13px;background:;padding:5px 5px 5px 10px;">WhatsApp Messaging No. : +1 (567) 252-7545 <br aria-hidden="true">

Email :&nbsp;<span style="color:white;"><a style="color:white;"> WeCare@911GlobalMeds.com</a></span></td></tr> --}}</tbody></table></td></tr></tbody>

       





       </div>



  </div>



</body>

</html>