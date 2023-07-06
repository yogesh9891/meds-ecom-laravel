<!DOCTYPE html>

<html>

<head>

  <title></title>

</head>

<body>

                         

  <div>

    <table width='600px' border='0' cellspacing='0' cellpadding='0' bgcolor='#3f3fdd' style='font-family:Arial, Helvetica, sans-serif; font-size:13px;border-radius:8px;border-radius:8px;background: linear-gradient(90deg, rgba(138, 136, 136,1) 0%, rgb(236, 213, 227,1) 100%)'><tr> <td style='padding:10px;'> 



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

<td style="color:black;font-size:13px;padding:5px 5px 5px 10px;">As a humble reminder to you to make a Bank Transfer payment for your <a href="{{route('order.invoice',$summary->c_14_7_order_invoice_url)}}" target="_blank" ><b>Order No. </b>{{$summary->c_14_2_online_invoice_no}}</a> dated  {{$summary->created_at->timezone('Asia/Kolkata')->format('d M, Y')}} for :<br aria-hidden="true">



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

to be shipped to {{ $summary->c_14_29_receiver_country }} , <br aria-hidden="true">



<tr><td style="padding:5px 5px 5px 10px;">

<span >you can <strong>make a Bank Transfer / Online Transfer of</strong> <span style="color: #3f3fdd">{{ $summary->c_14_94_forex_currency }} {{ round($summary->c_14_95_amount) }}*</span> into our bank account, details as mentioned on the <a href="{{route('order.invoice',$summary->c_14_7_order_invoice_url)}}" target="_blank" ><b>Invoice No. </b>{{$summary->c_14_2_online_invoice_no}}</a> </span></td></tr>



  {{-- <tr>

<td  style="padding:5px 5px 5px 10px;">*as per our bank’s forex conversion rate, <span style="color: #3f3fdd">{{ $summary->c_14_94_forex_currency }}  {{round($summary->c_14_95_amount)}}</span>  gets us <span style="color: #3f3fdd"> USD {{round($summary->c_14_84_total_amount)}}</span> only.<br aria-hidden="true">

</td>

</tr>

<tr>

<td style="color:#3f3fdd;font-size:14px;padding-left:10px;">**Beneficiary / Receiver Details : </td></tr>

<tr>

<td style="padding:10px;"><table style="font-size:13px;font-family:Arial;line-height:20px;" width="100%" cellspacing="0" cellpadding="0" border="0">

<tbody>

  <tr>

<td colspan="2" style="font-style:italic;">Due to Tax Exemption reasons,&nbsp;<span style="text-decoration:underline;"> no payment will be accepted from any Hong Kong or Canada Bank.</span><br aria-hidden="true">Such payment will be returned at the expense and cost of the sender.<br aria-hidden="true"><br>

</td>

</tr>           

                    @if($summary->bank_account_name)

                      <tr>

                      <th align="left" scope="col" style="padding:5px 5px 5px 5px;border-top: solid 1px #000;border-right: solid 1px #000;border-bottom: solid 1px #000;border-left: solid 1px #000;width:25%;font-weight:normal;">Account Name</th>

                      <th align="left" scope="col" style="padding:5px 5px 5px 5px;border-top: solid 1px #000;border-right: solid 1px #000;border-bottom: solid 1px #000;border-left: solid 0px #000;width:75%;border-radius: 4px;;font-weight:normal;">{{$summary->bank_account_name ?? ''}} <br aria-hidden="true"><span style="color: #3f3fdd;">Mention EXACTLY and in FULL as above</span></th>

                    </tr>

                    @endif



                    @if($summary->bank_account_address)

                      <tr>

                      <td style="padding:5px 5px 5px 5px;border-top: solid 0px #000;border-right: solid 1px #000;border-bottom: solid 1px #000;border-left: solid 1px #000;">Address</td>

                      <td style="padding:5px 5px 5px 5px;border-top: solid 0px #000;border-right: solid 1px #000;border-bottom: solid 1px #000;border-left: solid 0px #000;">{{$summary->bank_account_address ?? ''}}</td>

                    </tr>

                    @endif

                    @if($summary->bank_name_location)

                    <tr>

                      <td style="padding:5px 5px 5px 5px;border-top: solid 0px #000;border-right: solid 1px #000;border-bottom: solid 1px #000;border-left: solid 1px #000;">Bank Name &amp; Location</td>

                      <td style="padding:5px 5px 5px 5px;border-top: solid 0px #000;border-right: solid 1px #000;border-bottom: solid 1px #000;border-left: solid 0px #000;">{{$summary->bank_name_location ?? ''}}</td>

                    </tr>

                       @endif

                    @if($summary->bank_branch_code)

                    <tr>

                      <td style="padding:5px 5px 5px 5px;border-top: solid 0px #000;border-right: solid 1px #000;border-bottom: solid 1px #000;border-left: solid 1px #000;">Bank / Branch code</td>

                      <td style="padding:5px 5px 5px 5px;border-top: solid 0px #000;border-right: solid 1px #000;border-bottom: solid 1px #000;border-left: solid 0px #000;">{{$summary->bank_branch_code ?? ''}}</td>

                    </tr>

                       @endif

                    @if($summary->account_type)



                      <tr>

                      <td style="padding:5px 5px 5px 5px;border-top: solid 0px #000;border-right: solid 1px #000;border-bottom: solid 1px #000;border-left: solid 1px #000;">Account Type</td>

                      <td style="padding:5px 5px 5px 5px;border-top: solid 0px #000;border-right: solid 1px #000;border-bottom: solid 1px #000;border-left: solid 0px #000;">{{$summary->account_type ?? ''}}</td>

                    </tr>

                       @endif

                    @if($summary->account_no)

                    <tr>

                      <td style="padding:5px 5px 5px 5px;border-top: solid 0px #000;border-right: solid 1px #000;border-bottom: solid 1px #000;border-left: solid 1px #000;">Account Number</td>

                      <td style="padding:5px 5px 5px 5px;border-top: solid 0px #000;border-right: solid 1px #000;border-bottom: solid 1px #000;border-left: solid 0px #000;">{{$summary->account_no ?? ''}}</td>

                    </tr>

                       @endif

                    @if($summary->bank_transfer_code)

                    <tr>

                      <td style="padding:5px 5px 5px 5px;border-top: solid 0px #000;border-right: solid 1px #000;border-bottom: solid 1px #000;border-left: solid 1px #000;">Bank Transfer code</td>

                      <td style="padding:5px 5px 5px 5px;border-top: solid 0px #000;border-right: solid 1px #000;border-bottom: solid 1px #000;border-left: solid 0px #000;">{{$summary->bank_transfer_code ?? ''}}</td>

                    </tr>

                       @endif

                    @if($summary->bank_email)

                      <tr>

                      <td style="padding:5px 5px 5px 5px;border-top: solid 0px #000;border-right: solid 1px #000;border-bottom: solid 1px #000;border-left: solid 1px #000;">Email for Bank Notification</td>

                      <td style="padding:5px 5px 5px 5px;border-top: solid 0px #000;border-right: solid 1px #000;border-bottom: solid 1px #000;border-left: solid 0px #000;">{{$summary->bank_email ?? ''}}</td>

                    </tr>

                       @endif

                    @if($summary->c_14_94_forex_currency)

                    <tr>

                      <td style="padding:5px 5px 5px 5px;border-top: solid 0px #000;border-right: solid 1px #000;border-bottom: solid 1px #000;border-left: solid 1px #000;">Amount</td>

                      <td style="padding:5px 5px 5px 5px;border-top: solid 0px #000;border-right: solid 1px #000;border-bottom: solid 1px #000;border-left: solid 0px #000;">{{$summary->c_14_94_forex_currency}}  {{ round($summary->c_14_95_amount) }}</td>

                    </tr>

                       @endif

                   

                    <tr>

                      <td style="padding:5px 5px 5px 5px;border-top: solid 0px #000;border-right: solid 1px #000;border-bottom: solid 1px #000;border-left: solid 1px #000;">Charges Instructions</td>

                      <td style="padding:5px 5px 5px 5px;border-top: solid 0px #000;border-right: solid 1px #000;border-bottom: solid 1px #000;border-left: solid 0px #000;">Bank Code - <b>OUR</b>  <br>- All Bank Charges are paid by the Sender of funds.

                  </td>

                    </tr>

                   

        



                      <tr>

                      <td style="padding:5px 5px 5px 5px;border-top: solid 0px #000;border-right: solid 1px #000;border-bottom: solid 1px #000;border-left: solid 1px #000;">Subject Reference</td>

                      <td style="padding:5px 5px 5px 5px;border-top: solid 0px #000;border-right: solid 1px #000;border-bottom: solid 1px #000;border-left: solid 0px #000;">Order Ref.:{{$summary->c_14_2_online_invoice_no}} (Pay Goods/Services)<br><span style="color: #3f3fdd">Mention EXACTLY as above.<br>STRICTLY NO OTHER WORDS PLEASE.</span>

                      </td>

                    </tr>



            <tr></tr></tbody></table></td></tr>



 --}}

<tr>

<td style="padding:0px 10px;"><b>Note : Please send a copy of the Bank Receipt &amp; SWIFT Wire MT-103 Message sent by your bank when you have made the online / wire transfer.</b> <br aria-hidden="true"> <b>This will also be required to track your funds in our bank's system</b><br><br>

Your ordered drugs shall be shipped by a Trackable courier service on receipt of funds into our bank account.</td></tr>





<tr>

<td style="padding:0px 10px;">

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



<td style="color:white;font-size:13px;border-radius:8px;border-radius:8px;background: linear-gradient(90deg, rgba(138, 136, 136,1) 0%, rgb(236, 213, 227,1) 100%);">

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