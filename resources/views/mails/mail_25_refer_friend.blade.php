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
Dear {{$user->name}}<br aria-hidden="true">
Greetings,<br aria-hidden="true"><br>
We thank you for your satisfaction with our medications & personalized purchase service and are <strong> happy to offer you our REFER-A-FRIEND – Discounts & Cash-Back Benefits Program.</strong>

<p>
	<img src="{{ asset('img/refer-a-friend-1.webp') }}" width="100%"><br><br>

You may LogIn on <a href="{{ url('refer-a-friend/'.$user->wallet_id) }}">{{ url('refer-a-friend/'.$user->wallet_id) }}</a> and offer the listed Promo Code to your friends and relatives.

	<div>
	<img src="{{ asset('img/refer-a-friend-2.webp') }}" width="35%"><br><br>
	</div>
 For every Promo Code used by your friends or relatives,
<strong>they get a USD 25 discount</strong> on their purchases and,
<strong>you get a 2.5% Discount on their Order Values </strong> added to your Wallet.
<br><br>
The Wallet Amount can be deducted by you from any of your future orders.
<br><br>

<span style="color:#3f3fdd;font-weight:bold;">You may contact Emily or Jack at WeCare@911GlobalMeds.com for any further clarification.</span><br>

</p>

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

<td style="padding:10px;">
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