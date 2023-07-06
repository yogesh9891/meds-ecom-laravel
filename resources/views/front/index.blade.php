@extends('layouts.front')
@section('seo_section')
    <title>{{ $homeSeo->c_3_6_3_meta_title ?? '' }}</title>
    <!-- META TAGS -->

    <meta id="MetaDesc" name="description" itemprop="" property=""
        content="{{ $homeSeo->c_3_6_4_meta_description ?? '' }}" />
    <meta name="keywords" content="{{ $homeSeo->c_3_6_5_meta_keyword ?? '' }}" />
    <meta name="geo.placename" content="{{ $homeSeo->c_3_6_9_country ?? '' }}" />
    <link rel="canonical" href="{{ url('/') }}" />
    <meta id="Language" name="language" content="{{ $homeSeo->c_3_6_8_language ?? '' }}" />
    <meta id="Country" name="Country" content="{{ $homeSeo->c_3_6_9_country ?? '' }}" />
    <meta id="Distribution" name="distribution" content="{{ $homeSeo->c_3_6_10_distribution ?? '' }}" />
    <meta id="Author" content="{{ $homeSeo->c_3_6_11_author ?? '' }}" name="Author" />
    <meta name="robots" content="{{ $homeSeo->c_3_6_12_robots ?? '' }}" />
    <meta id="RevisitAfter" name="revisit-after" content="{{ $homeSeo->c_3_6_13_revisit_after ?? '' }}" />

    <script type="application/ld+json">
    {"@context":"http:\/\/schema.org","@type":"Pharmacy","name":"911GlobalMeds","description":"911GlobalMeds is a reputable &amp; reliable Canadian &amp; International Online Pharmacy Marketplace to buy FDA Approved Global Meds - Drugs &amp; Medications - directly from top-class Canadian Online Pharmacies and other Legal International Pharmacies of Australia, India, New Zealand, European Union, Switzerland, Singapore, USA, and Turkey.","openingHours":"Mo,Tu,We,Th,Fr,Sa 00:00-24:00","email":"WeCare@911GlobalMeds.com","telephone":"1-567-252-7545","image":"https://www.911globalmeds.com/img/911-Global-Meds-logo.webp","url":"https://www.911globalmeds.com/","priceRange":"$$","address":{"@type":"PostalAddress","addressLocality":"Toronto","addressRegion":"Ontario","addressCountry":"CA","postalCode":"M2N 6S3","streetAddress":"1145/9 Midland Avenue"}} "aggregateRating": {
        "@type": "AggregateRating","ratingValue": "{{ $homeSeo->c_3_6_14_rating_value ?? '93' }}","reviewCount": "{{ $homeSeo->c_3_6_15_rating_count ?? '686' }}"),
//]]></script>
@endsection
@section('content')

    <section class="banner-slide">
        <div class="main-banner">
            <div class="banner-search">
                <div class="custom-search">
                    <form class="search-form ">
                        <div class="input-group">
                            <input type="text" class="form-control" id="banner_search"
                                placeholder="Search by Brand or Generic Name" />

                            <span class="input-group-btn">
                                <button name="submit" id="submit" type="submit" class="btn-primary btn btn-1">
                                    <span class="fa fa-search font18">.</span></button>
                            </span>

                        </div>
                        <div class="slidesearch" id="banner_result">
                            
                        </div>
                    </form>
                </div>
            </div>
            <div class="owl-carousel banner-slider owl-theme">

                @foreach ($homeHeaders as $homeHeader)
                    <div class="slide leftText"
                        style="background:url('{{ asset('img/' . $homeHeader->c_3_1_2_image_name) }}') top right;">
                        <div class="slideoverlay"></div>
                        <div class="slide-txt">
                            <div class="blue-text text-center banner-heading"><a
                                    href="{{ $homeHeader->c_3_1_6_url_to_open }}"
                                    style="color:{{ $homeHeader->c_3_1_5_text_color }}; text-shadow: 2px 2px 5px white;"
                                    target="_blank">{{ $homeHeader->c_3_1_4_message_on_image }}</a></div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <section class="client-logo">
        <div class="client-container">
            <div class="container">
                <div class="owl-carousel default-slider logo-slider owl-theme">
                    <div class="logo-slide">
                        <a href="{{ asset('img/911_global_meds_com_Ad_Full_1_US_Ryan_Haight_Online_Pharmacy_Consumer_Protection_Act_of_2008.webp') }}"
                            data-fancybox
                            data-caption="911-global-Meds-com-Ad-US-Ryan-Haight-Online-Pharmacy-Consumer-Protection-Act-of-2008">
                            <img  class="lazy"  data-original="{{ asset('img/911-global-meds-com-Icon-1-US-Ryan-Haight-Online-Pharmacy-Consumer-Protection-Act-of-2008.webp') }}"
                               alt="911-global-Meds-com-Ad-US-Ryan-Haight-Online-Pharmacy-Consumer-Protection-Act-of-2008" />
                        </a>
                    </div>
                    <div class="logo-slide">
                        <a href="{{ asset('img/911-global-meds-com-Ad-Full-2-Genuine-Drugs-Canada-Global-Pharmacy-Marketplace.webp') }}"
                            data-fancybox
                            data-caption="911-global-Meds-com-Ad-Genuine-Drugs-Canada-Global-Pharmacy-Marketplace">
                            <img  class="lazy"  data-original="{{ asset('img/911-global-meds-com-Icon-2-Genuine-Drugs-Canada-Global-Pharmacy-Marketplace.webp') }}"
                               alt="911-global-Meds-com-Ad-Genuine-Drugs-Canada-Global-Pharmacy-Marketplace" />
                        </a>
                    </div>
                    <div class="logo-slide">
                        <a href="{{ asset('img/911-global-meds-com-Ad-Full-3-Genuine-Drugs-5-times-Money-Back-Guarantee-Canada-Global-Pharmacy.webp') }}"
                            data-fancybox
                            data-caption="911-global-Meds-com-Ad-Genuine-Drugs-5-times-Money-Back-Guarantee-Canada-Global-Pharmacy">
                            <img  class="lazy"  data-original="{{ asset('img/911-global-meds-com-Icon-3-Genuine-Drugs-5-times-Money-Back-Guarantee-Canada-Global-Pharmacy.webp') }}"
                               alt="911-global-Meds-com-Ad-Genuine-Drugs-5-times-Money-Back-Guarantee-Canada-Global-Pharmacy" />
                        </a>
                    </div>
                    <div class="logo-slide">
                        <a href="{{ asset('img/911-global-meds-com-Ad-Full-4-Lowest-Price-Guarantee-Online-Canada-Global-Pharmacy-Marketplace.webp') }}"
                            data-fancybox
                            data-caption="911-global-Meds-com-Ad-Lowest-Price-Guarantee-Online-Canada-Global-Pharmacy-Marketplace">
                            <img  class="lazy"  data-original="{{ asset('img/911-global-meds-com-Icon-4-Lowest-Price-Guarantee-Online-Canada-Global-Pharmacy-Marketplace.webp') }}"
                               alt="911-global-Meds-com-Ad-Lowest-Price-Guarantee-Online-Canada-Global-Pharmacy-Marketplace" />
                        </a>
                    </div>
                    <div class="logo-slide">
                        <a href="{{ asset('img/911-global-meds-com-Ad-Full-5-Genuine-Authentic-Drugs-Guaranteed-Canada-Global-Pharmacy.webp') }}"
                            data-fancybox
                            data-caption="911-global-Meds-com-Ad-Genuine-Authentic-Drugs-Guaranteed-Canada-Global-Pharmacy">
                            <img  class="lazy"  data-original="{{ asset('img/911-global-meds-com-Icon-5-Genuine-Authentic-Drugs-Guaranteed-Canada-Global-Pharmacy.webp') }}"
                               alt="911-global-Meds-com-Ad-Genuine-Authentic-Drugs-Guaranteed-Canada-Global-Pharmacy" />
                        </a>
                    </div>
                    <div class="logo-slide">
                        <a href="{{ asset('img/911-global-meds-com-Ad-Full-6-Canada-Global-Pharmacy-Customs-Cleared-Parcel-Delivery-Guaranteed.webp') }}"
                            data-fancybox
                            data-caption="911-global-Meds-com-Ad-Canada-Global-Pharmacy-Customs-Cleared-Parcel-Delivery-Guaranteed">
                            <img  class="lazy"  data-original="{{ asset('img/911-global-meds-com-Icon-6-Canada-Global-Pharmacy-Customs-Cleared-Parcel-Delivery-Guaranteed.webp') }}"
                               alt="911-global-Meds-com-Ad-Genuine-Authentic-Drugs-Guaranteed-Canada-Global-Pharmacy" />
                        </a>
                    </div>
                    <div class="logo-slide">
                        <a href="{{ asset('img/911-global-meds-com-Ad-Full-7-Cyber-Secure-Online-Canada-Global-Pharmacy-Marketplace.webp') }}"
                            data-fancybox
                            data-caption="911-global-Meds-com-Ad-Cyber-Secure-Online-Canada-Global-Pharmacy-Marketplace">
                            <img  class="lazy"  data-original="{{ asset('img/911-global-meds-com-Icon-7-Cyber-Secure-Online-Canada-Global-Pharmacy-Marketplace.webp') }}"
                               alt="911-global-Meds-com-Ad-Cyber-Secure-Online-Canada-Global-Pharmacy-Marketplace" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-4 pb-0">
        <div class="container">
            <div class="row">


                <div class="col-lg-8 col-sm-12">
                    <div class="common-heading text-center mb-4">
                        <div class="font30 green-text text-center mb-1">Welcome to 911GlobalMeds.com:</div>
                        <h1 class="font30 green-text text-center mb-3">{{ $mainBody->c_3_2_1_h1_title_in_green }}</h1>
                        <h2 class="font20 blue-text text-center dpnd">
                            <strong>{{ $mainBody->c_3_2_3_h2_blue_line_1 }}</strong></h2>
                    </div>
                    <div class="dpnd">
                        <p>{!! $mainBody->c_3_2_4_text_below_blue_1 !!}</p>
                     {{--   <div class="alphabrand">
                            <h3>Generic Names Drugs List :</h3>
                            <p>The list of all Generic Drugs available for sale online may be seen by clicking on any of the
                                letters below :</p>
                            <div class="alphalist">
                                <div class="seelist-alphabet">
                                    <div class="atoztabbing" id="accordion">
                                        <div class="atoztabbing-inner">
                                            @foreach ($all_medcines as $key => $alphabet)
                                                <div class="alpha-card" id="a-heading">
                                                    <a href="#" data-toggle="collapse"
                                                        data-target="#genric{{ $key }}-collapse"
                                                        aria-expanded="false" aria-controls="a-collapse">
                                                        {{ $key }}
                                                    </a>
                                                </div>
                                            @endforeach

                                        </div>

                                        <div class="atoztabbing-content all-alphabetsContent">
                                            @foreach ($all_medcines as $key => $alphabet)
                                                <div id="genric{{ $key }}-collapse" class="collapse"
                                                    aria-labelledby="{{ $key }}-heading"
                                                    data-parent="#accordion">
                                                    <div class="card-body">
                                                        <div class="showAll">
                                                            <ul>
                                                                @foreach ($alphabet as $alpha_medcine)
                                                                    <li>
                                                                        <a href="{{ url('/' . $alpha_medcine['frontend_url'] ?? 'url') }}"  target="_blank">{{ $alpha_medcine['generic_name'] ?? '' }}</a>
                                                                    </li>
                                                                @endforeach

                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <div class="main-heading-content-block mb-3">
                            <h2 class="font20 blue-text"><strong>{{ $mainBody->c_3_2_5_h2_blue_line_2 }}</strong></h2>
                            <p>{!! $mainBody->c_3_2_6_text_below_blue_2 !!}</p>
                            <div class="alphabrand">
                                {{-- <h3>Brand Names Drugs List :</h3>

                            <div class="alphalist">
                                    <p>The list of all Brand Drugs and / or their Generic Equivalents available for sale
                                        online may be seen by clicking on any of the letters below :</p>
                                    <div class="seelist-alphabet">
                                        <div class="atoztabbing" id="accordion-generic-drugs">
                                            <div class="atoztabbing-inner">
                                                @foreach ($genric_medcines as $key => $alphabet1)
                                                    <div class="alpha-card" id="a-heading">
                                                        <a href="#"  data-toggle="collapse"
                                                            data-target="#other{{ $key }}-collapse"
                                                            aria-expanded="false"
                                                            aria-controls="{{ $key }}-collapse">
                                                            {{ $key }}
                                                        </a>
                                                    </div>
                                                @endforeach

                                            </div>


                                            <div class="atoztabbing-content all-alphabetsContent">
                                                @foreach ($genric_medcines as $key => $alphabet1)
                                                @if(!empty($key))
                                                    <div id="other{{ $key }}-collapse" class="collapse"
                                                        aria-labelledby="a-heading"
                                                        data-parent="#accordion-generic-drugs">
                                                        <div class="card-body {{ $key }}">
                                                            <div class="showAll">
                                                                <ul>
                                                                    @foreach ($alphabet1 as $alpha_medcine1)
                                                                        <li>
                                                                            <a href="{{ url('/' . $alpha_medcine1['frontend_url'] ?? 'url') }}" target="_blank">{{ $alpha_medcine1['other_names'] ?? '' }}</a>
                                                                        </li>
                                                                    @endforeach

                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endif
                                                @endforeach


                                            </div>

                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                            <h2 class="font20 blue-text"><strong>{{ $mainBody->c_3_2_7_h2_blue_line_3 }}</strong></h2>
                            <p>{!! $mainBody->c_3_2_8_text_below_blue_3 !!}</p>
                            <div class="text-center mt-3">
                                <a class="seebtn common-btn yellow-bg" href="#seefaq">See More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-12">
                    @include('front.partial.sidebar')
                </div>
            </div>
    </section>

    <section class="diseases-tabs">
        <div class="container">
            <div class="big-text text-upper font30 text-center mt-3">Brand & Generic Medications For</div>
            <div class="tabbing-wrap">
                <div class="main-tabs">
                    <ul class="nav nav-tabs" id="tablist-home" role="list">
                        <li class="nav-item" role="none">
                            <a class="nav-link active" id="general-diseases-tab" data-toggle="tab"
                                href="#general-diseases" role="none"
                                >GENERAL DISEASES <span>(<i class="fa fa-plus"></i><i
                                        class="fa fa-minus"></i>)</span></a>
                        </li>
                        <li class="nav-item" role="none">
                            <a class="nav-link" id="critical-diseases-tab" data-toggle="tab" href="#critical-diseases"
                                role="none" >CANCER DISEASES
                                <span>(<i class="fa fa-plus"></i><i class="fa fa-minus"></i>)</span></a>
                        </li>
                    </ul>
                </div>
                <div class="main-tabs-content">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="general-diseases" role="tabpanel"
                            aria-labelledby="general-diseases-tab">
                            <div class="diseases-list">
                                <div class="row">
                                    @foreach ($HomeGeneralDiseases->sortBy('c_3_3_2_general_disease') as $HomeGeneralDisease)
                                        <div class="col-lg-3 col-md-4 col-sm-6">
                                            <div class="health-main" onclick="diseaseShowHide(this)">
                                                <div class="health-box">
                                                    <div class="img-health">
                                                        <img  class="lazy"  data-original="{{ asset('img-di/' . $HomeGeneralDisease->c_3_3_3_image) }}"
                                                           alt="{{ $HomeGeneralDisease->c_3_3_4_image_alt_tag }}">
                                                    </div>
                                                    <div class="bottom-text">
                                                        <div class="disease-heading">
                                                            {{ $HomeGeneralDisease->c_3_3_2_general_disease }}</div>
                                                    </div>
                                                </div>
                                                <div class="sub-disease-name">
                                                    <div class="inner-disease">

                                                        <p><a href="{{ $HomeGeneralDisease->si_source_url ?? '#' }}" target="_blank">About {{ $HomeGeneralDisease->c_3_3_2_general_disease }} : </a> {!! $HomeGeneralDisease->c_3_3_5_disease_information !!}
                                                        </p>
                                                      <ul>
                                                            @foreach ($HomeGeneralDisease->generic_medicines->sortBy('generic_medcine_info.c_1_1_7_name_in_home_diseases') as $general_medicine)
                                                                @if ($general_medicine->generic_medcine_info)
                                                                    <li><a href="{{ route('medication', $general_medicine->generic_medcine_info->c_1_1_4_frontend_url) }}" >{{ $general_medicine->generic_medcine_info->c_1_1_7_name_in_home_diseases }}</a>
                                                                    </li>
                                                                @endif
                                                            @endforeach


                                                        </ul> 
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    @endforeach


                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="critical-diseases" role="tabpanel"
                            aria-labelledby="critical-diseases-tab">
                            <div class="diseases-list critical-diseases">
                                <div class="row">

                                    @foreach ($HomeCriticalDiseases->sortBy('c_3_4_2_critical_disease') as $HomeCriticallDisease)
                                        <div class="col-lg-3 col-md-4 col-sm-6">
                                            <div class="health-main" onclick="diseaseShowHide(this)">
                                                <div class="health-box">
                                                    <div class="img-health">
                                                        <img  class="lazy"  data-original="{{ asset('img-di/' . $HomeCriticallDisease->c_3_4_3_image) }}"
                                                            alt="{{ $HomeCriticallDisease->c_3_4_4_image_alt_tag }}">
                                                    </div>
                                                    <div class="bottom-text">
                                                        <div class="disease-heading">
                                                            {{ $HomeCriticallDisease->c_3_4_2_critical_disease }}</div>
                                                    </div>
                                                </div>
                                                <div class="sub-disease-name">
                                                    <div class="inner-disease">

                                                        <p><a href="{{ $HomeCriticallDisease->si_source_url ?? '#' }}" target="_blank">About {{ $HomeCriticallDisease->c_3_4_2_critical_disease }} : </a></strong>{!! $HomeCriticallDisease->c_3_4_5_disease_information !!}
                                                        </p>
                                                        <ul>
                                                            @foreach ($HomeCriticallDisease->crtical_medicines->sortBy('generic_medcine_info.c_1_1_7_name_in_home_diseases') as $crtical_medicine)
                                                                @if ($crtical_medicine->generic_medcine_info)
                                                                    <li><a href="{{ route('medication', $crtical_medicine->generic_medcine_info->c_1_1_4_frontend_url) }}">{{ $crtical_medicine->generic_medcine_info->c_1_1_7_name_in_home_diseases }}</a>
                                                                    </li>
                                                                @endif
                                                            @endforeach 

                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    @endforeach



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="main-accordion">
        <div class="container">

            <div class="row">
                <div class="col-md-8">
                    <h2 class="font20 green-text">
                        <strong>{{ $mainBody->c_3_2_2_qa_h2_green_title }}</strong>
                    </h2>
                    <div class="accordion-wrap">
                        <div class="accordion" id="accordion">
                            @foreach ($homeQas as $homeQa)
                                <div class="card">
                                    <div class="card-header" id="headingOne{{$homeQa->id}}">
                                        <h3 class="mb-0">
                                            <button class="btn btn-link" type="button" data-toggle="collapse"
                                                data-target="#collapseOne-{{ $homeQa->id }}" aria-expanded="false"
                                                aria-controls="collapseOne">
                                                {{ $homeQa->c_3_5_2_question }}<span><i class="fa fa-plus"></i></span>
                                            </button>
                                        </h3>
                                    </div>
                                    <div id="collapseOne-{{ $homeQa->id }}" class="collapse"
                                        aria-labelledby="headingOne{{$homeQa->id}}" data-parent="#accordion">
                                        <div class="card-body">
                                            {!! $homeQa->c_3_5_3_answer !!}
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="parallex-banner" id="seefaq">
                        <div class="parallex-banner-container">
                            <div class="parallex-banner-inner full-parallex text-center">
                                <div class="parallex-banner-image"><a href="info/Brand-vs-Generic-Drugs-Comparison.pdf"
                                        target="_blank"><img
                                             class="lazy"  data-original="{{ asset('img/Brand-vs-Generic-Drugs-Information.webp') }}"
                                            alt="Brand vs Generic Drugs Information"></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar">
                        <div class="mainsidebar mt-4 latestnews">
                            <h2 class="sidebar-heading"><span class="rounded-circle"><i
                                        class="fa fa-pencil-square-o text-dark" aria-hidden="true"></i> </span><a
                                    href="{{ route('latest_blog') }}" target="_blank">LATEST BLOGS & NEWS</a> <a
                                    href="{{ route('latest_blog') }}" target="_blank"
                                    class="font14 text-underline float-right v-link-b">View all</a></h2>
                            <div class="custom-scroll">
                                <div class="content mCustomScrollbar">
                                    <ul>
                                        @foreach ($blognews as $single_blog)
                                            <li> <a href="{{ route('indivisual_blog', $single_blog->page_url_name) }}"
                                                        target="_blank"><img  class="lazy"  data-original="{{ asset('img-bl/' . $single_blog->image_icon) }}"
                                                            alt="{{ $single_blog->image_icon_alt_tag }}" /></a>

                                             {{--    <div class="leftImg">
                                                    <a href="{{ route('indivisual_blog', $single_blog->page_url_name) }}"
                                                        target="_blank"><img
                                                             class="lazy"  data-original="{{ asset('img-bl/' . $single_blog->image_icon) }}"
                                                            alt="{{ $single_blog->image_icon_alt_tag }}" /></a>
                                                </div>
                                                <div class="rightTxt clearfix">
                                                    <p><a href="{{ route('indivisual_blog', $single_blog->page_url_name) }}"
                                                            target="_blank">{{ substr($single_blog->blog_title_h1, 0, 65) }}</a>
                                                    </p>
                                                </div> --}}
                                            </li>
                                        @endforeach


                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <div class="container">
        <div class="contactus">
            <form method="post" class="mt-5" id="contactQueryForm">
                @csrf
                <div class="fieldset">
                    <div class="legend">Contact Us Form</div>
                    <div class="fielsmend">All fields are mandatory <span class="astrik">*</span> </div>
                    <div class="text-danger hide-block" id="query-error4"></div>

                    <div class="row">
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <label>Your Full Name<span class="error">*</span></label>
                                <input type="text" id="full_name" name="full_name" class="form-control Cfield"
                                    placeholder="Your Full Name" required="" onkeyup="nameValidation(this)"
                                    maxlength="30">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <label>Your Email<span class="error">*</span></label>
                                <input type="email" id="email" name="email" class="form-control Cfield"
                                    placeholder="Your Email" required="" maxlength="50"
                                    onchange="emailValidation(this)">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">

                                <label>Your Country<span class="error">*</span></label>
                                <input class="form-control Cfield" id="country" name="country" type="text"
                                    placeholder="Your Country" required="" onkeyup="nameValidation(this)"
                                    maxlength="30">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <label>ISD Code – Contact no.<span class="error">*</span></label>
                                <input class="form-control Cfield" id="contact_no" name="contact_no" type="tel"
                                    placeholder="Your Mobile / Whatsapp No." required=""
                                    onkeyup="phoneValidation(this)" minlength="7" maxlength="20">
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-12">
                            <div class="form-group">
                                <label>Your Message<span class="error">*</span></label>
                                <textarea name="message" maxlength="250" id="message" title="Comment" class="form-control Cfield" cols="5"
                                    rows="3" placeholder="Your Message" required="" onkeyup="messageValidation(this)"></textarea>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                                   <label>Enter Characters as displayed in image</label>
                                    <div class="captcha">
                                          <button type="button" class="btn btn-danger  reloadBtn" id="reload">
                                            &#x21bb;
                                        </button>
                                     
                                        <span class="span">{!! captcha_img('flat') !!}</span></br>
                                    <input id="captcha" type="text" class="form-control mt-3" placeholder="Enter Characters as displayed in image" name="captcha">
                                        
                            <button type="submit" id="query_submit3" class="btn nobtn green-bg lg-btn mt-3">Send
                                Message</button>
                        </div>
                        <div class="col-md-4 col-sm-12">

                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="alphnumber">
        <div class="container">
            <div class="alphabrand-wrap">
                {{-- <div class="alphabrand">
            <h3>Brand & Generic Drugs List :</h3>
            <p>The list of all Generic Drugs available for sale online may be seen by clicking on any of the letters below :</p>
            <div class="alphalist">
                <div class="seelist-alphabet">
                    <div class="atoztabbing" id="accordion">
                        <div class="atoztabbing-inner">
                            @foreach ($all_medcines as $key => $alphabet)
                            <div class="alpha-card" id="a-heading">
                                <a data-toggle="collapse" data-target="#genric{{ $key }}-collapse" aria-expanded="false" aria-controls="a-collapse">
                                  {{ $key }}
                                </a>
                            </div>
                            @endforeach
                            
                        </div>
                      
                      <!--Tabbing Details--->
                      <div class="atoztabbing-content all-alphabetsContent">
                            @foreach ($all_medcines as $key => $alphabet)
                          <div id="genric{{ $key }}-collapse" class="collapse" aria-labelledby="{{ $key }}-heading" data-parent="#accordion">
                              <div class="card-body">
                                <div class="showAll">
                                    <ul>
                                        @foreach ($alphabet as $alpha_medcine)
                                        <li>
                                            <a href="{{url('/'.$alpha_medcine['frontend_url']??'url')}}" target="_blank">{{ $alpha_medcine['generic_name']??'' }}</a>
                                        </li>

                                        @endforeach
                                        
                                    </ul>
                                </div>
                              </div>
                          </div>
                          @endforeach
                    
                      </div>
                      <!--Tabbing Details End--->
                      
                    </div>
                </div>
            </div>
        </div>
        
        <div class="alphabrand">
            <div class="alphalist">
            <p>The list of all Brand Drugs and / or their Generic Equivalents available for sale online may be seen by clicking on any of the letters below :</p>
                <div class="seelist-alphabet">
                    <div class="atoztabbing" id="accordion-generic-drugs">
                        <div class="atoztabbing-inner">
                            @foreach ($genric_medcines as $key => $alphabet1)
                            <div class="alpha-card" id="a-heading">
                                <a data-toggle="collapse" data-target="#other{{ $key }}-collapse" aria-expanded="false" aria-controls="{{$key}}-collapse">
                                  {{ $key }}
                                </a>
                            </div>
                            @endforeach
                            
                        </div>
                      
                      
                      <!--Tabbing Details--->
                      <div class="atoztabbing-content all-alphabetsContent">
                            @foreach ($genric_medcines as $key => $alphabet1)
                          <div id="other{{ $key }}-collapse" class="collapse" aria-labelledby="a-heading" data-parent="#accordion-generic-drugs">
                              <div class="card-body">
                                <div class="showAll">
                                    <ul>
                                        @foreach ($alphabet1 as $alpha_medcine1)
                                        <li>
                                            <a href="{{url('/'.$alpha_medcine1['frontend_url']??'url')}}" target="_blank">{{ $alpha_medcine1['other_names']??'' }}</a>
                                        </li>

                                        @endforeach
                                        
                                    </ul>
                                </div>
                              </div>
                          </div>
                          @endforeach
                          
                         
                      </div>
                      <!--Tabbing Details End--->
                      
                    </div>
                </div>
            </div>
        </div> --}}


                <div class="numnote"><strong>Tags : </strong>
                    @if ($homeSeo && $homeSeo->c_3_6_6_hyperlink_page_tags)
                        @php $meds_seo =  explode(',',$homeSeo->c_3_6_6_hyperlink_page_tags); @endphp
                        @if (count($meds_seo) > 0)
                            @foreach ($meds_seo as $seo)
                                <a href="{{ url('/') }}">{{ $seo }}</a>,
                            @endforeach
                        @endif
                    @endif

                </div>
            </div>

        </div>
    </div>
</div>
@endsection
