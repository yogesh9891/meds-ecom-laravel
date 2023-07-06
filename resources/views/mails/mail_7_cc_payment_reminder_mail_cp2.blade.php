<!DOCTYPE html>

<html>

<head>

	<title></title>

</head>

<body>



	<div>

		<table width='600px' border='0' cellspacing='0' cellpadding='0' bgcolor='#3f3fdd' style='font-family:Arial, Helvetica, sans-serif; font-size:13px;border-radius:8px;border-radius:8px;background: linear-gradient(90deg, rgba(138, 136, 136,1) 0%, rgb(243, 176, 195,1) 100%);border-radius:8px'><tr> <td style='padding:10px;'> 



<tbody><tr>

<td style="padding:10px;"><table width="95%" cellspacing="0" cellpadding="0" border="0">

<tbody><tr>

<td style="width:50%;"><a href="{{ url('/') }}"  ><img  src="{{ asset('/img/911-Global-Meds-logo.webp') }}" style="width:180px;border-radius: 4px;;"></a> </td>

<td style="width:50%;" align="right"><p style="font-size: 14px;">911globalmeds.com 💊 Cares for You !</p></td></tr></tbody></table></td></tr>

<tr>

<td style="padding:10px;"><table width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="white" style="border-radius:8px;">

<tbody><tr>

<td style="color:black;font-size:13px;padding:5px 5px 5px 10px;"><b>      

        Dear  {{$summary->c_14_10_payer_full_name}}

                        @if($summary->c_14_19_patient_name)

           / {{$summary->c_14_19_patient_name}} c/o {{$summary->c_14_22_parcel_receivers_full_name}} <br>

            @endif </b>

    </td>

  </tr>

<tr>

<td style="color:black;font-size:13px;padding:5px 5px 5px 10px;">This is a humble reminder to you to make the Credit Card payment for your <a href="{{route('order.invoice',$summary->c_14_7_order_invoice_url)}}" target="_blank" ><b>Order No. </b>{{$summary->c_14_2_online_invoice_no}}</a> dated  {{$summary->created_at->timezone('Asia/Kolkata')->format('d M,Y')}} for :<br aria-hidden="true">



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

to be shipped to {{ $summary->c_14_29_receiver_country }} . <br aria-hidden="true"> <br aria-hidden="true">





<tr>

<td style="padding:0px 10px;">

            <p> You can pay <strong><span style="color: #3f3fdd">USD {{round($summary->c_14_84_total_amount)}}</span></strong>- by clicking on the Credit Card payment link below:</p>

             <strong> <p class="mb-5"><a class="wordbreak fw-600 text-underline blue-text" target="_blank"  href="{{ $summary->c_14_92_cc_request_link }}" target="_blank">{{ $summary->c_14_92_cc_request_link }}</a></p></strong>

              <p><strong>NOTE : All Order related reference details have been filled by us in the Payment Request as</strong></p>

              <p style="color: #3f3fdd;font-weight:bold;">{{$summary->c_14_86_cc_name}} : Pay for Order no. {{ $summary->c_14_2_online_invoice_no }}</p>

                    <p><strong>and so <span class="red-text" style="color: red;">please fill ONLY YOUR CREDIT CARD DETAILS <font color="red"> and </font> NOTHING ELSE</span> in the above payment link.</strong></p>

              <p>Do share a screenshot once you have made the payment.</p>

      

</td>

</tr>





<tr>

<td style="padding:0px 10px;">        <p>Your ordered drugs shall be shipped by a Trackable courier service on receipt of funds into our Card account.</p>

<i style="font-size:12px;">( Purchase & Medical Undertaking, Disclaimer , Terms & Conditions, Payments Policy ,Shipping Policy , Cancellations, Returns & Refunds Policy, Privacy Policy & Prescription Provision Undertaking read and accepted by payer/parcel receiver vide the above referred Invoice link and information / links therein ** copy of the Doctor’s Prescription required for patient use orders *** normally no Customs Duty is levied on low value parcels but if levied, it is payable by the parcel receiver ).</i> <br aria-hidden="true"> </td></tr>

<tr>

<td style="padding:10px;"><span style="color:#3f3fdd;font-weight:bold;">You may contact Emily or Jack at WeCare@911GlobalMeds.com for any further clarification.</span><br aria-hidden="true">

<br aria-hidden="true">

Best Regards &amp; Have a good day.<br aria-hidden="true">

Administrator <br aria-hidden="true">

<a href="{{ url('/') }}" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="5">www.911GlobalMeds.com </a></td></tr>

<tr>

<td style="padding:5px 10px;">Email / WhatsApp: 24 hours a day, anyday ! <br  aria-hidden="true">

{{-- <span style="color:#3f3fdd;">Call 1.30 pm to 5.00 pm(HK time) </span><br aria-hidden="true">

<span style="color:#3f3fdd;">Email 10.30 am to 10.30 pm(HK time) </span></td></tr> --}}

<tr>



<td style="color:white;font-size:13px;border-radius:8px;border-radius:8px;background: linear-gradient(90deg, rgba(138, 136, 136,1) 0%, rgb(243, 176, 195,1) 100%);border-radius:8px;">

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